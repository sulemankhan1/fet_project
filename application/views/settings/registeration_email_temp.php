<div class="main-content">
          <div class="content-wrapper"><!-- Basic Elements start -->
<section class="basic-elements">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0"><?=$title?></h4>
                </div>
                <div class="card-body">
                    <div class="px-3">
                        <form class="form" action="<?=site_url('registeration_email_template');?>" method="post">
                          <?php if($this->session->flashdata('response') == 'success') { ?>

                            <div class="alert alert-success alert-dismissible">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <?=$this->session->flashdata('msg')?>
                            </div>

                          <?php } ?>
                            <div class="form-body">
                                <div class="row mt-3">


                                    <div class="col-xl-12 col-lg-12 col-md-12 mb-1">

                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('registeration_email_msg_txt')?> *</label>
                                            <textarea style="white-space: pre-wrap!important;" name="user_registeration_message" class="form-control" rows="8" cols="80" required ><?=$setting->user_registeration_message?></textarea>
                                        </fieldset>
                                    </div>


                                </div>
                                <div class="form-actions">
                                <div class="text-right">
                                    <button type="Submit" name="submit" class="btn btn-raised btn-primary"><?=__('save_txt')?> <i class="ft-check position-right"></i></button>
                                    <button type="reset" class="btn btn-raised btn-warning"><?=__('reset_txt')?> <i class="ft-refresh-cw position-right"></i></button>
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
