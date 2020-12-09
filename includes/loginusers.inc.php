<?php
if (isset($_POST['login'])){
	include 'autoloader.inc.php';
	
	$NameOrEmail = $_POST['NameOrEmail'];
	$password = $_POST['pwd'];

	$LoginObj = new Login($NameOrEmail,$password);

	if(empty($NameOrEmail) || empty ($password)){
			header('Location: ../login.php?login=failed&error=empty');
			exit();
	}
	else
	{
		if($LoginObj->CheckCredentials()){

		session_start();
		$_SESSION['NameEmail'] = $NameOrEmail;

		if ($LoginObj->CheckRole()["userLevel"]==1) {
			$_SESSION["admin"]=true;
			header('Location: ../admin.php?login=success&name='.$NameOrEmail);
		}
		else{

			header('Location: ../index.php?login=success&name='.$NameOrEmail);
		}
		exit();
		}
		else 
		{

		header('Location: ../login.php?login=failed');
		exit();
		}
	}
	
}
else
{
header('Location: ../login.php');
		exit();

}