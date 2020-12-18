<?php
session_start();
include 'includes/autoloader.inc.php';
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
                    <?php
                    $slideObj=new Slide(0,"","","");
      
                    $slides=$slideObj->CardSelect();
              
                    foreach ($slides as $key => $value) {
                      echo('<div class="slide-item">');
                      echo('<div class="card">');
                      echo('<img src="images/'.$value['image'].'" class="card-img" alt="..."
                        style="filter: contrast(20%);">');
                      echo('<div class="card-img-overlay">');
                      echo('<h5 class="card-title display-3">'.$value['title'].'</h5>');
                      echo('<p class="card-text display-4 pt-3">'.$value['text'].'</p>');

                      echo('</div>');
                      echo('</div>');
                      echo('</div>');
                    }                   
                    
                    ?>
                </div>
            </div>
        </div>
        <!-- form -->

        <?php
            if ($_SESSION["Name"]) {
                include 'message.php';
            }
            ?>
    </main>
    <?php
    include 'footer.php';
    ?>
    
   <!--  <div class="intro">
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
    <div class="slider"></div> -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="js/tiny.js"></script>
    <!-- <script src="js/gsap.js"></script> -->
    <script src="js/index.js"></script>
    <script src="js/validation.js"></script>
</body>

</html>