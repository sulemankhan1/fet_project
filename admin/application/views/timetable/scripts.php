<script src="<?=base_url('assets/js/timetable.js')?>" charset="utf-8"></script>
<script>
  $('document').ready(function() {
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


  function save_timetable(draft = '') {
    msg = (draft != "")?"Save as Draft?":"Are you sure you want to save and Publish the Timetable?";

    let c = confirm(msg);
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
            window.location = res.location;
          }

        }
      })
    }

  }
</script>
