

<?php 

  session_start();
  $errors = [];
  $user_id = "";

  // create connection string
  $db = mysqli_connect('localhost', 'root', '', 'password_recovery');

    // LOG USER IN
    if (isset($_POST['login_user'])) {
      // Get username and password from login form
      $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
      $pw = mysqli_real_escape_string($db, $_POST['pw']);
     
      // validate form
      if (empty($user_id)) array_push($errors, "Username or Email is required");
      if (empty($pw)) array_push($errors, "Password is required");

      // if no error in form, log user in
      if (count($errors) == 0) {
        $pw = md5($pw);
        echo $user_id;
        echo $pw;
        $sql = "SELECT * FROM users WHERE (username = '$user_id' OR email = '$user_id') AND pw = '$pw'";
        $results = mysqli_query($db, $sql);

        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $user_id;
          $_SESSION['success'] = "You are now logged in";
          header('Location: admin_dash.php');
        }else {
          array_push($errors, "Invalid username or password");
        }
      }
    } 
    
    /*
      Accept email of user whose password is to be reset
      Send email to user to reset their password
    */
    if (isset($_POST['reset-password'])) {
      $email = mysqli_real_escape_string($db, $_POST['email']);
      // ensure that the user exists on our system
      $query = "SELECT email FROM users WHERE email='$email'";
      $results = mysqli_query($db, $query);

      // Form validation
      if (empty($email)) {
        array_push($errors, "Your email is required");
      }else if(mysqli_num_rows($results) <= 0) {
        array_push($errors, "Sorry, no user exists on our system with that email");
      }
      // generate a unique random token of length 100
      $token = bin2hex(random_bytes(50));

      if (count($errors) == 0) {
        // store token in the password-reset database table against the user's email
        $sql = "INSERT INTO password_resets(email, token) VALUES ('$email', '$token')";
        $results = mysqli_query($db, $sql);

        // Send email to user with the token in a link they can click on
        $to = $email;
        $subject = "Reset your password on wapellocountytrails.com";
        $msg = "Hi there, click on this <a href=\"new_pass.php?token=" . $token . "\">link</a> to reset your password on our site";
        $msg = wordwrap($msg,70);
        $headers = "From: info@examplesite.com";
        mail($to, $subject, $msg, $headers);
        header('location: pending.php?email=' . $email);
      }
    }

    // ENTER A NEW PASSWORD
    if (isset($_POST['new_password'])) {
      $new_pass = mysqli_real_escape_string($db, $_POST['new_pass']);
      $new_pass_c = mysqli_real_escape_string($db, $_POST['new_pass_c']);

      // Grab token that came from the email link
      $token = $_SESSION['token'];
      if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
      if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
      if (count($errors) == 0) {
        // select email address of user from the password_reset table 
        $sql = "SELECT email FROM password_resets WHERE token='$token' LIMIT 1";
        $results = mysqli_query($db, $sql);
        $email = mysqli_fetch_assoc($results)['email'];

        if ($email) {
          $new_pass = md5($new_pass);
          $sql = "UPDATE users SET pw='$new_pass' WHERE email='$email'";
          $results = mysqli_query($db, $sql);
          header('location: admin_dash.php');
        }
      }
    }
?>