<?php

//
// Need to add error codes
//

session_start();

//Get INFO
$gUser = $_POST['gUsername'];
$dateIn = $_POST['dateIn'];
$timeIn = $_POST['timeIn'];
$dateOut = $_POST['dateOut'];
$timeOut = $_POST['timeOut'];

//DB Connection
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('mysql')) {
    die('Could not select database: ' . mysql_error());
}

//Username check
$userNameExist = mysql_query("SELECT * FROM drexelStudents WHERE username = '$gUser'");
	
if (mysql_num_rows($userNameExist) == 0) {
	//Username does not exist
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=../guestChoice.php\">";
    } else{
    
    	
    	//Add info to Session
    	$_SESSION['guestUsername'] = $gUser;
    	$_SESSION['Gid'] = mysql_result($userNameExist, 0, 'id');
    	$_SESSION['fName'] = mysql_result($userNameExist, 0, 'fName');
    	$_SESSION['lName'] = mysql_result($userNameExist, 0, 'lName');
    	$_SESSION['dateIn'] = $dateIn;
    	$_SESSION['timeIn'] = $timeIn;
    	$_SESSION['dateOut'] = $dateOut;
    	$_SESSION['timeOut'] = $timeOut;
    	
    	//Forward to Confirmation Page
    	echo "<meta http-equiv=\"refresh\" content=\"0;URL=dugConfirm.php\">";
    }

?>

