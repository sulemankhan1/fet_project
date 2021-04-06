<div class="wrapper">
  <div class="main-panel">
    <div class="main-content">
      <div class="content-wrapper">
        <section id="sizing">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title"><i class="ft-layers"></i> Notifications</h4>
                </div>
                <div class="card-content">
                  <div style="padding-left: 1%;">
                    <div class="col-md-12" style="overflow: auto">
                      <div class="card-text">
                        <p class="card-text">List of All Notifications / News / Events / Circulars etc</p>
                      </div>
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

                      <table class="table table-bordered table-hovered mt-4 small-text">
                        <thead>
                          <tr>
                            <th>S.No</th>
                            <th>Image</th>
                            <th>Title</th>
                            <!-- <th>Faculty</th>
                            <th>Department</th>
                            <th>Program</th> -->
                            <th>Description</th>
                            <th>Type</th>
                            <th>Added by</th>
                            <th>Date/Time</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $sno=1; foreach ($notifications as $notification): ?>
                            <tr>
                              <td><?=$sno?></td>
                              <td>
                                <?php if(file_exists($notification->IMAGE_PATH)) { ?>
                                  <a href="<?=base_url($notification->IMAGE_PATH)?>" target="_blank">
                                    <img src="<?=base_url($notification->IMAGE_PATH)?>" width="150" class="img-thumbnail">
                                  </a>
                                <?php } else { ?>
                                  <img src="<?=base_url('app-assets/images/no-image-available.png')?>" width="150" class="img-thumbnail">
                                <?php } ?>
                              </td>
                              <td><?=$notification->TITLE?></td>
                              <!-- <td><?=$notification->FAC_NAME?></td>
                              <td><?=$notification->DEPT_NAME?></td>
                              <td><?=$notification->PROGRAM_TITLE?></td> -->
                              <td><?=(strlen($notification->DESCRIPTION)> 10)?substr($notification->DESCRIPTION, 0, 10)."...":$notification->DESCRIPTION?></td>
                              <td><?=$notification->NOTIFICATION_TYPE?></td>
                              <td><?=$notification->username?></td>
                              <td><?=($notification->DATA_TIME)?date('d M Y H:i a', strtotime($notification->DATA_TIME)):" - "?></td>
                              <td>
                                <!-- <a href="#" class="btn-sm btn-link" title="View"><i class="ft-eye"></i></a> -->
                                <a href="<?=site_url('edit_notification/'.hashids_encrypt($notification->NOTIFICATION_ID))?>" class="btn-sm btn-link" title="Edit"><i class="ft-edit"></i></a>
                                <a href="<?=site_url('delete_notification/'.hashids_encrypt($notification->NOTIFICATION_ID))?>" class="btn-sm btn-link" title="Delete" onclick="return confirm('Are you sure you want to Delete this Notification? This Action Cannot be reverted.')"><i class="ft-trash"></i></a>
                              </td>
                            </tr>
                          <?php $sno++; endforeach; ?>
                          <?php if(empty($notifications)): ?>
                            <tr>
                              <td colspan="99" class="text-center">No Notifications Found</td>
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
<script type="text/javascript">
$(document).on('change','select[name=FAC_ID]',function(){
  var id = $(this).val();
  $.ajax({
    url : '<?=site_url('main/getDepartByFacId')?>/'+id,
    success :function(data){
        $('select[name=DEPT_ID]').html(data);
    }
  })
})
$(document).on('change','select[name=DEPT_ID]',function(){
  var id = $(this).val();
  $.ajax({
    url : '<?=site_url('main/getProgramsByDeptId')?>/'+id,
    success :function(data){
        $('select[name=PROG_ID]').html(data);
    }
  })
})
</script>
