<?php

class Basic_model extends CI_Model {



  // get record by id in table provided
  public function getById($tbl_name, $id) {
    return $this->db->get_where($tbl_name, array('id' => $id))->row();
  }

  // get record by array of ids
  public function getMultipleByIds($tbl_name, $ids_array) {
    $this->db->from($tbl_name);
    $this->db->where_in($ids_array);
    return $this->db->get()->result();
  }

  public function getByuserId($tbl_name, $id) {
    return $this->db->get_where($tbl_name, array('user_id' => $id))->row();
  }

  public function getBypassId($tbl_name, $id,$pass_id) {
    return $this->db->get_where($tbl_name, array($pass_id => $id))->row();
  }

public function QRrecordget($tbl_name, $col_name, $where_val){

  $query_obj = $this->db->get_where($tbl_name, array($col_name => $where_val));

  // check if result has multiple records
    return $query_obj->result_array(); // return multiple records


}
  public function getRowsWithMultipleWhere($tbl_name, $where_array)
  {

    $query_obj = $this->db->get_where($tbl_name, $where_array);

      return $query_obj->result(); // return multiple records

  }

  public function getWhereRows($tbl_name, $col_name, $where_val)
  {

    $query_obj = $this->db->get_where($tbl_name, array($col_name => $where_val));

      return $query_obj->result(); // return multiple records

  }

  // Serach by a column with value provided and return result
  public function getWhere($tbl_name, $col_name, $where_val) {

    $query_obj = $this->db->get_where($tbl_name, array($col_name => $where_val));

    // check if result has multiple records
    if($query_obj->num_rows() > 1) {
      return $query_obj->result(); // return multiple records
    } else {
      return $query_obj->row(); // return single record
    }

  }
  // Serach by a column with value provided and return result
  public function getWithMultipleWhere($tbl_name, $where_array) {

    $query_obj = $this->db->get_where($tbl_name, $where_array);

    // check if result has multiple records
    if($query_obj->num_rows() > 1) {
      return $query_obj->result(); // return multiple records
    } else {
      return $query_obj->row(); // return single record
    }

  }

  // update single record
  public function updateRow($tbl_name, $data, $col_name, $where_val) {
    return $this->db->update($tbl_name, $data, array($col_name => $where_val));
  }

  // update multiple records
  // third parameter is index from where the where value will be taken
  public function updateRows($tbl_name, $data, $index_of_where_val) {
    return $this->db->update_batch($tbl_name, $data, $index_of_where_val);
  }

  // Delete a record
  public function delete($tbl_name, $col_name, $where_val) {
    return $this->db->delete($tbl_name, array($col_name => $where_val));
  }
  public function deleteWithMultipleWhere($tbl_name, $arr) {
    return $this->db->delete($tbl_name, $arr);
  }

  // Delete a record / records with multiple conditions
  public function deleteWithMultiWhere($tbl_name, $where_arr) {
    return $this->db->delete($tbl_name, $where_arr);
  }

  // insert a record
  public function insertRow($tbl_name, $data) {
    $this->db->insert($tbl_name, $data);
    return $this->db->insert_id();
  }

  // insert multiple records
  public function insertRows($tbl_name, $data) {
    $this->db->insert_batch($tbl_name, $data);
  }

  // get complete table
  public function getAll($tbl_name, $order_col_name, $order_by_val='ASC') {
    $this->db->order_by($order_col_name, $order_by_val);
    return $this->db->get($tbl_name)->result();
  }

  //upload file
  function uploadFile($file, $uploads_dir) {

        set_time_limit(0);
        if($file['error'] != 0) {
          return "error";
        }
        if ($file['size'] > 0) {
            $pic_name = "";
            $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
            $pic_name = rand();
            $tmp_name = $file["tmp_name"];
            $pic_name.= $file["name"];
            move_uploaded_file($tmp_name, "$uploads_dir/$pic_name");

            return $pic_name;
        } else {
            return "";
        }
  }

  //upload_multi_files
  function uploadMultiFiles($files, $uploads_dir) {

        $uploaded_files_name = [];
        for ($i=0; $i < @count($files['name']); $i++) {

          if ($files['name'][$i] != '') {

              set_time_limit(0);

              if ($files['size'][$i] > 0) {

                  $pic_name = "";

                  $ext = pathinfo($files['name'][$i], PATHINFO_EXTENSION);

                  $pic_name = rand();

                  $tmp_name = $files["tmp_name"][$i];

                  $pic_name.= $files["name"][$i];

                  move_uploaded_file($tmp_name, "$uploads_dir/$pic_name");

                  $uploaded_files_name [] = $pic_name;

              } else {

                  $uploaded_files_name [] = '';

              }

          } else {

              $uploaded_files_name [] = '';

          }


        }

        return $uploaded_files_name;



  }


  public function getTableCount($primary_id,$table)
  {
      $this->db->select('count('.$primary_id.') as total_count');

      $this->db->from($table);

      return $this->db->get()->row();

  }

  public function getJoinTableCount($table_primary_id,$table1,$table2,$join)
  {
    $this->db->select('count('.$table_primary_id.') as total_count');

    $this->db->from($table1);
    $this->db->join($table2,$join);

    return $this->db->get()->row();
  }

  public function getTwoJoinTableCount($table_primary_id,$table1,$table2,$table3,$join1,$join2)
  {
    $this->db->select('count('.$table_primary_id.') as total_count');

    $this->db->from($table1);
    $this->db->join($table2,$join1);
    $this->db->join($table3,$join2);

    return $this->db->get()->row();
  }

  public function CheckUserNameSame($username , $id = '')
  {

        $this->db->select('u.*');
        $this->db->from('users u');
        $this->db->join('users_info ui','ui.user_id=u.user_id');
        $this->db->join('roles r','r.role_id=u.user_status');

        $this->db->where('u.username',$username);

        if ($id != '') {

            $this->db->where('u.user_id !=',$id);

        }

        $q = $this->db->get();

        if ($q) {

          return $q->result();

        }
        else
        {

          return false;

        }

  }


  public function CheckReEmailSame($email , $id = '')
  {

    $this->db->select('ui.*');
    $this->db->from('users u');
    $this->db->join('users_info ui','ui.user_id=u.user_id');
    $this->db->join('roles r','r.role_id=u.user_status');

    $this->db->where('ui.university_email',$email);

    if ($id != '') {

        $this->db->where('u.user_id !=',$id);

    }

    $q = $this->db->get();

    if ($q) {

      return $q->result();

    }
    else
    {

      return false;

    }

  }

  public function checkMachineName($machinename , $id = '')
  {

    $this->db->select('m.*');
    $this->db->from('machines m');
    $this->db->join('labs l','l.lab_id=m.lab_id');
    $this->db->join('departments d','d.depart_id=m.depart_id');
    $this->db->join('college c','c.id=m.college_id');

    $this->db->where('m.machine_name',$machinename);

    if ($id != '') {

        $this->db->where('m.machine_id !=',$id);

    }

    $q = $this->db->get();

    if ($q) {

      return $q->result();

    }
    else
    {

      return false;

    }

  }

}
