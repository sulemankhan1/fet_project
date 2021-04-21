<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Timetable extends CI_Controller
{

    function __construct() {
      parent::__construct();
      $this->load->model('timetable_model', 'tm');
      $this->load->model('Basic_model', 'bm');
      // validate user logged in
      if (empty($this->session->userdata('username'))) {
          redirect('login');
      }

    }

    public function index() {

      $data = array(
        'title' => 'Timetable',
        'active_menu' => 'view_timetables',
      );

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('timetable/index');
      $this->load->view('footer');
    }

    public function new() {

      $data = array(
        'title' => 'Add New Timetable',
        // 'active_menu' => 'add_timetable',
        // 'menu_collapsed' => true,
        'campuses' => $this->bm->getWhereRows('campus', 'is_archived', 0),
        'faculties' => $this->bm->getWhereRows('faculties', 'is_archived', 0),
      );

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('timetable/new_timetable');
      $this->load->view('footer');
    }

    public function save() {
      if($this->input->post()) {
        $data = $this->input->post();

        if($_FILES['IMAGE_PATH']['name'] != "")  {
          // image is changed
          // delete old image
          if(isset($data['OLD_IMAGE_PATH']) && file_exists($data['OLD_IMAGE_PATH'])) {
            // if on edit remove old image from server
            unlink($data['OLD_IMAGE_PATH']);
          }

          $image_path = 'uploads/notifications_images/';
          $image_path .= $this->bm->uploadFile($_FILES['IMAGE_PATH'], $image_path);

        } elseif($_FILES['IMAGE_PATH']['name'] == "" && isset($data['OLD_IMAGE_PATH'])) {
          // image is not changed use old image (for edit only)
          $image_path = $data['OLD_IMAGE_PATH'];
        } else {
          $image_path = "";
        }


        $data['IMAGE_PATH'] = $image_path;
        $data['PUBLISHER_ID'] = $this->session->userdata('USER_ID');

        if($data['NOTIFICATION_ID'] == "") {
          $this->bm->insertRow('news_notifications', $data);
          $msg = 'Notification Added Successfully';
        } else {
          // remove old image from array
          unset($data['OLD_IMAGE_PATH']);
          $this->bm->updateRow('news_notifications', $data, 'NOTIFICATION_ID', $data['NOTIFICATION_ID']);
          $msg = 'Notification Updated Successfully';
        }


        $this->session->set_flashdata(array('type' => 'success', 'msg' => $msg));
    		redirect('view_notifications');
      }
    }

    public function edit($id) {
      $id = hashids_decrypt($id);

      $data = array(
        'title' => 'Add New Notification',
        'active_menu' => 'add_notification',
        'faculties' => $this->bm->getAll('faculty', 'FAC_ID'),
        'notification_types' => $this->bm->getAll('notification_type', 'NOTIFY_TYPE_ID', 'ASC'),
        'record' => $this->nm->getNotification($id),
      );

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('notifications/new_notification');
      $this->load->view('footer');
    }

    public function delete($id) {
      $id = hashids_decrypt($id);
      $this->bm->delete('news_notifications', 'NOTIFICATION_ID', $id);
      $this->session->set_flashdata(array('type' => 'success', 'msg' => 'Notification Deleted Successfully!'));
      redirect('view_notifications');
    }

    // for submission (img based timetable)
    //and redirecting to custom timetable creation page
    public function create() {
      if($this->input->post()) {
        $data = $this->input->post();
        $data['type'] = $data['tt_type'];
        unset($data['tt_type']);
        $data['evening_morning'] = $data['tt_for'];
        unset($data['tt_for']);

        // for backend validation if error found where to redirect
        $redirect_url = isset($data['id']) && $data['id'] != "" ? 'edit_timetable/'.hashids_encrypt($data['id']) : 'new_timetable';

        // Validation
        // fields validation
        if($data['campus_id'] == "" ||
        $data['faculty_id'] == "" ||
        $data['depart_id'] == "" ||
        $data['part'] == "" ||
        $data['semester'] == "" ||
        $data['year'] == "" ||
        $data['evening_morning'] == "" ||
        $data['type'] == ""
      ) {
        $this->session->set_flashdata(array('type' => 'error',
        'msg' => 'Please Fill All Fields before Submitting. Form is being Rest'));
        redirect($redirect_url);
      }
        // check if a timetable for same class Already exist
        if(@$data['id'] == "" && $this->tm->alreadyExist($data) > 0) {
          $this->session->set_flashdata(array('type' => 'error',
          'msg' => 'Timetable for Same Class Already Exist. Please consider editing that Timetable!', 'data' => $data));
          redirect($redirect_url);
        }

        // check type
        if($data['type'] == 'image') {
          // if image then upload image

          // validate image given
          if($_FILES['tt_image']['name'] == "") {
            $this->session->set_flashdata(array('type' => 'error',
            'msg' => 'Image Not provided. please fill Form again!', 'data' => $data));
            redirect($redirect_url);
          }

          // ***** IMAGE MEME TYPE NEEDS TO BE CHECKED HERE *****
          $directory = 'uploads/timetables/';
          $data['image'] = $this->bm->uploadFile($_FILES['tt_image'], $directory);

          if(isset($data['id']) && $data['id'] != "") {
            // edit
          } else {
            // add
            $this->bm->insertRow('timetable', $data);
            $this->session->set_flashdata(array('type' => 'success',
            'msg' => 'Timetable has been Added!'));
            redirect('view_timetables');
          }

        } elseif($data['type'] == 'custom') {
          // if custom then save data and redirect

          if(isset($data['id']) && $data['id'] != "") {
            // edit
          } else {
            // add
            $id = $this->bm->insertRow('timetable', $data);
            redirect('customize_timetable/'.hashids_encrypt($id));
          }
        }
      }
    }

    public function customize_timetable($id) {
      $id = hashids_decrypt($id);

      $data = array(
        'title' => 'Customize Timetable',
        // 'active_menu' => 'add_timetable',
        'menu_collapsed' => true,
      );

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('timetable/customize');
      $this->load->view('footer');
    }

}
