<?php
$notifications = $this->notifications->getAllForUser();
$user_type = $this->session->user_type;
 ?>

<!-- main menu-->
<!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
<div data-active-color="white" data-background-color="<?=@$this->session->userdata('settings')['SIDEBAR_COLOR'];?>" data-image="<?=@site_url('uploads/sidebar_img/'.$this->session->userdata('settings')['SIDEBAR_IMG'])?>" class="app-sidebar">
  <!-- main menu header-->
  <!-- Sidebar Header starts-->
  <div class="sidebar-header">
      <a href="<?=site_url('/')?>">
        <div class="logo clearfix" style="padding-top: 30px">

          <?php if (@getimagesize('uploads/sidebar_logo/'.$this->session->userdata('settings')['LOGO'])): ?>

            <img src="<?=base_url('uploads/sidebar_logo/'.$this->session->userdata('settings')['LOGO'])?>" class="text align-middle" style="max-height: 125px;max-width: 215px;"/>

              <?php else: ?>

            <img src="<?=base_url('app-assets/images/no-image-available.png')?>"  class="text align-middle" style="max-height: 125px;max-width: 215px;"/>

          <?php endif; ?>

          <!-- <strong class="text" style="color:#fff; font-size: 20px;">
          Martinbornilla
          </strong> -->
        </div>
      </a>
  </div>
  <!-- Sidebar Header Ends-->
  <!-- / main menu header-->
  <!-- main menu content -->
  <div class="sidebar-content">
    <div class="nav-container">

      <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            <li class=" nav-item <?=(@$active_menu=='dashboard'?'active':'')?>">
              <a href="<?=site_url('dashboard');?>"><i class="ft-home"></i><span data-i18n="" class="menu-title" style="font-size: 14px!important;"> Dashboard</span>
              </a>
            </li>
            <?php if($user_type == 'ADMIN' || $user_type == 'SUPERADMIN'){ ?>
              <li class="has-sub nav-item <?=(@$active_menu=='manage_subjects' || @$active_menu=='manage_classrooms'?'open':'')?>"><a><i class="icon-rocket"></i><span data-i18n="" class="menu-title"> Manage</span></a>
                  <ul class="menu-content" style="">
                    <li class="<?=(@$active_menu=='manage_subjects'?'active':'')?>"><a href="<?=site_url('manage/subjects')?>" class="menu-item"> Subjects</a>
                    </li>
                    <li class="<?=(@$active_menu=='manage_classrooms'?'active':'')?>"><a href="<?=site_url('manage/classrooms')?>" class="menu-item"> Class Rooms</a>
                    </li>
                  </ul>
              </li>
            <?php } ?>

            <?php if($user_type == 'ADMIN' || $user_type == 'SUPERADMIN'){ ?>
              <li class="has-sub nav-item <?=(@$active_menu=='view_pending_users' || @$active_menu=='view_users'?'open':'')?>"><a><i class="ft-users"></i><span data-i18n="" class="menu-title"> Users</span></a>
                <ul class="menu-content" style="">
                  <li class="<?=(@$active_menu=='create_user'?'active':'')?>"><a href="<?=site_url('create_user');?>" class="menu-item">Create User</a>
                  </li>
                  <li class="<?=(@$active_menu=='view_users'?'active':'')?>"><a href="<?=site_url('view_users');?>" class="menu-item"> View Users</a>
                  </li>
                  <li class="<?=(@$active_menu=='view_pending_users'?'active':'')?>"><a href="<?=site_url('view_users/pending');?>" class="menu-item"> Pending users</a>
                  </li>
                </ul>
              </li>
            <?php } ?>

            <!-- <li class="has-sub nav-item <?=(@$active_menu=='add_role' || @$active_menu=='view_roles'?'open':'')?>"><a><i class="ft-shuffle"></i><span data-i18n="" class="menu-title"> Roles</span></a>
                <ul class="menu-content" style="">
                  <li class="<?=(@$active_menu=='add_role'?'active':'')?>"><a href="<?=site_url('add_role')?>" class="menu-item"> Add New Role</a>
                  </li>
                </ul>
                <ul class="menu-content" style="">
                  <li class="<?=(@$active_menu=='view_roles'?'active':'')?>"><a href="<?=site_url('roles')?>" class="menu-item"> View Roles</a>
                  </li>
                </ul>
            </li> -->


            <?php if($user_type == 'ADMIN' || $user_type == 'SUPERADMIN'){ ?>
              <li class="has-sub nav-item <?=(@$active_menu=='add_notification' || @$active_menu=='view_notifications'?'open':'')?>"><a><i class="icon-speech"></i><span data-i18n="" class="menu-title"> News/Notifications</span></a>
                  <ul class="menu-content" style="">
                    <li class="<?=(@$active_menu=='add_notification'?'active':'')?>"><a href="<?=site_url('new_notification')?>" class="menu-item"> Add News</a>
                    </li>
                    <li class="<?=(@$active_menu=='view_notifications'?'active':'')?>"><a href="<?=site_url('view_notifications')?>" class="menu-item"> View All News</a>
                    </li>
                  </ul>
              </li>
            <?php } else { ?>
              <li class=" nav-item <?=(@$active_menu=='view_notifications'?'active':'')?>">
                <a href="<?=site_url('view_notifications');?>"><i class="icon-speech"></i><span data-i18n="" class="menu-title" style="font-size: 14px!important;"> News/Notifications</span>
                </a>
              </li>
            <?php } ?>

            <?php if($user_type == 'ADMIN' || $user_type == 'SUPERADMIN'){ ?>
              <li class="has-sub nav-item <?=(@$active_menu=='add_timetable' || @$active_menu=='view_timetables'?'open':'')?>"><a><i class="icon-calendar"></i><span data-i18n="" class="menu-title"> Timetable</span></a>
                  <ul class="menu-content" style="">
                    <li class="<?=(@$active_menu=='add_timetable'?'active':'')?>"><a href="<?=site_url('new_timetable')?>" class="menu-item"> Add Timetable</a>
                    </li>
                    <li class="<?=(@$active_menu=='view_timetables'?'active':'')?>"><a href="<?=site_url('view_timetables')?>" class="menu-item"> View Timetables</a>
                    </li>
                  </ul>
              </li>
            <?php } else { ?>
              <li class=" nav-item <?=(@$active_menu=='timetable'?'active':'')?>">
                <a href="<?=site_url('student_timetable');?>"><i class="icon-calendar"></i><span data-i18n="" class="menu-title" style="font-size: 14px!important;"> Timetable</span>
                </a>
              </li>
            <?php } ?>
            <?php if($user_type == 'ADMIN' || $user_type == 'SUPERADMIN'){ ?>
              <li class=" nav-item <?=(@$active_menu=='setting'?'active':'')?>">
                <a href="<?=site_url('settings');?>"><i class="ft-settings"></i><span data-i18n="" class="menu-title" style="font-size: 14px!important;"> Settings</span>
                </a>
              </li>
            <?php } ?>

        <br>
      </ul>
    </div>
  </div>
  <!-- main menu content-->
  <div class="sidebar-background"></div>
  <!-- main menu footer-->
  <!-- include includes/menu-footer-->
  <!-- main menu footer-->
