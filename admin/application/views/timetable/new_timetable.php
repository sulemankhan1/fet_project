<link rel="stylesheet" href="<?=base_url('assets/css/timetable.css')?>">
<?php
if($this->session->flashdata('data') && !isset($record)) {
  // convert array into object and store in record variable to show data on form
  $record = json_decode(json_encode($this->session->flashdata('data')));
}
 ?>
<div class="wrapper">
  <div class="main-panel">
    <div class="main-content">
      <!--Basic Table Starts-->
      <section id="simple-table">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <a href="#" class="btn btn-success pull-right"><i class="fa fa-save"></i> Save</a>
                <a href="#" class="btn btn-secondary pull-right mr-2"><i class="icon-drawer"></i> Save as Draft</a>
                <a href="#" class="btn btn-link  mr-2"><i class="ft-arrow-left"></i> Go Back</a>
                <h4 class="card-title">Create New Timetable</h4>
              </div>
              <div class="card-content">
                <?php if($this->session->flashdata('type') == 'error') { ?>
                  <div class="col-md-12">
                    <div class="alert alert-danger alert-dismissible">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <?=$this->session->flashdata('msg')?>
                    </div>
                  </div>
                <?php } ?>
                <div class="card-body">
                  <form class="" action="<?=site_url('create_timetable')?>" method="post" enctype="multipart/form-data">
                    <div class="row padded">
                      <div class="col-md-4 ">
                        <div class="form-group">
                          <label>Campus *</label>
                          <select class="form-control" name="campus_id">
                            <?php if(!empty($campuses)) { ?>
                              <?php foreach($campuses as $campus) { ?>
                                <option value="<?=$campus->id?>" <?=(@$record->campus_id == $campus->id)?'selected': ''?>><?=ucfirst($campus->name)?></option>
                              <?php } ?>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Faculty *</label>
                          <select class="form-control" name="faculty_id">
                            <option value=""> -- Select -- </option>
                            <option value="all">All / General</option>
                            <?php if(!empty($faculties)) { ?>
                              <?php foreach($faculties as $faculty) { ?>
                                <option value="<?=$faculty->id?>" <?=(@$record->faculty_id == $faculty->id)?'selected': ''?>><?=ucfirst($faculty->name)?></option>
                              <?php } ?>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Department *</label>
                          <select class="form-control" name="depart_id">
                            <option value=""> Select Faculty First </option>
                          </select>
                        </div>
                      </div>
                      <!-- <div class="col-md-4">
                        <div class="form-group">
                          <label>Program</label>
                          <select class="form-control" name="campus">
                            <option value="all"> -- All / General -- </option>
                          </select>
                        </div>
                      </div> -->
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Part *</label>
                          <select class="form-control" name="part">
                            <option value="1">Part 1</option>
                            <option value="2">Part 2</option>
                            <option value="3">Part 3</option>
                            <option value="4">Part 4</option>
                            <option value="5">Part 5</option>
                            <option value="6">Part 6</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Semester *</label><br />
                          <input type="radio" name="semester" value="first" id="sem_first" checked> <label for="sem_first">First</label>
                          <input type="radio" name="semester" value="second" id="sem_second"> <label for="sem_second">Second</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Group (optional)</label>
                          <input type="text" class="form-control" name="class_group" placeholder="Leave blank if not Necessary">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Year *</label>
                          <select class="form-control" name="year">
                            <?php
                            $year_counter = -4;
                            $current_year = date('Y', strtotime("+$year_counter year"));
                            $year = $current_year;

                            for($year_counter; $year_counter < 6; $year_counter++) {
                              $year = date('Y', strtotime("+$year_counter year"));
                              ?>
                              <option value="<?=$year?>" <?=($year == date("Y"))?"selected":""?>><?=$year?></option>
                            <?php
                          } ?>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>For *</label> <br />
                          <input type="radio" name="tt_for" value="morning" id="tt_morning"> <label for="tt_morning">Morning</label>
                          <input type="radio" name="tt_for" value="evening" id="tt_evening"> <label for="tt_evening">Evening</label>
                          <input type="radio" name="tt_for" value="both" id="tt_both" checked> <label for="tt_both">Both</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Timetable Type *</label> <br />
                          <input type="radio" name="tt_type" value="image" id="tt_type_image"> <label for="tt_type_image">Image</label>
                          <input type="radio" name="tt_type" value="custom" id="tt_type_custom" checked> <label for="tt_type_custom">Custom</label>
                        </div>
                      </div>

                      <div class="col-md-6 tt_image_cont hidden">
                        <div class="form-group">
                          <label>Upload Timetable Image *</label>
                          <input type="file" name="tt_image" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-12">
                        <button type="submit" class="btn btn-success pull-right btn_custom"> <i class="fa fa-arrow-right"></i> Create Timetable</button>
                        <button type="submit" class="btn btn-success pull-right btn_image hidden"> <i class="fa fa-save"></i> Save</button>
                      </div>

                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Basic Table Ends-->
    </div>
  </div>
</div>
<script src="<?=base_url('assets/js/timetable.js')?>" charset="utf-8"></script>
<script type="text/javascript">
$(document).on('change','select[name=faculty_id]',function(){
  let id = $(this).val();
  // empty department dropdown first
  $('select[name=depart_id]').html('');

  getDepartByFacId(id);
});

function getDepartByFacId(id, selected_depart_id="") {
  $.ajax({
    url : '<?=site_url('main/getDepartByFacId')?>/'+id+'/'+selected_depart_id,
    success :function(data){
        $('select[name=depart_id]').html(data);
    }
  })
}
</script>
