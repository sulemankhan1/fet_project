<?php include('includes/header.php') ?>

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-5" data-bg-img="assets/images/bg/01.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Contact us</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-6">
            <h3 class="line-bottom mt-0 mb-30">Interested in discussing?</h3>
            
            <!-- Contact Form -->
            <form id="contact_form">

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Name <small>*</small></label>
                    <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email <small>*</small></label>
                    <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
                
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Subject <small>*</small></label>
                    <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Phone</label>
                    <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label>Message</label>
                <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="hvr-glow btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="hvr-glow btn btn-default btn-flat btn-theme-colored">Reset</button>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <h3 class="line-bottom mt-0">Get in touch with us</h3>
            <p>Feel free to contact us. We are always here for you to show you correct path.</p>
            <ul class="styled-icons icon-dark icon-sm icon-circled mb-20">
              <li><a href="https://web.facebook.com/groups/522891551392759/?multi_permalinks=1400592813622624&notif_id=1616062110184178&notif_t=group_highlights&ref=notif" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" data-bg-color="#02B0E8"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" data-bg-color="#D9CCB9"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#" data-bg-color="#D71619"><i class="fa fa-google-plus"></i></a></li>
            </ul>

            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-20" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Our Faculty Location</h5>
                <p>#University Of Sindh Jamshoro, Sindh Pakistan</p>
              </div>
            </div>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0">Contact Number</h5>
                <p><a href="tel:+325-12345-65478">+92-(0)22-9213181-90</a></p>
              </div>
            </div>
            <div class="icon-box media mb-15"> <a class="media-left pull-left flip mr-15" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
              <div class="media-body">
                <h5 class="mt-0"></h5>
                <p><a href="mailto:info@iict.usindh.edu.pk">info@iict.usindh.edu.pk</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Google Map -->
    <section id="map_btm">
      <div class="container-fluid pt-0 pb-0" >
        <div class="row">

          <!-- Google Map HTML Codes -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.603478487094!2d68.26430821050583!3d25.418080323419805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x394c7969d688b2c7%3A0xbe153ec895be2a7d!2sFACULTY%20OF%20ENGINEERING%20AND%20TECHNOLOGY%20University%20Of%20Sindh!5e0!3m2!1sen!2s!4v1616096743926!5m2!1sen!2s" width="600" height="450"  allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

 
  <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="assets/js/custom.js"></script>

<?php include('includes/footer.php') ?>