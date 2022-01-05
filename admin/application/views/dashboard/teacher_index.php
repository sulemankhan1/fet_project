<style type="text/css">
.font-large-1{
  margin-right: 9px!important;
  margin-left: 9px!important;
}
.span-head{
  margin-left: 9px!important;
}
</style>
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> -->
<div class="main-content">
  <div class="content-wrapper">
    <!--Statistics cards Starts-->
    <div class="card bg-primary">
      <div class="card-header">
        <div class="row p-2">
          <div class="col-md-12 text-center text-white" style="text-transform:uppercase!important;">
            <h3><b>Welcome to <?=@$this->session->userdata('settings')['NAME']?></b></h3>
          </div>
        </div>
      </div>
    </div>

    <!--Statistics cards Starts-->
    <div class="row">
      <div class="col-md-3">
        <div class="card gradient-blackberry">
          <div class="card-content">
            <div class="card-body pt-2 pb-0">
              <div class="media">
                <div class="media-body white text-left">
                  <h3 class="font-large-1 mb-0"> 45</h3>
                  <span class="span-head"> No of Subjects</span>
                </div>
                <div class="media-right white text-right">
                  <i class="icon-calendar font-large-1"></i>
                </div>
              </div>
            </div>
            <div id="Widget-line-chart6" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-3">
        <div class="card gradient-pomegranate">
          <div class="card-content">
            <div class="card-body pt-2 pb-0">
              <div class="media">
                <div class="media-body white text-left">
                  <h3 class="font-large-1 mb-0"> 450</h3>
                  <span class="span-head"> Users Registered</span>
                </div>
                <div class="media-right white text-right">
                  <i class="fa fa-sitemap font-large-1"></i>
                </div>
              </div>
            </div>
            <div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-3">
        <div class="card gradient-ibiza-sunset">
          <div class="card-content">
            <div class="card-body pt-2 pb-0">
              <div class="media">
                <div class="media-body white text-left">
                  <h3 class="font-large-1 mb-0"> 100</h3>
                  <span class="span-head"> Faculty Members</span>
                </div>
                <div class="media-right white text-right">
                  <i class="ft-cpu font-large-1"></i>
                </div>
              </div>
            </div>
            <div id="Widget-line-chart1" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
            </div>

          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card gradient-green-tea">
          <div class="card-content">
            <div class="card-body pt-2 pb-0">
              <div class="media">
                <div class="media-body white text-left">
                  <h3 class="font-large-1 mb-0"> 120</h3>
                  <span class="span-head"> No of Teachers</span>
                </div>
                <div class="media-right white text-right">
                  <i class="ft-command font-large-1"></i>
                </div>
              </div>
            </div>
            <div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Statistics cards Ends-->
<!-- ViewModalEnd -->
<script src="<?=base_url('app-assets/vendors/js/chartist.min.js')?>" type="text/javascript"></script>
<script src="<?=base_url('app-assets/js/dashboard1.js')?>" type="text/javascript"></script>
