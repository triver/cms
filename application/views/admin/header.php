<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="sv" >
<head>
  <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title><?php echo $title; ?></title>
  
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/graphics/icon16x16.png'); ?>"/>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/proxima-nova.css'); ?>"/> 
  <link href="<?php echo base_url('assets/admin/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/admin/css/style.css');?>" rel="stylesheet">

</head>
<body>
<?php
if($this->ion_auth->logged_in()) {
?>
  <nav class="navbar navbar-inverse navbar-static-top">
    
    <div class="container">
      
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url('admin');?>">
          <span class="glyphicon glyphicon-user"></span>
          <?php 
            echo $user['first_name'].' '.$user['last_name'];
             
          ?>
        </a>
      </div>
      
      <div id="navbar" class="collapse navbar-collapse">
        
        <ul class="nav navbar-nav navbar-right">
          <li><a class="glyphicon glyphicon-home" href="<?php echo base_url('admin');?>"></a></li>
          <li><a class="glyphicon glyphicon-eye-open" href="<?php echo base_url(); ?>" target="_blank"></a></li>
          <li><a class="glyphicon glyphicon-log-out" href="<?php echo base_url('admin/auth/logout');?>"></a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
      
    </div>
    
    
  </nav>

<?php
}
?>