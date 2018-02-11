<?php 
	session_start();
 ?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

	<form action = "login.php" method="POST">
		<input type= "text" name="uid" placeholder="UserName"><br>
		<input type= "password" name="pwd" placeholder="Password"><br>
		<button type = "submit">Login</button>
	</form>

	<?php 
		if (isset($_SESSION['id'])) {
			echo $_SESSION['id'];
		}else{
			echo "You are not logged in!";
		}
	 ?>
	 <br><br><br>
	<form action = "signup.php" method="POST">
		<input type= "text" name="first" placeholder="FirstName"><br>
		<input type= "text" name="last" placeholder="LastName"><br>
		<input type= "text" name="uid" placeholder="UserName"><br>
		<input type= "password" name="pwd" placeholder="Password"><br>
		<button type = "submit">SIGN UP</button>
	</form>

	<br><br><br>
	<form action = "logout.php">
		<button>Log Out</button>

	</form>


</body>
</html>