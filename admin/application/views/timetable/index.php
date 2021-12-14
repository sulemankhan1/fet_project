<div class="wrapper">
  <div class="main-panel">
    <div class="main-content">
      <div class="content-wrapper">
        <section id="sizing">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title"><i class="ft-book"></i> Manage Timetables</h4>
                  <a href="<?=site_url('new_timetable')?>" class="btn btn-sm btn-primary pull-right"> <i class="fa fa-plus"></i> Add New Timetable</a>
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
                            <!-- <th>Image</th> -->
                            <!-- <th>Title</th> -->
                            <th>Campus</th>
                            <th>Faculty</th>
                            <th>Depart</th>
                            <th>Semester</th>
                            <th>Class Group</th>
                            <th>Part</th>
                            <th>Year</th>
                            <th>Morning/Evening</th>
                            <th>Is Published</th>
                            <th>Added by</th>
                            <th>Date Added</th>
                            <th>Last Updated</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $sno=1; foreach ($records as $record): ?>
                            <tr>
                              <td><?=$sno?></td>
                              <!-- <td>
                                <?php if(@getimagesize('uploads/timetables/'.$record->image)) { ?>
                                  <a href="<?=base_url('uploads/timetables/'.$record->image)?>" target="_blank">
                                    <img src="<?=base_url('uploads/timetables/'.$record->image)?>" width="150" class="img-thumbnail">
                                  </a>
                                <?php } else { ?>
                                  <img src="<?=base_url('app-assets/images/no-image-available.png')?>" width="150" class="img-thumbnail">
                                <?php } ?>
                              </td> -->
                              <!-- <td><?=$record->title?></td> -->
                              <td><?=($record->campus_name == "")?"For All":$record->campus_name?></td>
                              <td><?=($record->faculty_name == "")?"For All":$record->faculty_name?></td>
                              <td><?=($record->depart_name == "")?"For All":$record->depart_name?></td>
                              <td><?=$record->semester?></td>
                              <td><?=$record->class_group?></td>
                              <td><?=$record->part?></td>
                              <td><?=$record->year?></td>
                              <td><?=$record->evening_morning?> </td>
                              <td><span class="badge badge-<?=($record->published == 0)?"secondary":"success"?>"><?=($record->published == 0)?"Draft":"Published"?></span> </td>
                              <!-- <td><span class="circled <?=($record->published)?'green-circle':'grey-circle'?>">A</span> </td> -->
                              <td><?=$record->username?></td>
                              <!-- <td><?=$record->datetime_added?></td> -->
                              <td><?=date('d M Y h:i a', strtotime($record->datetime_added))?></td>
                              <!-- <td><?=$record->datetime_updated?></td> -->
                              <td><?=date('d M Y h:i a', strtotime($record->datetime_updated))?></td>
                              <td>
                                <a href="<?=site_url('edit_timetable/'.hashids_encrypt($record->id))?>" class="btn-sm btn-link" title="Edit"><i class="ft-edit"></i></a>
                                <a href="<?=site_url('delete_timetable/'.hashids_encrypt($record->id))?>" class="btn-sm btn-link" title="Delete" onclick="return confirm('Are you sure you want to Delete this Subject? This Action Cannot be reverted.')"><i class="ft-trash"></i></a>
                                <?php if($record->type == "custom") { ?>
                                  <a href="<?=site_url('customize_timetable/'.hashids_encrypt($record->id))?>" class="btn-sm btn-link" title="view"><i class="icon-settings"></i></a>
                                <?php } else { ?>
                                  <a href="<?=base_url('uploads/timetables/'.$record->image)?>" class="btn-sm btn-link" title="view" target="_blank"><i class="ft-eye"></i></a>
                                <?php } ?>
                              </td>
                            </tr>
                          <?php $sno++; endforeach; ?>
                          <?php if(empty($records)): ?>
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
