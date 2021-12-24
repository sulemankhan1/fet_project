<script src="<?=base_url('assets/js/timetable.js')?>" charset="utf-8"></script>

<script>
  $('document').ready(function() {


    // fetch teachers list via ajax
    // let timetable_id = $('#timetable_id').val();
    // $.ajax({
    //   url: '<?=site_url('Timetable/generate_lists')?>/'+timetable_id,
    //   type: 'GET',
    //   success: function(res) {
    //     // $('#teachers_container').append(res);
    //     // document.getElementById('teachers_container').insertAdjacentHTML('afterbegin',res);
    //
    //     var elemDiv = document.createElement('div');
    //     elemDiv.innerHTML = res;
    //     document.getElementById('teachers_container').insertBefore(elemDiv, document.getElementById('teachers_container').firstChild);
    //   }
    // })

    initiateLocalStorage();
  })

  function initiateLocalStorage() {
    window.localStorage.timetable_data = "";
    let evening_morning = $('#tt_evening_morning').val();
    let timetable_id = $('#timetable_id').val();
    $.ajax({
      url: "<?=site_url('timetable/getTimetSettings')?>/"+evening_morning+"/"+timetable_id,
      type: 'GET',
      success: function(resp) {
        // save in json format
        window.localStorage.timetable_data = resp;
      }
    })
    // console.log(JSON.parse(window.localStorage.timetable_data));
  }


  function save_timetable(draft = '', reload=false) {
    msg = (draft != "")?"Save as Draft?":"Are you sure you want to save and Publish the Timetable?";

    if(reload == true) {
      c = true;
    } else {
      let c = confirm(msg);
    }

    if(c == true) {

      let timetable_id = document.querySelector('#timetable_id').value;
      let timetable_data = window.localStorage.timetable_data;

      $.ajax({
        url: "<?=site_url('timetable/finish')?>",
        type: 'POST',
        data: {timetable_id, timetable_data, draft},
        success: function(resp) {
          let res = JSON.parse(resp);
          if(res.error) {
            alert("Please Create Timetable First before Submitting!");
            return;
          } else {
            window.location.reload();
            if(reload) {
                // location.relaod();
            } else {

              // window.location = res.location;
            }
          }

        }
      })
    }

  }
</script>
