<div class="main-content">

	 <!-- Section: inner-header -->
     <section class="inner-header divider parallax layer-overlay overlay-white-8 teachers-top-sec" data-bg-img="<?=base_url('assets/images/bg/bg8.jpg')?>">
    <div class="container pt-30 pb-30">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="mt-0 line-height-1">Information <span class="text-theme-colored3">Technology</span></h2>
            <ol class="breadcrumb text-center mt-10">
              <li><a href="index.php">Home</a></li>
              <li class="active text-theme-colored">Information Technology</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
		<!-- Section: About  -->
		<section id="about">
			<div class="container pb-90 pb-sm-90 welcome-cont">
				<div class="section-content">
					<div class="row">
						<div class="col-sm-7 col-md-8">
							<h2 class="mt-0 line-height-1 line-bottom-edu">Welcome to <span class="text-theme-colored3">Department of Information Technology</span></h2>
							<h4 >About</h4>
							<p>In 1998, the former Institute of Physics and Technology (IPT) which existed since 1979 bifurcated giving birth to the Institute of Information Technology (IIT). The IIT was among a very few first institutes of the Pakistan which offered a 4-year 8-semesters undergraduate Programmemes in Computer and Information Technology called BCIT. Over the time it has undergone a number of revamps and currently Department of Information Technology is one of the constituent departments of the recently established Faculty of Engineering and Technology which offers a 4-year 8-semester undergraduate Programmemes BS Information Technology.
Department of Information Technology has a highly qualified faculty most of whom have earned their Ph.D degree from international universities of high stature. The Department is also equipped with state-of-the-art hardware and software laboratories catering the needs of practical component of the courses. The curriculum of BS Information Technology Programmemes includes, in addition to fundamental core Information technology courses, a number of advanced courses focusing on new emerging computing paradigms such as Mobile and Pervasive Computing, Cloud Computing, Information security, smart technologies, human computer interface design (HCI), management of large scale IT infrastructure projects etc. in line with HEC guidelines. BS Information Technology Programmemes has recently been accredited with the National Computing Education Accreditation Council (NCEAC) and the Programmemes is offered in morning as well as in evening.
The main objective of the Department of Information Technology is to provide quality education and research opportunities to the students and to instill in them critical, rational, analytical thinking and a civic sense so that they become socially responsible citizens and truly educated graduates after completion of their BS Information Technology Programmemes</p>
							<div class="row sm-text-center mt-100 mb-100">
								<div class="col-sm-3 col-md-3">
									<div class="thumb">
										<img src="<?=base_url('assets/images/team/waheed.jpg')?>" class="mt-5" alt="" id="imgprogram2" width="200">
									</div>

								</div>
								<div class=" col-sm-8 col-md-8">
									<div class="mb-15">
										<h4 class="font-raleway font-weight-700 mt-15"><a href="#"><span class="text-theme-colored3"><u>Greetings </u></span></a></h4>
										<p>It is my pleasure and privilege to welcome you on behalf of the faculty and staff of the department of Information Technology at Faculty of Engineering and Technology, University of Sindh, Jamshoro, Pakistan. The Department of Information Technology has highly qualified faculty most of whom have earned their PhD degrees from international universities of high stature.</p>
										<h4 class="font-raleway font-weight-700 mt-15"><a href="#">Dr. <span class="text-theme-colored3">Abdul Waheed Mahesar</span></a></h4>
										<small class="font-raleway font-weight-700 mt-5">Chairman Department of Information Technology</small>

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
