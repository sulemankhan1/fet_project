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
                  <h4 class="card-title"><i class="ft-book"></i> Add Subject</h4>
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

                      <form class="form" method="post" action="<?=site_url('save_subject')?>" metho="post" id="new_subject_form">
                        <input type="hidden" name="id" value="<?=@$record->id?>" />
                        <div class="form-body">
                          <h4 class="form-section mt-3"><i class="ft-edit"></i> Information</h4>
                          <div class="row">
                            <div class="col-md-2">
                              <div class="form-group">
                                <label for="course_code">Course Code *</label>
                                <input type="text"  name="course_code" value="<?=@$record->course_code?>" id="course_code" class="form-control"  />
                              </div>
                            </div>
                            <div class="col-md-10">
                              <div class="form-group">
                                <label for="subject_title">Subject Title *</label>
                                <div class="form-group">
                                  <input type="text"  name="subject_title" value="<?=@$record->subject_title?>" id="subject_title" class="form-control"  />
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="subject_desc">Description</label>
                                <textarea name="subject_desc"  rows="5" cols="80" id="subject_desc" class="form-control" ><?=@$record->subject_desc?></textarea>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="year">Year (optional)</label>
                                <div class="form-group">
                                  <input type="text"  name="year" value="<?=@$record->year?>" id="year" class="form-control"  />
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Morning / Evening</label> <br />
                                  <input type="radio" name="morning_evening" value="morning" id="morning" <?=(@$record->morning_evening == 'morning')?'checked': ''?>> <label for="morning">Morning</label>
                                  <input type="radio" name="morning_evening" value="evening" id="evening"<?=(@$record->morning_evening == 'evening')?'checked': ''?>> <label for="evening">Evening</label>
                                  <input type="radio" name="morning_evening" value="both" id="both" <?=(@$record->morning_evening == 'both' || @$record->morning_evening == "")?'checked': ''?>> <label for="both">Both</label>
                              </div>
                            </div>
                          </div>

                          <h4 class="form-section mt-3"><i class="ft-settings"></i> Settings</h4>

                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Subject For Campus *</label> <br />
                                <div class="custom-control custom-radio d-inline-block ml-1" >
                                  <input type="radio" id="campus_everyone" value="general" name="for_campus" class="custom-control-input" checked />
                                  <label class="custom-control-label" for="campus_everyone"> All Campuses</label>
                                </div>
                                <div class="custom-control custom-radio d-inline-block ml-1" >
                                  <input type="radio" id="campus_specific" value="specific" name="for_campus" class="custom-control-input"  disabled/>
                                  <label class="custom-control-label" for="campus_specific"> <span class="text text-muted">Specific Campus</span> </label>
                                </div>
                              </div>
                              <!-- <div class="campus_dropdown_cont">
                                <div class="form-group">
                                  <label for="campus_id"> Select Campus</label>
                                  <select class="form-control" name="campus_id" id="campus_id" >
                                    <?php foreach ($campus as $campus_rec): ?>
                                      <option value="<?=$campus_rec->id?>" <?=@$record->campus_id == $campus_rec->id?"selected":"" ?>><?=$campus_rec->name?></option>
                                    <?php endforeach; ?>
                                  </select>
                                </div>
                              </div> -->
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Subject For Faculty</label> <br />
                                <div class="custom-control custom-radio d-inline-block ml-1" >
                                  <input type="radio" id="faculty_everyone" value="general" name="for_faculty" class="custom-control-input" checked />
                                  <label class="custom-control-label" for="faculty_everyone"> All Faculties</label>
                                </div>
                                <div class="custom-control custom-radio d-inline-block ml-1" >
                                  <input type="radio" id="faculty_specific" value="specific" name="for_faculty" class="custom-control-input" <?=(@$record->for_faculty == 'specific')?'checked': ''?> />
                                  <label class="custom-control-label" for="faculty_specific"> Specific Faculty</label>
                                </div>
                              </div>
                              <div class="faculties_dropdown_cont <?=(@$record->for_faculty != 'specific')?'hidden': ''?>">
                                <div class="form-group">
                                  <label for="faculties"> Select Faculty</label>
                                  <select class="form-control" name="faculty_id" id="faculties" >
                                    <?php foreach ($faculties as $fac): ?>
                                      <option value="<?=$fac->id?>" <?=@$record->faculty_id == $fac->id?"selected":"" ?>><?=$fac->name?></option>
                                    <?php endforeach; ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label>Subject For Department</label> <br />
                                <div class="custom-control custom-radio d-inline-block ml-1" >
                                  <input type="radio" id="department_everyone" value="general" name="for_depart" class="custom-control-input" checked />
                                  <label class="custom-control-label" for="department_everyone"> All Departments</label>
                                </div>
                                <div class="custom-control custom-radio d-inline-block ml-1" >
                                  <input type="radio" id="department_specific" value="specific" name="for_depart" class="custom-control-input" <?=(@$record->for_depart == 'specific')?'checked': ''?> />
                                  <label class="custom-control-label" for="department_specific"> Specific Department</label>
                                </div>
                              </div>
                              <div class="departments_dropdown_cont <?=(@$record->for_depart != 'specific')?'hidden': ''?>">
                                <div class="form-group">
                                  <label for="department"> Select Department *</label>
                                  <select class="form-control" name="depart_id" id="department" >
                                    <option> -- Select Department -- </option>
                                    <?php foreach ($departments as $dept): ?>
                                      <option value="<?=$dept->id?>" <?=@$record->depart_id == $dept->id?"selected":"" ?>><?=$dept->name?></option>
                                    <?php endforeach; ?>
                                  </select>
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

<input type="hidden" name="faculty_id" value="<?=@$record->faculty_id?>">
<input type="hidden" name="depart_id" value="<?=@$record->depart_id?>">
<script type="text/javascript">

// ONLY FOR EDIT
$('document').ready(function() {
  // for edit take faculty id
    let faculty_id = $('input[name=faculty_id]').val();
    let dept_id = $('input[name=depart_id]').val();
    // second param is to select which depart by default (for edit)
    getDepartByFacId(faculty_id, dept_id);
})

$(document).on('change','input[name=for_campus]',function(){
  let val = $(this).val();
  if(val == 'specific') {
    $('.campus_dropdown_cont').show();
  } else {
    $('.campus_dropdown_cont').hide();
  }
})
$(document).on('change','input[name=for_faculty]',function(){
  let val = $(this).val();
  if(val == 'specific') {
    $('.faculties_dropdown_cont').show();
  } else {
    $('.faculties_dropdown_cont').hide();
  }
})
$(document).on('change','input[name=for_depart]',function(){
  let val = $(this).val();
  if(val == 'specific') {
    $('.departments_dropdown_cont').show();
  } else {
    $('.departments_dropdown_cont').hide();
  }
})

$(document).on('change','select[name=faculty_id]',function(){
  let id = $(this).val();
  // empty department and program dropdowns first
  $('select[name=depart_id]').html('');

  getDepartByFacId(id);
})
function getDepartByFacId(id, selected_depart_id="") {
  $.ajax({
    url : '<?=site_url('main/getDepartByFacId')?>/'+id+'/'+selected_depart_id,
    success :function(data){
        $('select[name=depart_id]').html(data);
    }
  })
}
</script>
