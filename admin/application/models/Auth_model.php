<?php
/**
*
*/
class Auth_model extends CI_Model
{


	public function login_verify($data)
	{
		$username = $data['username'];
	  	$password = $data['password'];

		$this->db->select('users.*');
		$this->db->from('users');
		$this->db->join('users_info','users.id=users_info.user_id','left');
		$this->db->where('users.username',$username);
		$this->db->where('users.type','Superadmin');
		$user_data = $this->db->get()->row();


		if (!empty($user_data->username)) 
		{

			$res = array();

			if($user_data->is_pending == 1)
			{
				
				$result['valid'] = false;
				$result['error'] = 'Your account is pending wait for activation your account!';
				
			}
			else if($user_data->account_active == 0)
			{

				$result['valid'] = false;
				$result['error'] = 'Your account is deactive wait for activation your account!';

			}
			else if ($password == $this->encryption->decrypt($user_data->password)) 
			{

				$result['valid'] = true;
				$result['user_data'] = $user_data;		
			}
			else 
			{

				$result['valid'] = false;
    			$result['error'] = 'Invalid username or password!';

			}

		} 
		else 
		{
		
			$result['valid'] = false;
            $result['error'] = 'Invalid username or password!';

		}
			
        return $result;

	}

	public function is_email_valid($email)
	{

		$this->db->select('u.*');
		$this->db->from('users u');
		$this->db->join('users_info ui','u.id=ui.user_id','left');
		$this->db->where('u.email',$email);
		$user_data = $this->db->get()->row();

		if (!empty($user_data->username)) 
		{

			if($user_data->account_active == 0)
			{

				$result['valid'] = false;
				$result['error'] = 'Your account is deactive wait for activation your account!';

			}

			else
			{

					$result['valid'] = true;
					$result['user_data'] = $user_data;

			}

			
		}
		else
		{
			
			$result['valid'] = false;
			$result['error'] = 'Invalid email';
			
		}

		return $result;

	}



}
