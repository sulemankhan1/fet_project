<?php
class Classrooms_model extends CI_Model {

  public function getRecords() {
    $this->db->select("c.*, u.title user_title, u.full_name user_fullname");
    $this->db->from("class_rooms c");
    $this->db->join('users u', 'u.id = c.added_by');
    $this->db->where('c.is_archived', 0);
    $this->db->order_by('c.id', 'desc');

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

  public function classRoomAlreadyExist($room_no) {
    return $this->db->get_where('class_rooms c', array('c.room_no' => $room_no))->num_rows();
  }

}
