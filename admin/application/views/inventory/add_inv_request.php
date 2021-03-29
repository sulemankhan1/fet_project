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
                        <form class="form" action="<?=base_url();?>create_inv_request" method="post" enctype="multipart/form-data">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 mb-1 mt-3">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('select_lab_inv')?> *</label>
                                            
                                            <select class="form-control" name="lab_id" required>
                                              <option value=""><?=__('select_lab_inv')?></option>
                                              <?php

                                                 if( isset($labs) ){

                                                    foreach ($labs as $lab) {
                                                       ?>

                                                           <option value="<?= $lab->lab_id ?>" <?= @$_POST['lab_id']==$lab->lab_id?'selected':'' ?>><?= $lab->lab_name ?></option>

                                                       <?php
                                                    }

                                                 }

                                              ?>

                                            </select>

                                        </fieldset>
                                        <span style="color: red"><?php echo form_error('lab_id'); ?></span>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('lab_location')?> *</label>
                                            <input type="text" name="location_in_lab" class="form-control" placeholder="<?=__('enter_lab_location')?>" value="<?= set_value('location_in_lab') ?>" required>
                                        </fieldset>
                                        <span style="color: red"><?php echo form_error('location_in_lab'); ?></span>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('sub_lab_location')?> *</label>
                                            <input type="text" name="sub_location_in_lab" class="form-control"  placeholder="<?=__('enter_sub_lab_location')?>" value="<?= set_value('sub_location_in_lab') ?>" required>
                                        </fieldset>
                                        <span style="color: red"><?php echo form_error('sub_location_in_lab'); ?></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('from_date_txt')?> *</label>
                                            <input type="date" name="from_date" class="form-control" value="<?= set_value('from_date') ?>" required>
                                        </fieldset>
                                        <span style="color: red"><?php echo form_error('from_date'); ?></span>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('to_date_txt')?> *</label>
                                            <input type="date" name="to_date" class="form-control" value="<?= set_value('to_date') ?>" required>
                                        </fieldset>
                                        <span style="color: red"><?php echo form_error('to_date'); ?></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('type_inv')?> *</label>
                                            <input type="text" name="type" class="form-control" placeholder="<?= __('enter_type_inv') ?>" value="<?= set_value('type') ?>" required>
                                        </fieldset>
                                        <span style="color: red"><?php echo form_error('type'); ?></span>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('vender_inv')?> *</label>
                                            <input type="text" name="vender" class="form-control" placeholder="<?= __('enter_vender_inv') ?>" value="<?= set_value('vender') ?>" required>
                                        </fieldset>
                                        <span style="color: red"><?php echo form_error('vender'); ?></span>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('item_inv')?> *</label>
                                            <input type="text" name="item_name" class="form-control" placeholder="<?= __('enter_item_inv') ?>" value="<?= set_value('item_name') ?>" required>
                                        </fieldset>
                                        <span style="color: red"><?php echo form_error('item_name'); ?></span>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('catalog_inv')?> *</label>
                                            <input type="number" placeholder="<?=__('enter_catalog_inv')?>" name="catolog_number" class="form-control" value="<?= set_value('catolog_number') ?>" required>
                                        </fieldset>
                                        <span style="color: red"><?php echo form_error('catolog_number'); ?></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('lot_no')?> *</label>
                                            <input type="number" name="lot_number" class="form-control" placeholder="<?= __('enter_lot_no') ?>" value="<?= set_value('lot_number') ?>" required>
                                        </fieldset>
                                        <span style="color: red"><?php echo form_error('lot_number'); ?></span>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('registry_number')?> *</label>
                                            <input type="number" placeholder="<?=__('enter_registry_number')?>" name="registry_number" class="form-control" value="<?= set_value('registry_number') ?>" required>
                                        </fieldset>
                                        <span style="color: red"><?php echo form_error('registry_number'); ?></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('item_url')?> *</label>
                                            <input type="text" name="item_url" class="form-control" placeholder="<?= __('enter_url') ?>" value="<?= set_value('item_url') ?>" required>
                                        </fieldset>
                                        <span style="color: red"><?php echo form_error('item_url'); ?></span>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('unit')?> *</label>
                                            <input type="number" placeholder="<?=__('enter_unit')?>" name="unit" class="form-control" value="<?= set_value('unit') ?>" required>
                                        </fieldset>
                                        <span style="color: red"><?php echo form_error('unit'); ?></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('qty')?> *</label>
                                            <input type="number" name="qty" class="form-control" placeholder="<?= __('enter_qty') ?>" value="<?= set_value('qty') ?>" required>
                                        </fieldset>
                                        <span style="color: red"><?php echo form_error('qty'); ?></span>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('exp_date')?> *</label>
                                            <input type="date" placeholder="<?=__('enter_date')?>" name="exp_date" class="form-control" value="<?= set_value('exp_date') ?>" required>
                                        </fieldset>
                                        <span style="color: red"><?php echo form_error('exp_date'); ?></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('invoice_number')?> *</label>
                                            <input type="number" name="invoice_number" class="form-control" placeholder="<?= __('enter_invoice_number') ?>" value="<?= set_value('invoice_number') ?>" required>
                                        </fieldset>
                                        <span style="color: red"><?php echo form_error('invoice_number'); ?></span>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('po')?> *</label>
                                            <input type="text" placeholder="<?=__('enter_po')?>" name="po" class="form-control" value="<?= set_value('po') ?>" required>
                                        </fieldset>
                                        <span style="color: red"><?php echo form_error('po'); ?></span>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('notes_txt')?> *</label>
                                            <textarea name="note" class="form-control" rows="8" cols="80" required><?= set_value('note') ?></textarea>
                                        </fieldset>
                                        <span style="color: red"><?php echo form_error('note'); ?></span>
                                    </div>
                                </div>





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

          
