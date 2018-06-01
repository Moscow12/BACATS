
<?php echo validation_errors(); ?>

<?php echo form_open('index.php/Teacher/profile'); ?>
	<div class="col-md-8 center">
		<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel panel-title"><h1 class="text-center"><?php echo $title; ?></h1></div>
						<div class="panel body">
							<div class="form-group">
								<label>Gendar</label>
								<select name="gender" class="form-control">
									<option>Female</option>
									<option>Male</option>
								</select>
							</div>
							<div class="form-group">
								<label>DOB</label>
									<input type="text" name="t_dob" placeholder="Enter Date of Birth" class="form-control">
							</div>
							<div class="form-group">
								<label>Skill</label>
									<input type="text" name="skill" placeholder="Enter Your Skill" class="form-control">
							</div>
							<div class="form-group">
								<label>Phone Number</label>
								<input type="number" name="phoneno" class="form-control" placeholder="Enter your Phone number">
							</div>
							<div class="form-group">
								<label>Position</label>
								<input type="text" name="position" class="form-control" placeholder="Enter your Position">
							</div>
							<div class="form-group">
								<label>Depertment</label>
								<select name="dept_id" class="form-control">
									<?php foreach ($Depertment as $depertment): ?>
									<option value="<?php echo $depertment['dept_id']; ?>"><?php echo $depertment['dept_name']; ?> </option>
									<?php endforeach; ?>  
								</select>
							</div>
							<button class="btn btn-primary" type="submit">Submit</button>

					</div>	
				</div>			
			</div>
		<div class="col-md-2"></div>
	</div>				
	<?php echo form_close(); ?>