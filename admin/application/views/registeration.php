<?php
$alert_msg=$this->session->userdata('alert_msg');
?>
<!DOCTYPE html>
<html lang="en" class="loading">
  <!-- BEGIN : Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Registration</title>
    <link rel="apple-touch-icon" sizes="60x60" href="<?=base_url('app-assets/img/ico/apple-icon-60.png')?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('app-assets/img/ico/apple-icon-76.png')?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=base_url('app-assets/img/ico/apple-icon-120.png')?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=base_url('app-assets/img/ico/apple-icon-152.png')?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url('app-assets/img/ico/favicon.ico')?>">
    <link rel="shortcut icon" type="image/png" href="<?=base_url('app-assets/img/ico/favicon-32.png')?>">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="<?=base_url('app-assets/fonts/feather/style.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('app-assets/fonts/simple-line-icons/style.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('app-assets/fonts/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('app-assets/vendors/css/perfect-scrollbar.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('app-assets/vendors/css/prism.min.css')?>">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url('app-assets/css/app.css')?>">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
    <style media="screen">
      .wrapper.nav-collapsed .main-panel .main-content {
        padding-left: 0;
      }
    </style>
  </head>
  <!-- END : Head-->

  <!-- BEGIN : Body-->
  <body data-col="1-column" class=" 1-column  blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper nav-collapsed menu-collapsed">
      <div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
          <div class="content-wrapper"><!--Login Page Starts-->
