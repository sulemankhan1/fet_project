<!-- This site is developed by Alphinex solutions {alphinex.com} -->

<html lang="en" class="loading">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <meta name="author" content="Alphinex solutions">

    <title><?=@($title) ? $title : "F.A.T System"?></title>

    <meta name="apple-mobile-web-app-capable" content="yes">

    <meta name="apple-touch-fullscreen" content="yes">

    <meta name="apple-mobile-web-app-status-bar-style" content="default">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">


    <!-- BEGIN VENDOR CSS-->


    <!-- font icons-->

    <link rel="stylesheet" type="text/css" href="<?=base_url('app-assets/fonts/feather/style.min.css');?>">

    <link rel="stylesheet" type="text/css" href="<?=base_url('app-assets/fonts/simple-line-icons/style.css');?>">

    <link rel="stylesheet" type="text/css" href="<?=base_url('app-assets/fonts/font-awesome/css/font-awesome.min.css');?>">

    <link rel="stylesheet" type="text/css" href="<?=base_url('app-assets/vendors/css/perfect-scrollbar.min.css');?>">

    <link rel="stylesheet" type="text/css" href="<?=base_url('app-assets/vendors/css/prism.min.css');?>">

    <link rel="stylesheet" type="text/css" href="<?=base_url('app-assets/vendors/css/chartist.min.css');?>">

    <!-- END VENDOR CSS-->

    <!-- BEGIN Alphinex CSS-->

    <link rel="stylesheet" type="text/css" href="<?=base_url('app-assets/css/app.css');?>">

    <link rel="stylesheet" type="text/css" href="<?=base_url('app-assets/css/custom.css');?>">

    <!-- END Alphinex CSS-->


    <!-- END Custom CSS-->

  <script src="<?=base_url('app-assets/vendors/js/core/jquery-3.2.1.min.js')?>" type="text/javascript"></script>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url("app-assets/datatable/datatables.min.css")?>"/>
    <script type="text/javascript" src="<?=base_url("app-assets/datatable/datatables.min.js")?>"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="<?=base_url('app-assets/images/logo.jpg')?>">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <style media="screen">
      .select2-container--default .select2-selection--single {
        height: 38px;
      }
      .select2-container--default .select2-selection--single .select2-selection__rendered {
        line-height: 36px;
      }
      .select2-container--default .select2-selection--single .select2-selection__arrow {
        top : 7px;
      }
      .ql-editor{
        height: 220px!important;
      }
      .custom-file{

      z-index: 0!important;

      }
      form label{
        color : black!important;
      }
      .readonlyfield{
        background-color: grey;
      }

      .fix-img-size{
        max-height: 90px;max-width: 90px;
      }
    </style>
  </head>

  <body data-col="2-columns" class=" 2-columns ">


    <div class="wrapper <?=@($menu_collapsed && $menu_collapsed == true)?'nav-collapsed menu-collapsed':'' ?>">
<div class="main-content">
