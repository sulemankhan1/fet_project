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

                      <?php if (@getimagesize(base_url('uploads/'.$setting->reg_logo))): ?>

                        <img src="<?=base_url('uploads/'.$setting->reg_logo)?>" style="max-height: 125px;max-width: 215px;margin-bottom:10px;"/>

                          <?php else: ?>

                        <img src="<?=base_url('app-assets/images/no-image-available.png')?>" style="max-height: 125px;max-width: 215px;" />

                      <?php endif; ?>

                    </div>
                  </div>
                  <form class="login-form" action="<?=site_url('registered')?>" method="post">
                  <h4 class="mb-2 card-title">Registration</h4>

                  <span class="text-danger"><?php if(validation_errors()) echo validation_errors(); ?></span>

                  <?php if($this->session->flashdata('response') == 'success') { ?>

                    <div class="alert alert-success alert-dismissible">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <?=$this->session->flashdata('msg')?>
                    </div>

                  <?php } ?>
                  <div class="form-body">
                    <input type="hidden" name="status_type" class="status_type">
                    <input type="hidden" name="user_status_type" class="user_status_type">
                      <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Username *</label>
                                <input type="text" id="ResUsername" class="form-control" required="" name="username" value="<?=@$this->input->post('username')?>">
                                <p style="color: red;margin: 0;display: none;" id="warningusername">This UserName is Already Exits</p>

                            </fieldset>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Password *</label>
                                <input type="password" class="form-control" required="" name="password">
                            </fieldset>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Title *</label>
                                <select class="form-control" required="" name="title">
                                    <option value="">select title</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Ms">Ms</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Dr">Dr</option>
                                    <option value="Prof">Prof</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">First Name (In Arabic) *</label>
                                <input type="text" class="form-control" required="" name="first_name_arabic">
                            </fieldset>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Middle Name (In Arabic) *</label>
                                <input type="text" class="form-control" required="" name="middle_name_arabic">
                            </fieldset>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Family/Last Name (In Arabic) *</label>
                                <input type="text" class="form-control" required="" name="family_last_name_arabic">
                            </fieldset>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">First Name (In English) *</label>
                                <input type="text" class="form-control" required="" name="first_name_eng">
                            </fieldset>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Middle Name (In English) *</label>
                                <input type="text" class="form-control" required="" name="middle_name_eng">
                            </fieldset>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Family/Last Name (In English) *</label>
                                <input type="text" class="form-control" required="" name="family_last_name_eng">
                            </fieldset>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                            <fieldset class="form-group">
                              <label for="basicInput">Gender *</label>
                              <br>
                                <input type="radio" name="gender" value="male" checked>
                                <label for="basicInput">Male</label>
                                <input type="radio" name="gender" value="female">
                                <label for="basicInput">Female</label>
                            </fieldset>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Nationality *</label>
                                <input type="text" class="form-control" required="" name="nationality">
                            </fieldset>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Status *</label>
                                <select class="form-control user_status" required="" name="user_status">
                                    <option value="">select status</option>

                                    <?php foreach ($roles as $v): ?>

                                      <option value="<?=$v->role_id?>" class="role<?=$v->role_id?>" data="<?=$v->role_type?>"><?=$v->role_name?></option>

                                    <?php endforeach; ?>

                                </select>
                            </fieldset>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">

                            <div class="cl_one" style="display:none;">

                              <div class="row">

                                <div class="col-md-12 mt-2 mb-2">
                                    <h4><b>Extra Information</b></h4>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                      <label for="basicInput">College Campus *</label>
                                      <br>
                                        <input type="radio" name="o_campus" value="male" checked>
                                        <label for="basicInput">Male</label>
                                        <input type="radio" name="o_campus" value="female">
                                        <label for="basicInput">Female</label>
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">College *</label>
                                        <select class="form-control o" required="" name="o_college">

                                            <option value="">select College</option>

                                            <?php foreach ($colleges as $v): ?>

                                              <option value="<?=$v->id?>"><?=$v->colg_name?></option>

                                            <?php endforeach; ?>

                                        </select>
                                    </fieldset>
                                 </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Department *</label>
                                        <select class="form-control o" required="" name="o_depart_id">
                                            <option value="">select department</option>
                                            <!-- <?php foreach ($departments as $v): ?>

                                              <option value="<?=$v->depart_id?>"><?=$v->depart_name?></option>

                                            <?php endforeach; ?> -->

                                        </select>
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Laboratory Number *</label>
                                        <select class="form-control o" required="" name="o_laboratory_numb">
                                            <option value="">select lab</option>
                                        </select>
                                    </fieldset>
                                </div>


                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Employee ID Number *</label>
                                        <input type="text" class="form-control o" required="" name="o_employee_id_numb">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Phone *</label>
                                        <input type="text" class="form-control o" required="" name="o_phone_1">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Fax *</label>
                                        <input type="text" class="form-control o" required="" name="o_fax">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Mobile *</label>
                                        <input type="text" class="form-control o" required="" name="o_phone_2">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Emergency No. For After few hours </label>
                                        <input type="text" class="form-control" name="o_emergency_numb">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">University E-mail *</label>
                                        <input type="email" class="form-control o is_unique_university_email" required="" name="o_university_email">
                                        <p style="color: red;margin: 0;display: none;" id="o_warningemail">This Email is Already Exits</p>
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput" class="labl1">Secondary Email</label>
                                        <input type="email" class="form-control field1" name="o_secondary_email">
                                    </fieldset>
                                </div>




                              </div>

                            </div>

                            <div class="cl_two" style="display:none;">

                              <div class="row">

                                <div class="col-md-12 mt-2 mb-2">
                                    <h4><b>Extra Information</b></h4>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                      <label for="basicInput">College Campus *</label>
                                      <br>
                                        <input type="radio" name="t_campus" value="male" checked>
                                        <label for="basicInput">Male</label>
                                        <input type="radio" name="t_campus" value="female">
                                        <label for="basicInput">Female</label>
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">College *</label>
                                        <select class="form-control t" required="" name="t_college">

                                            <option value="">select College</option>

                                            <?php foreach ($colleges as $v): ?>

                                              <option value="<?=$v->id?>"><?=$v->colg_name?></option>

                                            <?php endforeach; ?>

                                        </select>
                                    </fieldset>
                                 </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Department *</label>
                                        <select class="form-control t" required="" name="t_depart_id">
                                            <option value="">select department</option>
                                            <!-- <?php foreach ($departments as $v): ?>

                                              <option value="<?=$v->depart_id?>"><?=$v->depart_name?></option>

                                            <?php endforeach; ?> -->

                                        </select>
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Program *</label>
                                        <select class="form-control t" required="" name="t_program_id">
                                            <option value="">select department first</option>

                                        </select>
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                      <label for="basicInput">Scientific degree *</label>
                                      <br>
                                        <input type="radio" name="t_degree" value="Bachelor" checked>
                                        <label for="basicInput">Bachelor</label>
                                        <input type="radio" name="t_degree" value="Master">
                                        <label for="basicInput">Master</label>
                                        <input type="radio" name="t_degree" value="Ph.D">
                                        <label for="basicInput">Ph.D</label>
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                  <fieldset class="form-group">
                                      <label for="basicInput">Laboratory Number *</label>
                                      <select class="form-control t" required="" name="t_laboratory_numb">
                                          <option value="">select lab</option>
                                      </select>
                                  </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Uni. Student Number *</label>
                                        <input type="text" class="form-control t" required="" name="t_student_numb">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Phone *</label>
                                        <input type="text" class="form-control t" required="" name="t_phone_1">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Fax *</label>
                                        <input type="text" class="form-control t" required="" name="t_fax">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Mobile *</label>
                                        <input type="text" class="form-control t" required="" name="t_phone_2">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Emergency No. For After few hours </label>
                                        <input type="text" class="form-control"  name="t_emergency_numb">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">University E-mail *</label>
                                        <input type="email" class="form-control t is_unique_university_email" required="" name="t_university_email">
                                        <p style="color: red;margin: 0;display: none;" id="t_warningemail">This Email is Already Exits</p>
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Secondary E-mail</label>
                                        <input type="email" class="form-control"  name="t_secondary_email">
                                    </fieldset>
                                </div>




                              </div>

                            </div>

                            <div class="cl_three" style="display:none;">

                              <div class="row">

                                <div class="col-md-12 mt-2 mb-2">
                                    <h4><b>Extra Information</b></h4>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">University *</label>
                                        <input type="text" class="form-control th" required="" name="th_university">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">College *</label>
                                        <select class="form-control th" required="" name="th_college">

                                            <option value="">select College</option>

                                            <?php foreach ($colleges as $v): ?>

                                              <option value="<?=$v->id?>"><?=$v->colg_name?></option>

                                            <?php endforeach; ?>

                                        </select>
                                    </fieldset>
                                 </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Department *</label>
                                        <select class="form-control th" required="" name="th_depart_id">
                                            <option value="">select department</option>
                                            <!-- <?php foreach ($departments as $v): ?>

                                              <option value="<?=$v->depart_id?>"><?=$v->depart_name?></option>

                                            <?php endforeach; ?> -->

                                        </select>
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                  <fieldset class="form-group">
                                      <label for="basicInput">Laboratory Number *</label>
                                      <select class="form-control th" required="" name="th_laboratory_numb">
                                          <option value="">select lab</option>
                                      </select>
                                  </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Employee ID Number *</label>
                                        <input type="text" class="form-control th" required="" name="th_employee_id_numb">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">ID Number *</label>
                                        <input type="text" class="form-control th" required="" name="th_id_numb">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Phone *</label>
                                        <input type="text" class="form-control th" required="" name="th_phone_1">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Fax *</label>
                                        <input type="text" class="form-control th" required="" name="th_fax">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Mobile *</label>
                                        <input type="text" class="form-control th" required="" name="th_phone_2">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Emergency No. For After few hours</label>
                                        <input type="text" class="form-control" name="th_emergency_numb">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">University E-mail *</label>
                                        <input type="email" class="form-control th is_unique_university_email" required="" name="th_university_email">
                                        <p style="color: red;margin: 0;display: none;" id="th_warningemail">This Email is Already Exits</p>
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Secondary E-mail *</label>
                                        <input type="email" class="form-control th" required="" name="th_secondary_email">
                                    </fieldset>
                                </div>



                              </div>

                            </div>

                            <div class="cl_fr" style="display:none;">

                              <div class="row">

                                <div class="col-md-12 mt-2 mb-2">
                                    <h4><b>Extra Information</b></h4>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Institute / Company *</label>
                                        <input type="text" class="form-control fr" required="" name="fr_university">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">College *</label>
                                        <input type="text" class="form-control fr" required="" name="fr_college">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Department *</label>
                                        <input type="text" class="form-control fr" required="" name="fr_depart_id">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Employee ID Number *</label>
                                        <input type="text" class="form-control fr" required="" name="fr_employee_id_numb">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">ID Number *</label>
                                        <input type="text" class="form-control fr" required="" name="fr_id_numb">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Phone *</label>
                                        <input type="text" class="form-control fr" required="" name="fr_phone_1">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Fax *</label>
                                        <input type="text" class="form-control fr" required="" name="fr_fax">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Mobile *</label>
                                        <input type="text" class="form-control fr" required="" name="fr_phone_2">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Emergency No. For After few hours</label>
                                        <input type="text" class="form-control" name="fr_emergency_numb">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">E-mail *</label>
                                        <input type="email" class="form-control fr is_unique_university_email" required="" name="fr_university_email">
                                        <p style="color: red;margin: 0;display: none;" id="fr_warningemail">This Email is Already Exits</p>
                                    </fieldset>
                                </div>


                              </div>

                            </div>



                            <div class="cl_five" style="display:none;">

                              <div class="row">

                                <div class="col-md-12 mt-2 mb-2">
                                    <h4><b>Extra Information</b></h4>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Institute / Company *</label>
                                        <input type="text" class="form-control fv" required="" name="fv_university">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">College *</label>
                                        <input type="text" class="form-control fv" required="" name="fv_college">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Department *</label>
                                        <input type="text" class="form-control fv" required="" name="fv_depart_id">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Employee ID Number *</label>
                                        <input type="text" class="form-control fv" required="" name="fv_employee_id_numb">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">ID Number *</label>
                                        <input type="text" class="form-control fv" required="" name="fv_id_numb">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Phone *</label>
                                        <input type="text" class="form-control fv" required="" name="fv_phone_1">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Fax *</label>
                                        <input type="text" class="form-control fv" required="" name="fv_fax">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Mobile *</label>
                                        <input type="text" class="form-control fv" required="" name="fv_phone_2">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">Emergency No. For After few hours</label>
                                        <input type="text" class="form-control" name="fv_emergency_numb">
                                    </fieldset>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                    <fieldset class="form-group">
                                        <label for="basicInput">E-mail *</label>
                                        <input type="email" class="form-control fv is_unique_university_email" required="" name="fv_university_email">
                                          <p style="color: red;margin: 0;display: none;" id="fv_warningemail">This Email is Already Exits</p>
                                    </fieldset>
                                </div>


                              </div>

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
    <script src="<?=base_url('app-assets/vendors/js/perfect-scrollbar.jquery.min.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('app-assets/vendors/js/prism.min.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('app-assets/vendors/js/jquery.matchHeight-min.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('app-assets/vendors/js/screenfull.min.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('app-assets/vendors/js/pace/pace.min.js')?>" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="<?=base_url('app-assets/js/app-sidebar.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('app-assets/js/notification-sidebar.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('app-assets/js/customizer.js')?>" type="text/javascript"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->

    <script type="text/javascript">

        $('.user_status').change(function() {

          var v = $(this).val();

          var option = $('.role'+v).attr('data');

          var id = Number(option);

          $('.user_status_type').val(id);

          fields();

          if (id >= 2 && id <= 3) {

            $('.cl_one').css('display','block');

            $('.o').prop('required',true);

            $('.status_type').val('o');

            if (id == 2) {

              $('.labl1').text('Research Interest');
              $('.field1').prop('type','text');

            }else {

              $('.labl1').text('Secondary E-mail');
              $('.field1').prop('type','email');

            }

          }
          else if (id == 4) {

            $('.cl_two').css('display','block');

            $('.t').prop('required',true);

            $('.status_type').val('t');

          }
          else if (id == 6) {

            $('.cl_three').css('display','block');

            $('.th').prop('required',true);

            $('.status_type').val('th');

          }
          else if (id == 5) {

            $('.cl_fr').css('display','block');

            $('.fr').prop('required',true);

            $('.status_type').val('fr');

          }
          else{

            $('.cl_five').css('display','block');

            $('.fv').prop('required',true);

            $('.status_type').val('fv');

          }

        });


        $('select[name=o_college]').change(function(){

            var id = $(this).val();

            $.ajax({
              url :'<?=site_url('reg/getDepartByColgId/')?>'+id,
              success :function(data){

                $('select[name=o_depart_id]').html(data);

              }

            })
        })

        $('select[name=o_depart_id]').change(function(){

            var id = $(this).val();

            $.ajax({
              url :'<?=site_url('reg/getLabsByDepartId/')?>'+id,
              success :function(data){

                $('select[name=o_laboratory_numb]').html(data);

              }

            })
        })


        $('select[name=t_college]').change(function(){

            var id = $(this).val();

            $.ajax({
              url :'<?=site_url('reg/getDepartByColgId/')?>'+id,
              success :function(data){

                $('select[name=t_depart_id]').html(data);

              }

            })
        })

        $('select[name=t_depart_id]').change(function(){

            var id = $(this).val();

            $.ajax({
              url :'<?=site_url('reg/getProgramsByDepartId/')?>'+id,
              success :function(data){

                $('select[name=t_program_id]').html(data);

              }

            })

            $.ajax({
                 url :'<?=site_url('reg/getLabsByDepartId/')?>'+id,
                 success :function(data){

                   $('select[name=t_laboratory_numb]').html(data);

                 }
            })

        })

        $('select[name=th_college]').change(function(){

            var id = $(this).val();

            $.ajax({
              url :'<?=site_url('reg/getDepartByColgId/')?>'+id,
              success :function(data){

                $('select[name=th_depart_id]').html(data);

              }

            })
        })


        $('select[name=th_depart_id]').change(function(){

            var id = $(this).val();

            $.ajax({
              url :'<?=site_url('reg/getLabsByDepartId/')?>'+id,
              success :function(data){

                $('select[name=th_laboratory_numb]').html(data);

              }

            })
        })

        function fields() {

              $('.cl_one,.cl_two,.cl_three,.cl_fr,.cl_five').css('display','none');
              $('.o,.t,.th,.fr,.fv').prop('required',false);

        }


        $(document).ready(function () {

          $('#ResUsername').on('focusout',function () {

              ResUsername = $(this).val();

              if (ResUsername != "")
              {

                $.ajax({

                  type:"POST",
                  url:"<?php echo base_url(); ?>Reg/CheckUserNameSameHere",
                  data:{ResUsername:ResUsername},
                  success:function (result) {
                    var res = $.parseJSON(result);
                    if (res.status == "match_username")
                    {

                        $('#ResUsername').css('border','1px solid red');
                        $('#warningusername').show();
                        $('#ResUsername').val('');
                        $('#ResUsername').attr('placeholder','Add Unique Username')

                    }
                    else{

                        $('#warningusername').hide();
                        $('#ResUsername').css('border','1px solid green');

                    }

                  }

                })

              }

          });

         $('.is_unique_university_email').on('keyup',function () {

              var check_st = $('.status_type').val();

            fv_university_email = $(this).val();

            if (fv_university_email != "") {

              $.ajax({

                type:"POST",
                url:"<?php echo base_url(); ?>Reg/CheckReEmailSame",
                data:{fv_university_email:fv_university_email},
                success:function (result)
                {

                  var res = $.parseJSON(result);

                  if (res.status == "match_re_email")
                  {
                      $('input[name='+check_st+'_university_email').css('border','1px solid red');
                      $('#'+check_st+'_warningemail').show();
                      $('input[name='+check_st+'_university_email').val('');
                      $('input[name='+check_st+'_university_email').attr('placeholder','Add Unique Email')
                  }
                  else
                  {
                      $('#'+check_st+'_warningemail').hide();
                      $('input[name='+check_st+'_university_email').css('border','1px solid green');
                  }

                }
              })
            }

            })

          })

    </script>
  </body>
  <!-- END : Body-->
</html>
