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
                <input type="hidden" class="status" value="<?=$status?>">

                <a href="javascript:void(0)" class="btn btn-sm btn-outline-info multi_checkbox_btn" data="deactive" style=" float:right; "><i class="ft-user-minus"></i> <?=__('deactive_status_txt')?> </a>
                <a href="javascript:void(0)" class="btn btn-sm btn-outline-danger multi_checkbox_btn mr-2" data="delete" style=" float:right; "><i class='icon-trash'></i> <?=__('delete_txt')?> </a>
                <!-- <a href='".site_url('edit_user/'.hashids_encrypt(@$v->user_id)).'' class='btn small-btn' ></a> -->

                <button class="btn btn-info expo">Export</button>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover table-checkable order-column display checkboxeshere" id="DataTable" style="width:100%">
                      <thead>
                          <tr>
                              <th><input type="checkbox" class="selectall"></th>
                              <th width="100px"><?=__('sno_txt')?></th>
                              <th><?=__('username_txt')?> </th>
                              <th><?=__('title_txt')?> </th>
                              <th><?=__('first_name_txt')?> </th>
                              <th><?=__('middle_name_txt')?> </th>
                              <th><?=__('family_last_name_txt')?> </th>
                              <th><?=__('gender_txt')?> </th>
                              <th><?=__('nationality_txt')?> </th>
                              <th><?=__('active_txt')?></th>
                              <?php if ($this->session->userdata('is_user_a_to_d') == 'yes' || $this->session->userdata('is_user_va') == 'yes' || $this->session->userdata('is_user_ad') == 'yes'): ?>

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

  
