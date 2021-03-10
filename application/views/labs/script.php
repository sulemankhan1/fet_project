<script type="text/javascript">
  $(document).ready(function(){

    $('#DataTable').DataTable({
      "processing" : true,
      "serverSide" : true,
      "order":[],
      "ajax" : {
        url:"<?=site_url('labs/getLabs')?>",
        type:"POST"
      },
      "columnDefs":[
                {
                     "targets":[0, 7],
                     "orderable":false,
                },
      ],
      dom: 'lBfrtip',
      buttons: [],
      "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
    });

    $('select[name=college_id]').change(function(){

      var id = $(this).val();

      $.ajax({

        url : '<?=site_url('main/getDepartByColgId/')?>'+id,

        success :function (data) {

          $('select[name=depart_id]').html(data);

        }

      });

    });


      //checkallintable
        $('.selectall').click(function() {
          if ($(this).is(':checked')) {
            $('input:checkbox').prop('checked', true);
          } else {
            $('input:checkbox').prop('checked', false);
          }
        });

        // export
        $(document).on('click','.expo',function(e) {

          e.preventDefault();

          // check if atleast one checkbox is checked
          if($('.check').is(':checked')) {

            // get all checkboxes
            var checkbox = $('.check:checked');
            var checkbox_value = [];

           $(checkbox).each(function() {
            checkbox_value.push($(this).val());
           });

           $.ajax({
              url:"<?=base_url('labs/collect_data_for_excel');?>",
              method:"POST",
              data:{checkbox_value:checkbox_value},
              success:function(res) {
                  location.href = "labs/download_excel";
              }
            });
          }
        });


 });

</script>
