<?php
require 'lib/db.php';
require 'lib/facebook.php';
require 'lib/fbconfig.php';

 $user = $facebook->getUser();
if ($user)
 {
 $logoutUrl = $facebook->getLogoutUrl();
try 
 {
 $userdata = $facebook->api('/me');
 } 
catch (FacebookApiException $e) {
error_log($e);
 $user = null;
 }
$_SESSION['facebook']=$_SESSION;
$_SESSION['userdata'] = $userdata;
$_SESSION['logout'] = $logoutUrl;
//Redirecting to home.php
//header("Location: index.php"); 
 }
else
 { 
 $loginUrl = $facebook->getLoginUrl(array(
   'scope' => 'user_about_me,user_activities,user_birthday,user_education_history,user_groups,user_hometown,user_interests,user_likes,user_location,user_online_presence,user_religion_politics,user_website,email,read_friendlists,read_stream,manage_pages'
 ));
// echo "<a href='$loginUrl'><img src='img/fb_login.png' width='150' /></a>";
 }
 ?>