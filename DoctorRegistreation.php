<?php include('doctorregisterationserver.php') ?>

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
                
            </div>
        </nav>
        <!-- navigation -->

        
       
        <!-- modal container end -->

        <!-- 1st section start -->
        <section id="promo-1" class="content-block promo-1 min-height-600px bg-offwhite">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h2>Open your clinic today!</h2>
                        <h4>It's free and always will be.</h4>
    
						<div class="modal-dialog" role="document">
                <div class="modal-content">
                    <!-- modal content -->
                    <div class="modal-header">
						<h4>Enter your details</h4>

                    </div>
                    <!-- modal body start -->
                    <div class="modal-body">
                        
                        <!-- form start -->
                        <div class="container" id="wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <form method="post" action="DoctorRegistreation.php">

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

											<input class="form-control input-lg" placeholder="Education" type="education" name="education" value="<?php echo $education; ?>"  required />

											<input class="form-control input-lg" placeholder="Shop Name" type="text" name="sname" value="<?php echo $sname; ?>" required />

											
											<input class="form-control input-lg" placeholder="Address" type="text" name="address" value="<?php echo $address; ?>" required />

										
										
										
										<input class="form-control input-lg" placeholder="Description" type="text" name="description" value="<?php echo $description; ?>" required />

										<input class="form-control input-lg" placeholder="Locality" type="text" name="locality" value="<?php echo $locality; ?>" required />

											
											
											
                                        
                                        <br><label>Gender :</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="patientGender" value="male" value="<?php echo $Gender; ?>" />Male
                                        </label>
                                        <label class="radio-inline" >
                                            <input type="radio" name="patientGender" value="female" value="<?php echo $Gender; ?>" />Female
                                        </label>
											
											
											
                                        
											
											
										
										
										<input type="password" name="password_1" value="" class="form-control input-lg" placeholder="Password"  required />
                                        
										<input type="password" name="password_2" value="" class="form-control input-lg" placeholder="Confirm Password"  required />
                                        
											
											
											
											
											
											
											
											
										<span class="help-block">By clicking Create my account, you agree to our Terms and Conditins.</span>
                                        
                                        <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" name="reg_user" id="signup">Create my account</button>
                                    	
											
										
										</form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
							
                        
                        
                        
                </div>
                <!-- /.row -->
            </div>
        </section>
       
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