<?php
if(!defined("BASEPATH")) exit("No direct script access allowed");
?>
<div class="container">
    
    <ul class="nav nav-tabs">
      <li class="active"><a href="<?php echo site_url('admin/members'); ?>">Medlemmar</a></li>
      <li><a href="<?php echo site_url('admin/members/create'); ?>">Lägg till</a></li>
    </ul> 
   
    <ul class="list-group">
        
        <?php  if(!empty($members)) { foreach( $members as $member) {  ?>
        
         <li class="list-group-item" >
             
        <?php echo $member['first_name'].' '.$member['last_name']; ?>
         
         <a href="<?php echo site_url('admin/members/delete/'.$member['id']); ?>" 
            class="glyphicon glyphicon-remove pull-right"
            onclick="confirm('Ta bort medlem ?');"></a>
            
         <a href="<?php echo site_url('admin/members/edit/'.$member['id']); ?>" 
            class='glyphicon glyphicon-pencil pull-right'></a>
            
       
         </li>
         
        <?php } } else { echo 'Inga medlemmar registrerade.'; } ?>
    </ul>
    
</div>