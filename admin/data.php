<?php include("connection.php")?>
<?php include("header.php")?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
      </h1>
   
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="row">
              <div class="col-xs-6">
              <h3 id="analysis" class="box-title">Analysis <?php
               $users = $_SESSION['username'];
               $sql ="SELECT m3mal_name ,type from register_patient WHERE username='$users'";
               $q =$connection->query($sql);
               $m3ml_name = "";
               $type = "";
               while($row=$q->fetch_assoc()){
                   $m3ml_name = $row['m3mal_name'];
                   $type = $row['type'];
               }
               $query ="";
               if($type == "admin"){
                 $query = "SELECT * FROM analysis";
               }else{
                 $query = "SELECT * FROM anaylsis WHERE m3mal_name='$m3ml_name'";
               }
                 $res = $connection->query($sql);
                echo "(" . $res->num_rows . ")";
                
                ?></h3>
                </div>
                <div class="col-xs-6">
                  <a class="btn btn-danger" href="add_analysis.php">Add</a>
                </div>
                </div>
            </div>
            
            <!-- /.box-header -->
            <div style="overflow-y:scroll;height:1000px;" class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Analysis Name</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Discount</th>
                  <th>Image</th>
                  <th>M3mal Name</th>
                  <th>government</th>
                  <th>branch</th>
                  <th>Edition</th>
                  <th>Deletion</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                 $users = $_SESSION['username'];
                 $sql ="SELECT m3mal_name ,type from register_patient WHERE username='$users'";
                 $q =$connection->query($sql);
                 $m3ml_name = "";
                 $type = "";
                 while($row=$q->fetch_assoc()){
                     $m3ml_name = $row['m3mal_name'];
                     $type = $row['type'];
                 }
                 $query ="";
                 if($type == "admin"){
                   $query = "SELECT * FROM analysis";
                 }else{
                   $query = "SELECT * FROM analysis WHERE m3mal_name='$m3ml_name'";
                 }
                    $result = $connection->query($query);
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                  ?>
                   <tr>
                  <td><?php echo $row['analysis_name']?></td>
                  <td><?php echo $row['des']?></td>
                  <td><?php echo $row['price']?></td>
                  <td><?php echo $row['discount']?></td>
                  <td><?php echo $row['image']?></td>
                  <td><?php echo $row['m3mal_name']?></td>
                  <td><?php echo $row['government']?></td>
                  <td><?php echo $row['branch']?></td>
                  <td ><a href="edit_analysis.php?id=<?php echo $row['id']; ?>" class="text-primary">Edit</a></td>
  
                  <td ><a href="delete_analysis.php?id=<?php echo $row['id'] ?>" class="text-primary">Delete</a></td> 
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
      <br>
      <br>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 id="bookers" class="box-title">Bookers
                <?php
                $users = $_SESSION['username'];
                $sql ="SELECT m3mal_name ,type from register_patient WHERE username='$users'";
                $q =$connection->query($sql);
                $m3ml_name = "";
                $type = "";
                while($row=$q->fetch_assoc()){
                    $m3ml_name = $row['m3mal_name'];
                    $type = $row['type'];
                }
                $query ="";
                if($type == "admin"){
                  $query = "SELECT * FROM booking_patient";
                }else{
                  $query = "SELECT * FROM booking_patient WHERE m3mal_name='$m3ml_name'";
                }
                 $res = $connection->query($query);
                echo "(" . $res->num_rows . ")";
                ?>
              </h3>
            </div>
            
            <!-- /.box-header -->
            <div style="overflow:scroll" class="box-body">
              <table id="example2" class="table table-striped table-hover">
                <thead>
                <tr>
                  <th>Analysis Name</th>
                  <th>First Name</th>
                  <th>Second Name</th>
                  <th>Insurance</th>
                  <th>m3mal_name</th>
                  <th>Visit</th>
                  <th>Payment</th>
                  <th>Date</th>
                  <th>Result</th>
                  <th>Edition</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $users = $_SESSION['username'];
                  $sql ="SELECT m3mal_name ,type from register_patient WHERE username='$users'";
                  $q =$connection->query($sql);
                  $m3ml_name = "";
                  $type = "";
                  while($row=$q->fetch_assoc()){
                      $m3ml_name = $row['m3mal_name'];
                      $type = $row['type'];
                  }
                  $query ="";
                  if($type == "admin"){
                    $query = "SELECT * FROM booking_patient";
                  }else{
                    $query = "SELECT * FROM booking_patient WHERE m3mal_name='$m3ml_name'";
                  }
                    $result = $connection->query($query);
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                  ?>
                   <tr>
                  <td><?php echo $row['analysis_name']?></td>
                  <td><?php echo $row['first_name']?></td>
                  <td><?php echo $row['second_name']?></td>
                  <td><?php echo $row['insurance']?></td>
                  <td><?php echo $row['m3mal_name']?></td>
                  <td><?php echo $row['visit']?></td>
                  <td><?php echo $row['payment']?></td>
                  <td><?php echo $row['date']?></td>
                  <td><?php echo $row['result']?></td>
                  <td ><a href="edit_booking.php?id=<?php echo $row['id']; ?>" class="text-primary">Edit</a></td>
  
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
      <br>
      <br>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 id="analysis" class="box-title">Messages 
              <?php
                 $sql = "SELECT * FROM contact";
                 $res = $connection->query($sql);
                echo "(" . $res->num_rows . ")";
                ?>
              </h3>
            </div>
            
            <!-- /.box-header -->
            <div style="overflow:scroll" class="box-body">
              <table id="example3" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Message</th>
                  <th>Reply</th>
                  <th>Edition</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $query = "SELECT * FROM contact";
                    $result = $connection->query($query);
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                  ?>
                   <tr>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['email']?></td>
                  <td><?php echo $row['message']?></td>
                  <td><?php echo $row['reply']?></td>
                  <td ><a href="edit_messages.php?id=<?php echo $row['id']; ?>" class="text-primary">Edit</a></td>
  
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
      <br>
      <br>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <div class="row">
              <div class="col-xs-6">
              <h3 id="analysis" class="box-title">Packages <?php
              $users = $_SESSION['username'];
              $sql ="SELECT m3mal_name ,type from register_patient WHERE username='$users'";
              $q =$connection->query($sql);
              $m3ml_name = "";
              $type = "";
              while($row=$q->fetch_assoc()){
                  $m3ml_name = $row['m3mal_name'];
                  $type = $row['type'];
              }
              $query ="";
              if($type == "admin"){
                $query = "SELECT * FROM packages";
              }else{
                $query = "SELECT * FROM packages WHERE m3mal_name='$m3ml_name'";
              }
                 $res = $connection->query($query);
                echo "(" . $res->num_rows . ")";
                
                ?></h3>
                </div>
                <div class="col-xs-6">
                  <a class="btn btn-danger" href="add_packages.php">Add</a>
                </div>
                </div>
            </div>
            
            <!-- /.box-header -->
            <div style="overflow:scroll" class="box-body">
              <table id="example4" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Price</th>
                  <th>m3mal_name</th>
                  <th>Collection</th>
                  <th>Edition</th>
                  <th>delete</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $users = $_SESSION['username'];
                  $sql ="SELECT m3mal_name ,type from register_patient WHERE username='$users'";
                  $q =$connection->query($sql);
                  $m3ml_name = "";
                  $type = "";
                  while($row=$q->fetch_assoc()){
                      $m3ml_name = $row['m3mal_name'];
                      $type = $row['type'];
                  }
                  $query ="";
                  if($type == "admin"){
                    $query = "SELECT * FROM packages";
                  }else{
                    $query = "SELECT * FROM packages WHERE m3mal_name='$m3ml_name'";
                  }
                    $result = $connection->query($query);
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                  ?>
                   <tr>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['image']?></td>
                  <td><?php echo $row['price']?></td>
                  <td><?php echo $row['m3mal_name']?></td>
                  <td><?php echo $row['collection']?></td>
                  <td ><a href="edit_packages.php?id=<?php echo $row['id']; ?>" class="text-primary">Edit</a></td>
  
  <td ><a href="delete_packages.php?id=<?php echo $row['id'] ?>" class="text-primary">delete</a></td> 
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
      <br>
      <br>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <div class="row">
              <div class="col-xs-6">
              <h3 id="analysis" class="box-title">Offers <?php
                 $users = $_SESSION['username'];
                 $sql ="SELECT m3mal_name ,type from register_patient WHERE username='$users'";
                 $q =$connection->query($sql);
                 $m3ml_name = "";
                 $type = "";
                 while($row=$q->fetch_assoc()){
                     $m3ml_name = $row['m3mal_name'];
                     $type = $row['type'];
                 }
                 $query ="";
                 if($type == "admin"){
                   $query = "SELECT * FROM offers";
                 }else{
                   $query = "SELECT * FROM offers WHERE m3mal_name='$m3ml_name'";
                 }
                 $res = $connection->query($query);
                echo "(" . $res->num_rows . ")";
                
                ?></h3>
                </div>
                <div class="col-xs-6">
                  <a class="btn btn-danger" href="add_offers.php">Add</a>
                </div>
                </div>
            </div>
            
            <!-- /.box-header -->
            <div style="overflow:scroll" class="box-body">
              <table id="example5" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Price</th>
                  <th>discount</th>
                  <th>m3mal_name</th>
                  <th>Edition</th>
                  <th>delete</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $users = $_SESSION['username'];
                  $sql ="SELECT m3mal_name ,type from register_patient WHERE username='$users'";
                  $q =$connection->query($sql);
                  $m3ml_name = "";
                  $type = "";
                  while($row=$q->fetch_assoc()){
                      $m3ml_name = $row['m3mal_name'];
                      $type = $row['type'];
                  }
                  $query ="";
                  if($type == "admin"){
                    $query = "SELECT * FROM offers";
                  }else{
                    $query = "SELECT * FROM offers WHERE m3mal_name='$m3ml_name'";
                  }
                    $result = $connection->query($query);
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                  ?>
                   <tr>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['picture']?></td>
                  <td><?php echo $row['price']?></td>
                  <td><?php echo $row['discount']?></td>
                  <td><?php echo $row['m3mal_name']?></td>
                  <td ><a href="edit_offers.php?id=<?php echo $row['id'];?>" class="text-primary">Edit</a></td>
  
  <td ><a href="delete_offers.php?id=<?php echo $row['id'] ?>" class="text-primary">delete</a></td> 
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
      <br>
      <br>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 id="users" class="box-title">Registerated People
              <?php
               $users = $_SESSION['username'];
               $sql ="SELECT m3mal_name ,type from register_patient WHERE username='$users'";
               $q =$connection->query($sql);
               $m3ml_name = "";
               $type = "";
               while($row=$q->fetch_assoc()){
                   $m3ml_name = $row['m3mal_name'];
                   $type = $row['type'];
               }
               $query ="";
               if($type == "admin"){
                 $query = "SELECT * FROM register_patient";
               }else{
                 $query = "SELECT * FROM register_patient WHERE m3mal_name='$m3ml_name'";
               }
                 
                 $res = $connection->query($query);
                echo "(" . $res->num_rows . ")";
                ?>
              </h3>
            </div>
            
            <!-- /.box-header -->
            <div style="overflow:scroll" class="box-body">
              <table id="example6" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Username</th>
                  <th>Name</th>
                  <th>Governerate</th>
                  <th>gender</th>
                  <th>birth</th>
                  <th>Delete</th>

            
                </tr>
                </thead>
                <tbody>
                  <?php
                  $users = $_SESSION['username'];
                  $sql ="SELECT m3mal_name ,type from register_patient WHERE username='$users'";
                  $q =$connection->query($sql);
                  $m3ml_name = "";
                  $type = "";
                  while($row=$q->fetch_assoc()){
                      $m3ml_name = $row['m3mal_name'];
                      $type = $row['type'];
                  }
                  $query ="";
                  if($type == "admin"){
                    $query = "SELECT * FROM register_patient";
                  }else{
                    $query = "SELECT * FROM register_patient WHERE m3mal_name='$m3ml_name'";
                  }
                    $result = $connection->query($query);
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                  ?>
                   <tr>
                  <td><?php echo $row['username']?></td>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['governerate']?></td>
                  <td><?php echo $row['gender']?></td>
                  <td><?php echo $row['birth']?></td>
                  <td ><a href="delete_register.php?id=<?php echo $row['id']?>" class="text-primary">Delete</a></td> 
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
      <br>
      <br>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            <div class="row">
              <div class="col-xs-6">
              <h3 id="analysis" class="box-title">Labs <?php
                 $sql = "SELECT * FROM lab";
                 $res = $connection->query($sql);
                echo "(" . $res->num_rows . ")";
                
                ?></h3>
                </div>
                <div class="col-xs-6">
                  <a class="btn btn-danger" href="add_labs.php">Add</a>
                </div>
                </div>
            </div>
            
            <!-- /.box-header -->
            <div style="overflow:scroll" class="box-body">
              <table id="example7" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Delete</th>

            
                </tr>
                </thead>
                <tbody>
                  <?php
                    $query = "SELECT * FROM lab";
                    $result = $connection->query($query);
                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                  ?>
                   <tr>
                  <td><?php echo $row['name']?></td>
                  <td ><a href="delete_labs.php?id=<?php echo $row['id'] ?>" class="text-primary">Delete</a></td> 
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