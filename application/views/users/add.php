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
                    <form class="form" action="<?=site_url('save_user');?>" method="post" enctype="multipart/form-data">

                      <input type="hidden" name="id" value="<?=@$edit->user_id?>">
                      <br>
                      <span class="text-danger"><?php if(validation_errors()) echo validation_errors(); ?></span>

                        <div class="row mt-3">

                          <div class="col-lg-12 col-md-12  mb-3">
                              <label for="file"> User Image</label>
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupFileAddon01"> Upload</span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="user_img" name="user_img">
                                    <input type="hidden" name="user_img1" value="<?=@$edit->user_img?>">
                                  <label class="custom-file-label" for="user_img"> Choose File</label>
                                </div>
                              </div>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                              <fieldset class="form-group">
                                  <label for="basicInput"> Username *</label>
                                  <input type="text" class="form-control" id="ResUsername" required="" name="username" value="<?=@$edit->username;?>">
                                  <p style="color: red;margin: 0;display: none;" id="warningusername">This UserName already exist</p>
                              </fieldset>
                          </div>
                          <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                              <fieldset class="form-group">
                                  <label for="basicInput"> Password *</label>
                                  <input type="password" class="form-control" required="" name="password" value="<?=@$this->encryption->decrypt(@$edit->password)?>">
                              </fieldset>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput"> Nationality *</label>
                                    <input type="text" class="form-control" required="" name="nationality" value="<?=@$edit->nationality;?>">
                                </fieldset>
                            </div>
                          <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                              <fieldset class="form-group">
                                <label for="basicInput"> Gender *</label>
                                <br>
                                <?php
                                $male_checked = 'checked'; $female_checked = '';
                                if (@$edit->gender == 'female') {

                                  $male_checked = '';
                                  $female_checked = 'checked';

                                }
                                 ?>
                                  <input type="radio" id="male" name="gender" value="male" <?=$male_checked;?>>
                                  <label for="male"> Male</label>
                                  <input type="radio" id="female" name="gender" value="female" <?=$female_checked;?>>
                                  <label for="female"> Female</label>
                              </fieldset>
                          </div>
                          <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                              <fieldset class="form-group">
                                  <label for="basicInput"> Status / Role *</label>
                                  <select class="form-control user_status" required="" name="user_status">
                                      <option value=""> Select Status</option>

                                      <?php foreach ($roles as $v): ?>

                                        <option value="<?=$v->role_id?>" <?=(@$edit->user_status == $v->role_id?'selected':'');?> class="role<?=$v->role_id?>" data="<?=$v->role_type?>"><?=$v->role_name?></option>

                                      <?php endforeach; ?>


                                  </select>
                              </fieldset>
                          </div>
                          <div class="col-xl-6 col-lg-6 col-md-12 mb-1">
                              <fieldset class="form-group">
                                  <label for="basicInput"> Account Status *</label>
                                  <select class="form-control" required="" name="account_status">
                                    <option value="active" <?=(@$edit->account_status == 'active'?'selected':'')?>> Active</option>
                                    <option value="deactive" <?=(@$edit->account_status == 'deactive'?'selected':'')?>> Deactive</option>
                                  </select>
                              </fieldset>
                          </div>
                        </div>
                        <div class="form-actions">
                            <button type="Submit" class="btn btn-raised btn-primary"><i class="ft-check position-right"></i>  Save</button>
                        </div>

                    </form>

                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
