<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<h2>Adress</h2>
<p>
<span class="medium-text"><?php echo $info['name']; ?></span><br />
<?php echo $info['street_address']; ?><br />
<?php echo $info['postal_code'].' '.$info['city']; ?><br />
<?php echo $info['email']; ?><br />
</p>
<h2>Styrelse</h2>
<ul id="board-list">
<?php
if(!empty($board_members)){
    
    foreach($board_members as $member){
        
        echo '<li>';
        echo '<img src="'.base_url('assets/images/').$member['image'].'" >'; 
        echo '<h3>'.$member['first_name'].' '.$member['last_name'].'<br />';
        echo '<span class="normal-text">'.strtolower($member['duty']).'</span></h3>';
        echo '<p>'.$member['description'].'</p>';
        echo '<p>'.$member['email'].'</p>';
        echo '</li>';
    }
}
?>
</ul>