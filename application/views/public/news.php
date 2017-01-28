<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<ul class="news-list">
    
<?php
if(!empty($news)){
    
    foreach($news as $entry){
        
        echo '<li>';
        echo '<h2>'.$entry['title'].'</h2>';
        echo '<p>'.$entry['content'].'</p>';
        echo '<p class="date">'.$entry['date'].'</p>';
        echo '</li>';
    }
}
?>

</ul>