<?php

class Pages_model extends CI_Model {


  public function getTopKeywords() {
    $this->db->select('COUNT(k.id) as keyword_count, k.keyword');
    $this->db->from('keywords k');
    $this->db->where('k.type', 'news');
    $this->db->group_by('k.keyword');
    $this->db->order_by('keyword_count', 'desc');
    return $this->db->get()->result();
  }

}
