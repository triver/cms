<?php
if(!defined("BASEPATH")) exit("No direct script access allowed");
?>

<?php
if(!defined("BASEPATH")) exit("No direct script access allowed");
?>

<div class="container">
    
    <a class="btn btn-default btn-md" href="<?php echo site_url('admin/users'); ?>">Tillbaka</a>
    
    <div class="row">
      
    <?php echo form_open(); ?>
    
    <div class="alert alert-sm <?php if(isset($message_type)) echo 'alert-'.$message_type; ?>">
    <?php echo $this->session->flashdata('message');?>
    </div>
    
    <fieldset>
        <legend>Grupper</legend>
        <div class="form-group row">
        <?php
        
        foreach($groups_all as $group)
        {
            
            echo '<label>';
            echo form_checkbox('groups[]',$group['id'],in_array($group['name'], $user_profile['groups']));
            echo '<small>'.lang($group['name']).'</small>';
            echo '</label>';
        }
        
        ?>
        </div>
        
    </fieldset>
    <?php
    echo form_submit('update_groups', 'Uppdatera', 'class="btn btn-primary btn-md"'); 
    echo form_close();
    ?>
   
    </div>
    
</div>