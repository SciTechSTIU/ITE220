
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Club Maana Creations</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Digital and Print Design">
    <meta name="author" content="Muhammad Athar">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">    

    <!-- Font Awesome -->    
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon"></head>
    
<body>
	<main class="container">
    <!-- Logo Bar
    ================================================== -->
    <header class="row">
        <div class="span3">
        	<a class="brand" href="index.html"><img src="img/cmclogo.png" alt="" id="logo"/></a>
        </div>
        <div class="span4 offset5" >
        	<img src="img/banner_03.png" alt="" id="banner"/>
        </div>
    </header>
    <!-- NAVBAR
    ================================================== -->
    <nav class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a href="index.html" class="brand" id="brnd">Club Maana Creations</a>
          <!-- Everything you want hidden at 940px or less, place within here -->
          <div class="nav-collapse collapse pull-right">
              <ul class="nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li class="active"><a href="contact.php">Contact</a></li>
              </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </nav>

    <!-- Carousel
    ================================================== -->
	<div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Sign up today</a>
 			 </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->

    <!-- Contact Form
    ================================================== -->
    <h2 class="muted" id="breadcrumbs">Contact</h2>
    <div class="row">
    <aside class="span4">
        <!-- Contact Form -->
        <form method="post" action="php/sendform.php">
          <fieldset>
            <!-- Name Goes Here -->
            <label>Name</label>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span>
                <input type="text" placeholder="FirstName LastName" name="fromName">
            </div>
            <span class="help-block">What should we call you?</span>
                <br />
            <!-- Email Goes Here -->
            <label>Email</label>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span>
                <input type="text" placeholder="name@website.com" name="fromEmail">
            </div>
            <span class="help-block">How should we get back to you?</span>
                <br />
            <!-- Subject Goes Here -->
            <label>Subject</label>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-tag"></i></span>
                <input type="text" placeholder="This is about..." name="fromSubject">
            </div>
            <span class="help-block">Anything specific, you're looking for?</span>
                <br />
            <!-- Message Goes Here -->
            <label>Message</label>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-comment"></i></span>
                <textarea rows="5" placeholder="I want to..." name="fromContent"></textarea>
            </div>
            <!--<div class="container"><div class="span12">-->
            <span class="help-block">What do you have in mind?</span><!--</div></div>-->
                <br />
            <!-- Send and Cancel Buttons Go Here -->
            <button type="submit" class="btn btn-info" name="send">
            <i class="icon-ok icon-white"></i> Send</button>
            <button type="reset" class="btn btn-danger" name="reset">
            <i class="icon-remove icon-white"></i> Reset</button>
          </fieldset>
        </form>  <!-- End of the Contact Form -->

    </aside>
    <article class="container span8">
    	<div id="address">
        	<h4>Our Address</h4>
            <p>16, Motorway Road - Km2,</p>
            <p>Prawet, Bangkok 10250,</p>
            <p>Thailand.</p>            
        </div>
        <div id="map-container">
        </div>
    </article>
    </div>
    <!-- End Section
    ================================================== -->
        <section class="row">
            <div class="row span12">
                <div class="span3">
                    <h4>Web Workshop</h4>
                        <ul class="unstyled">
                            <li><a href="#">Sell Your Themes</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">RSS Feed</a></li>
                        </ul>
                </div>
                <div class="span3">
                    <h4>Help &amp; Support</h4>
                    <ul class="unstyled">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Submission Guidelines</a></li>
                        <li><a href="#">Payment Rates</a></li>
                        <li><a href="#">Contact Support</a></li>
                    </ul>
                </div>
                <div class="span3">
                    <h4>Resources</h4>
                    <ul class="unstyled">
                        <li><a href="#" target="_blank">Free Stock Photos</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Resource List</a></li>
                        <li><a href="#">Tutorials</a></li>
                    </ul>
                </div>
                <div class="span2 text-right" id="social">
                    <h4>Social</h4>
                    <ul class="unstyled">
                        <li><a href="https://www.facebook.com" target="_blank">Facebook <span id="f"><i class="fa fa-facebook-square"></i></span></a></li>
                        <li><a href="https://twitter.com" target="_blank">Twitter <span id="t"><i class="fa fa-twitter"></i></span></a></li>
                        <li><a href="http://www.youtube.com" target="_blank">YouTube <span id="y"><i class="fa fa-youtube-play"></i></span></a></li>
                        <li><a href="https://plus.google.com" target="_blank">Google+ <span id="g"><i class="fa fa-google-plus-square"></i></span></a></li>
                    </ul>
                </div>
            </div>
        </section>
        
        <!-- FOOTER
        ================================================== -->
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2015 Club Maana Creations, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>

	</main> <!-- container ends here -->
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/holder.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script>	 
      function init_map() {
		var var_location = new google.maps.LatLng(13.735538, 100.661679);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 14
        };
 
		var var_marker = new google.maps.Marker({
			position: var_location,
			map: var_map,
			title:"Venice"});
 
        var var_map = new google.maps.Map(document.getElementById("map-container"),
            var_mapoptions);
 
		var_marker.setMap(var_map);	
 
      }
 
      google.maps.event.addDomListener(window, 'load', init_map);
 
    </script>
  </body>
</html>