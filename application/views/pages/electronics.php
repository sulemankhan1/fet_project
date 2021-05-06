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
  	<div class="row mt-50">
  		<div class="col-md-12 col-sm-12">
  			<h2 class="mt-0 line-height-1 line-bottom-edu">Welcome to <span class="text-theme-colored3">Electronics</span></h2>
  			<p>Welcome to electronics course content and course scheme. Here you will find all course content and scheme accordingly electronics.</p>
  		</div>
  	</div>
  	<div class="row mt-50 mb-60">
  		<div class="col-md-6 col-sm-6">

  		    <div class="card effect__random" data-id="1">
              <div class="card__front bg-theme-colored">
                  <div class="card__text">
                    <div class="display-table-parent">
                      <div class="display-table">
                        <div class="display-table-cell">
                          <div class="icon-box mb-0">
                            <a href="#" class="icon mb-0">
                              <i class="text-white far fa-file-alt font-72"></i>
                            </a>
                            <h3 class="icon-box-title text-white">Course Content</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
               </div>
              <div class="card__back" data-bg-color="#e0e0e0">
                <div class="card__text">
                  <div class="display-table-parent p-30">
                      <div class="display-table">
                        <div class="display-table-cell">
                          <h4>Course Content</h4>
                          <p>Here Course is given accordingly batch.To get course content simply click on course content and write your batch , part , semster and subject to get your course content</p>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>	

  		</div>
  		<div class="col-md-6 col-sm-6">

  			<div class="card effect__random" data-id="2">
              <div class="card__front bg-theme-colored">
                  <div class="card__text">
                    <div class="display-table-parent">
                      <div class="display-table">
                        <div class="display-table-cell">
                          <div class="icon-box mb-0">
                            <a href="#" class="icon mb-0">
                              <i class="text-white far fa-file-alt font-72"></i>
                            </a>
                            <h3 class="icon-box-title text-white">Course Scheme</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
               </div>
              <div class="card__back" data-bg-color="#e0e0e0">
                <div class="card__text">
                  <div class="display-table-parent p-30">
                      <div class="display-table">
                        <div class="display-table-cell">
                          <h4>Course Scheme</h4>
                          <p>Here is course scheme given accordingly batch.To get course scheme simply click on course scheme and write your batch get your course scheme</p>
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
