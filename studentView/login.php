<html>
	<head>
	
		<title>Quick Swipe Login</title>
	
		<style>
		
		html {
			background: url("dragon.jpg") no-repeat center center fixed;
			background-size: cover;
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
		
		input[type=text], select {
			padding: 12px 20px;
			margin: 8px auto;
			text-align: center;
			position: relative;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		input[type=password], select {
			padding: 12px 20px;
			margin: 8px auto;
			text-align: center;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=submit] {
			text-align: center;
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

		#text {
			text-align: center;
			font-size: 24px;
			border-radius: 10px;
			background-color: rgba(9,47,98,.9);
			width: 55%;
			height: 55%;
			margin: 0 auto;
			color: FFC600;
		}
		
		#policy {
			font-size: 18px;
			font-style: italic;
			text-align: left;
			margin: 5%;
		}
		
		#bottom {
			text-align: right;
			background-color: FFC600;
			width: 100%;
			height: 120px;
			position: absolute;
			bottom: 1;
			left: 0;
		}
		
		#logo {
			margin: 0.55%;
		}
		
		</style>
	
	</head> 
	
	<body>
	
		<h1> Quick Swipe </h1>
  	
		<div id="text">
			<br />
			<form action="signInChecker.php" Method= "post">
		
				<label for="username">Username</label> <br />
				<input style="text-align: center;" type="text" id="username" name="username" placeholder="Username">
			<br />
		
				<label for="password">Password</label><br />
				<input type="password" id="password" name="password" placeholder="Password">
			<br />
				<input type="submit" value="Sign In">
		
			</form>
			
			<p id="policy"> Drexel guest policy can be found in the Student Handbooko n page 22 and all guests are subject to dorm policies. Click the handbook below to view the Drexel Student Handbook.</p>
			<a href="http://drexel.edu/~/media/Files/studentlife/sccs/student-handbook-2016-17.ashx?la=en"><img src="http://drexel.edu/~/media/Images/studentlife/SCCS/Student%20Handbook%20Cover.ashx?h=235&w=175&la=en&hash=51371AAE92D65DFE2F1A15CF8604EC76791BB9FC" alt="Student Handbook" height="100" width="80"></img></a>
		
		</div>
		
		<footer id="bottom">
			<img src="Drexel_horizontal_blue.png" alt="Drexel University" id="logo" height="100" width="400"></img>
		</footer>
		
	</body>
	
</html>