<!-- <section id="login" style="background-image: url(<?=base_url('app-assets/img/gallery/light-bg.jpg')?>);" > -->
  <div class="container-fluid">
    <div class="row full-height-vh m-0">
      <div class="col-md-12 p-5">
        <div class="card">
          <div class="card-content">
            <div class="card-body login-img">
              <div class="row m-0">
                <div class="col-lg-12 col-md-12 bg-white px-4 pt-3">
                  <div class="row">
                    <div class="col-md-12 text-center">

                      <?php if (@getimagesize(base_url('uploads/sidebar_logo/'.$logo->value))): ?>

                        <img src="<?=base_url('uploads/sidebar_logo/'.$logo->value)?>" style="max-height: 125px;max-width: 215px;margin-bottom:10px;"/>

                          <?php else: ?>

                        <img src="<?=base_url('app-assets/images/no-image-available.png')?>" style="max-height: 125px;max-width: 215px;" />

                      <?php endif; ?>

                    </div>
                  </div>
                  <form class="login-form" action="<?=site_url('registered')?>" method="post" enctype="multipart/form-data">
                  <h4 class="mb-2 card-title">Registration</h4>
                  <hr>
                  <?php if($this->session->flashdata('response') == 'success') { ?>

                    <div class="alert alert-success alert-dismissible">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <?=$this->session->flashdata('msg')?>
                    </div>

                  <?php } ?>
                  <div class="form-body">
                    <input type="hidden" name="type" class="type">

                      <div class="row mt-2">

                        <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Title *</label>
                                <select class="form-control"  name="title">
                                    <option value="">select title</option>
                                    <option value="Mr" <?=(@$this->input->post('title') == 'Mr'?'selected':'')?>>Mr</option>
                                    <option value="Ms" <?=(@$this->input->post('title') == 'Ms'?'selected':'')?>>Ms</option>
                                    <option value="Mrs" <?=(@$this->input->post('title') == 'Mrs'?'selected':'')?>>Mrs</option>
                                    <option value="Dr" <?=(@$this->input->post('title') == 'Dr'?'selected':'')?>>Dr</option>
                                    <option value="Prof" <?=(@$this->input->post('title') == 'Prof'?'selected':'')?>>Prof</option>
                                </select>
                            </fieldset>
                            <span class="text-danger"><?=form_error('title')?></span>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Username *</label>
                                <input type="text" id="ResUsername" class="form-control"  name="username" value="<?=@$this->input->post('username')?>">

                            </fieldset>
                            <span class="text-danger"><?=form_error('username')?></span>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Password *</label>
                                <input type="password" class="form-control"  name="password" value="<?=@$this->input->post('password')?>">
                            </fieldset>
                            <span class="text-danger"><?=form_error('password')?></span>

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Email *</label>
                                <input type="text" class="form-control"  name="email" value="<?=@$this->input->post('email')?>">
                            </fieldset>
                            <span class="text-danger"><?=form_error('email')?></span>

                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Full Name *</label>
                                <input type="text" class="form-control"  name="full_name" value="<?=@$this->input->post('full_name')?>">
                            </fieldset>
                            <span class="text-danger"><?=form_error('full_name')?></span>

                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Surename *</label>
                                <input type="text" class="form-control"  name="surename" value="<?=@$this->input->post('surename')?>">
                            </fieldset>
                            <span class="text-danger"><?=form_error('surename')?></span>

                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Date of birth *</label>
                                <input type="date" class="form-control"  name="dob" value="<?=@$this->input->post('dob')?>">
                            </fieldset>
                            <span class="text-danger"><?=form_error('dob')?></span>

                        </div>
                        
                        <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                            <fieldset class="form-group">
                              <label for="basicInput">Gender *</label>
                              <br>
                                <input type="radio" id="maleRadio" name="gender" value="male" <?=(@$this->input->post('gender') == 'male'?'checked':'')?>>
                                <label for="#maleRadio">Male</label>
                                <input type="radio" id="femaleRadio" name="gender" value="female" <?=(@$this->input->post('gender') == 'female'?'checked':'')?>>
                                <label for="#femaleRadio">Female</label>
                            </fieldset>
                            <span class="text-danger"><?=form_error('gender')?></span>

                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-3 mb-1">
                            <fieldset class="form-group">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <label for="basicInput">Cnic / B-Form *</label>
                                  </div>
                                  <div class="col-lg-6 text-right">
                                    <input type="checkbox" name="show_cnic_to_public" value="1" <?=(@$this->input->post('show_cnic_to_public') == '1'?'checked':'')?>>
                                    <label for="basicInput">Show Public</label>
                                  </div>
                                </div>
                                <input type="text" class="form-control"  name="cnic" value="<?=@$this->input->post('cnic')?>">
                            </fieldset>
                            <span class="text-danger"><?=form_error('cnic')?></span>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Father Name *</label>
                                <input type="text" class="form-control"  name="father_name" value="<?=@$this->input->post('father_name')?>">
                            </fieldset>
                            <span class="text-danger"><?=form_error('father_name')?></span>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Nationality *</label>
                                <input type="text" class="form-control"  name="nationality" value="<?=@$this->input->post('nationality')?>">
                            </fieldset>
                            <span class="text-danger"><?=form_error('nationality')?></span>
                            
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Province *</label>
                                <input type="text" class="form-control"  name="province" value="<?=@$this->input->post('province')?>">
                            </fieldset>
                            <span class="text-danger"><?=form_error('province')?></span>

                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">District *</label>
                                <input type="text" class="form-control"  name="district" value="<?=@$this->input->post('district')?>">
                            </fieldset>
                            <span class="text-danger"><?=form_error('district')?></span>

                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">City *</label>
                                <input type="text" class="form-control"  name="city" value="<?=@$this->input->post('city')?>">
                            </fieldset>
                            <span class="text-danger"><?=form_error('city')?></span>

                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Last Degree *</label>
                                <input type="text" class="form-control"  name="last_degree" value="<?=@$this->input->post('last_degree')?>">
                            </fieldset>
                            <?php if(@$this->input->post('type') == 'Teacher'){ ?>
                              <span class="text-danger"><?=form_error('last_degree')?></span>
                            <?php } ?>
                                  
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Zip Code *</label>
                                <input type="number" class="form-control"  name="zip_code" value="<?=@$this->input->post('zip_code')?>">
                            </fieldset>
                            <span class="text-danger"><?=form_error('zip_code')?></span>

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 mb-1">
                            <fieldset class="form-group">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <label for="basicInput">Phone No *</label>
                                  </div>
                                  <div class="col-lg-6 text-right">
                                    <input type="checkbox" name="show_phone_no_to_public" value="1" <?=(@$this->input->post('show_phone_no_to_public') == '1'?'checked':'')?>>
                                    <label for="basicInput">Show Public</label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <input type="number" class="form-control" placeholder="code"  name="phone_no_code" value="<?=@$this->input->post('phone_no_code')?>" style="padding-right:0px;">
                                  </div>
                                  <div class="col-md-8">
                                    <input type="number" class="form-control" placeholder="number"  name="phone_no" value="<?=@$this->input->post('phone_no')?>">
                                  </div>
                                </div>
                            </fieldset>
                            <span class="text-danger"><?=form_error('phone_no_code')?></span>
                            <span class="text-danger"><?=form_error('phone_no')?></span>

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 mb-1">
                            <fieldset class="form-group">
                              <label for="basicInput">Role *</label>
                              <br>

                                <?php foreach($roles as $key => $v) : ?>

                                <?php if($v->name != 'Superadmin'): ?>

                                <input type="radio" class="role_id" name="role_id" value="<?=$v->id?>" role-name="<?=$v->name?>" <?=(@$this->input->post('role_id') == $v->id?'checked':'')?>>
                                <label for="basicInput"><?=$v->name?></label>

                                <?php endif ?>

                                <?php endforeach ?>
                                
                            </fieldset>
                            <span class="text-danger"><?=form_error('role_id')?></span>

                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 mb-1">
                            <fieldset class="form-group">
                              <label for="basicInput">Image </label>
                              <input type="file" class="form-control" name="image">                                
                            </fieldset>

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 mb-1">
                            <fieldset class="form-group">
                                <div class="row">
                                  <div class="col-lg-6">
                                    <label for="basicInput">Home Address *</label>
                                  </div>
                                  <div class="col-lg-6 text-right">
                                    <input type="checkbox" name="show_address_to_public" value="1" <?=(@$this->input->post('show_address_to_public') == '1'?'checked':'')?>>
                                    <label for="basicInput">Show Public</label>
                                  </div>
                                </div>
                                <textarea class="form-control" name="home_address" id="" cols="30" rows="4"><?=@$this->input->post('home_address')?></textarea>
                            </fieldset>
                            <span class="text-danger"><?=form_error('home_address')?></span>

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Parmanent Address *</label>
                                <textarea class="form-control" name="permanent_address" id="" cols="30" rows="4"><?=@$this->input->post('permanent_address')?></textarea>
                            </fieldset>
                            <span class="text-danger"><?=form_error('permanent_address')?></span>

                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Bio *</label>
                                <textarea class="form-control" name="bio" max="500" id="" cols="30" rows="4"><?=@$this->input->post('bio')?></textarea>
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
                                    <select class="form-control"  name="campus_id">
                                        <option value="">select campus</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </fieldset>
                                <span class="text-danger"><?=form_error('campus_id')?></span>

                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Select Faculty *</label>
                                    <select class="form-control"  name="faculty_id">
                                        <option value="">select faculty</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </fieldset>
                                <span class="text-danger"><?=form_error('faculty_id')?></span>

                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Select Department *</label>
                                    <select class="form-control"  name="depart_id">
                                        <option value="">select department</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </fieldset>
                                <span class="text-danger"><?=form_error('depart_id')?></span>

                              </div>
                              <!-- additional_info_student_start -->
                              <!-- <div class="additional_info_student"> -->

                              <div class="col-xl-6 col-lg-6 col-md-12 mb-1 additional_info_student">
                                <fieldset class="form-group">
                                    <label for="basicInput">Select Program *</label>
                                    <select class="form-control"  name="program_id">
                                        <option value="">select program</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </fieldset>
                                <span class="text-danger"><?=form_error('program_id')?></span>

                              </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1 additional_info_student">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Roll No *</label>
                                        <input type="text" class="form-control"  name="roll_no" value="<?=@$this->input->post('roll_no')?>">
                                    </fieldset>
                                      <?php if(@$this->input->post('type') == 'Student'){ ?>
                                        <span class="text-danger"><?=form_error('roll_no')?></span>
                                      <?php } ?>

                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1 additional_info_student">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Batch Year *</label>
                                        <input type="text" class="form-control"  name="batch_year" value="<?=@$this->input->post('batch_year')?>">
                                    </fieldset>
                                    <?php if(@$this->input->post('type') == 'Student'){ ?>
                                      <span class="text-danger"><?=form_error('batch_year')?></span>
                                    <?php } ?>

                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1 additional_info_student">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Current Semester No# *</label>
                                        <input type="number" class="form-control"  name="current_semester_no" value="<?=@$this->input->post('current_semester_no')?>">
                                    </fieldset>
                                    <?php if(@$this->input->post('type') == 'Student'){ ?>
                                      <span class="text-danger"><?=form_error('current_semester_no')?></span>
                                    <?php } ?>

                                </div>

                              <!-- </div> -->
                              <!-- additional_info_student_end -->

                              <!-- additional_info_teacher_start -->
                              <!-- <div class="additional_info_teacher"> -->

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1 additional_info_teacher">
                                      <fieldset class="form-group">
                                          <label for="basicInput">Designation *</label>
                                          <input type="text" class="form-control"  name="designation" value="<?=@$this->input->post('designation')?>">
                                      </fieldset>
                                      <?php if(@$this->input->post('type') == 'Teacher'){ ?>
                                        <span class="text-danger"><?=form_error('designation')?></span>
                                      <?php } ?>

                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1 additional_info_teacher">
                                      <fieldset class="form-group">
                                          <label for="basicInput">Speciality *</label>
                                          <input type="text" class="form-control"  name="speciality" value="<?=@$this->input->post('speciality')?>">
                                      </fieldset>
                                      <?php if(@$this->input->post('type') == 'Teacher'){ ?>
                                        <span class="text-danger"><?=form_error('speciality')?></span>
                                      <?php } ?>

                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1 additional_info_other">
                                      <fieldset class="form-group">
                                          <label for="basicInput">Job Title *</label>
                                          <input type="text" class="form-control"  name="job_title" value="<?=@$this->input->post('job_title')?>">
                                      </fieldset>
                                      <?php if(@$this->input->post('type') == 'Other'){ ?>
                                        <span class="text-danger"><?=form_error('job_title')?></span>
                                      <?php } ?>

                                </div>

                              <!-- </div> -->
                              <!-- additional_info_teacher_end -->
                              
                            </div>                          

                        </div>

                      </div>
                         
                  </div>
                  <div class="fg-actions d-flex justify-content-between">
                    <div class="recover-pass">
                      <button type="submit" class="btn btn-primary text-decoration-none text-white">
                        Submit
                      </button>
                    </div>
                  </div>
                </form>
                <div class="col-md-12 mb-2 mr-2" >
                  <a href="<?=site_url('login')?>" style="margin-left:-16px!important;"><i class="ft-user"></i> Already have Account</a>
                </div>

                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- </section> -->
