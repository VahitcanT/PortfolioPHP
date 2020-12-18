<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="loginbox">
        <h1>Login</h1>
        <form name="LogInForm" action="includes/loginusers.inc.php" method="POST">
            <p>Username</p>
            <input type="text" name="NameOrEmail" id="NameOrEmail" placeholder="Enter Name or Mail">
            <p>Password</p>
            <input type="password" name="pwd" id="pwd" placeholder="Enter Password">
            <input type="submit" name="login" onclick="return valLogin('errormsg','NameOrEmail','pwd')">
            <a href="sign.php">Don't have an account?</a>
            <p id="errormsg"></p>
        </form>
        <br>
        <?php 
            if(isset($_GET['error'])){
                if($_GET['error'] == 'empty'){
                    echo '<p> Please fill in all the information </p>';
                }
                if($_GET['error'] == 'wrongInfo'){
                    echo '<p> User does not exist </p>';
                }
                if($_GET['error'] == 'userDisabled'){
                    echo '<p> User is disabled by admin </p>';
                }
            }
            

        ?>
    </div>
    <script src="js/validation.js"></script>
    
</body>

</html>