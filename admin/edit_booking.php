<?php
                ob_start();

include("connection.php");
include("header.php");
?>
 <?php
 $id = $_GET['id'];
 $qry = mysqli_query($connection,"SELECT * FROM booking_patient WHERE id='$id'"); // select query
 $data = mysqli_fetch_array($qry); 
 // fetch data
 if(isset($_POST['update'])) // when click on Update button
 {
    $first_name = $_POST['first_name'];
    $second_name = $_POST['second_name'];
    $result = $_POST['result'];
    $sql = "UPDATE booking_patient SET first_name='$first_name',second_name = '$second_name',result ='$result' WHERE id='$id'";
   
     
     if(mysqli_query($connection,$sql))
     {
         mysqli_close($connection); // Close connection
         header("location:data.php"); // redirects to all records page
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
  <input type="text" class="form-control" name="first_name" value="<?php echo $data['first_name'] ?>" placeholder="first_name" Required> <br>
  <input type="text" class="form-control" name="second_name" value="<?php echo $data['second_name'] ?>" placeholder="second_name" Required> <br>
  <select class="form-control" name="result" placeholder="result">
 <option selected value="Done or Not">Done or Not</option>
 <option value="Done">Done</option>
 <option value="Not Done">Not Done</option>
</select> <br>

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

