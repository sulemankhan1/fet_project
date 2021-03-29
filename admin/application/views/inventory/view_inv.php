<!--Basic User Details Starts-->
<section id="user-profile">
  <div class="row">
    <div class="col-12">
      <div class="card profile-with-cover">
        <div class="card-img-top img-fluid bg-cover height-50"></div>
        <div class="profil-cover-details row">
          <div class="col-md-1"></div>

          <div class="col-md-10 text-center">
              <a class="profile-image">

                  <img src="<?=base_url('app-assets/images/order-view-image.png')?>" width="200" class="text align-middle img-border width-100" />

              </a>
          </div>
          <div class="col-md-1">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Basic User Details Ends-->

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
          <h5><?=__('details_txt')?></h5>
        </div>
        <div class="card-content">
          <div class="card-body">
            <hr>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-aperture font-small-3"></i> <?=__('college_name_txt')?>:</a></span>
                    <span class="d-block overflow-hidden"><?=$row->colg_name?></span>
                  </li>
                </ul>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">

                    <span class="text-bold-500 primary"><a><i class="ft-crosshair font-small-3"></i> <?=__('depart_name_txt')?>:</a></span>
                    <span class="d-block overflow-hidden"><?=$row->depart_name?></span>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">

                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-user font-small-3"></i> <?=__('lab_name_txt')?>:</a></span>
                    <span class="d-block overflow-hidden"><?=$row->lab_name?></span>
                  </li>

                </ul>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-calendar font-small-3"></i> <?=__('lab_location')?>:</a></span>
                    <span class="d-block overflow-hidden"><?=$row->location_in_lab;?></span>
                  </li>
                </ul>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-inbox font-small-3"></i> <?=__('sub_lab_location')?>:</a></span>
                    <a class="d-block overflow-hidden"><?=$row->sub_location_in_lab?></a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-inbox font-small-3"></i> <?=__('type_inv')?>:</a></span>
                    <a class="d-block overflow-hidden"><?=$row->type?></a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-inbox font-small-3"></i> <?=__('vender_inv')?>:</a></span>
                    <a class="d-block overflow-hidden"><?=$row->vender?></a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-inbox font-small-3"></i> <?=__('item_inv')?>:</a></span>
                    <a class="d-block overflow-hidden"><?=$row->item_name?></a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-inbox font-small-3"></i> <?=__('catalog_inv')?>:</a></span>
                    <a class="d-block overflow-hidden"><?=$row->catalog_number?></a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-inbox font-small-3"></i> <?=__('lot_no')?>:</a></span>
                    <a class="d-block overflow-hidden"><?=$row->lot_number?></a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-inbox font-small-3"></i> <?=__('registry_number')?>:</a></span>
                    <a class="d-block overflow-hidden"><?=$row->registry_number?></a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-inbox font-small-3"></i> <?=__('item_url')?>:</a></span>
                    <a class="d-block overflow-hidden"><?=$row->item_url?></a>
                  </li>
                </ul>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-inbox font-small-3"></i> <?=__('unit')?>:</a></span>
                    <a class="d-block overflow-hidden"><?=$row->item_url?></a>
                  </li>
                </ul>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-inbox font-small-3"></i> <?=__('qty')?>:</a></span>
                    <a class="d-block overflow-hidden"><?=$row->qty?></a>
                  </li>
                </ul>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-inbox font-small-3"></i> <?=__('exp_date')?>:</a></span>
                    <a class="d-block overflow-hidden"><?=$row->exp_date?></a>
                  </li>
                </ul>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-inbox font-small-3"></i> <?=__('invoice_number')?>:</a></span>
                    <a class="d-block overflow-hidden"><?=$row->invoice_no?></a>
                  </li>
                </ul>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-inbox font-small-3"></i> <?=__('po')?>:</a></span>
                    <a class="d-block overflow-hidden"><?=$row->po?></a>
                  </li>
                </ul>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-inbox font-small-3"></i> <?=__('detail')?>:</a></span>
                    <a class="d-block overflow-hidden"><?=$row->details?></a>
                  </li>
                </ul>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <ul class="no-list-style">
                  <li class="mb-2">
                    <span class="text-bold-500 primary"><a><i class="ft-inbox font-small-3"></i> <?=__('notes_txt')?>:</a></span>
                    <a class="d-block overflow-hidden"><?=$row->note?></a>
                  </li>
                </ul>
              </div>


            </div>

          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5><?=__('attachments_txt');?></h5>
        </div>
        <div class="card-content">
          <div class="card-body">
            <hr>
              <div class="row">
                <div class="col-md-12 p-4">

                  <div class="row">

                    <?php if (@count($files) > 0): ?>

                        <?php $i=1; foreach ($files as $v): ?>

                        <div class="col-xl-4 col-lg-6 col-12">
                          <p><?=$i.'.'.$v->file_name?></p>
                          <div class="card p-2" style="border: 1px solid #1cbcd8;">
                            <div class="card-content">
                              <div class="">
                                <div class="media">
                                  <div class="media-body text-left" style="width:79%">

                                    <span><?=$v->img?></span>
                                  </div>
                                  <div class="media-right align-self-center">
                                    <a href="<?=site_url('download_chemical_inv_attachment/'.hashids_encrypt($v->id))?>"><i class="icon-arrow-down info font-large-2 float-right"></i></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      <?php $i++; endforeach; ?>

                      <?php else: ?>
                        <div class="col-xl-12 col-lg-12 col-12 text-primary">
                            <h5><?=__('no_attachment_found_txt');?></h5>
                        </div>
                    <?php endif; ?>
                  </diV>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-12">
        <div class="card">
          <div class="card-header" style="padding:none!important;">
            <h5><?=__('barcode_txt')?></h5>
          </div>
          <div class="card-content">
            <div class="card-body">
              <hr>
              <div class="row mb-3">

                <?php if ($row->barcode != ''): ?>

                  <div class="col-6 col-md-4 col-lg-4"  id="DivIdToPrint">

                    <?php if (@getimagesize(base_url('uploads/barcodes/'.$row->barcode))): ?>

                      <img src="<?=base_url('uploads/barcodes/'.$row->barcode)?>" width="150">

                        <?php else: ?>

                      <img src="<?=base_url('app-assets/images/no-image-available.png')?>" width="150">

                    <?php endif; ?>

                  </div>
                  <div class="col-6 col-md-6 col-lg-6">

                    <div class="row mt-2">

                      <div class="col-md-12">

                        <span class="text-info"><?=__('click_to_print_barcode_txt')?> </span>

                      </div>

                      <div class="col-md-12">

                        <a href="javascript:void(0)" class="print_barcode" data="<?=$row->barcode?>"> <i class="icon-cloud-download info font-large-2"></i></a>

                      </div>

                    </div>


                  </div>

                <?php else: ?>

                  <div class="col-xl-12 col-lg-12 col-12 text-primary">
                      <h5><?=__('no_barcode_found_txt')?></h5>
                  </div>

              <?php endif; ?>

              </div>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!--About section ends-->
