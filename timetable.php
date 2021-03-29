<?php include('includes/header.php') ?>

<!-- Start main-content -->
<div class="main-content">

  <!-- Section: inner-header -->
  <section class="inner-header divider parallax layer-overlay overlay-white-8 teachers-top-sec" data-bg-img="assets/images/bg/bg8.jpg">
    <div class="container pt-30 pb-30">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="mt-0 line-height-1">Generate <span class="text-theme-colored3">Timetable</span></h2>
            <ol class="breadcrumb text-center mt-10">
              <li><a href="index.php">Home</a></li>
              <li class="active text-theme-colored">Timetable</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section:  -->
  <section>
    <div class="container pb-sm-70">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Select Your Class</label>
            <select class="form-control bordered" name="">
              <option value="test1">BS-IT Part 1</option>
              <option value="test1">BS-IT Part 2</option>
              <option value="test1">BS-IT Part 3</option>
            </select>
          </div>
          <div class="form-group">
            <label>Download</label><br>
            <button class="btn hvr-float-shadow btn-default"><a href="profile.php" class="mt-0 mb-0"><i class="icon-picture"></i> JPG/PNg</a></button>
            <button class="btn hvr-float-shadow btn-default"><a href="profile.php" class="mt-0 mb-0"><i class="icon-docs"></i> PDF</a></button>
            <button class="btn hvr-float-shadow btn-default"><a href="profile.php" class="mt-0 mb-0"><i class="icon-notebook"></i> Excel</a></button>
          </div>
          <div class="form-group">
            <label>Email Timetable Whenever Changed</label>
            <input type="text" name="" value="" class="form-control bordered" placeholder="Enter Email">
          </div>
          <div class="form-group">
            <button class="btn hvr-float-shadow bg-theme-colored"><a href="#" class="mt-0 mb-0 text-white">Save Email Settings</a></button>
          </div>
        </div>
        <div class="col-md-8">
          <!-- <p>Your Timetable will be Generated Here</p> -->
          <img src="assets/images/SWE04e.jpg" alt="">
        </div>
      </div>
    </div>
  </section>

</div>
<!-- end main-content -->

<?php include('includes/footer.php') ?>
