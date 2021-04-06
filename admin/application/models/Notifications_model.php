<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifications_model extends CI_Model
{

  public function getNotifications() {
    $this->db->select('*');
    $this->db->select('n.*, u.username as username, nt.NAME as NOTIFICATION_TYPE');
    $this->db->from('news_notifications n');
    $this->db->join('users u', 'n.PUBLISHER_ID = u.id');
    $this->db->join('notification_type nt', 'n.NOTIFY_TYPE_ID = nt.NOTIFY_TYPE_ID');
    $this->db->order_by('n.NOTIFICATION_ID', 'desc');
    return $this->db->get()->result();

  }

  public function getNotification($id) {
    // $this->db->select('n.*, f.FAC_NAME, d.DEPT_NAME, p.PROGRAM_TITLE, u.FULL_NAME as username, nt.NAME as NOTIFICATION_TYPE');
    $this->db->select('n.*,  u.username as username, nt.NAME as NOTIFICATION_TYPE');
    $this->db->from('news_notifications n');
    // $this->db->join('faculty f', 'n.FAC_ID = f.FAC_ID');
    // $this->db->join('department d', 'n.DEPT_ID = d.DEPT_ID');
    // $this->db->join('program p', 'n.PROG_ID = p.PROG_ID');
    $this->db->join('users u', 'n.PUBLISHER_ID = u.id');
    $this->db->join('notification_type nt', 'n.NOTIFY_TYPE_ID = nt.NOTIFY_TYPE_ID');
    $this->db->where('n.NOTIFICATION_ID', $id);

    return $this->db->get()->row();
  }

}
