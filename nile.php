<?php
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="SemiColonWeb" />

<!-- Stylesheets
============================================= -->
<link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="css/hover.css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="css/dark.css" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="css/swiper.css" type="text/css" />
<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
<link rel="stylesheet" href="css/animate.css" type="text/css" />
<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

<link rel="stylesheet" href="css/custom.css" type="text/css" />
<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Document Title
============================================= -->
<title>titles</title>
<style>

.revo-slider-emphasis-text {
    font-size: 58px;
    font-weight: 700;
    letter-spacing: 1px;
    font-family: 'Poppins', sans-serif;
    padding: 15px 20px;
    border-top: 2px solid #FFF;
    border-bottom: 2px solid #FFF;
}

.revo-slider-desc-text {
    font-size: 20px;
    font-family: 'Lato', sans-serif;
    width: 650px;
    text-align: center;
    line-height: 1.5;
}

.revo-slider-caps-text {
    font-size: 16px;
    font-weight: 400;
    letter-spacing: 3px;
    font-family: 'Poppins', sans-serif;
}

.tp-video-play-button { display: none !important; }

.tp-caption { white-space: nowrap; }

</style>

</head>
<body class="stretched">

<div id="wrapper" class="clearfix">

<?php
include("header.php");
?>
<section id="slider" class="slider-element h-auto" style="background-color: #222;">
    <div class="slider-inner">

        <div class="owl-carousel carousel-widget" data-margin="0" data-items="1" data-pagi="false" data-loop="true" data-animate-in="rollIn" data-speed="450" data-animate-out="rollOut" data-autoplay="5000">

            <a href="#"><img src="images/slider/full/1.jpg" alt="Slider"></a>
            <a href="#"><img src="images/slider/full/2.jpg" alt="Slider"></a>
            <a href="#"><img src="images/slider/full/3.jpg" alt="Slider"></a>
            <a href="#"><img src="images/slider/full/4.jpg" alt="Slider"></a>

        </div>

    </div>
</section>

<section id="content">
    <div class="content-wrap">
    <div class="container clearfix">
        
            <h2>Nile lab</h2>
            <p style="color:#000;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur quae sit inventore eos, maxime, in accusamus labore ad animi sint assumenda facere, omnis tempora non. Aliquid minima non reiciendis ipsam veritatis ab facilis quis expedita, ducimus inventore velit nam rerum quidem necessitatibus maxime, qui amet? Nisi iure iusto accusamus vero!</p>
            <p style="color:#000;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo sint vel delectus cupiditate in. Iure incidunt cum quasi facilis quos? Quia repellendus cum porro in necessitatibus asperiores aspernatur quasi illum, iste, mollitia qui dicta! Aperiam ullam id debitis et rem corporis temporibus explicabo iste? Consectetur repellendus molestiae harum inventore commodi?</p>
            <p style="color:#000;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo sint vel delectus cupiditate in. Iure incidunt cum quasi facilis quos? Quia repellendus cum porro in necessitatibus asperiores aspernatur quasi illum, iste, mollitia qui dicta! Aperiam ullam id debitis et rem corporis temporibus explicabo iste? Consectetur repellendus molestiae harum inventore commodi?</p>
        
        
    
    </div>
    </div>
 
    </section><!-- #content end -->


    <?php include("footer.php")?>