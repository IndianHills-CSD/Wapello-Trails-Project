<?php include('app_logic.php'); ?>
<?php include('nav.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset</title>
	<link rel="stylesheet" href="css/Style.php">
</head>
<body>
	<div class="form-container">
		<img class="login-icon" src="images/user-logo.png">
		<h2>Enter a New Password</h2>
		<form class="login-form" action="new_password.php" method="post">

			<!-- form validation messages -->
			<?php include('messages.php'); ?>

			<!-- New password and Confirm password label and txb -->
			<div class="form-group">
				<label for="new_pass">New password</label>
				<input type="password" class="input_box" name="new_pass">
			</div>
			<div class="form-group">
				<label for="new_pass_c">Confirm password</label>
				<input type="password" class="input_box" name="new_pass_c">
			</div>

			<!-- Submit btn -->
			<div class="form-group">
				<button type="submit" class="login_btn" name="new_password">Submit</button>
			</div>
		</form>
	</div>
<?php include('footer.php'); ?>
</body>
</html>