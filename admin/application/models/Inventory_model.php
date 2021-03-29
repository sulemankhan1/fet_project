<?php

class Inventory_model extends CI_Model
{

public function getAllLabs(){

 $this->db->select('l.*');
 $this->db->from('labs l');
 $this->db->join('departments d','d.depart_id = l.depart_id');
 $this->db->join('college c','c.id = l.college_id');
 $query = $this->db->get();
 $res   = $query->result();
 return $res;


}



public function createInventry($data){

 $this->db->trans_begin();

$this->db->query("INSERT INTO chemical_storage(user_id,barcode,lab_id,location_in_lab,sub_location_in_lab,type,vender,item_name,catalog_number,lot_number,registry_number,item_url,unit_size,qty,exp_date,invoice_no,po,details,note)VALUES('".$data['user_id']."','".$data['barcode']."','".$data['lab_id']."','".$data['location_in_lab']."','".$data['sub_location_in_lab']."','".$data['type']."','".$data['vender']."','".$data['item_name']."','".$data['catalog_number']."','".$data['lot_number']."','".$data['registry_number']."','".$data['item_url']."','".$data['unit_size']."','".$data['qty']."','".$data['exp_date']."','".$data['invoice_no']."','".$data['po']."','".$data['details']."','".$data['note']."')");
$insert_id = $this->db->insert_id();
$type="add";
$this->db->query("INSERT INTO chemical_inventory(chemical_storage_id,type)VALUES('".$insert_id."','".$type."')");

foreach ($data['img'] as $key => $img) {

    $file_name = $data['file_name'][$key];
	 $this->db->query("INSERT INTO inventory_files(chemical_storage_id,file_name,img)VALUES('".$insert_id."','".$file_name."','".$img."')");

}


if ($this->db->trans_status() === FALSE)
{
        $this->db->trans_rollback();
        return false;
}
else
{
        $this->db->trans_commit();
        return true;
}


}

    public function getAllowedColumns($table_name)
    {

      $columns = $this->getWhere('table_manager',$table_name,1);
      $cols ='';
      foreach ($columns as $key => $column)
      {
          if($column->column_name=="request_by"){
            $column->column_name = "username";
          }
          if($column->column_name=='barcode'){
            continue;
          }
          if($column->column_name=='college_name'){
            continue;
          }
          if($column->column_name=='department_name'){
            continue;
          }


          if($column->column_name=="lab_id"){
            $column->column_name = 'chemical_storage.lab_id';
          }
          if($column->column_name=="user_id"){
            continue;
          }

          $cols .= $column->column_name.',';

      }

       $cols = rtrim($cols, ",");
       return $cols;

    }

    function make_query()
    {
            $coulumns = $this->getAllowedColumns('chemical_storage');
            $this->db->select('chemical_storage.id,'.$coulumns.',labs.lab_name,departments.depart_name,college.colg_name');
            $this->db->from('chemical_storage');
            $this->db->join('labs','labs.lab_id=chemical_storage.lab_id');
            $this->db->join('departments','departments.depart_id=labs.depart_id');
            $this->db->join('college','college.id=labs.college_id');


            if(@$_POST["search"]["value"] != '')
            {

              $this->db->group_start();

              $expdate = date('Y-m-d',strtotime($_POST["search"]["value"]));
              $this->db->or_like('chemical_storage.exp_date',$expdate);
              $this->db->group_end();

            }

            if($this->session->userdata('chem_inv_vis')=='yes'){

              $this->db->where('chemical_storage.user_id',$this->session->userdata('user_id'));

            }

    }

    function make_datatables()
    {

         $this->make_query();


         if(isset($_POST["order"]))
         {
             $order_by = $_POST['order']['0'];
             $this->db->order_by($order_column[$order_by['column']], $order_by['dir']);

         }else{
           $this->db->order_by('chemical_storage.id', 'DESC');
         }

         if(@$_POST["length"] != '')
         {

           $this->db->limit(@$_POST['length'], @$_POST['start']);

         }


         $query = $this->db->get();
         return $query->result();

    }

    function get_filtered_data()
    {

         $this->make_query();

         $query = $this->db->get();

         return $query->num_rows();

    }

    function get_all_data()
    {

      $this->db->select('chemical_storage.*,labs.lab_name,departments.depart_name,college.colg_name');
      $this->db->from('chemical_storage');
      $this->db->join('labs','labs.lab_id=chemical_storage.lab_id');
      $this->db->join('departments','departments.depart_id=labs.depart_id');
      $this->db->join('college','college.id=labs.college_id');

      if($this->session->userdata('chem_inv_vis')=='yes'){

        $this->db->where('chemical_storage.user_id',$this->session->userdata('user_id'));

      }

      return $this->db->count_all_results();

    }

