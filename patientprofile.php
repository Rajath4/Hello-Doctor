<?php
session_start();

	$db = mysqli_connect('localhost', 'root', '', 'prodbms');
//if(!isset($_SESSION['patientSession']))
//{
//header("Location: index.php");
//}

//$res=mysqli_query($con,"SELECT * FROM user WHERE phone = 868686");
$res=mysqli_query($db,"SELECT * FROM user WHERE phone =" .$_SESSION['phone']);

$userRow = mysqli_fetch_array($res,MYSQLI_ASSOC);
$uid = $userRow['uid'];
?>
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
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="css/icon.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  
	  <nav class="nav-extended">
    <div class="nav-wrapper">
     <a class="navbar-brand" href=""><img alt="Brand" src="assets/img/logo.png" height="60px"></a>
	 	 <a href="#" class="brand-logo center">Welcome <?php echo $userRow['first_name']; ?> <?php echo $userRow['last_name']; ?></a>

      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="patientlogout.php?logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a></li>
        
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#test1">Profile</a></li>
        <li class="tab"><a class="active" href="#test2">Doctors Available</a></li>
        <!--<li class="tab"><a href="#test4">Test 4</a></li>-->
      </ul>
    </div>
  </nav>
  
  <!--Profile start-->
<div id="test1" class="col s12">




<div class="row">

      <div class="col s3">
		<div class="card">
												  <div class="container">
								<br>
								<h5> <?php echo $userRow['first_name']; ?> <?php echo $userRow['last_name']; ?> </h5>

									<h6> <strong> <?php echo $userRow['phone']; ?></strong></h6>
									<p>
										<?php echo $userRow['email']; ?>
										<br>
									</p>	<br>	
									
									 <!-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Update Profile</button>-->
		</div>
		</div>
												<!-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Update</a>-->


      </div>

      <div class="col s9">
	  <div class="card">
	  
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
  
  <!--Profile End-->
  
  <!--Appoinment Start-->
  <div id="test2" class="col s12">
  <?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "prodbms";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 

					$sql = "CALL get_doctors();";
					$result = $conn->query($sql);

					

					if ($result->num_rows > 0) {
						// output data of each row
						while($userRow = $result->fetch_assoc()) {
							echo "<div class='row'>";
							echo "<div class='col s12 m12'>";
							echo "<div class='card'>";
							echo "<div class='card-action'>";
								echo "<b>".$userRow['shop_name'] ."</b>";
							echo "</div>";

							echo "<table class='table table-user-information' align='center'>";
											$ph=$userRow['phone'];
											echo "<tbody>";
												
												echo "<tr>";
													echo "<td>Doctor Name</td>";
													echo "<td>" .$userRow['first_name']." ".$userRow['last_name']."</td>";
												echo "</tr>";
												
												echo "<tr>";
													echo "<td>Education</td>";
													echo "<td>" .$userRow['education']."</td>";
												echo "</tr>";
												echo "<tr>";
													echo "<td>Locality</td>";
													echo "<td>". $userRow['locality']."</td>";
												echo "</tr>";
												echo "<tr>";
													echo "<td>Gender</td>";
													echo "<td>". $userRow['gender']."</td>";
												echo "</tr>";
												echo "<tr>";
													echo "<td>Address</td>";
													echo "<td>". $userRow['address']."</td>";
												echo "</tr>";
												echo "<tr>";
													echo "<td>Phone Number</td>";
													echo "<td>".$userRow['phone'] ."</td>";
												echo "</tr>";
												echo "<tr>";
													echo "<td>Email</td>";
													echo "<td>".$userRow['email']."</td>";
												echo "</tr>";
												echo "<tr>";
													echo "<td>Description</td>";
													echo "<td>".$userRow['description']."</td>";
												echo "</tr>";
											echo "</tbody>";
										echo "</table>";
										echo "<div class='card-action'>";
								echo "<a href='clinicviewbypatient.php?ph=$ph&uid=$uid'>Visit our clinic</a>";
							echo "</div>";
							echo "</div>";
							echo "</div>";
							echo "</div>";
							//echo "<div class='progress'>";
								//  echo "<div class='indeterminate'></div>";
							//echo "</div>";
						}
					} else {
						echo "No Problems Recieved";
					}
					$conn->close();
			?> 
	  
  
  
  </div>  
  <!--Appoinment End-->
  

		<div id="modal1" class="modal modal-fixed-footer">
								<div class="modal-content">
								<?php
								$res=mysqli_query($db,"SELECT * FROM user WHERE phone =" .$_SESSION['phone']);

								$userRow = mysqli_fetch_array($res,MYSQLI_ASSOC);
								?>
										<h4 class="modal-title" id="myModalLabel"><?php echo $userRow['first_name']; ?></h4>
									
										<!-- form start -->
										<form action="<?php $_PHP_SELF ?>" method="post" >
											<table class="table">
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
														
														
															<p>
															  <input class="with-gap" name="group1" type="radio" id="test3"  />
															  <label for="test3"><input type="radio" name="patientGender" value="male" <?php echo $male; ?>>Male</label>

															  	

															</p>
															<p>
															  <input class="with-gap" name="group1" type="radio" id="test4"  />
															  <label for="test4"><input type="radio" name="patientGender" value="female" <?php echo $female; ?>>Female</label>

															  	

															</p>
														   
														  
	
														
														<!--
															<div class="radio">
																<label><input type="radio" name="patientGender" value="male" <?php echo $male; ?>>Male</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="patientGender" value="female" <?php echo $female; ?>>Female</label>
															</div>-->
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
																	<select required>
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
														</tr>
													</tbody>
													
												</table>
												

												
											<!-- form end -->
										</div>
										
									<div class="modal-footer">

											<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
											<input type="submit" name="submit" class="btn btn-info" value="Update Info"></td>

									</div>											</form>

								</div>
							
  
  
<!--
  <div id="test4" class="col s12">Test 4</div>-->
  
 
			
  
  <!-- script to open modal -->
  
	  <script>
	   $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
	  
	  
	  
	  </script>
	    <!-- script to open selection -->

	  <script>
	  $(document).ready(function() {
    $('select').material_select();
	
	

  });
	  
	  </script>
  
  
  
	  
	  
    </body>
  </html>