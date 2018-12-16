<?php
    session_start();
    if(isset($_SESSION['adminlog'])) {
    //  echo $_SESSION['adminlog'];
    } else {
      header('Location: http://localhost/wordpress/adltrmin8899/');
    }
    ?>
<!DOCTYPE html>  
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="<?php bloginfo('template_directory');?>/image/png" sizes="16x16" href="<?php bloginfo('template_directory');?>/plugins/images/favicon.png">

  <title>4D Result</title>
<!-- Bootstrap Core CSS -->
<link href="<?php bloginfo('template_directory');?>/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Menu CSS -->
<link href="<?php bloginfo('template_directory');?>/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
<!-- toast CSS -->
<link href="<?php bloginfo('template_directory');?>/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
<!-- morris CSS -->
<link href="<?php bloginfo('template_directory');?>/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
<!-- animation CSS -->
<link href="<?php bloginfo('template_directory');?>/css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="<?php bloginfo('template_directory');?>/css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="<?php bloginfo('template_directory');?>/css/colors/megna.css" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-19175540-9', 'auto');
  ga('send', 'pageview');

</script>
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

.button {
    color: black;
}

#betting
{
    font-size: 14px;
    margin-left: 50px;
    border-radius: 10px;
}

#betting th
{
    padding: 0px 20px 0px 20px;
}

#betting tr td
{
    text-align: center;
}

input.tp1num {
    border-style: 1px solid;
    text-align: center;
    font-size: 30px;
    width: 150px;
    margin-left: 28px;
    height:30px;
}

input.tp2num {
    border-style: 1px solid;
    text-align: center;
    font-size: 30px;
    width: 150px;
    margin-left: 15px;
    height:30px;
}

input.tp3num {
    border-style: 1px solid;
    text-align: center;
    font-size: 30px;
    width: 150px;
    margin-left: 20px;
    height:30px;
}

input.spnum {
    border-style: 1px solid;
    text-align: center;
    font-size: 18px;
    width: 57px;
    height: 30px;
}

.intro{
    width: 20%;
    font-size: 20px;
}
table.ex1{
    border-collapse: separate;
    border-spacing: 10px;
}

table.ex1{
  border-collapse: separate;
  border-spacing: 10px;
  border-style: groove;
}
</style>

<?php
date_default_timezone_set("Asia/Kuala_Lumpur");

$now    = time(); // current timestamp
$today  = date("w", $now); // "w" returns the weekday (number)
$wednesday = 3; // 5th day of the week (sunday = 0)
$saturday = 6;
$sunday = 7;

$oneWeekLater = strtotime('+1 Week');

if (($today >= $wednesday && $today < $saturday) && (date("H:i:s") >= "18:56:40" && date("H:i:s") <= "23:59:59")) {
  $opdate = date('F j Y', strtotime('wednesday'));
  $week = '星期三';
} else {}

if (($today >= $saturday && $today < $sunday) && (date("H:i:s") >= "18:56:40" && date("H:i:s") <= "23:59:59")) {
  $opdate = date('F j Y', strtotime('saturday'));
  $week = '星期六';
} else {}

if (($today >= 0 && $today < $wednesday) && (date("H:i:s") >= "18:56:40" && date("H:i:s") <= "23:59:59")) {
  $opdate = date('F j Y', strtotime('sunday'));
  $week = '星期日';
} else {}

$curday = date("Y-m-d H:i:s");
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

if ($spdate1 > $curday) {
    $spd = "July 4";
} elseif ($spdate1 < $curday) {
    $spd = "July 25";
} elseif ($spdate2 < $curday) {
    $spd = "August 1";
} elseif ($spdate3 < $curday) {
    $spd = "August 29";
} elseif ($spdate4 < $curday) {
    $spd = "September 5";
} elseif ($spdate5 < $curday) {
    $spd = "September 26";
} elseif ($spdate6 < $curday) {
    $spd = "October 3";
} elseif ($spdate7 < $curday) {
    $spd = "October 31";
} elseif ($spdate8 < $curday) {
    $spd = "November 7";
} elseif ($spdate9 < $curday) {
    $spd = "November 28";
} elseif ($spdate10 < $curday) {
    $spd = "December 5";
} elseif ($spdate11 < $curday) {
    $spd = "December 26";
} elseif ($spdate12 < $curday) {
    echo "尽情期待";
} else {}

