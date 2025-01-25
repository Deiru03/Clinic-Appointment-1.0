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
						<th width="20%">Day</th>
						<th width="20%">Time</th>
						<th width="12%">Action</th>
					</tr>
				</thead>
				<tbody>
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
					<tr>
						<td class="text-center"><?php echo $i++ ?></td>
                        <td><b><?php echo $row['day']; ?></b></td>					
                        <td><b><?php echo $row['time']; ?></b></td>					
                        <td class="text-center" style="color: blue">
                            <a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="./index.php?page=my_new_appointment&id=<?php echo $row['id'] ?>"></i>Book Now</a>
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
	$('.delete_session').click(function(){
	_conf("Are you sure to delete this session?","delete_session",[$(this).attr('data-id')])
	})
	})
	function delete_session($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_session',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>