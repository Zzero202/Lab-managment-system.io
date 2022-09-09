<?php
include("connection.php");
include("header_nile.php");
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php
                 $sql = "SELECT * FROM booking_patient";
                 $res = $connection->query($sql);
                echo $res->num_rows;
                
                ?>
              </h3>

              <p>People Booked</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="data.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php
                 $sql = "SELECT * FROM lab";
                 $res = $connection->query($sql);
                echo $res->num_rows;
                
                ?></h3>

              <p>Our labs</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="data.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php
                 $sql = "SELECT * FROM register_patient";
                 $res = $connection->query($sql);
                echo $res->num_rows;
                
                ?></h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="data.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php
                 $sql = "SELECT * FROM analysis";
                 $res = $connection->query($sql);
                echo $res->num_rows;
                
                ?></h3>

              <p>Our Medical Analysis</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="data.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 id="bookers" class="box-title">Bookers
                <?php
                 $sql = "SELECT * FROM booking_patient";
                 $res = $connection->query($sql);
                echo "(" . $res->num_rows . ")";
                ?>
              </h3>
            </div>
            
            <!-- /.box-header -->
            <div style="max-height:400px;overflow:scroll" class="box-body">
              <table id="example2" class="table table-striped table-hover">
                <thead>
                <tr>
                  <th>Analysis Name</th>
                  <th>First Name</th>
                  <th>Second Name</th>
                  <th>Insurance</th>
                  <th>Visit</th>
                  <th>Payment</th>
                  <th>Date</th>
                  <th>Result</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    $query = "SELECT * FROM booking_patient";
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
                  <td><?php echo $row['visit']?></td>
                  <td><?php echo $row['payment']?></td>
                  <td><?php echo $row['date']?></td>
                  <td><?php echo $row['result']?></td>  
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
        

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
  include("footer.php")
  ?>