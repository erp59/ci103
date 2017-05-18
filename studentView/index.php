<?php

session_destroy();

?>


<html>
	<head><title>QuickSign</title>
	
	<style>
	
	html {
		background: url("dragon.jpg") no-repeat center center fixed;
		background-size: cover;
		}
	
	input[type=submit] {
		width: 50%;
		background: #092F62;
		color: FFC600;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		border-radius: 4px;
		cursor: pointer;
	}

	h1 {
		font-family: "PT Serif";
		font-size: 86px;
		text-align: center;
		text-shadow:
		-1px -1px 0 #092F62 ,
		1px -1px 0 #092F62 ,
		-1px 1px 0 #092F62 ,
		1px 1px 0 #092F62 ; 
		color: FFC600;
		margin: 2%;
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