<div class="main-content">
<!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-6" data-bg-img="<?=base_url('assets/images/bg/bg8.jpg')?>">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Edit Profile</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="content-wrapper"><!-- Basic Elements start -->
    <section class="basic-elements">
      <div class="row">
        <div class="col-md-12">
          <div class="card pb-0">
            <div class="card-header">

            </div>
            <div class="card-body" style="padding: 85px;">
                <div class="px-3">
                <form class="login-form" action="<?=site_url('update_profile')?>" method="post" enctype="multipart/form-data">
                  <?php if($this->session->flashdata('response') == 'success') { ?>

                    <div class="alert alert-success alert-dismissible">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <?=$this->session->flashdata('msg')?>
                    </div>

                  <?php } ?>
                  <div class="form-body">
                    <input type="hidden" name="id" value="<?=$edit->uid?>">
                    <input type="hidden" name="type" class="type" value="<?=$edit->type?>">
                    <input type="hidden" name="account_active" value="<?=$edit->account_active?>">
                    <input type="hidden" name="role_id" value="<?=$edit->role_id?>">

                      <div class="row">

                                <div class="col-xl-3 col-lg-3 col-md-3 mb-1">
                                    <?php if (@getimagesize('admin/uploads/users/'.$edit->image)){ ?>

                                    <img src="<?=base_url('admin/uploads/users/'.$edit->image)?>" class="teacher-profile-pic" style="width: 100%;height: 37vh;">

                                    <?php }else{ ?>

                                    <img src="<?=base_url('assets/images/team/2.png')?>" class="teacher-profile-pic" style="width: 100%;height: 37vh;">

                                    <?php } ?>
                                </div>
                                <div class="col-xl-1 col-lg-1 col-md-1 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Title *</label>
                                        <select class="form-control"  name="title">
                                            <option value="">select title</option>

                                            <?php if(@$this->input->post('title') != ''): ?>

                                            <option value="Mr" <?=(@$this->input->post('title') == 'Mr' ?'selected':'')?>>Mr</option>
                                            <option value="Ms" <?=(@$this->input->post('title') == 'Ms'?'selected':'')?>>Ms</option>
                                            <option value="Mrs" <?=(@$this->input->post('title') == 'Mrs'?'selected':'')?>>Mrs</option>
                                            <option value="Dr" <?=(@$this->input->post('title') == 'Dr'?'selected':'')?>>Dr</option>
                                            <option value="Prof" <?=(@$this->input->post('title') == 'Prof'?'selected':'')?>>Prof</option>

                                            <?php else:?>

                                            <option value="Mr" <?=(@$edit->title == 'Mr' ?'selected':'')?>>Mr</option>
                                            <option value="Ms" <?=(@$edit->title == 'Ms'?'selected':'')?>>Ms</option>
                                            <option value="Mrs" <?=(@$edit->title == 'Mrs'?'selected':'')?>>Mrs</option>
                                            <option value="Dr" <?=(@$edit->title == 'Dr'?'selected':'')?>>Dr</option>
                                            <option value="Prof" <?=(@$edit->title == 'Prof'?'selected':'')?>>Prof</option>

                                            <?php endif ?>

                                        </select>
                                    </fieldset>
                                    <span class="text-danger"><?=form_error('title')?></span>

                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Username *</label>
                                        <input type="text" id="ResUsername" class="form-control"  name="username" value="<?=(@$this->input->post('username') == ''?@$edit->username:$this->input->post('username'))?>">
                                        <input type="hidden" name="username_old" value="<?=$edit->username?>">

                                    </fieldset>
                                    <span class="text-danger"><?=form_error('username')?></span>

                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Password *</label>
                                        <input type="password" class="form-control"  name="password" value="<?=(@$this->input->post('password') == ''?@$this->encryption->decrypt($edit->password):$this->input->post('password'))?>">
                                    </fieldset>
                                    <span class="text-danger"><?=form_error('password')?></span>

                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Email *</label>
                                        <input type="text" class="form-control"  name="email" value="<?=(@$this->input->post('email') == ''?@$edit->email:$this->input->post('email'))?>">
                                        <input type="hidden" name="email_old" value="<?=$edit->email?>">
                                    </fieldset>
                                    <span class="text-danger"><?=form_error('email')?></span>

                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                                    <fieldset class="form-group">
                                    <label for="basicInput">Gender *</label>
                                    <br>
                                        <?php if(@$this->input->post('gender') != ''): ?>
                                        <input type="radio" id="maleRadio" name="gender" value="male" <?=(@$this->input->post('gender') == 'male'?'checked':'')?>>
                                        <label for="maleRadio">Male</label>
                                        <input type="radio" id="femaleRadio" name="gender" value="female" <?=(@$this->input->post('gender') == 'female'?'checked':'')?>>
                                        <label for="femaleRadio">Female</label>
                                        <?php else: ?>
                                        <input type="radio" id="maleRadio" name="gender" value="male" <?=(@$edit->gender == 'male'?'checked':'')?>>
                                        <label for="maleRadio">Male</label>
                                        <input type="radio" id="femaleRadio" name="gender" value="female" <?=(@$edit->gender == 'female'?'checked':'')?>>
                                        <label for="femaleRadio">Female</label>
                                        <?php endif; ?>
                                    </fieldset>
                                    <span class="text-danger"><?=form_error('gender')?></span>

                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Full Name *</label>
                                        <input type="text" class="form-control"  name="full_name" value="<?=(@$this->input->post('full_name') == ''?@$edit->full_name:$this->input->post('full_name'))?>">
                                    </fieldset>
                                    <span class="text-danger"><?=form_error('full_name')?></span>

                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Father Name *</label>
                                        <input type="text" class="form-control"  name="father_name" value="<?=(@$this->input->post('father_name') == ''?@$edit->father_name:$this->input->post('father_name'))?>">
                                    </fieldset>
                                    <span class="text-danger"><?=form_error('father_name')?></span>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Surename *</label>
                                        <input type="text" class="form-control"  name="surename" value="<?=(@$this->input->post('surename') == ''?@$edit->surename:$this->input->post('surename'))?>">
                                    </fieldset>
                                    <span class="text-danger"><?=form_error('surename')?></span>

                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Date of birth *</label>
                                        <input type="date" class="form-control"  name="dob" value="<?=(@$this->input->post('dob') == ''?@$edit->dob:$this->input->post('dob'))?>">
                                    </fieldset>
                                    <span class="text-danger"><?=form_error('dob')?></span>

                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3 mb-1">
                                    <fieldset class="form-group">
                                        <div class="row">
                                        <div class="col-lg-6">
                                            <label for="basicInput">Phone No *</label>
                                        </div>
                                        <div class="col-lg-6 text-right">

                                            <?php if(@$this->input->post('show_phone_no_to_public') != ''): ?>

                                                <input type="checkbox" id="phonenoPublic" name="show_phone_no_to_public" value="1" <?=(@$this->input->post('show_phone_no_to_public') == '1'?'checked':'')?>>

                                            <?php else: ?>

                                                <input type="checkbox" id="phonenoPublic" name="show_phone_no_to_public" value="1" <?=(@$edit->show_phone_no_public == '1'?'checked':'')?>>

                                            <?php endif; ?>
                                            <label for="phonenoPublic">Show Public</label>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-4">
                                            <input type="number" class="form-control" placeholder="code"  name="phone_no_code" value="<?=(@$this->input->post('phone_no_code') == ''?@$edit->phone_no_code:$this->input->post('phone_no_code'))?>" style="padding-right:0px;">
                                        </div>
                                        <div class="col-md-8">
                                            <input type="number" class="form-control" placeholder="number"  name="phone_no" value="<?=(@$this->input->post('phone_no') == ''?@$edit->phone_no:$this->input->post('phone_no'))?>">
                                        </div>
                                        </div>
                                    </fieldset>
                                    <span class="text-danger"><?=form_error('phone_no_code')?></span>
                                    <span class="text-danger"><?=form_error('phone_no')?></span>

                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Last Degree *</label>
                                        <input type="text" class="form-control"  name="last_degree" value="<?=(@$this->input->post('last_degree') == ''?@$edit->last_qualification:$this->input->post('last_degree'))?>">
                                    </fieldset>
                                    <span class="text-danger"><?=form_error('last_degree')?></span>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Zip Code *</label>
                                        <input type="number" class="form-control"  name="zip_code" value="<?=(@$this->input->post('zip_code') == ''?@$edit->zip_code:$this->input->post('zip_code'))?>">
                                    </fieldset>
                                    <span class="text-danger"><?=form_error('zip_code')?></span>

                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">City *</label>
                                        <input type="text" class="form-control"  name="city" value="<?=(@$this->input->post('city') == ''?@$edit->city:$this->input->post('city'))?>">
                                    </fieldset>
                                    <span class="text-danger"><?=form_error('city')?></span>

                                </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 mb-1">
                            <fieldset class="form-group">
                              <label for="basicInput">Image </label>
                              <input type="file" class="form-control edit-image" name="image">
                              <input type="hidden" name="image_old" value="<?=@$edit->image?>">
                            </fieldset>

                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 mb-1">
                            <fieldset class="form-group">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <label for="basicInput">Cnic / B-Form *</label>
                                  </div>
                                  <div class="col-lg-6 text-right">

                                    <?php if(@$this->input->post('show_cnic_to_public') != ''): ?>

                                        <input type="checkbox" id="cnicPublic" name="show_cnic_to_public" value="1" <?=(@$this->input->post('show_cnic_to_public') == '1'?'checked':'')?>>

                                    <?php else: ?>

                                        <input type="checkbox" id="cnicPublic" name="show_cnic_to_public" value="1" <?=(@$edit->show_cnic_public == '1'?'checked':'')?>>

                                    <?php endif; ?>

                                    <label for="cnicPublic">Show Public</label>
                                  </div>
                                </div>
                                <input type="text" class="form-control"  name="cnic" value="<?=(@$this->input->post('cnic') == ''?@$edit->cnic:$this->input->post('cnic'))?>">
                            </fieldset>
                            <span class="text-danger"><?=form_error('cnic')?></span>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Nationality *</label>
                                <input type="text" class="form-control"  name="nationality" value="<?=(@$this->input->post('nationality') == ''?@$edit->nationality:$this->input->post('nationality'))?>">
                            </fieldset>
                            <span class="text-danger"><?=form_error('nationality')?></span>

                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Province *</label>
                                <input type="text" class="form-control"  name="province" value="<?=(@$this->input->post('province') == ''?@$edit->province:$this->input->post('province'))?>">
                            </fieldset>
                            <span class="text-danger"><?=form_error('province')?></span>

                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">District *</label>
                                <input type="text" class="form-control"  name="district" value="<?=(@$this->input->post('district') == ''?@$edit->district:$this->input->post('district'))?>">
                            </fieldset>
                            <span class="text-danger"><?=form_error('district')?></span>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 mb-1">
                            <fieldset class="form-group">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <label for="basicInput">Home Address *</label>
                                  </div>
                                  <div class="col-lg-6 text-right">

                                        <?php if(@$this->input->post('show_address_to_public') != ''): ?>

                                            <input type="checkbox" id="addressPublic" name="show_address_to_public" value="1" <?=(@$this->input->post('show_address_to_public') == '1'?'checked':'')?>>

                                        <?php else:?>

                                            <input type="checkbox" id="addressPublic" name="show_address_to_public" value="1" <?=(@$edit->show_address_public == '1'?'checked':'')?>>

                                        <?php endif ?>
                                    <label for="addressPublic">Show Public</label>
                                  </div>
                                </div>
                                <textarea class="form-control" name="home_address" id="" cols="30" rows="4"><?=(@$this->input->post('home_address') == ''?@$edit->home_address:$this->input->post('home_address'))?></textarea>
                            </fieldset>
                            <span class="text-danger"><?=form_error('home_address')?></span>

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Parmanent Address *</label>
                                <textarea class="form-control" name="permanent_address" id="" cols="30" rows="4"><?=(@$this->input->post('permanent_address') == ''?@$edit->permanent_address:$this->input->post('permanent_address'))?></textarea>
                            </fieldset>
                            <span class="text-danger"><?=form_error('permanent_address')?></span>

                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Bio *</label>
                                <textarea class="form-control" name="bio" max="500" id="" cols="30" rows="4"><?=(@$this->input->post('bio') == ''?@$edit->bio:$this->input->post('bio'))?></textarea>
                            </fieldset>
                            <span class="text-danger"><?=form_error('bio')?></span>

                        </div>

                      </div>
                      <div class="row">

                        <div class="col-lg-12 additional_info">

                            <div class="row">

                              <div class="col-lg-12">
                                  <h3> Additional Information</h3>
                                  <hr>
                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Select Campus *</label>
                                    <select class="form-control select-by-campus"  name="campus_id">

                                        <option selected disabled value=""> choose</option>

                                        <?php foreach($campus as $key => $v): ?>

                                            <?php if(@$this->input->post('campus_id') != ''): ?>

                                                <option value="<?= $v->id ?>" <?=(@$this->input->post('campus_id') == $v->id?'selected':'')?>><?=$v->name?></option>

                                            <?php else:?>

                                                <option value="<?= $v->id ?>" <?=(@$edit->campus_id == $v->id?'selected':'')?>><?=$v->name?></option>

                                            <?php endif ?>


                                        <?php endforeach ?>

                                    </select>
                                </fieldset>
                                <span class="text-danger"><?=form_error('campus_id')?></span>

                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Select Faculty *</label>
                                    <select class="form-control select-by-faculty"  name="faculty_id">

                                        <option selected disabled value=""> choose</option>

                                        <?php foreach($faculties as $key => $v): ?>

                                            <?php if(@$this->input->post('campus_id') != ''): ?>

                                                <?php if(@$this->input->post('campus_id') == $v->campus_id): ?>

                                                    <option value="<?= $v->id ?>" <?=(@$this->input->post('faculty_id') == $v->id?'selected':'')?>><?=$v->name?></option>

                                                <?php endif; ?>

                                            <?php else:?>

                                                <?php if(@$edit->campus_id == $v->campus_id): ?>

                                                    <option value="<?= $v->id ?>" <?=(@$edit->faculty_id == $v->id?'selected':'')?>><?=$v->name?></option>

                                                <?php endif; ?>

                                            <?php endif; ?>


                                        <?php endforeach ?>

                                    </select>
                                </fieldset>
                                <span class="text-danger"><?=form_error('faculty_id')?></span>

                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Select Department *</label>
                                    <select class="form-control select-by-department"  name="depart_id">

                                        <option selected disabled value=""> choose</option>


                                        <?php foreach($departments as $key => $v): ?>

                                            <?php if(@$this->input->post('faculty_id') != ''): ?>

                                                <?php if(@$this->input->post('faculty_id') == $v->fac_id): ?>

                                                    <option value="<?= $v->id ?>" <?=(@$this->input->post('depart_id') == $v->id?'selected':'')?>><?=$v->name?></option>

                                                <?php endif; ?>

                                            <?php else:?>

                                                <?php if(@$edit->faculty_id == $v->fac_id): ?>

                                                    <option value="<?= $v->id ?>" <?=(@$edit->depart_id == $v->id?'selected':'')?>><?=$v->name?></option>

                                                <?php endif; ?>

                                            <?php endif; ?>

                                        <?php endforeach ?>


                                    </select>
                                </fieldset>
                                <span class="text-danger"><?=form_error('depart_id')?></span>

                              </div>
                              <!-- additional_info_student_start -->
                              <!-- <div class="additional_info_student"> -->

                                <?php $student_display = 'none';$teacher_display = 'none';$other_display = 'none';
                                if($edit->type == 'STUDENT'){ $student_display = 'block'; }?>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1 additional_info_student" style="display:<?=$student_display?>">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Select Program *</label>
                                        <select class="form-control"  name="program_id">
                                            <option selected disabled value=""> choose</option>

                                            <?php if(@$this->input->post('program_id') != ''):?>

                                                <option value="Bachelor" <?=(@$this->input->post('program_id') == 'Bachelor'?'selected':'')?>>Bachelor</option>
                                                <option value="Master" <?=(@$this->input->post('program_id') == 'Master'?'selected':'')?>>Master</option>
                                                <option value="Mphil" <?=(@$this->input->post('program_id') == 'Mphil'?'selected':'')?>>Mphil</option>
                                                <option value="Phd" <?=(@$this->input->post('program_id') == 'Phd'?'selected':'')?>>Phd</option>

                                            <?php else: ?>

                                                <option value="Bachelor" <?=(@$edit->program_id == 'Bachelor'?'selected':'')?>>Bachelor</option>
                                                <option value="Master" <?=(@$edit->program_id == 'Master'?'selected':'')?>>Master</option>
                                                <option value="Mphil" <?=(@$edit->program_id == 'Mphil'?'selected':'')?>>Mphil</option>
                                                <option value="Phd" <?=(@$edit->program_id == 'Phd'?'selected':'')?>>Phd</option>

                                            <?php endif ?>

                                        </select>
                                    </fieldset>
                                    <?php if(@$this->input->post('type') == 'STUDENT'){ ?>
                                    <span class="text-danger"><?=form_error('program_id')?></span>
                                    <?php } ?>

                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1 additional_info_student" style="display:<?=$student_display?>">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Roll No *</label>
                                        <input type="text" class="form-control"  name="roll_no" value="<?=(@$this->input->post('roll_no') == ''?@$edit->roll_number:$this->input->post('roll_no'))?>">
                                    </fieldset>
                                      <?php if(@$this->input->post('type') == 'STUDENT'){ ?>
                                        <span class="text-danger"><?=form_error('roll_no')?></span>
                                      <?php } ?>

                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1 additional_info_student" style="display:<?=$student_display?>">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Batch Year *</label>
                                        <input type="text" class="form-control"  name="batch_year" value="<?=(@$this->input->post('batch_year') == ''?@$edit->batch_year:$this->input->post('batch_year'))?>">
                                    </fieldset>
                                    <?php if(@$this->input->post('type') == 'STUDENT'){ ?>
                                      <span class="text-danger"><?=form_error('batch_year')?></span>
                                    <?php } ?>

                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1 additional_info_student" style="display:<?=$student_display?>">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Current Semester No# *</label>
                                        <input type="number" class="form-control"  name="current_semester_no" value="<?=(@$this->input->post('current_semester_no') == ''?@$edit->current_semester:$this->input->post('current_semester_no'))?>">
                                    </fieldset>
                                    <?php if(@$this->input->post('type') == 'STUDENT'){ ?>
                                      <span class="text-danger"><?=form_error('current_semester_no')?></span>
                                    <?php } ?>

                                </div>

                              <!-- </div> -->
                              <!-- additional_info_student_end -->

                              <!-- additional_info_teacher_start -->
                              <!-- <div class="additional_info_teacher"> -->
                                <?php  if($edit->type == 'TEACHER'){ $teacher_display = 'block'; }?>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1 additional_info_teacher" style="display:<?=$teacher_display?>">
                                      <fieldset class="form-group">
                                          <label for="basicInput">Designation *</label>
                                          <input type="text" class="form-control"  name="designation" value="<?=(@$this->input->post('designation') == ''?@$edit->designation:$this->input->post('designation'))?>">
                                      </fieldset>
                                      <?php if(@$this->input->post('type') == 'TEACHER'){ ?>
                                        <span class="text-danger"><?=form_error('designation')?></span>
                                      <?php } ?>

                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1 additional_info_teacher" style="display:<?=$teacher_display?>">
                                      <fieldset class="form-group">
                                          <label for="basicInput">Speciality *</label>
                                          <input type="text" class="form-control"  name="speciality" value="<?=(@$this->input->post('speciality') == ''?@$edit->speciality:$this->input->post('speciality'))?>">
                                      </fieldset>
                                      <?php if(@$this->input->post('type') == 'TEACHER'){ ?>
                                        <span class="text-danger"><?=form_error('speciality')?></span>
                                      <?php } ?>

                                </div>
                                <?php if($edit->type == 'OTHER'){ $other_display = 'block'; }?>
                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1 additional_info_other" style="display:<?=$other_display?>">
                                      <fieldset class="form-group">
                                          <label for="basicInput">Job Title *</label>
                                          <input type="text" class="form-control"  name="job_title" value="<?=@$this->input->post('job_title')?>">
                                      </fieldset>
                                      <?php if(@$this->input->post('type') == 'OTHER'){ ?>
                                        <span class="text-danger"><?=form_error('job_title')?></span>
                                      <?php } ?>

                                </div>
                              <!-- </div> -->
                              <!-- additional_info_teacher_end -->

                            </div>

                        </div>

                      </div>

                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12 text-left">
                      <button type="submit" class="btn btn-primary text-decoration-none text-white">
                        Submit
                      </button>
                    </div>
                  </div>

                </form>

                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<script>

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('.teacher-profile-pic').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$(".edit-image").change(function() {

  readURL(this);

})

    $('.select-by-campus,.select-by-faculty').change(function(){

        if($(this).hasClass('select-by-campus'))
        {

        $.ajax({

            url : '<?=site_url('pages/getAllFaculties/')?>'+$(this).val()+'/register',
            success:function(data)
            {
                $('.select-by-faculty').html(data)
                $('.select-by-department').html('<option selected disabled value=""> choose </option>');
            }

            })

        }
        else if($(this).hasClass('select-by-faculty'))
        {

            $.ajax({

            url : '<?=site_url('pages/getAllDepartments/')?>'+$(this).val()+'/register',
            success:function(data)
            {
                $('.select-by-department').html(data)
            }

            })


        }

    })

</script>
