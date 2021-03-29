<div class="main-content">
          <div class="content-wrapper"><!-- Basic Elements start -->
<section class="basic-elements">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0"><?=$title;?></h4>
                </div>
                <div class="card-body">
                    <div class="px-3">
                      <?php
                      $uprofile = ''; $upassword = ''; $uemailnotify = '';
                      if($this->session->flashdata('edit_profile_tab') == 'update_profile') {
                        $uprofile = 'active'; $upassword = ''; $uemailnotify = '';
                      }
                      else if($this->session->flashdata('edit_profile_tab') == 'update_password') {
                        $uprofile = ''; $upassword = 'active'; $uemailnotify = '';
                      }
                      if($this->session->flashdata('edit_profile_tab') == 'email_notification') {
                        $uprofile = ''; $upassword = ''; $uemailnotify = 'active';
                      }
                      ?>

                      <?php if($this->session->flashdata('response') == 'success') { ?>
                        <div class="alert alert-success alert-dismissible"  style="margin-top:5px!important;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?=$this->session->flashdata('msg')?>
                        </div>
                      <?php } ?>


                      <!-- Tabs with Icons start -->
                          <section id="tabs-with-icons">
                            <div class="row match-height">
                              <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                  <div class="card-header">
                                    <h4 class="card-title"></h4>
                                  </div>
                                  <div class="card-content">
                                    <div class="card-body">
                                      <ul class="nav nav-tabs">
                                        <li class="nav-item nav-link <?=$uprofile?>">
                                          <a class="nav-link" id="baseIcon-tab1" data-toggle="tab" aria-controls="tabIcon1" href="#tabIcon1"
                                            aria-expanded="true"><i class="icon-pencil"></i> <?=__('edit_profile_txt')?></a>
                                        </li>
                                        <li class="nav-item nav-link <?=$upassword?>">
                                          <a class="nav-link" id="baseIcon-tab2" data-toggle="tab" aria-controls="tabIcon2" href="#tabIcon2"
                                            aria-expanded="false"><i class="icon-key"></i> <?=__('profile_update_passowrd_txt')?></a>
                                        </li>
                                        <li class="nav-item nav-link <?=$uemailnotify?>">
                                          <a class="nav-link" id="baseIcon-tab3" data-toggle="tab" aria-controls="tabIcon3" href="#tabIcon3"
                                            aria-expanded="false"><i class="ft-bell"></i> <?=__('notifications_txt')?></a>
                                        </li>
                                      </ul>
                                      <div class="tab-content px-1 pt-1">
                                        <div role="tabpanel" class="tab-pane <?=$uprofile?>" id="tabIcon1" aria-expanded="true" aria-labelledby="baseIcon-tab1">

                                          <form class="form" action="<?=site_url('update_profile');?>" method="post" enctype="multipart/form-data">

                                            <input type="hidden" name="id" value="<?=@$edit->user_id?>">
                                            <input type="hidden" name="status_type" class="status_type">

                                            <!-- unique -->
                                            <input type="hidden" name="username_unique" value="<?=@$edit->username;?>">
                                            <input type="hidden" name="uni_email_unique" value="<?=@$edit->university_email;?>">

                                            <br>
                                            <span class="text-danger"><?php if(validation_errors()) echo validation_errors(); ?></span>

                                              <div class="row mt-2">

                                                <div class="col-lg-12 col-md-12  mb-3">
                                                    <label for="file"><?=__('user_image_txt')?></label>
                                                    <div class="input-group mb-3">
                                                      <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupFileAddon01"><?=__('upload_txt')?></span>
                                                      </div>
                                                      <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                          aria-describedby="inputGroupFileAddon01" name="user_img">
                                                          <input type="hidden" name="user_img1" value="<?=@$edit->user_img?>">
                                                        <label class="custom-file-label" for="inputGroupFile01"><?=__('choose_file_txt')?></label>
                                                      </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput"><?=__('username_txt')?> *</label>
                                                        <input type="text" class="form-control" required="" id="ResUsername" name="username" value="<?=@$edit->username;?>">
                                                        <p style="color: red;margin: 0;display: none;" id="warningusername">This UserName is Already Exits</p>
                                                    </fieldset>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput"><?=__('select_title_txt')?> *</label>
                                                        <select class="form-control" required="" name="title">
                                                            <option value=""><?=__('select_title_txt')?></option>
                                                            <option value="Mr" <?=(@$edit->title == 'Mr'?'selected':'')?>>Mr</option>
                                                            <option value="Ms" <?=(@$edit->title == 'Ms'?'selected':'')?>>Ms</option>
                                                            <option value="Mrs" <?=(@$edit->title == 'Mrs'?'selected':'')?>>Mrs</option>
                                                            <option value="Dr" <?=(@$edit->title == 'Dr'?'selected':'')?>>Dr</option>
                                                            <option value="Prof" <?=(@$edit->title == 'Prof'?'selected':'')?>>Prof</option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput"><?=__('first_name_arabic_txt')?> *</label>
                                                        <input type="text" class="form-control" required="" name="first_name_arabic" value="<?=@$edit->first_name_arabic;?>">
                                                    </fieldset>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput"><?=__('middle_name_arabic_txt')?> *</label>
                                                        <input type="text" class="form-control" required="" name="middle_name_arabic" value="<?=@$edit->middle_name_arabic;?>">
                                                    </fieldset>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput"><?=__('family_last_name_arabic_txt')?> *</label>
                                                        <input type="text" class="form-control" required="" name="family_last_name_arabic" value="<?=@$edit->family_last_name_arabic;?>">
                                                    </fieldset>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput"><?=__('first_name_eng_txt')?> *</label>
                                                        <input type="text" class="form-control" required="" name="first_name_eng" value="<?=@$edit->first_name_eng;?>">
                                                    </fieldset>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput"><?=__('middle_name_eng_txt')?> *</label>
                                                        <input type="text" class="form-control" required="" name="middle_name_eng" value="<?=@$edit->middle_name_eng;?>">
                                                    </fieldset>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput"><?=__('family_last_name_eng_txt')?> *</label>
                                                        <input type="text" class="form-control" required="" name="family_last_name_eng" value="<?=@$edit->family_last_name_eng;?>">
                                                    </fieldset>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                    <fieldset class="form-group">
                                                      <label for="basicInput"><?=__('gender_txt')?> *</label>
                                                      <br>
                                                      <?php
                                                      $male_checked = 'checked'; $female_checked = '';
                                                      if (@$edit->gender == 'female') {

                                                        $male_checked = '';
                                                        $female_checked = 'checked';

                                                      }
                                                       ?>
                                                        <input type="radio" name="gender" value="male" <?=$male_checked;?>>
                                                        <label for="basicInput"><?=__('male_txt')?></label>
                                                        <input type="radio" name="gender" value="female" <?=$female_checked;?>>
                                                        <label for="basicInput"><?=__('female_txt')?></label>
                                                    </fieldset>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput"><?=__('nationality_txt')?> *</label>
                                                        <input type="text" class="form-control" required="" name="nationality" value="<?=@$edit->nationality;?>">
                                                    </fieldset>
                                                </div>
                                              </div>
                                              <?php if ($this->session->userdata('role_id') != 1): ?>

                                              <div class="row">
                                                  <div class="col-md-12">

                                                    <div class="cl_one" style="display:none;">

                                                      <div class="row">

                                                        <div class="col-md-12 mt-2 mb-2">
                                                            <h4><b><?=__('extra_info_txt')?></b></h4>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                              <label for="basicInput"><?=__('college_campus_txt')?> *</label>
                                                              <br>
                                                              <?php
                                                              $male_campus_o = 'checked'; $female_campus_o = '';
                                                              if (@$edit->user_status_type_type >=2 && @$edit->user_status_type_type <= 3) {

                                                                if (@$edit->campus == 'female') {

                                                                  $male_checked_o = '';
                                                                  $female_checked_o = 'checked';

                                                                }

                                                              }
                                                               ?>
                                                                <input type="radio" name="o_campus" value="male" <?=@$male_campus_o;?>>
                                                                <label for="basicInput"><?=__('male_txt')?></label>
                                                                <input type="radio" name="o_campus" value="female" <?=@$female_campus_o;?>>
                                                                <label for="basicInput"><?=__('female_txt')?></label>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('select_college_text')?> *</label>
                                                                <select class="form-control o" required="" name="o_college">

                                                                    <option value=""><?=__('select_college_text')?></option>

                                                                    <?php foreach ($colleges as $v): ?>

                                                                      <option value="<?=$v->id?>" <?php if (@$edit->user_status >=2 && @$edit->user_status <= 7) { if(@$edit->college_id == $v->id){ echo 'selected'; } } ?>><?=$v->colg_name?></option>

                                                                    <?php endforeach; ?>

                                                                </select>
                                                            </fieldset>
                                                         </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('select_depart_txt')?> *</label>
                                                                <select class="form-control o" required="" name="o_depart_id">
                                                                    <option value=""><?=__('select_depart_txt')?></option>
                                                                    <?php foreach ($departments as $v): ?>

                                                                      <option value="<?=$v->depart_id?>" <?php if (@$edit->user_status_type_type >=2 && @$edit->user_status_type_type <= 3) { if(@$edit->depart_id == $v->depart_id){ echo 'selected'; } } ?>><?=$v->depart_name?></option>

                                                                    <?php endforeach; ?>

                                                                </select>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('laboratory_number_txt')?> *</label>
                                                                <select class="form-control o" required="" name="o_laboratory_numb">
                                                                  <?php if (@$edit->user_id != ''): ?>
                                                                    <?php if (@$edit->user_status_type_type >=2 && @$edit->user_status_type_type <= 3): ?>

                                                                      <?php foreach ($labs as $key => $v): ?>

                                                                        <?php if (@$edit->depart_id == $v->depart_id): ?>

                                                                        <option value="<?=$v->lab_id?>" <?=(@$edit->laboratory_numb == $v->lab_id ? 'selected' : '')?> ><?=$v->lab_name?></option>

                                                                        <?php endif; ?>

                                                                      <?php endforeach; ?>

                                                                    <?php endif; ?>

                                                                  <?php else: ?>
                                                                      <option value=""><?=__('select_depart_first_txt')?></option>
                                                                  <?php endif; ?>
                                                                </select>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('employee_id_numb_txt')?> *</label>
                                                                <input type="text" class="form-control o" required="" name="o_employee_id_numb" value="<?php if (@$edit->user_status_type_type >=2 && @$edit->user_status_type_type <= 3) { echo @$edit->employee_id_numb; } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('phone_txt')?> *</label>
                                                                <input type="text" class="form-control o" required="" name="o_phone_1" value="<?php if (@$edit->user_status_type_type >=2 && @$edit->user_status_type <= 3) { echo @$edit->phone_1; } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('fax_txt')?> *</label>
                                                                <input type="text" class="form-control o" required="" name="o_fax" value="<?php if (@$edit->user_status_type >=2 && @$edit->user_status_type <= 3) { echo @$edit->fax; } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('mobile_txt')?> *</label>
                                                                <input type="text" class="form-control o" required="" name="o_phone_2" value="<?php if (@$edit->user_status_type >=2 && @$edit->user_status_type <= 3) { echo @$edit->phone_2; } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('emergency_number_for_after_few_hours')?></label>
                                                                <input type="text" class="form-control" name="o_emergency_numb" value="<?php if (@$edit->user_status_type >=2 && @$edit->user_status_type <= 3) { echo @$edit->emergency_numb; } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('university_email_txt')?> *</label>
                                                                <input type="email" class="form-control o is_unique_university_email" required="" name="o_university_email" value="<?php if (@$edit->user_status_type >=2 && @$edit->user_status_type <= 3) { echo @$edit->university_email; } ?>">
                                                                <p style="color: red;margin: 0;display: none;" id="o_warningemail">This Email is Already Exits</p>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                              <?php @$type1='email'; @$label1= __('secondary_email_txt'); if (@$edit->user_status_type >=2 && @$edit->user_status_type <= 3) { if (@$edit->user_status_type == 2) {
                                                                  $label1=__('research_interest_txt');
                                                                  $type1='text';
                                                              }else{
                                                                  $label1=__('secondary_email_txt');
                                                                  $type1='email';
                                                              } } ?>
                                                                <label for="basicInput" class="labl1"><?=@$label1?></label>
                                                                <input type="<?=@$type1?>" class="form-control field1" name="o_secondary_email" value="<?php if (@$edit->user_status_type >=2 && @$edit->user_status_type <= 3) { echo @$edit->secondary_email; } ?>">
                                                            </fieldset>
                                                        </div>




                                                      </div>

                                                    </div>

                                                    <div class="cl_two" style="display:none;">

                                                      <div class="row">

                                                        <div class="col-md-12 mt-2 mb-2">
                                                            <h4><b><?=__('extra_info_txt')?></b></h4>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                              <label for="basicInput"><?=__('college_campus_txt')?> *</label>
                                                              <br>
                                                              <?php
                                                              $male_campus_t = 'checked'; $female_campus_t = '';
                                                              if (@$edit->user_status_type == 4) {

                                                                if (@$edit->campus == 'female') {

                                                                  $male_checked_t = '';
                                                                  $female_checked_t = 'checked';

                                                                }

                                                              }
                                                               ?>
                                                                <input type="radio" name="t_campus" value="male" <?=@$male_campus_t;?>>
                                                                <label for="basicInput"><?=__('male_txt')?></label>
                                                                <input type="radio" name="t_campus" value="female" <?=@$female_campus_t;?>>
                                                                <label for="basicInput"><?=__('female_txt')?></label>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('select_college_text')?> *</label>
                                                                <select class="form-control t" required="" name="t_college">

                                                                    <option value=""><?=__('select_college_text')?></option>

                                                                    <?php foreach ($colleges as $v): ?>

                                                                      <option value="<?=$v->id?>" <?php if (@$edit->user_status_type == 4) { if (@$edit->college_id == $v->id) { echo "selected";}
                                                                       } ?>><?=$v->colg_name?></option>

                                                                    <?php endforeach; ?>

                                                                </select>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('select_depart_txt')?> *</label>
                                                                <select class="form-control t" required="" name="t_depart_id">
                                                                    <option value=""><?=__('select_depart_txt')?></option>
                                                                    <?php foreach ($departments as $v): ?>

                                                                      <option value="<?=$v->depart_id?>" <?php if (@$edit->user_status_type == 4) {
                                                                        if(@$edit->depart_id == $v->depart_id){ echo 'selected'; } } ?>><?=$v->depart_name?></option>

                                                                    <?php endforeach; ?>

                                                                </select>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('program_txt')?> *</label>
                                                                <select class="form-control t" required="" name="t_program_id">
                                                                  <?php if (@$edit->user_id != ''): ?>
                                                                    <?php if (@$edit->user_status_type == 4): ?>

                                                                      <?php foreach ($programs as $key => $v): ?>

                                                                        <?php if (@$edit->depart_id == $v->depart_id): ?>

                                                                        <option value="<?=$v->program_id?>" <?=(@$edit->program_id == $v->program_id ? 'selected' : '')?> ><?=$v->program_name?></option>

                                                                        <?php endif; ?>

                                                                      <?php endforeach; ?>

                                                                    <?php endif; ?>

                                                                  <?php else: ?>
                                                                      <option value=""><?=__('select_depart_first_txt')?></option>
                                                                  <?php endif; ?>

                                                                </select>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                              <label for="basicInput"><?=__('scientific_degree_txt')?> *</label>
                                                              <br>
                                                              <?php
                                                              $bachelor_degree = 'checked'; $master_degree = ''; $phd_degree = '';
                                                              if (@$edit->user_status_type == 4) {

                                                                if (@$edit->degree == 'Master') {

                                                                  $bachelor_degree = ''; $master_degree = 'checked'; $phd_degree = '';

                                                                }
                                                                elseif (@$edit->degree == 'Ph.D') {

                                                                  $bachelor_degree = ''; $master_degree = ''; $phd_degree = 'checked';

                                                                }

                                                              }
                                                               ?>
                                                                <input type="radio" name="t_degree" value="Bachelor" <?=@$bachelor_degree;?>>
                                                                <label for="basicInput"><?=__('bachelor_txt')?></label>
                                                                <input type="radio" name="t_degree" value="Master" <?=@$master_degree;?>>
                                                                <label for="basicInput"><?=__('master_txt')?></label>
                                                                <input type="radio" name="t_degree" value="Ph.D" <?=@$phd_degree;?>>
                                                                <label for="basicInput"><?=__('phd_txt')?></label>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                          <fieldset class="form-group">
                                                              <label for="basicInput"><?=__('laboratory_number_txt')?> *</label>
                                                              <select class="form-control t" required="" name="t_laboratory_numb">
                                                                <?php if (@$edit->user_id != ''): ?>
                                                                  <?php if (@$edit->user_status_type == 4): ?>

                                                                    <?php foreach ($labs as $key => $v): ?>

                                                                      <?php if (@$edit->depart_id == $v->depart_id): ?>

                                                                      <option value="<?=$v->lab_id?>" <?=(@$edit->laboratory_numb == $v->lab_id ? 'selected' : '')?> ><?=$v->lab_name?></option>

                                                                      <?php endif; ?>

                                                                    <?php endforeach; ?>

                                                                  <?php endif; ?>

                                                                <?php else: ?>
                                                                    <option value=""><?=__('select_depart_first_txt')?></option>
                                                                <?php endif; ?>
                                                              </select>
                                                          </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('uni_student_number_txt')?> *</label>
                                                                <input type="text" class="form-control t" required="" name="t_student_numb" value="<?php if (@$edit->user_status_type == 4) { echo @$edit->student_numb;
                                                                 } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('phone_txt')?> *</label>
                                                                <input type="text" class="form-control t" required="" name="t_phone_1" value="<?php if (@$edit->user_status_type == 4) { echo @$edit->phone_1;
                                                                 } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('fax_txt')?> *</label>
                                                                <input type="text" class="form-control t" required="" name="t_fax" value="<?php if (@$edit->user_status_type == 4) { echo @$edit->fax;
                                                                 } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('mobile_txt')?> *</label>
                                                                <input type="text" class="form-control t" required="" name="t_phone_2" value="<?php if (@$edit->user_status_type == 4) { echo @$edit->phone_2;
                                                                 } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('emergency_number_for_after_few_hours')?></label>
                                                                <input type="text" class="form-control" name="t_emergency_numb"  value="<?php if (@$edit->user_status_type == 4) { echo @$edit->emergency_numb;
                                                                 } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('university_email_txt')?> *</label>
                                                                <input type="email" class="form-control t is_unique_university_email" required="" name="t_university_email"  value="<?php if (@$edit->user_status_type == 4) { echo @$edit->university_email;
                                                                 } ?>">
                                                                 <p style="color: red;margin: 0;display: none;" id="t_warningemail">This Email is Already Exits</p>

                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('secondary_email_txt')?> *</label>
                                                                <input type="email" class="form-control t" required="" name="t_secondary_email"  value="<?php if (@$edit->user_status_type == 4) { echo @$edit->secondary_email;
                                                                 } ?>">
                                                            </fieldset>
                                                        </div>




                                                      </div>

                                                    </div>

                                                    <div class="cl_three" style="display:none;">

                                                      <div class="row">

                                                        <div class="col-md-12 mt-2 mb-2">
                                                            <h4><b><?=__('extra_info_txt')?></b></h4>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('university_txt')?> *</label>
                                                                <input type="text" class="form-control th" required="" name="th_university" value="<?php if (@$edit->user_status_type == 6) { echo @$edit->university;
                                                                 } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('select_college_text')?> *</label>
                                                                <select class="form-control th" required="" name="th_college">

                                                                    <option value=""><?=__('select_college_text')?></option>

                                                                    <?php foreach ($colleges as $v): ?>

                                                                      <option value="<?=$v->id?>" <?php if (@$edit->user_status == 10) { if (@$edit->college_id == $v->id) { echo "selected";}
                                                                       } ?>><?=$v->colg_name?></option>

                                                                    <?php endforeach; ?>

                                                                </select>
                                                            </fieldset>
                                                         </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('select_depart_txt')?> *</label>
                                                                <select class="form-control th" required="" name="th_depart_id">
                                                                    <option value=""><?=__('select_depart_txt')?></option>
                                                                    <?php foreach ($departments as $v): ?>

                                                                      <option value="<?=$v->depart_id?>" <?php if (@$edit->user_status_type == 6) { if (@$edit->depart_id == $v->depart_id) { echo "selected";}
                                                                       } ?> ><?=$v->depart_name?></option>

                                                                    <?php endforeach; ?>

                                                                </select>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                          <fieldset class="form-group">
                                                              <label for="basicInput"><?=__('laboratory_number_txt')?> *</label>
                                                              <select class="form-control th" required="" name="th_laboratory_numb">
                                                                  <?php if (@$edit->user_id != ''): ?>
                                                                    <?php if (@$edit->user_status_type == 6): ?>

                                                                      <?php foreach ($labs as $key => $v): ?>

                                                                        <?php if (@$edit->depart_id == $v->depart_id): ?>

                                                                        <option value="<?=$v->lab_id?>" <?=(@$edit->laboratory_numb == $v->lab_id ? 'selected' : '')?> ><?=$v->lab_name?></option>

                                                                        <?php endif; ?>

                                                                      <?php endforeach; ?>

                                                                    <?php endif; ?>

                                                                  <?php else: ?>
                                                                      <option value=""><?=__('select_depart_first_txt')?></option>
                                                                  <?php endif; ?>

                                                              </select>
                                                          </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('employee_id_numb_txt')?> *</label>
                                                                <input type="text" class="form-control th" required="" name="th_employee_id_numb" value="<?php if (@$edit->user_status_type == 6) { echo @$edit->employee_id_numb;
                                                                 } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('id_number_txt')?> *</label>
                                                                <input type="text" class="form-control th" required="" name="th_id_numb" value="<?php if (@$edit->user_status_type == 6) { echo @$edit->id_numb;
                                                                 } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('phone_txt')?> *</label>
                                                                <input type="text" class="form-control th" required="" name="th_phone_1" value="<?php if (@$edit->user_status_type == 6) { echo @$edit->phone_1;
                                                                 } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('fax_txt')?> *</label>
                                                                <input type="text" class="form-control th" required="" name="th_fax" value="<?php if (@$edit->user_status_type == 6) { echo @$edit->fax;
                                                                 } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('mobile_txt')?> *</label>
                                                                <input type="text" class="form-control th" required="" name="th_phone_2" value="<?php if (@$edit->user_status_type == 6) { echo @$edit->phone_2;
                                                                 } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('emergency_number_for_after_few_hours')?></label>
                                                                <input type="text" class="form-control" name="th_emergency_numb" value="<?php if (@$edit->user_status_type == 6) { echo @$edit->emergency_numb;
                                                                 } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('university_email_txt')?> *</label>
                                                                <input type="email" class="form-control th is_unique_university_email" required="" name="th_university_email" value="<?php if (@$edit->user_status_type == 6) { echo @$edit->university_email;
                                                                 } ?>">
                                                                 <p style="color: red;margin: 0;display: none;" id="th_warningemail">This Email is Already Exits</p>

                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('secondary_email_txt')?> *</label>
                                                                <input type="email" class="form-control th" required="" name="th_secondary_email" value="<?php if (@$edit->user_status_type == 6) { echo @$edit->secondary_email;
                                                                 } ?>">
                                                            </fieldset>
                                                        </div>



                                                      </div>

                                                    </div>

                                                    <div class="cl_fr" style="display:none;">

                                                      <div class="row">

                                                        <div class="col-md-12 mt-2 mb-2">
                                                            <h4><b><?=__('extra_info_txt')?></b></h4>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('institute_or_college_txt')?> *</label>
                                                                <input type="text" class="form-control fr" required="" name="fr_university" value="<?php if (@$edit->user_status_type == 5) { echo @$edit->university;
                                                                } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('college_txt')?> *</label>
                                                                <input type="text" class="form-control fr" required="" name="fr_college" value="<?php if (@$edit->user_status_type == 5) { echo @$edit->college;
                                                                } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('department_txt')?> *</label>
                                                                <input type="text" class="form-control fr" required="" name="fr_depart_id" value="<?php if (@$edit->user_status_type == 5) { echo @$edit->department_name;
                                                                } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('employee_id_numb_txt')?>*</label>
                                                                <input type="text" class="form-control fr" required="" name="fr_employee_id_numb" value="<?php if (@$edit->user_status_type == 5) { echo @$edit->employee_id_numb;
                                                                } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('id_number_txt')?> *</label>
                                                                <input type="text" class="form-control fr" required="" name="fr_id_numb" value="<?php if (@$edit->user_status_type == 5) { echo @$edit->id_numb;
                                                                } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('phone_txt')?> *</label>
                                                                <input type="text" class="form-control fr" required="" name="fr_phone_1" value="<?php if (@$edit->user_status_type == 5) { echo @$edit->phone_1;
                                                                } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('fax_txt')?> *</label>
                                                                <input type="text" class="form-control fr" required="" name="fr_fax" value="<?php if (@$edit->user_status_type == 5) { echo @$edit->fax;
                                                                } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('mobile_txt')?> *</label>
                                                                <input type="text" class="form-control fr" required="" name="fr_phone_2" value="<?php if (@$edit->user_status_type == 5) { echo @$edit->phone_2;
                                                                } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('emergency_number_for_after_few_hours')?> </label>
                                                                <input type="text" class="form-control" name="fr_emergency_numb" value="<?php if (@$edit->user_status_type == 5) { echo @$edit->emergency_numb;
                                                                } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('university_email')?> *</label>
                                                                <input type="email" class="form-control fr is_unique_university_email" required="" name="fr_university_email" value="<?php if (@$edit->user_status_type == 5) { echo @$edit->university_email;
                                                                } ?>">
                                                                <p style="color: red;margin: 0;display: none;" id="fr_warningemail">This Email is Already Exits</p>

                                                            </fieldset>
                                                        </div>


                                                      </div>

                                                    </div>



                                                    <div class="cl_five" style="display:none;">

                                                      <div class="row">

                                                        <div class="col-md-12 mt-2 mb-2">
                                                            <h4><b><?=__('extra_info_txt')?></b></h4>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('institute_or_college_txt')?> *</label>
                                                                <input type="text" class="form-control fv" required="" name="fv_university" value="<?php if (@$edit->user_status_type > 6) { echo @$edit->university;
                                                                } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('college_txt')?> *</label>
                                                                <input type="text" class="form-control fv" required="" name="fv_college" value="<?php if (@$edit->user_status_type > 6) { echo @$edit->college;
                                                                } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('department_txt')?> *</label>
                                                                <input type="text" class="form-control fv" required="" name="fv_depart_id" value="<?php if (@$edit->user_status_type > 6) { echo @$edit->department_name;
                                                                } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('employee_id_numb_txt')?> *</label>
                                                                <input type="text" class="form-control fv" required="" name="fv_employee_id_numb" value="<?php if (@$edit->user_status_type > 6) { echo @$edit->employee_id_numb;
                                                                } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('id_number_txt')?> *</label>
                                                                <input type="text" class="form-control fv" required="" name="fv_id_numb" value="<?php if (@$edit->user_status_type > 6) { echo @$edit->id_numb;
                                                                } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('phone_txt')?> *</label>
                                                                <input type="text" class="form-control fv" required="" name="fv_phone_1" value="<?php if (@$edit->user_status_type > 6) { echo @$edit->phone_1;
                                                                } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('fax_txt')?> *</label>
                                                                <input type="text" class="form-control fv" required="" name="fv_fax" value="<?php if (@$edit->user_status_type > 6) { echo @$edit->fax;
                                                                } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('mobile_txt')?> *</label>
                                                                <input type="text" class="form-control fv" required="" name="fv_phone_2" value="<?php if (@$edit->user_status_type > 6) { echo @$edit->phone_2;
                                                                } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('emergency_number_for_after_few_hours')?></label>
                                                                <input type="text" class="form-control" name="fv_emergency_numb" value="<?php if (@$edit->user_status_type > 6) { echo @$edit->emergency_numb;
                                                                } ?>">
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                                            <fieldset class="form-group">
                                                                <label for="basicInput"><?=__('university_email_txt')?> *</label>
                                                                <input type="email" class="form-control fv is_unique_university_email" required="" name="fv_university_email" value="<?php if (@$edit->user_status_type_type > 6) { echo @$edit->university_email;
                                                                } ?>">
                                                                <p style="color: red;margin: 0;display: none;" id="fv_warningemail">This Email is Already Exits</p>

                                                            </fieldset>
                                                        </div>


                                                      </div>

                                                    </div>

                                                  </div>
                                              </div>

                                              <?php endif; ?>
                                              <div class="form-actions">
                                                  <button type="Submit" class="btn btn-raised btn-primary"><i class="ft-check position-right"></i> <?=__('save_txt')?></button>
                                              </div>

                                          </form>

                                        </div>
                                        <div class="tab-pane <?=$upassword?>" id="tabIcon2" aria-labelledby="baseIcon-tab2">

                                          <form action="<?= site_url('update_password')?>" method="post" id="showpassword" >

                                            <?php if($this->session->flashdata('response') == 'danger') { ?>
                                              <br><div class="alert alert-danger alert-dismissible" style="color:white!important;">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                <?=$this->session->flashdata('msg')?>
                                              </div>
                                            <?php } ?>

                                            <input type="hidden" name="id" value="<?=@$edit->user_id?>">

                                            <div class="row mt-4">



                                            <div class="col-xl-4 col-lg-4 col-md-12 mb-1">
                                            <fieldset class="form-group">
                                            <label for="basicInput"><?=__('profile_old_passowrd_txt')?> *</label>
                                            <input type="password" class="form-control" name="password" required>
                                            </fieldset>
                                            </div>

                                            <div class="col-xl-4 col-lg-4 col-md-12 mb-1">
                                            <fieldset class="form-group">
                                            <label for="basicInput"><?=__('profile_confirm_passowrd_txt')?> *</label>
                                            <input type="password" class="form-control"  name="c_password" required >
                                            </fieldset>
                                            </div>

                                            <div class="col-xl-4 col-lg-4 col-md-12 mb-1">
                                            <fieldset class="form-group">
                                            <label for="basicInput"><?=__('profile_new_passowrd_txt')?> *</label>
                                            <input type="password" class="form-control"  name="n_password" required>
                                            </fieldset>
                                            </div>

                                            </div>

                                            <button type="Submit" class="btn btn-raised btn-primary"><i class="ft-check position-right"></i> <?=__('profile_update_passowrd_txt')?></button>


                                          </form>

                                        </div>
                                        <div class="tab-pane <?=$uemailnotify?>" id="tabIcon3" aria-labelledby="baseIcon-tab3">

                                          <form action="<?= site_url('notification_settings')?>" method="post">

                                            <input type="hidden" name="id" value="<?=@$edit->user_id?>">
                                            <input type="hidden" name="notification_settings_id" value="<?=@$notification_settings->id?>">

                                            <div class="row mt-3">
                                              <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                                <label><?=__('system_notifications_txt')?></label>
                                                <table class="table table-bordered">
                                                  <tr>
                                                    <th><?=__('notf_gen_maintanance')?></th>
                                                    <td><input type="checkbox" name="notf_gen_maintanance" value="yes" <?=@($notification_settings->notf_gen_maintanance == "1")?'checked':''?>></td>
                                                  </tr>
                                                  <tr>
                                                    <th><?=__('notf_ret_maintanance')?></th>
                                                    <td><input type="checkbox" name="notf_ret_maintanance" value="yes" <?=@($notification_settings->notf_ret_maintanance == "1")?'checked':''?>></td>
                                                  </tr>
                                                  <tr>
                                                    <th><?=__('notf_rej_maintanance')?></th>
                                                    <td><input type="checkbox" name="notf_rej_maintanance" value="yes" <?=@($notification_settings->notf_rej_maintanance == "1")?'checked':''?>></td>
                                                  </tr>
                                                  <tr>
                                                    <th><?=__('notf_returned_maintainance')?></th>
                                                    <td><input type="checkbox" name="notf_returned_maintanance" value="yes" <?=@($notification_settings->notf_returned_maintanance == "1")?'checked':''?>></td>
                                                  </tr>
                                                  <tr>
                                                    <th><?=__('notf_compl_maintainance')?></th>
                                                    <td><input type="checkbox" name="notf_compl_maintainance" value="yes" <?=@($notification_settings->notf_compl_maintainance == "1")?'checked':''?>></td>
                                                  </tr>

                                                  <?php if ($this->session->userdata('user_st') == 2): ?>

                                                  <tr>
                                                    <th><?=__('notf_compl_sys_maint')?></th>
                                                    <td><input type="checkbox" name="notf_compl_sys_maint" value="yes" <?=@($notification_settings->notf_compl_sys_maint == "1")?'checked':''?>></td>
                                                  </tr>

                                                  <?php endif; ?>

                                                  <?php if ($this->session->userdata('user_st') == 4): ?>

                                                  <tr>
                                                    <th><?=__('notf_gen_usage_req')?></th>
                                                    <td><input type="checkbox" name="notf_gen_usage_req" value="yes" <?=@($notification_settings->notf_gen_usage_req == "1")?'checked':''?>></td>
                                                  </tr>

                                                  <?php endif; ?>
                                                  <tr>
                                                    <th><?=__('notf_rej_usage_req')?></th>
                                                    <td><input type="checkbox" name="notf_rej_usage_req" value="yes" <?=@($notification_settings->notf_rej_usage_req == "1")?'checked':''?>></td>
                                                  </tr>
                                                  <tr>
                                                    <th><?=__('notf_accepted_usage_req')?></th>
                                                    <td><input type="checkbox" name="notf_accepted_usage_req" value="yes" <?=@($notification_settings->notf_accepted_usage_req == "1")?'checked':''?>></td>
                                                  </tr>
                                                  <tr>
                                                    <th><?=__('notf_ret_usage_req')?></th>
                                                    <td><input type="checkbox" name="notf_ret_usage_req" value="yes" <?=@($notification_settings->notf_ret_usage_req == "1")?'checked':''?>></td>
                                                  </tr>
                                                  <tr>
                                                    <th><?=__('notf_gen_chem_inv_req')?></th>
                                                    <td><input type="checkbox" name="notf_gen_chem_inv_req" value="yes" <?=@($notification_settings->notf_gen_chem_inv_req == "1")?'checked':''?>></td>
                                                  </tr>
                                                   <tr>
                                                    <th><?=__('notf_acc_chem_inv_req')?></th>
                                                    <td><input type="checkbox" name="notf_acc_chem_inv_req" value="yes" <?=@($notification_settings->notf_acc_chem_inv_req == "1")?'checked':''?>></td>
                                                  </tr>
                                                  <tr>
                                                    <th><?=__('notf_rej_chem_inv_req')?></th>
                                                    <td><input type="checkbox" name="notf_rej_chem_inv_req" value="yes" <?=@($notification_settings->notf_rej_chem_inv_req == "1")?'checked':''?>></td>
                                                  </tr>
                                                  <tr>
                                                    <th><?=__('notf_returned_chem_inv_req')?></th>
                                                    <td><input type="checkbox" name="notf_returned_chem_inv_req" value="yes" <?=@($notification_settings->notf_returned_chem_inv_req == "1")?'checked':''?>></td>
                                                  </tr>
                                                  <tr>
                                                    <th><?=__('notf_resubmit_chem_inv_req')?></th>
                                                    <td><input type="checkbox" name="notf_resubmit_chem_inv_req" value="yes" <?=@($notification_settings->notf_resubmit_chem_inv_req == "1")?'checked':''?>></td>
                                                  </tr>
                                                  <tr>
                                                    <th><?=__('notf_gen_animal_inv_req')?></th>
                                                    <td><input type="checkbox" name="notf_gen_animal_inv_req" value="yes" <?=@($notification_settings->notf_gen_animal_inv_req == "1")?'checked':''?>></td>
                                                  </tr>
                                                  <tr>
                                                    <th><?=__('notf_acc_animal_inv_req')?></th>
                                                    <td><input type="checkbox" name="notf_acc_animal_inv_req" value="yes" <?=@($notification_settings->notf_acc_animal_inv_req == "1")?'checked':''?>></td>
                                                  </tr>
                                                  <tr>
                                                    <th><?=__('notf_rej_animal_inv_req')?></th>
                                                    <td><input type="checkbox" name="notf_rej_animal_inv_req" value="yes" <?=@($notification_settings->notf_rej_animal_inv_req == "1")?'checked':''?>></td>
                                                  </tr>
                                                  <tr>
                                                    <th><?=__('notf_returned_animal_inv_req')?></th>
                                                    <td><input type="checkbox" name="notf_returned_animal_inv_req" value="yes" <?=@($notification_settings->notf_returned_animal_inv_req == "1")?'checked':''?>></td>
                                                  </tr>
                                                  <tr>
                                                    <th><?=__('notf_resubmit_animal_inv_req')?></th>
                                                    <td><input type="checkbox" name="notf_resubmit_animal_inv_req" value="yes" <?=@($notification_settings->notf_resubmit_animal_inv_req == "1")?'checked':''?>></td>
                                                  </tr>

                                                </table>
                                              </div>
                                            </div>

                                            <div class="row mt-4">

                                            <div class="col-xl-4 col-lg-4 col-md-12 mb-1">
                                            <fieldset class="form-group">
                                            <label for="basicInput"><?=__('profile_email_notification_txt')?> *</label>
                                            <select name="email_noti" id="" class="form-control">
                                            <option value="enable" <?= (@$notification_settings->email_notification == 'enable')?"selected":""; ?> ><?=__('enable')?></option>
                                            <option value="disable" <?= (@$notification_settings->email_notification == 'disable')?"selected":""; ?>><?=__('disable')?></option>
                                            </select>

                                            </fieldset>
                                            </div>

                                            </div>
                                            <button type="Submit" class="btn btn-raised btn-primary"><i class="ft-check position-right"></i><?=__('profile_save_setting_txt')?></button>

                                          </form>

                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
                          <!-- Tabs with Icons Ends -->



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

          
