<?php
                ob_start();

include("connection.php");
include("header.php");
?>
 <?php
 if (isset($_POST['add'])) {
    $id = $_POST['id'];
    $picture = $_POST['picture'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $m3mal_name = $_POST['m3mal_name'];
    $sql = "INSERT INTO offers (id,picture,name,price,collection,m3mal_name) VALUES ('$id','$picture','$name','$price','$discount','$m3mal_name')";
    if (mysqli_query($connection, $sql)) {
        header('location:data.php');
    } else {
        echo "error";
    }
}
mysqli_close($connection);
?>
       	

 
 ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
    <h3>Add offers</h3>

<form method="POST">
  <input type="text" class="form-control" name="id"  placeholder="id"> <br>
  <input type="text" class="form-control" name="picture"  placeholder="picture" Required> <br>
  <input type="text" class="form-control" name="name"  placeholder="name" Required> <br>
  <input type="text" class="form-control" name="price"  placeholder="price" Required> <br>
  <input type="text" class="form-control" name="discount"  placeholder="discount" Required> <br>
  <input type="text" class="form-control" name="m3mal_name"  placeholder="m3ma_name" Required> <br>
  <input class="btn btn-danger" type="submit" name="add" value="Add">
</form>   



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php
include("footer.php");
ob_end_flush();

?>
