<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   echo 'Cleaning the session data';
   header('Refresh: 2; URL = admin_login.php');
?>