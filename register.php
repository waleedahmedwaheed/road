<!DOCTYPE html><html lang="en">
<head>
<meta charset="utf-8">
<title>Get on Road</title>

<script>

$(document).ready(function (e) {
$("#userForm").on('submit',(function(e) {
e.preventDefault();
$('#response').show();
$("#loader").show();
$.ajax({
url: "reg_save.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
$("#loader").hide();
$('#userForm')[0].reset();
$("#response").html(data);
}
});

}));
});


</script>
<script type="text/javascript">
window.onload = function () {
	document.getElementById("password1").onchange = validatePassword;
	document.getElementById("password2").onchange = validatePassword;
}
function validatePassword(){
var pass2=document.getElementById("password2").value;
var pass1=document.getElementById("password1").value;
if(pass1!=pass2)
	document.getElementById("password2").setCustomValidity("Passwords Don't Match");
else
	document.getElementById("password2").setCustomValidity('');	 
//empty string means no validation error
}
</script>

<script type="text/javascript">
function AvoidSpace(event) {
    var k = event ? event.which : window.event.keyCode;
    if (k == 32) return false;
}

    </script>
	
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:700,600,400,300" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/lib/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/lib/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/lib/awe-booking-font.css">
<link rel="stylesheet" type="text/css" href="css/lib/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/lib/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/demo.css">
<link id="colorreplace" rel="stylesheet" type="text/css" href="css/colors/blue.css">

</head>
<!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]--><!--[if IE 8]>
<body class="ie8 lt-ie9 lt-ie10"><![endif]--><!--[if IE 9]><body class="ie9 lt-ie10"><![endif]--><!--[if (gt IE 9)|!(IE)]><!-->
<body><!--<![endif]-->
<div id="page-wrap">
<div class="preloader"></div>
<header id="header-page">
<div class="header-page__inner">
<div class="container">
<div class="logo"><a href="index-2.html"><img src="images/logo.png" alt=""></a></div>

