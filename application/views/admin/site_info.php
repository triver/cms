<?php
if(!defined("BASEPATH")) exit("No direct script access allowed");
?>
<div class="container" >
    <ul class="nav nav-tabs">
      <li class="active"><a href="<?php echo site_url('admin/site/info'); ?>">Info</a></li>
      
    </ul> 
    
    <div class="alert">
      <?php echo $this->session->flashdata('message');?>
    </div>
    
  
  <?php echo form_open();?>
  
  
    <div class="row">
      
     
      <div class="form-group col-sm-6">
        
        <?php echo form_label('Name', 'name');?>
        <?php echo form_input('name', $name ,array('id'=>'name', 
                                                            'class'=>'form-control',
                                                            'required'=>'required') );?>
        
      </div>
      <div class="form-group col-sm-6">
        
        <?php echo form_label('Email', 'email');?>
        <?php echo form_input('email', $email ,array('id'=>'email', 
                                                            'class'=>'form-control',
                                                            'required'=>'required') );?>
        
      </div>
      
    </div>
    
    <div class="row">
      
      <div class="form-group col-sm-6">
        
        <?php echo form_label('Address', 'address');?>
        <?php echo form_input('street_address', $street_address ,array('id'=>'address', 
                                                            'class'=>'form-control',
                                                            'required'=>'required') );?>
        
      </div>
      <div class="form-group col-sm-6">
        
        <?php echo form_label('City', 'city');?>
        <?php echo form_input('city', $city ,array('id'=>'city', 
                                                            'class'=>'form-control',
                                                            'required'=>'required') );?>
        
      </div>
        
    </div>
      
    <div class="row">
      <div class="form-group col-sm-6">
        
        <?php echo form_label('Postal Code', 'postal_code');?>
        <?php echo form_input('postal_code', $postal_code ,array('id'=>'postal_code', 
                                                            'class'=>'form-control',
                                                            'required'=>'required') );?>
        
      </div>
      <div class="form-group col-sm-6">
        
        <?php echo form_label('Phone', 'phone');?>
        <?php echo form_input('phone', $phone,array('id'=>'phone', 
                                                            'class'=>'form-control',
                                                            'required'=>'required') );?>
        
      </div>
    </div>
      
      
    <div class="row">
      <div class="form-group col-sm-12">
        
        <?php echo form_label('Description', 'description');?>
        <?php echo form_textarea('description', $description ,array('id'=>'description', 
                                                            'class'=>'form-control',
                                                            'required'=>'required') );?>
        
      </div>
    </div>
    
    <?php echo form_submit('submit', 'Spara', 'class="btn btn-primary btn-md pull-right"');?>
    <?php echo form_close();?>
    
 
</div>