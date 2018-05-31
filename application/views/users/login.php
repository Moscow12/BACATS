<?php echo validation_errors(); ?>
<?php echo form_open('index.php/users/login'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>BACATS</title>
        <link href="<?=base_url();?>assets/css/main.css" rel="stylesheet">
    </head>
  <body>
      <div class="row">
        <div class="card mesha">
          <div class="card-header text-center">Enter Your Creadentials</div>
            <div class="card-title text-center"><h3><?php echo $title; ?> </h3></div>
              <div class="card-body">
                <div class="form-group">
                  <label>User name</label>
                  <input type="text" class="form-control" name="reg_no" placeholder="User name" required outofocus>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password" required autofocus>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember Password</label>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">login</button> 
                <div class="text-center">
                  <a class="d-block small mt-3" href="register.html">Register an Account</a>
                  <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
                </div>
              </div>
          </div>
        </div>
    </div>
  </body>
</html>
<?php echo form_close(); ?>

