<?php
session_start();

	$db = mysqli_connect('localhost', 'root', '', 'prodbms');

//$res=mysqli_query($con,"SELECT * FROM user WHERE phone = 868686");
$res=mysqli_query($db,"SELECT * FROM user WHERE phone =" .$_SESSION['phone']);

$userRow = mysqli_fetch_array($res,MYSQLI_ASSOC);
?>
<!-- update -->
<?php
	$blood_group = "";

if (isset($_POST['submit'])) {
//variables
		$first_name = $_POST['patientFirstName'];
		$last_name  = $_POST['patientLastName'];
		$email = $_POST['email'];
		$phone_number = $_POST['phone_number'];		
	//	$month            = $_POST['month'];
	//	$day              = $_POST['day'];
	//	$year             = $_POST['year'];
	//	$DOB       = $year . "-" . $month . "-" . $day;
		$Gender = $_POST['patientGender'];
		$blood_group            =$_POST['blood_group'];
		$address = $_POST['address'];
$res=mysqli_query($con,"UPDATE user SET first_name='$first_name', last_name='$last_name', email='$email',phone='$phone_number', gender='$Gender', blood_group='$blood_group', address='$address' WHERE phone = " .$_SESSION['phone']);
mysqli_query($con, $res);

// $userRow=mysqli_fetch_array($res);
header( 'Location: profile.php' ) ;
}
?>
<?php
$male="";
$female="";
if ($userRow['gender']=='male') {
$male = "checked";
}elseif ($userRow['gender']=='female') {
$female = "checked";
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Patient Dashboard</title>
		<!-- Bootstrap -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/default/style.css" rel="stylesheet">
		<!-- <link href="assets/css/default/style1.css" rel="stylesheet"> -->
		<link href="assets/css/default/blocks.css" rel="stylesheet">
		<link href="assets/css/date/bootstrap-datepicker.css" rel="stylesheet">
		<link href="assets/css/date/bootstrap-datepicker3.css" rel="stylesheet">
		<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
		<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
		<!--Font Awesome (added because you use icons in your prepend/append)-->
		<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
		<!-- <link href="assets/css/material.css" rel="stylesheet"> -->
	</head>
	<body>
		
		<!-- navigation -->
		<nav class="navbar navbar-default " role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<!--<a class="navbar-brand" href="patient.php"><img alt="Brand" src="assets/img/logo.png" height="40px"></a>-->
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<ul class="nav navbar-nav">
							<li><a href="patient.php">Home</a></li>
							<li><a href="profile.php?patientId=<?php echo $userRow['first_name']; ?>" >Profile</a></li>
							<li><a href="patientapplist.php?patientId=<?php echo $userRow['first_name']; ?>">Appointment</a></li>
						</ul>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $userRow['first_name']; ?> <?php echo $userRow['last_name']; ?><b class="caret"></b></a>
							<ul class="dropdown-menu">
								<!--<li>
									<a href="profile.php?patientId=<?php echo $userRow['first_name']; ?>"><i class="fa fa-fw fa-user"></i> Profile</a>
								</li>
								<li>
									<a href="patientapplist.php?patientId=<?php echo $userRow['first_name']; ?>"><i class="glyphicon glyphicon-file"></i> Appointment</a>
								</li>
								<li class="divider"></li>-->
								<li>
									<a href="patientlogout.php?logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- navigation -->
		
		
		<div class="container">
			<section style="padding-bottom: 50px; padding-top: 50px;">
				<div class="row">
					<!-- start -->
					<!-- USER PROFILE ROW STARTS-->
					<div class="row">
						<div class="col-md-3 col-sm-3">
							
							<div class="user-wrapper">
								<img src="assets/img/11.jpg" class="img-responsive" />
								<div class="description">
								<h3> <?php echo $userRow['first_name']; ?> <?php echo $userRow['last_name']; ?> </h3>
									<h5> <strong> <?php echo $userRow['phone']; ?></strong></h5>
									<p>
										<?php echo $userRow['email']; ?>
									</p>
									<hr />
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Update Profile</button>
								</div>
							</div>
						</div>
						
						<div class="col-md-9 col-sm-9  user-wrapper">
							<div class="description">
								<h3> <?php echo $userRow['first_name']; ?> <?php echo $userRow['last_name']; ?> </h3>
								<hr />
								
								<div class="panel panel-default">
									<div class="panel-body">
										
										
										<table class="table table-user-information" align="center">
											<tbody>
												
												
												
												<tr>
													<td>Date Of Birth</td>
													<td><?php echo $userRow['date_of_birth']; ?></td>
												</tr>
												<tr>
													<td>Gender</td>
													<td><?php echo $userRow['gender']; ?></td>
												</tr>
												<tr>
													<td>Address</td>
													<td><?php echo $userRow['address']; ?>
													</td>
												</tr>
												<tr>
													<td>Phone Number</td>
													<td><?php echo $userRow['phone']; ?>
													</td>
												</tr>
												<tr>
													<td>Email</td>
													<td><?php echo $userRow['email']; ?>
													</td>
												</tr>
												<tr>
													<td>Blood Group</td>
													<td><?php echo $userRow['blood_group']; ?></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
					<!-- USER PROFILE ROW END-->
					<!-- end -->
					<div class="col-md-4">
						
						<!-- Large modal -->
						
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel"><?php echo $userRow['first_name']; ?></h4>
									</div>
									<div class="modal-body">
										<!-- form start -->
										<form action="<?php $_PHP_SELF ?>" method="post" >
											<table class="table table-user-information">
												<tbody>
													<tr>
														<td>First Name:</td>
														<td><input type="text" class="form-control" name="patientFirstName" value="<?php echo $userRow['first_name']; ?>"  /></td>
													</tr>
													<tr>
														<td>Last Name</td>
														<td><input type="text" class="form-control" name="patientLastName" value="<?php echo $userRow['last_name']; ?>"  /></td>
													</tr>
													
													
													<tr>
														<td>DOB</td>
														<!-- <td><input type="text" class="form-control" name="patientDOB" value="<?php echo $userRow['DOB']; ?>"  /></td> -->
														<td>
															<div class="form-group ">
																
																<div class="input-group">
																	<div class="input-group-addon">
																		<i class="fa fa-calendar">
																		</i>
																	</div>
																	<input class="form-control" id="DOB" name="DOB" placeholder="MM/DD/YYYY" type="text" value="<?php echo $userRow['date_of_birth']; ?>"/>
																</div>
															</div>
														</td>
														
													</tr>
													<!-- radio button -->
													<tr>
														<td>Gender</td>
														<td>
															<div class="radio">
																<label><input type="radio" name="patientGender" value="male" <?php echo $male; ?>>Male</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="patientGender" value="female" <?php echo $female; ?>>Female</label>
															</div>
														</td>
													</tr>
													<!-- radio button end -->
													<!--
													<tr>
														<td>Phone number</td>
														<td><input type="text" class="form-control" name="phone_number" value="<?php echo $userRow['phone']; ?>"  /></td>
													</tr>-->
													<tr>
														<td>Email</td>
														<td><input type="text" class="form-control" name="email" value="<?php echo $userRow['email']; ?>"  /></td>
													</tr>
													<tr>
														<td>Address</td>
														<td><textarea class="form-control" name="address"  ><?php echo $userRow['address']; ?></textarea></td>
													</tr>
													<tr>
														<td>Blood Group :</td>
														<td>
															<select name="blood_group" class = "form-control" required>
																<option value=""><?php echo $userRow['blood_group']; ?></option>
																<option value="A+" value="<?php echo $blood_group; ?>">A+</option>
																<option value="B+" value="<?php echo $blood_group; ?>">B+</option>
																<option value="A-" value="<?php echo $blood_group; ?>">A-</option>
																<option value="B-" value="<?php echo $blood_group; ?>">B-</option>
																<option value="AB+" value="<?php echo $blood_group; ?>">AB+</option>
																<option value="AB-" value="<?php echo $blood_group; ?>">AB-</option>
																<option value="O+" value="<?php echo $blood_group; ?>">O+</option>
																<option value="O-" value="<?php echo $blood_group; ?>">O-</option>       
															</select>	
														</td>	
													</tr>
													
													<tr>
														<td>
															<input type="submit" name="submit" class="btn btn-info" value="Update Info"></td>
														</tr>
													</tbody>
													
												</table>
												
												
												
											</form>
											<!-- form end -->
										</div>
										
									</div>
								</div>
							</div>
							<br /><br/>
						</div>
						
					</div>
					<!-- ROW END -->
				</section>
				<!-- SECTION END -->
			</div>
			<!-- CONATINER END -->
			<script src="assets/js/jquery.js"></script>
			<script src="assets/js/bootstrap.min.js"></script>
			
			<script type="text/javascript">
														$(function () {
														$('#DOB').datetimepicker();
														});
														</script>
		</body>
	</html>