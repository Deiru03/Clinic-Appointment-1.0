<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="./index.php?page=new_doctor_staff"><i class="fa fa-plus"></i> Add New Doctor/Staff</a>
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
						<th>Designation</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$designations = $conn->query("SELECT * FROM clinic_des_list ");
					$design_arr[0]= "Unset";
					while($row=$designations->fetch_assoc()){
						$design_arr[$row['id']] =$row['designation'];
					}
					$departments = $conn->query("SELECT * FROM campus_list ");
					$dept_arr[0]= "Unset";
					while($row=$departments->fetch_assoc()){
						$dept_arr[$row['id']] =$row['campus'];
					}
					$qry = $conn->query("SELECT *,concat(lastname,', ',firstname,' ',middlename) as name FROM doctor_staff_list order by concat(lastname,', ',firstname,' ',middlename) asc");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td><b><?php echo ucwords($row['name']) ?></b></td>
						<td><b><?php echo $row['email'] ?></b></td>
						<td><b><?php echo $dept_arr[$row['campus_id']] ?? 'Unknow Campus' ?></b></td>
						<td><b><?php echo $design_arr[$row['designation_id']] ?? 'Unknow Designation' ?></b></td>
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button>
							<div class="dropdown-menu">
		                      <a class="dropdown-item" href="./index.php?page=edit_doctor_staff&id=<?php echo $row['id'] ?>">Edit</a>
		                      <div class="dropdown-divider"></div>
		                      <a class="dropdown-item delete_doctor_staff" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">Delete</a>
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
	$(document).on('click','.delete_doctor_staff',function(){
		_conf("Are you sure to delete this Clinic Staff?","delete_doctor_staff",[$(this).attr('data-id')])
	})
	})
	function delete_doctor_staff($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_doctor_staff',
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