
    <!-- 
        Login page that allows admin access to email, etc
    -->

    <!DOCTYPE html>

    <?php 
        ob_start();
        session_start();
    ?>

    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="css/Style.php">
            <title>Admin Login</title>
        </head>

        <body>
        <?php include 'nav.php';?>
            <div class="form-container">
            
            <?php
                $msg = '';

                if (isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])) {
                    if ($_POST['username'] == 'wapelloct' && $_POST['password'] == '123') {
                            $_SESSION['valid'] = true;
                            $_SESSION['timeout'] = time();
                            $_SESSION['username'] = 'wapelloct';
                            $msg = '';
                            // TODO Insert redirect code if valid user and pw
                    } else {
                        $msg = 'Incorrect username or password';
                    }
                }
            ?>

                <img class="login-icon" src="images/user-logo.png">
                <h1>Admin Log In</h1>
                <form name="sign-in" id="sign-in" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                <label for="username">Username:</label>
                <input type="text" name="username" class="input-box" pattern="[a-zA-Z0-9]+" required>
                <label for="password">Password:</label>
                <input type="password" name="password" class="input-box" id="input-box" required>
                <input type="checkbox" name="toggle" onclick="toggle_vis()" class=" password-toggle">
                <label for="toggle">Show Password</label>
                <p id="val-label" class="val-label" style="color:red"><strong><?php echo $msg; ?></strong></p>
                <input type="submit" name="submit" value="Submit" class="sign-in-btn">
                <input type="button" onclick="reset()" value="Reset" class="reset-btn">

                    <script>
                        // Javascript to toggle password visibilty 
                        function toggle_vis() {
                            var x = document.getElementById("input-box");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }

                       // Reset form  
                       function reset() {
                           document.getElementById("sign-in").reset();
                       } 
                    </script>
                </form>
                <!--
                       Link button to clear username and pw from session data when clicked. This will be handled by logout button following its implementation.
                -->
                Click <a href = "admin_logout.php" tite = "Logout" style="color: blue">HERE </a>to clean session data. This will be handled by a Logout button later.
            </div>
            <?php include 'footer.php';?>
        </body>
    </html>