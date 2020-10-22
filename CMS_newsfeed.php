<!DOCTYPE html>
<html> 
 <head>
	<link rel='stylesheet' type='text/CSS' href='css/style.php' />
	<meta charset="UTF-8">
	<title>Newsfeed message</title>
</head>
<body>

<?php include 'nav.php';?>
<?php	
	if (isset($_POST['Submit'])) 
	{
		require_once('inc_ConnecttoDatabase.php');
		
		$ORDERSTATEMENT = "SELECT * FROM News ORDER BY NewsID DESC LIMIT 1";
		$QueryResult = @$DBConnect->query($ORDERSTATEMENT); 
		if($QueryResult->num_rows ==0){
			echo "<p>that service was not found</p>";
		}
		while (($Row = $QueryResult->fetch_assoc())!== NULL) 
		{ 
			// var_dump($Row);
			$newsnumber = $Row['NewsID' ];
		} // end of loop
		
		$message = $_POST['message'];
		$newsnumber +=1;
		// Insert a row into the table.
	$InsertTableStatement = "INSERT INTO News VALUES ('$newsnumber','$message')";
	$QueryResult = $DBConnect->query($InsertTableStatement);
	If ($QueryResult)
		echo "<br /><p>news table has accepted input refresh page.</p>";
	else
		echo "<br /><p>Insert did not work. Error number is " . $DBConnect->errno . 	" " . $DBConnect->error . ".</p>";
	}  
	else
	{
 ?>
	<p><b>Newsfeed message</b></p>	
	<div class ="textbox">
	<form name="Iteminfo" action="CMS_newsfeed.php" method="post">
		<p>Newsfeed message: <input type="text" name="message"  value="" /></p>
		</div>
		<p>
			&nbsp;&nbsp;
			<input type="submit" name="Submit"  value="new message" />
		</p>
	</form>
	<?php 
		require_once('inc_ConnecttoDatabase.php');
		$sql = "SELECT NewsID, new, FROM News";
		$QueryResult = $DBConnect->query($sql);

		if (!empty($QueryResult) && $QueryResult->num_rows > 0) {
		  // output data of each row
		  while($row = $QueryResult->fetch_assoc()) {	
				echo "<p>SubscriptionID: " . $row["NewsID"]. " - ServiceName: " . $row["new"].  "</p><br>";
		  }
		} else {
		  echo "No news messages";
		}
	?>
<?php	
} 
?>
<?php include 'footer.php';?>
</body>


</html>