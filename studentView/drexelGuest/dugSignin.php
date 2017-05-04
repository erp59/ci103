<?php


//Created By Elio Pettigrosso
//Last Modified: 4/6/17
//Information relating to the Drexel Guest




session_start();


?>

<html>
	<head>
	<title>Drexel Guest Signin</title>
	
	
	</head> 
	
	<body>
	
  	
  	<form action="dugCheck.php" Method= "post">
  	<div align="center">
  	<table frame="vsides">
  		<tr>
  		
    		<td><h1>Guest Username</h1></td>
    		<td><input type="text" name="gUsername"></td> 
  		</tr>
  
  		<tr>
  			<td><h1>Select Check In Day:<h1></td>
    		<td><input type="date" name="dateIn"></td> 
    		<td><h1>Select Check In Time:<h1></td>
    		<td><input type="time" name="timeIn"></td> 
  		</tr>
  		
  		<tr>
  			<td><h1>Select Check Out Day:<h1></td>
    		<td><input type="date" name="dateOut"></td> 
    		<td><h1>Select Check Out Time:<h1></td>
    		<td><input type="time" name="timeOut"></td> 
  		</tr>
  
  		<tr>
  			<td><button type="submit">Connect</button>
	</table>
  	
  	</form>
  	
	</body>
	
</html>