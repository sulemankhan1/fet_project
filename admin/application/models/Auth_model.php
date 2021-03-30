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

		$this->db->select('u.user_id as uid , u.*,ui.*,r.*');
		$this->db->from('users u');
		$this->db->join('users_info ui','u.user_id=ui.user_id','left');
		$this->db->join('roles r','u.user_status=r.role_id');
		$this->db->where('u.username',$username);
		$user_data = $this->db->get()->row();


		if (!empty($user_data->username)) {

			$res = array();
			if($user_data->is_active == 'deactive'){
				$result['valid'] = false;
				$result['error'] = 'Your account is deactive wait for activation your account!';

			} else if ($password == $this->encryption->decrypt($user_data->password)) {

				$result['valid'] = true;
				$result['user_id'] = $user_data->uid;
				$result['user_img'] = $user_data->user_img;
				$result['username'] = $user_data->username;
				$result['depart_id'] = $user_data->depart_id;
				$result['lab_id'] = $user_data->laboratory_numb;
				// $result['role_id'] = $user_data->user_status_type;
				$result['role_name'] = $user_data->role_name;
			} else {
				$result['valid'] = false;
    		$result['error'] = 'Invalid username or password!';
			}
			return $result;
		} else {
			  $result['valid'] = false;
              $result['error'] = 'Invalid username or password!';

            return $result;
		}

	}

	public function is_university_email_valid($email)
	{

		$this->db->select('ui.university_email,u.*');
		$this->db->from('users u');
		$this->db->join('users_info ui','u.user_id=ui.user_id');
		$this->db->join('roles r','u.user_status=r.role_id');
		$this->db->where('ui.university_email',$email);
		$user_data = $this->db->get()->row();

		if (!empty($user_data->username)) {

			if($user_data->is_active == 'deactive'){

				$result['valid'] = false;
				$result['error'] = 'Your account is deactive wait for activation your account!';

			}

			else{

					$result['valid'] = true;
					$result['email'] = $user_data->university_email;
					$result['username'] = $user_data->username;
          $result['user_id'] = $user_data->user_id;

			}

			return $result;

		}
		else{

			  $result['valid'] = false;
        $result['error'] = 'Invalid email';

        return $result;
		}

	}



}
