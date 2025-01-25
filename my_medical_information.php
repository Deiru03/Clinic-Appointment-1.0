<?php include'db_connect.php' ?>
<?php if(isset($_SESSION['login_id'])):?>
<?php endif; ?>

<?php
	$lid = $_SESSION['login_id'];
	$sql = "SELECT * from client_list where id=$lid";
	$result = $conn->query($sql);
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$d23=$row["d23"];
			$d24=$row["d24"];
			$d25=$row["d25"];
			$d26=$row["d26"];
			$d27=$row['d27'];
			$d28=$row['d28'];
			$d29=$row['d29'];
			$d30=$row['d30'];
			$d31=$row["d31"];
			$d32=$row["d32"];
			$d33=$row["d33"];
			$d34=$row["d34"];
			$d35=$row["d35"];
			$d36=$row["d36"];
			$d37=$row['d37'];
			$d38=$row['d38'];
			$d39=$row['d39'];
			$d40=$row['d40'];
			$d41=$row["d41"];
			$d42=$row["d42"];
			$d43=$row["d43"];
			$d44=$row["d44"];
			$d45=$row["d45"];
			$d46=$row["d46"];
			$d47=$row['d47'];
			$d48=$row['d48'];
			$d49=$row['d49'];
			$d50=$row['d50'];
			$d51=$row["d51"];
			$d52=$row["d52"];
			$d53=$row["d53"];
			$d54=$row["d54"];
			$d55=$row["d55"];
			$d56=$row["d56"];
			$d57=$row['d57'];
			$d58=$row['d58'];
			$d59=$row['d59'];
			$d60=$row['d60'];
			$d61=$row["d61"];
			$d62=$row["d62"];
			$d63=$row["d63"];
			$d64=$row["d64"];
			$d65=$row["d65"];
			$d66=$row["d66"];
			$d67=$row['d67'];
			$d68=$row['d68'];
			$d69=$row['d69'];
			$d70=$row['d70'];
			$d71=$row["d71"];
			$d72=$row["d72"];
			$d73=$row["d73"];
			$d74=$row["d74"];
			$d75=$row["d75"];
			$d76=$row["d76"];
			$d77=$row['d77'];
			$d78=$row['d78'];
			$d79=$row['d79'];
			$d80=$row['d80'];
			$d81=$row["d81"];
			$d82=$row["d82"];
			$d83=$row["d83"];
			$d84=$row["d84"];
			$d85=$row["d85"];
			$d86=$row["d86"];
			$d87=$row['d87'];
			$d88=$row['d88'];
			$d89=$row['d89'];
			$d90=$row['d90'];
			$d91=$row["d91"];
			$d92=$row["d92"];
			$d93=$row["d93"];
			$d94=$row["d94"];
		}
	}
?>
<!--
<div class="form-group">
	<center><h3><label for="" class="control-label">MY PERSONAL INFORMATION</label></h3></center>
