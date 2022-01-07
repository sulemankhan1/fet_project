<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Notification extends CI_Controller
{

    function __construct() {
      parent::__construct();
      $this->load->model('Notifications_model', 'nm');
      // $this->load->model('Basic_model', 'bm');
      // validate user logged in
      if (empty($this->session->userdata('username'))) {
          redirect('login');
      }

    }

    public function index() {

      $data = array(
        'title' => 'Notifications',
        'active_menu' => 'view_notifications',
        'notifications' => $this->nm->getNotifications(),
      );

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('notifications/all_notifications');
      $this->load->view('footer');
    }

    public function new()
    {
      // redirect student to dashboard
      if ($this->session->user_type == 'STUDENT' || $this->session->user_type == 'OTHER') {
          redirect('dashboard');
      }
      $this->load->model('Main_model');

      $data = array(
        'title' => 'Add New Notification',
        'active_menu' => 'add_notification',
        'faculties' => $this->bm->getAll('faculties', 'id'),
        'notification_types' => $this->bm->getAll('notification_type','id'),
        'keywords' => "",
      );

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('notifications/new_notification');
      $this->load->view('footer');

    }

    public function save() {
      // redirect student to dashboard
      if ($this->session->user_type == 'STUDENT' || $this->session->user_type == 'OTHER') {
          redirect('dashboard');
      }
      if($this->input->post()) {
        $data = $this->input->post();
        // for backend validation if error found where to redirect
        $redirect_url = isset($data['id']) && $data['id'] != "" ? 'edit_notification/'.hashids_encrypt($data['id']) : 'new_notification';

        // check if a news with same title exists
        if(!isset($data['id']) && $this->nm->newsAlreadyExists($data['title'])) {
          $this->session->set_flashdata(array('type' => 'error', 'msg' => 'A News with the Same Title Already Exists!', 'data' => $data));
          redirect($redirect_url);
        }
        if($data['title'] == "" || $data['notify_type_id'] == "" || $data['description'] == "" || !isset($data['notification_for']) || $data['keywords'] == "") {
          $msg = 'Please Fill all Required Fields before Submitting!';
          if(isset($data['id'])) {
            $msg .= " Form is being Reset!";
          }
          $this->session->set_flashdata(array('type' => 'error', 'msg' => $msg, 'data' => $data));
          redirect($redirect_url);
        }

        if($_FILES['image']['name'] != "")  {
          // image is changed
          // delete old image
          if(isset($data['old_image']) && file_exists($data['old_image'])) {
            // if on edit remove old image from server
            unlink($data['old_image']);
          }

          $image_path = 'uploads/notifications_images/';
          $img_resp = $this->bm->uploadFile($_FILES['image'], $image_path);
          if($img_resp == 'error') {
            $this->session->set_flashdata(array('type' => 'error', 'msg' => 'Image Error', 'data' => $data));
            redirect($redirect_url);
          }
          $image_path .= $img_resp;

        } elseif($_FILES['image']['name'] == "" && isset($data['old_image'])) {
          // image is not changed use old image (for edit only)
          $image_path = $data['old_image'];
        } else {
          $image_path = "";
        }

        $data['image'] = $image_path;
        $data['publisher_id'] = $this->session->userdata('user_id');


        $keywords = $data['keywords'];
        unset($data['keywords']);
        if($data['id'] == "") {

          $data['id'] = $this->bm->insertRow('news_notifications', $data);
          $msg = 'Notification Added Successfully';
        } else {
          // remove old image from array
          unset($data['old_image']);
          $this->bm->updateRow('news_notifications', $data, 'id', $data['id']);
          $msg = 'Notification Updated Successfully';

          // delete all keywords
          $this->bm->deleteWithMultiWhere('keywords', array(
            'type' => 'news',
            'news_id' => $data['id']
          ));
        }

        // desctruct keywords if there are
        $keywords_entries = [];
        if($keywords != "") {
          $keywords = explode(",", $keywords);
          foreach($keywords as $keyword) {
            if($keyword != "") {
              $keywords_entries[] = array(
                'keyword' => $keyword,
                'news_id' => $data['id'],
                'type' => 'news',
              );
            }
          }
        }
        $this->bm->insertRows('keywords', $keywords_entries);

        $this->session->set_flashdata(array('type' => 'success', 'msg' => $msg));
    		redirect('view_notifications');
      }
    }

    public function edit($id) {
      // redirect student to dashboard
      if ($this->session->user_type == 'STUDENT' || $this->session->user_type == 'OTHER') {
          redirect('dashboard');
      }
      $id = hashids_decrypt($id);
      // get notification record
      $record = $this->nm->getNotification($id);
      // get notification keywords
      $keywords = $this->bm->getRowsWithMultipleWhere('keywords', array(
        'type' => 'news',
        'news_id' => $id,
      ));
      $keywords_txt = "";
      if(!empty($keywords)) {
        foreach($keywords as $keyword) {
          $keywords_txt .= "$keyword->keyword,";
        }
        $keywords_txt = substr($keywords_txt, 0, -1);
      }


      $data = array (
        'title' => 'Add New Notification',
        'active_menu' => 'add_notification',
        'faculties' => $this->bm->getAll('faculties', 'id'),
        'notification_types' => $this->bm->getAll('notification_type', 'id', 'ASC'),
        'record' => $record,
        'keywords' => $keywords_txt,
      );


      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('notifications/new_notification');
      $this->load->view('footer');
    }

    public function delete($id) {
      // redirect student to dashboard
      if ($this->session->user_type == 'STUDENT' || $this->session->user_type == 'OTHER') {
          redirect('dashboard');
      }
      $id = hashids_decrypt($id);
      $this->bm->delete('news_notifications', 'id', $id);
      $this->session->set_flashdata(array('type' => 'success', 'msg' => 'Notification Deleted Successfully!'));
      redirect('view_notifications');
    }

}
