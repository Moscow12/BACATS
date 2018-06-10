<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>	
    <div class="card m-3 border-danger">
    	<div class="card-header  text-center"><?php echo $title; ?></div>
  			<div class="card-body">
			  	<?php echo validation_errors(); ?>
				<?php echo form_open('index.php/Student/profile'); ?>
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
					<label>Phone Number</label>
					<input type="number" name="phoneno" class="form-control" placeholder="Enter your Phone number">
				</div>
				<div class="form-group">
					<label>Email Address</label>
					<input type="text" name="email" class="form-control" placeholder="Enter your email">
				</div>
                <div class="form-group">
					<label>Location</label>
					<input type="text" name="location" class="form-control" placeholder="Enter place you settle">
				</div>				
				<button class="btn btn-primary" type="submit">Submit</button>
			</div>	
  		<div class="card-footer border-danger text-danger text-center">Bepunctual attend classes</div>
	</div>