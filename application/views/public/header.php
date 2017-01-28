<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="webbkille.se">
    <meta name="title" content="<?php echo $info['name']; ?>">
    <meta name="description" content="<?php echo $info['description']; ?>">
    <meta property="og:title" content="<?php echo $info['name']; ?>">
    <meta property="og:description" content="<?php echo $info['description']; ?>">
    <meta property="og:image" content="<?php echo $info['og_image']; ?>">
    
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/graphics/icon16x16.png'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/icons.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/proxima-nova.css'); ?>"/> 
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
    
    
<?php

    if(!empty($styles))
    {
        
         foreach( $styles as $v){
             
            echo '<link rel="stylesheet" href="'.base_url( 'assets/css/' . $v ).'"/>';
        }
    }
    
    
?>
</head>
<body>
    
    <header>
        <div class="container">
           
            <h1><a href="<?php echo site_url(); ?>"><?php echo $info['name']; ?></a></h1>
            <nav id="main-nav">
                
                <a <?php if($page_name == 'nyheter') echo 'class="active-nav"'; ?> href="<?php echo site_url('nyheter'); ?>">nyheter</a>
                <a <?php if($page_name == 'medlemmar') echo 'class="active-nav"'; ?> href="<?php echo site_url('medlemmar'); ?>">medlemmar</a>
                <a <?php if($page_name == 'kontakt') echo 'class="active-nav"'; ?> href="<?php echo site_url('kontakt'); ?>">kontakt</a>
            </nav>
        </div>
    </header>
    
    <div id="main-container" class="container"> 
    
    <!-- main container starts -->
