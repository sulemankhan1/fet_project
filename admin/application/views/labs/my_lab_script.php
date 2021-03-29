<script type="text/javascript">
  $(document).ready(function(){

    $('#DataTable').DataTable({
      "processing" : true,
      "serverSide" : true,
      "order":[],
      "ajax" : {
        url:"<?=site_url('labs/getMyLabMachines')?>",
        type:"POST"
      },
      "columnDefs":[
                {
                     "targets":[0, 4],
                     "orderable":false,
                },
      ],
      dom: 'lBfrtip',
      buttons: [{ extend: 'excel', text: 'Export to excel' }],
      "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
    });


 });

</script>
