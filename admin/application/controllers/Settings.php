<?php

class Settings extends CI_Controller {

    function __construct() {
        parent::__construct();

        // if (empty($this->session->userdata('username'))) {
        //     redirect('login');
        // }

    }

    public function index() {

      $data = [
        'title' => 'Settings',
        'active_menu' => 'settings',
        'logo' => $this->bm->getWhere('admin_panel_setting', 'name', 'LOGO'),
        'sidebar_img' => $this->bm->getWhere('admin_panel_setting', 'name', 'SIDEBAR_IMG'),
        'sidebar_color' => $this->bm->getWhere('admin_panel_setting', 'name', 'SIDEBAR_COLOR'),
        'name' => $this->bm->getWhere('admin_panel_setting', 'name', 'NAME'),
        'footer' => $this->bm->getWhere('admin_panel_setting', 'name', 'FOOTER'),
        'account_activity' => $this->bm->getWhere('general_setting', 'name', 'ACCOUNT_ACTIVITY'),
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

      switch ($p['type']) {

        case 'general_setting':
        
          //sidebar_logo
          $logo = $_FILES['logo'];

          if($logo['name'] != "") {
            $img = $this->bm->uploadFile($logo, 'uploads/sidebar_logo');
            $array['value'] = $img;
            $this->session->set_userdata('logo', $img);
          }

          if ($array['value'] != '') {
            
            $this->bm->updateRow('admin_panel_setting',$array,'name','LOGO');
          
          }

          //sidebar_img
          if($p['sidebar_img'] != "") {
            $sidebar_img_name = $this->bm->uploadFile($sidebar_img, 'uploads');
            $array['value'] = $sidebar_img_name;
            $this->session->set_userdata('sidebar_img', $sidebar_img_name);
          }
    
          if ($array['value'] != '') {

            $this->bm->updateRow('admin_panel_setting',$array,'name','SIDEBAR_IMG');

          }
          
          $array['value'] = $p['name'];

          if ($array['value'] != '') {

            $this->bm->updateRow('admin_panel_setting',$array,'name','NAME');

            $this->session->set_userdata('footer', $p['name']);

          }

          $array['value'] = $p['footer'];
          
          if ($array['value'] != '') {

            $this->bm->updateRow('admin_panel_setting',$array,'name','FOOTER');

            $this->session->set_userdata('footer', $p['footer']);

          }
          
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

              $this->bm->updateRow('general_setting',$array,'name','ACCOUNT_ACTIVITY');

            }
  
            break;
  

      }

        $this->session->set_flashdata(array('response' => 'success', 'msg' => 'Setting Updated Successfully'  ));
        redirect('settings');

    }

    public function update_sidebar_clr() {


      $sidebar_color = $this->input->post('sidebar_clr');

      $arr = [
        'value' => $sidebar_color
      ];

      $this->bm->updateRow('admin_panel_setting',$arr, 'name', 'SIDEBAR_COLOR');
      $this->session->set_userdata('sidebar_color',$sidebar_color);

    }

    public function delete_setting($id,$type)
    {

      $id = hashids_decrypt($id);
      
      switch ($type) {
        
        case 'slider_setting':
          
          $this->bm->delete('slider_setting','id',$id);

          $this->session->set_flashdata(array('response' => 'success', 'msg' => 'Slider Setting Deleted Successfully' ));
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
        $arr['image'] = $img;

      }

      $arr = [

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

