

<?php
	include('isLoggedIn.php');
	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: admin_login.php');
	}
?>

<?php include('nav.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset PHP</title>
	<link rel="stylesheet" href="css/Style.php">
</head>
<body>

	<?php include('app_logic.php'); ?>
	<form class="login-form" action="login.php" method="post" style="text-align: center;">
		<p class="email_confirm_msg">
			We sent an email to  <b><?php echo $_GET['email'] ?></b> to help you recover your account. 
		</p>
	    <p class="btm_line">Please login into your email account and click on the link we sent to reset your password</p>
	</form>
		
<?php include('footer.php'); ?>
</body>
</html>