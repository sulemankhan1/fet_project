 
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="assets/images/bg/05.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Login</h2>
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
            <div class="border-1px p-30 mb-0">
              <form method="post" action="<?=site_url('save_login')?>">
                <div class="row">
                 
                  <?php if($this->session->flashdata('response') == 'success') { ?>

               	    <div class="col-sm-12">
                      <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?=$this->session->flashdata('msg')?>
                      </div>
                    </div>

                  <?php } ?>
                  <?php if($this->session->flashdata('response') == 'danger') { ?>

                    <div class="col-sm-12">
                      <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?=$this->session->flashdata('msg')?>
                      </div>
                    </div>

                  <?php } ?>

               	  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Username <small>*</small></label>
                      <input name="username" class="form-control required username" type="username" placeholder="Enter Username" value="<?=@$this->input->post('username')?>">
                    </div>
                    <span class="text-danger"><?=form_error('username')?></span>
                  </div>
                </div>
                <div class="row">               
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Password <small>*</small></label>
                       <input name="password" class="form-control" type="password" placeholder="password" value="<?=@$this->input->post('password')?>">
                    </div>
                    <span class="text-danger"><?=form_error('password')?></span>
                  </div>
                </div>
                <div class="row">               
                  <div class="col-sm-6">
                    <div class="checkbox">
                		<label for="form_checkbox">
                  		<input id="form_checkbox" name="form_checkbox" type="checkbox">
                 		 Remember me </label>
              		</div>
                  </div>
                  <div class="col-sm-6">
                  	<div class="clear text-center pt-10">
                		<a class="text-theme-colored font-weight-600 font-12" href="#">Forgot Your Password?</a>
              		</div>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="hvr-glow btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Login</button>
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
  