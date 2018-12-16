<?php
    session_start();
    if(isset($_SESSION['adminlog'])) {
     // echo $_SESSION['adminlog'];
    } else {
      header('Location:  http://localhost/wordpress/admin-enter-result/');
    }
    ?>
<!DOCTYPE html>  
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="<?php bloginfo('template_directory');?>/image/png" sizes="16x16" href="<?php bloginfo('template_directory');?>/plugins/images/favicon.png">

  <title>Dealer Profile</title>
<!-- Bootstrap Core CSS -->
<link href="<?php bloginfo('template_directory');?>/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Menu CSS -->
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
</style>

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
        <li> <a href="http://localhost/wordpress/admin-enter-result/" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">Submit Result<span class="fa arrow"></span> </span></a>
        </li>
<li> <a href="http://localhost/wordpress/admin-4d-results/" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu">4D Result<span class="fa arrow"></span> </span></a>
        </li>
        <li><a href="#" class="waves-effect active"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Profile<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li><a href="http://localhost/wordpress/admin-4d-results/">User Profile</a></li>
            <li><a href="http://localhost/wordpress/admin-dealer-profile/" class="active">Dealer Profile</a></li>
           </ul>
        </li>
<li> <a href="http://localhost/wordpress/admin-user-registration/" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="/"></i> <span class="hide-menu">Registration<span class="fa arrow"></span> </span></a>
        </li>
        <li> <a href="#" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Betting Report<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li><a href="form-basic.html">Win List</a></li>
            <li><a href="form-layout.html">Report</a></li>
          </ul>
        </li>
        <li> <a href="#" class="waves-effect"><i data-icon="O" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Limit<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li><a href="http://localhost/wordpress/admin-bet-no-limit/">Bet No. Limit</a></li>
			       <li><a href="http://localhost/wordpress/admin-user-limit-changes/">User Limit</a></li>
            <li><a href="data-table.html">Payment</a></li>
          </ul>
        </li>
 		<li> <a href="http://localhost/wordpress/admin-update-winrate/" class="waves-effect"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Win Rate<span class="fa arrow"></span></span></a>
        </li>
</ul>
    </div>
  </div>

<div id="page-wrapper">
  <div class="container-fluid">
		<div class="row bg-title">
        	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          	<h4 class="page-title">Dealer Profile</h4>
        	</div>
		</div>


  <div class="row">
     <div class="col-sm-12">
        <div class="white-box">
           <div class="table-responsive">
       <?php
$link = mysqli_connect("localhost", "root", "", "user");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT * FROM users WHERE userType = 'D'";
$result = mysqli_query($link, $query);

echo "<table border=1 class='table color-bordered-table info-bordered-table'>
      <thead>
             <tr>
            <h2>Dealer Profile</h2>
                <th>no.</th>
                <th>User Name</th>
                <th>Login Time</th>
                <th>Logout Time</th>
                <th>Name</th>
                <th>Phone No</th>
                <th>Bank No</th>
                <th>Bank Name</th>
            </tr></thead>";
$count = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>".$count."</td>
        <td><a href='http://localhost/wordpress/adchangepercentage/?usrnm=".$row["username"]."'>".$row["username"]."</a></td>
        <td>".$row["now"]."</td>
        <td>".$row["last"]."</td>
        <td>".$row["nameDt"]."</td>
        <td>".$row["phDt"]."</td>
        <td>".$row["bkacDt"]."</td>
        <td>".$row["bknmDt"]."</td>
    </tr>";

    $count++;
}
$_GET['usrnm'] = $usrnm;
echo "</table>";
?>
        </div>
        </div>
        </div>
        </div>

  </div>
  </div>
   <footer class="footer text-center"> 2017 &copy; ltttry8899.com </footer>