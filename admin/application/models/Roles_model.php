<?php
/**
*
*/
class Roles_model extends CI_Model
{

  var $order_column = array(null, "role_name",null);
 function make_query()
 {

   $this->db->select('*');
   $this->db->from('roles');

   if (@$_POST["search"]["value"] != '') {

     $this->db->group_start();
     $this->db->or_like('role_name',@$_POST["search"]["value"]);
     $this->db->group_end();

   }

     if(isset($_POST["order"]))
     {
         $order_by = $_POST['order']['0'];

         $this->db->order_by($this->order_column[$order_by['column']], $order_by['dir']);

     }
     else
     {
          $this->db->order_by('role_id','desc');
     }

 }

 function make_datatables(){

      $this->make_query();

      if(@$_POST["length"] != '')
      {

           $this->db->limit(@$_POST['length'], @$_POST['start']);

      }


      $query = $this->db->get();
      return $query->result();

 }

 function get_filtered_data(){

      $this->make_query();

      $query = $this->db->get();

      return $query->num_rows();

 }

 function get_all_data()
 {

   $this->db->select('*');
   $this->db->from('roles');

   return $this->db->count_all_results();

 }

  public function getRoles($search_val='',$id='')
  {
      $this->db->select('*');
      $this->db->from('roles');

      if ($search_val != '') {

        $this->db->or_like('roles.role_name',$search_val);

      }
      if ($id != '') {

        $this->db->where('role_id !=',$id);

      }

      // $this->db->where('role_id!=',1);
      $this->db->order_by('role_id','desc');
      return $this->db->get()->result();
  }



}
