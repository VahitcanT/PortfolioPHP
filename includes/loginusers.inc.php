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
		$info=$LoginObj->CheckInfo();
		
		if ($LoginObj->CheckRole()==-1) {
			header('Location: ../login.php?login=failed&error=userDisabled');
		}
		
		$_SESSION['id']=$info['ID'];
		$_SESSION['Name'] = $info['Name'];
		$_SESSION['Email'] = $info['Email'];
		$_SESSION["pwdUpdateDate"]=$info["pwdUpdateDate"];

		if($LoginObj->CheckRole()==1){
			$_SESSION["admin"]=true;
			header('Location: ../panel.php?login=success&name='.$NameOrEmail);

		}else{

			header('Location: ../index.php?login=success&name='.$NameOrEmail);
		}
		exit();
		}
		else 
		{

		header('Location: ../login.php?login=failed&error=wrongInfo');
		exit();
		}
	}
	
}
else
{
header('Location: ../login.php');
		exit();

}