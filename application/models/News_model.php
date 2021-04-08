<?php

class News_model extends CI_Model {

  public function getHeadlines($no_of_records = 10) {
    $this->db->select('n.title');
    $this->db->from('news_notifications n');
    $this->db->where('n.is_archieved', 0);
    $this->db->where('n.in_draft', 0);
    $this->db->limit($no_of_records);
    $this->db->order_by('n.id', 'desc');
    return $this->db->get()->result();
  }

  public function getNotices($no_of_records = 5) {
    $this->db->select('n.*, nt.name as notify_type_name');
    $this->db->from('news_notifications n');
    $this->db->join("notification_type nt", "n.notify_type_id = nt.id AND nt.name = 'student notice'");
    $this->db->where('n.is_archieved', 0);
    $this->db->where('n.in_draft', 0);
    $this->db->limit($no_of_records);
    $this->db->order_by('n.id', 'desc');
    return $this->db->get()->result();
  }

  public function getLatestNews($no_of_records = 10) {
    $this->db->select('n.*');
    $this->db->from('news_notifications n');
    $this->db->where('n.is_archieved', 0);
    $this->db->where('n.in_draft', 0);
    $this->db->limit($no_of_records);
    $this->db->order_by('n.id', 'desc');
    return $this->db->get()->result();
  }

}
