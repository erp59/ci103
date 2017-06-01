<?php
//Created By Elio Pettigrosso
//Last Modified: 4/6/17
//Resident Checks for Drexel Guest or Non-Drexel Guest
session_start();
$rUser = $_SESSION['rusername'];
$fName = $_SESSION['rFName'];
$lName = $_SESSION['rLName'];
$hall = $_SESSION['hall'];
$id = $_SESSION['rID'];
//DB connection
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('mysql')) {
    die('Could not select database: ' . mysql_error());
}
$dPendingGuest = mysql_query("SELECT * FROM Guest WHERE rusername = '$rUser'AND pending = '1'");
$dSignedGuest = mysql_query("SELECT * FROM Guest WHERE rusername = '$rUser'AND pending = '0'");
$history = mysql_query("SELECT * FROM history WHERE rusername = '$rUser'");
		
?>


<html>
<head>	
	<title>
		
			DashBoard
		
	</title>
	
	<style>
	
		
		html {
			background: url("dragon.jpg") no-repeat center center fixed;
			background-size: cover;
		}
		
		h1 {
			font-family: "PT Serif";
			font-size: 36px;
			text-align: center; 
			color: FFC600;
			margin: 2%;
		}
		
		h3 {
			font-family: "PT Serif";
			font-size: 18;
			text-align: center;
			text-shadow:
			color: FFFFFF;
			margin: 2%;
		}
		
		input[type=text], select {
			padding: 12px 20px;
			margin: 8px auto;
			text-align: center;
			position: relative;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		input[type=password], select {
			padding: 12px 20px;
			margin: 8px auto;
			text-align: center;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type=submit] {
			text-align: center;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			border: none;
			border-radius: 4px;
			margin-top: 15px;
			cursor: pointer;
		}
		input[type=submit]:hover {
			background-color: #45a049;
		}
		#text {
			text-align: center;
			font-size: 24px;
			border-radius: 10px;
			background: rgba(255,255,250,1);
			width: 55%;
			height: 55%;
			margin: 0 auto;
			color: FFC600;
		}
		
		#policy {
			font-size: 18px;
			font-style: italic;
			text-align: left;
			margin: 5%;
		}
		
		#bottom {
			text-align: right;
			background-color: FFC600;
			width: 100%;
			height: 120px;
			position: absolute;
			bottom: 1;
			left: 0;
		}
		
		#logo {
			margin: 0.55%;
		}
		
	
	
	table, th, td {
    border: 1 px solid black;
    padding: 1px;
    border-collapse: collapse;
	}
	
	table#t01 {
	table-layout: fixed;
    width: 900px;
	}
	</style>
	
	</head>
	
	<body>
	
	
			
	
	
	
	
	<br />
	
	<div align="center">
	<table id="t01" border = "1" bgcolor="#FFFFFF">
	
	<tr><td  colspan="2"><h1> Welcome, <?php echo $fName; echo " "; echo $lName;?></h1></td></tr>

	<tr>
	<td>
	<h1>
	
	Pending Guest 
	</h1>
	
	
	
	
	
	<form action='cancelGuest.php' Method= 'post'>
	<?php
	
	if (mysql_num_rows($dPendingGuest) != 0) {
		
		$guest = array();
		//Drexel Guest For Loop
		if (mysql_num_rows($dPendingGuest) != 0){
		for($x = 0; $x < mysql_num_rows($dPendingGuest); $x++){
			$gFN = mysql_result($dPendingGuest, $x, 'gfn');
			$gLN = mysql_result($dPendingGuest, $x, 'gln');
			$gName = $gFN." ".$gLN;
			$timeIn = mysql_result($dPendingGuest, $x, 'tin');
			$DBID = mysql_result($dPendingGuest, $x, 'ID');
			
			$currentGuest = array($gName, $timeIn, $DBID);
			array_push($guest, $currentGuest);
		}//end for
		}// end if DGuest
		
		echo "<table border = '1' width='100%'>";
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
					
					
					echo $guest[$a][$b];
					
					echo "</td>";
					}
					echo "<td>";
					
					echo "<input type='checkbox' name='cancel' value='".$guest[$a][2]."'";
					
					echo "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td colspan='3'><input type='submit' value='Cancel'></td>";
			echo "</tr>";
			echo "</table>";
		}
		
		
	}else{
		echo "<h3>There are no pending guest!</h3>";
	}
	
	?>
	</form>
	
	</td>
	
	
	<?php 
	//Checks for guest limit
	
	$numberOfRows = mysql_num_rows($dSignedGuest);
	
	if ($numberOfRows < 3){
	
	?>
	<td>
		
		<h1>Sign In a Guest</h1><br />
		
		<form action="drexelGuest/dugSignin.php" Method= "post">
		<input type="submit" value="Drexel Guest">
		</form>
	
	
		<form action="nonDrexelGuest/nonForm.php" Method= "post">
		<input type="submit" value="Non-Drexel Guest">
		</form>
	</td>
	</tr>
	
	<?php
	
	//end if
	//Start else
	}else{
	
	?>
	
	<td>
		
		<h3>You have reached the guest limit!</h3><br />
		
		</form>
	</td>
	</tr>
	
	<?php
	
	}//end else
	
	?>
	
	<tr>
	<td>
		
		
		<h1>Current Guest </h1>
		<h3>
		<table border = "1" width='100%' height='100%'>
		<?php
	
		if (mysql_num_rows($dSignedGuest) != 0){
		
		$guest = array();
		//Drexel Guest For Loop
		if (mysql_num_rows($dSignedGuest) != 0){
		for($x = 0; $x < mysql_num_rows($dSignedGuest); $x++){
			$gFN = mysql_result($dSignedGuest, $x, 'gfn');
			$gLN = mysql_result($dSignedGuest, $x, 'gln');
			$gName = $gFN." ".$gLN;
			$timeIn = mysql_result($dSignedGuest, $x, 'tout');
			$currentGuest = array($gName, $timeIn);
			array_push($guest, $currentGuest);
		}//end for
		}// end if DGuest
		
	
		echo "<tr>";
        echo "<th><h2>Name</h2></th>";
    	echo "<th><h2>Sign Out Time</h2></th> ";
  		echo "</tr>";
		
		//Loop through pendingGuest
		for($a = 0; $a < count($guest); $a++){	
			echo "<tr>";
				for($b = 0; $b < 2; $b++){
					echo "<td>";
					echo "<h3>";
					echo $guest[$a][$b];
					echo "</h3>";
					echo "</td>";
					}
			echo "</tr>";
		}
		
		
	}else{
		echo "There are no guest signed in!";
	}
	
	?>
	
	</h3>
	
	</table>
	
	
	
	
	</td>
	
	<td>
		
		<h1>History</h1>
		<h3>
		
		<table border = "1" width='100%' height='100%'>
		<?php
	
		if (mysql_num_rows($history) != 0) {
		
		$guest = array();
		for($x = 0; $x < mysql_num_rows($history); $x++){
			$gFN = mysql_result($history, $x, 'gfn');
			$gLN = mysql_result($history, $x, 'gln');
			$gName = $gFN." ".$gLN;
			$dateIn = mysql_result($history, $x, 'din');
			$dateOut = mysql_result($history, $x, 'dout');
			$DBID = mysql_result($history, $x, 'ID');
			$currentGuest = array($gName, $dateIn, $dateOut, $DBID);
			array_push($guest, $currentGuest);
		}//end for
		
		
		
		echo "<tr>";
        echo "<th>Name</th>";
    	echo "<th>Date Signed In</th> ";
    	echo "<th>Date Signed Out</th> ";
    	echo "<th>Checkbox</th> ";
  		echo "</tr>";
		
		//Loop through pendingGuest
		for($a = 0; $a < count($guest); $a++){	
			echo "<tr>";
				for($b = 0; $b < 3; $b++){
					echo "<td><h3>";
					echo $guest[$a][$b];
					echo "</h3></td>";
					}
					echo "<td><input type='checkbox' name='history' value='".$guest[$a][3]."' </td>";
			echo "</tr>";
		}
		
		
	}else{
		echo "There is no History!";
	}
	
	?>
	
	</h3>
	
	</table>
		
	</td>
	</tr>
	
	</table>
			
			
			
	</body>
	
</html>