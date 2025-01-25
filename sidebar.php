  <?php
  $date = date('ymd');
  $add = 100;
  $cdate = $date + $add;
  ?>
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <div class="dropdown">
   	<a href="./" class="brand-link">
     <img class="index_logo" src="images/logo.png" height=55px width=165px> 
    </a>
    </div>
    <div class="sidebar pb-4 mb-4">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
         <li class="nav-item dropdown">
            <a href="./" class="nav-link nav-home">
              <i class="nav-icon fas fa-tachometer-alt"></i>

              <p>
              <br>
              DASHBOARD
              </p>
            </a>
          </li> 

          <?php if($_SESSION['login_type'] == 2): ?>            
          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_client">
              <i class="nav-icon far fa-address-card"></i>
              <p>
                Clients
                <i class="right fas fa-chevron-circle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_client" class="nav-link nav-new_client tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New Clients</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=client_list" class="nav-link nav-client_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List Clients</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_doctor_staff">
              <i class="nav-icon fas fa-user-md"></i>
              <p>
                Doctors/Staff
                <i class="right fas fa-chevron-circle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_doctor_staff" class="nav-link nav-new_doctor_staff tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New Doctors/Staff</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=doctor_staff_list" class="nav-link nav-doctor_staff_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List Doctors/Staff</p>
                </a>
              </li>
            </ul>
          </li>          
          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_user">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="right fas fa-chevron-circle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_user" class="nav-link nav-new_user tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=user_list" class="nav-link nav-user_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List of Users</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="./index.php?page=designation" class="nav-link nav-designation">
              <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
                Designation
                <i class="right fas fa-chevron-circle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=designation_client" class="nav-link nav-designation_client tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Client</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=designation_clinic" class="nav-link nav-designation_clinic tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Clinic</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="./index.php?page=medicine" class="nav-link nav-medicine">
              <i class="nav-icon fas fa-pills"></i>
              <p>
                Medicines                
              </p>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="./index.php?page=campus" class="nav-link nav-campus">
              <i class="nav-icon fas fa-hospital-alt"></i>
              <p>
                Campuses
              </p>
            </a>
          </li>  
          <?php elseif($_SESSION['login_type'] == 1): ?>
          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_client">
              <i class="nav-icon far fa-address-card"></i>
              <p>
                Clients
                <i class="right fas fa-chevron-circle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=new_client" class="nav-link nav-new_client tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New Client</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=client_list" class="nav-link nav-client_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List of Clients</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link nav-#">
              <i class="nav-icon far fa-folder-open"></i>
              <p>
                Appointment
                <i class="right fas fa-chevron-circle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=appointment_list" class="nav-link nav-appointment_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List of Appointments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=under_examination_list" class="nav-link nav-under_examination_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Under Examination</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=under_treatment_list" class="nav-link nav-under_treatment_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Under Treatment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=cancelled_list" class="nav-link nav-cancelled_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Cancelled Appointment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=archived" class="nav-link nav-archived tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Archived</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link nav-#">
              <i class="nav-icon far fa-folder-open"></i>
              <p>
                Inventory
                <i class="right fas fa-chevron-circle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=medicine_inventory" class="nav-link nav-medicine_inventory tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List of Medicine</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=critical_stocks" class="nav-link nav-critical_stocks tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Critical Stocks</p>
                  <p class="badge rounded-pill bg-danger text-light ms-4"><?php echo $conn->query("SELECT * FROM medicine_list where quantity < 100 ")->num_rows; ?></p>              
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=expiring_stocks" class="nav-link nav-expiring_stocks tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Expiring Stocks</p>                  
                  <p class="badge rounded-pill bg-danger text-light ms-4"><?php echo $conn->query("SELECT * FROM medicine_list WHERE expcontrol <= $cdate")->num_rows; ?></p>           
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link nav-#">
              <i class="nav-icon far fa-calendar"></i>
              <p>
                Clinic Session
                <i class="right fas fa-chevron-circle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=manage_session" class="nav-link nav-manage_session tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New Session</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=session_list" class="nav-link nav-session_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List of Sessions</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link nav-#">
              <i class="nav-icon far fa-calendar"></i>
              <p>
                Reports Page
                <i class="right fas fa-chevron-circle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=client_report_page" class="nav-link nav-client_report_page tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Client Reports</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=inventory_report_page" class="nav-link nav-inventory_report_page tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Inventory Reports</p>
                </a>
              </li>
            </ul>
          </li>
          <?php elseif($_SESSION['login_type'] == 0): ?>
          <li class="nav-item">
            <a href="#" class="nav-link nav-#">
              <i class="nav-icon fas fa-file-medical-alt"></i>
              <p>
                Appointment
                <i class="right fas fa-chevron-circle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=available_session" class="nav-link nav-available_session tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List of Sessions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=my_appointment_list" class="nav-link nav-my_appointment_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>My Appointments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=my_on_progress_appointment_list" class="nav-link nav-my_on_progress_appointment_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>On Progress</p>
                </a>
              </li>
              <!-- Temporary Hidden -->
              <li class="nav-item">
                <a href="./index.php?page=my_accomplished_appointment_list" class="nav-link nav-my_accomplished_appointment_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>History of Treatment</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link nav-#">
              <i class="nav-icon fas fa-book-medical"></i>
              <p>
                My Records
                <i class="right fas fa-chevron-circle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php?page=my_personal_information" class="nav-link nav-my_personal_information tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Personal Information</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.php?page=my_medical_information" class="nav-link nav-my_medical_information tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Medical Information</p>
                </a>
              </li>
            </ul>
          </li>                      
          <?php endif; ?>
        </ul>
      </nav>
    </div>
  </aside>
  <script>
  	$(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
  		var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
      if(s!='')
        page = page+'_'+s;
  		if($('.nav-link.nav-'+page).length > 0){
             $('.nav-link.nav-'+page).addClass('active')
  			if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
  				$('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
  			}
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

  		}
     
  	})
  </script>