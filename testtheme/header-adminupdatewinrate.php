<!DOCTYPE html>  
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="<?php bloginfo('template_directory');?>/image/png" sizes="16x16" href="<?php bloginfo('template_directory');?>/plugins/images/favicon.png">

    <title>Win Rate</title>
<!-- Bootstrap Core CSS -->
<link href="<?php bloginfo('template_directory');?>/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Menu CSS -->
<link href="<?php bloginfo('template_directory');?>/plugins/bower_components/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_directory');?>/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
<!-- toast CSS -->
<link href="<?php bloginfo('template_directory');?>/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
<!-- morris CSS -->
<link href="<?php bloginfo('template_directory');?>/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
<!-- animation CSS -->
<link href="<?php bloginfo('template_directory');?>/css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="<?php bloginfo('template_directory');?>/css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="<?php bloginfo('template_directory');?>/css/colors/megna.css" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-19175540-9', 'auto');
  ga('send', 'pageview');

</script>
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
<style>
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

input.tp1num {
    border-style: 1px solid;
    text-align: center;
    font-size: 30px;
    width: 150px;
    margin-left: 28px;
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

table.ex1{
  border-collapse: separate;
  border-spacing: 10px;
  border-style: groove;
}

.borderblack{
    border-top:2px black solid;
    border-left: 2px black solid;
    border-right: 2px black solid;
    border-bottom: 2px black solid;
}
</style>

<?php
$conn = mysqli_connect("localhost", "root", "", "user");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT * FROM winrate";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $FirstPrizeBig = $row['FirstPrizeBig'];
    $FirstPrizeSmall = $row['FirstPrizeSmall'];
    $FirstPrize = $row['FirstPrize'];
    $Three = $row['Three'];
    $Two = $row['Two'];

    $SecondPrizeBig = $row['SecondPrizeBig'];
    $SecondPrizeSmall = $row['SecondPrizeSmall'];
    $SecondPrize = $row['SecondPrize'];

    $ThirdPrizeBig = $row['ThirdPrizeBig'];
    $ThirdPrizeSmall = $row['ThirdPrizeSmall'];
    $ThirdPrize = $row['ThirdPrize'];

    $SpecialPrizeBig = $row['SpecialPrizeBig'];
    $SpecialPrize = $row['SpecialPrize'];

    $ConsolationPrizeBig = $row['ConsolationPrizeBig'];
    $ConsolationPrize = $row['ConsolationPrize'];
}
		
if(isset($_POST['update']))
{
	$FirstPrizeBig   = strip_tags($_POST['FirstPrizeBig']);
	$FirstPrizeSmall   = strip_tags($_POST['FirstPrizeSmall']);
	$FirstPrize   = strip_tags($_POST['FirstPrize']);
	$Three   = strip_tags($_POST['Three']);
	$Two   = strip_tags($_POST['Two']);
	$SecondPrizeBig   = strip_tags($_POST['SecondPrizeBig']);
	$SecondPrizeSmall   = strip_tags($_POST['SecondPrizeSmall']);
	$SecondPrize   = strip_tags($_POST['SecondPrize']);
	$ThirdPrizeBig   = strip_tags($_POST['ThirdPrizeBig']);
	$ThirdPrizeSmall   = strip_tags($_POST['ThirdPrizeSmall']);
	$ThirdPrize   = strip_tags($_POST['ThirdPrize']);
	$SpecialPrizeBig   = strip_tags($_POST['SpecialPrizeBig']);
	$SpecialPrize   = strip_tags($_POST['SpecialPrize']);
	$ConsolationPrizeBig   = strip_tags($_POST['ConsolationPrizeBig']);
	$ConsolationPrize   = strip_tags($_POST['ConsolationPrize']);

	$FirstPrizeBig=$conn->real_escape_string($FirstPrizeBig);
	$FirstPrizeSmall=$conn->real_escape_string($FirstPrizeSmall);
	$FirstPrize=$conn->real_escape_string($FirstPrize);
	$Three=$conn->real_escape_string($Three);
	$Two=$conn->real_escape_string($Two);
	$SecondPrizeBig=$conn->real_escape_string($SecondPrizeBig);
	$SecondPrizeSmall=$conn->real_escape_string($SecondPrizeSmall);
	$SecondPrize=$conn->real_escape_string($SecondPrize);
	$ThirdPrizeBig=$conn->real_escape_string($ThirdPrizeBig);
	$ThirdPrizeSmall=$conn->real_escape_string($ThirdPrizeSmall);
	$ThirdPrize=$conn->real_escape_string($ThirdPrize);
	$SpecialPrizeBig=$conn->real_escape_string($SpecialPrizeBig);
	$SpecialPrize=$conn->real_escape_string($SpecialPrize);
	$ConsolationPrizeBig=$conn->real_escape_string($ConsolationPrizeBig);
	$ConsolationPrize=$conn->real_escape_string($ConsolationPrize);

	$query = "UPDATE winrate SET FirstPrizeBig = '$FirstPrizeBig', FirstPrizeSmall = '$FirstPrizeSmall', FirstPrize = '$FirstPrize', Three = '$Three', Two = '$Two', SecondPrizeBig = '$SecondPrizeBig', SecondPrizeSmall = '$SecondPrizeSmall', SecondPrize = '$SecondPrize',ThirdPrizeBig = '$ThirdPrizeBig', ThirdPrizeSmall = '$ThirdPrizeSmall', ThirdPrize = '$ThirdPrize', SpecialPrizeBig = '$SpecialPrizeBig', SpecialPrize = '$SpecialPrize', ConsolationPrizeBig = '$ConsolationPrizeBig', ConsolationPrize = '$ConsolationPrize'";
	   	if (mysqli_query($conn,$query)) {
	   		echo '<script>alert("Updated."); location.replace(document.referrer);</script>';
	   	}
}
 
