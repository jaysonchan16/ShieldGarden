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



  <title>Show Result</title>
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
table{
	border-collapse: separate;
	border-spacing: 1px;
}

p{
	font-size: 20px;
	border-width: 1px;
	margin-top: 6px;
}

</style>

	<body style="background-color:#dcdcdc;">

<?php
$link = mysqli_connect("localhost", "root", "", "wordpresstest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

date_default_timezone_set("Asia/Kuala_Lumpur");

$now    = time(); // current timestamp
$today  = date("w", $now); // "w" returns the weekday (number)
$wednesday = 3; // 5th day of the week (sunday = 0)
$saturday = 6;
$sunday = 7;

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


$wedbet = ($_POST["wed"]); if(!empty($wedbet)){$betdate = $weddate;}
$satbet = ($_POST["sat"]); if(!empty($satbet)){$betdate = $satdate;}
$sunbet = ($_POST["sun"]); if(!empty($sunbet)){$betdate = $sundate;}
$tuebet = ($_POST["tue"]); if(!empty($tuebet)){$betdate = $spd;}

//Magnum
$magtp1 = ($_POST["magtp1"]); if(empty($magtp1)){$magtp1 = 0;}
$magtp2 = ($_POST["magtp2"]); if(empty($magtp2)){$magtp2 = 0;}
$magtp3 = ($_POST["magtp3"]); if(empty($magtp3)){$magtp3 = 0;}

$magsp1 = ($_POST["magsp1"]); if(empty($magsp1)){$magsp1 = 0;}
$magsp2 = ($_POST["magsp2"]); if(empty($magsp2)){$magsp2 = 0;}
$magsp3 = ($_POST["magsp3"]); if(empty($magsp3)){$magsp3 = 0;}
$magsp4 = ($_POST["magsp4"]); if(empty($magsp4)){$magsp4 = 0;}
$magsp5 = ($_POST["magsp5"]); if(empty($magsp5)){$magsp5 = 0;}
$magsp6 = ($_POST["magsp6"]); if(empty($magsp6)){$magsp6 = 0;}
$magsp7 = ($_POST["magsp7"]); if(empty($magsp7)){$magsp7 = 0;}
$magsp8 = ($_POST["magsp8"]); if(empty($magsp8)){$magsp8 = 0;}
$magsp9 = ($_POST["magsp9"]); if(empty($magsp9)){$magsp9 = 0;}
$magsp10 = ($_POST["magsp10"]); if(empty($magsp10)){$magsp10 = 0;}
$magsp11 = ($_POST["magsp11"]); if(empty($magsp11)){$magsp11 = 0;}
$magsp12 = ($_POST["magsp12"]); if(empty($magsp12)){$magsp12 = 0;}
$magsp13 = ($_POST["magsp13"]); if(empty($magsp13)){$magsp13 = 0;}
$magsp14 = ($_POST["magsp14"]); if(empty($magsp14)){$magsp14 = 0;}
$magsp15 = ($_POST["magsp15"]); if(empty($magsp15)){$magsp15 = 0;}

$magcs1 = ($_POST["magcs1"]); if(empty($magcs1)){$magcs1 = 0;}
$magcs2 = ($_POST["magcs2"]); if(empty($magcs2)){$magcs2 = 0;}
$magcs3 = ($_POST["magcs3"]); if(empty($magcs3)){$magcs3 = 0;}
$magcs4 = ($_POST["magcs4"]); if(empty($magcs4)){$magcs4 = 0;}
$magcs5 = ($_POST["magcs5"]); if(empty($magcs5)){$magcs5 = 0;}
$magcs6 = ($_POST["magcs6"]); if(empty($magcs6)){$magcs6 = 0;}
$magcs7 = ($_POST["magcs7"]); if(empty($magcs7)){$magcs7 = 0;}
$magcs8 = ($_POST["magcs8"]); if(empty($magcs8)){$magcs8 = 0;}
$magcs9 = ($_POST["magcs9"]); if(empty($magcs9)){$magcs9 = 0;}
$magcs10 = ($_POST["magcs10"]); if(empty($magcs10)){$magcs10 = 0;}

//Damacai
$dmctp1 = ($_POST["dmctp1"]); if(empty($dmctp1)){$dmctp1 = 0;}
$dmctp2 = ($_POST["dmctp2"]); if(empty($dmctp2)){$dmctp2 = 0;}
$dmctp3 = ($_POST["dmctp3"]); if(empty($dmctp3)){$dmctp3 = 0;}

$dmcsp1 = ($_POST["dmcsp1"]); if(empty($dmcsp1)){$dmcsp1 = 0;}
$dmcsp2 = ($_POST["dmcsp2"]); if(empty($dmcsp2)){$dmcsp2 = 0;}
$dmcsp3 = ($_POST["dmcsp3"]); if(empty($dmcsp3)){$dmcsp3 = 0;}
$dmcsp4 = ($_POST["dmcsp4"]); if(empty($dmcsp4)){$dmcsp4 = 0;}
$dmcsp5 = ($_POST["dmcsp5"]); if(empty($dmcsp5)){$dmcsp5 = 0;}
$dmcsp6 = ($_POST["dmcsp6"]); if(empty($dmcsp6)){$dmcsp6 = 0;}
$dmcsp7 = ($_POST["dmcsp7"]); if(empty($dmcsp7)){$dmcsp7 = 0;}
$dmcsp8 = ($_POST["dmcsp8"]); if(empty($dmcsp8)){$dmcsp8 = 0;}
$dmcsp9 = ($_POST["dmcsp9"]); if(empty($dmcsp9)){$dmcsp9 = 0;}
$dmcsp10 = ($_POST["dmcsp10"]); if(empty($dmcsp10)){$dmcsp10 = 0;}
$dmcsp11 = ($_POST["dmcsp11"]); if(empty($dmcsp11)){$dmcsp11 = 0;}
$dmcsp12 = ($_POST["dmcsp12"]); if(empty($dmcsp12)){$dmcsp12 = 0;}
$dmcsp13 = ($_POST["dmcsp13"]); if(empty($dmcsp13)){$dmcsp13 = 0;}
$dmcsp14 = ($_POST["dmcsp14"]); if(empty($dmcsp14)){$dmcsp14 = 0;}
$dmcsp15 = ($_POST["dmcsp15"]); if(empty($dmcsp15)){$dmcsp15 = 0;}

$dmccs1 = ($_POST["dmccs1"]); if(empty($dmccs1)){$dmccs1 = 0;}
$dmccs2 = ($_POST["dmccs2"]); if(empty($dmccs2)){$dmccs2 = 0;}
$dmccs3 = ($_POST["dmccs3"]); if(empty($dmccs3)){$dmccs3 = 0;}
$dmccs4 = ($_POST["dmccs4"]); if(empty($dmccs4)){$dmccs4 = 0;}
$dmccs5 = ($_POST["dmccs5"]); if(empty($dmccs5)){$dmccs5 = 0;}
$dmccs6 = ($_POST["dmccs6"]); if(empty($dmccs6)){$dmccs6 = 0;}
$dmccs7 = ($_POST["dmccs7"]); if(empty($dmccs7)){$dmccs7 = 0;}
$dmccs8 = ($_POST["dmccs8"]); if(empty($dmccs8)){$dmccs8 = 0;}
$dmccs9 = ($_POST["dmccs9"]); if(empty($dmccs9)){$dmccs9 = 0;}
$dmccs10 = ($_POST["dmccs10"]); if(empty($dmccs10)){$dmccs10 = 0;}

//Toto
$tottp1 = ($_POST["tottp1"]); if(empty($tottp1)){$tottp1 = 0;}
$tottp2 = ($_POST["tottp2"]); if(empty($tottp2)){$tottp2 = 0;}
$tottp3 = ($_POST["tottp3"]); if(empty($tottp3)){$tottp3 = 0;}

$totsp1 = ($_POST["totsp1"]); if(empty($totsp1)){$totsp1 = 0;}
$totsp2 = ($_POST["totsp2"]); if(empty($totsp2)){$totsp2 = 0;}
$totsp3 = ($_POST["totsp3"]); if(empty($totsp3)){$totsp3 = 0;}
$totsp4 = ($_POST["totsp4"]); if(empty($totsp4)){$totsp4 = 0;}
$totsp5 = ($_POST["totsp5"]); if(empty($totsp5)){$totsp5 = 0;}
$totsp6 = ($_POST["totsp6"]); if(empty($totsp6)){$totsp6 = 0;}
$totsp7 = ($_POST["totsp7"]); if(empty($totsp7)){$totsp7 = 0;}
$totsp8 = ($_POST["totsp8"]); if(empty($totsp8)){$totsp8 = 0;}
$totsp9 = ($_POST["totsp9"]); if(empty($totsp9)){$totsp9 = 0;}
$totsp10 = ($_POST["totsp10"]); if(empty($totsp10)){$totsp10 = 0;}
$totsp11 = ($_POST["totsp11"]); if(empty($totsp11)){$totsp11 = 0;}
$totsp12 = ($_POST["totsp12"]); if(empty($totsp12)){$totsp12 = 0;}
$totsp13 = ($_POST["totsp13"]); if(empty($totsp13)){$totsp13 = 0;}
$totsp14 = ($_POST["totsp14"]); if(empty($totsp14)){$totsp14 = 0;}
$totsp15 = ($_POST["totsp15"]); if(empty($totsp15)){$totsp15 = 0;}

$totcs1 = ($_POST["totcs1"]); if(empty($totcs1)){$totcs1 = 0;}
$totcs2 = ($_POST["totcs2"]); if(empty($totcs2)){$totcs2 = 0;}
$totcs3 = ($_POST["totcs3"]); if(empty($totcs3)){$totcs3 = 0;}
$totcs4 = ($_POST["totcs4"]); if(empty($totcs4)){$totcs4 = 0;}
$totcs5 = ($_POST["totcs5"]); if(empty($totcs5)){$totcs5 = 0;}
$totcs6 = ($_POST["totcs6"]); if(empty($totcs6)){$totcs6 = 0;}
$totcs7 = ($_POST["totcs7"]); if(empty($totcs7)){$totcs7 = 0;}
$totcs8 = ($_POST["totcs8"]); if(empty($totcs8)){$totcs8 = 0;}
$totcs9 = ($_POST["totcs9"]); if(empty($totcs9)){$totcs9 = 0;}
$totcs10 = ($_POST["totcs10"]); if(empty($totcs10)){$totcs10 = 0;}
?>

<center>
<h1><u><?php echo $betdate; ?></u></h1>
<?php
$query = "SELECT * FROM bettest WHERE betNoDt = '$magtp1' AND betDate = '$betdate' AND betType = 'mag'";
$result = mysqli_query($link, $query);

echo "<style type='text/css'>
            th {background: #cecece;}
            tr.row_odd {background: #EFEFEF;}
            tr:nth-child(even) {
            	background-color:#87CEFA;}
            }
        </style>
        <table border=1>
            <tr>
            <h2>Magnum 万能</h2>
            首奖 1st Prize (Magnum)
            	<th>no.</th>
                <th>User Name</th>
                <th>下注号码</th>
                <th>大 (RM)</th>
                <th>小 (RM)</th>
                <th>头奖 (RM)</th>
                <th>二奖 (RM)</th>
                <th>三奖 (RM)</th>
                <th>特别奖(RM)</th>
                <th>安慰奖(RM)</th>
                <th>三个字(RM)</th>
                <th>两个字(RM)</th>
                <th>MAGNUM</th>
                <th>Phone No.</th>
            </tr>";

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    	<td>".$count."</td>
        <td>" . $row["userDt"] . "</td>
        <td>" . $row["betNoDt"] . "</td>
        <td>" . $row["bigDt"] . "</td>
        <td>" . $row["smlDt"] . "</td>
        <td>" . $row["saDt"] . " </td>
        <td>" . $row["sbDt"] . " </td>
        <td>" . $row["scDt"] . " </td>
        <td>" . $row["sdDt"] . " </td>
        <td>" . $row["seDt"] . " </td>
        <td>" . $row["a0Dt"] . " </td>
        <td>" . $row["sfDt"] . " </td>
        <td>" . $row["betType"] . " </td>
        <td>" . $row["phDt"] . " </td>
    </tr>";

    $count++;
}

echo "</table>";
?>
<br>
<br>


<?php
$query = "SELECT * FROM bettest WHERE betNoDt = '$magtp2' AND betDate = '$betdate' AND betType = 'mag'";
$result = mysqli_query($link, $query);

echo "<style type='text/css'>
            th {background: #cecece;}
            tr.row_odd {background: #EFEFEF;}
            tr:nth-child(even) {
            	background-color:#87CEFA;}
            }
        </style>
        <table border=1>
            <tr>
            二奖 2nd Prize (Magnum)
            	<th>no.</th>
                <th>User Name</th>
                <th>下注号码</th>
                <th>大 (RM)</th>
                <th>小 (RM)</th>
                <th>头奖 (RM)</th>
                <th>二奖 (RM)</th>
                <th>三奖 (RM)</th>
                <th>特别奖(RM)</th>
                <th>安慰奖(RM)</th>
                <th>三个字(RM)</th>
                <th>两个字(RM)</th>
                <th>MAGNUM</th>
                <th>Phone No.</th>
            </tr>";

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    	<td>".$count."</td>
        <td>" . $row["userDt"] . "</td>
        <td>" . $row["betNoDt"] . "</td>
        <td>" . $row["bigDt"] . "</td>
        <td>" . $row["smlDt"] . "</td>
        <td>" . $row["saDt"] . " </td>
        <td>" . $row["sbDt"] . " </td>
        <td>" . $row["scDt"] . " </td>
        <td>" . $row["sdDt"] . " </td>
        <td>" . $row["seDt"] . " </td>
        <td>" . $row["a0Dt"] . " </td>
        <td>" . $row["sfDt"] . " </td>
        <td>" . $row["betType"] . " </td>
        <td>" . $row["phDt"] . " </td>
    </tr>";

    $count++;
}

echo "</table>";
?>
<br>
<br>


<?php
$query = "SELECT * FROM bettest WHERE betNoDt = '$magtp3' AND betDate = '$betdate' AND betType = 'mag'";
$result = mysqli_query($link, $query);

echo "<style type='text/css'>
            th {background: #cecece;}
            tr.row_odd {background: #EFEFEF;}
            tr:nth-child(even) {
            	background-color:#87CEFA;}
            }
        </style>
        <table border=1>
            <tr>
            三奖 3rd Prize (Magnum)
            	<th>no.</th>
                <th>User Name</th>
                <th>下注号码</th>
                <th>大 (RM)</th>
                <th>小 (RM)</th>
                <th>头奖 (RM)</th>
                <th>二奖 (RM)</th>
                <th>三奖 (RM)</th>
                <th>特别奖(RM)</th>
                <th>安慰奖(RM)</th>
                <th>三个字(RM)</th>
                <th>两个字(RM)</th>
                <th>MAGNUM</th>
                <th>Phone No.</th>
            </tr>";

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    	<td>".$count."</td>
        <td>" . $row["userDt"] . "</td>
        <td>" . $row["betNoDt"] . "</td>
        <td>" . $row["bigDt"] . "</td>
        <td>" . $row["smlDt"] . "</td>
        <td>" . $row["saDt"] . " </td>
        <td>" . $row["sbDt"] . " </td>
        <td>" . $row["scDt"] . " </td>
        <td>" . $row["sdDt"] . " </td>
        <td>" . $row["seDt"] . " </td>
        <td>" . $row["a0Dt"] . " </td>
        <td>" . $row["sfDt"] . " </td>
        <td>" . $row["betType"] . " </td>
        <td>" . $row["phDt"] . " </td>
    </tr>";

    $count++;
}

echo "</table>";
?>
<br>
<br>


<?php
$query = "SELECT * FROM bettest WHERE (betNoDt = '$magsp1' OR betNoDt = '$magsp2' OR betNoDt = '$magsp3' OR betNoDt = '$magsp4' OR betNoDt = '$magsp5' OR betNoDt = '$magsp6' OR betNoDt = '$magsp7' OR betNoDt = '$magsp8' OR betNoDt = '$magsp9' OR betNoDt = '$magsp10' OR betNoDt = '$magsp11' OR betNoDt = '$magsp12' OR betNoDt = '$magsp13' OR betNoDt = '$magsp14' OR betNoDt = '$magsp15') AND betDate = '$betdate' AND betType = 'mag'";
$result = mysqli_query($link, $query);

echo "<style type='text/css'>
            th {background: #cecece;}
            tr.row_odd {background: #EFEFEF;}
            tr:nth-child(even) {
            	background-color:#87CEFA;}
            }
        </style>
        <table border=1>
            <tr>
            特别奖 Special Prize (Magnum)
            	<th>no.</th>
                <th>User Name</th>
                <th>下注号码</th>
                <th>大 (RM)</th>
                <th>小 (RM)</th>
                <th>头奖 (RM)</th>
                <th>二奖 (RM)</th>
                <th>三奖 (RM)</th>
                <th>特别奖(RM)</th>
                <th>安慰奖(RM)</th>
                <th>三个字(RM)</th>
                <th>两个字(RM)</th>
                <th>MAGNUM</th>
                <th>Phone No.</th>
            </tr>";

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    	<td>".$count."</td>
        <td>" . $row["userDt"] . "</td>
        <td>" . $row["betNoDt"] . "</td>
        <td>" . $row["bigDt"] . "</td>
        <td>" . $row["smlDt"] . "</td>
        <td>" . $row["saDt"] . " </td>
        <td>" . $row["sbDt"] . " </td>
        <td>" . $row["scDt"] . " </td>
        <td>" . $row["sdDt"] . " </td>
        <td>" . $row["seDt"] . " </td>
        <td>" . $row["a0Dt"] . " </td>
        <td>" . $row["sfDt"] . " </td>
        <td>" . $row["betType"] . " </td>
        <td>" . $row["phDt"] . " </td>
    </tr>";

    $count++;
}

echo "</table>";
?>
<br>
<br>


<?php
$query = "SELECT * FROM bettest WHERE (betNoDt = '$magcs1' OR betNoDt = '$magcs2' OR betNoDt = '$magcs3' OR betNoDt = '$magcs4' OR betNoDt = '$magcs5' OR betNoDt = '$magcs6' OR betNoDt = '$magcs7' OR betNoDt = '$magcs8' OR betNoDt = '$magcs9' OR betNoDt = '$magcs10') AND betDate = '$betdate' AND betType = 'mag'";
$result = mysqli_query($link, $query);

echo "<style type='text/css'>
            th {background: #cecece;}
            tr.row_odd {background: #EFEFEF;}
            tr:nth-child(even) {
            	background-color:#87CEFA;}
            }
        </style>
        <table border=1>
            <tr>
            安慰奖 Consolation Prize (Magnum)
            	<th>no.</th>
                <th>User Name</th>
                <th>下注号码</th>
                <th>大 (RM)</th>
                <th>小 (RM)</th>
                <th>头奖 (RM)</th>
                <th>二奖 (RM)</th>
                <th>三奖 (RM)</th>
                <th>特别奖(RM)</th>
                <th>安慰奖(RM)</th>
                <th>三个字(RM)</th>
                <th>两个字(RM)</th>
                <th>MAGNUM</th>
                <th>Phone No.</th>
            </tr>";

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    	<td>".$count."</td>
        <td>" . $row["userDt"] . "</td>
        <td>" . $row["betNoDt"] . "</td>
        <td>" . $row["bigDt"] . "</td>
        <td>" . $row["smlDt"] . "</td>
        <td>" . $row["saDt"] . " </td>
        <td>" . $row["sbDt"] . " </td>
        <td>" . $row["scDt"] . " </td>
        <td>" . $row["sdDt"] . " </td>
        <td>" . $row["seDt"] . " </td>
        <td>" . $row["a0Dt"] . " </td>
        <td>" . $row["sfDt"] . " </td>
        <td>" . $row["betType"] . " </td>
        <td>" . $row["phDt"] . " </td>
    </tr>";

    $count++;
}

echo "</table>";

?>

<hr>
<hr>


















<?php
$query = "SELECT * FROM bettest WHERE betNoDt = '$dmctp1' AND betDate = '$betdate' AND betType = 'dmc'";
$result = mysqli_query($link, $query);

echo "<style type='text/css'>
            th {background: #cecece;}
            tr.row_odd {background: #EFEFEF;}
            tr:nth-child(even) {
            	background-color:#87CEFA;}
            }
        </style>
        <table border=1>
            <tr>
            <h2>Damacai 大马彩</h2>
            首奖 1st Prize (Damacai)
            	<th>no.</th>
                <th>User Name</th>
                <th>下注号码</th>
                <th>大 (RM)</th>
                <th>小 (RM)</th>
                <th>头奖 (RM)</th>
                <th>二奖 (RM)</th>
                <th>三奖 (RM)</th>
                <th>特别奖(RM)</th>
                <th>安慰奖(RM)</th>
                <th>三个字(RM)</th>
                <th>两个字(RM)</th>
                <th>DAMACAI</th>
                <th>Phone No.</th>
            </tr>";

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    	<td>".$count."</td>
        <td>" . $row["userDt"] . "</td>
        <td>" . $row["betNoDt"] . "</td>
        <td>" . $row["bigDt"] . "</td>
        <td>" . $row["smlDt"] . "</td>
        <td>" . $row["saDt"] . " </td>
        <td>" . $row["sbDt"] . " </td>
        <td>" . $row["scDt"] . " </td>
        <td>" . $row["sdDt"] . " </td>
        <td>" . $row["seDt"] . " </td>
        <td>" . $row["a0Dt"] . " </td>
        <td>" . $row["sfDt"] . " </td>
        <td>" . $row["betType"] . " </td>
        <td>" . $row["phDt"] . " </td>
    </tr>";

    $count++;
}

echo "</table>";
?>
<br>
<br>


<?php
$query = "SELECT * FROM bettest WHERE betNoDt = '$dmctp2' AND betDate = '$betdate' AND betType = 'dmc'";
$result = mysqli_query($link, $query);

echo "<style type='text/css'>
            th {background: #cecece;}
            tr.row_odd {background: #EFEFEF;}
            tr:nth-child(even) {
            	background-color:#87CEFA;}
            }
        </style>
        <table border=1>
            <tr>
            二奖 2nd Prize (Damacai)
            	<th>no.</th>
                <th>User Name</th>
                <th>下注号码</th>
                <th>大 (RM)</th>
                <th>小 (RM)</th>
                <th>头奖 (RM)</th>
                <th>二奖 (RM)</th>
                <th>三奖 (RM)</th>
                <th>特别奖(RM)</th>
                <th>安慰奖(RM)</th>
                <th>三个字(RM)</th>
                <th>两个字(RM)</th>
                <th>DAMACAI</th>
                <th>Phone No.</th>
            </tr>";

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    	<td>".$count."</td>
        <td>" . $row["userDt"] . "</td>
        <td>" . $row["betNoDt"] . "</td>
        <td>" . $row["bigDt"] . "</td>
        <td>" . $row["smlDt"] . "</td>
        <td>" . $row["saDt"] . " </td>
        <td>" . $row["sbDt"] . " </td>
        <td>" . $row["scDt"] . " </td>
        <td>" . $row["sdDt"] . " </td>
        <td>" . $row["seDt"] . " </td>
        <td>" . $row["a0Dt"] . " </td>
        <td>" . $row["sfDt"] . " </td>
        <td>" . $row["betType"] . " </td>
        <td>" . $row["phDt"] . " </td>
    </tr>";

    $count++;
}

echo "</table>";
?>
<br>
<br>


<?php
$query = "SELECT * FROM bettest WHERE betNoDt = '$dmctp3' AND betDate = '$betdate' AND betType = 'dmc'";
$result = mysqli_query($link, $query);

echo "<style type='text/css'>
            th {background: #cecece;}
            tr.row_odd {background: #EFEFEF;}
            tr:nth-child(even) {
            	background-color:#87CEFA;}
            }
        </style>
        <table border=1>
            <tr>
            三奖 3rd Prize (Damacai)
            	<th>no.</th>
                <th>User Name</th>
                <th>下注号码</th>
                <th>大 (RM)</th>
                <th>小 (RM)</th>
                <th>头奖 (RM)</th>
                <th>二奖 (RM)</th>
                <th>三奖 (RM)</th>
                <th>特别奖(RM)</th>
                <th>安慰奖(RM)</th>
                <th>三个字(RM)</th>
                <th>两个字(RM)</th>
                <th>DAMACAI</th>
                <th>Phone No.</th>
            </tr>";

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    	<td>".$count."</td>
        <td>" . $row["userDt"] . "</td>
        <td>" . $row["betNoDt"] . "</td>
        <td>" . $row["bigDt"] . "</td>
        <td>" . $row["smlDt"] . "</td>
        <td>" . $row["saDt"] . " </td>
        <td>" . $row["sbDt"] . " </td>
        <td>" . $row["scDt"] . " </td>
        <td>" . $row["sdDt"] . " </td>
        <td>" . $row["seDt"] . " </td>
        <td>" . $row["a0Dt"] . " </td>
        <td>" . $row["sfDt"] . " </td>
        <td>" . $row["betType"] . " </td>
        <td>" . $row["phDt"] . " </td>
    </tr>";

    $count++;
}

echo "</table>";
?>
<br>
<br>


<?php
$query = "SELECT * FROM bettest WHERE (betNoDt = '$dmcsp1' OR betNoDt = '$dmcsp2' OR betNoDt = '$dmcsp3' OR betNoDt = '$dmcsp4' OR betNoDt = '$dmcsp5' OR betNoDt = '$dmcsp6' OR betNoDt = '$dmcsp7' OR betNoDt = '$dmcsp8' OR betNoDt = '$dmcsp9' OR betNoDt = '$dmcsp10' OR betNoDt = '$dmcsp11' OR betNoDt = '$dmcsp12' OR betNoDt = '$dmcsp13' OR betNoDt = '$dmcsp14' OR betNoDt = '$dmcsp15') AND betDate = '$betdate' AND betType = 'dmc'";
$result = mysqli_query($link, $query);

echo "<style type='text/css'>
            th {background: #cecece;}
            tr.row_odd {background: #EFEFEF;}
            tr:nth-child(even) {
            	background-color:#87CEFA;}
            }
        </style>
        <table border=1>
            <tr>
            特别奖 Special Prize (Damacai)
            	<th>no.</th>
                <th>User Name</th>
                <th>下注号码</th>
                <th>大 (RM)</th>
                <th>小 (RM)</th>
                <th>头奖 (RM)</th>
                <th>二奖 (RM)</th>
                <th>三奖 (RM)</th>
                <th>特别奖(RM)</th>
                <th>安慰奖(RM)</th>
                <th>三个字(RM)</th>
                <th>两个字(RM)</th>
                <th>DAMACAI</th>
                <th>Phone No.</th>
            </tr>";

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    	<td>".$count."</td>
        <td>" . $row["userDt"] . "</td>
        <td>" . $row["betNoDt"] . "</td>
        <td>" . $row["bigDt"] . "</td>
        <td>" . $row["smlDt"] . "</td>
        <td>" . $row["saDt"] . " </td>
        <td>" . $row["sbDt"] . " </td>
        <td>" . $row["scDt"] . " </td>
        <td>" . $row["sdDt"] . " </td>
        <td>" . $row["seDt"] . " </td>
        <td>" . $row["a0Dt"] . " </td>
        <td>" . $row["sfDt"] . " </td>
        <td>" . $row["betType"] . " </td>
        <td>" . $row["phDt"] . " </td>
    </tr>";

    $count++;
}

echo "</table>";
?>
<br>
<br>


<?php
$query = "SELECT * FROM bettest WHERE (betNoDt = '$dmccs1' OR betNoDt = '$dmccs2' OR betNoDt = '$dmccs3' OR betNoDt = '$dmccs4' OR betNoDt = '$dmccs5' OR betNoDt = '$dmccs6' OR betNoDt = '$dmccs7' OR betNoDt = '$dmccs8' OR betNoDt = '$dmccs9' OR betNoDt = '$dmccs10') AND betDate = '$betdate' AND betType = 'dmc'";
$result = mysqli_query($link, $query);

echo "<style type='text/css'>
            th {background: #cecece;}
            tr.row_odd {background: #EFEFEF;}
            tr:nth-child(even) {
            	background-color:#87CEFA;}
            }
        </style>
        <table border=1>
            <tr>
            安慰奖 Consolation Prize (Damacai)
            	<th>no.</th>
                <th>User Name</th>
                <th>下注号码</th>
                <th>大 (RM)</th>
                <th>小 (RM)</th>
                <th>头奖 (RM)</th>
                <th>二奖 (RM)</th>
                <th>三奖 (RM)</th>
                <th>特别奖(RM)</th>
                <th>安慰奖(RM)</th>
                <th>三个字(RM)</th>
                <th>两个字(RM)</th>
                <th>DAMACAI</th>
                <th>Phone No.</th>
            </tr>";

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    	<td>".$count."</td>
        <td>" . $row["userDt"] . "</td>
        <td>" . $row["betNoDt"] . "</td>
        <td>" . $row["bigDt"] . "</td>
        <td>" . $row["smlDt"] . "</td>
        <td>" . $row["saDt"] . " </td>
        <td>" . $row["sbDt"] . " </td>
        <td>" . $row["scDt"] . " </td>
        <td>" . $row["sdDt"] . " </td>
        <td>" . $row["seDt"] . " </td>
        <td>" . $row["a0Dt"] . " </td>
        <td>" . $row["sfDt"] . " </td>
        <td>" . $row["betType"] . " </td>
        <td>" . $row["phDt"] . " </td>
    </tr>";

    $count++;
}

echo "</table>";

?>

<hr>
<hr>


















<?php
$query = "SELECT * FROM bettest WHERE betNoDt = '$tottp1' AND betDate = '$betdate' AND betType = 'tot'";
$result = mysqli_query($link, $query);

echo "<style type='text/css'>
            th {background: #cecece;}
            tr.row_odd {background: #EFEFEF;}
            tr:nth-child(even) {
            	background-color:#87CEFA;}
            }
        </style>
        <table border=1>
            <tr>
            <h2>Toto 多多</h2>
            首奖 1st Prize (Toto)
            	<th>no.</th>
                <th>User Name</th>
                <th>下注号码</th>
                <th>大 (RM)</th>
                <th>小 (RM)</th>
                <th>头奖 (RM)</th>
                <th>二奖 (RM)</th>
                <th>三奖 (RM)</th>
                <th>特别奖(RM)</th>
                <th>安慰奖(RM)</th>
                <th>三个字(RM)</th>
                <th>两个字(RM)</th>
                <th>TOTO</th>
                <th>Phone No.</th>
            </tr>";

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    	<td>".$count."</td>
        <td>" . $row["userDt"] . "</td>
        <td>" . $row["betNoDt"] . "</td>
        <td>" . $row["bigDt"] . "</td>
        <td>" . $row["smlDt"] . "</td>
        <td>" . $row["saDt"] . " </td>
        <td>" . $row["sbDt"] . " </td>
        <td>" . $row["scDt"] . " </td>
        <td>" . $row["sdDt"] . " </td>
        <td>" . $row["seDt"] . " </td>
        <td>" . $row["a0Dt"] . " </td>
        <td>" . $row["sfDt"] . " </td>
        <td>" . $row["betType"] . " </td>
        <td>" . $row["phDt"] . " </td>
    </tr>";

    $count++;
}

echo "</table>";
?>
<br>
<br>


<?php
$query = "SELECT * FROM bettest WHERE betNoDt = '$tottp2' AND betDate = '$betdate' AND betType = 'tot'";
$result = mysqli_query($link, $query);

echo "<style type='text/css'>
            th {background: #cecece;}
            tr.row_odd {background: #EFEFEF;}
            tr:nth-child(even) {
            	background-color:#87CEFA;}
            }
        </style>
        <table border=1>
            <tr>
            二奖 2nd Prize (Toto)
            	<th>no.</th>
                <th>User Name</th>
                <th>下注号码</th>
                <th>大 (RM)</th>
                <th>小 (RM)</th>
                <th>头奖 (RM)</th>
                <th>二奖 (RM)</th>
                <th>三奖 (RM)</th>
                <th>特别奖(RM)</th>
                <th>安慰奖(RM)</th>
                <th>三个字(RM)</th>
                <th>两个字(RM)</th>
                <th>TOTO</th>
                <th>Phone No.</th>
            </tr>";

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    	<td>".$count."</td>
        <td>" . $row["userDt"] . "</td>
        <td>" . $row["betNoDt"] . "</td>
        <td>" . $row["bigDt"] . "</td>
        <td>" . $row["smlDt"] . "</td>
        <td>" . $row["saDt"] . " </td>
        <td>" . $row["sbDt"] . " </td>
        <td>" . $row["scDt"] . " </td>
        <td>" . $row["sdDt"] . " </td>
        <td>" . $row["seDt"] . " </td>
        <td>" . $row["a0Dt"] . " </td>
        <td>" . $row["sfDt"] . " </td>
        <td>" . $row["betType"] . " </td>
        <td>" . $row["phDt"] . " </td>
    </tr>";

    $count++;
}

echo "</table>";
?>
<br>
<br>


<?php
$query = "SELECT * FROM bettest WHERE betNoDt = '$tottp3' AND betDate = '$betdate' AND betType = 'tot'";
$result = mysqli_query($link, $query);

echo "<style type='text/css'>
            th {background: #cecece;}
            tr.row_odd {background: #EFEFEF;}
            tr:nth-child(even) {
            	background-color:#87CEFA;}
            }
        </style>
        <table border=1>
            <tr>
            三奖 3rd Prize (Toto)
            	<th>no.</th>
                <th>User Name</th>
                <th>下注号码</th>
                <th>大 (RM)</th>
                <th>小 (RM)</th>
                <th>头奖 (RM)</th>
                <th>二奖 (RM)</th>
                <th>三奖 (RM)</th>
                <th>特别奖(RM)</th>
                <th>安慰奖(RM)</th>
                <th>三个字(RM)</th>
                <th>两个字(RM)</th>
                <th>TOTO</th>
                <th>Phone No.</th>
            </tr>";

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    	<td>".$count."</td>
        <td>" . $row["userDt"] . "</td>
        <td>" . $row["betNoDt"] . "</td>
        <td>" . $row["bigDt"] . "</td>
        <td>" . $row["smlDt"] . "</td>
        <td>" . $row["saDt"] . " </td>
        <td>" . $row["sbDt"] . " </td>
        <td>" . $row["scDt"] . " </td>
        <td>" . $row["sdDt"] . " </td>
        <td>" . $row["seDt"] . " </td>
        <td>" . $row["a0Dt"] . " </td>
        <td>" . $row["sfDt"] . " </td>
        <td>" . $row["betType"] . " </td>
        <td>" . $row["phDt"] . " </td>
    </tr>";

    $count++;
}

echo "</table>";
?>
<br>
<br>


<?php
$query = "SELECT * FROM bettest WHERE (betNoDt = '$totsp1' OR betNoDt = '$totsp2' OR betNoDt = '$totsp3' OR betNoDt = '$totsp4' OR betNoDt = '$totsp5' OR betNoDt = '$totsp6' OR betNoDt = '$totsp7' OR betNoDt = '$totsp8' OR betNoDt = '$totsp9' OR betNoDt = '$totsp10' OR betNoDt = '$totsp11' OR betNoDt = '$totsp12' OR betNoDt = '$totsp13' OR betNoDt = '$totsp14' OR betNoDt = '$totsp15') AND betDate = '$betdate' AND betType = 'tot'";
$result = mysqli_query($link, $query);

echo "<style type='text/css'>
            th {background: #cecece;}
            tr.row_odd {background: #EFEFEF;}
            tr:nth-child(even) {
            	background-color:#87CEFA;}
            }
        </style>
        <table border=1>
            <tr>
            特别奖 Special Prize (Toto)
            	<th>no.</th>
                <th>User Name</th>
                <th>下注号码</th>
                <th>大 (RM)</th>
                <th>小 (RM)</th>
                <th>头奖 (RM)</th>
                <th>二奖 (RM)</th>
                <th>三奖 (RM)</th>
                <th>特别奖(RM)</th>
                <th>安慰奖(RM)</th>
                <th>三个字(RM)</th>
                <th>两个字(RM)</th>
                <th>TOTO</th>
                <th>Phone No.</th>
            </tr>";

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    	<td>".$count."</td>
        <td>" . $row["userDt"] . "</td>
        <td>" . $row["betNoDt"] . "</td>
        <td>" . $row["bigDt"] . "</td>
        <td>" . $row["smlDt"] . "</td>
        <td>" . $row["saDt"] . " </td>
        <td>" . $row["sbDt"] . " </td>
        <td>" . $row["scDt"] . " </td>
        <td>" . $row["sdDt"] . " </td>
        <td>" . $row["seDt"] . " </td>
        <td>" . $row["a0Dt"] . " </td>
        <td>" . $row["sfDt"] . " </td>
        <td>" . $row["betType"] . " </td>
        <td>" . $row["phDt"] . " </td>
    </tr>";

    $count++;
}

echo "</table>";
?>
<br>
<br>


<?php
$query = "SELECT * FROM bettest WHERE (betNoDt = '$totcs1' OR betNoDt = '$totcs2' OR betNoDt = '$totcs3' OR betNoDt = '$totcs4' OR betNoDt = '$totcs5' OR betNoDt = '$totcs6' OR betNoDt = '$totcs7' OR betNoDt = '$totcs8' OR betNoDt = '$totcs9' OR betNoDt = '$totcs10') AND betDate = '$betdate' AND betType = 'tot'";
$result = mysqli_query($link, $query);

echo "<style type='text/css'>
            th {background: #cecece;}
            tr.row_odd {background: #EFEFEF;}
            tr:nth-child(even) {
            	background-color:#87CEFA;}
            }
        </style>
        <table border=1>
            <tr>
            安慰奖 Consolation Prize (Toto)
            	<th>no.</th>
                <th>User Name</th>
                <th>下注号码</th>
                <th>大 (RM)</th>
                <th>小 (RM)</th>
                <th>头奖 (RM)</th>
                <th>二奖 (RM)</th>
                <th>三奖 (RM)</th>
                <th>特别奖(RM)</th>
                <th>安慰奖(RM)</th>
                <th>三个字(RM)</th>
                <th>两个字(RM)</th>
                <th>TOTO</th>
                <th>Phone No.</th>
            </tr>";

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    	<td>".$count."</td>
        <td>" . $row["userDt"] . "</td>
        <td>" . $row["betNoDt"] . "</td>
        <td>" . $row["bigDt"] . "</td>
        <td>" . $row["smlDt"] . "</td>
        <td>" . $row["saDt"] . " </td>
        <td>" . $row["sbDt"] . " </td>
        <td>" . $row["scDt"] . " </td>
        <td>" . $row["sdDt"] . " </td>
        <td>" . $row["seDt"] . " </td>
        <td>" . $row["a0Dt"] . " </td>
        <td>" . $row["sfDt"] . " </td>
        <td>" . $row["betType"] . " </td>
        <td>" . $row["phDt"] . " </td>
    </tr>";

    $count++;
}

echo "</table>";

?>

<hr>
<hr>

</center>












































<!--Insert result into database-->

<?php  

$p1 = '1st';
$p2 = '2nd';
$p3 = '3rd';
$psp = 'special';
$pcs = 'consolation';

$magnum = 'mag';
$damacai = 'dmc';
$toto = 'tot';

$connect = mysqli_connect("localhost", "root", "", "wordpresstest");
if(! empty($wedbet) || ! empty($satbet) || ! empty($sunbet) || ! empty($tuebet)){
if(! empty($magtp1) ){
 $sql = "INSERT INTO 4dresult(opendate, magt1, magt2, magt3, mags1, mags2, mags3, mags4, mags5, mags6, mags7, mags8, mags9, mags10, mags11, mags12, mags13, mags14, mags15, magc1, magc2, magc3, magc4, magc5, magc6, magc7, magc8, magc9, magc10, dmct1, dmct2, dmct3, dmcs1, dmcs2, dmcs3, dmcs4, dmcs5, dmcs6, dmcs7, dmcs8, dmcs9, dmcs10, dmcs11, dmcs12, dmcs13, dmcs14, dmcs15, dmcc1, dmcc2, dmcc3, dmcc4, dmcc5, dmcc6, dmcc7, dmcc8, dmcc9, dmcc10, tott1, tott2, tott3, tots1, tots2, tots3, tots4, tots5, tots6, tots7, tots8, tots9, tots10, tots11, tots12, tots13, tots14, tots15, totc1, totc2, totc3, totc4, totc5, totc6, totc7, totc8, totc9, totc10) VALUES('".$betdate."', '".$magtp1."', '".$magtp2."', '".$magtp3."', '".$magsp1."', '".$magsp2."', '".$magsp3."', '".$magsp4."', '".$magsp5."', '".$magsp6."', '".$magsp7."', '".$magsp8."', '".$magsp9."', '".$magsp10."', '".$magsp11."', '".$magsp12."', '".$magsp13."', '".$magsp14."', '".$magsp15."', '".$magcs1."', '".$magcs2."', '".$magcs3."', '".$magcs4."', '".$magcs5."', '".$magcs6."', '".$magcs7."', '".$magcs8."', '".$magcs9."', '".$magcs10."', '".$dmctp1."', '".$dmctp2."', '".$dmctp3."', '".$dmcsp1."', '".$dmcsp2."', '".$dmcsp3."', '".$dmcsp4."', '".$dmcsp5."', '".$dmcsp6."', '".$dmcsp7."', '".$dmcsp8."', '".$dmcsp9."', '".$dmcsp10."', '".$dmcsp11."', '".$dmcsp12."', '".$dmcsp13."', '".$dmcsp14."', '".$dmcsp15."', '".$dmccs1."', '".$dmccs2."', '".$dmccs3."', '".$dmccs4."', '".$dmccs5."', '".$dmccs6."', '".$dmccs7."', '".$dmccs8."', '".$dmccs9."', '".$dmccs10."', '".$tottp1."', '".$tottp2."', '".$tottp3."', '".$totsp1."', '".$totsp2."', '".$totsp3."', '".$totsp4."', '".$totsp5."', '".$totsp6."', '".$totsp7."', '".$totsp8."', '".$totsp9."', '".$totsp10."', '".$totsp11."', '".$totsp12."', '".$totsp13."', '".$totsp14."', '".$totsp15."', '".$totcs1."', '".$totcs2."', '".$totcs3."', '".$totcs4."', '".$totcs5."', '".$totcs6."', '".$totcs7."', '".$totcs8."', '".$totcs9."', '".$totcs10."')";  
     
     mysqli_query($connect, $sql);

}








if(! empty($magtp1)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magtp1."', '".$p1."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}

if(! empty($magtp2)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magtp2."', '".$p2."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}

if(! empty($magtp3)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magtp3."', '".$p3."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}




if(! empty($magsp1)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magsp1."', '".$psp."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magsp2)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magsp2."', '".$psp."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magsp3)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magsp3."', '".$psp."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magsp4)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magsp4."', '".$psp."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magsp5)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magsp5."', '".$psp."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magsp6)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magsp6."', '".$psp."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magsp7)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magsp7."', '".$psp."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magsp8)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magsp8."', '".$psp."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magsp9)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magsp9."', '".$psp."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magsp10)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magsp10."', '".$psp."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magsp11)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magsp11."', '".$psp."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magsp12)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magsp12."', '".$psp."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magsp13)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magsp13."', '".$psp."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magsp14)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magsp14."', '".$psp."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magsp15)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magsp15."', '".$psp."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}




if(! empty($magcs1)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magcs1."', '".$pcs."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magcs2)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magcs2."', '".$pcs."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magcs3)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magcs3."', '".$pcs."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magcs4)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magcs4."', '".$pcs."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magcs5)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magcs5."', '".$pcs."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magcs6)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magcs6."', '".$pcs."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magcs7)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magcs7."', '".$pcs."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magcs8)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magcs8."', '".$pcs."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magcs9)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magcs9."', '".$pcs."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}
if(! empty($magcs10)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$magcs10."', '".$pcs."', '".$betdate."', '".$magnum."')";
	mysqli_query($connect, $sql);
}









if(! empty($dmctp1)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmctp1."', '".$p1."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}

if(! empty($dmctp2)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmctp2."', '".$p2."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}

if(! empty($dmctp3)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmctp3."', '".$p3."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}




if(! empty($dmcsp1)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmcsp1."', '".$psp."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmcsp2)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmcsp2."', '".$psp."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmcsp3)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmcsp3."', '".$psp."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmcsp4)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmcsp4."', '".$psp."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmcsp5)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmcsp5."', '".$psp."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmcsp6)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmcsp6."', '".$psp."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmcsp7)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmcsp7."', '".$psp."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmcsp8)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmcsp8."', '".$psp."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmcsp9)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmcsp9."', '".$psp."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmcsp10)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmcsp10."', '".$psp."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmcsp11)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmcsp11."', '".$psp."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmcsp12)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmcsp12."', '".$psp."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmcsp13)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmcsp13."', '".$psp."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmcsp14)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmcsp14."', '".$psp."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmcsp15)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmcsp15."', '".$psp."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}




if(! empty($dmccs1)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmccs1."', '".$pcs."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmccs2)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmccs2."', '".$pcs."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmccs3)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmccs3."', '".$pcs."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmccs4)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmccs4."', '".$pcs."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmccs5)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmccs5."', '".$pcs."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmccs6)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmccs6."', '".$pcs."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmccs7)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmccs7."', '".$pcs."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmccs8)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmccs8."', '".$pcs."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmccs9)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmccs9."', '".$pcs."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}
if(! empty($dmccs10)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$dmccs10."', '".$pcs."', '".$betdate."', '".$damacai."')";
	mysqli_query($connect, $sql);
}









if(! empty($tottp1)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$tottp1."', '".$p1."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}

if(! empty($tottp2)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$tottp2."', '".$p2."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}

if(! empty($tottp3)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$tottp3."', '".$p3."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}




if(! empty($totsp1)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totsp1."', '".$psp."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totsp2)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totsp2."', '".$psp."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totsp3)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totsp3."', '".$psp."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totsp4)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totsp4."', '".$psp."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totsp5)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totsp5."', '".$psp."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totsp6)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totsp6."', '".$psp."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totsp7)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totsp7."', '".$psp."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totsp8)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totsp8."', '".$psp."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totsp9)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totsp9."', '".$psp."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totsp10)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totsp10."', '".$psp."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totsp11)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totsp11."', '".$psp."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totsp12)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totsp12."', '".$psp."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totsp13)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totsp13."', '".$psp."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totsp14)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totsp14."', '".$psp."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totsp15)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totsp15."', '".$psp."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}




if(! empty($totcs1)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totcs1."', '".$pcs."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totcs2)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totcs2."', '".$pcs."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totcs3)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totcs3."', '".$pcs."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totcs4)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totcs4."', '".$pcs."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totcs5)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totcs5."', '".$pcs."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totcs6)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totcs6."', '".$pcs."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totcs7)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totcs7."', '".$pcs."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totcs8)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totcs8."', '".$pcs."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totcs9)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totcs9."', '".$pcs."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
if(! empty($totcs10)) {
	$sql = "INSERT INTO magdraw(betNo, prize, drawDate, comp) VALUES('".$totcs10."', '".$pcs."', '".$betdate."', '".$toto."')";
	mysqli_query($connect, $sql);
}
}else{
    echo '<script>alert("Data not submit, please select a date."); location.replace(document.referrer);</script>';
}

?>


</body>

<footer>
<center>
<button onclick="window.print()">Print this page</button>
</center>
</footer>
<br>
<br>
</html>