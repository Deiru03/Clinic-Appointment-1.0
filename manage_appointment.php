<?php include'db_connect.php' ?>
<?php if(isset($_SESSION['login_id'])): ?>
<?php endif; ?>

<?php if(isset($_SESSION['login_campus_id'])): 
	$campus_id = $_SESSION['login_campus_id'];
?>
<?php endif; ?>

<?php 
if(isset($_GET['id']) && $_GET['id'] > 0){
    $qry = $conn->query("SELECT * from `appointment_list` where id = '{$_GET['id']}' ");
    if($qry->num_rows > 0){
        foreach($qry->fetch_assoc() as $k => $v){
            $$k=$v;
        }
    }
}
?>


<div class="form-group">
	<center><h3><label for="" class="control-label">SCHEDULING OF APPOINTMENT</label></h3></center>
</div>


  	<div class="card-body manage_appointment-card-body">
	  	
		<form action="" id="manage_appointment">
		<input type="hidden" name="campus_id" value="<?php echo isset($campus_id) ? $campus_id : '' ?>">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">

			<div class="form-group">
				<p align="left">
				<label for="" class="control-label">Client Name</label>
				<select name="client_id" id="client_id" class="form-control form-control-sm select2" onchange="document.getElementById('fullname').value=this.options[this.selectedIndex].text" disabled>
					<option value=""></option>
					<?php 
						$client = $conn->query("SELECT *,concat(lastname,', ',firstname,' ',middlename) as name FROM client_list order by concat(lastname,', ',firstname,' ',middlename) asc");
						while($row=$client->fetch_assoc()):
					?>
					<option value="<?php echo $row['id'] ?>" <?php echo isset($client_id) && $client_id == $row['id'] ? 'selected' : '' ?>><?php echo $row['lastname'] ?>, <?php echo $row['firstname'] ?> <?php echo $row['middlename'] ?></option>
					<?php endwhile; ?>
				</select>
				<input type="hidden" name="fullname" id="fullname" value="<?php echo isset($fullname) ? $fullname : '' ?>" />
				</p>
			</div>

			<div class="form-group">
				<p align="left">
				<label for="ailment" class="control-label">Ailment</label>
				<textarea class="form-control" name="ailment" rows="3" disabled><?php echo isset($ailment)? $ailment : "" ?></textarea>
				</p>
			</div>            
			
			<div class="form-group">
				<p align="left">
				<label for="" class="control-label">Appointment Schedule</label>
				<select name="session_id" id="session_id" class="form-control form-control-sm select2" onchange="document.getElementById('schedule').value=this.options[this.selectedIndex].text" required>
					<option value=""></option>
					{{--  <?php 
						/* $sched = $conn->query("SELECT *,concat(day,', ',time) as sched FROM session_list order by concat(day,', ',time) asc");
						while($row=$sched->fetch_assoc()):
					?>
					<option value="<?php echo $row['id'] ?>" <?php echo isset($session_id) && $session_id == $row['id'] ? 'selected' : '' ?>><?php echo $row['day'] ?> | <?php echo $row['time'] ?></option>
					<?php endwhile; */?> --}}

					<?php 
						$sched = $conn->query("SELECT *, concat(day,', ',time) as sched FROM session_list order by concat(day,', ',time) asc");
						while($row=$sched->fetch_assoc()):
							$start_time = date("h:i A", strtotime($row['time']));
							$until_time = !empty($row['until_time']) ? date("h:i A", strtotime($row['until_time'])) : '';
							$time_display = !empty($until_time) ? "$start_time - $until_time" : $start_time;
					?>
					<option value="<?php echo $row['id'] ?>" <?php echo isset($session_id) && $session_id == $row['id'] ? 'selected' : '' ?>><?php echo $row['day'] ?> | <?php echo $time_display ?></option>
					<?php endwhile; ?>
				</select>
				<input type="hidden" name="schedule" id="schedule" value="<?php echo isset($schedule) ? $schedule : '' ?>" />
				</p>
			</div>

			<div class="form-group">
				<p align="left">
				<label for="status" class="control-label">Status</label>
				<select name="status" id="status" class="custom custom-select">
					<option value="0"<?php echo isset($status) && $status == "0" ? "selected": "" ?>>Pending</option>
					<option value="1"<?php echo isset($status) && $status == "1" ? "selected": "" ?>>Confirmed</option>
				</select>
				</p>
			</div>
			<hr>
		</form>
		
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
							location.reload()	
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