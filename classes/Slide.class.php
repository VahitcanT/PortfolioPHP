<?php
class Slide extends dbh{

  private $title;
  private $text;
  private $image;

  function __construct(string $title , string $text,string $image){
    $this->title = $title;
    $this->text = $text;
    $this->image = $image;
  }

  public function CardUpload()
  {
    $sql = 'insert into slide (title,text,image) values (?,?,?);';
    $stmt = $this->connect()->prepare($sql);
    
    if($stmt->execute([$this->title,$this->text,$this->image])){
      return true;
    }
    return false;
  }

  
  
}



?>

?>