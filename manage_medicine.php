<?php
include 'db_connect.php';
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM medicine_list where id={$_GET['id']}")->fetch_array();
	foreach($qry as $k => $v){
		$$k = $v;
	}
}
?>
<div class="container-fluid">
	<form action="" id="manage_medicine">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
		<div id="msg" class="form-group"></div>
		<div class="form-group">
			<label for="medicine" class="control-label">Medicine Name</label>
			<input type="text" class="form-control form-control-sm" name="medicine" id="medicine" value="<?php echo isset($medicine) ? $medicine : '' ?>">
		</div>
        <div class="form-group">
			<label for="gname" class="control-label">Generic Name</label>
			<input type="text" class="form-control form-control-sm" name="gname" id="gname" value="<?php echo isset($gname) ? $gname : '' ?>">
		</div>
		<div class="form-group">
			<label for="expiration_date" class="control-label">Expiration Date</label>
			<input type="date" class="form-control" name="expiration_date" value="<?php echo isset($expiration_date)? date("Y-m-d",strtotime($expiration_date)) : "" ?>" required>
		</div>
		<div class="form-group">
			<label for="description" class="control-label">Description</label>
			<textarea name="description" id="description" cols="30" rows="4" class="form-control"><?php echo isset($description) ? $description : '' ?></textarea>
		</div>
	</form>
</div>
<script>
	$(document).ready(function(){
		$('#manage_medicine').submit(function(e){
			e.preventDefault();
			start_load()
			$('#msg').html('')
			$.ajax({
				url:'ajax.php?action=save_medicine',
				method:'POST',
				data:$(this).serialize(),
				success:function(resp){
					if(resp == 1){
						alert_toast("Data successfully saved.","success");
						setTimeout(function(){
							location.reload()	
						},1750)
					}else if(resp == 2){
						$('#msg').html('<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Medicine already exist.</div>')
						end_load()
					}
				}
			})
		})
	})

</script>