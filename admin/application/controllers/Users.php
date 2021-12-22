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
      'campus' => $this->bm->getAll('campus', 'id'),
      'faculties' => $this->bm->getWhereRows('faculties', 'is_archived', 0),

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
      $this->form_validation->set_rules('last_degree', 'Last degree', 'required');

      if($p['type'] == 'TEACHER'){

        $this->form_validation->set_rules('designation', 'Designation', 'required');
        $this->form_validation->set_rules('speciality', 'Speciality', 'required');

      }
      else if($p['type'] == 'STUDENT')
      {

        $this->form_validation->set_rules('program_id', 'Program', 'required');
        $this->form_validation->set_rules('roll_no', 'Roll no', 'required');
        $this->form_validation->set_rules('batch_year', 'Batch year', 'required');
        $this->form_validation->set_rules('current_semester_no', 'Current semester no', 'required');

      }
      else if($p['type'] == 'OTHER')
      {

        $this->form_validation->set_rules('job_title', 'Job Title', 'required');
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

          $account_activity = $this->bm->getWhere('settings', 'name', 'ACCOUNT_ACTIVITY');

          if($account_activity->value == 'pending')
          {

            $pending = 1;
            $account_active = 0;

          }
          else
          {

            $pending = 0;
            $account_active = 1;

          }

          $data = [

              'image' => $img,
              'campus_id' => $p['campus_id'],
              'faculty_id' => $p['faculty_id'],
              'depart_id' => $p['depart_id'],
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
              'zip_code' => $p['zip_code'],
              'city' => $p['city'],
              'home_address' => $p['home_address'],
              'permanent_address' => $p['permanent_address'],
              'show_address_public' => (@$p['show_address_to_public'] == ''?0:1),
              'bio' => $p['bio'],
              'phone_no_code' => $p['phone_no_code'],
              'phone_no' => $p['phone_no'],
              'last_qualification' => $p['last_degree'],
              'type' => $p['type'],
              'role_id' => $p['role_id'],
              'show_phone_no_public' => (@$p['show_phone_no_to_public'] == ''?0:1),
              'account_active' => $account_active,
              'is_pending' => $pending,
              'created_at' => date('Y-m-d H:i:s'),
              'account_verified' => 1,


          ];

          $ins_id = $this->bm->insertRow('users', $data);

          if ($p['type'] == 'TEACHER')
          {


            $info = [

              'user_id' => $ins_id,
              'designation' => $p['designation'],
              'speciality' => $p['speciality']

            ];

            $this->bm->insertRow('teachers',$info);

          }

          elseif ($p['type'] == 'STUDENT')
          {

            $info = [

              'user_id' => $ins_id,
              'program_id' => $p['program_id'],
              'roll_number' => $p['roll_no'],
              'batch_year' => $p['batch_year'],
              'current_semester' => $p['current_semester_no']

            ];

            $this->bm->insertRow('students',$info);

          }

          else
          {

            $info = [

              'user_id' => $ins_id,
              'job_title' => $p['job_title']

            ];

            $this->bm->insertRow('other_users',$info);

          }

          $this->session->set_flashdata(array('response' => 'success', 'msg' => "User created Successfully "));

          redirect('view_users');


        } else {

          $this->create_user();

        }

  }

  public function edit_user($id)
  {

    $this->load->model('Users_model');
    $id = hashids_decrypt($id);
    $data = [
      'title' => 'Edit User',
      'active_menu' => 'view_users',
      'edit' => $this->Users_model->getUserToEdit($id),
      'roles' => $this->bm->getAll('roles', 'id', 'desc'),
      'campuses' => $this->bm->getWhereRows('campus', 'is_archived', 0),
      'faculties' => $this->bm->getWhereRows('faculties', 'is_archived', 0),
      'departments' => $this->bm->getAll('departments', 'id')
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
      $this->form_validation->set_rules('last_degree', 'Last degree', 'required');

      if($p['type'] == 'TEACHER'){

        $this->form_validation->set_rules('designation', 'Designation', 'required');
        $this->form_validation->set_rules('speciality', 'Speciality', 'required');

      }
      else if($p['type'] == 'STUDENT')
      {

        $this->form_validation->set_rules('program_id', 'Program', 'required');
        $this->form_validation->set_rules('roll_no', 'Roll no', 'required');
        $this->form_validation->set_rules('batch_year', 'Batch year', 'required');
        $this->form_validation->set_rules('current_semester_no', 'Current semester no', 'required');

      }
      else if($p['type'] == 'OTHER')
      {

        $this->form_validation->set_rules('job_title', 'Job Title', 'required');
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
            'campus_id' => $p['campus_id'],
            'faculty_id' => $p['faculty_id'],
            'depart_id' => $p['depart_id'],
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
            'zip_code' => $p['zip_code'],
            'city' => $p['city'],
            'home_address' => $p['home_address'],
            'permanent_address' => $p['permanent_address'],
            'show_address_public' => (@$p['show_address_to_public'] == ''?0:1),
            'bio' => $p['bio'],
            'phone_no_code' => $p['phone_no_code'],
            'phone_no' => $p['phone_no'],
            'last_qualification' => $p['last_degree'],
            'type' => $p['type'],
            'role_id' => $p['role_id'],
            'show_phone_no_public' => (@$p['show_phone_no_to_public'] == ''?0:1),
            'updated_at' => date('Y-m-d H:i:s')


        ];

          $this->bm->updateRow('users', $data,'id',$p['id']);

          if ($p['type'] == 'TEACHER')
          {


            $info = [

              'designation' => $p['designation'],
              'speciality' => $p['speciality']

            ];

            $this->bm->updateRow('teachers', $info,'user_id',$p['id']);


          }

          elseif ($p['type'] == 'STUDENT')
          {

            $info = [

              'program_id' => $p['program_id'],
              'roll_number' => $p['roll_no'],
              'batch_year' => $p['batch_year'],
              'current_semester' => $p['current_semester_no']

            ];

            $this->bm->updateRow('students', $info,'user_id',$p['id']);


          }

          else
          {

            $info = [

              'job_title' => $p['job_title']

            ];

            $this->bm->updateRow('other_users', $info,'user_id',$p['id']);

          }


          $this->session->set_flashdata(array('response' => 'success', 'msg' => "User updated Successfully "));

          // if($p['account_active'] == 1)
          // {

            redirect('view_users');

          // }
          // else
          // {

          //   redirect('view_users/deactive');

          // }


        }
        else
        {

          $this->edit_user(hashids_encrypt($p['id']));

        }

  }

  public function view_users($status = '')
  {

      if($status == 'pending')
      {

        $title = 'View Pending Users';
        $active_menu = 'view_pending_users';


      }
      else
      {

        $title = 'View Active / Deactive Users';
        $active_menu = 'view_users';

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

  public function getActiveDeactiveUsers($status = '')
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
        if ($status != 'pending')
        {

          if($v->account_active == 1)
          {

            $buttons .= "<a href='".site_url('change_user_status/deactive/'.hashids_encrypt(@$v->id))."' class='btn small-btn' onclick=\"return confirm('Are you sure you want to deactive this user?')\" ><i class='ft-x'></i> Deactive</a>";

          }
          else
          {

            $buttons .= "<a href='".site_url('change_user_status/active/'.hashids_encrypt(@$v->id))."' class='btn small-btn' onclick=\"return confirm('Are you sure you want to active this user?')\" ><i class='ft-check'></i> Active</a>";

          }

        }
        else
        {

          $buttons .= "<a href='".site_url('change_user_status/pending'.hashids_encrypt(@$v->id))."' class='btn small-btn' onclick=\"return confirm('Are you sure you want to active this user?')\" ><i class='ft-check'></i> Active</a>";

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

  public function change_user_status($type,$id)
  {

    $id = hashids_decrypt($id);

    $user = $this->bm->getById('users', $id);

    switch ($type) {

      case 'deactive':

        $update = ['account_active' => 0, 'is_pending' => 0];

        $this->bm->updateRow('users' , $update , 'id' ,$id);

        $this->session->set_flashdata(array('response' => 'success', 'msg' => 'User deactive Successfully' ));

        redirect('view_users');


        break;
      case 'active':

        $update = ['account_active' => 1, 'is_pending' => 0];

        $this->bm->updateRow('users' , $update , 'id' ,$id);

        $this->session->set_flashdata(array('response' => 'success', 'msg' => 'User active Successfully' ));

        redirect('view_users');

        break;
      case 'pending':

        $update = ['account_active' => 1, 'is_pending' => 0];

        $this->bm->updateRow('users' , $update , 'id' ,$id);

        $this->session->set_flashdata(array('response' => 'success', 'msg' => 'User active Successfully' ));

        redirect('view_users/pending');


        break;

    }


  }

  public function delete_user($id)
  {

      $id = hashids_decrypt($id);

      $user  = $this->bm->getById('users',$id);

      // $this->bm->updateRow('users' ,['is_archived' => 1], 'id' ,$id);
      $this->bm->delete('users' , 'id' ,$id);

      $this->session->set_flashdata(array('response' => 'success', 'msg' => 'User Deleted Successfully'));

      if ($user->is_pending == 1)
      {

          redirect('view_users/pending');

      }

      else
      {

          redirect('view_users');

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
