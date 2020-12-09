<?php
    //auto load the classes
    include 'includes/autoloader.inc.php';
?>

<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sign.css">
</head>

<body>
    <div class="signbox">
        <h1>Sign Up</h1>
        <form name="SignForm" action="includes/signupusers.inc.php" method="POST">
            <p>Username</p>
            <input type="text" name="name" id="name" placeholder="Enter Name">
            <p>Email</p>
            <input type="email"  name="email" id="email" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" name="pwd" id="pwd" placeholder="Enter Password">
            <input type="submit" name="sign" value="Sign Up" onclick="return valRegister('errormsg','name','pwd','email')">
            <a href="login.php">Already have an account?</a>
            <p id="errormsg"></p>
        </form>
        <br>
        <?php 
            if(isset($_GET['error'])){
                if($_GET['error'] == 'empty'){
                    echo '<p> Please confirm all the information </p>';
                }
                if($_GET['error'] == 'existingAccount'){
                    echo '<p> User already exists </p>';
                }
                
            }

        ?>
    </div>
    <script src="js/validation.js"></script>
</body>

</html>