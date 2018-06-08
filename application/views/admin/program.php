

<?php echo validation_errors(); ?>

<?php echo form_open('index.php/registered/program'); ?>
<div class="mb-0 mt-4">
    <div class="card-columns">
        <div class="card mb-3">
            <div class="card-header small text-muted"><h3><?php echo $title; ?></h3></div>
                <div class="form-group">
            <label>Department name</label>
                <select name="dept_id" class="form-control">
                    <?php foreach ($departments as $department){ ?>
                        <option value="<?php echo $department['id']; ?>"><?php echo $department['dept_name']; ?> </option>
                    <?php }  ?>
                </select>
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
