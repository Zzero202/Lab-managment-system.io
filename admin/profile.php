<?php
include("connection.php");
include("header.php")
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        My profile
        <small>Control</small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 id="users" class="box-title">admin
              <?php
                 $sql = "SELECT * FROM register_patient";
                 $res = $connection->query($sql);
                echo "(" . $res->num_rows . ")";
                ?>
              </h3>
            </div>
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example6" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Username</th>
                  <th>password</th>
                  <th>email</th>
                  <th>Edition</th>

            
                </tr>
                </thead>
                <tbody>
                  
                  <?php
                  $id= $_GET['id'];
                    $query = "SELECT * FROM register_patient WHERE id='$id'";
                    $result = $connection->query($query);
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                  ?>
                   <tr>
                  <td><?php echo $row['username']?></td>
                  <td>password</td>
                  <td><?php echo $row['email']?></td>
                  <td ><a href="edit.php?id=<?php echo $row['id']?>" class="text-primary">Edit</a></td> 
                </tr>
                  <?php
                      }
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include("footer.php")
?>

