<?php
	error_reporting(E_ALL & ~E_NOTICE);
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	
	// connect to the server and select database
	mysql_connect("localhost", "root", "");
	mysql_select_db("wordpresstest"); 

session_start();	

$user = $_SESSION['userlog'];
mysql_query("UPDATE users SET last = now() WHERE username = '$user'");

unset($_SESSION['userlog']);  //Is Used To Destroy Specified Session

session_destroy(); // Is Used To Destroy All Sessions
//Or

header("Location: http://localhost/wordpress/");
?>