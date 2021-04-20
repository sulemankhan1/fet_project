<div class="wrapper">
  <div class="main-panel">
    <div class="main-content">
      <div class="content-wrapper">
        <section id="sizing">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title"><i class="ft-book"></i> Manage Subjects</h4>
                  <a href="<?=site_url('add_subject')?>" class="btn btn-sm btn-primary pull-right"> <i class="fa fa-plus"></i> Add Subject</a>
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
                      <table class="table table-bordered table-hovered mt-4 small-text">
                        <thead>
                          <tr>
                            <th>S.No</th>
                            <th>Course Code</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Campus</th>
                            <th>Faculty</th>
                            <th>Depart</th>
                            <th>Year</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $sno=1; foreach ($subjects as $subject): ?>
                            <tr>
                              <td><?=$sno?></td>
                              <td><?=$subject->course_code?></td>
                              <td><?=$subject->subject_title?></td>
                              <td><?=(strlen($subject->subject_desc)> 10)?substr($subject->subject_desc, 0, 10)."...":$subject->subject_desc?></td>
                              <td><?=($subject->campus_name == "")?"For All":$subject->campus_name?></td>
                              <td><?=($subject->faculty_name == "")?"For All":$subject->faculty_name?></td>
                              <td><?=($subject->depart_name == "")?"For All":$subject->depart_name?></td>
                              <td><?=$subject->year?></td>
                              <td>
                                <!-- <a href="#" class="btn-sm btn-link" title="View"><i class="ft-eye"></i></a> -->
                                <a href="<?=site_url('edit_subject/'.hashids_encrypt($subject->id))?>" class="btn-sm btn-link" title="Edit"><i class="ft-edit"></i></a>
                                <a href="<?=site_url('delete_subject/'.hashids_encrypt($subject->id))?>" class="btn-sm btn-link" title="Delete" onclick="return confirm('Are you sure you want to Delete this Subject? This Action Cannot be reverted.')"><i class="ft-trash"></i></a>
                              </td>
                            </tr>
                          <?php $sno++; endforeach; ?>
                          <?php if(empty($subjects)): ?>
                            <tr>
                              <td colspan="99" class="text-center">No Subjects Found</td>
                            </tr>
                          <?php endif; ?>
                        </tbody>
                      </table>
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
