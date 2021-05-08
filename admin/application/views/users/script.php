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

    let status = $('.status').val();

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
           "targets":[0,9],
           "orderable":false,
          },
      ],
      dom: 'lBfrtip',
      buttons: [],
      "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
    });

      let role_name = $(".role_id:checked").attr('role-name');
      check_role(role_name);

      $('input[name=role_id]').change(function(){

        let role_name = $(this).attr('role-name');
        check_role(role_name);

      })

      function hide_roles_field() 
      {

        $('.additional_info').hide();
        $('.additional_info_student').hide();
        $('.additional_info_teacher').hide();
        $('.additional_info_other').hide();
        
      }

      function check_role(role_name)
      {

          $('.type').val(role_name);

          if(role_name == 'TEACHER')
          {
              hide_roles_field();
              $('.additional_info').show();
              $('.additional_info_teacher').show();
          }
          else if(role_name == 'STUDENT')
          {
              hide_roles_field();
              $('.additional_info').show();
              $('.additional_info_student').show();
          }
          else if(role_name == 'FACULTY')
          {
              hide_roles_field();
              $('.additional_info').show();
              // $('.additional_info_student').show();
          }
          else if(role_name == 'ADMIN')
          {
              hide_roles_field();
              $('.additional_info').show();
              // $('.additional_info_student').show();
          }
          else if(role_name == 'OTHER')
          {
              hide_roles_field();
              $('.additional_info').show();
              $('.additional_info_other').show();
              // $('.additional_info_student').show();
          }
          else
          {
            
            hide_roles_field();

          }

      }


 });


 
$('.select-by-campus,.select-by-faculty').change(function(){

  if($(this).hasClass('select-by-campus'))
  {

  $.ajax({
      
      url : '<?=site_url('profile/getAllFaculties/')?>'+$(this).val()+'/register',
      success:function(data)
      {
          $('.select-by-faculty').html(data)
          $('.select-by-department').html('<option selected disabled value=""> choose </option>');
      }

      })

  }
  else if($(this).hasClass('select-by-faculty'))
  {

      $.ajax({

      url : '<?=site_url('profile/getAllDepartments/')?>'+$(this).val()+'/register',
      success:function(data)
      {
          $('.select-by-department').html(data)
      }

      })


  }

})

</script>
