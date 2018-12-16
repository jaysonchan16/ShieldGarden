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
    if(isset($_SESSION['userlog'])) {
        echo $_SESSION['userlog'];
        $user = $_SESSION['userlog'];
    }else {
        header('Location: https://www.ltttry8899.com/');
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



  <title>下线</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
 $link = mysqli_connect("localhost", "root", "", "wordpresstest");
 $query = "SELECT * FROM users WHERE username = '$user'";
 $result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {

    $usrtype = $row["userType"];
    $sta = $row["status"];
}
                if($usrtype == S){
?>        
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="https://www.ltttry8899.com/bet/" style="color: #ffffff"><img src="https://ltttry8899.com/wp-content/uploads/2017/05/smllogo-e1495965045838.png" width="40" height="40" style="margin-top:-10px"/></a>
    </div>
    <ul class="nav navbar-nav">
    <li><a href="https://www.ltttry8899.com/bet/" style="color: #ffffff">下注</a></li>
    <li><a href="https://www.ltttry8899.com/4dresult" style="color: #ffffff">4D 成绩</a></li>
    <li><a href="https://www.ltttry8899.com/clientresult/" style="color: #ffffff">用户成绩</a></li>
    <li><a href="https://www.ltttry8899.com/clientsearch/" style="color: #ffffff">下注记录</a></li>
    <li><a href="https://www.ltttry8899.com/subdealer/" style="color: #ffffff">下线</a></li>
    <li><a href="https://www.ltttry8899.com/guide/" style="color: #ffffff">档文</a></li>
    <li><a href="https://www.ltttry8899.com/logout/" style="color: #ffffff"><span class="glyphicon glyphicon-log-in"></span> 登出</a></li>
    </div>
    </nav>
 		
	<?php } else {
        header('Location: https://www.ltttry8899.com/');
    } ?>

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

input[id="clr"] {
    background-color: #dcdcdc;
}
input[id="phNo"]{
	background-color: #dcdcdc;
}
input {
    border-style: none;
}
td {
    text-align: center;
}
</style>






	<body link="grey">
	<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 


<?php
$link = mysqli_connect("localhost", "root", "", "wordpresstest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$query = "SELECT * FROM dealer WHERE dealerprDt = '$user'";
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
            <h2>百分率</h2>
                <th>Dealer</th>
                <th>大 (%)</th>
                <th>小 (%)</th>
                <th>头奖 (%)</th>
                <th>二奖 (%)</th>
                <th>三奖 (%)</th>
                <th>特别奖(%)</th>
                <th>安慰奖(%)</th>
                <th>三个字(%)</th>
                <th>两个字(%)</th>
            </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>" . $row["dealerprDt"] . "</td>
        <td>" . $row["bigDt"] . "</td>
        <td>" . $row["smlDt"] . "</td>
        <td>" . $row["saDt"] . " </td>
        <td>" . $row["sbDt"] . " </td>
        <td>" . $row["scDt"] . " </td>
        <td>" . $row["sdDt"] . " </td>
        <td>" . $row["seDt"] . " </td>
        <td>" . $row["a0Dt"] . " </td>
        <td>" . $row["sfDt"] . " </td>
    </tr>";

}
echo "</table>";
?>

	</body>

<footer>
</footer>
</html>
