<?php 
date_default_timezone_set('Asia/Manila');
include'db_connect.php' ?>
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
	<center><h3><label for="" class="control-label">INPUT TREATMENT DETAILS</label></h3></center>
</div>


  	<div class="card-body manage_appointment-card-body">
	  	
		<form action="" id="treat_appointment">
		<input type="hidden" name="campus_id" value="<?php echo isset($campus_id) ? $campus_id : '' ?>">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
		<input type="hidden" name="completed_date" value="<?php echo date('Y-m-d H:i:s'); ?>">
		<input type="hidden" name="status" value="4">
			<div class="form-group">
				<p align="left">
                    <label for="" class="control-label">Client Name</label>
                    <input type="text" class="form-control form-control-sm" name="fullname" id="fullname" value="<?php echo isset($fullname) ? $fullname : '' ?>" disabled/>
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
				<label for="findings" class="control-label">Findings</label>
				<textarea class="form-control" name="findings" rows="3" disabled><?php echo isset($findings)? $findings : "" ?></textarea>
				</p>
			</div>
			<div class="form-group">
				<p align="left">
				<label for="treatment" class="control-label">Treatment</label>
				<textarea class="form-control" name="treatment" rows="3"  placeholder="Enumerates Treatments"required></textarea>
				</p>
			</div>            
			<hr>
		</form>
		
	</div>					
<script>
	$(document).ready(function(){
		$('#treat_appointment').submit(function(e){
			e.preventDefault();
			start_load()
			$('#msg').html('')
			$.ajax({
				url:'ajax.php?action=save_appointment',
				method:'POST',
				data:$(this).serialize(),
				success:function(resp){
					if(resp == 1){
						alert_toast("Ailment successfully treated.","success");
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