<?php
  $phone = $_POST['phone'];
  $fname = $_POST['fName'];
  $lname = $_POST['lName'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $street = $_POST['street'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];


  //database connection
  /* Trails-Database Credentials
    username: trailsAdmin
    password: trailsAdmin*/
    
    $host="localhost";
    $dbUser="trailsAdmin";
    $dbpassword="trailsAdmin";
    $dbname = "wp_contacts";

    $conn = new mysqli($host, $dbUser, $dbpassword, $dbname);
    if($conn->connect_error){
      die('Connection Failed '.$conn->connect_error);
    }else{
      $stmt = $conn->prepare("insert into contacts(phone, firstname, lastname, street_address, city, state, zip_code, email)
          values(?,?,?,?,?,?,?,?)");
      $stmt->bind_param("ssssssss",$phone, $fname, $lname, $street, $city, $state, $zip, $email);
      $stmt->execute();
      echo "Registration Successul...! <a href='index.php'>Home page</a>";
      $stmt->close();
      $conn->close();
    }
?>
