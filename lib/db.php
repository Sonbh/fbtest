<?php
 $host = "hostName";
 $dbuser = "dbUser";
 $dbpassword = "dbPassword";
 $dbname = "dbName";
 
 $bd = mysqli_connect($host,$dbuser,$dbpassword,$dbname) or die("<br>Could not connect to the database. <span style='color:red;font-weight:bold;font-size:26px;'>Please configure database (lib/db.php) connection first. </span>.");
 ?>