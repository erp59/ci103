<?php

//Administrative view

//DB Connection
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('mysql')) {
    die('Could not select database: ' . mysql_error());
}

//Search for all pending 
$pending = mysql_query("SELECT * FROM Guest WHERE pending = '1'");

echo '<div align=center>';
echo '<h1> Pending Guest </h1>';

echo "<form action='adminPending.php' Method= 'post'>";
echo '<table align=center border="2">';
echo '<th>Guest Username</th><th>Resident Username</th>';


//Print out all Pending
$i = 0;
while ($i < mysql_num_rows($pending)){
	
	echo "<tr><td>".mysql_result($pending, $i, 'username')."</td><td>".mysql_result($pending, $i, 'rusername')."</td>";
	echo "<td><input type='checkbox' name='signIn' value='".mysql_result($pending, $i, 'username')."'></td></tr>";
	$i++;
}
echo '</table>';
echo "<input type='submit' value='Sign In Guest'>";
echo "</form>";

//Guest that are signed in
echo '<h1> Current Guest </h1>';

//Search for all Guest that are signed in and are in Race Hall
$current = mysql_query("SELECT * FROM drexelGuest WHERE pending = '0' AND hall = 'Race'");


echo "<form action='adminSignOut.php' Method= 'post'>";
echo '<table align=center border="2">';
echo '<th>UserName</th><th>RUser</th>';

$j = 0;
while ($j < mysql_num_rows($current)){
	
	echo "<tr><td>".mysql_result($current, $j, 'username')."</td><td>".mysql_result($current, $j, 'rusername')."</td>";
	echo "<td><input type='checkbox' name='signOut' value='".mysql_result($current, $i, 'username')."'></td></tr>";
	$j++;
	
	
}


echo '</table>';

echo "<input type='submit' value='Sign Out Guest'>";

echo "</form>";

?>



