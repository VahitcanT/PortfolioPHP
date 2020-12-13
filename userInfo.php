<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/admin.css" />
    <!-- iconlar -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@500;700&family=Lobster&display=swap"
        rel="stylesheet" />
</head>
<body>
<?php include 'navbar.php';?>
<?php include 'infoUpdate.php';?>
<?php
$message="";
    if (isset($_GET["update"])) {
      
      if ($_GET["update"]=="success") {
        $message="Updated succesfully";
      }
      if ($_GET["update"]=="failed") {
        $message=$_GET["error"];
      }
    }
    echo($message);
    ?>
<script src="js/validation.js"></script>
</body>
</html>