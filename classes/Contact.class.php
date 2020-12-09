<?php
class Contact extends dbh{

  public function getContactDetail(Type $var = null)
  {
    $sql = 'SELECT * FROM contact WHERE id=1;';
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$this->NameOrEmail,$this->NameOrEmail]);
    $row = $stmt->fetch();	
    return $row;
  }
  
}



?>