<?php
                ob_start();

include("connection.php");
include("header.php");
?>
 <?php
 $id = $_GET['id'];
 $qry = mysqli_query($connection,"SELECT * FROM contact WHERE id='$id'"); // select query
 $data = mysqli_fetch_array($qry); 
 // fetch data
 if(isset($_POST['update'])) // when click on Update button
 {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $reply = $_POST['reply'];
    $sql = "UPDATE contact SET name='$name',message = '$message',reply ='$reply' WHERE id='$id'";
   
     
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
  <input type="text" class="form-control" name="message" value="<?php echo $data['message'] ?>" placeholder="message" Required> <br>
  <input  type="text" class="form-control" name="reply" value="<?php echo $data['reply'] ?>" placeholder="reply"> <br>

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

