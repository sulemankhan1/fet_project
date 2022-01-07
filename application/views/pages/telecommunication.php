<div class="main-content">

	 <!-- Section: inner-header -->
     <section class="inner-header divider parallax layer-overlay overlay-white-8 teachers-top-sec" data-bg-img="<?=base_url('assets/images/bg/bg8.jpg')?>">
    <div class="container pt-30 pb-30">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="mt-0 line-height-1"><span class="text-theme-colored3">Telecommunication</span></h2>
            <ol class="breadcrumb text-center mt-10">
              <li><a href="index.php">Home</a></li>
              <li class="active text-theme-colored">Telecommunication</li>
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
	              <h2 class="mt-0 line-height-1 line-bottom-edu">Welcome to <span class="text-theme-colored3">Telecommunication</span></h2>
	              <h4 >About</h4>
	              <p>To produce intellectual graduates with eclectic vision in the field of telecommunication to keep pace with the current trends and envisage future prospects in terms of both the professional and research practices.</p>
	              <div class="row sm-text-center mt-100 mb-100">
	                <div class="col-sm-3 col-md-3">
	                  <div class="thumb">
	                    <img src="<?=base_url('assets/images/team/khalil.jpg')?>" class="mt-5" alt="" id="imgprogram2" width="200">
	                  </div>

	                </div>
	                <div class=" col-sm-8 col-md-8">
	                  <div class="mb-15">
	                    <h4 class="font-raleway font-weight-700 mt-15"><a href="#"><span class="text-theme-colored3"><u>Greetings </u></span></a></h4>

	                    <h4 class="font-raleway font-weight-700 mt-15"><a href="#">Prof Dr. <span class="text-theme-colored3">Khalil-Ur-Rehman Khoumbati</span></a></h4>
	                    <small class="font-raleway font-weight-700 mt-5">Incharge Chairman Department of Telecommunication Engineering</small>
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
