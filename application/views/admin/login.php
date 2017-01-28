<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="container">

 
    <?php echo form_open('',array('class'=>'login-form'));?>
    
      <div class="alert">
      <?php echo $this->session->flashdata('message');?>
      </div>
      
      <div class="form-group">
        <?php echo form_label('Användarnamn','identity');?>
        <?php echo form_input('identity','','class="form-control"');?>
      </div>
      
      <div class="form-group">
        <?php echo form_label('Lösenord','password');?>
        <?php echo form_password('password','','class="form-control"');?>
      </div>
      
      
      <?php echo form_submit('submit', 'Logga in', 'class="btn btn-primary btn-md"');?>
      
    <?php echo form_close();?>
    
  

</div>
