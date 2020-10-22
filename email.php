<!Doctype html>
<html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
   <title> Email Page </title>
   <link  rel="stylesheet" type="text/css" href="css/Style.php">

   <style>

   * {
     box-sizing: border-box;
     margin: 0;
     padding: 0;
   }

   .contact-forms{
     width: 100%;
     height: auto;
     padding: 20px;
     margin: 2% auto 8%;
    text-align: center;
   }


  input,textarea {
     width: 50%;
     color: #2F4F4F;
     padding: 12px;
     border: 1px solid #ccc;
     border-radius: 4px;
     margin: 6px auto 16px;
   }


   @media screen and (max-width: 600px) {
     .contact-forms  {
       width: 100%;
       margin-top: 10%;
     }
  }

   </style>

 </head>
  <body>
    <?php include 'nav.php';?>
     <main class ="contact-forms">
      <form  action="getUsers.php" method="POST" enctype="multipart/form-data">
        <!--message input forms-->
          <h1>Message Inbox</h1>
            <input type="file" name="file[]" multiple="multiple"><br>
            <!--<textarea name="emails" id="selected-address"></textarea>-->
            <input type="text" placeholder="Subject" name="subject">
            <textarea name="message" placeholder="Enter Message" style="height:200px"></textarea><br>
             <button type="submit" name="atSubmit" class="btn" style="background:#1c8adb">SEND</button>
             <p><b>NOTE: </b><i>Message will be sent to every subscriber from the database, with an email address only.<i></p>
        </form>
    </main>
    <?php include 'footer.php';?>
  </body>
</html>
