<?php include'db_connect.php' ?>
<?php if(isset($_SESSION['login_id'])): ?>
<?php endif; ?>
<?php if(isset($_SESSION['login_campus_id'])): ?>
<?php endif; ?>
<div class="col-12">
	<div class="card card-outline card-success">
		<div class="card-body">
			<div class="table-responsive">
				<!-- Mobile view cards -->
				<div class="d-md-none">
					<?php
					$i = 1;
					$ynow = date("y-m-d");
					$uid = $_SESSION['login_id'];
					$camp = $_SESSION['login_campus_id'];
					$sql = "SELECT * FROM session_list where campus_id = $camp ORDER BY sched_id ASC";
					$result = $conn->query($sql);
					if($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
					?>
					<div class="card mb-3">
						<div class="card-body">
							<h5 class="card-title">Session #<?php echo $i++ ?></h5><br>
							<div class="row">
								<div class="col-6">Day:</div>
								<div class="col-6"><strong><?php echo $row['day']; ?></strong></div>
							</div>
							<div class="row">
								<div class="col-6">Time:</div>
								<div class="col-6"><strong><?php echo date("h:i A", strtotime($row['time'])); ?></strong></div>
							</div>
							<div class="row">
								<div class="col-6">Until:</div>
								<div class="col-6"><strong><?php echo !empty($row['until_time']) ? date("h:i A", strtotime($row['until_time'])) : ''; ?></strong></div>
							</div>
							<div class="mt-3">
								<a class="btn btn-primary btn-block" href="./index.php?page=my_new_appointment&id=<?php echo $row['id'] ?>">Book Now</a>
							</div>
						</div>
					</div>
					<?php
						}
					}
					?>
				</div>

				<!-- Desktop view table -->
				<table class="table table-hover d-none d-md-table" id="list">
					<thead>
						<tr>
							<th width="8%"class="text-center">#</th>
							<th width="20%">Day</th>
							<th width="20%">Time</th>
							<th width="20%">Until</th>
							<th width="12%">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						$result = $conn->query($sql);
						if($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
						?>
						<tr>
							<td class="text-center"><?php echo $i++ ?></td>
							<td><b><?php echo $row['day']; ?></b></td>					
							<td><b><?php echo date("h:i A", strtotime($row['time'])); ?></b></td>
							<td><b><?php echo !empty($row['until_time']) ? date("h:i A", strtotime($row['until_time'])) : ''; ?></b></td>				
							<td class="text-center">
								<a class="btn btn-primary btn-sm" href="./index.php?page=my_new_appointment&id=<?php echo $row['id'] ?>">Book Now</a>
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
		border-radius: 10px;
		box-shadow: 1px 2px 4px rgba(100, 100, 100, 251);
		margin-left: 2px;
		margin-right: 2px;
	}
	.card-body .row {
		margin-bottom: 8px;
		margin-left: 5px;
		margin-right: 5px;
	}
	.btn-primary {
		border-radius: 5px;
	}
	@media (max-width: 768px) {
		.card-body {
			padding: 15px;
		}
	}
</style>

<script>
	$(document).ready(function(){
		$('#list').dataTable()
	});
</script>