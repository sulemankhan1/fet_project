<?php
class Admin extends CI_Controller
{

    function __construct(){
        parent::__construct();
        $this->load->library('session');
        // System Notifications
        $this->load->library('notifications');
        if (empty($this->session->userdata('username'))) {
            redirect('login');
        }
    }

    public function dashboard()
    {
      $this->load->model('Main_model');

      $data = [
        'title' => 'Dashboard',
        'active_menu' => 'dashboard'
      ];

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $user_type = $this->session->user_type;
      switch ($user_type) {
        case 'SUPERADMIN':
          $this->load->view('dashboard/index');
          break;
        case 'ADMIN':
          $this->load->view('dashboard/index');
          break;
        case 'TEACHER':
          $this->load->view('dashboard/teacher_index');
          break;
        case 'FACULTY':
          $this->load->view('dashboard/index');
          break;
        case 'STUDENT':
        
          $this->load->view('dashboard/student_index');
          break;
        case 'OTHER':
          // code...
          break;
      }

      $this->load->view('footer');

    }


    public function show_all_notifications()
    {

      $data = array (
        'title' => __('notifications'),
        'notifications' => $this->notifications->getAllForUser(),
      );

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('notifications/all');
      $this->load->view('footer');

    }

    public function mark_all_read_notifications()
    {

      $this->notifications->mark_all_seen();

      redirect('notifications');

    }

    public function open_notification($notification_id)
    {

      echo "Opening your Notification.... Please wait...!";

      $this->notifications->open_notification($notification_id);

    }


}
