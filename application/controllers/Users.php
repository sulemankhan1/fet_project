<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

  function __construct() {

      parent::__construct();

      if (empty($this->session->userdata('username'))) {

          redirect('login');

      }

      $this->load->model('Users_model');


      if ($this->session->userdata('language_to_user') == 'AR') {

          $language = 'Arabic';
      }
      else{

        $language = 'Eng';

      }

        $this->load->language($language,$language);
  }

  public function create_user() {

    $this->load->model('Roles_model');

    $data = [
      'title' => __('add_user_txt'),
      'active_menu' => 'create_user',
      'roles' => $this->Roles_model->getRoles('', 2),
    ];

    $this->load->view('header',$data);
    $this->load->view('sidebar');
    $this->load->view('users/add');
    $this->load->view('footer');
    $this->load->view('users/script');

  }




  public function save_user()
  {


    $p = $this->input->post();

    $id = $p['id'];

    unset($p['id']);
    $user_img = $_FILES['user_img'];

    if($user_img['name'] != "") {
      $img = $this->bm->uploadFile($user_img, 'uploads/users');

      // if something is wrong with the image
      if($img == "") {
        echo "Something is wrong with the image Please go back and  choose a different Image ";
        echo "<a href='".site_url('create_user')."'>Go Back</a>";
        die();
      }
    } else {
      $img = @$p['user_img1'];
    }

    echo "<pre>";
    print_r($img);
    die();
    $data = [
      'user_img' => $img,
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
      'is_active' => $p['user_activation']
    ];

    if ($id != '') {
      $this->bm->updateRow('users',$data,'user_id',$id);
      $ins_id = $id;
    } else {
      $ins_id = $this->bm->insertRow('users', $data);
    }

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

    if ($id != '') {

        $this->session->set_flashdata(array('response' => 'success', 'msg' => __('user_updated_success_txt') ));

        $this->bm->updateRow('users_info',$extra_info,'user_id',$id);

        $is_inserted = 0;

    }
    else{

        $this->session->set_flashdata(array('response' => 'success', 'msg' => __('user_created_success_txt') ));

        $this->bm->insertRow('users_info', $extra_info);
        $is_inserted = 1;
    }


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

      $user_email_notification = $this->bm->getWhere('users','user_id',$this->session->userdata('user_id'));
      if($user_email_notification->email_notification == 'enable')
      {


        foreach ($msg as $key => $v) {

          $email['msg'] = $msg[$key];

          $email['title'] = 'Registeration';
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

          $from = 'system@'.$_SERVER['HTTP_HOST'];
          $to = $sending_email[$key];
            // $this->email->initialize($emailConfig);
          $this->email->set_newline("\r\n");
          $this->email->from($from,$settings->name);
          $this->email->to($to);
          $this->email->subject('Registeration');
          $this->email->message($msg[$key]);
          $this->email->set_mailtype("html");
          if(!$this->email->send()){
            // echo "not-sent";
          }


        }

      }

    }

    if ($p['user_activation'] == 'deactive') {

      redirect('view_deactive_users');

    }
    else{

      redirect('view_active_users');

    }

  }

  public function edit_user($id)
  {
      $id = hashids_decrypt($id);

      $this->load->model('Users_model');

      $this->load->model('Roles_model');

      $data = [

        'title' => __('edit_user_txt'),

        'active_menu' => 'create_user',

        'edit' => $this->Users_model->getUserToEdit($id),

        'roles' => $this->Roles_model->getRoles('', 2),

        'colleges' => $this->bm->getAll('college', 'id', 'desc')

      ];

      $data['departments'] = $this->bm->getWhereRows('departments', 'college_id', $data['edit']->college_id);

      $data['labs'] = $this->bm->getWhereRows('labs', 'depart_id', $data['edit']->depart_id);

      $data['programs'] = $this->bm->getWhereRows('departments_programs', 'depart_id', $data['edit']->depart_id);

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('users/add');
      $this->load->view('footer');
      $this->load->view('users/script');

  }

  public function view_active_users()
  {
    if ($this->session->userdata('is_user_sa') != 'yes') {

      redirect('dashboard');

    }

    $data = [

      'title' => __('view_active_user_txt'),

      'active_menu' => 'view_active_users',

      'status' => 'active'

    ];

    $this->load->view('header',$data);
    $this->load->view('sidebar');
    $this->load->view('users/active_users');
    $this->load->view('footer');
    $this->load->view('users/script');

  }


  public function view_deactive_users()
  {

    if ($this->session->userdata('is_user_sd') != 'yes') {

      redirect('dashboard');

    }

    $data = [

      'title' => __('view_deactive_user_txt'),

      'active_menu' => 'view_deactive_users',

      'status' => 'deactive'

    ];

    $this->load->view('header',$data);
    $this->load->view('sidebar');
    $this->load->view('users/deactive_users');
    $this->load->view('footer');
    $this->load->view('users/script');


  }
  public function erase($user_id){

    $this->Users_model->erase($user_id);


    redirect('view_active_users');


  }

  public function getActiveDeactiveUsers($status)
  {

      $this->load->model('Users_model');

      $result = $this->Users_model->make_datatables($status);
      $filter_data = $this->Users_model->get_filtered_data($status);
      $all_data = $this->Users_model->get_all_data($status);

      $data = array();

      $sno = @$_POST['start']+1;

      foreach ($result as $v) {

        $sub_array = array();
        $sub_array[] = "<input type='checkbox' class='check' name='check[]' value='".$v->user_id."' >";
        $sub_array[] = $sno; $buttons = "";
        $sub_array[] = $v->username;
        $sub_array[] = $v->title;

        if ($this->session->userdata('language_to_user') == 'AR') {

          $sub_array[] = $v->first_name_arabic;
          $sub_array[] = $v->middle_name_arabic;
          $sub_array[] = $v->family_last_name_arabic;

        }else{

          $sub_array[] = $v->first_name_eng;
          $sub_array[] = $v->middle_name_eng;
          $sub_array[] = $v->family_last_name_eng;

        }

        $sub_array[] = $v->gender;
        $sub_array[] = $v->nationality;


        $st = __('active_status_txt');
        $st_icon = 'ft-user-check';
        $badge_clr = 'badge badge-danger';
        if ($status == 'active') {

            $st = __('deactive_status_txt');
            $st_icon = 'ft-user-minus';
            $badge_clr = 'badge badge-success';

        }

        $sub_array[] = '<span class="'.$badge_clr.'">'.ucfirst($v->is_active).'</span>';

      if ($status == 'active') {

        if ($this->session->userdata('is_user_ea') == 'yes') {

        $buttons .= "<a href='".site_url('edit_user/'.hashids_encrypt(@$v->user_id))."' class='btn small-btn' ><i class='icon-pencil'></i> ".__('edit_txt')."</a>";

        }

        if ($this->session->userdata('is_user_a_to_d') == 'yes') {

          $buttons .= "<a href='".site_url('change_user_status/'.hashids_encrypt(@$v->user_id))."' class='btn small-btn' onclick=\"return confirm('Are you sure you want to ".$st." this user?')\" ><i class='".$st_icon."'></i> ".ucfirst($st)."</a>";

        }

        if ($this->session->userdata('is_user_ad') == 'yes') {

              $buttons .= "<a href='".site_url('delete_user/'.hashids_encrypt(@$v->user_id))."' class='btn small-btn' onclick=\"return confirm('Are you sure you want to delete?')\" ><i class='icon-trash'></i> ".__('delete_txt')."</a>";

        }

        if ($this->session->userdata('is_user_va') == 'yes') {

          $buttons .="<a href='javascript:void(0)'  class='btn small-btn view_user_detail' data='".$v->user_id."'><i class='icon-eye'></i> ".__('view_txt')."</a>";

        }

      }

      else if($status == 'deactive'){

          if ($this->session->userdata('is_user_ed') == 'yes') {

          $buttons .= "<a href='".site_url('edit_user/'.hashids_encrypt(@$v->user_id))."' class='btn small-btn' ><i class='icon-pencil'></i> ".__('edit_txt')."</a>";

          }
          if ($this->session->userdata('is_user_d_to_a') == 'yes') {

            $buttons .= "<a href='".site_url('change_user_status/'.hashids_encrypt(@$v->user_id))."' class='btn small-btn' onclick=\"return confirm('Are you sure you want to ".$st." this user?')\" ><i class='".$st_icon."'></i> ".ucfirst($st)."</a>";

          }

          if ($this->session->userdata('is_user_dd') == 'yes') {

                $buttons .= "<a href='".site_url('delete_user/'.hashids_encrypt(@$v->user_id))."' class='btn small-btn' onclick=\"return confirm('Are you sure you want to delete?')\" ><i class='icon-trash'></i> ".__('delete_txt')." </a>";

          }

          if ($this->session->userdata('is_user_vd') == 'yes') {

            $buttons .="<a href='javascript:void(0)'  class='btn small-btn view_user_detail' data='".$v->user_id."'><i class='icon-eye'></i> ".__('view_txt')."</a>";

          }

      }


        $sub_array[] = $buttons;
        $data[] = $sub_array;
        $sno++;
      }


      $output = [

       'draw'    => intval($_POST["draw"]),
       'recordsTotal'  => $all_data,
       'recordsFiltered' => $filter_data,
       'data'    =>  $data

     ];

      echo json_encode($output);

  }

  public function change_user_status($id)
  {

    if ($this->session->userdata('is_user_a_to_d') != 'yes' && $this->session->userdata('is_user_d_to_a') != 'yes') {

      redirect('dashboard');

    }

    $id = hashids_decrypt($id);

    $user = $this->bm->getWhere('users', 'user_id', $id);

    if ($user->is_active != 'active') {

        $userstatus = 'active';

        $this->session->set_flashdata(array('response' => 'success', 'msg' => __('user_active_success_txt') ));

    }

    else{

      $userstatus = 'deactive';

      $this->session->set_flashdata(array('response' => 'success', 'msg' => __('user_deactive_success_txt') ));

    }

    $update = ['is_active' => $userstatus];

    $this->bm->updateRow('users' , $update , 'user_id' ,$id);


    if ($userstatus != 'active') {

      redirect('view_active_users');

    }

    else{

      redirect('view_deactive_users');


    }

  }

  public function delete_user($id)
  {

    if ($this->session->userdata('is_user_ad') != 'yes' && $this->session->userdata('is_user_dd') != 'yes') {

      redirect('dashboard');

    }

      $id = hashids_decrypt($id);

      $user = $this->bm->getWhere('users', 'user_id', $id);

      $this->bm->delete('users' , 'user_id' ,$id);
      $this->bm->delete('users_info' , 'user_id' ,$id);

      $this->session->set_flashdata(array('response' => 'success', 'msg' => __('user_deleted_success_txt') ));

      if ($user->is_active != 'active') {

          redirect('view_deactive_users');
      }

      else{

          redirect('view_active_users');

      }

  }

  public function getUserDetails($id)
  {
        $this->load->model('Users_model');

        $data['user'] = $this->Users_model->getUsersDetails($id);

        echo $this->load->view('users/view_user',$data,true);

  }

  public function multi_action()
  {

    $p = $this->input->post();


    if ($p['action_type'] == 'delete') {

        foreach ($p['id'] as $v) {

          $this->bm->delete('users', 'user_id', $v);

        }

        $output['type'] = 'delete';

        $this->session->set_flashdata(array('response' => 'success', 'msg' => __('users_deleted_success_txt') ));


    }
    elseif ($p['action_type'] == 'deactive') {

        $arr = [];

        foreach ($p['id'] as $v) {


          $arr[] = [

            'user_id' => $v,
            'is_active' => 'deactive'

          ];

        }

      $this->bm-> updateRows('users', $arr, 'user_id');

      $output['type'] = 'deactive';

      $this->session->set_flashdata(array('response' => 'success', 'msg' => __('users_deactive_success_txt') ));


    }
    elseif ($p['action_type'] == 'active') {

      $arr = [];

      foreach ($p['id'] as $v) {


        $arr[] = [

          'user_id' => $v,
          'is_active' => 'active'

        ];

      }

      $this->bm-> updateRows('users', $arr, 'user_id');

      $output['type'] = 'active';

      $this->session->set_flashdata(array('response' => 'success', 'msg' => __('users_active_success_txt') ));

    }

    echo json_encode($output);


  }


  public function Validation_Check_Email_Same()
  {

    $this->load->model('Users_model');
    $username = $this->input->post('username');
    $result = $this->Users_model->CheckUserNameSame($username);

  }



   public function collect_data_for_excel()
   {

     $this->load->model('users_model');
     $ids = $this->input->post('checkbox_value');
     $records = $this->users_model->get_excel_data_by_ids($ids);
     $this->session->set_userdata('records_to_export', $records);

   }

   public function download_excel()
   {

     $file_name = '_'.date('Y-m-d').'.csv';
     header("Content-Description: File Transfer");
     header("Content-Disposition: attachment; filename=$file_name");
     header("Content-Type: application/csv;");
     $file = fopen('php://output', 'w');

     $header = array("Username", "Title", "First Name", "Middle Name", "Family Last Name", "Gender", "Nationality", "Active");
     fputcsv($file, $header);
     $records = $this->session->userdata('records_to_export');

     foreach($records as $record)
     {
       fputcsv($file, $record);

     }
       fclose($file);
       exit;

   }

}
