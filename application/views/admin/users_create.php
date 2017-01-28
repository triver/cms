<?php
if(!defined("BASEPATH")) exit("No direct script access allowed");
?>

<div class="container" >
  
    <?php $this->view('admin/templates/users_menu',array('active'=>'users_create')); ?> 
    
    <?php echo form_open('',array('class'=>''));?>
    
    <div class="alert alert-sm <?php if(isset($message_type)) echo 'alert-'.$message_type; ?>">
    <?php echo $this->session->flashdata('message');?>
    </div>
    
    <div class="form-group row">
      
      <?php echo form_label('Förnamn', 'first-name',array('class'=>'col-sm-2 col-form-label'));?>
      
      <div class="col-sm-10">
      <?php echo form_input('first_name',(isset($first_name) ? $first_name : ''),array('id'=>'first-name', 'class'=>'form-control') );?>
      </div>
      
    </div>
    
    <div class="form-group row">
      
      <?php echo form_label('Efternamn', 'last-name',array('class'=>'col-sm-2 col-form-label'));?>
      
      <div class="col-sm-10">
      <?php echo form_input('last_name',(isset($last_name) ? $last_name : ''),array('id'=>'last-name','class'=>'form-control') );?>
      </div>
      
    </div>
  
    <div class="form-group row">
      
      <?php echo form_label('Email', 'email',array('class'=>'col-sm-2 col-form-label'));?>
      
      <div class="col-sm-10">
      <?php echo form_input('email', (isset($email) ? $email : '') ,array('id'=>'email','class'=>'form-control') );?>
      </div>
      
    </div> 
    
    <div class="form-group row">
      
      <?php echo form_label('Lösenord (min8)', 'password',array('class'=>'col-sm-2 col-xs-12 col-form-label'));?>
      
      <div class="col-sm-8 col-xs-7">
      <?php echo form_input('password',(isset($password) ? $password: ''),array('id'=>'password', 'class'=>'form-control') );?>
      </div>
      
      <div class="col-sm-2 col-xs-5">
      <button type="button" class="btn btn-default btn-sm btn-block" onclick="generatePassword(event);" >Generera</button>
      </div>
      
    </div>
    
    <div class="form-group row">
      
      <?php echo form_label('Grupper', 'groups',array('class'=>'col-sm-2 col-xs-12 col-form-label'));?>
      
      <div class="col-sm-10">
      <?php
        if(!empty($groups_all))
        {
          foreach($groups_all as $group)
          {
            
            echo '<label style="font-weight: normal; margin-left: 20px;" >';
            echo form_checkbox('groups[]', $group['id'] , (isset($groups) ? in_array($group['id'], $groups) : FALSE) );
            echo lang($group['name']);
            echo '</label>';
            
          }
        }
      ?>
      
      </div>
      
      
    </div>
    <?php echo form_submit('submit', 'Skapa användare', 'class="btn btn-primary btn-lg pull-right"');?>
    
    <?php echo form_close();?>
   
 
</div>

<script>
/*
/ Removed o 0 I l 8 B to avoid confusion
/
*/

function generatePassword(event) {
  
  event.preventDefault();
  
  var length = 8,
      charset = "abcdefghijkmnopqrstuvwxyzACDEFGHJKLMNPQRSTUVWXYZ12345679",
      retVal = "";
  for (var i = 0, n = charset.length; i < length; ++i) {
      retVal += charset.charAt(Math.floor(Math.random() * n));
  }
  
  document.getElementById('password').value = retVal;
  
}
</script>