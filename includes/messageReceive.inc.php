<?php
  include 'autoloader.inc.php';


  $name = $_POST['name'];
  $email = $_POST['email'];
  $comment=$_POST['text'];

  $message = new Message($name,$email,$comment);

  if(empty($name) || empty ($email) || empty($comment)){
    header('Location: ../index.php?messageStatus=failed&error=emptyMessage');
    exit();
  }{
    if ($message->messageFromClient()) {
      header("LOCATION: ../index.php?messageStatus=success");
			exit();
    }
    else{
      header('Location: ../index.php?messageStatus=failed&error=dbError');
      exit();
    }
  }

?>