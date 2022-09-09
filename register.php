<?php
                ob_start();
                    include "connection.php";
                    
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

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Document Title
============================================= -->
<title>titles</title>


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
        <li class="inline-block"><a href="#tab-register">Register</a></li>
    </ul>

    <div class="tab-container">

    <div class="tab-content" id="tab-register">
        <div class="card mb-0">
            <div class="card-body" style="padding: 40px;">
                <h3>Register for an Account</h3>
               
                 <form id="register-form" class="register-form row mb-0" method="POST">

                    <div class="col-12 form-group">
                        <label for="register-form-name">full Name:</label>
                        <input required type="text" id="register-form-name" name="name"  class="form-control name" />
                    </div>

                    <div class="col-12 form-group">
                        <label for="register-form-email">Email Address:</label>
                        <input type="email" id="register-form-email" name="email" value=""  class="email form-control" />
                    </div>
                    <div class="col-12 form-group">
                        <label for="register-form-username">Choose a Username:</label>
                        <input type="text" id="register-form-username" name="username"  class=" form-control" />
                       
                      
                    </div>

                    <div class="col-12 form-group">
                        <label for="register-form-phone">Phone:</label>
                        <input type="text" id="register-form-phone" name="phone"  class="phone form-control" />
                        <div class="alert-danger phonez p-2 custom-danger mt-2 mb-2">
                                phone must be larger than 8 charcters
                         </div>
                    </div>

                    <div class="col-12 form-group">
                    <label for="register-form-password">Password:</label>

                    <input id="password" name="password" type="password" placeholder="" class="form-control" data-placement="bottom" data-toggle="popover" data-container="body" type="button" data-html="true">
                    <span toggle="#password" class="icon-eye-open field-icon toggle-password"></span>
                                <div id="popover-password">
                                    <p style="margin-bottom:0px ;">Password Strength: <span id="result"> </span></p>
                                    <div class="progress">
                                        <div id="password-strength" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                        </div>
                                    </div>
                                    <ul class="list-unstyled file-text">
                                        <li class=""><span class="low-upper-case"><i class="icon-file-text" aria-hidden="true"></i></span>&nbsp; 1 lowercase &amp; 1 uppercase</li>
                                        <li class=""><span class="one-number"><i class="icon-file-text" aria-hidden="true"></i></span> &nbsp;1 number (0-9)</li>
                                        <li class=""><span class="one-special-char"><i class="icon-file-text" aria-hidden="true"></i></span> &nbsp;1 Special Character (!@#$%^&*).</li>
                                        <li class=""><span class="eight-character"><i class="icon-file-text" aria-hidden="true"></i></span>&nbsp; Atleast 8 Character</li>
                                    </ul>
                                </div>
                            </div>
                        

                    <div class="col-12 form-group">
                        <label for="register-form-governerate">Governerate:</label>
                        <select required class="col-12 p-1" name="governerate" id="">
                            <option value="Cairo">Cairo</option>
                            <option value="Giza">Giza</option>
                            <option value="Alexandria">Alexandria</option>
                            <option value="Aswan">Aswan</option>
                            <option value="Asyut">Asyut</option>
                            <option value="Beheira">Beheira</option>
                            <option value="Beni Suef">Beni Suef</option>
                            <option value="Dakahlia">Dakahlia</option>
                            <option value="Damietta">Damietta</option>
                            <option value="Faiyum">Faiyum</option>
                            <option value="Gharbia">Gharbia</option>
                            <option value="Kafr El Sheikh">Kafr El Sheikh</option>
                            <option value="Luxor">Luxor</option>
                            <option value="Matruh">Matruh</option>
                            <option value="Minya">Minya</option>
                            <option value="Monufia">Monufia</option>
                            <option value="New Valley">New Valley</option>
                            <option value="North Sinai">North Sinai</option>
                            <option value="Port Said">Port Said</option>
                            <option value="Qalyubia">Qalyubia</option>
                            <option value="Qena">Qena</option>
                            <option value="Red Sea">Red Sea</option>
                            <option value="Sharqia">Sharqia</option>
                            <option value="Sohag">Sohag</option>
                            <option value="South Sinai">South Sinai</option>
                            <option value="Suez">Suez</option>
                        </select>
                    </div>
                    <div class="col-12 form-group">
                        <label for="register-form-governerate">Gender:</label>
                        <select required class="col-12 p-1" name="gender" id="">
                            <option value="male">male</option>
                            <option value="female">female</option>

                        </select>
                    </div>
                    <div class="col-12 form-group">
                        <label for="register-form-governerate">Birth date:</label>
                        <input required type="date" id="register-form-date" name="birth"  class="birth form-control" />
                        
                    </div>
                    <div class="col-12 form-group">
                    <div class="g-recaptcha" data-sitekey="6LcBmk4dAAAAAGw6MlwGsb_aO0VDwgqgTYmz8X0y" required></div>
                    </div>

                    <div class="col-12 form-group">
                      <input type="submit" id="register" class="btn btn-primary w-100" value="register" name="register">
                    </div>
                    <div class="col-12 form-group">
                        <div class="row">

                            <div class="col-8 mt-1">
                                <p>If you have account login from here</p>
                            </div>
                            <div class="col-4">
                      <a href="login.php" class="btn btn-danger w-100">login</a>
                            </div>
                    </div>
                    </div>


                </form>
    <?php
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $governerate = $_POST['governerate'];
    $gender = $_POST['gender'];
    $birth = $_POST['birth'];

    $sql = "INSERT INTO register_patient (name , email,username, phone, password,governerate,gender,birth) VALUES ('$name','$email', '$username','$phone','$password','$governerate','$gender','$birth')";
    if (mysqli_query($connection, $sql)) {
        header('location:login.php');
    } else {
        echo "error";
    }
}
mysqli_close($connection);
?>
</div>
        </div>
    </div>
    <!--registeration php -->




    </div>

    </div>

    </div>
    </div>
    </section><!-- #content end -->  

   



<?php
include("footer.php");
ob_end_flush();
?>
  <script src="js/register.js"></script>  
