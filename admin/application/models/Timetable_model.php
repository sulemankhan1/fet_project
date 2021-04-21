<?php

class Timetable_model extends CI_Model {


    public function alreadyExist($data) {
      $this->db->select('*');
      $this->db->from('timetable t');
      $this->db->where('t.is_archived', 0);
      $this->db->where('t.campus_id', $data['campus_id']);
      $this->db->where('t.faculty_id', $data['faculty_id']);
      $this->db->where('t.depart_id', $data['depart_id']);
      $this->db->where('t.part', $data['part']);
      $this->db->where('t.semester', $data['semester']);
      $this->db->where('t.class_group', $data['class_group']);
      return $this->db->get()->num_rows();
    }
}
