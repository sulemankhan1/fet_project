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
                <form class="login-form" action="<?=site_url('update_password')?>" method="post">
                  <hr>
                  <?php if($this->session->flashdata('response') == 'success') { ?>

                    <div class="alert alert-success alert-dismissible">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <?=$this->session->flashdata('msg')?>
                    </div>

                  <?php } ?>
                  <div class="form-body">
                    
                      <div class="row">

                      <div class="col-xl-4 col-lg-4 col-md-4 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Old Password *</label>
                                <input type="password" class="form-control"  name="old_password" value="<?=@$this->input->post('old_password')?>">
                            </fieldset>
                            <span class="text-danger"><?=form_error('old_password')?></span>

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">New Password *</label>
                                <input type="password" class="form-control"  name="new_password" value="<?=@$this->input->post('new_password')?>">
                            </fieldset>
                            <span class="text-danger"><?=form_error('new_password')?></span>

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 mb-1">
                            <fieldset class="form-group">
                                <label for="basicInput">Confirm Password *</label>
                                <input type="password" class="form-control"  name="confirm_password" value="<?=@$this->input->post('confirm_password')?>">
                            </fieldset>
                            <span class="text-danger"><?=form_error('confirm_password')?></span>

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

                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
