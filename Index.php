<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/Style.php">
	<title>Home</title>
</head>
<body>

	<?php include 'nav.php';?>
	<?php 
	require_once('inc_ConnecttoDatabase.php');
	$SELECTSTATEMENT = "SELECT New FROM news ";
	$QueryResult = @$DBConnect->query($SELECTSTATEMENT); 
	if($QueryResult->num_rows ==0){
		echo "<p>that service was not found</p>";
	}
	echo '<marquee direction="right"
	onmouseover="this.stop()"onmouseout="this.start()"
	class="ticker-wrap"
	>';
	echo "<p>";
	while (($Row = $QueryResult->fetch_assoc())!== NULL) 
	{ 
	echo $Row['News']; 

	} // end of loop
	echo "</p>";
	echo "</marquee>";
	// close the connection.
	$DBConnect->close();
	
	
	
	
	
	?>
	<div class="body-container">

			<img class="center" src="images/placehold.png" width="300" height="400">
			<br/>

			<a class="weatherwidget-io" href="https://forecast7.com/en/41d02n92d41/ottumwa/?unit=us" data-label_1="OTTUMWA" data-label_2="WEATHER" data-theme="original" >OTTUMWA WEATHER</a>
			<script>
			!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
			</script>

		<iframe src="https://calendar.google.com/calendar/embed?src=wapellocountytrailscouncil%40gmail.com&ctz=America%2FChicago" style="border: 0" width="385" height="300" frameborder="0" scrolling="no" class="calendar"></iframe>
		<p class="historytext">
			In 2006, increased interest in trail development led to the formation of the Wapello County Trails Council. After hosting several public meetings,
			a mission statement and master plan for a paved trail system was developed. The trail sections were then prioritized and fundraising began.
			Since that time, over 10 miles of levee trail has been completed with projects totaling over $2 million. Trail projects included:
			</p>

			<ul class="historylist">
			  <li>In 2007, a section of north levee (.7 miles) was paved. An abandoned rail bridge spanning the Des Moines River was also decked for pedestrian use. </li>
			  <br/>
			  <li> In the spring of 2009, a $200,000 grant from Area 15 Regional Planning was used to complete the east section of the north levee. A special allocation from the 2006 Iowa legislative session provided another $220,000 to complete a section of the south levee from the rail bridge to Highway 34. A REAP grant paved another section of the south trail from the railroad bridge along an abandoned railroad line to Finley Street. </li>
			  <br/>
			  <li> A grant from Area 15 Regional Planning completed the 3.4 mile south levee loop in 2010/2011 with the exception of a small section that the IDOT asked not be paved due to a projected highway project.</li>
			  <br/>
			  <li> A REAP grant completed the north levee trail. An Area 15 Regional Planning grant paved one mile of trail from the Gray Eagle Nature Preserve northeast along another levee section to the Ottumwa city limits.</li>
			  <br/>
			  <li> In 2011, John Deere Ottumwa Works installed solar lights along a section near their plant. </li>
			  <br/>
			  <li> In 2015, leveraged funds from a variety of sources to install a tunnel under Highway 34 connecting Ottumwa Park to the south levee trail for a total cost of approximately $650,000.</li>
			  <br/>
			  <li> Participated in a visioning process with Trees Forever in 2016, resulting in a trailhead concept plan. A local architect then created construction documents for the council in 2017.</li>
			  <br/>
			  <li> Paved the Gray Eagle parking lot and installed solar lights in 2016-17. </li>
			</ul>

		<div class="milestones-con">
			<?php include 'Milestones.php';?>
		</div>
	</div>
 <?php include 'footer.php';?>
</body>
 </html>
