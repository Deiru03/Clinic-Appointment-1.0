<div class="col-lg-12"></div></div>
	<div class="card card-outline card-success">
		<div class="card-body">
			<div class="table-responsive"> <!-- Add responsive wrapper -->
				<table class="table table-hover table-condensed" id="list">
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th>Schedule</th>
							<th>Ailment</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<!-- Rest of the table content remains same -->
					<tbody>
						<?php
						$i = 1;

						$ynow = date("y-m-d");
						$uid = $_SESSION['login_id'];
						$camp = $_SESSION['login_campus_id'];
						$sql = "SELECT * FROM appointment_list where status >= 0 and client_id = $uid and campus_id = $camp";
						$result = $conn->query($sql);
						if($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
						
						?>
						<tr>
							<td class="text-center"><?php echo $i++ ?></td>
							<td><?php echo $row['schedule']; ?></td>
							<td><?php echo $row['ailment']; ?></td>
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
									}elseif($row['status'] == 4){
										echo "<span class='badge badge-success'>Treatment Completed</span>";
									}
								?>
							</td>						
							<td class="text-center">
								<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								Select
								</button>
								<div class="dropdown-menu">
									<?php if($row['status'] == 0): ?>
										<a class="dropdown-item edit_appointment" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Edit/Resched</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item cancel_appointment" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Cancel</a>
									<?php elseif($row['status'] == 3): ?>
										<a class="dropdown-item edit_appointment" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Request Resched</a>
									<?php endif; ?>
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
</div>

<!-- Add this CSS -->
<style>
	table p{
		margin: unset !important;
	}
	table td{
		vertical-align: middle !important
	}
	
	/* Mobile-friendly styles */
	@media screen and (max-width: 768px) {
		.table {
			font-size: 14px;
		}
		
		.btn-sm {
			padding: 0.2rem 0.5rem;
		}
		
		.badge {
			font-size: 11px;
		}
		
		.dropdown-menu {
			min-width: 120px;
		}
		
		/* Optional: Stack the action buttons vertically on mobile */
		.dropdown-menu a {
			padding: 8px 12px;
		}
	}
</style>

<!-- Add this to your existing JavaScript -->
<script>
	$(document).ready(function(){
		$('#list').dataTable({
			responsive: true,  // Enable responsive features
			scrollX: true,     // Allow horizontal scrolling
			autoWidth: false   // Prevent auto-width calculation
		});
		$('.edit_appointment').click(function(){
			uni_modal("<i class='fa fa-id-card'></i> Edit Appointment Details","manage_my_appointment.php?id="+$(this).attr('data-id'))
		})
		$('.cancel_appointment').click(function(){
		_conf("Are you sure to cancel this appointment?","cancel_appointment",[$(this).attr('data-id')])
		})
	});
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