    public function createInvRequests($data)
    {

       $res = $this->db->insert('chemical_inventory_requests',$data);

       return $res;
       // var_dump($res);die;

    }

    function make_requests_query()
    {

          $cols = $this->getInvyReqColumnsName();

          $this->db->select('cir.id,'.$cols);
          $this->db->from('chemical_inventory_requests cir');
          $this->db->join('labs l','l.lab_id=cir.lab_id');
          $this->db->join('departments d','d.depart_id=l.depart_id');
          $this->db->join('college c','c.id=l.college_id');
          $this->db->join('users u','u.user_id=cir.request_by');

          // if($this->session->userdata('role_id') !=1){
          //    if($this->session->userdata('chem_inv_vir')=='yes'){
          //     $this->db->where('request_by',$this->session->userdata('user_id'));
          //    }
          // }

          if(@$_POST["search"]["value"] != '')
          {

            $this->db->group_start();

            $like_columns = explode(',',$cols);
            foreach ($like_columns as $v) {

              $this->db->or_like($v,$_POST["search"]["value"]);

            }

            $this->db->group_end();

          }

          if(isset($_POST["order"]))
          {
              $order_by = $_POST['order']['0'];

              $order_column = explode(',',$cols);

              $inserted = array( 'null','null' );

              array_splice($order_column, 0, 0, $inserted );

              $this->db->order_by($order_column[$order_by['column']], $order_by['dir']);

          }else{
            $this->db->order_by('cir.id', 'DESC');
          }

    }

    function make_requests_datatables()
    {

         $this->make_requests_query();

         if(@$_POST["length"] != '')
         {

              $this->db->limit(@$_POST['length'], @$_POST['start']);

         }


         $query = $this->db->get();
         return $query->result();

    }

    function get_requests_filtered_data()
    {

         $this->make_requests_query();

         $query = $this->db->get();

         return $query->num_rows();

    }

    function get_requests_all_data()
    {

        $cols = $this->getInvyReqColumnsName();

        $this->db->select('cir.id,'.$cols);
        $this->db->from('chemical_inventory_requests cir');
        $this->db->join('labs l','l.lab_id=cir.lab_id');
        $this->db->join('departments d','d.depart_id=l.depart_id');
        $this->db->join('college c','c.id=l.college_id');
        $this->db->join('users u','u.user_id=cir.request_by');

        return $this->db->count_all_results();

    }

    public function getSingleRecord($table_name,$where,$id)
    {

      $query = $this->db->select('chemical_storage.*,labs.lab_name,departments.depart_name,college.colg_name')->from($table_name)
      ->join('labs','labs.lab_id=chemical_storage.lab_id')
      ->join('departments','departments.depart_id=labs.depart_id')
        ->join('college','college.id=labs.college_id')->where($table_name.'.'.$where,$id)->get();
      $result= $query->result();
      //  echo "<pre>";
      // print_r($result);die;
      $date = strtotime($result[0]->exp_date);
      $result[0]->{'exp_date'} = date('Y-m-d',$date);
      return $result;

    }

    public function updateRecord($table_name,$where,$id,$data){

    // $result = $this->db->where('id', $id)->update($table_name,$data);
    // return $result;

      $this->db->trans_begin();

      $this->db->where('id', $id)->update($table_name,$data['post']);
       // print_r($data['img']);die;
          $this->db->where('chemical_storage_id',$id)->delete('inventory_files');
          //$data=array();['chemical_storage_id'=>$id,'img'=>]
      foreach ($data['img'] as $key => $img) {

            $file_name = $data['file_name'][$key];

            $file = $img;

            if ($img == '') {

              $file =  $data['old_file'][$key];

            }

           $this->db->insert('inventory_files',['chemical_storage_id'=>$id,'file_name'=>$file_name,'img'=>$file]);
      }

         //print_r($arr);die;

      if ($this->db->trans_status() === FALSE)
      {
              $this->db->trans_rollback();
              return false;
      }
      else
      {
              $this->db->trans_commit();
              return true;
      }


    }


    public function deleteInv($table_name,$id){
      $res = $this->db->where('id',$id)->delete($table_name);
      return $res;
    }

