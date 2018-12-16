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
    <li><a href="https://www.ltttry8899.com/admincheckuser/" style="color: #ffffff">Client Profile</a></li>
    <li><a href="https://www.ltttry8899.com/rgtusr/" style="color: #ffffff">Client Registration</a></li>
    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="" style="color: #ffffff">Check User Bet
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
    <li><a href="https://www.ltttry8899.com/magusrbet/">Magnum</a></li>
    <li><a href="https://www.ltttry8899.com/dmcusrbet/">Damacai</a></li>
    <li><a href="https://www.ltttry8899.com/totusrbet/">Toto</a></li>
    </ul>
    <li><a href="https://www.ltttry8899.com/dealerprof/" style="color: #ffffff">Dealer Profile</a></li>
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
	border-spacing: 20px;
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
	echo "尽情期待";
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

<center>
<table class="ex1">
<form action="https://www.ltttry8899.com/clientwinlist/" method="post">

<h5><input type="checkbox" name="<?php echo $date1 ?>">&nbsp;<?php echo $week1 ?>&nbsp;<?php echo "($dispdate1)" ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="checkbox" name="<?php echo $date2 ?>">&nbsp;<?php echo $week2 ?>&nbsp;<?php echo "($dispdate2)" ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="checkbox" name="<?php echo $date3 ?>">&nbsp;<?php echo $week3 ?>&nbsp;<?php echo "($dispdate3)" ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="checkbox" name="tue[]">&nbsp;星期二&nbsp;<b>特别期</b>&nbsp;<?php echo "($spd)" ?></h5>

<th bgcolor="yellow" style="color:black; font-size: 20px; text-align:center;"><img align="left" height="40px" src="https://www.ltttry8899.com/wp-content/uploads/2017/05/4dresultm-e1495971879449.gif"><p>Magnum/万能</p></th>
<th bgcolor="blue" style="color:white; font-size: 20px; text-align:center;"><img align="left" height="40px" src="https://www.ltttry8899.com/wp-content/uploads/2017/05/4dresultd-e1495971890539.gif"><p>Damacai/大马彩</p></th>
<th bgcolor="red" style="color:white; font-size: 20px; text-align:center;"><img align="left" height="40px" src="https://www.ltttry8899.com//wp-content/uploads/2017/05/4dresultt-e1495971870952.gif"><p>Sports Toto/多多</p></th>


<tr>
	<th style="font-size:20px;">1st Prize 首獎<input class="tp1num" type="text" name="magtp1" maxlength="4"></th>
	<th style="font-size:20px;">1st Prize 首獎<input class="tp1num" type="text" name="dmctp1" maxlength="4"></th>
	<th style="font-size:20px;">1st Prize 首獎<input class="tp1num" type="text" name="tottp1" maxlength="4"></th>
</tr>

<tr>
	<th style="font-size:20px;">2nd Prize 二獎<input class="tp2num" type="text" name="magtp2" maxlength="4"></th>
	<th style="font-size:20px;">2nd Prize 二獎<input class="tp2num" type="text" name="dmctp2" maxlength="4"></th>
	<th style="font-size:20px;">2nd Prize 二獎<input class="tp2num" type="text" name="tottp2" maxlength="4"></th>
</tr>

<tr>
	<th style="font-size:20px;">3rd Prize 三獎<input class="tp3num" type="text" name="magtp3" maxlength="4"></th>
	<th style="font-size:20px;">3rd Prize 三獎<input class="tp3num" type="text" name="dmctp3" maxlength="4"></th>
	<th style="font-size:20px;">3rd Prize 三獎<input class="tp3num" type="text" name="tottp3" maxlength="4"></th>
</tr>

<tr>
	<th style="font-size:16px; text-align:center; background-color: #cecece">Special 特别奖</th>
	<th style="font-size:16px; text-align:center; background-color: #cecece">Special 特别奖</th>
	<th style="font-size:16px; text-align:center; background-color: #cecece">Special 特别奖</th>
</div>
</tr>

<!--Magnum sp 1 row-->
<tr>
	<th style="font-size:20px;"><input class="spnum" type="text" name="magsp1" maxlength="4">
								<input class="spnum" type="text" name="magsp2" maxlength="4">
								<input class="spnum" type="text" name="magsp3" maxlength="4">
								<input class="spnum" type="text" name="magsp4" maxlength="4">
								<input class="spnum" type="text" name="magsp5" maxlength="4"></th>
<!--Damacai sp 1 row-->
	<th style="font-size:20px;"><input class="spnum" type="text" name="dmcsp1" maxlength="4">
								<input class="spnum" type="text" name="dmcsp2" maxlength="4">
								<input class="spnum" type="text" name="dmcsp3" maxlength="4">
								<input class="spnum" type="text" name="dmcsp4" maxlength="4">
								<input class="spnum" type="text" name="dmcsp5" maxlength="4"></th>
<!--Toto sp 1 row-->
	<th style="font-size:20px;"><input class="spnum" type="text" name="totsp1" maxlength="4">
								<input class="spnum" type="text" name="totsp2" maxlength="4">
								<input class="spnum" type="text" name="totsp3" maxlength="4">
								<input class="spnum" type="text" name="totsp4" maxlength="4">
								<input class="spnum" type="text" name="totsp5" maxlength="4"></th>
</tr>

<!--Magnum sp 2 row-->
<tr>
	<th style="font-size:20px;"><input class="spnum" type="text" name="magsp6" maxlength="4">
								<input class="spnum" type="text" name="magsp7" maxlength="4">
								<input class="spnum" type="text" name="magsp8" maxlength="4">
								<input class="spnum" type="text" name="magsp9" maxlength="4">
								<input class="spnum" type="text" name="magsp10" maxlength="4"></th>
