<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

</div> <!-- main container ends -->
<footer>
    <div class="container">
        <div class="social">
            <span class="icon">a</span>
            <span class="icon">b</span>
            <span class="icon">c</span>
        </div>
        <span>&copy; <?php echo date('Y').' '.$info['name']; ?></span><br />
        <span>mail: <?php echo $info['email']; ?></span>
    </div>
</footer>
<!-- common scripts -->

<?php
if(!empty($scripts)){
    
    foreach ($scripts as $v) {
        echo '<script src="'.base_url( 'assets/js/'. $v ) .'" ></script>';
    }
}

?>

</body>
</html>