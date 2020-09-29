<?php
require_once ('phpMailer/PHPMailerAutoload.php');
require_once ('phpMailer/class.smtp.php');

//database connection
  $host="localhost";
  $dbUser="root";
  $dbpassword="";
  $dbname = "wp_contacts";

  $conn = new mysqli($host, $dbUser, $dbpassword, $dbname);

  //php code to select from the database begins
    $sql = "SELECT * FROM contacts;";
    $results = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($results);

    if($resultCheck > 0){
      while($row = mysqli_fetch_assoc($results)){
            //$phone = $row['phone'];
            $fName = $row['firstname'];
            $lName = $row['lastname'];
            $email = $row['email'];

            sendEmail($email,$fName,$lName);
        }
      }


function sendEmail($email,$fName,$lName){

   if(isset($_POST['atSubmit'])){
      //get data from the html form
    //  $to = strip_tags($_POST['emails']);
      $subject = strip_tags($_POST['subject']);
      $message = strip_tags($_POST['message']);

      $mail = new PHPMailer();

      $mail->IsSMTP();
      $mail->CharSet = 'UTF-8';
      $mail->Host='smtp.gmail.com';
    //  $mail->SMTPDebug = 3; //check detailes about errors
      $mail->Port=25;
      $mail->SMTPAuth=true;
      $mail->SMTPSecure='tls';
      $mail->Username='beautysika13@gmail.com';  // user email address
      $mail->Password='Ahofe1999';

      //email settings
      $mail->setFrom('beautysika13@gmail.com', 'Wapello Trails');
      $mail->addAddress($email);     // Add a recipient
      $mail->AddBCC($email);
      $mail->addReplyTo('beautysika13@gmail.com');

      $mail->isHTML(true);

      $mail->Subject = $subject;
      $mail->Body = 'Dear '.$fName. ' '.$lName.',<br>' .$message;

      if(!$mail->send()) {
          echo 'Message Failed.'.$fName.'';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
      } else {
          echo 'Message send to : '.$fName.'';
          echo 'Message sent... <a href="index.php">Home page</a>';
      }
    }
}

?>
