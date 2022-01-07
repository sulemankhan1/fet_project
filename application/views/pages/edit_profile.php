<!-- Start main-content -->
<style media="screen">
  .labeld {
    color: #333;
    margin-left: 15px;
    margin-top: 15px;
  }
</style>
<div class="main-content">
<section id="about">
  <div class="container pb-90 pb-sm-90 welcome-cont">
  <div class="section-content">
 <div class="row mt-100">
   <form class="login-form" action="<?=site_url('update_profile')?>" method="post" enctype="multipart/form-data">
    <div class="row">
      <?php if($this->session->flashdata('response') == 'success') { ?>

        <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <?=$this->session->flashdata('msg')?>
        </div>

      <?php } ?>
      <input type="hidden" name="id" value="<?=$edit->uid?>">
      <input type="hidden" name="type" class="type" value="<?=$edit->type?>">
      <input type="hidden" name="account_active" value="<?=$edit->account_active?>">
      <input type="hidden" name="role_id" value="<?=$edit->role_id?>">
      <div class="col-sm-3"><!--left col-->
      <div class="text-center">
        <?php if (@getimagesize('admin/uploads/users/'.$edit->image)){ ?>

        <img src="<?=base_url('admin/uploads/users/'.$edit->image)?>" class="avatar img-circle img-thumbnail" alt="avatar" style="width: 50%;height: auto;">

        <?php }else{ ?>

        <img src="<?=base_url('assets/images/team/default.png')?>" class="avatar img-circle img-thumbnail" alt="avatar" style="width: 50%;height: auto;">

        <?php } ?>
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload form-control edit-image" name="image">
        <input type="hidden" name="image_old" value="<?=@$edit->image?>">
      </div></hr><br>
           <div class="panel panel-default">
            <div class="panel-heading">Information</div>
          <ul class="list-group">
            <label class="labeld">Campus</label>

                                    <select class="form-control select-by-campus"  name="campus_id">

                                        <option selected disabled value=""> Select Campus</option>

                                        <?php foreach($campus as $key => $v): ?>

                                            <?php if(@$this->input->post('campus_id') != ''): ?>

                                                <option value="<?= $v->id ?>" <?=(@$this->input->post('campus_id') == $v->id?'selected':'')?>><?=$v->name?></option>

                                            <?php else:?>

                                                <option value="<?= $v->id ?>" <?=(@$edit->campus_id == $v->id?'selected':'')?>><?=$v->name?></option>

                                            <?php endif ?>


                                        <?php endforeach ?>

                                    </select>
                                    <span class="text-danger"><?=form_error('campus_id')?></span>

                                    <label class="labeld">Faculty</label>

                                    <select class="form-control select-by-faculty"  name="faculty_id">
                                      <option selected disabled value=""> Select Faculty</option>
                                      <?php foreach($faculties as $key => $v): ?>
                                          <?php if(@$this->input->post('faculty_id') != ''): ?>
                                              <?php if(@$this->input->post('faculty_id') == $v->faculty_id): ?>
                                                  <option value="<?= $v->id ?>" <?=(@$this->input->post('faculty_id') == $v->id?'selected':'')?>><?=$v->name?></option>
                                              <?php endif; ?>
                                          <?php else:?>

                                                  <option value="<?= $v->id ?>" <?=(@$edit->faculty_id == $v->id?'selected':'')?>><?=$v->name?></option>

                                          <?php endif; ?>
                                      <?php endforeach ?>
                                    </select>
                                    <span class="text-danger"><?=form_error('faculty_id')?></span>
                                    <label class="labeld">Department</label>

                                    <fieldset class="form-group">

                                      <select class="form-control select-by-department"  name="depart_id">

                                          <option selected disabled value=""> Select Department</option>


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
                                      <span class="text-danger"><?=form_error('depart_id')?></span>
                                    </fieldset>

          </ul>
              </div>
          <div class="panel panel-default">
            <div class="panel-heading">Additional Information*</div>
            <?php $student_display = 'none';$teacher_display = 'none';$other_display = 'none';
            if($edit->type == 'STUDENT'){ $student_display = 'block'; }?>

            <!-- <div class="col-md-12 mb-1 additional_info_student" style="display:<?=$student_display?>">
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

            </div> -->

            <div class="col-md-12 mb-1 additional_info_student" style="display:<?=$student_display?>">
                <fieldset class="form-group">
                    <label for="basicInput">Roll No *</label>
                    <input type="text" class="form-control"  name="roll_no" value="<?=(@$this->input->post('roll_no') == ''?@$edit->roll_number:$this->input->post('roll_no'))?>">
                </fieldset>
                  <?php if(@$this->input->post('type') == 'STUDENT'){ ?>
                    <span class="text-danger"><?=form_error('roll_no')?></span>
                  <?php } ?>

            </div>
            <div class="col-md-12 mb-1 additional_info_student" style="display:<?=$student_display?>">
                <fieldset class="form-group">
                    <label for="basicInput">Batch Year *</label>
                    <input type="text" class="form-control"  name="batch_year" value="<?=(@$this->input->post('batch_year') == ''?@$edit->batch_year:$this->input->post('batch_year'))?>">
                </fieldset>
                <?php if(@$this->input->post('type') == 'STUDENT'){ ?>
                  <span class="text-danger"><?=form_error('batch_year')?></span>
                <?php } ?>

            </div>
            <div class="col-md-12 mb-1 additional_info_student" style="display:<?=$student_display?>">
                <fieldset class="form-group">
                    <label for="basicInput">Current Semester No# *</label>
                    <input type="number" class="form-control"  name="current_semester_no" value="<?=(@$this->input->post('current_semester_no') == ''?@$edit->current_semester:$this->input->post('current_semester_no'))?>">
                </fieldset>
                <?php if(@$this->input->post('type') == 'STUDENT'){ ?>
                  <span class="text-danger"><?=form_error('current_semester_no')?></span>
                <?php } ?>

            </div>

            <?php  if($edit->type == 'TEACHER'){ $teacher_display = 'block'; }?>

            <div class="col-md-12 mb-1 additional_info_teacher" style="display:<?=$teacher_display?>">
                  <fieldset class="form-group">
                      <label for="basicInput">Designation *</label>
                      <input type="text" class="form-control"  name="designation" value="<?=(@$this->input->post('designation') == ''?@$edit->designation:$this->input->post('designation'))?>">
                  </fieldset>
                  <?php if(@$this->input->post('type') == 'TEACHER'){ ?>
                    <span class="text-danger"><?=form_error('designation')?></span>
                  <?php } ?>

            </div>
            <div class="col-md-12 mb-1 additional_info_teacher" style="display:<?=$teacher_display?>">
                  <fieldset class="form-group">
                      <label for="basicInput">Speciality *</label>
                      <input type="text" class="form-control"  name="speciality" value="<?=(@$this->input->post('speciality') == ''?@$edit->speciality:$this->input->post('speciality'))?>">
                  </fieldset>
                  <?php if(@$this->input->post('type') == 'TEACHER'){ ?>
                    <span class="text-danger"><?=form_error('speciality')?></span>
                  <?php } ?>

            </div>
            <?php if($edit->type == 'OTHER'){ $other_display = 'block'; }?>
            <div class="col-md-12 mb-1 additional_info_other" style="display:<?=$other_display?>">
                  <fieldset class="form-group">
                      <label for="basicInput">Job Title *</label>
                      <input type="text" class="form-control"  name="job_title" value="<?=@$this->input->post('job_title')?>">
                  </fieldset>
                  <?php if(@$this->input->post('type') == 'OTHER'){ ?>
                    <span class="text-danger"><?=form_error('job_title')?></span>
                  <?php } ?>

            </div>
          </div>

        </div><!--/col-3-->
      <div class="col-sm-9">

               <div class="panel panel-default">
                <div class="panel-heading"><h4>Edit Profile</h4></div>
                <div class="panel-body">
                      <div class="form-group">

                          <div class="col-xs-2">
                              <label for="first_name"><h5 class="font-raleway font-weight-700">Select Title</h5></label>
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
                                        <span class="text-danger"><?=form_error('title')?></span>

                          </div>
                          <div class="col-xs-5">
                              <label for="first_name"><h5 class="font-raleway font-weight-700">Username</h5></label>
                              <input type="text" id="ResUsername" class="form-control"  name="username" value="<?=(@$this->input->post('username') == ''?@$edit->username:$this->input->post('username'))?>">
                              <input type="hidden" name="username_old" value="<?=$edit->username?>">
                              <span class="text-danger"><?=form_error('username')?></span>
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-5">
                            <label for="last_name"><h5 class="font-raleway font-weight-700">Password</h5></label>
                              <input type="password" class="form-control"  name="password" value="<?=(@$this->input->post('password') == ''?@$this->encryption->decrypt($edit->password):$this->input->post('password'))?>">
                              <span class="text-danger"><?=form_error('password')?></span>
                          </div>
                      </div>
                    </div>
                    </div>

                    <div class="panel panel-default">
                    <div class="panel-body">
                       <div class="form-group">
                          <div class="col-xs-4 mt-15">
                             <label for="mobile"><h5 class="font-raleway font-weight-700">Full Name</h5></label>
                              <input type="text" class="form-control"  name="full_name" value="<?=(@$this->input->post('full_name') == ''?@$edit->full_name:$this->input->post('full_name'))?>">
                              <span class="text-danger"><?=form_error('full_name')?></span>
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-4">
                              <label for="phone"><h5 class="font-raleway font-weight-700">Father Name</h5></label>
                              <input type="text" class="form-control"  name="father_name" value="<?=(@$this->input->post('father_name') == ''?@$edit->father_name:$this->input->post('father_name'))?>">
                              <span class="text-danger"><?=form_error('father_name')?></span>
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-4">
                              <label for="email"><h5 class="font-raleway font-weight-700">Email</h5></label>
                              <input type="text" class="form-control"  name="email" value="<?=(@$this->input->post('email') == ''?@$edit->email:$this->input->post('email'))?>">
                              <input type="hidden" name="email_old" value="<?=$edit->email?>">
                              <span class="text-danger"><?=form_error('email')?></span>
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-4">
                              <label for="gender"><h5 class="font-raleway font-weight-700">Gender</h5></label>
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
                              <span class="text-danger"><?=form_error('gender')?></span>
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-4">
                              <label for="email"><h5 class="font-raleway font-weight-700">Surname</h5></label>
                              <input type="text" class="form-control"  name="surename" value="<?=(@$this->input->post('surename') == ''?@$edit->surename:$this->input->post('surename'))?>">
                              <span class="text-danger"><?=form_error('surename')?></span>
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-4">
                              <label for="password"><h5 class="font-raleway font-weight-700">Phone No</h5></label>
                              <?php if(@$this->input->post('show_phone_no_to_public') != ''): ?>

                                  <input type="checkbox" id="phonenoPublic" name="show_phone_no_to_public" value="1" <?=(@$this->input->post('show_phone_no_to_public') == '1'?'checked':'')?>>

                              <?php else: ?>

                                  <input type="checkbox" id="phonenoPublic" name="show_phone_no_to_public" value="1" <?=(@$edit->show_phone_no_public == '1'?'checked':'')?>>

                              <?php endif; ?>
                                <label for="phonenoPublic"><h5>Show Public</h5></label>
                                <div class="row">
                                <div class="col-md-4">
                                    <input type="number" class="form-control" placeholder="code"  name="phone_no_code" value="<?=(@$this->input->post('phone_no_code') == ''?@$edit->phone_no_code:$this->input->post('phone_no_code'))?>" style="padding-right:0px;">
                                </div>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" placeholder="number"  name="phone_no" value="<?=(@$this->input->post('phone_no') == ''?@$edit->phone_no:$this->input->post('phone_no'))?>">
                                </div>
                                </div>
                          </div>
                          <span class="text-danger"><?=form_error('phone_no_code')?></span>
                          <span class="text-danger"><?=form_error('phone_no')?></span>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-4">

                           <label for="basicInput"><h5>Date of birth</h5></label>
                                  <input type="date" class="form-control"  name="dob" value="<?=(@$this->input->post('dob') == ''?@$edit->dob:$this->input->post('dob'))?>">
                                  <span class="text-danger"><?=form_error('dob')?></span>
                          </div>
                      </div>

                       <div class="form-group">

                          <div class="col-xs-4">
                              <label for="email"><h5 class="font-raleway font-weight-700">Last Degree</h5></label>
                              <input type="text" class="form-control"  name="last_degree" value="<?=(@$this->input->post('last_degree') == ''?@$edit->last_qualification:$this->input->post('last_degree'))?>">
                              <span class="text-danger"><?=form_error('last_degree')?></span>
                          </div>
                      </div>

                       <div class="form-group">

                          <div class="col-xs-4" id="formEP">
                              <label for="email"><h5 class="font-raleway font-weight-700">Zip code</h5></label>
                              <input type="number" class="form-control"  name="zip_code" value="<?=(@$this->input->post('zip_code') == ''?@$edit->zip_code:$this->input->post('zip_code'))?>">
                              <span class="text-danger"><?=form_error('zip_code')?></span>
                          </div>
                      </div>

                       <div class="form-group">

                          <div class="col-xs-4" id="formEP">
                              <label for="email"><h5 class="font-raleway font-weight-700">City</h5></label>
                              <input type="text" class="form-control"  name="city" value="<?=(@$this->input->post('city') == ''?@$edit->city:$this->input->post('city'))?>">
                              <span class="text-danger"><?=form_error('city')?></span>
                          </div>
                      </div>

                       <div class="form-group">

                          <div class="col-xs-4">
                              <label for="email"><h5 class="font-raleway font-weight-700">Cnic / B-form</h5></label>
                              <?php if(@$this->input->post('show_cnic_to_public') != ''): ?>

                                  <input type="checkbox" id="cnicPublic" name="show_cnic_to_public" value="1" <?=(@$this->input->post('show_cnic_to_public') == '1'?'checked':'')?>>

                              <?php else: ?>

                                  <input type="checkbox" id="cnicPublic" name="show_cnic_to_public" value="1" <?=(@$edit->show_cnic_public == '1'?'checked':'')?>>

                              <?php endif; ?>
                                <label for="phonenoPublic"><h5>Show Public</h5></label>
                                <input type="text" class="form-control"  name="cnic" value="<?=(@$this->input->post('cnic') == ''?@$edit->cnic:$this->input->post('cnic'))?>">
                                <span class="text-danger"><?=form_error('cnic')?></span>
                          </div>
                      </div>

                       <div class="form-group">

                          <div class="col-xs-4" id="formEP">
                              <label for="email"><h5 class="font-raleway font-weight-700">Nationality</h5></label>
                              <input type="text" class="form-control"  name="nationality" value="<?=(@$this->input->post('nationality') == ''?@$edit->nationality:$this->input->post('nationality'))?>">
                              <span class="text-danger"><?=form_error('nationality')?></span>
                          </div>
                      </div>

                       <div class="form-group">

                          <div class="col-xs-4" id="formEP">
                              <label for="email"><h5 class="font-raleway font-weight-700">Province</h5></label>
                              <input type="text" class="form-control"  name="province" value="<?=(@$this->input->post('province') == ''?@$edit->province:$this->input->post('province'))?>">
                              <span class="text-danger"><?=form_error('province')?></span>
                          </div>
                      </div>



                       <div class="form-group">

                          <div class="col-xs-4" id="formEP1">
                              <label for="email"><h5 class="font-raleway font-weight-700">District</h5></label>
                              <input type="text" class="form-control"  name="district" value="<?=(@$this->input->post('district') == ''?@$edit->district:$this->input->post('district'))?>">
                              <span class="text-danger"><?=form_error('district')?></span>
                          </div>
                      </div>

                    </div>
                  </div>

                      <div class="panel panel-default">
                        <div class="panel-body">
                          <div class="form-group">

                          <div class="col-xs-4 mt-15">
                              <label for="email"><h5 class="font-raleway font-weight-700">Home Address</h5></label>
                              <?php if(@$this->input->post('show_address_to_public') != ''): ?>

                                  <input type="checkbox" id="addressPublic" name="show_address_to_public" value="1" <?=(@$this->input->post('show_address_to_public') == '1'?'checked':'')?>>

                              <?php else:?>

                                  <input type="checkbox" id="addressPublic" name="show_address_to_public" value="1" <?=(@$edit->show_address_public == '1'?'checked':'')?>>

                              <?php endif ?>
                              <label for="addressPublic"><h5>Show Public</h5></label>
                              <textarea class="form-control" name="home_address" id="" cols="30" rows="4"><?=(@$this->input->post('home_address') == ''?@$edit->home_address:$this->input->post('home_address'))?></textarea>
                              <span class="text-danger"><?=form_error('home_address')?></span>
                          </div>
                      </div>

                      <div class="form-group">

                          <div class="col-xs-4">
                              <label for="email"><h5 class="font-raleway font-weight-700">Permanent Address</h5></label>
                              <textarea class="form-control" name="permanent_address" id="" cols="30" rows="4"><?=(@$this->input->post('permanent_address') == ''?@$edit->permanent_address:$this->input->post('permanent_address'))?></textarea>
                              <span class="text-danger"><?=form_error('permanent_address')?></span>
                          </div>
                      </div>

                      <div class="form-group">

                          <div class="col-xs-4">
                              <label for="email"><h5 class="font-raleway font-weight-700">Bio</h5></label>
                              <textarea class="form-control" name="bio" max="500" id="" cols="30" rows="4"><?=(@$this->input->post('bio') == ''?@$edit->bio:$this->input->post('bio'))?></textarea>
                              <span class="text-danger"><?=form_error('bio')?></span>
                          </div>
                      </div>

                        </div>
                      </div>

                      <div class="form-group">
                           <div class="col-xs-12 mb-50">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>

        </div><!--/col-9-->
    </div><!--/row-->
  </form>
</div>
</div>
  </section>

</div>
<!-- end main-content -->
<a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
</div>

<!-- end wrapper -->
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