?>



<?php
$link = mysqli_connect("localhost", "root", "", "user");


$query = "SELECT * FROM result ORDER BY id DESC LIMIT 1";
$result = mysqli_query($link, $query);



while ($row = mysqli_fetch_assoc($result)) {

       $Sunday = $row["Sunday"];
       $Wednesday = $row["Wednesday"];
       $Tuesday = $row["Tuesday"];
       $Saturday = $row["Saturday"];

       $magt1d = $row["MagnumFirstPrize"];
       $magt2d = $row["MagnumSecondPrize"];
       $magt3d = $row["MagnumThirdPrize"];
       $mags1d = $row["MagnumFirstSP"];
       $mags2d = $row["MagnumSecondSP"];
       $mags3d = $row["MagnumThirdSP"];
       $mags4d = $row["MagnumForthSP"];
       $mags5d = $row["MagnumFifthSP"];
       $mags6d = $row["MagnumSixthSP"];
       $mags7d = $row["MagnumSeventhSP"];
       $mags8d = $row["MagnumEighthSP"];
       $mags9d = $row["MagnumNinethSP"];
       $mags10d = $row["MagnumTenthSP"];
       $mags11d = $row["MagnumEleventhSP"];
       $mags12d = $row["MagnumTwelveSP"];
       $mags13d = $row["MagnumThirteenSP"];
       $mags14d = $row["MagnumFourteenSP"];
       $mags15d = $row["MagnumFifteenSP"];
       $magc1d = $row["MagnumFirstConsolation"];
       $magc2d = $row["MagnumSecondConsolation"];
       $magc3d = $row["MagnumThirdConsolation"];
       $magc4d = $row["MagnumForthConsolation"];
       $magc5d = $row["MagnumFifthConsolation"];
       $magc6d = $row["MagnumSixthConsolation"];
       $magc7d = $row["MagnumSeventhConsolation"];
       $magc8d = $row["MagnumEighthConsolation"];
       $magc9d = $row["MagnumNinethConsolation"];
       $magc10d = $row["MagnumTenthConsolation"];

       $dmct1d = $row["DaMaCaiFirstPrize"];
       $dmct2d = $row["DaMaCaiSecondPrize"];
       $dmct3d = $row["DaMaCaiThirdPrize"];
       $dmcs1d = $row["DaMaCaiFirstSP"];
       $dmcs2d = $row["DaMaCaiSecondSP"];
       $dmcs3d = $row["DaMaCaiThirdSP"];
       $dmcs4d = $row["DaMaCaiForthSP"];
       $dmcs5d = $row["DaMaCaiFifthSP"];
       $dmcs6d = $row["DaMaCaiSixthSP"];
       $dmcs7d = $row["DaMaCaiSeventhSP"];
       $dmcs8d = $row["DaMaCaiEighthSP"];
       $dmcs9d = $row["DaMaCaiNinethSP"];
       $dmcs10d = $row["DaMaCaiTenthSP"];
       $dmcs11d = $row["DaMaCaiEleventhSP"];
       $dmcs12d = $row["DaMaCaiTwelveSP"];
       $dmcs13d = $row["DaMaCaiThirteenSP"];
       $dmcs14d = $row["DaMaCaiFourteenSP"];
       $dmcs15d = $row["DaMaCaiFifteenSP"];
       $dmcc1d = $row["DaMaCaiFirstConsolation"];
       $dmcc2d = $row["DaMaCaiSecondConsolation"];
       $dmcc3d = $row["DaMaCaiThirdConsolation"];
       $dmcc4d = $row["DaMaCaiForthConsolation"];
       $dmcc5d = $row["DaMaCaiFifthConsolation"];
       $dmcc6d = $row["DaMaCaiSixthConsolation"];
       $dmcc7d = $row["DaMaCaiSeventhConsolation"];
       $dmcc8d = $row["DaMaCaiEighthConsolation"];
       $dmcc9d = $row["DaMaCaiNinethConsolation"];
       $dmcc10d = $row["DaMaCaiTenthConsolation"];

       $tott1d = $row["TotoFirstPrize"];
       $tott2d = $row["TotoSecondPrize"];
       $tott3d = $row["TotoThirdPrize"];
       $tots1d = $row["TotoFirstSP"];
       $tots2d = $row["TotoSecondSP"];
       $tots3d = $row["TotoThirdSP"];
       $tots4d = $row["TotoForthSP"];
       $tots5d = $row["TotoFifthSP"];
       $tots6d = $row["TotoSixthSP"];
       $tots7d = $row["TotoSeventhSP"];
       $tots8d = $row["TotoEighthSP"];
       $tots9d = $row["TotoNinethSP"];
       $tots10d = $row["TotoTenthSP"];
       $tots11d = $row["TotoEleventhSP"];
       $tots12d = $row["TotoTwelveSP"];
       $tots13d = $row["TotoThirteenSP"];
       $tots14d = $row["TotoFourteenSP"];
       $tots15d = $row["TotoFifteenSP"];
       $totc1d = $row["TotoFirstConsolation"];
       $totc2d = $row["TotoSecondConsolation"];
       $totc3d = $row["TotoThirdConsolation"];
       $totc4d = $row["TotoForthConsolation"];
       $totc5d = $row["TotoFifthConsolation"];
       $totc6d = $row["TotoSixthConsolation"];
       $totc7d = $row["TotoSeventhConsolation"];
       $totc8d = $row["TotoEighthConsolation"];
       $totc9d = $row["TotoNinethConsolation"];
       $totc10d = $row["TotoTenthConsolation"];
}
      
      if($magt1d=="")
      {
        $magt1d="-";
      }
      if($magt2d=="")
      {
        $magt2d="-";
      }
      if($magt3d=="")
      {
        $magt3d="-";
      }
      if($mags1d=="")
      {
        $mags1d="-";
      }
      if($mags2d=="")
      {
        $mags2d="-";
      }
      if($mags3d=="")
      {
        $mags3d="-";
      }
      if($mags4d=="")
      {
        $mags4d="-";
      }
      if($mags5d=="")
      {
        $mags5d="-";
      }
      if($mags6d=="")
      {
        $mags6d="-";
      }
      if($mags7d=="")
      {
        $mags7d="-";
      }
      if($mags8d=="")
      {
        $mags8d="-";
      }
      if($mags9d=="")
      {
        $mags9d="-";
      }
      if($mags10d=="")
      {
        $mags10d="-";
      }
      if($mags11d=="")
      {
        $mags11d="-";
      }
      if($mags12d=="")
      {
        $mags12d="-";
      }
      if($mags13d=="")
      {
        $mags13d="-";
      }
      if($mags14d=="")
      {
        $mags14d="-";
      }
      if($mags15d=="")
      {
        $mags15d="-";
      }
      if($magc1d=="")
      {
        $magc1d="-";
      }
      if($magc2d=="")
      {
        $magc2d="-";
      }
      if($magc3d=="")
      {
        $magc3d="-";
      }
      if($magc4d=="")
      {
        $magc4d="-";
      }
      if($magc5d=="")
      {
        $magc5d="-";
      }
      if($magc6d=="")
      {
        $magc6d="-";
      }
      if($magc7d=="")
      {
        $magc7d="-";
      }
      if($magc8d=="")
      {
        $magc8d="-";
      }
      if($magc9d=="")
      {
        $magc9d="-";
      }
      if($magc10d=="")
      {
        $magc10d="-";
      }


      if($dmct1d=="")
      {
        $dmct1d="-";
      }
      if($dmct2d=="")
      {
        $dmct2d="-";
      }
      if($dmct3d=="")
      {
        $dmct3d="-";
      }
      if($dmcs1d=="")
      {
        $dmcs1d="-";
      }
      if($dmcs2d=="")
      {
        $dmcs2d="-";
      }
      if($dmcs3d=="")
      {
        $dmcs3d="-";
      }
      if($dmcs4d=="")
      {
        $dmcs4d="-";
      }
      if($dmcs5d=="")
      {
        $dmcs5d="-";
      }
      if($dmcs6d=="")
      {
        $dmcs6d="-";
      }
      if($dmcs7d=="")
      {
        $dmcs7d="-";
      }
      if($dmcs8d=="")
      {
        $dmcs8d="-";
      }
      if($dmcs9d=="")
      {
        $dmcs9d="-";
      }
      if($dmcs10d=="")
      {
        $dmcs10d="-";
      }
      if($dmcs11d=="")
      {
        $dmcs11d="-";
      }
      if($dmcs12d=="")
      {
        $dmcs12d="-";
      }
      if($dmcs13d=="")
      {
        $dmcs13d="-";
      }
      if($dmcs14d=="")
      {
        $dmcs14d="-";
      }
      if($dmcs15d=="")
      {
        $dmcs15d="-";
      }
      if($dmcc1d=="")
      {
        $dmcc1d="-";
      }
      if($dmcc2d=="")
      {
        $dmcc2d="-";
      }
      if($dmcc3d=="")
      {
        $dmcc3d="-";
      }
      if($dmcc4d=="")
      {
        $dmcc4d="-";
      }
      if($dmcc5d=="")
      {
        $dmcc5d="-";
      }
      if($dmcc6d=="")
      {
        $dmcc6d="-";
      }
      if($dmcc7d=="")
      {
        $dmcc7d="-";
      }
      if($dmcc8d=="")
      {
        $dmcc8d="-";
      }
      if($dmcc9d=="")
      {
        $dmcc9d="-";
      }
      if($dmcc10d=="")
      {
        $dmcc10d="-";
      }


       if($tott1d=="")
      {
        $tott1d="-";
      }
      if($tott2d=="")
      {
        $tott2d="-";
      }
      if($tott3d=="")
      {
        $tott3d="-";
      }
      if($tots1d=="")
      {
        $tots1d="-";
      }
      if($tots2d=="")
      {
        $tots2d="-";
      }
      if($tots3d=="")
      {
        $tots3d="-";
      }
      if($tots4d=="")
      {
        $tots4d="-";
      }
      if($tots5d=="")
      {
        $tots5d="-";
      }
      if($tots6d=="")
      {
        $tots6d="-";
      }
      if($tots7d=="")
      {
        $tots7d="-";
      }
      if($tots8d=="")
      {
        $tots8d="-";
      }
      if($tots9d=="")
      {
        $tots9d="-";
      }
      if($tots10d=="")
      {
        $tots10d="-";
      }
      if($tots11d=="")
      {
        $tots11d="-";
      }
      if($tots12d=="")
      {
        $tots12d="-";
      }
      if($tots13d=="")
      {
        $tots13d="-";
      }
      if($tots14d=="")
      {
        $tots14d="-";
      }
      if($tots15d=="")
      {
        $tots15d="-";
      }
      if($totc1d=="")
      {
        $totc1d="-";
      }
      if($totc2d=="")
      {
        $totc2d="-";
      }
      if($totc3d=="")
      {
        $totc3d="-";
      }
      if($totc4d=="")
      {
        $totc4d="-";
      }
      if($totc5d=="")
      {
        $totc5d="-";
      }
      if($totc6d=="")
      {
        $totc6d="-";
      }
      if($totc7d=="")
      {
        $totc7d="-";
      }
      if($totc8d=="")
      {
        $totc8d="-";
      }
      if($totc9d=="")
      {
        $totc9d="-";
      }
      if($totc10d=="")
      {
        $totc10d="-";
      }

