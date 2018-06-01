
<h3><?php echo $title; ?></h3>
<?php echo validation_errors(); ?>

<?php echo form_open('index.php/registered/addstudent'); ?>
<div class="panel panel-warning">
	<div class="panel panel-heading">
		
	</div>
	<div class="panel-boby">
		<div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Full name" required outofocus>
        </div>
        <div class="form-group">
            <label>User name</label>
            <input type="text" class="form-control" name="reg_no" placeholder="User name" required outofocus>
        </div>
     	<div class="form-group">
     	     <label>Password</label>
     	     <input type="password" class="form-control" name="password" placeholder="Password" required autofocus>
     	</div>
     	<div class="form-group">
			<label>Upload student</label>
			<input type="file" name="userfile" size="20">
		</div>
		<button type="submit" class="btn btn-default">Add student</button>
</div>
         
</div>
<?php echo form_close(); ?>
  