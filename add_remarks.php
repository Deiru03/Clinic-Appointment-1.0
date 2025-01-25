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
	$sql = "SELECT * from client_list where id=$id";
	$result = $conn->query($sql);
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$d94=$row["d94"];
			$d95=$row["d95"];
			$d96=$row["d96"];
			$d97=$row['d97'];
			$d98=$row['d98'];
			$d99=$row['d99'];
			$d100=$row['d100'];
			$d101=$row["d101"];
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
	<center><h3><label for="" class="control-label">INPUT REMARKS DETAILS</label></h3></center>
</div>


  	<div class="card-body manage_appointment-card-body">
	  	
		<form action="" id="manage_remarks">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
                    <label for="" class="control-label">The Client is on Special Medication</label>
                    <input type="text" class="form-control form-control-sm" name="d94" id="d94" value="<?php echo isset($d94) ? $d94 : '' ?>" required/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
                    <label for="" class="control-label">The Client is Allecgic to the Following</label>
                    <input type="text" class="form-control form-control-sm" name="d95" id="d95" value="<?php echo isset($d95) ? $d95 : '' ?>" required/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
                    <label for="" class="control-label">Other Relevant Information</label>
                    <input type="text" class="form-control form-control-sm" name="d96" id="d96" value="<?php echo isset($d96) ? $d96 : '' ?>" required/>
				</div>
			</div>
		</div>
        <br><br>
        <div class="form-group">
			<h5><label for="" class="control-label">Results of Required Test</label></h5>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
                    <label for="" class="control-label">Complete Blood Count</label>
                    <input type="text" class="form-control form-control-sm" name="d97" id="d97" value="<?php echo isset($d97) ? $d97 : '' ?>" required/>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
                    <label for="" class="control-label">Urinalysis</label>
                    <input type="text" class="form-control form-control-sm" name="d98" id="d98" value="<?php echo isset($d98) ? $d98 : '' ?>" required/>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
                    <label for="" class="control-label">TB Screening (PDD)</label>
                    <input type="text" class="form-control form-control-sm" name="d99" id="d99" value="<?php echo isset($d99) ? $d99 : '' ?>" required/>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
                    <label for="" class="control-label">Lipid Profile</label>
                    <input type="text" class="form-control form-control-sm" name="d100" id="d100" value="<?php echo isset($d100) ? $d100 : '' ?>" required/>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
                    <label for="" class="control-label">Chest X-ray</label>
                    <input type="text" class="form-control form-control-sm" name="d101" id="d101" value="<?php echo isset($d101) ? $d101 : '' ?>" required/>
				</div>
			</div>
		</div>
		<hr>
		</form>
		
	</div>					
<script>
	$(document).ready(function(){
		$('#manage_remarks').submit(function(e){
			e.preventDefault();
			start_load()
			$('#msg').html('')
			$.ajax({
				url:'ajax.php?action=save_client_info',
				method:'POST',
				data:$(this).serialize(),
				success:function(resp){
					if(resp == 1){
						alert_toast("Remarks successfully examined.","success");
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