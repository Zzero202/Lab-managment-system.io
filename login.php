<?php
                    ob_start();
                    include ("connection.php");
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

<section style="background-image:linear-gradient(to right,rgba(0,0,0,0.5),rgba(5, 168, 255,0.7)), url(images/slider/swiper/slider1-home.jpg);" id="content">
    <div class="content-wrap">
    <div class="container clearfix">
    
    <div class="tabs mx-auto mb-0 clearfix" id="tab-login-register" style="max-width: 500px;">
    
    <ul class="tab-nav tab-nav2 center clearfix">
        <li class="inline-block"><a href="#tab-login">Login</a></li>

    </ul>
    
    <div class="tab-container">
    
    <div class="tab-content" id="tab-login">
        <div class="card mb-0">
            <div class="card-body" style="padding: 40px;">
                <form id="login-form" name="login-form" class="mb-0"  method="post">
    
                    <h3>Login to your Account</h3>
    
                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="login-form-username">Username:</label>
                            <input type="text" id="login-form-username" name="username" value="" class="form-control" />
                        </div>
    
                        <div class="col-12 form-group">
                            <label for="login-form-password">Password:</label>
                            <input type="password" id="login-form-password" name="password" value="" class="form-control" />
                        </div>
                        <!-- <div class="col-12 form-group">
                            <label for="login-form-password">type:</label>
                            <select required class="col-12 p-1" name="type" id="">
                            <option value="Admin">Admin</option>
                            <option value="lab_admin">lab_admin</option>
                            <option value="user">user</option>
                            
                        </select>
                        </div> -->
                        <div class="col-12 form-group">
                      <input type="submit" class="btn btn-primary w-100" value="login" name="login">
                    </div>
                    <div class="col-12 form-group">
                        <div class="row">
                           
                            <div class="col-9 mt-1">
                                <p>If you have not account sign up from here</p>
                            </div>
                            <div class="col-3">
                      <a href="register.php" class="btn btn-danger w-100">Register</a>
                            </div>
                    </div>
                    <div class="col-6">
                      <a href="reset.php" class="btn btn-danger w-100">Reset password</a>
                            </div>
                    </div>
                    </div>
    
                </form>
            </div>
        </div>
    </div>
    
    
    </div>
    
    </div>
    
    </div>
    </div>
    </section><!-- #content end -->
    <?php
    $errors   = array(); 

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM register_patient WHERE username='$username' AND password ='$password'";
        $result = mysqli_query($connection,$query);
        
       while($row=mysqli_fetch_array($result)){
        if($row["type"] == "user"){
            $_SESSION['username']=$username;
            header("location:index.php");
           }
           elseif($row["type"] =="admin"){
            $_SESSION['username']=$username;
            header("location:admin/home.php");
           }
           
            
        elseif($row["type"] =="lab_admin"){
            $_SESSION['username']=$username;
            header('location:admin/home.php');
            
       }
    
    }
   
}
    
  
   if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location:login.php");
}
   
   ?>
    

    <?php include("footer.php")?>
<?php

ob_end_flush();
?>