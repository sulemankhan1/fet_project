
<script type="text/javascript">
  $(document).ready(function(){

    $('#DataTable').DataTable({
      "processing" : true,
      "serverSide" : true,
      "responsive" : true,
      "order":[],
      "ajax" : {
        url:"<?=site_url('departments/getDepartments')?>",
        type:"POST"
      },
      "columnDefs":[
                {
                     "targets":[0, 6],
                     "orderable":false,
                },
      ],
      dom: 'lBfrtip',
      buttons: [],
      "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
    });

    $('.add_more_program').click(function(){

      var fields = $('.getProgramFields').html();

      $('.more_programs').append(fields);

    });

    $(document).on('click','.remove_program',function(){

      $(this).closest('.row').remove();

    });

    $(document).on('click','.view_depart',function() {

        var id = $(this).attr('data');

        $('#ViewModal').modal('show');

        $.ajax({
          url : '<?=site_url('departments/getDetails/')?>'+id,
          success : function(data) {

            $('.view_departments').html(data);

          }
        })

    })

    $('.selectall').click(function() {
      if ($(this).is(':checked')) {
        $('input:checkbox').prop('checked', true);
      } else {
        $('input:checkbox').prop('checked', false);
      }
    });

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
          url:"<?=base_url('departments/collect_data_for_excel');?>",
          method:"POST",
          data:{checkbox_value:checkbox_value},
          success:function(res) {
              location.href = "departments/download_excel";
          }
        });
      }
    });


 });

</script>