</div>
-->
<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
			<form action="" id="manage_medical">
				<input type="hidden" name="id" value="<?php echo isset($lid) ? $lid : '' ?>">
				<div class="form-group">
					<h3><label for="" class="control-label">IMMUNIZATION</label></h3>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Tetanus&Diptheria</label>
							<input type="date" name="d23" class="form-control form-control-sm" value="<?php echo isset($d23) ? $d23 : '' ?>">
							<input type="text" name="d24" class="form-control form-control-sm" value="<?php echo isset($d24) ? $d24 : '' ?>" placeholder="Where">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Tetanus Toxiod</label>
							<input type="date" name="d25" class="form-control form-control-sm" value="<?php echo isset($d25) ? $d25 : '' ?>">
							<input type="text" name="d26" class="form-control form-control-sm" value="<?php echo isset($d26) ? $d26 : '' ?>" placeholder="Where">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Measles, Mumps, Rubella (MMR)</label>
							<input type="date" name="d27" class="form-control form-control-sm" value="<?php echo isset($d27) ? $d27 : '' ?>">
							<input type="text" name="d28" class="form-control form-control-sm" value="<?php echo isset($d28) ? $d28 : '' ?>" placeholder="Where">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Hepatitis B</label>
							<input type="date" name="d29" class="form-control form-control-sm" value="<?php echo isset($d29) ? $d29 : '' ?>">
							<input type="text" name="d30" class="form-control form-control-sm" value="<?php echo isset($d30) ? $d30 : '' ?>" placeholder="Where">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Varicella</label>
							<input type="date" name="d31" class="form-control form-control-sm" value="<?php echo isset($d31) ? $d31 : '' ?>">
							<input type="text" name="d32" class="form-control form-control-sm" value="<?php echo isset($d32) ? $d32 : '' ?>" placeholder="Where">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Others</label>
							<input type="date" name="d33" class="form-control form-control-sm" value="<?php echo isset($d33) ? $d33 : '' ?>">
							<input type="text" name="d34" class="form-control form-control-sm" value="<?php echo isset($d34) ? $d34 : '' ?>" placeholder="Where">
						</div>
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<h3><label for="" class="control-label">MEDICAL HISTORY: The client suffered from (please select YES/NO)</label></h3>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="d35" class="control-label">Allergy</label>
							<select name="d35" id="d35" class="custom custom-select">
								<option value="0"<?php echo isset($d35) && $d35 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d35) && $d35 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d36" class="control-label">Anemia</label>
							<select name="d36" id="d36" class="custom custom-select">
								<option value="0"<?php echo isset($d36) && $d36 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d36) && $d36 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d37" class="control-label">Asthma</label>
							<select name="d37" id="d37" class="custom custom-select">
								<option value="0"<?php echo isset($d37) && $d37 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d37) && $d37 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d38" class="control-label">Behavioral Problem</label>
							<select name="d38" id="d38" class="custom custom-select">
								<option value="0"<?php echo isset($d38) && $d38 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d38) && $d38 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="d39" class="control-label">Bleeding Problem</label>
							<select name="d39" id="d39" class="custom custom-select">
								<option value="0"<?php echo isset($d39) && $d39 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d39) && $d39 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d40" class="control-label">Blood Abnormality</label>
							<select name="d40" id="d40" class="custom custom-select">
								<option value="0"<?php echo isset($d40) && $d40 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d40) && $d40 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d41" class="control-label">Chicken Fox</label>
							<select name="d41" id="d41" class="custom custom-select">
								<option value="0"<?php echo isset($d41) && $d41 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d41) && $d41 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d42" class="control-label">Convulsion</label>
							<select name="d42" id="d42" class="custom custom-select">
								<option value="0"<?php echo isset($d42) && $d42 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d42) && $d42 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="d43" class="control-label">Dengue</label>
							<select name="d43" id="d4" class="custom custom-select">
								<option value="0"<?php echo isset($d43) && $d43 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d43) && $d43 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d44" class="control-label">Diabetes</label>
							<select name="d44" id="d44" class="custom custom-select">
								<option value="0"<?php echo isset($d44) && $d44 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d44) && $d44 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d45" class="control-label">Ear Problem</label>
							<select name="d45" id="d45" class="custom custom-select">
								<option value="0"<?php echo isset($d45) && $d45 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d45) && $d45 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d46" class="control-label">Eating Disorder</label>
							<select name="d46" id="d46" class="custom custom-select">
								<option value="0"<?php echo isset($d46) && $d46 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d46) && $d46 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="d47" class="control-label">Epilepsy</label>
							<select name="d47" id="d47" class="custom custom-select">
								<option value="0"<?php echo isset($d47) && $d47 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d47) && $d47 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d48" class="control-label">Eye Problem</label>
							<select name="d48" id="d48" class="custom custom-select">
								<option value="0"<?php echo isset($d48) && $d48 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d48) && $d48 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d49" class="control-label">Fracture</label>
							<select name="d49" id="d49" class="custom custom-select">
								<option value="0"<?php echo isset($d49) && $d49 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d49) && $d49 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d50" class="control-label">Hearing Problem</label>
							<select name="d50" id="d50" class="custom custom-select">
								<option value="0"<?php echo isset($d50) && $d50 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d50) && $d50 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="d51" class="control-label">Heart Disorder</label>
							<select name="d51" id="d51" class="custom custom-select">
								<option value="0"<?php echo isset($d51) && $d51 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d51) && $d51 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d52" class="control-label">Hyperectivity</label>
							<select name="d52" id="d52" class="custom custom-select">
								<option value="0"<?php echo isset($d52) && $d52 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d52) && $d52 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d53" class="control-label">Indigestion</label>
							<select name="d53" id="d53" class="custom custom-select">
								<option value="0"<?php echo isset($d53) && $d53 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d53) && $d53 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d54" class="control-label">Insomia</label>
							<select name="d54" id="d54" class="custom custom-select">
								<option value="0"<?php echo isset($d54) && $d54 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d54) && $d54 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="d55" class="control-label">Kidney Problem</label>
							<select name="d55" id="d55" class="custom custom-select">
								<option value="0"<?php echo isset($d55) && $d55 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d55) && $d55 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d56" class="control-label">Liver Problem</label>
							<select name="d56" id="d56" class="custom custom-select">
								<option value="0"<?php echo isset($d56) && $d56 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d56) && $d56 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d57" class="control-label">Measles</label>
							<select name="d57" id="d57" class="custom custom-select">
								<option value="0"<?php echo isset($d57) && $d57 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d57) && $d57 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d58" class="control-label">Mumps</label>
							<select name="d58" id="d58" class="custom custom-select">
								<option value="0"<?php echo isset($d58) && $d58 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d58) && $d58 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="d59" class="control-label">Parasitism</label>
							<select name="d59" id="d59" class="custom custom-select">
								<option value="0"<?php echo isset($d59) && $d59 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d59) && $d59 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d60" class="control-label">Pneumonia</label>
							<select name="d60" id="d60" class="custom custom-select">
								<option value="0"<?php echo isset($d60) && $d60 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d60) && $d60 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d61" class="control-label">Primary Complex</label>
							<select name="d61" id="d61" class="custom custom-select">
								<option value="0"<?php echo isset($d61) && $d61 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d61) && $d61 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d62" class="control-label">Scoliosis</label>
							<select name="d62" id="d62" class="custom custom-select">
								<option value="0"<?php echo isset($d62) && $d62 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d62) && $d62 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="d63" class="control-label">Skin Problem</label>
							<select name="d63" id="d63" class="custom custom-select">
								<option value="0"<?php echo isset($d63) && $d63 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d63) && $d63 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d64" class="control-label">Tonsilitis</label>
							<select name="d64" id="d64" class="custom custom-select">
								<option value="0"<?php echo isset($d64) && $d64 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d64) && $d64 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d65" class="control-label">Typhoid Fever</label>
							<select name="d65" id="d65" class="custom custom-select">
								<option value="0"<?php echo isset($d65) && $d65 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d65) && $d65 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d66" class="control-label">Visual Defect</label>
							<select name="d66" id="d66" class="custom custom-select">
								<option value="0"<?php echo isset($d66) && $d66 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d66) && $d66 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
				</div>
				<br><br>
				<div class="form-group">
					<h3><label for="" class="control-label">FAMILY HISTORY</label></h3>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="d67" class="control-label">Asthma</label>
							<select name="d67" id="d67" class="custom custom-select">
								<option value="0"<?php echo isset($d67) && $d67 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d67) && $d67 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d68" class="form-control form-control-sm" value="<?php echo isset($d68) ? $d68 : '' ?>" placeholder="Relation to Client">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d69" class="control-label">Bleeding Tendency</label>
							<select name="d69" id="d69" class="custom custom-select">
								<option value="0"<?php echo isset($d69) && $d69 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d69) && $d69 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d70" class="form-control form-control-sm" value="<?php echo isset($d70) ? $d70 : '' ?>" placeholder="Relation to Client">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d71" class="control-label">Cancer</label>
							<select name="d71" id="d71" class="custom custom-select">
								<option value="0"<?php echo isset($d71) && $d71 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d71) && $d71 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d72" class="form-control form-control-sm" value="<?php echo isset($d72) ? $d72 : '' ?>" placeholder="Relation to Client">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d73" class="control-label">Diabetes</label>
							<select name="d73" id="d73" class="custom custom-select">
								<option value="0"<?php echo isset($d73) && $d73 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d73) && $d73 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d74" class="form-control form-control-sm" value="<?php echo isset($d74) ? $d74 : '' ?>" placeholder="Relation to Client">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="d75" class="control-label">Heart Disorder</label>
							<select name="d75" id="d75" class="custom custom-select">
								<option value="0"<?php echo isset($d75) && $d75 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d75) && $d75 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d76" class="form-control form-control-sm" value="<?php echo isset($d76) ? $d76 : '' ?>" placeholder="Relation to Client">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d77" class="control-label">High Blood Pressure</label>
							<select name="d77" id="d77" class="custom custom-select">
								<option value="0"<?php echo isset($d77) && $d77 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d77) && $d77 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d78" class="form-control form-control-sm" value="<?php echo isset($d78) ? $d78 : '' ?>" placeholder="Relation to Client">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d79" class="control-label">Kidney Problem</label>
							<select name="d79" id="d79" class="custom custom-select">
								<option value="0"<?php echo isset($d79) && $d79 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d79) && $d79 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d80" class="form-control form-control-sm" value="<?php echo isset($d80) ? $d80 : '' ?>" placeholder="Relation to Client">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d81" class="control-label">Mental Disorder</label>
							<select name="d81" id="d81" class="custom custom-select">
								<option value="0"<?php echo isset($d81) && $d81 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d81) && $d81 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d82" class="form-control form-control-sm" value="<?php echo isset($d82) ? $d82 : '' ?>" placeholder="Relation to Client">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="d83" class="control-label">Obesity</label>
							<select name="d83" id="d83" class="custom custom-select">
								<option value="0"<?php echo isset($d83) && $d83 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d83) && $d83 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d84" class="form-control form-control-sm" value="<?php echo isset($d84) ? $d84 : '' ?>" placeholder="Relation to Client">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d85" class="control-label">Seizure Disorder</label>
							<select name="d85" id="d85" class="custom custom-select">
								<option value="0"<?php echo isset($d85) && $d85 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d85) && $d85 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d86" class="form-control form-control-sm" value="<?php echo isset($d86) ? $d86 : '' ?>" placeholder="Relation to Client">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d87" class="control-label">Tuberculosis</label>
							<select name="d87" id="d87" class="custom custom-select">
								<option value="0"<?php echo isset($d87) && $d87 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d87) && $d87 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d88" class="form-control form-control-sm" value="<?php echo isset($d88) ? $d88 : '' ?>" placeholder="Relation to Client">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d89" class="control-label">Others</label>
							<select name="d89" id="d89" class="custom custom-select">
								<option value="0"<?php echo isset($d89) && $d89 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d89) && $d89 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d90" class="form-control form-control-sm" value="<?php echo isset($d90) ? $d90 : '' ?>" placeholder="Relation to Client">
						</div>
					</div>
				</div>
				<br><br>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="d91" class="control-label">The Client Has a History of Hospitalization</label>
							<select name="d91" id="d91" class="custom custom-select">
								<option value="0"<?php echo isset($d91) && $d91 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d91) && $d91 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d92" class="form-control form-control-sm" value="<?php echo isset($d92) ? $d92 : '' ?>" placeholder="Details">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="d93" class="control-label">The Client Has a History of Surgical Operation</label>
							<select name="d93" id="d93" class="custom custom-select">
								<option value="0"<?php echo isset($d93) && $d93 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d93) && $d93 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d94" class="form-control form-control-sm" value="<?php echo isset($d94) ? $d94 : '' ?>" placeholder="Details">
						</div>
					</div>
				</div>
				<hr>
				<div class="col-lg-12 text-right justify-content-center d-flex">
					<button class="btn btn-primary mr-2">Save</button>
					<button class="btn btn-secondary" type="button" onclick="location.href = 'index.php?page=home'">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	$('#manage_medical').submit(function(e){
		e.preventDefault()
		$('input').removeClass("border-danger")
		start_load()
		$('#msg').html('')
		$.ajax({
			url:'ajax.php?action=save_client_info',
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
						location.replace('index.php?page=my_medical_information')
					},750)
				}else if(resp == 2){
					alert_toast('An error occured.',"failed");
					setTimeout(function(){
						end_load()
					},1750)
				}
			}
		})
	})
</script>