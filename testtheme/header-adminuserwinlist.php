<!DOCTYPE html>  
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="<?php bloginfo('template_directory');?>/image/png" sizes="16x16" href="<?php bloginfo('template_directory');?>/plugins/images/favicon.png">
<title>User Win List</title>
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
        <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">欢迎,  <img src="<?php bloginfo('template_directory');?>/img/default-picture.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">
  <?php
    session_start();
    if(isset($_SESSION['adminlog'])) {
    	echo $_SESSION['adminlog'];
    } else {
    	header('Location: http://localhost/wordpress/adltrmin8899/');
    }
    ?></b> </a>
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
        <li> <a href="http://localhost/wordpress/admin-enter-result/" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Submit Result<span class="fa arrow"></span> </span></a>
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

date_default_timezone_set("Asia/Kuala_Lumpur");

$now    = time(); // current timestamp
$today  = date("w", $now); // "w" returns the weekday (number)
$wednesday = 3; // 5th day of the week (sunday = 0)
$saturday = 6;
$sunday = 0;

$oneWeekBefore = strtotime('-1 Week');

if ($today > $wednesday && $today <= $saturday) {
  $weddate = date('F j Y', strtotime('wednesday', $oneWeekBefore));
} else {
    $weddate =  date('F j Y', strtotime('wednesday', $oneWeekBefore));
}

if ($today > $saturday && $today <= $sunday) {
  $satdate = date('F j Y', strtotime('saturday', $oneWeekBefore));
} else {
    $satdate =  date('F j Y', strtotime('saturday', $oneWeekBefore));
}

if ($today > $sunday OR $today <= $wednesday) {
  $sundate = date('F j Y', strtotime('sunday', $oneWeekBefore));
} else {
    $sundate =  date('F j Y', strtotime('sunday', $oneWeekBefore));
}


if ($today > $wednesday && $today <= $saturday) {
  $weddate1 = date('F j Y', strtotime('wednesday'));
} else {
    $weddate1 =  date('F j Y', strtotime('wednesday'));
}

if ($today > $saturday && $today <= $sunday) {
  $satdate1 = date('F j Y', strtotime('saturday'));
} else {
    $satdate1 =  date('F j Y', strtotime('saturday'));
}

if ($today > $sunday OR $today <= $wednesday) {
  $sundate1 = date('F j Y', strtotime('sunday'));
} else {
    $sundate1 =  date('F j Y', strtotime('sunday'));
}



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
    $spd = "July 4 2017";
} elseif ($spdate1 < $curday) {
    $spd = "July 4 2017";
} elseif ($spdate2 < $curday) {
    $spd = "July 25 2017";
} elseif ($spdate3 < $curday) {
    $spd = "August 1 2017";
} elseif ($spdate4 < $curday) {
    $spd = "August 29 2017";
} elseif ($spdate5 < $curday) {
    $spd = "September 5 2017";
} elseif ($spdate6 < $curday) {
    $spd = "September 26 2017";
} elseif ($spdate7 < $curday) {
    $spd = "October 3 2017";
} elseif ($spdate8 < $curday) {
    $spd = "October 31 2017";
} elseif ($spdate9 < $curday) {
    $spd = "November 7 2017";
} elseif ($spdate10 < $curday) {
    $spd = "November 28 2017";
} elseif ($spdate11 < $curday) {
    $spd = "December 5 2017";
} elseif ($spdate12 < $curday) {
    echo "December 26 2017";
} else {}
?>

<?php
$wedbet = ($_POST["wed"]); if(empty($wedbet)){$wedbet = '';} else {$betdate = $weddate;}
$satbet = ($_POST["sat"]); if(empty($satbet)){$satbet = '';} else {$betdate = $satdate;}
$sunbet = ($_POST["sun"]); if(empty($sunbet)){$sunbet = '';} else {$betdate = $sundate;}
$tuebet = ($_POST["tue"]); if(empty($tuebet)){$tuebet = '';} else {$betdate = $spd;}


$wedbet1 = ($_POST["wed1"]); if(empty($wedbet1)){$wedbet1 = '';} else {$betdate = $weddate1;}
$satbet1 = ($_POST["sat1"]); if(empty($satbet1)){$satbet1 = '';} else {$betdate = $satdate1;}
$sunbet1 = ($_POST["sun1"]); if(empty($sunbet1)){$sunbet1 = '';} else {$betdate = $sundate1;}
$tuebet1 = ($_POST["tue1"]); if(empty($tuebet1)){$tuebet1 = '';} else {$betdate = $spd1;}

