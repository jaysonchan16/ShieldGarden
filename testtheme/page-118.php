<!DOCTYPE html>
<html lang="en" class="no-js">

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





	<head>
	<link rel="shortcut icon" href="https://ltttry8899.com/wp-content/uploads/2017/05/smllogo-e1495965045838.png" type="image/png">
    <div class="tool">
    <div class="main">
    <ul>
    欢迎, &nbsp;
    <?php
    session_start();
    if(isset($_SESSION['adminlog'])) {
    	echo $_SESSION['adminlog'];
    } else {
    	header('Location: https://www.ltttry8899.com/adltrmin8899/');
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
    </div>
    </div>



  <title>Submit Result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        
 		
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="https://www.ltttry8899.com/adkeyresult/" style="color: #ffffff"><img src="https://ltttry8899.com/wp-content/uploads/2017/05/smllogo-e1495965045838.png" width="40" height="40" style="margin-top:-10px"/></a>
    </div>
    <ul class="nav navbar-nav">
    <li><a href="https://www.ltttry8899.com/adkeyresult/" style="color: #ffffff">Submit result</a></li>
    <li><a href="https://www.ltttry8899.com/4dresultad/" style="color: #ffffff">4D Result</a></li>

    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="" style="color: #ffffff">Profile
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
    <li><a href="https://www.ltttry8899.com/admincheckuser/">User Profile</a></li>
    <li><a href="https://www.ltttry8899.com/dealerprof/">Dealer Profile</a></li>
    </ul>

    <li><a href="https://www.ltttry8899.com/rgtusr/" style="color: #ffffff">Registration</a></li>
    
    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="" style="color: #ffffff">Betting Report
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
    <li><a href="https://www.ltttry8899.com/5-5-admin-user-result/">Win List</a></li>
    <li><a href="https://www.ltttry8899.com/magusrbet/">Report</a></li>
    </ul>

    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="" style="color: #ffffff">Limit
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
    <li><a href="https://www.ltttry8899.com/limitebet/">Bet No. limit</a></li>
    <li><a href="https://www.ltttry8899.com/limitchagnes/">User limit</a></li>
    <li><a href="https://www.ltttry8899.com/userpayavalim/">Payment</a></li>
    </ul>


    <li><a href="https://www.ltttry8899.com/winrate/" style="color: #ffffff">Win Rate</a></li>
    <li><a href="https://www.ltttry8899.com/adminlogout/" style="color: #ffffff"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </div>
    </nav>

	</head>








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

h1{
	margin-left: 20px;
}

h2{
	margin-left: 20px;
	color: red;
}
h4{
	color: red;
}
h5{
	margin-left: 50px;
}

input.tp1num {
    border-style: 1px solid;
    text-align: center;
    font-size: 30px;
    width: 150px;
    margin-left: 21px;
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

p{
	font-size: 20px;
	border-width: 1px;
	margin-top: 6px;
}

</style>


<?php
date_default_timezone_set("Asia/Kuala_Lumpur");

$now    = time(); // current timestamp
$today  = date("w", $now); // "w" returns the weekday (number)
$wednesday = 3; // 5th day of the week (sunday = 0)
$saturday = 6;
$sunday = 0;

$oneWeekLater = strtotime('+1 Week');

if ($today == $wednesday && date("H:i:s") >= "18:56:40" && date("H:i:s") <= "23:59:59") {
  $weddate = date('F j Y', strtotime('wednesday'));
} else {
  $weddate = date('F j Y', strtotime('wednesday'));
}

if ($today == $saturday && date("H:i:s") >= "18:56:40" && date("H:i:s") <= "23:59:59") {
  $satdate = date('F j Y', strtotime('saturday'));
} else {
  $satdate = date('F j Y', strtotime('saturday'));
}

if ($today == $sunday OR $today == 0 && (date("H:i:s") >= "18:56:40" && date("H:i:s") <= "23:59:59")) {
  $sundate = date('F j Y', strtotime('sunday'));
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

if ($curday <= $sp1) {
	$spd = "July 4 2017";
}elseif ($curday == $sp1 && ($curtime > $spdate1 && $curtime < $date1)) {
	$spd = "July 4 2017";
} elseif ($curday == $sp2 && ($curtime > $spdate2 && $curtime < $date2)) {
	$spd = "July 25 2017";
} elseif ($curday == $sp3 && ($curtime > $spdate3 && $curtime < $date3)) {
	$spd = "August 1 2017";
} elseif ($curday == $sp4 && ($curtime > $spdate4 && $curtime < $date4)) {
	$spd = "August 29 2017";
} elseif ($curday == $sp5 && ($curtime > $spdate5 && $curtime < $date5)) {
	$spd = "September 5 2017";
} elseif ($curday == $sp6 && ($curtime > $spdate6 && $curtime < $date6)) {
	$spd = "September 26 2017";
} elseif ($curday == $sp7 && ($curtime > $spdate7 && $curtime < $date7)) {
	$spd = "October 3 2017";
} elseif ($curday == $sp8 && ($curtime > $spdate8 && $curtime < $date8)) {
	$spd = "October 31 2017";
} elseif ($curday == $sp9 && ($curtime > $spdate9 && $curtime < $date9)) {
	$spd = "November 7 2017";
} elseif ($curday == $sp10 && ($curtime > $spdate10 && $curtime < $date10)) {
	$spd = "November 28 2017";
} elseif ($curday == $sp11 && ($curtime > $spdate11 && $curtime < $date11)) {
	$spd = "December 5 2017";
} elseif ($curday == $sp12 && ($curtime > $spdate12 && $curtime < $date12)) {
	$spd = "December 26 2017";
} else {}
?>

<body style="background-color:#dcdcdc;">

<?php
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
?>


<br>
<br>

<center>
<form action="https://www.ltttry8899.com/clientwinlist/" method="post">
<h4>Please select a date before submit.</h4>
<h5><input type="checkbox" name="<?php echo $date1 ?>">&nbsp;<?php echo $week1 ?>&nbsp;<?php echo "($dispdate1)" ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="checkbox" name="<?php echo $date2 ?>">&nbsp;<?php echo $week2 ?>&nbsp;<?php echo "($dispdate2)" ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="checkbox" name="<?php echo $date3 ?>">&nbsp;<?php echo $week3 ?>&nbsp;<?php echo "($dispdate3)" ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="checkbox" name="tue[]">&nbsp;星期二&nbsp;<b>特别期</b>&nbsp;<?php echo "($spd)" ?></h5>

<br>
<br>

<div style="display: inline-block;">
<table class="ex1">
<th bgcolor="yellow" style="color:black; font-size: 20px; text-align:center;"><img align="left" height="40px" src="https://www.ltttry8899.com/wp-content/uploads/2017/05/4dresultm-e1495971879449.gif"><p>Magnum/万能</p></th>
<tr>
<th style="font-size:20px;">1st Prize 首獎<input class="tp1num" type="text" name="magtp1" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:20px;">2nd Prize 二獎<input class="tp2num" type="text" name="magtp2" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:20px;">3rd Prize 三獎<input class="tp3num" type="text" name="magtp3" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:16px; text-align:center; background-color: #cecece">Special 特别奖</th>
</tr>

<tr>
	<th style="font-size:20px;"><input class="spnum" type="text" name="magsp1" maxlength="4">
								<input class="spnum" type="text" name="magsp2" maxlength="4">
								<input class="spnum" type="text" name="magsp3" maxlength="4">
								<input class="spnum" type="text" name="magsp4" maxlength="4">
								<input class="spnum" type="text" name="magsp5" maxlength="4"></th>
</tr>

<tr>
	<th style="font-size:20px;"><input class="spnum" type="text" name="magsp6" maxlength="4">
								<input class="spnum" type="text" name="magsp7" maxlength="4">
								<input class="spnum" type="text" name="magsp8" maxlength="4">
								<input class="spnum" type="text" name="magsp9" maxlength="4">
								<input class="spnum" type="text" name="magsp10" maxlength="4"></th>
</tr>

<tr>
	<th style="font-size:20px;"><input class="spnum" type="text" name="magsp11" maxlength="4">
								<input class="spnum" type="text" name="magsp12" maxlength="4">
								<input class="spnum" type="text" name="magsp13" maxlength="4">
								<input class="spnum" type="text" name="magsp14" maxlength="4">
								<input class="spnum" type="text" name="magsp15" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:16px; text-align:center; background-color: #cecece">Consolation 安慰奖</th>
</tr>

<tr>
	<th style="font-size:20px;"><input class="spnum" type="text" name="magcs1" maxlength="4">
								<input class="spnum" type="text" name="magcs2" maxlength="4">
								<input class="spnum" type="text" name="magcs3" maxlength="4">
								<input class="spnum" type="text" name="magcs4" maxlength="4">
								<input class="spnum" type="text" name="magcs5" maxlength="4"></th>
</tr>

<tr>
	<th style="font-size:20px;"><input class="spnum" type="text" name="magcs6" maxlength="4">
								<input class="spnum" type="text" name="magcs7" maxlength="4">
								<input class="spnum" type="text" name="magcs8" maxlength="4">
								<input class="spnum" type="text" name="magcs9" maxlength="4">
								<input class="spnum" type="text" name="magcs10" maxlength="4"></th>
</tr>
</table>
</div>













<div style="display: inline-block;">
<table class="ex1">
<th bgcolor="blue" style="color:white; font-size: 20px; text-align:center;"><img align="left" height="40px" src="https://www.ltttry8899.com/wp-content/uploads/2017/05/4dresultd-e1495971890539.gif"><p>Damacai/大马彩</p></th>
<tr>
<th style="font-size:20px;">1st Prize 首獎<input class="tp1num" type="text" name="dmctp1" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:20px;">2nd Prize 二獎<input class="tp2num" type="text" name="dmctp2" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:20px;">3rd Prize 三獎<input class="tp3num" type="text" name="dmctp3" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:16px; text-align:center; background-color: #cecece">Special 特别奖</th>
</tr>

<tr>
	<th style="font-size:20px;"><input class="spnum" type="text" name="dmcsp1" maxlength="4">
								<input class="spnum" type="text" name="dmcsp2" maxlength="4">
								<input class="spnum" type="text" name="dmcsp3" maxlength="4">
								<input class="spnum" type="text" name="dmcsp4" maxlength="4">
								<input class="spnum" type="text" name="dmcsp5" maxlength="4"></th>
</tr>

<tr>
	<th style="font-size:20px;"><input class="spnum" type="text" name="dmcsp6" maxlength="4">
								<input class="spnum" type="text" name="dmcsp7" maxlength="4">
								<input class="spnum" type="text" name="dmcsp8" maxlength="4">
								<input class="spnum" type="text" name="dmcsp9" maxlength="4">
								<input class="spnum" type="text" name="dmcsp10" maxlength="4"></th>
</tr>

<tr>
	<th style="font-size:20px;"><input class="spnum" type="text" name="dmcsp11" maxlength="4">
								<input class="spnum" type="text" name="dmcsp12" maxlength="4">
								<input class="spnum" type="text" name="dmcsp13" maxlength="4">
								<input class="spnum" type="text" name="dmcsp14" maxlength="4">
								<input class="spnum" type="text" name="dmcsp15" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:16px; text-align:center; background-color: #cecece">Consolation 安慰奖</th>
</tr>

<tr>
	<th style="font-size:20px;"><input class="spnum" type="text" name="dmccs1" maxlength="4">
								<input class="spnum" type="text" name="dmccs2" maxlength="4">
								<input class="spnum" type="text" name="dmccs3" maxlength="4">
								<input class="spnum" type="text" name="dmccs4" maxlength="4">
								<input class="spnum" type="text" name="dmccs5" maxlength="4"></th>
</tr>

<tr>
	<th style="font-size:20px;"><input class="spnum" type="text" name="dmccs6" maxlength="4">
								<input class="spnum" type="text" name="dmccs7" maxlength="4">
								<input class="spnum" type="text" name="dmccs8" maxlength="4">
								<input class="spnum" type="text" name="dmccs9" maxlength="4">
								<input class="spnum" type="text" name="dmccs10" maxlength="4"></th>
</tr>
</table>
</div>









<div style="display: inline-block;">
<table class="ex1">
<th bgcolor="red" style="color:white; font-size: 20px; text-align:center;"><img align="left" height="40px" src="https://www.ltttry8899.com//wp-content/uploads/2017/05/4dresultt-e1495971870952.gif"><p>Sports Toto/多多</p></th>
<tr>
<th style="font-size:20px;">1st Prize 首獎<input class="tp1num" type="text" name="tottp1" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:20px;">2nd Prize 二獎<input class="tp2num" type="text" name="tottp2" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:20px;">3rd Prize 三獎<input class="tp3num" type="text" name="tottp3" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:16px; text-align:center; background-color: #cecece">Special 特别奖</th>
</tr>

<tr>
	<th style="font-size:20px;"><input class="spnum" type="text" name="totsp1" maxlength="4">
								<input class="spnum" type="text" name="totsp2" maxlength="4">
								<input class="spnum" type="text" name="totsp3" maxlength="4">
								<input class="spnum" type="text" name="totsp4" maxlength="4">
								<input class="spnum" type="text" name="totsp5" maxlength="4"></th>
</tr>

<tr>
	<th style="font-size:20px;"><input class="spnum" type="text" name="totsp6" maxlength="4">
								<input class="spnum" type="text" name="totsp7" maxlength="4">
								<input class="spnum" type="text" name="totsp8" maxlength="4">
								<input class="spnum" type="text" name="totsp9" maxlength="4">
								<input class="spnum" type="text" name="totsp10" maxlength="4"></th>
</tr>

<tr>
	<th style="font-size:20px;"><input class="spnum" type="text" name="totsp11" maxlength="4">
								<input class="spnum" type="text" name="totsp12" maxlength="4">
								<input class="spnum" type="text" name="totsp13" maxlength="4">
								<input class="spnum" type="text" name="totsp14" maxlength="4">
								<input class="spnum" type="text" name="totsp15" maxlength="4"></th>
</tr>

<tr>
<th style="font-size:16px; text-align:center; background-color: #cecece">Consolation 安慰奖</th>
</tr>

<tr>
	<th style="font-size:20px;"><input class="spnum" type="text" name="totcs1" maxlength="4">
								<input class="spnum" type="text" name="totcs2" maxlength="4">
								<input class="spnum" type="text" name="totcs3" maxlength="4">
								<input class="spnum" type="text" name="totcs4" maxlength="4">
								<input class="spnum" type="text" name="totcs5" maxlength="4"></th>
</tr>

<tr>
	<th style="font-size:20px;"><input class="spnum" type="text" name="totcs6" maxlength="4">
								<input class="spnum" type="text" name="totcs7" maxlength="4">
								<input class="spnum" type="text" name="totcs8" maxlength="4">
								<input class="spnum" type="text" name="totcs9" maxlength="4">
								<input class="spnum" type="text" name="totcs10" maxlength="4"></th>
</tr>
</table>
</div>
<br>
<br>
<input type="submit" name='submit' id="btn" value="Submit" class="login_button" />
</form>
</center>







</body>

<footer>
</footer>

</html>