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

				$Title = $_POST['title'];
				$previousTitle = $Title;

				$projectSet = $conn->query("SELECT projects.title, projects.description, projects.projectTime, projects.location, projects.additional_info, projects.image_name FROM projects WHERE projects.title = '$Title'");

				while ($row = $projectSet->fetch_assoc()) {

					$title = $row['title'];
					$description = $row['description'];
					$time = $row['projectTime'];
					$location = $row['location'];
					$additional_info = $row['additional_info'];
					$image_name = $row['image_name'];

					//<!--project 1-->
					echo '<div class="projectUpdate">';
					echo		'<div class="thumbnail">';
					echo			'<span class="helper"></span><img src="images/trail-site30-bigger.jpg">';
				  echo   	'</div>';
					echo   	'<div class="projectContent">';
					echo			'<p class="projectTitle">'.$title.'</p>';
					echo			'<p class="projectContent">'.$description.'</p>';
					echo			'<p class="projectContent">'.$additional_info.'</p>';
					echo    '</div>';
					echo '</div>';
					echo '<div class="projectForm">';
					echo   '<form class="projectUpdate" action="projectChange.php" method="post">';
					echo      '<label class="update" for="titleText">Title</label>';
					echo      '<textarea class="textBoxStyle1" id="titleText" name="newTitle">'.$title.'</textarea>';
					echo      '<label class="update" for="descriptionText">Description</label>';
					echo      '<textarea class="textBoxStyle2" id="descriptionText" name="newDescription">'.$description.'</textarea>';
					echo      '<label class="update" for="timeText">Time</label>';
					echo      '<textarea class="textBoxStyle1" id="timeText" name="newTime">'.$time.'</textarea>';
					echo      '<label class="update" for="locationText">Location</label>';
					echo      '<textarea class="textBoxStyle1" id="locationText" name="newLocation">'.$location.'</textarea>';
					echo      '<label class="update" for="infoText">Addional Info</label>';
					echo      '<textarea class="textBoxStyle2" id="infoText" name="newInfo">'.$additional_info.'</textarea>';
					echo      '<input class="alter" type="hidden" name="previousTitle" value="'.$previousTitle.'"/>';
					echo      '<input class="update" type="submit"/>';
					echo   '</form>';
					echo '</div>';
				}

				?>

		</div>

		<?php include 'footer.php';?>

	</body>
</html>
