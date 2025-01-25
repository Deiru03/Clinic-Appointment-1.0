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
	<form action="" id="in_medicine">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
		<div id="msg" class="form-group"></div>
		<div class="form-group">
			<label for="medicine" class="control-label">Medicine Name</label>
			<input type="text" class="form-control form-control-sm" name="medicine" id="medicine" value="<?php echo isset($medicine) ? $medicine : '' ?>" disabled>
		</div>
        <div class="form-group">
			<label for="gname" class="control-label">Generic Name</label>
			<input type="text" class="form-control form-control-sm" name="gname" id="gname" value="<?php echo isset($gname) ? $gname : '' ?>" disabled >
		</div>
		<div class="form-group">
			<label for="description" class="control-label">Quantity to be Deduct</label>
			<input type="number" class="form-control form-control-sm" name="quan" id="quan" onchange="diff()">
			<input type="hidden" class="form-control form-control-sm" name="currq" id="currq" value="<?php echo isset($quantity) ? $quantity : '' ?>" disabled >
            <input type="hidden" name="action" value="OUT">
			<input type="hidden" class="form-control form-control-sm" name="quantity" id="quantity">
		</div>
	</form>
</div>
<script>
	$(document).ready(function(){
		$('#in_medicine').submit(function(e){
			e.preventDefault();
			start_load()
			$('#msg').html('')
			$.ajax({
				url:'ajax.php?action=out_medicine',
				method:'POST',
				data:$(this).serialize(),
				success:function(resp){
					if(resp == 1){
						alert_toast("Quantity successfully deducted.","success");
						setTimeout(function(){
							location.reload()	
						},1750)
					}else if(resp == 2){
						$('#msg').html('<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Insufficient quantity.</div>')
						end_load()
					}
				}
			})
		})
	})
</script>

<script type="text/javascript">
  function diff() {
    var r1 = document.getElementById('currq').value;
    var r2 = document.getElementById('quan').value;
    var result = parseInt(r1) - parseInt(r2);
    if (!isNaN(result)) {
      document.getElementById('quantity').value = result;
    }
  }
</script>