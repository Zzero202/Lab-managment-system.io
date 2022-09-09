<?php
                ob_start();

include("connection.php");
include("header.php");
?>
 <?php
 $id = $_GET['id'];
 $qry = mysqli_query($connection,"SELECT * FROM analysis WHERE id='$id'"); // select query
 $data = mysqli_fetch_array($qry); 
 // fetch data
 if(isset($_POST['update'])) // when click on Update button
 {
    $analysis = $_POST['analysis'];
    $des = $_POST['des'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $image = $_POST['image'];
    $m3mal_name = $_POST['m3mal_name'];
    $government = $_POST['government'];
    $branch = $_POST['branch'];
    $sql = "UPDATE analysis SET analysis_name='$analysis',des = '$des',price ='$price',discount ='$discount',image ='$image',m3mal_name ='$m3mal_name',government ='$government',branch ='$branch' WHERE id='$id'";
   
     
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
  <input type="text" class="form-control" name="analysis" value="<?php echo $data['analysis_name'] ?>" placeholder="analysis_name" Required> <br>
  <input type="text" class="form-control" name="des" value="<?php echo $data['des'] ?>" placeholder="des" Required> <br>
  <input type="text" class="form-control" name="price" value="<?php echo $data['price'] ?>" placeholder="price" Required> <br>
  <input type="text" class="form-control" name="discount" value="<?php echo $data['discount'] ?>" placeholder="discount" Required> <br>
  <input type="text" class="form-control" name="image" value="<?php echo $data['image'] ?>" placeholder="image" Required> <br>
  <input type="text" class="form-control" name="m3mal_name" value="<?php echo $data['m3mal_name'] ?>" placeholder="m3mal_name" Required> <br>
  <input type="text" class="form-control" name="government" value="<?php echo $data['government'] ?>" placeholder="government" Required> <br>
  <input type="text" class="form-control" name="branch" value="<?php echo $data['branch'] ?>" placeholder="branch" Required> <br>

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
