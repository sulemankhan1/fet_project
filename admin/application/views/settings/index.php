<style type="text/css">
  .change_sidebar_clr:hover{
      cursor: pointer;
  }
  @media (min-width: 992px) {
    .main-panel .main-content {
      padding-left : 250px;
   }
 }
</style>

<link rel="stylesheet" type="text/css" href="<?=base_url('app-assets/css/settings.css');?>">

    <section class="basic-elements">
    <div class="row">
      <div class="col-md-12">
        <div class="card" style="height: 271.312px;">
        <div class="card-header">
          <h4 class="card-title">SETTINGS</h4>
          <p>Admin Panel and Front end Website Settings.</p>
        </div>
        <?php if($this->session->flashdata('response') == 'success') { ?>
          <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?=$this->session->flashdata('msg')?>
          </div>
        <?php } ?>
        <div class="card-content">
          <div class="card-body">
            <div class="nav-vertical">
              <ul class="nav nav-tabs nav-left">
                <li class="nav-item">
                  <a class="nav-link active" id="baseVerticalLeft2-tab1" data-toggle="tab" aria-controls="tabVerticalLeft21" href="#tabVerticalLeft21" aria-expanded="true"><i class="fa fa-wrench"></i> Admin Panel Settings</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="baseVerticalLeft2-tab2" data-toggle="tab" aria-controls="tabVerticalLeft22" href="#tabVerticalLeft22" aria-expanded="false"><i class="fa fa-eye"></i> Website Settings</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="baseVerticalLeft2-tab3" data-toggle="tab" aria-controls="tabVerticalLeft23" href="#tabVerticalLeft23" aria-expanded="false"><i class="fa fa-cogs"></i> General</a>
                </li>
              </ul>
              <div class="tab-content px-1">
                <!-- ADMIN PANEL SETTINGS PANEL STARTS -->
                <div role="tabpanel" class="tab-pane active" id="tabVerticalLeft21" aria-expanded="true" aria-labelledby="baseVerticalLeft2-tab1">
                  <div class="col-md-12">
                    <h4 class="card-title mt-2">Admin panel Settings</h4>
                    <form class="form" action="<?=site_url('save_settings');?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="type" value="general_setting">
                    <div class="row">
                      <div class="col-md-3">
                          <fieldset class="form-group">
                              <label for="basicInput"> Current Logo</label><br>
                              <?php if (@getimagesize('uploads/sidebar_logo/'.$logo->value)): ?>
                                <img src="<?=base_url('uploads/sidebar_logo/'.$logo->value)?>" class="img img-thumbnail" style="max-height: 125px;max-width: 215px;">
                                  <?php else: ?>
                                <img src="<?=base_url('app-assets/images/no-image-available.png')?>" class="img img-thumbnail" style="max-height: 125px;max-width: 215px;">
                              <?php endif; ?>
                          </fieldset>
                          <fieldset class="form-group">
                              <label for="basicInput"> Change Logo</label>
                              <input type="file" class="form-control" name="logo">
                          </fieldset>
                      </div>
                      <div class="col-md-4">
                          <fieldset class="form-group">
                              <label for="basicInput"> Current Sidebar Background Image</label><br>

                              <?php if (@getimagesize('uploads/sidebar_img/'.$sidebar_img->value)): ?>

                                <img src="<?=base_url('uploads/sidebar_img/'.$sidebar_img->value)?>" class="img img-thumbnail" style="max-height: 125px;max-width: 215px;">

                                  <?php else: ?>

                                <img src="<?=base_url('app-assets/images/no-image-available.png')?>" class="img img-thumbnail" style="max-height: 125px;max-width: 215px;">

                              <?php endif; ?>
                          </fieldset>
                          <fieldset class="form-group">
                              <label for="basicInput"> Change Sidebar Background Image</label>
                              <input type="file" class="form-control" name="sidebar_img">
                          </fieldset>
                      </div>

                      <div class="col-md-5">
                              <label for="basicInput"> Change Sidebar Color</label>

                        <div class="cz-bg-color sb-color-options">
                          <div class="row p-1">
                            <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="pomegranate" class="gradient-pomegranate d-block rounded-circle"></span></div>
                            <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="king-yna" class="gradient-king-yna d-block rounded-circle"></span></div>
                            <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="ibiza-sunset" class="gradient-ibiza-sunset d-block rounded-circle"></span></div>
                            <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="flickr" class="gradient-flickr d-block rounded-circle"></span></div>
                            <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="purple-bliss" class="gradient-purple-bliss d-block rounded-circle"></span></div>
                            <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="man-of-steel" class="gradient-man-of-steel d-block rounded-circle"></span></div>
                            <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="purple-love" class="gradient-purple-love d-block rounded-circle"></span></div>
                          </div>
                          <div class="row p-1">
                            <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="black" class="bg-black d-block rounded-circle"></span></div>
                            <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="white" class="bg-grey d-block rounded-circle"></span></div>
                            <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="primary" class="bg-primary d-block rounded-circle"></span></div>
                            <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="success" class="bg-success d-block rounded-circle"></span></div>
                            <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="warning" class="bg-warning d-block rounded-circle"></span></div>
                            <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="info" class="bg-info d-block rounded-circle"></span></div>
                            <div class="col change_sidebar_clr"><span style="width:20px; height:20px;" data-bg-color="danger" class="bg-danger d-block rounded-circle"></span></div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 mt-3">
                        <fieldset class="form-group">
                            <label for="basicInput"> System Name</label>
                            <input type="text" class="form-control" name="name" value="<?=@$name->value?>">
                        </fieldset>
                      </div>
                      <div class="col-md-6 mt-3">
                        <fieldset class="form-group">
                          <label for="basicInput"> Footer</label>
                          <input type="text" class="form-control" name="footer" value="<?=@$footer->value?>">
                        </fieldset>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <button type="Submit" class="btn btn-raised btn-primary float-right"> <i class="ft-check position-right"></i>  Save</button>
                    </div>
                    </form>
                  </div>
                </div>
                <!-- ADMIN PANEL SETTINGS PANEL ENDS -->
                <!-- WEBSITE SETTINGS PANEL STARTS -->
                <div class="tab-pane" id="tabVerticalLeft22" aria-labelledby="baseVerticalLeft2-tab2">
                  <div class="col-md-12">
                    <h4 class="card-title mt-2">Homepage Slider Settings</h4>
                    <a href="javascript:void(0)" class="btn btn-primary float-right" onclick="add_new_slide()">Add New Slide</a>
                    <div class="row" id="add_form_box">
                      <form class="form" action="<?=site_url('save_settings');?>" method="post" enctype="multipart/form-data">

                        <div class="row col-md-12">
                          <div class="col-md-6">
                              <fieldset class="form-group">
                                  <label for="basicInput"> Title</label>
                                  <input type="text" class="form-control" name="title[]" required>
                              </fieldset>
                          </div>
                          <div class="col-md-3">
                              <fieldset class="form-group">
                                  <label for="basicInput"> Title Color (optional)</label>
                                  <input type="color" class="form-control" name="title_color[]">
                              </fieldset>
                          </div>
                          <div class="col-md-3">
                            <fieldset class="form-group">
                                <label for="basicInput"> Title Link (optional)</label>
                                <input type="text" class="form-control" name="title_link[]">
                            </fieldset>
                          </div>

                          <div class="col-md-6">

                              <fieldset class="form-group">
                                  <label for="basicInput"> Slider Image</label>
                                  <input type="hidden" name="type" value="slider">
                                  <input type="file" class="form-control" name="slider_image[]" required>
                              </fieldset>
                          </div>
                          <div class="col-md-3">
                              <fieldset class="form-group">
                                  <label for="basicInput"> Description Color (optional)</label>
                                  <input type="color" class="form-control" name="description_color[]">
                              </fieldset>
                          </div>
                          <div class="col-md-3">
                              <fieldset class="form-group">
                                  <label for="basicInput"> Description Link (optional)</label>
                                  <input type="text" class="form-control" name="description_link[]">
                              </fieldset>
                          </div>
                          <div class="col-md-12">
                              <fieldset class="form-group">
                                  <label for="basicInput"> Description</label>
                                  <textarea name="description[]" class="form-control" cols="30" rows="6"></textarea>
                              </fieldset>
                          </div>
                        </div>
                      <!-- add-more-sliders-div -->
                      <div class="add_sliders"></div>

                      <div class="col-md-12">
                        <div class="float-left">
                          <p><i>*Add Multiple Slides at once by using Add More Option</i></p>
                        </div>
                        <button type="Submit" class="btn btn-raised btn-primary float-right"> <i class="ft-check position-right"></i>  Save</button>
                        <button type="button" class="btn btn-raised btn-default float-right mr-2 add-more-slider"> <i class="ft-plus circle"></i>  Add more</button>
                      </div>
                      </form>
                    </div>
                    <br>
                    <p>Current Slides</p>
                    <div class="sc_container">
                      <div class="row" id="view_sliders_">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- WEBSITE SETTINGS PANEL ENDS -->
                <!-- GENERAL PANEL STARTS -->
                <div class="tab-pane" id="tabVerticalLeft23" aria-labelledby="baseVerticalLeft2-tab3">
                  <div class="col-md-12">
                    <form class="form" action="<?=site_url('save_settings');?>" method="post">
                      <div class="row">
                        <div class="col-md-6">
                            <fieldset class="form-group">
                                <label for="basicInput"> New Accounts should by default :</label><br>
                                <input type="hidden" name="type" value="main_general_setting">
                                <input type="radio" name="account_active" id="actived1" value="active" <?=(@$account_activity->value == 'active'?'checked':'')?>>
                                <label for="actived1"> Active </label>
                                <input type="radio" id="actived2" name="account_active" value="pending" <?=(@$account_activity->value == 'pending'?'checked':'')?>>
                                <label for="actived2"> Pending</label>
                            </fieldset>
                        </div>
                      </div>
                      <div class="row">

                        <div class="col-md-12">
                          <button type="Submit" class="btn btn-raised btn-primary float-right">
                            <i class="ft-check position-right"></i>  Save
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- GENERAL SETTINGS PANEL ENDS -->
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>



  <!-- EditSliderModal -->
  <div class="modal fade " id="EditSliderModal" tabindex="0" role="dialog" aria-labelledby="statusModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document" style="min-width:850px !important; z-index: 9999">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="statusModalTitle">Edit Slider</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <form class="form" action="<?=site_url('update_slider');?>" method="post" enctype="multipart/form-data">
            <div class="modal-body edit_slider_">

            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success">Update</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </form>
      </div>
    </div>
  </div>

  <!-- add_sliders_row -->
  <div class="slider_row" style="display:none;">
    <hr>
    <div class="row col-md-12">
      <div class="col-md-6">
          <fieldset class="form-group">
              <label for="basicInput"> Title</label>
              <input type="text" class="form-control" name="title[]" required>
          </fieldset>
      </div>
      <div class="col-md-3">
          <fieldset class="form-group">
              <label for="basicInput"> Title Color (optional)</label>
              <input type="color" class="form-control" name="title_color[]">
          </fieldset>
      </div>
      <div class="col-md-3">
        <fieldset class="form-group">
            <label for="basicInput"> Title Link (optional)</label>
            <input type="text" class="form-control" name="title_link[]">
        </fieldset>
      </div>

      <div class="col-md-6">

          <fieldset class="form-group">
              <label for="basicInput"> Slider Image</label>
              <input type="hidden" name="type" value="slider">
              <input type="file" class="form-control" name="slider_image[]" required>
          </fieldset>
      </div>
      <div class="col-md-3">
          <fieldset class="form-group">
              <label for="basicInput"> Description Color (optional)</label>
              <input type="color" class="form-control" name="description_color[]">
          </fieldset>
      </div>
      <div class="col-md-3">
          <fieldset class="form-group">
              <label for="basicInput"> Description Link (optional)</label>
              <input type="text" class="form-control" name="description_link[]">
          </fieldset>
      </div>
      <div class="col-md-12">
          <fieldset class="form-group">
              <label for="basicInput"> Description</label>
              <textarea name="description[]" class="form-control" cols="30" rows="6"></textarea>
          </fieldset>
      </div>
    </div>
  </div>
<script>
// tabs setting
$(document).ready(function() {
  $('.nav-item').click(function() {
    $('.nav-link').removeClass('active');
    // console.log(items);
    $(this).find('.nav-link').addClass('active');
  })

});


  get_sliders();

  $('.change_sidebar_clr').click(function () {
    var sidebar_clr = $('span ',this).attr('data-bg-color');
    $.ajax({
      url :'<?=site_url('settings/update_sidebar_clr')?>',
      method : 'POST',
      data : {sidebar_clr : sidebar_clr}
    })
  })

  function edit_slider(id)
  {

      $.ajax({
        url : '<?=site_url('settings/edit_slider/')?>'+id,
        success : function (data)
        {

          $('#EditSliderModal').modal('show',);
          $('.edit_slider_').html(data);

        }
      })

  }

  function get_sliders() {

      $.ajax({

        url : '<?=site_url('settings/get_sliders')?>',
        success :function (data) {

            $('#view_sliders_').html(data);
        }

      })
  }

  $(document).on('click','.add-more-slider',function () {

      let slider_row = $('.slider_row').html();

      $('.add_sliders').append(slider_row);

  })
  function add_new_slide() {
      $('#add_form_box').show();
  }
</script>
