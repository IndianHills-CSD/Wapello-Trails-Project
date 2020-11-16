<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/Style.php">
        <title>Signup Page</title>
    </head>

    <body>

		<?php include 'nav.php';?>

		<div class="info"><p>
			<b>Info: </b><i>Sign up to be friends with the Wapello County Trails Council for upcoming events and emails.</i></p>
		</div>
		<div class="signup-forms">
		  <img src="images/user-logo.png">
		  <h1>Sign up Here</h1>
		  <form action="dbinfo.php" method="POST">
			<div class="input-box">
			  <input  class="firstName" type="text" placeholder="First Name" name="fName" required>
			  <input  class="lastName" type="text" placeholder="Last Name" name="lName" required>
			  <input  class="input" type="text" placeholder="Phone Number" name="phone" required>
			  <input  class="input" type="text" placeholder="Enter Email" name="email" required>
			  <input  class="input" type="password" placeholder="Enter Password" name="password" required>
			  <input  class="input" type="text" placeholder="Enter Street Address" name="street" required>
			  <input  class="city" type="text" placeholder="Enter City" name="city" required>
			  <input  class="state" type="text" placeholder="State" name="state" required>
			  <input  class="zip-code" type="text" placeholder="Zip-Code" name="zip" required>
			</div>
			<hr>
			<p><input type="checkbox" checked="checked" name="remember">Agree to our Terms & Privacy</p>
			<button type="submit" class="signupbtn" style="background:#1c8adb">Sign Up</button>
		  </form>
		</div>

        <?php include 'footer.php';?>
    </body>
</html>
