<?php include'db_connect.php' ?>
<?php if(isset($_SESSION['login_id'])): ?>
<?php endif; ?>
<?php if(isset($_SESSION['login_campus_id'])): ?>
<?php endif; ?>
<div class="col-12">
	<div class="card shadow-sm rounded-lg">
		<div class="card-header bg-gradient-success text-white">
			<h3 class="card-title mb-0">My On-Progress Appointments</h3>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-hover" id="list">
					<thead class="bg-light">
						<tr>
							<th class="text-center">#</th>
							<th>Schedule</th>
							<th>Ailment</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$i = 1;
					$ynow = date("y-m-d");
					$uid = $_SESSION['login_id'];
					$camp = $_SESSION['login_campus_id'];
					$sql = "SELECT * FROM appointment_list where status = 1 and client_id = $uid and campus_id = $camp";
					$result = $conn->query($sql);
					if($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
					?>
						<tr class="align-middle">
							<td class="text-center" data-label="#"><?php echo $i++ ?></td>
							<td data-label="Schedule"><?php echo $row['schedule']; ?></td>
							<td data-label="Ailment"><?php echo $row['ailment']; ?></td>
							<td data-label="Status">
								<?php 
									$status_badges = [
										0 => '<span class="badge bg-warning text-dark">Waiting for Approval</span>',
										1 => '<span class="badge bg-primary">Under Treatment</span>',
										2 => '<span class="badge bg-info">Treatment Done</span>',
										3 => '<span class="badge bg-danger">Cancelled</span>'
									];
									echo $status_badges[$row['status']] ?? '';
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
</div>

<style>
	.card {
		border: 1px solid rgb(126, 126, 126);
		margin-bottom: 1.5rem;

	}
	.card-header {
		border-bottom: 0;
		border: 1px solid rgb(66, 81, 167);
		padding: 1rem 1.5rem;
	}
	.table {
		margin-bottom: 0;
	}
	.badge {
		padding: 0.5rem 1rem;
		font-weight: 500;
		border-radius: 30px;
	}
	
	/* Mobile-friendly styles */
	@media screen and (max-width: 768px) {
		.card-body {
			padding: 1rem;
			margin-left: 5px;
			margin-right: 5px;
		}
		.card-body .row {
			margin-bottom: 8px;
			margin-left: 5px;
			margin-right: 5px;
		}
		.table-responsive {
			border: 0;
		}
		#list thead {
			display: none;
		}
		#list tr {
			display: block;
			margin-bottom: 1rem;
			background: #fff;
			box-shadow: 1 2px 4px rgba(0,0,0,0.1);
			border-radius: 8px;
			border: 1px solid rgb(73, 60, 190);
			padding: 1rem;
		}
		#list td {
			display: block;
			text-align: right;
			padding: 0.5rem;
			border: none;
		}
		#list td:before {
			content: attr(data-label);
			float: left;
			font-weight: 600;
			color: #555;
		}
		.badge {
			display: inline-block;
			width: auto;
			text-align: center;
			margin: 0.2rem 0;
		}
	}
</style>

<script>
	$(document).ready(function(){
		$('#list').DataTable({
			responsive: true,
			ordering: false,
			pageLength: 10,
			lengthMenu: [[5, 10, 25, 50], [5, 10, 25, 50]],
			dom: '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>rtip',
			language: {
				searchPlaceholder: "Search appointments",
				lengthMenu: "Show _MENU_ appointments",
			}
		});
	});
</script>