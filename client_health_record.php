<?php include'db_connect.php' ?>
<?php if(isset($_SESSION['login_id'])): ?>
<?php endif; ?>

<?php
	$client_id = $_GET['id'];
    $sql = "SELECT * from client_list where id = $client_id";
	$result = $conn->query($sql);
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$fname=$row["firstname"];
			$mname=$row["middlename"];
			$lname=$row["lastname"];
		}
	}

?>
<div class="col-lg-12">
    <div class="form-group">
        <center><h1><label for="" class="control-label">CLIENT NAME: <?php echo isset($fname) ? $fname : '' ?> <?php echo isset($mname) ? $mname : '' ?> <?php echo isset($lname) ? $lname : '' ?></label></h1></center>
    </div>
    <div class="col-lg-12 text-right justify-content-center d-flex">
		<button class="btn btn-secondary" type="button" onclick="location.href = 'index.php?page=client_list'">Back to Client List</button>
	</div>
    <br>
	<div class="card card-outline card-success">
        <div class="card-header">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary new_health_stat" href="javascript:void(0)" data-id="<?php echo $client_id ?>"></i> Add New Health Stats</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-condensed" id="list">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Date</th>
						<th>Weight</th>
						<th>Height</th>
                        <th>BP</th>
                        <th>HR/PR</th>
                        <th>RR</th>
                        <th>T</th>
                        <th>BMI</th>
                        <th>Other Findings</th>
                        <th>Remarks</th>
                        <th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$sql = "SELECT * FROM health_records WHERE client_id = $client_id ORDER BY date_checked DESC";
					$result = $conn->query($sql);
					if($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
					?>
					<tr>
						<td class="text-center"><?php echo $i++ ?></td>
						<td><?php echo $row['date_checked']; ?></td>
						<td><?php echo $row['h1']; ?></td>						
						<td><?php echo $row['h2']; ?></td>						
						<td><?php echo $row['h3']; ?></td>						
						<td><?php echo $row['h4']; ?></td>						
						<td><?php echo $row['h5']; ?></td>						
						<td><?php echo $row['h6']; ?></td>						
						<td><?php echo $row['h7']; ?></td>						
						<td><?php echo $row['h25']; ?></td>						
						<td><?php echo $row['h26']; ?></td>
                        <td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Select
		                    </button>
		                    <div class="dropdown-menu" styles="">
                                <a class="dropdown-item view_health" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">View Full Record</a>
		                      	<div class="dropdown-divider"></div>
		                      	<a class="dropdown-item delete_health" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Delete Record</a>				
						    </div>
						</td>
					</tr>
                    	
                    <?php
                        }
                      }
                    ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<style>
	table p{
		margin: unset !important;
	}
	table td{
		vertical-align: middle !important
	}
</style>
<script>
	$(document).ready(function(){
		$('#list').dataTable()
        $('.new_health_stat').click(function(){
		uni_modal("<i class='fa fa-id-card'></i> Client's Health Info","new_health_stat.php?id="+$(this).attr('data-id'), 'mid-large')
	    })
		$('.view_health').click(function(){
		uni_modal("<i class='fa fa-id-card'></i> Client's Health Info","view_health.php?id="+$(this).attr('data-id'), 'mid-large')
	    })
        $('.delete_health').click(function(){
        _conf("Are you sure to delete this record?","delete_health",[$(this).attr('data-id')])
        })
	})
	function delete_health($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_health',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Record successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>