</div>
</div>

<footer class="footer footer-static footer-light mt-4 mb-1" style="background-color:white;">

  <p class="clearfix text-muted text-sm-center" style="text-align:center!important;"><?=$this->session->userdata('settings')['FOOTER']?></p>
</footer>

</div>


<!-- ////////////////////////////////////////////////////////////////////////////-->



<!-- BEGIN VENDOR JS-->



<script src="<?=base_url('app-assets/vendors/js/core/popper.min.js')?>" type="text/javascript"></script>


<script src="<?=base_url('app-assets/vendors/js/core/bootstrap.min.js')?>" type="text/javascript"></script>

<script src="<?=base_url('app-assets/vendors/js/perfect-scrollbar.jquery.min.js')?>" type="text/javascript"></script>

<script src="<?=base_url('app-assets/vendors/js/prism.min.js')?>" type="text/javascript"></script>

<script src="<?=base_url('app-assets/vendors/js/jquery.matchHeight-min.js')?>" type="text/javascript"></script>

<script src="<?=base_url('app-assets/vendors/js/screenfull.min.js')?>" type="text/javascript"></script>

<script src="<?=base_url('app-assets/vendors/js/pace/pace.min.js')?>" type="text/javascript"></script>

<!-- BEGIN VENDOR JS-->
<script src="<?=base_url('app-assets/vendors/js/chartist.min.js')?>" type="text/javascript"></script>
<!-- BEGIN APEX JS-->

<script src="<?=base_url('app-assets/js/app-sidebar.js')?>" type="text/javascript"></script>

<script src="<?=base_url('app-assets/js/notification-sidebar.js')?>" type="text/javascript"></script>

<script src="<?=base_url('app-assets/js/customizer.js')?>" type="text/javascript"></script>

<!-- END APEX JS-->

<!-- BEGIN PAGE LEVEL JS-->

<script src="<?=base_url('app-assets/js/dashboard1.js')?>" type="text/javascript"></script>

<!-- END PAGE LEVEL JS-->


<script type="text/javascript">

$(document).on('change','input[type="file"]',function(e){

  var fileName = e. target. files[0]. name;
  $(this).closest('.custom-file').find('.custom-file-label').text(fileName);

});

$('.change_language').click(function () {

  var language = $(this).attr('data');

  $.ajax({
    url : '<?=base_url('admin/change_language/')?>'+language,
    dataType : 'json',
    success :function (data) {

      if (data == 'true') {

        location.reload(true);

      }

    }

  })

})

document.querySelector("input[type=number]").addEventListener("keypress", function (evt) {
    if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57)
    {
        evt.preventDefault();
    }
});




</script>
</body>





</html>
