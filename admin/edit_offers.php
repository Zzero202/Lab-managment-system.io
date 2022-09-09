<?php
                ob_start();

include("connection.php");
include("header.php");
?>
 <?php
 $id = $_GET['id'];
 $qry = mysqli_query($connection,"SELECT * FROM offers WHERE id='$id'"); // select query
 $data = mysqli_fetch_array($qry); 
 // fetch data
 if(isset($_POST['update'])) // when click on Update button
 {
    $name = $_POST['name'];
    $picture = $_POST['picture'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $sql = "UPDATE offers SET name='$name',picture = '$picture',price ='$price',discount ='$discount' WHERE id='$id'";
   
     
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
  <input type="text" class="form-control" name="name" value="<?php echo $data['name'] ?>" placeholder="name" Required> <br>
  <input type="text" class="form-control" name="picture" value="<?php echo $data['picture'] ?>" placeholder="image" Required> <br>
  <input  type="text" class="form-control" name="price" value="<?php echo $data['price'] ?>" placeholder="price"> <br>
  <input  type="text" class="form-control" name="discount" value="<?php echo $data['discount'] ?>" placeholder="discount"> <br>

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


 