    public function getSingleRequest($table_name,$where,$id){

      $res =  $this->db->select('*')->from($table_name)->where($where,$id)->get();
      $res = $res->result();
      $from_date = strtotime($res[0]->from_date);
      $res[0]->{'from_date'} = date('Y-m-d',$from_date);
      $to_date = strtotime($res[0]->to_date);
      $res[0]->{'to_date'} = date('Y-m-d',$to_date);
      return $res;

    }

    public function updateRequest($table_name,$where,$id,$data){
    unset($data['id']);
    $result = $this->db->where($where,$id)->update($table_name,$data);
    return $result;

    }

    public function deleteRequest($id){

      $res =  $this->db->where('id',$id)->delete('chemical_inventory_requests');
      return $res;

    }

    public function getRequests($table_name,$where,$id){
    $res  =  $this->db->select('*')->from($table_name)->join('labs','labs.lab_id=chemical_inventory_requests.lab_id')->where($where,$id)->get();
      return $res->result();
    }

    public function getFiles($table_name,$where,$id){

      $query = $this->db->select('*')->from($table_name)->where($where,$id)->get();
      $res   = $query->result();
      return $res;
      // echo "<pre>";
      // print_r($res);die;
    }

    public function changeRequestStatus($table_name='',$where='',$id='',$data){

     $result = $this->db->where($where,$id)->update($table_name,$data);
     return $result;

    }

  // Serach by a column with value provided and return result
    public function getWhere($tbl_name,$column_name,$is_allowed) {

      $query = $this->db->select('*')->from($tbl_name)->join('column_manager','column_manager.table_manager_id='.$tbl_name.'.id')->where('table_name
        ',$column_name)->where('is_allowed',$is_allowed)->get();
      return $query->result();


    }

    public function getAllColumns($tbl_name,$column_name){

     $query = $this->db->select('*')->from($tbl_name)->join('column_manager','column_manager.table_manager_id='.$tbl_name.'.id')->where('table_name
        ',$column_name)->get();
      return $query->result();

    }


    public function updateColumns($data){


      foreach ($data as $key => $rs) {

        $this->db->set('is_allowed', $rs);
        $this->db->where('column_name',$key);
        $this->db->update('column_manager');

       }
      return true;
    }

    public function allData($id=""){

            $columns = $this->getWhere('table_manager','chemical_inventory_requests',1);
              $cols ='';
              foreach ($columns as $key => $column) {
                if($column->column_name=="request_by"){
                  $column->column_name = "username";
                }
               $cols .= $column->column_name.',';
              }
             $cols = rtrim($cols, ",");


                $this->db->select('id,'.$cols);
                $this->db->from('chemical_inventory_requests');
                $this->db->join('labs','labs.lab_id=chemical_inventory_requests.lab_id');
                $this->db->join('users','users.user_id=chemical_inventory_requests.request_by');
                $this->db->where('id',$id);
                $this->db->order_by('id', 'ASC');
                $query = $this->db->get();
                $res = $query->result_array();
                return $res;



 }

  public function getStorageData($id="")
  {
      $cols = $this->getAllowedColumns('chemical_storage');

      $this->db->select('id,'.$cols);
      $this->db->from('chemical_storage');
      $this->db->join('labs','labs.lab_id=chemical_storage.lab_id');
      $this->db->join('users','users.user_id=chemical_storage.user_id');
      $this->db->where('id',$id);
      $this->db->order_by('id', 'ASC');
      $query = $this->db->get();
      $res = $query->result_array();
      return $res;
  }

  public function getStorages($table_name,$where,$id)
  {

      $cols = $this->getAllowedColumns('chemical_storage');

      $this->db->select('id,'.$cols);
      $this->db->from('chemical_storage');
      $this->db->join('labs','labs.lab_id=chemical_storage.lab_id');
      $this->db->join('users','users.user_id=chemical_storage.user_id');
      $this->db->where($where,$id);
      $query = $this->db->get();
      $res = $query->result();
      return $res;

    }



    //    foreach ($data['checkbox_value'] as $key => $id) {

    //      $this->db->where('id',$id)->delete($table_name);
    //    }
    //   return true;

    //  }


     private function getInvyReqColumnsName()
     {
         $columns = $this->getWhere('table_manager','chemical_inventory_requests',1);
        //  print_r($columns);die;
         $cols ='';

         foreach ($columns as $key => $column)
         {

           if($column->column_name=="request_by")
           {

             $column->column_name = "username";

           }

          $cols .= $column->column_name.',';

         }

        $cols = rtrim($cols, ",");
        // echo $cols;die;
        return $cols;

     }


}
