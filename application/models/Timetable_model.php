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

  public function getDetailRecords($timetable_id) {
    $this->db->select('td.*, u.title as user_title, u.full_name as user_fullname, s.subject_title, c.name class_name, s.course_code');
    $this->db->from('timetable_details td');
    $this->db->where('td.timetable_id', $timetable_id);
    $this->db->join('users u', 'u.id = td.teacher_id', 'LEFT');
    $this->db->join('subjects s', 's.id = td.subject_id', 'LEFT');
    $this->db->join('class_rooms c', 'c.id = td.classroom_id', 'LEFT');
    return $this->db->get()->result();
  }

}
