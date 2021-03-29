<style media="screen">
  td {
    text-align: center!important;
  }
  th {
    width: 90%!important;
  }
</style>
<div class="main-content">
          <div class="content-wrapper"><!-- Basic Elements start -->
<section class="basic-elements">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0"><?=$title?></h4>
                </div> <br>
                <div class="card-body">
                    <div class="px-3">
                        <form class="form" method="post" action="<?=base_url('save_role');?>">
                            <input type="hidden" name="id" value="<?=@$edit->role_id?>">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('role_name_txt')?></label>
                                            <input type="text" name="role_name" class="form-control" placeholder="enter role name" value="<?=@$edit->role_name?>" required="">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                    <h3><?=__('colleges_txt')?></h3>
                                    <table class="table table-bordered">
                                        <tr>
                                          <th><?=__('can_see_all_college_txt')?></th>
                                          <td><input type="checkbox" name="college_s" value="yes" <?=@($edit->college_s == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_only_his_college_txt')?></th>
                                          <td><input type="checkbox" name="college_ps" value="yes" <?=@($edit->college_ps == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_add_colg_txt')?></th>
                                          <td><input type="checkbox" name="college_a" value="yes" <?=@($edit->college_a == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_edit_colg_txt')?></th>
                                          <td><input type="checkbox" name="college_e" value="yes" <?=@($edit->college_e == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_delete_colg_txt')?></th>
                                          <td><input type="checkbox" name="college_d" value="yes" <?=@($edit->college_d == "yes")?'checked':''?>></td>
                                        </tr>
                                        <!-- <tr>
                                          <th><=__('view_detail_txt')?></th>
                                          <td><input type="checkbox" name="college_v" value="yes" <=@($edit->college_v == "yes")?'checked':''?>></td>
                                        </tr> -->
                                    </table>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                    <h3><?=__('departments_txt')?></h3>
                                    <table class="table table-bordered">
                                        <tr>
                                          <th><?=__('can_see_all_depart_txt')?></th>
                                          <td><input type="checkbox" name="depart_s" value="yes" <?=@($edit->depart_s == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_only_his_depart_txt')?></th>
                                          <td><input type="checkbox" name="depart_ps" value="yes" <?=@($edit->depart_ps == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_only_his_colg_depart_txt')?></th>
                                          <td><input type="checkbox" name="depart_s_colg" value="yes" <?=@($edit->depart_s_colg == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_add_depart_txt')?></th>
                                          <td><input type="checkbox" name="depart_a" value="yes" <?=@($edit->depart_a == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_add_only_his_colg_depart_txt')?></th>
                                          <td><input type="checkbox" name="depart_a_colg" value="yes" <?=@($edit->depart_a_colg == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_edit_depart_txt')?></th>
                                          <td><input type="checkbox" name="depart_e" value="yes" <?=@($edit->depart_e == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_delete_depart_txt')?></th>
                                          <td><input type="checkbox" name="depart_d" value="yes" <?=@($edit->depart_d == "yes")?'checked':''?>></td>
                                        </tr>
                                        <!-- <tr>
                                          <th><=__('view_detail_txt')?></th>
                                          <td><input type="checkbox" name="depart_v" value="yes" <=@($edit->depart_v == "yes")?'checked':''?>></td>
                                        </tr> -->
                                    </table>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                    <h3><?=__('labs_txt')?></h3>
                                    <table class="table table-bordered">
                                        <tr>
                                          <th><?=__('can_see_all_lab_txt')?></th>
                                          <td><input type="checkbox" name="lab_s" value="yes" <?=@($edit->lab_s == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_only_his_lab_txt')?></th>
                                          <td><input type="checkbox" name="lab_ps" value="yes" <?=@($edit->lab_ps == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_only_his_colg_lab_txt')?></th>
                                          <td><input type="checkbox" name="lab_s_colg" value="yes" <?=@($edit->lab_s_colg == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_only_his_depart_lab_txt')?></th>
                                          <td><input type="checkbox" name="lab_s_depart" value="yes" <?=@($edit->lab_s_depart == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_add_lab_txt')?></th>
                                          <td><input type="checkbox" name="lab_a" value="yes" <?=@($edit->lab_a == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_add_only_his_colg_lab_txt')?></th>
                                          <td><input type="checkbox" name="lab_a_colg" value="yes" <?=@($edit->lab_a_colg == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_add_only_his_depart_lab_txt')?></th>
                                          <td><input type="checkbox" name="lab_a_depart" value="yes" <?=@($edit->lab_a_depart == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_edit_lab_txt')?></th>
                                          <td><input type="checkbox" name="lab_e" value="yes" <?=@($edit->lab_e == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_delete_lab_txt')?></th>
                                          <td><input type="checkbox" name="lab_d" value="yes" <?=@($edit->lab_d == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_my_lab_txt')?></th>
                                          <td><input type="checkbox" name="my_lab" value="yes" <?=@($edit->my_lab == "yes")?'checked':''?>></td>
                                        </tr>
                                    </table>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                    <h3><?=__('machine_txt')?> </h3>
                                    <table class="table table-bordered">
                                        <tr>
                                          <th><?=__('can_see_all_equipments_txt')?></th>
                                          <td><input type="checkbox" name="machine_s" value="yes" <?=@($edit->machine_s == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_only_his_colg_machine_txt')?></th>
                                          <td><input type="checkbox" name="machine_colg_s" value="yes" <?=@($edit->machine_colg_s == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_only_his_depart_machine_txt')?></th>
                                          <td><input type="checkbox" name="machine_depart_s" value="yes" <?=@($edit->machine_depart_s == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_only_his_lab_machine_txt')?></th>
                                          <td><input type="checkbox" name="machine_lab_s" value="yes" <?=@($edit->machine_lab_s == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_add_equipment_txt')?></th>
                                          <td><input type="checkbox" name="machine_a" value="yes" <?=@($edit->machine_a == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_add_only_his_colg_equipment_txt')?></th>
                                          <td><input type="checkbox" name="machine_a_colg" value="yes" <?=@($edit->machine_a_colg == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_add_only_his_depart_equipment_txt')?></th>
                                          <td><input type="checkbox" name="machine_a_depart" value="yes" <?=@($edit->machine_a_depart == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_add_only_his_lab_equipment_txt')?></th>
                                          <td><input type="checkbox" name="machine_a_lab" value="yes" <?=@($edit->machine_a_lab == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_edit_equipment_txt')?></th>
                                          <td><input type="checkbox" name="machine_e" value="yes" <?=@($edit->machine_e == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_delete_equipment_txt')?></th>
                                          <td><input type="checkbox" name="machine_d" value="yes" <?=@($edit->machine_d == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_view_equipment_detail_txt')?></th>
                                          <td><input type="checkbox" name="machine_v" value="yes" <?=@($edit->machine_v == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('exp_machine_table_txt')?></th>
                                          <td><input type="checkbox" name="machine_exp" value="yes" <?=@($edit->machine_exp == "yes")?'checked':''?>></td>
                                        </tr>
                                    </table>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                    <h3><?=__('users_txt')?> </h3>
                                    <table class="table table-bordered">
                                      <tr>
                                        <th><?=__('can_create_user_txt')?></th>
                                        <td><input type="checkbox" name="user_a" value="yes" <?=@($edit->user_a == "yes")?'checked':''?>></td>
                                      </tr>
                                        <tr>
                                          <th><?=__('can_see_all_active_users_txt')?></th>
                                          <td><input type="checkbox" name="user_sa" value="yes" <?=@($edit->user_sa == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_convert_active_to_deactive_txt')?></th>
                                          <td><input type="checkbox" name="user_a_to_d" value="yes" <?=@($edit->user_a_to_d == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_edit_active_user_txt')?></th>
                                          <td><input type="checkbox" name="user_ea" value="yes" <?=@($edit->user_ea == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_delete_active_users_txt')?></th>
                                          <td><input type="checkbox" name="user_ad" value="yes" <?=@($edit->user_ad == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('view_detail_of_active_users_txt')?></th>
                                          <td><input type="checkbox" name="user_va" value="yes" <?=@($edit->user_va == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_all_deactive_users_txt')?></th>
                                          <td><input type="checkbox" name="user_sd" value="yes" <?=@($edit->user_sd == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_convert_deactive_to_active_txt')?></th>
                                          <td><input type="checkbox" name="user_d_to_a" value="yes" <?=@($edit->user_d_to_a == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_edit_deactive_user_txt')?></th>
                                          <td><input type="checkbox" name="user_ed" value="yes" <?=@($edit->user_ed == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_delete_deactive_users_txt')?></th>
                                          <td><input type="checkbox" name="user_dd" value="yes" <?=@($edit->user_dd == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('view_detail_of_deactive_users_txt')?></th>
                                          <td><input type="checkbox" name="user_vd" value="yes" <?=@($edit->user_vd == "yes")?'checked':''?>></td>
                                        </tr>
                                    </table>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                    <h3><?=__('maintenance_txt')?> </h3>
                                    <table class="table table-bordered">
                                      <tr>
                                        <th><?=__('can_see_all_auto_req_txt')?></th>
                                        <td><input type="checkbox" name="maintenance_sysr" value="yes" <?=@($edit->maintenance_sysr == "yes")?'checked':''?>></td>
                                      </tr>
                                      <tr>
                                        <th><?=__('can_see_only_his_colg_auto_req_txt')?></th>
                                        <td><input type="checkbox" name="maintenance_sys_colg_r" value="yes" <?=@($edit->maintenance_sys_colg_r == "yes")?'checked':''?>></td>
                                      </tr>
                                      <tr>
                                        <th><?=__('can_see_only_his_depart_auto_req_txt')?></th>
                                        <td><input type="checkbox" name="maintenance_sys_depart_r" value="yes" <?=@($edit->maintenance_sys_depart_r == "yes")?'checked':''?>></td>
                                      </tr>
                                      <tr>
                                        <th><?=__('can_see_only_his_lab_auto_req_txt')?></th>
                                        <td><input type="checkbox" name="maintenance_sys_lab_r" value="yes" <?=@($edit->maintenance_sys_lab_r == "yes")?'checked':''?>></td>
                                      </tr>
                                      <tr>
                                        <th><?=__('can_change_auto_req_st_txt')?></th>
                                        <td><input type="checkbox" name="change_sys_st" value="yes" <?=@($edit->change_sys_st == "yes")?'checked':''?>></td>
                                      </tr>
                                        <tr>
                                          <th><?=__('can_see_all_users_req_txt')?></th>
                                          <td><input type="checkbox" name="maintenance_str" value="yes" <?=@($edit->maintenance_str == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_only_his_generated_users_req_txt')?></th>
                                          <td><input type="checkbox" name="maintenance_pstr" value="yes" <?=@($edit->maintenance_pstr == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_only_his_colg_users_req_txt')?></th>
                                          <td><input type="checkbox" name="maintenance_st_colg_r" value="yes" <?=@($edit->maintenance_st_colg_r == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_only_his_depart_users_req_txt')?></th>
                                          <td><input type="checkbox" name="maintenance_st_depart_r" value="yes" <?=@($edit->maintenance_st_depart_r == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_only_his_lab_users_req_txt')?></th>
                                          <td><input type="checkbox" name="maintenance_st_lab_r" value="yes" <?=@($edit->maintenance_st_lab_r == "yes")?'checked':''?>></td>
                                        </tr>

                                        <tr>
                                          <th><?=__('can_generate_users_req_txt')?></th>
                                          <td><input type="checkbox" name="maintenance_a" value="yes" <?=@($edit->maintenance_a == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_generate_users_req_only_his_colg_txt')?></th>
                                          <td><input type="checkbox" name="maintenance_a_colg" value="yes" <?=@($edit->maintenance_a_colg == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_generate_users_req_only_his_depart_txt')?></th>
                                          <td><input type="checkbox" name="maintenance_a_depart" value="yes" <?=@($edit->maintenance_a_depart == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_generate_users_req_only_his_lab_txt')?></th>
                                          <td><input type="checkbox" name="maintenance_a_lab" value="yes" <?=@($edit->maintenance_a_lab == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_change_users_req_st_txt')?></th>
                                          <td><input type="checkbox" name="change_students_st" value="yes" <?=@($edit->change_students_st == "yes")?'checked':''?>></td>
                                        </tr>
                                    </table>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                    <h3><?=__('usage_req_txt')?></h3>
                                    <table class="table table-bordered">
                                        <tr>
                                          <th><?=__('can_see_all_usage_req_txt')?></th>
                                          <td><input type="checkbox" name="usage_s" value="yes" <?=@($edit->usage_s == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_only_his_generated_usage_req_txt')?></th>
                                          <td><input type="checkbox" name="usage_ps" value="yes" <?=@($edit->usage_ps == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_only_his_colg_usage_req_txt')?></th>
                                          <td><input type="checkbox" name="usage_colg_s" value="yes" <?=@($edit->usage_colg_s == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_only_his_depart_usage_req_txt')?></th>
                                          <td><input type="checkbox" name="usage_depart_s" value="yes" <?=@($edit->usage_depart_s == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_only_his_lab_usage_req_txt')?></th>
                                          <td><input type="checkbox" name="usage_lab_s" value="yes" <?=@($edit->usage_lab_s == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_generate_usage_req_txt')?></th>
                                          <td><input type="checkbox" name="usage_a" value="yes" <?=@($edit->usage_a == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_genertae_usage_req_only_his_colg_txt')?></th>
                                          <td><input type="checkbox" name="usage_add_colg" value="yes" <?=@($edit->usage_add_colg == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_genertae_usage_req_only_his_depart_txt')?></th>
                                          <td><input type="checkbox" name="usage_add_depart" value="yes" <?=@($edit->usage_add_depart == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_genertae_usage_req_only_his_lab_txt')?></th>
                                          <td><input type="checkbox" name="usage_add_lab" value="yes" <?=@($edit->usage_add_lab == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_change_usage_req_st_txt')?></th>
                                          <td><input type="checkbox" name="usage_change_st" value="yes" <?=@($edit->usage_change_st == "yes")?'checked':''?>></td>
                                        </tr>
                                    </table>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                    <h3><?=__('order_txt')?></h3>
                                    <table class="table table-bordered">
                                        <tr>
                                          <th><?=__('can_see_all_orders_txt')?></th>
                                          <td><input type="checkbox" name="order_s" value="yes" <?=@($edit->order_s == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_only_his_created_orders_txt')?></th>
                                          <td><input type="checkbox" name="order_ps" value="yes" <?=@($edit->order_ps == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_only_his_colg_order_txt')?></th>
                                          <td><input type="checkbox" name="order_s_colg" value="yes" <?=@($edit->order_s_colg == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_only_his_depart_order_txt')?></th>
                                          <td><input type="checkbox" name="order_s_depart" value="yes" <?=@($edit->order_s_depart == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_see_only_his_lab_order_txt')?></th>
                                          <td><input type="checkbox" name="order_s_lab" value="yes" <?=@($edit->order_s_lab == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_create_order_txt')?></th>
                                          <td><input type="checkbox" name="order_a" value="yes" <?=@($edit->order_a == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_create_order_only_his_colg_txt')?></th>
                                          <td><input type="checkbox" name="order_a_colg" value="yes" <?=@($edit->order_a_colg == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_create_order_only_his_depart_txt')?></th>
                                          <td><input type="checkbox" name="order_a_depart" value="yes" <?=@($edit->order_a_depart == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_create_order_only_his_lab_txt')?></th>
                                          <td><input type="checkbox" name="order_a_lab" value="yes" <?=@($edit->order_a_lab == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_edit_order_txt')?></th>
                                          <td><input type="checkbox" name="order_e" value="yes" <?=@($edit->order_e == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_delete_order_txt')?></th>
                                          <td><input type="checkbox" name="order_d" value="yes" <?=@($edit->order_d == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_view_details_order_txt')?></th>
                                          <td><input type="checkbox" name="order_v" value="yes" <?=@($edit->order_v == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_change_order_st_txt')?></th>
                                          <td><input type="checkbox" name="order_change_st" value="yes" <?=@($edit->order_change_st == "yes")?'checked':''?>></td>
                                        </tr>
                                    </table>
                                  </div>
                                </div>


                               <div class="row">
                                  <div class="col-xl-12 col-lg-12 col-md-12 mb-1">

                                    <h3><?=__('chem_request')?></h3>
                                    <table class="table table-bordered">
                                        <tr>
                                          <th><?=__('can_view_all_s')?></th>
                                          <td><input type="checkbox" name="chem_storage_s" value="yes" <?=@($edit->chem_storage_s == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_view_its_s')?></th>
                                          <td><input type="checkbox" name="chem_storage_s_lab" value="yes" <?=@($edit->chem_storage_s_lab == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_add_s')?></th>
                                          <td><input type="checkbox" name="chem_storage_a" value="yes" <?=@($edit->chem_storage_a == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_edit_s')?></th>
                                          <td><input type="checkbox" name="chem_storage_e" value="yes" <?=@($edit->chem_storage_e == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_delete_s')?></th>
                                          <td><input type="checkbox" name="chem_storage_del" value="yes" <?=@($edit->chem_storage_del == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_gen_inv_req')?></th>
                                          <td><input type="checkbox" name="chem_storage_gen_req" value="yes" <?=@($edit->chem_storage_gen_req == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_gen_inv_req_for_his_lab')?></th>
                                          <td><input type="checkbox" name="chem_storage_gen_req_lab" value="yes" <?=@($edit->chem_storage_gen_req_lab == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_view_all_r')?></th>
                                          <td><input type="checkbox" name="chem_req_s" value="yes" <?=@($edit->chem_req_s == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_view_its_r')?></th>
                                          <td><input type="checkbox" name="chem_req_s_lab" value="yes" <?=@($edit->chem_req_s_lab == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_view_its_gen_r')?></th>
                                          <td><input type="checkbox" name="chem_req_s_gen" value="yes" <?=@($edit->chem_req_s_gen == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('can_change_s')?></th>
                                          <td><input type="checkbox" name="chem_req_change_st" value="yes" <?=@($edit->chem_req_change_st == "yes")?'checked':''?>></td>
                                        </tr>
                                    </table>
                                  </div>
                               </div>

                                <div class="row">
                                   <div class="col-xl-12 col-lg-12 col-md-12 mb-1">

                                     <h3><?=__('animal_inv_txt')?></h3>
                                     <table class="table table-bordered">
                                         <tr>
                                           <th><?=__('can_see_all_animals_txt')?></th>
                                           <td><input type="checkbox" name="animal_s" value="yes" <?=@($edit->animal_s == "yes")?'checked':''?>></td>
                                         </tr>
                                         <tr>
                                           <th><?=__('can_see_only_his_colg_animal_txt')?></th>
                                           <td><input type="checkbox" name="animal_s_colg" value="yes" <?=@($edit->animal_s_colg == "yes")?'checked':''?>></td>
                                         </tr>
                                         <tr>
                                           <th><?=__('can_see_only_his_depart_animal_txt')?></th>
                                           <td><input type="checkbox" name="animal_s_depart" value="yes" <?=@($edit->animal_s_depart == "yes")?'checked':''?>></td>
                                         </tr>
                                         <tr>
                                           <th><?=__('can_see_only_his_lab_animal_txt')?></th>
                                           <td><input type="checkbox" name="animal_s_lab" value="yes" <?=@($edit->animal_s_lab == "yes")?'checked':''?>></td>
                                         </tr>
                                         <tr>
                                           <th><?=__('can_create_animal_txt')?></th>
                                           <td><input type="checkbox" name="animal_a" value="yes" <?=@($edit->animal_a == "yes")?'checked':''?>></td>
                                         </tr>
                                         <tr>
                                           <th><?=__('can_create_animal_only_his_colg_txt')?></th>
                                           <td><input type="checkbox" name="animal_a_colg" value="yes" <?=@($edit->animal_a_colg == "yes")?'checked':''?>></td>
                                         </tr>
                                         <tr>
                                           <th><?=__('can_create_animal_only_his_depart_txt')?></th>
                                           <td><input type="checkbox" name="animal_a_depart" value="yes" <?=@($edit->animal_a_depart == "yes")?'checked':''?>></td>
                                         </tr>
                                         <tr>
                                           <th><?=__('can_create_animal_only_his_lab_txt')?></th>
                                           <td><input type="checkbox" name="animal_a_lab" value="yes" <?=@($edit->animal_a_lab == "yes")?'checked':''?>></td>
                                         </tr>
                                         <tr>
                                           <th><?=__('can_edit_animal_txt')?></th>
                                           <td><input type="checkbox" name="animal_e" value="yes" <?=@($edit->animal_e == "yes")?'checked':''?>></td>
                                         </tr>
                                         <tr>
                                           <th><?=__('can_delete_animal_txt')?></th>
                                           <td><input type="checkbox" name="animal_del" value="yes" <?=@($edit->animal_del == "yes")?'checked':''?>></td>
                                         </tr>
                                         <tr>
                                           <th><?=__('can_view_details_animal_txt')?></th>
                                           <td><input type="checkbox" name="animal_vd" value="yes" <?=@($edit->animal_vd == "yes")?'checked':''?>></td>
                                         </tr>
                                         <tr>
                                           <th><?=__('can_create_cage_txt')?></th>
                                           <td><input type="checkbox" name="cage_a" value="yes" <?=@($edit->cage_a == "yes")?'checked':''?>></td>
                                         </tr>
                                     </table>
                                   </div>
                                </div>
                                <div class="form-actions">
                                <div class="text-right">
                                    <button type="Submit" class="btn btn-raised btn-primary"><?=__('save_txt')?> <i class="ft-check position-right"></i></button>
                                    <button type="reset" class="btn btn-raised btn-warning"><?=__('reset_txt')?> <i class="ft-refresh-cw position-right"></i></button>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
