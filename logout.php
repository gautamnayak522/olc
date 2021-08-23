<?php
session_start();
echo "start";
session_destroy();
echo "destroe";
header('location:login.php');
echo "not transfer";
?>