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



  <title>Dealer Percentage</title>
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
	color: red;
}
h5{
	margin-left: 50px;
}

input[id="clr"] {
    background-color: #dcdcdc;
}
input[id="phNo"]{
	margin-left: 50px;
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
    <center>
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

$usrnm = $_GET['usrnm'];
$query = "SELECT * FROM dealer WHERE dealerprDt = '$usrnm'";
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
    $dealernm = $row["dealerprDt"];
    $bgd = $row["bigDt"];
    $smd = $row["smlDt"];
    $sad = $row["saDt"];
    $sbd = $row["sbDt"];
    $scd = $row["scDt"];
    $sdd = $row["sdDt"];
    $sed = $row["seDt"];
    $a0d = $row["a0Dt"];
    $sfd = $row["sfDt"];

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

<?php
if(!empty($dealernm)){ ?>

        <form action="https://www.ltttry8899.com/dealupdatetodata/" method="post">
        <table border="1">
        <tr>
        <h3>Update</h3>
        <td>大 (%)</td>
        <td>小 (%)</td>
        <td>头奖 (%)</td>
        <td>二奖 (%)</td>
        <td>三奖 (%)</td>
        <td>特别奖(%)</td>
        <td>安慰奖(%)</td>
        <td>三个字(%)</td>
        <td>两个字(%)</td>
        </tr>

        <tr>
        <td><input type="text" name="bigup[]" value="<?php echo $bgd ?>"></td>
        <td><input type="text" name="smlup[]" value="<?php echo $smd ?>"></td>
        <td><input type="text" name="saup[]" value="<?php echo $sad ?>"></td>
        <td><input type="text" name="sbup[]" value="<?php echo $sbd ?>"></td>
        <td><input type="text" name="scup[]" value="<?php echo $scd ?>"></td>
        <td><input type="text" name="sdup[]" value="<?php echo $sdd ?>"></td>
        <td><input type="text" name="seup[]" value="<?php echo $sed ?>"></td>
        <td><input type="text" name="a0up[]" value="<?php echo $a0d ?>"></td>
        <td><input type="text" name="sfup[]" value="<?php echo $sfd ?>"></td>
        <td><input type="hidden" name="userup[]" value="<?php echo $usrnm; ?>"></td>
        </tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Update">
        </form>

<?php } elseif(empty($dealernm)) { ?>
<br>
<br>
<br>
<br>
        <form action="https://www.ltttry8899.com/insdealerpercent/" method="post">
        <table border="1">
        <tr>
        <h3>Insert</h3>
        <td>大 (%)</td>
        <td>小 (%)</td>
        <td>头奖 (%)</td>
        <td>二奖 (%)</td>
        <td>三奖 (%)</td>
        <td>特别奖(%)</td>
        <td>安慰奖(%)</td>
        <td>三个字(%)</td>
        <td>两个字(%)</td>
        </tr>

        <tr>
        <td><input type="text" name="big[]"></td>
        <td><input type="text" name="sml[]"></td>
        <td><input type="text" name="sa[]"></td>
        <td><input type="text" name="sb[]"></td>
        <td><input type="text" name="sc[]"></td>
        <td><input type="text" name="sd[]"></td>
        <td><input type="text" name="se[]"></td>
        <td><input type="text" name="a0[]"></td>
        <td><input type="text" name="sf[]"></td>
        <td><input type="hidden" name="user[]" value="<?php echo $usrnm; ?>"></td>
        </tr>
        </table>
        <br>
        <input type="submit" name="update" value="Insert">
        </form>
        </center>

        <?php } ?>
</body>


</html>