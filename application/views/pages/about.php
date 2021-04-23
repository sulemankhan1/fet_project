 <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8 teachers-top-sec" data-bg-img="<?=base_url('assets/images/bg/bg8.jpg')?>">
    <div class="container pt-30 pb-30">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="mt-0 line-height-1">About <span class="text-theme-colored3">Us</span></h2>
            <ol class="breadcrumb text-center mt-10">
              <li><a href="index.php">Home</a></li>
              <li class="active text-theme-colored">About</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
    <section id="about">
      <div class="container pb-90 pb-sm-90">
        <div class="section-content">
          <div class="row">
            
            <div class="col-sm-8 col-md-8">
              <h2 class="mt-0 mt-sm-30 line-height-1 line-bottom-edu">Welcome to <span class="text-theme-colored3">FET</span></h2>
              <p class="font-15">Faculty of Engineering and Technology is composed of an Institute and six departments: Prof. A. H. S. Bukhari Institute of Information and Communication Technology, Department of Electronics Engineering, Department of Telecommunication Engineering, Department of Information Technology, Department of Software Engineering, Department of Telemedicine and e-Health and Department of Industrial Electronics Engineering. A. H. S Bukhari Institute of Information and Communication Technology is an independent post-graduate institute offering MS/MPhil programs in disciplines of Electronics, Telecommunications, Information Technology and Software Engineering, and PhD degree program in Information Technology. Currently, over 300 students are enrolled in all MS/ MPhil and PhD programs. Department of Electronics Engineering and Department of Telecommunication Engineering offers a 4-year 8-semester undergraduate program, namely BS Electronics Engineering and BS Telecommunication Engineering and both these programs are accredited with Pakistan Engineering Council (PEC). Department of Information Technology and Department of Software Engineering offers a 4-year 8-semester undergraduate program, BS Information Technology and BS Software Engineering respectively and both programs are accredited with the National Computing Education Accreditation Council (NCEAC). Both BS Information Technology and BS Software Engineering programs are offered in morning as well as in evening.

              Faculty of Engineering and Technology has an excellent infrastructure in terms of highly qualified faculty members (there are around as many as 20 PhD faculty members and most of them have earned their degrees from educationally advanced countries), well-equipped state-of-the-art laboratories catering the needs of practical component of all undergraduate and graduate program courses, spacious class rooms, multimedia facilities, computerized internal library with  bundant and latest editions of books, journals and magazines. The Faculty of Engineering and Technology infrastructure also provides access to digital libraries including IEEE, ACM, Elsevier, and Springer Link subscription, and it has also its own Research Journal named University of Sindh Journal of Information and Communication Technology (USJICT). Realizing the tremendous potential of technology entrepreneurship, FET has adopted a proactive role for supporting entrepreneurship through establishment of Technology Incubation Center and Industry Liaison Desk.

              </p>
              <p class="font-15">
                The mission of the Faculty of Engineering and Technology (FET) is to provide dynamic learning with quality education through rigorous teaching and research methodologies in Engineering and Technology disciplines. Academic programs with quality curricula focus to forge professionals, experts and scholars
                in the field of Information Technology, Telecommunication Engineering, Electronics Engineering, Software Engineering, Telemedicine &amp; E-Health and Industrial Electronics Engineering. It aims to foster such values amongst its academia, undergraduates and graduate scholars, ensuring a place of pride in the
                world of learning.
              </p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 mb-60 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="mt-0 mb-0 pt-15 pb-15 text-white text-center bg-theme-colored">Get A Free Registration</h3>
             <div class="p-20 bg-gray-lighter form-boxshadow">
                <!-- Appilication Form Start-->
                <form id="reservation_form" name="reservation_form" class="reservation-form mt-10" method="post" action="http://html.kodesolution.live/f/edupoints/v3/demo/includes/reservation.php">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group mb-20">
                        <input placeholder="Enter Name" type="text" id="reservation_name" name="reservation_name" required="" class="form-control">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group mb-20">
                        <input placeholder="Email" type="text" id="reservation_email" name="reservation_email" class="form-control" required="">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group mb-20">
                        <input placeholder="Phone" type="text" id="reservation_phone" name="reservation_phone" class="form-control" required="">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group mb-20">
                        <div class="styled-select mt-0">
                          <select id="person_select" name="person_select" class="form-control" required>
                            <option value="">Department</option>
                            <option value="1 Person">Software Engineering</option>
                            <option value="2 Person">Information Technology</option>
                            <option value="3 Person">Electronics</option>
                            <option value="Family Pack">Telecommunication</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group mb-20">
                        <input name="Date" class="form-control required date-picker" type="text" placeholder="Date" aria-required="true">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <textarea placeholder="Enter Message" rows="1" class="form-control required" name="form_message" id="form_message" aria-required="true"></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group mb-0 mt-10">
                        <input name="form_botcheck" class="form-control" type="hidden" value="">
                        <button type="submit" class="btn btn-colored btn-default text-black btn-lg btn-block" data-loading-text="Please wait...">Submit Request</button>
                      </div>
                    </div>
                  </div>
                </form>
                <!-- Application Form End-->

                <!-- Application Form Validation Start-->
                <script type="text/javascript">
                  $("#reservation_form").validate({
                    submitHandler: function(form) {
                      var form_btn = $(form).find('button[type="submit"]');
                      var form_result_div = '#form-result';
                      $(form_result_div).remove();
                      form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                      var form_btn_old_msg = form_btn.html();
                      form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                      $(form).ajaxSubmit({
                        dataType:  'json',
                        success: function(data) {
                          if( data.status == 'true' ) {
                            $(form).find('.form-control').val('');
                          }
                          form_btn.prop('disabled', false).html(form_btn_old_msg);
                          $(form_result_div).html(data.message).fadeIn('slow');
                          setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                        }
                      });
                    }
                  });
                </script>
                <!-- Application Form Validation Start -->
             </div>
            </div>

            <div class="row mb-50">
              <div class="col-sm-4 col-md-4">
                <div class="col-sm-12 col-md-12">
              <h2 class="mt-0 line-height-1 line-bottom-edu">Dean Message</h2>
              <div class="owl-carousel-1col" data-nav="true">
                <div class="item">
                  <div class="newcomer">
                    <img src="assets/images/bg/dean.jpg" alt="">
                    <div class="newcomer-overlay">
                      <div class="newcomer-inner">
                        <h5 class="text-white">Prof Dr.Khalil-Ur-Rehman Khoumbati</h5>
                        <h4 class="text-white"><small class="text-white line-height-1 line-bottom-edu">Dean, Faculty Of Engineering & Technology</small></h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="newcomer">
                    <img src="assets/images/bg/dean.jpg" alt="">
                    <div class="newcomer-overlay">
                      <div class="newcomer-inner">
                        <h3 class="text-white ">My Dear Students Welcome To</h3>
                        <h4 class="text-white ">Faculty Of Engineering & Technology </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
</div>