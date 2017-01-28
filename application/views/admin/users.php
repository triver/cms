<?php if(!defined("BASEPATH")) exit("No direct script access allowed"); ?>

<div class="container">
    
    <?php $this->view('admin/templates/users_menu',array('active'=>'users')); ?> 
   
    <ul class="list-group">
        
        <?php  if(!empty($users)) { foreach( $users as $user) {  ?>
        
        <li class="list-group-item" >
             
            <div class="btn-group pull-right">
                 
                 <a href="<?php echo site_url('admin/users/edit/'.$user['id']); ?>" 
                    class="glyphicon glyphicon-pencil" ></a>
                    
                 <a href="<?php echo site_url('admin/users/delete/'.$user['id']); ?>" 
                    class="glyphicon glyphicon-remove"
                    onclick="confirm('Ta bort användare ?');"></a>
                    
            </div>
            
         <?php echo '<h4>'.$user['first_name'].' '.$user['last_name'].'<br />';
               echo '<small>'.implode(' | ',$user['groups_swedish']).'</small></h4>'; ?>
               
        </li>      
         
        <?php } } else { echo '<p>Inga registrerade administratörer.</p>'; } ?>
    </ul>
</div>