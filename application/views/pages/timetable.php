<script src="<?=base_url('admin/assets/js/html2canvas.js')?>" charset="utf-8"></script>
<!-- Start main-content -->
<div class="main-content">
  <!-- Section: inner-header -->
  <section class="inner-header divider parallax layer-overlay overlay-white-8 teachers-top-sec" data-bg-img="<?=base_url('assets/images/bg/bg8.jpg')?>">
    <div class="container pt-30 pb-30">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="mt-0 line-height-1">Generate <span class="text-theme-colored3">Timetable</span></h2>
            <ol class="breadcrumb text-center mt-10">
              <li><a href="index.php">Home</a></li>
              <li class="active text-theme-colored">Timetable</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section:  -->
  <section>
    <div class="container pb-sm-70"  style="padding-top: 0 !important;">
      <div class="row">
        <div class="col-md-12">
          <!-- <h3>Generate Timetable</h3> -->
          <div class="form-group">
            <h4 class="card-title">Select your Class</h4>
            <select class="form-control bordered timetable_id" name="timetable_id" onchange="change_timetable()">
              <option value="" selected disabled> -- select -- </option>
              <?php if(!empty($timetables)) { ?>
                <?php foreach($timetables as $record) {
                  if(!$record->published) {
                    continue;
                  }
                  ?>
                  <option value="<?=$record->id?>"><?=$record->depart_name." | Part-".$record->part." | ".$record->year." | ".$record->evening_morning." ".$record->class_group ?></option>
                <?php } ?>
              <?php } ?>
            </select>
          </div>

          <!-- <div class="">
            <div class="divider"></div>
            <h3>Subscribe to Get Emails for Timetable</h3>
            <div class="form-group">
              <label>Email Timetable Whenever Changed</label>
              <input type="text" name="" value="" class="form-control bordered" placeholder="Enter Email">
            </div>
            <div class="form-group">
              <button class="btn hvr-float-shadow bg-theme-colored"><a href="#" class="mt-0 mb-0 text-white">Save Email Settings</a></button>
            </div>
          </div> -->
        </div>
        <div class="col-md-12 timetable_window">
          <div class="preloader">
            <p>Your Timetable will be generated Here</p>
            <h4>Please Choose your class to generate Timetable</h4>

          </div>
          <div class="loading_tt">
              <img draggable="false" src="<?=base_url('assets/images/loader1.gif')?>" alt="">
          </div>
          <div class="timetable_" id="timetable_">
            <p id="response_txt"></p>
          </div>
        </div>
        <div class="col-md-8">
          <br><br>
          <div class="form-group">
            <label>Download</label>
            <button class="btn hvr-float-shadow btn-default" onclick="download_img()">
              <a href="javascript:void(0)" class="mt-0 mb-0" ><i class="icon-picture"></i> JPG/PNg</a>
            </button>
            <!-- <button class="btn hvr-float-shadow btn-default"><a href="profile.php" class="mt-0 mb-0"><i class="icon-docs"></i> PDF</a></button>
            <button class="btn hvr-float-shadow btn-default"><a href="profile.php" class="mt-0 mb-0"><i class="icon-notebook"></i> Excel</a></button> -->
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
<input type="hidden" name="img_src__" id="img_src__" value="">
<input type="hidden" name="timetable_type" id="timetable_type" value="">
<!-- end main-content -->
<script>
function change_timetable() {
  $('.preloader').hide();
  $('.loading_tt').show();
  $('#img_src__').val("");
  let timetable_id = $('.timetable_id').val();
  $.ajax({
    url: '<?=site_url('fetch_timetable')?>',
    data: {'id': timetable_id},
    type: 'POST',
    success: function(res) {

      // hide preloader and preloader window
      $('#timetable_').hide();
      $('.loading_tt').hide();
      let result = JSON.parse(res);

      if(result.type == 'success') {
        $('#timetable_type').val(result.data.type);
        if(result.data.type == 'image') {
          // SHOW TIMETABLE IMAGE
          var img = document.createElement("img");
          var img_url = "<?=base_url('admin/uploads/timetables/')?>"+result.data.src;
          img.src = img_url;
          $('#timetable_').html(img);
          $('#img_src__').val(img_url);

          // hide response text
          $('#response_txt').hide();
          $('#timetable_').show();
        } else {
          // DRAW CUSTOM TIMETABLE
          $('#timetable_').html(result.data.content);
          // hide image timetable
          $('#response_txt').hide();
          $('#timetable_').show();


        }
      } else {
        $('#response_txt').text('An Unexpected Error Occurred');
      }
    }
  })
}

function download_img() {
  let timetable_type = $('#timetable_type').val();
  console.log(timetable_type)

    if(timetable_type == 'image') {
      let img_source = $('#img_src__').val();
      if(img_source != "") {
        download(img_source);
    }
  }  else {
    html2canvas(document.getElementById("myTable"), {
    onrendered: function(canvas) {
       var img = canvas.toDataURL("image/png");
       download(img);
    }
    });

  }
}

function download(img_source) {
  const link = document.createElement('a')
  link.href = img_source
  link.download = 'Timetable'
  document.body.appendChild(link)
  link.click()
  document.body.removeChild(link)
}

//convert table to image
function convertToImage() {
// var resultDiv = document.getElementById("result");
html2canvas(document.getElementById("myTable"), {
onrendered: function(canvas) {
   var img = canvas.toDataURL("image/png");
   result.innerHTML = '<img src="'+img+'"/>';
}
});
}

</script>
