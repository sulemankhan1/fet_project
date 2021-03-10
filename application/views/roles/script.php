
<script type="text/javascript">

  $(document).ready(function(){

    $('#DataTable').DataTable({
      "processing" : true,
      "serverSide" : true,
      "order":[],
      "ajax" : {
        url:"<?=site_url('roles/getRoles')?>",
        type:"POST"
      },
      "columnDefs":[
                {
                     "targets":[0, 2],
                     "orderable":false,
                },
      ],
      dom: 'lBfrtip',
      buttons: [],
      "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
    });


 });

 $(document).on('click','.view_role',function() {

     var id = $(this).attr('data');

     $('#ViewModal').modal('show');

     $.ajax({
       url : '<?=site_url('roles/getDetails/')?>'+id,
       success : function(data) {

         $('.view_role_').html(data);

       }
     })

 })



 // depart
 $('input[name=depart_a]').change(function() {
   if($(this).prop('checked'))
   {
     if ($('input[name=depart_a_colg]').prop('checked'))
     {

       $('input[name=depart_a_colg]').prop('checked',false);
       $(this).prop('checked');

     }
   }
 })

 $('input[name=depart_a_colg]').change(function() {
   if($(this).prop('checked'))
   {
     if ($('input[name=depart_a]').prop('checked'))
     {

       $('input[name=depart_a]').prop('checked',false);
       $(this).prop('checked');

     }
   }
 })

 $('input[name=depart_e],input[name=depart_d],input[name=depart_v]').change(function(){
   if ($(this).prop('checked'))
   {
     if ($('input[name=depart_s]').prop('checked') || $('input[name=depart_ps]').prop('checked') || $('input[name=depart_s_colg]').prop('checked'))
     {
       $(this).prop('checked');
     }
     else
     {
       $(this).prop('checked',false);
       alert('kindly first you check see all departments / only his department / only his college departments');
     }
   }
 })



 $('input[name=depart_s]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=depart_e],input[name=depart_d],input[name=depart_v]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=depart_ps]').prop('checked') || $('input[name=depart_s_colg]').prop('checked'))
     {

       $('input[name=depart_ps]').prop('checked',false);
       $('input[name=depart_s_colg]').prop('checked',false);
       $(this).prop('checked');

     }
   }
 })

 $('input[name=depart_ps]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=depart_e],input[name=depart_d],input[name=depart_v]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=depart_s]').prop('checked') || $('input[name=depart_s_colg]').prop('checked'))
     {
       $('input[name=depart_s]').prop('checked',false);
       $('input[name=depart_s_colg]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=depart_s_colg]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=depart_e],input[name=depart_d],input[name=depart_v]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=depart_s]').prop('checked') || $('input[name=depart_ps]').prop('checked'))
     {
       $('input[name=depart_s]').prop('checked',false);
       $('input[name=depart_ps').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })


 // labs
 $('input[name=lab_a]').change(function() {
   if($(this).prop('checked'))
   {
     if ($('input[name=lab_a_colg]').prop('checked') || $('input[name=lab_a_depart]').prop('checked'))
     {
       $('input[name=lab_a_colg]').prop('checked',false);
       $('input[name=lab_a_depart]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=lab_a_colg]').change(function() {
   if($(this).prop('checked'))
   {
     if ($('input[name=lab_a]').prop('checked'))
     {
       $('input[name=lab_a]').prop('checked',false);
       $(this).prop('checked');
     }
   }
   else{
     $('input[name=lab_a_depart]').prop('checked',false);
   }
 })

 $('input[name=lab_a_depart]').change(function() {
   if($(this).prop('checked'))
   {

     $('input[name=lab_a_colg]').prop('checked',true);

     if ($('input[name=lab_a]').prop('checked'))
     {
       $('input[name=lab_a]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })


 $('input[name=lab_e],input[name=lab_d]').change(function(){
   if ($(this).prop('checked'))
   {
     if ($('input[name=lab_s]').prop('checked') || $('input[name=lab_ps]').prop('checked') || $('input[name=lab_s_colg]').prop('checked') || $('input[name=lab_s_depart]').prop('checked'))
     {
       $(this).prop('checked');
     }
     else
     {
       $(this).prop('checked',false);
       alert('kindly first you check see all labs / only his lab / only his college labs / only his depart labs');
     }
   }
 })

 $('input[name=lab_s]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=lab_e],input[name=lab_d]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=lab_ps]').prop('checked') || $('input[name=lab_s_colg]').prop('checked') || $('input[name=lab_s_depart]').prop('checked'))
     {
       $('input[name=lab_ps]').prop('checked',false);
       $('input[name=lab_s_colg]').prop('checked',false);
       $('input[name=lab_s_depart]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=lab_ps]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=lab_e],input[name=lab_d]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=lab_s]').prop('checked') || $('input[name=lab_s_colg]').prop('checked') || $('input[name=lab_s_depart]').prop('checked'))
     {
       $('input[name=lab_s]').prop('checked',false);
       $('input[name=lab_s_colg]').prop('checked',false);
       $('input[name=lab_s_depart]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=lab_s_colg]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=lab_e],input[name=lab_d]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=lab_s]').prop('checked') || $('input[name=lab_ps]').prop('checked') || $('input[name=lab_s_depart]').prop('checked'))
     {
       $('input[name=lab_s]').prop('checked',false);
       $('input[name=lab_ps]').prop('checked',false);
       $('input[name=lab_s_depart]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=lab_s_depart]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=lab_e],input[name=lab_d]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=lab_s]').prop('checked') || $('input[name=lab_ps]').prop('checked') || $('input[name=lab_s_colg]').prop('checked'))
     {
       $('input[name=lab_s]').prop('checked',false);
       $('input[name=lab_ps]').prop('checked',false);
       $('input[name=lab_s_colg]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })


 //machine
 $('input[name=machine_a]').change(function() {
   if($(this).prop('checked'))
   {
     if ($('input[name=machine_a_colg]').prop('checked') || $('input[name=machine_a_depart]').prop('checked') || $('input[name=machine_a_lab]').prop('checked'))
     {
       $('input[name=machine_a_colg]').prop('checked',false);
       $('input[name=machine_a_depart]').prop('checked',false);
       $('input[name=machine_a_lab]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=machine_a_colg]').change(function() {
   if($(this).prop('checked'))
   {
     if ($('input[name=machine_a]').prop('checked'))
     {
       $('input[name=machine_a]').prop('checked',false);
       $(this).prop('checked');
     }
   }else{

     $('input[name=machine_a_depart]').prop('checked',false);
     $('input[name=machine_a_lab]').prop('checked',false);

   }
 })

 $('input[name=machine_a_depart]').change(function() {
   if($(this).prop('checked'))
   {
      $('input[name=machine_a_colg]').prop('checked',true);

     if ($('input[name=machine_a]').prop('checked'))
     {
       $('input[name=machine_a]').prop('checked',false);
       $(this).prop('checked');
     }
   }else{
     $('input[name=machine_a_lab]').prop('checked',false);
   }
 })

 $('input[name=machine_a_lab]').change(function() {
   if($(this).prop('checked'))
   {
     $('input[name=machine_a_colg]').prop('checked',true);
     $('input[name=machine_a_depart]').prop('checked',true);

     if ($('input[name=machine_a]').prop('checked'))
     {
       $('input[name=machine_a]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=machine_e],input[name=machine_d],input[name=machine_v],input[name=machine_exp]').change(function(){
   if ($(this).prop('checked'))
   {
     if ($('input[name=machine_s]').prop('checked') || $('input[name=machine_depart_s]').prop('checked') || $('input[name=machine_lab_s]').prop('checked') || $('input[name=machine_colg_s]').prop('checked'))
     {
       $(this).prop('checked');
     }
     else
     {
       $(this).prop('checked',false);
       alert('kindly first you check see all equipments / only his college equipments / only his depart equipments / only his lab equipments ');
     }
   }
 })

 $('input[name=machine_s]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=machine_e],input[name=machine_d],input[name=machine_v],input[name=machine_exp]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=machine_depart_s]').prop('checked') || $('input[name=machine_lab_s]').prop('checked') || $('input[name=machine_colg_s]').prop('checked'))
     {
       $('input[name=machine_colg_s]').prop('checked',false);
       $('input[name=machine_depart_s]').prop('checked',false);
       $('input[name=machine_lab_s]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=machine_colg_s]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=machine_e],input[name=machine_d],input[name=machine_v],input[name=machine_exp]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=machine_depart_s]').prop('checked') || $('input[name=machine_lab_s]').prop('checked') || $('input[name=machine_s]').prop('checked'))
     {
       $('input[name=machine_depart_s]').prop('checked',false);
       $('input[name=machine_lab_s]').prop('checked',false);
       $('input[name=machine_s]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=machine_depart_s]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=machine_e],input[name=machine_d],input[name=machine_v],input[name=machine_exp]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=machine_s]').prop('checked') || $('input[name=machine_lab_s]').prop('checked') || $('input[name=machine_colg_s]').prop('checked'))
     {
         $('input[name=machine_s]').prop('checked',false);
         $('input[name=machine_colg_s]').prop('checked',false);
         $('input[name=machine_lab_s]').prop('checked',false);
         $(this).prop('checked');
     }
   }
 })

 $('input[name=machine_lab_s]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=machine_e],input[name=machine_d],input[name=machine_v],input[name=machine_exp]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=machine_s]').prop('checked') || $('input[name=machine_depart_s]').prop('checked') || $('input[name=machine_colg_s]').prop('checked'))
     {
       $('input[name=machine_s]').prop('checked',false);
        $('input[name=machine_depart_s]').prop('checked',false);
        $('input[name=machine_colg_s]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })


 // users(Active)
 $('input[name=user_a_to_d],input[name=user_va],input[name=user_ad],input[name=user_ea]').change(function(){
   if ($(this).prop('checked'))
   {
     if ($('input[name=user_sa]').prop('checked'))
     {
       $(this).prop('checked');
     }
     else
     {
       $(this).prop('checked',false);
       alert('kindly first you check show active users');
     }
   }
 })

 $('input[name=user_sa]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=user_a_to_d],input[name=user_va],,input[name=user_ad],input[name=user_ea]').prop('checked',false);
   }
 })

  // users(Deactive)
 $('input[name=user_d_to_a],input[name=user_vd],input[name=user_dd],input[name=user_ed]').change(function(){
   if ($(this).prop('checked'))
   {
     if ($('input[name=user_sd]').prop('checked'))
     {
       $(this).prop('checked');
     }
     else
     {
       $(this).prop('checked',false);
       alert('kindly first you check show deactive users');
     }
   }
 })

 $('input[name=user_sd]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=user_d_to_a],input[name=user_vd],input[name=user_dd],input[name=user_ed]').prop('checked',false);
   }
 })



 //maintenance(system requests)
 $('input[name=change_sys_st]').change(function(){
   if ($(this).prop('checked'))
   {
     if ($('input[name=maintenance_sysr]').prop('checked') || $('input[name=maintenance_sys_lab_r]').prop('checked') || $('input[name=maintenance_sys_depart_r]').prop('checked') || $('input[name=maintenance_sys_colg_r]').prop('checked'))
     {
       $(this).prop('checked');
     }
     else
     {
       $(this).prop('checked',false);
       alert('kindly first you check see all auto request / auto request for his college only / auto request for his department only / auto request for his lab only');
     }
   }
 })

 $('input[name=maintenance_sysr]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=change_sys_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=maintenance_sys_lab_r]').prop('checked') || $('input[name=maintenance_sys_depart_r]').prop('checked') || $('input[name=maintenance_sys_colg_r]').prop('checked'))
     {
       $('input[name=maintenance_sys_lab_r]').prop('checked',false);
       $('input[name=maintenance_sys_depart_r]').prop('checked',false);
        $('input[name=maintenance_sys_colg_r]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })
 $('input[name=maintenance_sys_colg_r]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=change_sys_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=maintenance_sysr]').prop('checked') || $('input[name=maintenance_sys_depart_r]').prop('checked') || $('input[name=maintenance_sys_lab_r]').prop('checked'))
     {
       $('input[name=maintenance_sysr]').prop('checked',false);
       $('input[name=maintenance_sys_depart_r]').prop('checked',false);
        $('input[name=maintenance_sys_lab_r]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })
 $('input[name=maintenance_sys_lab_r]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=change_sys_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=maintenance_sysr]').prop('checked') || $('input[name=maintenance_sys_depart_r]').prop('checked') || $('input[name=maintenance_sys_colg_r]').prop('checked'))
     {
        $('input[name=maintenance_sysr]').prop('checked',false);
        $('input[name=maintenance_sys_depart_r]').prop('checked',false);
        $('input[name=maintenance_sys_colg_r]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })
 $('input[name=maintenance_sys_depart_r]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=change_sys_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=maintenance_sysr]').prop('checked') || $('input[name=maintenance_sys_lab_r]').prop('checked') || $('input[name=maintenance_sys_colg_r]').prop('checked'))
     {
       $('input[name=maintenance_sysr]').prop('checked',false);
        $('input[name=maintenance_sys_lab_r]').prop('checked',false);
        $('input[name=maintenance_sys_colg_r]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 // maintenance(student requests)

 $('input[name=maintenance_a]').change(function() {
   if($(this).prop('checked'))
   {
     if ($('input[name=maintenance_a_colg]').prop('checked') || $('input[name=maintenance_a_depart]').prop('checked') || $('input[name=maintenance_a_lab]').prop('checked'))
     {
       $('input[name=maintenance_a_colg]').prop('checked',false);
       $('input[name=maintenance_a_depart]').prop('checked',false);
       $('input[name=maintenance_a_lab]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=maintenance_a_colg]').change(function() {
   if($(this).prop('checked'))
   {
     if ($('input[name=maintenance_a]').prop('checked'))
     {
       $('input[name=maintenance_a]').prop('checked',false);
       $(this).prop('checked');
     }
   }else{

     $('input[name=maintenance_a_depart]').prop('checked',false);
     $('input[name=maintenance_a_lab]').prop('checked',false);

   }
 })

 $('input[name=maintenance_a_depart]').change(function() {
   if($(this).prop('checked'))
   {
      $('input[name=maintenance_a_colg]').prop('checked',true);

     if ($('input[name=maintenance_a]').prop('checked'))
     {
       $('input[name=maintenance_a]').prop('checked',false);
       $(this).prop('checked');
     }
   }else{
     $('input[name=maintenance_a_lab]').prop('checked',false);
   }
 })

 $('input[name=maintenance_a_lab]').change(function() {
   if($(this).prop('checked'))
   {
     $('input[name=maintenance_a_colg]').prop('checked',true);
     $('input[name=maintenance_a_depart]').prop('checked',true);

     if ($('input[name=maintenance_a]').prop('checked'))
     {
       $('input[name=maintenance_a]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=change_students_st]').change(function(){
   if ($(this).prop('checked'))
   {
     if ($('input[name=maintenance_str]').prop('checked') || $('input[name=maintenance_pstr]').prop('checked') || $('input[name=maintenance_st_lab_r]').prop('checked') || $('input[name=maintenance_st_depart_r]').prop('checked') || $('input[name=maintenance_st_colg_r]').prop('checked'))
     {
       $(this).prop('checked');
     }
     else
     {
       $(this).prop('checked',false);
       alert('kindly first you check see all users requests / only his generated users requests / users requests for his college only / users requests for his department only / users requests for his lab only');
     }
   }
 })

 $('input[name=maintenance_str]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=change_students_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=maintenance_pstr]').prop('checked') || $('input[name=maintenance_st_depart_r]').prop('checked') || $('input[name=maintenance_st_lab_r]').prop('checked') || $('input[name=maintenance_st_colg_r]').prop('checked'))
     {
       $('input[name=maintenance_pstr]').prop('checked',false);
       $('input[name=maintenance_st_depart_r]').prop('checked',false);
       $('input[name=maintenance_st_lab_r]').prop('checked',false);
       $('input[name=maintenance_st_colg_r]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=maintenance_pstr]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=change_students_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=maintenance_str]').prop('checked') || $('input[name=maintenance_st_depart_r]').prop('checked') || $('input[name=maintenance_st_lab_r]').prop('checked') || $('input[name=maintenance_st_colg_r]').prop('checked'))
     {
       $('input[name=maintenance_str]').prop('checked',false);
       $('input[name=maintenance_st_depart_r]').prop('checked',false);
       $('input[name=maintenance_st_lab_r]').prop('checked',false);
       $('input[name=maintenance_st_colg_r]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })
 $('input[name=maintenance_st_colg_r]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=change_students_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=maintenance_str]').prop('checked') || $('input[name=maintenance_pstr]').prop('checked') || $('input[name=maintenance_st_lab_r]').prop('checked') || $('input[name=maintenance_st_depart_r]').prop('checked'))
     {
       $('input[name=maintenance_str]').prop('checked',false);
       $('input[name=maintenance_pstr]').prop('checked',false);
       $('input[name=maintenance_st_lab_r]').prop('checked',false);
       $('input[name=maintenance_st_depart_r]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })
 $('input[name=maintenance_st_depart_r]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=change_students_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=maintenance_str]').prop('checked') || $('input[name=maintenance_pstr]').prop('checked') || $('input[name=maintenance_st_lab_r]').prop('checked') || $('input[name=maintenance_st_colg_r]').prop('checked'))
     {
       $('input[name=maintenance_str]').prop('checked',false);
       $('input[name=maintenance_pstr]').prop('checked',false);
       $('input[name=maintenance_st_lab_r]').prop('checked',false);
       $('input[name=maintenance_st_colg_r]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=maintenance_st_lab_r]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=change_students_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=maintenance_str]').prop('checked') || $('input[name=maintenance_pstr]').prop('checked') || $('input[name=maintenance_st_depart_r]').prop('checked') || $('input[name=maintenance_st_colg_r]').prop('checked'))
     {
       $('input[name=maintenance_str]').prop('checked',false);
       $('input[name=maintenance_pstr]').prop('checked',false);
       $('input[name=maintenance_st_depart_r]').prop('checked',false);
       $('input[name=maintenance_st_colg_r]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })


 // usage requests
 $('input[name=usage_a]').change(function() {
   if($(this).prop('checked'))
   {
     if ($('input[name=usage_add_colg]').prop('checked') || $('input[name=usage_add_depart]').prop('checked') || $('input[name=usage_add_lab]').prop('checked'))
     {
       $('input[name=usage_add_colg]').prop('checked',false);
       $('input[name=usage_add_depart]').prop('checked',false);
       $('input[name=usage_add_lab]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=usage_add_colg]').change(function() {
   if($(this).prop('checked'))
   {
     if ($('input[name=usage_a]').prop('checked'))
     {
       $('input[name=usage_a]').prop('checked',false);
       $(this).prop('checked');
     }
   }else{

     $('input[name=usage_add_depart]').prop('checked',false);
     $('input[name=usage_add_lab]').prop('checked',false);

   }
 })

 $('input[name=usage_add_depart]').change(function() {
   if($(this).prop('checked'))
   {
      $('input[name=usage_add_colg]').prop('checked',true);

     if ($('input[name=usage_a]').prop('checked'))
     {
       $('input[name=usage_a]').prop('checked',false);
       $(this).prop('checked');
     }
   }else{
     $('input[name=usage_add_lab]').prop('checked',false);
   }
 })

 $('input[name=usage_add_lab]').change(function() {
   if($(this).prop('checked'))
   {
     $('input[name=usage_add_colg]').prop('checked',true);
     $('input[name=usage_add_depart]').prop('checked',true);

     if ($('input[name=usage_a]').prop('checked'))
     {
       $('input[name=usage_a]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })


 $('input[name=usage_change_st]').change(function(){
   if ($(this).prop('checked'))
   {
     if ($('input[name=usage_s]').prop('checked') || $('input[name=usage_ps]').prop('checked') || $('input[name=usage_lab_s]').prop('checked') || $('input[name=usage_depart_s]').prop('checked') || $('input[name=usage_colg_s]').prop('checked'))
     {
       $(this).prop('checked');
     }
     else
     {
       $(this).prop('checked',false);
       alert('kindly first you check see all usage requests / only his generated usage requests / usage requests for his college only / usage requests for his department only / usage requests for his lab only');
     }
   }
 })

 $('input[name=usage_s]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=usage_change_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=usage_depart_s]').prop('checked') || $('input[name=usage_ps]').prop('checked') || $('input[name=usage_lab_s]').prop('checked') || $('input[name=usage_colg_s]').prop('checked'))
     {
       $('input[name=usage_ps]').prop('checked',false);
       $('input[name=usage_lab_s]').prop('checked',false);
       $('input[name=usage_depart_s]').prop('checked',false);
       $('input[name=usage_colg_s]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=usage_ps]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=usage_change_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=usage_s]').prop('checked') || $('input[name=usage_depart_s]').prop('checked') || $('input[name=usage_lab_s]').prop('checked') || $('input[name=usage_colg_s]').prop('checked'))
     {
       $('input[name=usage_s]').prop('checked',false);
       $('input[name=usage_lab_s]').prop('checked',false);
       $('input[name=usage_depart_s]').prop('checked',false);
       $('input[name=usage_colg_s]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=usage_colg_s]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=usage_change_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=usage_s]').prop('checked') || $('input[name=usage_ps]').prop('checked') || $('input[name=usage_depart_s]').prop('checked') || $('input[name=usage_lab_s]').prop('checked'))
     {
       $('input[name=usage_s]').prop('checked',false);
       $('input[name=usage_ps]').prop('checked',false);
       $('input[name=usage_depart_s]').prop('checked',false);
       $('input[name=usage_lab_s]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=usage_lab_s]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=usage_change_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=usage_s]').prop('checked') || $('input[name=usage_ps]').prop('checked') || $('input[name=usage_depart_s]').prop('checked') || $('input[name=usage_colg_s]').prop('checked'))
     {
       $('input[name=usage_s]').prop('checked',false);
       $('input[name=usage_ps]').prop('checked',false);
       $('input[name=usage_depart_s]').prop('checked',false);
       $('input[name=usage_colg_s]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=usage_depart_s]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=usage_change_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=usage_s]').prop('checked') || $('input[name=usage_ps]').prop('checked') || $('input[name=usage_lab_s]').prop('checked') || $('input[name=usage_colg_s]').prop('checked'))
     {
       $('input[name=usage_s]').prop('checked',false);
       $('input[name=usage_ps]').prop('checked',false);
       $('input[name=usage_lab_s]').prop('checked',false);
       $('input[name=usage_colg_s]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })



 // order
 $('input[name=order_a]').change(function() {
   if($(this).prop('checked'))
   {
     if ($('input[name=order_a_colg]').prop('checked') || $('input[name=order_a_depart]').prop('checked') || $('input[name=order_a_lab]').prop('checked'))
     {
       $('input[name=order_a_colg]').prop('checked',false);
       $('input[name=order_a_depart]').prop('checked',false);
       $('input[name=order_a_lab]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

  $('input[name=order_a_colg]').change(function() {
    if($(this).prop('checked'))
    {
      if ($('input[name=order_a]').prop('checked'))
      {
        $('input[name=order_a]').prop('checked',false);
        $(this).prop('checked');
      }
    }else{

      $('input[name=order_a_depart]').prop('checked',false);
      $('input[name=order_a_lab]').prop('checked',false);

    }
  })

  $('input[name=order_a_depart]').change(function() {
    if($(this).prop('checked'))
    {
       $('input[name=order_a_colg]').prop('checked',true);

      if ($('input[name=order_a]').prop('checked'))
      {
        $('input[name=order_a]').prop('checked',false);
        $(this).prop('checked');
      }
    }else{
      $('input[name=order_a_lab]').prop('checked',false);
    }
  })

  $('input[name=order_a_lab]').change(function() {
    if($(this).prop('checked'))
    {
      $('input[name=order_a_colg]').prop('checked',true);
      $('input[name=order_a_depart]').prop('checked',true);

      if ($('input[name=order_a]').prop('checked'))
      {
        $('input[name=order_a]').prop('checked',false);
        $(this).prop('checked');
      }
    }
  })


 $('input[name=order_e],input[name=order_d],input[name=order_v],input[name=order_change_st]').change(function(){
   if ($(this).prop('checked'))
   {
     if ($('input[name=order_s]').prop('checked') || $('input[name=order_ps]').prop('checked') || $('input[name=order_s_colg]').prop('checked')
     || $('input[name=order_s_depart]').prop('checked') || $('input[name=order_s_lab]').prop('checked'))
     {
       $(this).prop('checked');
     }
     else
     {
       $(this).prop('checked',false);
       alert('kindly first you check see all orders / only his generated orders / orders for his college only / orders for his department only / orders for his lab only');
     }
   }
 })

 $('input[name=order_s]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=order_e],input[name=order_d],input[name=order_v],input[name=order_change_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=order_ps]').prop('checked') || $('input[name=order_s_colg]').prop('checked')
     || $('input[name=order_s_depart]').prop('checked') || $('input[name=order_s_lab]').prop('checked'))
     {
       $('input[name=order_ps]').prop('checked',false);
       $('input[name=order_s_colg]').prop('checked',false);
       $('input[name=order_s_depart]').prop('checked',false);
       $('input[name=order_s_lab]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=order_ps]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=order_e],input[name=order_d],input[name=order_v],input[name=order_change_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=order_s]').prop('checked') || $('input[name=order_s_colg]').prop('checked')
     || $('input[name=order_s_depart]').prop('checked') || $('input[name=order_s_lab]').prop('checked'))
     {
       $('input[name=order_s]').prop('checked',false);
       $('input[name=order_s_colg]').prop('checked',false);
       $('input[name=order_s_depart]').prop('checked',false);
       $('input[name=order_s_lab]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=order_s_colg]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=order_e],input[name=order_d],input[name=order_v],input[name=order_change_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=order_s]').prop('checked') || $('input[name=order_ps]').prop('checked')
     || $('input[name=order_s_depart]').prop('checked') || $('input[name=order_s_lab]').prop('checked'))
     {
       $('input[name=order_s]').prop('checked',false);
       $('input[name=order_ps]').prop('checked',false);
       $('input[name=order_s_depart]').prop('checked',false);
       $('input[name=order_s_lab]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=order_s_depart]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=order_e],input[name=order_d],input[name=order_v],input[name=order_change_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=order_s]').prop('checked') || $('input[name=order_ps]').prop('checked')
     || $('input[name=order_s_colg]').prop('checked') || $('input[name=order_s_lab]').prop('checked'))
     {
       $('input[name=order_s]').prop('checked',false);
       $('input[name=order_ps]').prop('checked',false);
       $('input[name=order_s_colg]').prop('checked',false);
       $('input[name=order_s_lab]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=order_s_lab]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=order_e],input[name=order_d],input[name=order_v],input[name=order_change_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=order_s]').prop('checked') || $('input[name=order_ps]').prop('checked')
     || $('input[name=order_s_colg]').prop('checked') || $('input[name=order_s_depart]').prop('checked'))
     {
       $('input[name=order_s]').prop('checked',false);
       $('input[name=order_ps]').prop('checked',false);
       $('input[name=order_s_colg]').prop('checked',false);
       $('input[name=order_s_depart]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 //chemicalinventroy
 $('input[name=chem_storage_e],input[name=chem_storage_del],input[name=chem_storage_gen_req]').change(function(){
   if ($(this).prop('checked'))
   {
     if ($('input[name=chem_storage_s]').prop('checked') || $('input[name=chem_storage_s_lab]').prop('checked'))
     {
       $(this).prop('checked');
     }
     else
     {
       $(this).prop('checked',false);
       alert('kindly first you check see all inventory / inventory for his lab only');
     }
   }
 })

 $('input[name=chem_storage_s]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=chem_storage_e],input[name=chem_storage_del],input[name=chem_storage_gen_req]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=chem_storage_s_lab]').prop('checked'))
     {
       $('input[name=chem_storage_s_lab]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=chem_storage_s_lab]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=chem_storage_e],input[name=chem_storage_del],input[name=chem_storage_gen_req]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=chem_storage_s]').prop('checked'))
     {
       $('input[name=chem_storage_s]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=chem_req_change_st]').change(function(){
   if ($(this).prop('checked'))
   {
     if ($('input[name=chem_req_s]').prop('checked') || $('input[name=chem_req_s_lab]').prop('checked')
     || $('input[name=chem_req_s_gen]').prop('checked'))
     {
       $(this).prop('checked');
     }
     else
     {
       $(this).prop('checked',false);
       alert('kindly first you check see all requests / requests for his lab only / only his generated requests');
     }
   }
 })

 $('input[name=chem_req_s]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=chem_req_change_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=chem_req_s_lab]').prop('checked') || $('input[name=chem_req_s_gen]').prop('checked'))
     {
       $('input[name=chem_req_s_lab]').prop('checked',false);
       $('input[name=chem_req_s_gen]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=chem_req_s_lab]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=chem_req_change_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=chem_req_s]').prop('checked') || $('input[name=chem_req_s_gen]').prop('checked'))
     {
       $('input[name=chem_req_s]').prop('checked',false);
       $('input[name=chem_req_s_gen]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })

 $('input[name=chem_req_s_gen]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=chem_req_change_st]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=chem_req_s_lab]').prop('checked') || $('input[name=chem_req_s]').prop('checked'))
     {
       $('input[name=chem_req_s]').prop('checked',false);
       $('input[name=chem_req_s_lab]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })


 //animal inventory
 $('input[name=animal_e],input[name=animal_del],input[name=animal_vd]').change(function(){
   if ($(this).prop('checked'))
   {
     if ($('input[name=animal_s]').prop('checked') || $('input[name=animal_s_colg]').prop('checked')
     || $('input[name=animal_s_depart]').prop('checked') || $('input[name=animal_s_lab]').prop('checked'))
     {
       $(this).prop('checked');
     }
     else
     {
       $(this).prop('checked',false);
       alert('kindly first you check see all animals / animals for his college only / animals for his department only / animals for his lab only');
     }
   }
 })

 $('input[name=animal_s]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=animal_e],input[name=animal_del],input[name=animal_vd]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=animal_s_colg]').prop('checked') || $('input[name=animal_s_depart]').prop('checked')
     || $('input[name=animal_s_lab]').prop('checked'))
     {
       $('input[name=animal_s_colg]').prop('checked',false);
       $('input[name=animal_s_depart]').prop('checked',false);
       $('input[name=animal_s_lab]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })


 $('input[name=animal_s_colg]').change(function() {
   if ($(this).prop('checked')==false)
   {
     $('input[name=animal_e],input[name=animal_del],input[name=animal_vd]').prop('checked',false);
   }
   else if($(this).prop('checked'))
   {
     if ($('input[name=animal_s]').prop('checked') || $('input[name=animal_s_depart]').prop('checked')
     || $('input[name=animal_s_lab]').prop('checked'))
     {
       $('input[name=animal_s]').prop('checked',false);
       $('input[name=animal_s_depart]').prop('checked',false);
       $('input[name=animal_s_lab]').prop('checked',false);
       $(this).prop('checked');
     }
   }
 })


  $('input[name=animal_s_depart]').change(function() {
    if ($(this).prop('checked')==false)
    {
      $('input[name=animal_e],input[name=animal_del],input[name=animal_vd]').prop('checked',false);
    }
    else if($(this).prop('checked'))
    {
      if ($('input[name=animal_s]').prop('checked') || $('input[name=animal_s_colg]').prop('checked')
      || $('input[name=animal_s_lab]').prop('checked'))
      {
        $('input[name=animal_s]').prop('checked',false);
        $('input[name=animal_s_colg]').prop('checked',false);
        $('input[name=animal_s_lab]').prop('checked',false);
        $(this).prop('checked');
      }
    }
  })


   $('input[name=animal_s_lab]').change(function() {
     if ($(this).prop('checked')==false)
     {
       $('input[name=animal_e],input[name=animal_del],input[name=animal_vd]').prop('checked',false);
     }
     else if($(this).prop('checked'))
     {
       if ($('input[name=animal_s]').prop('checked') || $('input[name=animal_s_colg]').prop('checked')
       || $('input[name=animal_s_depart]').prop('checked'))
       {
         $('input[name=animal_s]').prop('checked',false);
         $('input[name=animal_s_colg]').prop('checked',false);
         $('input[name=animal_s_depart]').prop('checked',false);
         $(this).prop('checked');
       }
     }
   })

   $('input[name=animal_a]').change(function() {
     if($(this).prop('checked'))
     {
       if ($('input[name=animal_a_colg]').prop('checked') || $('input[name=animal_a_depart]').prop('checked')
       || $('input[name=animal_a_lab]').prop('checked'))
       {
         $('input[name=animal_a_colg]').prop('checked',false);
         $('input[name=animal_a_depart]').prop('checked',false);
         $('input[name=animal_a_lab]').prop('checked',false);
         $(this).prop('checked');
       }
     }
   })

    $('input[name=animal_a_colg]').change(function() {
      if($(this).prop('checked'))
      {
        if ($('input[name=animal_a]').prop('checked'))
        {
          $('input[name=animal_a]').prop('checked',false);
          $(this).prop('checked');
        }
      }else{

        $('input[name=animal_a_depart]').prop('checked',false);
        $('input[name=animal_a_lab]').prop('checked',false);

      }
    })

    $('input[name=animal_a_depart]').change(function() {
      if($(this).prop('checked'))
      {
         $('input[name=animal_a_colg]').prop('checked',true);

        if ($('input[name=animal_a]').prop('checked'))
        {
          $('input[name=animal_a]').prop('checked',false);
          $(this).prop('checked');
        }
      }else{
        $('input[name=animal_a_lab]').prop('checked',false);
      }
    })

    $('input[name=animal_a_lab]').change(function() {
      if($(this).prop('checked'))
      {
        $('input[name=animal_a_colg]').prop('checked',true);
        $('input[name=animal_a_depart]').prop('checked',true);

        if ($('input[name=animal_a]').prop('checked'))
        {
          $('input[name=animal_a]').prop('checked',false);
          $(this).prop('checked');
        }
      }
    })


 </script>