?>
</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
      <div class="top-left-part"><a class="logo" href="index.html"><b><img src="https://ltttry8899.com/wp-content/uploads/2017/05/smllogo-e1495965045838.png" style="width:50px; height:50px;" alt="home" /></b></a></div>
      <ul class="nav navbar-top-links navbar-right pull-right">      
        <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">欢迎,  <img src="<?php bloginfo('template_directory');?>/img/default-picture.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">
  </b> </a>
          <ul class="dropdown-menu dropdown-user animated flipInY">
            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
			<li>Language
    	<select id="lang">
    	<option value="eng">English</option>
    	<option value="ch" selected="selected">Chinese</option>
    	</select><br/><br/><span id="clock"></span>
		</li>
          <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
      </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
  </nav>
 <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
      <ul class="nav" id="side-menu">
        <li class="sidebar-search hidden-sm hidden-md hidden-lg">
          <!-- input-group -->
          <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
          <!-- /input-group -->
        </li>
        <li> <a href="http://localhost/wordpress/admin-enter-result/" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Submit Result<span class="fa arrow"></span> </span></a>
        </li>
<li> <a href="http://localhost/wordpress/admin-4d-results/" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">4D Result<span class="fa arrow"></span> </span></a>
        </li>
        <li><a href="#" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Profile<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li><a href="http://localhost/wordpress/admin-4d-results/">User Profile</a></li>
            <li><a href="http://localhost/wordpress/admin-dealer-profile/">Dealer Profile</a></li>
           </ul>
        </li>
