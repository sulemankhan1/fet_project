<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller 
{

  function __construct() 
  {

      parent::__construct();

      if (empty($this->session->userdata('username'))) 
      {

          redirect('login');

      }
      
  }

  public function create_user()
  {

    $data = [

      'title' => 'Create User',

      'active_menu' => 'create_user',

      'roles' => $this->bm->getAll('roles', 'id', 'desc'),

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

          $this->session->set_flashdata(array('response' => 'success', 'msg' => "User created Successfully "));

          redirect('view_users/active');


        }
        else{

          $this->create_user();

        }

  }
  
  public function edit_user($id)
  {
    
    $this->load->model('Users_model');

    $id = hashids_decrypt($id);

    $data = [

      'title' => 'Edit User',

      'active_menu' => 'create_user',

      'edit' => $this->Users_model->getUserToEdit($id),

      'roles' => $this->bm->getAll('roles', 'id', 'desc'),

    ];

    $this->load->view('header',$data);
    $this->load->view('sidebar');
    $this->load->view('users/edit');
    $this->load->view('footer');
    $this->load->view('users/script');

  }

  public function update_user() 
  {

    $p = $this->input->post();

      $this->form_validation->set_rules('title', 'Title', 'required');
      
      if($p['username'] != $p['username_old'])
      {

        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');

      }
      else
      {
        
        $this->form_validation->set_rules('username', 'Username', 'required');

      }

      $this->form_validation->set_rules('password', 'Password', 'required');
      
      if($p['email'] != $p['email_old'])
      {

        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
        
      }
      else
      {

        $this->form_validation->set_rules('email', 'Email', 'required');

      }
      
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

          $img = $p['image_old'];

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

          $this->bm->updateRow('users', $data,'id',$p['id']);
          
          $info = [

            'campus_id' => $p['campus_id'],
            'faculty_id' => $p['faculty_id'],
            'depart_id' => $p['depart_id'],
            'batch_year' => $p['batch_year'],
            'current_semester_no' => $p['current_semester_no'],
            'designation' => $p['designation'],
            'speciality' => $p['speciality'],
            'last_degree' => $p['last_degree']
            
          ];
          
          $this->bm->updateRow('users_info', $info,'user_id',$p['id']);

          $this->session->set_flashdata(array('response' => 'success', 'msg' => "User updated Successfully "));

          if($p['account_active'] == 1)
          {

            redirect('view_users/active');
            
          }
          else
          {
            
            redirect('view_users/deactive');

          }


        }
        else
        {

          $this->edit_user(hashids_encrypt($p['id']));

        }

  }

  public function view_users($status)
  {
 
      if($status == 'active')
      {

        $title = 'View Active Users';
        $active_menu = 'view_active_users';
        

      }
      else
      {

        $title = 'View Deactive Users';
        $active_menu = 'view_deactive_users';

      }

    $data = [

      'title' => $title,

      'active_menu' => $active_menu,

      'status' => $status

    ];

    $this->load->view('header',$data);
    $this->load->view('sidebar');
    $this->load->view('users/index');
    $this->load->view('footer');
    $this->load->view('users/script');

  }

  public function getActiveDeactiveUsers($status)
  {

      $this->load->model('Users_model');

      $result = $this->Users_model->get_user_data_length($status);
      $filter_data = $this->Users_model->get_user_filtered_data($status);
      $all_data = $this->Users_model->get_users_count($status);

      $data = array();

      $sno = @$_POST['start']+1;

      foreach ($result as $v) {

        $sub_array = array();
        $sub_array[] = $sno; $buttons = "";
        $sub_array[] = $v->title;
        $sub_array[] = $v->username;
        $sub_array[] = $v->email;
        $sub_array[] = $v->full_name;
        $sub_array[] = $v->cnic;
        $sub_array[] = $v->phone_no;
        $sub_array[] = $v->gender;
        $sub_array[] = $v->type;
        
        
        $buttons .= "<a href='".site_url('edit_user/'.hashids_encrypt(@$v->id))."' class='btn small-btn' ><i class='icon-pencil'></i> Edit</a>";
        if ($status == 'active') 
        {

          $buttons .= "<a href='".site_url('change_user_status/'.hashids_encrypt(@$v->id))."' class='btn small-btn' onclick=\"return confirm('Are you sure you want to deactive this user?')\" ><i class='ft-x'></i> Deactive</a>";

        }
        else
        {
          
          $buttons .= "<a href='".site_url('change_user_status/'.hashids_encrypt(@$v->id))."' class='btn small-btn' onclick=\"return confirm('Are you sure you want to active this user?')\" ><i class='ft-check'></i> Active</a>";
          
        }

        $buttons .= "<a href='".site_url('delete_user/'.hashids_encrypt(@$v->id))."' class='btn small-btn' onclick=\"return confirm('Are you sure you want to delete?')\" ><i class='icon-trash'></i> Delete</a>";


        $buttons .="<a href='".site_url('view_user/'.hashids_encrypt(@$v->id))."'  class='btn small-btn'><i class='icon-eye'></i> View</a>";


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

    $id = hashids_decrypt($id);

    $user = $this->bm->getById('users', $id);

    if ($user->account_active == 0) {

        $userstatus = 1;

        $this->session->set_flashdata(array('response' => 'success', 'msg' => 'User active Successfully' ));

    }

    else
    {

      $userstatus = 0;

      $this->session->set_flashdata(array('response' => 'success', 'msg' => 'User deactive Successfully' ));

    }

    $update = ['account_active' => $userstatus];

    $this->bm->updateRow('users' , $update , 'id' ,$id);


    if ($userstatus == 1) 
    {

      redirect('view_users/active');

    }

    else
    {

      redirect('view_users/deactive');

    }

  }

  public function delete_user($id)
  {

      $id = hashids_decrypt($id);

      $user  = $this->bm->getById('isers',$id);

      $this->bm->updateRow('users' ,['is_deleted' => 1], 'id' ,$id);

      $this->session->set_flashdata(array('response' => 'success', 'msg' => 'User deleted Successfully'));

      if ($user->account_active == 1) 
      {

          redirect('view_users/active');
      
      }

      else
      {

          redirect('view_users/deactive');

      }

  }

  public function user_details($id)
  {

    $id = hashids_decrypt($id);

    $this->load->model('Users_model');

    $data = [

      'title' => 'View User',

      'user' => $this->Users_model->getUsersDetails($id)

    ];
    
    $this->load->view('header',$data);
    $this->load->view('sidebar');
    $this->load->view('users/view_user');
    $this->load->view('footer');


  }

}
