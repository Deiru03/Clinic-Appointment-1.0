<?php include('db_connect.php') ?>
<?php
$twhere ="";
if($_SESSION['login_type'] != 1)
  $twhere = "  ";
?>
<?php
  $date = date('ymd');
  $add = 100;
  $cdate = $date + $add;
?>
<!-- Info boxes -->
<?php if($_SESSION['login_type'] == 2): ?>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-green shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM client_list ")->num_rows; ?></h3>

                <p>Total Registered Clients</p>
              </div>
              <div class="icon">
                <i class="far fa-address-card"></i>
              </div>
            </div>
          </div>
           <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-red shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM doctor_staff_list")->num_rows; ?></h3>

                <p>Total Clinic Staffs</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-md"></i>
              </div>
            </div>
          </div>
           <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-dark shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM users")->num_rows; ?></h3>

                <p>System Admins</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-secret"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-blue shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM campus_list ")->num_rows; ?> </h3>

                <p>Total Campuses</p>
              </div>
              <div class="icon">
                <i class="far fa-address-card"></i>
              </div>
            </div>
          </div>
           <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-maroon shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM clinic_des_list")->num_rows; ?></h3>

                <p>Total Clinic Roles</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-md"></i>
              </div>
            </div>
          </div>
           <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-gray shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM designation_list")->num_rows; ?></h3>

                <p>Total Client Designations</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-secret"></i>
              </div>
            </div>
          </div>
      </div>
<?php elseif($_SESSION['login_type'] == 1): ?>
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-blue shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM client_list")->num_rows; ?></h3>
                <p>Total Clients</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-friends"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-blue shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM client_list where patient_type = 1")->num_rows; ?></h3>
                <p>Total Student Clients</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-alt"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-blue shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM client_list where patient_type = 2")->num_rows; ?></h3>
                <p>Total Employee Clients</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-tie"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-blue shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM appointment_list where status >0 and status <4")->num_rows; ?></h3>
                <p>Total Scheduled Appointments</p>
              </div>
              <div class="icon">
                <i class="fas fa-heartbeat"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-red shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM appointment_list where status =0")->num_rows; ?></h3>
                <p>Appointments Waiting for Approval</p>
              </div>
              <div class="icon">
                <i class="fas fa-heart"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-green shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM appointment_list where status =4")->num_rows; ?></h3>
                <p>Total Treated Clients</p>
              </div>
              <div class="icon">
                <i class="far fa-heart"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-green shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM medicine_list ")->num_rows; ?> </h3>
                <p>Total Medicine</p>
              </div>
              <div class="icon">
                <i class="fas fa-pills"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-red shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM medicine_list where quantity <100")->num_rows; ?> </h3>
                <p>Critical Stock Medicines</p>
              </div>
              <div class="icon">
                <i class="fas fa-capsules"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="small-box bg-red shadow-sm border">
              <div class="inner">
                <h3><?php echo $conn->query("SELECT * FROM medicine_list WHERE expcontrol <= $cdate")->num_rows; ?> </h3>
                <p>Expiring Stock Medicines</p>
              </div>
              <div class="icon">
                <i class="fas fa-tablets"></i>
              </div>
            </div>
          </div>
      </div>
<?php else: ?>
   <div class="col-12">
          <div class="card">
            <div class="card-body">
              <center>
              <div class="span4">
                <img class="index_logo" src="images/1.jpg" height=700px width=510px>
                <img class="index_logo" src="images/2.jpg" height=700px width=510px>
                <img class="index_logo" src="images/3.jpg" height=700px width=510px>
              </div>
              <div class="span4">
                <img class="index_logo" src="images/4.jpg" height=700px width=510px>
                <img class="index_logo" src="images/5.jpg" height=700px width=510px>
                <img class="index_logo" src="images/6.jpg" height=700px width=510px>
              </div>	
              <div class="span4">
                <img class="index_logo" src="images/7.jpg" height=700px width=500px>
                <img class="index_logo" src="images/8.jpg" height=700px width=500px>
              </div>
              <div class="span4">
                <img class="index_logo" src="images/9.jpg" height=500px width=700px>
              </div>
              </center>	
            </div>
          </div>
      </div>
<?php endif; ?>
