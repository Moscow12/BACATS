

<?php echo validation_errors(); ?>

<?php echo form_open('index.php/registered/course'); ?>
<div class="mb-0 mt-4">
         
          <div class="card-columns">

             
            <div class="card mb-3">
            <div class="card-header small text-muted"><h3><?php echo $title; ?></h3></div>
           
                 <div class="form-group">
                    <label>Depertment Id</label>
                    <input type="number" class="form-control" name="dept_id" placeholder="Depertment id" required outofocus>
                </div>
                <div class="form-group">
                    <label>Course Code</label>
                    <input type="text" class="form-control" name="course_code" placeholder="Course name" required outofocus>
                </div>
                 <div class="form-group">
                    <label>Name of Course</label>
                    <input type="text" class="form-control" name="course_name" placeholder="Course name" required outofocus>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
          </div>
        </div>
<?php echo form_close(); ?>

<div class="mb-0 mt-4">    
  <div class="card-columns">
      <div class="card mb-3">
          <div class="card-header small text-muted"> 
              <h2><?php echo $title; ?></h2>
          </div>
           
          <ul class="list-group">
              <?php foreach ($courses as $course){ ?>
              <li class="list-group-item"><?php echo $course['course_code']; ?>
                 
              </li>
              <?php } ?>
          </ul> 
      </div>
    </div>
  </div>