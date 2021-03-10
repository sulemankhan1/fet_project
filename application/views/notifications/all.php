<div class="main-content">
   <div class="content-wrapper">
      <!--Statistics cards Starts-->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-2">
              <h4 class="card-title"><?=$title?> </h4>
              <a href="<?=site_url('admin/mark_all_read_notifications')?>" class="pull-right"><i class="fa fa-envelope"></i> Mark All As Read</a>
              <p class="card-text">List of all your unseen Notifications.</p>
            </div>
            <div class="card-content">
              <div class="col-md-12">
                <ul class="list-group">
                  <?php
                  if($notifications) {
                  foreach($notifications as $notification) { ?>
                    <li class="list-group-item">
                      <i class="icon-bell"></i> <a href="<?=site_url("admin/open_notification/$notification->id")?>" class="btn-link"><?=$notification->msg?></a>
                      <span class="pull-right text-muted"><?=date('d-M-Y h:i a', strtotime($notification->datetime))?></span>
                    </li>
                  <?php } }?>

                  <?php if(empty($notifications)) { ?>
                    <li class="list-group-item">
                      No Notifications found
                    </li>
                  <?php } ?>
                </ul>
              </div>
              <br>
            </div>
          </div>
        </div>
      </div>
