<?php
                ob_start();

include("connection.php");
include("header.php");
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

 <?php
 $id = $_GET['id'];
 $qry = mysqli_query($connection,"SELECT * FROM register_patient WHERE id='$id'"); // select query
 $data = mysqli_fetch_array($qry); 
 // fetch data
 if(isset($_POST['update'])) // when click on Update button
 {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "UPDATE register_patient SET username='$username',email = '$email',password ='$password' WHERE id='$id'";
   
     
     if(mysqli_query($connection,$sql))
     {
        echo "<script>
        window.location.href = 'index.php';
        alert('your info has been updated successfully');
  </script>";// redirects to all records page
         exit;
     }
       	
 }
 
 ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
    <h3>Update Data</h3>


    <form method="POST">
  <input type="text" class="form-control" name="username" value="<?php echo $data['username'] ?>" placeholder="username" Required> <br>
  <input type="email" class="form-control" name="email" value="<?php echo $data['email'] ?>" placeholder="email" Required> <br>
  <input  type="password" class="form-control" name="password" value="<?php echo $data['password'] ?>" placeholder="picture"> <br>

  <input class="btn btn-primary" type="submit" name="update" value="Update">
</form>    



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php
include("footer.php");
ob_end_flush();

?>

