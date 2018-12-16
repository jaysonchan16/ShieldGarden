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



  <title>Check bet history</title>
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

</style>

<?php
$usrnm = $_GET['usrnm'];
?>

<body style="background-color:#dcdcdc;">
<form action="" method="post">
    <h3><input type="hidden" name="usrnm" value=<?php echo $usrnm ?>>&nbsp;&nbsp;User Name: (<?php echo $usrnm ?>)</h3>
	<h2>查询下注记录</h2>
    <p>请选择日期：<select name="searchdate">
    <option value="May 21 2017">21/5/17</option>
    <option value="May 24 2017">24/5/17</option>
    <option value="May 27 2017">27/5/17</option>
    <option value="May 28 2017">28/5/17</option>
    <option value="May 31 2017">31/5/17</option>

    <option value="June 3 2017">3/6/17</option>
    <option value="June 4 2017">4/6/17</option>
    <option value="June 7 2017">7/6/17</option>
    <option value="June 10 2017">10/6/17</option>
    <option value="June 11 2017">11/6/17</option>
    <option value="June 14 2017">14/6/17</option>
    <option value="June 17 2017">17/6/17</option>
    <option value="June 18 2017">18/6/17</option>
    <option value="June 21 2017">21/6/17</option>
    <option value="June 24 2017">24/6/17</option>
    <option value="June 25 2017">25/6/17</option>
    <option value="June 28 2017">28/6/17</option>

    <option value="July 1 2017">1/7/17</option>
    <option value="July 2 2017">2/7/17</option>
    <option value="July 4 2017">4/7/17</option>
    <option value="July 5 2017">5/7/17</option>
    <option value="July 8 2017">8/7/17</option>
    <option value="July 9 2017">9/7/17</option>
    <option value="July 12 2017">12/7/17</option>
    <option value="July 15 2017">15/7/17</option>
    <option value="July 16 2017">16/7/17</option>
    <option value="July 19 2017">19/7/17</option>
    <option value="July 22 2017">22/7/17</option>
    <option value="July 23 2017">23/7/17</option>
    <option value="July 25 2017">25/7/17</option>
    <option value="July 26 2017">26/7/17</option>
    <option value="July 29 2017">29/7/17</option>
    <option value="July 30 2017">30/7/17</option>

    <option value="August 1 2017">1/8/17</option>
    <option value="August 2 2017">2/8/17</option>
    <option value="August 5 2017">5/8/17</option>
    <option value="August 6 2017">6/8/17</option>
    <option value="August 9 2017">9/8/17</option>
    <option value="August 12 2017">12/8/17</option>
    <option value="August 13 2017">13/8/17</option>
    <option value="August 16 2017">16/8/17</option>
    <option value="August 19 2017">19/8/17</option>
    <option value="August 20 2017">20/8/17</option>
    <option value="August 23 2017">23/8/17</option>
    <option value="August 26 2017">26/8/17</option>
    <option value="August 27 2017">27/8/17</option>
    <option value="August 29 2017">29/8/17</option>
    <option value="August 30 2017">30/8/17</option>

    <option value="September 2 2017">2/9/17</option>
    <option value="September 3 2017">3/9/17</option>
    <option value="September 9 2017">5/9/17</option>
    <option value="September 6 2017">6/9/17</option>
    <option value="September 9 2017">9/9/17</option>
    <option value="September 10 2017">10/9/17</option>
    <option value="September 13 2017">13/9/17</option>
    <option value="September 16 2017">16/9/17</option>
    <option value="September 17 2017">17/9/17</option>
    <option value="September 20 2017">20/9/17</option>
    <option value="September 23 2017">23/9/17</option>
    <option value="September 24 2017">24/9/17</option>
    <option value="September 26 2017">26/9/17</option>
    <option value="September 27 2017">27/9/17</option>
    <option value="September 30 2017">30/9/17</option>

    <option value="October 1 2017">1/10/17</option>
    <option value="October 3 2017">3/10/17</option>
    <option value="October 4 2017">4/10/17</option>
    <option value="October 7 2017">7/10/17</option>
    <option value="October 8 2017">8/10/17</option>
    <option value="October 11 2017">11/10/17</option>
    <option value="October 14 2017">14/10/17</option>
    <option value="October 15 2017">15/10/17</option>
    <option value="October 18 2017">18/10/17</option>
    <option value="October 21 2017">21/10/17</option>
    <option value="October 22 2017">22/10/17</option>
    <option value="October 25 2017">25/10/17</option>
    <option value="October 28 2017">28/10/17</option>
    <option value="October 29 2017">29/10/17</option>
    <option value="October 31 2017">31/10/17</option>

    <option value="November 1 2017">1/11/17</option>
    <option value="November 4 2017">4/11/17</option>
    <option value="November 5 2017">5/11/17</option>
    <option value="November 7 2017">7/11/17</option>
    <option value="November 8 2017">8/11/17</option>
    <option value="November 11 2017">11/11/17</option>
    <option value="November 12 2017">12/11/17</option>
    <option value="November 15 2017">15/11/17</option>
    <option value="November 18 2017">18/11/17</option>
    <option value="November 19 2017">19/11/17</option>
    <option value="November 22 2017">22/11/17</option>
    <option value="November 25 2017">25/11/17</option>
    <option value="November 26 2017">26/11/17</option>
    <option value="November 28 2017">28/11/17</option>
    <option value="November 29 2017">29/11/17</option>

    <option value="December 2 2017">2/12/17</option>
    <option value="December 3 2017">3/12/17</option>
    <option value="December 5 2017">5/12/17</option>
    <option value="December 6 2017">6/12/17</option>
    <option value="December 9 2017">9/12/17</option>
    <option value="December 10 2017">10/12/17</option>
    <option value="December 13 2017">13/12/17</option>
    <option value="December 16 2017">16/12/17</option>
    <option value="December 17 2017">17/12/17</option>
    <option value="December 20 2017">20/12/17</option>
    <option value="December 23 2017">23/12/17</option>
    <option value="December 24 2017">24/12/17</option>
    <option value="December 26 2017">26/12/17</option>
    <option value="December 27 2017">27/12/17</option>
    <option value="December 30 2017">30/12/17</option>
    <option value="December 31 2017">31/12/17</option>
 </select>
    &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="search" value="Search"></p>
</form>

<center>
<?php
$datesrc = $_POST["searchdate"];
$link = mysqli_connect("localhost", "root", "", "wordpresstest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$usrnm = $_POST['usrnm'];

if(!empty($datesrc)){
$query = "SELECT * FROM bettest WHERE userDt = '$usrnm' AND betDate = '$datesrc'";
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
            <h2>$datesrc</h2>

                <th>no.</th>
                <th>用户名</th>
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
                <th>类型</th>
                <th>电话号码</th>
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
}
?>
</center>
</body>

<footer>
</footer>