<li> <a href="http://localhost/wordpress/admin-user-registration/" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="/"></i> <span class="hide-menu">Registration<span class="fa arrow"></span> </span></a>
        </li>
        <li> <a href="#" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Betting Report<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li><a href="form-basic.html">Win List</a></li>
            <li><a href="form-layout.html">Report</a></li>
          </ul>
        </li>
        <li> <a href="#" class="waves-effect"><i data-icon="O" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Limit<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li><a href="http://localhost/wordpress/admin-bet-no-limit/">Bet No. Limit</a></li>
			      <li><a href="http://localhost/wordpress/admin-user-limit-changes/">User Limit</a></li>
            <li><a href="http://localhost/wordpress/admin-user-payment/">Payment</a></li>
          </ul>
        </li>
 		<li> <a href="http://localhost/wordpress/admin-update-winrate/" class="waves-effect"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Win Rate<span class="fa arrow"></span></span></a>
        </li>
</ul>
    </div>
  </div>



<div id="page-wrapper">
  <div class="container-fluid">
		<div class="row bg-title">
        	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          	<h4 class="page-title">成绩表</h4>
        	</div>
		</div>
    <center>
    <h4><?php echo "$Sunday" ?></h4>
    <h4><?php echo "$Saturday" ?></h4>
    <h4><?php echo "$Wednesday" ?></h4>
    <h4><?php echo "$Tuesday" ?></h4>
    </center>

  <div class="row">
        <div class="col-md-4 col-xs-12 col-sm-6">
          <div class="white-box">
            <table class="ex1">
