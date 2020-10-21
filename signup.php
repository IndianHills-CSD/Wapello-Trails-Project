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
        <div class="input-box">
          <input  class="firstName" type="text" placeholder="Enter First Name" name="fName" required>
          <input  class="lastName" type="text" placeholder="Enter Last Name" name="lName" required>
          <input  class="input" type="text" placeholder="Phone Number" name="phone" required>
          <input  class="input" type="text" placeholder="Enter Email" name="email" required>
          <input  class="input" type="password" placeholder="Enter Password" name="password" required>
          <input  class="input" type="text" placeholder="Enter Street Address" name="street" required>
          <input  class="city" type="text" placeholder="Enter City" name="city" required>
          <input  class="state" type="text" placeholder="Enter State" name="state" required>
          <input  class="zip-code" type="text" placeholder="Enter Zip-Code" name="zip" required>
        </div>
        <hr>
        <p><input type="checkbox" checked="checked" name="remember"> Agree to our Terms & Privacy</p>
        <button type="submit" class="signupbtn" style="background:#1c8adb">Sign Up</button>
      </form>
    </main>
    <?php include 'footer.php';?>
  </body>
</html>