?>

</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
      <div class="top-left-part"><a class="logo" href="index.html"><b><img src="https://ltttry8899.com/wp-content/uploads/2017/05/smllogo-e1495965045838.png" style="width:50px; height:50px;" alt="home" /></b></a></div>
      <ul class="nav navbar-top-links navbar-right pull-right">      
        <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">欢迎,  <img src="<?php bloginfo('template_directory');?>/img/default-picture.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">
  
  </b> </a>
          <ul class="dropdown-menu dropdown-user animated flipInY">
            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
            <li>Language
        <select id="lang">
        <option value="eng">English</option>
        <option value="ch" selected="selected">Chinese</option>
        </select><br/><br/><span id="clock"></span>
        </li>
          <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
      </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
  </nav>
 <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
      <ul class="nav" id="side-menu">
        <li class="sidebar-search hidden-sm hidden-md hidden-lg">
          <!-- input-group -->
          <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
          <!-- /input-group -->
        </li>
        <li> <a href="https://www.ltttry8899.com/admin-enter-result/" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Submit Result<span class="fa arrow"></span> </span></a>
        </li>
<li> <a href="https://www.ltttry8899.com/admin-4d-results/" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">4D Result<span class="fa arrow"></span> </span></a>
        </li>
        <li><a href="#" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Profile<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li><a href="https://www.ltttry8899.com/admin-4d-results/">User Profile</a></li>
            <li><a href="https://www.ltttry8899.com/admin-dealer-profile/" class="active">Dealer Profile</a></li>
           </ul>
        </li>
<li> <a href="https://www.ltttry8899.com/admin-user-registration/" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="/"></i> <span class="hide-menu">Registration<span class="fa arrow"></span> </span></a>
        </li>
        <li> <a href="#" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Betting Report<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li><a href="form-basic.html">Win List</a></li>
            <li><a href="form-layout.html">Report</a></li>
          </ul>
        </li>
        <li> <a href="#" class="waves-effect"><i data-icon="O" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Limit<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li><a href="https://www.ltttry8899.com/admin-bet-no-limit/">Bet No. Limit</a></li>
             <li><a href="https://www.ltttry8899.com/admin-user-limit-changes/">User Limit</a></li>
            <li><a href="https://www.ltttry8899.com/admin-user-payment/">Payment</a></li>
          </ul>
        </li>
        <li> <a href="https://www.ltttry8899.com/admin-update-winrate/" class="waves-effect active"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Win Rate<span class="fa arrow"></span></span></a>
        </li>
</ul>
    </div>
  </div>

