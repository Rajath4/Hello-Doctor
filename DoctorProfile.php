<?php
session_start();

	$db = mysqli_connect('localhost', 'root', '', 'prodbms');
if(!isset($_SESSION['patientSession']))
{
header("Location: DoctorRegistreation.php.php");
}

//$res=mysqli_query($con,"SELECT * FROM doctor WHERE phone = 868686");
$res=mysqli_query($db,"SELECT * FROM doctor WHERE phone =" .$_SESSION['phone']);

$userRow = mysqli_fetch_array($res,MYSQLI_ASSOC);
$did = $userRow['did']; 
$sname = $userRow['shop_name']; 


$dental = "";
$lab = "";
$pharmacy = "";



if (isset($_POST['add_info'])) {
		// receive all input values from the form
		$dental   = mysqli_real_escape_string($db,$_POST['dental']);
		$lab   = mysqli_real_escape_string($db,$_POST['lab']);
		$pharmacy  = mysqli_real_escape_string($db,$_POST['pharmacy']);


		

		// register user if there are no errors in the form
						$query1 = "INSERT INTO about_info (did,dental_facility,pharmacy,lab_service) 
					  VALUES('$did', '$dental', '$lab','$pharmacy');";
					  //echo $query1;
			
			$result1 = mysqli_query($db, $query1);

			
			
			
			//$_SESSION['success'] = "You are now logged in";

			//header('location: patient/profile.php');
			//header('location: patientprofile.php');
			
		

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
	 <a href="#" class="brand-logo center"><?php echo $userRow['shop_name']; ; ?></a>
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
        <li class="tab"><a href="#test2">Patients Details</a></li>
        <li class="tab"><a href="#test3">Add Details</a></li>
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

      </div>

      <div class="col s9">
	  <div class="card">
	  
	  <table class="table table-user-information" align="center">
											<tbody>
												
												
												
												
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
													<td>Locality</td>
													<td><?php echo $userRow['locality']; ?>
													</td>
												</tr>
												<tr>
													<td>Clinic Name</td>
													<td><?php echo $userRow['shop_name']; ?>
													</td>
												</tr>
												<tr>
													<td>Description of shop</td>
													<td><?php echo $userRow['description']; ?>
													</td>
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
					
					
					$sql = "Select * from user u ,appinment a where u.uid = a.uid and u.uid IN(SELECT uid FROM appinment where did = $did)";
					//echo $sql;
					$result = $conn->query($sql);

					

					if ($result->num_rows > 0) {
						// output data of each row
						$i =1;
						while($userRow = $result->fetch_assoc()) {
							$uid = $userRow['uid'];
							$aid = $userRow['aid'];
							echo "<div class='row'>";
							echo "<div class='col s12 m12'>";
							echo "<div class='card'>";
							echo "<div class='card-action'>";
								echo "<b>Appoinment Number : $i</b>";
								$i = $i +1 ;
							echo "</div>";

							echo "<table class='table table-user-information' align='center'>";
											echo "<tbody>";
												echo "<tr>";
													echo "<td>Appointment holder :</td>";
													echo "<td>" .$userRow['first_name']."</td>";
												echo "</tr>";
												echo "<tr>";
													echo "<td>Appointment Date : </td>";
													echo "<td>" .$userRow['apt_date']."</td>";
												echo "</tr>";
												echo "<tr>";
													echo "<td>Symptoms : </td>";
													echo "<td>". $userRow['symptoms']."</td>";
												echo "</tr>";
												echo "<tr>";
													echo "<td>Comments</td>";
													echo "<td>". $userRow['comments']."</td>";
												echo "</tr>";
											echo "</tbody>";
										echo "</table>";
										echo "<div class='card-action'>";
								echo "<a href='apppplprofile.php?did=$did&uid=$uid&aid=$aid&sname=$sname'>More Information</a>";
							echo "</div>";
							echo "</div>";
							echo "</div>";
							echo "</div>";
							//echo "<div class='progress'>";
								//  echo "<div class='indeterminate'></div>";
							//echo "</div>";
						}
					} else {
						echo "No appoinment Recieved";
					}
					$conn->close();
			?> 
	  
  
  
  </div>  
  <!--Appoinment End-->
  
  
 
  <!-- Add Facilities Begin-->
  <div id="test3" class="col s12">
       
		  <div class="row">
      <div class="col s12">
        <div class="card-panel  red lighten-5">
          <span class="black-text">
		  
				 <div class="row">
                      <form method="post" action="DoctorProfile.php">
					  
					 
					  <div class="row">
						<div class="input-field col s12">
						  <input id="dental" type="text" class="validate" name="dental" value="<?php echo $dental; ?>" required>
						  <label for="dental">Dental facility : </label>
						</div>
					  </div>
					  <div class="row">
						<div class="input-field col s12">
						  <input id="lab" type="text" class="validate" name="lab" value="<?php echo $lab; ?>" required>
						  <label for="lab">Laboratory services : </label>
						</div>
					  </div>
					  <div class="row">
						<div class="input-field col s12">
						  <input id="pharmacy" type="text" class="validate" name="pharmacy" value="<?php echo $pharmacy; ?>" required>
						  <label for="pharmacy">Pharmacy : </label>
						</div>
					  </div>
					  <button class="btn waves-effect waves-light" type="submit" name="add_info">Submit
						<i class="material-icons right">send</i>
					  </button>
        
					</form>
				  </div>

		  
          </span>
        </div>
      </div>
    </div>
		  
		  
		  
		 
		  
		  
		  
  

  <!-- Add Facilities End-->
  

  
  
  
  
  
  
  
  
	  
	  
    </body>
  </html>