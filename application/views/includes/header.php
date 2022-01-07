<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="keywords" content="FET, FET Faculty, Course Contents,Course Schemes,Time Table,About FET">
<meta name="description" content="">

<!-- Page Title -->
<title><?=(@$title != ''?$title:'Faculty of Engineering & Technology, University of Sindh')?></title>

<!-- Favicon and Touch Icons -->
<link rel="shortcut icon" href="assets/images/FET-logo.png">


<!-- Stylesheet -->
<link href="<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
<link href="<?=base_url('assets/css/jquery-ui.min.css')?>" rel="stylesheet" type="text/css">
<link href="<?=base_url('assets/css/animate.css')?>" rel="stylesheet" type="text/css">
<link href="<?=base_url('assets/css/css-plugin-collections.css')?>" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="<?=base_url('assets/css/menuzord-megamenu.css')?>" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="<?=base_url('assets/css/menuzord-skins/menuzord-boxed.css')?>" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="<?=base_url('assets/css/style-main.css')?>" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="<?=base_url('assets/css/preloader.css')?>" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?=base_url('assets/css/custom-bootstrap-margin-padding.css')?>" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?=base_url('assets/css/responsive.css')?>" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="assets/css/style.css" rel="stylesheet" type="text/css"> -->
<link href="<?=base_url('assets/css/custom.css')?>" rel="stylesheet" type="text/css">
<link href="<?=base_url('assets/fonts/simple-line-icons.css')?>" rel="stylesheet" type="text/css">

<!-- CSS | Theme Color -->
<link href="<?=base_url('assets/css/colors/theme-skin-color-set1.css')?>" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="assets/css/style.css" rel="stylesheet" type="text/css"> -->
<link  href="<?=base_url('assets/js/revolution-slider/css/settings.css')?>" rel="stylesheet" type="text/css"/>
<link  href="<?=base_url('assets/js/revolution-slider/css/layers.css')?>" rel="stylesheet" type="text/css"/>
<link  href="<?=base_url('assets/js/revolution-slider/css/navigation.css')?>" rel="stylesheet" type="text/css"/>

<!-- external javascripts -->
<script src="<?=base_url('assets/js/jquery-2.2.4.min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery-ui.min.js')?>"></script>
<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?=base_url('assets/js/jquery-plugin-collection.js')?>"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="<?=base_url('assets/js/revolution-slider/js/jquery.themepunch.tools.min.js')?>"></script>
<script src="<?=base_url('assets/js/revolution-slider/js/jquery.themepunch.revolution.min.js')?>"></script>


<link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">

<!-- <link rel="stylesheet" href="<?=base_url('assets/css/Titlestyle.css')?>"> -->

<style>

  .open>.dropdown-menu {

    display: inline-grid;

  }

</style>

</head>
<body class="">
  <div id="wrapper" class="clearfix">
    <!-- preloader -->
    <!-- <div id="preloader">
      <div id="spinner">
        <div class="preloader-dot-loading">
          <div class="dfg"><i></i><i></i><i></i><i></i></div>
        </div>
      </div>
      <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div> -->

    <!-- Header -->
    <header id="header" class="header">
      <div class="header-top bg-light sm-text-center style-bordered">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="widget">
                 <i class="fa fa-clock-o text-theme-colored"></i> Opening Hours:  Mon - Fri : 8.00 am - 7.00 pm, Sunday Closed
                <a href="mailto:info@iict.usindh.edu.pk"><i class="fa fa-envelope ml-10"></i></a>
              </div>
            </div>
            <div class="col-md-6 mt-4 mb-4">
              <div class="widget">
                <ul class="list-inline pull-right flip sm-pull-none sm-text-center list-bordered">

                  <?php  if($this->session->userdata('user_id') == ''){?>

                    <li class="bg-theme-colored text-white mb-xs-5"><i class="fa fa-sign-in-alt"></i><a class="text-white" href="<?=site_url('login')?>"> Sign In </a></li>
                    <li class="bg-theme-colored3 text-white mb-xs-5"><i class="fa fa-registered"></i> <a class="text-white" href="<?=site_url('register')?>">Register</a></li>

                  <?php }else{ ?>
                    <li class="nav-item dropdown bg-theme-colored text-white mb-xs-5">
                      <i class="fa fa-user"></i>
                      <a class="nav-link dropdown-toggle text-white" href="<?=site_url('login')?>" data-toggle="dropdown" href="#"> <?=$this->session->username?> </a>
                      <div class="dropdown-menu" style="padding-left: 7px;">
                        <a class="dropdown-item" href="<?=site_url('admin/dashboard')?>">Dashboard</a>
                        <a class="dropdown-item" href="<?=site_url('edit_profile/'.hashids_encrypt($this->session->userdata('user_id')))?>">Edit Profile</a>
                        <a class="dropdown-item" href="<?=site_url('view_profile/'.hashids_encrypt($this->session->userdata('user_id')))?>">View Profile</a>
                        <a class="dropdown-item" href="<?=site_url('logout')?>">Logout</a>
                      </div>
                    </li>

                  <?php } ?>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="header-middle p-0">
        <div class="container pt-30 pb-30">
          <div class="row">
            <div class="col-md-12">
              <div class="text-center">
                <a class="" href="index.html"><img src="assets/images/FET-logo.png" alt=""></a>
                <div class="pull-center logoname"><strong style="font-size:30px; color: #2F506C; font-family:Century Gothic">Faculty of Engineering & Technology</strong><br /><span style="color: #2F506C; font-family:Century Gothic;font-size: 22px;"> University of Sindh, Pakistan</span></div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
        <div class="container-fuild">
          <nav id="menuzord-right" class="menuzord orange no-bg">


              <a class="menuzord-brand pull-left flip mb-15" href="<?=site_url('/')?>" id="logo-size"><img src="<?=base_url("assets/images/FET-logo.png")?>" alt="">
                <h4 id="logo-size1">Faculty of Engineering & Technology<br><small><b>University of Sindh, Pakistan</b></small></h4>
              </a>



            <ul class="menuzord-menu">
              <li><a href="<?=site_url('/')?>">Home</a>

            </li>
            <li>
              <a href="javascript:void(0)">programs</a>
              <ul class="dropdown">
                <li><a href="<?=site_url('software_eng')?>">Software Engineering</a></li>
                <li><a href="<?=site_url('information_tech')?>">Information Technology</a></li>
                <li><a href="<?=site_url('telecommunication')?>">Telecommunication</a></li>
                <li><a href="<?=site_url('electronics')?>">Electronics</a></li>
              </ul>
            </li>

              <li><a href="<?=site_url('timetable')?>">Time Table</a>

                </li>
               <li><a href="<?=site_url('faculty') ?>">Faculty</a></li>
                <li><a href="<?=site_url('news')?>">News</a></li>
                <!-- <li><a href="javascript:void(0)">Resources</a>
                  <ul class="dropdown">
                    <li><a href="#">FYP Resources</a></li>
                    <li><a href="<?=site_url('telephone')?>">Telephone</a></li>
                    <li><a href="#">Site Map</a></li>
                  </ul>
                </li> -->
                <li><a href="<?=site_url('about')?>">About</a></li>
                  <li><a href="<?=site_url('contact')?>">Contact</a></li>

                 <!--<li><a href="javascripts:void(0)">Sign In</a>-->

                </li>
            </ul>

          </nav>
        </div>
      </div>
    </div>
    </header>
