<!DOCTYPE HTML>

<html>
    <head>
        <title>4D 成绩</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
        <script>
            var template_dir_js="<?php bloginfo('template_directory');?>";
        </script>
		  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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


   
    <?php
    session_start();
    if(isset($_SESSION['userlog'])) {
  //      echo $_SESSION['userlog'];
        $user = $_SESSION['userlog'];
    }else{
        header('Location: http://localhost/wordpress/');
    }
    ?>
   


    </head>
    <body class="homepage" onload="setInterval('getCurrentTime()', 1000);">
            


        <?php
        $link = mysqli_connect("localhost", "root", "", "user");
        $query = "SELECT * FROM account WHERE username = '$user'";
        $result = mysqli_query($link, $query);

        while ($row = mysqli_fetch_assoc($result)) {

            $usrtype = $row["Type"];
            $sta = $row["State"];
        }
        if($sta !== "ACTIVE"){
            echo '<script>alert("您的账户处于不活跃状态。"); location.replace(document.referrer);</script>';
        }

                if($usrtype == "Customer"){?>        

        <!-- Header Wrapper -->
            <div id="header-wrapper">
                <div class="container">
        
                    <!-- Nav -->
                        <nav id="nav">
                            <ul>
                                <li><a href="http://localhost/wordpress/user-bet/">下注</a></li>
                                <li class="current_page_item"><a href="http://localhost/wordpress/user-4d-result">4D 成绩</a></li>
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
                                <li class="current_page_item"><a href="http://localhost/wordpress/user-4d-result">4D 成绩</a></li>
                                <li><a href="http://localhost/wordpress/clientresult/">用户成绩</a></li>
                                <li><a href="http://localhost/wordpress/clientsearch/">下注记录</a></li>
                                <li><a href="http://localhost/wordpress/dealer-percentage/">代理</a></li>
                                <li>
                                    <a href="">下线</a>
                                    <ul>
                                        <li><a href="http://localhost/wordpress/second-sub-dealer-profile/">报告</a></li>
                                        <li><a href="http://localhost/wordpress/sub-dealer-registration/">报名表</a></li>
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
                                <li class="current_page_item"><a href="http://localhost/wordpress/user-4d-result">4D 成绩</a></li>
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

            <?php
            /*$sql = "SELECT * FROM balance WHERE userID = '$user'";
            $result = mysqli_query($link,$sql);

           while ($row = mysqli_fetch_assoc($result)) {
                $avBal = $row["avBal"];
            }*/
            ?>           
<?php
date_default_timezone_set("Asia/Kuala_Lumpur");
?>
<body>