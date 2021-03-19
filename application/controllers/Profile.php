<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

  function __construct() {

      parent::__construct();

      if (empty($this->session->userdata('username'))) {

          redirect('login');

      }

      if ($this->session->userdata('language_to_user') == 'AR') {

          $language = 'Arabic';
      }
      else{

        $language = 'Eng';

      }

        $this->load->language($language,$language);

  }


  public function update_password(){

      $this->session->set_flashdata(array('edit_profile_tab' => 'update_password', 'msg' => 'password updated' ));

    $id = $this->input->post('id');
    $data = $this->bm->getByuserId('users',$id);
    if($this->input->post('c_password') == $this->input->post('n_password')){
    if($this->input->post('password') == $this->encryption->decrypt($data->password) && $this->input->post('c_password') == $this->input->post('n_password')){
    $data = [
    'password' => $this->encryption->encrypt($this->input->post('n_password')),
    ];
      $this->bm->updateRow('users',$data,'user_id',$id);
      $this->session->set_flashdata(array('response' => 'success', 'msg' => 'password updated' ));
        redirect('edit_profile');
    }else{
      $this->session->set_flashdata(array('response' => 'danger', 'msg' => 'old password is incorrect' ));
      redirect('edit_profile');
    }
    }else{
      $this->session->set_flashdata(array('response' => 'danger', 'msg' => 'new and confirm password are not same' ));
      redirect('edit_profile');
    }
  }


  public function notification_settings()
  {
      $this->session->set_flashdata(array('edit_profile_tab' => 'email_notification', 'msg' => 'password updated' ));
      $id = $this->input->post('id');

      $data = [];

      $notification_settings_id = $this->input->post('notification_settings_id');

      $notf_gen_maintanance = $this->input->post('notf_gen_maintanance', TRUE);
      $data['notf_gen_maintanance'] = ($notf_gen_maintanance == "")?0:1;

      $notf_ret_maintanance = $this->input->post('notf_ret_maintanance', TRUE);
      $data['notf_ret_maintanance'] = ($notf_ret_maintanance == "")?0:1;

      $notf_rej_maintanance = $this->input->post('notf_rej_maintanance', TRUE);
      $data['notf_rej_maintanance'] = ($notf_rej_maintanance == "")?0:1;

      $notf_returned_maintanance = $this->input->post('notf_returned_maintanance', TRUE);
      $data['notf_returned_maintanance'] = ($notf_returned_maintanance == "")?0:1;

      $notf_compl_maintainance = $this->input->post('notf_compl_maintainance', TRUE);
      $data['notf_compl_maintainance'] = ($notf_compl_maintainance == "")?0:1;

      if ($this->session->userdata('user_st') == 2) {

      $notf_compl_sys_maint = $this->input->post('notf_compl_sys_maint', TRUE);
      $data['notf_compl_sys_maint'] = ($notf_compl_sys_maint == "")?0:1;

      }

      if ($this->session->userdata('user_st') == 4) {

        $notf_gen_usage_req = $this->input->post('notf_gen_usage_req', TRUE);
        $data['notf_gen_usage_req'] = ($notf_gen_usage_req  == "")?0:1;

      }

      $notf_rej_usage_req = $this->input->post('notf_rej_usage_req', TRUE);
      $data['notf_rej_usage_req'] = ($notf_rej_usage_req == "")?0:1;

      $notf_accepted_usage_req = $this->input->post('notf_accepted_usage_req', TRUE);
      $data['notf_accepted_usage_req'] = ($notf_accepted_usage_req == "")?0:1;

      $notf_ret_usage_req = $this->input->post('notf_ret_usage_req', TRUE);
      $data['notf_ret_usage_req'] = ($notf_ret_usage_req == "")?0:1;

      $notf_gen_chem_inv_req = $this->input->post('notf_gen_chem_inv_req', TRUE);
      $data['notf_gen_chem_inv_req'] = ($notf_gen_chem_inv_req == "")?0:1;

      $notf_acc_chem_inv_req = $this->input->post('notf_acc_chem_inv_req', TRUE);
      $data['notf_acc_chem_inv_req'] = ($notf_acc_chem_inv_req == "")?0:1;

      $notf_rej_chem_inv_req = $this->input->post('notf_rej_chem_inv_req', TRUE);
      $data['notf_rej_chem_inv_req'] = ($notf_rej_chem_inv_req == "")?0:1;

      $notf_returned_chem_inv_req = $this->input->post('notf_returned_chem_inv_req', TRUE);
      $data['notf_returned_chem_inv_req'] = ($notf_returned_chem_inv_req == "")?0:1;

      $notf_resubmit_chem_inv_req = $this->input->post('notf_resubmit_chem_inv_req', TRUE);
      $data['notf_resubmit_chem_inv_req'] = ($notf_resubmit_chem_inv_req == "")?0:1;

      $notf_gen_animal_inv_req = $this->input->post('notf_gen_animal_inv_req', TRUE);
      $data['notf_gen_animal_inv_req'] = ($notf_gen_animal_inv_req == "")?0:1;

      $notf_acc_animal_inv_req = $this->input->post('notf_acc_animal_inv_req', TRUE);
      $data['notf_acc_animal_inv_req'] = ($notf_acc_animal_inv_req == "")?0:1;

      $notf_rej_animal_inv_req = $this->input->post('notf_rej_animal_inv_req', TRUE);
      $data['notf_rej_animal_inv_req'] = ($notf_rej_animal_inv_req == "")?0:1;

      $notf_returned_animal_inv_req = $this->input->post('notf_returned_animal_inv_req', TRUE);
      $data['notf_returned_animal_inv_req'] = ($notf_returned_animal_inv_req == "")?0:1;


      $notf_resubmit_animal_inv_req = $this->input->post('notf_resubmit_animal_inv_req', TRUE);
      $data['notf_resubmit_animal_inv_req'] = ($notf_resubmit_animal_inv_req == "")?0:1;

      $data['email_notification'] = $this->input->post('email_noti');
      $data['user_id'] = $this->session->userdata('user_id');


      if($notification_settings_id == "") {
        $this->bm->insertRow('notification_settings', $data);
      } else {
        $this->bm->updateRow('notification_settings', $data, 'user_id', $id);
      }
      $this->session->set_flashdata(array('response' => 'success', 'msg' => 'Notification settings updated'));
      redirect('edit_profile');
  }



  public function edit_profile()
  {
      $id = $this->session->userdata('user_id');

      $this->load->model('Users_model');

      $data = [
        'title' => __('edit_profile_txt'),
        'edit' => $this->Users_model->getUser($id),
        'notification_settings' => $this->bm->getByuserId('notification_settings', $id),
      ];



      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('profile/edit_profile');
      $this->load->view('footer');
      $this->load->view('users/script');

  }

  public function update_profile()
  {

    $this->session->set_flashdata(array('edit_profile_tab' => 'update_profile', 'msg' => 'password updated' ));

    $p = $this->input->post();

    $type = $p['status_type'];

    // to check username and email unique or not
    if ($p['username'] != $p['username_unique']) {

      $this->form_validation->set_rules('username', 'USERNAME', 'is_unique[users.username]');

    }

    if (@$p[$type.'_university_email'] != $p['uni_email_unique']) {

      $this->form_validation->set_rules(@$type.'_university_email', 'EMAIL', 'required|is_unique[users_info.university_email]');

    }

    $this->form_validation->set_rules('first_name_eng', 'first_name_eng', 'required');


    if($this->form_validation->run())
    {
        $id = $p['id'];

        unset($p['id']);

        $user_img = $_FILES['user_img'];

        if($user_img['name'] != "") {

          $img = $this->bm->uploadFile($user_img, 'uploads/users');

        }else{

          $img = @$p['user_img1'];

        }

        //update_session_to_who_user_img
        $this->session->set_userdata('user_img',$img);

        $data = [

            'user_img' => $img,
            'username' => $p['username'],
            'title' => $p['title'],
            'first_name_arabic' => $p['first_name_arabic'],
            'middle_name_arabic' => $p['middle_name_arabic'],
            'family_last_name_arabic' => $p['family_last_name_arabic'],
            'first_name_eng' => $p['first_name_eng'],
            'middle_name_eng' => $p['middle_name_eng'],
            'family_last_name_eng' => $p['family_last_name_eng'],
            'gender' => $p['gender'],
            'nationality' => $p['nationality']

        ];

          $this->bm->updateRow('users',$data,'user_id',$id);

        if ($this->session->userdata('role_id') != 1) {

            $ins_id = $id;


            $extra_info = [];

            if ($type == 'fr' || $type == 'fv') {

              $extra_info = [

                'user_id' => $ins_id,

                'university' => $p[$type.'_university'],

                'college' => $p[$type.'_college'],

                'department_name' => $p[$type.'_depart_id'],

                'phone_1' => $p[$type.'_phone_1'],

                'fax' => $p[$type.'_fax'],

                'phone_2' => $p[$type.'_phone_2'],

                'emergency_numb' => $p[$type.'_emergency_numb'],

                'university_email' => $p[$type.'_university_email'],

                'employee_id_numb' => $p[$type.'_employee_id_numb'],

                'id_numb' => $p[$type.'_id_numb']

              ];

            }

            if ($type == 'o' || $type == 't' || $type == 'th') {

                $extra_info = [

                  'user_id' => $ins_id,

                  'depart_id' => $p[$type.'_depart_id'],

                  'college_id' => $p[$type.'_college'],

                  'laboratory_numb' => $p[$type.'_laboratory_numb'],

                  'phone_1' => $p[$type.'_phone_1'],

                  'fax' => $p[$type.'_fax'],

                  'phone_2' => $p[$type.'_phone_2'],

                  'emergency_numb' => $p[$type.'_emergency_numb'],

                  'university_email' => $p[$type.'_university_email'],

                  'secondary_email' => $p[$type.'_secondary_email']


                ];

            }

            if ($type == 'o' || $type == 't') {

              $extra_info['campus'] = $p[$type.'_campus'];

            }

            if ($type == 'o' || $type == 'th') {

              $extra_info['employee_id_numb'] = $p[$type.'_employee_id_numb'];

            }

            if ($type == 't') {

              $extra_info['program_id'] = $p['t_program_id'];
              $extra_info['degree'] = $p['t_degree'];
              $extra_info['student_numb'] = $p['t_student_numb'];

            }

            if ($type == 'th') {

              $extra_info['university'] = $p['th_university'];
              $extra_info['id_numb'] = $p['th_id_numb'];

            }

                $this->bm->updateRow('users_info',$extra_info,'user_id',$id);

          }

          $this->session->set_flashdata(array('response' => 'success', 'msg' => __('profile_update_success_txt') ));

          redirect('edit_profile');
      }
      else{

        $id = $p['id'];
        $this->edit_profile($id);

      }

  }

  public function view_profile()
  {

      $id = $this->session->userdata('user_id');

      $this->load->model('Users_model');

      $data = [

        'title' => __('view_profile_txt'),

        'user' => $this->Users_model->getUsersDetails($id)

      ];

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('profile/view_profile');
      $this->load->view('footer');

  }


}
