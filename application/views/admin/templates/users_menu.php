<?php
if(!defined("BASEPATH")) exit("No direct script access allowed");
?>

<ul class="nav nav-tabs">
  
  <li <?php if($active == 'users' || !isset($active)) echo 'class="active"'; ?> >
    <a href="<?php echo site_url('admin/users'); ?>">Användare</a>
  </li>
  
  <li <?php if($active == 'users_create') echo 'class="active"'; ?> >
    <a href="<?php echo site_url('admin/users/create'); ?>">Lägg till</a>
  </li> 
</ul>