<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-header">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary new_medicine" href="javascript:void(0)"><i class="fa fa-plus"></i> Add New</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<colgroup>
					<col width="10%">
					<col width="30%">
					<col width="10%">
					<col width="30%">
					<col width="20%">
				</colgroup>
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Medicine Name</th>
						<th>Generic Name</th>
						<th>Description</th>
						<th>Expiration Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$qry = $conn->query("SELECT * FROM medicine_list order by medicine asc ");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td><b><?php echo $row['medicine'] ?></b></td>
						<td><b><?php echo $row['gname'] ?></b></td>
						<td><b><?php echo $row['description'] ?></b></td>
						<td><b><?php echo $row['expiration_date'] ?></b></td>				
						<td class="text-center">
		                    <div class="btn-group">
		                        <a href="javascript:void(0)" data-id='<?php echo $row['id'] ?>' class="btn btn-primary btn-flat manage_medicine">
		                          <i class="fas fa-edit"></i>
		                        </a>
		                        <button type="button" class="btn btn-danger btn-flat delete_medicine" data-id="<?php echo $row['id'] ?>">
		                          <i class="fas fa-trash"></i>
		                        </button>
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
		$('.new_medicine').click(function(){
			uni_modal("New Medicine","manage_medicine.php")
		})
		$('.manage_medicine').click(function(){
			uni_modal("Manage Medicine","manage_medicine.php?id="+$(this).attr('data-id'))
		})
	$('.delete_medicine').click(function(){
	_conf("Are you sure to delete this Medicine?","delete_medicine",[$(this).attr('data-id')])
	})
	})
	function delete_medicine($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_medicine',
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