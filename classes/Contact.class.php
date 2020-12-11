<?php
class Contact extends dbh{

  public function getContactDetail()
  {
    $sql = 'SELECT * FROM contact WHERE id=1;';
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    $row = $stmt->fetch();	
    return $row;
  }
  
}



?>