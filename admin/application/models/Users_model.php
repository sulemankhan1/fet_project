<?php

class Users_model extends CI_Model
{

  	var $user_order_column = array(null, "u.title","u.username", "u.email", "u.full_name","u.cnic","u.phone_no","u.gender","u.type",null);
  	function make_users_query()
  	{

			$this->db->select('u.*');
			$this->db->from('users u');
			// $this->db->join('users_info ui','ui.user_id=u.id','left');

			if(@$_POST["search"]["value"] != '')
			{

				// $this->db->where("(u.username LIKE '%".$_POST["search"]["value"]."%' OR u.title LIKE '%".$_POST["search"]["value"]."%' OR u.gender LIKE '%".$_POST["search"]["value"]."%' OR u.nationality LIKE '%".$_POST["search"]["value"]."%')", NULL, FALSE);
				$this->db->group_start();
				$this->db->or_like('u.username',  $_POST["search"]["value"]);
				$this->db->or_like('u.title',  $_POST["search"]["value"]);
				$this->db->or_like('u.email',  $_POST["search"]["value"]);
				$this->db->or_like('u.cnic',  $_POST["search"]["value"]);
				$this->db->or_like('u.gender',  $_POST["search"]["value"]);
				$this->db->or_like('u.phone_no',  $_POST["search"]["value"]);
				$this->db->or_like('u.full_name',  $_POST["search"]["value"]);
				$this->db->or_like('u.type',  $_POST["search"]["value"]);
				$this->db->group_end();

			}

			if(isset($_POST["order"]))
			{
					$order_by = $_POST['order']['0'];

					$this->db->order_by($this->user_order_column[$order_by['column']], $order_by['dir']);

			}
			else
			{
					 $this->db->order_by('u.id', 'DESC');
			}

			$this->db->where('u.is_archived',0);
			$this->db->where('u.type!=','Superadmin');


  	}


  	function get_user_data_length($status)
  	{

       $this->make_users_query();

	   	if($status == 'pending')
		{

			$this->db->where('u.is_pending', 1);

		}
		else
		{

			$this->db->where('u.is_pending', 0);

		}

       if(@$_POST["length"] != '')
       {

            $this->db->limit(@$_POST['length'], @$_POST['start']);

		}


       $query = $this->db->get();
       return $query->result();



  	}

  	function get_user_filtered_data($status)
  	{

       $this->make_users_query();

	   	if($status == 'pending')
		{

			$this->db->where('u.is_pending', 1);

		}
		else
		{

			$this->db->where('u.is_pending', 0);

		}

       $query = $this->db->get();

       return $query->num_rows();

  	}

  	function get_users_count($status)
  	{

	  $this->db->select('u.*');
	  $this->db->from('users u');
		// $this->db->join('users_info ui','ui.user_id=u.id','left');
		$this->db->where('u.is_archived',0);
		$this->db->where('u.type!=','SUPERADMIN');

		if($status == 'pending')
		{

			$this->db->where('u.is_pending', 1);

		}
		else
		{

			$this->db->where('u.is_pending', 0);

		}



    	return $this->db->count_all_results();

  	}


	public function getUsersDetails($id)
	{

		$this->db->select('u.id as uid,u.*,st.*,tch.*,ou.*,cp.name as campus_name,ft.name as faculty_name,dt.name as depart_name,r.name as role_name');
		$this->db->from('users u');

		$this->db->join('campus cp','cp.id=u.campus_id','left');
		$this->db->join('faculties ft','ft.id=u.faculty_id','left');
		$this->db->join('departments dt','dt.id=u.depart_id','left');
		$this->db->join('students st','st.user_id=u.id','left');
		$this->db->join('teachers tch','tch.user_id=u.id','left');
		$this->db->join('other_users ou','ou.user_id=u.id','left');
		$this->db->join('roles r','r.id=u.role_id','left');

		$this->db->where('u.id',$id);

		 return $this->db->get()->row();

	}

	public function getUserToEdit($id)
	{

		$this->db->select('u.id as uid,u.*,st.*,tch.*,ou.*');
		$this->db->from('users u');

		$this->db->join('students st','st.user_id=u.id','left');
		$this->db->join('teachers tch','tch.user_id=u.id','left');
		$this->db->join('other_users ou','ou.user_id=u.id','left');

		 $this->db->where('u.id',$id);

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


}
