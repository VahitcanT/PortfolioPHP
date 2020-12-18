<h2 class="baslik">Write to me!</h2>
        <div id="form-main">
            <div id="form-div">
                <form class="form" id="form1" action="includes/messageReceive.inc.php" method="POST">

                    <p class="name">
                        <input name="name" type="text" class="feedback-input" placeholder="Name" id="name" />
                    </p>

                    <p class="email">
                        <input name="email" type="text" class="feedback-input" id="email" placeholder="Email" />
                    </p>

                    <p class="text">
                        <textarea name="text" class="feedback-input" id="comment" placeholder="Comment"></textarea>
                    </p>


                    <div class="submit">
                        <input type="submit" value="SEND" id="button-blue" onclick="return valLogin('errormsg','email','comment')"/>
                        <div class="ease"></div>
                    </div>
                    <p id='errormsg' class="baslik"></p>
                </form>
            </div>
        </div>