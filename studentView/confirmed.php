<?php

//Identical to dugConfirm.php without sign-in button

session_start();

$rUser = $_SESSION['residentUsername'];
$gUser = $_SESSION['guestUsername'];
$id = $_SESSION['id'];
$fName = $_SESSION['fName'];
$lName = $_SESSION['lName'];
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
	
	<h1>
	 
	
	Resident Username: <?php echo $rUser; ?><br />
	Resident Hall: <?php echo $hall; ?><br />
	Guest Username: <?php echo $gUser; ?><br />
	Guest Name: <?php echo $fName; ?> <?php echo $lName; ?> <br />
	Guest ID: <?php echo $id; ?><br />
	Date In: <?php echo $dateIn; ?><br />
	Time In: <?php echo $timeIn; ?><br />
	Date Out: <?php echo $dateOut; ?><br />
	Time Out: <?php echo $timeOut; ?><br />
	
	
	<p>
	
	<form action="dashboard.php" Method= "post">
	<input type="submit" value="Go Back">
	<form>
	
	<form>
	
	</body>
</html>