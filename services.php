<!DOCTYPE HTML>
<html>
<head>
    <title>Get on Road - Services</title>


    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include("style.php"); ?>
	
	<style>
	h3,h1
	{
		color:white;
	}
	p
	{
		line-height:90%;
	}
	</style>
	
	<link rel="stylesheet" href="flip/style.css">
	<script src="flip/jquery.min.js"></script>
	<script src="flip/jquery.easing.min.js"></script>
	<script src="flip/modernizr.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Dosis:200,300' rel='stylesheet' type='text/css'>
	
</head>

<body>
	
	
	 <div class="global-wrap" >
        
		<?php include("header.php"); ?>
		
   <div class="top-area show-onload" style="height:auto;">
            <div class="bg-holder full">
                <div class="bg-mask"></div>
                <div class="bg-parallax" style="background-image:url(img/backgrounds/road.jpg);"></div>
				<div class="bg-content">
   

        <div class="container" style="color:white;">
            <h1 class="page-title">Services</h1>
        </div>

 <div class="container">
            <div class="gap">
                <div class="row row-wrap">
                    <div class="col-md-3">
                        <div class="thumb">
                            <div class="artGroup slide">
								<div class="artwork"> 
									<img src="img/end_of_the_day_300x300.jpg">
										<div class="detail">
											<h3>Hotel and Station Transfer</h3>
											<p>Get on Road Cars offers transfers to all Pakistan hotels, train stations, airports and all PK major ports pick up and drop off.</p>
										</div>
								</div>
							</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumb">
                            <div class="artGroup slide">
		<div class="artwork"> <img src="img/people_on_the_beach_800x600.jpg">
			<div class="detail">
				<h3>Businesses Travel</h3>
				<p>Offers a friendly and professional business travel service for all type od corporate sized companies throughout the nationwide in PK.</p>
            </div>
		</div>
	</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumb">
                            <div class="artGroup slide">
		<div class="artwork"> <img src="img/sunny_wood_300x300.jpg">
			<div class="detail">
				<h3>General Sightseeing Trips as Well</h3>
				<p>Get on Road cars offers a friendly and family travel service.A 24/7 365 days a year services to cover everything like you can expect from a professional minicab company and more.</p>
            </div>
		</div>
	</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumb">
                            <div class="artGroup slide">
								<div class="artwork"> 
									<img src="img/the_journey_home_400x300.jpg">
			<div class="detail">
				<h3>Airport Cab Service</h3>
				<p>Get on Road Cars Cars 24 hour airport transfers to Islamabad Airport, Lahore Airport, Karachi Airport.</p>
        </div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

		

<article>
	<p style="color:white;">The images above flip to display additional content when hovered over.</p>
</article>
<script>
		$(function () {
		if ( $('html').hasClass('csstransforms3d') ) {
			$('.artGroup').removeClass('slide').addClass('flip');
			$('.artGroup.flip').on('mouseenter',
				function () {
					$(this).find('.artwork').addClass('theFlip');
				});
			$('.artGroup.flip').on('mouseleave',
				function () {
					$(this).find('.artwork').removeClass('theFlip');
				});
		} else {
			$('.artGroup').on('mouseenter',
				function () {
					$(this).find('.detail').stop().animate({bottom:0}, 500, 'easeOutCubic');
				});
			$('.artGroup').on('mouseleave',
				function () {
					$(this).find('.detail').stop().animate({bottom: ($(this).height() + -1) }, 500, 'easeOutCubic');
				});
		}
	});
</script>

        <div class="gap"></div>
        <footer id="main-footer">
            <div class="container">
                <div class="row row-wrap">
                    <div class="col-md-3">
                        <a class="logo" href="index.php">
                            <img src="img/logo-invert.png" alt="Image Alternative text" title="Image Title" />
                        </a>
                        <p class="mb20">Booking, reviews and advices on hotels, resorts, flights, vacation rentals, travel packages, and lots more!</p>
                        <ul class="list list-horizontal list-space">
                            <li>
                                <a class="fa fa-facebook box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-google-plus box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-linkedin box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-pinterest box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4>Newsletter</h4>
                        <form>
                            <label>Enter your E-mail Address</label>
                            <input type="text" class="form-control">
                            <p class="mt5"><small>*We Never Send Spam</small>
                            </p>
                            <input type="submit" class="btn btn-primary" value="Subscribe">
                        </form>
                    </div>
                    <div class="col-md-2">
                        <ul class="list list-footer">
                            <li><a href="#">About US</a>
                            </li>
                            <li><a href="#">Press Centre</a>
                            </li>
                            <li><a href="#">Best Price Guarantee</a>
                            </li>
                            <li><a href="#">Travel News</a>
                            </li>
                            <li><a href="#">Jobs</a>
                            </li>
                            <li><a href="#">Privacy Policy</a>
                            </li>
                            <li><a href="#">Terms of Use</a>
                            </li>
                            <li><a href="#">Feedback</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4>Have Questions?</h4>
                        <h4 class="text-color">+1-202-555-0173</h4>
                        <h4><a href="#" class="text-color">support@traveler.com</a></h4>
                        <p>24/7 Dedicated Customer Support</p>
                    </div>

                </div>
            </div>
        </footer>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/slimmenu.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/bootstrap-timepicker.js"></script>
        <script src="js/nicescroll.js"></script>
        <script src="js/dropit.js"></script>
        <script src="js/ionrangeslider.js"></script>
        <script src="js/icheck.js"></script>
        <script src="js/fotorama.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
        <script src="js/typeahead.js"></script>
        <script src="js/card-payment.js"></script>
        <script src="js/magnific.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/tweet.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/gridrotator.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/switcher.js"></script>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>



