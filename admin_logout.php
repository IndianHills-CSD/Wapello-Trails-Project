<?php include('nav.php'); ?>
<!DOCTYPE html>
<html lang="en">



<head>
   <meta charset="UTF-8">
	<title>Admin Logout</title>
	<link rel="stylesheet" href="css/Style.php">
</head>

<body>
   <div class="logout_msg">
   <?php
      session_start();
      unset($_SESSION["username"]);
      unset($_SESSION["password"]);
      
      echo 'Logging Out';
      header('Refresh: 2; URL = admin_login.php');
   ?>
   </div>
</body>

<?php include 'footer.php';?>

</html>