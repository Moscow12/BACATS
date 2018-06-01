<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
 
  <!-- Bootstrap core CSS-->
  <link href="<?=base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?=base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?=base_url();?>assets/css/sb-admin.css" rel="stylesheet">
  <style type="text/css"> #footer {
    background-color: #c2c3de;
    padding-top: 30px;
    padding-bottom: 0px;
}</style>
</head>
<body class="bg">
<?php if($this->session->flashdata('login_failed')):  ?>    
                <?php echo '<p class="class="alert alert-danger">'.$this->session->flashdata('login_failed'). '</p>'; ?>
            <?php endif; ?>
             <?php if($this->session->flashdata('user_loggedin')):  ?>    
                <?php echo '<p class="class="alert alert-success">'.$this->session->flashdata('user_loggedin'). '</p>'; ?>
            <?php endif; ?>
             <?php if($this->session->flashdata('user_loggedout')):  ?>    
                <?php echo '<p class="class="alert alert-info">'.$this->session->flashdata('user_loggedout'). '</p>'; ?>
            <?php endif; ?>