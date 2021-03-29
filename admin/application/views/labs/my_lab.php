
<div class="main-content">

  <div class="content-wrapper"><!--Statistics cards Starts-->

      <div class="row">

        <div class="col-sm-12">

          <div class="card">

            <div class="card-header">

              <h4 class="card-title"><?=$title?> </h4>
            </div> <br>
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


                <!--About section starts-->
                <section id="about">
                  <div class="row">
                    <div class="col-12">
                      <div class="content-header"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card">
                        <div class="card-header" style="padding:none!important;">
                          <h4><?=__('lab_detail_txt')?></h4>
                        </div>
                        <div class="card-content">
                          <div class="card-body">
                            <div class="row">

                              <div class="col-12 col-md-6 col-lg-4">
                                <ul class="no-list-style">
                                  <li class="mb-2">
                                    <span class="text-bold-500 primary"><a><i class="ft-aperture font-small-3"></i> <?=__('college_txt')?>:</a></span>
                                    <span class="d-block overflow-hidden"><?=@$my_lab->colg_name?></span>
                                  </li>
                                </ul>
                              </div>

                              <div class="col-12 col-md-6 col-lg-4">
                                <ul class="no-list-style">
                                  <li class="mb-2">
                                    <span class="text-bold-500 primary"><a><i class="ft-hash font-small-3"></i> <?=__('lab_number_txt')?>:</a></span>
                                    <span class="d-block overflow-hidden"><?=@$my_lab->lab_numb?></span>
                                  </li>
                                </ul>
                              </div>

                              <div class="col-12 col-md-6 col-lg-4">
                                <ul class="no-list-style">

                                  <li class="mb-2">
                                    <span class="text-bold-500 primary"><a><i class="ft-cpu font-small-3"></i> <?=__('lab_name_txt')?>:</a></span>
                                    <span class="d-block overflow-hidden"><span class="badge badge-success text-white"><?=@$my_lab->lab_name?></span></span>
                                  </li>

                                </ul>
                              </div>

                              <div class="col-12 col-md-6 col-lg-4">
                                <ul class="no-list-style">
                                  <li class="mb-2">
                                    <span class="text-bold-500 primary"><a><i class="ft-book font-small-3"></i> <?=__('lab_description_txt')?>:</a></span>
                                    <span class="d-block overflow-hidden"><?=@$my_lab->lab_description?></span>
                                  </li>
                                </ul>
                              </div>

                              <div class="col-12 col-md-6 col-lg-4">
                                <ul class="no-list-style">
                                  <li class="mb-2">
                                    <span class="text-bold-500 primary"><a><i class="ft-hash font-small-3"></i> <?=__('depart_number_txt')?>:</a></span>
                                    <span class="d-block overflow-hidden"><?=@$my_lab->depart_numb?></span>
                                  </li>
                                </ul>
                              </div>

                              <div class="col-12 col-md-6 col-lg-4">
                                <ul class="no-list-style">
                                  <li class="mb-2">
                                    <span class="text-bold-500 primary"><a><i class="ft-sitemap font-small-3"></i> <?=__('depart_name_txt')?>:</a></span>
                                    <span class="d-block overflow-hidden"><?=@$my_lab->depart_name?></span>
                                  </li>
                                </ul>
                              </div>


                              <div class="col-12 col-md-6 col-lg-4">
                                <ul class="no-list-style">
                                  <li class="mb-2">
                                    <span class="text-bold-500 primary"><a><i class="ft-book font-small-3"></i> <?=__('depart_description_txt')?>:</a></span>
                                    <a class="d-block overflow-hidden"><?=@$my_lab->depart_description?></a>
                                  </li>
                                </ul>
                              </div>

                            </div>

                          </div>
                        </div>
                      </div>
                    </div>



                    </div>
                </section>

                <!--About section ends-->

                <hr>

              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-checkable order-column display" id="DataTable" style="width:100%">
                    <thead>
                        <tr>
                            <th width="100px"><?=__('sno_txt')?></th>
                            <?php if ($this->session->userdata('machine_table')->machine_barcode == 'yes'): ?>

                            <th ><?=__('barcode_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->machine_serial == 'yes'): ?>


                            <th><?=__('machine_serial_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->machine_numb == 'yes'): ?>

                            <th><?=__('machine_number_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->machine_name == 'yes'): ?>

                            <th><?=__('machine_name_txt')?></th>

                            <?php endif; ?>
                            <?php //if ($this->session->userdata('machine_table')->colleg_name == 'yes'): ?>

                            <th><?=__('colleg_txt')?></th>

                            <?php //endif; ?>
                            <?php if ($this->session->userdata('machine_table')->depart_name == 'yes'): ?>

                            <th><?=__('depart_name_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->lab_name == 'yes'): ?>

                            <th><?=__('lab_name_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->maintenance_type == 'yes'): ?>

                            <th><?=__('maintenance_schedule_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->type_numb == 'yes'): ?>

                            <th><?=__('warranty_years_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->company == 'yes'): ?>

                            <th><?=__('company_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->model == 'yes'): ?>

                            <th><?=__('model_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->catalog_numb == 'yes'): ?>

                            <th><?=__('catalog_numb_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->voltage == 'yes'): ?>

                            <th><?=__('voltage_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->machine_status == 'yes'): ?>

                            <th><?=__('machine_status_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->software_info == 'yes'): ?>

                            <th><?=__('software_info_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->po_numb == 'yes'): ?>

                            <th><?=__('po_number_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->po_date == 'yes'): ?>

                            <th><?=__('po_date_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->po_price == 'yes'): ?>

                            <th><?=__('po_price_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->delivery_date == 'yes'): ?>

                            <th><?=__('delivery_date_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->operation_date == 'yes'): ?>

                            <th><?=__('operational_date_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->company_website == 'yes'): ?>

                            <th><?=__('company_website_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->local_agent_name == 'yes'): ?>

                            <th><?=__('name_of_local_agent_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->contacts == 'yes'): ?>

                            <th><?=__('contacts_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->local_agent_website == 'yes'): ?>

                            <th><?=__('local_agent_website_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->machine_username == 'yes'): ?>

                            <th><?=__('responsible_username_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->machine_type == 'yes'): ?>

                            <th><?=__('equipements_type_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->machine_description == 'yes'): ?>

                            <th><?=__('description_or_type_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('machine_table')->is_machine_active == 'yes'): ?>

                            <th><?=__('active_txt')?></th>

                            <?php endif; ?>
                            <?php if ($this->session->userdata('is_machine_e') == 'yes' || $this->session->userdata('is_machine_d') == 'yes' || $this->session->userdata('is_machine_v') == 'yes' || $this->session->userdata('is_maintenance_a') == 'yes'
                            || $this->session->userdata('is_usage_a') == 'yes'): ?>

                              <th><?=__('actions_txt')?> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>

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

  </div>

</div>

</div>

<!-- ViewModal -->
<div class="modal fade" id="ViewModal" tabindex="0" role="dialog" aria-labelledby="statusModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="statusModalTitle"><?=__('view_detail_txt')?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div class="modal-body view_machine_">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><?=__('close_txt')?></button>
          </div>
    </div>
  </div>
</div>

<!-- ManageTableModal -->
<div class="modal fade" id="ManageTableModal" tabindex="0" role="dialog" aria-labelledby="statusModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="statusModalTitle"><?=__('manage_table_txt')?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form" action="<?=site_url('manage_machine_table')?>" method="post">

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
