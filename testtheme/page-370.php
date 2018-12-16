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
    }else{
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



  <title>下线名单</title>
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
if($sta !== ACTIVE){
    echo '<script>alert("您的账户处于不活跃状态。"); location.replace(document.referrer);</script>';
}
    if($usrtype == D){ ?>

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
    <li><a href="https://www.ltttry8899.com/dealerpercentage/" style="color: #ffffff">代理</a></li>
    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="" style="color: #ffffff">下线
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
    <li><a href="https://www.ltttry8899.com/5-6-sub-dealer-profile/">报告</a></li>
    <li><a href="https://www.ltttry8899.com/subdelrgs/">报名表</a></li>
    <li><a href="https://www.ltttry8899.com/subdealerprofiel/">更改佣金</a></li>
    </ul>
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
input[type=number]{
    width: 100px;
}

table{
    margin-left: 20px;
}
</style>






	<body link="grey">
	<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>下注</title>

		<h1>下线名单</h1>


<?php
$link = mysqli_connect("localhost", "root", "", "wordpresstest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT * FROM users WHERE dealerName = '$user'";
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
                <th>no.</th>
                <th>用户名</th>
                <th>登录时间</th>
                <th>登出时间</th>
                <th>名称</th>
                <th>电话号码</th>
                <th>银行账号</th>
                <th>银行名字</th>
                <th>生日日期</th>
                <th>上线名称</th>
            </tr>";

$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>".$count."</td>
        <td><a href='https://www.ltttry8899.com/subdeaslbet/?usrnm=".$row["username"]."'>".$row["username"]."</a></td>
        <td>".$row["now"]."</td>
        <td>".$row["last"]."</td>
        <td>".$row["nameDt"]."</td>
        <td>".$row["phDt"]."</td>
        <td>".$row["bkacDt"]."</td>
        <td>".$row["bknmDt"]."</td>
        <td>".$row["bthDt"]."</td>
        <td>".$row["subdealerDt"]."</td>
    </tr>";

    $count++;
}
$_GET['usrnm'] = $usrnm;
echo "</table>";
?>
</body>

<footer>
</footer>
</html>