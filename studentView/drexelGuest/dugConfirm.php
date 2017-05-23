<?php

session_start();

//Gather Session variables
$rUser = $_SESSION['rusername'];
$gUser = $_SESSION['gusername'];
$Gid = $_SESSION['gID'];
$fName = $_SESSION['gFName'];
$lName = $_SESSION['gLName'];
$dateIn = $_SESSION['dateIn'];
$timeIn = $_SESSION['timeIn'];
$dateOut = $_SESSION['dateOut'];
$timeOut = $_SESSION['timeOut'];
$hall = $_SESSION['hall'];


?>

<html>
	<head>
		<title>Confirm</title>
		
		<style>
			
		input[type=submit] {
   		width: 50%;
    	background-color: #4CAF50;
    	color: white;
    	padding: 14px 20px;
    	margin: 8px 0;
    	border: none;
    	border-radius: 4px;
    	cursor: pointer;
		}

		input[type=submit]:hover {
    	background-color: #45a049;
		}
		
		</style>
	</head>
	
	<body>
	<form action="dugSignedIn.php" Method= "post">
	<h1>
	 
	
	Resident Username: <?php echo $rUser; ?><br />
	Resident Hall: <?php echo $hall; ?><br />
	Guest Username: <?php echo $gUser; ?><br />
	Guest Name: <?php echo $fName; ?> <?php echo $lName; ?> <br />
	Guest ID: <?php echo $Gid; ?><br />
	Date In: <?php echo $dateIn; ?><br />
	Time In: <?php echo $timeIn; ?><br />
	Date Out: <?php echo $dateOut; ?><br />
	Time Out: <?php echo $timeOut; ?><br />
	
	
	<p>
	<input type="submit" value="Confirm">
	
	</form>
	<form action="../guestChoice.php" Method= "post">
	<input type="submit" value="Go Back to Dashboard">
	<form>
	
	<form>
	
	</body>
</html>
