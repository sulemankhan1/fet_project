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
              <h2 class="title">Teacher Profile</h2>
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
                  <img src="<?=base_url('assets/images/team/2.png')?>" class="teacher-profile-pic">
                </div>
                <h3>Sir Kamran Taj</h3>
                <p><span class="badge badge-secondary">Professor</span> </p>
                <hr>

                <div class="barr">
                  <div class="barr-left"><i class='icon-envelope'></i></div>
                  <div class="barr-right">
                    kamrantaj243@gmail.com
                  </div>
                </div>
                <div class="barr">
                  <div class="barr-left"><i class='icon-call-out'></i></div>
                  <div class="barr-right">
                    0312221123412
                  </div>
                </div>
                <div class="barr">
                  <div class="barr-left"><i class='icon-pointer'></i></div>
                  <div class="barr-right">
                    Lab # 2 Room 2 Right corridor FET Building
                  </div>
                </div>
                <hr>
                <div class="bg-theme-colored text-white mb-xs-5 btn"><i class="icon-bubbles"></i><a class="text-white" data-toggle="modal" data-target="#contact-teaher-modal" href="#"> Message </a></div>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default shadowed">
              <div class="panel-heading">
                <h3><i class="icon-info"></i> About</h3>
              </div>
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
            <div class="panel panel-default shadowed">
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
            </div>

            <div class="panel panel-default shadowed">
              <div class="panel-heading">
                <h3><i class="icon-calendar"></i> Teacher Timetable</h3>
              </div>
              <div class="panel-body">
                <img src="<?=base_url('assets/images/SWE04e.jpg')?>" alt="">
              </div>
            </div>
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
