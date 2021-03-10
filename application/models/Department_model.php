<?php
/**
*
*/
class Department_model extends CI_Model
{

  var $order_column = array(null, "college.colg_name", "departments.depart_numb", "departments.depart_name", "departments.depart_description" ,"departments.created_at",null);
 function make_query()
 {

     $this->db->select('departments.*,college.colg_name');
     $this->db->from('departments');
     $this->db->join('college','college.id=departments.college_id');


     if(@$_POST["search"]["value"] != '')
     {

       $this->db->group_start();
       $sval = date('Y-m-d',strtotime($_POST["search"]["value"]));
       $this->db->or_like('departments.created_at',$sval);
       $this->db->or_like('college.colg_name',@$_POST["search"]["value"]);
       $this->db->or_like('departments.depart_numb',@$_POST["search"]["value"]);
       $this->db->or_like('departments.depart_name',@$_POST["search"]["value"]);
       $this->db->or_like('departments.depart_description',@$_POST["search"]["value"]);
       $this->db->group_end();

     }

     if(isset($_POST["order"]))
     {
         $order_by = $_POST['order']['0'];

         $this->db->order_by($this->order_column[$order_by['column']], $order_by['dir']);

     }
     else
     {
          $this->db->order_by('depart_id','desc');
     }

     if ($this->session->userdata('is_depart_ps') == 'yes') {

       $this->db->where('departments.depart_id',$this->session->userdata('depart_id'));

     }
     elseif ($this->session->userdata('is_depart_s_colg') == 'yes') {

       $this->db->where('departments.college_id',$this->session->userdata('college_id'));

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
   $this->db->from('departments');
   $this->db->join('college','college.id=departments.college_id');

   if ($this->session->userdata('is_depart_ps') == 'yes') {

     $this->db->where('departments.depart_id',$this->session->userdata('depart_id'));

   }
   elseif ($this->session->userdata('is_depart_s_colg') == 'yes') {

     $this->db->where('departments.college_id',$this->session->userdata('college_id'));

   }

   return $this->db->count_all_results();

 }

 function get_excel_data_by_ids($ids_arr)
 {

   $this->db->select('c.colg_name, d.depart_numb, d.depart_name, d.depart_description, d.created_at');
   $this->db->from('departments d');
   $this->db->join('college c','c.id=d.college_id');

   if(!empty($ids_arr)) {
     $this->db->where_in('d.depart_id', $ids_arr);
   }

   return $this->db->get()->result_array();

 }

 function getDepartmentDetails($id)
 {

   $this->db->select('*');
   $this->db->from('departments');
   $this->db->join('college','college.id=departments.college_id');

   $this->db->where('departments.depart_id',$id);

   return $this->db->get()->row();

 }



}
