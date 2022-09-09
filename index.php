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
<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header">
<div class="slider-inner">

<div class="swiper-container swiper-parent">
<div class="swiper-wrapper">
<div class="swiper-slide dark">
<div class="container">
<div class="slider-caption slider-caption-center">
<h2 data-animate="fadeInUp">Medlife</h2>
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
<section class="mt-0 p-5 section_search container-fluid">
    <h2 style="color:beige">Call us on 12345 Or Book online from here <i class="icon-hand-down"></i></h2>
    <div class="container m-auto">
        <form method="post" action="search-labs.php">
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <select class="form-select" name="lab" id="floatingSelectGrid" aria-label="Floating label select example">
                            <option value="" selected="selected">Select Lap</option>
                        </select>
                        <label for="floatingSelectGrid">Lab</label>
                    </div>
                    </div>
                <div class="col-md">
                    <div class="form-floating">
                    <select class="form-select" name="governerate" id="floatingSelectGrid1" aria-label="Floating label select example">
                        <option value="" selected="selected" >select Governerate</option>
                    </select>
                    <label for="floatingSelectGrid">Governerate</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <select class="form-select" name="area" id="floatingSelectGrid2" aria-label="Floating label select example">
                            <option value="" selected="selected">Select area</option>

                        </select>
                        <label for="floatingSelectGrid">AREA</label>
                    </div>
                    </div>
             <?php include('ta7lelnames.php')?>
                </div>
                <div class="col-12 mt-2 d-grid gap-2">
                    <input class="p-2 text-primary btn btn-warning" type="submit" value="Search" name="search">
                </div>
                
        </form>
    </div>
    

</section>
    </div>
</section>
<section class="container-fluid service" style="background-color: rgb(238, 240, 242); padding:0 0 100px 0;">
    <div class="pt-3 offers fancy-title title-center title-border topmargin">
        <h3>Our Service
        </h3>
    </div>

    <div class="main-service">
            <div class="hvr-curl-top-left">
                <img src="images/results.png" alt="">
                <div class="klam">
                <h3 style="margin-bottom: 5px;">Call us</h3>
                <h4>you can get results fast as u can here from online or by calling us on 12345.</h4>
            </div>
            </div>
            <div  class="hvr-curl-top-left">
                <img src="images/e-service.png" alt="">
                <div class="klam">
                <h3 style="margin-bottom: 5px;">Results</h3>
                <h4>We can help you to reserve online to any lab you want.</h4>
            </div>
            </div>
            <div   class="hvr-curl-top-left">
                <img src="images/house-visit.png" alt="">
                <div class="klam">
                <h3 style="margin-bottom: 5px;" >House call</h3>
                <h4>We can come home and make the anaylsis there too. </h4>
            </div>
            </div>
        </div>
</section>
<div class="mt-5 offers fancy-title title-center title-border topmargin">
    <h3>Our Offers
    </h3>
    </div>
    <div id="oc-images" class="container owl-carousel image-carousel carousel-widget" data-items-xs="2" data-items-sm="3" data-items-lg="4" data-items-xl="5">
    <?php
            $sql = "SELECT * FROM offers as o LEFT OUTER JOIN analysis as s on o.id = s.id LIMIT 8";
            $result = mysqli_query($connection, $sql);
            
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
           ?>
            <div class="oc-item">
            <a href="booking.php?id=<?php echo $row['id']?>"><img src="<?php echo $row['picture'];?>" height="80px" alt="Image 1"></a>
            <h4 style="margin-bottom: 1px; margin-top:10px;"><?php echo $row['analysis_name'];?></h4>
            <div class="row">
              <div class="col-5">
            <p><?php echo $row['m3mal_name'];?></p></div>
            <div class="col-7">
            <p><?php echo $row['discount'];?> <strike class="me-2"><?php echo $row['price'];?></strike></p>
            </div>
            </div>
        </div>
            <?php
     }
            
    }
            ?>

    

    </div>
    <section style="margin-top:100px; background-color: rgb(238, 240, 242); padding:0px 0 100px 0;">
<div class="mt-5 pt-4 packages fancy-title title-center title-border topmargin">
    <h3>Our Packages
    </h3>
    </div>
    <div id="oc-images" class="container owl-carousel image-carousel carousel-widget" data-items-xs="2" data-items-sm="3" data-items-lg="4" data-items-xl="5">

    <?php
            $sql = "SELECT * FROM packages LIMIT 8";
            $result = mysqli_query($connection, $sql);
            
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
           ?>
            <div class="oc-item">
            <a href="#"><img src="<?php echo $row['image'];?>" height="80px" alt="Image 1"></a>
            <h4 style="margin-bottom: 0;"><?php echo $row['name'];?></h4>
            <p><span class="me-5"><?php echo $row['m3mal_name']?></span> <?php echo $row['price'];?></p>
        </div>
            <?php
     }
            
    }
            ?>
    

    </div>
</section>

<div class="fancy-title labs-anaylsis title-center title-border topmargin">
<h3>Our labs
</h3>
</div>
<div id="oc-images" class="container owl-carousel image-carousel carousel-widget" data-items-xs="2" data-items-sm="3" data-items-lg="4" data-items-xl="5">

    <div class="oc-item mt-5">
        <a href="mokhtabar.php"><img src="images/mokh-logo.png" height="80px" alt="Image 1"></a>
    </div>
    <div class="oc-item">
        <a href="elborg.php"><img src="images/elborg-logo.png" height="150px" alt="Image 2"></a>
    </div>
    <div class="oc-item">
        <a href="alfa.php"><img src="images/alfa-logo.png" height="150px" alt="Image 3"></a>
    </div>
    <div class="oc-item mt-5">
        <a href="nile.php"><img src="images/nile-logo.png" height="100px" alt="Image 4"></a>
    </div>
    <div class="oc-item">
        <a href="cairo.php"><img src="images/cairo-logo.png" height="150px" alt="Image 5"></a>
    </div>  

</div>

<section class="w-100">
    <div class="bgimg mt-5">
        <div class="topleft">
          <p>Logo</p>
        </div>
        <div class="middle">
          <h1>COMING SOON</h1>
          <hr>
          <p id="demo" style="font-size:30px"></p>
        </div>
        <div class="bottomleft">
          <p>Some text</p>
        </div>
      </div>
</section>


<?php include("footer.php")?>
<script src="js/script.js"></script>
