<!-- Start main-content -->
<div class="main-content">

  <!-- Section: inner-header -->
  <section class="inner-header divider parallax layer-overlay overlay-white-8 teachers-top-sec" data-bg-img="<?=base_url('assets/images/bg/bg8.jpg')?>">
    <div class="container pt-30 pb-20">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <!-- <h2 class="mt-0 line-height-1">Latest News <span class="text-theme-colored3">From Usindh</span></h2> -->
            <!-- <ol class="breadcrumb text-center mt-10">
              <li><a href="<?=site_url('/')?>">Home</a></li>
              <li class="active text-theme-colored">News</li>
            </ol> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section:  -->
  <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-9">
            <?php if(isset($news) or !empty($news)) { ?>
              <div class="blog-posts single-post">
                <article class="post clearfix mb-0">
                  <div class="entry-content">
                    <div class="entry-meta media no-bg no-border mt-15 pb-20">
                      <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600"><?=date('d', strtotime($news->date_time))?></li>
                          <li class="font-12 text-white text-uppercase"><?=date('M', strtotime($news->date_time))?></li>
                        </ul>
                      </div>
                      <div class="media-body pl-15">
                        <div class="event-content pull-left flip">
                          <h3 class="entry-title text-white text-uppercase pt-0 mt-0"><a href="blog-single-right-sidebar.html"><?=$news->title?></a></h3>
                          <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 0 Comments</span>
                          <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 0 Likes</span>
                        </div>
                      </div>
                    </div>
                    <?php if($news->image != "" && file_exists('admin/'.$news->image)) { ?>
                      <div class="post-thumb thumb pb-30 single-post-image">
                          <img src="<?=base_url('admin/'.$news->image)?>" alt="" class="img-responsive img-fullwidth ">
                      </div>
                    <?php } ?>
                    <p class="mb-15">
                      <?=($news->description != "") ? $news->description : "No content for this post"?>
                    </p>
                    <!-- <blockquote class="theme-colored pt-20 pb-20">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                      <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote> -->

                    <div class="mt-30 mb-0">
                      <h5 class="pull-left flip mt-10 mr-20 text-theme-colored">Share:</h5>
                      <ul class="styled-icons icon-circled m-0">
                        <li><a href="#" data-bg-color="#3A5795" style="background: rgb(58, 87, 149) !important;"><i class="fa fa-facebook text-white"></i></a></li>
                        <li><a href="#" data-bg-color="#55ACEE" style="background: rgb(85, 172, 238) !important;"><i class="fa fa-twitter text-white"></i></a></li>
                        <li><a href="#" data-bg-color="#A11312" style="background: rgb(161, 19, 18) !important;"><i class="fa fa-google-plus text-white"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </article>
                <div class="tagline p-0 pt-20 mt-5">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="tags">
                        <p class="mb-0"><i class="fa fa-tags text-theme-colored"></i> <span>Tags:</span> <?=($keywords == "") ? " No Tags" : $keywords;?></p>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="share text-right flip">
                        <p><i class="fa fa-share-alt text-theme-colored"></i> Share</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="author-details media-post">
                  <a href="#" class="post-thumb mb-0 pull-left flip pr-20">
                    <?php if($news->user_img != "" && file_exists('admin/uploads/users/'.$news->user_img)) { ?>
                      <img class="img-thumbnail single-post-image user-img" alt="" src="<?=base_url('admin/uploads/users/'.$news->user_img)?>">
                    <?php } else { ?>
                      <img class="img-thumbnail single-post-image user-img" alt="" src="<?=base_url('assets/images/default-user.jpg')?>">
                    <?php } ?>
                  </a>
                  <div class="post-right">
                    <h5 class="post-title mt-0 mb-0"><a href="#" class="font-18"><?=$news->user_title ." ". ucfirst($news->user_fullname)?></a></h5>
                    <p><?=$news->user_email?></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="#" class=""><i class="fa fa-eye"></i> View Profile </a>
                    <a href="#" class=""><i class="fa fa-envelope"></i> Contact </a>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <!-- <div class="comments-area">
                  <h5 class="comments-title">Comments</h5>
                  <ul class="comment-list">
                    <li>
                      <div class="media comment-author"> <a class="media-left" href="#"><img class="media-object img-thumbnail" src="images/blog/comment1.jpg" alt=""></a>
                        <div class="media-body">
                          <h5 class="media-heading comment-heading">John Doe says:</h5>
                          <div class="comment-date">23/06/2014</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                          <a class="replay-icon pull-right flip text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a> </div>
                      </div>
                    </li>
                    <li>
                      <div class="media comment-author"> <a class="media-left" href="#"><img class="media-object img-thumbnail" src="images/blog/comment2.jpg" alt=""></a>
                        <div class="media-body">
                          <h5 class="media-heading comment-heading">John Doe says:</h5>
                          <div class="comment-date">23/06/2014</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                          <a class="replay-icon pull-right flip text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a>
                          <div class="clearfix"></div>
                          <div class="media comment-author nested-comment"> <a href="#" class="media-left"><img class="media-object img-thumbnail" src="images/blog/comment3.jpg" alt=""></a>
                            <div class="media-body p-20 bg-lighter">
                              <h5 class="media-heading comment-heading">John Doe says:</h5>
                              <div class="comment-date">23/06/2014</div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                              <a class="replay-icon pull-right flip text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a>
                            </div>
                          </div>
                          <div class="media comment-author nested-comment"> <a href="#" class="media-left"><img class="media-object img-thumbnail" src="images/blog/comment2.jpg" alt=""></a>
                            <div class="media-body p-20 bg-lighter">
                              <h5 class="media-heading comment-heading">John Doe says:</h5>
                              <div class="comment-date">23/06/2014</div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                              <a class="replay-icon pull-right flip text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media comment-author"> <a class="media-left" href="#"><img class="media-object img-thumbnail" src="images/blog/comment2.jpg" alt=""></a>
                        <div class="media-body">
                          <h5 class="media-heading comment-heading">John Doe says:</h5>
                          <div class="comment-date">23/06/2014</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua. Ut enim ea commodo consequat...</p>
                          <a class="replay-icon pull-right flip text-theme-colored" href="#"> <i class="fa fa-commenting-o text-theme-colored"></i> Replay</a> </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="comment-box">
                  <div class="row">
                    <div class="col-sm-12">
                      <h5>Leave a Comment</h5>
                      <div class="row">
                        <form role="form" id="comment-form">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <textarea class="form-control" required="" name="contact_message2" id="contact_message2" placeholder="Enter Message" rows="7"></textarea>
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn btn-dark btn-flat pull-right m-0" data-loading-text="Please wait...">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div> -->
                <h5 class="text-warning">Comment Section is under construction</h5>
              </div>
            <?php } else { ?>
              <h1>404! Nothing Found</h1>
              <p>Please go back to <a href="<?=site_url()?>">Homepage</a> </p>
            <?php } ?>
          </div>
          <div class="col-md-3">
            <div class="sidebar sidebar-left mt-sm-30">
              <div class="widget">
                <h5 class="widget-title line-bottom">Search News</h5>
                <div class="search-form">
                  <form action="<?=site_url('news')?>" method="GET">
                    <div class="input-group">
                      <input type="text" placeholder="Click to Search" class="form-control search-input" name="search">
                      <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
              <!-- <div class="widget">
                <h5 class="widget-title line-bottom">Filters</h5>
                <ul class="list-divider list-border list check">
                  <li><a href="#"><i class="fa fa-chevron-right"></i> <strong>General News</strong> </a></li>
                  <li><a href="#">For College Students</a></li>
                  <li><a href="#">For University Students</a></li>
                  <li><a href="#">For University Faculties</a></li>
                  <li><a href="#">For University Teachers</a></li>
                </ul>
              </div> -->
              <div class="widget">
                <h5 class="widget-title line-bottom">Keywords</h5>
                <div class="tags">
                  <?php if(!empty($top_keywords)) { ?>
                    <?php foreach($top_keywords as $keyword) { ?>
                      <a href="<?=site_url('news?keyword='.urlencode(trim($keyword->keyword)))?>"><?=$keyword->keyword?></a>
                    <?php } ?>
                  <?php } ?>
                </div>
              </div>
              <div class="widget">
                <h5 class="widget-title line-bottom">Recent News</h5>
                <div class="latest-posts">
                  <?php if(!empty($recent_news)) { ?>
                    <?php foreach($recent_news as $r_news) { ?>
                      <article class="post media-post clearfix pb-0 mb-10">
                        <a class="post-thumb" href="<?=site_url('news/'.myUrlEncode($r_news->title))?>">
                          <?php if($r_news->image != "" && file_exists('admin/'.$r_news->image)) { ?>
                            <img src="<?=base_url('admin/'.$r_news->image)?>" class="custom-width1" alt="">
                          <?php } else { ?>
                            <img src="<?=base_url('assets/images/usindh_logo.jpg')?>" class="custom-width1" alt="">
                          <?php } ?>
                        </a>
                        <div class="post-right">
                          <h5 class="post-title mt-0"><a href="<?=site_url('news/'.myUrlEncode($r_news->title))?>"><?=(strlen($r_news->title)> 50)?substr($r_news->title, 0, 50)."...":$r_news->title?></a></h5>
                          <p><?=(strlen($r_news->description)> 60)?substr($r_news->description, 0, 60)."...":$r_news->description?></p>
                        </div>
                      </article>
                    <?php } ?>
                    <a class="btn btn-colored btn-sm btn-circled btn-theme-colored mt-40 ml-0" href="<?=site_url('news')?>">View all</a>
                  <?php } else { ?>
                    <p>No Recent News found</p>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

</div>
<!-- end main-content -->
