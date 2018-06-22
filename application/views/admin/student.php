


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
			
				<?php foreach($students as $user_view){?>
					<tr>
					<th scope="row">1<?php #$count = $row; ?></th>
					<td><?php echo $user_view['name']; ?> </td>
					<td><?php echo $user_view['reg_no']; ?> </td>
					<td><?php echo $user_view['program_name']; ?></td>
					<td><button class="btn btn-success">View</button></td>
					<td><button class="btn btn-info">Edit</button></td>
					<td><button class="btn btn-danger">Delete</button></td>
				
				<?php }?>
				
		</table>
	</div>
</div>
	

