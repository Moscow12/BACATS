<?php echo $title; ?>
<!--design of a table-->
<!-- <div class="row">
	<div class="col-md-2"> happa<br/> hapa<br/></div>
		<div class="col-md-10">
			<table class="table table-striped"> 		
				<thead> 
					<tr> 
						<th>Name</th>
						<th>Reg.No</th>					
						<th>Student details</th>
					</tr>	
				<?php 				
					foreach ($registers as $registered){ ?>
					<tr>
						<td><?php echo $registered['firstname']; echo $registered['mname']; echo $registered['lastname']; ?> </td>
						<td><?php echo $registered['reg_no']; ?> </td>
						<td>
						<span class="glyphicon glyphicon-eye-open"></span>
						<a href="details">view</a>
						</td>
					</tr>
				<?php }?>			
			</tbody> 
		</table>
	</div>
</div> -->

<!--End of table design--> 

<?php echo validation_errors(); ?>

<?php echo form_open('index.php/users/register'); ?>
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
	<div class="row">
		<!-- <div class="col-md-6"> -->
			<div class="card mesha">
				<div class="card-body"><div class="card-header text-center">register</div>
					<h3 class="card-title text-center"><?php echo $title; ?></h3>
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
						 <p> if arleady registered	<a href="<?php echo base_url(); ?>index.php/users/login">login</a></p>
				</div>
			</div>
		<!-- </div> -->
	</div>
	</body>
	</html>
<?php echo form_close(); ?>
 