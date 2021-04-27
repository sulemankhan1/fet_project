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

}
