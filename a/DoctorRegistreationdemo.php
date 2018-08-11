<?php include('server.php') ?>

 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
	  
	  
	  <center>
	  <div class="row">
        <div class="card" padding = 10%>
				<div class="row">
					<form class="col s12">
					  <div class="row">
						<div class="input-field col s6">
						  <i class="material-icons prefix">account_circle</i>
						  <input id="icon_prefix" type="text" class="validate">
						  <label for="icon_prefix">First Name</label>
						</div>
						<div class="input-field col s6">
						  <i class="material-icons prefix">account_circle</i>
						  <input id="icon_prefix" type="text" class="validate">
						  <label for="icon_prefix">Last Name</label>
						</div>
					  </div>
					  <div class="row">
						<div class="input-field col s6">
						  <i class="material-icons prefix">place</i>
						  <input id="icon_prefix" type="text" class="validate">
						  <label for="icon_prefix">Locality</label>
						</div>
						<div class="input-field col s6">
						  <i class="material-icons prefix">email</i>
						  <input id="icon_telephone" type="tel" class="validate">
						  <label for="icon_telephone">Email</label>
						</div>
					  </div>
					  <div class="row">
						<div class="input-field col s6">
						  <i class="material-icons prefix">phone</i>
						  <input id="icon_prefix" type="text" class="validate">
						  <label for="icon_prefix">Phone</label>
						</div>
						<div class="input-field col s6">
						  <i class="material-icons prefix">education</i>
						  <input id="icon_telephone" type="tel" class="validate">
						  <label for="icon_telephone">Education</label>
						</div>
					  </div>
					  
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
											
					  
					</form>
				  
				</div>
      </div>
    </div>
	  </center>
	  
	  
    </body>
  </html>