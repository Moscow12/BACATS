<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>

	<div class="row">
    <div class="col-md-6">
			<div class="card">
				<div class="card card-header"><h1 class="text-center"><?php echo $title; ?></h1></div>
					<div class="card body">
					<table class="table" border="1"> 
						<caption>Registered as</caption> 
							
							<tbody>
							<?php foreach($profile as $users){?>
								<tr> 
									<th>Name</th>
									<td><?php echo $users['name']; ?></td>
								</tr>	<?php }?>
								<tr>	
									<th>Reg. No.</th>
									<td><?php echo $users['reg_no']; ?></td>
								</tr>
								<tr>	
									<th>Office Number</th>
									<td><?php echo $teacher['officeno']; ?></td>
								</tr>
								<tr>	
									<th>DOB</th>
									<td><?php $v = date('y/m/d'); echo $v;?></td>
								</tr>
								<tr>	
									<th>Gender</th>
									<td>Female</td>
								</tr>
								<tr>	
									<th>Phone Number</th>
									<td>255762653210</td>
								</tr>
								<tr>	
									<th>Email Address</th>
									<td>moscow2@hotmail.com</td>
								</tr> 
								<tr> 
									<th>Department</th> 
									<td>Bsc. with computer science</td>
								<tr> 
						
							</tbody> 
						</table>
					</div>	
				</div>			
			</div>
    </div>