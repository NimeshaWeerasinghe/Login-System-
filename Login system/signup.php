<?php 
	include 'header.php';
 ?>

	<?php 
		$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		if (strpos($url, 'error=empty') !==false) {
			echo "Fill out all fields!";
		}


		if (isset($_SESSION['id'])) {
			echo "<p class='pCenter'>Hi there user!</p>";
		}else{
			echo "<p class='pCenter'>You are not logged in!</p>";
		}
	 ?>
	 <br><br><br>
	 <?php  
	 	if (isset($_SESSION['id'])) {
	 		echo "<p class='pCenter'>You are alrady logged in!</p>";
		
		}else{
			echo "<form action  = 'includes/signup.inc.php' method='POST'>
				<input type= 'text' name='first' placeholder='FirstName'><br><br>
				<input type= 'text' name='last' placeholder='LastName'><br><br>
				<input type= 'text' name='uid' placeholder='UserName'><br><br>
				<input type= 'password' name='pwd' placeholder='Password'><br><br>
				<button type = 'submit'>SIGN UP</button>
				</form>";
			}
		?>
	</body>
</html> 