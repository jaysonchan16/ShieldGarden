 <?php
    session_start();
    if(isset($_SESSION['adminlog'])) {
     // echo $_SESSION['adminlog'];
    } else {
      header('Location: http://localhost/wordpress/admin-login/');
    }

     $conn=mysqli_connect('localhost','root','','user'); 
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
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
<title>Bet No Limit</title>
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
  border-style: groove;
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
</style>
</head>
<body>
<?php
//$betsrc = current($_POST["betsrch"]);
$link = mysqli_connect("localhost", "root", "", "user");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if(isset($_POST['update']))
{
  $betNLimit = strip_tags($_POST['betNLimit']);

  $betNLimit = $conn->real_escape_string($betNLimit);

  $query = "UPDATE betnolimit SET betLimit = '$betNLimit'";

  if (mysqli_query($conn,$query)) {
   echo '<script type="text/javascript">alert("Updated!");</script>';
   $query = "SELECT * FROM betnolimit WHERE betNo = '$'";
  $result = mysqli_query($link, $query);

  while ($row = mysqli_fetch_assoc($result)) {

          $betno = $row["betNo"];
          $betlimit = $row["masterlimit"];
          $betamt = $row["betAmt"];
  }
  }
  else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
}

/*if(isset($_POST['search']))
{
  $betsrch = strip_tags($_POST['betsrch']);

  $betsrch = $conn->real_escape_string($betsrch);

  $query = "SELECT * FROM betnolimit WHERE betNo = '$betsrch'";

  if (mysqli_query($conn,$query)) {
   echo '<script type="text/javascript">alert("Updated!");</script>';
  }
  else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
}

 $query = "SELECT * FROM betnolimit WHERE betNo = '$'";
  $result = mysqli_query($link, $query);

  while ($row = mysqli_fetch_assoc($result)) {

          $betno = $row["betNo"];
          $betlimit = $row["masterlimit"];
          $betamt = $row["betAmt"];
  }*/
?>
<script type="text/javascript">
$(document).ready(function()
{
  $("#search").click(function(e)
  {
  e.preventDefault();
  var name = $("#selectusr").val();

  $.ajax
  ({
  type:"post",
  url:"<?php bloginfo('template_directory');?>/header-adminstoreuserlimitchanges",
  data:{
  search:'search',
  name:name
  },
  success:function(data, textStatus, jqXHR) {
  // $('#showwhite').show();
  var json_obj = jQuery.parseJSON(data); 
  $("#userupdate").prop('disabled', false);
  //alert(json_obj[1]);
  },
  error: function(jqXHR, exception) {
  if (jqXHR.status === 0) {
  alert('Not connect.\n Verify Network.');
  } else if (jqXHR.status == 404) {
  alert('Requested page not found. [404]');
  } else if (jqXHR.status == 500) {
  alert('Internal Server Error [500].');
  } else if (exception === 'parsererror') {
  alert('Requested JSON parse failed.');
  } else if (exception === 'timeout') {
  alert('Time out error.');
  } else if (exception === 'abort') {
  alert('Ajax request aborted.');
  } else {
  alert('Uncaught Error.\n' + jqXHR.responseText);
  }
  }
  });
});
</script>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
      <div class="top-left-part"><a class="logo" href="index.html"><b><img src="<?php bloginfo('template_directory');?>/wp-content/uploads/2017/05/smllogo-e1495965045838.png" style="width:50px; height:50px;" alt="home" /></b></a></div>
      <ul class="nav navbar-top-links navbar-right pull-right">      
        <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">欢迎,
          <?php
           if(isset($_SESSION['adminlog'])) {
                    echo $_SESSION['adminlog'];
                     $user = $_SESSION['adminlog'];
                   }else{
                      header('Location: https://www.ltttry8899.com/');
                    }
                    ?>
          <img src="<?php bloginfo('template_directory');?>/img/default-picture.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">
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
        <li><a href="#" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Profile<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li><a href="http://localhost/wordpress/admin-user-profile/">User Profile</a></li>
            <li><a href="http://localhost/wordpress/admin-dealer-profile/">Dealer Profile</a></li>
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
        <li> <a href="#" class="waves-effect active"><i data-icon="O" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Limit<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <li><a href="http://localhost/wordpress/admin-bet-no-limit/" class="active">Bet No. Limit</a></li>
			       <li><a href="http://localhost/wordpress/admin-user-limit-changes/">User Limit</a></li>
            <li><a href="http://localhost/wordpress/admin-user-payment/">Payment</a></li>
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
          	<h4 class="page-title">Bet No. Limit</h4>
        	</div>
		</div>
		<div class="row">
		  <div class="col-sm-12">
          <div class="white-box">
			       <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                  <label for="UserName" class="col-sm-3 control-label">All bet No. must not exceed this limit:</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="betNLimit" id="selectusr" placeholder="Please enter the limit."><br><center>
                  <input type="submit" class="btn btn-success waves-effect waves-light m-r-10"  name="select" value="Save"></center>
                </div>
                </div>
             </form>
          </div>
          <div class="col-sm-12">
            <div class="white-box">
              <h2>Set limit to specify Bet No.</h2>   
                <form class="form-horizontal" action="http://localhost/wordpress/admin-find-bet-no-limit/" method="post">
                  <div class="form-group">
                    <label for="betsearch" class="col-sm-3 control-label">Search Bet No.:</label>
                      <div class="col-sm-9">
                        <input id="betsearch" class="form-control" type="number" name="betsrch" id="search" maxlength="4">
                        <input type="submit" class="btn btn-success waves-effect waves-light m-r-10" name="search" value="Search">
                      </div>
                  </div>
                  </form>
                  </div>
                  </div>

                  <div class="col-sm-12">
                   <div class="white-box">
                   <form class="form-horizontal" action="http://localhost/wordpress/6-0-1-insert-limit/" method="post">
                  <div class="form-group">
                    <label for="betn" class="col-sm-3 control-label">Bet No.:</label>
                      <div class="col-sm-9">
                        <input id="betno" class="form-control" type="number" name="betnum" maxlength="4" disabled>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="beta" class="col-sm-3 control-label">Bet Amount:</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="read" value="" disabled>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="bet1" class="col-sm-3 control-label">Bet Limit:</label>
                      <div class="col-sm-9">
                        <input class="form-control" type="text" name="betlim" value="" placeholder="Update" disabled>
                      </div>
                  </div>
                  <center><input type="submit" class="btn btn-success waves-effect waves-light m-r-10" name="update" id="update" value="Save" disabled></center>
                </form>
            </div>
      </div>
   </div>
   </div></div></div>


   <footer class="footer text-center"> 2017 &copy; ltttry8899.com </footer>