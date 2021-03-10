<?php


class Departments extends CI_Controller
{

    function __construct() {

        parent::__construct();

        if (empty($this->session->userdata('username'))) {

            redirect('login');

        }

        $this->load->model('Department_model','dm');


        if ($this->session->userdata('language_to_user') == 'AR') {

            $language = 'Arabic';
        }
        else{

          $language = 'Eng';

        }

          $this->load->language($language,$language);

    }

    public function add_departments()
    {

      if ($this->session->userdata('is_depart_a') != 'yes' && $this->session->userdata('is_depart_a_colg') != 'yes') {
        redirect('dashboard');
      }

      $data = [

        'title' => __('add_depart_txt'),

        'active_menu' => 'add_departments',

      ];

      if ($this->session->userdata('is_depart_a_colg') == 'yes')
      {

        $data['colleges'] = $this->bm->getById('college' , $this->session->userdata('college_id'));

      }
      else
      {

        $data['colleges'] = $this->bm->getAll('college', 'id', 'desc');

      }


      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('departments/add');
      $this->load->view('footer');
      $this->load->view('departments/script');

    }

    public function save_department()
    {

      if ($this->session->userdata('is_depart_a') != 'yes' && $this->session->userdata('is_depart_a_colg') != 'yes'
      && $this->session->userdata('is_depart_e') != 'yes') {
          redirect('dashboard');
      }

      $p = $this->input->post();

      $id = $p['id'];

      $program_name = $p['program_name'];
      $program_desc = $p['program_description'];

      unset($p['id']); unset($p['program_name']); unset($p['program_description']);

      if ($id != '') {

        if ($this->session->userdata('is_depart_e') != 'yes') {

            redirect('dashboard');

        }

        $this->session->set_flashdata(array('response' => 'success', 'msg' => __('department_update_success_txt') ));

        $res = $this->bm->updateRow('departments', $p, 'depart_id', $id);

        $this->bm->delete('departments_programs','depart_id',$id);

        $last_id = $id;

      }else{

        if ($this->session->userdata('is_depart_a') != 'yes' && $this->session->userdata('is_depart_a_colg') != 'yes') {

            redirect('dashboard');

        }

        $this->session->set_flashdata(array('response' => 'success', 'msg' => __('department_added_success_txt') ));

        $ins_id = $this->bm->insertRow('departments',$p);

        $arr = [

          'depart_numb' => 'depart_'.$ins_id

        ];

        $res = $this->bm->updateRow('departments', $arr, 'depart_id', $ins_id);

        $last_id = $ins_id;


      }

      if (count($program_name) > 0) {

        $arr = [];
        foreach ($program_name as $key => $v) {

          $arr[] = [
            'depart_id' => $last_id,
            'program_name' => $program_name[$key],
            'program_description' => $program_desc[$key]
          ];

        }

        $this->bm->insertRows('departments_programs', $arr);

      }

      redirect('departments');

    }

    public function view_departments($value='')
    {

      if ($this->session->userdata('is_depart_s') != 'yes' && $this->session->userdata('is_depart_ps') != 'yes'
      && $this->session->userdata('is_depart_s_colg') != 'yes') {
        redirect('dashboard');
      }

      $data = [

        'title' => __('view_depart_txt'),

        'active_menu' => 'view_departments'

      ];

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('departments/index');
      $this->load->view('footer');
      $this->load->view('departments/script');


    }

