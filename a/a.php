
<!DOCTYPE html>
<html>
	<head>
		<title>BCIS</title>
		
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="materialize.min.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--script for UI -->
        <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
        <script src="materialize.min.js"></script>

    </head>
<body>


    <!--Navigation bar -->
      <nav class="nav-extended light-blue accent-4">

        <div class="nav-wrapper">
            <a href="#" class="brand-logo center">Birth Certificate Issuance System</a>
        </div>

        <div class="nav-content">
            <!-- tabs -->
            <ul class="tabs tabs-transparent">
                <li class="tab">
                        <a class="active" href="#addAdmin">Add Admin</a>
                </li>
                <li class="tab">
                    <a href="#adminLogin">Admin Login</a>
                </li>
                <li class="tab">
                    <a href="#hospitalDataEntry">Hospital Login</a>
                </li>
                <li class="tab">
                    <a href="#requestCertificate">Birth Certificate Request Page</a>
                </li>
            </ul>
        </div>
      </nav>

    <!-- First Tab -->
    <div id="addAdmin" class="col s12">
        <div class=" container right">
            <div class="row">
                <form action="/index.php" method="POST" autocomplete="off" class="col s12">

                    <div class="row">
                        <div class="input-field col s7">
                            <input id="username" type="text" name="addAdminUsername" class="validate" required>
                            <label for="username">Admin Username</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s7">
                            <input id="password" type="password" name="addAdminPassword" class="validate" required>
                            <label for="password">Password</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s7">
                            <input id="confirmPassword" type="password" name="addAdminConfirmPassword" class="validate" required>
                            <label for="confirmPassword">Confirm Password</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s7">
                            <input id="email" type="email" name="addAdminEmail" class="validate" required>
                            <label for="email">Email</label>
                        </div>
                    </div>

                    <!-- script for material design select -->
                    <script>
                        $(document).ready(function() {
                            $('select').material_select();
                        });
                    </script>

                    <div class="row">
                      <div class="input-field col s7">
                                   <select name="addAdminCity">
                                   <option value = "default" selected>Select City</option><option value="1">Bangalore</option><option value="2">Bellary</option><option value="3">Bidar</option><option value="4">Bijapur</option><option value="5">Chikmagalur</option><option value="6">Chitiradurga</option><option value="7">Davangere</option><option value="8">Gulbarga</option><option value="9">Hassan</option><option value="10">Hospet</option><option value="11">Hubli</option><option value="12">Karwar</option><option value="13">Madikeri</option><option value="14">Mangalore</option><option value="15">Manipal</option><option value="16">Mysore</option><option value="17">Raichur</option><option value="18">Shimoga</option><option value="19">Sringeri</option><option value="20">Srirangapatna</option><option value="21">Tumkur</option><option value="22">Udupi</option></select>
                                        <label>City</label>
                                      </div>                    </div>

                    <button class="waves-effect waves-light btn light-blue accent-4 white-text" type="submit" name="addAdminSubmit">Create Admin Account</button>

                </form>
            </div>
        </div>
    </div>

    <!-- Second Tab -->
    <div id="adminLogin" class="col s12">
        <div class=" container right">
            <div class="row">
                <form action="/index.php" method="POST" autocomplete="off" class="col s12">

                    <div class="row">
                        <div class="input-field col s7">
                            <input id="username" type="text" name="adminLoginUsername" class="validate" required>
                            <label for="username">Admin Username</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s7">
                            <input id="password" type="password" name="adminLoginPassword" class="validate" required>
                            <label for="password">Password</label>
                        </div>
                    </div>

                    <button class="waves-effect waves-light btn light-blue accent-4 white-text" type="submit" name="adminLoginSubmit">Login</button>

                </form>
            </div>
        </div>
    </div>

    <!-- Third Tab -->
    <div id="hospitalDataEntry" class="col s12">
        <div class="container right">
            <div class="row">
                <form action="/index.php" method="POST" autocomplete="off" class="col s12">

                    <div class="row">
                        <div class="input-field col s7">
                            <input id="hospitalUserName" name="hospitalUserName" type="text" class="validate" required>
                            <label for="hospitalUserName">Hospital Username</label>
                        </div>

                    </div>

                    <div class="row">
                        <div class="input-field col s7">
                            <input id="hospitalPassword" name="hospitalPassword" type="password" class="validate" required>
                            <label for="hospitalPassword">Password</label>
                        </div>
                    </div>

                    <button class="waves-effect waves-light btn light-blue accent-4 white-text" type="submit" name="hospitalLoginSubmit">Login</button>

                </form>
            </div>
        </div>
    </div>

    <!-- Fourth Tab -->
    <div id="requestCertificate" class="col s12">
        <div class="container right">
            <div class="row">
                <form action="/index.php" method="POST" autocomplete="off" class="col s12">

                    <div class="row">
                        <div class="input-field col s7">
                            <input id="childID" name="childID" type="text" class="validate" required>
                            <label for="childID">Child ID</label>
                        </div>
                    </div>

                    <div class="row">
                      <div class="input-field col s7">
                               <select name="hospitalID">
                               <option value = "default" selected>Select Hospital</option><option value="kmc">KMC</option><option value="melkarhospital">MELKARHOSPITAL</option></select>
                                    <label>Hospital ID</label>
                                  </div>                    </div>


                    <div class="row">
                        <h6>&nbsp;&nbsp;Gender</h6>
                        <p>
                            &nbsp;&nbsp;<input name="gender" type="radio" id="male" value="Male" required/>
                            <label for="male">Male</label>

                            <input name="gender" type="radio" id="female" value="Female" required/>
                            <label for="female">Female</label>

                            <input name="gender" type="radio" id="other" value="Other" required/>
                            <label for="other">Other</label>
                        </p>
                    </div>

                    <div class="row">
                        <div class="input-field col s7">
                            <label>Date</label>
                            <input type="text" class="datepicker" name="date" placeholder="Date Of Birth" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s7">
                            <label>Time</label>
                            <input type="text" class="timepicker" name="time" placeholder="Time" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s7">
                            <input id="childName" name="childName" type="text" class="validate" required>
                            <label for="childName">Child Name</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s7">
                            <textarea id="address" name="address" class="materialize-textarea"></textarea>
                            <label for="address">Permanent address of parents</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s7">
                            <input id="fathersAadharNumber" name="fathersAadharNumber" type="text" maxlength="12" class="validate" required>
                            <label for="fathersAadharNumber">Father's Aadhar Number</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s7">
                            <input id="mothersAadharNumber" name="mothersAadharNumber" type="text" maxlength="12" class="validate" required>
                            <label for="mothersAadharNumber">Mother's Aadhar Number</label>
                        </div>
                    </div>

                    <button class="waves-effect waves-light btn light-blue accent-4 white-text" type="submit" name="birthCertificateRequest">Request Birth Certificate</button>

                </form>
            </div>
        </div>
    </div>



<!-- if logged in, then redirect to respective pages -->
<script type="text/javascript">
    function readCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1,c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }
        return null;
    }
    $('a[href="#adminLogin"]').click(function(){

        var cookie_value = readCookie('admin_login_status');
        if(cookie_value === 'logged_in'){
            window.location="addHospitals.php";
        }
    });
    $('a[href="#hospitalDataEntry"]').click(function(){

        var cookie_value = readCookie('hospital_login_status');
        if(cookie_value === 'logged_in'){
            window.location="hospitalDataEntry.php";
        }
    });
</script>

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

<!-- script to open modal -->
<script>
    $(document).ready(function(){
        $('.modal').modal();
        $('#modal1').modal('open');

    });
</script>

</body>
</html>
