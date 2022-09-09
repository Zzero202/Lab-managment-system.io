<?php
ob_start();
?>
<!-- Footer
============================================= -->
<footer id="footer" class="dark">
<div class="container">
<!-- Footer Widgets
============================================= -->
<div class="footer-widgets-wrap">

<div class="row col-mb-50">
<div class="col-lg-6">

<div class="widget clearfix">

<a href="index.php"> <img src="images/about/logo-2019-glow.png" alt="Image" class="footer-logo" width="200px;"></a>

<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards with a Retina &amp; Responsive Approach. Browse the amazing Features this template offers.</p>

<div class="py-2" style="background: url('images/world-map.png') no-repeat center center;">
<div class="row col-mb-30">
<div class="col-6">
<address class="mb-0">
<abbr title="Headquarters" style="display: inline-block;margin-bottom: 7px;"><strong>Headquarters:</strong></abbr><br>
795 Folsom Ave, Suite 600<br>
San Francisco, CA 94107<br>
</address>
</div>
<div class="col-6">
<abbr title="Phone Number"><strong>Phone:</strong></abbr> (+02) 114123123<br>
<abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
<abbr title="Email Address"><strong>Email:</strong></abbr> ahmedfaisaly2000@gmail.com
</div>
</div>
</div>

<a href="#" class="social-icon si-small si-rounded topmargin-sm si-facebook">
<i class="icon-facebook"></i>
<i class="icon-facebook"></i>
</a>

<a href="#" class="social-icon si-small si-rounded topmargin-sm si-twitter">
<i class="icon-twitter"></i>
<i class="icon-twitter"></i>
</a>

<a href="#" class="social-icon si-small si-rounded topmargin-sm si-gplus">
<i class="icon-gplus"></i>
<i class="icon-gplus"></i>
</a>

<a href="#" class="social-icon si-small si-rounded topmargin-sm si-pinterest">
<i class="icon-pinterest"></i>
<i class="icon-pinterest"></i>
</a>

<a href="#" class="social-icon si-small si-rounded topmargin-sm si-vimeo">
<i class="icon-vimeo"></i>
<i class="icon-vimeo"></i>
</a>

<a href="#" class="social-icon si-small si-rounded topmargin-sm si-github">
<i class="icon-github"></i>
<i class="icon-github"></i>
</a>

<a href="#" class="social-icon si-small si-rounded topmargin-sm si-yahoo">
<i class="icon-yahoo"></i>
<i class="icon-yahoo"></i>
</a>

<a href="#" class="social-icon si-small si-rounded topmargin-sm si-linkedin">
<i class="icon-linkedin"></i>
<i class="icon-linkedin"></i>
</a>

</div>

</div>

<div class="col-sm-6 col-lg-3">

<div class="widget clearfix">
<h4>Recent Posts</h4>

<div class="posts-sm row col-mb-30" id="post-list-footer">
<div class="entry col-12">
<div class="grid-inner row">
<div class="col">
<div class="entry-title">
    <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
</div>
<div class="entry-meta">
    <ul>
        <li>10th July 2021</li>
    </ul>
</div>
</div>
</div>
</div>

<div class="entry col-12">
<div class="grid-inner row">
<div class="col">
<div class="entry-title">
    <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
</div>
<div class="entry-meta">
    <ul>
        <li>10th July 2021</li>
    </ul>
</div>
</div>
</div>
</div>

<div class="entry col-12">
<div class="grid-inner row">
<div class="col">
<div class="entry-title">
    <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
</div>
<div class="entry-meta">
    <ul>
        <li>10th July 2021</li>
    </ul>
</div>
</div>
</div>
</div>
</div>

</div>

</div>

<div class="col-sm-6 col-lg-3">

<div class="widget quick-contact-widget form-widget clearfix">

<h4>Send Message</h4>

<div class="form-result"></div>

<form id="quick-contact-form" name="quick-contact-form" method="POST" class="quick-contact-form mb-0">

<div class="form-process">
<div class="css3-spinner">
<div class="css3-spinner-scaler"></div>
</div>
</div>

<div class="input-group mx-auto">
<div class="input-group-text"><i class="icon-user"></i></div>
<input type="text" class="required form-control" id="quick-contact-form-name" name="name" value="" placeholder="Full Name" />
</div>
<div class="input-group mx-auto">
<div class="input-group-text"><i class="icon-email2"></i></div>
<input type="text" class="required form-control email" id="quick-contact-form-email" name="email" value="" placeholder="Email Address" />
</div>
<textarea class="required form-control input-block-level short-textarea" id="quick-contact-form-message" name="message" rows="4" cols="30" placeholder="Message"></textarea>
<input type="text" class="d-none" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
<input type="hidden" name="prefix" value="quick-contact-form-">
<input type="submit" name="send" value="Send Email" class="btn btn-danger" id="">

</form>
<?php
if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $query = "INSERT INTO contact (name , email ,message) VALUES ('$name','$email','$message')";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) == 1)
    {
        
        header('location:index.php');
        
    }else
    {
        // echo "<h1 style='background:rgba(255,0,0,0.2);width:90px;padding:5px; position:absolute; top:40%;left:60% '>error</h1>";

    }

}
?>

</div>

</div>
</div>

</div><!-- .footer-widgets-wrap end -->
</div>

<!-- Copyrights
============================================= -->
<div id="copyrights">
<div class="container">

<div class="w-100 text-center">
<div class="copyrights-menu copyright-links clearfix">
<a href="home.php">Home</a>/<a href="our-labs.php">Our labs</a>/<a href="cancel.php">Cancellation and refund Policy
</a>/<a href="contact-us.php">Contact</a>
</div>
Copyrights &copy; 2020 All Rights Reserved by Medlife Inc.
</div>

</div>
</div><!-- #copyrights end -->
</footer><!-- #footer end -->
</div><!-- #wrapper end -->
</body>


<script src="js/jquery.js"></script>
<script src="js/plugins.min.js"></script>

<!-- Footer Scripts
============================================= -->
<script src="js/functions.js"></script>

</html>
<?php
ob_end_flush()

?>