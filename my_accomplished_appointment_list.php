<?php include'db_connect.php' ?>
<?php if(isset($_SESSION['login_id'])): ?>
<?php endif; ?>
<?php if(isset($_SESSION['login_campus_id'])): ?>
<?php endif; ?>
<div class="col-lg-12">
	<div class="card card-outline card-success">
        
		<div class="card-body">
			<table class="table tabe-hover table-condensed" id="list">
				<thead>
					<tr>
						<th width="8%"class="text-center">#</th>
						<th width="20%">Appointment Date</th>
						<th width="28%">Ailment</th>
						<th width="28%">Findings</th>
						<th width="28%">Treatment</th>
						<th width="12%">Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;

					$ynow = date("y-m-d");
					$uid = $_SESSION['login_id'];
					$camp = $_SESSION['login_campus_id'];
					$sql = "SELECT * FROM appointment_list where status = 2 and client_id = $uid and campus_id = $camp";
					$result = $conn->query($sql);
					if($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
                    
                    ?>
					<tr>
						<td class="text-center"><?php echo $i++ ?></td>
						<td><?php echo $row['schedule']; ?></td>
						<td><?php echo $row['ailment']; ?></td>
						<td><?php echo $row['findings']; ?></td>
						<td><?php echo $row['treatment']; ?></td>
						<td>
							<?php 
								if($row['status'] == 0){
									echo "<span class='badge badge-warning'>Waiting for Approval</span>";
								}elseif($row['status'] == 1){
									echo "<span class='badge badge-primary'>Under Treatment</span>";
								}elseif($row['status'] == 2){
									echo "<span class='badge badge-info'>Treatment Done</span>";
								}elseif($row['status'] == 3){
									echo "<span class='badge badge-danger'>Cancelled</span>";
								}
                        	?>
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
    $('.edit_appointment').click(function(){
		uni_modal("<i class='fa fa-id-card'></i> Edit Appointment Details","manage_my_appointment.php?id="+$(this).attr('data-id'))
	})
	$('.cancel_appointment').click(function(){
	_conf("Are you sure to cancel this appointment?","cancel_appointment",[$(this).attr('data-id')])
	})
	})
	function cancel_appointment($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=cancel_appointment',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Appointment successfully cancelled!",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>