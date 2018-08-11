<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Hello Doctor !</title>
        <!-- Bootstrap -->
        <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style1.css" rel="stylesheet">
        <link href="assets/css/blocks.css" rel="stylesheet">
        <link href="assets/css/date/bootstrap-datepicker.css" rel="stylesheet">
        <link href="assets/css/date/bootstrap-datepicker3.css" rel="stylesheet">
        <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
        <!-- <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />  -->

        <!--Font Awesome (added because you use icons in your prepend/append)-->
        <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
        <link href="assets/css/material.css" rel="stylesheet">
    </head>
    <body>
        <!-- navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img alt="Brand" src="assets/img/logo.png" height="40px"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    
                    
                    <ul class="nav navbar-nav navbar-right">
                        

                        <!-- <li><a href="adminlogin.php">Admin</a></li> -->
                        <li><a href="#" data-toggle="modal" data-target="#myModal">Sign Up</a></li>
                   
                        <li>
                            <p class="navbar-text">Already have an account?</p>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                            <ul id="login-dp" class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">

                                            <form class="form" role="form" method="post" action="index.php" accept-charset="UTF-8" >
                                                <div class="form-group">
                                                    <label class="sr-only" for="phone">User Name</label>
                                       				<input class="form-control" placeholder="Phone Number" type="text" name="phone_number" value="<?php echo $phone_number; ?>" required />

											   </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="password">Password</label>
                                               		<input type="password" name="password" value="" class="form-control" placeholder="Password"  required />

											   </div"
                                                <div class="form-group">
                                                    <button type="submit" name="login_user" class="btn btn-primary btn-block">Sign in</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- navigation -->

        <!-- modal container start -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <!-- modal content -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title">Sign Up</h3>
						<h4>It's free and always will be.</h4>

                    </div>
                    <!-- modal body start -->
                    <div class="modal-body">
                        
                        <!-- form start -->
                        <div class="container" id="wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <form method="post" action="index.php">

											<?php include('errors.php'); ?>

											<div class="row">
												<div class="col-xs-6 col-md-6">
													<input type="text" name="patientFirstName" value="<?php echo $first_name; ?>" class="form-control input-lg" placeholder="First Name" required />
												</div>
												<div class="col-xs-6 col-md-6">
													<input type="text" name="patientLastName" value="<?php echo $last_name; ?>" class="form-control input-lg" placeholder="Last Name" required />
												</div>
											</div>
											
											
											
											<input class="form-control input-lg" placeholder="Phone Number" type="text" name="phone_number" value="<?php echo $phone_number; ?>" required />

											
											<input class="form-control input-lg" placeholder="Your Email" type="email" name="email" value="<?php echo $email; ?>"  required />

											
											<label>Birth Date</label>
											<div class="row">
                                            <div class="col-xs-4 col-md-4">
                                                <select name="month" class = "form-control input-lg" value="<?php echo $month; ?>" required>
                                                    <option value="">Month</option>
                                                    <option value="01">Jan</option>
                                                    <option value="02">Feb</option>
                                                    <option value="03">Mar</option>
                                                    <option value="04">Apr</option>
                                                    <option value="05">May</option>
                                                    <option value="06">Jun</option>
                                                    <option value="07">Jul</option>
                                                    <option value="08">Aug</option>
                                                    <option value="09">Sep</option>
                                                    <option value="10">Oct</option>
                                                    <option value="11">Nov</option>
                                                    <option value="12">Dec</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-4 col-md-4">
                                                <select name="day" class = "form-control input-lg" value="<?php echo $day; ?>" required>
                                                    <option value="">Day</option>
                                                    <option value="01">1</option>
                                                    <option value="02">2</option>
                                                    <option value="03">3</option>
                                                    <option value="04">4</option>
                                                    <option value="05">5</option>
                                                    <option value="06">6</option>
                                                    <option value="07">7</option>
                                                    <option value="08">8</option>
                                                    <option value="09">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-4 col-md-4">
                                                <select name="year" class = "form-control input-lg" value="<?php echo $year; ?>" required>
                                                    <option value="">Year</option>
                                                    
                                                    <option value="1981">1981</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1999">1999</option>
                                                    <option value="2000">2000</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2013">2013</option>
													<option value="2010">2014</option>
                                                    <option value="2011">2015</option>
                                                    <option value="2012">2016</option>
                                                    <option value="2013">2017</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br><label>Gender :</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="patientGender" value="male" value="<?php echo $Gender; ?>" />Male
                                        </label>
                                        <label class="radio-inline" >
                                            <input type="radio" name="patientGender" value="female" value="<?php echo $Gender; ?>" />Female
                                        </label>
											
											
											
                                        <select name="blood_group" class = "form-control input-lg" required>
                                            <option value="">Blood Group :</option>
                                            <option value="A+" value="<?php echo $blood_group; ?>">A+</option>
                                            <option value="B+" value="<?php echo $blood_group; ?>">B+</option>
											<option value="A-" value="<?php echo $blood_group; ?>">A-</option>
                                            <option value="B-" value="<?php echo $blood_group; ?>">B-</option>
                                            <option value="AB+" value="<?php echo $blood_group; ?>">AB+</option>
                                            <option value="AB-" value="<?php echo $blood_group; ?>">AB-</option>
                                            <option value="O+" value="<?php echo $blood_group; ?>">O+</option>
                                            <option value="O-" value="<?php echo $blood_group; ?>">O-</option>       
                                        </select>
											
											
										<input class="form-control input-lg" placeholder="Address" type="text" name="address" value="<?php echo $address; ?>" required />

										<input type="password" name="password_1" value="" class="form-control input-lg" placeholder="Password"  required />
                                        
										<input type="password" name="password_2" value="" class="form-control input-lg" placeholder="Confirm Password"  required />
                                        
											
											
											
											
											
											
											
											
										<span class="help-block">By clicking Create my account, you agree to our Terms and Condition.</span>
                                        
                                        <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" name="reg_user" id="signup">Create my account</button>
                                    	
											
										
										</form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->

        <!-- 1st section start -->
        <section id="promo-1" class="content-block promo-1 min-height-600px bg-offwhite">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h2>Make appointment today!</h2>
                            
                        
                        
                    </div>
                    
                </div>
                <!-- /.row -->
            </div>
        </section>
        <!-- first section end -->

        
        
        <!-- footer start -->
        <div class="copyright-bar bg-black">
            <div class="container">
                <p class="pull-left small">© Rajath and Prakhyath</p>
                <p class="pull-right small"><a href="adminlogin.php">Login As Doctor</a></p>
            </div>
        </div>
        <!-- footer end -->
    </div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/date/bootstrap-datepicker.js"></script>
    <script src="assets/js/moment.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/collapse.js"></script>
     <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
   
   
   
</body>
</html>