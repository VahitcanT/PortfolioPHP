<?php
class InfoUpdate extends dbh {
  private $id;
  private $name;
  private $email;
  private $pwd;

  function __construct(int $id,string $name,string $email , string $pwd){
    $this->id = $id;
    $this->name = $name;
    $this->email = $email;
    $this->pwd = $pwd;
  }

  public function updateCredentials()
  {
    $sql="update users set name=?, email=?, password=? where id=?;";
    $stmt = $this->connect()->prepare($sql);
			if($stmt->execute([$this->name,$this->email,$this->pwd,$this->id])){
				return true;
			}
			return false;
  }
  public function checkExisting()
		{
			$sql = 'SELECT * FROM users WHERE ID!=? and (name=? or email=?);';
			$stmt = $this->connect()->prepare($sql);
			$stmt->execute([$this->id,$this->name,$this->email]);
      $number_of_rows = $stmt->fetchColumn(); 
      if ($number_of_rows==0) {
        return true;
      }
      return false;
    }
    public function updateUserLevel($level)
    {
      $sql="update users set userlevel=? where id=?;";
      $stmt = $this->connect()->prepare($sql);
			if($stmt->execute([$level,$this->id])){
				return true;
			}
			return false;
    }
}


?>