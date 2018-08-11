 <?php
session_start();
$value = $_GET['ph'];
	$db = mysqli_connect('localhost', 'root', '', 'prodbms');


//$res=mysqli_query($con,"SELECT * FROM user WHERE phone = 868686");
$res=mysqli_query($db,"SELECT * FROM doctor WHERE phone =" .$_GET['ph']);

$userRow = mysqli_fetch_array($res,MYSQLI_ASSOC);
$did = $userRow['did']; 
$uid = $_GET['uid'];



	// variable declaration
	$aptdate = "";
	$symptoms = "";
	$comm = "";
	$rev = "" ;
	
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$symptoms   = mysqli_real_escape_string($db,$_POST['symptoms']);
		$comm  = mysqli_real_escape_string($db, $_POST['comments']);
		$aptdate  = mysqli_real_escape_string($db, $_POST['aptdate']);


		

		// register user if there are no errors in the form
		if (count($errors) == 0) {
						$query = "INSERT INTO appinment (uid,did,apt_date,symptoms,comments) 
					  VALUES('".$uid."', '$did', '$aptdate','$symptoms','$comm');";
										  //echo $query;

			
			mysqli_query($db, $query);

			
			
			
			//$_SESSION['success'] = "You are now logged in";

			//header('location: patient/profile.php');
			//header('location: patientprofile.php');
			
		}

	}
	
	
	
	if (isset($_POST['rev_user'])) {
		// receive all input values from the form
		$rev   = mysqli_real_escape_string($db,$_POST['rev']);


		

		// register user if there are no errors in the form
		if (count($errors) == 0) {
						$query1 = "INSERT INTO review (uid,did,review) 
					  VALUES('".$uid."', '$did', '$rev');";

			
			mysqli_query($db, $query1);

			
			
			
			//$_SESSION['success'] = "You are now logged in";

			//header('location: patient/profile.php');
			//header('location: patientprofile.php');
			
		}

	}

	// ... 

	
	


?>
 <!DOCTYPE html>
<html>
<head>
<title><?php echo $userRow['shop_name']; ?></title>
<link href="css/icon.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 







	
	


    </style>
</head>
<body background="https://www.myhaliburtonnow.com/wp-content/uploads/2016/02/doctor-health-wellness.jpg">

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  
	  
	  
	  
	  
	  <nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center"><?php echo $userRow['shop_name']; ?></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
     <!-- <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>-->
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#test1">Home</a></li>
        <li class="tab"><a class="#test2" href="#test2">Reviews</a></li>
        <li class="tab"><a href="#test3">About</a></li>
      </ul>
    </div>
  </nav>
  <!-- Profile Startes-->
  <div id="test1" class="col s12">
  
  <div class="row">

      <div class="col s3">
        <!-- Grey navigation panel -->
		<div class="card semitransparent" >
            <div class="card-content black-text">
	<span class="card-title">About Us</span>
              <table class="table table-user-information" align="center">
											<tbody>
											
											
												<tr>
													<td>Name</td>
													<td><?php echo $userRow['first_name']; ?></td>
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
													<td>Education</td>
													<td><?php echo $userRow['education']; ?></td>
												</tr>
												<tr>
													<td>Description</td>
													<td><?php echo $userRow['description']; ?></td>
												</tr>
												
											</tbody>
									</table>
            </div>
            <div class="card-action">
              <a href="https://www.google.co.in/maps/@13.3225335,74.7304997,14.5z?hl=en">Get Direction</a>
              
            </div>
          </div>
        </div>
      

      <div class="col s9">
        <!-- Teal page content  -->
		 <div class="row">
        <div class="col s12 m7">
          <div class="card">
           <div class="card-content">			
			<h4>Get a Appointment!</h4>
			<h6>Please fill the below information</h6><br><br>
                                    <form method="post" action="clinicviewbypatient.php?ph=<?php echo $userRow['phone']?>&uid=<?php echo $uid?>"">
                                              
											  

											  
											    <input type="text" class="datepicker" placeholder="Appoinmtment Date" name = "aptdate" value="<?php echo $aptdate; ?>" required >

											  	<input class="form-control input-lg" placeholder="Symptoms" type="text" name="symptoms" value="<?php echo $symptoms; ?>" required />

											  	<input class="form-control input-lg" placeholder="Comments" type="text" name="comments" value="<?php echo $comm; ?>" required />

											 <!-- <div class="row">
												<div class="input-field col s6">
												  <i class="material-icons prefix">mode_edit</i>
												  <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
												  <label for="icon_prefix2">Symptoms</label>
												</div>
											  </div>
											  
											  <div class="row">
												<div class="input-field col s6">
												  <i class="material-icons prefix">mode_edit</i>
												  <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
												  <label for="icon_prefix2">Comments</label>
												</div>
											  </div>
														-->							  
											  
                                                <div class="form-group">
                                                    <button type="submit" name="reg_user" class="btn btn-primary btn-block">Get Appointment</button>
                                                </div>
                                            </form>
            </div>
            
          </div>
		    
        </div>
      </div>
		
      </div>
		  
  
  
  </div>
  </div>
  <!-- Profile ends-->
  <div id="test2" class="col s12">
        <div class="col s12">

      <div class="card">
           
            <div class="card-content">
			
			<h4>Write Your Review</h4>
			<h6>Please write your review here!</h6><br><br>
                                    <form method="post" action="clinicviewbypatient.php?ph=<?php echo $userRow['phone']?>&uid=<?php echo $uid?>"">
                                              
											  

											  

											  	<input class="form-control input-lg" placeholder="Write your review here" type="text" name="rev" value="<?php echo $rev; ?>" required />


											 <!-- <div class="row">
												<div class="input-field col s6">
												  <i class="material-icons prefix">mode_edit</i>
												  <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
												  <label for="icon_prefix2">Symptoms</label>
												</div>
											  </div>
											  
											  <div class="row">
												<div class="input-field col s6">
												  <i class="material-icons prefix">mode_edit</i>
												  <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
												  <label for="icon_prefix2">Comments</label>
												</div>
											  </div>
														-->							  
											  
                                                <div class="form-group">
                                                    <button type="submit" name="rev_user" class="btn btn-primary btn-block">Submit</button>
                                                </div>
                                            </form>
            </div>
            
          </div>
		  </div>
		  <div class="row">
      <div class="col s12">
        <div class="card-panel  red lighten-5">
          <span class="black-text">
		  
		   <h5>Reviews</h5>
		  
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
					
					
					$sql = "Select * from review where did = $did ORDER BY rid DESC;";
					$result = $conn->query($sql);

					

					if ($result->num_rows > 0) {
						// output data of each row
						while($userRow = $result->fetch_assoc()) {
							echo "<div class='row'>";
							echo "<div class='col s12 m12'>";
							echo "<div class='card'>";
							

							echo "<table class='table table-user-information' align='center'>";
											echo "<tbody>";
												
												
												
												echo "<tr>";
													echo "<td>Review</td>";
													echo "<td>" .$userRow['review']."</td>";
												echo "</tr>";
												echo "<tr>";
													echo "<td>On</td>";
													echo "<td>". $userRow['time']."</td>";
												echo "</tr>";
												
											echo "</tbody>";
										echo "</table>";
							echo "</div>";
							echo "</div>";
							echo "</div>";
							//echo "<div class='progress'>";
								//  echo "<div class='indeterminate'></div>";
							//echo "</div>";
						}
					} else {
						echo "No Review Yet";
					}
					$conn->close();
			?> 
		  
          </span>
        </div>
      </div>
    </div>
		  
		  
		  
		 
		  
		  
		  
  </div>
  
 
	  
  
  

  
  <!--About Begin-->
  <div id="test3" class="col s12">
       
		  <div class="row">
      <div class="col s12">
        <div class="card-panel  red lighten-5">
          <span class="black-text">
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
					
					
					$res=mysqli_query($conn,"SELECT * FROM about_info where dtid IN(SELECT max(dtid) from about_info where did = $did)");

					$userRow = mysqli_fetch_array($res,MYSQLI_ASSOC);
					$dental = $userRow['dental_facility']; 
					$lab = $userRow['lab_service'];
					$pharmacy = $userRow['pharmacy'];
					
					$conn->close();
			?> 
		   <center><span class=" grey-text text-darken-2"><h5>List of facilities available</h5></span></center>
				   <div class="card">
			 <div class="row">
			 <h5></h5>
					
			 	<span ><h5>  <br>Dental facility</h5></span>
				<div class="col s3">
					<!-- Grey navigation panel -->
						<img class="materialboxed" data-caption="A picture of a way with a group of trees in a park" width="250" src="img/dental.jpeg">
