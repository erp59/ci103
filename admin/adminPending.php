<?php

$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('mysql')) {
    die('Could not select database: ' . mysql_error());
}

$guestUsername = $_POST['signIn'];


$sql = "UPDATE drexelGuest SET pending='0' WHERE username='".$guestUsername."'";

mysql_query($sql);

echo "<meta http-equiv=\"refresh\" content=\"0;URL=adminView.php\">";


?>