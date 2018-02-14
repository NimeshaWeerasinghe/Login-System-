<?php 
	session_start();
	include '../dbh1.php';
	
	$first = $_POST['first'];
	$last = $_POST['last'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];	

 // echo $first."<br>";
 // echo $last."<br>";
 // echo $uid."<br>";
 // echo $pwd."<br>"; 
	if(empty($first)){
		header("Location: ../signup.php?error=empty"); 
		exit();
	}

	if(empty($last)){
		header("Location: ../signup.php?error=empty"); 
		exit();
	}

	if(empty($uid)){
		header("Location: ../signup.php?error=empty"); 
		exit();
	}
		
	if(empty($pwd)){
		header("Location: ../signup.php?error=empty"); 
		exit();

	}else{
		$sql= "SELECT uid FROM newuser WHERE uid = '$uid'";
		 $result = $conn->query($sql); 
		 $uidcheck = mysqli_num_rows($result);

		if ($uidcheck > 0) {
			header("Location: ../signup.php?error=username"); 
				exit();
		}

		$sql = "INSERT INTO newuser (first, last, uid, pwd)
		VALUES ('$first','$last','$uid' , '$pwd')";
		$result = $conn->query($sql); 

		header("Location: ../index.php"); 
	}

	