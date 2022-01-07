<?php

class Settings extends CI_Controller {

    function __construct() {
        parent::__construct();

        if (empty($this->session->userdata('username'))) {
            redirect('login');
        }
        if ($this->session->user_type == 'STUDENT' || $this->session->user_type == 'OTHER') {
            redirect('dashboard');
        }

    }

    public function index() {

      $data = [
        'title' => 'Settings',
        'active_menu' => 'settings',
        'logo' => $this->bm->getWhere('settings', 'name', 'LOGO'),
        'sidebar_img' => $this->bm->getWhere('settings', 'name', 'SIDEBAR_IMG'),
        'sidebar_color' => $this->bm->getWhere('settings', 'name', 'SIDEBAR_COLOR'),
        'name' => $this->bm->getWhere('settings', 'name', 'NAME'),
        'footer' => $this->bm->getWhere('settings', 'name', 'FOOTER'),
        'account_activity' => $this->bm->getWhere('settings', 'name', 'ACCOUNT_ACTIVITY'),
        'sliders' => $this->bm->getAll('slider_setting', 'id', 'desc')
      ];


      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('settings/index');
      $this->load->view('footer');
    }



    public function save_settings()
    {

      $p = $this->input->post();

      $array['value'] = '';
      // get old session settings
      $settings = $this->session->userdata['settings'];

      switch ($p['type']) {

        case 'general_setting':

          //sidebar_logo
          $logo = $_FILES['logo'];

          // logo image
          $img = "";
          if($logo['name'] != "") {
            $img = $this->bm->uploadFile($logo, 'uploads/sidebar_logo');
            $array['value'] = $img;
            $this->bm->updateRow('settings',$array,'name','LOGO');

            // delete old image
            if(file_exists('uploads/sidebar_logo/'.$settings['LOGO'])) {
              unlink('uploads/sidebar_logo/'.$settings['LOGO']);
            }

          } else {
            // if image not changed use old image
            $img = $settings['LOGO'];
          }

          //sidebar_img
          $sidebar_img = $_FILES['sidebar_img'];

          $sidebar_img_name = "";
          if($sidebar_img['name'] != "") {
            $sidebar_img_name = $this->bm->uploadFile($sidebar_img, 'uploads/sidebar_img');
            $array['value'] = $sidebar_img_name;
            $this->bm->updateRow('settings',$array,'name','SIDEBAR_IMG');

            // delete old image
            if(file_exists('uploads/sidebar_img/'.$settings['SIDEBAR_IMG'])) {
              unlink('uploads/sidebar_img/'.$settings['SIDEBAR_IMG']);
            }
          } else {
            $sidebar_img_name = $settings['SIDEBAR_IMG'];
          }


          $array['value'] = $p['name'];
          if ($array['value'] != '') {
            $this->bm->updateRow('settings',$array,'name','NAME');
          }

          $array['value'] = $p['footer'];

          if ($array['value'] != '') {

            $this->bm->updateRow('settings',$array,'name','FOOTER');

          }

          // sessoin settings
          $setting_update = [
              'NAME' => $p['name'],
              'FOOTER' => $p['footer']
          ];

          // change logo/sidebar bg in session if changed
          if($img != "") {
            $setting_update['LOGO'] = $img;
          }



          if($sidebar_img_name != "") {
            $setting_update['SIDEBAR_IMG'] = $sidebar_img_name;
          }


          $settings =array_replace($settings,$setting_update);

          $this->session->set_userdata('settings', $settings);

          break;

          case 'slider':

            //slider_image
            $slider_image = $_FILES['slider_image'];

            $img = $this->bm->uploadMultiFiles($slider_image, 'uploads/slider_image');

            if (count($p['title']) > 0) {

              foreach ($p['title'] as $key => $v) {

                  $arr[] = [

                  'image' => $img[$key],
                  'title' => $p['title'][$key],
                  'title_color' => $p['title_color'][$key],
                  'title_link' => $p['title_link'][$key],
                  'description' => $p['description'][$key],
                  'description_color' => $p['description_color'][$key],
                  'description_link' => $p['description_link'][$key]

                ];

              }

              $this->bm->insertRows('slider_setting',$arr);

            }

            break;

          case 'main_general_setting':

            //account_activity

            $array['value'] = $p['account_active'];

            if ($array['value'] != '')
            {

              $this->bm->updateRow('settings',$array,'name','ACCOUNT_ACTIVITY');

            }

            break;


      }

        $this->session->set_flashdata(array('response' => 'success', 'msg' => 'Setting Updated Successfully'  ));
        redirect('settings');

    }

    public function update_sidebar_clr()
    {

      $sidebar_color = $this->input->post('sidebar_clr');

      $arr = [
        'value' => $sidebar_color
      ];

      $this->bm->updateRow('settings',$arr, 'name', 'SIDEBAR_COLOR');

      $settings=$this->session->userdata['settings'];

      $setting_update = ['SIDEBAR_COLOR' => $sidebar_color];

      $settings =array_replace($settings,$setting_update);

      $this->session->set_userdata('settings', $settings);

    }

    public function delete_setting($id,$type)
    {

      $id = hashids_decrypt($id);

      switch ($type) {
        case 'slider_setting':
          $this->bm->delete('slider_setting','id',$id);
          $this->session->set_flashdata(array('response' => 'success', 'msg' => 'Slider Deleted Successfully' ));
          redirect('settings');
          break;
      }


    }

    public function edit_slider($id)
    {

      $data['edit'] = $this->bm->getWhere('slider_setting', 'id', $id);

      $output = $this->load->view('settings/edit_slider',$data,true);

      echo $output;

    }

    public function update_slider()
    {

      $p = $this->input->post();
      $slider_image = $_FILES['slider_image'];

      if($slider_image['name'] != "") {
        $img = $this->bm->uploadFile($slider_image, 'uploads/slider_image');

        // delete old image
        if(file_exists('uploads/slider_image/'.$p['old_img'])) {
          unlink('uploads/slider_image/'.$p['old_img']);
        }
      } else {
        $img = $p['old_img'];
      }

      $arr = [
        'image' => $img,
        'title' => $p['title'],
        'title_color' => $p['title_color'],
        'title_link' => $p['title_link'],
        'description' => $p['description'],
        'description_color' => $p['description_color'],
        'description_link' => $p['description_link']

      ];

      $this->bm->updateRow('slider_setting',$arr,'id',$p['id']);

      $this->session->set_flashdata(array('response' => 'success', 'msg' => 'Slider Setting Updated Successfully' ));
      redirect('settings');

    }

    public function change_slider_status($id,$type)
    {
      $arr = [];
      if ($type == 1) {
        $arr = [
          'active' => 0
        ];
      }
      else{
        $arr = [
          'active' => 1
        ];
      }

      $id = hashids_decrypt($id);

      $this->bm->updateRow('slider_setting',$arr,'id',$id);

      $this->session->set_flashdata(array('response' => 'success', 'msg' => 'Slider Setting Updated Successfully' ));
      redirect('settings');

    }

    function get_sliders()
    {
        $data['sliders'] = $this->bm->getAll('slider_setting','id','desc');

        echo $this->load->view('settings/sliders',$data,true);
    }




}
