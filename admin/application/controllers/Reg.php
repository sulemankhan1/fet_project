<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reg extends CI_Controller {

  function __construct() {

      parent::__construct();


  }

  public function online_registration()
  {

    $this->load->model('Roles_model');

    $data = [

      'roles' => $this->Roles_model->getRoles('', 2),

      'departments' => $this->bm->getAll('departments', 'depart_id', 'desc'),

      'setting' => $this->bm->getById('setting',1),

      'colleges' => $this->bm->getAll('college', 'id', 'desc')

    ];

    $this->load->view('registeration',$data);

  }

  public function save_registeration()
  {

    $p = $this->input->post();


      $type = $this->input->post('status_type');

      // to check username and email unique or not
      $this->form_validation->set_rules('username', 'USERNAME', 'is_unique[users.username]');
      $this->form_validation->set_rules(@$type.'_university_email', 'EMAIL', 'is_unique[users_info.university_email]');

		    if($this->form_validation->run())
		    {

          $p = $this->input->post();

          $data = [

              'username' => $p['username'],
              'password' => $this->encryption->encrypt($p['password']),
              'title' => $p['title'],
              'first_name_arabic' => $p['first_name_arabic'],
              'middle_name_arabic' => $p['middle_name_arabic'],
              'family_last_name_arabic' => $p['family_last_name_arabic'],
              'first_name_eng' => $p['first_name_eng'],
              'middle_name_eng' => $p['middle_name_eng'],
              'family_last_name_eng' => $p['family_last_name_eng'],
              'gender' => $p['gender'],
              'nationality' => $p['nationality'],
              'user_status' => $p['user_status'],
              'user_status_type' => $p['user_status_type'],
              'is_active' => 'deactive'

          ];

          $ins_id = $this->bm->insertRow('users', $data);

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

                'college_id' => $p[$type.'_college'],

                'depart_id' => $p[$type.'_depart_id'],

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

          $is_inserted = $this->bm->insertRow('users_info', $extra_info);

          if ($is_inserted > 0) {

            $sending_email = []; $msg = [];

            $settings = $this->bm->getById('setting', 1);

            $email['setting_data'] = $settings;

            if ($settings->email != '') {

              $sending_email[] = $settings->email;
              $msg[] = 'New User '.$p['username'].' has been registered';

            }

            if ($p[$type.'_university_email'] != '') {

              $sending_email[] = $p[$type.'_university_email'];

              $username_replace = str_replace("[USERNAME]",$p['username'],$settings->user_registeration_message);
              $firstname_replace = str_replace("[FIRSTNAME]",$p['first_name_eng'],$username_replace);
              $lastname_replace = str_replace("[LASTNAME]",$p['family_last_name_eng'],$firstname_replace);
              $email_replace = str_replace("[EMAIL]",$p[$type.'_university_email'],$lastname_replace);
              $msg[] = $email_replace;


            }

            foreach ($msg as $key => $v) {

              $email['msg'] = $msg[$key];

              $email['title'] = 'Registration';
              $html_content = $this->load->view('mail_template',$email,true);

              // for live send email use this array
                $emailConfig = [
                          'protocol' => 'smtp',
                          'smtp_host' => 'alphinex.com',
                          'smtp_port' => 587,
                          'smtp_user' => 'fardeen@alphinex.com',
                          'smtp_pass' => 'X8X=}-?HiKV?',
                          'mailtype' => 'html',
                          'charset' => 'iso-8859-1'
                      ];


              $this->load->library('email' , $emailConfig);
              //$_SERVER['HTTP_HOST'];
              $from = 'system@'.$_SERVER['HTTP_HOST'];
              $to = $sending_email[$key];
                // $this->email->initialize($emailConfig);
              $this->email->set_newline("\r\n");
              $this->email->from($from,$settings->name);
              $this->email->to($to);
              $this->email->subject('Registration');
              $this->email->message($html_content);
              $this->email->set_mailtype("html");
              if(!$this->email->send()){
                // echo "not-sent";
              }

            }


          }

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
