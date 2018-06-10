
<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
    
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card card-header"><?php echo $title; ?></div>
            <div class="card card-body">
                <?php echo validation_errors(); ?>
                 <?php echo form_open('index.php/Teacher/course'); ?>
                <div class="form-group">
                    <label for="">Select Course</label>
                    <select name="course_name" id="" class="form-control">
                        <?php foreach($Courses as $course) {?>
                        <option value="<?php echo $course['id']; ?>"><?php echo $course['course_name']; ?> </option>
                        <?php }?>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>