<!--Login Page Ends-->

          </div>
        </div>
        <!-- END : End Main Content-->
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="<?=base_url('app-assets/vendors/js/core/jquery-3.2.1.min.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('app-assets/vendors/js/core/popper.min.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('app-assets/vendors/js/core/bootstrap.min.js')?>" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
 

    <script type="text/javascript">

      let role_name = $(".role_id:checked").attr('role-name');
      check_role(role_name);

      $('input[name=role_id]').change(function(){

        let role_name = $(this).attr('role-name');
        check_role(role_name);

      })

      function hide_roles_field() 
      {

        $('.additional_info').hide();
        $('.additional_info_student').hide();
        $('.additional_info_teacher').hide();
        
      }

      function check_role(role_name)
      {

          $('.type').val(role_name);

          if(role_name == 'Teacher')
          {
              hide_roles_field();
              $('.additional_info').show();
              $('.additional_info_teacher').show();
          }
          else if(role_name == 'Student')
          {
              hide_roles_field();
              $('.additional_info').show();
              $('.additional_info_student').show();
          }
          else if(role_name == 'Faculty')
          {
              hide_roles_field();
              $('.additional_info').show();
              // $('.additional_info_student').show();
          }
          else if(role_name == 'Admin')
          {
              hide_roles_field();
              $('.additional_info').show();
              // $('.additional_info_student').show();
          }
          else if(role_name == 'Other')
          {
              hide_roles_field();
              $('.additional_info').show();
              $('.additional_info_other').show();
              // $('.additional_info_student').show();
          }
          else
          {
            
            hide_roles_field();

          }

      }
      
    </script>
  </body>
  <!-- END : Body-->
</html>
