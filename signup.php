<?php 

include('db_connect.php');
  ob_start();
  // if(!isset($_SESSION['system'])){

    $system = $conn->query("SELECT * FROM system_settings")->fetch_array();
    foreach($system as $k => $v){
      $_SESSION['system'][$k] = $v;
    }
  // }
  ob_end_flush();
?>

<?php include 'header.php' ?>
<?php include 'footer.php' ?>
<body class="hold-transition login-page dark-mode">
<div class="span4">
  <img class="index_logo" src="images/logo.png" height=140px width=400px>
</div>
<br>
<br>
<div class="form-group">
	<center><h1><label for="" class="control-label">REGISTRATION OF CLIENT</label></h1></center>
</div>	
<div class="col-lg-8">
  <div class="signup-logo">
    <a href="#" class="text-white"></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body signup-card-body">
      <form action="" id="manage_client">
	  <input type="hidden" name="fullname" id="fullname" value="<?php echo isset($id) ? $id : '' ?>">
      <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
				<div class="row">
					<div class="col-md-6 border-right">
						<div class="form-group">
							<label for="" class="control-label">First Name</label>
							<input type="text" name="firstname" class="form-control form-control-sm" required value="<?php echo isset($firstname) ? $firstname : '' ?>" onchange="sum()">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Middle Name (optional)</label>
							<input type="text" name="middlename" class="form-control form-control-sm" required value="<?php echo isset($middlename) ? $middlename : '' ?>" onchange="sum()">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Last Name</label>
							<input type="text" name="lastname" class="form-control form-control-sm" required value="<?php echo isset($lastname) ? $lastname : '' ?>" onchange="sum()">
						</div>
            			<div class="form-group">
							<label for="" class="control-label">Contact Number</label>
							<input type="text" name="contact" class="form-control form-control-sm" required value="<?php echo isset($lastname) ? $lastname : '' ?>">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Campus</label>
							<select name="campus_id" id="campus_id" class="form-control form-control-sm select2">
								<option value=""></option>
								<?php 
								$campus = $conn->query("SELECT * FROM campus_list order by campus asc");
								while($row=$campus->fetch_assoc()):
								?>
								<option value="<?php echo $row['id'] ?>" <?php echo isset($campus_id) && $campus_id == $row['id'] ? 'selected' : '' ?>><?php echo $row['campus'] ?></option>
								<?php endwhile; ?>
							</select>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Client Type</label>
							<select name="patient_type" id="patient_type" class="form-control form-control-sm select2">
								<option value=""></option>
								<?php 
								$type = $conn->query("SELECT * FROM patient_type");
								while($row=$type->fetch_assoc()):
								?>
								<option value="<?php echo $row['id'] ?>" <?php echo isset($patient_type) && $patient_type == $row['id'] ? 'selected' : '' ?>><?php echo $row['type'] ?></option>
								<?php endwhile; ?>
							</select>
						</div>						
					</div>
					<div class="col-md-6">
            			<div class="form-group">
							<label class="control-label">Email</label>
							<input type="email" class="form-control form-control-sm" name="email" required value="<?php echo isset($email) ? $email : '' ?>">
							<small id="#msg"></small>
						</div>
						<div class="form-group">
							<label class="control-label">Password</label>
							<input type="password" class="form-control form-control-sm" name="password" <?php echo !isset($id) ? "required":'' ?>>
							<small><i><?php echo isset($id) ? "Leave this blank if you dont want to change you password":'' ?></i></small>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Avatar</label>
							<div class="custom-file">
		                      <input type="file" class="custom-file-input" id="customFile" name="img" onchange="displayImg(this,$(this))">
		                      <label class="custom-file-label" for="customFile">Choose file</label>
		                    </div>
						</div>
						<div class="form-group d-flex justify-content-center align-items-center">
							<img src="<?php echo isset($avatar) ? 'assets/uploads/'.$avatar :'' ?>" alt="Avatar" id="cimg" class="img-fluid img-thumbnail ">
						</div>
					</div>
				</div>
				<hr>
				<div class="col-lg-12 text-right justify-content-center d-flex">
					<button class="btn btn-primary mr-2">Sign-up Now</button>
					<button class="btn btn-secondary" type="button" onclick="location.href = 'index.php?page=login'">Back to Log-in</button>
				</div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<style>
	img#cimg{
		height: 15vh;
		width: 15vh;
		object-fit: cover;
		border-radius: 100% 100%;
	}
</style>

<script>
	function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        }
	        reader.readAsDataURL(input.files[0]);
	    }
	}
</script>
<script>
	$('#manage_client').submit(function(e){
		e.preventDefault()
		$('input').removeClass("border-danger")
		start_load()
		$('#msg').html('')
		$.ajax({
			url:'ajax.php?action=save_client',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp == 1){
					alert_toast('Data successfully saved.',"success");
					setTimeout(function(){
						location.replace('index.php?page=login')
					},750)
				}else if(resp == 2){
					$('#msg').html("<div class='alert alert-danger'>Email already exist.</div>");
					$('[name="email"]').addClass("border-danger")
					end_load()
				}
			}
		})
	})
</script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
  function sum() {
    var fname = document.getElementById('firstname').value;
    var middlename = document.getElementById('middlename').value;
    var lastname = document.getElementById('lastname').value;
    
    var result = parseInt(fname) & parseInt(middlename) & parseInt(lastname);
    if (!isNaN(result)) {
      document.getElementById('fullname').value = result;
    }
  }
</script>