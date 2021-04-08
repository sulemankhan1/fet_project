<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

<style media="screen">
  #extra_options {
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
                  <h4 class="card-title"><i class="ft-bell"></i> Add Notification</h4>
                </div>
                <div class="card-content">
                  <div style="padding-left: 1%">
                    <div class="col-md-12">
                      <div class="card-text">
                        <p class="card-text">Following Notification will be added for all the departments you select.</p>
                      </div>

                      <form class="form" method="post" action="<?=site_url('save_notification')?>" metho="post" id="new_notification_form" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=@$record->id?>" />
                        <div class="form-body">
                          <h4 class="form-section mt-3"><i class="ft-edit"></i> Information</h4>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="image"><?=(@$record)?"Change": "Select"?> Image</label>
                                <input type="file" name="image" value="<?=@$record->image?>" id="image" class="form-control" />
                              </div>
                            </div>
                            <?php if(@$record) { ?>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="image">Current Image *</label> <br />
                                  <a href="<?=base_url(@$record->image)?>" target="_blank"><img src="<?=@base_url($record->image)?>" width="100" class="img img-thumbnail" /></a>
                                  <input type="hidden" name="old_image" value="<?=@$record->image?>" />
                                </div>
                              </div>
                            <?php } ?>

                            <div class="col-md-12"></div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Title *</label>
                                <input type="text" name="title" value="<?=@$record->title?>" id="title" class="form-control" required />
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="image">Notification Type *</label>
                                <div class="form-group">
                                  <select class="form-control" name="notify_type_id">
                                    <?php foreach ($notification_types as $type) { ?>
                                      <option value="<?=$type->id?>" <?=(@$record->notify_type_id == $type->id)?'selected': ''?>><?=ucfirst($type->name)?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="description">Description *</label>
                                <textarea name="description" rows="8" cols="80" id="description" class="form-control" required><?=@$record->description?></textarea>
                              </div>
                            </div>
                          </div>

                          <h4 class="form-section mt-3"><i class="ft-settings"></i> Settings</h4>

                          <div class="row">
                            <div class="col-md-12">

                              <div class="form-group">
                                <label>Notification For *</label>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <div class="custom-control custom-radio d-inline-block ml-1" required>
                                  <input type="radio" id="everyone" value="everyone" name="notification_for" class="custom-control-input" checked />
                                  <label class="custom-control-label" for="everyone"> General (Everyone)</label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="custom-control custom-radio d-inline-block ml-1" required>
                                  <input type="radio" id="university_faculty" value="university_faculty" name="notification_for" class="custom-control-input" <?=(@$record->notification_for == 'university_faculty')?'checked': ''?> />
                                  <label class="custom-control-label" for="university_faculty"> All University Fculties</label>
                                </div>
                              </div>

                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <div class="custom-control custom-radio d-inline-block ml-1" required>
                                  <input type="radio" id="college_students" value="college_students" name="notification_for" class="custom-control-input" <?=(@$record->notification_for == 'college_students')?'checked': ''?> />
                                  <label class="custom-control-label" for="college_students"> All College Students</label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="custom-control custom-radio d-inline-block ml-1" required>
                                  <input type="radio" id="university_teachers" value="university_teachers" name="notification_for" class="custom-control-input" <?=(@$record->notification_for == 'university_teachers')?'checked': ''?> />
                                  <label class="custom-control-label" for="university_teachers"> All University Teachers</label>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <div class="custom-control custom-radio d-inline-block ml-1" required>
                                  <input type="radio" id="university_students" value="university_students" name="notification_for" class="custom-control-input" <?=(@$record->notification_for == 'university_students')?'checked': ''?> />
                                  <label class="custom-control-label" for="university_students"> All University Students</label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="custom-control custom-radio d-inline-block ml-1" required>
                                  <input type="radio" id="specific_faculty" value="specific_faculty" name="notification_for" class="custom-control-input" <?=(@$record->notification_for == 'specific_faculty')?'checked': ''?> />
                                  <label class="custom-control-label" for="specific_faculty"> Specific Faculty</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12" id="choose_options">
                            <?php if(@$record->notification_for == "specific_faculty") { ?>
                              <div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="department"> Select Faculty *</label>
                                      <select class="form-control" name="faculty_id" id="department" required>
                                        <option value="all">All Faculties</option>
                                        <?php foreach ($faculties as $fac): ?>
                                          <option value="<?=$fac->id?>" <?=@$record->faculty_id == $fac->id?"selected":"" ?>><?=$fac->name?></option>
                                        <?php endforeach; ?>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="department"> Select Department *</label>
                                      <select class="form-control" name="depart_id" id="department" required>
                                        <option value="all">All Departments</option>
                                        <?php if(@$record->depart_id) { ?>
                                          <option value="<?=@$record->depart_id?>" selected><?=@$record->dept_name?></option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="program"> Select Program *</label>
                                      <select class="form-control" name="program_id" id="program" required>
                                        <option value="all">All Programs</option>
                                        <?php if(@$record->program_id) { ?>
                                          <option value="<?=@$record->program_id?>" selected><?=@$record->program_title?></option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <?php } ?>
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
      </div>
    </div>
  </div>
</div>

<div id="extra_options">
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="department"> Select Faculty *</label>
        <select class="form-control" name="faculty_id" id="department" required>
          <option> -- Select Faculty -- </option>
          <?php foreach ($faculties as $fac): ?>
            <option value="<?=$fac->id?>" <?=@$record->faculty_id == $fac->id?"selected":"" ?>><?=$fac->name?></option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="department"> Select Department *</label>
        <select class="form-control" name="depart_id" id="department" required>
          <option value=""> -- <?=@($record)?"Select Department":"Select Faculty First"?> -- </option>
          <?php if(@$record->depart_id) { ?>
            <option value="<?=@$record->depart_id?>" selected><?=@$record->name?></option>
          <?php } ?>
        </select>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="program"> Select Program *</label>
        <select class="form-control" name="program_id" id="program" required>
          <option value=""> -- <?=@($record)?"Select Program":"Select Department First"?> -- </option>
          <?php if(@$record->program_id) { ?>
            <option value="<?=@$record->program_id?>" selected><?=@$record->program_title?></option>
          <?php } ?>
        </select>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="faculty_id" value="<?=@$record->faculty_id?>">
<input type="hidden" name="depart_id" value="<?=@$record->depart_id?>">
<input type="hidden" name="program_id" value="<?=@$record->program_id?>">
<script type="text/javascript">

// ONLY FOR EDIT
$('document').ready(function() {
  // for edit take faculty id
    let faculty_id = $('input[name=faculty_id]').val();
    let dept_id = $('input[name=depart_id]').val();
    let prog_id = $('input[name=program_id]').val();
    console.log(faculty_id);
    console.log(dept_id);
    console.log(prog_id);

    // if there is faculty id then fetch departments for that faculty
    if(faculty_id) {

      getDepartByFacId(faculty_id, dept_id);
      // fetch programs for that department
      if(dept_id) {
        getProgramsByDeptId(dept_id, prog_id);
      }
    }
})
$(document).on('change','select[name=faculty_id]',function(){
  let id = $(this).val();
  // empty department and program dropdowns first
  $('select[name=depart_id]').html('');
  $('select[name=program_id]').html('');

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
$(document).on('change','select[name=depart_id]',function(){
  let id = $(this).val();

  // empty program dropdown
  $('select[name=program_id]').html('');
  getProgramsByDeptId(id);
})

function getProgramsByDeptId(id, selected_program_id="") {
  $.ajax({
    url : '<?=site_url('main/getProgramsByDeptId')?>/'+id+'/'+selected_program_id,
    success :function(data){
        $('select[name=program_id]').html(data);
    }
  })
}

$(document).on('change','input[name=notification_for]',function() {
  let value = $(this).val();
  let options = $('#extra_options').html();

  if(value == 'specific_faculty')  {
    $("#choose_options").html(options);
  } else {
    $("#choose_options").html('');
  }
})

CKEDITOR.replace( 'description' );
</script>
