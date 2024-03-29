<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Main extends CI_Controller
{
    function __construct() {
      parent::__construct();

      // validate user logged in
      if (empty($this->session->userdata('username'))) {
          redirect('login');
      }
    }

    public function getDepartByFacId($id, $selected_depart_id = "") {

      if($id) {
        $departments = $this->bm->getWhere('departments', 'fac_id', $id);

  	    $output = '';
        // $output .= '<option value=""> -- Select -- </option>';
        $output .= '<option value="all" '.(($selected_depart_id == 'all')?'selected':'').'>All Departments</option>';
        foreach ($departments as $v) {
          $selected = "";
          if($selected_depart_id != "" && $v->id == $selected_depart_id) {
            $selected = "selected";
          }
          $output .='<option value="'.$v->id.'" '.$selected.'>'.$v->name.'</option>';
        }

  	    echo $output;
      }
    }

    public function getProgramsByDeptId($id, $selected_program_id="") {

      if($id) {
        $programs = $this->bm->getWhere('programs', 'depart_id', $id);
  	    $output = '';
        // $output .= '<option value=""> -- Select -- </option>';
        $output .= '<option value="all" '.(($selected_program_id == 'all')?'selected':'').'>All Programs</option>';
        foreach ($programs as $v) {
          $selected = "";
          if($selected_program_id != "" && $v->id == $selected_program_id) {
            $selected = "selected";
          }
          $output .='<option value="'.$v->id.'" '.$selected.'>'.$v->program_title.'</option>';
        }

  	    echo $output;
      }
    }

}
