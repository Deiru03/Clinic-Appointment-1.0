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

<div class="form-group">
	<center><h3><label for="" class="control-label">INPUT CLIENT HEALTH RECORD</label></h3></center>
</div>


  	<div class="card-body manage_appointment-card-body">
	  	
		<form action="" id="manage_health">
		<input type="hidden" name="client_id" value="<?php echo isset($id) ? $id : '' ?>">
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Weight</label>
                    <input type="text" class="form-control form-control-sm" name="h1" required>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Height</label>
                    <input type="text" class="form-control form-control-sm" name="h2" required>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Blood Pressure</label>
                    <input type="text" class="form-control form-control-sm" name="h3" required>
				</div>
			</div>
            <div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">HR/PR</label>
                    <input type="text" class="form-control form-control-sm" name="h4" required>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">RR</label>
                    <input type="text" class="form-control form-control-sm" name="h5" required>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">T</label>
                    <input type="text" class="form-control form-control-sm" name="h6" required>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">BMI</label>
                    <input type="text" class="form-control form-control-sm" name="h7" required>
				</div>
			</div>
            <div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Nutritional Status</label>
                    <input type="text" class="form-control form-control-sm" name="h8" required>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Scalp</label>
                    <input type="text" class="form-control form-control-sm" name="h9" required>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Skin & Nails</label>
                    <input type="text" class="form-control form-control-sm" name="h10" required>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Eyes</label>
                    <input type="text" class="form-control form-control-sm" name="h11" required>
				</div>
			</div>
            <div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Visual Acuity</label>
                    <input type="text" class="form-control form-control-sm" name="h12" required>
				</div>
			</div>
		</div>
        <div class="row">
            <div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Ears</label>
                    <input type="text" class="form-control form-control-sm" name="h13" required>
				</div>
			</div>
            <div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Hearing Test</label>
                    <input type="text" class="form-control form-control-sm" name="h14" required>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Nose</label>
                    <input type="text" class="form-control form-control-sm" name="h15" required>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Throat</label>
                    <input type="text" class="form-control form-control-sm" name="h16" required>
				</div>
			</div>
        </div>
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Mouth & Tongue</label>
                    <input type="text" class="form-control form-control-sm" name="h17" required>
				</div>
			</div>
            <div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Teeth & Gums</label>
                    <input type="text" class="form-control form-control-sm" name="h18" required>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Chest/Breasts</label>
                    <input type="text" class="form-control form-control-sm" name="h19" required>
				</div>
			</div>
            <div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Heart</label>
                    <input type="text" class="form-control form-control-sm" name="h20" required>
				</div>
			</div>
        </div>
        <div class="row">
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Lungs</label>
                    <input type="text" class="form-control form-control-sm" name="h21" required>
				</div>
			</div>
            <div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Abdomen</label>
                    <input type="text" class="form-control form-control-sm" name="h22" required>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Genitalia</label>
                    <input type="text" class="form-control form-control-sm" name="h23" required>
				</div>
			</div>
            <div class="col-md-3">
				<div class="form-group">
                    <label for="" class="control-label">Spine/Extremities</label>
                    <input type="text" class="form-control form-control-sm" name="h24" required>
				</div>
			</div>
        </div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
                    <label for="" class="control-label">Other Finding</label>
                    <input type="text" class="form-control form-control-sm" name="h25" required>
				</div>
			</div>
            <div class="col-md-6">
				<div class="form-group">
                    <label for="" class="control-label">Remarks</label>
                    <input type="text" class="form-control form-control-sm" name="h26" required>
				</div>
			</div>
        </div>
		<hr>
		</form>
		
	</div>					
<script>
	$(document).ready(function(){
		$('#manage_health').submit(function(e){
			e.preventDefault();
			start_load()
			$('#msg').html('')
			$.ajax({
				url:'ajax.php?action=save_health',
				method:'POST',
				data:$(this).serialize(),
				success:function(resp){
					if(resp == 1){
						alert_toast("Health record successfully saved.","success");
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