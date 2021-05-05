<?php
/*
 * Code written by: M.suleman khan
 * m.sulemankhan@hotmail.com
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{


	public function __construct() {
		parent::__construct();
		$this->load->model('news_model', 'nm');
		$this->load->model('pages_model', 'pm');
	}

	public function index()
	{

		$this->load->model('Users_model');

		$data = array(
			'title' => 'Home',
			'sliders' => $this->bm->getAll('slider_setting','id','desc'),
			'headlines' => $this->nm->getHeadlines(10),
			'latest_news' => $this->nm->getLatestNews(4),
			'notices' => $this->nm->getNotices(5),
			'roles' => $this->bm->getAll('roles', 'id', 'desc'),
			'faculty_members' => $this->Users_model->getFacultyAndTeachers()
		);

		$this->load->view('includes/header', $data);
		$this->load->view('pages/homepage');
		$this->load->view('includes/footer');

	}


	public function edit_profile($user_id)
	{

		$id = hashids_decrypt($user_id);

		$this->load->model('Users_model');

		$data = [

		'title' => 'Edit Profile',

		'edit' => $this->Users_model->getUserToEdit($id)

		];

		$this->load->view('includes/header', $data);
		$this->load->view('pages/edit_profile');
		$this->load->view('includes/footer');


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
				$img = $this->bm->uploadFile($image , './admin/uploads/users');
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

			redirect('edit_profile/'.hashids_encrypt($p['id']));

        }
        else
        {

          $this->edit_profile(hashids_encrypt($p['id']));

        }

  	}


	public function view_profile($user_id)
	{

		$id = hashids_decrypt($user_id);

		$this->load->model('Users_model');

		$data = [

			'title' => 'View Profile',

			'user' => $this->Users_model->getUsersDetails($id)

		];

		$this->load->view('includes/header', $data);
		$this->load->view('pages/profile');
		$this->load->view('includes/footer');

	}

	public function timetable() {

		$data = [];

		$this->load->view('includes/header', $data);
		$this->load->view('pages/timetable');
		$this->load->view('includes/footer');

	}
	public function all_programs() {

		$data = [];

		$this->load->view('includes/header', $data);
		$this->load->view('pages/all_programs');
		$this->load->view('includes/footer');

	}

	public function faculty() 
	{

		$data = [
			
			'title' => 'Faculty',

			'campus' => $this->bm->getAll('campus', 'id')

		];

		$this->load->view('includes/header', $data);
		$this->load->view('pages/faculty');
		$this->load->view('includes/footer');

	}


	public function getAllFacultyMembers($rowno=0)
	{

		$this->load->library('pagination');

	   	// Row per page
	  	$rowperpage = 20;
	  	// Row position
	  	if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
	  	}
  
  
	  	$search = ($this->input->post('search') == ''?'':$this->input->post('search'));
	  	$campus = ($this->input->post('campus') == ''?'':$this->input->post('campus'));
	  	$faculty = ($this->input->post('faculty') == ''?'':$this->input->post('faculty'));
	  	$depart = ($this->input->post('depart') == ''?'':$this->input->post('depart'));
  
		  
	  	$this->load->model('Users_model');
	  	// All records count
	  	$allcount = $this->Users_model->getFacultyCount($search,$campus,$faculty,$depart);
	  	// Get records
	  	$data1['faculty'] = $this->Users_model->getFaculty($rowno,$rowperpage,$search,$campus,$faculty,$depart);
  
	  	// Pagination Configuration
		$config['base_url'] = site_url().'/pages/getAllFacultyMembers';
		$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $allcount;
		$config['per_page'] = $rowperpage;
		$config['cur_tag_open'] = '<a class="btn btn-sm btn-dark text-white">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';
		$config['attributes'] = ['class' => 'btn text-dark btn-sm'];
		// Initialize
	  	$this->pagination->initialize($config);
	  	// Initialize $data Array
	  	$data['pagination'] = $this->pagination->create_links();
	  	$data['result'] = $this->load->view('pages/faculty_members',$data1,TRUE);
	  	$data['row'] = $rowno;

	  	echo json_encode($data);
   
	}

	public function getAllFaculties($campus_id='')
	{

		if($campus_id != '' && $campus_id != 'all')
		{
	
			// $faculties = $this->bm->getWhereRows('faculties', 'campus_id', $campus_id);
			$faculties = [];
			
		}
		else 
		{
			
			$faculties = $this->bm->getAll('faculties', 'id');

		}

		$output .= '<option selected disabled value=""> by Faculty </option><option value="all">in all Faculties</option>';

		foreach ($faculties as $key => $v) 
		{
			
			$output .='<option value="'.$v->id.'">'.$v->name.'</option>';

		}

		echo $output;

	}

	public function getAllDepartments($faculty_id='')
	{

		if($faculty_id != '' && $faculty_id != 'all')
		{
	
			$departments = $this->bm->getWhereRows('departments', 'fac_id', $faculty_id);
			
		}
		else 
		{
			
			$departments = $this->bm->getAll('departments', 'id');

		}

		$output .= '<option selected disabled value=""> by Department </option><option value="all">in all Programs</option>';

		foreach ($departments as $key => $v) 
		{
			
			$output .='<option value="'.$v->id.'">'.$v->name.'</option>';

		}

		echo $output;

	}

	public function genrated_timetable() {

		$data = [];

		$this->load->view('includes/header', $data);
		$this->load->view('pages/genrated_timetable');
		$this->load->view('includes/footer');

	}
	public function login() {

		$data = [];

		$this->load->view('includes/header', $data);
		$this->load->view('pages/login');
		$this->load->view('includes/footer');

	}

	public function save_login()
	{

		$p = $this->input->post();

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');


		if($this->form_validation->run())
		{

			$username = $this->input->post('username');
			$password = $this->input->post('password');


			$data = [
				'username' => $username,
				'password' => $password
			];

			$this->load->model('Auth_model');

			$res = $this->Auth_model->login_verify($data);

				// get and update settings
			$settings = $this->bm->getWhereRows('settings', 'type', 'admin_panel');
			// resort settings array
			$new_settings = [];
			if(!empty($settings)) {
				foreach ($settings as $key => $value) {
					$new_settings[$value->name] = $value->value;
				}
			}

			if ($res['valid'])
			{

				$user_data = [

					'user_id' => $res['user_data']->id,
					'user_img' => $res['user_data']->image ,
					'username' => $res['user_data']->username,
					'settings' => $new_settings,
				];

				if(empty($res['user_data']->username))
				{

					$this->session->set_flashdata(array('response' => 'danger', 'msg' => "You are not authorized to login please ask your admin"));

					redirect('login');

				}

				$this->session->set_userdata($user_data);

 				redirect('/');

			}
			else
			{

				$this->session->set_flashdata(array('response' => 'danger', 'msg' => $res['error'] ));
          		redirect('login');

			}

		}
		else
		{

			$this->login();

		}


	}

	public function logout()
	{

		session_destroy();
		redirect('login');

	}

	public function about() {

		$data = [];

		$this->load->view('includes/header', $data);
		$this->load->view('pages/about');
		$this->load->view('includes/footer');

	}
	public function telephone() {

		$data = [];

		$this->load->view('includes/header', $data);
		$this->load->view('pages/telephone');
		$this->load->view('includes/footer');

	}
	public function register() {

		$data = [

			'title' => 'Register',

			'roles' => $this->bm->getAll('roles', 'id', 'desc')

		];

		$this->load->view('includes/header', $data);
		$this->load->view('pages/register');
		$this->load->view('includes/footer');

	}

	public function save_reg()
	{
		$p = $this->input->post();

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('re_enter_password', 'Re-enter password', 'required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
		$this->form_validation->set_rules('full_name', 'Full name', 'required');
		$this->form_validation->set_rules('role_id', 'role', 'required');
		$this->form_validation->set_rules('campus_id', 'Campus', 'required');
		$this->form_validation->set_rules('faculty_id', 'Faculty', 'required');
		$this->form_validation->set_rules('depart_id', 'Department', 'required');
		  
		if($p['type'] == 'STUDENT')
		{
  
		  $this->form_validation->set_rules('program_id', 'Program', 'required');
  
		}
  
		if($this->form_validation->run())
		{
  			
			$p = $this->input->post();

			
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

				'campus_id' => $p['campus_id'],
				'faculty_id' => $p['faculty_id'],
				'depart_id' => $p['depart_id'],
				'title' => $p['title'],
				'username' => $p['username'],
				'password' => $this->encryption->encrypt($p['password']),
				'full_name' => $p['full_name'],
				'email' => $p['email'],
				'type' => $p['type'],
				'role_id' => $p['role_id'],
				'account_active' => $account_active,
				'is_pending' => $pending,
				'created_at' => date('Y-m-d H:i:s')
  
			];
  
			$ins_id = $this->bm->insertRow('users', $data);
			
			if ($p['type'] == 'TEACHER')
			{
  
			  
			  $info = [
				
				'user_id' => $ins_id
				
			  ];
			  
			  $this->bm->insertRow('teachers',$info);
			  
			}
			
			elseif ($p['type'] == 'STUDENT')
			{
			  
			  $info = [
				
				'user_id' => $ins_id,
				'program_id' => $p['program_id'],
				
			  ];
			  
			  $this->bm->insertRow('students',$info);
			  
			}
  
			else
			{
			  
			  $info = [
				
				'user_id' => $ins_id
				
			  ];
			  
			  $this->bm->insertRow('other_users',$info);
  
			}
  
			if ($account_active == 1) 
			{
			
				$this->session->set_flashdata(array('response' => 'success', 'msg' => "Registration has been done Successfully"));
			
			}
			else
			{
				
				$this->session->set_flashdata(array('response' => 'success', 'msg' => "Registration has been done Successfully wait for approving your account "));

			}
  
				
				redirect('login');
  
  
		}
		else
		{
				
			$this->register();

		}
	}

	public function contact_us() {

		$data = [];

		$this->load->view('includes/header', $data);
		$this->load->view('pages/contact_us');
		$this->load->view('includes/footer');

	}

	public function news() {

		// parameters
		$get = $this->input->get();

		$news = [];
		if(isset($get['search']) && $get['search'] != '') {
			// search
			$news = $this->nm->searchNews($get['search']);
		} elseif(isset($get['notifications_for']) && $get['notifications_for'] != "") {
			// notification for filter
			$news = $this->nm->getNewsByFilter('notification_for', $get['notifications_for']);
		} elseif(isset($get['keyword']) && $get['keyword'] != "") {
			// get notifications by keywords
			$news = $this->nm->getNewsByKeywords($get['keyword']);
		} else {
			// Normal Load Latest News
			$news = $this->nm->getLatestNews(20);
		}

		$data = array(
			'news' => $news,
			'get' => $get,
			'top_keywords' => $this->pm->getTopKeywords(),
		);

		$this->load->view('includes/header', $data);
		$this->load->view('pages/news');
		$this->load->view('includes/footer');

	}

	public function single_news($title) {
		// getting news by title
		$news = $this->nm->getNotificationByTitle(myUrlDecode($title));
		$keywords_txt = "";
		if(!empty($news)) {
			// get notification keywords
			$keywords = $this->bm->getRowsWithMultipleWhere('keywords', array(
				'type' => 'news',
				'news_id' => $news->id,
			));
			$keywords_txt = "";
			if(!empty($keywords)) {
				foreach($keywords as $keyword) {
					$keywords_txt .= "$keyword->keyword,";
				}
				$keywords_txt = substr($keywords_txt, 0, -1);
			}
		}

		$data = array(
			'news' => $news,
			'keywords' => $keywords_txt,
			'recent_news' => $this->nm->getLatestNews(8),
			'top_keywords' => $this->pm->getTopKeywords(),
		);

		$this->load->view('includes/header', $data);
		$this->load->view('pages/single_news');
		$this->load->view('includes/footer');

	}

	public function subscribe()
	{

		$p = $this->input->post();

		$this->form_validation->set_rules('email', 'Email', 'required');


		if($this->form_validation->run())
		{

			$this->bm->insertRow('subscribers',['email' => $p['email']]);

			$this->session->set_flashdata(array('response' => 'success', 'msg' => "Subscribe Successfully"));

			redirect('/');


		}
		else
		{
			$this->index();
		}

	}

	public function forgot_password()
	{

		$data = [

		];

		$this->load->view('includes/header', $data);
		$this->load->view('pages/forgot_password');
		$this->load->view('includes/footer');


	}

	public function check_email()
	{

		$p = $this->input->post();

		$this->form_validation->set_rules('email', 'Email', 'required');


		if($this->form_validation->run())
		{

			$user = $this->bm->getWhere('users', 'email', $p['email']);

			if(!empty($user))
			{

				$token = rand(10000,99999);

				$token = hashids_encrypt($token);


				$mail = [

					'title' => 'Forget Password',

					'logo' => $this->bm->getWhere('settings', 'name', 'LOGO'),

					'name' => $this->bm->getWhere('settings', 'name', 'NAME'),

					'footer' => $this->bm->getWhere('settings', 'name', 'FOOTER'),

					'msg' => 'Hi,'.$user->full_name.'<br>To change your password click below:<br><a href="'.site_url('change_password/'.$token).'">Change Password</a>'

				];

				$html_content = $this->load->view('mail_template',$mail,true);

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
				$to = $user->email;

				$this->email->set_newline("\r\n");
				$this->email->from($from,$name->value);
				$this->email->to($to);
				$this->email->subject('Forget Password');
				$this->email->message($html_content);
				$this->email->set_mailtype("html");
				if(!$this->email->send())
				{

					$this->session->set_flashdata(array('response' => 'success', 'msg' => 'Connection error try again..!' ));

				}
				else
				{

					$this->session->set_flashdata(array('response' => 'success', 'msg' => 'Password reset link has sent to your email' ));

					$this->bm->insertRow('password_reset',['token' => $token],'user_id',$user->id);

				}


			}
			else
			{

				$this->session->set_flashdata(array('response' => 'danger', 'msg' => "Invalid email try again"));

			}

			redirect('forgot_password');


		}
		else
		{
			$this->forgot_password();
		}



	}



}
