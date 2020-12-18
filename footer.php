<footer>
        <div class="footer fiyu-fiyu" style="color: white;">
            <div class="sol">
            </div>
            <div class="orta">
            <?php
        
        $ContactObj=new Contact();
        $info=$ContactObj->getContactDetail();
        foreach ($info as $key => $value) {
            if ($key=="id") {
                continue;
            }
            echo("<p>".$value."</p>");
        }
        
        ?>
            </div>
            <div class="sag">
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>