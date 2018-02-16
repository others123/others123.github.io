<?php 
/* Process of user login, check if user exists and password is correct */

// Escape username to protect against SQL injection
$username = $mysqli->escape_string($_POST['username']);
$authenticate = $mysqli->query("SELECT * FROM tb_accounts WHERE acc_username ='$username'");


if($authenticate->num_rows == 0) { // If user is doesn't exist 
	header("location: userLogin.php?error=username");
	}
else { // if account is exist 



	$user = $authenticate->fetch_assoc();

	if (password_verify($_POST['password'], $user['acc_pass'])) {

		// To know wether the user is logged in 
		$_SESSION['logged_in'] = true;
		header("location: HC/Dashboard.php");
	}
	else {
		$_SESSION['message'] = "You have entered wrong password !";
		 header("location: userLogin.php?error=username");
	}
	
	}



?>