<th bgcolor="yellow" style="color:black; font-size: 20px; text-align:center;"><img align="left" height="40px" src="http://localhost/wordpress/wp-content/uploads/2017/05/4dresultm-e1495971879449.gif"><p>Magnum/万能</p></th>
<tr>
    <th style="font-size:20px;">1st Prize 首獎<input class="tp1num" type="text" name="magtp1" maxlength="4" value=<?php echo $magt1d ?> readonly></th>
</tr>

<tr>
    <th style="font-size:20px;">2nd Prize 二獎<input class="tp2num" type="text" name="magtp2" maxlength="4" value=<?php echo $magt2d ?> readonly></th>
</tr>

<tr>
    <th style="font-size:20px;">3rd Prize 三獎<input class="tp3num" type="text" name="magtp3" maxlength="4" value=<?php echo $magt3d ?> readonly></th>
</tr>

<tr>
<th style="font-size:16px; text-align:center; background-color: #cecece">Special 特别奖</th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" name="magsp1" maxlength="4" value=<?php echo $mags1d ?> readonly>
                                <input class="spnum" type="text" name="magsp2" maxlength="4" value=<?php echo $mags2d ?> readonly>
                                <input class="spnum" type="text" name="magsp3" maxlength="4" value=<?php echo $mags3d ?> readonly>
                                <input class="spnum" type="text" name="magsp4" maxlength="4" value=<?php echo $mags4d ?> readonly>
                                <input class="spnum" type="text" name="magsp5" maxlength="4" value=<?php echo $mags5d ?> readonly></th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" name="magsp6" maxlength="4" value=<?php echo $mags6d ?> readonly>
                                <input class="spnum" type="text" name="magsp7" maxlength="4" value=<?php echo $mags7d ?> readonly>
                                <input class="spnum" type="text" name="magsp8" maxlength="4" value=<?php echo $mags8d ?> readonly>
                                <input class="spnum" type="text" name="magsp9" maxlength="4" value=<?php echo $mags9d ?> readonly>
                                <input class="spnum" type="text" name="magsp10" maxlength="4" value=<?php echo $mags10d ?> readonly></th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" name="magsp11" maxlength="4" value=<?php echo $mags11d ?> readonly>
                                <input class="spnum" type="text" name="magsp12" maxlength="4" value=<?php echo $mags12d ?> readonly>
                                <input class="spnum" type="text" name="magsp13" maxlength="4" value=<?php echo $mags13d ?> readonly>
                                <input class="spnum" type="text" name="magsp14" maxlength="4" value=<?php echo $mags14d ?> readonly>
                                <input class="spnum" type="text" name="magsp15" maxlength="4" value=<?php echo $mags15d ?> readonly></th>