<!--Damacai sp 2 row-->
	<th style="font-size:20px;"><input class="spnum" type="text" name="dmcsp6" maxlength="4">
								<input class="spnum" type="text" name="dmcsp7" maxlength="4">
								<input class="spnum" type="text" name="dmcsp8" maxlength="4">
								<input class="spnum" type="text" name="dmcsp9" maxlength="4">
								<input class="spnum" type="text" name="dmcsp10" maxlength="4"></th>
<!--Toto sp 2 row-->
	<th style="font-size:20px;"><input class="spnum" type="text" name="totsp6" maxlength="4">
								<input class="spnum" type="text" name="totsp7" maxlength="4">
								<input class="spnum" type="text" name="totsp8" maxlength="4">
								<input class="spnum" type="text" name="totsp9" maxlength="4">
								<input class="spnum" type="text" name="totsp10" maxlength="4"></th>
</tr>

<!--Magnum sp 3 row-->
<tr>
	<th style="font-size:20px;"><input class="spnum" type="text" name="magsp11" maxlength="4">
								<input class="spnum" type="text" name="magsp12" maxlength="4">
								<input class="spnum" type="text" name="magsp13" maxlength="4">
								<input class="spnum" type="text" name="magsp14" maxlength="4">
								<input class="spnum" type="text" name="magsp15" maxlength="4"></th>
<!--Damacai sp 3 row-->
	<th style="font-size:20px;"><input class="spnum" type="text" name="dmcsp11" maxlength="4">
								<input class="spnum" type="text" name="dmcsp12" maxlength="4">
								<input class="spnum" type="text" name="dmcsp13" maxlength="4">
								<input class="spnum" type="text" name="dmcsp14" maxlength="4">
								<input class="spnum" type="text" name="dmcsp15" maxlength="4"></th>
<!--Toto sp 3 row-->
	<th style="font-size:20px;"><input class="spnum" type="text" name="totsp11" maxlength="4">
								<input class="spnum" type="text" name="totsp12" maxlength="4">
								<input class="spnum" type="text" name="totsp13" maxlength="4">
								<input class="spnum" type="text" name="totsp14" maxlength="4">
								<input class="spnum" type="text" name="totsp15" maxlength="4"></th>
</tr>

<tr>
	<th style="font-size:16px; text-align:center; background-color: #cecece">Consolation 安慰奖</th>
	<th style="font-size:16px; text-align:center; background-color: #cecece">Consolation 安慰奖</th>
	<th style="font-size:16px; text-align:center; background-color: #cecece">Consolation 安慰奖</th>
</tr>

<!--Magnum cs 1 row-->
<tr>
	<th style="font-size:20px;"><input class="spnum" type="text" name="magcs1" maxlength="4">
								<input class="spnum" type="text" name="magcs2" maxlength="4">
								<input class="spnum" type="text" name="magcs3" maxlength="4">
								<input class="spnum" type="text" name="magcs4" maxlength="4">
								<input class="spnum" type="text" name="magcs5" maxlength="4"></th>
<!--Damacai cs 1 row-->
	<th style="font-size:20px;"><input class="spnum" type="text" name="dmccs1" maxlength="4">
								<input class="spnum" type="text" name="dmccs2" maxlength="4">
								<input class="spnum" type="text" name="dmccs3" maxlength="4">
								<input class="spnum" type="text" name="dmccs4" maxlength="4">
								<input class="spnum" type="text" name="dmccs5" maxlength="4"></th>
<!--Toto cs 1 row-->
	<th style="font-size:20px;"><input class="spnum" type="text" name="totcs1" maxlength="4">
								<input class="spnum" type="text" name="totcs2" maxlength="4">
								<input class="spnum" type="text" name="totcs3" maxlength="4">
								<input class="spnum" type="text" name="totcs4" maxlength="4">
								<input class="spnum" type="text" name="totcs5" maxlength="4"></th>
</tr>

<!--Magnum cs 2 row-->
<tr>
	<th style="font-size:20px;"><input class="spnum" type="text" name="magcs6" maxlength="4">
								<input class="spnum" type="text" name="magcs7" maxlength="4">
								<input class="spnum" type="text" name="magcs8" maxlength="4">
								<input class="spnum" type="text" name="magcs9" maxlength="4">
								<input class="spnum" type="text" name="magcs10" maxlength="4"></th>
<!--Damacai cs 2 row-->
	<th style="font-size:20px;"><input class="spnum" type="text" name="dmccs6" maxlength="4">
								<input class="spnum" type="text" name="dmccs7" maxlength="4">
								<input class="spnum" type="text" name="dmccs8" maxlength="4">
								<input class="spnum" type="text" name="dmccs9" maxlength="4">
								<input class="spnum" type="text" name="dmccs10" maxlength="4"></th>
<!--Toto cs 2 row-->
	<th style="font-size:20px;"><input class="spnum" type="text" name="totcs6" maxlength="4">
								<input class="spnum" type="text" name="totcs7" maxlength="4">
								<input class="spnum" type="text" name="totcs8" maxlength="4">
								<input class="spnum" type="text" name="totcs9" maxlength="4">
								<input class="spnum" type="text" name="totcs10" maxlength="4"></th>
</tr>

<input type="submit" name='submit' id="btn" value="Update" class="login_button" />

</form>
</table>
</center>
</body>

<footer>
</footer>

</html>