<div id="page-wrapper">
  <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Change Rate</h4>
            </div>
        </div>
        <center>
        <img src="https://www.ltttry8899.com/wp-content/uploads/2017/06/webwxgetmsgimg-e1497438989695.jpg">
        </center>
        <br>
        <br>

        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                <center>
                    <form action="" method="post">
                        <table class="table-striped">
                            <thead>
                                <tr>
                                    <th class="borderblack" style="text-align: center;" colspan="8">4D</th>
                                    <th class="borderblack" style="text-align: center;" colspan="2">3D</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr id="tr-id-1" class="tr-class-1">
                                      <td id="td-id-1" class="td-class-1 borderblack"></td>
                                        <td class="borderblack" bgcolor="#00FFFF">大</td>
                                        <td class="borderblack" bgcolor="#00FFFF">小</td>
                                        <td class="borderblack" bgcolor="#00FFFF">头奖</td>
                                        <td class="borderblack" bgcolor="#00FFFF">二奖</td>
                                        <td class="borderblack" bgcolor="#00FFFF">三奖</td>
                                        <td class="borderblack" bgcolor="#00FFFF">特别奖</td>
                                        <td class="borderblack" bgcolor="#00FFFF">安慰奖</td>
                                        <td class="borderblack" bgcolor="#00FFFF">三个字</td>
                                        <td class="borderblack" bgcolor="#00FFFF">两个字</td>
                                    </tr>
                                   <tr id="tr-id-2" class="tr-class-2">
                                    <td class="borderblack" id="td-id-2" class="td-class-2 borderblack">头奖</td>
                                    <td class="borderblack"><input type="text" name="FirstPrizeBig" size="10" value="<?php echo $FirstPrizeBig; ?>"></td>
                                    <td class="borderblack"><input type="text" name="FirstPrizeSmall" size="10" value="<?php echo $FirstPrizeSmall; ?>"></td>
                                    <td class="borderblack"><input type="text" name="FirstPrize" size="10" value="<?php echo $FirstPrize; ?>"></td>
                                    <td class="borderblack"><input type="text" size="10" readonly></td>
                                    <td class="borderblack"><input type="text" size="10" readonly></td>
                                    <td class="borderblack"><input type="text" size="10" readonly></td>
                                    <td class="borderblack"><input type="text" size="10" readonly></td>
                                    <td class="borderblack"><input type="text" name="Three" size="10" value="<?php echo $Three; ?>"></td>
                                    <td class="borderblack"><input type="text" name="Two" size="10" value="<?php echo $Two; ?>"></td>
                                </tr>
                                    <tr id="tr-id-3" class="tr-class-3">
                                        <td id="td-id-3" class="td-class-3 borderblack">二奖</td>
                                        <td class="borderblack"><input type="text" name="SecondPrizeBig" size="10" value="<?php echo $SecondPrizeBig; ?>"></td>
                                        <td class="borderblack"><input type="text" name="SecondPrizeSmall" size="10" value="<?php echo $SecondPrizeSmall; ?>"></td>
                                        <td class="borderblack"><input type="text" size="10" readonly></td>
                                        <td class="borderblack"><input type="text" name="SecondPrize" size="10" value="<?php echo $SecondPrize; ?>"></td>
                                        <td class="borderblack"><input type="text" size="10" readonly></td>
                                        <td class="borderblack"><input type="text" size="10" readonly></td>
                                        <td class="borderblack"><input type="text" size="10" readonly></td>
                                        <td class="borderblack"><input type="text" size="10" readonly></td>
                                        <td class="borderblack"><input type="text" size="10" readonly></td>
                                    </tr>
                                    <tr id="tr-id-4" class="tr-class-4">
                                            <td id="td-id-4" class="td-class-4 borderblack">三奖</td>
                                            <td class="borderblack"><input type="text" name="ThirdPrizeBig" size="10" value="<?php echo $ThirdPrizeBig; ?>"></td>
                                            <td class="borderblack"><input type="text" name="ThirdPrizeSmall" size="10" value="<?php echo $ThirdPrizeSmall; ?>"></td>
                                            <td class="borderblack"><input type="text" size="10" readonly></td>
                                            <td class="borderblack"><input type="text" size="10" readonly></td>
                                            <td class="borderblack"><input type="text" name="ThirdPrize" size="10" value="<?php echo $ThirdPrize; ?>"></td>
                                            <td class="borderblack"><input type="text" size="10" readonly></td>
                                            <td class="borderblack"><input type="text" size="10" readonly></td>
                                            <td class="borderblack"><input type="text" size="10" readonly></td>
                                            <td class="borderblack"><input type="text" size="10" readonly></td>
                                    </tr>
                                    <tr id="tr-id-5" class="tr-class-5">
                                        <td id="td-id-5" class="td-class-5 borderblack">特别奖</td>
                                            <td class="borderblack"><input type="text" name="SpecialPrizeBig" size="10" value="<?php echo $SpecialPrizeBig; ?>"></td>
                                            <td class="borderblack"><input type="text" size="10" readonly></td>
                                            <td class="borderblack"><input type="text" size="10" readonly></td>
                                            <td class="borderblack"><input type="text" size="10" readonly></td>
                                            <td class="borderblack"><input type="text" size="10" readonly></td>
                                            <td class="borderblack"><input type="text" name="SpecialPrize" size="10" value="<?php echo $SpecialPrize; ?>"></td>
                                            <td class="borderblack"><input type="text" size="10" readonly></td>
                                            <td class="borderblack"><input type="text" size="10" readonly></td>
                                            <td class="borderblack"><input type="text" size="10" readonly></td>
                                        </tr>
                                      <tr id="tr-id-6" class="tr-class-5">
                                        <td id="td-id-6" class="td-class-5 borderblack">安慰奖</td>
                                        <td class="borderblack"><input type="text" name="ConsolationPrizeBig" size="10" value="<?php echo $ConsolationPrizeBig; ?>"></td>
                                        <td class="borderblack"><input type="text" size="10" readonly></td>
                                        <td class="borderblack"><input type="text" size="10" readonly></td>
                                        <td class="borderblack"><input type="text" size="10" readonly></td>
                                        <td class="borderblack"><input type="text" size="10" readonly></td>
                                        <td class="borderblack"><input type="text" size="10" readonly></td>
                                        <td class="borderblack"><input type="text" name="ConsolationPrize" size="10" value="<?php echo $ConsolationPrize; ?>"></td>
                                        <td class="borderblack"><input type="text" size="10" readonly></td>
                                        <td class="borderblack"><input type="text" size="10" readonly></td>
                                        </tr>
                                </tbody>
                            </table>
                            <br>
                            <input type="submit" name="update" value="Update">
                        </form>
                        </center>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    