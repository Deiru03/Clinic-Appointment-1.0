<?php include'db_connect.php' ?>
<?php if(isset($_SESSION['login_id'])):?>
<?php endif; ?>

<?php
	$lid = $_SESSION['login_id'];
	$sql = "SELECT * from client_list where id=$lid";
	$result = $conn->query($sql);
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$d1=$row["d1"];
			$d2=$row["d2"];
			$d3=$row["d3"];
			$d4=$row["d4"];
			$d5=$row["d5"];
			$d6=$row["d6"];
			$d7=$row['d7'];
			$d8=$row['d8'];
			$d9=$row['d9'];
			$d10=$row['d10'];
			$d11=$row["d11"];
			$d12=$row["d12"];
			$d13=$row["d13"];
			$d14=$row["d14"];
			$d15=$row["d15"];
			$d16=$row["d16"];
			$d17=$row['d17'];
			$d18=$row['d18'];
			$d19=$row['d19'];
			$d20=$row['d20'];
			$d21=$row["d21"];
			$d22=$row["d22"];
		}
	}
?>
<!--
<div class="form-group">
	<center><h3><label for="" class="control-label">MY PERSONAL INFORMATION</label></h3></center>
</div>
-->
<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
			<form action="" id="manage_personal">

				<input type="hidden" name="id" value="<?php echo isset($lid) ? $lid : '' ?>">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Sex</label>
							<input type="text" name="d1" class="form-control form-control-sm" required value="<?php echo isset($d1) ? $d1 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Civil Status</label>
							<input type="text" name="d2" class="form-control form-control-sm" required value="<?php echo isset($d2) ? $d2 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Nationality</label>
							<input type="text" name="d3" class="form-control form-control-sm" required value="<?php echo isset($d3) ? $d3 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Religion</label>
							<input type="text" name="d4" class="form-control form-control-sm" required value="<?php echo isset($d4) ? $d4 : '' ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Birthdate</label>
							<input type="date" name="d5" class="form-control form-control-sm" required value="<?php echo isset($d5) ? $d5 : '' ?>">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Age</label>
							<input type="number" name="d6" class="form-control form-control-sm" required value="<?php echo isset($d6) ? $d6 : '' ?>">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Place of Birth</label>
							<input type="text" name="d7" class="form-control form-control-sm" required value="<?php echo isset($d7) ? $d7 : '' ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">College/Department</label>
							<input type="text" name="d8" class="form-control form-control-sm" required value="<?php echo isset($d8) ? $d8 : '' ?>">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Home Address</label>
							<input type="text" name="d9" class="form-control form-control-sm" required value="<?php echo isset($d9) ? $d9 : '' ?>">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Adress While in School</label>
							<input type="text" name="d10" class="form-control form-control-sm" required value="<?php echo isset($d10) ? $d10 : '' ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Father's name</label>
							<input type="text" name="d11" class="form-control form-control-sm" required value="<?php echo isset($d11) ? $d11 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Occupation</label>
							<input type="text" name="d12" class="form-control form-control-sm" required value="<?php echo isset($d12) ? $d12 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Contact Number</label>
							<input type="text" name="d13" class="form-control form-control-sm" required value="<?php echo isset($d13) ? $d13 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Address</label>
							<input type="text" name="d14" class="form-control form-control-sm" required value="<?php echo isset($d14) ? $d14 : '' ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Mother's name</label>
							<input type="text" name="d15" class="form-control form-control-sm" required value="<?php echo isset($d15) ? $d15 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Occupation</label>
							<input type="text" name="d16" class="form-control form-control-sm" required value="<?php echo isset($d16) ? $d16 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Contact Number</label>
							<input type="text" name="d17" class="form-control form-control-sm" required value="<?php echo isset($d17) ? $d17 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Address</label>
							<input type="text" name="d18" class="form-control form-control-sm" required value="<?php echo isset($d18) ? $d18 : '' ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Guardian's name</label>
							<input type="text" name="d19" class="form-control form-control-sm" required value="<?php echo isset($d19) ? $d19 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Occupation</label>
							<input type="text" name="d20" class="form-control form-control-sm" required value="<?php echo isset($d20) ? $d20 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Contact Number</label>
							<input type="text" name="d21" class="form-control form-control-sm" required value="<?php echo isset($d21) ? $d21 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Address</label>
							<input type="text" name="d22" class="form-control form-control-sm" required value="<?php echo isset($d22) ? $d22 : '' ?>">
						</div>
					</div>
				</div>
				<hr>
				<div class="col-lg-12 text-right justify-content-center d-flex">
					<button class="btn btn-primary mr-2">Save</button>
					<button class="btn btn-secondary" type="button" onclick="location.href = 'index.php?page=home'">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	$('#manage_personal').submit(function(e){
		e.preventDefault()
		$('input').removeClass("border-danger")
		start_load()
		$('#msg').html('')
		$.ajax({
			url:'ajax.php?action=save_client_info',
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
						location.replace('index.php?page=my_personal_information')
					},750)
				}else if(resp == 2){
					alert_toast('An error occured.',"failed");
					setTimeout(function(){
						end_load()
					},1750)
				}
			}
		})
	})
</script>