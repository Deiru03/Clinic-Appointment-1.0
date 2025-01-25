<?php include'db_connect.php' ?>
<?php if(isset($_SESSION['login_id'])): ?>
<?php endif; ?>

<?php if(isset($_SESSION['login_campus_id'])): 
	$campus_id = $_SESSION['login_campus_id'];
?>
<?php endif; ?>

<?php
	$id = $_GET['id']
?>

<?php
	$sql = "SELECT * from health_records where id = $id";
	$result = $conn->query($sql);
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$h1=$row["h1"];
			$h2=$row["h2"];
			$h3=$row["h3"];
			$h4=$row["h4"];
			$h5=$row["h5"];
			$h6=$row["h6"];
			$h7=$row["h7"];
			$h8=$row["h8"];
			$h9=$row["h9"];
			$h10=$row["h10"];
			$h11=$row["h11"];
			$h12=$row["h12"];
			$h13=$row["h13"];
			$h14=$row["h14"];
			$h15=$row["h15"];
			$h16=$row["h16"];
			$h17=$row["h17"];
			$h18=$row["h18"];
			$h19=$row["h19"];
			$h20=$row["h20"];
			$h21=$row["h21"];
			$h22=$row["h22"];
			$h23=$row["h23"];
			$h24=$row["h24"];
			$h25=$row["h25"];
			$h26=$row["h26"];
		}
	}
?>

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
	<center><h3><label for="" class="control-label">CLIENT HEALTH RECORD</label></h3></center>
</div>


  	<div class="card-body manage_appointment-card-body">
	  	
		<form action="" id="manage_health">
		<input type="hidden" name="client_id" value="<?php echo isset($id) ? $id : '' ?>">
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Weight</label>
                    <input type="text" class="form-control form-control-sm" name="h1" id="h1" value="<?php echo isset($h1) ? $h1: '' ?>"" disabled>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Height</label>
                    <input type="text" class="form-control form-control-sm" name="h2" id="h2" value="<?php echo isset($h2) ? $h2: '' ?>" disabled>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Blood Pressure</label>
                    <input type="text" class="form-control form-control-sm" name="h3" id="h3" value="<?php echo isset($h3) ? $h3: '' ?>" disabled>
				</div>
			</div>
            <div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">HR/PR</label>
                    <input type="text" class="form-control form-control-sm" name="h4" id="h4" value="<?php echo isset($h4) ? $h4: '' ?>" disabled>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">RR</label>
                    <input type="text" class="form-control form-control-sm" name="h5" id="h5" value="<?php echo isset($h5) ? $h5: '' ?>" disabled>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">T</label>
                    <input type="text" class="form-control form-control-sm" name="h6" id="h6" value="<?php echo isset($h6) ? $h6: '' ?>" disabled>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">BMI</label>
                    <input type="text" class="form-control form-control-sm" name="h7" id="h7" value="<?php echo isset($h7) ? $h7: '' ?>" disabled>
				</div>
			</div>
            <div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Nutritional Status</label>
                    <input type="text" class="form-control form-control-sm" name="h8" id="h8" value="<?php echo isset($h8) ? $h8: '' ?>" disabled>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Scalp</label>
                    <input type="text" class="form-control form-control-sm" name="h9" id="h9" value="<?php echo isset($h9) ? $h9: '' ?>" disabled>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Skin & Nails</label>
                    <input type="text" class="form-control form-control-sm" name="h10" id="h10" value="<?php echo isset($h10) ? $h10: '' ?>" disabled>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Eyes</label>
                    <input type="text" class="form-control form-control-sm" name="h11" id="h11" value="<?php echo isset($h11) ? $h11: '' ?>" disabled>
				</div>
			</div>
            <div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Visual Acuity</label>
                    <input type="text" class="form-control form-control-sm" name="h12" id="h12" value="<?php echo isset($h12) ? $h12: '' ?>" disabled>
				</div>
			</div>
		</div>
        <div class="row">
            <div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Ears</label>
                    <input type="text" class="form-control form-control-sm" name="h13" id="h13" value="<?php echo isset($h13) ? $h13: '' ?>" disabled>
				</div>
			</div>
            <div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Hearing Test</label>
                    <input type="text" class="form-control form-control-sm" name="h14" id="h14" value="<?php echo isset($h14) ? $h14: '' ?>" disabled>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Nose</label>
                    <input type="text" class="form-control form-control-sm" name="h15" id="h15" value="<?php echo isset($h15) ? $h15: '' ?>" disabled>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Throat</label>
                    <input type="text" class="form-control form-control-sm" name="h16" id="h16" value="<?php echo isset($h16) ? $h16: '' ?>" disabled>
				</div>
			</div>
        </div>
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Mouth & Tongue</label>
                    <input type="text" class="form-control form-control-sm" name="h17" id="h17" value="<?php echo isset($h17) ? $h17: '' ?>" disabled>
				</div>
			</div>
            <div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Teeth & Gums</label>
                    <input type="text" class="form-control form-control-sm" name="h18" id="h18" value="<?php echo isset($h18) ? $h18: '' ?>" disabled>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Chest/Breasts</label>
                    <input type="text" class="form-control form-control-sm" name="h19" id="h19" value="<?php echo isset($h19) ? $h19: '' ?>" disabled>
				</div>
			</div>
            <div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Heart</label>
                    <input type="text" class="form-control form-control-sm" name="h20" id="h20" value="<?php echo isset($h20) ? $h20: '' ?>" disabled>
				</div>
			</div>
        </div>
        <div class="row">
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Lungs</label>
                    <input type="text" class="form-control form-control-sm" name="h21" id="h21" value="<?php echo isset($h21) ? $h21: '' ?>" disabled>
				</div>
			</div>
            <div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Abdomen</label>
                    <input type="text" class="form-control form-control-sm" name="h22" id="h22" value="<?php echo isset($h22) ? $h22: '' ?>" disabled>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Genitalia</label>
                    <input type="text" class="form-control form-control-sm" name="h23" id="h23" value="<?php echo isset($h23) ? $h23: '' ?>" disabled>
				</div>
			</div>
            <div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Spine/Extremities</label>
                    <input type="text" class="form-control form-control-sm" name="h24" id="h24" value="<?php echo isset($h24) ? $h24: '' ?>" disabled>
				</div>
			</div>
        </div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
                    <label for="" class="control-label">Other Finding</label>
                    <input type="text" class="form-control form-control-sm" name="h25" id="h25" value="<?php echo isset($h25) ? $h25: '' ?>" disabled>
				</div>
			</div>
            <div class="col-md-6">
				<div class="form-group">
                    <label for="" class="control-label">Remarks</label>
                    <input type="text" class="form-control form-control-sm" name="h26" id="h26" value="<?php echo isset($h26) ? $h26: '' ?>" disabled>
				</div>
			</div>
        </div>
		<hr>
		</form>
		
	</div>					
    <style>
	#uni_modal .modal-footer{
		display: none
	}
	#uni_modal .modal-footer.display{
		display: flex
	}
	#post-field{
		max-height: 70vh;
		overflow: auto;
	}
</style>
<div class="modal-footer display p-0 m-0">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>