<?php

class Timetable_model extends CI_Model {


  public function getRecords() {

    $this->db->select('t.*,t.id, c.name campus_name, d.name depart_name, f.name faculty_name, CONCAT(u.title," ", u.full_name) username');
    $this->db->from('timetable t');
    $this->db->where('t.is_archived', 0);
    $this->db->join('campus c', 'c.id = t.campus_id', 'LEFT');
    $this->db->join('departments d', 'd.id = t.depart_id', 'LEFT');
    $this->db->join('faculties f', 'f.id = t.faculty_id', 'LEFT');
    $this->db->join('users u', 'u.id = t.user_id', 'LEFT');
    return $this->db->get()->result();
  }

}
