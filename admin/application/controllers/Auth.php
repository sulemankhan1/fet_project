<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
  {
        // Call the Model constructor
        parent::__construct();

        $this->load->model('Auth_model');

  }

	public function index()
	{
		if ($this->session->userdata('username') != '') {

			redirect('dashboard');

		}

		$data['logo'] = $this->bm->getWhere('admin_panel_setting', 'name', 'LOGO');

		$this->load->view('login',$data);

	}

	public function login()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');


		$data = [
			'username' => $username,
			'password' => $password
		];

		$res = $this->Auth_model->login_verify($data);

		// get and update settings
		// $settings = $this->bm->getById('settings', 1);

			if ($res['valid']) {

				$user_data = [

					'user_id' => $res['user_data']->id,
					'user_img' => $res['user_data']->image ,
					'username' => $res['user_data']->username
				];				

				 if(empty($res['user_data']->username)) {
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

		$data['logo'] = $this->bm->getWhere('admin_panel_setting', 'name', 'LOGO');

		$this->load->view('forgetpassword_email',$data);

	}

	public function is_email_valid()
	{

		$user_email = $this->input->post('email');

		$data = $this->Auth_model->is_email_valid($user_email);

			if ($data['valid']) {

				$user = $data['user_data'];

				$token = rand(10000,99999);

				
				$token = hashids_encrypt($token);

				$mail = [
					
					'title' => 'Forget Password',
					
					'logo' => $this->bm->getWhere('admin_panel_setting', 'name', 'LOGO'),
					
					'name' => $this->bm->getWhere('admin_panel_setting', 'name', 'NAME'),
					
					'footer' => $this->bm->getWhere('admin_panel_setting', 'name', 'FOOTER'),
					
					'msg' => 'Hi,'.$user->username.'<br>To change your password click below:<br><a href="'.site_url('change_password/'.$token).'">Change Password</a>'
					
				];
				

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

				$this->session->set_flashdata('alert_msg', array('failure', 'Login', $data['error']));

			}
			
			redirect('forget_password');
			
	}

	public function change_password($id)
	{

		if (isset($_POST['submit'])) 
		{

			$p = $this->input->post();

			$pass = $this->encryption->encrypt($p['confirmed_password']);

			$this->bm->updateRow('users',['password'=>$pass],'id',$id);

			$this->session->set_flashdata(array('response' => 'success', 'msg' => 'Password has changed Successfully' ));

			redirect('password_changed');

		}
		else
		{

			$token = hashids_decrypt($id);

			$data['expired'] = false;

			$reset_password = $this->bm->getWhere('passsword_reset','token',$token);

			$user = $this->bm->getById('users',$reset_password->user_id);

			if (empty($user)) 
			{

				$data['expired'] = true;

			}
			else
			{

				$expire_time =  date('d-m-Y h:i', strtotime("+10 minutes", strtotime($reset_password->datetime)));

				if (strtotime($expire_time) <= strtotime(date('d-m-Y h:i'))) 
				{

					$data['expired'] = true;

				}

			}



			$data['id'] = $user->id;

			$data['logo'] = $this->bm->getWhere('admin_panel_setting', 'name', 'LOGO');

			$this->load->view('change_password',$data);

		}

	}

	public function password_changed()
	{

		$this->load->view('changed_password');

	}


}
