<?php


class Roles extends CI_Controller
{

    function __construct() {

        parent::__construct();

        if (empty($this->session->userdata('username')) || $this->session->userdata('role_id') != 1) {

            redirect('login');

        }

        if ($this->session->userdata('language_to_user') == 'AR') {

            $language = 'Arabic';
        }
        else{

          $language = 'Eng';

        }

          $this->load->language($language,$language);


    }

    public function add_roles()
    {

      $data = [

        'title' => __('add_role_txt'),

        'active_menu' => 'add_role'

      ];

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('roles/add');
      $this->load->view('footer');
      $this->load->view('roles/script');

    }

    public function save_role()
    {
        $p = $this->input->post();

        //college
        if ($this->input->post('college_s') == '') {
            $p['college_s'] = 'no';
        }
        if ($this->input->post('college_ps') == '') {
            $p['college_ps'] = 'no';
        }
        if ($this->input->post('college_a') == '') {
            $p['college_a'] = 'no';
        }
        if ($this->input->post('college_e') == '') {
            $p['college_e'] = 'no';
        }
        if ($this->input->post('college_d') == '') {
            $p['college_d'] = 'no';
        }
        if ($this->input->post('college_v') == '') {
            $p['college_v'] = 'no';
        }


        //depart
        if ($this->input->post('depart_s') == '') {
            $p['depart_s'] = 'no';
        }
        if ($this->input->post('depart_ps') == '') {
            $p['depart_ps'] = 'no';
        }
        if ($this->input->post('depart_s_colg') == '') {
            $p['depart_s_colg'] = 'no';
        }
        if ($this->input->post('depart_a') == '') {
            $p['depart_a'] = 'no';
        }
        if ($this->input->post('depart_a_colg') == '') {
            $p['depart_a_colg'] = 'no';
        }
        if ($this->input->post('depart_e') == '') {
            $p['depart_e'] = 'no';
        }
        if ($this->input->post('depart_d') == '') {
            $p['depart_d'] = 'no';
        }
        if ($this->input->post('depart_v') == '') {
            $p['depart_v'] = 'no';
        }


        //lab
        if ($this->input->post('lab_s') == '') {
            $p['lab_s'] = 'no';
        }
        if ($this->input->post('lab_ps') == '') {
            $p['lab_ps'] = 'no';
        }
        if ($this->input->post('lab_s_colg') == '') {
            $p['lab_s_colg'] = 'no';
        }
        if ($this->input->post('lab_s_depart') == '') {
            $p['lab_s_depart'] = 'no';
        }
        if ($this->input->post('lab_a') == '') {
            $p['lab_a'] = 'no';
        }
        if ($this->input->post('lab_a_colg') == '') {
            $p['lab_a_colg'] = 'no';
        }
        if ($this->input->post('lab_a_depart') == '') {
            $p['lab_a_depart'] = 'no';
        }
        if ($this->input->post('lab_e') == '') {
            $p['lab_e'] = 'no';
        }
        if ($this->input->post('lab_d') == '') {
            $p['lab_d'] = 'no';
        }
        if ($this->input->post('my_lab') == '') {
            $p['my_lab'] = 'no';
        }


        //machine
        if ($this->input->post('machine_s') == '') {
            $p['machine_s'] = 'no';
        }
        if ($this->input->post('machine_colg_s') == '') {
            $p['machine_colg_s'] = 'no';
        }
        if ($this->input->post('machine_depart_s') == '') {
            $p['machine_depart_s'] = 'no';
        }
        if ($this->input->post('machine_lab_s') == '') {
            $p['machine_lab_s'] = 'no';
        }
        if ($this->input->post('machine_a') == '') {
            $p['machine_a'] = 'no';
        }
        if ($this->input->post('machine_a_colg') == '') {
            $p['machine_a_colg'] = 'no';
        }
        if ($this->input->post('machine_a_depart') == '') {
            $p['machine_a_depart'] = 'no';
        }
        if ($this->input->post('machine_a_lab') == '') {
            $p['machine_a_lab'] = 'no';
        }
        if ($this->input->post('machine_e') == '') {
            $p['machine_e'] = 'no';
        }
        if ($this->input->post('machine_d') == '') {
            $p['machine_d'] = 'no';
        }
        if ($this->input->post('machine_v') == '') {
            $p['machine_v'] = 'no';
        }
        if ($this->input->post('machine_exp') == '') {
            $p['machine_exp'] = 'no';
        }

        // users
        if ($this->input->post('user_sa') == '') {
            $p['user_sa'] = 'no';
        }
        if ($this->input->post('user_sd') == '') {
            $p['user_sd'] = 'no';
        }
        if ($this->input->post('user_a_to_d') == '') {
            $p['user_a_to_d'] = 'no';
        }
        if ($this->input->post('user_d_to_a') == '') {
            $p['user_d_to_a'] = 'no';
        }
        if ($this->input->post('user_a') == '') {
            $p['user_a'] = 'no';
        }
        if ($this->input->post('user_ea') == '') {
            $p['user_ea'] = 'no';
        }
        if ($this->input->post('user_ed') == '') {
            $p['user_ed'] = 'no';
        }
        if ($this->input->post('user_va') == '') {
            $p['user_va'] = 'no';
        }
        if ($this->input->post('user_vd') == '') {
            $p['user_vd'] = 'no';
        }
        if ($this->input->post('user_ad') == '') {
            $p['user_ad'] = 'no';
        }
        if ($this->input->post('user_dd') == '') {
            $p['user_dd'] = 'no';
        }

        //system_maintenance
        if ($this->input->post('maintenance_sysr') == '') {
            $p['maintenance_sysr'] = 'no';
        }
        if ($this->input->post('maintenance_sys_colg_r') == '') {
            $p['maintenance_sys_colg_r'] = 'no';
        }
        if ($this->input->post('maintenance_sys_depart_r') == '') {
            $p['maintenance_sys_depart_r'] = 'no';
        }
        if ($this->input->post('maintenance_sys_lab_r') == '') {
            $p['maintenance_sys_lab_r'] = 'no';
        }
        if ($this->input->post('change_sys_st') == '') {
            $p['change_sys_st'] = 'no';
        }

        //students_maintenance
        if ($this->input->post('maintenance_str') == '') {
            $p['maintenance_str'] = 'no';
        }
        if ($this->input->post('maintenance_pstr') == '') {
            $p['maintenance_pstr'] = 'no';
        }
        if ($this->input->post('maintenance_st_colg_r') == '') {
            $p['maintenance_st_colg_r'] = 'no';
        }
        if ($this->input->post('maintenance_st_depart_r') == '') {
            $p['maintenance_st_depart_r'] = 'no';
        }
        if ($this->input->post('maintenance_st_lab_r') == '') {
            $p['maintenance_st_lab_r'] = 'no';
        }
        if ($this->input->post('maintenance_a') == '') {
            $p['maintenance_a'] = 'no';
        }
        if ($this->input->post('maintenance_a_colg') == '') {
            $p['maintenance_a_colg'] = 'no';
        }
        if ($this->input->post('maintenance_a_depart') == '') {
            $p['maintenance_a_depart'] = 'no';
        }
        if ($this->input->post('maintenance_a_lab') == '') {
            $p['maintenance_a_lab'] = 'no';
        }
        if ($this->input->post('change_students_st') == '') {
            $p['change_students_st'] = 'no';
        }


        //usage
        if ($this->input->post('usage_s') == '') {
            $p['usage_s'] = 'no';
        }
        if ($this->input->post('usage_ps') == '') {
            $p['usage_ps'] = 'no';
        }
        if ($this->input->post('usage_colg_s') == '') {
          $p['usage_colg_s'] = 'no';
        }
        if ($this->input->post('usage_depart_s') == '') {
            $p['usage_depart_s'] = 'no';
        }
        if ($this->input->post('usage_lab_s') == '') {
            $p['usage_lab_s'] = 'no';
        }
        if ($this->input->post('usage_a') == '') {
            $p['usage_a'] = 'no';
        }
        if ($this->input->post('usage_add_colg') == '') {
            $p['usage_add_colg'] = 'no';
        }
        if ($this->input->post('usage_add_depart') == '') {
            $p['usage_add_depart'] = 'no';
        }
        if ($this->input->post('usage_add_lab') == '') {
            $p['usage_add_lab'] = 'no';
        }
        if ($this->input->post('usage_change_st') == '') {
            $p['usage_change_st'] = 'no';
        }


        //orders
        if ($this->input->post('order_s') == '') {
            $p['order_s'] = 'no';
        }
        if ($this->input->post('order_ps') == '') {
            $p['order_ps'] = 'no';
        }
        if ($this->input->post('order_s_colg') == '') {
            $p['order_s_colg'] = 'no';
        }
        if ($this->input->post('order_s_depart') == '') {
            $p['order_s_depart'] = 'no';
        }
        if ($this->input->post('order_s_lab') == '') {
            $p['order_s_lab'] = 'no';
        }
        if ($this->input->post('order_a') == '') {
            $p['order_a'] = 'no';
        }
        if ($this->input->post('order_a_colg') == '') {
            $p['order_a_colg'] = 'no';
        }
        if ($this->input->post('order_a_depart') == '') {
            $p['order_a_depart'] = 'no';
        }
        if ($this->input->post('order_a_lab') == '') {
            $p['order_a_lab'] = 'no';
        }
        if ($this->input->post('order_e') == '') {
            $p['order_e'] = 'no';
        }
        if ($this->input->post('order_d') == '') {
            $p['order_d'] = 'no';
        }
        if ($this->input->post('order_v') == '') {
            $p['order_v'] = 'no';
        }
        if ($this->input->post('order_change_st') == '') {
            $p['order_change_st'] = 'no';
        }

        //chemicalinventroy
        if($this->input->post('chem_storage_a') == ''){
            $p['chem_storage_a'] = 'no';
        }
        if($this->input->post('chem_storage_e') == ''){
            $p['chem_storage_e'] = 'no';
        }
        if($this->input->post('chem_storage_del') == ''){
            $p['chem_storage_del'] = 'no';
        }
        if($this->input->post('chem_storage_s') == ''){
            $p['chem_storage_s'] = 'no';
        }
        if($this->input->post('chem_storage_s_lab') == ''){
            $p['chem_storage_s_lab'] = 'no';
        }
        if($this->input->post('chem_storage_gen_req') == ''){
            $p['chem_storage_gen_req'] = 'no';
        }
        if($this->input->post('chem_storage_gen_req_lab') == ''){
            $p['chem_storage_gen_req_lab'] = 'no';
        }
        if($this->input->post('chem_req_s') == ''){
            $p['chem_req_s'] = 'no';
        }
        if($this->input->post('chem_req_s_lab') == ''){
            $p['chem_req_s_lab'] = 'no';
        }
        if($this->input->post('chem_req_s_gen') == ''){
            $p['chem_req_s_gen'] = 'no';
        }
        if($this->input->post('chem_req_change_st') == ''){
            $p['chem_req_change_st'] = 'no';
        }


        //animal inventory
        if($this->input->post('animal_s') == ''){
            $p['animal_s'] = 'no';
        }
        if($this->input->post('animal_s_colg') == ''){
            $p['animal_s_colg'] = 'no';
        }
        if($this->input->post('animal_s_depart') == ''){
            $p['animal_s_depart'] = 'no';
        }
        if($this->input->post('animal_s_lab') == ''){
            $p['animal_s_lab'] = 'no';
        }
        if($this->input->post('animal_a') == ''){
            $p['animal_a'] = 'no';
        }
        if($this->input->post('animal_a_colg') == ''){
            $p['animal_a_colg'] = 'no';
        }
        if($this->input->post('animal_a_depart') == ''){
            $p['animal_a_depart'] = 'no';
        }
        if($this->input->post('animal_a_lab') == ''){
            $p['animal_a_lab'] = 'no';
        }
        if($this->input->post('animal_e') == ''){
            $p['animal_e'] = 'no';
        }
        if($this->input->post('animal_del') == ''){
            $p['animal_del'] = 'no';
        }
        if($this->input->post('animal_vd') == ''){
            $p['animal_vd'] = 'no';
        }
        if($this->input->post('cage_a') == ''){
            $p['cage_a'] = 'no';
        }


        $id = $p['id'];

        unset($p['id']);

        if ($id != '') {

          $this->bm->updateRow('roles',$p,'role_id',$id);

          $this->session->set_flashdata(array('response' => 'success', 'msg' => __('role_update_success_txt') ));

        }
        else{

          $this->bm->insertRow('roles',$p);

          $this->session->set_flashdata(array('response' => 'success', 'msg' => __('role_add_success_txt') ));

        }

        redirect('roles');


    }

