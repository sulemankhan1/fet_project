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
                        <input type="hidden" name="NOTIFICATION_ID" value="<?=@$record->NOTIFICATION_ID?>" />
                        <div class="form-body">
                          <h4 class="form-section mt-3"><i class="ft-edit"></i> Information</h4>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="image"><?=(@$record)?"Change": "Select"?> Image</label>
                                <input type="file" name="IMAGE_PATH" value="<?=@$record->IMAGE_PATH?>" id="image" class="form-control" />
                              </div>
                            </div>
                            <?php if(@$record) { ?>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="image">Current Image *</label> <br />
                                  <a href="<?=base_url(@$record->IMAGE_PATH)?>" target="_blank"><img src="<?=@base_url($record->IMAGE_PATH)?>" width="100" class="img img-thumbnail" /></a>
                                  <input type="hidden" name="OLD_IMAGE_PATH" value="<?=@$record->IMAGE_PATH?>" />
                                </div>
                              </div>
                            <?php } ?>

                            <div class="col-md-12"></div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="title">Title *</label>
                                <input type="text" name="TITLE" value="<?=@$record->TITLE?>" id="title" class="form-control" required />
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="image">Notification Type *</label>
                                <div class="form-group">
                                  <select class="form-control" name="NOTIFY_TYPE_ID">
                                    <?php foreach ($notification_types as $type) { ?>
                                      <option value="<?=$type->NOTIFY_TYPE_ID?>" <?=(@$record->NOTIFY_TYPE_ID == $type->NOTIFY_TYPE_ID)?'checked': ''?>><?=ucfirst($type->NAME)?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="description">Description *</label>
                                <textarea name="DESCRIPTION" rows="8" cols="80" id="description" class="form-control" required><?=@$record->DESCRIPTION?></textarea>
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
                                  <input type="radio" id="everyone" value="everyone" name="NOTIFICATION_FOR" class="custom-control-input" checked />
                                  <label class="custom-control-label" for="everyone"> General (Everyone)</label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="custom-control custom-radio d-inline-block ml-1" required>
                                  <input type="radio" id="university_faculty" value="university_faculty" name="NOTIFICATION_FOR" class="custom-control-input" <?=(@$record->NOTIFICATION_FOR == 'university_faculty')?'checked': ''?> />
                                  <label class="custom-control-label" for="university_faculty"> All University Fculties</label>
                                </div>
                              </div>

                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <div class="custom-control custom-radio d-inline-block ml-1" required>
                                  <input type="radio" id="college_students" value="college_students" name="NOTIFICATION_FOR" class="custom-control-input" <?=(@$record->NOTIFICATION_FOR == 'college_students')?'checked': ''?> />
                                  <label class="custom-control-label" for="college_students"> All College Students</label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="custom-control custom-radio d-inline-block ml-1" required>
                                  <input type="radio" id="university_teachers" value="university_teachers" name="NOTIFICATION_FOR" class="custom-control-input" <?=(@$record->NOTIFICATION_FOR == 'university_teachers')?'checked': ''?> />
                                  <label class="custom-control-label" for="university_teachers"> All University Teachers</label>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <div class="custom-control custom-radio d-inline-block ml-1" required>
                                  <input type="radio" id="university_students" value="university_students" name="NOTIFICATION_FOR" class="custom-control-input" <?=(@$record->NOTIFICATION_FOR == 'university_students')?'checked': ''?> />
                                  <label class="custom-control-label" for="university_students"> All University Students</label>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="custom-control custom-radio d-inline-block ml-1" required>
                                  <input type="radio" id="specific_faculty" value="specific_faculty" name="NOTIFICATION_FOR" class="custom-control-input" <?=(@$record->NOTIFICATION_FOR == 'specific_faculty')?'checked': ''?> />
                                  <label class="custom-control-label" for="specific_faculty"> Specific Faculty</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12" id="choose_options">
                            <?php if(@$record->NOTIFICATION_FOR == "specific_faculty") { ?>
                              <div>
                                <div class="row">
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="department"> Select Faculty *</label>
                                      <select class="form-control" name="FAC_ID" id="department" required>
                                        <option value="all">All Faculties</option>
                                        <?php foreach ($faculties as $fac): ?>
                                          <option value="<?=$fac->FAC_ID?>" <?=@$record->FAC_ID == $fac->FAC_ID?"selected":"" ?>><?=$fac->FAC_NAME?></option>
                                        <?php endforeach; ?>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="department"> Select Department *</label>
                                      <select class="form-control" name="DEPT_ID" id="department" required>
                                        <option value="all">All Departments</option>
                                        <?php if(@$record->DEPT_ID) { ?>
                                          <option value="<?=@$record->DEPT_ID?>" selected><?=@$record->DEPT_NAME?></option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group">
                                      <label for="program"> Select Program *</label>
                                      <select class="form-control" name="PROG_ID" id="program" required>
                                        <option value="all">All Programs</option>
                                        <?php if(@$record->PROG_ID) { ?>
                                          <option value="<?=@$record->PROG_ID?>" selected><?=@$record->PROGRAM_TITLE?></option>
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
                            <textarea id="remarks" rows="5" class="form-control" name="REMARKS"><?=@$record->REMARKS?></textarea>
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
        <select class="form-control" name="FAC_ID" id="department" required>
          <option> -- Select Faculty -- </option>
          <?php foreach ($faculties as $fac): ?>
            <option value="<?=$fac->FAC_ID?>" <?=@$record->FAC_ID == $fac->FAC_ID?"selected":"" ?>><?=$fac->FAC_NAME?></option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="department"> Select Department *</label>
        <select class="form-control" name="DEPT_ID" id="department" required>
          <option value=""> -- <?=@($record)?"Select Department":"Select Faculty First"?> -- </option>
          <?php if(@$record->DEPT_ID) { ?>
            <option value="<?=@$record->DEPT_ID?>" selected><?=@$record->DEPT_NAME?></option>
          <?php } ?>
        </select>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="program"> Select Program *</label>
        <select class="form-control" name="PROG_ID" id="program" required>
          <option value=""> -- <?=@($record)?"Select Program":"Select Department First"?> -- </option>
          <?php if(@$record->PROG_ID) { ?>
            <option value="<?=@$record->PROG_ID?>" selected><?=@$record->PROGRAM_TITLE?></option>
          <?php } ?>
        </select>
      </div>
    </div>
  </div>
</div>
<input type="hidden" name="FAC_ID" value="<?=@$record->FAC_ID?>">
<input type="hidden" name="DEPT_ID" value="<?=@$record->DEPT_ID?>">
<input type="hidden" name="PROG_ID" value="<?=@$record->PROG_ID?>">
<script type="text/javascript">

// ONLY FOR EDIT
$('document').ready(function() {
  // for edit take faculty id
    let fac_id = $('input[name=FAC_ID]').val();
    let dept_id = $('input[name=DEPT_ID]').val();
    let prog_id = $('input[name=PROG_ID]').val();

    // if there is faculty id then fetch departments for that faculty
    if(fac_id) {

      getDepartByFacId(fac_id, dept_id);
      // fetch programs for that department
      if(dept_id) {
        console.log(prog_id);
        getProgramsByDeptId(dept_id, prog_id);
      }
    }
})
$(document).on('change','select[name=FAC_ID]',function(){
  let id = $(this).val();
  // empty department and program dropdowns first
  $('select[name=DEPT_ID]').html('');
  $('select[name=PROG_ID]').html('');

  getDepartByFacId(id);
})
function getDepartByFacId(id, selected_depart_id="") {
  $.ajax({
    url : '<?=site_url('main/getDepartByFacId')?>/'+id+'/'+selected_depart_id,
    success :function(data){
        $('select[name=DEPT_ID]').html(data);
    }
  })
}
$(document).on('change','select[name=DEPT_ID]',function(){
  let id = $(this).val();

  // empty program dropdown
  $('select[name=PROG_ID]').html('');
  getProgramsByDeptId(id);
})

function getProgramsByDeptId(id, selected_program_id="") {
  $.ajax({
    url : '<?=site_url('main/getProgramsByDeptId')?>/'+id+'/'+selected_program_id,
    success :function(data){
        $('select[name=PROG_ID]').html(data);
    }
  })
}

$(document).on('change','input[name=NOTIFICATION_FOR]',function() {
  let value = $(this).val();
  let options = $('#extra_options').html();

  if(value == 'specific_faculty')  {
    $("#choose_options").html(options);
  } else {
    $("#choose_options").html('');
  }
})

CKEDITOR.replace( 'DESCRIPTION' );
</script>
