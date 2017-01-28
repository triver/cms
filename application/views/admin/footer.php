<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<footer class="footer text-center">
    
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
    
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<?php echo base_url('assets/admin/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin/tinymce/tinymce.min.js');?>"></script>
<script src="<?php echo base_url('assets/admin/js/common.js');?>"></script>


</body>
</html>