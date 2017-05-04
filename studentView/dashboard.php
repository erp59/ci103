<?php

//Created By Elio Pettigrosso
//Last Modified: 4/6/17
//Resident Checks for Drexel Guest or Non-Drexel Guest



session_start();

$rUser = $_SESSION['residentUsername'];

$hall = $_SESSION['hall'];

$id = $_SESSION['id'];


//DB connection
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('mysql')) {
    die('Could not select database: ' . mysql_error());
}

$userInfo = mysql_query("SELECT * FROM drexelStudents WHERE username = '$rUser'");

$fName = mysql_result($userInfo, 0, 'fName');
$lName = mysql_result($userInfo, 0, 'lName');

$_SESSION['fName'] = $fName;
$_SESSION['lName'] = $lName;

$dPendingGuest = mysql_query("SELECT * FROM drexelGuest WHERE rusername = '$rUser'AND pending = '1'");
$nPendingGuest = mysql_query("SELECT * FROM nonDrexelGuest WHERE rusername = '$rUser'AND pending = '1'");

$dSignedGuest = mysql_query("SELECT * FROM drexelGuest WHERE rusername = '$rUser'AND pending = '0'");
$nSignedGuest = mysql_query("SELECT * FROM nonDrexelGuest WHERE rusername = '$rUser'AND pending = '0'");

$history = mysql_query("SELECT * FROM history WHERE rusername = '$rUser'");
		
		
		

?>


