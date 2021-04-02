<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Notification extends CI_Controller
{

    function __construct() {
      parent::__construct();
      $this->load->model('Notifications_model', 'nm');
      // validate user logged in
      if (empty($this->session->userdata('username'))) {
          redirect('login');
      }
    }

    public function index() {

      $data = array(
        'title' => 'Notifications',
        'active_menu' => 'notifications',
        'notifications' => $this->nm->getNotifications(),
      );

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('notifications/all_notifications');
      $this->load->view('footer');
    }

    public function new()
    {

      $this->load->model('Main_model');

      $data = array(
        'title' => 'Add New Notification',
        'active_menu' => 'add_notification',
        'faculties' => $this->bm->getAll('faculty', 'FAC_ID'),
        'notification_types' => $this->bm->getAll('notification_type', 'NOTIFY_TYPE_ID', 'ASC'),
      );

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('notifications/new_notification');
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

}
