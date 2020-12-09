<?php
session_start();
?>

<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/card.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/tiny.css" />
    <!-- iconlar -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@500;700&family=Lobster&display=swap"
        rel="stylesheet" />
    <title>Borga's Portfolio</title>
</head>

<body>
    <main>
        <div class="landing" style="background: url('./images/hero.jpg') no-repeat center; background-size: cover;">
        
        <?php include 'navbar.php';?>

        
    
            <h2 class="big-text">Borga's Portfolio</h2>
        </div>
        <div class="alt">
            <h2 class="baslik">
                My Skills
            </h2>
            <p class="yazi">Hello I am a software engineer with 5 years of experience and I have did many projects back in Turkey and now I'm studying in Netherlands.</p>
            <!--  -->
            <div class="fiyu-fiyu">
                <div class="my-slider">
                    <div class="slide-item">
                        <!-- cart -->
                        <div class="card">
                            <img src="images/html5-icon-13.jpg" class="card-img" alt="..."
                                style="filter: contrast(20%);">
                            <div class="card-img-overlay">
                                <h5 class="card-title display-3">C++</h5>
                                <p class="card-text display-4 pt-3">I have more than 5 years of C++ experience and made many projects</p>
                            </div>
                        </div>
                        <!-- cart -->
                    </div>
                    <div class="slide-item">
                        <!-- cart -->
                        <div class="card">
                            <img src="images/css.webp" class="card-img" alt="..." style="filter: contrast(20%);">
                            <div class="card-img-overlay">
                                <h5 class="card-title">C#</h5>
                                <p class="card-text">I have learned C# after 3 years ago and I have been tutoring students online all around the world</p>
                            </div>
                        </div>
                        <!-- cart -->
                    </div>
                    <?php
                    
                    
                    ?>
                    <div class="slide-item">
                        <!-- cart -->
                        <div class="card">
                            <img src="images/flutterlogo.png" class="card-img" alt="..." style="filter: contrast(20%);">
                            <div class="card-img-overlay">
                                <h5 class="card-title">JavaScript</h5>
                                <p class="card-text">I have learned JavaScript after learning C++ and been making front end parts of company websites</p>
                            </div>
                        </div>
                        <!-- cart -->
                    </div>
                    <div class="slide-item">
                        <!-- cart -->
                        <div class="card">
                            <img src="images/flutterlogo.png" class="card-img" alt="..." style="filter: contrast(20%);">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Gaming</h5>
                                <p class="card-text">I was a professional gamer and played in tournaments and have done some streaming</p>
                            </div>
                        </div>
                        <!-- cart -->
                    </div>
                    <div class="slide-item">
                        <!-- cart -->
                        <div class="card">
                            <img src="images/flutterlogo.png" class="card-img" alt="..." style="filter: contrast(20%);">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Leadership</h5>
                                <p class="card-text">Mostly I have been choosen leader of the project groups and developed a skill. Now I can easily manage a project and make everything goes according to plan</p>
                            </div>
                        </div>
                        <!-- cart -->
                    </div>
                </div>
            </div>
        </div>
        <!-- form -->
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
                    <p id='errormsg'></p>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer fiyu-fiyu" style="color: white;">
            <div class="sol">
            </div>
            <div class="orta">
            <?php
        include 'includes/autoloader.inc.php';
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
    <div class="intro">
        <div class="intro-text">
            <h1 class="hide">
                <span class="text">Welcome</span>
            </h1>
            <h1 class="hide">
                <span class="text">To My</span>
            </h1>
            <h1 class="hide">
                <span class="text">Portfolio</span>
            </h1>
        </div>
    </div>
    <div class="slider"></div>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="js/tiny.js"></script>
    <script src="js/gsap.js"></script>
    <script src="js/index.js"></script>
    <script src="js/validation.js"></script>
</body>

</html>