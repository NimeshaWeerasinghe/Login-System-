<?php 
	session_start();
	include 'dbh1.php';
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];	

	$sql = "SELECT *FROM newuser WHERE uid='$uid' AND pwd = '$pwd'";
	$result = $conn->query($sql);

	if (!$row = $result->fetch_assoc()) {
			echo "Your UserName or Password is Incorrect!";
	}else{
		//echo "Your are logged in!";
		$_SESSION['id'] = $row['id'];
	}

	header("Location: index.php"); 