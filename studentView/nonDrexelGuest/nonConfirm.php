<?php

session_start();

$fn = $_POST['fn'];
$ln = $_POST['ln'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$tnumber = $_POST['tnumber'];
$dateIn = $_POST['dateIn'];
$timeIn = $_POST['timeIn'];
$dateOut = $_POST['dateOut'];
$timeOut = $_POST['timeOut'];


$_SESSION['gFirst'] = $fn;
$_SESSION['gLast'] = $ln;
$_SESSION['gGender'] = $gender;
$_SESSION['gEmail'] = $email;
$_SESSION['gTNumber'] = $tnumber;
$_SESSION['dateIn'] = $dateIn;
$_SESSION['timeIn'] = $timeIn;
$_SESSION['dateOut'] = $dateOut;
$_SESSION['timeOut'] = $timeOut;

$rUser = $_SESSION['residentUsername'];
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
	<form action="nonSignedIn.php" Method= "post">
	<h1>
	 
	
	Resident Username: <?php echo $rUser; ?><br />
	Resident Hall: <?php echo $hall; ?><br />
	Guest Name: <?php echo $fn; ?> <?php echo $ln; ?> <br />
	Guest Telephone: <?php echo $tnumber; ?><br />
	Guest Email: <?php echo $email; ?><br />
	Date In: <?php echo $dateIn; ?><br />
	Time In: <?php echo $timeIn; ?><br />
	Date Out: <?php echo $dateOut; ?><br />
	Time Out: <?php echo $timeOut; ?><br />
	
	
	<p>
	<input type="submit" value="Confirm Guest">
	
	</form>
	<form action="../guestChoice.php" Method= "post">
	<input type="submit" value="Go Back to Dashboard">
	<form>
	
	<form>
	
	</body>
</html>