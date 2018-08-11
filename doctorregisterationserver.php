<?php 
	session_start();

	// variable declaration
	$first_name = "";
	$last_name = "";
	$email = "";
	$phone_number = "";
	$month = "";
	$day = "";
	$year = "";
	$Gender = "";
	$blood_group = "";
	$address ="";
	$description = "";
	$locality = "";
	$sname = "";
	$blood_group = "";
	$education = "";
	
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'prodbms');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$first_name = mysqli_real_escape_string($db,$_POST['patientFirstName']);
		$last_name  = mysqli_real_escape_string($db,$_POST['patientLastName']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);		
		$Gender = mysqli_real_escape_string($db,$_POST['patientGender']);
		$address = mysqli_real_escape_string($db,$_POST['address']);
		$description = mysqli_real_escape_string($db,$_POST['description']);
		$locality = mysqli_real_escape_string($db,$_POST['locality']);
		$sname = mysqli_real_escape_string($db,$_POST['sname']);
		$education = mysqli_real_escape_string($db,$_POST['education']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($phone_number)) { array_push($errors, "Username is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO doctor (first_name,last_name,email,phone,gender,address,password,locality,shop_name,description,education) 
					  VALUES('$first_name', '$last_name', '$email' , '$phone_number','$Gender','$address','$password','$locality','$sname','$description','$education')";
			$results = mysqli_query($db, $query);

			if ($results == 1) {
				$_SESSION['phone'] = $phone_number;
				$_SESSION['success'] = "You are now logged in";
				$_SESSION['patientSession'] = $phone_number;
				header('location: DoctorProfile.php');
			}else {
				array_push($errors, "Invalid Inputs");
			}
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);		
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($phone_number)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM doctor WHERE phone='$phone_number' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['phone'] = $phone_number;
				$_SESSION['success'] = "You are now logged in";
				$_SESSION['patientSession'] = $phone_number;
				header('location: DoctorProfile.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
	


?>