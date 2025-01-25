<?php include'db_connect.php' ?>
<?php if(isset($_SESSION['login_id'])): ?>
<?php endif; ?>

<?php if(isset($_SESSION['login_campus_id'])): 
	$campus_id = $_SESSION['login_campus_id'];
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
	<center><h1><label for="" class="control-label">SESSION SCHEDULE</label></h1>
	

<div class="col-lg-4">
  <div class="signup-logo">
    <a href="#" class="text-white"></a>
  </div>

  	<div class="card">
  	<div class="card-body manage_session-card-body">
	  	
		<form action="" id="manage_session">
			<input type="hidden" name="campus_id" value="<?php echo isset($campus_id) ? $campus_id : '' ?>">
			<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">

			<div class="form-group">
				<p align="left">
				<label for="" class="control-label">Select Day</label>
				<select name="sched_id" id="sched_id" class="form-control form-control-sm select2" onchange="document.getElementById('day').value=this.options[this.selectedIndex].text">
					<option value="0"<?php echo isset($day) && $day == "0" ? "selected": "" ?>>Monday</option>
					<option value="1"<?php echo isset($day) && $day == "1" ? "selected": "" ?>>Tuesday</option>
					<option value="2"<?php echo isset($day) && $day == "2" ? "selected": "" ?>>Wednesday</option>
					<option value="3"<?php echo isset($day) && $day == "3" ? "selected": "" ?>>Thursday</option>
					<option value="4"<?php echo isset($day) && $day == "4" ? "selected": "" ?>>Friday</option>
					<option value="5"<?php echo isset($day) && $day == "5" ? "selected": "" ?>>Saturday</option>
					<option value="6"<?php echo isset($day) && $day == "6" ? "selected": "" ?>>Sunday</option>
				</select>
				<input type="hidden" name="day" id="day" value="Monday"/>
				</p>
			</div>            
			
			<div class="form-group">
				<p align="left">
				<label for="time" class="control-label">Select Time</label>
				<input type="time" class="form-control" name="time" id="session_time" onchange="setCutoffTime()" value="<?php echo isset($time) ? $time : '' ?>" required>
				</p>
			</div>

			<div class="form-group">
				<p align="left">
				<label for="until_time" class="control-label">Select Cutoff Time</label>
				<input type="time" class="form-control" name="until_time" id="cutoff_time" value="<?php echo isset($until_time) ? $until_time : '' ?>">
				</p>
			</div>

			<script>
			function setCutoffTime() {
				const sessionTime = document.getElementById('session_time').value;
				if(sessionTime) {
					const time = new Date('2000-01-01T' + sessionTime);
					time.setHours(time.getHours() + 1);
					const cutoffTime = time.toTimeString().slice(0,5);
					document.getElementById('cutoff_time').value = cutoffTime;
				}
			}
			</script>


			<hr>

			<div class="col-lg-12 text-right justify-content-center d-flex">
				<button class="btn btn-primary mr-2">Set Schedule</button>
				<button class="btn btn-secondary" type="button" onclick="location.href = 'index.php?page=session_list'">Back to List</button>
			</div>
		</form>
		
	</div>

</div>
</center>
</div>					
<script>
	$(document).ready(function(){
		$('#manage_session').submit(function(e){
			e.preventDefault();
			start_load()
			$('#msg').html('')
			$.ajax({
				url:'ajax.php?action=save_session',
				method:'POST',
				data:$(this).serialize(),
				success:function(resp){
					if(resp == 1){
						alert_toast("Session successfully saved.","success");
						setTimeout(function(){
							location.replace('index.php?page=session_list')	
						},1750)
					}else if(resp == 2){
						alert_toast('You already have this session, set another.',"failed");
						setTimeout(function(){
						end_load()
						},1750)
					}
				}
			})
		})
	})

</script>