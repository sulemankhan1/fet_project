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
                                  <a class="nav-link" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">Admin Panel Setting</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link active" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">Webiste Setting</a>
                                </li>
                              </ul>
                              <div class="tab-content px-1 pt-1">

                                <div role="tabpanel" class="tab-pane" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
                                   
                                    <div class="col-xl-12 col-lg-12">
                                      <div class="card" style="">
                                        <div class="card-content">
                                          <div class="card-body">
                                            <ul class="nav nav-tabs">
                                              <li class="nav-item">
                                                <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab11" aria-expanded="true">Logo</a>
                                              </li>
                                              <li class="nav-item">
                                                <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab22" aria-expanded="false">SidebarBackground Image</a>
                                              </li>
                                              <li class="nav-item">
                                                <a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#tab33" aria-expanded="false">Sidebar Color
                                                  </a>
                                              </li>
                                              <li class="nav-item">
                                                <a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#tab44" aria-expanded="false">Name</a>
                                              </li>
                                              <li class="nav-item">
                                                <a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#tab55" aria-expanded="false">Footer</a>
                                              </li>
                                            </ul>
                                            <div class="tab-content px-1 pt-1">
                                              <div role="tabpanel" class="tab-pane active" id="tab11" aria-expanded="true" aria-labelledby="base-tab1">
                                                
                                                <form class="form" action="<?=site_url('save_settings');?>" method="post" enctype="multipart/form-data">
                                                <div class="col-md-12 mt-3">
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
                                                        <input type="hidden" name="type" value="sidebar_logo">
                                                        <input type="file" class="form-control" name="logo">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-12">
                                                  <button type="Submit" class="btn btn-raised btn-primary float-right"> <i class="ft-check position-right"></i>  Save</button>
                                                </div>
                                                </form>

                                              </div>
                                              <div class="tab-pane" id="tab22" aria-labelledby="base-tab2">
                                                <form class="form" action="<?=site_url('save_settings');?>" method="post" enctype="multipart/form-data">
                                                <div class="col-md-12 mt-3">
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
                                                        <input type="hidden" name="type" value="sidebar_img">
                                                        <input type="file" class="form-control" name="sidebar_img">
                                                    </fieldset>
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
                                <div class="tab-pane active" id="tab2" aria-labelledby="base-tab2">
                                    <div class="col-xl-12 col-lg-12">
                                      <div class="card" style="">
                                        <div class="card-content">
                                          <div class="card-body">
                                            <ul class="nav nav-tabs">
                                              <li class="nav-item">
                                                <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab111" aria-expanded="true">Add Slider</a>
                                              </li>
                                              <li class="nav-item">
                                                <a class="nav-link" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1111" aria-expanded="true">View Sliders</a>
                                              </li>
                                              <li class="nav-item">
                                                <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab3333" aria-expanded="false">Latest News</a>
                                              </li>
                                            </ul>
                                            <div class="tab-content px-1 pt-1">
                                              <div role="tabpanel" class="tab-pane active" id="tab111" aria-expanded="true" aria-labelledby="base-tab1">
                                                
                                                <form class="form" action="<?=site_url('save_settings');?>" method="post" enctype="multipart/form-data">

                                                <div class="row">
                                                  <div class="col-md-6 mt-3">
                                                      
                                                      <fieldset class="form-group">
                                                          <label for="basicInput"> Slider Image</label>
                                                          <input type="hidden" name="type" value="slider">
                                                          <input type="file" class="form-control" name="slider_image" required>
                                                      </fieldset>
                                                  </div>
                                                  <div class="col-md-6 mt-3">
                                                      <fieldset class="form-group">
                                                          <label for="basicInput"> Title</label>
                                                          <input type="text" class="form-control" name="title" required>
                                                      </fieldset>
                                                  </div>
                                                  <div class="col-md-6 mt-3">
                                                      <fieldset class="form-group">
                                                          <label for="basicInput"> Title Color (optional)</label>
                                                          <input type="color" class="form-control" name="title_color">
                                                      </fieldset>
                                                  </div>
                                                  <div class="col-md-6 mt-3">
                                                      <fieldset class="form-group">
                                                          <label for="basicInput"> Title Link (optional)</label>
                                                          <input type="text" class="form-control" name="title_link">
                                                      </fieldset>
                                                  </div>
                                                  <div class="col-md-12 mt-3">
                                                      <fieldset class="form-group">
                                                          <label for="basicInput"> Description</label>
                                                          <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                                                      </fieldset>
                                                  </div>
                                                  <div class="col-md-6 mt-3">
                                                      <fieldset class="form-group">
                                                          <label for="basicInput"> Description Color (optional)</label>
                                                          <input type="color" class="form-control" name="description_color">
                                                      </fieldset>
                                                  </div>
                                                  <div class="col-md-6 mt-3">
                                                      <fieldset class="form-group">
                                                          <label for="basicInput"> Description Link (optional)</label>
                                                          <input type="text" class="form-control" name="description_link">
                                                      </fieldset>
                                                  </div>
                                                </div>

                                                <div class="col-md-12">
                                                  <button type="Submit" class="btn btn-raised btn-primary float-right"> <i class="ft-check position-right"></i>  Save</button>
                                                </div>
                                                </form>

                                              </div>
                                              <div class="tab-pane" id="tab1111" aria-labelledby="base-tab2">
                                                    
                                                <div class="table-responsive">
                                                  <table class="table table-striped table-bordered table-hover table-checkable order-column display" id="DataTable">
                                                      <thead>
                                                          <tr>

                                                              <th>#</th>
                                                              <th>Image</th>
                                                              <th>Title</th>
                                                              <th>Title Color</th>
                                                              <th>Title Link</th>
                                                              <th>Description</th>
                                                              <th>Description Color</th>
                                                              <th>Description Link</th>
                                                              <th>Status</th>
                                                              <th>Actions</th>

                                                          </tr>

                                                      <tbody>

                                                        <?php foreach($sliders as $key =>$v): ?>
                                                        <tr>

                                                          <td><?=++$key?></td>
                                                          <td>
                                                            <?php if (@getimagesize('uploads/slider_image/'.$v->image)): ?>
                                                            <img src="<?=base_url('uploads/slider_image/'.$v->image)?>" alt="" width="100px">
                                                            <?php else: ?>

                                                            <img src="<?=base_url('app-assets/images/no-image-available.png')?>" width="100px">

                                                            <?php endif; ?>
                                                          </td>
                                                          <td><?=$v->title?></td>
                                                          <td><?=$v->title_color?></td>
                                                          <td><?=$v->title_link?></td>
                                                          <td><?=$v->description?></td>
                                                          <td><?=$v->description_color?></td>
                                                          <td><?=$v->title_link?></td>
                                                          <td><span class="badge <?=($v->active == 1?'badge-success':'badge-warning text-white')?>"><?=($v->active == 1?'Active':'Deactive')?></span></td>
                                                          <td>
                                                            <a href='javascript:void(0)' class='btn small-btn' onclick='edit_slider(<?=$v->id?>)' ><i class='icon-pencil'></i> Edit</a>
                                                            <a href='<?=site_url('change_status/'.hashids_encrypt($v->id).'/'.$v->active)?>' onclick="return confirm('Are you sure you want to change status?')" class='btn small-btn'><i class='ft-crosshair'></i> Change Status</a>
                                                            <a href='<?=site_url('delete_setting/'.hashids_encrypt($v->id).'/slider')?>' onclick="return confirm('Are you sure you want to delete?')" class='btn small-btn'><i class='icon-trash'></i> Delete</a>
                                                          </td>

                                                        </tr>
                                                        <?php endforeach; ?>
                                                      </tbody>
                                                    </table>
                                                </div>

                                              </div>
                                              <div class="tab-pane" id="tab3333" aria-labelledby="base-tab2">
                                                              <h6>Working</h6>
                                              </div>
                                              <div class="tab-pane" id="tab33" aria-labelledby="base-tab3">
                                              <div class="row" id="hello">
                                                    <div class="col-md-12 mt-3">
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
                                                  </div>
                                              </div>
                                              <div class="tab-pane" id="tab44" aria-labelledby="base-tab3">
                                                <form class="form" action="<?=site_url('save_settings');?>" method="post" enctype="multipart/form-data">
                                                <div class="col-md-12 mt-3">
                                                    <fieldset class="form-group">
                                                        <label for="basicInput"> Name</label>
                                                        <input type="hidden" name="type" value="name">
                                                        <input type="text" class="form-control" name="name" value="<?=@$name->value?>">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-12">
                                                  <button type="Submit" class="btn btn-raised btn-primary float-right"> <i class="ft-check position-right"></i>  Save</button>
                                                </div>
                                                </form>
                                              </div>
                                              <div class="tab-pane" id="tab55" aria-labelledby="base-tab3">
                                                <form class="form" action="<?=site_url('save_settings');?>" method="post" enctype="multipart/form-data">
                                                <div class="col-md-12 mt-3">
                                                  <fieldset class="form-group">
                                                    <label for="basicInput"> Footer</label>
                                                    <input type="hidden" name="type" value="footer">
                                                    <input type="text" class="form-control" name="footer" value="<?=@$footer->value?>">
                                                  </fieldset>
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

<script type="text/javascript">

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

</script>
