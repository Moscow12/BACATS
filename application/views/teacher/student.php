
<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
    
<div class="card">
	<div class="card-header text-center">
		<h3><?php echo $title; ?></h3>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th rowspan="1">#</th>
					<th rowspan="1">Name</th>
					<th rowspan="1">Registration No.</th>
					<th rowspan="1">Program</th>
					<th colspan="1">View Attandance</th>
					
				</tr>
			</thead>
			<tr><!-- Here the the table should query from table student course -->
				<?php foreach($students as $users){?>
					<th scope="row">1<?php #$count = $row; ?></th>
					<td><?php echo $users['name']; ?> </td>
					<td><?php echo $users['reg_no']; ?> </td>
                    <td><button class="btn btn-success"><i class = "fa fa-gear"></button></i></td>
                    <td><button class="btn btn-success"><i class = "fa fa-eye"></button></i></td>
				
				<?php }?>
				<!-- <?php foreach($programes as $program) {?>
					<td><?php echo $program['program_name']; ?></td>
				<?php }?> -->
			<tr><br/>
		</table>
	</div>
</div>
	

