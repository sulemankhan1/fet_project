<style type="text/css">
.user-bg-cover {
  background-color: #6e243a;
  background-size: cover;
  background-position: center;
}
</style>
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> -->
<div class="main-content">
  <div class="content-wrapper">

    <!--Statistics cards Starts-->
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="card card-outline-primary box-shadow-0 text-center user-bg-cover" style="background-image: url('<?=@site_url('assets/images/user-bg.jpg')?>')">
          <div class="card-content">
            <div class="card-body pt-1">
              <div class="row d-flex">
                <div class="col align-self-center">
                  <div class="row">
                  <?php if (@getimagesize(base_url('uploads/users/'.$this->session->userdata('user_img')))): ?>
                      <img src="<?=base_url('uploads/users/'.$this->session->userdata('user_img'))?>" alt="element 06" width="100" class="float-right img-thumbnail" style="display: block; margin: 0 auto;">
                    <?php else: ?>
                      <img src="<?=base_url('app-assets/images/profile-pic-default.png')?>" alt="element 06" width="100" class="float-right img-thumbnail"  style="display: block; margin: 0 auto;">
                  <?php endif; ?>
                </div>
                <h4 class="card-title mt-1">Welcome <span class="primary"><?=@$this->session->username?></span> !</h4>

                  <p class="card-text">To <?=@$this->session->userdata('settings')['NAME']?></p>
                  <a href="<?=site_url('../')?>" class="btn btn-raised btn-primary btn-darken-3 white">Visit Site</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Statistics cards Ends-->
<!-- ViewModalEnd -->
<script src="<?=base_url('app-assets/vendors/js/chartist.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('app-assets/js/dashboard1.js')?>" type="text/javascript"></script>
