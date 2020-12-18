
<div class="table">
    <div>

        <h1>Update UserInfo</h1>
        <form name="SignForm" action="includes/updateUserInfo.inc.php" method="POST">
        <p>Username</p>
        <input type="text" name="userName" id="userName" placeholder="Enter Name" value="<?php echo($_SESSION['Name']);?>">
        <p>Email</p>
        <input type="email"  name="userEmail" id="userEmail" placeholder="Enter Email"  value="<?php echo($_SESSION['Email']);?>">
        <p>Password</p>
        <input type="password" name="userPwd" id="userPwd" placeholder="Enter Password">
        <input type="submit" name="sign" value="Update" onclick="return valMessage('errormsgupdate','userName','userEmail','userPwd')">
        <p id="errormsgupdate"></p>
    </form>
    
</div>
</div>