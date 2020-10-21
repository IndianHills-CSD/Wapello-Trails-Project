<?php include('app_logic.php'); ?>
<?php include('nav.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Send Password Reset Link</title>
	<link rel="stylesheet" href="css/Style.php">
</head>
<body>

	<div class="form-container">
		<img class="login-icon" src="images/user-logo.png">
		<h1>Password Reset</h1>
		<form class="login-form" action="enter_email.php" method="POST">

			<!-- form validation messages -->
			<?php include('messages.php'); ?>

			<div class="form-group">
				<label for="email">Enter Email Address</label>
				<input type="email" class="input_box" name="email" required>
			</div>

			<div class="form-group">
				<button type="submit" name="reset-password" class="login_btn">Submit</button>
			</div>
			
		</form>
	</div>

	<?php include('footer.php'); ?>
</body>
</html>