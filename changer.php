<?php

//Used to make changes to DB for testing purposes

$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('mysql')) {
    die('Could not select database: ' . mysql_error());
}

//$sql = "DELETE FROM drexelGuest";
$sql = "UPDATE nonDrexelGuest SET pending='0'";

mysql_query($sql);


?>