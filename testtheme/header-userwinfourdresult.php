  <?php
   session_start();
    if(isset($_SESSION['userlog'])) {
  //      echo $_SESSION['userlog'];
        $user = $_SESSION['userlog'];
    }else{
        header('Location: https://www.ltttry8899.com/');
    }

  $conn=mysqli_connect('localhost','root','','user'); 
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

    ?>
<!DOCTYPE HTML>

<html>
    <head>
        <title>档文</title>
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
        if($sta != "ACTIVE"){
            echo '<script>alert("您的账户处于不活跃状态。"); location.replace(document.referrer);</script>';
        }

                if($usrtype == "Customer"){?>        

        <!-- Header Wrapper -->
            <div id="header-wrapper">
                <div class="container">
        
                    <!-- Nav -->
                        <nav id="nav">
                            <ul>
                                <li><a href="https://www.ltttry8899.com/user-bet/">下注</a></li>
                                <li><a href="https://www.ltttry8899.com/user-4d-result">4D 成绩</a></li>
                                <li><a href="https://www.ltttry8899.com/clientresult/">用户成绩</a></li>
                                <li><a href="https://www.ltttry8899.com/clientsearch/">下注记录</a></li>
                                <li class="current_page_item"><a href="https://www.ltttry8899.com/user-guide-page/">档文</a></li>
                                <li><a href="https://www.ltttry8899.com/logout/"><span class="glyphicon glyphicon-log-in"></span> 登出</a></li>
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
  							      header('Location: https://www.ltttry8899.com/');
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
                              <li><a href="https://www.ltttry8899.com/user-bet/">下注</a></li>
                                <li><a href="https://www.ltttry8899.com/user-4d-result">4D 成绩</a></li>
                                <li><a href="https://www.ltttry8899.com/clientresult/">用户成绩</a></li>
                                <li><a href="https://www.ltttry8899.com/clientsearch/">下注记录</a></li>
                                <li><a href="https://www.ltttry8899.com//dealer-percentage/">代理</a></li>
                                <li>
                                    <a href="">下线</a>
                                    <ul>
                                        <li><a href="https://www.ltttry8899.com/second-sub-dealer-profile/">报告</a></li>
                                        <li><a href="https://www.ltttry8899.com/sub-dealer-registration/">报名表</a></li>
                                        <li><a href="https://www.ltttry8899.com/sub-dealer-profile/">更改佣金</a></li>

                                    </ul>
                                </li>
                                <li class="current_page_item"><a href="https://www.ltttry8899.com/user-guide-page/">档文</a></li>
                                <li><a href="https://www.ltttry8899.com/logout/"><span class="glyphicon glyphicon-log-in"></span> 登出</a></li>
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
  							      header('Location: https://www.ltttry8899.com/');
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
                                <li><a href="https://www.ltttry8899.com/user-bet/">下注</a></li>
                                <li><a href="https://www.ltttry8899.com/user-4d-result">4D 成绩</a></li>
                                <li><a href="https://www.ltttry8899.com/clientresult/">用户成绩</a></li>
                                <li><a href="https://www.ltttry8899.com/clientsearch/">下注记录</a></li>
                                <li><a href="https://www.ltttry8899.com/subdealer/">下线</a></li>
                                <li class="current_page_item"><a href="https://www.ltttry8899.com/user-guide-page/">档文</a></li>
                                <li><a href="https://www.ltttry8899.com/logout/"><span class="glyphicon glyphicon-log-in"></span> 登出</a></li>
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
  							      header('Location: https://www.ltttry8899.com/');
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
                header('Location: https://www.ltttry8899.com/');
                }?>

            <?php
            /*$sql = "SELECT * FROM balance WHERE userID = '$user'";
            $result = mysqli_query($link,$sql);

           while ($row = mysqli_fetch_assoc($result)) {
                $avBal = $row["avBal"];
            }*/
            ?>           
<?php
 $conn = mysqli_connect("localhost", "root", "", "user");
