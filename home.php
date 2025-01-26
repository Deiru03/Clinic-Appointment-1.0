<?php include('db_connect.php') ?>
<?php
$twhere = "";
if ($_SESSION['login_type'] != 1)
  $twhere = "  ";
?>
<?php
$date = date('ymd');
$add = 100;
$cdate = $date + $add;
?>
<!-- Info boxes -->
<?php if ($_SESSION['login_type'] == 2): ?>
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
<?php elseif ($_SESSION['login_type'] == 1): ?>
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
    <!-- <div class="card">
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
          </div> -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Occidental Mindoro State College</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
      body {
        background-color: #f0f4f8;
      }

      .gradient-header {
        background: linear-gradient(135deg, #3182ce, #2c5282);
      }

      .card-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .card-hover:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
      }
    </style>
    <div class="container mx-auto px-4 py-8">
      <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Occidental Mindoro State College</h1>
        <p class="text-xl text-gray-600">Developing Globally Competitive, Locally Responsive Professionals</p>
      </div>

      <div class="grid md:grid-cols-2 gap-8">
        <!-- Mission Card -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
          <div class="gradient-header text-white p-4">
            <h2 class="text-2xl font-semibold text-center">Mission</h2>
          </div>
          <div class="p-6">
            <p class="text-gray-700 leading-relaxed">
              OMSC is committed to produce intellectual and human capital by developing excellent graduates through outcomes-based instruction, relevant research, responsive technical advisory services, community engagement, and sustainable production.
            </p>
          </div>
        </div>

        <!-- Vision Card -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
          <div class="gradient-header text-white p-4">
            <h2 class="text-2xl font-semibold text-center">Vision</h2>
          </div>
          <div class="p-6">
            <p class="text-gray-700 leading-relaxed">
              A premier higher education institution that develops globally competitive, locally responsive, innovative professionals and life-long learners.
            </p>
          </div>
        </div>

        <!-- Service Pledge Card -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
          <div class="gradient-header text-white p-4">
            <h2 class="text-2xl font-semibold text-center">Service Pledge</h2>
          </div>
          <div class="p-6">
            <p class="text-gray-700 mb-4">
              We, the employees of Occidental Mindoro State College, pledge and commit to deliver quality service.
            </p>
            <ul class="list-disc pl-5 space-y-2 text-gray-700">
              <li>Serve with utmost dedication</li>
              <li>Unite against graft and corruption</li>
              <li>Conform with highest regulatory standards</li>
              <li>Cultivate an atmosphere of knowledge exchange</li>
              <li>Exceed stakeholder expectations</li>
              <li>Exemplify excellence in Education</li>
              <li>Develop morally upright graduates</li>
            </ul>
          </div>
        </div>

        <!-- Quality Policy Card -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
          <div class="gradient-header text-white p-4">
            <h2 class="text-2xl font-semibold text-center">OMSC Quality Policy</h2>
          </div>
          <div class="p-6">
            <p class="text-gray-700 leading-relaxed mb-4">
              The Occidental Mindoro State College is committed to providing quality education and services, continually improving our quality management system to attain our vision, mission, and objectives.
            </p>
            <p class="text-gray-700 leading-relaxed">
              We maintain a culture of excellence through personnel development, ensuring all activities meet the highest standards of professionalism and stakeholder satisfaction.
            </p>
          </div>
        </div>
      </div>
    </div>
     <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">Our Services</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mt-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
                <img src="images/image-dashboard/service-1.png" alt="Service 1" class="w-full h-120 object-cover">
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
                <img src="images/image-dashboard/service-2.png" alt="Service 2" class="w-full h-120 object-cover">
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
                <img src="images/image-dashboard/service-3.png" alt="Service 3" class="w-full h-120 object-cover">
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
                <img src="images/image-dashboard/service-4.png" alt="Service 4" class="w-full h-120 object-cover">
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
                <img src="images/image-dashboard/service-5.png" alt="Service 5" class="w-full h-120 object-cover">
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden card-hover">
                <img src="images/image-dashboard/service-6.png" alt="Service 6" class="w-full h-120 object-cover">
            </div>
        </div>
  </div>
<?php endif; ?>