

<?php echo validation_errors(); ?>

<?php echo form_open('index.php/registered/program'); ?>
<div class="mb-0 mt-4">
         
          <div class="card-columns">

             
            <div class="card mb-3">
            <div class="card-header small text-muted"><h3><?php echo $title; ?></h3></div>
           
                 <div class="form-group">
                    <label>Program Id</label>
                    <input type="number" class="form-control" name="dept_id" placeholder="Depertment id" required outofocus>
                </div>
                <div class="form-group">
                    <label>Name of Program</label>
                    <input type="text" class="form-control" name="program_name" placeholder="Program name" required outofocus>
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
              <?php foreach ($programs as $program){ ?>
              <li class="list-group-item"><?php echo $program['program_name']; ?>
                 
              </li>
              <?php } ?>
          </ul> 
      </div>
    </div>
  </div>