<?php

session_start();

?>


<html>
	<head>
	<title>Non Drexel Guest</title>
	
	
	</head> 
	
	<body>
	
  	
  	<form action="nonConfirm.php" Method= "post">
  	<div align="center">
  	<table frame="vsides">
  		<tr>
  		
    		<td><h1>First Name</h1></td>
    		<td><input type="text" name="fn"></td> 
  		
    		<td><h1>Last Name</h1></td>
    		<td><input type="text" name="ln"></td> 
  		</tr>
  		
  		<tr>
  		
    		<td><h1>Gender</h1></td>
    		<td><input type="radio" name="gender" value="Male">Male <input type="radio" name="gender" value="Female">Female</td> 
  		</tr>
  		
  		<tr>
  		
    		<td><h1>Email</h1></td>
    		<td><input type="text" name="email"></td> 
  		
    		<td><h1>Telephone Number</h1></td>
    		<td><input type="text" name="tnumber"></td> 
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