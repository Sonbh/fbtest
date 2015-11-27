<?php
session_start();
 $user='';
 $userdata='';
 $logoutUrl=$_SESSION['logout'];
session_destroy();
header("Location: $logoutUrl");
 $logoutUrl= '';
//header("Location: fblogin.php");
?>