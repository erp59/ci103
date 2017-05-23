<?php

session_start();

//Gather Guest and Resident INFO

$rID = $_SESSION['rID'];
$rUser = $_SESSION['rusername'];
$gUser = $_SESSION['gusername'];
$gFName = $_SESSION['gFName'];
$gLName = $_SESSION['gLName'];
$gTNumber = $_SESSION['gTNumber'];
$gGender = $_SESSION['gGender'];
$dateIn = $_SESSION['dateIn'];
$timeIn = $_SESSION['timeIn'];
$dateOut = $_SESSION['dateOut'];
$timeOut = $_SESSION['timeOut'];
$hall = $_SESSION['hall'];

//DB Connection
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('mysql')) {
    die('Could not select database: ' . mysql_error());
}

//Add guest to Drexel Guest Table with Pending set to 1
$sql = "INSERT INTO Guest VALUES ('$dbID', '$rID, '$rUser', '$gUser', '$fName', '$lName', '$gTNumber', 'gGender', '$hall', '$dateIn', '$timeIn', '$dateOut', '$timeOut', '1')";

mysql_query($sql);

//Forward to Confirmed when done
echo "<meta http-equiv=\"refresh\" content=\"0;URL=../confirmed.php\">";

?>