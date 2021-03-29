<div class="row">
    <div class="col-md-6 mt-3">
        <input type="hidden" name="id" value="<?=$edit->id?>">
        <fieldset class="form-group">
            <label for="basicInput"> Slider Image</label>
            <input type="file" class="form-control" name="slider_image">
        </fieldset>
    </div>
    <div class="col-md-6 mt-3">
        <fieldset class="form-group">
            <label for="basicInput"> Title</label>
            <input type="text" class="form-control" name="title" required value="<?=$edit->title?>">
        </fieldset>
    </div>
    <div class="col-md-6 mt-3">
        <fieldset class="form-group">
            <label for="basicInput"> Title Color (optional)</label>
            <input type="color" class="form-control" name="title_color" value="<?=$edit->title_color?>">
        </fieldset>
    </div>
    <div class="col-md-6 mt-3">
        <fieldset class="form-group">
            <label for="basicInput"> Title Link (optional)</label>
            <input type="text" class="form-control" name="title_link" value="<?=$edit->title_link?>">
        </fieldset>
    </div>
    <div class="col-md-12 mt-3">
        <fieldset class="form-group">
            <label for="basicInput"> Description</label>
            <textarea name="description" class="form-control" cols="30" rows="10"><?=$edit->description?></textarea>
        </fieldset>
    </div>
    <div class="col-md-6 mt-3">
        <fieldset class="form-group">
            <label for="basicInput"> Description Color (optional)</label>
            <input type="color" class="form-control" name="description_color" value="<?=$edit->description_color?>">
        </fieldset>
    </div>
    <div class="col-md-6 mt-3">
        <fieldset class="form-group">
            <label for="basicInput"> Description Link (optional)</label>
            <input type="text" class="form-control" name="description_link" value="<?=$edit->description_link?>">
        </fieldset>
    </div>
</div>

