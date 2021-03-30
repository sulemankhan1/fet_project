<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
  {
        // Call the Model constructor
        parent::__construct();

        $this->load->model('Auth_model');
       $this->load->model('Basic_model');

  }

	public function index()
	{
		if ($this->session->userdata('username') != '') {

			redirect('dashboard');

		}

		$data['settings'] = $this->Basic_model->getById('settings',1);

		$this->load->view('login',$data);

	}

	public function login()
	{

		$username = strip_tags($this->input->post('username'));
		$password = strip_tags($this->input->post('password'));


		$data = array(
			'username' =>$username,
			'password' =>$password
		);

		$res = $this->Auth_model->login_verify($data);
		
		// get and update settings
		$settings = $this->Basic_model->getById('settings', 1);

			if ($res['valid']) {
				$user_data = array(

					'user_id' => $res['user_id'] ,
					'user_img' => $res['user_img'] ,
					'username' => $res['username'],
					'role_id' => $res['role_id'],
					'role_name' => $res['role_name'],

					//setting
					'logo' => $settings->logo,
					'sidebar_img' => $settings->sidebar_img,
					'sidebar_color' => $settings->sidebar_color,
					'name' => $settings->name,
					'about' => $settings->about,
					'terms' => $settings->terms,
					'footer' => $settings->footer,
					'email' => $settings->email
				);




				 if(empty($user_data['username'])) {
					 $this->session->set_flashdata('alert_msg', array('failure', 'in', "You are not authorized to login please ask your admin"));
									 redirect('auth');
				 }

				 $this->session->set_userdata($user_data);
 				redirect('dashboard');

			} else {
				$this->session->set_flashdata('alert_msg', array('failure', 'Login', $res['error']));
          redirect('auth');
			}
	}


	public function logout()
	{

		$this->session->sess_destroy();
		redirect('auth');

	}


	public function forget_password_email()
	{

			$data['setting'] = $this->Basic_model->getById('setting',1);

			$this->load->view('forgetpassword_email',$data);

	}

	public function is_university_email_valid()
	{

		$user_email = $this->input->post('email');

		$data = $this->Auth_model->is_university_email_valid($user_email);

			if ($data['valid']) {

				$token = rand(10000,99999);

				$dateTime = date('Y-m-d h:i:s');

				$this->Basic_model->updateRow('users',['token' => $token,'token_dateTime' => $dateTime],'user_id',$data['user_id']);

				$settings = $this->Basic_model->getById('setting',1);

				$email['setting_data'] = $settings;

				$email['title'] = 'Forget Password';

				$token = hashids_encrypt($token);

				$email['msg'] =  'Hi,'.$data['username'].'<br>To change your password click below:<br><a href="'.base_url('change_password/'.$token).'">Change Password</a>';
				// $email['msg'] =  'Hello';

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
				$to = $data['email'];
					// $this->email->initialize($emailConfig);
				$this->email->set_newline("\r\n");
				$this->email->from($from,$settings->name);
				$this->email->to($to);
				$this->email->subject('Forget Password');
				$this->email->message($html_content);
				$this->email->set_mailtype("html");
				if(!$this->email->send()){}

					$this->session->set_flashdata(array('response' => 'success', 'msg' => 'Link has been sent to your email' ));

			}
			else {

				$this->session->set_flashdata('alert_msg', array('failure', 'Login', $data['error']));

			}

			redirect('forget_password');

	}

	public function change_password($id)
	{

		if (isset($_POST['submit'])) {

			$p = $this->input->post();

			$pass = $this->encryption->encrypt($p['confirmed_password']);

			$this->Basic_model->updateRow('users',['password'=>$pass],'token',$id);

			$this->session->set_flashdata(array('response' => 'success', 'msg' => 'Link has been sent to your email' ));

			redirect('password_changed');

		}else{

			$id = hashids_decrypt($id);

			$data['expired'] = false;

			$user = $this->Basic_model->getWhere('users','token',$id);

			if (empty($user)) {

				$data['expired'] = true;

			}else{

				$expire_time =  date('d-m-Y h:i', strtotime("+10 minutes", strtotime($user->token_dateTime)));

				// echo $expire_time."<br>";
				// echo date('d-m-Y h:i');

				if (strtotime($expire_time) <= strtotime(date('d-m-Y h:i'))) {

					$data['expired'] = true;

				}

			}



			$data['id'] = $id;

			$data['setting'] = $this->Basic_model->getById('setting',1);

			$this->load->view('change_password',$data);

		}

	}

	public function password_changed()
	{

			$this->load->view('changed_password');

	}


}
