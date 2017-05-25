<?php

$id = $_POST['cancel'];

//DB connection
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('mysql')) {
    die('Could not select database: ' . mysql_error());
}

$sql = "DELETE FROM Guest WHERE ID = '$id'";

mysql_query($sql);

echo "<meta http-equiv=\"refresh\" content=\"0;URL=dashboard.php\">";



?>