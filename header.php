<header id="main-header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a class="logo" href="index.php">
                                <img src="img/logo-invert.png" alt="Image Alternative text" title="Image Title" />
                            </a>
                        </div>
                        <div class="col-md-3 col-md-offset-2">
                            
                        </div>
                        <div class="col-md-4">
                            <div class="top-user-area clearfix">
                                <ul class="top-user-area-list list list-horizontal list-border">
									<?php if (isset($_SESSION['SESS_NAME'])) {
 ?>									
								<li class="top-user-area-avatar">
                                        <a href="user-profile.html">
                                            <img class="origin round" src="img/amaze_40x40.jpg" alt="User" title="AMaze" /><?php echo $_SESSION['SESS_NAME']; ?></a>
                                    </li>
                                    
									<?php
										if($user_arr["type"]==4){
									?>
                                    <li><a href="adminpanel/build/bookings.php" title="Bookings"> <span style="background-color:red;padding: 5px;border-radius: 100px;font-weight: 800;font-size: 14px;"><?php echo get_title(booking,0); ?></span></a></li>
										<?php } ?>
										<li><a href="logout.php">Sign Out</a></li>
						 <?php } else { ?>
                                    
						<li><a href="login-register.php">Login / Register</a></li>
						
						<?php } ?>	
                                   
                                    <li class="top-user-area-lang nav-drop hide">
                                        <a href="#">
                                            <img src="img/flags/32/uk.png" alt="Image Alternative text" title="Image Title" />ENG
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="nav">
                    <ul class="slimmenu" id="slimmenu">
                        <li class="active"><a href="index.php">Home</a></li>
						<li><a href="services.php">Services</a>
                            <ul>
                                <li><a href="services.php">Hotel and Station Transfer</a>
                                </li>
                                <li><a href="services.php">Businesses Travel</a>
                                </li>
                                <li><a href="services.php">General Sightseeing Trips</a>
                                </li>
                                <li><a href="services.php">Airport Cab Service</a>
                                </li>
                            </ul>
                        </li>
						<li><a href="cars.php">Cars</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact-us.php">Contact Us</a></li>
                        
						
                        
                         </ul>
                </div>
            </div>
        </header>

