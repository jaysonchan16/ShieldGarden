<?php

	error_reporting(E_ALL & ~E_NOTICE);
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	
	// connect to the server and select database
	mysql_connect("localhost", "root", "");
	mysql_select_db("wordpresstest"); 
	
	// Get values passe from form in login.php file
	$username = $_POST['admin'];
	$password = md5(md5($_POST['pass']));
	
	// to prevent mysql injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	
	// Query the database for user
	$result = mysql_query("select * from admin where aduser = '$username' and pass = '$password'")
				or die("Failed to query database ".mysql_error());
	$row = mysql_fetch_array($result);
	

	session_start();
	if($row['aduser'] !== $username && $row['pass'] !== $password ){		

	echo '<script>alert("Username or password incorrect. Please try again."); location.replace(document.referrer);</script>';  //fail to login

		}
	else{
    if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
    {
    $_SESSION['adminlog']= $username;  // Initializing Session with value of PHP Variable
   	header( 'Location:  http://localhost/wordpress/adkeyresult/' ); exit();
    }
    else
    {
    echo '<script>alert("Please make sure you have enter the Captcha code and it is correct."); location.replace(document.referrer);</script>';
    }
}
?>