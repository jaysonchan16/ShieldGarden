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



  <title>Bet Limit</title>
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

td
{
    text-align: center;
    padding: 6px;
}
th
{
    text-align: center;
    padding: 6px;
}

h1{
	margin-left: 20px;
}

h2{
    margin-top: 20px;
    margin-left: 10px;
	color: blue;
}
h3{
    margin-left: 20px;
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
	margin-left: 10px;
}
input[id="submit"]{
    margin-left: 20px;
}
input[id="search"]{
    width: 205px;
}
input[id="read"]{
    background-color: #cecece;
}
.floating-box {
    display: inline-table;
    width: 650px;
    height: 500px;
    margin: 10px;
    border: 3px solid #73AD21;  
}

label {float: left; width: 200px; }



</style>

<body>
<center>
<?php
$betsrc = current($_POST["betsrch"]);
$link = mysqli_connect("localhost", "root", "", "wordpresstest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT * FROM betnolimit WHERE betNo = '$betsrc'";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {

        $betno = $row["betNo"];
        $betlimit = $row["betLimit"];
        $betamt = $row["betAmt"];
}
?>
<br>
<div class="floating-box">
<form action="https://www.ltttry8899.com/6-0-3-insert-master-limit/" method="post">
<h2 style="color: red;">Bet No. Limit</h2>
<h3>All bet No. must not exceed this limit: <input type="text" name="betNLimit[]" id="selectusr" placeholder="Please enter the limit.">
<input type="submit" name="select" value="Save"></h3>
</form>
<br>

<form action="" method="post">
<h2>Set limit to specify Bet No.</h2>
<h3><label for="betsearch">Search Bet No.:</label><input type="number" name="betsrch[]" id="search" maxlength="4"><input type="submit" name="update" value="Search"></h3>
</form>

<?php if($betsrc !== $betno){ ?>

<form action="https://www.ltttry8899.com/6-0-1-insert-limit/" method="post">
<h3><label for="betn">Bet No.&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;:</label><input type="number" name="betnum[]" maxlength="4"></h3>
<h3><label for="beta">Bet Amount&emsp;&nbsp;&nbsp;:</label><input id="read" type="text" value="<?php echo $betamt ?>" readonly></h3>
<h3><label for="betl">Bet Limit&emsp;&emsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" name="betlim[]" value="<?php echo $betlimit ?>" placeholder="Update"></h3><br>
<input type="submit" name="update" id="update" value="Save">
</form>
<script language="javascript"> alert("Bet Number Not found.")</script>

<?php } elseif($betsrc == $betno) { ?>

<form action="https://www.ltttry8899.com/6-0-2-update-limit/" method="post">
<h3><label for="betn">Bet No.&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;:</label><input id="read" name="betnumup[]" type="text" value="<?php echo $betno ?>" readonly></h3>
<h3><label for="beta">Bet Amount&emsp;&nbsp;&nbsp;:</label><input id="read" type="text" value="<?php echo $betamt ?>" readonly></h3>
<h3><label for="betl">Bet Limit&emsp;&emsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" name="betlimup[]" value="<?php echo $betlimit ?>" placeholder="Update"></h3><br>
<input type="submit" name="update" id="update" value="Save">
</form>

<?php } else{} ?>

</div>
</center>
</body>
<br>
<br>

<footer>
</footer>