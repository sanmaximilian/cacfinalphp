<?php
session_start();
session_destroy();
header("location:indexf.php");
exit();
?>