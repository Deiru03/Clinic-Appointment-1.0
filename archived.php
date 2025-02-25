<?php include'db_connect.php' ?>
<?php if(isset($_SESSION['login_id'])): ?>
<?php endif; ?>
<?php if(isset($_SESSION['login_campus_id'])): ?>
<?php endif; ?>
<div class="col-lg-12">
	<div class="form-group">
		<center><h5><label for="" class="control-label">Use SEARCHBOX to filter reports</label></h5></center>
	</div>
	<div class="card card-outline card-success">
		<div class="card-body">
			<table class="table tabe-hover table-condensed" id="list">
				<thead>
					<tr>
						<th width="8%"class="text-center">#</th>
						<th width="20%">Client Name</th>
						<th width="20%">Date<small class="pull-right"> (Scheduled)</small></th>
						<th width="20%">Date <small>(Created)</small></th>
						<th width="20%">Date <small>(Completed)</small></th>
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
					$sql = "SELECT * FROM appointment_list where status = 4 and campus_id = $camp";
					$result = $conn->query($sql);
					if($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
                    
                    ?>
					<tr>
						<td class="text-center"><?php echo $i++ ?></td>
                        <td><b><?php echo $row['fullname']; ?></b></td>
						<td><?php echo $row['schedule']; ?></td>
						<td><?php echo date("M d, Y - h:i A",strtotime($row['appointed_date'])) ?></td>
						<td><?php echo date("M d, Y - h:i A",strtotime($row['completed_date'])) ?></td>
						<td><?php echo $row['ailment']; ?></td>
						<td><?php echo $row['findings']; ?></td>
						<td><?php echo $row['treatment']; ?></td>
						<td>
							<?php 								
								echo "<span class='badge badge-success'>Treatment Done</span>";								
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
    $('.new_appointment').click(function(){
		uni_modal("New Appointment","manage_appointment.php")
	})
    $('.edit_appointment').click(function(){
		uni_modal("<i class='fa fa-id-card'></i> Edit Appointment Details","manage_appointment.php?id="+$(this).attr('data-id'))
	})
	$('.view_appointment').click(function(){
		uni_modal("<i class='fa fa-id-card'></i> Client's Appointment Details","view_appointment.php?id="+$(this).attr('data-id'), 'large')
	})
	$('.approve_appoinment').click(function(){
	_conf("Are you sure to approve this appoinment?","approve_appoinment",[$(this).attr('data-id')])
	})
	})
	function approve_appointment($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=approve_appointment',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Appointment successfully approved!",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>