<html>
<head>	
	<title>
		
			DashBoard
		
	</title>
	
	<style>
	
	input[type=submit]:hover {
    background-color: #45a049;
	}
	
		input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	}
	
	
	table, th, td {
    border: 1 px solid black;
    padding: 1px;
    border-collapse: collapse;

	}
	table {
    border-spacing: 10px;
	}

	
	</style>
	
	</head>
	
	<body>
	
	<div align="center">
			
	<h1> Welcome, <?php echo $fName; echo " "; echo $lName;?></h1>
	
	
	
	<br />
	
	<table border = "1">

	<tr>
	<td>
	<h1>
	<div align="center">
	Pending Guest 
	</h1>
	</div>
	
	
	
	<table border = "1" width='100%'>
	
	<form action='cancelGuest.php' Method= 'post'>
	<?php
	
	if (mysql_num_rows($dPendingGuest) != 0 or mysql_num_rows($nPendingGuest) != 0 ) {
		
		$guest = array();
		//Drexel Guest For Loop
		if (mysql_num_rows($dPendingGuest) != 0){
		for($x = 0; $x < mysql_num_rows($dPendingGuest); $x++){
			$gFN = mysql_result($dPendingGuest, $x, 'fName');
			$gLN = mysql_result($dPendingGuest, $x, 'lName');
			$gName = $gFN." ".$gLN;
			$timeIn = mysql_result($dPendingGuest, $x, 'timeIn');
			
			$currentGuest = array($gName, $timeIn, $guestID);
			array_push($guest, $currentGuest);
		}//end for
		}// end if DGuest
		
		//NonDrexel Guest For Loop
		if (mysql_num_rows($nPendingGuest) != 0){
		for($y = 0; $y < mysql_num_rows($nPendingGuest); $y++){	
			$gFN = mysql_result($nPendingGuest, $y, 'fName');
			$gLN = mysql_result($nPendingGuest, $y, 'lName');
			$gName = $gFN." ".$gLN;
			$timeIn = mysql_result($nPendingGuest, $y, 'timeIn');
			$currentGuest = array($gName, $timeIn);
			array_push($guest, $currentGuest);
			
		}//end for
		}// end if DGuest
		
		echo "<tr>";
        echo "<th>Name</th>";
    	echo "<th>Sign In Time</th> ";
    	echo "<th>Cancel</th> ";
  		echo "</tr>";
		
		//Loop through pendingGuest
		for($a = 0; $a < count($guest); $a++){	
			echo "<tr>";
				for($b = 0; $b < 2; $b++){
					echo "<td>";
					echo "<h2>";
					echo "<div align = 'center'>";
					echo $guest[$a][$b];
					echo "</div>";
					echo "</td>";
					}
					echo "<td>";
					echo "<div align = 'center'>";
					echo "<input type='checkbox' name='cancel' value='".$guest[$a][0]."'";
					echo "</div>";
					echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td colspan='3'><input type='submit' value='Cancel'></td>";
			echo "</tr>";
		}
		
		
	}else{
		echo "There are no pending guest!";
	}
	
	?>
	
	
	</form>
	
	
	
	</div>
	</table>
	
	
	</h2>
	</td>
	
	<td>
		<div align="center">
		<h1>Sign In a Guest</h1><br />
		</div>
		<form action="drexelGuest/dugSignin.php" Method= "post">
		<input type="submit" value="Drexel Guest">
		</form>
	
	
		<form action="nonDrexelGuest/nonForm.php" Method= "post">
		<input type="submit" value="Non-Drexel Guest">
		</form>
	</td>
	</tr>
	
	<tr>
	<td>
		
		<div align="center">
		<h1>Current Guest Signed In</h1>
		</div>
		<table border = "1" width='100%' height='100%'>
		<?php
	
		if (mysql_num_rows($dSignedGuest) != 0 or mysql_num_rows($nSignedGuest) != 0 ) {
		
		$guest = array();
		//Drexel Guest For Loop
		if (mysql_num_rows($dSignedGuest) != 0){
		for($x = 0; $x < mysql_num_rows($dSignedGuest); $x++){
			$gFN = mysql_result($dSignedGuest, $x, 'fName');
			$gLN = mysql_result($dSignedGuest, $x, 'lName');
			$gName = $gFN." ".$gLN;
			$timeIn = mysql_result($dSignedGuest, $x, 'timeOut');
			$currentGuest = array($gName, $timeIn);
			array_push($guest, $currentGuest);
		}//end for
		}// end if DGuest
		
		//NonDrexel Guest For Loop
		if (mysql_num_rows($nSignedGuest) != 0){
		for($y = 0; $y < mysql_num_rows($nSignedGuest); $y++){	
			$gFN = mysql_result($nSignedGuest, $y, 'fName');
			$gLN = mysql_result($nSignedGuest, $y, 'lName');
			$gName = $gFN." ".$gLN;
			$timeIn = mysql_result($nSignedGuest, $y, 'timeOut');
			$currentGuest = array($gName, $timeIn);
			array_push($guest, $currentGuest);
			
		}//end for
		}// end if DGuest
		
		echo "<tr>";
        echo "<th>Name</th>";
    	echo "<th>Sign Out Time</th> ";
  		echo "</tr>";
		
		//Loop through pendingGuest
		for($a = 0; $a < count($guest); $a++){	
			echo "<tr>";
				for($b = 0; $b < 2; $b++){
					echo "<td>";
					echo "<h2>";
					echo $guest[$a][$b];
					echo "</td>";
					}
			echo "</tr>";
		}
		
		
	}else{
		echo "There are no guest signed in!";
	}
	
	?>
	
	</table>
	
	
	
	
	</td>
	
	<td>
		<div align="center">
		<h1>History</h1>
		</div>
		
		<table border = "1" width='100%' height='100%'>
		<?php
	
		if (mysql_num_rows($history) != 0) {
		
		$guest = array();
		for($x = 0; $x < mysql_num_rows($history); $x++){
			$gFN = mysql_result($history, $x, 'gFirstName');
			$gLN = mysql_result($history, $x, 'gLastName');
			$gName = $gFN." ".$gLN;
			$dateIn = mysql_result($history, $x, 'dateIn');
			$currentGuest = array($gName, $dateIn);
			array_push($guest, $currentGuest);
		}//end for
		
		
		
		echo "<tr>";
        echo "<th>Name</th>";
    	echo "<th>Date Signed In</th> ";
  		echo "</tr>";
		
		//Loop through pendingGuest
		for($a = 0; $a < count($guest); $a++){	
			echo "<tr>";
				for($b = 0; $b < 2; $b++){
					echo "<td>";
					echo "<h2>";
					echo $guest[$a][$b];
					echo "</td>";
					}
			echo "</tr>";
		}
		
		
	}else{
		echo "There is no History!";
	}
	
	?>
	
	</table>
		
	</td>
	</tr>
	
	
	</table>
			
	</body>
	
</html>