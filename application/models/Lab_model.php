<?php
/**
*
*/
class Lab_model extends CI_Model
{

  var $order_column = array(null, "c.colg_name", "d.depart_name", "l.lab_numb", "l.lab_name","l.lab_description",null);

 function make_query()
 {

     $this->db->select('l.*,d.depart_name,d.depart_numb,c.colg_name');
     $this->db->from('labs l');
     $this->db->join('departments d','d.depart_id=l.depart_id');
     $this->db->join('college c','c.id=d.college_id');

     if(@$_POST["search"]["value"] != '')
     {

       $this->db->group_start();
       $sval = date('Y-m-d',strtotime($_POST["search"]["value"] ));
       $this->db->or_like('l.created_at',$sval);
       $this->db->or_like('d.depart_name',$_POST["search"]["value"]);
       $this->db->or_like('c.colg_name',$_POST["search"]["value"]);
       $this->db->or_like('l.lab_numb',$_POST["search"]["value"]);
       $this->db->or_like('l.lab_name',$_POST["search"]["value"]);
       $this->db->or_like('l.lab_description',$_POST["search"]["value"]);
       $this->db->group_end();

     }

     if(isset($_POST["order"]))
     {
         $order_by = $_POST['order']['0'];

         $this->db->order_by($this->order_column[$order_by['column']], $order_by['dir']);

     }
     else
     {
          $this->db->order_by('l.lab_id','desc');
     }

     if ($this->session->userdata('is_lab_ps') == 'yes') {

         $this->db->where('l.lab_id',$this->session->userdata('lab_id'));

     }
     elseif ($this->session->userdata('is_lab_s_colg') == 'yes') {

         $this->db->where('l.college_id',$this->session->userdata('college_id'));

     }
     elseif ($this->session->userdata('is_lab_s_depart') == 'yes') {

         $this->db->where('l.depart_id',$this->session->userdata('depart_id'));

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
   $this->db->from('labs l');
   $this->db->join('departments d','d.depart_id=l.depart_id');
   $this->db->join('college c','c.id=d.college_id');

   if ($this->session->userdata('is_lab_ps') == 'yes') {

       $this->db->where('l.lab_id',$this->session->userdata('lab_id'));

   }
   elseif ($this->session->userdata('is_lab_s_colg') == 'yes') {

       $this->db->where('l.college_id',$this->session->userdata('college_id'));

   }
   elseif ($this->session->userdata('is_lab_s_depart') == 'yes') {

       $this->db->where('l.depart_id',$this->session->userdata('depart_id'));

   }

   return $this->db->count_all_results();

 }

 function get_excel_data_by_ids($ids_arr)
 {

   $this->db->select('c.colg_name, d.depart_name, l.lab_numb, l.lab_name, l.lab_description, l.created_at');
   $this->db->from('labs l');
   $this->db->join('departments d','d.depart_id=l.depart_id');
   $this->db->join('college c','c.id=d.college_id');

   if(!empty($ids_arr)) {
     $this->db->where_in('l.lab_id', $ids_arr);
   }

   return $this->db->get()->result_array();

 }

 public function getLabDetail($id)
 {

   $this->db->select('*');
   $this->db->from('labs l');
   $this->db->join('departments d','d.depart_id=l.depart_id');
   $this->db->join('college c','c.id=d.college_id');

   if ($id != '') {

      $this->db->where('l.lab_id',$id);

   }

   return $this->db->get()->row();

 }



}
