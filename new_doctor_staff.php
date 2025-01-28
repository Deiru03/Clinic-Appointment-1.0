<?php
?>
<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
			<form action="" id="manage_client">
            <input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
				<div class="row">
					<div class="col-md-6 border-right">
						<div class="form-group">
							<label for="" class="control-label">First Name</label>
							<input type="text" name="firstname" id="firstname" class="form-control form-control-sm" required value="<?php echo isset($firstname) ? $firstname : '' ?>">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Middle Name (optional)</label>
							<input type="text" name="middlename" id="middlename" class="form-control form-control-sm" value="<?php echo isset($middlename) ? $middlename : '' ?>">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Last Name</label>
							<input type="text" name="lastname" id="lastname" class="form-control form-control-sm" required value="<?php echo isset($lastname) ? $lastname : '' ?>">
						</div>
            			<div class="form-group">
							<label for="" class="control-label">Contact Number</label>
							<input type="text" name="contact" class="form-control form-control-sm" required value="<?php echo isset($contact) ? $contact : '' ?>">
						</div>

						<div class="form-group">
							<label for="" class="control-label">Campus</label>
							<select name="campus_id" id="campus_id" class="form-control form-control-sm select2">
								<option value=""></option>
								<?php 
								$campus = $conn->query("SELECT * FROM campus_list order by campus asc");
								while($row=$campus->fetch_assoc()):
								?>
								<option value="<?php echo $row['id'] ?>" <?php echo isset($campus_id) && $campus_id == $row['id'] ? 'selected' : '' ?>><?php echo $row['campus'] ?></option>
								<?php endwhile; ?>
							</select>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Designation</label>
							<select name="designation_id" id="designation_id" class="form-control form-control-sm select2">
								<option value=""></option>
								<?php 
								$designations = $conn->query("SELECT * FROM clinic_des_list order by designation asc");
								while($row=$designations->fetch_assoc()):
								?>
								<option value="<?php echo $row['id'] ?>" <?php echo isset($designation_id) && $designation_id == $row['id'] ? 'selected' : '' ?>><?php echo $row['designation'] ?></option>
								<?php endwhile; ?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
                        <div class="form-group">
							<label class="control-label">Email</label>
							<input type="email" class="form-control form-control-sm" name="email" required value="<?php echo isset($email) ? $email : '' ?>">
							<small id="#msg"></small>
						</div>
						<div class="form-group">
							<label class="control-label">Password</label>
							<input type="password" class="form-control form-control-sm" name="password" <?php echo !isset($id) ? "required":'' ?>>
							<small><i><?php echo isset($id) ? "Leave this blank if you dont want to change you password":'' ?></i></small>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Avatar</label>
							<br>
							<div class="custom-file">
		                      <input type="file" class="custom-file-input" id="customFile" name="img" onchange="displayImg(this,$(this))">
		                      <label class="custom-file-label" for="customFile">Choose file</label>
		                    </div>
						</div>
						<div class="form-group d-flex justify-content-center align-items-center">
							<img src="<?php echo isset($avatar) ? 'assets/uploads/'.$avatar :'' ?>" alt="Avatar" id="cimg" class="img-fluid img-thumbnail ">
						</div>
						<div class="form-group d-flex justify-content-center align-items-center">
							<small class="text-muted">Please upload your ID or a professional photo as your avatar</small>
						</div>
					</div>

				</div>
				<hr>
				<div class="col-lg-12 text-right justify-content-center d-flex">
					<button class="btn btn-primary mr-2">Register Doctor/Staff</button>
					<button class="btn btn-secondary" type="button" onclick="location.href = 'index.php?page=client_list'">Back to List</button>
				</div>
			</form>
		</div>
	</div>
</div>
<style>
	img#cimg{
		height: 15vh;
		width: 15vh;
		object-fit: cover;
		border-radius: 100% 100%;
	}
</style>
<script>
	function displayImg(input,_this) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('#cimg').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		} else {
			$('#cimg').attr('src', 'assets/uploads/default_avatar.png');
		}
	}
	$('#manage_client').submit(function(e){
		e.preventDefault()
		$('input').removeClass("border-danger")
		start_load()
		$('#msg').html('')
		let avatar = $('#cimg').attr('src') === 'assets/uploads/default_avatar.png' ? '' : $('input[name="img"]')[0].files[0]
		let formData = new FormData($(this)[0])
		if(!avatar){
			formData.append('img', new File([], 'default_avatar.png'))
		}
		$.ajax({
			url:'ajax.php?action=save_doctor_staff',
			data: formData,
			cache: false,
			contentType: false,
			processData: false,
			method: 'POST',
			type: 'POST',
			success:function(resp){
				if(resp == 1){
					alert_toast('Data successfully saved.',"success");
					setTimeout(function(){
						location.replace('index.php?page=doctor_staff_list')
					},750)
				}else if(resp == 2){
					$('#msg').html("<div class='alert alert-danger'>Email already exist.</div>");
					$('[name="email"]').addClass("border-danger")
					end_load()
				}
			}
		})
	})
</script>
