 <?php
session_start();
	$db = mysqli_connect('localhost', 'root', '', 'prodbms');

$did = $_GET['did']; 
$uid = $_GET['uid'];
$aid = $_GET['aid'];

$res=mysqli_query($db,"Select * from user u ,appinment a where u.uid = a.uid and u.uid = $uid and aid=".$_GET['aid']);
//$res=mysqli_query($db,"SELECT * FROM user WHERE uid =" .$_GET['uid']);

$userRow = mysqli_fetch_array($res,MYSQLI_ASSOC);
$did = $_GET['did']; 
$uid = $_GET['uid'];

?>
 
 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="icons.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  
	  
	  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center"><?php echo $_GET['sname']; ?></a>
     
  </nav>
	  
	  
	  
	  
	  
	   <div class="container">
        <!-- Page Content goes here -->
		<div class="card">
		
	  <table class="table align="center">
	   <div class="container">
												<tr>
													<td>First Name :</td>
													<td><?php echo $userRow['first_name']; ?></td>
												</tr>
												<tr>
													<td>Last Name :</td>
													<td><?php echo $userRow['last_name']; ?></td>
												</tr>											
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
												<tr>
													<td>Appointment Date :</td>
													<td><?php echo $userRow['apt_date']; ?></td>
												</tr>
												<tr>
													<td>Symptoms :</td>
													<td><?php echo $userRow['symptoms']; ?></td>
												</tr>
												<tr>
													<td>Additinal comments :</td>
													<td><?php echo $userRow['comments']; ?></td>
												</tr>
												<tr>
													<td>Appointment Taken On :</td>
													<td><?php echo $userRow['apt_taken_time']; ?></td>
												</tr>
												</div>
									</table>
		
		
		</div>
		
		
      </div>
	  
	  
    </body>
  </html>