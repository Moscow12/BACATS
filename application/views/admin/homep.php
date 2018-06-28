
<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>BACATS | register</title>
		<!-- <link rel="stylesheet" href="../../../assets/css/main.css"> -->
		<link href="<?=base_url();?>assets/css/main.css" rel="stylesheet">
	</head>
	<body>
	<?php echo form_open('index.php/registered/homep'); ?>
	<div class="row">
		<!-- <div class="col-md-6"> -->
		
			<div class="card mesha">
				<div class="card-body"><div class="card-header text-center"><?php echo $title; ?></div>
				
					<?php echo validation_errors(); ?>		
						<div class="form-group">
							<label>First Name</label>
							<input type="text" class="form-control" name="firstname" placeholder=" First Name">
						</div>
						<div class="form-group">
							<label>Middle Name</label>
							<input type="text" class="form-control" name="mname" placeholder="Middle name">
						</div>
						<div class="form-group">
							<label>Last Name</label>
							<input type="text" class="form-control" name="lastname" placeholder="Last Name">
						</div>
						<div class="form-group">
							<label>User name</label>
							<input type="text" class="form-control" name="reg_no" placeholder="User name">
						</div>
						<div class="form-group">
							<label>User Role</label>
								<select name="role_id" class="form-control">
									<?php foreach ($roles as $role){ ?>
										<option value="<?php echo $role['id']; ?>"><?php echo $role['role_name']; ?> </option>
									<?php }  ?>
								</select>
						</div>
							<button class="btn btn-primary" type="submit">Submit</button>
						</div>
			</div>
		<!-- </div> -->
	</div>
	</body>
	</html>
<?php echo form_close(); ?>
 