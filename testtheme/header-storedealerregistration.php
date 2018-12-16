<?php
	ob_start();
	session_start();
    if(isset($_SESSION['userlog'])) {
  //      echo $_SESSION['userlog'];
        $user = $_SESSION['userlog'];
    }else{
        header('Location: http://localhost/wordpress/');
    }

	$conn=mysqli_connect('localhost','root','','user'); 
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}


	/*else
	{
		echo "a";
	}*/
	/*  if(isset($_SESSION['userlog'])) {
    	$user = $_SESSION['userlog'];
    }else{
    	header('Location: http://localhost/wordpress/');
    }*/
	//echo "$user";
	date_default_timezone_set("Asia/Kuala_Lumpur");


	$now    = time(); // strip_tags timestamp
	$today  = date("w", $now); // "w" returns the weekday (number)
	$wednesday = 3; // 5th day of the week (sunday = 0)
	$saturday = 6;
	$sunday = 0;

	$curday = date("Y-m-d");
	$curtime = date("H:i:s");

	$oneWeekLater = strtotime('+1 Week');

	if ($today == $wednesday && date("H:i:s") >= "18:56:40" && date("H:i:s") <= "23:59:59") {
	  $weddate = date('F j Y', strtotime('wednesday', $oneWeekLater));
	} else {
	  $weddate = date('F j Y', strtotime('wednesday'));
	}

	if ($today == $saturday && date("H:i:s") >= "18:56:40" && date("H:i:s") <= "23:59:59") {
	  $satdate = date('F j Y', strtotime('saturday', $oneWeekLater));
	} else {
	  $satdate = date('F j Y', strtotime('saturday'));
	}

	if ($today == $sunday && (date("H:i:s") >= "18:56:40" && date("H:i:s") <= "23:59:59")) {
	  $sundate = date('F j Y', strtotime('sunday', $oneWeekLater));
	} else {
	  $sundate = date('F j Y', strtotime('sunday'));
	}

	$spdate1 = "2017-07-04 18:56:40";
	$spdate2 = "2017-07-25 18:56:40";
	$spdate3 = "2017-08-01 18:56:40";
	$spdate4 = "2017-08-29 18:56:40";
	$spdate5 = "2017-09-05 18:56:40";
	$spdate6 = "2017-09-26 18:56:40";
	$spdate7 = "2017-10-03 18:56:40";
	$spdate8 = "2017-10-31 18:56:40";
	$spdate9 = "2017-11-07 18:56:40";
	$spdate10 = "2017-11-28 18:56:40";
	$spdate11 = "2017-12-05 18:56:40";
	$spdate12 = "2017-12-26 18:56:40";
	$spd="";

	if (strtotime($spdate1) > strtotime($curday)) {
		$spd = "July 4 2017";
	} elseif (strtotime($spdate1) < strtotime($curday)) {
		$spd = "July 25 2017";
	} elseif (strtotime($spdate2) < strtotime($curday)) {
		$spd = "August 1 2017";
	} elseif (strtotime($spdate3) < strtotime($curday)) {
		$spd = "August 29 2017";
	} elseif (strtotime($spdate4) < strtotime($curday)) {
		$spd = "September 5 2017";
	} elseif (strtotime($spdate5) < strtotime($curday)) {
		$spd = "September 26 2017";
	} elseif (strtotime($spdate6) < strtotime($curday)) {
		$spd = "October 3 2017";
	} elseif (strtotime($spdate7) < strtotime($curday)) {
		$spd = "October 31 2017";
	} elseif (strtotime($spdate8) < strtotime($curday)) {
		$spd = "November 7 2017";
	} elseif (strtotime($spdate9) < strtotime($curday)) {
		$spd = "November 28 2017";
	} elseif (strtotime($spdate10) < strtotime($curday)) {
		$spd = "December 5 2017";
	} elseif (strtotime($spdate11) < strtotime($curday)) {
		$spd = "December 26 2017";
	} elseif (strtotime($spdate12) < strtotime($curday)) {
		$spd = "尽情期待";
	} else {
		$spd ="-";
	}

	if(isset($_POST['submit']))
	{
		$user       = strip_tags($_POST['subdealer']);
		$username   = strip_tags($_POST['username']);
		$password   = strip_tags($_POST['password']);
		$name       = strip_tags($_POST['rlname']);
		$phonefront = strip_tags($_POST['ctCode']);
		$phoneend   = strip_tags($_POST['phnum']);
		$limit      = strip_tags($_POST['limit']);
		$bankacc    = strip_tags($_POST['bankacc']);
		$bankname   = strip_tags($_POST['bankname']);
		$stat       = strip_tags($_POST['stat']);

		$user=$conn->real_escape_string($user);
		$username=$conn->real_escape_string($username);
		$password=$conn->real_escape_string($password);
		$name=$conn->real_escape_string($name);
		$phonefront=$conn->real_escape_string($phonefront);
		$phoneend=$conn->real_escape_string($phoneend);
		$limit=$conn->real_escape_string($limit);
		$bankacc=$conn->real_escape_string($bankacc);
		$bankname=$conn->real_escape_string($bankname);
		$stat=$conn->real_escape_string($stat);

		$hashed_password = md5($password);

		$query = "INSERT INTO account (user,Username,Password,FullName,PhoneFront,PhoneEnd,	Limition,BankAcc,BankName,State,Type,GetCurrentTime,LoginTime) VALUES('$user','$username','$hashed_password','$name','$phonefront','$phoneend','$limit','$bankacc','$bankname','$stat','Subdealer',now(),NULL)";
	
		if (mysqli_query($conn,$query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
						</div>";
			}
			else
			{
				 echo 'Error: ', mysqli_error($conn);
			}
		}
 	  
     // echo "$selectusr";
	if(isset($_POST['select']))
    {
    $selectusr=strip_tags($_POST['selectuser']);
      $selectusr=$conn->real_escape_string($selectusr);
      $query = "SELECT username FROM account WHERE username = '$selectusr' and user='Dealer'";
      $result = mysqli_query($conn, $query);
  

      if (mysqli_num_rows($result) == 1) 
      {
        while ($row = mysqli_fetch_array ($result)){
        echo '<script type="text/javascript">alert("Checked");</script>';    
        }
      }
      else
      {

        echo '<script type="text/javascript">alert("Cannot validate this username");</script>'; 
        header('Location:http://localhost/wordpress/sub-dealer-registration/');
         
      }

    }
// echo "$selectusr";
		if(isset($_POST['update']))
		{ 
				$user= strip_tags($_POST['subdealer']);
	   			$userupdate=strip_tags($_POST['userupdate']);
	   			$passupdate=strip_tags($_POST['passupdate']);
	   			$rlnameup=strip_tags($_POST['rlnameup']);
	   			$ctCodeup=strip_tags($_POST['ctCodeup']);
	   			$phnumup=strip_tags($_POST['phnumup']);
				$bankaccup=strip_tags($_POST['bankaccup']);
				$banknameup=strip_tags($_POST['banknameup']);
				$statup=strip_tags($_POST['statup']);

				$user=$conn->real_escape_string($user);
				$userupdate=$conn->real_escape_string($userupdate);
				$passupdate=$conn->real_escape_string($passupdate);
				$rlnameup=$conn->real_escape_string($rlnameup);
				$ctCodeup=$conn->real_escape_string($ctCodeup);
				$phnumup=$conn->real_escape_string($phnumup);
				$bankaccup=$conn->real_escape_string($bankaccup);
				$banknameup=$conn->real_escape_string($banknameup);
				$statup=$conn->real_escape_string($statup);

				$hashed_passwordupdate = md5($passupdate);
				//$OldPassword="Select Password from account where user='$user' AND Username='$userupdate'";

			if($passupdate == "")
			{
				// update data in mysql database 
				$query="UPDATE account SET PhoneFront='$ctCodeup', PhoneEnd='$phnumup', BankAcc='$bankaccup', BankName='$banknameup', State='$statup' WHERE user='$user' AND Username='$userupdate'";

				if (mysqli_query($conn,$query)) {
				 echo '<script type="text/javascript">alert("Cannot validate this username");</script>'; 
				 header('Location:http://localhost/wordpress/sub-dealer-registration/');
				}
				else {
				    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
				}

			}
			else if($passupdate != "")
			{
				$query="UPDATE account SET Password='$hashed_passwordupdate', PhoneFront='$ctCodeup', PhoneEnd='$phnumup', BankAcc='$bankaccup', BankName='$banknameup', State='$statup' WHERE user='$user' AND Username='$userupdate'";

				if (mysqli_query($conn,$query)) {
					  echo '<script type="text/javascript">alert("Cannot validate this username");</script>'; 
				 header('Location:http://localhost/wordpress/sub-dealer-registration/');
				}
				else {
				    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
				}
			}

	}

 

	 			/*if(mysqli_num_rows($resuts)>0)
			{		
				while ($row = mysqli_fetch_array($result))
				{

				}
			}
			else
			{

			}*/
		



/*
if($sta == ACTIVE){
    $light = '7FFF00';
    $dispsta = 活跃;
} elseif($sta == SUSPEND){
    $light = 'FFD700';
    $dispsta = 暂停;
} elseif($sta == CLOSE){
    $light = 'FF0000';
    $dispsta = 关闭;
}

	}*/


	  
    

?>
   
<!DOCTYPE HTML>

<html>
    <head>
        <title>报名表</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
        <script>
            var template_dir_js="<?php bloginfo('template_directory');?>";
        </script>
		  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_directory');?>/js/jquery.min.js"></script>
        <script src="<?php bloginfo('template_directory');?>/js/jquery.dropotron.min.js"></script>
        <script src="<?php bloginfo('template_directory');?>/js/jquery.slidertron.min.js"></script>
        <script src="<?php bloginfo('template_directory');?>/js/skel.min.js"></script>
        <script src="<?php bloginfo('template_directory');?>/js/skel-layers.min.js"></script>
        <script src="<?php bloginfo('template_directory');?>/js/init.js"></script>
        <noscript>
            <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/skel.css" />
            <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/style.css" />
            <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/style-desktop.css" />
        </noscript>
        <!--[if lte IE 8]><link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/ie/v8.css" /><![endif]-->
<style>
div.main {
	margin-right: 10px;
}
	<style>


.navbar{ 
    background-color: #717171;
    border-color: #717171;
}

div.main {
	margin-right: 10px;
}
.tool {
	height: 20px;
}
.tool ul {
	line-height: 20px;
	list-style-type: none;
	float: right;
	margin: 0px;
	padding:0px;
	color: #000000;
	height:20px;
}
.tool ul li {
	float: left;
	font-size: 11px;
	text-align: center;
}
.tool li.t {
	font-weight: bold;
	padding-right: 5px;
}

.tool {
	background-color: #D3D3D3;
}

.tool li.combo{
	background-color:#D3D3D3;
}

.tool li.combo ul li{
	background-color:#D3D3D3;
}

.tool li.combo ul li:hover {
	background-color:#D3D3D3; 
}

</style>
<script>
function refreshAt(hours, minutes, seconds) {
    var now = new Date();
    var then = new Date();

    if(now.getHours() > hours ||
       (now.getHours() == hours && now.getMinutes() > minutes) ||
        now.getHours() == hours && now.getMinutes() == minutes && now.getSeconds() >= seconds) {
        then.setDate(now.getDate() + 1);
    }
    then.setHours(hours);
    then.setMinutes(minutes);
    then.setSeconds(seconds);

    var timeout = (then.getTime() - now.getTime());
    setTimeout(function() { window.location.reload(true); }, timeout);
}

$h = 18;
$m = 59;
$s = 40;

refreshAt($h,$m,$s);

    setInterval(displayclock,500);
    function displayclock()
    {
    var time = new Date();
    var hrs = time.getHours();
    var min = time.getMinutes();
    var sec = time.getSeconds();
    var date = time.getDate();
    var day = new Array();
    day[1] = "Monday";
    day[2] = "Tuesday";
    day[3] = "Wednesday";
    day[4] = "Thursday";
    day[5] = "Friday";
    day[6] = "Saturday";
    day[7] = "Sunday";
    var month = new Array();
    month[0] = "January";
    month[1] = "February";
    month[2] = "March";
    month[3] = "April";
    month[4] = "May";
    month[5] = "June";
    month[6] = "July";
    month[7] = "August";
    month[8] = "September";
    month[9] = "October";
    month[10] = "November";
    month[11] = "December";
    var year = time.getFullYear();
    
    document.getElementById("clock").innerHTML = month[time.getMonth()] + ' ' +date + ', ' +year + ' '  +hrs + ':' +min + ':' +sec;
    }

</script>

   </head>
    <body class="homepage" windows.onload="setInterval('getCurrentTime()', 1000);">
            


        <?php
        $link = mysqli_connect("localhost", "root", "", "user");
        $query = "SELECT * FROM account WHERE Username = '$user'";
        $result = mysqli_query($link, $query);

        while ($row = mysqli_fetch_assoc($result)) {

            $usrtype = $row["Type"];
            $sta = $row["State"];
        }
        if($sta !== "ACTIVE"){
            echo '<script>alert("您的账户处于不活跃状态。"); location.replace(document.referrer);</script>';
        }
        	//usertype
                if($usrtype == "Customer"){?>        

        <!-- Header Wrapper -->
            <div id="header-wrapper">
                <div class="container">
        
                    <!-- Nav -->
                        <nav id="nav">
                            <ul>
                                <li><a href="http://localhost/wordpress/user-bet/">下注</a></li>
                                <li><a href="http://localhost/wordpress/user-4d-result">4D 成绩</a></li>
                                <li><a href="http://localhost/wordpress/clientresult/">用户成绩</a></li>
                                <li><a href="http://localhost/wordpress/clientsearch/">下注记录</a></li>
                                <li><a href="http://localhost/wordpress/user-guide-page/">档文</a></li>
                                <li><a href="http://localhost/wordpress/logout/"><span class="glyphicon glyphicon-log-in"></span> 登出</a></li>
                            </ul>
                        </nav>
                </div>
            </div>
			 <div class="tool">
   						 <div class="main">  
                             <ul>
  							  欢迎, &nbsp;
  								  <?php
   								 if(isset($_SESSION['userlog'])) {
						        echo $_SESSION['userlog'];
   							     $user = $_SESSION['userlog'];
   								 }else{
  							      header('Location: http://localhost/wordpress/');
  								  }
 								   ?>
							    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							    Language
						    <select id="lang">
 						   <option value="eng">English</option>
						    <option value="ch" selected="selected">Chinese</option>
 						   </select>
  					  &nbsp;&nbsp;&nbsp;<span id="clock"></span>
  						  </ul>
                       </div></div>
						
         <?php } elseif($usrtype == "Dealer"){ ?>

            <!-- Header Wrapper -->
            <div id="header-wrapper">
                <div class="container">
        
                    <!-- Nav -->
                        <nav id="nav">
                            <ul>
                              <li><a href="http://localhost/wordpress/user-bet/">下注</a></li>
                                <li><a href="http://localhost/wordpress/user-4d-result">4D 成绩</a></li>
                                <li><a href="http://localhost/wordpress/clientresult/">用户成绩</a></li>
                                <li><a href="http://localhost/wordpress/clientsearch/">下注记录</a></li>
                                <li><a href="http://localhost/wordpress/dealer-percentage/">代理</a></li>
                                <li>
                                    <a href="">下线</a>
                                    <ul>
                                        <li><a href="http://localhost/wordpress/second-sub-dealer-profile/">报告</a></li>
                                        <li class="current_page_item"><a href="http://localhost/wordpress/sub-dealer-registration/">报名表</a></li>
                                        <li><a href="http://localhost/wordpress/sub-dealer-profile/">更改佣金</a></li>
                                    </ul>
                                </li>
                                <li><a href="http://localhost/wordpress/user-guide-page/">档文</a></li>
                                <li><a href="http://localhost/wordpress/logout/"><span class="glyphicon glyphicon-log-in"></span> 登出</a></li>
                            </ul>
                        </nav>
                </div>
            </div>
				<div class="tool">
   						 <div class="main">  
                             <ul>
  							  欢迎, &nbsp;
  								  <?php
   								 if(isset($_SESSION['userlog'])) {
						        echo $_SESSION['userlog'];
   							     $user = $_SESSION['userlog'];
   								 }else{
  							      header('Location: http://localhost/wordpress/');
  								  }
 								   ?>
							    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							    Language
						    <select id="lang">
 						   <option value="eng">English</option>
						    <option value="ch" selected="selected">Chinese</option>
 						   </select>
  					  &nbsp;&nbsp;&nbsp;<span id="clock"></span>
  						  </ul>
                       </div></div>
            <?php } elseif($usrtype == "Subdealer"){ ?>

            <!-- Header Wrapper -->
            <div id="header-wrapper">
                <div class="container">
        
                    <!-- Nav -->
                        <nav id="nav">
                            <ul>
                                <li><a href="http://localhost/wordpress/user-bet/">下注</a></li>
                                <li><a href="http://localhost/wordpress/user-4d-result">4D 成绩</a></li>
                                <li><a href="http://localhost/wordpress/clientresult/">用户成绩</a></li>
                                <li><a href="http://localhost/wordpress/clientsearch/">下注记录</a></li>
                                <li><a href="http://localhost/wordpress/subdealer/">下线</a></li>
                                <li><a href="http://localhost/wordpress/user-guide-page/">档文</a></li>
                                <li><a href="http://localhost/wordpress/logout/"><span class="glyphicon glyphicon-log-in"></span> 登出</a></li>
                            </ul>
                        </nav>
       

                </div>
            </div>
            <div class="tool">
   						 <div class="main">  
                             <ul>
  							  欢迎, &nbsp;
  								  <?php
   								 if(isset($_SESSION['userlog'])) {
						        echo $_SESSION['userlog'];
   							     $user = $_SESSION['userlog'];
   								 }else{
  							      header('Location: http://localhost/wordpress/');
  								  }
 								   ?>
							    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							    Language
						    <select id="lang">
 						   <option value="eng">English</option>
						    <option value="ch" selected="selected">Chinese</option>
 						   </select>
  					  &nbsp;&nbsp;&nbsp;<span id="clock"></span>
  						  </ul>
                       </div></div>

              <?php }  else {
                header('Location: http://localhost/wordpress/');
                }?>


<div id="page-wrapper">
<div class="container-fluid">
 <div class="row">
  <div class="col-md-6">
	<div class="white-box" style="border: green 5px solid;">
		<center><h3 class="box-title m-b-0">下线注册</h3></center>
			<form class="form-horizontal" action=" http://localhost/wordpress/dealer-store-dealer-registration/" method="post">
				<div class="form-group">
				<label class="control-label col-sm-3" for="username">用户名称:</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="username">
					</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-3" for="Password">密码:</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="password">
					</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-3" for="name">姓名:</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="rlname">
					</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-3" for="phone">手机号码:</label>
					<div class="col-sm-5">
						 <label class="control-label col-sm-6" id="phone" for="phone">
							<select class="form-control" name="ctCode">
							 	<option name="eightysix" value="+86">+86</option>
          			<option name="sixty" value="+60" selected="selected">+60</option>	
							</select></label>
							<input type="text" style="border-radius: 4px; margin-top: 7px;" class="control-label col-sm-6" name="phnum">		
					</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-3" for="Limit">限制:</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="limit" value='5000'>
					</div>
				</div>
				<center><h3 style="color: red;" class="box-title m-b-0">(可选择)</h3></center>
				<div class="form-group">
				<label class="control-label col-sm-3" for="backacc">银行账号:</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="bankacc">
					</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-3" for="backnme">银行名称:</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="bankname">
					</div>
				</div>
				<div class="form-group">
                <label class="control-label col-sm-3" for="stat">状态:</label>
                <div class="col-sm-5">
                  <select class="form-control" id="stat" name="stat">
                    <option value="ACTIVE" name="active" selected="selected">活跃</option>
                    <option value="SUSPEND" name="suspend">暂停</option>
                    <option value="CLOSE" name="close">关闭</option>
                  </select>
                </div>
              </div>
			<h3><input type="hidden" name="subdealer" value="<?php echo $user ?>"></h3>
			<div class="form-group m-b-0">
                <div class="col-sm-offset-3 col-sm-9">
                  <input type="submit" name="submit" id="submit" class="btn btn-info waves-effect waves-light m-t-10" value="提交"/>
                </div>
              </div>
</form>
</div>
</div>

<div class="col-md-6">
	<div class="white-box" style="border: green 5px solid;">
		<center><h3 style="color: red;" class="box-title m-b-0">请先输入用户名称</h3></center>
			<form class="form-horizontal" action="http://localhost/wordpress/dealer-store-dealer-registration/" method="post">
        <h3><input type="hidden" name="subdealer1" value="<?php echo $user ?>"></h3>
				<div class="form-group">
				<label class="control-label col-sm-3" for="username">用户名称:</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="selectusr" value="<?php echo $selectusr;?>" id="selectusr">
					</div>
				</div>
				<div class="form-group m-b-0">
                <div class="col-sm-offset-3 col-sm-9">
                  <input type="submit" name="select" id="select" class="btn btn-info waves-effect waves-light m-t-10" value="选择"/>
                </div>
              </div>
			</form>
			<br>
    
			<form class="form-horizontal" action="http://localhost/wordpress/dealer-store-dealer-registration/" method="post">
				<div class="form-group">
				<label class="control-label col-sm-3" for="username">用户名称:</label>
					<div class="col-sm-5">
						<input type="text" name="selectusr" id="userupdate" value="<?php echo $selectusr; ?>"  class="form-control" readonly="readonly">
					</div>
				</div>
				<center><h3 style="color: blue;" class="box-title m-b-0">更新个人资料</h3></center>
				<center><h3 style="color: red;">(请把密码放空如果不要改！)</h3></center>
				<div class="form-group">
				<label class="control-label col-sm-3" for="password">密码:</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="passupdate" id="passupdate">
					</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-3" for="phone">手机号码:</label>
					<div class="col-sm-5">
						 <label class="control-label col-sm-6" id="phone" for="phone">
							<select class="form-control" id="ctCodeup" name="ctCodeup" >
							 	<option name="firsteightysix" value="+86">+86</option>
          			<option name="firstsixty" value="+60" selected="selected">+60</option>	
							</select></label>
							<input type="text" style="border-radius: 4px; margin-top: 7px;" class="control-label col-sm-6" id="phnumup" name="phnumup" >		
					</div>
				</div>
				<center><h3 style="color: red;" class="box-title m-b-0">(可选择)</h3></center>
				<div class="form-group">
            	<label class="control-label col-sm-3" for="backacc">银行账号:</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="bankaccup" name="bankaccup">
					</div>
				</div>
				<div class="form-group">
				<label class="control-label col-sm-3" for="backnme">银行名称:</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="banknameup" name="banknameup">
					</div>
				</div>
				<div class="form-group">
                <label class="control-label col-sm-3" for="stat">状态:</label>
                <div class="col-sm-5">
                  <select class="form-control" id="statup" name="statup" >
                    <option value="ACTIVE" selected="selected" name="activeup">活跃</option>
                    <option value="SUSPEND" name="suspendup">暂停</option>
                    <option value="CLOSE" name="closeup">关闭</option>
                  </select>			
				<!--<input id="staclr" class="control-label col-sm-6" type="textbox" style="border-radius: 4px; margin-top: 7px; background-color: #<?php echo $light; ?>" readonly><p style="margin-top: 8px;"><?php echo $dispsta ?></p>-->
                </div>
              </div>
			<h3><input type="hidden" name="subdealer" value="<?php echo $user ?>"></h3>
			<div class="form-group m-b-0">
                <div class="col-sm-offset-3 col-sm-9">
					<input type="submit" name="update" id="update" class="btn btn-info waves-effect waves-light m-t-10" value="存储" />
                </div>
              </div>
</form>
</div>
</div>

</div>
</div>
<?php
date_default_timezone_set("Asia/Kuala_Lumpur");

$now    = time(); // current timestamp
$today  = date("w", $now); // "w" returns the weekday (number)
$wednesday = 3; // 5th day of the week (sunday = 0)
$saturday = 6;
$sunday = 0;

$oneWeekLater = strtotime('+1 Week');

if ($today == $wednesday && date("H:i:s") >= "18:56:40" && date("H:i:s") <= "23:59:59") {
  $weddate = date('F j Y', strtotime('wednesday', $oneWeekLater));
} else {
  $weddate = date('F j Y', strtotime('wednesday'));
}

if ($today == $saturday && date("H:i:s") >= "18:56:40" && date("H:i:s") <= "23:59:59") {
  $satdate = date('F j Y', strtotime('saturday', $oneWeekLater));
} else {
  $satdate = date('F j Y', strtotime('saturday'));
}

if ($today == $sunday && (date("H:i:s") >= "18:56:40" && date("H:i:s") <= "23:59:59")) {
  $sundate = date('F j Y', strtotime('sunday', $oneWeekLater));
} else {
  $sundate = date('F j Y', strtotime('sunday'));
}


$curday = date("Y-m-d");
$curtime = date("H:i:s");

$sp1 = "2017-07-04";
$sp2 = "2017-07-25";
$sp3 = "2017-08-01";
$sp4 = "2017-08-29";
$sp5 = "2017-09-05";
$sp6 = "2017-09-26";
$sp7 = "2017-10-03";
$sp8 = "2017-10-31";
$sp9 = "2017-11-07";
$sp10 = "2017-11-28";
$sp11 = "2017-12-05";
$sp12 = "2017-12-26";

$spdate1 = "18:56:40";
$spdate2 = "18:56:40";
$spdate3 = "18:56:40";
$spdate4 = "18:56:40";
$spdate5 = "18:56:40";
$spdate6 = "18:56:40";
$spdate7 = "18:56:40";
$spdate8 = "18:56:40";
$spdate9 = "18:56:40";
$spdate10 = "18:56:40";
$spdate11 = "18:56:40";
$spdate12 = "18:56:40";

$date1 = "18:57:10";
$date2 = "18:57:10";
$date3 = "18:57:10";
$date4 = "18:57:10";
$date5 = "18:57:10";
$date6 = "18:57:10";
$date7 = "18:57:10";
$date8 = "18:57:10";
$date9 = "18:57:10";
$date10 = "18:57:10";
$date11 = "18:57:10";
$date12 = "18:57:10";

$spd="";
if (strtotime($curday) <= strtotime($sp1)) {
    $spd = "July 4 2017";
}elseif (strtotime($curday) == strtotime($sp1) && (strtotime($curtime) > strtotime($spdate1) && strtotime($curtime) < strtotime($date1))) {
    $spd = "July 25 2017";
} elseif (strtotime($curday) == strtotime($sp2) && (strtotime($curtime) > strtotime($spdate2) && strtotime($curtime) < $strtotime($date2))) {
    $spd = "August 1 2017";
} elseif (strtotime($curday) == strtotime($sp3) && (strtotime($curtime) > strtotime($spdate3) && strtotime($curtime) < strtotime($date3))) {
    $spd = "August 29 2017";
} elseif (strtotime($curday) == strtotime($sp4) && (strtotime($curtime) > strtotime($spdate4) && strtotime($curtime) < strtotime($date4))) {
    $spd = "September 5 2017";
} elseif (strtotime($curday) == strtotime($sp5) && (strtotime($curtime) > strtotime($spdate5) && strtotime($curtime) < strtotime($date5))) {
    $spd = "September 26 2017";
} elseif (strtotime($curday) == strtotime($sp6) && (strtotime($curtime) > strtotime($spdate6) && strtotime($curtime) < strtotime($date6))) {
    $spd = "October 3 2017";
} elseif (strtotime($curday) == strtotime($sp7) && (strtotime($curtime) > strtotime($spdate7) && strtotime($curtime) < strtotime($date7))) {
    $spd = "October 31 2017";
} elseif (strtotime($curday) == strtotime($sp8) && (strtotime($curtime) > strtotime($spdate8) && strtotime($curtime) < strtotime($date8))) {
    $spd = "November 7 2017";
} elseif (strtotime($curday) == strtotime($sp9) && (strtotime($curtime) > strtotime($spdate9) && strtotime($curtime) < strtotime($date9))) {
    $spd = "November 28 2017";
} elseif (strtotime($curday) == strtotime($sp10) && (strtotime($curtime) > strtotime($spdate10) && strtotime($curtime) < strtotime($date10))) {
    $spd = "December 5 2017";
} elseif (strtotime($curday) == strtotime($sp11) && (strtotime($curtime) > strtotime($spdate11) && strtotime($curtime) < strtotime($date11))) {
    $spd = "December 26 2017";
} elseif (strtotime($curday) == strtotime($sp12) && (strtotime($curtime) > strtotime($spdate12) && strtotime($curtime) < strtotime($date12))) {
    $spd = "尽情期待";
} else {
  $spd = "-";
}

?>
<script type="text/javascript">
function getCurrentTime()
{
    var myDate = new Date();
    var mySecs = myDate.getSeconds();
    var curHour = myDate.getHours();
    var curMin = myDate.getMinutes();
    var suffix = "AM";

    if(mySecs < 10)
        mySecs = "0" + mySecs;

    if(curMin < 10)
        curMin = "0" + curMin;

    if(curHour == 12 && curMin >= 1)
    {
        suffix = "PM";
    }
    if(curHour == 24 && curMin >= 1)
    {
        curHour-= 12;
        suffix = "AM";
    }
    if(curHour > 12)
    {
        curHour-= 12;
        suffix = "PM";
    }

    var time = curHour + ":" + curMin + ":" + mySecs + " " + suffix;
    document.getElementById('time').innerHTML=time;

        if(time == "6:57:10 PM") //Change this to whatever time you want
            location.reload();

}
</script>
