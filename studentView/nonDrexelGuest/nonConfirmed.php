<?php

session_start();


$rUser = $_SESSION['residentUsername'];
$gFN = $_SESSION['gFirst'];
$gLN = $_SESSION['gLast'];
$gEmail = $_SESSION['gmail'];
$gTNumber = $_SESSION['tnumber'];
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
	<form action="../dashboard.php" Method= "post">
	<h1>
	 
	 Your Guest has been signed in! <br />
	
	Resident Username: <?php echo $rUser; ?><br />
	Resident Hall: <?php echo $hall; ?><br />
	Guest Name: <?php echo $gFN; ?> <?php echo $gLN; ?> <br />
	Guest Telephone: <?php echo $gTNumber; ?><br />
	Guest Email: <?php echo $gEmail; ?><br />
	Date In: <?php echo $dateIn; ?><br />
	Time In: <?php echo $timeIn; ?><br />
	Date Out: <?php echo $dateOut; ?><br />
	Time Out: <?php echo $timeOut; ?><br />
	
	
	<p>
	<input type="submit" value="Back">
	
	</form>
	
	
	</body>
</html>