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

                <?php if($this->session->flashdata('response') == 'success') { ?>

                  <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?=$this->session->flashdata('msg')?>
                  </div>

                <?php } ?>
              <button class="btn btn-info expo">Export</button>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover table-checkable order-column display" id="DataTable">
                      <thead>
                          <tr>
                              <th><input type="checkbox" class="selectall"></th>
                              <th><?=__('sno_txt')?></th>
                              <th><?=__('college_txt')?></th>
                              <th><?=__('depart_number_txt')?></th>
                              <th><?=__('depart_name_txt')?></th>
                              <th><?=__('description_txt')?></th>
                              <th><?=__('date_txt')?></th>

                              <?php if ($this->session->userdata('is_depart_e') == 'yes' || $this->session->userdata('is_depart_d') == 'yes' || $this->session->userdata('is_depart_v') == 'yes'): ?>

                                <th><?=__('actions_txt')?></th>

                              <?php endif; ?>

                          </tr>

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
          <div class="modal-body view_departments">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><?=__('close_txt');?></button>
          </div>
    </div>
  </div>
</div>
