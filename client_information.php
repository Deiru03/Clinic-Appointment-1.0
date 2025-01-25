<div class="form-group">
	<center><h1><label for="" class="control-label"><?php echo isset($lastname) ? $lastname : '' ?>, <?php echo isset($firstname) ? $firstname : '' ?> <?php echo isset($middlename) ? $middlename : '' ?></label></h1></center>
</div>
<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
			<form action="" id="manage_medical">
				<input type="hidden" name="id" value="<?php echo isset($lid) ? $lid : '' ?>">
                <div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Sex</label>
							<input type="text" name="d1" class="form-control form-control-sm" disabled value="<?php echo isset($d1) ? $d1 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Civil Status</label>
							<input type="text" name="d2" class="form-control form-control-sm" disabled value="<?php echo isset($d2) ? $d2 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Nationality</label>
							<input type="text" name="d3" class="form-control form-control-sm" disabled value="<?php echo isset($d3) ? $d3 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Religion</label>
							<input type="text" name="d4" class="form-control form-control-sm" disabled value="<?php echo isset($d4) ? $d4 : '' ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Birthdate</label>
							<input type="date" name="d5" class="form-control form-control-sm" disabled value="<?php echo isset($d5) ? $d5 : '' ?>">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Age</label>
							<input type="number" name="d6" class="form-control form-control-sm" disabled value="<?php echo isset($d6) ? $d6 : '' ?>">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Place of Birth</label>
							<input type="text" name="d7" class="form-control form-control-sm" disabled value="<?php echo isset($d7) ? $d7 : '' ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">College/Department</label>
							<input type="text" name="d8" class="form-control form-control-sm" disabled value="<?php echo isset($d8) ? $d8 : '' ?>">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Home Address</label>
							<input type="text" name="d9" class="form-control form-control-sm" disabled value="<?php echo isset($d9) ? $d9 : '' ?>">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Adress While in School</label>
							<input type="text" name="d10" class="form-control form-control-sm" disabled value="<?php echo isset($d10) ? $d10 : '' ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Father's name</label>
							<input type="text" name="d11" class="form-control form-control-sm" disabled value="<?php echo isset($d11) ? $d11 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Occupation</label>
							<input type="text" name="d12" class="form-control form-control-sm" disabled value="<?php echo isset($d12) ? $d12 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Contact Number</label>
							<input type="text" name="d13" class="form-control form-control-sm" disabled value="<?php echo isset($d13) ? $d13 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Address</label>
							<input type="text" name="d14" class="form-control form-control-sm" disabled value="<?php echo isset($d14) ? $d14 : '' ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Mother's name</label>
							<input type="text" name="d15" class="form-control form-control-sm" disabled value="<?php echo isset($d15) ? $d15 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Occupation</label>
							<input type="text" name="d16" class="form-control form-control-sm" disabled value="<?php echo isset($d16) ? $d16 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Contact Number</label>
							<input type="text" name="d17" class="form-control form-control-sm" disabled value="<?php echo isset($d17) ? $d17 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Address</label>
							<input type="text" name="d18" class="form-control form-control-sm" disabled value="<?php echo isset($d18) ? $d18 : '' ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Guardian's name</label>
							<input type="text" name="d19" class="form-control form-control-sm" disabled value="<?php echo isset($d19) ? $d19 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Occupation</label>
							<input type="text" name="d20" class="form-control form-control-sm" disabled value="<?php echo isset($d20) ? $d20 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Contact Number</label>
							<input type="text" name="d21" class="form-control form-control-sm" disabled value="<?php echo isset($d21) ? $d21 : '' ?>">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="" class="control-label">Address</label>
							<input type="text" name="d22" class="form-control form-control-sm" disabled value="<?php echo isset($d22) ? $d22 : '' ?>">
						</div>
					</div>
                </div>
                <br><br>
                <div class="form-group">
					<h3><label for="" class="control-label">IMMUNIZATION</label></h3>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Tetanus&Diptheria</label>
							<input type="date" name="d23" class="form-control form-control-sm" value="<?php echo isset($d23) ? $d23 : '' ?>" disabled>
							<input type="text" name="d24" class="form-control form-control-sm" value="<?php echo isset($d24) ? $d24 : '' ?>" placeholder="Where" disabled>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Tetanus Toxiod</label>
							<input type="date" name="d25" class="form-control form-control-sm" value="<?php echo isset($d25) ? $d25 : '' ?>" disabled>
							<input type="text" name="d26" class="form-control form-control-sm" value="<?php echo isset($d26) ? $d26 : '' ?>" placeholder="Where" disabled>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Measles, Mumps, Rubella (MMR)</label>
							<input type="date" name="d27" class="form-control form-control-sm" value="<?php echo isset($d27) ? $d27 : '' ?>" disabled>
							<input type="text" name="d28" class="form-control form-control-sm" value="<?php echo isset($d28) ? $d28 : '' ?>" placeholder="Where" disabled>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Hepatitis B</label>
							<input type="date" name="d29" class="form-control form-control-sm" value="<?php echo isset($d29) ? $d29 : '' ?>" disabled>
							<input type="text" name="d30" class="form-control form-control-sm" value="<?php echo isset($d30) ? $d30 : '' ?>" placeholder="Where" disabled>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Varicella</label>
							<input type="date" name="d31" class="form-control form-control-sm" value="<?php echo isset($d31) ? $d31 : '' ?>" disabled>
							<input type="text" name="d32" class="form-control form-control-sm" value="<?php echo isset($d32) ? $d32 : '' ?>" placeholder="Where" disabled>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="" class="control-label">Others</label>
							<input type="date" name="d33" class="form-control form-control-sm" value="<?php echo isset($d33) ? $d33 : '' ?>" disabled>
							<input type="text" name="d34" class="form-control form-control-sm" value="<?php echo isset($d34) ? $d34 : '' ?>" placeholder="Where" disabled>
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
							<select name="d35" id="d35" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d35) && $d35 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d35) && $d35 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d36" class="control-label">Anemia</label>
							<select name="d36" id="d36" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d36) && $d36 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d36) && $d36 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d37" class="control-label">Asthma</label>
							<select name="d37" id="d37" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d37) && $d37 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d37) && $d37 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d38" class="control-label">Behavioral Problem</label>
							<select name="d38" id="d38" class="custom custom-select" disabled>
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
							<select name="d39" id="d39" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d39) && $d39 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d39) && $d39 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d40" class="control-label">Blood Abnormality</label>
							<select name="d40" id="d40" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d40) && $d40 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d40) && $d40 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d41" class="control-label">Chicken Fox</label>
							<select name="d41" id="d41" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d41) && $d41 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d41) && $d41 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d42" class="control-label">Convulsion</label>
							<select name="d42" id="d42" class="custom custom-select" disabled>
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
							<select name="d43" id="d4" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d43) && $d43 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d43) && $d43 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d44" class="control-label">Diabetes</label>
							<select name="d44" id="d44" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d44) && $d44 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d44) && $d44 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d45" class="control-label">Ear Problem</label>
							<select name="d45" id="d45" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d45) && $d45 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d45) && $d45 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d46" class="control-label">Eating Disorder</label>
							<select name="d46" id="d46" class="custom custom-select" disabled>
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
							<select name="d47" id="d47" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d47) && $d47 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d47) && $d47 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d48" class="control-label">Eye Problem</label>
							<select name="d48" id="d48" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d48) && $d48 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d48) && $d48 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d49" class="control-label">Fracture</label>
							<select name="d49" id="d49" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d49) && $d49 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d49) && $d49 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d50" class="control-label">Hearing Problem</label>
							<select name="d50" id="d50" class="custom custom-select" disabled>
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
							<select name="d51" id="d51" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d51) && $d51 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d51) && $d51 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d52" class="control-label">Hyperectivity</label>
							<select name="d52" id="d52" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d52) && $d52 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d52) && $d52 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d53" class="control-label">Indigestion</label>
							<select name="d53" id="d53" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d53) && $d53 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d53) && $d53 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d54" class="control-label">Insomia</label>
							<select name="d54" id="d54" class="custom custom-select" disabled>
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
							<select name="d55" id="d55" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d55) && $d55 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d55) && $d55 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d56" class="control-label">Liver Problem</label>
							<select name="d56" id="d56" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d56) && $d56 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d56) && $d56 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d57" class="control-label">Measles</label>
							<select name="d57" id="d57" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d57) && $d57 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d57) && $d57 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d58" class="control-label">Mumps</label>
							<select name="d58" id="d58" class="custom custom-select" disabled>
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
							<select name="d59" id="d59" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d59) && $d59 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d59) && $d59 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d60" class="control-label">Pneumonia</label>
							<select name="d60" id="d60" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d60) && $d60 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d60) && $d60 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d61" class="control-label">Primary Complex</label>
							<select name="d61" id="d61" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d61) && $d61 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d61) && $d61 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d62" class="control-label">Scoliosis</label>
							<select name="d62" id="d62" class="custom custom-select" disabled>
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
							<select name="d63" id="d63" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d63) && $d63 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d63) && $d63 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d64" class="control-label">Tonsilitis</label>
							<select name="d64" id="d64" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d64) && $d64 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d64) && $d64 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d65" class="control-label">Typhoid Fever</label>
							<select name="d65" id="d65" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d65) && $d65 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d65) && $d65 == "1" ? "selected": "" ?>>YES</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d66" class="control-label">Visual Defect</label>
							<select name="d66" id="d66" class="custom custom-select" disabled>
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
							<select name="d67" id="d67" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d67) && $d67 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d67) && $d67 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d68" class="form-control form-control-sm" value="<?php echo isset($d68) ? $d68 : '' ?>" placeholder="Relation to Client" disabled>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d69" class="control-label">Bleeding Tendency</label>
							<select name="d69" id="d69" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d69) && $d69 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d69) && $d69 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d70" class="form-control form-control-sm" value="<?php echo isset($d70) ? $d70 : '' ?>" placeholder="Relation to Client" disabled>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d71" class="control-label">Cancer</label>
							<select name="d71" id="d71" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d71) && $d71 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d71) && $d71 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d72" class="form-control form-control-sm" value="<?php echo isset($d72) ? $d72 : '' ?>" placeholder="Relation to Client" disabled>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d73" class="control-label">Diabetes</label>
							<select name="d73" id="d73" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d73) && $d73 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d73) && $d73 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d74" class="form-control form-control-sm" value="<?php echo isset($d74) ? $d74 : '' ?>" placeholder="Relation to Client" disabled>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="d75" class="control-label">Heart Disorder</label>
							<select name="d75" id="d75" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d75) && $d75 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d75) && $d75 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d76" class="form-control form-control-sm" value="<?php echo isset($d76) ? $d76 : '' ?>" placeholder="Relation to Client" disabled>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d77" class="control-label">High Blood Pressure</label>
							<select name="d77" id="d77" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d77) && $d77 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d77) && $d77 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d78" class="form-control form-control-sm" value="<?php echo isset($d78) ? $d78 : '' ?>" placeholder="Relation to Client" disabled>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d79" class="control-label">Kidney Problem</label>
							<select name="d79" id="d79" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d79) && $d79 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d79) && $d79 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d80" class="form-control form-control-sm" value="<?php echo isset($d80) ? $d80 : '' ?>" placeholder="Relation to Client" disabled>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d81" class="control-label">Mental Disorder</label>
							<select name="d81" id="d81" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d81) && $d81 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d81) && $d81 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d82" class="form-control form-control-sm" value="<?php echo isset($d82) ? $d82 : '' ?>" placeholder="Relation to Client" disabled>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label for="d83" class="control-label">Obesity</label>
							<select name="d83" id="d83" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d83) && $d83 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d83) && $d83 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d84" class="form-control form-control-sm" value="<?php echo isset($d84) ? $d84 : '' ?>" placeholder="Relation to Client" disabled>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d85" class="control-label">Seizure Disorder</label>
							<select name="d85" id="d85" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d85) && $d85 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d85) && $d85 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d86" class="form-control form-control-sm" value="<?php echo isset($d86) ? $d86 : '' ?>" placeholder="Relation to Client" disabled>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d87" class="control-label">Tuberculosis</label>
							<select name="d87" id="d87" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d87) && $d87 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d87) && $d87 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d88" class="form-control form-control-sm" value="<?php echo isset($d88) ? $d88 : '' ?>" placeholder="Relation to Client" disabled>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="d89" class="control-label">Others</label>
							<select name="d89" id="d89" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d89) && $d89 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d89) && $d89 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d90" class="form-control form-control-sm" value="<?php echo isset($d90) ? $d90 : '' ?>" placeholder="Relation to Client" disabled>
						</div>
					</div>
				</div>
				<br><br>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="d91" class="control-label">The Client Has a History of Hospitalization</label>
							<select name="d91" id="d91" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d91) && $d91 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d91) && $d91 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d92" class="form-control form-control-sm" value="<?php echo isset($d92) ? $d92 : '' ?>" placeholder="Details" disabled>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="d93" class="control-label">The Client Has a History of Surgical Operation</label>
							<select name="d93" id="d93" class="custom custom-select" disabled>
								<option value="0"<?php echo isset($d93) && $d93 == "0" ? "selected": "" ?>>NO</option>
								<option value="1"<?php echo isset($d93) && $d93 == "1" ? "selected": "" ?>>YES</option>
							</select>
							<input type="text" name="d94" class="form-control form-control-sm" value="<?php echo isset($d94) ? $d94 : '' ?>" placeholder="Details" disabled>
						</div>
					</div>
				</div>
				<hr>
				<div class="col-lg-12 text-right justify-content-center d-flex">
					<button class="btn btn-secondary" type="button" onclick="location.href = 'index.php?page=client_list'">Back to List</button>
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