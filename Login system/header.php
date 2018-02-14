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
	<header>
		<nav>
			<ul>
				<li><a href="index.php">HOME</a></li>

				<?php 
					if (isset($_SESSION['id'])) {
						echo "<form action = 'includes/logout.inc.php'>
						<button>Log Out</button>
						</form>";

					}else{
						echo "<form action = 'includes/login.inc.php' method='POST'>
							<input type= 'text' name='uid' placeholder='UserName'>
							<input type= 'password' name='pwd' placeholder='Password'>
							<button type = 'submit'>Login</button>
							</form>";
					}

				 ?>
				<li><a href="signup.php">SIGNUP</a></li>
			</ul>
		</nav>
	</header>