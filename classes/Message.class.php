<?php

class Message extends dbh {
  private $name;
  private $email;
  private $message;

  function __construct(string $name , string $email,string $message){
    $this->name = $name;
    $this->email = $email;
    $this->message = $message;
  }
  
  public function messageFromClient()
  {
    $sql = 'insert into messages (name,email,comment) values (?,?,?);';
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$this->name,$this->email,$this->message]);
    if($stmt->execute([$this->name,$this->email,$this->message])){
      return true;
    }
    return false;
  }
  public function displayMessages()
  {
    $sql="select * from messages;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetch();
    return $rows;
  }

}

?>