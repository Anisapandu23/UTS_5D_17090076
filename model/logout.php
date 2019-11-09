<?php 
@require_once 'function.php';
session_start();
session_unset('nama');
session_unset('userlogin');
session_destroy();
echo "<script>window.location.assign('?travel=login')</script>";
 ?>