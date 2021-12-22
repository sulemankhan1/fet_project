
<?php foreach($sliders as $v){ ?>
  <?php if (@getimagesize('uploads/slider_image/'.$v->image)):
    $image_url = base_url('uploads/slider_image/'.$v->image);
  else:
    $image_url = base_url('app-assets/images/no-image-available.png');
  endif; ?>
  <!-- Slider option box -->
  <div class="col-md-3 bbox">
    <div class="sc_box img-thumbnail" style="background-image: url('<?=$image_url?>')">
      <div class="settings_container">
        <div class="centered_s">
          <div class="row">
            <div class="col-md-3">
              <a href="javascript:void(0)" onclick="edit_slider(<?=$v->id?>)">
                <i class="fa fa-pencil"></i><br>
                <span>Edit</span>
              </a>
            </div>
            <div class="col-md-5">
              <a href="<?=site_url('change_status/'.hashids_encrypt($v->id).'/'.$v->active)?>" onclick="return confirm('Are you sure you want to Make this Slide <?=($v->active == 1)?"Hidden":"Visible"?> on Homepage?')">
                <i class="fa fa-eye"></i><br>
                <span title="Make Slide Visible/Hidden on Homepage"><?=($v->active == 1)?"Hide":"Show"?> </span>
              </a>
            </div>
            <div class="col-md-4">
              <a href="<?=site_url('delete_setting/'.hashids_encrypt($v->id).'/slider_setting')?>" onclick="return confirm('Are you sure you want to delete?')" >
                <i class="fa fa-trash"></i><br>
                <span>Delete</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Slider option box Ends -->

<?php } ?>
