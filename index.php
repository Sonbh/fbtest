<?php
include_once ('fblogin.php');
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Mobile App, iOS App, Facebook, Twitter, LinkedIn, Java, PHP, C, HTML, JS, JSON, AJAX">
<meta name="description" content="Get Social media login app for your business website to manage user. These apps helps to promote your business on social media and reaches your product oe services to the maximum clients..">

<title> Facebook Login Example | GSR Systems </title>
<link rel="icon" href="http://www.gsrsys.com/images/favicon.png" type="image/png">
<link rel="stylesheet" type="text/css" href="http://www.gsrsys.com/css/appstyle.css">
</head>

<body>
	<div id="preHeader">
		<?php include('header.php'); ?>
		<?php include('follow.php'); ?>
	</div>
	<div id="content">
		<h1>GSR Systems Private Limited</h1>
		<p> This is the complete Facebook Login PHP SDK by <i><a href='http://www.gsrsys.com/' rel='dofollow'>GSR Systems Private Limited</a></i>. You just need to follow 2 more steps to <i>configure your application</i>:	</p>		
		<li>Open lib/fbconfig.php</li>
		<li>Open lib/follow.php</li><br>
		
		<h2>1. Configure Facebook App ID and App Secret:</h2>
		<div>First you need to create facebook application for your website. You will get Facebook App Id and App Secret from the app you created. Open <strong><i>fbconfig.php</i></strong> file placed in lib folder and put your app id and app secret their.<br>
		e.g. 	<br>
		$facebook_appid='your app id';		<br>
		$facebook_app_secret='your app secret';	<br>
		Save the file and close.		<br>
		</div>
		<h4>How to create Facebook App and get facebook App Id and App Secret:	</h4><br>
		<div style="width:290px;">			
			<object width="100%" height="250" data="https://www.youtube.com/v/C_R4WK8DDag"></object>
		</div>

		<h2>2. Configure Social Follow Links:</h2>
		<p>Now you need to open <strong><i>follow.php</i></strong> file and replace the href URLs with your own business's social page URLs.
		</p>
		e.g.	<br>
		<span class="highlight">href='https://www.facebook.com/ gsrsystems'</span> with you facebook page URL					<br>
		<span class="highlight">href='https://plus.google.com/ +GSRSystem'</span> with you google+ page URL					<br>
		<span class="highlight">href='https://twitter.com/ gsrsys'</span> with you twitter page URL						<br>
		<span class="highlight">href='https://www.youtube.com/channel/ UClKENQ44yjtHQmDONwuR8JA'</span> with you youtube channel page URL	<br>
	</div><br>
</body>
</html>