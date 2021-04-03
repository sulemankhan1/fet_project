<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reg extends CI_Controller 
{

  function __construct() 
  {

      parent::__construct();

  }

  public function online_registration()
  {

    $data = [

      'roles' => $this->bm->getAll('roles', 'id', 'desc'),

      'logo' => $this->bm->getWhere('admin_panel_setting', 'name', 'LOGO')

    ];

    $this->load->view('registeration',$data);

  }

  public function save_registeration()
  {

    $p = $this->input->post();

      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
      $this->form_validation->set_rules('full_name', 'Full name', 'required');
      $this->form_validation->set_rules('surename', 'Surename', 'required');
      $this->form_validation->set_rules('dob', 'Date of birth', 'required');
      $this->form_validation->set_rules('gender', 'Gender', 'required');
      $this->form_validation->set_rules('cnic', 'Cnic / B-form', 'required');
      $this->form_validation->set_rules('father_name', 'Father name', 'required');
      $this->form_validation->set_rules('nationality', 'Nationality', 'required');
      $this->form_validation->set_rules('province', 'Province', 'required');
      $this->form_validation->set_rules('district', 'District', 'required');
      $this->form_validation->set_rules('city', 'City', 'required');
      $this->form_validation->set_rules('zip_code', 'Zip code', 'required');
      $this->form_validation->set_rules('home_address', 'Home address', 'required');
      $this->form_validation->set_rules('permanent_address', 'Permanent address', 'required');
      $this->form_validation->set_rules('bio', 'Bio', 'required');
      $this->form_validation->set_rules('phone_no_code', 'Code', 'required');
      $this->form_validation->set_rules('phone_no', 'Phone no', 'required');
      $this->form_validation->set_rules('role_id', 'role', 'required');
      $this->form_validation->set_rules('campus_id', 'Campus', 'required');
      $this->form_validation->set_rules('faculty_id', 'Faculty', 'required');
      $this->form_validation->set_rules('depart_id', 'Department', 'required');
      
      if($p['type'] == 'Teacher'){

        $this->form_validation->set_rules('designation', 'Designation', 'required');
        $this->form_validation->set_rules('speciality', 'Speciality', 'required');
        $this->form_validation->set_rules('last_degree', 'Last degree', 'required');

      }
      else if($p['type'] == 'Student')
      {

        $this->form_validation->set_rules('roll_no', 'Roll no', 'required');
        $this->form_validation->set_rules('batch_year', 'Batch year', 'required');
        $this->form_validation->set_rules('current_semester_no', 'Current semester no', 'required');

      }

		    if($this->form_validation->run())
		    {


          $p = $this->input->post();

          $image = $_FILES['image'];
          $img = '';
          if($image['name'] != '')
          {
              $img = $this->bm->uploadFile($image , 'uploads/users');
          }

          $data = [

              'image' => $img,
              'title' => $p['title'],
              'username' => $p['username'],
              'password' => $this->encryption->encrypt($p['password']),
              'full_name' => $p['full_name'],
              'surename' => $p['surename'],
              'email' => $p['email'],
              'dob' => $p['dob'],
              'gender' => $p['gender'],
              'cnic' => $p['cnic'],
              'show_cnic_public' => (@$p['show_cnic_to_public'] == ''?0:1),
              'father_name' => $p['father_name'],
              'nationality' => $p['nationality'],
              'province' => $p['province'],
              'district' => $p['district'],
              'city' => $p['city'],
              'home_address' => $p['home_address'],
              'permanent_address' => $p['permanent_address'],
              'show_address_public' => (@$p['show_address_to_public'] == ''?0:1),
              'bio' => $p['bio'],
              'phone_no_code' => $p['phone_no_code'],
              'phone_no' => $p['phone_no'],
              'type' => $p['type'],
              'role_id' => $p['role_id'],
              'show_phone_no_public' => (@$p['show_phone_no_to_public'] == ''?0:1),

          ];

          $ins_id = $this->bm->insertRow('users', $data);

          $info = [

            'user_id' => $ins_id,
            'campus_id' => $p['campus_id'],
            'faculty_id' => $p['faculty_id'],
            'depart_id' => $p['depart_id'],
            'batch_year' => $p['batch_year'],
            'current_semester_no' => $p['current_semester_no'],
            'designation' => $p['designation'],
            'speciality' => $p['speciality'],
            'last_degree' => $p['last_degree']

          ];

          $this->bm->insertRow('users_info',$info);

          $this->session->set_flashdata(array('response' => 'success', 'msg' => "Registration has been done Successfully wait for approving your account "));

          redirect('login');


        }
        else{

          $this->online_registration();

        }


  }

  public function getDepartByColgId($id)
  {

        $this->load->model('Main_model');

        $departs = $this->Main_model->getDepartmentsByColgId($id);

        $output = '';
        $output .= '<option value="">select department</option>';

        foreach ($departs as $v) {

          $output .= '<option value="'.$v->depart_id.'">'.$v->depart_name.'</option>';

        }

        echo $output;

  }

  public function getProgramsByDepartId($id)
  {

        $this->load->model('Main_model');

        $programs = $this->Main_model->getProgramsByDepartId($id);

        $output = '';
        $output .= '<option value="">select program</option>';

        foreach ($programs as $v) {

          $output .= '<option value="'.$v->program_id.'">'.$v->program_name.'</option>';

        }

        echo $output;

  }

  public function getLabsByDepartId($id)
  {
        $this->load->model('Main_model');

        $labs = $this->Main_model->getLabsByDepartId($id);

        $output = '';
        $output .= '<option value="">select lab</option>';

        foreach ($labs as $v) {

          $output .= '<option value="'.$v->lab_id.'">'.$v->lab_name.'</option>';

        }

        echo $output;

  }


  public function CheckUserNameSameHere()
  {

    $ResUsername = $this->input->post('ResUsername');

    $id = @$this->input->post('id');

    $result = $this->bm->CheckUserNameSame($ResUsername , $id);

       if ($result == false) {
        echo json_encode(array("status"=>"not_match_username"));
      }else{
          echo json_encode(array("status"=>"match_username"));
      }

  }

  public function CheckReEmailSame()
  {

    $fv_university_email = $this->input->post('fv_university_email');

    $id = @$this->input->post('id');

    $result = $this->bm->CheckReEmailSame($fv_university_email , $id);

    if ($result == false) {
        echo json_encode(array("status"=>"not_match_re_email"));
    }else{
        echo json_encode(array("status"=>"match_re_email"));
    }

  }



}