</tr>

<tr>
<th style="font-size:16px; text-align:center; background-color: #cecece">Consolation 安慰奖</th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" name="magcs1" maxlength="4" value=<?php echo $magc1d ?> readonly>
                                <input class="spnum" type="text" name="magcs2" maxlength="4" value=<?php echo $magc2d ?> readonly>
                                <input class="spnum" type="text" name="magcs3" maxlength="4" value=<?php echo $magc3d ?> readonly>
                                <input class="spnum" type="text" name="magcs4" maxlength="4" value=<?php echo $magc4d ?> readonly>
                                <input class="spnum" type="text" name="magcs5" maxlength="4" value=<?php echo $magc5d ?> readonly></th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" name="magcs6" maxlength="4" value=<?php echo $magc6d ?> readonly>
                                <input class="spnum" type="text" name="magcs7" maxlength="4" value=<?php echo $magc7d ?> readonly>
                                <input class="spnum" type="text" name="magcs8" maxlength="4" value=<?php echo $magc8d ?> readonly>
                                <input class="spnum" type="text" name="magcs9" maxlength="4" value=<?php echo $magc9d ?> readonly>
                                <input class="spnum" type="text" name="magcs10" maxlength="4" value=<?php echo $magc10d ?> readonly></th>
</tr>
</table>
          </div>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-6">
          <div class="white-box">
            <table class="ex1">
<th bgcolor="blue" style="color:white; font-size: 20px; text-align:center;"><img align="left" height="40px" src="http://www.ltttry8899.com/wp-content/uploads/2017/05/4dresultd-e1495971890539.gif"><p>Damacai/大马彩</p></th>
<tr>
    <th style="font-size:20px;">1st Prize 首獎<input class="tp1num" type="text" name="dmctp1" maxlength="4" value=<?php echo $dmct1d ?> readonly></th>
</tr>

<tr>
    <th style="font-size:20px;">2nd Prize 二獎<input class="tp2num" type="text" name="dmctp2" maxlength="4" value=<?php echo $dmct2d ?> readonly></th>
