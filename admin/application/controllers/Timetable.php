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
      date_default_timezone_set('asia/karachi');
    }

    public function index() {

      $data = array(
        'title' => 'Timetable',
        'active_menu' => 'view_timetables',
        'records' => $this->tm->getRecords(),
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

          $image_path = 'uploads/timetables/';
          $image_path .= $this->bm->uploadFile($_FILES['IMAGE_PATH'], $image_path);

        } elseif($_FILES['IMAGE_PATH']['name'] == "" && isset($data['OLD_IMAGE_PATH'])) {
          // image is not changed use old image (for edit only)
          $image_path = $data['OLD_IMAGE_PATH'];
        } else {
          $image_path = "";
        }


        $data['IMAGE_PATH'] = $image_path;
        $data['user_id'] = $this->session->userdata('user_id');

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

      $record = $this->tm->getRecord($id);

      if(empty($record)) {
        echo "404 Please go back!";
        exit;
      }
      // $record->evening_morning = 'morning';
      $data = array(
        'title' => 'Customize Timetable',
        // 'active_menu' => 'add_timetable',
        'menu_collapsed' => true,
        'record' => $record,
        'morning_start_time' => '08:00 am',
        'morning_end_time' => '01:00 pm',
        'evening_start_time' => '02:00 pm',
        'evening_end_time' => '07:00 pm',
        'class_duration' => 45,
        'teachers' => $this->tm->getTeachers($record),
        'subjects' => $this->tm->getSubjects($record),
        'class_rooms' => $this->tm->getClassRooms($record),
      );
      // echo "<pre>";
      // print_r($record);
      // die();

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('timetable/customize');
      $this->load->view('footer');
    }

    public function getTimetSettings($evening_morning) {

      $morning_start_time = '08:00 am';
      $morning_end_time = '01:00 pm';
      $evening_start_time = '02:00 pm';
      $evening_end_time = '07:00 pm';
      $class_duration = 45;

      if($evening_morning == 'morning') {
        $start_time = $morning_start_time; // day start time
        $end_time = $morning_end_time; // day end time
      } else {
        $start_time = $evening_start_time; // day start time
        $end_time = $evening_end_time; // day end time
      }

      // preparing an array to be stored in localstorage and sent to frontend
      $data = array();
      while(date('H', strtotime($start_time)) < date('H', strtotime($end_time))) {
        $arr = [];
        // current class end time
        $class_end_time = date('h:i a', strtotime($start_time." +$class_duration minutes"));

        $arr['time_from'] = $start_time;
        $arr['time_to'] = ((date('H:i', strtotime($class_end_time)) > (date('H:i', strtotime($end_time))))?$end_time:$class_end_time);
        $arr['teacher_id'] = 0;
        $arr['subject_id'] = 0;
        $arr['classroom_id'] = 0;

        $start_time = $class_end_time;
        $data[] = $arr;
      }

      // expanding daily classes for each day of week
      $new_data = array();
      $week_days = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday'];
      $day_index_counter = 0;
      foreach($week_days as $day) {
        foreach($data as $row) {
          $row['day'] = $day;
          $new_data[] = $row;
        }
      }

      echo json_encode($new_data);
    }

}
