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

		$data = array(
			'title' => 'Home',
			'sliders' => $this->bm->getAll('slider_setting','id','desc'),
			'headlines' => $this->nm->getHeadlines(10),
			'latest_news' => $this->nm->getLatestNews(4),
			'notices' => $this->nm->getNotices(5),
		);


		$this->load->view('includes/header', $data);
		$this->load->view('pages/homepage');
		$this->load->view('includes/footer');

	}

	public function view_profile() {

		$data = [];

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

	public function faculty() {

		$data = [];

		$this->load->view('includes/header', $data);
		$this->load->view('pages/faculty');
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

}
