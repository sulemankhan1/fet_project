
                    <div class="main-content">

<div class="content-wrapper"><!--Statistics cards Starts-->

    <div class="row">

      <div class="col-sm-12">

        <div class="card">

          <div class="card-header">

            <h4 class="card-title"><?=$title?> </h4>
          </div> <br><br>
          <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4"></div>

          </div>
          <div class="card-body">

            <!-- <style media="screen">
              table{
                width : 100%!important;
              }
            </style> -->
            <div class="card-block mcontainer">
            <?php if(isset($_GET['msg'])): ?>
              <div class="alert alert-success alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <?=$this->session->flashdata('msg')?>
                    <?= ( $_GET['msg'] ) ?'Record Deleted':'' ?>
                    <script type="text/javascript">window.history.pushState({}, document.title, "/" + "Musad_inv/inv_requests")</script>
                </div>

              <?php endif ?>
              <?php if($this->session->flashdata('response') == 'success') { ?>

                <div class="alert alert-success alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <?=$this->session->flashdata('msg')?>
                </div>

              <?php } ?>
              <div class="row mb-2">
                  <?php if ($this->session->userdata('role_id') == 1): ?>

                  <div class="col-md-12">
                      <a href="javascript:void(0)" class="btn btn-outline-danger btn-sm float-right delete_storage"><i class="icon-trash"></i> <?=__('mass_delete_txt');?></a>
                  </div>
                  <?php endif; ?>
                </div>

              <div class="row mb-2">
                  <?php if ($this->session->userdata('role_id') == 1): ?>

                  <div class="col-md-12">
                      <a href="javascript:void(0)" class="btn btn-info btn-sm float-right manage_storage_table"><i class="ft-shuffle"></i> <?=__('manage_table_txt');?></a>
                  </div>
                  <?php endif; ?>
                </div>
                               <button class="btn btn-info expo">Export</button>
              <div class="table-responsive">
                <table  style="float: left;" class="table table-striped table-bordered table-hover table-checkable order-column display" id="DataTable">
                <thead>
                        <tr>
                          <th><input type="checkbox" class="selectall"></th>

                            <th><?=__('sno_txt')?></th>
                            <?php
                                if(isset($cols)):
                                    foreach($cols as $col):
                                      if($col->is_allowed==1):
                                      if( isset($col->column_name) && $col->column_name=='user_id'){
                                      continue;
                                      }elseif( isset($col->column_name) && $col->column_name=='lab_id'){
                                       continue;
                                      }else{

                                        ?>

                                        <th><?= $col->column_name; ?></th>
                                        <?php
                                        }
                                      endif;
                                    endforeach;
                                endif;

                            ?>

                            <th><?=__('actions_txt')?></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
              </div>
              <div class="clearfix">
              </div>
            </div>

          </div>

        </div>

      </div>

    </div>



<!-- ViewModal -->
<div class="modal fade" id="ViewModal" tabindex="0" role="dialog" aria-labelledby="statusModalTitle" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="statusModalTitle"><?=__('view_detail_txt');?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body view_storage_">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><?=__('close_txt');?></button>
        </div>
  </div>
</div>
</div>


<!-- ManageTableModal -->
<div class="modal fade" id="ManageOrderTable" tabindex="0" role="dialog" aria-labelledby="statusModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="statusModalTitle"><?=__('manage_table_txt')?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form" action="<?=site_url('manage_storage_table')?>" method="post">

          <div class="modal-body view_managetable_">

          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success"><?=__('submit_txt')?></button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><?=__('close_txt')?></button>
          </div>
        </form>
    </div>
  </div>
</div>
