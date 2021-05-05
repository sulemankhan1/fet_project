<?php

class Users_model extends CI_Model
{

	public function getUsersDetails($id)
	{

		$this->db->select('u.id as uid,u.*,st.*,tch.*,ou.*,r.name as role_name');
		$this->db->from('users u');

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


	public function getFacultyAndTeachers()
	{

		$this->db->select('u.id as uid,u.*,tch.*,ou.*,r.name as role_name');
		$this->db->from('users u');

		$this->db->join('teachers tch','tch.user_id=u.id','left');
		$this->db->join('other_users ou','ou.user_id=u.id','left');
		$this->db->join('roles r','r.id=u.role_id','left');

		$this->db->order_by('u.id','desc');

		$this->db->where('u.type','FACULTY');
		$this->db->or_where('u.type','TEACHER');

		$this->db->limit(10);

		return $this->db->get()->result();

	}

	function getFacultyCount($search,$campus,$faculty,$depart)
  	{

		$this->db->select('u.id as uid,u.*,ou.*,r.name as role_name');
		$this->db->from('users u');

		$this->db->join('other_users ou','ou.user_id=u.id','left');
		$this->db->join('roles r','r.id=u.role_id','left');

		$this->db->order_by('u.id','desc');

		$this->db->where('u.type','FACULTY');

		if(!empty($search))
		{

		$this->db->like('u.full_name',$search);
		
		}

		if(!empty($campus) && $campus != 'all')
		{

			$this->db->where('u.campus_id',$campus);
		
		}

		if(!empty($faculty) && $faculty != 'all')
		{

			$this->db->where('u.faculty_id',$faculty);
		
		}

		if(!empty($depart) && $depart != 'all')
		{

			$this->db->where('u.depart_id',$depart);
		
		}

		$res = $this->db->get()->result_array();

		return count($res);

  	} 


  	function getFaculty($rowno,$rowperpage,$search,$campus,$faculty,$depart)
  	{

		$this->db->select('u.id as uid,u.*,ou.*,r.name as role_name');
		$this->db->from('users u');

		$this->db->join('other_users ou','ou.user_id=u.id','left');
		$this->db->join('roles r','r.id=u.role_id','left');

		$this->db->order_by('u.id','desc');

		$this->db->where('u.type','FACULTY');

		if(!empty($search))
		{

		$this->db->like('u.full_name',$search);
		
		}

		if(!empty($campus) && $campus != 'all')
		{

			$this->db->where('u.campus_id',$campus);
		
		}

		if(!empty($faculty) && $faculty != 'all')
		{

			$this->db->where('u.faculty_id',$faculty);
		
		}

		if(!empty($depart) && $depart != 'all')
		{

			$this->db->where('u.depart_id',$depart);
		
		}

      	$this->db->order_by('u.id','desc');
      
      	$this->db->limit($rowperpage, $rowno);

		  
      	return $this->db->get()->result();


  	}
	


}
