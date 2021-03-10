<div class="main-content">
          <div class="content-wrapper"><!-- Basic Elements start -->
<section class="basic-elements">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0"><?=$title;?></h4>
                </div>
                <div class="card-body">
                    <div class="px-3">
                        <form class="form" action="<?=site_url('create_inventory');?>" method="post" enctype="multipart/form-data">
                            <div class="form-body">
                                  <div class="row mt-3">

                                    <div class="col-xl-12 col-lg-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('select_lab_inv')?> *</label>

                                            <select class="form-control" name="lab" required>

                                              <option value=""><?=__('select_lab_inv')?></option>

                                              <?php foreach ($labs as $v): ?>

                                                <option value="<?= $v->lab_id ?>"><?= $v->lab_name ?></option>

                                              <?php endforeach; ?>

                                            </select>

                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('lab_location')?> *</label>
                                            <input type="text" name="lab_location" class="form-control" placeholder="<?=__('enter_lab_location')?>" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('sub_lab_location')?> *</label>
                                            <input type="text" name="sub_lab_location" class="form-control"  placeholder="<?=__('enter_sub_lab_location')?>" required>
                                        </fieldset>
                                    </div>


                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('type_inv')?> *</label>
                                            <input type="text" name="type" class="form-control" placeholder="<?= __('enter_type_inv') ?>" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('vender_inv')?> *</label>
                                            <input type="text" name="vender" class="form-control" placeholder="<?= __('enter_vender_inv') ?>" required>
                                        </fieldset>
                                    </div>


                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('item_inv')?> *</label>
                                            <input type="text" name="item_name" class="form-control" placeholder="<?= __('enter_item_inv') ?>" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('catalog_inv')?> *</label>
                                            <input type="number" placeholder="<?=__('enter_catalog_inv')?>" name="catalog_no" class="form-control" required>
                                        </fieldset>
                                    </div>


                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('lot_no')?> *</label>
                                            <input type="number" name="lot_no" class="form-control" placeholder="<?= __('enter_lot_no') ?>" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('registry_number')?> *</label>
                                            <input type="number" placeholder="<?=__('enter_registry_number')?>" name="registry_no" class="form-control" required>
                                        </fieldset>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('item_url')?> *</label>
                                            <input type="text" name="item_url" class="form-control" placeholder="<?= __('enter_url') ?>" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('unit')?> *</label>
                                            <input type="number" placeholder="<?=__('enter_unit')?>" name="unit" class="form-control" required>
                                        </fieldset>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('qty')?> *</label>
                                            <input type="number" name="qty" class="form-control" placeholder="<?= __('enter_qty') ?>" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('exp_date')?> *</label>
                                            <input type="date" placeholder="<?=__('enter_date')?>" name="exp_date" class="form-control" required>
                                        </fieldset>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('invoice_number')?> *</label>
                                            <input type="number" name="invoice_number" class="form-control" placeholder="<?= __('enter_invoice_number') ?>" required>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('po')?> *</label>
                                            <input type="text" placeholder="<?=__('enter_po')?>" name="po" class="form-control" required>
                                        </fieldset>
                                    </div>

                                  </div>
                                  <div class="row">

                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('detail')?> *</label>
                                            <textarea name="detail" class="form-control" rows="8" cols="80" required></textarea>
                                        </fieldset>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('notes_txt')?> *</label>
                                            <textarea name="inv_notes" class="form-control" rows="8" cols="80" required></textarea>
                                        </fieldset>
                                    </div>

                                  </div>

                                <div class="row">
                                  <div class="col-xl-12 col-lg-12 mb-1 mt-1">
                                    <h4><?=__('attachments_txt')?></h4>
                                  </div>

                                  <div class="col-lg-1 col-md-1">
                                    <button type="button" name="button" class="btn btn-outline-primary btn-sm mt-1 add_more_files"><i class="ft-plus-circle"></i> <?=__('click_to_add_attach_txt')?></button>
                                  </div>



                                  <div class="col-xl-12 col-lg-12 add_more_files_fields">

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
