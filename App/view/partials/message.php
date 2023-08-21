
<?php

$message= \App\core\Session::get('message');

if ($message){


?>
<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-check"></i> Alert!</h5>
                  <?php echo $message; ?>
                </div>
<?php 
unset($_SESSION['message']);
} ?>
