

<div class="attach_file_html" style="display:none!important;">

  <div class="row">

      <div class="col-xl-5 col-lg-5 mb-2">
        <fieldset class="form-group">
          <label for="basicInput"><?=__('fil_name_txt')?> *</label>
          <input type="text" class="form-control" required="" name="file_label[]">
        </fieldset>
      </div>

      <div class="col-xl-6 col-lg-6 mb-2">
          <label for="file"><?=__('upload_file_text')?></label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01"><?=__('upload_txt')?></span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01"
                aria-describedby="inputGroupFileAddon01" name="attachments[]" required>
              <label class="custom-file-label" for="inputGroupFile01"><?=__('choose_file_txt')?></label>
            </div>
          </div>
      </div>
      <div class="col-xl-1 col-lg-1 text-danger">
      <i class="ft-x remove_attach" style="cursor:pointer;"></i>
      </div>
  </div>

</div>

<script type="text/javascript">

$(document).ready(function(){

  $('#DataTable').DataTable({
      "processing" : true,
      "serverSide" : true,
      "responsive" : true,
      "order":[],
      "ajax" : {
        url:"<?=site_url('inventory/getInventory')?>",
        type:"POST"
      },
      "columnDefs":[
          {
               "targets":[0,1, -1],
               "orderable":false,
          },
      ],
      //  dom: 'lBfrtip',
      //   buttons: [{ extend: 'excel', text: 'Export to excel' }],
      //   "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]

    });

    $('.add_more_files').click(function () {

        var file_html = $('.attach_file_html').html();

        $('.add_more_files_fields').append(file_html);

    })

    $(document).on('click','.remove_attach',function(){

        $(this).closest('.row').remove();

    })


    $(document).on('click','.view_storage',function() {

          var id = $(this).attr('data');

          $('#ViewModal').modal('show');

          $.ajax({
            url : '<?=site_url('inventory/getStorageDetail/')?>'+id,
            success : function(data) {
              $('.view_storage_').html(data);
            }
          })

    })


    $('.manage_storage_table').click(function() {

      $('#ManageOrderTable').modal('show');
      var tablename = 'chemical_storage';
        $.ajax({
          url : '<?=site_url('inventory/getColumns')?>'+'/'+tablename,
          success :function (data) {
            $('.view_managetable_').html(data);

          }
        })

    })


    $(document).on('click','.expo',function(e) {

        e.preventDefault();

        // check if atleast one checkbox is checked
            if($('.check').is(':checked')) {

            // get all checkboxes
            var checkbox = $('.check:checked');

            var checkbox_value = [];

            $(checkbox).each(function(){
            checkbox_value.push($(this).val());
            });

                  $.ajax({

                  url:"<?=base_url('inventory/exportStorage');?>",
                  method:"POST",
                  data:{checkbox_value},
                  success:function(res)
                  {

                  location.href = "<?=base_url('inventory/exportFile')?>";
                  }

                  });

            }

    });

    $(document).on('click','.delete_storage',function(e) {
       e.preventDefault();

    // check if atleast one checkbox is checked
      if($('.check').is(':checked')) {

        // get all checkboxes
          var checkbox = $('.check:checked');

          var checkbox_value = [];

         $(checkbox).each(function(){
          checkbox_value.push($(this).val());
         });

         $.ajax({

            url:"<?=base_url('inventory/massDeleteStorage');?>",
            method:"POST",
            data:{checkbox_value},
            success:function(res)
            {

                location.href = "<?=base_url('/myinventory?msg=true')?>";

            }

          });

      }


  })




});



</script>
