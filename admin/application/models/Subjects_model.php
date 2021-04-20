<?php
class Subjects_model extends CI_Model {

  public function getSubjects() {
    $this->db->select("s.*, c.name campus_name, d.name depart_name, f.name faculty_name");
    $this->db->from("subjects s");
    $this->db->join('campus c', 'c.id = s.campus_id', 'LEFT');
    $this->db->join('departments d', 'd.id = s.depart_id', 'LEFT');
    $this->db->join('faculties f', 'f.id = s.faculty_id', 'LEFT');
    $this->db->where('s.is_archived', 0);
    $this->db->order_by('s.id', 'desc');

    return $this->db->get()->result();
  }
  public function getSubject($id) {
    $this->db->select("s.*, c.name campus_name, d.name depart_name, f.name faculty_name");
    $this->db->from("subjects s");
    $this->db->join('campus c', 'c.id = s.campus_id', 'LEFT');
    $this->db->join('departments d', 'd.id = s.depart_id', 'LEFT');
    $this->db->join('faculties f', 'f.id = s.faculty_id', 'LEFT');
    $this->db->where('s.is_archived', 0);
    $this->db->where('s.id', $id);
    $this->db->order_by('s.id', 'desc');

    return $this->db->get()->row();
  }

  public function subjectAlreadyExist($title) {
    return $this->db->get_where('subjects s', array('s.subject_title' => $title))->num_rows();
  }

}