</tr>

<tr>
    <th style="font-size:20px;">3rd Prize 三獎<input class="tp3num" type="text" name="dmctp3" maxlength="4" value=<?php echo $dmct3d ?> readonly></th>
</tr>

<tr>
<th style="font-size:16px; text-align:center; background-color: #cecece">Special 特别奖</th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" name="dmcsp1" maxlength="4" value=<?php echo $dmcs1d ?> readonly>
                                <input class="spnum" type="text" name="dmcsp2" maxlength="4" value=<?php echo $dmcs2d ?> readonly>
                                <input class="spnum" type="text" name="dmcsp3" maxlength="4" value=<?php echo $dmcs3d ?> readonly>
                                <input class="spnum" type="text" name="dmcsp4" maxlength="4" value=<?php echo $dmcs4d ?> readonly>
                                <input class="spnum" type="text" name="dmcsp5" maxlength="4" value=<?php echo $dmcs5d ?> readonly></th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" name="dmcsp6" maxlength="4" value=<?php echo $dmcs6d ?> readonly>
                                <input class="spnum" type="text" name="dmcsp7" maxlength="4" value=<?php echo $dmcs7d ?> readonly>
                                <input class="spnum" type="text" name="dmcsp8" maxlength="4" value=<?php echo $dmcs8d ?> readonly>
                                <input class="spnum" type="text" name="dmcsp9" maxlength="4" value=<?php echo $dmcs9d ?> readonly>
                                <input class="spnum" type="text" name="dmcsp10" maxlength="4" value=<?php echo $dmcs10d ?> readonly></th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" name="dmcsp11" maxlength="4" value=<?php echo $dmcs11d ?> readonly>
                                <input class="spnum" type="text" name="dmcsp12" maxlength="4" value=<?php echo $dmcs12d ?> readonly>
                                <input class="spnum" type="text" name="dmcsp13" maxlength="4" value=<?php echo $dmcs13d ?> readonly>
                                <input class="spnum" type="text" name="dmcsp14" maxlength="4" value=<?php echo $dmcs14d ?> readonly>
                                <input class="spnum" type="text" name="dmcsp15" maxlength="4" value=<?php echo $dmcs15d ?> readonly></th>
</tr>

<tr>
<th style="font-size:16px; text-align:center; background-color: #cecece">Consolation 安慰奖</th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" name="dmccs1" maxlength="4" value=<?php echo $dmcc1d ?> readonly>
                                <input class="spnum" type="text" name="dmccs2" maxlength="4" value=<?php echo $dmcc2d ?> readonly>
                                <input class="spnum" type="text" name="dmccs3" maxlength="4" value=<?php echo $dmcc3d ?> readonly>
                                <input class="spnum" type="text" name="dmccs4" maxlength="4" value=<?php echo $dmcc4d ?> readonly>
                                <input class="spnum" type="text" name="dmccs5" maxlength="4" value=<?php echo $dmcc5d ?> readonly></th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" name="dmccs6" maxlength="4" value=<?php echo $dmcc6d ?> readonly>
                                <input class="spnum" type="text" name="dmccs7" maxlength="4" value=<?php echo $dmcc7d ?> readonly>
                                <input class="spnum" type="text" name="dmccs8" maxlength="4" value=<?php echo $dmcc8d ?> readonly>
                                <input class="spnum" type="text" name="dmccs9" maxlength="4" value=<?php echo $dmcc9d ?> readonly>
                                <input class="spnum" type="text" name="dmccs10" maxlength="4" value=<?php echo $dmcc10d ?> readonly></th>
</tr>
</table>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="white-box">
            <table class="ex1">
<th bgcolor="red" style="color:white; font-size: 20px; text-align:center;"><img align="left" height="40px" src="http://www.ltttry8899.com/wp-content/uploads/2017/05/4dresultt-e1495971870952.gif"><p>Sports Toto/多多</p></th>
<tr>
    <th style="font-size:20px;">1st Prize 首獎<input class="tp1num" type="text" name="tottp1" maxlength="4" value=<?php echo $tott1d ?> readonly></th>
