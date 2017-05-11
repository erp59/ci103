<?php

session_destroy();

?>


<html>
	<head><title>QuickSign</title>
	
	<style>
	
	input[type=submit] {
    width: 50%;
    background-color: blue;
    color: yellow;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

	h1 {
	
	color: blue;
	
	}
	
	</style>
	
	</head> 
	
	<body>
	
	<div align="left"></div>
	<br />
	<br />
	<br />
	
	<div align="center">
	<h1>QuickSign</h1>
	<br />
	<br />
	
	<form action="login.php" Method= "post">
	<input type="submit" value="Sign in Guest">
	
</form>
</body>
</html>