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

    public function getDepartByFacId($id) {
      if($id) {
        $departments = $this->bm->getWhere('department', 'FAC_ID', $id);

  	    $output = '';
        $output .= '<option value=""> -- Select -- </option>';
        $output .= '<option value="all">All Departments</option>';
        foreach ($departments as $v) {
          $output .='<option value="'.$v->DEPT_ID.'">'.$v->DEPT_NAME.'</option>';
        }

  	    echo $output;
      }
    }

    public function getProgramsByDeptId($id) {
      if($id) {
        $programs = $this->bm->getWhere('program', 'DEPT_ID', $id);
  	    $output = '';
        $output .= '<option value=""> -- Select -- </option>';
        $output .= '<option value="all">All Programs</option>';
        foreach ($programs as $v) {
          $output .='<option value="'.$v->PROG_ID.'">'.$v->PROGRAM_TITLE.'</option>';
        }

  	    echo $output;
      }
    }

}
