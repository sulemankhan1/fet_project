<style type="text/css">
  .change_sidebar_clr:hover{
      cursor: pointer;
  }
</style>
    <section class="basic-elements">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
              <h4 class="card-title mb-0"><?=$title?></h4>
          </div>
          <div class="card-body">
            <div class="px-3">
              <form class="form" action="<?=site_url('save_settings');?>" method="post" enctype="multipart/form-data">
                <?php if($this->session->flashdata('response') == 'success') { ?>

                  <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?=$this->session->flashdata('msg')?>
                  </div>

                <?php } ?>
                  <div class="form-body">
                    <div class="row">
                      <?php if(!empty($settings)) { ?>
                        <div class="col-md-6 mt-3">
                            <fieldset class="form-group">
                                <label for="basicInput"> Current Logo</label><br>
                                <?php if (@getimagesize('uploads/'.$settings->logo)): ?>
                                  <img src="<?=base_url('uploads/'.$settings->logo)?>" class="img img-thumbnail" style="max-height: 125px;max-width: 215px;">
                                    <?php else: ?>
                                  <img src="<?=base_url('app-assets/images/no-image-available.png')?>" class="img img-thumbnail" style="max-height: 125px;max-width: 215px;">
                                <?php endif; ?>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="basicInput"> Change Logo</label>
                                <input type="file" class="form-control" name="logo">
                            </fieldset>
                        </div>
                      <?php } ?>

                      <?php if(!empty($settings)) { ?>

                        <div class="col-md-6 mt-3">
                            <fieldset class="form-group">
                                <label for="basicInput"> Sidebar Background Image</label><br>

                                <?php if (@getimagesize('uploads/'.$settings->sidebar_img)): ?>

                                  <img src="<?=base_url('uploads/'.$settings->sidebar_img)?>" class="img img-thumbnail" style="max-height: 125px;max-width: 215px;">

                                    <?php else: ?>

                                  <img src="<?=base_url('app-assets/images/no-image-available.png')?>" class="img img-thumbnail" style="max-height: 125px;max-width: 215px;">

                                <?php endif; ?>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="basicInput"> Change Sidebar Background Image</label>
                                <input type="file" class="form-control" name="sidebar_img">
                            </fieldset>
                        </div>
                      <?php } ?>
                      <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                          <fieldset class="form-group">
                              <label for="basicInput"> Name</label>
                              <input type="text" class="form-control" name="name" value="<?=@$settings->name?>">
                          </fieldset>
                      </div>

                      <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                          <fieldset class="form-group">
                              <label for="basicInput"> About </label>
                              <input type="text" class="form-control" name="about" value="<?=@$settings->about?>">
                          </fieldset>
                      </div>


                      <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                          <fieldset class="form-group">
                              <label for="basicInput"> Department Email</label>
                              <input type="email" class="form-control" name="department_email" value="<?=@$settings->department_email?>">
                          </fieldset>
                      </div>

                      <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                        <fieldset class="form-group">
                          <label for="basicInput"> Footer</label>
                          <input type="text" class="form-control" name="footer" value="<?=@$settings->footer?>">
                        </fieldset>
                      </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput"> Terms of Services *</label>
                                <textarea name="terms" class="form-control" rows="8" cols="80" required ><?=@$settings->terms?></textarea>
                            </fieldset>
                        </div>
                    </div>

                      <div class="row" id="hello">
                        <div class="col-xl-12 col-lg-12 col-md-12 mt-2">
                          <label for="basicInput"> Sidebar Color</label>
                          <div class="cz-bg-color sb-color-options">
                            <div class="row p-1">
                              <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="pomegranate" class="gradient-pomegranate d-block rounded-circle"></span></div>
                              <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="king-yna" class="gradient-king-yna d-block rounded-circle"></span></div>
                              <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="ibiza-sunset" class="gradient-ibiza-sunset d-block rounded-circle"></span></div>
                              <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="flickr" class="gradient-flickr d-block rounded-circle"></span></div>
                              <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="purple-bliss" class="gradient-purple-bliss d-block rounded-circle"></span></div>
                              <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="man-of-steel" class="gradient-man-of-steel d-block rounded-circle"></span></div>
                              <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="purple-love" class="gradient-purple-love d-block rounded-circle"></span></div>
                            </div>
                            <div class="row p-1">
                              <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="black" class="bg-black d-block rounded-circle"></span></div>
                              <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="white" class="bg-grey d-block rounded-circle"></span></div>
                              <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="primary" class="bg-primary d-block rounded-circle"></span></div>
                              <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="success" class="bg-success d-block rounded-circle"></span></div>
                              <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="warning" class="bg-warning d-block rounded-circle"></span></div>
                              <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="info" class="bg-info d-block rounded-circle"></span></div>
                              <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="danger" class="bg-danger d-block rounded-circle"></span></div>
                            </div>
                          </div>

                        </div>
                      </div>

                      <div class="form-actions">
                      <div class="text-right">
                          <button type="Submit" class="btn btn-raised btn-primary"> <i class="ft-check position-right"></i> Save</button>
                      </div>
                  </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<script type="text/javascript">

  $('.change_sidebar_clr').click(function () {
    var sidebar_clr = $('span ',this).attr('data-bg-color');
    $.ajax({
      url :'<?=site_url('settings/update_sidebar_clr')?>',
      method : 'POST',
      data : {sidebar_clr : sidebar_clr}
    })
  })

</script>
