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

.inline{   
            display: inline-block;   
            margin:10px  0px;   
        }   
         
        input, button{   
            height: 34px;   
        }   
  
    .pagination {   
        display: inline-block;   
    }   
    .pagination a {   
        font-weight:bold;   
        font-size:18px;   
        color: black;   
        float: left;   
        padding: 8px 16px;   
        text-decoration: none;   
        border:1px solid black;   
    }   
    .pagination a.active {   
            background-color: pink;   
    }   
    .pagination a:hover:not(.active) {   
        background-color: skyblue;   
    } 
</style>

</head>
<body class="stretched">

<div id="wrapper" class="clearfix">

<?php
include("header.php");
?>
<section style="background-image:linear-gradient(to right,rgba(0,0,0,0.5),rgba(5, 168, 255,0.7)), url(images/slider/swiper/slider1-home.jpg);" id="content">
    <div class="content-wrap">
    <div class="container clearfix">
    
        <section class="mt-0 p-5 section_search container-fluid">
            <h2 style="color:beige">Call us on 12345 Or Book online from here <i class="icon-hand-down"></i></h2>
            <div class="container m-auto">
                <form method="post" action="search-labs.php">
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <select class="form-select" name="lab" id="floatingSelectGrid" aria-label="Floating label select example">
                                    <option value="" selected="selected">Select lab</option>
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
                            <?php include("ta7lelnames.php");
                            ?>
                        </div>
                        <div class="col-12 mt-2 d-grid gap-2">
                            <input class="p-2 text-primary btn btn-warning" type="submit" value="Search" name="search">
                        </div>
                        
                </form>
            </div>
        
        </section>
    
    </div>
    
    </div>
    </section><!-- #content end -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

    <div class="row gutter-40 col-mb-80">
		<!-- Post Content
		============================================= -->
		<div class="postcontent col-lg-9 order-lg-last">

		<!-- Shop
		============================================= -->
		<div id="shop" class="shop row grid-container gutter-30" data-layout="fitRows">
    <div class="row filteration mb-5">
    <div class="filter p-2 col-12">
      <form method="POST">
        <select class="form-control w-100 text-left p-1" name="filteration" id="">
          <option default value="">Sort by</option>
          <option value="low">Price low to high</option>
          <option value="high">Price high to low</option>
          <option value="alfa">Alfa Analysis</option>
          <option value="almokhtabar">Almokhtabar Analysis</option>
          <option value="nile">Nile Analysis</option>
          <option value="cairo">Cairo Analysis</option>
          <option value="alborg">Borg Analysis</option>
        </select>
        <input type="submit" value="Sort" name="sort" class="mt-4 w-100 btn btn-primary">
      </form>
    </div>
    </div>

			<div class="product col-12 col-sm-12 col-lg-12" style="height:800px;overflow-y:scroll;">
				<div class="grid-inner row g-0">
                       <?php
                       $rowperpage = 5;
                       $row = 0;
                           // Previous Button
                     if(isset($_POST['but_prev'])){
                      $row = $_POST['row'];
                      $row -= $rowperpage;
                      if( $row < 0 ){
                          $row = 0;
                      }
                  }
                      // Next Button
                  if(isset($_POST['but_next'])){
                      $row = $_POST['row'];
                      $allcount = $_POST['allcount'];
                      $val = $row + $rowperpage;
                      if( $val < $allcount ){
                          $row = $val;
                      }
                  }
                  $query_count = "SELECT COUNT(*) AS cntrows FROM analysis";
                  $query = "SELECT * FROM analysis";
                  $order = "";
                  $selection = "";
                  $search = "";
                if(isset($_POST['analysis'])){
                  if($_POST['analysis']){
                    if(htmlentities($_POST['analysis']) != "Select anaylsis"){
                      $selection ="TRIM(analysis_name)= '" . htmlentities($_POST['analysis']) ."'";
                    }
                  }
                  }
                  if(isset($_POST['lab'])){
                  if($_POST['lab']){
                    if(htmlentities($_POST['lab']) != "Select lab"){
                      if($selection !=""){
                        $selection = $selection ." " . " AND ";
                      }
                      $selection = $selection . " TRIM(m3mal_name)= '" . htmlentities($_POST['lab']) ."'";
                    }
                  }
                  }
                  if(isset($_POST['governerate'])){

                  if($_POST['governerate']){
                    if(htmlentities($_POST['governerate']) != "Select governerate"){
                      if($selection !=""){
                        $selection = $selection ." " . " AND";
                      }
                      $selection = $selection . " TRIM(government)= '" . htmlentities($_POST['governerate']) ."'";
                    }
                  }
                  }
                  if(isset($_POST['area'])){
                  if($_POST['area']){
                    
                    if(htmlentities($_POST['area']) != "Select area"){
                      if($selection !=""){
                        $selection = $selection ." " . " AND";
                      }
                      $selection =$selection ." TRIM(branch)= '" . htmlentities($_POST['area']) ."'";
                    }
                   
                  }
                }
                  if($selection !=""){
                    $query = $query .  " WHERE"." " . $selection;
                    $query_count = $query_count .  " WHERE"." " . $selection;
                  }
                  if(isset($_POST['filteration'])){
                    $filteration = $_POST['filteration'];
                    if($filteration== "low"){
                      $order = " ORDER BY price ASC";
                    }
                    if($filteration== "high"){
                      $order = " ORDER BY price DESC";
                    }
                    if($filteration== "Alfa"){
                      $order = " ORDER BY m3mal_name='alfa'";
                    }
                    if($filteration== "ALmokhtabar"){
                      $order = " ORDER BY m3mal_name='ALmokhtabar'";
                    }
                    if($filteration== "Alborg"){
                      $order = " ORDER BY m3mal_name='Alborg'";
                    }
                    if($filteration== "Cairo"){
                      $order = " ORDER BY m3mal_name='Cairo'";
                    }
                    if($filteration== "Nile"){
                      $order = " ORDER BY m3mal_name='Nile'";
                    }
                  }
                  
                  if($order !=""){
                    $query = $query . $order;
                    
                  }
                 if(isset($_POST['seach'])){
                  $seach = $_POST['seach'];
                  $query = $query . " WHERE " . " analysis_name " . "LIKE" . " '%$seach%'";
                 }
                 if($search !=""){
                  $query = $query . $search;
                  
                }
                   
                
                  $result = mysqli_query ($connection, $query_count);    
                  $fetchrow = mysqli_fetch_array($result); 
                  $allcount = $fetchrow['cntrows'];
                 
                  $result = mysqli_query($connection,$query);
                  $sno = $row + 1;

                          // output data of each row
                          while($fetchrow = mysqli_fetch_assoc($result)) {
                            ?>  <div class="product-image col-lg-4 col-xl-3">
                            <a href="#">  <img src="<?php echo $fetchrow['image']  ?>">
                            </a> </div>
                              <div class="product-desc col-lg-4 col-xl-4 px-lg-4 pt-lg-0">
                      <div class="product-title"><h3><?php echo $fetchrow['analysis_name']  ?></h3></div>
                      <div class="product-price">
                      <?php
                      if(empty($fetchrow['discount'])){
                        echo $fetchrow['price'];
                        
                      }else{
                        echo $fetchrow['discount'] . " <span style='color:red'> Discount price!</span>";
                      }
                      ?>
                       </div> 
                     
                      <p class="mt-3 d-none d-lg-block"><?php echo $fetchrow['des'] ?></p>
                      <ul class="iconlist d-none d-xl-block mt-md-3">
                        <li><i class="icon-caret-right"></i> 
                                      <?php echo $fetchrow['m3mal_name']; ?></li> <li><i class="icon-caret-right"></i> 
                             <?php echo $fetchrow['government']; ?><span class="mx-2"> <?php echo $fetchrow['branch']?></span></li>
                      
                      </ul>
                      </div>
                      <div class="col-xl-4 col-lg-4">
                                  <table class="table">
                                      <thead>
                                        <tr>
                                          <th scope="col">Day</th>
                                          <th scope="col">Time</th>
                                          <th scope="col">button</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">everyday</th>
                                          <td>From 8am to 9pm</td>
                                          <td><a class="btn btn-danger" href="booking.php?id=<?php echo $fetchrow['id']; ?>"> book now</a></td>
                                        </tr>
                                       
                                      </tbody>
                                    </table>
                              </div>
                  
             <?php
                           ;
                          }
                         

                          ?>
                        
                    
                     
                  
                        
                
                 
              
                
                
        
    
       
        
  
       
               
				</div>
			</div>
  
  	</div><!-- #shop end -->

		</div><!-- .postcontent end -->
        

		<!-- Sidebar
		============================================= -->
		<div class="sidebar col-lg-3">
		<div class="sidebar-widgets-wrap">

			<div class="widget widget_links">

				<h4><i class="icon-filter"></i>Our Labs &offers &packages</h4>
                <form action="" method="post">
				<ul>
			<div><a href="alfa.php">	<label for="">Alfa lab</label></a></div>
			<div><a href="mokhtabar.php">	<label for="">Almokhtabar lab</label></a></div>
			<div><a href="elborg.php">	<label for="">Alborg lab</label></a></div>
			<div><a href="nile.php">	<label for="">NIle lab</label></a></div>
			<div><a href="cairo.php">	<label for="">Cairo lab</label></a></div>
			<div><a href="offers.php">	<label for="">Our offers</label></a></div>
			<div><a href="packages.php">	<label for="">Our packaes</label></a></div>
	
				</ul>
            </form>
			</div>


			

			

			

			<div class="widget subscribe-widget">

				<h4>Subscribe For Latest Offers</h4>
				<h5>Subscribe to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
				<form action="#" class="my-0">
					<div class="input-group mx-auto">
						<input type="text" class="form-control" placeholder="Enter your Email" required="">
						<button class="btn btn-success" type="submit"><i class="icon-email2"></i></button>
					</div>
				</form>
			</div>

			<div class="widget">

				<div id="oc-clients-full" class="owl-carousel image-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false">

					<div class="oc-item"><a href="#"><img src="images/alfa-logo.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="#"><img src="images/elborg-logo.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="#"><img src="images/mokh-logo.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="#"><img src="images/cairo-logo.png" alt="Clients"></a></div>
					<div class="oc-item"><a href="#"><img src="images/nile-logo.png" alt="Clients"></a></div>
					

				</div>

			</div> 
    
		</div>
		</div><!-- .sidebar end -->
		</div>
            </div>
        </div>
        
    </section>

    

    <?php include("footer.php")?>
    <script src="js/script.js"></script>
   