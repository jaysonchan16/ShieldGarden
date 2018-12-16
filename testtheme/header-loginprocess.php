<?php
session_start();
   $conn=mysqli_connect('localhost','root','','user'); 
   if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }
    
    if(isset($_POST['submituser']))
	{
		$username   = strip_tags($_POST['username']);
		//$password   = strip_tags(md5($_POST['password']));
		$password   = strip_tags($_POST['password']);

		$username=$conn->real_escape_string($username);
		$password=$conn->real_escape_string($password);
		
		$query = $conn->query("select Username,Password,Type from account where Username='$username' and Password='$password'");

		 $row=$query->fetch_array();

			/*if($row['Username'] != $username && $row['Password'] != $password ){

				echo '<script>alert("Username or password incorrect. Please try again."); location.replace(document.referrer);</script>';  //fail to login
			}*/
			//$count = $query->num_rows; 
		
			if($row['Username'] == $username && $row['Password'] == $password)
			{    
				if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
					{
						if($row['Type'] != "Admin")
						{

							$query="UPDATE account SET LoginTime = now() WHERE Username = '$username'";

							if (mysqli_query($conn,$query)) {
					  		  $_SESSION['userlog']= $username;  // Initializing Session with value of PHP Variable
					    	  $user = $_SESSION['userlog'];
					  		  header('Location: http://localhost/wordpress/user-bet/');
					    	  error_reporting(E_ALL); ini_set('display_error', 'on');
				   			}
					   		else
					   		{
					   			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
					   		}
			    		}
			    		else
						{
							echo '<script>alert("Please make sure you have enter the Username and Password are correct."); location.replace(document.referrer);</script>';
						}
					}
				    else
				    	{
					    echo '<script>alert("Please make sure you have enter the Captcha code and it is correct."); location.replace(document.referrer);</script>';
					    }
			}
			else
			{
				echo '<script>alert("Please make sure you have enter the Username and Password are correct."); location.replace(document.referrer);</script>';
			}
		}
		
	

	
/*	error_reporting(E_ALL & ~E_NOTICE);
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	
	// connect to the server and select database
	mysql_connect("localhost", "root", "");
	mysql_select_db("wordpresstest"); 
	
	// Get values passe from form in login.php file
	$username = $_POST['user'];
	$password = md5(md5($_POST['pass']));
	
	// to prevent mysql injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	
	// Query the database for user
	$result = mysql_query("select * from users where username = '$username' and password = '$password'")
				or die("Failed to query database ".mysql_error());
	$row = mysql_fetch_array($result);
	

	session_start();
	if($row['username'] !== $username && $row['password'] !== $password ){		

	echo '<script>alert("Username or password incorrect. Please try again."); location.replace(document.referrer);</script>';  //fail to login

		}
	else{
    
    if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
    {
    $_SESSION['userlog']= $username;  // Initializing Session with value of PHP Variable
    $user = $_SESSION['userlog'];
    header('Location: http://localhost/wordpress/bet/');
    mysql_query("UPDATE users SET now = now() WHERE username = '$user'");
    error_reporting(E_ALL); ini_set('display_error', 'on');
    }
    else
    {
    echo '<script>alert("Please make sure you have enter the Captcha code and it is correct."); location.replace(document.referrer);</script>';
    }


}*/



?>