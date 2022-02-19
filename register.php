<!DOCTYPE html>
<html>
<head>
	 <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href=" main.css">
      <!--Let browser know website is optimized for mobile-->
    <!--  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="//code.jquery.com/jquery-latest.min.js"></script>
  <script src="jquery.slides.min.js"></script>


	<title>Registeration</title>
</head>
<body>

<!--Nav bar-->
  <div class="navbar-fixed">
    <nav class="nav-wrapper white">
      <div class="container">
        <a href="#" class=" black-text brand-logo">
          <font-family='babe'>Tour </font-family><span class="red-text">Ug</span>an<span class="yellow-text">da</span>
        </a>
        <ul class="right">
          <li><a href="index.html">
              <div class="black-text">Home Page</div>
            </a></li>
          <li><a href="about.html">
              <div class="black-text">Who we are</div>
            </a></li>
          <li><a href="offers.html">
              <div class="black-text">What we offer</div>
            </a></li>
          <li><a href="register.php">
              <div class="black-text"> Register with us</div>
            </a>
          <li><a href="book.html">
              <div class="black-text"> Book Tour</div>
            </a>
          <li><a href=".html">
              <div class="black-text">Contact Us</div>
            </a>
          </li>
      </div>
      </ul>
  </div>
  </nav>
  </div>
<br>
<br>
<br>
<img src="images/fe.jpg">

<h3><center>Register Now to Get the Best Offers</center></h3>
<div class="container">
<hr>
</div>
<div class="row">
	<div class="container">

<div class="form-group">
<label class="col-sm-2 control-label"> Registration No : </label>
<div class="col-sm-8">
<input type="text" name="regno" id="regno"  class="form-control" required="required" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">First Name : </label>
<div class="col-sm-8">
<input type="text" name="fname" id="fname"  class="form-control" required="required" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Middle Name : </label>
<div class="col-sm-8">
<input type="text" name="mname" id="mname"  class="form-control">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Last Name : </label>
<div class="col-sm-8">
<input type="text" name="lname" id="lname"  class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Gender : </label>
<div class="col-sm-8">
<select name="gender" class="form-control" required="required">
<option value="">Select Gender</option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="others">Others</option>
</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Contact No : </label>
<div class="col-sm-8">
<input type="text" name="contact" id="contact"  class="form-control" required="required">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Email id: </label>
<div class="col-sm-8">
<input type="email" name="email" id="email"  class="form-control" onBlur="checkAvailability()" required="required">
<span id="user-availability-status" style="font-size:12px;"></span>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Password: </label>
<div class="col-sm-8">
<input type="password" name="password" id="password"  class="form-control" required="required">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Confirm Password : </label>
<div class="col-sm-8">
<input type="password" name="cpassword" id="cpassword"  class="form-control" required="required">
</div>
</div>
						



<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit">Cancel</button>
<input type="submit" name="submit" Value="Register" class="btn btn-primary">
</div>
</form>

									</div>
									</div>
								</div>
							</div>
						</div>
							</div>
						</div>
					</div>
				</div> 	
			</div>

<!--social media-->
  <footer class="section section-follow text center">
    <div class="container">
      <h2>Follow us on social media for special offers</h2>
      <ul class="social">
        <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
        <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
        <li><a href=""><i class="fa-brands fa-pinterest"></i></a></li>
      </ul>
    </div>
    <div class="container">
      <p class="center">
        All Rights Reserved | Carol &copy; 2022
      </p>
    </div>
  </footer>
</body>
</html>
