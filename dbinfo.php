<?php
  $phone = $_POST['phone'];
  $fname = $_POST['fName'];
  $lname = $_POST['lName'];
  $email = $_POST['email'];
  $password = $_POST['password'];


  //database connection
    $host="localhost";
    $dbUser="root";
    $dbpassword="";
    $dbname = "wp_contacts";

    $conn = new mysqli($host, $dbUser, $dbpassword, $dbname);
    if($conn->connect_error){
      die('Connection Failed '.$conn->connect_error);
    }else{
      $stmt = $conn->prepare("insert into contacts(phone, firstname, lastname, email)
          values(?,?,?,?)");
      $stmt->bind_param("ssss",$phone, $fname, $lname, $email);
      $stmt->execute();
      echo "Registration Successul...";
      $stmt->close();
      $conn->close();
    }
?>