if ($today > $wednesday && $today <= $saturday) {
$date1 = 'sat[]';
$date2 = 'sun[]';
$date3 = 'wed[]';

$week1 = '星期六';
$week2 = '星期日';
$week3 = '星期三';

$dispdate1 = $satdate;
$dispdate2 = $sundate;
$dispdate3 = $weddate;
} elseif ($today < $saturday && $today <= $sunday) {
$date1 = 'sun[]';
$date2 = 'wed[]';
$date3 = 'sat[]';

$week1 = '星期日';
$week2 = '星期三';
$week3 = '星期六';

$dispdate1 = $sundate;
$dispdate2 = $weddate;
$dispdate3 = $satdate;
} elseif ($today > $sunday && $today <= $wednesday) {
$date1 = 'wed[]';
$date2 = 'sat[]';
$date3 = 'sun[]';

$week1 = '星期三';
$week2 = '星期六';
$week3 = '星期日';

$dispdate1 = $weddate;
$dispdate2 = $satdate;
$dispdate3 = $sundate;
}


if ($today > $wednesday && $today <= $saturday) {
$date10 = 'sat1[]';
$date20 = 'sun1[]';
$date30 = 'wed1[]';

$week1 = '星期六';
$week2 = '星期日';
$week3 = '星期三';

$dispdate10 = $satdate1;
$dispdate20 = $sundate1;
$dispdate30 = $weddate1;
} elseif ($today < $saturday && $today <= $sunday) {
$date10 = 'sun1[]';
$date20 = 'wed1[]';
$date30 = 'sat1[]';

$week1 = '星期日';
$week2 = '星期三';
$week3 = '星期六';

$dispdate10 = $sundate1;
$dispdate20 = $weddate1;
$dispdate30 = $satdate1;
} elseif ($today > $sunday && $today <= $wednesday) {
$date10 = 'wed1[]';
$date20 = 'sat1[]';
$date30 = 'sun1[]';

$week1 = '星期三';
$week2 = '星期六';
$week3 = '星期日';

$dispdate10 = $weddate1;
$dispdate20 = $satdate1;
$dispdate30 = $sundate1;
}

$link = mysqli_connect("localhost", "root", "", "wordpresstest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
<div id="page-wrapper">
  <div class="container-fluid">
		<div class="row bg-title">
        	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          	<h4 class="page-title">User Win List</h4>
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
								<input type="checkbox" name="<?php echo $date1 ?>">&nbsp;<?php echo $week1 ?>&nbsp;<?php echo "($dispdate1)" ?>
						  </div>
					  </div>
            <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
				 		 <div class="col-in row">
								<input type="checkbox" name="<?php echo $date2 ?>">&nbsp;<?php echo $week2 ?>&nbsp;<?php echo "($dispdate2)" ?>
						 </div>
					   </div>
             <div class="col-lg-3 col-sm-6 row-in-br">
				 		   <div class="col-in row">
								 <input type="checkbox" name="<?php echo $date3 ?>">&nbsp;<?php echo $week3 ?>&nbsp;<?php echo "($dispdate3)" ?>
						   </div>
					   </div>
             <div class="col-lg-3 col-sm-6 row-in-br">
				 		   <div class="col-in row">
								<input type="checkbox" name="tue[]">&nbsp;星期二&nbsp;<b>特别期</b>&nbsp;<?php echo "($spd)" ?>
						   </div>
					 </div>
				</div><!--div class row row in-->
        <input type="submit" class="btn btn-info waves-effect waves-light m-t-10" name="submit">
			</div><!--white box-->
		</div>	
  </div><!--row-->

<?php
if(!empty($betdate)) {
$query = "SELECT bettest.userDt, magdraw.betNo, magdraw.prize, magdraw.drawDate FROM bettest INNER JOIN magdraw ON (bettest.betNoDt=magdraw.betNo AND bettest.betType=magdraw.comp AND bettest.betDate=magdraw.drawDate) WHERE bettest.betDate='$betdate' AND bettest.betType='mag'";
$result = mysqli_query($link, $query);}
echo" <div class='row'>
        <div class='col-md-4 col-xs-12 col-sm-6'>
        <div class='white-box'>
          <div class='table-responsive'>
            <table id='example23' class='display nowrap' cellspacing='0' width='100%'>
              <thead>
              <tr>
<h2>万能 ($betdate)</h2>
    <th>*</th>
    <th>客户</th>
    <th>奖</th>
    <th>得奖号码</th>
    <th>开彩日期</th>
</tr>
</thead>
<tfoot>
    <tr>
    <th>*</th>
    <th>客户</th>
    <th>奖</th>
    <th>得奖号码</th>
    <th>开彩日期</th>
    </tr>
</tfoot>";

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tbody>
        <tr>
        <td>".$count."</td>
        <td>" . $row["userDt"] . "</td>
        <td>" . $row["prize"] . "</td>
        <td>" . $row["betNo"] . "</td>
        <td>" . $row["drawDate"] . "</td>
    </tr></tbody>";

    $count++;
}
echo "</table></div></div></div></div>";
?>

<div class="row">
<center><input type="submit" name='submit' id="btn" value="Submit" class="login_button" /></center>
</div>
  </form>
  </div>
  </div>
   <footer class="footer text-center"> 2017 &copy; ltttry8899.com </footer>