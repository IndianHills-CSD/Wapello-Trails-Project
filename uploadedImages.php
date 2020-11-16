<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/Style.php">
        <title>Uploaded Images Page</title>
        
        <style>
			
			  @media screen and (max-width: 900px) {
				.item img{
				  width: 100%;
				  height: auto;
				}
			 }

		</style>
    </head>

    <body>

		<?php include 'nav.php';?>
		
		<h2 style="text-align:center; margin-top: 8%;"> Uploaded Images from Visitors</h2>
      <!--store image to the database-->
      <?php

        //connect to sql database
        $host="localhost";
        $dbUser="trailsAdmin";
        $dbpassword="trailsAdmin";
        $dbname = "Wapello_Trails_DB";


        $conn = new mysqli($host, $dbUser, $dbpassword, $dbname) or die('Connection Failed!!! '.$conn->connect_error);

    		$sqlSelect = "SELECT * FROM images;";
    		$result = mysqli_query($conn,$sqlSelect);
    		//$resultCheck = mysqli_num_rows($results);

    		echo "<div style='text-align:center; margin-top: 2%;' class='flex-img'> ";
    			while($row=mysqli_fetch_array($result,MYSQLI_BOTH)){
    				echo '<div class="item">
    					'.$row["description"].' <br /><br /><br />
    					<img src="images/uploads/'.$row["path"].'" width="535" height="435" />
    				</div>';
    			}

    		echo "</div>";

          $conn->close();
      ?>
					
        <?php include 'footer.php';?>
    </body>
</html>
