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
                        <form class="form" action="<?=base_url();?>save_department" method="post">
                            <input type="hidden" name="id" value="<?=@$edit->depart_id?>">
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
                                            <label for="basicInput"><?=__('depart_name_txt')?> *</label>
                                            <input type="text" class="form-control" required="" value="<?=@$edit->depart_name?>" name="depart_name">
                                        </fieldset>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 mb-1">
                                        <fieldset class="form-group">
                                            <label for="basicInput"><?=__('description_txt')?> *</label>
                                            <textarea name="depart_description" class="form-control" rows="8" cols="80" required><?=@$edit->depart_description?></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <h4><?=__('add_more_programs_txt')?></h4>
                                    <button type="button" class="btn btn-outline-primary btn-sm add_more_program ml-1"><i class="ft-plus-circle"></i> <?=__('add_more_programs_txt')?></button>
                                  </div>
                                  <div class="col-md-12 more_programs">

                                  </div>
                                  <div class="col-md-12">
                                      <?php if (@count($extra) > 0): ?>
                                        <?php foreach ($extra as $key => $v): ?>

                                          <div class="row">
                                            <div class="col-md-12 text-right">
                                                <i class="ft-x remove_program" style="cursor:pointer;"></i>
                                            </div>
                                              <div class="col-xl-12 col-lg-2 mb-1 mt-3">
                                                  <fieldset class="form-group">
                                                      <label for="basicInput"><?=__('program_name_txt')?> *</label>
                                                      <input type="text" class="form-control" required="" name="program_name[]" value="<?=$v->program_name?>">
                                                  </fieldset>
                                              </div>
                                              <div class="col-xl-12 col-lg-12 mb-1">
                                                  <fieldset class="form-group">
                                                      <label for="basicInput"><?=__('program_description_txt')?> *</label>
                                                      <textarea name="program_description[]" class="form-control" rows="8" cols="80" required><?=$v->program_description?></textarea>
                                                  </fieldset>
                                              </div>
                                          </div>

                                        <?php endforeach; ?>
                                      <?php endif; ?>
                                  </div>
                                </div>
                                <div class="form-actions">
                                <button type="Submit" class="btn btn-raised btn-primary"><i class="ft-check position-right"></i> <?=__('save_txt');?></button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

      

<div class="getProgramFields" style="display:none;">

  <div class="row">
    <div class="col-md-12 text-right">
        <i class="ft-x remove_program" style="cursor:pointer;"></i>
    </div>
      <div class="col-xl-12 col-lg-2 mb-1 mt-3">
          <fieldset class="form-group">
              <label for="basicInput"><?=__('program_name_txt')?> *</label>
              <input type="text" class="form-control" required="" name="program_name[]">
          </fieldset>
      </div>
      <div class="col-xl-12 col-lg-12 mb-1">
          <fieldset class="form-group">
              <label for="basicInput"><?=__('program_description_txt')?> *</label>
              <textarea name="program_description[]" class="form-control" rows="8" cols="80" required></textarea>
          </fieldset>
      </div>
  </div>

</div>
