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

              <div class="card-block mcontainer">

                <?php if($this->session->flashdata('response') == 'success') { ?>

                  <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?=$this->session->flashdata('msg')?>
                  </div>

                <?php } ?>

                <button class="btn btn-info expo">Export</button>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover table-checkable order-column display" id="DataTable" style="width:100%">
                      <thead>
                          <tr>
                            <th><input type="checkbox" class="selectall"></th>
                              <th width="100px"><?=__('sno_txt')?></th>
                              <th><?=__('college_txt')?></th>
                              <th><?=__('depart_name_txt')?></th>
                              <th><?=__('lab_number_txt')?></th>
                              <th><?=__('lab_name_txt')?></th>
                              <th><?=__('description_txt')?></th>
                              <th><?=__('date_txt')?></th>

                              <?php if ($this->session->userdata('is_lab_e') == 'yes' || $this->session->userdata('is_lab_d') == 'yes'): ?>

                                <th width="150px"><?=__('actions_txt')?></th>

                              <?php endif; ?>

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
