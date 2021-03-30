
<?php foreach($sliders as $v){ ?>

<div class="col-md-3">

    <div class="card" style="border:1px solid lightslategrey;">

        <?php if (@getimagesize('uploads/slider_image/'.$v->image)): ?>

            <img class="card-img-top" src="<?=base_url('uploads/slider_image/'.$v->image)?>" alt="Card image" style="width:100%">

        <?php else: ?>

            <img class="card-img-top" src="<?=base_url('app-assets/images/no-image-available.png')?>" alt="Card image" style="width:100%">

        <?php endif; ?>

        <div class="card-body">
        <h4 class="card-title"><?=$v->title?></h4>
        <p class="card-text">
            <div class="row">
                <div class="col-lg-12">Title Color <div style="border: 1px solid lightslategrey;width: 20px;height: 20px;border-radius: 11px;background-color:<?=$v->title_color?>;"></div></div>
                <div class="col-lg-12">Title Link <?=$v->title_link?></div>
                <div class="col-lg-12">Description Color <div style="border: 1px solid lightslategrey;width: 20px;height: 20px;border-radius: 11px;background-color:<?=$v->description_color?>;"></div></div>
                <div class="col-lg-12">Description Link <?=$v->description_link?></div>
            </div>
            <?=$v->description?>
        </p>
        <hr>
        <a href="javascript:void(0)" class="btn btn-sm btn-primary" onclick="edit_slider(<?=$v->id?>)"><i class='icon-pencil'></i> Edit</a>
        <a href="<?=site_url('change_status/'.$v->id.'/'.$v->active)?>" class="btn btn-sm btn-danger" onclick="\return confirm('Are you sure you want to change status?')\" ><i class='icon-crosshair'></i> Change Status</a>
        <a href="<?=site_url('delete_setting/'.hashids_encrypt($v->id).'/slider_setting')?>" class="btn btn-sm btn-danger" onclick="\return confirm('Are you sure you want to delete?')\" ><i class='icon-trash'></i> Delete</a>
        </div>
    </div>

</div>

<?php } ?>