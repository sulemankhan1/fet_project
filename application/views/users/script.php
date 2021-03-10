<!-- ViewUser -->
<div class="modal fade" id="ViewUser" tabindex="0" role="dialog" aria-labelledby="statusModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="statusModalTitle"><?=__('view_detail_txt')?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </div>
          </button>
          <div class="modal-body view_user">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><?=__('close_txt')?></button>
          </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  $(document).ready(function(){

    var status = $('.status').val();

    $('#DataTable').DataTable({
      "processing" : true,
      "serverSide" : true,
      "order":[],
      "ajax" : {
        url:"<?=site_url('users/getActiveDeactiveUsers/')?>"+status,
        type:"POST"
      },
      "columnDefs":[
          {
           "targets":[0,1,9,10],
           "orderable":false,
          },
      ],
      dom: 'lBfrtip',
      buttons: [],
      "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
    });

    $(document).on('click','.view_user_detail',function(){

      var id = $(this).attr('data');

      $('#ViewUser').modal('show');

      $.ajax({
        url : '<?=site_url('users/getUserDetails/')?>'+id,
        success : function (data) {

          $('.view_user').html(data);

        }
      })
    });


    $(function() {

      var id = '<?=@$edit->user_status_type?>';

      var id1 = Number(id);

      if (id1 > 0) {

          $('.user_status_type').val(id1);

      }

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
            url:"<?=base_url('users/collect_data_for_excel');?>",
            method:"POST",
            data:{checkbox_value:checkbox_value},
            success:function(res) {
                location.href = "users/download_excel";
            }
          });
        }
      });


      $('#ResUsername').on('focusout blur',function () {

          ResUsername = $(this).val();

          var is_id = $('input[name=id]').val();

          if (ResUsername != "")
          {

            $.ajax({

              type:"POST",
              url:"<?php echo base_url(); ?>Reg/CheckUserNameSameHere",
              data:{ResUsername:ResUsername , id : is_id},
              success:function (result) {
                var res = $.parseJSON(result);
                if (res.status == "match_username")
                {

                    $('#ResUsername').css('border','1px solid red');
                    $('#warningusername').show();
                    $('#ResUsername').val('');
                    $('#ResUsername').attr('placeholder','Add Unique Username')

                }
                else{

                    $('#warningusername').hide();
                    $('#ResUsername').css('border','1px solid green');

                }

              }

            })

          }

      });

     $('.is_unique_university_email').on('keyup',function () {

          var check_st = $('.status_type').val();

          var is_id = $('input[name=id]').val();

        fv_university_email = $(this).val();

        if (fv_university_email != "") {

          $.ajax({

            type:"POST",
            url:"<?php echo base_url(); ?>Reg/CheckReEmailSame",
            data:{fv_university_email:fv_university_email , id : is_id},
            success:function (result)
            {

              var res = $.parseJSON(result);

              if (res.status == "match_re_email")
              {
                  $('input[name='+check_st+'_university_email').css('border','1px solid red');
                  $('#'+check_st+'_warningemail').show();
                  $('input[name='+check_st+'_university_email').val('');
                  $('input[name='+check_st+'_university_email').attr('placeholder','Add Unique Email')
              }
              else
              {
                  $('#'+check_st+'_warningemail').hide();
                  $('input[name='+check_st+'_university_email').css('border','1px solid green');
              }

            }
          })
        }

        })




 });

</script>
