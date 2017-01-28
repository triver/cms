<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<h2>Medlemmar</h2>

<ul id="board-list">
    
<?php
if(!empty($members)){
    
    foreach($members as $member){
        
        echo '<li>';
        echo '<img src="'.base_url('assets/images/').$member['image'].'" >'; 
        echo '<h3>'.$member['first_name'].' '.$member['last_name'].'</h3>';
        echo '<p>'.$member['description'].'</p>';
        echo '<p>'.$member['email'].'</p>';
        echo '</li>';
    }
}
?>
</ul>