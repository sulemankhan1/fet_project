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

			}
			else if ($password == $this->encryption->decrypt($user_data->password)) {

							$result['valid'] = true;
							$result['user_id'] = $user_data->uid;
							$result['user_img'] = $user_data->user_img;
							$result['username'] = $user_data->username;
							$result['depart_id'] = $user_data->depart_id;
							$result['lab_id'] = $user_data->laboratory_numb;
							$result['role_id'] = $user_data->user_status_type;
							$result['role_name'] = $user_data->role_name;
							$result['user_language'] = $user_data->user_language;

							//college
							$result['is_college_s'] = $user_data->college_s;
							$result['is_college_ps'] = $user_data->college_ps;
							$result['is_college_a'] = $user_data->college_a;
							$result['is_college_e'] = $user_data->college_e;
							$result['is_college_d'] = $user_data->college_d;
							$result['is_college_v'] = $user_data->college_v;

							//depart
							$result['is_depart_s'] = $user_data->depart_s;
							$result['is_depart_ps'] = $user_data->depart_ps;
							$result['is_depart_a'] = $user_data->depart_a;
							$result['is_depart_e'] = $user_data->depart_e;
							$result['is_depart_d'] = $user_data->depart_d;
							$result['is_depart_v'] = $user_data->depart_v;

							//labs
							$result['is_lab_s'] = $user_data->lab_s;
							$result['is_lab_ps'] = $user_data->lab_ps;
							$result['is_lab_a'] = $user_data->lab_a;
							$result['is_lab_e'] = $user_data->lab_e;
							$result['is_lab_d'] = $user_data->lab_d;
							$result['is_my_lab'] = $user_data->my_lab;

							// machine
							$result['is_machine_s'] = $user_data->machine_s;
							$result['is_machine_depart_s'] = $user_data->machine_depart_s;
							$result['is_machine_lab_s'] = $user_data->machine_lab_s;
							$result['is_machine_a'] = $user_data->machine_a;
							$result['is_machine_e'] = $user_data->machine_e;
							$result['is_machine_d'] = $user_data->machine_d;
							$result['is_machine_v'] = $user_data->machine_v;
							$result['is_machine_exp'] = $user_data->machine_exp;

							//users
							$result['is_user_sa'] = $user_data->user_sa;
							$result['is_user_sd'] = $user_data->user_sd;
							$result['is_user_a_to_d'] = $user_data->user_a_to_d;
							$result['is_user_d_to_a'] = $user_data->user_d_to_a;
							$result['is_user_a'] = $user_data->user_a;
							$result['is_user_ea'] = $user_data->user_ea;
							$result['is_user_ed'] = $user_data->user_ed;
							$result['is_user_va'] = $user_data->user_va;
							$result['is_user_vd'] = $user_data->user_vd;
							$result['is_user_ad'] = $user_data->user_ad;
							$result['is_user_dd'] = $user_data->user_dd;

							//maintenance
							$result['is_maintenance_sysr'] = $user_data->maintenance_sysr;
							$result['is_maintenance_sys_lab_r'] = $user_data->maintenance_sys_lab_r;
							$result['is_maintenance_sys_depart_r'] = $user_data->maintenance_sys_depart_r;
							$result['is_maintenance_str'] = $user_data->maintenance_str;
							$result['is_maintenance_st_lab_r'] = $user_data->maintenance_st_lab_r;
							$result['is_maintenance_st_depart_r'] = $user_data->maintenance_st_depart_r;
							$result['is_maintenance_pstr'] = $user_data->maintenance_pstr;
							$result['is_maintenance_a'] = $user_data->maintenance_a;
							$result['is_maintenance_a_lab'] = $user_data->maintenance_a_lab;
							$result['is_change_sys_st'] = $user_data->change_sys_st;
							$result['is_change_students_st'] = $user_data->change_students_st;

							//usage
							$result['is_usage_s'] = $user_data->usage_s;
							$result['is_usage_ps'] = $user_data->usage_ps;
							$result['is_usage_depart_s'] = $user_data->usage_depart_s;
							$result['is_usage_lab_s'] = $user_data->usage_lab_s;
							$result['is_usage_a'] = $user_data->usage_a;
							$result['is_usage_change_st'] = $user_data->usage_change_st;

							//orders
							$result['is_order_s'] = $user_data->order_s;
							$result['is_order_ps'] = $user_data->order_ps;
							$result['is_order_a'] = $user_data->order_a;
							$result['is_order_e'] = $user_data->order_e;
							$result['is_order_d'] = $user_data->order_d;
							$result['is_order_v'] = $user_data->order_v;
							$result['is_order_change_st'] = $user_data->order_change_st;

							//chemical inventory
							$result['is_chem_storage_a'] = $user_data->chem_storage_a;
							$result['is_chem_storage_e'] = $user_data->chem_storage_e;
							$result['is_chem_storage_del'] = $user_data->chem_storage_del;
							$result['is_chem_storage_s'] = $user_data->chem_storage_s;
							$result['is_chem_storage_s_lab'] = $user_data->chem_storage_s_lab;
							$result['is_chem_storage_gen_req'] = $user_data->chem_storage_gen_req;
							$result['is_chem_storage_gen_req_lab'] = $user_data->chem_storage_gen_req_lab;
							$result['is_chem_req_s'] = $user_data->chem_req_s;
							$result['is_chem_req_s_lab'] = $user_data->chem_req_s_lab;
							$result['is_chem_req_s_gen'] = $user_data->chem_req_s_gen;
							$result['is_chem_req_change_st'] = $user_data->chem_req_change_st;

							//animal inventory
							$result['is_animal_s'] = $user_data->animal_s;
							$result['is_animal_s_colg'] = $user_data->animal_s_colg;
							$result['is_animal_s_depart'] = $user_data->animal_s_depart;
							$result['is_animal_s_lab'] = $user_data->animal_s_lab;
							$result['is_animal_a'] = $user_data->animal_a;
							$result['is_animal_a_colg'] = $user_data->animal_a_colg;
							$result['is_animal_a_depart'] = $user_data->animal_a_depart;
							$result['is_animal_a_lab'] = $user_data->animal_a_lab;
							$result['is_animal_e'] = $user_data->animal_e;
							$result['is_animal_del'] = $user_data->animal_del;
							$result['is_animal_vd'] = $user_data->animal_vd;
							$result['is_cage_a'] = $user_data->cage_a;


			}else{
				$result['valid'] = false;
                $result['error'] = 'Invalid username or password!';
			}

			return $result;
		}else{
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
