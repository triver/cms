<?php
if(!defined("BASEPATH")) exit("No direct script access allowed");
?>
<div class="container" > 
  
    <ul class="nav nav-tabs">
      <li><a href="<?php echo site_url('admin/members'); ?>">Medlemmar</a></li>
      <li class="active"><a href="<?php echo site_url('admin/members/create'); ?>">Lägg till</a></li>
    </ul>
    
   <?php echo form_open_multipart('',array('class'=>''));?>
    
    <div class="alert alert-sm <?php if(isset($message_type)) echo 'alert-'.$message_type; ?>">
    <?php echo $this->session->flashdata('message');?>
    </div>
    <div id="image-preview">
        <img id="image" src="<?php echo base_url('assets/images/').(!empty($image) ? $image : 'fake-prtrait.png') ?>" width="150" height="150" >
    </div>
    
    <div class="form-group row">
      <?php echo form_label('Avatar','file',array('class'=>'col-sm-2 col-form-label'));?>
      <div class="col-sm-10">
        <label class="btn btn-default btn-file">
            Browse <input type="file" name="file" id="file" class="hidden">
        </label>
      </div>
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
      
      <?php echo form_label('Presentation', 'editor',array('class'=>'col-sm-2 col-form-label'));?>
      
      <div class="col-sm-10">
      <?php echo form_textarea('description', (isset($description) ? $description : '') ,array('id'=>'editor','class'=>'form-control') );?>
      </div>
      
    </div>
    <?php echo form_submit('submit', 'Spara', 'class="btn btn-primary btn-lg pull-right"');?>
    
    <?php echo form_close();?>
    
    
   
 
</div>

<script>

document.getElementById("file").onchange = function () {
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        document.getElementById("image").src = e.target.result;
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
};

</script>