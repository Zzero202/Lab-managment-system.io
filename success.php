<?php
    ob_start();
    include("connection.php");
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
include("header.php")?>
<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header">
<div class="slider-inner">

<div class="swiper-container swiper-parent">
<div class="swiper-wrapper">
<div class="swiper-slide dark">
<div class="container">
<div class="slider-caption slider-caption-center">
<h2 data-animate="fadeInUp">Name of the company</h2>
<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia esse consectetur non qui minima nam dolore iusto sed! Quibusdam, amet!</p>
<a data-animate="fadeInUp" href="search-labs.php" class="mx-auto mt-sm-2 d-sm-block button button-rounded button-reveal button-large button-circle text-end"><i class="icon-angle-right"></i><span>BOOK NOW !</span></a>
</div>
</div>
<div class="swiper-slide-bg" style="background-image:linear-gradient(to right,rgba(0,0,0,0.5),rgba(5, 168, 255,0.7)), url('images/slider/swiper/slider1-home.jpg');"></div>
</div>
<div class="swiper-slide dark">
<div class="container">
<div class="slider-caption slider-caption-center">
<h2 data-animate="fadeInUp">Beautifully Flexible</h2>
<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
<a data-animate="fadeInUp" href="search-labs.php" class="mx-auto mt-sm-2 d-sm-block button button-rounded button-reveal button-large button-circle text-end"><i class="icon-angle-right"></i><span>BOOK NOW !</span></a>
</div>
</div>
<div class="video-wrap">
<video id="slide-video" poster="images/videos/explore-poster.jpg" preload="auto" loop autoplay muted>
<source src='images/videos/labs-video.mp4' type='video/webm' />
<source src='images/videos/labs-video.mp4' type='video/mp4' />
</video>
<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
</div>
</div>
<div class="swiper-slide">
<div class="container">
<div class="slider-caption">
<h2 data-animate="fadeInUp">Great Performance</h2>
<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
<a data-animate="fadeInUp" href="search-labs.php" class="me-auto mt-sm-2 d-sm-block button button-rounded button-reveal button-large button-circle text-end"><i class="icon-angle-right"></i><span>BOOK NOW !</span></a>
</div>
</div>
<div class="swiper-slide-bg" style="background-image: url('images/slider/swiper/slider2.jpg'); background-position: center top;"></div>
</div>
</div>
<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
</div>

<a href="#" data-scrollto="#content" data-offset="100" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

</div>
</section>
<section id="content">
    <div class="content-wrap">
        <div class="container success_reserve">
 <?php
 include("connection.php");
 session_start();
 
 $date = "";
 if(!empty($_SESSION['date'])){
 if(isset($_SESSION['date'])){
    $date = $_SESSION['date'];
    $sql = "SELECT * FROM booking_patient WHERE date='$date'";
    $result =mysqli_query($connection,$sql);
    $row = mysqli_fetch_assoc($result);
    echo "<h1>" . $_SESSION['first'] . " " . $_SESSION['second'] . " Your place has been Reserved at  " . "<br>" . $_SESSION['date'] . "<br>" . "your ID is : " . $row['id'] ;
   
 }
    
}
 ?>
 <a class="menu-link" href="index.php?home='1'"><div style="letter-spacing: 1px;">Back_home</div></a>
</div>
  
    </div>
</section>



<?php include("footer.php")?>
<script src="js/script.js"></script>
<?php
    ob_end_flush();
?>