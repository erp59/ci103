<?php

//Open Session
session_start();

//Get UserName and Password
$userN = $_POST['username'];
$pswd = $_POST['password'];

//Add UserName to Session
$_SESSION['residentUsername'] = $userN;

//DB connection
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('mysql')) {
    die('Could not select database: ' . mysql_error());
}

//Username Password Check
$userNamePassword = mysql_query("SELECT * FROM drexelStudents WHERE username = '$userN' AND password = '$pswd'");




//Checks to see if it returned anything
if (mysql_num_rows($userNamePassword) != 0) {
    
    //Username matches another username and password
    //Check to see if they have dorm status
    $hallCheck = mysql_query("SELECT * FROM drexelStudents WHERE username='$userN' AND hall IS NOT NULL");
	
	//Dorm Status Check
	if (mysql_num_rows($hallCheck) != 0) {
	
	$_SESSION['rID'] = mysql_result($hallCheck, 0, 'id');
	$_SESSION['rusername'] = mysql_result($hallCheck, 0, 'username');
	$_SESSION['rFName'] = mysql_result($hallCheck, 0, 'fName');
	$_SESSION['rLName'] = mysql_result($hallCheck, 0, 'lName');
	$_SESSION['rTNumber'] = mysql_result($hallCheck, 0, 'tNumber');
	$_SESSION['rGender'] = mysql_result($hallCheck, 0, 'gender');
	$_SESSION['hall'] = mysql_result($hallCheck, 0, 'hall');
	
	//Forward to guest choice
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=dashboard.php\">";
    } else{
    
    	//No Dorm Status
    	//Go back to main page
    	
    	$_SESSION['error'] = "Non Dorm Resident!";
    	
    	echo "<meta http-equiv=\"refresh\" content=\"0;URL=login.php\">";
    }
    
} else {

	//Incorrect Username or Password
    echo '<input type="text" id="error" name="username" placeholder="">';
    
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=login.html\">";
    
    
    
}

?>