

<?php if (count($faculty) > 0) { foreach($faculty as $key => $v): ?>

<?php $card_color = 'bg-theme-colored2'; if($key%2 == 0){ $card_color = 'bg-theme-colored3'; }?>

<div class="col-sm-6 col-md-3 mb-sm-30">
    <div class="team-member bg-light pt-10 pb-15">
        <div class="thumb"><img class="img-fullwidth" src="<?= base_url('admin/uploads/users/'.$v->image)?>" alt="">
        </div>
        <div class="info">
        <div class="pt-10 pb-10 <?=$card_color?>">
            <h4 class="mt-0 mb-0 text-white"><?= $v->full_name ?></h4>
            <h6 class="mt-0 mb-0 text-white"><?= $v->role_name ?></h6>
        </div>
        <div class="p-15 pb-0">
            <!-- <p title="Teacher Hours"><i class="icon-hourglass"></i>10:00 AM to 2:00 PM</p>
            <span class="subject-tag">English</span>
            <span class="subject-tag">English</span>
            <span class="subject-tag">English</span>
            </p> -->
        </div>
        <button class="btn hvr-float-shadow <?=$card_color?>">
            <a href="<?=site_url('view_profile/'.hashids_encrypt($v->uid))?>" class="mt-0 mb-0 text-white">View Profile</a>
        </button>
        </div>
    </div>
</div>

<?php endforeach; } else{ ?>

<div class="col-sm-12 col-md-12 mb-sm-30">
    <h2>Not found ...</h2>
</div>


<?php } ?>
