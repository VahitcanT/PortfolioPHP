<!DOCTYPE html>
<html>
<head>
    <title>Insert Image in MySql using PHP</title>
</head>
<body>
<?php
include 'includes/autoloader.inc.php';
if (isset($_POST["btn-upload"])) {
    $title=$_POST["title"];
    $text=$_POST["text"];

    $images=$_FILES["image"]["name"];
    $tmp_dir=$_FILES["image"]["tmp_name"];
    $imageSize=$_FILES["image"]["size"];

    $upload_dir="images/";
    $imgExt=strtolower(pathinfo($images,PATHINFO_EXTENSION));
    $picProfile=time()."_".$images;
    move_uploaded_file($tmp_dir,$upload_dir.$picProfile);

    $cardObj=new Slide($_POST["title"],$_POST["text"],$picProfile);

    $cardObj->CardUpload();

}
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="title" id="title" value="asd title">
    <br>
    <input type="text" name="text" id="text" value="asd text">
    <br>
    <input type="file" name="image" />
    <br>
    <button name="btn-upload">Upload</button>
</form>

</body>
</html> 