<?php

//Used to make changes to DB for testing purposes

$ID = rand(100000, 999999);
$rID = 12345678;
$rUser = "jfc22";
$gUser = "jlg26";
$gFName = "Mike";
$gLName = "Brown";
$gTNumber = 9640853;
$dateIn = "May 23";
$timeIn = "10:00AM";
$dateOut = "May 24";
$timeOut = "11:00AM";
$hall = "Race";

$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('mysql')) {
    die('Could not select database: ' . mysql_error());
}

//$sql = "DELETE FROM Guest";
$sql1 = "INSERT INTO Guest (`ID`, `rID`, `rusername`, `gusername`, `gfn`, `gln`, `gtnumber`, `hall`, `din`, `tin`, `dout`, `tout`, `pending`) ";
$sql2 = "VALUES ('$ID', '$rID', '$rUser', '$gUser', '$gFName', '$gLName', '$gTNumber', '$hall', '$dateIn', '$timeIn', '$dateOut', '$timeOut', '1')";
$sql = $sql1.$sql2;

mysql_query($sql);


//echo $dbID;

?>