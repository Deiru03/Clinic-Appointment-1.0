
<?php
$qry = $conn->query("SELECT * FROM `schedule_settings`");
$meta = array_column($qry->fetch_all(MYSQLI_ASSOC),'meta_value','meta_field');
?>

<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-header">
			<h5 class="card-title">Clinic Schedule Settings</h5>
		</div>
		<div class="card-body">
			<form action="" id="schedule_settings">
				<div id="msg" class="form-group"></div>
                <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                    <label for="" class="control-label">Weekly Schedule</label><br>
                    <div class="icheck-primary">
                        <input type="checkbox" id="checkboxPrimary1" name="day_schedule[]" value='Sunday' <?php echo isset($meta['day_schedule']) && in_array("Sunday",explode(",",$meta['day_schedule'])) ? "checked" : ''  ?>>
                        <label for="checkboxPrimary1">
                            Sunday
                        </label>
                    </div>
                    <div class="icheck-primary">
                        <input type="checkbox" id="checkboxPrimary2" name="day_schedule[]" value='Monday'  <?php echo isset($meta['day_schedule']) && in_array("Monday",explode(",",$meta['day_schedule'])) ? "checked" : ''  ?>>
                        <label for="checkboxPrimary2">
                            Monday
                        </label>
                    </div>
                    <div class="icheck-primary">
                        <input type="checkbox" id="checkboxPrimary3" name="day_schedule[]" value='Tuesday'  <?php echo isset($meta['day_schedule']) && in_array("Tuesday",explode(",",$meta['day_schedule'])) ? "checked" : ''  ?>>
                        <label for="checkboxPrimary3">
                            Tuesday
                        </label>
                    </div>
                    <div class="icheck-primary">
                        <input type="checkbox" id="checkboxPrimary4" name="day_schedule[]" value='Wednesday'  <?php echo isset($meta['day_schedule']) && in_array("Wednesday",explode(",",$meta['day_schedule'])) ? "checked" : ''  ?>>
                        <label for="checkboxPrimary4">
                            Wednesday
                        </label>
                    </div>
                    <div class="icheck-primary">
                        <input type="checkbox" id="checkboxPrimary5" name="day_schedule[]" value='Thursday'  <?php echo isset($meta['day_schedule']) && in_array("Thursday",explode(",",$meta['day_schedule'])) ? "checked" : ''  ?>>
                        <label for="checkboxPrimary5">
                            Thursday
                        </label>
                    </div>
                    <div class="icheck-primary">
                        <input type="checkbox" id="checkboxPrimary6" name="day_schedule[]" value='Friday'  <?php echo isset($meta['day_schedule']) && in_array("Friday",explode(",",$meta['day_schedule'])) ? "checked" : ''  ?>>
                        <label for="checkboxPrimary6">
                            Friday
                        </label>
                    </div>
                    <div class="icheck-primary">
                        <input type="checkbox" id="checkboxPrimary7" name="day_schedule[]" value='Saturday'  <?php echo isset($meta['day_schedule']) && in_array("Saturday",explode(",",$meta['day_schedule'])) ? "checked" : ''  ?>>
                        <label for="checkboxPrimary7">
                            Saturday
                        </label>
                    </div>
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="" class="control-label">Morning Time Schedule</label>
                            <div class="row row-cols-3">
                            <input type="time" class="form-control col" name="morning_schedule[]" value="<?php echo isset($meta['morning_schedule']) ? explode(',',$meta['morning_schedule'])[0] : "" ?>" required>
                            <span class="col-auto"> - </span>
                            <input type="time" class="form-control col" name="morning_schedule[]" value="<?php echo isset($meta['morning_schedule']) ? explode(',',$meta['morning_schedule'])[1] : "" ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Afternoon Time Schedule</label>
                        <div class="row row-cols-3">
                            <input type="time" class="form-control col" name="afternoon_schedule[]" value="<?php echo isset($meta['afternoon_schedule']) ? explode(',',$meta['afternoon_schedule'])[0] : "" ?>" required>
                            <span class="col-auto"> - </span>
                            <input type="time" class="form-control col" name="afternoon_schedule[]" value="<?php echo isset($meta['afternoon_schedule']) ? explode(',',$meta['afternoon_schedule'])[1] : "" ?>" required>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-12 text-right justify-content-center d-flex">
                    <button class="btn btn-primary mr-2">Update Clinic Schedule</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
	function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
	$('#schedule_settings').submit(function(e){
		e.preventDefault()
		$('input').removeClass("border-danger")
		start_load()
		$('#msg').html('')
		$.ajax({
			url:'ajax.php?action=save_sched_settings',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp == 1){
					alert_toast('Data successfully saved.',"success");
					setTimeout(function(){
						location.replace('index.php?page=schedule_settings')
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