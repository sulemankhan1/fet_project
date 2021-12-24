<link rel="stylesheet" href="<?=base_url('assets/css/tacher_profile.css')?>">
 <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-6" data-bg-img="<?=base_url('assets/images/bg/bg8.jpg')?>">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title"><?= ucfirst($user->role_name) ?> Profile</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Main Profile section NO:01 starts -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="panel panel-default shadowed">
              <div class="panel-body text-center">
                <div class="profile-pic-container">

                  <?php if ($user->image != '' && file_exists('admin/uploads/users/'.$user->image)){ ?>
                    <img src="<?=base_url('admin/uploads/users/'.$user->image)?>" class="teacher-profile-pic">
                  <?php } else { ?>
                    <img src="<?=base_url('admin/uploads/users/default.png')?>" class="teacher-profile-pic">
                  <?php } ?>

                </div>
                <h3><?=$user->title?> <?=$user->full_name?></h3>
                <?php if($user->role_name) {?>
                    <p><span class="badge badge-success"><?=$user->role_name?></span> </p>
                <?php } ?>
                <hr>

                <div class="barr">
                  <div class="barr-left"><i class='icon-envelope'></i></div>
                  <div class="barr-right">
                    <a href="mailto:<?=$user->email?>"><?=$user->email?$user->email:'-'?></a>
                  </div>
                </div>
                <?php if($user->show_phone_no_public == 1){ ?>
                <div class="barr">
                  <div class="barr-left"><i class='icon-call-out'></i></div>
                  <div class="barr-right">
                  <?=$user->phone_no_code?>-<?=$user->phone_no?>
                  </div>
                </div>
                <?php } ?>
                <?php if($user->show_address_public == 1){ ?>
                <div class="barr">
                  <div class="barr-left"><i class='icon-pointer'></i></div>
                  <div class="barr-right">
                  <?=$user->permanent_address?$user->permanent_address:'-'?>
                  </div>
                </div>
                <?php } ?>
                <div class="barr">
                  <div class="barr-left"><i class='icon-user'></i></div>
                  <div class="barr-right">
                  <?=$user->gender?$user->gender:'-'?>
                  </div>
                </div>
                <?php if($user->show_cnic_public == 1){ ?>
                <div class="barr">
                  <div class="barr-left"><i class='icon-user'></i></div>
                  <div class="barr-right">
                  <?=$user->cnic?$user->cnic:'-'?>
                  </div>
                </div>
                <?php } ?>
                <hr>
                <div class="bg-theme-colored text-white mb-xs-5 btn"><i class="icon-bubbles"></i><a class="text-white" data-toggle="modal" data-target="#contact-teaher-modal" href="#"> Message </a></div>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default shadowed">
              <div class="panel-heading">
                <h3><i class="icon-notebook"></i> Details</h3>
              </div>
              <div class="panel-body">
                <!-- <p><strong>Note: </strong> Following Content is Automatically Generated based on Current Semester's Timetable</p> -->
                <div class="row">
                  <div class="col-md-12">
                    <!-- <h3>Subjects</h3> -->
                    <ul class="teacher-subject-list">
                      <li><i class="icon-paper-plane"></i> Surename : <?=$user->surename?$user->surename:" ----- "?></li>
                      <li><i class="icon-paper-plane"></i> Date of birth : <?=$user->dob?$user->dob:" ----- "?></li>
                      <li><i class="icon-paper-plane"></i> Father Name : <?=$user->father_name?$user->father_name:" ----- "?></li>
                      <li><i class="icon-paper-plane"></i> Nationality : <?=$user->nationality?$user->nationality:" ----- "?></li>
                      <li><i class="icon-paper-plane"></i> Province : <?=$user->province?$user->province:" ----- "?></li>
                      <li><i class="icon-paper-plane"></i> District : <?=$user->district?$user->district:" ----- "?></li>
                      <li><i class="icon-paper-plane"></i> City : <?=$user->city?$user->city:" ----- "?></li>
                      <li><i class="icon-paper-plane"></i> Last Qualification : <?=$user->last_qualification?$user->last_qualification:" ----- "?></li>
                      <li><i class="icon-paper-plane"></i> Zipcode : <?=$user->zip_code?$user->zip_code:" ----- "?></li>
                      <li><i class="icon-paper-plane"></i> Bio : <?=$user->bio?$user->bio:" ----- "?></li>
                      <li><i class="icon-paper-plane"></i> Campus : <?=$user->campus_name?$user->campus_name:" ----- "?></li>
                      <li><i class="icon-paper-plane"></i> Faculty : <?=$user->faculty_name?$user->faculty_name:" ----- "?></li>
                      <li><i class="icon-paper-plane"></i> Department : <?=$user->depart_name?$user->depart_name:" ----- "?></li>

                      <?php if(@$user->type == 'STUDENT'): ?>

                      <li><i class="icon-paper-plane"></i> Program : <?=$user->program_id?$user->program_id:" ----- "?></li>
                      <li><i class="icon-paper-plane"></i> Batch : <?=$user->batch_year?$user->batch_year:" ----- "?></li>
                      <li><i class="icon-paper-plane"></i> Current Semester No : <?=$user->current_semester?$user->current_semester:" ----- "?></li>

                      <?php endif; ?>

                      <?php if(@$user->type == 'TEACHER'): ?>

                      <li><i class="icon-paper-plane"></i> Designation : <?=$user->designation?$user->designation:" ----- "?></li>
                      <li><i class="icon-paper-plane"></i> Speciality : <?=$user->speciality?$user->speciality:" ----- "?></li>

                      <?php endif; ?>

                      <?php if(@$user->type == 'OTHER'): ?>

                      <li><i class="icon-paper-plane"></i> Job Title : <?=$user->job_title?$user->job_title:" ----- "?></li>>

                      <?php endif; ?>

                    </ul>
                  </div>

                </div>
              </div>
            </div>

            <!-- <div class="panel panel-default shadowed">
              <div class="panel-heading">
                <h3><i class="icon-info"></i> About</h3>
              </div>
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div> -->
            <!-- <div class="panel panel-default shadowed">
              <div class="panel-heading">
                <h3><i class="icon-notebook"></i> Teaching Responsibilities</h3>
              </div>
              <div class="panel-body">
                <p><strong>Note: </strong> Following Content is Automatically Generated based on Current Semester's Timetable</p>
                <div class="row">
                  <div class="col-md-12">
                    <h3>Subjects</h3>
                    <ul class="teacher-subject-list">
                      <li><i class="icon-paper-plane"></i> EM12 Electronics</li>
                      <li><i class="icon-paper-plane"></i> SWE-32 Software Engineering</li>
                      <li><i class="icon-paper-plane"></i> SWE-33 Software Project management</li>
                      <li><i class="icon-paper-plane"></i> SWE-32 Software Engineering</li>
                      <li><i class="icon-paper-plane"></i> SWE-33 Software Project management</li>
                      <li><i class="icon-paper-plane"></i> SWE-32 Software Engineering</li>
                      <li><i class="icon-paper-plane"></i> SWE-33 Software Project management</li>
                      <li><i class="icon-paper-plane"></i> SWE-32 Software Engineering</li>
                      <li><i class="icon-paper-plane"></i> SWE-33 Software Project management</li>
                    </ul>
                  </div>
                  <div class="col-md-12">
                    <h3>Classes</h3>
                    <ul class="teacher-subject-list">
                      <li><i class="icon-graduation"></i> BSIT 3rd Year (Morning)</li>
                      <li><i class="icon-graduation"></i> BS-SWE 4rth Year (Evening)</li>
                      <li><i class="icon-graduation"></i> BSIT 3rd Year (Morning)</li>
                      <li><i class="icon-graduation"></i> BS-SWE 4rth Year (Evening)</li>
                      <li><i class="icon-graduation"></i> BSIT 3rd Year (Morning)</li>
                      <li><i class="icon-graduation"></i> BS-SWE 4rth Year (Evening)</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- <div class="panel panel-default shadowed">
              <div class="panel-heading">
                <h3><i class="icon-calendar"></i> Teacher Timetable</h3>
              </div>
              <div class="panel-body">
                <img src="<?=base_url('assets/images/SWE04e.jpg')?>" alt="">
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>
    <!--Main Profile section NO:01 ends -->

  <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  </div>
  <!-- end main-content -->

  <!-- Modal -->
  <div id="contact-teaher-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <form class="" action="index.html" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Direct Message</h4>
        </div>
        <div class="modal-body">
          <div class="alert alert-info">
            <p><strong>Note: </strong> Message will be sent to Sir Kamran Taj. You will be redirected to Portal after you send Message You can continue your conversation there.</p>
          </div>
          <div class="form-group">
            <label>Message</label>
            <textarea name="name" rows="8" class="form-control" cols="80" placeholder="Type your Message here..."></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Send</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </form>
      </div>

    </div>
  </div>
