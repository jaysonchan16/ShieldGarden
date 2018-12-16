  <?php
    session_start();
    if(isset($_SESSION['adminlog'])) {
     // echo $_SESSION['adminlog'];
    } else {
      header('Location: http://localhost/wordpress/admin-enter-result/');
    }

$conn = mysqli_connect("localhost", "root", "", "user");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

    if(isset($_POST['button-submit']))
  {
    $wed = isset($_POST['wed']) ? $_POST['wed'] : '-';
    $sat = isset($_POST['sat']) ? $_POST['sat'] : '-';
    $sun = isset($_POST['sun']) ? $_POST['sun'] : '-';
    $tue = isset($_POST['tue']) ? $_POST['tue'] : '-';


    $magtp1 = isset($_POST['magtp1']) ? $_POST['magtp1'] : '-';
    $magtp2 = isset($_POST['magtp2']) ? $_POST['magtp2'] : '-';
    $magtp3 = isset($_POST['magtp3']) ? $_POST['magtp3'] : '-';

    $magsp1 = isset($_POST['magsp1']) ? $_POST['magsp1'] : '-';
    $magsp2 = isset($_POST['magsp2']) ? $_POST['magsp2'] : '-';
    $magsp3 = isset($_POST['magsp3']) ? $_POST['magsp3'] : '-';
    $magsp4 = isset($_POST['magsp4']) ? $_POST['magsp4'] : '-';
    $magsp5 = isset($_POST['magsp5']) ? $_POST['magsp5'] : '-';
    $magsp6 = isset($_POST['magsp6']) ? $_POST['magsp6'] : '-';
    $magsp7 = isset($_POST['magsp7']) ? $_POST['magsp7'] : '-';
    $magsp8 = isset($_POST['magsp8']) ? $_POST['magsp8'] : '-';
    $magsp9 = isset($_POST['magsp9']) ? $_POST['magsp9'] : '-';
    $magsp10 = isset($_POST['magsp10']) ? $_POST['magsp10'] : '-';
    $magsp11 = isset($_POST['magsp11']) ? $_POST['magsp11'] : '-';
    $magsp12 = isset($_POST['magsp12']) ? $_POST['magsp12'] : '-';
    $magsp13 = isset($_POST['magsp13']) ? $_POST['magsp13'] : '-';
    $magsp14 = isset($_POST['magsp14']) ? $_POST['magsp14'] : '-';
    $magsp15 = isset($_POST['magsp15']) ? $_POST['magsp15'] : '-';

    $magcs1 = isset($_POST['magcs1']) ? $_POST['magcs1'] : '-';
    $magcs2 = isset($_POST['magcs2']) ? $_POST['magcs2'] : '-';
    $magcs3 = isset($_POST['magcs3']) ? $_POST['magcs3'] : '-';
    $magcs4 = isset($_POST['magcs4']) ? $_POST['magcs4'] : '-';
    $magcs5 = isset($_POST['magcs5']) ? $_POST['magcs5'] : '-';
    $magcs6 = isset($_POST['magcs6']) ? $_POST['magcs6'] : '-';
    $magcs7 = isset($_POST['magcs7']) ? $_POST['magcs7'] : '-';
    $magcs8 = isset($_POST['magcs8']) ? $_POST['magcs8'] : '-';
    $magcs9 = isset($_POST['magcs9']) ? $_POST['magcs9'] : '-';
    $magcs10 = isset($_POST['magcs10']) ? $_POST['magcs10'] : '-';


    $dmctp1 = isset($_POST['dmctp1']) ? $_POST['dmctp1'] : '-';
    $dmctp2 = isset($_POST['dmctp2']) ? $_POST['dmctp2'] : '-';
    $dmctp3 = isset($_POST['dmctp3']) ? $_POST['dmctp3'] : '-';

    $dmcsp1 = isset($_POST['dmcsp1']) ? $_POST['dmcsp1'] : '-';
    $dmcsp2 = isset($_POST['dmcsp2']) ? $_POST['dmcsp2'] : '-';
    $dmcsp3 = isset($_POST['dmcsp3']) ? $_POST['dmcsp3'] : '-';
    $dmcsp4 = isset($_POST['dmcsp4']) ? $_POST['dmcsp4'] : '-';
    $dmcsp5 = isset($_POST['dmcsp5']) ? $_POST['dmcsp5'] : '-';
    $dmcsp6 = isset($_POST['dmcsp6']) ? $_POST['dmcsp6'] : '-';
    $dmcsp7 = isset($_POST['dmcsp7']) ? $_POST['dmcsp7'] : '-';
    $dmcsp8 = isset($_POST['dmcsp8']) ? $_POST['dmcsp8'] : '-';
    $dmcsp9 = isset($_POST['dmcsp9']) ? $_POST['dmcsp9'] : '-';
    $dmcsp10 = isset($_POST['dmcsp10']) ? $_POST['dmcsp10'] : '-';
    $dmcsp11 = isset($_POST['dmcsp11']) ? $_POST['dmcsp11'] : '-';
    $dmcsp12 = isset($_POST['dmcsp12']) ? $_POST['dmcsp12'] : '-';
    $dmcsp13 = isset($_POST['dmcsp13']) ? $_POST['dmcsp13'] : '-';
    $dmcsp14 = isset($_POST['dmcsp14']) ? $_POST['dmcsp14'] : '-';
    $dmcsp15 = isset($_POST['dmcsp15']) ? $_POST['dmcsp15'] : '-';

    $dmccs1 = isset($_POST['dmccs1']) ? $_POST['dmccs1'] : '-';
    $dmccs2 = isset($_POST['dmccs2']) ? $_POST['dmccs2'] : '-';
    $dmccs3 = isset($_POST['dmccs3']) ? $_POST['dmccs3'] : '-';
    $dmccs4 = isset($_POST['dmccs4']) ? $_POST['dmccs4'] : '-';
    $dmccs5 = isset($_POST['dmccs5']) ? $_POST['dmccs5'] : '-';
    $dmccs6 = isset($_POST['dmccs6']) ? $_POST['dmccs6'] : '-';
    $dmccs7 = isset($_POST['dmccs7']) ? $_POST['dmccs7'] : '-';
    $dmccs8 = isset($_POST['dmccs8']) ? $_POST['dmccs8'] : '-';
    $dmccs9 = isset($_POST['dmccs9']) ? $_POST['dmccs9'] : '-';
    $dmccs10 = isset($_POST['dmccs10']) ? $_POST['dmccs10'] : '-';


    $tottp1 = isset($_POST['tottp1']) ? $_POST['tottp1'] : '-';
    $tottp2 = isset($_POST['tottp2']) ? $_POST['tottp2'] : '-';
    $tottp3 = isset($_POST['tottp3']) ? $_POST['tottp3'] : '-';

    $totsp1 = isset($_POST['totsp1']) ? $_POST['totsp1'] : '-';
    $totsp2 = isset($_POST['totsp2']) ? $_POST['totsp2'] : '-';
    $totsp3 = isset($_POST['totsp3']) ? $_POST['totsp3'] : '-';
    $totsp4 = isset($_POST['totsp4']) ? $_POST['totsp4'] : '-';
    $totsp5 = isset($_POST['totsp5']) ? $_POST['totsp5'] : '-';
    $totsp6 = isset($_POST['totsp6']) ? $_POST['totsp6'] : '-';
    $totsp7 = isset($_POST['totsp7']) ? $_POST['totsp7'] : '-';
    $totsp8 = isset($_POST['totsp8']) ? $_POST['totsp8'] : '-';
    $totsp9 = isset($_POST['totsp9']) ? $_POST['totsp9'] : '-';
    $totsp10 = isset($_POST['totsp10']) ? $_POST['totsp10'] : '-';
    $totsp11 = isset($_POST['totsp11']) ? $_POST['totsp11'] : '-';
    $totsp12 = isset($_POST['totsp12']) ? $_POST['totsp12'] : '-';
    $totsp13 = isset($_POST['totsp13']) ? $_POST['totsp13'] : '-';
    $totsp14 = isset($_POST['totsp14']) ? $_POST['totsp14'] : '-';
    $totsp15 = isset($_POST['totsp15']) ? $_POST['totsp15'] : '-';

    $totcs1 = isset($_POST['totcs1']) ? $_POST['totcs1'] : '-';
    $totcs2 = isset($_POST['totcs2']) ? $_POST['totcs2'] : '-';
    $totcs3 = isset($_POST['totcs3']) ? $_POST['totcs3'] : '-';
    $totcs4 = isset($_POST['totcs4']) ? $_POST['totcs4'] : '-';
    $totcs5 = isset($_POST['totcs5']) ? $_POST['totcs5'] : '-';
    $totcs6 = isset($_POST['totcs6']) ? $_POST['totcs6'] : '-';
    $totcs7 = isset($_POST['totcs7']) ? $_POST['totcs7'] : '-';
    $totcs8 = isset($_POST['totcs8']) ? $_POST['totcs8'] : '-';
    $totcs9 = isset($_POST['totcs9']) ? $_POST['totcs9'] : '-';
    $totcs10 = isset($_POST['totcs10']) ? $_POST['totcs10'] : '-';

    $query = "INSERT INTO result (Sunday,Wednesday,Saturday,Tuesday,TodayDate,MagnumFirstPrize,MagnumSecondPrize,MagnumThirdPrize,MagnumFirstSP,MagnumSecondSP,MagnumThirdSP,MagnumForthSP,MagnumFifthSP,MagnumSixthSP,MagnumSeventhSP,MagnumEighthSP,MagnumNinethSP,MagnumTenthSP,MagnumEleventhSP,MagnumTwelveSP,MagnumThirteenSP,MagnumFourteenSP,MagnumFifteenSP,MagnumFirstConsolation,MagnumSecondConsolation,MagnumThirdConsolation,MagnumForthConsolation,MagnumFifthConsolation,MagnumSixthConsolation,MagnumSeventhConsolation,MagnumEighthConsolation,MagnumNinethConsolation,MagnumTenthConsolation,DaMaCaiFirstPrize,DaMaCaiSecondPrize,DaMaCaiThirdPrize,DaMaCaiFirstSP,DaMaCaiSecondSP,DaMaCaiThirdSP,DaMaCaiForthSP,DaMaCaiFifthSP,DaMaCaiSixthSP,DaMaCaiSeventhSP,DaMaCaiEighthSP,DaMaCaiNinethSP,DaMaCaiTenthSP,DaMaCaiEleventhSP,DaMaCaiTwelveSP,DaMaCaiThirteenSP,DaMaCaiFourteenSP,DaMaCaiFifteenSP,DaMaCaiFirstConsolation,DaMaCaiSecondConsolation,DaMaCaiThirdConsolation,DaMaCaiForthConsolation,DaMaCaiFifthConsolation,DaMaCaiSixthConsolation,DaMaCaiSeventhConsolation,DaMaCaiEighthConsolation,DaMaCaiNinethConsolation,DaMaCaiTenthConsolation,TotoFirstPrize,TotoSecondPrize,TotoThirdPrize,TotoFirstSP,TotoSecondSP,TotoThirdSP,TotoForthSP,TotoFifthSP,TotoSixthSP,TotoSeventhSP,TotoEighthSP,TotoNinethSP,TotoTenthSP,TotoEleventhSP,TotoTwelveSP,TotoThirteenSP,TotoFourteenSP,TotoFifteenSP,TotoFirstConsolation,TotoSecondConsolation,TotoThirdConsolation,TotoForthConsolation,TotoFifthConsolation,TotoSixthConsolation,TotoSeventhConsolation,TotoEighthConsolation,TotoNinethConsolation,TotoTenthConsolation) VALUES('$sun','$wed','$sat','$tue',now(),'$magtp1','$magtp2','$magtp3','$magsp1','$magsp2','$magsp3','$magsp4','$magsp5','$magsp6','$magsp7','$magsp8','$magsp9','$magsp10','$magsp11','$magsp12','$magsp13','$magsp14','$magsp15','$magcs1','$magcs2','$magcs3','$magcs4','$magcs5','$magcs6','$magcs7','$magcs8','$magcs9','$magcs10','$dmctp1','$dmctp2','$dmctp3','$dmcsp1','$dmcsp2','$dmcsp3','$dmcsp4','$dmcsp5','$dmcsp6','$dmcsp7','$dmcsp8','$dmcsp9','$dmcsp10','$dmcsp11','$dmcsp12','$dmcsp13','$dmcsp14','$dmcsp15','$dmccs1','$dmccs2','$dmccs3','$dmccs4','$dmccs5','$dmccs6','$dmccs7','$dmccs8','$dmccs9','$dmccs10','$tottp1','$tottp2','$tottp3','$totsp1','$totsp2','$totsp3','$totsp4','$totsp5','$totsp6','$totsp7','$totsp8','$totsp9','$totsp10','$totsp11','$totsp12','$totsp13','$totsp14','$totsp15','$totcs1','$totcs2','$totcs3','$totcs4','$totcs5','$totcs6','$totcs7','$totcs8','$totcs9','$totcs10')";

    if (mysqli_query($conn,$query)) {
      echo '<script type="text/javascript">alert("Updated!");</script>'; 
      }
      else
      {
         echo 'Error: ', mysqli_error($conn);
      }
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
<title>Submit Result</title>
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

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
  border-style: groove;
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
        <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">欢迎, 
          <?php
          if(isset($_SESSION['adminlog'])) {
            echo $_SESSION['adminlog'];
          } else {
            header('Location: http://localhost/wordpress/admin-enter-result/');
          }
          ?>
         <img src="<?php bloginfo('template_directory');?>/img/default-picture.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">
</b> </a>
          <ul class="dropdown-menu dropdown-user animated flipInY">
            <li><a href="http://localhost/wordpress/admin-logout/"><i class="fa fa-power-off"></i> Logout</a></li>
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
        <li> <a href= http://localhost/wordpress/admin-enter-result/" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Submit Result<span class="fa arrow"></span> </span></a>
        </li>
<li> <a href="http://localhost/wordpress/admin-4d-results/" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">4D Result<span class="fa arrow"></span> </span></a>
        </li>
        <li><a href="#" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Profile<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li><a href="http://localhost/wordpress/admin-user-profile/">User Profile</a></li>
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

<?php
if ($today > $wednesday && $today <= $saturday) {
$date1 = 'sat';
$date2 = 'sun';
$date3 = 'wed';

$week1 = '星期六';
$week2 = '星期日';
$week3 = '星期三';

$dispdate1 = $satdate;
$dispdate2 = $sundate;
$dispdate3 = $weddate;
} elseif ($today < $saturday && $today <= $sunday) {
$date1 = 'sun';
$date2 = 'wed';
$date3 = 'sat';

$week1 = '星期日';
$week2 = '星期三';
$week3 = '星期六';

$dispdate1 = $sundate;
$dispdate2 = $weddate;
$dispdate3 = $satdate;
} elseif ($today > $sunday && $today <= $wednesday) {
$date1 = 'wed';
$date2 = 'sat';
$date3 = 'sun';

$week1 = '星期三';
$week2 = '星期六';
$week3 = '星期日';

$dispdate1 = $weddate;
$dispdate2 = $satdate;
$dispdate3 = $sundate;
}
?>
<div id="page-wrapper">
  <div class="container-fluid">
		<div class="row bg-title">
        	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          	<h4 class="page-title">Submit Result</h4>
        	</div>
		</div>
		<form action="" method="post">
		<div class="row">
		  <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
				<center><h4>Please select a date before submit.</h4></center>	
				 <div class="row row-in">
            <div class="col-lg-3 col-sm-6 row-in-br">
				 		  <div class="col-in row">
								<input type="checkbox" value="<?php echo $dispdate1 ?>" id="<?php echo $date1 ?>" name="<?php echo $date1 ?>">&nbsp;<?php echo $week1 ?>&nbsp;<?php echo "($dispdate1)" ?>
						  </div>
					  </div>
            <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
				 		 <div class="col-in row">
								<input type="checkbox" value="<?php echo $dispdate2 ?>" id="<?php echo $date2 ?>" name="<?php echo $date2 ?>">&nbsp;<?php echo $week2 ?>&nbsp;<?php echo "($dispdate2)" ?>
						 </div>
					   </div>
             <div class="col-lg-3 col-sm-6 row-in-br">
				 		   <div class="col-in row">
								<input type="checkbox" value="<?php echo $dispdate3 ?>" id="<?php echo $date3 ?>" name="<?php echo $date3 ?>">&nbsp;<?php echo $week3 ?>&nbsp;<?php echo "($dispdate3)" ?>
						   </div>
					   </div>
             <div class="col-lg-3 col-sm-6 row-in-br">
				 		   <div class="col-in row">
								<input type="checkbox" value="<?php echo $spd ?>" id="tue" name="tue">&nbsp;星期二&nbsp;<b>特别期</b>&nbsp;<?php echo "($spd)" ?></h5>
						   </div>
					 </div>
				</div><!--div class row row in-->

			</div><!--white box-->
		</div>	
  </div><!--row-->

  <div class="row">
        <div class="col-md-4 col-xs-12 col-sm-6">
          <div class="white-box">
            <table class="ex1">
<th bgcolor="yellow" style="color:black; font-size: 20px; text-align:center;"><img align="left" height="40px" src="http://localhost/wordpress/wp-content/uploads/2017/05/4dresultm-e1495971879449.gif"><p>Magnum/万能</p></th>
<tr>
<th style="font-size:20px;">1st Prize 首獎<input class="tp1num" type="text" id="magtp1" name="magtp1" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:20px;">2nd Prize 二獎<input class="tp2num" type="text" id="magtp2" name="magtp2" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:20px;">3rd Prize 三獎<input class="tp3num" type="text" id="magtp3" name="magtp3" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:16px; text-align:center; background-color: #cecece">Special 特别奖</th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" id="magsp1" name="magsp1" maxlength="4">
                <input class="spnum" type="text" id="magsp2" name="magsp2" maxlength="4">
                <input class="spnum" type="text" id="magsp3" name="magsp3" maxlength="4">
                <input class="spnum" type="text" id="magsp4" name="magsp4" maxlength="4">
                <input class="spnum" type="text" id="magsp5" name="magsp5" maxlength="4"></th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" id="magsp6" name="magsp6" maxlength="4">
                <input class="spnum" type="text" id="magsp7" name="magsp7" maxlength="4">
                <input class="spnum" type="text" id="magsp8" name="magsp8" maxlength="4">
                <input class="spnum" type="text" id="magsp9" name="magsp9" maxlength="4">
                <input class="spnum" type="text" id="magsp10" name="magsp10" maxlength="4"></th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" id="magsp11" name="magsp11" maxlength="4">
                <input class="spnum" type="text" id="magsp12" name="magsp12" maxlength="4">
                <input class="spnum" type="text" id="magsp13" name="magsp13" maxlength="4">
                <input class="spnum" type="text" id="magsp14" name="magsp14" maxlength="4">
                <input class="spnum" type="text" id="magsp15" name="magsp15" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:16px; text-align:center; background-color: #cecece">Consolation 安慰奖</th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" id="magcs1" name="magcs1" maxlength="4">
                <input class="spnum" type="text" id="magcs2" name="magcs2" maxlength="4">
                <input class="spnum" type="text" id="magcs3" name="magcs3" maxlength="4">
                <input class="spnum" type="text" id="magcs4" name="magcs4" maxlength="4">
                <input class="spnum" type="text" id="magcs5" name="magcs5" maxlength="4"></th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" id="magcs6" name="magcs6" maxlength="4">
                <input class="spnum" type="text" id="magcs7" name="magcs7" maxlength="4">
                <input class="spnum" type="text" id="magcs8" name="magcs8" maxlength="4">
                <input class="spnum" type="text" id="magcs9" name="magcs9" maxlength="4">
                <input class="spnum" type="text" id="magcs10" name="magcs10" maxlength="4"></th>
</tr>
</table>
          </div>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-6">
          <div class="white-box">
            <table class="ex1">
<th bgcolor="blue" style="color:white; font-size: 20px; text-align:center;"><img align="left" height="40px" src="http://localhost/wordpress/wp-content/uploads/2017/05/4dresultd-e1495971890539.gif"><p>Damacai/大马彩</p></th>
<tr>
<th style="font-size:20px;">1st Prize 首獎<input class="tp1num" type="text" id="dmctp1" name="dmctp1" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:20px;">2nd Prize 二獎<input class="tp2num" type="text" id="dmctp2" name="dmctp2" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:20px;">3rd Prize 三獎<input class="tp3num" type="text" id="dmctp3" name="dmctp3" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:16px; text-align:center; background-color: #cecece">Special 特别奖</th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" id="dmcsp1" name="dmcsp1" maxlength="4">
                <input class="spnum" type="text" id="dmcsp2" name="dmcsp2" maxlength="4">
                <input class="spnum" type="text" id="dmcsp3" name="dmcsp3" maxlength="4">
                <input class="spnum" type="text" id="dmcsp4" name="dmcsp4" maxlength="4">
                <input class="spnum" type="text" id="dmcsp5" name="dmcsp5" maxlength="4"></th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" id="dmcsp6" name="dmcsp6" maxlength="4">
                <input class="spnum" type="text" id="dmcsp7" name="dmcsp7" maxlength="4">
                <input class="spnum" type="text" id="dmcsp8" name="dmcsp8" maxlength="4">
                <input class="spnum" type="text" id="dmcsp9" name="dmcsp9" maxlength="4">
                <input class="spnum" type="text" id="dmcsp10" name="dmcsp10" maxlength="4"></th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" id="dmcsp11" name="dmcsp11" maxlength="4">
                <input class="spnum" type="text" id="dmcsp12" name="dmcsp12" maxlength="4">
                <input class="spnum" type="text" id="dmcsp13" name="dmcsp13" maxlength="4">
                <input class="spnum" type="text" id="dmcsp14" name="dmcsp14" maxlength="4">
                <input class="spnum" type="text" id="dmcsp15" name="dmcsp15" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:16px; text-align:center; background-color: #cecece">Consolation 安慰奖</th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" id="dmccs1" name="dmccs1" maxlength="4">
                <input class="spnum" type="text" id="dmccs2" name="dmccs2" maxlength="4">
                <input class="spnum" type="text" id="dmccs3" name="dmccs3" maxlength="4">
                <input class="spnum" type="text" id="dmccs4" name="dmccs4" maxlength="4">
                <input class="spnum" type="text" id="dmccs5" name="dmccs5" maxlength="4"></th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" id="dmccs6" name="dmccs6" maxlength="4">
                <input class="spnum" type="text" id="dmccs7" name="dmccs7" maxlength="4">
                <input class="spnum" type="text" id="dmccs8" name="dmccs8" maxlength="4">
                <input class="spnum" type="text" id="dmccs9" name="dmccs9" maxlength="4">
                <input class="spnum" type="text" id="dmccs10" name="dmccs10" maxlength="4"></th>
</tr>
</table>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12">
          <div class="white-box">
            <table class="ex1">
<th bgcolor="red" style="color:white; font-size: 20px; text-align:center;"><img align="left" height="40px" src="http://localhost/wordpress//wp-content/uploads/2017/05/4dresultt-e1495971870952.gif"><p>Sports Toto/多多</p></th>
<tr>
<th style="font-size:20px;">1st Prize 首獎<input class="tp1num" type="text" id="tottp1" name="tottp1" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:20px;">2nd Prize 二獎<input class="tp2num" type="text" id="tottp2" name="tottp2" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:20px;">3rd Prize 三獎<input class="tp3num" type="text" id="tottp3" name="tottp3" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:16px; text-align:center; background-color: #cecece">Special 特别奖</th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" id="totsp1" name="totsp1" maxlength="4">
                <input class="spnum" type="text" id="totsp2" name="totsp2" maxlength="4">
                <input class="spnum" type="text" id="totsp3" name="totsp3" maxlength="4">
                <input class="spnum" type="text" id="totsp4" name="totsp4" maxlength="4">
                <input class="spnum" type="text" id="totsp5" name="totsp5" maxlength="4"></th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" id="totsp6" name="totsp6" maxlength="4">
                <input class="spnum" type="text" id="totsp7" name="totsp7" maxlength="4">
                <input class="spnum" type="text" id="totsp8" name="totsp8" maxlength="4">
                <input class="spnum" type="text" id="totsp9" name="totsp9" maxlength="4">
                <input class="spnum" type="text" id="totsp10" name="totsp10" maxlength="4"></th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" type="text" id="totsp11" name="totsp11" maxlength="4">
                <input class="spnum" type="text" id="totsp12" name="totsp12" maxlength="4">
                <input class="spnum" type="text" id="totsp13" name="totsp13" maxlength="4">
                <input class="spnum" type="text" id="totsp14" name="totsp14" maxlength="4">
                <input class="spnum" type="text" id="totsp15" name="totsp15" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:16px; text-align:center; background-color: #cecece">Consolation 安慰奖</th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" id="totcs1" type="text" name="totcs1" maxlength="4">
                <input class="spnum" type="text" id="totcs2" name="totcs2" maxlength="4">
                <input class="spnum" type="text" id="totcs3" name="totcs3" maxlength="4">
                <input class="spnum" type="text" id="totcs4" name="totcs4" maxlength="4">
                <input class="spnum" type="text" id="totcs5" name="totcs5" maxlength="4"></th>
</tr>

<tr>
  <th style="font-size:20px;"><input class="spnum" id="totcs6" type="text" name="totcs6" maxlength="4">
                <input class="spnum" type="text" id="totcs7" name="totcs7" maxlength="4">
                <input class="spnum" type="text" id="totcs8" name="totcs8" maxlength="4">
                <input class="spnum" type="text" id="totcs9" name="totcs9" maxlength="4">
                <input class="spnum" type="text" id="totcs10" name="totcs10" maxlength="4"></th>
</tr>
</table>
          </div>
        </div>
      </div>

<div class="row">
<center><input type="submit" name='button-submit' id="button-submit" value="Submit" class="login_button" /></center>
</div>
  </form>
  </div>
  </div>
   <footer class="footer text-center"> 2017 &copy; ltttry8899.com </footer>