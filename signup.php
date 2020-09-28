<!Doctype html>
<html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
   <title> Signup Page </title>
   <link  rel="stylesheet" type="text/css" href="css/Style.php">
 </head>
  <body>
    <?php include 'nav.php';?>

    <main class="signup-forms">
      <img src="images/user-logo.png">
      <h1>Sign up Here</h1>
      <form action="dbinfo.php" method="POST">
        <input class="input-box" type="text" placeholder="Enter First Name"
            name="fName" required>
        <input class="input-box" type="text" placeholder="Enter Last Name"
            name="lName" required>
         <input class="input-box" type="text" placeholder="Phone Number"
            name="phone" required>
         <input class="input-box" type="text" placeholder="Enter Email" name="email" required>
         <input class="input-box" type="password" placeholder="Enter Password" name="password" required>
         <input class="input-box" type="password" placeholder="Repeat Password" name="password-repeat" required>
         <p><input type="checkbox" checked="checked" name="remember"> Agree to our Terms & Privacy</p>
         <button type="submit" class="signupbtn" style="background:#1c8adb">Sign Up</button>
         <hr>
         <p class="or">OR</p>
        <button type="button" class="facebookbtn" style="background:#21afde">Login with facebook</button>
        <p>Already a Member? <a href="signIn.html" style="color:dodgerblue">Sign In</a>.</p>
      </form>
    </main>
    <?php include 'footer.php';?>
  </body>
</html>
