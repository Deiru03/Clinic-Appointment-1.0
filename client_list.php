<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="./index.php?page=new_client"><i class="fa fa-plus"></i> Add New Client</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Campus</th>
						<th>Client Type</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$type = $conn->query("SELECT * FROM patient_type ");
					$design_arr[0]= "Unset";
					while($row=$type->fetch_assoc()){
						$design_arr[$row['id']] =$row['type'];
					}
					$departments = $conn->query("SELECT * FROM campus_list ");
					$dept_arr[0]= "Unset";
					while($row=$departments->fetch_assoc()){
						$dept_arr[$row['id']] =$row['campus'];
					}
					$qry = $conn->query("SELECT *,concat(lastname,', ',firstname,' ',middlename) as name FROM client_list order by concat(lastname,', ',firstname,' ',middlename) asc");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td><b><?php echo ucwords($row['name']) ?></b></td>
						<td><b><?php echo $row['email'] ?></b></td>
						<td><b><?php echo isset($dept_arr[$row['campus_id']]) ? $dept_arr[$row['campus_id']] : 'Unknow Campus' ?></b></td>
						<td><b><?php echo isset($design_arr[$row['patient_type']]) ? $design_arr[$row['patient_type']] : 'Unknow CLient Type' ?></b></td>
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button>
		                    <div class="dropdown-menu" styles="">
		                      	<a class="dropdown-item" href="./index.php?page=edit_client&id=<?php echo $row['id'] ?>">Edit</a>
		                      	<div class="dropdown-divider"></div>
		                      	<a class="dropdown-item delete_client" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Delete</a>
							  	<div class="dropdown-divider"></div>
                            	<a class="dropdown-item add_remarks" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Remarks</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="./index.php?page=view_client_details&id=<?php echo $row['id'] ?>">Details</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="./index.php?page=client_health_record&id=<?php echo $row['id'] ?>">Health</a>
						    </div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('#list').dataTable()
	$('.add_remarks').click(function(){
		uni_modal("<i class='fa fa-id-card'></i> Client's Remarks","add_remarks.php?id="+$(this).attr('data-id'), 'mid-large')
	})
	$('.delete_client').click(function(){
	_conf("Are you sure to delete this Client?","delete_client",[$(this).attr('data-id')])
	})
	})
	function delete_client($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_client',
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