    public function getDepartments()
    {

      if ($this->session->userdata('is_depart_s') != 'yes' && $this->session->userdata('is_depart_ps') != 'yes'
      && $this->session->userdata('is_depart_s_colg') != 'yes') {
        redirect('dashboard');
      }

      $this->load->model('Department_model');

      $result = $this->Department_model->make_datatables();
      $filter_data = $this->Department_model->get_filtered_data();
      $all_data = $this->Department_model->get_all_data();

        $data = array();

        $sno = @$_POST['start']+1;
        foreach ($result as $v) {


          $sub_array = array();
          $sub_array[] = "<input type='checkbox' class='check' name='check[]' value='".$v->depart_id."' >";
          $sub_array[] = $sno; $buttons = "";
          $sub_array[] = $v->colg_name;
          $sub_array[] = $v->depart_numb;
          $sub_array[] = $v->depart_name;
          $sub_array[] = $v->depart_description;

          $sub_array[] = date('d-m-Y', strtotime($v->created_at));

          if ($this->session->userdata('is_depart_e') == 'yes') {
            $buttons .= "<a href='".site_url('edit_department/'.hashids_encrypt(@$v->depart_id))."' class='btn small-btn'><i class='icon-pencil'></i> ".__('edit_txt')."</a>";

          }

          if ($this->session->userdata('is_depart_d') == 'yes') {

            $buttons .="<a href='".site_url('delete_department/'.hashids_encrypt(@$v->depart_id))."' class='btn small-btn' onclick=\"return confirm('Are you sure you want to delete?')\" ><i class='icon-trash'></i> ".__('delete_txt')."</a>";

          }

          if ($this->session->userdata('is_depart_v') == 'yes') {

            $buttons .="<a href='javascript:void(0)'  class='btn small-btn view_depart' data='".$v->depart_id."'><i class='icon-eye'></i> ".__('view_txt')."</a>";
          }



          $sub_array[] = $buttons;
          $data[] = $sub_array;
          $sno++;

        }

        $output = [

         'draw'    => intval($_POST["draw"]),
         'recordsTotal'  => $all_data,
         'recordsFiltered' => $filter_data,
         'data'    =>  $data

       ];

        echo json_encode($output);

    }

    public function edit_department($id)
    {

      if ($this->session->userdata('is_depart_e') != 'yes') {
          redirect('dashboard');
      }


      $id = hashids_decrypt($id);

       $data = [

        'title' => __('edit_depart_txt'),

        'active_menu' => 'add_departments',

        'edit' => $this->bm->getWhere('departments', 'depart_id', $id),

        'extra' => $this->bm->getWhereRows('departments_programs', 'depart_id', $id)

      ];

      if ($this->session->userdata('is_depart_a_colg') == 'yes')
      {

        $data['colleges'] = $this->bm->getById('college' , $this->session->userdata('college_id'));

      }
      else{

        $data['colleges'] = $this->bm->getAll('college', 'id', 'desc');

      }



      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('departments/add');
      $this->load->view('footer');
      $this->load->view('departments/script');

    }

    public function delete_department($id)
    {

      if ($this->session->userdata('is_depart_d') != 'yes') {

          redirect('dashboard');

      }


      $id = hashids_decrypt($id);

      $res = $this->bm->delete('departments','depart_id',$id);

      $this->session->set_flashdata(array('response' => 'success', 'msg' => __('department_deleted_success_txt') ));

      redirect('departments');

    }

    public function getDetails($id)
    {

      $this->load->model('Department_model');
      $data['depart'] = $this->Department_model->getDepartmentDetails($id);
      $data['programs'] = $this->bm->getWhereRows('departments_programs', 'depart_id', $id);

      echo $this->load->view('departments/view_department',$data,true);

    }



     public function collect_data_for_excel()
     {

       $ids = $this->input->post('checkbox_value');
       $records = $this->dm->get_excel_data_by_ids($ids);
       $this->session->set_userdata('records_to_export', $records);

     }

     public function download_excel()
     {

       $file_name = 'Department_'.date('Y-m-d').'.csv';
       header("Content-Description: File Transfer");
       header("Content-Disposition: attachment; filename=$file_name");
       header("Content-Type: application/csv;");
       $file = fopen('php://output', 'w');

       $header = array("College","Department No#","Department Name","Description", "Date");
       fputcsv($file, $header);
       $records = $this->session->userdata('records_to_export');

       foreach($records as $record)
       {
         fputcsv($file, $record);

       }
         fclose($file);
         exit;

     }





}
