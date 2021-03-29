<?php

class Users_model extends CI_Model
{

	 var $order_column = array(null, "u.username", "u.title", "u.first_name_eng", "u.middle_name_eng","u.family_last_name_eng","u.gender","u.nationality",null,null);
  function make_query()
  {

			$this->db->select('u.*');
			$this->db->from('users u');
			$this->db->join('users_info ui','ui.user_id=u.user_id');
			$this->db->join('roles r','r.role_id=u.user_status');

			if(@$_POST["search"]["value"] != '')
			{

				// $this->db->where("(u.username LIKE '%".$_POST["search"]["value"]."%' OR u.title LIKE '%".$_POST["search"]["value"]."%' OR u.gender LIKE '%".$_POST["search"]["value"]."%' OR u.nationality LIKE '%".$_POST["search"]["value"]."%')", NULL, FALSE);
				$this->db->group_start();
				$this->db->or_like('u.username',  $_POST["search"]["value"]);
				$this->db->or_like('u.title',  $_POST["search"]["value"]);
				$this->db->or_like('u.first_name_eng',  $_POST["search"]["value"]);
				$this->db->or_like('u.middle_name_eng',  $_POST["search"]["value"]);
				$this->db->or_like('u.family_last_name_eng',  $_POST["search"]["value"]);
				$this->db->or_like('u.gender',  $_POST["search"]["value"]);
				$this->db->or_like('u.nationality',  $_POST["search"]["value"]);
				$this->db->group_end();

			}

			if(isset($_POST["order"]))
			{
					$order_by = $_POST['order']['0'];

					$this->db->order_by($this->order_column[$order_by['column']], $order_by['dir']);

			}
			else
			{
					 $this->db->order_by('u.user_id', 'DESC');
			}

		 	$this->db->where('u.user_status_type !=',1);

  }


  function make_datatables($status){

       $this->make_query();

			 $this->db->where('u.is_active', $status);

       if(@$_POST["length"] != '')
       {

            $this->db->limit(@$_POST['length'], @$_POST['start']);

			 }


       $query = $this->db->get();
       return $query->result();

  }

  function get_filtered_data($status){

       $this->make_query();

			 $this->db->where('u.is_active', $status);

       $query = $this->db->get();

       return $query->num_rows();

  }

  function get_all_data($status)
  {

		$this->db->select('u.*');
		$this->db->from('users u');
		$this->db->join('users_info ui','ui.user_id=u.user_id');
		$this->db->join('roles r','r.role_id=u.user_status');

	 	$this->db->where('u.user_status_type !=',1);

		$this->db->where('u.is_active', $status);


    return $this->db->count_all_results();

  }

	function get_excel_data_by_ids($ids_arr)
  {

    $this->db->select('u.username, u.title, u.first_name_eng, u.middle_name_eng, u.family_last_name_eng, u.gender, u.nationality, u.is_active');
    $this->db->from('users u');
		$this->db->join('users_info ui','ui.user_id=u.user_id');
		$this->db->join('roles r','r.role_id=u.user_status');

    if(!empty($ids_arr)) {
      $this->db->where_in('u.user_id', $ids_arr);
    }

    return $this->db->get()->result_array();

  }

	public function getUsersDetails($id)
	{

		$this->db->select('u.*,ui.*,r.*,d.*,dp.*,l.*,c.colg_name');
		$this->db->from('users u');
		$this->db->join('users_info ui','ui.user_id=u.user_id','left');
		$this->db->join('roles r','r.role_id=u.user_status','left');
		$this->db->join('departments d','d.depart_id=ui.depart_id','left');
		$this->db->join('departments_programs dp','dp.program_id=ui.program_id','left');
		$this->db->join('labs l','l.lab_id=ui.laboratory_numb','left');
		$this->db->join('college c','c.id=ui.college_id','left');

		$this->db->where('u.user_id',$id);

		 return $this->db->get()->row();

	}

	public function getUserToEdit($id)
	{

		$this->db->select('*');
		$this->db->from('users u');


			$this->db->join('users_info ui','ui.user_id=u.user_id');


		 $this->db->where('u.user_id',$id);

		 return $this->db->get()->row();

	}

	public function getUser($id)
	{

		$this->db->select('*');
		$this->db->from('users u');
		if ($this->session->userdata('role_id') != 1) {

			$this->db->join('users_info ui','ui.user_id=u.user_id');

		}

		 $this->db->where('u.user_id',$id);

		 return $this->db->get()->row();

	}

	public function getUsersCount($status='')
	{
			$this->db->select('count(u.user_id) as total_count');
			$this->db->from('users u');
			$this->db->join('users_info ui','ui.user_id=u.user_id');
			$this->db->join('roles r','r.role_id=u.user_status');

			if ($status != '') {

				 $this->db->where('u.is_active',$status);

			}

		 $this->db->where('u.user_status_type !=',1);

		 return $this->db->get()->row();
	}

	public function erase($user_id){

		$this->db->delete('users', array('user_id' => $user_id));
	}
	public function CheckUserNameSame($username)
	{
	 $this->db->select('*');
    $this->db->from('users');
    $this->db->where('username',$username);
 	$usernamedb  =$this->db->get()->row()->username;
 	   if ($usernamedb != $username) {
      echo json_encode(array("status"=>"not_match_username"));
  }else{
      echo json_encode(array("status"=>"match_username"));
  }


	}


}
