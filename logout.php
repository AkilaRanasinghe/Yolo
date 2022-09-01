<?php
session_start();
session_destroy();
echo "<script type='text/javascript'>alert('You have been Logged Out!!'); window.location.href=' http://localhost/YOLO/index.php';</script>";
?>