<?php
                ob_start();

include("connection.php");
include("header.php");
?>
 <?php
 if (isset($_POST['insert'])) {
    $id = $_POST['id'];
    $analysis_name = $_POST['analysis_name'];
    $des = $_POST['des'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $image = $_POST['image'];
    $m3mal_name = $_POST['m3mal_name'];
    $government = $_POST['government'];
    $branch = $_POST['branch'];
    $sql = "INSERT INTO analysis (id,analysis_name,des,price,discount,image,m3mal_name,government,branch) VALUES ('$id','$analysis_name','$des','$price','$discount','$image','$m3mal_name','$government','$branch')";
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
    <h3>Add analysis</h3>

<form method="POST">
  <input type="text" class="form-control" name="id"  placeholder="id " > <br>
  <input type="text" class="form-control" name="analysis_name"  placeholder="analysis_name " Required> <br>
  <input type="text" class="form-control" name="des"  placeholder="description" Required> <br>
  <input type="text" class="form-control" name="price"  placeholder="price" Required> <br>
  <input type="text" class="form-control" name="discount"  placeholder="discount" Required> <br>
  <input type="text" class="form-control" name="image"  placeholder="image" Required> <br>
  <input type="text" class="form-control" name="m3mal_name"  placeholder="m3mal_name" Required> <br>
  <input type="text" class="form-control" name="government"  placeholder="government" Required> <br>
  <input type="text" class="form-control" name="branch"  placeholder="branch" Required> <br>
  <input class="btn btn-danger" type="submit" name="insert" value="Add">
</form>   



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php
include("footer.php");
ob_end_flush();

?>
