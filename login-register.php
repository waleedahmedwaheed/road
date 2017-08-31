<!DOCTYPE HTML>
<html class="full">
<head>
    <title>Get on Road</title>


    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include("style.php"); ?>
	
	
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

<script>

$(document).ready(function (e) {
$("#userForm2").on('submit',(function(e) {
e.preventDefault();
$('#response').show();
$("#loader").show();
$.ajax({
url: "login-exec.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
success: function(data)   // A function to be called if request succeeds
{
$("#loader").hide();
$('#userForm2')[0].reset();
$("#response2").html(data);
}
});

}));
});


</script>

<script type="text/javascript">
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

<script type="text/javascript">
function AvoidSpace(event) {
    var k = event ? event.which : window.event.keyCode;
    if (k == 32) return false;
}

    </script>
	
</head>

<body class="full">

    
    <div class="global-wrap">
        
        <div class="full-page">
            <div class="bg-holder full">
                <div class="bg-mask"></div>
                <div class="bg-img" style="background-image:url(img/196_365_2048x1365.jpg);"></div>
                <div class="bg-holder-content full text-white">
                    <a class="logo-holder" href="#">
                        <img src="img/logo-invert.png" alt="Get on Road" title="Get on Road" />
                    </a>
                    <div class="full-center">
                        <div class="container">
                            <div class="row row-wrap" data-gutter="60">
                                <div class="col-md-4">
                                    <div class="visible-lg">
                                        <h3 class="mb15">Welcome to Get on Road</h3>
                                        <p>All our Rent a Car Vehicles are licensed to carry passengers and are driven by experienced professional drivers.</p>
                                        <p>We provide cheapest services to our customers.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h3 class="mb15">Login</h3>
                                    <form method="post" id="userForm2">
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                            <label>Email</label>
                                            <input class="form-control" type="email" name="email" value="" required onKeyPress="return AvoidSpace(event)" placeholder="Enter Your Email Address" />
                                        </div>
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="password" id="password1" value="" required onKeyPress="return AvoidSpace(event)" placeholder="Enter Your Password" />
                                        </div>
                                        <input class="btn btn-primary" type="submit" value="Sign in" />
                                    </form>
									<span id="response2"> </span>
                                </div>
                                <div class="col-md-4">
                                    <h3 class="mb15">New To Get on Road?</h3>
                                    <form method="post" id="userForm">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="form-control" name="type" required >
											<option value=""> --Select-- </option>
											<option value="1"> One Way Travel </option>
											<option value="2"> Organization Travel </option>
											<option value="3"> Monthly Travel </option>
											<option value="4"> Driver </option>
											</select>
                                        </div>
										<div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                            <label>Full Name</label>
                                            <input class="form-control" name="name" placeholder="Enter your Name" type="text" value="" required />
                                        </div>
										<div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                            <label>Contact</label>
                                            <input type="text" pattern="[0-9]{12}" class="form-control" name="contact" maxlength="12" value="" required placeholder="e.g. 923335554444" />
                                        </div>
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-envelope input-icon input-icon-show"></i>
                                            <label>Emai</label>
                                            <input class="form-control" type="email" name="email" value="" required onKeyPress="return AvoidSpace(event)" placeholder="Enter Your Email Address" />
                                        </div>
                                        <div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="password" id="password"  value="" required onKeyPress="return AvoidSpace(event)" placeholder="Enter Your Password" />
                                        </div>
										<div class="form-group form-group-ghost form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                            <label>Confirm Password</label>
                                            <input class="form-control" type="password" name="cpassword" id="confirm_password" value="" required onKeyPress="return AvoidSpace(event)" placeholder="Re Enter Your Password" />
                                        </div>
                                        <input class="btn btn-primary" type="submit" value="Sign up for Get on Road" />
                                    </form>
									<span id="response"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="footer-links">
                        <li><a href="#">About</a>
                        </li>
                        <li><a href="#">Help</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



        
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
</body>
</html>



