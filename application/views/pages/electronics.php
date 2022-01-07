<div class="main-content">

	 <!-- Section: inner-header -->
     <section class="inner-header divider parallax layer-overlay overlay-white-8 teachers-top-sec" data-bg-img="<?=base_url('assets/images/bg/bg8.jpg')?>">
    <div class="container pt-30 pb-30">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="mt-0 line-height-1"><span class="text-theme-colored3">Electronics</span></h2>
            <ol class="breadcrumb text-center mt-10">
              <li><a href="index.php">Home</a></li>
              <li class="active text-theme-colored">Electronics</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
  
  	<div class="row mt-50 mb-60">
			<!-- Section: About  -->
	    <section id="about">
	      <div class="container pb-90 pb-sm-90 welcome-cont">
	        <div class="section-content">
	          <div class="row">
	            <div class="col-sm-7 col-md-8">
	              <h2 class="mt-0 line-height-1 line-bottom-edu">Welcome to <span class="text-theme-colored3">Electronics Engineering</span></h2>
	              <h4 >About</h4>
	              <p>The extensive applications of electronic devices and systems play a vital role in the development of the socio-economic growth of the country. It is the field where the world's best talent meets the most, creative ideas are most active, and competitiveness for inventions is fiercest. This led the University of Sindh to start B.Sc. and M.Sc. Electronics Programmemes in 1979 under the umbrella of the Institute of physics and technology (IPT). The IPT was pioneer in Sindh province to provide training and educating the individuals to harness the full potential of the discipline. Later, the IPT was bifurcated to the Institute of information technology (IIT) in 1998. The department of Electronics started to offer 4 years BS degree in Electronics in 2002. Later the nomenclature of the Institute was re-designated as Institute of Information and Communication Technology (IICT). In 2020 IICT was upgraded to the Faculty of Engineering and Technology (FET) to extend its scope in the field of engineering and technology. As a result of this the nomenclature of Department of Electronic was changed to Department of Electronics Engineering (DEE) and got accredited by the Pakistan Engineering Council (PEC). DEE also offers M.E in Electronic engineering under the shelter of DR. A. H. S. Bukhari Institute of Information and Communication Technology.
	The infrastructure of the department meets all the criteria of conducive learnings. The classrooms are spacious, well-furnished and equipped with the multimedia facility. The state-of-the-art laboratories with latest hardware and software tools facilitate students in learning all theoretical concepts experimentally. Moreover, the library suffices the complete information resource such as; textbooks with latest editions, technology magazines and online platforms to access research articles worldwide. Based on the competence and achievements of its discipline, DEE owns a very high reputation in the Electronic research community across the country.</p>
	              <div class="row sm-text-center mt-100 mb-100">
	                <div class="col-sm-3 col-md-3">
	                  <div class="thumb">
											<img src="<?=base_url('assets/images/team/mudasir.jpg')?>" class="mt-5" alt="" id="imgprogram2" width="200">
	                  </div>

	                </div>
	                <div class=" col-sm-6 col-md-6">
	                  <div class="mb-15">
	                    <h4 class="font-raleway font-weight-700 mt-15"><a href="#"><span class="text-theme-colored3"><u>Greetings </u></span></a></h4>

	                    <h4 class="font-raleway font-weight-700 mt-15"><a href="#">Dr. <span class="text-theme-colored3">Mudasir Ahmed Memon</span></a></h4>
	                    <small class="font-raleway font-weight-700 mt-5">Incharge Chairman Department of Electronic Engineering</small>
	                  </div>
	                </div>
	              </div>
	            </div>
	            <div class="text-center col-sm-5 col-md-4">
								<img src="<?=base_url('assets/images/FET-logo.png')?>"  id="programLogo">
	            </div>
	          </div>
	        </div>
	      </div>
	    </section>
  	</div>
  </div>

</div>

<script>

      (function() {

        // cache vars
        var cards = document.querySelectorAll(".card.effect__random");
        var timeMin = 1;
        var timeMax = 3;
        var timeouts = [];

        // loop through cards
        for ( var i = 0, len = cards.length; i < len; i++ ) {
          var card = cards[i];
          var cardID = card.getAttribute("data-id");
          var id = "timeoutID" + cardID;
          var time = randomNum( timeMin, timeMax ) * 1000;
          cardsTimeout( id, time, card );
        }

        // timeout listener
        function cardsTimeout( id, time, card ) {
          if (id in timeouts) {
            clearTimeout(timeouts[id]);
          }
          timeouts[id] = setTimeout( function() {
            var c = card.classList;
            var newTime = randomNum( timeMin, timeMax ) * 1000;
            c.contains("flipped") === true ? c.remove("flipped") : c.add("flipped");
            cardsTimeout( id, newTime, card );
          }, time );
        }

        // random number generator given min and max
        function randomNum( min, max ) {
          return Math.random() * (max - min) + min;
        }

      })();

    </script>
