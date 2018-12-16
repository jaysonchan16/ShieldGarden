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



  <title>Change Rate</title>
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
tr{
	width: 50%;
	text-align: center;
}
h1{
	text-align: center;
}
input[id="clr"]{
	background-color: #00FFFF;
}
td{
	column-width: 80px;
}
input {
    border-style: none;
    text-align: center;
}
</style>

<?php
$s1bg = current($_POST['tpbg']);
$s1sm = current($_POST['tpsm']);
$s1sa = current($_POST['tpsa']);
$s1sb = current($_POST['tpsb']);
$s1sc = current($_POST['tpsc']);
$s1sd = current($_POST['tpsd']);
$s1se = current($_POST['tpse']);
$s1a0 = current($_POST['tpa0']);
$s1sf = current($_POST['tpsf']);

$s2bg = current($_POST['scbg']);
$s2sm = current($_POST['scsm']);
$s2sa = current($_POST['scsa']);
$s2sb = current($_POST['scsb']);
$s2sc = current($_POST['scsc']);
$s2sd = current($_POST['scsd']);
$s2se = current($_POST['scse']);
$s2a0 = current($_POST['sca0']);
$s2sf = current($_POST['scsf']);

$s3bg = current($_POST['trbg']);
$s3sm = current($_POST['trsm']);
$s3sa = current($_POST['trsa']);
$s3sb = current($_POST['trsb']);
$s3sc = current($_POST['trsc']);
$s3sd = current($_POST['trsd']);
$s3se = current($_POST['trse']);
$s3a0 = current($_POST['tra0']);
$s3sf = current($_POST['trsf']);

$s4bg = current($_POST['spbg']);
$s4sm = current($_POST['spsm']);
$s4sa = current($_POST['spsa']);
$s4sb = current($_POST['spsb']);
$s4sc = current($_POST['spsc']);
$s4sd = current($_POST['spsd']);
$s4se = current($_POST['spse']);
$s4a0 = current($_POST['spa0']);
$s4sf = current($_POST['spsf']);

$s5bg = current($_POST['csbg']);
$s5sm = current($_POST['cssm']);
$s5sa = current($_POST['cssa']);
$s5sb = current($_POST['cssb']);
$s5sc = current($_POST['cssc']);
$s5sd = current($_POST['cssd']);
$s5se = current($_POST['csse']);
$s5a0 = current($_POST['csa0']);
$s5sf = current($_POST['cssf']);

$link = mysqli_connect("localhost", "root", "", "wordpresstest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "UPDATE chrate SET tpbgDt = '$s1bg', tpsmDt = '$s1sm', tpsaDt = '$s1sa', tpa0Dt = '$s1a0', tpsfDt = '$s1sf', scbgDt = '$s2bg', scsmDt = '$s2sm', scsbDt = '$s2sb', trbgDt = '$s3bg', trsmDt = '$s3sm', trscDt = '$s3sc', spbgDt = '$s4bg', spsdDt = '$s4sd', csbgDt = '$s5bg', csseDt = '$s5se'";
	mysqli_query($link, $query);
?>

<?php
 $link = mysqli_connect("localhost", "root", "", "wordpresstest");
 $query = "SELECT * FROM chrate";
 $result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
	$t1bg = $row['tpbgDt'];
	$t1sm = $row['tpsmDt'];
	$t1sa = $row['tpsaDt'];
	$t1sb = $row['tpsbDt'];
	$t1sc = $row['tpscDt'];
	$t1sd = $row['tpsdDt'];
	$t1se = $row['tpseDt'];
	$t1a0 = $row['tpa0Dt'];
	$t1sf = $row['tpsfDt'];

	$t2bg = $row['scbgDt'];
	$t2sm = $row['scsmDt'];
	$t2sa = $row['scsaDt'];
	$t2sb = $row['scsbDt'];
	$t2sc = $row['scscDt'];
	$t2sd = $row['scsdDt'];
	$t2se = $row['scseDt'];
	$t2a0 = $row['sca0Dt'];
	$t2sf = $row['scsfDt'];

	$t3bg = $row['trbgDt'];
	$t3sm = $row['trsmDt'];
	$t3sa = $row['trsaDt'];
	$t3sb = $row['trsbDt'];
	$t3sc = $row['trscDt'];
	$t3sd = $row['trsdDt'];
	$t3se = $row['trseDt'];
	$t3a0 = $row['tra0Dt'];
	$t3sf = $row['trsfDt'];

	$t4bg = $row['spbgDt'];
	$t4sm = $row['spsmDt'];
	$t4sa = $row['spsaDt'];
	$t4sb = $row['spsbDt'];
	$t4sc = $row['spscDt'];
	$t4sd = $row['spsdDt'];
	$t4se = $row['spseDt'];
	$t4a0 = $row['spa0Dt'];
	$t4sf = $row['spsfDt'];

	$t5bg = $row['csbgDt'];
	$t5sm = $row['cssmDt'];
	$t5sa = $row['cssaDt'];
	$t5sb = $row['cssbDt'];
	$t5sc = $row['csscDt'];
	$t5sd = $row['cssdDt'];
	$t5se = $row['csseDt'];
	$t5a0 = $row['csa0Dt'];
	$t5sf = $row['cssfDt'];
}

