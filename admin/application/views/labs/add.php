<div class="main-content">
<!--test-->
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
                        <form class="form" action="<?=base_url();?>save_lab" method="post">
                            <input type="hidden" name="id" value="<?=@$edit->lab_id?>">
                            <div class="form-body">
                                <div class="row mt-3">

                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('select_college_text')?> *</label>
                                            <?php if (is_array($colleges)): ?>

                                              <select class="form-control" name="college_id" required>
                                                <option value=""><?=__('select_college_text')?></option>

                                                <?php foreach ($colleges as $v): ?>

                                                  <option value="<?=$v->id?>" <?=@$edit->college_id == $v->id?'selected':''?>><?=$v->colg_name?></option>

                                                <?php endforeach; ?>
                                              </select>

                                              <?php else: ?>

                                                <input type="hidden" name="college_id" value="<?=$colleges->id?>">
                                                <input type="text" class="form-control readonlyfield" value="<?=$colleges->colg_name?>" readonly>

                                            <?php endif; ?>
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('select_depart_txt')?> *</label>
                                            <?php if (is_array($departments)): ?>

                                              <select class="form-control" name="depart_id" required>
                                                <option value=""><?=__('select_depart_txt')?></option>

                                                  <?php foreach ($departments as $v): ?>

                                                    <option value="<?=$v->depart_id?>" <?=@$edit->depart_id == $v->depart_id?'selected':''?>><?=$v->depart_name?></option>

                                                  <?php endforeach; ?>

                                              </select>

                                              <?php else: ?>

                                                <input type="hidden" name="depart_id" value="<?=$departments->depart_id?>">
                                                <input type="text" class="form-control readonlyfield" value="<?=$departments->depart_name?>" readonly>

                                            <?php endif; ?>

                                        </fieldset>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('lab_name_txt')?> *</label>
                                            <input type="text" class="form-control" required="" value="<?=@$edit->lab_name?>" name="lab_name">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('description_txt')?> *</label>
                                            <textarea name="lab_description" class="form-control" rows="8" cols="80" required><?=@$edit->lab_description?></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-actions">
                                <button type="Submit" class="btn btn-raised btn-primary"><i class="ft-check position-right"></i> <?=__('save_txt')?></button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

      
