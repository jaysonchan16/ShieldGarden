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



  <title>Client Win List</title>
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
    border-style: groove;
}

p{
    font-size: 20px;
    border-width: 1px;
    margin-top: 6px;
}

</style>



<center>
<h1 style="width:100%;"><u>User win list</u></h1>
</center>

<body  style="background-color:#dcdcdc;">
<center>
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


<form action="" method="post">

<h5><input type="checkbox" name="<?php echo $date1 ?>">&nbsp;<?php echo $week1 ?>&nbsp;<?php echo "($dispdate1)" ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="checkbox" name="<?php echo $date2 ?>">&nbsp;<?php echo $week2 ?>&nbsp;<?php echo "($dispdate2)" ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="checkbox" name="<?php echo $date3 ?>">&nbsp;<?php echo $week3 ?>&nbsp;<?php echo "($dispdate3)" ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="checkbox" name="tue[]">&nbsp;星期二&nbsp;<b>特别期</b>&nbsp;<?php echo "($spd)" ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="submit"></h5>
    

<div style="display: inline-block;">
<?php
if(!empty($betdate)){
$query = "SELECT bettest.userDt, magdraw.betNo, magdraw.prize, magdraw.drawDate FROM bettest INNER JOIN magdraw ON (bettest.betNoDt=magdraw.betNo AND bettest.betType=magdraw.comp AND bettest.betDate=magdraw.drawDate) WHERE bettest.betDate='$betdate' AND bettest.betType='mag'";
$result = mysqli_query($link, $query);
echo "<style type='text/css'>
            th {background: #cecece; width: 80px; text-align: center;}
            tr.row_odd {background: #EFEFEF;}
            tr:nth-child(even) {
                background-color:#87CEFA;}
            }
        </style>
        <table border=1>
            <tr>
            <h2>万能 ($betdate)</h2>
                <th>*</th>
                <th>客户</th>
                <th>奖</th>
                <th>得奖号码</th>
                <th>开彩日期</th>
            </tr>";

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>".$count."</td>
        <td>" . $row["userDt"] . "</td>
        <td>" . $row["prize"] . "</td>
        <td>" . $row["betNo"] . "</td>
        <td>" . $row["drawDate"] . "</td>
    </tr>";

    $count++;
}

echo "</table>";
?>
</div>

<div style="display: inline-block;">
<?php
$query = "SELECT bettest.userDt, magdraw.betNo, magdraw.prize, magdraw.drawDate FROM bettest INNER JOIN magdraw ON (bettest.betNoDt=magdraw.betNo AND bettest.betType=magdraw.comp AND bettest.betDate=magdraw.drawDate) WHERE bettest.betDate='$betdate' AND bettest.betType='dmc'";
$result = mysqli_query($link, $query);
echo "<style type='text/css'>
            th {background: #cecece; width: 80px; text-align: center;}
            tr.row_odd {background: #EFEFEF;}
            tr:nth-child(even) {
                background-color:#87CEFA;}
            }
        </style>
        <table border=1>
            <tr>
            <h2>大马彩 ($betdate)</h2>
                <th>*</th>
                <th>客户</th>
                <th>奖</th>
                <th>得奖号码</th>
                <th>开彩日期</th>
            </tr>";

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>".$count."</td>
        <td>" . $row["userDt"] . "</td>
        <td>" . $row["prize"] . "</td>
        <td>" . $row["betNo"] . "</td>
        <td>" . $row["drawDate"] . "</td>
    </tr>";

    $count++;
}

echo "</table>";
?>
</div>


<div style="display: inline-block;">
<?php
$query = "SELECT bettest.userDt, magdraw.betNo, magdraw.prize, magdraw.drawDate FROM bettest INNER JOIN magdraw ON (bettest.betNoDt=magdraw.betNo AND bettest.betType=magdraw.comp AND bettest.betDate=magdraw.drawDate) WHERE bettest.betDate='$betdate' AND bettest.betType='tot'";
$result = mysqli_query($link, $query);
echo "<style type='text/css'>
            th {background: #cecece; width: 80px; text-align: center;}
            tr.row_odd {background: #EFEFEF;}
            tr:nth-child(even) {
                background-color:#87CEFA;}
            }
        </style>
        <table border=1>
            <tr>
            <h2>多多 ($betdate)</h2>
                <th>*</th>
                <th>客户</th>
                <th>奖</th>
                <th>得奖号码</th>
                <th>开彩日期</th>
            </tr>";

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>".$count."</td>
        <td>" . $row["userDt"] . "</td>
        <td>" . $row["prize"] . "</td>
        <td>" . $row["betNo"] . "</td>
        <td>" . $row["drawDate"] . "</td>
    </tr>";

    $count++;
}

echo "</table>";
}
?>
</div>
</form>











</center>

</body>

<footer>
</footer>

</html>