<h5></h5>
				  </div>
				  <div class="col s9">
						<p><?php echo $dental ?></p>
				  </div>
			  </div>
  			</div>	
			
			
			
			
			<div class="card">
			 <div class="row">
			 <h5></h5>

			 	<span ><h5>  <br>Laboratory services:</h5></span>
				<div class="col s3">
					<!-- Grey navigation panel -->
						<img class="materialboxed" data-caption="A picture of a way with a group of trees in a park" width="250" src="img/lab.png">
<h5></h5>
				  </div>
				  <div class="col s9">
						<p><?php echo $lab ?></p>
				  </div>
			  </div>
  			</div>
			
			
			<div class="card">
			 <div class="row">
			 <h5></h5>

			 	<span ><h5>  <br>Pharmacy:</h5></span>
				<div class="col s3">
					<!-- Grey navigation panel -->
						<img class="materialboxed" data-caption="A picture of a way with a group of trees in a park" width="250" src="img/phrmacy.jpg">
<h5></h5>
				  </div>
				  <div class="col s9">
						<p><?php echo $pharmacy ?></p>
				  </div>
			  </div>
  			</div>

		  
          </span>
        </div>
      </div>
    </div>
		  
		  
		  
		 
		  
		  
		  
  </div>
  
 
 
	  
	  

	<!--About stop-->
	  
	  
	  
	  
	  
	  
	  
	  
	  
		  
		  
		  
		  
		

    </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
<!--script for date and time picker -->
<script>
    $('.datepicker').pickadate({
        selectMonths: true,
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        today: 'Today',
        clear: 'Clear',
        close: 'Ok',
        closeOnSelect: false // Close upon selecting a date,
    });

    $('.timepicker').pickatime({
        default: 'now', // Set default time: 'now', '1:30AM', '16:30'
        fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
        twelvehour: false, // Use AM/PM or 24-hour format
        donetext: 'OK', // text for done-button
        cleartext: 'Clear', // text for clear-button
        canceltext: 'Cancel', // Text for cancel-button
        autoclose: false, // automatic close timepicker
        ampmclickable: true, // make AM PM clickable
        aftershow: function(){} //Function for after opening timepicker
    });

</script>
	 


<!--script for image frame -->
<script>
 $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
</script>

	  
	  


   

							
            
  

</body>
</html>
             
		