


<div class="card">
	<div class="card-header text-center">
		<h3><?php echo $title; ?></h3>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th rowspan="2">#</th>
					<th rowspan="2">Name</th>
					<th rowspan="2">Registration No.</th>
					<th rowspan="2">Program</th>
					<th colspan="3" width="20%">Modify</th>
					
				</tr>
				<tr>
					<th ><button class="btn btn-success"><i class = "fa fa-eye"></button></i></th>
					<th><button class="btn btn-primary"> <i class = "fa fa-edit"></button></i></th>
					<th><button class="btn btn-danger"> <i class = "fa fa-trash"></button></i></th>
				</tr>
			</thead>
			<tr>
				<?php foreach($students as $users){?>
					<th scope="row">1<?php #$count = $row; ?></th>
					<td><?php echo $users['name']; ?> </td>
					<td><?php echo $users['reg_no']; ?> </td>
				
				<?php }?>
				<?php foreach($programes as $program) {?>
					<td><?php echo $program['program_name']; ?></td>
				<?php }?>
			<tr><br/>
		</table>
	</div>
</div>
	

