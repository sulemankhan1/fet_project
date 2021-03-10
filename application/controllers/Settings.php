<?php

class Settings extends CI_Controller {

    function __construct() {
        parent::__construct();

        if (empty($this->session->userdata('username'))) {
            redirect('login');
        }

    }

    public function index() {

      $data = [
        'title' => __('general_setting_txt'),
        'active_menu' => 'settings',
        'settings' => $this->bm->getById('settings', 1)
      ];

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('settings/index');
      $this->load->view('footer');
    }



    public function save_settings() {

      if($this->input->post()) {

        //logo
        $logo = $_FILES['logo'];

        //background-img
        $sidebar_img = $_FILES['sidebar_img'];

        $name = $this->input->post('name', TRUE);
        $about = $this->input->post('about', TRUE);
        $terms = $this->input->post('terms', TRUE);
        $footer = $this->input->post('footer', TRUE);
        $department_email = $this->input->post('department_email', TRUE);

        $array = [];


        if($logo['name'] != "") {
          $img = $this->bm->uploadFile($logo, 'uploads');
          $array['logo'] = $img;
          $this->session->set_userdata('logo', $img);
        }

        if($sidebar_img['name'] != "") {
          $sidebar_img_name = $this->bm->uploadFile($sidebar_img, 'uploads');
          $array['sidebar_img'] = $sidebar_img_name;
          $this->session->set_userdata('sidebar_img', $sidebar_img_name);
        }

        // FOR THE PURPOSE TO SHOW ON ADMIN PANEL
        $this->session->set_userdata('name', $name);
        $this->session->set_userdata('about', $about);
        $this->session->set_userdata('terms', $terms);
        $this->session->set_userdata('footer', $footer);
        $this->session->set_userdata('department_email', $department_email);

        $array['name'] = $name;
        $array['about'] = $about;
        $array['terms'] = $terms;
        $array['footer'] = $footer;
        $array['department_email'] = $department_email;


        $this->bm->updateRow('settings',$array, 'id', 1);
        $this->session->set_flashdata(array('response' => 'success', 'msg' => 'Settings Updated Successfully'  ));
        redirect('settings');

      }

    }

    public function update_sidebar_clr() {

      $sidebar_color = $this->input->post('sidebar_clr');

      $arr = [
        'sidebar_color' => $sidebar_color
      ];

      $this->bm->updateRow('setting',$arr, 'id', 1);
      $this->session->set_userdata('sidebar_color',$sidebar_color);
    }


}
