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
                <img src="<?=base_url('app-assets/img/icons/depart.png');?>" class="rounded-circle img-border gradient-summer width-100"
                  alt="Card image">
              </a>
          </div>
          <div class="col-md-1">
          </div>
        </div>
        <div class="profile-section">
          <div class="row">
            <div class="col-lg-5 col-md-5 ">
            </div>
            <div class="col-lg-2 col-md-2 text-center">
              <span class="font-medium-2 text-uppercase"><?=$depart->depart_name?></span>
              <p class="grey font-small-2"><?=__('depart_number_txt');?><span class="badge badge-info">(<?=$depart->depart_numb?>)</span></p>
            </div>
            <div class="col-lg-5 col-md-5">
            </div>
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
          <h5><?=__('college_txt')?></h5>
        </div>
        <div class="card-content">
          <div class="card-body">
            <hr>
            <div class="row">

                <div class="col-md-4 pl-4">
                  <p><?=$depart->colg_name?></p>
                </div>


            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header" style="padding:none!important;">
          <h5><?=__('description_txt')?></h5>
        </div>
        <div class="card-content">
          <div class="card-body">
            <hr>
            <div class="row">

                <div class="col-md-4 pl-4">
                  <p><?=$depart->depart_description?></p>
                </div>


            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header" style="padding:none!important;">
          <h5><?=__('departments_programs_txt')?></h5>
        </div>
        <div class="card-content">
          <div class="card-body">
            <hr>
            <div class="row">

              <div class="col-md-12">
                <table class="table">
                  <tr>
                    <th><?=__('sno_txt')?></th>
                    <th><?=__('program_name_txt')?></th>
                    <th><?=__('program_description_txt')?></th>
                  </tr>
                  <?php if (count($programs) > 0): ?>

                    <?php $i=1; foreach ($programs as $key => $v): ?>
                  <tr>
                    <td><?=$i?>.</td>
                    <td><?=$v->program_name?></td>
                    <td><?=$v->program_description?></td>
                  </tr>
                  <?php $i++; endforeach; ?>
                <?php else: ?>
                  <tr>
                    <td colspan="3"><?=__('no_program_found_txt')?>...</td>
                  </tr>
                <?php endif; ?>
                </table>
              </div>

            </div>

          </div>
        </div>
      </div>
    </div>

    </div>
  </div>
</section>
<!--About section ends-->
