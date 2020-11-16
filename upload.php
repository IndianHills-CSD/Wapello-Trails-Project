<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/Style.php">
        <title>Upload Image - Page</title>
    </head>

    <body>

		<?php include 'nav.php';?>
		
		<main class ="upload-forms">
			<!--store image to the database-->
			<?php

				//connect to sql database
				 $host="localhost";
				 $dbUser="trailsAdmin";
				 $dbpassword="trailsAdmin";
				 $dbname = "Wapello_Trails_DB";
				  
				  $conn = new mysqli($host, $dbUser, $dbpassword, $dbname) or die('Connection Failed!!! '.$conn->connect_error);
				  
				  //if button is clicked
				  if(isset($_POST['upload'])){
					//Get image and description
					$image = $_FILES['image']['name'];
					$description = $_POST['description'];
					//store image in folder
					$storedAt = 'images/uploads/'.basename($image);
					move_uploaded_file($_FILES['image']['tmp_name'], $storedAt);

					// sql insert and execute statement
					$sql="insert into images(path, description) values('$image','$description')";
					//mysqli_query($conn, $sql);

					if(mysqli_query($conn, $sql)){
						echo "Upload Successul...!";
					}
				}
				  $conn->close();
			?>
			
			<div><p><b>Info: </b><i>Upload your favorite image from your visit.<i></p></div>

			<form method="post" enctype="multipart/form-data">
			  Select image to upload:
			  <input type="file" name="image" id="fileToUpload"></br>
			  <textarea name="description" placeholder="say something about your image..." style="height:200px"></textarea><br>
			  <button type="submit" name="upload" class="btn" style="background:#1c8adb">Upload Image</button>
			</form>
				
		</main>
					
        <?php include 'footer.php';?>
    </body>
</html>
