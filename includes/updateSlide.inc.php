<?php

include 'autoloader.inc.php';

$slideID=$_POST["slideID"];
$slideTitle=$_POST["slideTitle"];
$slideText=$_POST["slideText"];
$slideImage=$_POST["slideImage"];


if(empty($slideID) || empty ($slideTitle) || empty ($slideText) || empty ($slideImage)){
  header('Location: ../panel.php?update=failed&error=empty');
  exit();
}
else{
  $contact = new Slide($slideID,$slideTitle,$slideText,$slideImage);
  if ($contact ->CardUpdate()) {
    header("LOCATION: ../panel.php?update=success");
    exit();
  }
  else{
    header("LOCATION: ../panel.php?update=failed&error=dbError");
    exit();
  }

}
?>