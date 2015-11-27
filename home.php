<?php
require_once 'lib/db.php';
require_once 'lib/facebook.php';
require_once 'lib/fbconfig.php';
session_start();
 $facebook=$_SESSION['facebook'];
 $userdata=$_SESSION['userdata'];
 $logoutUrl=$_SESSION['logout'];

//Facebook Access Token
 $access_token_title='fb_'.$facebook_appid.'_access_token';
 $access_token=$facebook[$access_token_title];

if(!empty($userdata))
 {
 $facebook_id=$userdata['id'];
 $name=$userdata['name'];
 $first_name=$userdata['first_name'];
 $last_name=$userdata['last_name'];
 $email=$userdata['email'];
 $gender=$userdata['gender'];
 $birthday=$userdata['birthday'];
 $location=mysqli_real_escape_string($bd,$userdata['location']['name']);
 $hometown=mysqli_real_escape_string($bd,$userdata['hometown']['name']);
 $bio=mysqli_real_escape_string($bd,$userdata['bio']);
 $relationship=$userdata['relationship_status'];
 $timezone=$userdata['timezone'];
 
 $qry=mysqli_query($bd,"SELECT * FROM fb_users WHERE email='".$email."' ");
 $rs=mysqli_num_rows($qry);
 if($rs==0)
 {
   mysqli_query($bd,"INSERT INTO fb_users VALUES('','$facebook_id','$google_id','$twitter_id','$lin_id','$name','$email','$gender','$birthday','$location','$hometown','$bio','$relationship','$timezone','$access_token')");
   mysqli_close($bd);

   $image = 'http://graph.facebook.com/'.$facebook_id.'/picture?height=40&width=40';	       
   echo "<div id='info'>";
   echo "<a href='logout.php'><input type='button' name='logout' value='Logout' /></a>";
   echo "<p>Mr. $name </p>"; 
   echo "<img src='$image' />";		
   echo "</div>";
 }
 else if($rs!=0)
 {
 	//header("Location: index.php");
     while ($row = mysqli_fetch_assoc($qry))
     {
       $dbemail=$row['email'];
       $dbfbid=$row['facebook_id'];

       if($dbemail==$email)
       {
       	   $image = 'http://graph.facebook.com/'.$facebook_id.'/picture?height=40&width=40';	       
       	   echo "<div id='info'>";
	   echo "<a href='logout.php' class='btn'><input type='button' name='logout' value='Logout' /></a>";
	   echo "<p>Mr. $name </p>"; 
	   echo "<img src='$image' />";		
	   echo "</div>";
       }
     }
 }
/**
// Update or Post Facebook wall.
include('status_update.php');
echo "<a href='logout.php'>Logout</a><br>";
*/
 }
else
 {
   //header("Location: fblogin.php");
   //header("Location: index.php");
 }
 ?>