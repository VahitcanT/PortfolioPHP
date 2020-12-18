
<div class="table">
    <div>
        <h1>Update UserInfo</h1>
        <form name="SignForm" action="includes/updateUserInfo.inc.php" method="POST">
        <div class="table">
        <div>
            <p>Username</p>
            <input type="text" name="userName" id="userName" placeholder="Enter Name" value="<?php echo($_SESSION['Name']);?>">
            <p>Email</p>
            <input type="email"  name="userEmail" id="userEmail" placeholder="Enter Email"  value="<?php echo($_SESSION['Email']);?>">
            <p>Password</p>
            <input type="password" name="userPwd" id="userPwd" placeholder="Enter Password"> 
            <input type="submit" name="sign" value="Update" onclick="return valRegister('errormsgupdate','userName','userEmail','userPwd')">
            </div></div>
            <p><?php
            function secondsToTime($seconds) {
                $dtF = new \DateTime('@0');
                $dtT = new \DateTime("@$seconds");
                return $dtF->diff($dtT)->format('%a days, %h hours, %i minutes and %s seconds');
            }
            $timePassed=strtotime(date("Y-m-d H:i:s"))-strtotime($_SESSION["pwdUpdateDate"]);
            $timeLeft=60*60*24*365-$timePassed;
            if ($timeLeft<0) {
                echo("Password time passed, please update password");
            }
            else{
                  echo("Time left to update password: ".secondsToTime($timeLeft)."<br>");

              }
            ?></p><br>
        </form>
            <p id="errormsgupdate"></p>
    
</div>
</div>