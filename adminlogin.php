<?php include('doctorregisterationserver.php') ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Clinic Appointment Application</title>
        <!-- Bootstrap -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <!-- start -->
            <div class="login-container">
                    <div id="output"></div>
                    <div class="avatar"></div>
                    <div class="form-box">
                         <form class="form" role="form" method="post" action="adminlogin.php" accept-charset="UTF-8" >

                            <input class="form-control" placeholder="Phone Number" type="text" name="phone_number" value="<?php echo $phone_number; ?>" required />
                            
							<input type="password" name="password" value="" class="form-control" placeholder="Password"  required />

							<button type="submit" name="login_user" class="btn btn-primary btn-block">Sign in</button>

                        </form>
						<a href='DoctorRegistreation.php'>Open a new clinic</a>
                    </div>
                </div>
            <!-- end -->
        </div>

        <script src="assets/js/jquery.js"></script>

        <!-- js start -->
        
        <!-- js end -->
    </body>
</html>