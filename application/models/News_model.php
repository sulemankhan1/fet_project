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

  public function getNotificationByTitle($title) {
    $this->db->select('n.*, u.title as user_title, u.full_name as user_fullname,
    u.image as user_img, u.email as user_email, u.id as user_id,
    nt.name as notification_type, u.bio user_bio');
    $this->db->from('news_notifications n');
    $this->db->join('notification_type nt', 'n.notify_type_id = nt.id');
    $this->db->join('users u', 'n.publisher_id = u.id');
    $this->db->where('n.title', $title);

    return $this->db->get()->row();
  }

  public function searchNews($query) {
    $this->db->select('n.*');
    $this->db->from('news_notifications n');
    $this->db->like('n.title', $query);

    return $this->db->get()->result();
  }
  public function getNewsByFilter($filter_type, $value) {
    $this->db->select('n.*');
    $this->db->from('news_notifications n');
    if($filter_type == 'notifications_for') {
      $this->db->where('n.notification_for', $value);
    }
    return $this->db->get()->result();
  }
  public function getNewsByKeywords($keyword) {
    $this->db->select('k.keyword, n.*');
    $this->db->from('news_notifications n');

    $this->db->join('keywords k', "k.news_id = n.id AND k.type = 'news'", 'full');
    $this->db->like('k.keyword', $keyword);
    $this->db->group_by('n.id');
    
    return $this->db->get()->result();
  }

}
