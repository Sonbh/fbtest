<?php
require_once 'lib/facebook.php';
if(isset($_SESSION['userdata']))
	include('home.php');
else	
	echo "<div id='info'><a href='$loginUrl' class='btn'><input type='button' name='login' value='Login' /></a></div>";
	echo "<div class='bcklnk' ><a href='$accessId' rel='$rel'>$refrer</a></div>"; 
?>