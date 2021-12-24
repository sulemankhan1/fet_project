<style media="screen">
.t1 {
  font-weight: bold;
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
                  <h4 class="card-title"><i class="ft-navigation"></i> Send Timetable to Students via Email</h4>
                </div>
                <div class="card-content">
                  <div style="padding-left: 1%;">
                    <div class="col-md-12" style="overflow: auto">
                      <?php if($this->session->flashdata('type') == 'success') { ?>
                        <div class="mt-1">
                          <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <?=$this->session->flashdata('msg')?>
                          </div>
                        </div>
                      <?php } ?>
                      <?php if($this->session->flashdata('type') == 'error') { ?>
                        <div class="mt-1">
                          <div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <?=$this->session->flashdata('msg')?>
                          </div>
                        </div>
                      <?php } ?>
                      <!-- Content goes here -->
                      <br>
                      <h4><label>Timetable Details</label></h4>
                      <div class="col-md-12 mb-3">
                        <div class="card mb-0">
                          <div class="card-content ">
                            <div class="card-body">
                              <div class="row padded">
                                <div class="col-md-4">
                                  <p><span class="t1">Campus: </span> <?=$record->campus_name?> </p>
                                  <p><span class="t1">Semester: </span> <?=$record->semester?></p>
                                  <p><span class="t1">Year: </span> <?=$record->year?></p>
                                </div>
                                <div class="col-md-4">
                                  <p><span class="t1">Faculty: </span> <?=$record->faculty_name?></p>
                                  <p><span class="t1">Part: </span> <?=$record->part?></p>
                                  <p><span class="t1">Group: </span> <?=$record->class_group?></p>
                                </div>
                                <div class="col-md-4">
                                  <p><span class="t1">Department: </span> <?=$record->depart_name?></p>
                                  <p><span class="t1">For: </span> <?=$record->evening_morning?></p>
                                  <p><span class="t1">Timetable Type: </span> <?=$record->type?></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <br>
                      <h4><label>Timetable will be Sent to the Following Students</label></h4>
                      <?php if(!empty($students)) { ?>
                          <div class="row">
                            <form method="post" class="form-inline" action="<?=site_url('Timetable/send')?>">
                              <?php foreach($students as $student) { ?>
                                  <div class="col-md-4">
                                    <input type="hidden" name="users_emails[]" value="<?=$student->email?>">
                                    <div class="media mb-1">
                                      <a>
                                        <?php if (@getimagesize('uploads/users/'.@$student->image)){ ?>
                                          <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="<?=base_url('uploads/users/'.@$student->image)?>">
                                        <?php } else{ ?>
                                          <img class="media-object d-flex mr-3 bg-primary height-50 rounded-circle" src="<?=base_url('app-assets/images/no-image-available.png')?>">
                                        <?php } ?>
                                      </a>
                                      <div class="media-body">
                                        <h4 class="font-medium-1 mt-1 mb-0"><?=$student->full_name?></h4>
                                        <p class="text-muted font-small-3"><?=$student->roll_number?></p>
                                        <!-- <p class="text-muted font-small-3"><?=$student->email?></p> -->
                                      </div>
                                    </div>
                                  </div>
                                <?php } ?>
                                <div class="col-md-12 mt-5">
                                  <p><i>* by clicking on Send. The Timetable will be sent to all students via their registered email</i> </p>
                                  <button type="submit" class="btn btn-raised gradient-blackberry py-2 px-4 white mr-2"> <i class="ft-navigation"></i> Send </button>
                                  <a href="<?=site_url('view_timetables')?>" class="btn btn-link"> Go Back</a>
                                </div>
                              </form>
                            </div>
                        <?php } else { ?>
                          <p class="alert alert-warning">Sorry! No Students Found for the Current Program.</p>
                          <a href="<?=site_url('view_timetables')?>" class="btn btn-link"> Go Back</a>
                        <?php } ?>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section>
      </div>
    </div>
  </div>
</div>
