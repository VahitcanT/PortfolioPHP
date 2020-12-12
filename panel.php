<?php
session_start();
if (!isset($_SESSION["admin"])) {
  header('Location: index.php');
}
$message="";
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
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
  <section class="bilgi">
  <?php include 'navbar.php';?>
  <form name="LogInForm" action="includes/updateContact.inc.php" method="POST">
    <h1>Contact details</h1>
    <p>Name and Surname</p>
    <input type="text" name="name" id="name" placeholder="Name and Surname">
    <p>Number</p>
    <input type="text" name="number" id="number" placeholder="Number">
    <p>Email</p>
    <input type="text" name="email" id="email" placeholder="Email">
    <input class="buton" type="submit" name="login" onclick="return valMessage('errormsg','name','number','email')">

    <?php
    if (isset($_GET["update"])) {
      
      if ($_GET["update"]=="success") {
        $message="Contact detail updated succesfully";
      }
      if ($_GET["update"]=="failed") {
        $message=$_GET["error"];
      }
    }
    
    ?>
    <p id="errormsg"><?php echo($message);?></p>
  </form>

  <table>
    <tr>
      <th>Messages</th>
      <th>Name</th>
      <th>Email</th>
      <th>Comment</th>
    </tr>
    <?php
      include 'includes/autoloader.inc.php';
      
      $messageObj=new Message("","","");
      
      $messages=$messageObj->displayMessages();

      foreach ($messages as $key => $value) {
        echo("<tr>");
        echo("<td>".$value["id"]."</td>");
        echo("<td>".$value["name"]."</td>");
        echo("<td>".$value["email"]."</td>");
        echo("<td>".$value["comment"]."</td>");
        echo("</tr>");
      }
    
    ?>
  </table>
</section>
<script src="js/validation.js">

</script>
</body>


</html>