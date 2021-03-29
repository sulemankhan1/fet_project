<div class="main-content">
          <div class="content-wrapper"><!-- Basic Elements start -->
<section class="basic-elements">
    <div class="row">
        <?php
           if($this->session->flashdata('success')){
            ?>

            <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
            </div>


            <?php
           }

        ?>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0"><?=$title;?></h4>
                </div>
                <div class="card-body">
                    <div class="px-3">
                        <form class="form" action="<?=site_url('update_inventory');?>" method="post" enctype="multipart/form-data">
                            <div class="form-body">
                                <div class="row mt-3">
                                    <div class="col-xl-12 col-lg-12 mb-1 mt-3">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('select_lab_inv')?> *</label>




                                            <select class="form-control" name="lab_id" required>
                                              <option value=""><?=__('select_lab_inv')?></option>
                                              <?php

                                                 if( isset($labs) ){

                                                    foreach ($labs as $lab) {
                                                       ?>

                                                           <option value="<?= $lab->lab_id ?>" <?= ($lab->lab_id==$inventory[0]->lab_id)?'selected':''?>><?= $lab->lab_name ?></option>

                                                       <?php
                                                    }

                                                 }

                                              ?>

                                            </select>

                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('lab_location')?> *</label>
                                            <input type="text" name="location_in_lab" class="form-control" placeholder="<?=__('enter_lab_location')?>" value="<?= set_value('location_in_lab',$inventory[0]->location_in_lab) ?>" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('sub_lab_location')?> *</label>
                                            <input type="text" name="sub_location_in_lab" class="form-control"  placeholder="<?=__('enter_sub_lab_location')?>" value="<?= set_value('sub_location_in_lab',$inventory[0]->sub_location_in_lab) ?>" required>
                                        </fieldset>
                                    </div>


                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('type_inv')?> *</label>
                                            <input type="text" name="type" class="form-control" placeholder="<?= __('enter_type_inv') ?>" value="<?= set_value('type',$inventory[0]->type) ?>" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('vender_inv')?> *</label>
                                            <input type="text" name="vender" class="form-control" placeholder="<?= __('enter_vender_inv') ?>" value="<?= set_value('vender',$inventory[0]->vender) ?>" required>
                                        </fieldset>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('item_inv')?> *</label>
                                            <input type="text" name="item_name" class="form-control" placeholder="<?= __('enter_item_inv') ?>" value="<?= set_value('item_name',$inventory[0]->item_name) ?>" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('catalog_inv')?> *</label>
                                            <input type="number" placeholder="<?=__('enter_catalog_inv')?>" name="catalog_number" class="form-control" value="<?= set_value('catalog_number',$inventory[0]->catalog_number) ?>" required>
                                        </fieldset>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('lot_no')?> *</label>
                                            <input type="number" name="lot_number" class="form-control" placeholder="<?= __('enter_lot_no') ?>" value="<?= set_value('lot_number',$inventory[0]->lot_number) ?>" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('registry_number')?> *</label>
                                            <input type="number" placeholder="<?=__('enter_registry_number')?>" name="registry_number" class="form-control" value="<?= set_value('registry_number',$inventory[0]->registry_number) ?>" required>
                                        </fieldset>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('item_url')?> *</label>
                                            <input type="text" name="item_url" class="form-control" placeholder="<?= __('enter_url') ?>" value="<?= set_value('item_url',$inventory[0]->item_url) ?>" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('unit')?> *</label>
                                            <input type="text" placeholder="<?=__('enter_unit')?>" name="unit_size" class="form-control" value="<?= set_value('unit_size',$inventory[0]->unit_size) ?>" required>
                                        </fieldset>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('qty')?> *</label>
                                            <input type="number" name="qty" class="form-control" placeholder="<?= __('enter_qty') ?>" value="<?= set_value('qty',$inventory[0]->qty) ?>" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('exp_date')?> *</label>
                                            <input type="date" placeholder="<?=__('enter_date')?>" name="exp_date" class="form-control" value="<?= set_value('exp_date',$inventory[0]->exp_date) ?>" required>
                                        </fieldset>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('invoice_number')?> *</label>
                                            <input type="number" name="invoice_no" class="form-control" placeholder="<?= __('enter_invoice_number') ?>" value="<?= set_value('invoice_no',$inventory[0]->invoice_no) ?>" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('po')?> *</label>
                                            <input type="text" placeholder="<?=__('enter_po')?>" name="po" class="form-control" value="<?= set_value('po',$inventory[0]->po) ?>" required>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('detail')?> *</label>
                                            <textarea name="details" class="form-control" rows="8" cols="80" required><?= set_value('details',$inventory[0]->details) ?></textarea>
                                        </fieldset>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('notes_txt')?> *</label>
                                            <textarea name="note" class="form-control" rows="8" cols="80" required><?= set_value('note',$inventory[0]->note) ?></textarea>
                                        </fieldset>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 mb-1 mt-1">
                                      <h4><?=__('attachments_txt')?></h4>
                                    </div>

                                    <div class="col-lg-1 col-md-1">
                                      <button type="button" name="button" class="btn btn-outline-primary btn-sm mt-1 add_more_files"><i class="ft-plus-circle"></i> <?=__('click_to_add_attach_txt')?></button>
                                    </div>



                                    <div class="col-xl-12 col-lg-12 add_more_files_fields">
                                      <?php if (@count(@$files) > 0): ?>

                                      <?php foreach ($files as $key => $v): ?>
                                        <div class="row">

                                            <div class="col-xl-5 col-lg-5 mb-2">
                                              <fieldset class="form-group">
                                                <label for="basicInput"><?=__('fil_name_txt')?> *</label>
                                                <input type="text" class="form-control" required="" value="<?=$v->file_name?>" name="file_label[]">
                                              </fieldset>
                                            </div>

                                            <div class="col-lg-6 col-md-6 mb-2">
                                                <label for="file"><?=__('upload_file_text')?></label>
                                                <div class="input-group mb-3">
                                                  <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupFileAddon01"><?=__('upload_txt')?></span>
                                                  </div>
                                                  <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                      aria-describedby="inputGroupFileAddon01" name="attachments[]">
                                                      <input type="hidden" name="attachments_old[]" value="<?=$v->img?>">
                                                    <label class="custom-file-label" for="inputGroupFile01"><?=$v->img?></label>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-1 text-danger">
                                            <i class="ft-x remove_attach" style="cursor:pointer;"></i>
                                            </div>
                                        </div>

                                      <?php endforeach; ?>
                                    <?php endif; ?>
                                    </div>

                                </div>


                              

                                 <input type="hidden" name="id" value="<?= set_value('id',hashids_encrypt($inventory[0]->id)) ?>">

                                <div class="form-actions">
                                <button type="Submit" class="btn btn-raised btn-primary"><i class="ft-check position-right"></i> <?=__('save_txt')?></button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
