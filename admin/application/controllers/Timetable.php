<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Timetable extends CI_Controller
{

    function __construct() {
      parent::__construct();
      $this->load->model('timetable_model', 'tm');
      $this->load->model('Basic_model', 'bm');
      // System Notifications
      $this->load->library('notifications');
      // validate user logged in
      if (empty($this->session->userdata('username'))) {
          redirect('login');
      }
      date_default_timezone_set('asia/karachi');

    }

    public function index() {
      if ($this->session->user_type == 'STUDENT' || $this->session->user_type == 'OTHER') {
          redirect('dashboard');
      }

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

    public function new($data = '') {
      if ($this->session->user_type == 'STUDENT' || $this->session->user_type == 'OTHER') {
          redirect('dashboard');
      }
      $data = array(
        'title' => 'Add New Timetable',
        'active_menu' => 'add_timetable',
        // 'menu_collapsed' => true,
        'campuses' => $this->bm->getWhereRows('campus', 'is_archived', 0),
        'faculties' => $this->bm->getWhereRows('faculties', 'is_archived', 0),
        'record' => $data,
      );

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('timetable/new_timetable');
      $this->load->view('footer');
    }

    // public function save() {
    //   if($this->input->post()) {
    //     $data = $this->input->post();
    //
    //     if($_FILES['IMAGE_PATH']['name'] != "")  {
    //       // image is changed
    //       // delete old image
    //       if(isset($data['OLD_IMAGE_PATH']) && file_exists($data['OLD_IMAGE_PATH'])) {
    //         // if on edit remove old image from server
    //         unlink($data['OLD_IMAGE_PATH']);
    //       }
    //
    //       $image_path = 'uploads/timetables/';
    //       $image_path .= $this->bm->uploadFile($_FILES['IMAGE_PATH'], $image_path);
    //
    //     } elseif($_FILES['IMAGE_PATH']['name'] == "" && isset($data['OLD_IMAGE_PATH'])) {
    //       // image is not changed use old image (for edit only)
    //       $image_path = $data['OLD_IMAGE_PATH'];
    //     } else {
    //       $image_path = "";
    //     }
    //
    //
    //     $data['IMAGE_PATH'] = $image_path;
    //     $data['user_id'] = $this->session->userdata('user_id');
    //
    //     if($data['NOTIFICATION_ID'] == "") {
    //       $this->bm->insertRow('news_notifications', $data);
    //       $msg = 'Notification Added Successfully';
    //     } else {
    //       // remove old image from array
    //       unset($data['OLD_IMAGE_PATH']);
    //       $this->bm->updateRow('news_notifications', $data, 'NOTIFICATION_ID', $data['NOTIFICATION_ID']);
    //       $msg = 'Notification Updated Successfully';
    //     }
    //
    //
    //     $this->session->set_flashdata(array('type' => 'success', 'msg' => $msg));
    // 		redirect('view_notifications');
    //   }
    // }

    public function edit($id) {
      $id = hashids_decrypt($id);
      if ($this->session->user_type == 'STUDENT' || $this->session->user_type == 'OTHER') {
          redirect('dashboard');
      }
      $data = array(
        'title' => 'Update Timetable',
        'active_menu' => 'view_timetables',
        // 'menu_collapsed' => true,
        'campuses' => $this->bm->getWhereRows('campus', 'is_archived', 0),
        'faculties' => $this->bm->getWhereRows('faculties', 'is_archived', 0),
        'record' => $this->bm->getById('timetable', $id),
      );

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('timetable/new_timetable');
      $this->load->view('footer');
    }

    public function delete($id) {
      if ($this->session->user_type == 'STUDENT' || $this->session->user_type == 'OTHER') {
          redirect('dashboard');
      }
      $id = hashids_decrypt($id);
      $this->bm->delete('news_notifications', 'NOTIFICATION_ID', $id);
      $this->session->set_flashdata(array('type' => 'success', 'msg' => 'Notification Deleted Successfully!'));
      redirect('view_notifications');
    }

    // for submission (img based timetable)
    //and redirecting to custom timetable creation page
    public function create() {
      if ($this->session->user_type == 'STUDENT' || $this->session->user_type == 'OTHER') {
          redirect('dashboard');
      }
      if($this->input->post()) {
        $data = $this->input->post();
        $id = isset($data['id']) && $data['id'] != "" ? $data['id'] : '';

        $data['type'] = $data['tt_type'];
        unset($data['tt_type']);

        $data['evening_morning'] = $data['tt_for'];
        unset($data['tt_for']);

        // for backend validation if error found where to redirect
        $redirect_url = isset($data['id']) && $data['id'] != "" ? 'edit_timetable/'.hashids_encrypt($id) : 'new_timetable';

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
        // check if a timetable for same class Already exist then redirect to form without submission
        if(@$data['id'] == "" && $this->tm->alreadyExist($data, $id) > 0) {
          $this->session->set_flashdata(array('type' => 'error',
          'msg' => 'Timetable for Same Class Already Exist. Please consider editing that Timetable!', 'data' => $data));
          redirect($redirect_url);
        }
        //
        // unset($data['old_image']);

        // check type
        if($data['type'] == 'image') {
          // if image then upload image

          // validate image given (for add tiemtable only)
          if($id == "" && $_FILES['tt_image']['name'] == "") {
            $this->session->set_flashdata(array('type' => 'error',
            'msg' => 'Image Not provided. please fill Form again!', 'data' => $data));
            redirect($redirect_url);
          }

          // ***** IMAGE MEME TYPE NEEDS TO BE CHECKED HERE *****
          if($_FILES['tt_image']['name'] != "") {
            $directory = 'uploads/timetables/';
            $data['image'] = $this->bm->uploadFile($_FILES['tt_image'], $directory);
            // DELETE OLD IMAGE FROM DIRECTORY
          } else {
            // image not set then select old image
            $data['image'] = $data['old_image'];
          }
          unset($data['old_image']);

          $data['user_id'] = $this->session->user_id;

          if(isset($data['id']) && $data['id'] != "") {
            // edit
            // set updated datetime
            $data['datetime_updated'] = date('Y-m-d h:i', strtotime('now'));

            // Add System Notification to class Students that timetable updated
            $_data = json_decode(json_encode($data)); // convert to object
            $batch_year = $this->get_batch_year($_data->part); // getting batch year
            $students = $this->tm->getStudents($_data, $batch_year);

            foreach($students as $std) {
              $this->notifications->add('Your Class Timetable has been Changed!', 'admin/dashboard', $std->id);
            }

            unset($data['id']);

            $this->bm->updateRow('timetable', $data, 'id', $id);
            $this->session->set_flashdata(array('type' => 'success',
            'msg' => 'Timetable has been Updated!'));
            redirect('view_timetables');
          } else {
            // add
            $data['published'] = 1;
            $this->bm->insertRow('timetable', $data);

            $this->session->set_flashdata(array('type' => 'success',
            'msg' => 'Timetable has been Added!'));
            redirect('view_timetables');
          }

        } elseif($data['type'] == 'custom') {
          // if custom then save data and redirect
          unset($data['old_image']);

          if(isset($data['id']) && $data['id'] != "") {
            // edit
            unset($data['id']);
            $data['datetime_updated'] = date('Y-m-d h:i', strtotime('now'));

            $this->bm->updateRow('timetable', $data, 'id', $id);
          } else {
            // add
            $id = $this->bm->insertRow('timetable', $data);
          }

          redirect('customize_timetable/'.hashids_encrypt($id));
        }
      }
    }

    public function customize_timetable($id) {
      if ($this->session->user_type == 'STUDENT' || $this->session->user_type == 'OTHER') {
          redirect('dashboard');
      }
      $id = hashids_decrypt($id);
      $record = $this->tm->getRecord($id);
      $detail_records = $this->tm->getDetailRecords($id);
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
        'id' => $id,
        'detail_records' => $detail_records,
      );

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('timetable/customize');
      $this->load->view('footer');
      $this->load->view('timetable/scripts');

    }

    public function getTimetSettings($evening_morning, $timetable_id = "") {

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

      if($timetable_id != "") {
        $detail_records = $this->tm->getDetailRecords($timetable_id);
        $records = array();
        foreach($new_data as $rec) {
          foreach($detail_records as $d_rec) {
            if($rec['time_from'] == $d_rec->time_from &&
            $rec['time_to'] == $d_rec->time_to &&
            $rec['day'] == $d_rec->day) {
              $rec['teacher_id'] = $d_rec->teacher_id;
              $rec['subject_id'] = $d_rec->subject_id;
              $rec['classroom_id'] = $d_rec->classroom_id;
            }
          }
          $records[] = $rec;
        }
      }

      echo json_encode($records);
    }

    public function finish() {

      if($this->input->post()) {
        $data = $this->input->post();
        $data['timetable_data'] = json_decode($data['timetable_data']);

        $timetable_id = $data['timetable_id'];

        // filtering data to remove empty cells
        $timetable_details = array();
        foreach($data['timetable_data'] as $row) {
          if($row->teacher_id != 0 || $row->subject_id != 0 || $row->classroom_id != 0) {
            $row->timetable_id = $data['timetable_id'];
            $timetable_details[] = $row;
          }
        }
        if(empty($timetable_details)) {
          echo json_encode(array('error' => true));
        }

        if(!empty($timetable_details)) {
          // save bach
          if($timetable_id != "") {
            $this->bm->delete('timetable_details', 'timetable_id', $timetable_id);
            // update datetime updated
            $d['datetime_updated'] = date('Y-m-d h:i', strtotime('now'));
            $this->bm->updateRow('timetable', $d, 'id', $data['timetable_id']);
          }
          $this->bm->insertRows('timetable_details', $timetable_details);

          if($data['draft'] == "") {
            // publish timetable
            $this->bm->updateRow('timetable', array('published' => 1), 'id', $data['timetable_id']);
          }

          echo json_encode(array('location' => site_url('view_timetables')));
        }
      }
    }

    public function change_status($id,$type) {
      if ($this->session->user_type == 'STUDENT' || $this->session->user_type == 'OTHER') {
          redirect('dashboard');
      }
      if ($type == 1) {
        $arr = [
          'published' => 0
        ];
      } else {
        $arr = [
          'published' => 1
        ];
      }

      $id = hashids_decrypt($id);

      $this->bm->updateRow('timetable',$arr,'id',$id);

      $this->session->set_flashdata(array('response' => 'success', 'msg' => 'Timetable Updated Successfully' ));
      redirect('view_timetables');

    }

    public function send_timetable($id) {
      if ($this->session->user_type == 'STUDENT' || $this->session->user_type == 'OTHER') {
          redirect('dashboard');
      }
      $id = hashids_decrypt($id);
      $record = $this->tm->getRecord($id);

      $batch_year = $this->get_batch_year($record->part);

      $data = array(
        'title' => 'Timetable',
        'active_menu' => 'view_timetables',
        'record' => $record,
        'students' => $this->tm->getStudents($record, $batch_year),
      );

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('timetable/send_timetable');
      $this->load->view('footer');
    }

    public function send() {
      if ($this->session->user_type == 'STUDENT' || $this->session->user_type == 'OTHER') {
          redirect('dashboard');
      }
      if($this->input->post()) {
        $emails = $this->input->post('users_emails');
        //Validate Emails
        $emails_list = array();
        foreach($emails as $email) {
          if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emails_list[] = $email;
          }
        }


        $this->load->library('email');
        $this->email->from('system@sulemanibrahim.com', 'FET FMS');
        $this->email->to(implode(", ", $emails_list));

        $this->email->subject('Your Class Timetable has been Updated');
        $this->email->message('Hello Student Your class Timetable has been changed please find your New Timetable here.');

        // $this->email->send();
        $this->session->set_flashdata(array('type' => 'success', 'msg' => 'Emails Sent to '.count($emails_list).' Students Successfully!'));
        redirect('view_timetables');
      }
    }

    private function get_batch_year($part) {
      switch ($part) {
        case 1: // part 1
          $batch_year = date('Y'); // current year
          break;
        case 2: // part 2
          $batch_year = date('Y', strtotime('-1 year')); // current year
          break;
        case 3: // part 3
          $batch_year = date('Y', strtotime('-2 year')); // current year
          break;
        case 4: // part 4
          $batch_year = date('Y', strtotime('-3 year')); // current year
          break;
        case 5: // part 5
          $batch_year = date('Y', strtotime('-4 year')); // current year
          break;

        default:
          $batch_year = date('Y'); // by default current year
          break;
      }

      return $batch_year;
    }
    public function student_timetable() {
      $data = array(
        'title' => 'Timetable',
        'active_menu' => 'timetable',
        'timetables' => $this->tm->getRecords(),
      );

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('timetable/student_timetable');
      $this->load->view('footer');
    }

    public function fetch_timetable() {
  		$id = $this->input->post('id');
  		$timetable_record = $this->bm->getById('timetable', $id);
  		if(!empty($timetable_record)) {
  			if($timetable_record->type == "image") {
  				// Image Timetable
  				echo json_encode(array('type' => 'success', 'data' => array('type' => $timetable_record->type, 'src' =>$timetable_record->image)));
  				die();
  			} else {
  				// custom timetable

  	      $detail_records = $this->tm->getDetailRecords($id);

  				$data = array(
  	        'record' => $timetable_record,
  	        'morning_start_time' => '08:00 am',
  	        'morning_end_time' => '01:00 pm',
  	        'evening_start_time' => '02:00 pm',
  	        'evening_end_time' => '07:00 pm',
  	        'class_duration' => 45,
  	        'id' => $id,
  	        'detail_records' => $detail_records,
  	      );
  				$timetable = $this->load->view('timetable/timetable_view', $data, true);
  				echo json_encode(array('type' => 'success', 'data' => array('type' => $timetable_record->type, 'content' => $timetable)));
  				// echo json_encode(array('type' => 'success', 'data' => array('type' => $timetable_record->type, 'content' => htmlspecialchars($timetable))));
  				die();
  			}
  		}

  		echo json_encode(array('type' => "error"));
  	}
}
