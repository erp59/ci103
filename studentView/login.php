<html>
	<head><title>Quik Swipe Login</title>
	
	
	<style>
	
	input[type=text], select {
    width: 150%;
    padding: 12px 20px;
    margin: 0 auto;
	text-align: center;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	}
	
	input[type=password], select {
    width: 150%;
    padding: 12px 20px;
    margin: 8px 0;
	text-align: center;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	}

	input[type=submit] {
    width: 200%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	}

	input[type=submit]:hover {
    background-color: #45a049;
	}

	div {
	text-align: center;
    border-radius: 5px;
    background-color: f2f2f2;
    padding: 20px;
	width: 30%;
	margin: 0 auto;
	}
	
	body {
		background-image: url("dragon.jpg");
	}
	
	</style>
	
	</head> 
	
	<body>
	
  	
  	<div>
  	<h1> Quick Swipe </h1>
  	
  	
  	<div>
  	<form action="signInChecker.php" Method= "post">
  	
  	<label for="username">Username</label> <br />
    <input style="text-align: center;" type="text" id="username" name="username" placeholder="Username">
	<br />
	
    <label for="password">Password</label><br />
    <input type="password" id="password" name="password" placeholder="Password">
    <br />
    <input type="submit" value="Sign In">
  	
  	</form>
	</div>
  	
	</body>
	
</html>