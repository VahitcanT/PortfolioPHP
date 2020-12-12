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

  public function updateContactDetail($name,$number,$email)
  {
    $sql="update contact set name=?, number=?, email=? where id=1;";
    $stmt = $this->connect()->prepare($sql);
			if($stmt->execute([$name,$number,$email])){
				return true;
			}
			return false;
  }
  
}



?>