?>

	<body link="grey">
	<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Win Rate</title>


<center>
<img src="https://www.ltttry8899.com/wp-content/uploads/2017/06/webwxgetmsgimg-e1497438989695.jpg">
</center>
<br>
<h1>Change rate</h1>
<br>
<center>
<form action="" method="post">
<table border="1">
<tr>
	<td></td>
	<th style="text-align: center;" colspan="7">4D</td>
	<th style="text-align: center;" colspan="2">3D</td>
</tr>

<tr>
	<td></td>
	<td bgcolor="#00FFFF">大</td>
	<td bgcolor="#00FFFF">小</td>
	<td bgcolor="#00FFFF">头奖</td>
	<td bgcolor="#00FFFF">二奖</td>
	<td bgcolor="#00FFFF">三奖</td>
	<td bgcolor="#00FFFF">特别奖</td>
	<td bgcolor="#00FFFF">安慰奖</td>
	<td bgcolor="#00FFFF">三个字</td>
	<td bgcolor="#00FFFF">两个字</td>
</tr>

<tr>
	<td>头奖</td>
	<td><input type="text" name="tpbg[]" size="10" value="<?php echo $t1bg; ?>"></td>
	<td><input type="text" name="tpsm[]" size="10" value="<?php echo $t1sm; ?>"></td>
	<td><input type="text" name="tpsa[]" size="10" value="<?php echo $t1sa; ?>"></td>
	<td><input type="text" name="tpsb[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="tpsc[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="tpsd[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="tpse[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="tpa0[]" size="10" value="<?php echo $t1a0; ?>"></td>
	<td><input type="text" name="tpsf[]" size="10" value="<?php echo $t1sf; ?>"></td>
</tr>

<tr>
	<td>二奖</td>
	<td><input type="text" name="scbg[]" size="10" value="<?php echo $t2bg; ?>"></td>
	<td><input type="text" name="scsm[]" size="10" value="<?php echo $t2sm; ?>"></td>
	<td><input type="text" name="scsa[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="scsb[]" size="10" value="<?php echo $t2sb; ?>"></td>
	<td><input type="text" name="scsc[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="scsd[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="scse[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="sca0[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="scsf[]" id="clr" size="10" readonly></td>
</tr>

<tr>
	<td>三奖</td>
	<td><input type="text" name="trbg[]" size="10" value="<?php echo $t3bg; ?>"></td>
	<td><input type="text" name="trsm[]" size="10" value="<?php echo $t3sm; ?>"></td>
	<td><input type="text" name="trsa[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="trsb[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="trsc[]" size="10" value="<?php echo $t3sc; ?>"></td>
	<td><input type="text" name="trsd[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="trse[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="tra0[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="trsf[]" id="clr" size="10" readonly></td>
</tr>

<tr>
	<td>特别奖</td>
	<td><input type="text" name="spbg[]" size="10" value="<?php echo $t4bg; ?>"></td>
	<td><input type="text" name="spsm[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="spsa[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="spsb[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="spsc[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="spsd[]" size="10" value="<?php echo $t4sd; ?>"></td>
	<td><input type="text" name="spse[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="spa0[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="spsf[]" id="clr" size="10" readonly></td>
</tr>

<tr>
	<td>安慰奖</td>
	<td><input type="text" name="csbg[]" size="10" value="<?php echo $t5bg; ?>"></td>
	<td><input type="text" name="cssm[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="cssa[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="cssb[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="cssc[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="cssd[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="csse[]" size="10" value="<?php echo $t5se; ?>"></td>
	<td><input type="text" name="csa0[]" id="clr" size="10" readonly></td>
	<td><input type="text" name="cssf[]" id="clr" size="10" readonly></td>
</tr>

</table>
<br>
<input type="submit" name="update" value="Update">
</form>
</center>

</html>