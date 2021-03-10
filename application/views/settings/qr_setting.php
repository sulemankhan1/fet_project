<style media="screen">
  td {
    text-align: center!important;
  }
  th {
    width: 90%!important;
  }
</style>
<div class="main-content">
          <div class="content-wrapper"><!-- Basic Elements start -->
<section class="basic-elements">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0"><?=$title?></h4>
                </div> <br>
                <div class="card-body">
                    <div class="px-3">
                        <form class="form" method="post" action="<?=base_url();?>manage_qr_table">
                            <div class="form-body">
                                <div class="row">
                                  <div class="col-md-12">

                                    <?php if($this->session->flashdata('response') == 'success') { ?>

                                      <div class="alert alert-success alert-dismissible">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <?=$this->session->flashdata('msg')?>
                                      </div>

                                    <?php } ?>


                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xl-12 col-lg-12 col-md-12 mb-1">
                                    <!-- <h3><=__('permission_qr_text')?></h3> -->
                                    <table class="table table-bordered">



                                        <tr>
                                          <th><?=__('barcode_txt')?></th>
                                          <td><input type="checkbox" name="machine_barcode" value="yes" <?=@($row->machine_barcode == "yes")?'checked':''?>></td>
                                          </tr>
                                          <tr>
                                          <th><?=__('machine_serial_txt')?></th>
                                          <td><input type="checkbox" name="machine_serial" value="yes" <?=@($row->machine_serial == "yes")?'checked':''?>></td>
                                        </tr>


                                        <tr>
                                          <th><?=__('machine_number_txt')?></th>
                                          <td><input type="checkbox" name="machine_numb" value="yes" <?=@($row->machine_numb == "yes")?'checked':''?>></td>
                                          </tr>

                                          <tr>

                                          <th><?=__('machine_name_txt')?></th>
                                          <td><input type="checkbox" name="machine_name" value="yes" <?=@($row->machine_name == "yes")?'checked':''?>></td>
                                        </tr>

                                        <tr>
                                          <th><?=__('description_or_type_txt')?></th>
                                          <td><input type="checkbox" name="machine_description" value="yes" <?=@($row->machine_description == "yes")?'checked':''?>></td>
                                          </tr>


                                        <tr>
                                          <th><?=__('warranty_years_txt')?></th>
                                          <td><input type="checkbox" name="type_numb" value="yes" <?=@($row->type_numb == "yes")?'checked':''?>></td>
                                          </tr>

                                          <tr>


                                          <th><?=__('company_txt')?></th>
                                          <td><input type="checkbox" name="company" value="yes" <?=@($row->company == "yes")?'checked':''?>></td>
                                        </tr>

                                        <tr>
                                          <th><?=__('model_txt')?></th>
                                          <td><input type="checkbox" name="model" value="yes" <?=@($row->model == "yes")?'checked':''?>></td>
                                          </tr>

                                          <tr>

                                          <th><?=__('catalog_numb_txt')?></th>
                                          <td><input type="checkbox" name="catalog_numb" value="yes" <?=@($row->catalog_numb == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('voltage_txt')?></th>
                                          <td><input type="checkbox" name="voltage" value="yes" <?=@($row->voltage == "yes")?'checked':''?>></td>
                                          </tr>

                                          <tr>


                                          <th><?=__('machine_status_txt')?></th>
                                          <td><input type="checkbox" name="machine_status" value="yes" <?=@($row->machine_status == "yes")?'checked':''?>></td>
                                        </tr>



                                          <tr>

                                          <th><?=__('po_number_txt')?></th>
                                          <td><input type="checkbox" name="po_numb" value="yes" <?=@($row->po_numb == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('po_date_txt')?></th>
                                          <td><input type="checkbox" name="po_date" value="yes" <?=@($row->po_date == "yes")?'checked':''?>></td>
                                          </tr>

                                          <tr>

                                          <th><?=__('po_price_txt')?></th>
                                          <td><input type="checkbox" name="po_price" value="yes" <?=@($row->po_price == "yes")?'checked':''?>></td>
                                        </tr>



                                        <tr>
                                          <th><?=__('company_website_txt')?></th>
                                          <td><input type="checkbox" name="company_website" value="yes" <?=@($row->company_website == "yes")?'checked':''?>></td>
                                          </tr>



                                          <tr>

                                          <th><?=__('name_of_local_agent_txt')?></th>
                                          <td><input type="checkbox" name="local_agent_website" value="yes" <?=@($row->local_agent_website == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('responsible_username_txt')?></th>
                                          <td><input type="checkbox" name="machine_username" value="yes" <?=@($row->machine_username == "yes")?'checked':''?>></td>
                                          </tr>

                                          <tr>

                                          <th><?=__('equipements_type_txt')?></th>
                                          <td><input type="checkbox" name="machine_type" value="yes" <?=@($row->machine_type == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('active_txt')?></th>
                                          <td><input type="checkbox" name="is_machine_active" value="yes" <?=@($row->is_machine_active == "yes")?'checked':''?>></td>
                                          </tr>

                                          <tr>

                                          <th><?=__('depart_name_txt')?></th>
                                          <td><input type="checkbox" name="depart_name" value="yes" <?=@($row->depart_name == "yes")?'checked':''?>></td>
                                        </tr>
                                        <tr>
                                          <th><?=__('lab_name_txt')?></th>
                                          <td><input type="checkbox" name="lab_name" value="yes" <?=@($row->lab_name == "yes")?'checked':''?>></td>
                                        </tr>

                                    </table>
                                  </div>
                                </div>



                                <div class="form-actions">
                                <div class="text-right">
                                    <button type="Submit" class="btn btn-raised btn-primary"><?=__('save_txt')?> <i class="ft-check position-right"></i></button>
                                    <button type="reset" class="btn btn-raised btn-warning"><?=__('reset_txt')?> <i class="ft-refresh-cw position-right"></i></button>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

          
