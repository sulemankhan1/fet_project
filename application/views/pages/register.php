 <!-- Start main-content -->
 <div class="main-content">

<!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="assets/images/bg/05.jpg">
  <div class="container pt-60 pb-60">
    <!-- Section Content -->
    <div class="section-content">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="title">Register</h2>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Login Form -->
<section class="divider">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-push-3">
        <div class="heading text-center">
          <h4 class="heading-title">Don't have an Account? Register Now</h4>
        </div>
        <div class="border-1px p-30 mb-0">
          <form method="post" action="<?=site_url('save_reg')?>">
            <div class="row">                             
              <div class="col-sm-6">
                <div class="form-group">
                    <label>Title <small>*</small></label>
                    <input type="hidden" name="type" class="type">
                    <input type="hidden" name="page_name"  value="register">
                    <select class="form-control"  name="title">
                      <option value="">choose</option>
                      <option value="Mr" <?=(@$this->input->post('title') == 'Mr'?'selected':'')?>>Mr</option>
                      <option value="Ms" <?=(@$this->input->post('title') == 'Ms'?'selected':'')?>>Ms</option>
                      <option value="Mrs" <?=(@$this->input->post('title') == 'Mrs'?'selected':'')?>>Mrs</option>
                      <option value="Dr" <?=(@$this->input->post('title') == 'Dr'?'selected':'')?>>Dr</option>
                      <option value="Prof" <?=(@$this->input->post('title') == 'Prof'?'selected':'')?>>Prof</option>
                    </select>
                    <span class="text-danger"><?=form_error('title')?></span>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                    <label>Full Name <small>*</small></label>
                    <input type="text" class="form-control" placeholder="Full Name" name="full_name" value="<?=@$this->input->post('full_name')?>">
                    <span class="text-danger"><?=form_error('full_name')?></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <label>Email <small>*</small></label>
                <input type="email" class="form-control" placeholder="Email" name="email" value="<?=@$this->input->post('email')?>">
                <span class="text-danger"><?=form_error('email')?></span>
              </div>            
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Username <small>*</small></label>
                   <input name="username" class="form-control" type="text" placeholder="Username" name="username" value="<?=@$this->input->post('username')?>">
                   <span class="text-danger"><?=form_error('username')?></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                    <label>Password <small>*</small></label>
                  <input type="password" class="form-control" placeholder="Password" name="password" value="<?=@$this->input->post('password')?>">
                  <span class="text-danger"><?=form_error('password')?></span>
                </div>
              </div>
              <div class="col-sm-6">
                <label>Re-enter Password <small>*</small></label>
                <input type="password" class="form-control" placeholder="Re enter Password" name="re_enter_password" value="<?=@$this->input->post('re_enter_password')?>">
                <span class="text-danger"><?=form_error('re_enter_password')?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Choose Campus <small>*</small></label>
                  <select class="form-control select-by-campus" name="campus_id">
                  <option selected disabled value=""> choose</option>

                    <?php foreach($campus as $key => $v): ?>

                      <option value="<?= $v->id ?>" <?=(@$this->input->post('campus_id') == $v->id?'selected':'')?>><?=$v->name?></option>

                    <?php endforeach ?>

                  </select>
                  <span class="text-danger"><?=form_error('campus_id')?></span>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Choose Faculty <small>*</small></label>
                  <select class="form-control select-by-faculty" name="faculty_id">
                    <option selected disabled value=""> choose</option>

                    <?php if(@$this->input->post('campus_id') != ''): ?>

                      <?php foreach($faculties as $key => $v): ?>

                        <?php if(@$this->input->post('campus_id') == $v->campus_id): ?>

                          <option value="<?= $v->id ?>" <?=(@$this->input->post('faculty_id') == $v->id?'selected':'')?>><?=$v->name?></option>
                      
                        <?php endif; ?>

                      <?php endforeach ?>

                    <?php endif; ?>

                  </select>
                  <span class="text-danger"><?=form_error('faculty_id')?></span>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Choose Department <small>*</small></label>
                  <select class="form-control select-by-department" name="depart_id">
                    <option selected disabled value=""> choose</option>  

                    <?php if(@$this->input->post('faculty_id') != ''): ?>

                      <?php foreach($departments as $key => $v): ?>

                        <?php if(@$this->input->post('faculty_id') == $v->fac_id): ?>

                          <option value="<?= $v->id ?>" <?=(@$this->input->post('depart_id') == $v->id?'selected':'')?>><?=$v->name?></option>

                        <?php endif; ?>

                      <?php endforeach ?>

                    <?php endif; ?>

                  </select>
                  <span class="text-danger"><?=form_error('depart_id')?></span>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label for="basicInput">Role *</label>
                  <br>
                    <?php foreach($roles as $key => $v) : ?>

                    <?php if($v->slug != 'SUPERADMIN' && $v->slug != 'ADMIN'): ?>
          

                        <input type="radio" id="<?=$v->slug?>" class="role_id" name="role_id" value="<?=$v->id?>" role-name="<?=$v->slug?>" <?=(@$this->input->post('role_id') == $v->id?'checked':'')?>>

                        <label for="<?=$v->slug?>"><?=$v->name?></label>

                    <?php endif ?>

                    <?php endforeach ?>
                                
                </div>                
                  <span class="text-danger"><?=form_error('role_id')?></span>
              </div>
            </div>
            <div class="row">
              
              <?php if(@$this->input->post('type') == 'STUDENT'){ ?>
              
                <div class="col-sm-6 info_student" style="display:block;">
              
              <?php }else { ?>
                
                <div class="col-sm-6 info_student" style="display:none;">

              <?php } ?>

                <div class="form-group">
                  <label>Choose Program <small>*</small></label>
                  <select class="form-control" name="program_id">
                      <option selected disabled value=""> choose</option>  
                      <option value="Bachelor" <?=(@$this->input->post('program_id') == 'Bachelor'?'selected':'')?>>Bachelor</option>
                      <option value="Master" <?=(@$this->input->post('program_id') == 'Master'?'selected':'')?>>Master</option>
                      <option value="Mphil" <?=(@$this->input->post('program_id') == 'Mphil'?'selected':'')?>>Mphil</option>
                      <option value="Phd" <?=(@$this->input->post('program_id') == 'Phd'?'selected':'')?>>Phd</option>

                  </select>
                  <?php if(@$this->input->post('type') == 'STUDENT'){ ?>
                    
                    <span class="text-danger"><?=form_error('program_id')?></span>

                  <?php } ?>
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <button type="submit" class="hvr-glow btn btn-block btn-dark btn-theme-colored btn-sm mt-20 pt-10 pb-10" data-loading-text="Please wait...">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section> 
 <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
</div> 
<!-- end main-content -->

<script>

  $('input[name=role_id]').change(function(){

    let role_name = $(this).attr('role-name');
    check_role(role_name);

  })

  function check_role(role_name)
  {

    $('.type').val(role_name);

    if(role_name == 'STUDENT')
    {

        $('.info_student').hide();
        $('.info_student').show();

    }
    else
    {
      
      $('.info_student').hide();      

    }

  }

  $('.select-by-campus,.select-by-faculty').change(function(){

    if($(this).hasClass('select-by-campus'))
    {

      $.ajax({
          
          url : '<?=site_url('pages/getAllFaculties/')?>'+$(this).val()+'/register',
          success:function(data)
          {
              $('.select-by-faculty').html(data)
              $('.select-by-department').html('<option selected disabled value=""> choose </option>');
          }

        })

    }
    else if($(this).hasClass('select-by-faculty'))
    {

        $.ajax({

          url : '<?=site_url('pages/getAllDepartments/')?>'+$(this).val()+'/register',
          success:function(data)
          {
              $('.select-by-department').html(data)
          }

        })


    }

  })
                    
                
</script>