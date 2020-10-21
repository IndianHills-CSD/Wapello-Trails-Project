<?php include('app_logic.php'); ?>
<?php include('nav.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
	<link rel="stylesheet" href="css/Style.php">
</head>
<body>
		<div class="form-container">	
			<img class="login-icon" src="images/user-logo.png">
			<h1>Admin Login</h1>
			<form class="login-form" action="admin_login.php" method="POST">
			
				<!-- form validation messages -->
				<?php include('messages.php'); ?>

				<!-- username & password label and txb -->
				<div class="form-group">
					<label for="user_id">Username or Email</label>
					<input type="text" class="input_box" value="<?php echo $user_id; ?>" name="user_id" required />
				</div>
				<div class="form-group">
					<label for="pw">Password</label>
					<input type="password" class="input_box" id="pw_Vis" name="pw" required />
				</div>

				<div class="form-group">
					<!-- checkbox, buttons & reset password links  -->
					<input type="checkbox" name="toggle" onclick="toggle_vis()" class=" password-toggle">
					<label for="toggle">Show Password</label>
						<button type="submit" name="login_user" class="login_btn">Login</button>
						<input type="button" onclick="reset()" value="Reset" class="reset-btn">
				</div>
				<p><a href="enter_email.php" style="color:blue">Reset admin password</a></p>
			</form>
		</div>
		<script type="text/javascript" src="js/logScripts.js"></script>
</body>
<?php include 'footer.php';?>
</html>