<nav class="navigation awe-navigation" data-responsive="1200">
<ul class="menu-list">
<li class="menu-item-has-children"><a href="index-2.html">Home</a>
<ul class="sub-menu"><li><a href="index-2.html">Home 1</a></li>
<li><a href="index2.html">Home 2</a></li>
<li><a href="index3.html">Menu hamburger</a></li>
<li><a href="index-dark.html">Home 1 (Dark)</a></li>
<li><a href="index2-dark.html">Home 2 (Dark)</a></li>
<li><a href="index3-dark.html">Menu hamburger (Dark)</a></li></ul></li>
<li class="menu-item-has-children"><a href="destinations-list.html">Destinations</a>
<ul class="sub-menu"><li><a href="destinations-list.html">List</a></li>
<li><a href="destinations-grid.html">Grid</a></li>
<li class="menu-item-has-children"><a href="destinations-trip.html">Detail</a>
<ul class="sub-menu"><li><a href="destinations-trip.html">Trips in destination</a></li>
<li><a href="destinations-hotel.html">Hotels in destination</a></li>
<li><a href="destinations-attraction.html">Attraction in destination</a></li>
<li><a href="destinations-flight.html">Flights in destination</a></li>
<li><a href="destinations-train.html">Train in destination</a></li></ul>
</li><li><a href="destinations-list-dark.html">List (Dark)</a></li>
<li><a href="destinations-grid-dark.html">Grid (Dark)</a></li>
<li class="menu-item-has-children"><a href="destinations-trip.html">Detail (Dark)</a>
<ul class="sub-menu"><li><a href="destinations-trip-dark.html">Trips in destination</a></li>
<li><a href="destinations-hotel-dark.html">Hotels in destination</a></li>
<li><a href="destinations-attraction-dark.html">Attraction in destination</a></li>
<li><a href="destinations-flight-dark.html">Flights in destination</a></li>
<li><a href="destinations-train-dark.html">Train in destination</a></li></ul></li></ul></li>
<li class="menu-item-has-children"><a href="trip.html">Trips</a>
<ul class="sub-menu"><li><a href="trip.html">Trips</a></li>
<li><a href="trip-detail.html">Trips Detail</a></li>
<li><a href="trip-dark.html">Trips (Dark)</a></li>
<li><a href="trip-detail-dark.html">Trips Detail (Dark)</a></li></ul></li>
<li class="menu-item-has-children"><a href="hotel.html">Hotel</a>
<ul class="sub-menu"><li><a href="hotel.html">Hotel</a></li>
<li><a href="hotel-detail.html">Hotel Detail</a></li>
<li><a href="hotel-dark.html">Hotel (Dark)</a></li>
<li><a href="hotel-detail-dark.html">Hotel Detail (Dark)</a></li></ul></li>
<li class="menu-item-has-children"><a href="flight.html">Flight</a>
<ul class="sub-menu"><li><a href="flight.html">Flight</a></li>
<li><a href="flight-detail.html">Flight Detail</a></li>
<li><a href="flight-dark.html">Flight (Dark)</a></li>
<li><a href="flight-detail-dark.html">Flight Detail (Dark)</a></li></ul></li>
<li class="menu-item-has-children"><a href="train.html">Train</a>
<ul class="sub-menu"><li><a href="train.html">Train</a></li>
<li><a href="train-detail.html">Train Detail</a></li>
<li><a href="train-dark.html">Train (Dark)</a></li>
<li><a href="train-detail-dark.html">Train Detail (Dark)</a></li></ul></li>
<li class="menu-item-has-children"><a href="attraction.html">Attraction</a>
<ul class="sub-menu"><li><a href="attraction.html">Attraction</a></li>
<li><a href="attraction-detail.html">Attraction Detail</a></li>
<li><a href="attraction-dark.html">Attraction (Dark)</a></li>
<li><a href="attraction-detail-dark.html">Attraction Detail (Dark)</a></li></ul></li>
<li class="menu-item-has-children current-menu-parent"><a href="#">Pages</a>
<ul class="sub-menu"><li class="menu-item-has-children"><a href="blog.html">Blog</a>
<ul class="sub-menu"><li><a href="blog.html">Blog</a></li>
<li><a href="single-post.html">Single Post</a></li>
<li><a href="blog-dark.html">Blog (Dark)</a></li>
<li><a href="single-post-dark.html">Single Post (Dark)</a></li></ul></li>
<li class="menu-item-has-children current-menu-parent"><a href="login.html">Log In</a>
<ul class="sub-menu"><li><a href="login.html">Log In</a></li>
<li class="current-menu-item"><a href="register.html">Register</a></li>
<li><a href="login.html">Log In (Dark)</a></li>
<li><a href="register.html">Register (Dark)</a></li></ul></li>
<li class="menu-item-has-children"><a href="checkout-yourcart.html">Checkout</a>
<ul class="sub-menu"><li><a href="checkout-yourcart.html">Your cart</a></li>
<li><a href="checkout-customer.html">Customer</a></li>
<li><a href="checkout-complete.html">Complete</a></li>
<li><a href="checkout-yourcart-dark.html">Your cart (Dark)</a></li>
<li><a href="checkout-customer-dark.html">Customer (Dark)</a></li>
<li><a href="checkout-complete-dark.html">Complete (Dark)</a></li></ul></li>
<li><a href="shortcode.html">Shortcode</a></li></ul></li>
<li class="menu-item-has-children"><a href="contact.html">Contact</a>
<ul class="sub-menu"><li><a href="contact.html">Light</a></li>
<li><a href="contact-dark.html">Dark</a></li></ul></li></ul>
</nav>

<div class="search-box"><span class="searchtoggle"><i class="awe-icon awe-icon-search"></i></span>

<form class="form-search"><div class="form-item">
<input type="text" value="Search &amp; hit enter"></div>
</form></div>
<a class="toggle-menu-responsive" href="#">
<div class="hamburger"><span class="item item-1"></span> 
<span class="item item-2"></span> <span class="item item-3"></span></div></a></div></div>
</header>

<section class="awe-parallax register-page-demo">
<div class="awe-overlay"></div>
<div class="container">
<div class="login-register-page__content">

