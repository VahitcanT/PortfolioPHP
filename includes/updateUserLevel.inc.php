<?php
include 'autoloader.inc.php';

$userID=$_POST["users"];
$userLevel=$_POST["userLevel"];

$user=new InfoUpdate($userID,"","","");

if ($user->updateUserLevel($userLevel)) {
  header("Location: ../panel.php?update=success");
}
else{
  header("Location: ../panel.php?update=failed&error=dbError");
}

?>