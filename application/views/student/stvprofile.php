<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>

	<div class="row">
    <div class="col-md-6">
			<div class="card">
				<div class="card card-header"><h1 class="text-center"><?php echo $title; ?></h1></div>
					<div class="card body">
					<table class="table" border="0"> 
						<caption>Registered as</caption> 
							
							<tbody>
							<?php foreach($profile as $stprofile_view){?>
								<tr> 
									<th>Name</th>
									<td><?php echo $stprofile_view['name']; ?></td>
								</tr>	<?php }?>
								<tr>	
									<th>Reg. No.</th>
									<td><?php echo $stprofile_view['reg_no']; ?></td>
								</tr>
								<tr>	
									<th>Location</th>
									<td><?php echo $stprofile_view['location']; ?></td>
								</tr>
								<tr>	
									<th>DOB</th>
									<td><?php echo $stprofile_view['dob'];?></td>
								</tr>
								<tr>	
									<th>Gender</th>
									<td><?php echo $stprofile_view['gender']; ?></td>
								</tr>
								<tr>	
									<th>Phone Number</th>
									<td><?php echo $stprofile_view['location']; ?></td>
								</tr>
								<tr>	
									<th>Email Address</th>
									<td><?php echo $stprofile_view['email']; ?></td>
								</tr> 
								<tr> 
									<th>Department</th> 
									<td><?php echo $stprofile_view['program_name']; ?></td>
								<tr> 
						
							</tbody> 
						</table>
					</div>	
				</div>			
			</div>
    </div>