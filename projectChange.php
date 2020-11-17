<!Doctype html>
<html lang="en">

<?php

		$servername = "localhost";
		$username = "devenTrails";
		$password = "trails";
		$dbname = "Wapello_Trails_DB";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		//$conn = mysqli_connect($servername, $adminJosh, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

	?>

	<head>
	   <meta charset="UTF-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	   <title> Project Page </title>
	   <link  rel="stylesheet" type="text/css" href="css/Style.php">
	   <script src="js/slide-img.js"></script>
	</head>
	<body>
		<?php include 'admin_nav.php';?>


		<div class="projects">

		<?php

			 if(isset($_POST['newTitle'])) {
				 $previousTitle = $_POST['previousTitle'];
				 $newTitle = $_POST['newTitle'];
				 $newDescription = $_POST['newDescription'];
				 $newTime = $_POST['newTime'];
				 $newLocation = $_POST['newLocation'];
				 $newInfo = $_POST['newInfo'];

				 $conn->query("UPDATE projects SET title='$newTitle', description='$newDescription', projectTime='$newTime', location='$newLocation', additional_info='$newInfo' WHERE title = '$previousTitle'");

				 $projectSet = $conn->query("SELECT projects.title, projects.description, projects.projectTime, projects.location, projects.additional_info, projects.image_name FROM projects");

 				while ($row = $projectSet->fetch_assoc()) {

 					$title = $row['title'];
 					$description = $row['description'];
 					$additional_info = $row['additional_info'];
					$image_name = $row['image_name'];

 					//<!--project 1-->
 					echo '<div class="project">';
 					echo		'<div class="thumbnail">';
					echo			'<span class="helper"></span><img src="images/'.$image_name.'">';
 				  echo   	'</div>';
 					echo   	'<div class="projectContent">';
					echo			'<p class="projectTitle">'.$title.'</p>';
 					echo			'<p class="projectContent">'.$description.'</p>';
 					echo			'<p class="projectContent">'.$additional_info.'</p>';
 					echo    '</div>';
 					echo    '<div class="buttons">';
 					echo    	'<form class="alter" action="projectUpdate.php" method="post">';
 					echo      	'<input class="alter" type="hidden" name="title" value="'.$title.'"/>';
 					echo      	'<input class="alter" type="submit" value="Change"/>';
 					echo      '</form>';
 					echo      '<button class="alter">Delete</button>';
 					echo    '</div>';
 					echo '</div>';


		 	}
		  }else{
			  $projectSet = $conn->query("SELECT projects.title, projects.description, projects.projectTime, projects.location, projects.additional_info, projects.image_name FROM projects");

				while ($row = $projectSet->fetch_assoc()) {

					$title = $row['title'];
					$description = $row['description'];
					$additional_info = $row['additional_info'];
					$image_name = $row['image_name'];

					//<!--project 1-->
					echo '<div class="project">';
					echo		'<div class="thumbnail">';
					echo			'<span class="helper"></span><img src="images/'.$image_name.'">';
					echo   	'</div>';
					echo   	'<div class="projectContent">';
					echo			'<p class="projectTitle">'.$title.'</p>';
 					echo			'<p class="projectContent">'.$description.'</p>';
 					echo			'<p class="projectContent">'.$additional_info.'</p>';
					echo    '</div>';
					echo    '<div class="buttons">';
					echo    	'<form class="alter" action="projectUpdate.php" method="post">';
					echo      	'<input class="alter" type="hidden" name="title" value="'.$title.'"/>';
					echo      	'<input class="alter" type="submit" value="Change"/>';
					echo      '</form>';
					echo      '<button class="alter">Delete</button>';
					echo    '</div>';
					echo '</div>';
			 }
	   }
		?>

		</div>

		<?php include 'footer.php';?>

	</body>
</html>
