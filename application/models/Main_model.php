<?php

/**
 *
 */
class Main_model extends CI_Model
{

  // countcolleges
  public function getCollegesCount()
  {
    $this->db->select('count(id) as total_count');
    $this->db->from('college');

    if ($this->session->userdata('is_college_ps') == 'yes') {

      $this->db->where('id',$this->session->userdata('college_id'));

    }

    return $this->db->get()->row();

  }

  // countdepartments
  public function getDepartmentsCount()
  {
    $this->db->select('count(departments.depart_id) as total_count');
    $this->db->from('departments');
    $this->db->join('college','college.id=departments.college_id');

    if ($this->session->userdata('is_depart_ps') == 'yes') {

      $this->db->where('departments.depart_id',$this->session->userdata('depart_id'));

    }
    else if ($this->session->userdata('is_depart_s_colg') == 'yes') {

      $this->db->where('departments.college_id',$this->session->userdata('college_id'));

    }

    return $this->db->get()->row();

  }

  // countlabs
  public function getlabsCount()
  {

    $this->db->select('count(l.lab_id) as total_count');
    $this->db->from('labs l');
    $this->db->join('departments d','d.depart_id=l.depart_id');
    $this->db->join('college c','c.id=l.college_id');


    if ($this->session->userdata('is_lab_ps') == 'yes') {

        $this->db->where('l.lab_id',$this->session->userdata('lab_id'));

    }
    else if ($this->session->userdata('is_lab_s_colg') == 'yes') {

      $this->db->where('l.college_id',$this->session->userdata('college_id'));

    }
    else if ($this->session->userdata('is_lab_s_depart') == 'yes') {

      $this->db->where('l.depart_id',$this->session->userdata('depart_id'));

    }

    return $this->db->get()->row();

  }

  // countmachines
  public function getMachinesCount()
  {

    $this->db->select('count(m.machine_id) as total_count');
    $this->db->from('machines m');
    $this->db->join('labs l','l.lab_id=m.lab_id');
    $this->db->join('departments d','d.depart_id=m.depart_id');
    $this->db->join('college c','c.id=m.college_id');

    if($this->session->userdata('is_machine_colg_s') == 'yes'){

        $this->db->where('m.college_id',$this->session->userdata('college_id'));

    }
    elseif($this->session->userdata('is_machine_depart_s') == 'yes'){

        $this->db->where('m.depart_id',$this->session->userdata('depart_id'));

    }
    elseif($this->session->userdata('is_machine_lab_s') == 'yes'){

        $this->db->where('m.lab_id',$this->session->userdata('lab_id'));

    }

    return $this->db->get()->row();

  }





  // countusers
  public function getUsersCount($status)
  {

    $this->db->select('count(u.user_id) as total_count');
		$this->db->from('users u');
		$this->db->join('users_info ui','ui.user_id=u.user_id');
		$this->db->join('roles r','r.role_id=u.user_status');


		 $this->db->where('u.is_active',$status);

		 $this->db->where('u.user_status_type !=',1);

		 return $this->db->get()->row();

  }

  // countorders
  public function getOrdersCount()
  {

    $this->db->select('count(o.order_id) as total_count');
    $this->db->from('orders o');
    $this->db->join('users u','u.user_id=o.order_by');
    $this->db->join('labs l','l.lab_id=o.lab_id');
    $this->db->join('departments d','d.depart_id=o.depart_id');
    $this->db->join('college c','c.id=o.college_id');


     if ($this->session->userdata('is_order_ps') == 'yes') {

       $this->db->where('o.order_by',$this->session->userdata('user_id'));

     }
     elseif($this->session->userdata('is_order_s_colg') == 'yes'){

         $this->db->where('o.college_id',$this->session->userdata('college_id'));

     }
     elseif($this->session->userdata('is_order_s_depart') == 'yes'){

         $this->db->where('o.depart_id',$this->session->userdata('depart_id'));

     }
     elseif($this->session->userdata('is_order_s_lab') == 'yes'){

         $this->db->where('o.lab_id',$this->session->userdata('lab_id'));

     }



     return $this->db->get()->row();

  }

  public function getLatestFifteenMachines()
  {

    $this->db->select('m.machine_id,m.machine_name,m.machine_img,m.machine_description,m.is_machine_active,m.machine_type,m.lab_id,.m.depart_id,m.college_id');
    $this->db->from('machines m');
    $this->db->join('labs l','l.lab_id=m.lab_id');
    $this->db->join('departments d','d.depart_id=m.depart_id');
    $this->db->join('college c','c.id=m.college_id');

    if($this->session->userdata('is_machine_colg_s') == 'yes'){

        $this->db->where('m.college_id',$this->session->userdata('college_id'));

    }
    elseif($this->session->userdata('is_machine_depart_s') == 'yes'){

        $this->db->where('m.depart_id',$this->session->userdata('depart_id'));

    }
    elseif($this->session->userdata('is_machine_lab_s') == 'yes'){

        $this->db->where('m.lab_id',$this->session->userdata('lab_id'));

    }

    $this->db->limit(15);
    $this->db->order_by('m.machine_id','desc');

    return $this->db->get()->result();

  }


  public function getDepartmentsByColgId($id='')
  {

    $this->db->select('d.*');
    $this->db->from('departments d');
    $this->db->join('college c','c.id = d.college_id');

    if ($id != '') {

      $this->db->where('d.college_id',$id);

    }

    return $this->db->get()->result();

  }

  public function getProgramsByDepartId($id)
  {

    $this->db->select('dp.*');
    $this->db->from('departments_programs dp');
    $this->db->join('departments d','d.depart_id = dp.depart_id');

    if ($id != '') {

      $this->db->where('dp.depart_id',$id);

    }

    return $this->db->get()->result();

  }

  public function getLabsByDepartId($id='')
  {

    $this->db->select('l.*');
    $this->db->from('labs l');
    $this->db->join('departments d','d.depart_id = l.depart_id');
    $this->db->join('college c','c.id = l.college_id');

    if ($id != '') {

      $this->db->where('l.depart_id',$id);

    }

    return $this->db->get()->result();

  }

  public function getEquipmentByLabId($id='')
  {
    $this->db->select('m.*');
    $this->db->from('machines m');
    $this->db->join('college c','c.id = m.college_id');
    $this->db->join('departments d','d.depart_id = m.depart_id');
    $this->db->join('labs l','l.lab_id = m.lab_id');

    if ($id != '') {

      $this->db->where('m.lab_id',$id);

    }

    return $this->db->get()->result();

  }



}
