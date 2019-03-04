<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "accounts");
if($_POST){
	
	$Username = $_POST['firstname'];
	$Username2 = $_POST['lastname'];
	$Email = $_POST['email'];
	$Password = $_POST['pwd'];

	$sql = "INSERT INTO users(username, usernameL, email, password) VALUES('$Username','$Username2','$Email','$Password')";
	mysqli_query($db, $sql);
	$_SESSION['message'] = "you are in";
	$_SESSION['username'] = $firstname;
	header("location: index.html");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <meta charset="utf-8">
        <title>Online Food Ordering System</title>
    </head>
    <body>
    	<header>
    		<div id="hgroup">
    			<div class="logo"><img src="images/logo.png" alt="my logo" align="left" align="top" style="width: 100px; height: 80px;"></div>
     			<h1>Welcome to Online Food Ordering</h1>
    		</div>
  		</header>

  		<section>
  			<fieldset>
  			<h2>Register Form</h2>
  			<form method="post" action="signupForm.php" style="border: 0px solid #ccc">
  				<label><b>First Name</b></label>
  				<input type="fname" placeholder="Enter your First Name" size="20" name="firstname" required />

  				<label><b>Last Name</b></label>
  				<input type="text" placeholder="Enter your Last Name" size="20" name="lastname" required />

  				<label><b>Email</b></label>
  				<input type="text" placeholder="Enter your Email" size="20" name="email" required />

  				<label><b>Password</b></label>
  				<input type="password" placeholder="Enter your Password" size="20" name="pwd" required />
  				<input type="checkbox" checked="checked" /> Remember me
  				<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

  				<div class="clearfix">

               	<button type="submit" class="submitButton">Sign Up</button>
               	<button type="button" class="cancelButton"><a href="index.html" style="background:none; color:white">Cancel</a></button>
           		</div>


  			</form>
  		</fieldset>
  	</section>






		<footer>
            <p2>copyright &copy; 2019 by the Company<br/></p2>
            <nav>
                <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                <a href="https://www.instagram.com" class="fa fa-instagram"></a>
            </nav>
    	</footer>
    </body>


</html>
