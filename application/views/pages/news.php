<!-- Start main-content -->
<div class="main-content">

  <!-- Section: inner-header -->
  <section class="inner-header divider parallax layer-overlay overlay-white-8 teachers-top-sec" data-bg-img="<?=base_url('assets/images/bg/bg8.jpg')?>">
    <div class="container pt-30 pb-30">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="mt-0 line-height-1">Latest News <span class="text-theme-colored3">From Usindh</span></h2>
            <ol class="breadcrumb text-center mt-10">
              <li><a href="<?=site_url('/')?>">Home</a></li>
              <li class="active text-theme-colored">News</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section:  -->
  <section>
    <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-9 pull-right flip sm-pull-none">
            <div class="blog-posts">
              <div class="col-md-12">
                <div class="row list-dashed">
                  <?php if(isset($get['search'])) { ?>
                    <p>Search Result(s) for <strong><?=$get['search']?></strong> </p>
                  <?php } ?>
                  <?php if(!empty($news)) { ?>
                    <?php foreach($news as $entry) { ?>
                      <article class="post clearfix mb-30 pb-30">
                        <div class="entry-content border-1px p-20 pr-10">
                          <div class="col-md-10">
                            <div class="entry-meta media mt-0 no-bg no-border">
                              <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                <ul>
                                  <li class="font-16 text-white font-weight-600"><?=date('d', strtotime($entry->date_time))?></li>
                                  <li class="font-12 text-white text-uppercase"><?=date('M', strtotime($entry->date_time))?></li>
                                </ul>
                              </div>
                              <div class="media-body pl-15">
                                <div class="event-content pull-left flip">
                                  <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="<?=site_url('news/'.myUrlEncode($entry->title))?>"><?=$entry->title?></a></h4>
                                  <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 0 Comments</span>
                                  <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 0 Likes</span>
                                </div>
                              </div>
                            </div>
                            <p><?=(strlen($entry->description)> 300)?substr($entry->description, 0, 300)."...":$entry->description?></p>
                            <a href="<?=site_url('news/'.myUrlEncode($entry->title))?>" class="btn-read-more">Read more</a>
                            <div class="clearfix"></div>
                          </div>

                          <div class="col-md-2">
                            <?php if($entry->image != "" && file_exists('admin/'.$entry->image)) { ?>
                              <a href="<?=base_url('admin/'.$entry->image)?>" target="_blank">
                                <img src="<?=base_url('admin/'.$entry->image)?>" class="img-thumbnail" alt="">
                              </a>
                            <?php } ?>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </article>
                    <?php } ?>
                  <?php } ?>
                </div>
              </div>
              <div class="col-md-12">
                <nav>
                  <ul class="pagination theme-colored">
                    <li> <a aria-label="Previous" href="#"> <span aria-hidden="true">«</span> </a> </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">...</a></li>
                    <li> <a aria-label="Next" href="#"> <span aria-hidden="true">»</span> </a> </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="sidebar sidebar-right mt-sm-30">
              <div class="widget">
                <h5 class="widget-title line-bottom">Search News</h5>
                <div class="search-form">
                  <form action="<?=site_url('news')?>" method="GET">
                    <div class="input-group">
                      <input type="text" placeholder="Click to Search" class="form-control search-input" name="search" value="<?=(isset($get['search'])?$get['search']:"")?>">
                      <span class="input-group-btn">
                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
              <div class="widget">
                <h5 class="widget-title line-bottom">Filters</h5>
                <ul class="list-divider list-border list check">
                  <?php if(isset($get['notifications_for'])) { ?>
                    <li><a href="<?=site_url('news')?>">General News</a></li>
                  <?php } else { ?>
                    <li><a href="<?=site_url('news')?>"><i class="fa fa-chevron-right"></i> <strong>General News</strong> </a></li>
                  <?php } ?>
                  <?php if(isset($get['notifications_for']) && $get['notifications_for'] == 'college_students') { ?>
                    <li><a href="<?=site_url('news?notifications_for=college_students')?>"><i class="fa fa-chevron-right"></i> <strong>For College Students</strong></a></li>
                  <?php } else { ?>
                    <li><a href="<?=site_url('news?notifications_for=college_students')?>">For College Students</a></li>
                  <?php } ?>
                  <?php if(isset($get['notifications_for']) && $get['notifications_for'] == 'university_students') { ?>
                    <li><a href="<?=site_url('news?notifications_for=university_students')?>"><i class="fa fa-chevron-right"></i> <strong>For University Students</strong></a></li>
                  <?php } else { ?>
                    <li><a href="<?=site_url('news?notifications_for=university_students')?>">For University Students</a></li>
                  <?php } ?>
                  <?php if(isset($get['notifications_for']) && $get['notifications_for'] == 'university_faculty') { ?>
                    <li><a href="<?=site_url('news?notifications_for=university_faculty')?>"><i class="fa fa-chevron-right"></i> <strong>For University Faculties</strong></a></li>
                  <?php } else { ?>
                    <li><a href="<?=site_url('news?notifications_for=university_faculty')?>">For University Faculties</a></li>
                  <?php } ?>
                  <?php if(isset($get['notifications_for']) && $get['notifications_for'] == 'university_teachers') { ?>
                    <li><a href="<?=site_url('news?notifications_for=university_teachers')?>"><i class="fa fa-chevron-right"></i> <strong>For University Teachers</strong></a></li>
                  <?php } else { ?>
                    <li><a href="<?=site_url('news?notifications_for=university_teachers')?>">For University Teachers</a></li>
                  <?php } ?>
                </ul>
              </div>
              <div class="widget">
                <h5 class="widget-title line-bottom">Keywords</h5>
                <div class="tags">
                  <?php if(!empty($top_keywords)) { ?>
                    <?php foreach($top_keywords as $keyword) { ?>
                      <a href="<?=site_url('news?keyword='.urlencode(trim($keyword->keyword)))?>" <?=((isset($get['keyword']) && $get['keyword'] != "") && $get['keyword'] == trim($keyword->keyword)) ? 'class="bg-filled"':''?>><?=$keyword->keyword?></a>
                    <?php } ?>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section class="divider parallax layer-overlay overlay-dark-8 text-center" data-bg-img="assets/images/bg/bg5.jpg" data-parallax-ratio="0.7">
   <div class="container">
     <div class="row">
       <div class="col-md-6 col-md-offset-3">
         <h2 class="mt-0 text-white">Stay updated by Email</h2>
         <p class="text-white">Enter your Email and you will get updates for Notifications, Circulars, Notices etc. You can change emails settings by logging in to your account with same email</p>

         <form id="mailchimp-subscription-form3" class="newsletter-form mt-30">
           <label for="mce-EMAIL"></label>
           <div class="input-group">
             <input type="email" id="mce-EMAIL" data-height="50px" class="form-control input-lg" placeholder="Your Email" name="EMAIL" value="">
             <span class="input-group-btn">
               <button type="submit" class="btn btn-colored btn-theme-colored btn-lg m-0" data-height="50px"><i class="far fa-paper-plane font-20" aria-hidden="true"></i>
               </button>
             </span>
           </div>
         </form>
       </div>
     </div>
   </div>
 </section>

</div>
<!-- end main-content -->