</tr>

<tr>
    <th style="font-size:20px;">2nd Prize 二獎<input class="tp2num" type="text" name="tottp2" maxlength="4" value=<?php echo $tott2d ?> readonly></th>
</tr>

<tr>
    <th style="font-size:20px;">3rd Prize 三獎<input class="tp3num" type="text" name="tottp3" maxlength="4" value=<?php echo $tott3d ?> readonly></th>
</tr>

<tr>
<th style="font-size:16px; text-align:center; background-color: #cecece">Special 特别奖</th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" name="totsp1" maxlength="4" value=<?php echo $tots1d ?> readonly>
                                <input class="spnum" type="text" name="totsp2" maxlength="4" value=<?php echo $tots2d ?> readonly>
                                <input class="spnum" type="text" name="totsp3" maxlength="4" value=<?php echo $tots3d ?> readonly>
                                <input class="spnum" type="text" name="totsp4" maxlength="4" value=<?php echo $tots4d ?> readonly>
                                <input class="spnum" type="text" name="totsp5" maxlength="4" value=<?php echo $tots5d ?> readonly></th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" name="totsp6" maxlength="4" value=<?php echo $tots6d ?> readonly>
                                <input class="spnum" type="text" name="totsp7" maxlength="4" value=<?php echo $tots7d ?> readonly>
                                <input class="spnum" type="text" name="totsp8" maxlength="4" value=<?php echo $tots8d ?> readonly>
                                <input class="spnum" type="text" name="totsp9" maxlength="4" value=<?php echo $tots9d ?> readonly>
                                <input class="spnum" type="text" name="totsp10" maxlength="4" value=<?php echo $tots10d ?> readonly></th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" name="totsp11" maxlength="4" value=<?php echo $tots11d ?> readonly>
                                <input class="spnum" type="text" name="totsp12" maxlength="4" value=<?php echo $tots12d ?> readonly>
                                <input class="spnum" type="text" name="totsp13" maxlength="4" value=<?php echo $tots13d ?> readonly>
                                <input class="spnum" type="text" name="totsp14" maxlength="4" value=<?php echo $tots14d ?> readonly>
                                <input class="spnum" type="text" name="totsp15" maxlength="4" value=<?php echo $tots15d ?> readonly></th>
</tr>

<tr>
<th style="font-size:16px; text-align:center; background-color: #cecece">Consolation 安慰奖</th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" name="totcs1" maxlength="4" value=<?php echo $totc1d ?> readonly>
                                <input class="spnum" type="text" name="totcs2" maxlength="4" value=<?php echo $totc2d ?> readonly>
                                <input class="spnum" type="text" name="totcs3" maxlength="4" value=<?php echo $totc3d ?> readonly>
                                <input class="spnum" type="text" name="totcs4" maxlength="4" value=<?php echo $totc4d ?> readonly>
                                <input class="spnum" type="text" name="totcs5" maxlength="4" value=<?php echo $totc5d ?> readonly></th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" name="totcs6" maxlength="4" value=<?php echo $totc6d ?> readonly>
                                <input class="spnum" type="text" name="totcs7" maxlength="4" value=<?php echo $totc7d ?> readonly>
                                <input class="spnum" type="text" name="totcs8" maxlength="4" value=<?php echo $totc8d ?> readonly>
                                <input class="spnum" type="text" name="totcs9" maxlength="4" value=<?php echo $totc9d ?> readonly>
                                <input class="spnum" type="text" name="totcs10" maxlength="4" value=<?php echo $totc10d ?> readonly></th>
</tr>
</table>
          </div>
        </div>
      </div>

<div class="row">

</div>
  </form>
  </div>
  </div>
   <footer class="footer text-center"> 2017 &copy; ltttry8899.com </footer>