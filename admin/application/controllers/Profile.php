<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller 
{

  function __construct() 
  {

      parent::__construct();

      if (empty($this->session->userdata('username'))) {

          redirect('login');

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
        
        'title' => 'Edit Profile',
        
        'edit' => $this->Users_model->getUserToEdit($id),
        
        'campus' => $this->bm->getAll('campus', 'id'),

        'faculties' => $this->bm->getAll('faculties', 'id'),
  
        'departments' => $this->bm->getAll('departments', 'id')

      ];
  
      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('profile/edit_profile');
      $this->load->view('footer');
      $this->load->view('users/script');
      
  }
  
  public function update_profile() 
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


          $this->session->set_flashdata(array('response' => 'success', 'msg' => "Profile updated Successfully "));

          // if($p['account_active'] == 1)
          // {

            redirect('view_profile');

          // }
          // else
          // {

          //   redirect('view_users/deactive');

          // }


        }
        else
        {
          
          $this->edit_profile();
          
        }
        
  }

  public function change_password()
  {      
      $data = [

        'title' => 'Change Password'
        
      ];

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('profile/change_password');
      $this->load->view('footer');

  }
  
  public function update_password()
  {
      $this->form_validation->set_rules('old_password', 'Old password', 'callback_password_check');
      $this->form_validation->set_rules('new_password', 'New password', 'required');
      $this->form_validation->set_rules('confirm_password', 'Confirm password', 'required|matches[new_password]');

      if($this->form_validation->run()) 
      {

        
        $id = $this->session->userdata('user_id');

        $newpass = $this->input->post('new_password');

        $this->bm->updateRow('users', ['password' => $this->encryption->encrypt($newpass)] ,'id',$id);

        $this->session->set_flashdata(array('response' => 'success', 'msg' => "Password changed Successfully "));

        redirect('change_password');

      }
      else 
      {

        $this->change_password();

      }

  }


  public function password_check($oldpass)
  {

      $id = $this->session->userdata('user_id');

      $user = $this->bm->getById('users',$id);

      if($this->encryption->decrypt($user->password) !== $oldpass) 
      {

        $this->form_validation->set_message('password_check', 'The {field} does not match');
        return false;

      }

      return true;

  }


  public function getAllFaculties($campus_id='',$type='')
	{

		if($campus_id != '' && $campus_id != 'all')
		{
	
			$faculties = $this->bm->getWhereRows('faculties', 'campus_id', $campus_id);
			
		}
		else 
		{
			
			$faculties = $this->bm->getAll('faculties', 'id');

		}

		$output = '';
		if($type == 'register')
		{

			$output .= '<option selected disabled value=""> choose </option>';

		}
		else
		{

			$output .= '<option selected disabled value=""> by Faculty </option><option value="all">in all Faculties</option>';

		}


		foreach ($faculties as $key => $v) 
		{
			
			$output .='<option value="'.$v->id.'">'.$v->name.'</option>';

		}

		echo $output;

	}

	public function getAllDepartments($faculty_id='',$type='')
	{

		if($faculty_id != '' && $faculty_id != 'all')
		{
	
			$departments = $this->bm->getWhereRows('departments', 'fac_id', $faculty_id);
			
		}
		else 
		{
			
			$departments = $this->bm->getAll('departments', 'id');

		}

		$output = '';

		if($type == 'register')
		{

			$output .= '<option selected disabled value=""> choose </option>';
			
		}
		else
		{
			
			$output .= '<option selected disabled value=""> by Department </option><option value="all">in all Programs</option>';

		}

		foreach ($departments as $key => $v) 
		{
			
			$output .='<option value="'.$v->id.'">'.$v->name.'</option>';

		}

		echo $output;

	}

}