    public function view_roles()
    {

      $data = [

        'title' => __('view_role_txt'),

        'active_menu' => 'view_roles'

      ];

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('roles/index');
      $this->load->view('footer');
      $this->load->view('roles/script');

    }

    public function getRoles()
    {

        $this->load->model('Roles_model');

        $result = $this->Roles_model->make_datatables();
        $filter_data = $this->Roles_model->get_filtered_data();
        $all_data = $this->Roles_model->get_all_data();

        $data = array();

        $sno = @$_POST['start']+1;

        foreach ($result as $v) {


          $sub_array = array();
          $sub_array[] = $sno; $buttons = "";
          $sub_array[] = $v->role_name;

          $buttons .= "<a href='".site_url('edit_role/'.hashids_encrypt(@$v->role_id))."' class='btn small-btn'><i class='icon-pencil'></i> ".__('edit_txt')."</a>";

          if ($v->role_id > 11) {

            $buttons .="<a href='".site_url('delete_role/'.hashids_encrypt(@$v->role_id))."' class='btn small-btn' onclick=\"return confirm('Are you sure you want to delete?')\" ><i class='icon-trash'></i> ".__('delete_txt')."</a>";

          }

          $buttons .="<a href='javascript:void(0)'  class='btn small-btn view_role' data='".$v->role_id."'><i class='icon-eye'></i> ".__('view_txt')."</a>";

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

    public function edit_role($id)
    {

      $id = hashids_decrypt($id);

      $data = [

        'title' => __('edit_role_txt'),

        'active_menu' => 'add_role',

        'edit' => $this->bm->getWhere('roles','role_id',$id)

      ];

      $this->load->view('header',$data);
      $this->load->view('sidebar');
      $this->load->view('roles/add');
      $this->load->view('footer');
      $this->load->view('roles/script');

    }


    public function delete_role($id)
    {
        $id = hashids_decrypt($id);

        $this->bm->delete('roles','role_id',$id);

        $this->session->set_flashdata(array('response' => 'success', 'msg' => __('role_deleted_success_txt') ));

        redirect('roles');

    }

    public function getDetails($id)
    {

        $data['edit'] = $this->bm->getWhere('roles','role_id',$id);

        echo $this->load->view('roles/view_role',$data,true);

    }



}
