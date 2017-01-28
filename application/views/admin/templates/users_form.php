<?php
if(!defined("BASEPATH")) exit("No direct script access allowed");
?>
<form>
    
    <div class="form-group">
        <label for="username">ID</label>
        <input class="form-control" 
               type="text" 
               name="username" 
               id="username"
               value="<?php if(isset($username)) echo $username; ?>"
               />
    </div> 
    
    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" 
               type="text" 
               name="email" 
               id="email"
               value="<?php if(isset($email)) echo $email; ?>"
               />
    </div> 
</form>