</div>
<!-- / main menu-->
<div class="main-panel">
  <!-- Navbar (Header) Starts-->
  <nav class="navbar navbar-expand-lg navbar-light bg-faded">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      </div>
      <div class="navbar-container">
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav">

            <li class="dropdown nav-item">
              <a href="<?=site_url('../')?>" class="btn btn-default" target="_blank">Open Site <i class="icon-action-redo"></i> </a>
            </li>
            <li class="dropdown nav-item">
               <a id="dropdownBasic2" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle">
                 <i class="ft-bell font-medium-3 blue-grey darken-4"></i>
                 <?php  if(count($notifications) > 0) { ?>
                    <span class="notification badge badge-pill badge-danger"><?=count($notifications)?></span>
                  <?php } ?>
                  <p class="d-none">Notifications</p>
               </a>
               <div class="notification-dropdown dropdown-menu dropdown-menu-right">
                  <div class="noti-list">
                    <?php foreach($notifications as $notification) { ?>
                      <a href="<?=site_url("admin/open_notification/$notification->id")?>" class="dropdown-item noti-container py-3 border-bottom border-bottom-blue-grey border-bottom-lighten-4">
                        <i class="ft-bell info float-left d-block font-large-1 mt-1 mr-2"></i>
                        <span class="noti-wrapper"><span class="noti-title line-height-1 d-block text-bold-400 info"><?=$notification->msg?></span>
                          <span class="noti-text"><?=date('d-M-Y h:i a', strtotime($notification->datetime))?></span>
                        </span>
                      </a>
                    <?php } ?>
                    <?php if(empty($notifications)) { ?>
                      <div class="dropdown-item noti-container py-3">No Notifications found</div>
                    <?php } ?>
                  </div>
                  <a href="<?=site_url('notifications')?>" class="noti-footer primary text-center d-block border-top border-top-blue-grey border-top-lighten-4 text-bold-400 py-1">Show All Notifications</a>
               </div>
            </li>
            <li class="dropdown nav-item mt-0">
              <a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle" style="padding: 0px;padding-bottom:1px;">
                <!-- <i class="ft-user font-medium-3 blue-grey darken-4"></i> -->
                <?php if (@getimagesize(base_url('uploads/users/'.$this->session->userdata('user_img')))): ?>

                    <img src="<?=base_url('uploads/users/'.$this->session->userdata('user_img'))?>" alt="" style="max-width:46px;max-height: 46px;">

                  <?php else: ?>

                    <img src="<?=base_url('app-assets/images/profile-pic-default.png')?>" alt="" style="max-width:46px;max-height: 46px;">

                <?php endif; ?>
                <?=$this->session->userdata('username')?>
                <p class="d-none">User Settings</p></a>
              <div ngbdropdownmenu="" aria-labelledby="dropdownBasic3" class="dropdown-menu dropdown-menu-right">

                <a href="<?=site_url('edit_profile')?>" class="dropdown-item"><i class="icon-pencil mr-2"></i><span> Edit Profile</span></a>
                <a href="<?=site_url('change_password')?>" class="dropdown-item"><i class="icon-pencil mr-2"></i><span> Change Password</span></a>
                <a href="<?=site_url('view_profile/'.hashids_encrypt($this->session->userdata('user_id')))?>" class="dropdown-item"><i class="ft-eye mr-2"></i><span> View Profile</span></a>
                <a href="<?=site_url('Auth/logout')?>" class="dropdown-item"><i class="ft-power mr-2"></i><span> Logout</span></a>

              </div>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Navbar (Header) Ends-->
  <div class="main-content">
    <div class="content-wrapper"><!-- Basic Elements start -->
