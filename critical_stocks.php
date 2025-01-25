<?php include'db_connect.php' ?>
<div class="col-lg-12">
	<div class="card card-outline card-primary">
		
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
						<th>Quantity</th>
						<th>Description</th>
						<th>Expiration</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$qry = $conn->query("SELECT * FROM medicine_list where quantity < 100 order by medicine asc ");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td><b><?php echo $row['medicine'] ?></b></td>
						<td><b>
							<?php if($row['quantity'] < 100): ?>
								<p class="badge rounded-pill bg-danger text-light ms-4"><?php echo $row['quantity'] ?></p>             
							<?php else: ?>
								<?php echo $row['quantity'] ?>
							<?php endif; ?>	
						</b></td>						
						<td><b><?php echo $row['description'] ?></b></td>
						<td><b><?php echo $row['expiration_date'] ?></b></td>
						<td class="text-center">
		                    <div class="btn-group">
		                        <a href="javascript:void(0)" data-id='<?php echo $row['id'] ?>' class="btn btn-primary btn-flat add_medicine">
		                          	<i class="fas fa-plus"></i>
		                        </a>
								<a href="javascript:void(0)" data-id='<?php echo $row['id'] ?>' class="btn btn-danger btn-flat sub_medicine">
									<i class="fas fa-minus"></i>
		                        </a>
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
		$('.add_medicine').click(function(){
			uni_modal("In Medicine","in_medicine.php?id="+$(this).attr('data-id'))
		})
		$('.sub_medicine').click(function(){
			uni_modal("Out Medicine","out_medicine.php?id="+$(this).attr('data-id'))
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