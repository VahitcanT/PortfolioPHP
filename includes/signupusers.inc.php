<?php

	include 'autoloader.inc.php';

	
	
	//get all info from form
	$name = $_POST['name'];
	$email  = $_POST['email'];
	$pwd  = $_POST['pwd'];
	$hashPwd = password_hash($pwd, PASSWORD_DEFAULT);
	
	$user = new Signup($name,$email,$hashPwd);
	
	if(empty($name) || empty ($pwd) || empty ($email)){
			header('Location: ../sign.php?signup=failed&error=empty');
			exit();
	}

	

	else{
		$existingAccount = new Login($email,$pwd);
		if ($existingAccount ->CheckCredentials()) {
			header("LOCATION: ../sign.php?signup=failed&error=existingAccount");
			exit();
		}

		if( $user->signIntoDatabase()){
			header("LOCATION: ../login.php?signup=success");
			exit();
		}
		else
		{
			header("LOCATION: ../sign.php?signup=failed");
			exit();
		}
	}
	