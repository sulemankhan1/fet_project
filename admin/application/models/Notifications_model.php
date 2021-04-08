<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifications_model extends CI_Model
{

  public function getNotifications() {
    $this->db->select('*');
    $this->db->select('n.*, u.username as username, nt.name as notification_type');
    $this->db->from('news_notifications n');
    $this->db->join('users u', 'n.publisher_id = u.id');
    $this->db->join('notification_type nt', 'n.notify_type_id = nt.id');
    $this->db->order_by('n.id', 'desc');
    return $this->db->get()->result();
  }

  public function getNotification($id) {
    // $this->db->select('n.*, f.FAC_NAME, d.DEPT_NAME, p.PROGRAM_TITLE, u.FULL_NAME as username, nt.NAME as NOTIFICATION_TYPE');
    $this->db->select('n.*, u.username as username, nt.name as notification_type');
    $this->db->from('news_notifications n');
    // $this->db->join('faculty f', 'n.FAC_ID = f.FAC_ID');
    // $this->db->join('department d', 'n.DEPT_ID = d.DEPT_ID');
    // $this->db->join('program p', 'n.PROG_ID = p.PROG_ID');
    $this->db->join('notification_type nt', 'n.notify_type_id = nt.id');
    $this->db->join('users u', 'n.publisher_id = u.id');
    $this->db->order_by('n.id', 'desc');

    return $this->db->get()->row();
  }

}
