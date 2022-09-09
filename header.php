<header id="header" class="full-header transparent-header" data-sticky-class="not-dark">
<div id="header-wrap">
<div class="container">
<div class="header-row">

<!-- Logo
============================================= -->
<div id="logo">
<a href="index.php" class="standard-logo" data-dark-logo="images/about/logo-2019-glow.png"><img src="images/about/logo-2019-glow.png" alt=""></a>
<a href="index.php" class="retina-logo" data-dark-logo="images/about/logo-2019-glow.png"><img src="images/about/logo-2019-glow.png" alt=""></a>
</div><!-- #logo end -->
<div class="header-misc">

<!-- Top Search
============================================= -->
<div id="top-search" class="header-misc-icon">
<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
</div><!-- #top-search end -->

</div>



<div id="primary-menu-trigger">
    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
    </div>

<!-- Primary Navigation
============================================= -->
<nav class="primary-menu">

<ul class="menu-container">
<li class="menu-item">
    <a class="menu-link " href="packages.php"><div> Packages</div></a>
    
</li>
<li class="menu-item">
<a class="menu-link " href="offers.php"><div><i class="icon-percent"></i> Offers</div></a>

</li>

<li class="menu-item">
<a class="menu-link " href="our-labs.php"><div><i class="icon-lab"></i> Our labs</div></a>
<ul class="sub-menu-container">
    <li class="menu-item">
    <a class="menu-link" href="mokhtabar.php"><div style="letter-spacing: 1px;">El mokhtabar</div></a>
    </li>
    <li class="menu-item">
    <a class="menu-link" href="elborg.php"><div style="letter-spacing: 1px;">elborg</div></a>
    </li>
    <li class="menu-item">
    <a class="menu-link" href="alfa.php"><div style="letter-spacing: 1px;">Alfa</div></a>
    </li>
    <li class="menu-item">
<a class="menu-link" href="nile.php"><div style="letter-spacing: 1px;">Nile</div></a>
    </li>
            </ul>

</li>
    <li class="menu-item">
       
    <?php
    include('connection.php');
   $user = "";
    if(!empty($_SESSION['username'])){
     if(isset($_SESSION['username'])){
        $user = $_SESSION['username'];
        $sql = "SELECT * FROM register_patient WHERE username='$user'";
     $result = mysqli_query($connection, $sql);
     $row = mysqli_fetch_assoc($result); 

        ?>  <a class="menu-link" href=""><div><i class="icon-user"></i><?php echo $_SESSION['username'] ;?></div></a><ul class="sub-menu-container">
        <li class="menu-item">
        <a class="menu-link" href='login.php?logout="1"'><div style="letter-spacing: 1px;">logout</div></a>
        </li>
        <li class="menu-item">

        <a class="menu-link" href='profile.php?id=<?php echo $row['id']; ?>'><div style="letter-spacing: 1px;">profile</div></a>
        </li>
        
        </ul>
        <?php
     }    
    }else{
    echo'<a class="menu-link" href="register.php"><div><i class="icon-user"></i>Account</div></a> 
    <ul class="sub-menu-container">
    <li class="menu-item">
    <a class="menu-link" href="Register.php"><div style="letter-spacing: 1px;">Register</div></a>
    </li>
    <li class="menu-item">
    <a class="menu-link" href="login.php"><div style="letter-spacing: 1px;">Login</div></a>
    </li>
            </ul>';
}
    ?>
    
    
       
      
    
      <?php
      

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location:index.php");
}
?>

     
            </li>
                    </ul>
        
        </li>
</ul>

</nav><!-- #primary-menu end -->
<form class="top-search-form" action="search-labs.php" method="POST">
<input type="text" name="seach" class="form-control" value="" placeholder="Search for labs &amp; tests" autocomplete="off">
</form>



</div>
</div>
</div>
<div class="header-wrap-clone"></div>
</header><!-- #header end -->