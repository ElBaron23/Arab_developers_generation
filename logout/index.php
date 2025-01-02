<?php
session_start();
session_reset();
include '../inc/init.php';
session_destroy();
header("location:/",true);
exit();
?>