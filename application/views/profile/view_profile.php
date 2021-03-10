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

                      <br>
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

                                      <?php if (@getimagesize(base_url('uploads/users/'.$user->user_img))): ?>

                                        <img src="<?=base_url('uploads/users/'.$user->user_img)?>" width="200" class="text align-middle img-border width-100" />

                                          <?php else: ?>

                                        <img src="<?=base_url('app-assets/images/profile-pic-default.png')?>" width="200" class="text align-middle img-border width-100" />

                                      <?php endif; ?>

                                    </a>
                                </div>
                                <div class="col-md-1">
                                </div>
                              </div>
                              <div class="profile-section">
                                <div class="row">
                                  <div class="col-lg-3 col-md-3 ">
                                  </div>
                                  <div class="col-lg-6 col-md-6 text-center">
                                    <span class="font-medium-2 text-uppercase"><?=$user->title?>. <?=$user->username?></span>
                                    <p class="grey font-small-2">(<?=$user->role_name?>)</p>
                                  </div>
                                  <div class="col-lg-3 col-md-3">

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
                                <h5><?=__('personal_info_txt')?></h5>
                              </div>
                              <div class="card-content">
                                <div class="card-body">
                                  <hr>
                                  <div class="row">
                                    <?php if ($this->session->userdata('role_id') != 1): ?>
                                    <div class="col-12 col-md-6 col-lg-4">
                                      <ul class="no-list-style">
                                        <!-- <li class="mb-2">
                                          <span class="text-bold-500 primary"><a><i class="icon-present font-small-3"></i> <?=__('password_txt')?>:</a></span>
                                          <span class="d-block overflow-hidden"><?=$this->encryption->decrypt($user->password);?></span>
                                        </li> -->
                                        <?php if ($this->session->userdata('language_to_user') != 'AR'): ?>

                                          <li class="mb-2">
                                            <span class="text-bold-500 primary"><a><i class="ft-user font-small-3"></i> <?=__('family_last_name_txt')?>:</a></span>
                                            <span class="d-block overflow-hidden"><?=$user->family_last_name_eng?></span>
                                          </li>

                                        <?php else: ?>

                                          <li class="mb-2">
                                            <span class="text-bold-500 primary"><a><i class="ft-user font-small-3"></i> <?=__('family_last_name_txt')?>:</a></span>
                                            <span class="d-block overflow-hidden"><?=$user->family_last_name_arabic?></span>
                                          </li>

                                        <?php endif; ?>

                                        <li class="mb-2">
                                          <span class="text-bold-500 primary"><a><i class="ft-user font-small-3"></i> <?=__('gender_txt')?>:</a></span>
                                          <span class="d-block overflow-hidden"><?=$user->gender?></span>
                                        </li>
                                      </ul>
                                    </div>

                                    <div class="col-12 col-md-6 col-lg-4">
                                      <ul class="no-list-style">
                                        <?php if ($this->session->userdata('language_to_user') != 'AR'): ?>

                                          <li class="mb-2">
                                            <span class="text-bold-500 primary"><a><i class="ft-user font-small-3"></i> <?=__('first_name_txt')?>:</a></span>
                                            <span class="d-block overflow-hidden"><?=$user->first_name_eng?></span>
                                          </li>

                                        <?php else: ?>

                                          <li class="mb-2">
                                            <span class="text-bold-500 primary"><a><i class="ft-user font-small-3"></i> <?=__('first_name_txt')?>:</a></span>
                                            <span class="d-block overflow-hidden"><?=$user->first_name_arabic?></span>
                                          </li>

                                        <?php endif; ?>
                                        <li class="mb-2">
                                          <span class="text-bold-500 primary"><a><i class="ft-mail font-small-3"></i> <?=__('university_email_txt')?>:</a></span>
                                          <a class="d-block overflow-hidden"><?=$user->university_email?></a>
                                        </li>
                                        <li class="mb-2">
                                          <span class="text-bold-500 primary"><a><i class="ft-globe font-small-3"></i> <?=__('nationality_txt')?>:</a></span>
                                          <span class="d-block overflow-hidden"><?=$user->nationality?></span>
                                        </li>
                                      </ul>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                      <ul class="no-list-style">
                                        <?php if ($this->session->userdata('language_to_user') != 'AR'): ?>

                                          <li class="mb-2">
                                            <span class="text-bold-500 primary"><a><i class="ft-user font-small-3"></i> <?=__('middle_name_txt')?>:</a></span>
                                            <span class="d-block overflow-hidden"><?=$user->middle_name_eng?></span>
                                          </li>

                                        <?php else: ?>

                                          <li class="mb-2">
                                            <span class="text-bold-500 primary"><a><i class="ft-user font-small-3"></i> <?=__('middle_name_txt')?>:</a></span>
                                            <span class="d-block overflow-hidden"><?=$user->middle_name_arabic?></span>
                                          </li>

                                        <?php endif; ?>

                                        <li class="mb-2">
                                          <span class="text-bold-500 primary"><a><i class="ft-phone font-small-3"></i> <?=__('mobile_txt')?>:</a></span>
                                          <span class="d-block overflow-hidden"><?=$user->phone_2?></span>
                                        </li>
                                        <li class="mb-2">
                                          <span class="text-bold-500 primary"><a><i class="ft-phone font-small-3"></i> <?=__('phone_txt')?>:</a></span>
                                          <span class="d-block overflow-hidden"><?=$user->phone_1?></span>
                                        </li>

                                      </ul>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                      <ul class="no-list-style">
                                        <li class="mb-2">
                                          <span class="text-bold-500 primary"><a><i class="ft-phone-call font-small-3"></i> <?=__('emergency_number_for_after_few_hours')?>:</a></span>
                                          <a class="d-block overflow-hidden"><?=$user->emergency_numb?></a>
                                        </li>

                                      </ul>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                      <ul class="no-list-style">
                                        <li class="mb-2">
                                          <span class="text-bold-500 primary"><a><i class="ft-message-square font-small-3"></i> <?=__('fax_txt')?>:</a></span>
                                          <a class="d-block overflow-hidden"><?=$user->fax?></a>
                                        </li>

                                      </ul>
                                    </div>
                                    <?php if ($user->user_status_type == 6 || ($user->user_status_type >= 2 && $user->user_status_type <= 4)): ?>

                                    <div class="col-12 col-md-6 col-lg-4">
                                      <ul class="no-list-style">
                                        <li class="mb-2">
                                          <?php $label = __('secondary_email_txt'); if (@$user->user_status_type == 2) {
                                              $label = __('research_interest_txt');
                                          } ?>
                                          <span class="text-bold-500 primary"><a><i class="ft-mail font-small-3"></i> <?=$label;?>:</a></span>
                                          <a class="d-block overflow-hidden"><?=$user->secondary_email?></a>
                                        </li>
                                      </ul>
                                    </div>

                                    <?php endif; ?>
                                    <?php else: ?>

                                      <div class="col-12 col-md-6 col-lg-4">
                                        <ul class="no-list-style">
                                          <?php if ($this->session->userdata('language_to_user') != 'AR'): ?>

                                            <li class="mb-2">
                                              <span class="text-bold-500 primary"><a><i class="ft-user font-small-3"></i> <?=__('first_name_txt')?>:</a></span>
                                              <span class="d-block overflow-hidden"><?=$user->first_name_eng?></span>
                                            </li>

                                          <?php else: ?>

                                            <li class="mb-2">
                                              <span class="text-bold-500 primary"><a><i class="ft-user font-small-3"></i> <?=__('first_name_txt')?>:</a></span>
                                              <span class="d-block overflow-hidden"><?=$user->first_name_arabic?></span>
                                            </li>

                                          <?php endif; ?>
                                          <li class="mb-2">
                                            <span class="text-bold-500 primary"><a><i class="ft-globe font-small-3"></i> <?=__('nationality_txt')?>:</a></span>
                                            <span class="d-block overflow-hidden"><?=$user->nationality?></span>
                                          </li>
                                        </ul>
                                      </div>
                                      <div class="col-12 col-md-6 col-lg-4">
                                        <ul class="no-list-style">
                                          <li class="mb-2">
                                            <span class="text-bold-500 primary"><a><i class="ft-user font-small-3"></i> <?=__('gender_txt')?>:</a></span>
                                            <span class="d-block overflow-hidden"><?=$user->gender?></span>
                                          </li>
                                          <li class="mb-2">
                                            <span class="text-bold-500 primary"><a><i class="ft-user font-small-3"></i> <?=__('middle_name_txt')?>:</a></span>
                                            <span class="d-block overflow-hidden"><?=$user->middle_name_eng?></span>
                                          </li>
                                        </ul>
                                      </div>

                                      <div class="col-12 col-md-6 col-lg-4">
                                        <ul class="no-list-style">
                                          <!-- <li class="mb-2">
                                            <span class="text-bold-500 primary"><a><i class="icon-present font-small-3"></i> <?=__('password_txt')?>:</a></span>
                                            <span class="d-block overflow-hidden">
                                              <input type="password" id="myInput" value="<?=$this->encryption->decrypt($user->password);?>" style="border: 0px;" disabled="">
                                              <a href="jascript:void(0)"><i class="fa fa-eye" onclick="showhide()"></i> </a>
                                          </li> -->

                                          <?php if ($this->session->userdata('language_to_user') != 'AR'): ?>

                                            <li class="mb-2">
                                              <span class="text-bold-500 primary"><a><i class="ft-user font-small-3"></i> <?=__('family_last_name_txt')?>:</a></span>
                                              <span class="d-block overflow-hidden"><?=$user->family_last_name_eng?></span>
                                            </li>

                                          <?php else: ?>

                                            <li class="mb-2">
                                              <span class="text-bold-500 primary"><a><i class="ft-user font-small-3"></i> <?=__('family_last_name_txt')?>:</a></span>
                                              <span class="d-block overflow-hidden"><?=$user->family_last_name_arabic?></span>
                                            </li>

                                          <?php endif; ?>

                                        </ul>
                                      </div>
                                  <?php endif; ?>

                                  </div>
                                  <hr>

                                </div>
                              </div>
                            </div>
                          </div>
                          <?php if ($this->session->userdata('role_id') != 1): ?>

                          <div class="col-sm-12">
                            <div class="card">
                              <div class="card-header">
                                <h5><?=__('educational_info_txt')?></h5>
                              </div>
                              <div class="card-content">
                                <div class="card-body">
                                  <div class="row">

                                    <?php if ($user->user_status_type == 6 || ($user->user_status_type >= 2 && $user->user_status_type <= 4)): ?>

                                      <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <ul class="no-list-style">

                                          <li class="mb-2">
                                            <span class="text-bold-500 primary"><a><i class="ft-layers font-small-3"></i> <?=__('college_txt')?>:</a></span>
                                            <a class="d-block overflow-hidden"><?=$user->colg_name?></a>
                                          </li>


                                        </ul>
                                      </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                      <ul class="no-list-style">

                                        <li class="mb-2">
                                          <span class="text-bold-500 primary"><a><i class="ft-layers font-small-3"></i> <?=__('department_txt')?>:</a></span>
                                          <a class="d-block overflow-hidden"><?=$user->depart_name?></a>
                                        </li>


                                      </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                      <ul class="no-list-style">

                                        <li class="mb-2">
                                          <span class="text-bold-500 primary"><a><i class="ft-layers font-small-3"></i> <?=__('lab_name_txt')?>:</a></span>
                                          <a class="d-block overflow-hidden"><?=$user->lab_name?></a>
                                        </li>


                                      </ul>
                                    </div>



                                  <?php endif; ?>



                                    <?php if ($user->user_status_type >= 2 && $user->user_status_type <= 3): ?>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                      <ul class="no-list-style">

                                        <li class="mb-2">
                                          <span class="text-bold-500 primary"><a><i class="ft-home font-small-3"></i> <?=__('college_campus_txt')?>:</a></span>
                                          <a class="d-block overflow-hidden"><?=$user->campus?></a>
                                        </li>



                                      </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                      <ul class="no-list-style">

                                        <li class="mb-2">
                                          <span class="text-bold-500 primary"><a><i class="ft-gitlab font-small-3"></i> <?=__('employee_id_numb_txt')?>:</a></span>
                                          <a class="d-block overflow-hidden"><?=$user->employee_id_numb?></a>
                                        </li>

                                      </ul>
                                    </div>

                                  <?php endif; ?>

                                  <?php if ($user->user_status_type == 4): ?>

                                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <ul class="no-list-style">

                                      <li class="mb-2">
                                        <span class="text-bold-500 primary"><a><i class="ft-home font-small-3"></i> <?=__('college_campus_txt')?>:</a></span>
                                        <a class="d-block overflow-hidden"><?=$user->campus?></a>
                                      </li>

                                      <li class="mb-2">
                                        <span class="text-bold-500 primary"><a><i class="ft-file-text font-small-3"></i> <?=__('program_txt')?>:</a></span>
                                        <a class="d-block overflow-hidden"><?=$user->program_name?></a>
                                      </li>



                                    </ul>
                                  </div>
                                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <ul class="no-list-style">

                                      <li class="mb-2">
                                        <span class="text-bold-500 primary"><a><i class="ft-gitlab font-small-3"></i> <?=__('uni_student_number_txt')?>:</a></span>
                                        <a class="d-block overflow-hidden"><?=$user->student_numb?></a>
                                      </li>

                                      <li class="mb-2">
                                        <span class="text-bold-500 primary"><a><i class="ft-gitlab font-small-3"></i> <?=__('scientific_degree_txt')?>:</a></span>
                                        <a class="d-block overflow-hidden"><?=$user->degree?></a>
                                      </li>

                                    </ul>
                                  </div>

                                <?php endif; ?>

                                <?php if ($user->user_status_type == 6): ?>

                                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <ul class="no-list-style">

                                      <li class="mb-2">
                                        <span class="text-bold-500 primary"><a><i class="ft-gitlab font-small-3"></i> <?=__('employee_id_numb_txt')?>:</a></span>
                                        <a class="d-block overflow-hidden"><?=$user->employee_id_numb?></a>
                                      </li>

                                      <li class="mb-2">
                                        <span class="text-bold-500 primary"><a><i class="ft-layers font-small-3"></i> <?=__('id_number_txt')?>:</a></span>
                                        <a class="d-block overflow-hidden"><?=$user->id_numb?></a>
                                      </li>

                                    </ul>
                                  </div>

                                  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <ul class="no-list-style">

                                      <li class="mb-2">
                                        <span class="text-bold-500 primary"><a><i class="ft-gitlab font-small-3"></i> <?=__('university_txt')?>:</a></span>
                                        <a class="d-block overflow-hidden"><?=$user->university?></a>
                                      </li>

                                      <li class="mb-2">
                                        <span class="text-bold-500 primary"><a><i class="ft-layers font-small-3"></i> <?=__('college_txt')?>:</a></span>
                                        <a class="d-block overflow-hidden"><?=$user->college?></a>
                                      </li>



                                    </ul>
                                  </div>



                              <?php endif; ?>


                              <?php if ($user->user_status_type == 5 || $user->user_status_type == 0): ?>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                  <ul class="no-list-style">

                                    <li class="mb-2">
                                      <span class="text-bold-500 primary"><a><i class="ft-gitlab font-small-3"></i> <?=__('employee_id_numb_txt')?>:</a></span>
                                      <a class="d-block overflow-hidden"><?=$user->employee_id_numb?></a>
                                    </li>

                                    <li class="mb-2">
                                      <span class="text-bold-500 primary"><a><i class="ft-layers font-small-3"></i> <?=__('id_number_txt')?>:</a></span>
                                      <a class="d-block overflow-hidden"><?=$user->id_numb?></a>
                                    </li>

                                  </ul>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                  <ul class="no-list-style">

                                    <li class="mb-2">
                                      <?php $label1 = __('university_txt'); if (@$user->user_status_type != 0){ $label1 = __('institute_or_college_txt');} ?>
                                      <span class="text-bold-500 primary"><a><i class="ft-gitlab font-small-3"></i> <?=$label1;?>:</a></span>
                                      <a class="d-block overflow-hidden"><?=$user->university?></a>
                                    </li>

                                    <li class="mb-2">
                                      <span class="text-bold-500 primary"><a><i class="ft-layers font-small-3"></i> <?=__('college_txt')?>:</a></span>
                                      <a class="d-block overflow-hidden"><?=$user->college?></a>
                                    </li>



                                  </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                  <ul class="no-list-style">

                                    <li class="mb-2">
                                      <span class="text-bold-500 primary"><a><i class="ft-gitlab font-small-3"></i> <?=__('depart_name_txt')?>:</a></span>
                                      <a class="d-block overflow-hidden"><?=$user->department_name?></a>
                                    </li>



                                  </ul>
                                </div>



                            <?php endif; ?>





                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <?php endif; ?>

                        </div>
                      </section>
                      <!--About section ends-->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript">
function showhide() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