$query = "SELECT * FROM winrate";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $FirstPrizeBig = $row['FirstPrizeBig'];
    $FirstPrizeSmall = $row['FirstPrizeSmall'];
    $FirstPrize = $row['FirstPrize'];
    $Three = $row['Three'];
    $Two = $row['Two'];

    $SecondPrizeBig = $row['SecondPrizeBig'];
    $SecondPrizeSmall = $row['SecondPrizeSmall'];
    $SecondPrize = $row['SecondPrize'];

    $ThirdPrizeBig = $row['ThirdPrizeBig'];
    $ThirdPrizeSmall = $row['ThirdPrizeSmall'];
    $ThirdPrize = $row['ThirdPrize'];

    $SpecialPrizeBig = $row['SpecialPrizeBig'];
    $SpecialPrize = $row['SpecialPrize'];

    $ConsolationPrizeBig = $row['ConsolationPrizeBig'];
    $ConsolationPrize = $row['ConsolationPrize'];
}

?>

<div id="content-wrapper">
<div class="container" id="main">
<div class="row">
<center>
<img src="https://www.ltttry8899.com/wp-content/uploads/2017/06/webwxgetmsgimg-e1497438989695.jpg" class="backgroundimage"/>
</center>
<br><br><br><br><br><br><br><br><br><br><br>
<center>
<h3 class="movetitle">中奖</h3>
</center>
<br>
</div>

<form action="" method="post">
<table border="1" class="table table-striped tableborder movetable">
<col width="50">
<col width="30">
<col width="30">
<col width="30">
<col width="30">
<col width="30">
<col width="30">
<col width="30">
<tr class="tableborder">
	<td></td>
	<th class="tableborder" style="text-align: center;" colspan="7">4D</th>
	<th class="tableborder" style="text-align: center;" colspan="2">3D</th>
</tr>
<tr class="tableborder">
	<td class="tableborder"></td>
	<td class="tableborder" bgcolor="#D3D3D3">大</td>
	<td class="tableborder" bgcolor="#D3D3D3">小</td>
	<td class="tableborder" bgcolor="#D3D3D3">头奖</td>
	<td class="tableborder" bgcolor="#D3D3D3">二奖</td>
	<td class="tableborder" bgcolor="#D3D3D3">三奖</td>
	<td class="tableborder" bgcolor="#D3D3D3">特别奖</td>
	<td class="tableborder" bgcolor="#D3D3D3">安慰奖</td>
	<td class="tableborder" bgcolor="#D3D3D3">三个字</td>
	<td class="tableborder" bgcolor="#D3D3D3">两个字</td>
</tr>

<tr class="tableborder">
	<td class="tableborder">头奖</td>
	<td class="tableborder"><input class="tablewidth" type="text" value="<?php echo $FirstPrizeBig; ?>" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth" type="text" value="<?php echo $FirstPrizeSmall; ?>" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth" type="text" value="<?php echo $FirstPrize; ?>" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth" type="text" value="<?php echo $Three; ?>" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth" type="text" value="<?php echo $Two; ?>" size="10" readonly></td>
</tr>

<tr class="tableborder">
	<td class="tableborder">二奖</td>
	<td class="tableborder"><input class="tablewidth" type="text" value="<?php echo $SecondPrizeBig; ?>" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth" type="text" value="<?php echo $SecondPrizeSmall; ?>" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth" type="text" value="<?php echo $SecondPrize; ?>" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
</tr>

<tr class="tableborder">
	<td class="tableborder">三奖</td>
	<td class="tableborder"><input class="tablewidth" type="text" value="<?php echo $ThirdPrizeBig; ?>" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth" type="text" value="<?php echo $ThirdPrizeSmall; ?>" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth" type="text" value="<?php echo $ThirdPrize; ?>" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
</tr>

<tr class="tableborder">
	<td class="tableborder">特别奖</td>
	<td class="tableborder"><input class="tablewidth" type="text" value="<?php echo $SpecialPrizeBig; ?>" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth" type="text" value="<?php echo $SpecialPrize; ?>" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
</tr>

<tr class="tableborder">
	<td class="tableborder">安慰奖</td>
	<td class="tableborder"><input class="tablewidth" type="text" value="<?php echo $ConsolationPrizeBig; ?>" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth" type="text" value="<?php echo $ConsolationPrize; ?>" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
	<td class="tableborder"><input class="tablewidth notallowedgrey" type="text" size="10" readonly></td>
</tr>
</table>
</form>
</div>
</div>