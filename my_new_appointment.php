<?php include'db_connect.php' ?>
<?php if(isset($_SESSION['login_id'])): ?>
<?php endif; ?>

<?php if(isset($_SESSION['login_campus_id'])): 
	$campus_id = $_SESSION['login_campus_id'];
    $lastname = $_SESSION['login_lastname'];
    $firstname = $_SESSION['login_firstname'];
    $middlename = $_SESSION['login_middlename'];
	$client_id = $_SESSION['login_id'];
	$session_id = $_GET['id']
?>
<?php endif; ?>

<?php 
if(isset($_GET['id']) && $_GET['id'] > 0){
    $qry = $conn->query("SELECT * from `session_list` where id = '{$_GET['id']}' ");
    if($qry->num_rows > 0){
        foreach($qry->fetch_assoc() as $k => $v){
            $$k=$v;
        }
    }
}
?>


<div class="form-group">
	<center><h1><label for="" class="control-label">MY APPOINTMENT DETAILS</label></h1>
	

<div class="col-lg-4">
  <div class="signup-logo">
    <a href="#" class="text-white"></a>
  </div>

  	<div class="card">
  	<div class="card-body manage_appointment-card-body">
	  	
		<form action="" id="manage_appointment">
		<input type="hidden" name="campus_id" value="<?php echo isset($campus_id) ? $campus_id : '' ?>">
		<input type="hidden" name="id" value="">
		<input type="hidden" name="client_id" value="<?php echo isset($client_id) ? $client_id : '' ?>">
		<input type="hidden" name="fullname" id="fullname" value="<?php echo isset($lastname) ? $lastname : '' ?>, <?php echo isset($firstname) ? $firstname : '' ?> <?php echo isset($middlename) ? $middlename : '' ?>" />
		<input type="hidden" name="status" value="0">
		<?php
			$sql = "SELECT * FROM session_list where id = $session_id";
			$result = $conn->query($sql);
			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {                    
        ?>
			<div class="form-group">
				<p align="left">
				<label for="" class="control-label">Appointment Schedule</label>
				<input type="text" class="form-control" name="sched" id="sched" value="<?php echo $row['day']; ?> | <?php echo date('h:i A', strtotime($row['time'])); ?><?php echo !empty($row['until_time']) ? ' - '.date('h:i A', strtotime($row['until_time'])) : ''; ?>" disabled>
				<input type="hidden" class="form-control" name="schedule" id="schedule" value="<?php echo $row['day']; ?> | <?php echo $row['time']; ?>">
				<input type="hidden" class="form-control" name="session_id" id="session_id" value="<?php echo isset($session_id) ? $session_id : '' ?>">
				<input type="hidden" name="appointed_date" value="<?php echo date('Y-m-d H:i:s'); ?>">
				</p>
			</div>
        <?php
            }
            }
        ?>
			<div class="form-group">
				<p align="left">
				<label for="ailment" class="control-label">Ailment</label>
				<textarea class="form-control" name="ailment" rows="3" required><?php echo isset($ailment)? $ailment : "" ?></textarea>
				</p>
			</div>
			<hr>

			<div class="col-lg-12 text-right justify-content-center d-flex">
				<button class="btn btn-primary mr-2">Set Schedule</button>
				<button class="btn btn-secondary" type="button" onclick="location.href = 'index.php?page=available_session'">Back to List</button>
			</div>
		</form>
		
	</div>

</div>
</center>
</div>					
<script>
	$(document).ready(function(){
		$('#manage_appointment').submit(function(e){
			e.preventDefault();
			start_load()
			$('#msg').html('')
			$.ajax({
				url:'ajax.php?action=save_appointment',
				method:'POST',
				data:$(this).serialize(),
				success:function(resp){
					if(resp == 1){
						alert_toast("Data successfully saved.","success");
						setTimeout(function(){
							location.replace('index.php?page=my_appointment_list')	
						},1750)
					}else if(resp == 2){
						$('#msg').html('<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> An error occured.</div>')
						end_load()
					}
				}
			})
		})
	})

</script>