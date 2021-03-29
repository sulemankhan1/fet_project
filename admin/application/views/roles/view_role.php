<!--Basic User Details Starts-->
<section id="user-profile">
  <div class="row">
    <div class="col-12">
      <div class="card profile-with-cover">
      <div class="card-img-top img-fluid bg-cover height-50"></div>
        <div class="profil-cover-details row">
          <div class="col-md-1"></div>

          <div class="col-md-10 text-center">
              <a class="profile-image">
                <img src="<?=base_url('app-assets/img/icons/depart.png');?>" class="rounded-circle img-border width-100"
                  alt="Card image">
              </a>
          </div>
          <div class="col-md-1">
          </div>
        </div>
        <div class="profile-section">
          <div class="row">
            <div class="col-lg-5 col-md-5 ">
            </div>
            <div class="col-lg-2 col-md-2 text-center">
              <span class="font-medium-2 text-uppercase"><?=$edit->role_name?></span>
            </div>
            <div class="col-lg-5 col-md-5">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Basic User Details Ends-->

<!--About section starts-->
<section id="about">
  <div class="row">
    <div class="col-12">
      <div class="content-header"></div>
    </div>
  </div>
  <div class="row">

    <div class="col-sm-12">
      <div class="card">
        <div class="card-header" style="padding:none!important;">
          <h5><?=__('colleges_txt')?></h5>
        </div>
        <div class="card-content">
          <div class="card-body">

            <hr>
            <div class="row">

              <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                      <th><?=__('can_see_all_college_txt')?></th>
                      <td><?=@($edit->college_s == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_only_his_college_txt')?></th>
                      <td><?=@($edit->college_ps == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_add_colg_txt')?></th>
                      <td><?=@($edit->college_a == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_edit_colg_txt')?></th>
                      <td><?=@($edit->college_e == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_delete_colg_txt')?></th>
                      <td><?=@($edit->college_d == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <!-- <tr>
                      <th><=__('view_detail_txt')?></th>
                      <td><input type="checkbox" name="college_v" value="yes" <=@($edit->college_v == "yes")?'checked':''?>></td>
                    </tr> -->
                </table>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-12">
      <div class="card">
        <div class="card-header" style="padding:none!important;">
          <h5><?=__('departments_txt')?></h5>
        </div>
        <div class="card-content">
          <div class="card-body">

            <hr>
            <div class="row">

              <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                      <th><?=__('can_see_all_depart_txt')?></th>
                      <td><?=@($edit->depart_s == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_only_his_depart_txt')?></th>
                      <td><?=@($edit->depart_ps == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_only_his_colg_depart_txt')?></th>
                      <td><?=@($edit->depart_s_colg == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_add_depart_txt')?></th>
                      <td><?=@($edit->depart_a == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_add_only_his_colg_depart_txt')?></th>
                      <td><?=@($edit->depart_a_colg == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_edit_depart_txt')?></th>
                      <td><?=@($edit->depart_e == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_delete_depart_txt')?></th>
                      <td><?=@($edit->depart_d == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <!-- <tr>
                      <th><=__('view_detail_txt')?></th>
                      <td><input type="checkbox" name="depart_v" value="yes" <=@($edit->depart_v == "yes")?__('yes_txt'):__('no_txt')?>></td>
                    </tr> -->
                </table>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-12">
      <div class="card">
        <div class="card-header" style="padding:none!important;">
          <h5><?=__('labs_txt')?></h5>
        </div>
        <div class="card-content">
          <div class="card-body">
            <hr>
            <div class="row">

              <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                      <th><?=__('can_see_all_lab_txt')?></th>
                      <td><?=@($edit->lab_s == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_only_his_lab_txt')?></th>
                      <td><?=@($edit->lab_ps == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_only_his_colg_lab_txt')?></th>
                      <td><?=@($edit->lab_s_colg == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_only_his_depart_lab_txt')?></th>
                      <td><?=@($edit->lab_s_depart == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_add_lab_txt')?></th>
                      <td><?=@($edit->lab_a == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_add_only_his_colg_lab_txt')?></th>
                      <td><?=@($edit->lab_a_colg == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_add_only_his_depart_lab_txt')?></th>
                      <td><?=@($edit->lab_a_depart == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_edit_lab_txt')?></th>
                      <td><?=@($edit->lab_e == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_delete_lab_txt')?></th>
                      <td><?=@($edit->lab_d == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_my_lab_txt')?></th>
                      <td><?=@($edit->my_lab == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                </table>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>



    <div class="col-sm-12">
      <div class="card">
        <div class="card-header" style="padding:none!important;">
          <h5><?=__('machine_txt')?></h5>
        </div>
        <div class="card-content">
          <div class="card-body">
            <hr>
            <div class="row">

              <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                      <th><?=__('can_see_all_equipments_txt')?></th>
                      <td><?=@($edit->machine_s == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_only_his_colg_machine_txt')?></th>
                      <td><?=@($edit->machine_colg_s == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_only_his_depart_machine_txt')?></th>
                      <td><?=@($edit->machine_depart_s == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_only_his_lab_machine_txt')?></th>
                      <td><?=@($edit->machine_lab_s == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_add_equipment_txt')?></th>
                      <td><?=@($edit->machine_a == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_add_only_his_colg_equipment_txt')?></th>
                      <td><?=@($edit->machine_a_colg == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_add_only_his_depart_equipment_txt')?></th>
                      <td><?=@($edit->machine_a_depart == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_add_only_his_lab_equipment_txt')?></th>
                      <td><?=@($edit->machine_a_lab == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_edit_equipment_txt')?></th>
                      <td><?=@($edit->machine_e == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_delete_equipment_txt')?></th>
                      <td><?=@($edit->machine_d == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_view_equipment_detail_txt')?></th>
                      <td><?=@($edit->machine_v == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('exp_machine_table_txt')?></th>
                      <td><?=@($edit->machine_exp == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                </table>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>



    <div class="col-sm-12">
      <div class="card">
        <div class="card-header" style="padding:none!important;">
          <h5><?=__('users_txt')?></h5>
        </div>
        <div class="card-content">
          <div class="card-body">
            <hr>
            <div class="row">

              <div class="col-md-12">
                <table class="table table-bordered">
                  <tr>
                    <th><?=__('can_create_user_txt')?></th>
                    <td><?=@($edit->user_a == "yes")?__('yes_txt'):__('no_txt')?></td>
                  </tr>
                    <tr>
                      <th><?=__('can_see_all_active_users_txt')?></th>
                      <td><?=@($edit->user_sa == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_convert_active_to_deactive_txt')?></th>
                      <td><?=@($edit->user_a_to_d == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_edit_active_user_txt')?></th>
                      <td><?=@($edit->user_ea == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_delete_active_users_txt')?></th>
                      <td><?=@($edit->user_ad == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('view_detail_of_active_users_txt')?></th>
                      <td><?=@($edit->user_va == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_all_deactive_users_txt')?></th>
                      <td><?=@($edit->user_sd == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_convert_deactive_to_active_txt')?></th>
                      <td><?=@($edit->user_d_to_a == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_edit_deactive_user_txt')?></th>
                      <td><?=@($edit->user_ed == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_delete_deactive_users_txt')?></th>
                      <td><?=@($edit->user_dd == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('view_detail_of_deactive_users_txt')?></th>
                      <td><?=@($edit->user_vd == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                </table>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>



    <div class="col-sm-12">
      <div class="card">
        <div class="card-header" style="padding:none!important;">
          <h5><?=__('maintenance_txt')?></h5>
        </div>
        <div class="card-content">
          <div class="card-body">
            <hr>
            <div class="row">

              <div class="col-md-12">
                <table class="table table-bordered">
                  <tr>
                    <th><?=__('can_see_all_auto_req_txt')?></th>
                    <td><?=@($edit->maintenance_sysr == "yes")?__('yes_txt'):__('no_txt')?></td>
                  </tr>
                  <tr>
                    <th><?=__('can_see_only_his_colg_auto_req_txt')?></th>
                    <td><?=@($edit->maintenance_sys_colg_r == "yes")?__('yes_txt'):__('no_txt')?></td>
                  </tr>
                  <tr>
                    <th><?=__('can_see_only_his_depart_auto_req_txt')?></th>
                    <td><?=@($edit->maintenance_sys_depart_r == "yes")?__('yes_txt'):__('no_txt')?></td>
                  </tr>
                  <tr>
                    <th><?=__('can_see_only_his_lab_auto_req_txt')?></th>
                    <td><?=@($edit->maintenance_sys_lab_r == "yes")?__('yes_txt'):__('no_txt')?></td>
                  </tr>
                  <tr>
                    <th><?=__('can_change_auto_req_st_txt')?></th>
                    <td><?=@($edit->change_sys_st == "yes")?__('yes_txt'):__('no_txt')?></td>
                  </tr>
                    <tr>
                      <th><?=__('can_see_all_users_req_txt')?></th>
                      <td><?=@($edit->maintenance_str == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_only_his_generated_users_req_txt')?></th>
                      <td><?=@($edit->maintenance_pstr == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_only_his_colg_users_req_txt')?></th>
                      <td><?=@($edit->maintenance_st_colg_r == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_only_his_depart_users_req_txt')?></th>
                      <td><?=@($edit->maintenance_st_depart_r == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_only_his_lab_users_req_txt')?></th>
                      <td><?=@($edit->maintenance_st_lab_r == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>

                    <tr>
                      <th><?=__('can_generate_users_req_txt')?></th>
                      <td><?=@($edit->maintenance_a == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_generate_users_req_only_his_colg_txt')?></th>
                      <td><?=@($edit->maintenance_a_colg == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_generate_users_req_only_his_depart_txt')?></th>
                      <td><?=@($edit->maintenance_a_depart == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_generate_users_req_only_his_lab_txt')?></th>
                      <td><?=@($edit->maintenance_a_lab == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_change_users_req_st_txt')?></th>
                      <td><?=@($edit->change_students_st == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                </table>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-12">
      <div class="card">
        <div class="card-header" style="padding:none!important;">
          <h5><?=__('usage_req_txt')?></h5>
        </div>
        <div class="card-content">
          <div class="card-body">
            <hr>
            <div class="row">

              <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                      <th><?=__('can_see_all_usage_req_txt')?></th>
                      <td><?=@($edit->usage_s == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_only_his_generated_usage_req_txt')?></th>
                      <td><?=@($edit->usage_ps == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_only_his_colg_usage_req_txt')?></th>
                      <td><?=@($edit->usage_colg_s == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_only_his_depart_usage_req_txt')?></th>
                      <td><?=@($edit->usage_depart_s == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_only_his_lab_usage_req_txt')?></th>
                      <td><?=@($edit->usage_lab_s == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_generate_usage_req_txt')?></th>
                      <td><?=@($edit->usage_a == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_genertae_usage_req_only_his_colg_txt')?></th>
                      <td><?=@($edit->usage_add_colg == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_genertae_usage_req_only_his_depart_txt')?></th>
                      <td><?=@($edit->usage_add_depart == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_genertae_usage_req_only_his_lab_txt')?></th>
                      <td><?=@($edit->usage_add_lab == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_change_usage_req_st_txt')?></th>
                      <td><?=@($edit->usage_change_st == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                </table>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-12">
      <div class="card">
        <div class="card-header" style="padding:none!important;">
          <h5><?=__('order_txt')?></h5>
        </div>
        <div class="card-content">
          <div class="card-body">
            <hr>
            <div class="row">

              <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                      <th><?=__('can_see_all_orders_txt')?></th>
                      <td><?=@($edit->order_s == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_only_his_created_orders_txt')?></th>
                      <td><?=@($edit->order_ps == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_only_his_colg_order_txt')?></th>
                      <td><?=@($edit->order_s_colg == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_only_his_depart_order_txt')?></th>
                      <td><?=@($edit->order_s_depart == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_see_only_his_lab_order_txt')?></th>
                      <td><?=@($edit->order_s_lab == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_create_order_txt')?></th>
                      <td><?=@($edit->order_a == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_create_order_only_his_colg_txt')?></th>
                      <td><?=@($edit->order_a_colg == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_create_order_only_his_depart_txt')?></th>
                      <td><?=@($edit->order_a_depart == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_create_order_only_his_lab_txt')?></th>
                      <td><?=@($edit->order_a_lab == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_edit_order_txt')?></th>
                      <td><?=@($edit->order_e == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_delete_order_txt')?></th>
                      <td><?=@($edit->order_d == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_view_details_order_txt')?></th>
                      <td><?=@($edit->order_v == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                    <tr>
                      <th><?=__('can_change_order_st_txt')?></th>
                      <td><?=@($edit->order_change_st == "yes")?__('yes_txt'):__('no_txt')?></td>
                    </tr>
                </table>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-12">
     <div class="card">
       <div class="card-header" style="padding:none!important;">
         <h5><?=__('chem_request')?></h5>
       </div>
       <div class="card-content">
         <div class="card-body">
           <hr>
           <div class="row">

             <div class="col-md-12">
               <table class="table table-bordered">
                   <tr>
                     <th><?=__('can_view_all_s')?></th>
                     <td><?=@($edit->chem_storage_s == "yes")?__('yes_txt'):__('no_txt')?></td>
                   </tr>
                   <tr>
                     <th><?=__('can_view_its_s')?></th>
                     <td><?=@($edit->chem_storage_s_lab == "yes")?__('yes_txt'):__('no_txt')?></td>
                   </tr>
                   <tr>
                     <th><?=__('can_add_s')?></th>
                     <td><?=@($edit->chem_storage_a == "yes")?__('yes_txt'):__('no_txt')?></td>
                   </tr>
                   <tr>
                     <th><?=__('can_edit_s')?></th>
                     <td><?=@($edit->chem_storage_e == "yes")?__('yes_txt'):__('no_txt')?></td>
                   </tr>
                   <tr>
                     <th><?=__('can_delete_s')?></th>
                     <td><?=@($edit->chem_storage_del == "yes")?__('yes_txt'):__('no_txt')?></td>
                   </tr>
                   <tr>
                     <th><?=__('can_gen_inv_req')?></th>
                     <td><?=@($edit->chem_storage_gen_req == "yes")?__('yes_txt'):__('no_txt')?></td>
                   </tr>
                   <tr>
                     <th><?=__('can_view_all_r')?></th>
                     <td><?=@($edit->chem_req_s == "yes")?__('yes_txt'):__('no_txt')?></td>
                   </tr>
                   <tr>
                     <th><?=__('can_view_its_r')?></th>
                     <td><?=@($edit->chem_req_s_lab == "yes")?__('yes_txt'):__('no_txt')?></td>
                   </tr>
                   <tr>
                     <th><?=__('can_view_its_gen_r')?></th>
                     <td><?=@($edit->chem_req_s_gen == "yes")?__('yes_txt'):__('no_txt')?></td>
                   </tr>
                   <tr>
                     <th><?=__('can_change_s')?></th>
                     <td><?=@($edit->chem_req_change_st == "yes")?__('yes_txt'):__('no_txt')?></td>
                   </tr>
               </table>
             </div>

           </div>

         </div>
       </div>
     </div>
   </div>

   <div class="col-sm-12">
    <div class="card">
      <div class="card-header" style="padding:none!important;">
        <h5><?=__('animal_inv_txt')?></h5>
      </div>
      <div class="card-content">
        <div class="card-body">
          <hr>
          <div class="row">

            <div class="col-md-12">
              <table class="table table-bordered">
                  <tr>
                    <th><?=__('can_see_all_animals_txt')?></th>
                    <td><?=@($edit->animal_s == "yes")?__('yes_txt'):__('no_txt')?></td>
                  </tr>
                  <tr>
                    <th><?=__('can_see_only_his_colg_animal_txt')?></th>
                    <td><?=@($edit->animal_s_colg == "yes")?__('yes_txt'):__('no_txt')?></td>
                  </tr>
                  <tr>
                    <th><?=__('can_see_only_his_depart_animal_txt')?></th>
                    <td><?=@($edit->animal_s_depart == "yes")?__('yes_txt'):__('no_txt')?></td>
                  </tr>
                  <tr>
                    <th><?=__('can_see_only_his_lab_animal_txt')?></th>
                    <td><?=@($edit->animal_s_lab == "yes")?__('yes_txt'):__('no_txt')?></td>
                  </tr>
                  <tr>
                    <th><?=__('can_create_animal_txt')?></th>
                    <td><?=@($edit->animal_a == "yes")?__('yes_txt'):__('no_txt')?></td>
                  </tr>
                  <tr>
                    <th><?=__('can_create_animal_only_his_colg_txt')?></th>
                    <td><?=@($edit->animal_a_colg == "yes")?__('yes_txt'):__('no_txt')?></td>
                  </tr>
                  <tr>
                    <th><?=__('can_create_animal_only_his_depart_txt')?></th>
                    <td><?=@($edit->animal_a_depart == "yes")?__('yes_txt'):__('no_txt')?></td>
                  </tr>
                  <tr>
                    <th><?=__('can_create_animal_only_his_lab_txt')?></th>
                    <td><?=@($edit->animal_a_lab == "yes")?__('yes_txt'):__('no_txt')?></td>
                  </tr>
                  <tr>
                    <th><?=__('can_edit_animal_txt')?></th>
                    <td><?=@($edit->animal_e == "yes")?__('yes_txt'):__('no_txt')?></td>
                  </tr>
                  <tr>
                    <th><?=__('can_delete_animal_txt')?></th>
                    <td><?=@($edit->animal_del == "yes")?__('yes_txt'):__('no_txt')?></td>
                  </tr>
                  <tr>
                    <th><?=__('can_view_details_animal_txt')?></th>
                    <td><?=@($edit->animal_vd == "yes")?__('yes_txt'):__('no_txt')?></td>
                  </tr>
                  <tr>
                    <th><?=__('can_create_cage_txt')?></th>
                    <td><?=@($edit->cage_a == "yes")?__('yes_txt'):__('no_txt')?></td>
                  </tr>
              </table>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>


    </div>
  </div>
</section>
<!--About section ends-->
