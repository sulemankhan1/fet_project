<style type="text/css">
  .change_sidebar_clr:hover{
      cursor: pointer;
  }
</style>
    <section class="basic-elements">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
              <h4 class="card-title mb-0"><?=$title?></h4>
          </div>
          <div class="card-body">
            <div class="px-3">
                <?php if($this->session->flashdata('response') == 'success') { ?>

                  <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?=$this->session->flashdata('msg')?>
                  </div>

                <?php } ?>
                  <div class="form-body">
                    <div class="row">

                      <!-- tabs start -->
                      <div class="col-xl-12 col-lg-12">
                        <div class="card" style="">
                          <div class="card-header">
                           
                          </div>
                          <div class="card-content">
                            <div class="card-body">
                              <ul class="nav nav-tabs">
                                <li class="nav-item">
                                  <a class="nav-link" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab_admin_panel" aria-expanded="true">Admin Panel Setting</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link active" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab_website" aria-expanded="false">Webiste Setting</a>
                                </li>
                              </ul>
                              <div class="tab-content px-1 pt-1">

                                <div role="tabpanel" class="tab-pane active" id="tab_admin_panel" aria-expanded="true" aria-labelledby="base-tab1">
                                   
                                    <div class="col-xl-12 col-lg-12">
                                      <div class="card" style="">
                                        <div class="card-content">
                                          <div class="card-body">
                                            <ul class="nav nav-tabs">
                                              <li class="nav-item">
                                                <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab_general_setting" aria-expanded="true">General Setting</a>
                                              </li>
                                            </ul>
                                            <div class="tab-content px-1 pt-1">
                                              <div role="tabpanel" class="tab-pane active" id="tab_general_setting" aria-expanded="true" aria-labelledby="base-tab1">
                                                
                                                <form class="form" action="<?=site_url('save_settings');?>" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="type" value="general_setting">
                                                
                                                <div class="row">
                                                  <div class="col-md-4 mt-3">
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
                                                  <div class="col-md-4 mt-3">
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
                                                
                                                  <div class="col-md-4 mt-3">
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
                                                        <label for="basicInput"> Name</label>
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
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    
                                </div>

                                <div class="tab-pane" id="tab_website" aria-labelledby="base-tab2">
                                    <div class="col-xl-12 col-lg-12">
                                      <div class="card" style="">
                                        <div class="card-content">
                                          <div class="card-body">
                                            <ul class="nav nav-tabs">
                                              <li class="nav-item">
                                                <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab_add_home_page_slider" aria-expanded="true">Add Homepage Slider</a>
                                              </li>
                                              <li class="nav-item">
                                                <a class="nav-link" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab_view_home_page_slider" aria-expanded="true">View Sliders</a>
                                              </li>                                              
                                            </ul>
                                            <div class="tab-content px-1 pt-1">
                                              <div role="tabpanel" class="tab-pane active" id="tab_add_home_page_slider" aria-expanded="true" aria-labelledby="base-tab1">
                                                
                                                <form class="form" action="<?=site_url('save_settings');?>" method="post" enctype="multipart/form-data">

                                                  <div class="row float-right">
                                                    <div class="col-md-12">
                                                        
                                                        <fieldset class="form-group">
                                                            <label for="basicInput"> Slider Image</label>
                                                            <input type="hidden" name="type" value="slider">
                                                            <input type="file" class="form-control" name="slider_image[]" required>
                                                        </fieldset>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-md-6 mt-3">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput"> Title</label>
                                                            <input type="text" class="form-control" name="title[]" required>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6 mt-3">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput"> Title Color (optional)</label>
                                                            <input type="color" class="form-control" name="title_color[]">
                                                        </fieldset>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-md-4">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput"> Title Link (optional)</label>
                                                            <input type="text" class="form-control" name="title_link[]">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <fieldset class="form-group">
                                                            <label for="basicInput"> Description Color (optional)</label>
                                                            <input type="color" class="form-control" name="description_color[]">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-4">
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
                                                  <button type="Submit" class="btn btn-raised btn-primary float-right"> <i class="ft-check position-right"></i>  Save</button>
                                                  <button type="button" class="btn btn-raised btn-success float-right mr-2 add-more-slider"> <i class="ft-plus circle"></i>  Add more</button>
                                                </div>
                                                </form>

                                              </div>
                                              <div class="tab-pane" id="tab_view_home_page_slider" aria-labelledby="base-tab2">
                                                    
                                                <div class="row" id="view_sliders_">
                                                  
                                                </div>

                                              </div>                                                                                        
                                             

                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- tabs end -->
                    </div>

                     

                      
                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<!-- EditSliderModal -->
<div class="modal fade" id="EditSliderModal" tabindex="0" role="dialog" aria-labelledby="statusModalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
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
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
          </div>
          </form>
    </div>
  </div>
</div>

<!-- add_sliders_row -->
<div class="slider_row" style="display:none;">
  <hr>
  <div class="row float-right">
    <div class="col-md-12">
        
        <fieldset class="form-group">
            <label for="basicInput"> Slider Image</label>
            <input type="hidden" name="type" value="slider">
            <input type="file" class="form-control" name="slider_image[]" required>
        </fieldset>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mt-3">
        <fieldset class="form-group">
            <label for="basicInput"> Title</label>
            <input type="text" class="form-control" name="title[]" required>
        </fieldset>
    </div>
    <div class="col-md-6 mt-3">
        <fieldset class="form-group">
            <label for="basicInput"> Title Color (optional)</label>
            <input type="color" class="form-control" name="title_color[]">
        </fieldset>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
        <fieldset class="form-group">
            <label for="basicInput"> Title Link (optional)</label>
            <input type="text" class="form-control" name="title_link[]">
        </fieldset>
    </div>
    <div class="col-md-4">
        <fieldset class="form-group">
            <label for="basicInput"> Description Color (optional)</label>
            <input type="color" class="form-control" name="description_color[]">
        </fieldset>
    </div>
    <div class="col-md-4">
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

<script type="text/javascript">

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

          $('#EditSliderModal').modal('show');
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

</script>
