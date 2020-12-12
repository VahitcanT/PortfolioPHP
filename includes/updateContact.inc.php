<?php

include 'autoloader.inc.php';

$name=$_POST["name"];
$number=$_POST["number"];
$email=$_POST["email"];


if(empty($name) || empty ($number) || empty ($email)){
  header('Location: ../panel.php?update=failed&error=empty');
  exit();
}
else{
  $contact = new Contact();
  if ($contact ->updateContactDetail($name,$number,$email)) {
    header("LOCATION: ../panel.php?update=success");
    exit();
  }
  else{
    header("LOCATION: ../panel.php?update=failed&error=dbError");
    exit();
  }

}

?>