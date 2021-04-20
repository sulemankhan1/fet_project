<?php
class Subjects extends CI_Controller
{

    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('basic_model', 'bm');
        $this->load->model('subjects_model', 'sm');

        if (empty($this->session->userdata('username'))) {
            redirect('login');
        }
    }

    public function index() {

      $data = array(
        'title' => 'Subjects',
        'active_menu' => 'manage_subjects',
        'subjects' => $this->sm->getSubjects(),
      );

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('subjects/index');
      $this->load->view('footer');

    }

    public function add() {
      $this->load->model('Main_model');

      $data = array(
        'title' => 'Add New Subject',
        'active_menu' => 'manage_subjects',
        // 'campus' => $this->bm->getWhereRows('campus', 'is_archived', 0),
        'faculties' => $this->bm->getWhereRows('faculties', 'is_archived', 0),
      );

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('subjects/form');
      $this->load->view('footer');
    }

    public function save() {
      if($this->input->post()) {
        $data = $this->input->post();

        // for backend validation if error found where to redirect
        $redirect_url = isset($data['id']) && $data['id'] != "" ? 'edit_subject/'.hashids_encrypt($data['id']) : 'add_subject';

        // check if a subject with same title exists (only for add)
        if(@$data['id'] == "" && $this->sm->subjectAlreadyExist($data['subject_title']) > 0) {
          $this->session->set_flashdata(array('type' => 'error', 'msg' => 'A Subject with the Same Name Already Exist!', 'data' => $data));
          redirect($redirect_url);
        }

        // validation
        if($data['course_code'] == "" ||
            $data['subject_title'] == "" ||
            !isset($data['for_campus']) ||
            $data['for_campus'] == "" ||
            !isset($data['for_faculty']) ||
            $data['for_faculty'] == "" ||
            !isset($data['for_depart']) ||
            $data['for_depart'] == "") {
              $msg = 'Please Fill all Required Fields before Submitting!';
              if(isset($data['id'])) {
                $msg .= " Form is being Reset!";
            }

          $this->session->set_flashdata(array('type' => 'error', 'msg' => $msg, 'data' => $data));
          redirect($redirect_url);
        }
        $data['added_by'] = $this->session->userdata('user_id');

        if($data['id'] == "") {


          $data['id'] = $this->bm->insertRow('subjects', $data);
          $msg = 'Subject Added Successfully';
        } else {
          $this->bm->updateRow('subjects', $data, 'id', $data['id']);
          $msg = 'Subject Updated Successfully';
        }

        $this->session->set_flashdata(array('type' => 'success', 'msg' => $msg));
    		redirect('manage/subjects');
      }
    }
    public function edit($id) {

      $id = hashids_decrypt($id);
      // get Subject record
      $record = $this->sm->getSubject($id);

      $data = array (
        'title' => 'Update Subject',
        'active_menu' => 'manage_subjects',
        // 'campus' => $this->bm->getWhereRows('campus', 'is_archived', 0),
        'faculties' => $this->bm->getWhereRows('faculties', 'is_archived', 0),
        'record' => $record,
      );

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('subjects/form');
      $this->load->view('footer');
    }

    public function delete($id) {
      $id = hashids_decrypt($id);
      $this->bm->delete('subjects', 'id', $id);
      $this->session->set_flashdata(array('type' => 'success', 'msg' => 'Subject Deleted Successfully!'));
      redirect('manage/subjects');
    }
}
