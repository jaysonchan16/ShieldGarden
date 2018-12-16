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



  <title>4D Result</title>
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
    color: blue;
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
    border-spacing: 10px;
}

p{
    font-size: 20px;
    border-width: 1px;
    margin-top: 6px;
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










<center>
<h1>成绩表</h1>
</center>




<?php
$link = mysqli_connect("localhost", "root", "", "wordpresstest");


$query = "SELECT * FROM 4dresult ORDER BY id DESC LIMIT 1";
$result = mysqli_query($link, $query);



while ($row = mysqli_fetch_assoc($result)) {

       $opdate = $row["opendate"];

       $magt1d = $row["magt1"];
       $magt2d = $row["magt2"];
       $magt3d = $row["magt3"];
       $mags1d = $row["mags1"];
       $mags2d = $row["mags2"];
       $mags3d = $row["mags3"];
       $mags4d = $row["mags4"];
       $mags5d = $row["mags5"];
       $mags6d = $row["mags6"];
       $mags7d = $row["mags7"];
       $mags8d = $row["mags8"];
       $mags9d = $row["mags9"];
       $mags10d = $row["mags10"];
       $mags11d = $row["mags11"];
       $mags12d = $row["mags12"];
       $mags13d = $row["mags13"];
       $mags14d = $row["mags14"];
       $mags15d = $row["mags15"];
       $magc1d = $row["magc1"];
       $magc2d = $row["magc2"];
       $magc3d = $row["magc3"];
       $magc4d = $row["magc4"];
       $magc5d = $row["magc5"];
       $magc6d = $row["magc6"];
       $magc7d = $row["magc7"];
       $magc8d = $row["magc8"];
       $magc9d = $row["magc9"];
       $magc10d = $row["magc10"];

       $dmct1d = $row["dmct1"];
       $dmct2d = $row["dmct2"];
       $dmct3d = $row["dmct3"];
       $dmcs1d = $row["dmcs1"];
       $dmcs2d = $row["dmcs2"];
       $dmcs3d = $row["dmcs3"];
       $dmcs4d = $row["dmcs4"];
       $dmcs5d = $row["dmcs5"];
       $dmcs6d = $row["dmcs6"];
       $dmcs7d = $row["dmcs7"];
       $dmcs8d = $row["dmcs8"];
       $dmcs9d = $row["dmcs9"];
       $dmcs10d = $row["dmcs10"];
       $dmcs11d = $row["dmcs11"];
       $dmcs12d = $row["dmcs12"];
       $dmcs13d = $row["dmcs13"];
       $dmcs14d = $row["dmcs14"];
       $dmcs15d = $row["dmcs15"];
       $dmcc1d = $row["dmcc1"];
       $dmcc2d = $row["dmcc2"];
       $dmcc3d = $row["dmcc3"];
       $dmcc4d = $row["dmcc4"];
       $dmcc5d = $row["dmcc5"];
       $dmcc6d = $row["dmcc6"];
       $dmcc7d = $row["dmcc7"];
       $dmcc8d = $row["dmcc8"];
       $dmcc9d = $row["dmcc9"];
       $dmcc10d = $row["dmcc10"];

       $tott1d = $row["tott1"];
       $tott2d = $row["tott2"];
       $tott3d = $row["tott3"];
       $tots1d = $row["tots1"];
       $tots2d = $row["tots2"];
       $tots3d = $row["tots3"];
       $tots4d = $row["tots4"];
       $tots5d = $row["tots5"];
       $tots6d = $row["tots6"];
       $tots7d = $row["tots7"];
       $tots8d = $row["tots8"];
       $tots9d = $row["tots9"];
       $tots10d = $row["tots10"];
       $tots11d = $row["tots11"];
       $tots12d = $row["tots12"];
       $tots13d = $row["tots13"];
       $tots14d = $row["tots14"];
       $tots15d = $row["tots15"];
       $totc1d = $row["totc1"];
       $totc2d = $row["totc2"];
       $totc3d = $row["totc3"];
       $totc4d = $row["totc4"];
       $totc5d = $row["totc5"];
       $totc6d = $row["totc6"];
       $totc7d = $row["totc7"];
       $totc8d = $row["totc8"];
       $totc9d = $row["totc9"];
       $totc10d = $row["totc10"];
}

?>
<br>















<body style="background-color:#dcdcdc;">


<center>
<h4><?php echo "$opdate" ?></h4>
</center>

<center>
<div style="display: inline-block;">
<table class="ex1">
<th bgcolor="yellow" style="color:black; font-size: 20px; text-align:center;"><img align="left" height="40px" src="https://www.ltttry8899.com/wp-content/uploads/2017/05/4dresultm-e1495971879449.gif"><p>Magnum/万能</p></th>
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













<div style="display: inline-block;">
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









<div style="display: inline-block;">
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











<?php
$link = mysqli_connect("localhost", "root", "", "wordpresstest");


$query = "SELECT * FROM 4dresult ORDER BY id DESC LIMIT 2";
$result = mysqli_query($link, $query);



while ($row = mysqli_fetch_assoc($result)) {

       $opdate = $row["opendate"];

       $magt1d = $row["magt1"];
       $magt2d = $row["magt2"];
       $magt3d = $row["magt3"];
       $mags1d = $row["mags1"];
       $mags2d = $row["mags2"];
       $mags3d = $row["mags3"];
       $mags4d = $row["mags4"];
       $mags5d = $row["mags5"];
       $mags6d = $row["mags6"];
       $mags7d = $row["mags7"];
       $mags8d = $row["mags8"];
       $mags9d = $row["mags9"];
       $mags10d = $row["mags10"];
       $mags11d = $row["mags11"];
       $mags12d = $row["mags12"];
       $mags13d = $row["mags13"];
       $mags14d = $row["mags14"];
       $mags15d = $row["mags15"];
       $magc1d = $row["magc1"];
       $magc2d = $row["magc2"];
       $magc3d = $row["magc3"];
       $magc4d = $row["magc4"];
       $magc5d = $row["magc5"];
       $magc6d = $row["magc6"];
       $magc7d = $row["magc7"];
       $magc8d = $row["magc8"];
       $magc9d = $row["magc9"];
       $magc10d = $row["magc10"];

       $dmct1d = $row["dmct1"];
       $dmct2d = $row["dmct2"];
       $dmct3d = $row["dmct3"];
       $dmcs1d = $row["dmcs1"];
       $dmcs2d = $row["dmcs2"];
       $dmcs3d = $row["dmcs3"];
       $dmcs4d = $row["dmcs4"];
       $dmcs5d = $row["dmcs5"];
       $dmcs6d = $row["dmcs6"];
       $dmcs7d = $row["dmcs7"];
       $dmcs8d = $row["dmcs8"];
       $dmcs9d = $row["dmcs9"];
       $dmcs10d = $row["dmcs10"];
       $dmcs11d = $row["dmcs11"];
       $dmcs12d = $row["dmcs12"];
       $dmcs13d = $row["dmcs13"];
       $dmcs14d = $row["dmcs14"];
       $dmcs15d = $row["dmcs15"];
       $dmcc1d = $row["dmcc1"];
       $dmcc2d = $row["dmcc2"];
       $dmcc3d = $row["dmcc3"];
       $dmcc4d = $row["dmcc4"];
       $dmcc5d = $row["dmcc5"];
       $dmcc6d = $row["dmcc6"];
       $dmcc7d = $row["dmcc7"];
       $dmcc8d = $row["dmcc8"];
       $dmcc9d = $row["dmcc9"];
       $dmcc10d = $row["dmcc10"];

       $tott1d = $row["tott1"];
       $tott2d = $row["tott2"];
       $tott3d = $row["tott3"];
       $tots1d = $row["tots1"];
       $tots2d = $row["tots2"];
       $tots3d = $row["tots3"];
       $tots4d = $row["tots4"];
       $tots5d = $row["tots5"];
       $tots6d = $row["tots6"];
       $tots7d = $row["tots7"];
       $tots8d = $row["tots8"];
       $tots9d = $row["tots9"];
       $tots10d = $row["tots10"];
       $tots11d = $row["tots11"];
       $tots12d = $row["tots12"];
       $tots13d = $row["tots13"];
       $tots14d = $row["tots14"];
       $tots15d = $row["tots15"];
       $totc1d = $row["totc1"];
       $totc2d = $row["totc2"];
       $totc3d = $row["totc3"];
       $totc4d = $row["totc4"];
       $totc5d = $row["totc5"];
       $totc6d = $row["totc6"];
       $totc7d = $row["totc7"];
       $totc8d = $row["totc8"];
       $totc9d = $row["totc9"];
       $totc10d = $row["totc10"];
}

?>
<br>
<br>

<body style="background-color:#dcdcdc;">


<center>
<h4><?php echo "$opdate" ?></h4>
</center>

<center>
<div style="display: inline-block;">
<table class="ex1">
<th bgcolor="yellow" style="color:black; font-size: 20px; text-align:center;"><img align="left" height="40px" src="https://www.ltttry8899.com/wp-content/uploads/2017/05/4dresultm-e1495971879449.gif"><p>Magnum/万能</p></th>
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













<div style="display: inline-block;">
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









<div style="display: inline-block;">
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
</center>
</body>

<footer>
<br>
<br>
</footer>

</html>