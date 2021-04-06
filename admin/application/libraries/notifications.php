<?php
/*
 *
 * Custom Notification Library
 * Written by: M.suleman khan
 * www.alphinex.com
 *
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Notifications  {

  protected $CI;
  public function __construct() {
    $this->CI =& get_instance();
    $this->CI->load->database();
    $this->CI->load->library('session');
  }

  // if user id is not provided notification will be added for the logged in user automatically
  // msg is the notification text  redirect link is the route (not complete url)
  //on which when clicked the system will be redirected
  public function add($msg, $redirect_link, $user_id="") {
    $array = array(
      'msg' => $msg,
      'redirect_link' => $redirect_link,
      'for_user_id' => ($user_id == "") ? $this->CI->session->userdata('user_id') : $user_id,
    );
    return $this->CI->db->insert('sys_notifications', $array);
  }

  // returns all notifications for current user
  // if type is provided eg: seen then it will return all seen notifications
  public function getAllForUser($type="") {

    // get notifications for logged in user
    $this->CI->db->from('sys_notifications');

    $this->CI->db->where('for_user_id', $this->CI->session->userdata('user_id'));

    $this->CI->db->order_by('id','desc');

    if($type == "seen") {
      $this->CI->db->where('is_seen', 1);
    } else {
      $this->CI->db->where('is_seen', 0);
    }

    return $this->CI->db->get()->result();
  }

  // mark all notifications as seen for current user by default
  // or a user by id if provided
  public function mark_all_seen($user_id="") {

    $this->CI->db->set('is_seen', 1);
    if($user_id != "") {
      $this->CI->db->where('for_user_id', $user_id);
    } else {
      $this->CI->db->where('for_user_id', $this->CI->session->userdata('user_id'));
    }
    return $this->CI->db->update('sys_notifications');
  }

  private function mark_seen($notification_id) {
    $this->CI->db->set('is_seen', 1);
    $this->CI->db->where('id', $notification_id);
    return $this->CI->db->update('notifications');
  }

  public function open_notification($notification_id) {
    $notification = $this->CI->db->get_where('sys_notifications', array('id'=>$notification_id))->row();
    $this->mark_seen($notification_id);
    redirect($notification->redirect_link);
  }

}
