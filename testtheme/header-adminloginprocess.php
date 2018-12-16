 <?php
session_start();
   $conn=mysqli_connect('localhost','root','','user'); 
   if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }
 if(isset($_POST['submitadmin']))
	{
		$adminname   = strip_tags($_POST['adminname']);
		$passwordadmin   = strip_tags(md5($_POST['passwordadmin']));
		//$password   = strip_tags($_POST['password']);

		$adminname=$conn->real_escape_string($adminname);
		$passwordadmin=$conn->real_escape_string($passwordadmin);
	
		$query = $conn->query("select Username,Password,Type from account where Username='$adminname' and Password='$passwordadmin' ");

		 $row=$query->fetch_array();

			/*if($row['Username'] != $username && $row['Password'] != $password ){

				echo '<script>alert("Username or password incorrect. Please try again."); location.replace(document.referrer);</script>';  //fail to login
			}*/
			//$count = $query->num_rows; 
		
			if($row['Username'] == $adminname && $row['Password'] == $passwordadmin)
			{    
				if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
					{
						if($row['Type'] == "Admin")
						{	
							$query="UPDATE account SET LoginTime = now() WHERE Username = '$username'";

							if (mysqli_query($conn,$query)) {
					  		  $_SESSION['adminlog']= $adminname;  // Initializing Session with value of PHP Variable
					    	  $admin = $_SESSION['adminlog'];
					    	  error_reporting(E_ALL); ini_set('display_error', 'on');
					  		  header('Location: http://localhost/wordpress/admin-enter-result/');
					    	  //error_reporting(E_ALL); ini_set('display_error', 'on');
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
	
	
	?>