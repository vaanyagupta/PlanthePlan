<?php
session_start();
$qu="truncate table input";
include 'config.php';
mysqli_execute($qu);
unset($_SESSION ['counter']);
session_destroy();

setcookie("regID","226",time()-60,"/");
header("LOCATION: main.html")
?>