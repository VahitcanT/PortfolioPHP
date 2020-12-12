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
  public function CardSelect()
  {
    $sql="select * from slide;";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();

    $rows = array();
    while ($row=$stmt->fetch()) { // For each row
      array_push($rows,$row);
  }
    return $rows;
  }

}

  
  



?>

?>