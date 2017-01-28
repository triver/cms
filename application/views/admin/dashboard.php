<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="container">
    <div class="main-content">
        <nav class="large-nav">
            
            <?php if($user['is_admin']) { ?>
            <div class="square">
                <a class="square-inner" href="<?php echo site_url('admin/users'); ?>">
                    <div class="square-table" >
                        <div class="square-cell">användare</div>
                    </div>
                </a>
            </div>
            <?php
            }
            
            if(in_array('admin',$user['groups'])) {
                
            ?>
            <div class="square">
                <a class="square-inner" href="<?php echo site_url('admin/site/info'); ?>">
                    <div class="square-table" >
                        <div class="square-cell">sidinfo</div>
                    </div>
                </a>
            </div>
             <?php
            }
            
            if(in_array('members',$user['groups'])) {
                
            ?>
            <div class="square">
                <a class="square-inner" href="<?php echo site_url('admin/members'); ?>">
                    <div class="square-table" >
                        <div class="square-cell">medlemmar</div>
                    </div>
                </a>
            </div>
             <?php
            }
            
            if(in_array('shop',$user['groups'])) {
                
            ?>
            <div class="square">
                <a class="square-inner" href="#">
                    <div class="square-table" >
                        <div class="square-cell">shop</div>
                    </div>
                </a>
            </div>
             <?php
            }
            
            if(in_array('gallery',$user['groups'])) {
                
            ?>
            <div class="square">
                <a class="square-inner" href="#">
                    <div class="square-table" >
                        <div class="square-cell">galleri</div>
                    </div>
                </a>
            </div>
             <?php
            }
            
            if(in_array('blog',$user['groups'])) {
                
            ?>
            <div class="square">
                <a class="square-inner" href="#">
                    <div class="square-table" >
                        <div class="square-cell">blogg</div>
                    </div>
                </a>
            </div>
             <?php
            }
            
            if(in_array('messages',$user['groups'])) {
                
            ?>
            <div class="square">
                <a class="square-inner" href="#">
                    <div class="square-table" >
                        <div class="square-cell">meddelanden</div>
                    </div>
                </a>
            </div>
             <?php } ?>
             
            <div class="square">
                <a class="square-inner" href="#">
                    <div class="square-table" >
                        <div class="square-cell">docs</div>
                    </div>
                </a>
            </div>
           
            
        </nav>
        
    </div>
</div>