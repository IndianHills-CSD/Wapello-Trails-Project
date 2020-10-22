<!Doctype html>
<html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
   <title> Email Page </title>
   <link  rel="stylesheet" type="text/css" href="css/Style.php">
</head>

<body>
  <?php include 'nav.php';?>
<main style="color: #000; height: 100px; font-size: 25px; text-align: center; margin-top: 95px;">

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
    $dbUser="root";
    $dbpassword="";
    $dbname = "wp_contacts";

    $conn = new mysqli($host, $dbUser, $dbpassword, $dbname);
    if($conn->connect_error){
      die('Connection Failed '.$conn->connect_error);
    }else{
      $stmt = $conn->prepare("insert into contacts(phone, firstname, lastname, street_address, city, state, zip_code, email)
          values(?,?,?,?,?,?,?,?)");
      $stmt->bind_param("ssssssss",$phone, $fname, $lname, $street, $city, $state, $zip, $email);
      $stmt->execute();
      echo 'Registration Successul...! </br> click here - <a href="upload.php" style="color: #fff;">Upload your favorite image from your visit.</a> or expore other pages';
      $stmt->close();
      $conn->close();
    }
?>

</main>

<?php include 'footer.php';?>
</body>
</html>
