<?php
class Classrooms extends CI_Controller
{

    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('basic_model', 'bm');
        $this->load->model('classrooms_model', 'cm');

        if (empty($this->session->userdata('username'))) {
            redirect('login');
        }
    }

    public function index() {

      $data = array(
        'title' => 'Class Rooms',
        'active_menu' => 'manage_classrooms',
        'records' => $this->cm->getRecords(),
      );

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('classrooms/index');
      $this->load->view('footer');

    }

    public function add() {
      $this->load->model('Main_model');

      $data = array(
        'title' => 'Add New Class Room',
        'active_menu' => 'manage_classrooms',
      );

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('classrooms/form');
      $this->load->view('footer');
    }

    public function save() {
      if($this->input->post()) {
        $data = $this->input->post();


        // for backend validation if error found where to redirect
        $redirect_url = isset($data['id']) && $data['id'] != "" ? 'edit_classroom/'.hashids_encrypt($data['id']) : 'add_classroom';


        echo $this->cm->classRoomAlreadyExist($data['room_no']);
        // check if a classroom with same name exists (only for add)
        if(@$data['id'] == "" && $this->cm->classRoomAlreadyExist($data['room_no']) > 0) {
          $this->session->set_flashdata(array('type' => 'error', 'msg' => 'A Class Room with the Same Room No. Already Exist!', 'data' => $data));
          redirect($redirect_url);
        }

        // validation
        if($data['name'] == "" || $data['room_no'] == "" ) {
          $msg = 'Please Fill all Required Fields before Submitting!';
          if(isset($data['id'])) {
            $msg .= " Form is being Reset!";
        }

          $this->session->set_flashdata(array('type' => 'error', 'msg' => $msg, 'data' => $data));
          redirect($redirect_url);
        }
        $data['added_by'] = $this->session->userdata('user_id');

        if($data['id'] == "") {

          $data['id'] = $this->bm->insertRow('class_rooms', $data);
          $msg = 'Class Room Added Successfully';
        } else {
          $this->bm->updateRow('class_rooms', $data, 'id', $data['id']);
          $msg = 'Class Room Updated Successfully';
        }

        $this->session->set_flashdata(array('type' => 'success', 'msg' => $msg));
    		redirect('manage/classrooms');
      }
    }
    public function edit($id) {

      $id = hashids_decrypt($id);
      // get Class Room record
      $record = $this->bm->getById('class_rooms', $id);

      $data = array (
        'title' => 'Update Class Room',
        'active_menu' => 'manage_classrooms',
        'record' => $record,
      );

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('classrooms/form');
      $this->load->view('footer');
    }

    public function delete($id) {
      $id = hashids_decrypt($id);
      $this->bm->delete('class_rooms', 'id', $id);
      $this->session->set_flashdata(array('type' => 'success', 'msg' => 'Class Room Deleted Successfully!'));
      redirect('manage/classrooms');
    }
}
