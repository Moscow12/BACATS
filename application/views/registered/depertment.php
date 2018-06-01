
<div class="row">
<?php echo validation_errors(); ?>

<?php echo form_open('index.php/registered/dept'); ?>
<div class="mb-0 mt-4">
         
          <div class="card-columns">

             
            <div class="card mb-3">
            <div class="card-header small text-muted"><h3><?php echo $title; ?></h3></div>
           
            <div class="form-group">
                <label>select Collage</label>
                    <select name="collage_id" class="form-control">
                        <?php foreach ($collages as $collage){ ?>
                            <option value="<?php echo $collage['id']; ?>"><?php echo $collage['collage_name']; ?> </option>
                        <?php }  ?>
                    </select>
            </div>
                <div class="form-group">
                    <label>Name of Depertment</label>
                    <input type="text" class="form-control" name="dept_name" placeholder="Depertment name" required outofocus>
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
              <?php foreach ($depertments as $depertment){ ?>
              <li class="list-group-item"><?php echo $depertment['dept_name']; ?>
                 
              </li>
              <?php } ?>
          </ul> 
      </div>
    </div>
  </div>
</div>