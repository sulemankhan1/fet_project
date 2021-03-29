<?php include('includes/header.php') ?>
 <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="assets/images/bg/05.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Register</h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Login Form -->
    <section class="divider">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-push-3">
          	<div class="heading text-center">
              <h4 class="heading-title">Don't have an Account? Register Now</h4>
            </div>
            <div class="border-1px p-30 mb-0">
              <form>
                <div class="row">
               	  <div class="col-sm-6">
                    <div class="form-group">
                        <label>Name <small>*</small></label>
                  		<input type="text" class="form-control" placeholder="Name">
                    </div>
                  </div>
                  <div class="col-sm-6">
                  	<label>Email <small>*</small></label>
                  	<input type="email" class="form-control" placeholder="Email">
                  </div>
                </div>
                <div class="row">               
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Choose Username <small>*</small></label>
                       <input name="username" class="form-control" type="text" placeholder="Username">
                    </div>
                  </div>
                  <div class="col-sm-6">
                  	<div class="form-group">
                  		<label>Choose Department <small>*</small></label>
                  		<select class="form-control">
                    		<option></option>
                    		<option>Software Engineering</option>
                    		<option>Information Technology</option>
                    		<option>Telecommunication</option>
                    		<option>Electronics</option>
                  		</select>
                	</div>
                  </div>
                </div>
                <div class="row">
               	  <div class="col-sm-6">
                    <div class="form-group">
                        <label>Password <small>*</small></label>
                  		<input type="text" class="form-control" placeholder="Password">
                    </div>
                  </div>
                  <div class="col-sm-6">
                  	<label>Re-enter Password <small>*</small></label>
                  	<input type="text" class="form-control" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <input name="form_botcheck" class="form-control" type="hidden" value="" />
                  <button type="submit" class="hvr-glow btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Register</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section> 
     <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
  </div>  
  <!-- end main-content -->

<?php include('includes/footer.php') ?>