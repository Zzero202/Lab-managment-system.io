<?php
                ob_start();

include("connection.php");
include("header.php");
?>
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

