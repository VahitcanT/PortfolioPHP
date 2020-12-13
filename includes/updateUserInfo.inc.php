<?php
include 'autoloader.inc.php';

$userName=$_POST["userName"];
$userEmail=$_POST["userEmail"];
$userPwd=$_POST["userPwd"];

$location="userinfo.php";
session_start();
if (isset($_SESSION["admin"])) {
  $location="panel.php";
}


$updateObj=new InfoUpdate($_SESSION['id'],$userName,$userEmail,password_hash($userPwd, PASSWORD_DEFAULT));

if ($updateObj->checkExisting()) {
  $updateObj=new InfoUpdate($_SESSION['id'],$userName,$userEmail,password_hash($userPwd, PASSWORD_DEFAULT));
  if ($updateObj->updateCredentials()) {
    // successfully update
    $_SESSION['Name'] = $userName;
		$_SESSION['Email'] = $userEmail;
    header("Location: ../{$location}?update=success");
  }
  else{
    // failed to update
    header("Location: ../{$location}?update=failed&error=dbError");
  }
}
else{
  //user exists
  header("Location: ../{$location}?update=failed&error=userExists");
}
?>