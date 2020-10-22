<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
  <title> Upload File - page </title>
  <link  rel="stylesheet" type="text/css" href="css/Style.php">

  <style>

  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  .upload-forms{
    width: 65%;
    height: auto;
    padding: 20px;
    margin: 2% auto 8%;
    text-align: center;
  }


 input, textarea{
    width: 50%;
    color: #2F4F4F;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin: 6px auto 16px;
  }


  @media screen and (max-width: 600px) {
    .upload-forms  {
      width: 100%;
      margin-top: 10%;
    }
 }

  </style>
</head>
<body>
  <?php include 'nav.php';?>
  <main class ="upload-forms">

    <!--store image to the database-->
    <?php
    //connect to sql database
      $host="localhost";
      $dbUser="root";
      $dbpassword="";
      $dbname = "wp_contacts";

      $conn = new mysqli($host, $dbUser, $dbpassword, $dbname) or die('Connection Failed!!! '.$conn->connect_error);
      $msg = "";
      //if button is clicked
      if(isset($_POST['upload'])){
        //Get image and description
        $image = $_FILES['image']['name'];
        $description = $_POST['description'];
        //store image in folder
        $storedAt = 'images/uploads/'.basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $storedAt);

        // sql insert and execute statement
        $sql="insert into images(image, description) values('$image','$description')";
        //mysqli_query($conn, $sql);

        if(mysqli_query($conn, $sql)){
            echo "Upload Successul...!";
        }
    }
      $conn->close();
    ?>

    <form method="post" enctype="multipart/form-data">
      Select image to upload:
      <input type="file" name="image" id="fileToUpload"> </br>
      <textarea name="description" placeholder="say something about your image..." style="height:200px"></textarea><br>
      <button type="submit" name="upload" class="btn" style="background:#1c8adb">Upload Image</button>
    </form>
  </main>

<?php include 'footer.php';?>
</body>
</html>
