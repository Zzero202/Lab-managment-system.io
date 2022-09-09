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
<section class="container slider-offers">
<div id="carouselExampleSlidesOnly" class="mt-5 mb-5 carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/1579700760_Home_Banner50-80.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/1600096653953.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/1581428022_Home_Basdfnner.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
</section>
<section id="content">
    <div class="content-wrap pb-0">
        <div class="container">
  <div class="fancy-title title-center title-border topmargin">
    <h3>Trending Packages</h3>
</div>

<div id="oc-posts" class="owl-carousel posts-carousel carousel-widget posts-md" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">

   
        <?php
            $sql = "SELECT * FROM packages";
            $result = mysqli_query($connection, $sql);
            
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
           ?>
            <div class="oc-item">
        <div class="entry">
            <div class="entry-image">
                <a href="<?php echo $row['image'];?>" data-lightbox="image"><img src="<?php echo $row['image'];?>"></a>
            </div>
            <div class="entry-title title-xs nott">
                <h3><a href="booking.php"><?php echo $row['name']?></a></h3>
            </div>
            <div class="entry-meta">
                <ul>
                    <li><?php echo $row['price']?> <span class="mx-5"><?php echo $row['m3mal_name']?></span></a></li>
                    
                </ul>
            </div>
            <div class="entry-content">
                <p><?php echo $row['collection']?></p>
            </div>
            </div>
    </div>
            <?php
     }
            
    }
            ?>
           
            
            
       

    

</div>
        </div>
    </div>
</section>

<section id="content mt-5">
    <div class="content-wrap">
        <div class="container clearfix">

            <!-- Posts
            ============================================= -->
            <div id="posts" class="post-grid row grid-container gutter-40 clearfix" data-layout="fitRows">
            <?php
            $sql = "SELECT * FROM packages";
            $result = mysqli_query($connection, $sql);
            
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
           ?>
         <div class="entry col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="<?php echo $row['image'];?>" data-lightbox="image"><img src="<?php echo $row['image'];?>" alt="Standard Post with Image"></a>
                        </div>
                        <div class="entry-title">
                            <h2><a href="blog-single.php"><?php echo $row['name'];?></a></h2>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><?php echo $row['price'];?><span class="mx-5"><?php echo $row['m3mal_name']?></span></a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p><?php echo $row['collection'];?></p>
                            
                        </div>
                    </div>
                </div>

            <?php
     }
            
    }
            ?>

               
               
                    </div>
                </div>
                

             

            </div><!-- #posts end -->

            <div class="clear mt-5"></div>

            <!-- Pagination
            ============================================= -->
            <div class="d-flex justify-content-between mt-5">
                <a href="#" class="btn btn-outline-secondary">&larr; Older</a>
                <a href="#" class="btn btn-outline-dark">Newer &rarr;</a>
            </div>
            <!-- .pager end -->

        </div>
        <?php include("footer.php")?>