<?php
if($this->session->flashdata('data') && !isset($record)) {
  // convert array into object and store in record variable to show data on form
  $record = json_decode(json_encode($this->session->flashdata('data')));
}
 ?>
<style media="screen">
  .hidden {
    display: none;
  }
</style>
<div class="wrapper">
  <div class="main-panel">
    <div class="main-content">
      <div class="content-wrapper">
        <section id="sizing">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title"><i class="ft-flag"></i> Add Class Room</h4>
                </div>
                <div class="card-content">
                  <div style="padding-left: 1%">
                    <div class="col-md-12">
                      <div class="card-text">
                        <?php if($this->session->flashdata('type') == 'error') { ?>
                          <div class="mt-1">
                            <div class="alert alert-danger alert-dismissible">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <?=$this->session->flashdata('msg')?>
                            </div>
                          </div>
                        <?php } ?>
                      </div>

                      <form class="form" method="post" action="<?=site_url('save_classroom')?>" metho="post" id="new_subject_form">
                        <input type="hidden" name="id" value="<?=@$record->id?>" />
                        <div class="form-body">
                          <h4 class="form-section mt-3"><i class="ft-edit"></i> Information</h4>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="barcode">Barcode</label>
                                <input type="text"  name="barcode" value="<?=@$record->barcode?>" id="barcode" class="form-control"  />
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text"  name="name" value="<?=@$record->name?>" id="name" class="form-control"  />
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="room_no">Room Number *</label>
                                <div class="form-group">
                                  <input type="text"  name="room_no" value="<?=@$record->room_no?>" id="room_no" class="form-control"  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                          <h4 class="form-section mt-3"><i class="ft-check-circle"></i> Notes</h4>

                          <div class="form-group">
                            <label for="remarks">Remarks</label>
                            <textarea id="remarks" rows="5" class="form-control" name="remarks"><?=@$record->remarks?></textarea>
                          </div>
                        </div>

                        <div class="form-actions">
                          <button type="submit" class="btn btn-raised btn-primary">
                            <i class="ft-check"></i> Save
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