<form method="post" id="userForm">
<div class="form-item">
<label>Name</label>
<input type="text" name="name" value="" required placeholder="Enter Name">
</div>
<div class="form-item">
<label>Contact</label>
<input type="text" name="contact" value="" required placeholder="Enter Contact">
</div>
<div class="form-item">
<label>Email</label>
<input type="email" name="email" value="" required onKeyPress="return AvoidSpace(event)" placeholder="Enter Your Email Address">
</div>
<div class="form-item">
<label>Password</label>
<input type="password" name="password" id="password1" value="" required onKeyPress="return AvoidSpace(event)" placeholder="Enter Your Password">
</div>
<div class="form-item">
<label>Confirm password</label>
<input type="password" name="cpassword" id="password2" value="" required onKeyPress="return AvoidSpace(event)" placeholder="Re Enter Your Password">
</div>
<a href="#" class="terms-conditions">By registering, you accept terms &amp; conditions</a>
<div class="form-actions">
<input type="submit" value="Register">
</div>
</form>
<div class="login-register-link">Already have Account? <a href="login.html">Log in HERE</a></div>
</div>
</div>
</section>

<footer id="footer-page">
<div class="container">
<div class="row">
<div class="col-md-3">
<div class="widget widget_contact_info">
<div class="widget_background">
<div class="widget_background__half">
<div class="bg"></div></div>
<div class="widget_background__half">
<div class="bg"></div></div></div>
<div class="logo"><img src="images/logo-footer.png" alt=""></div>
<div class="widget_content"><p>25 California Avenue, Santa Monica, California. USA</p><p>+1-888-8765-1234</p><a href="#"> 
<script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script>
</a></div></div></div>
<div class="col-md-2">
<div class="widget widget_about_us"><h3>About Us</h3>
<div class="widget_content"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel dignissim dolo
r. Ut risus orci, aliquam sit amet semper eget, egestas aliquam felis.</p>
</div></div></div>
<div class="col-md-2">
<div class="widget widget_categories"><h3>Categiries</h3>
<ul><li><a href="#">Countries</a></li>
<li><a href="#">Regions</a></li>
<li><a href="#">Cities</a></li>
<li><a href="#">Districts</a></li>
<li><a href="#">Countries</a></li>
<li><a href="#">Airports</a></li>
<li><a href="#">Hotels</a></li>
<li><a href="#">Places of interest</a></li></ul></div></div>

<div class="col-md-2">
<div class="widget widget_recent_entries"><h3>Recent Blog</h3>
<ul><li><a href="#">Countries</a></li>
<li><a href="#">Regions</a></li>
<li><a href="#">Cities</a></li>
<li><a href="#">Districts</a></li>
<li><a href="#">Countries</a></li>
<li><a href="#">Airports</a></li>
<li><a href="#">Hotels</a></li>
<li><a href="#">Places of interest</a></li>
</ul></div></div>
<div class="col-md-3">
<div class="widget widget_follow_us">
<div class="widget_content"><p>For Special booking request, please call</p>
<span class="phone">099-099-000</span>
<div class="awe-social"><a href="#"><i class="fa fa-twitter"></i></a> 
<a href="#"><i class="fa fa-pinterest"></i></a>
 <a href="#"><i class="fa fa-facebook"></i></a> 
 <a href="#"><i class="fa fa-youtube-play"></i></a>
 </div></div></div></div></div>
 <div class="copyright"><p>©2015 GOFAR travel™ All rights reserved.</p>
 </div></div></footer></div>
 <script type="text/javascript" src="js/lib/jquery-1.11.2.min.js"></script>
 <script type="text/javascript" src="js/lib/masonry.pkgd.min.js"></script>
 <script type="text/javascript" src="js/lib/jquery.parallax-1.1.3.js"></script>
 <script type="text/javascript" src="js/lib/jquery.owl.carousel.js"></script>
 <script type="text/javascript" src="js/lib/theia-sticky-sidebar.js"></script>
 <script type="text/javascript" src="js/lib/jquery-ui.js"></script>
 <script type="text/javascript" src="js/scripts.js"></script>
 
 </body>
</html>