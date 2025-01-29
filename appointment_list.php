<?php include'db_connect.php' ?>
<?php if(isset($_SESSION['login_id'])): ?>
<?php endif; ?>
<?php if(isset($_SESSION['login_campus_id'])): ?>
<?php endif; ?>
<div class="col-lg-12">
	<div class="card card-outline card-success">
        <div class="card-header">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="./index.php?page=new_appointment"><i class="fa fa-plus"></i> Add New Appointment</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-condensed" id="list">
				<thead>
					<tr>
						<th width="8%"class="text-center">Queue</th>
						<th width="20%">Client Name</th>
						<th width="20%">Session Schedule</th>
						<th width="20%">Appointment Created</th>
						<th width="28%">Ailment</th>
						<th width="12%">Status</th>
						<th width="12%">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;

					$ynow = date("y-m-d");
					$uid = $_SESSION['login_id'];
					$camp = $_SESSION['login_campus_id'];
					$sql = "SELECT * FROM appointment_list where status >= 0 and  status <= 3 and campus_id = $camp";
					$result = $conn->query($sql);
					if($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
                    
                    ?>
					<tr>
						<td class="text-center"><?php echo $i++ ?></td>

                        <td><b><?php echo $row['fullname']; ?></b></td>
						<td><?php echo $row['schedule']; ?></td>
						<td><?php echo date("M d, Y - h:i A",strtotime($row['appointed_date'])) ?></td>
						<td><?php echo $row['ailment']; ?></td>
						<td>
							<?php 
								if($row['status'] == 0){
									echo "<span class='badge badge-warning'>Waiting for Approval</span>";
								}elseif($row['status'] == 1){
									echo "<span class='badge badge-primary'>Under Examination</span>";
								}elseif($row['status'] == 2){
									echo "<span class='badge badge-info'>Under Treatment</span>";
								}elseif($row['status'] == 3){
									echo "<span class='badge badge-danger'>Cancelled</span>";
                                }elseif($row['status'] == 4){
									echo "<span class='badge badge-success'>Treatment Done</span>";
								}
                        	?>
						</td>						
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Select
		                    </button>
		                    <div class="dropdown-menu" styles="">
                                <?php if($row['status'] == 0): ?>
                                    <a class="dropdown-item edit_appointment" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Edit/Resched</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item approve_appointment" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Approve</a>
									<div class="dropdown-divider"></div>
                                    <a class="dropdown-item cancel_appointment" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Cancel</a>
                                <?php elseif($row['status'] == 1): ?>
                                    <a class="dropdown-item examine_appointment" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Examine</a>
								<?php elseif($row['status'] == 2): ?>
                                    <a class="dropdown-item treat_appointment" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Treat</a>
								<?php elseif($row['status'] == 3): ?>
                                    <a class="dropdown-item resched_appointment" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Resched</a>
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
	$('.approve_appointment').click(function(){
	_conf("Are you sure to approve this appointment?","approve_appointment",[$(this).attr('data-id')])
	})
	$('.cancel_appointment').click(function(){
	_conf("Are you sure to cancel this appointment?","cancel_appointment",[$(this).attr('data-id')])
	})
	$('.resched_appointment').click(function(){
		uni_modal("<i class='fa fa-id-card'></i> Resched Appointment","manage_appointment.php?id="+$(this).attr('data-id'))
	})
	$('.examine_appointment').click(function(){
		uni_modal("<i class='fa fa-id-card'></i> Ailment Examination","ailment_examination.php?id="+$(this).attr('data-id'))
	})
	$('.treat_appointment').click(function(){
		uni_modal("<i class='fa fa-id-card'></i> Ailment Treatment","ailment_treatment.php?id="+$(this).attr('data-id'))
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