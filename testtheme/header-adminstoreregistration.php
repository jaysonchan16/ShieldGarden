<?php
ob_start();
    session_start();
    if(isset($_SESSION['adminlog'])) {
     // echo $_SESSION['adminlog'];
    } else {
      header('Location: http://localhost/wordpress/adltrmin8899/');
    }

$conn=mysqli_connect('localhost','root','','user'); 
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

if(isset($_POST['submit']))
  {
    //$user       = strip_tags($_POST['subdealer']);
    $username   = strip_tags($_POST['username']);
    $password   = strip_tags($_POST['password']);
    $retypepassword   = strip_tags($_POST['retypepassword']);
    $name       = strip_tags($_POST['FullName']);
    $phonefront = strip_tags($_POST['phoneFront']);
    $phoneend   = strip_tags($_POST['phoneEnd']);
    $limit      = strip_tags($_POST['limit']);
    $bankacc    = strip_tags($_POST['bankacc']);
    $bankname   = strip_tags($_POST['bankname']);
    $stat       = strip_tags($_POST['stat']);
    $dealer = isset($_POST['dealer']) ? $_POST['dealer'] : '';

    //$user=$conn->real_escape_string($user);
    $username=$conn->real_escape_string($username);
    $password=$conn->real_escape_string($password);
    $retypepassword= $conn->real_escape_string($retypepassword);
    $name=$conn->real_escape_string($name);
    $phonefront=$conn->real_escape_string($phonefront);
    $phoneend=$conn->real_escape_string($phoneend);
    $limit=$conn->real_escape_string($limit);
    $bankacc=$conn->real_escape_string($bankacc);
    $bankname=$conn->real_escape_string($bankname);
    $stat=$conn->real_escape_string($stat);
    $hashed_password = md5($password);


    if($dealer == "dealer")
    {
      $typeuser = "Dealer";
    }
    else
    {
      $typeuser = "Customer";
    }

    if($password == $retypepassword){
        $query = "INSERT INTO account (user,Username,Password,FullName,PhoneFront,PhoneEnd, Limition,BankAcc,BankName,State,Type,GetCurrentTime,LoginTime) VALUES('admin','$username','$hashed_password','$name','$phonefront','$phoneend','$limit','$bankacc','$bankname','$stat','$typeuser',now(),NULL)";
      
        if (mysqli_query($conn,$query)) {
          echo '<script type="text/javascript">alert("Registered");</script>'; 
        //  header('Location: http://localhost/wordpress/admin-user-registration/');   
          }
          else
          {
             echo 'Error: ', mysqli_error($conn);
          }
        }
    }


    if(isset($_POST['select']))
    {
      $selectuser=strip_tags($_POST['selectuser']);
      $selectuser=$conn->real_escape_string($selectuser);
      $query = "SELECT username FROM account WHERE username = '$selectuser' and user='admin'";
      $result = mysqli_query($conn, $query);
  

      if (mysqli_num_rows($result) == 1) 
      {
        while ($row = mysqli_fetch_array ($result)){
       // echo '<script type="text/javascript">alert("Checked");</script>'; 
      // header('Location: http://localhost/wordpress/admin-store-registration-process/');   
        }
      }
      else
      {
        echo '<script type="text/javascript">alert("Cannot validate this username");</script>'; 
        header('Location: http://localhost/wordpress/admin-user-registration/');  
      }

    }

    if(isset($_POST['update']))
    { 
        $userupdate=strip_tags($_POST['userupdate']);
        $passupdate=strip_tags($_POST['passupdate']);
        $phoneFront=strip_tags($_POST['phoneFront']);
        $phoneEnd=strip_tags($_POST['phoneEnd']);
        $bankaccup=strip_tags($_POST['bankaccup']);
        $banknameup=strip_tags($_POST['banknameup']);
        $statup=strip_tags($_POST['statup']);
        $confirmpassupdate=strip_tags($_POST['confirmpassupdate']);

        $userupdate=$conn->real_escape_string($userupdate);
        $passupdate=$conn->real_escape_string($passupdate);
        $phoneFront=$conn->real_escape_string($phoneFront);
        $phoneEnd=$conn->real_escape_string($phoneEnd);
        $bankaccup=$conn->real_escape_string($bankaccup);
        $banknameup=$conn->real_escape_string($banknameup);
        $statup=$conn->real_escape_string($statup);
        $confirmpassupdate=$conn->real_escape_string($confirmpassupdate);

        $hashed_passwordupdate = md5($passupdate);
        //$OldPassword="Select Password from account where user='$user' AND Username='$userupdate'";

      if($passupdate == "")
      {
        if($passupdate == $confirmpassupdate)
        {
        // update data in mysql database 
            $query="UPDATE account SET PhoneFront='$phoneFront', PhoneEnd='$phoneEnd', BankAcc='$bankaccup', BankName='$banknameup', State='$statup' WHERE user='admin' AND Username='$userupdate'";

            if (mysqli_query($conn,$query)) {
             echo '<script type="text/javascript">alert("Update Successfully");</script>'; 
             //header('Location: http://localhost/wordpress/admin-user-registration/');
            }
            else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            }
          }
          else{
            echo '<script type="text/javascript">Passwords are not matching("Cannot validate this username");</script>'; 
          }
      }
      else if($passupdate != "")
      {
        $query="UPDATE account SET Password='$hashed_passwordupdate', PhoneFront='$phoneFront', PhoneEnd='$phoneEnd', BankAcc='$bankaccup', BankName='$banknameup', State='$statup' WHERE user='admin' AND Username='$userupdate'";

        if (mysqli_query($conn,$query)) {
           echo '<script type="text/javascript">alert("Update Successfully");</script>'; 
         //header('Location: http://localhost/wordpress/admin-user-registration/');
        }
        else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
      }

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
<title>Registration</title>
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
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
      <!--<div class="top-left-part"><a class="logo" href="index.html"><b><img src="https://ltttry8899.com/wp-content/uploads/2017/05/smllogo-e1495965045838.png" style="width:50px; height:50px;" alt="home" /></b></a></div>-->
      <ul class="nav navbar-top-links navbar-right pull-right">      
        <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">欢迎,  <img src="<?php bloginfo('template_directory');?>/img/default-picture.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">
 </b> </a>
          <ul class="dropdown-menu dropdown-user animated flipInY">
            <li><a href="http://localhost/wordpress/admin-logout/"><i class="fa fa-power-off"></i> Logout</a></li>
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
<li> <a href="http://localhost/wordpress/admin-store-registration/" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="/"></i> <span class="hide-menu">Registration<span class="fa arrow"></span> </span></a>
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
            <h4 class="page-title">Registration</h4>
          </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
          <div class="white-box">
          <h3 class="box-title m-b-0">Register</h3>
            <form action="http://localhost/wordpress/admin-store-registration/" class="form-horizontal" method="post">
             <div class="form-group">
              <label for="username" class="col-sm-3 control-label">User Name:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputRegister" name="username" placeholder="Enter username here">
                </div>
              </div>
              <div class="form-group">
              <label for="Password" class="col-sm-3 control-label">Password:</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Enter password here">
                </div>
              </div>
              <div class="form-group">
              <label for="Password" class="col-sm-3 control-label">Retype Password:</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="inputPassword" name="retypepassword" placeholder="Enter password here">
                </div>
              </div>
              <div class="form-group">
              <label for="Name" class="col-sm-3 control-label">Name:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputName" name="FullName" placeholder="Enter real name here">
                </div>
              </div>
              <div class="form-group">
              <label for="Phone" class="col-sm-3 control-label">Phone:</label>
                <div class="col-sm-5">
                  <label class="control-label col-sm-6" id="phone" for="phone">
                    <select class="form-control" name="phoneFront">
                      <option name="eightysix" value="+86">+86</option>
                      <option name="sixty" value="+60" selected="selected">+60</option>  
                    </select></label>
                <input type="text" style="border-radius: 4px; margin-top: 7px;" class="control-label col-sm-6" name="phoneEnd" placeholder="Enter phone no here">    
              </div>
            </div>
             <div class="form-group">
              <label for="Limit" class="col-sm-3 control-label">Limit:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputName" name="limit" value='5000'>
                </div>
              </div> 
              <center><h3 style="color: red;">(Optional)</h3></center>
              <div class="form-group">
              <label for="Bank acc" class="col-sm-3 control-label">Bank acc:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputBankAcc" name="bankacc" placeholder="Enter bank account here">
                </div>
              </div> 
              <div class="form-group">
              <label for="Bank Name" class="col-sm-3 control-label">Bank Name:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputBankName" name="bankname" placeholder="Enter bank's name here">
                </div>
              </div> 
              <div class="form-group">
              <label id="state" for="Status" class="col-sm-3 control-label">Status:</label>
                <div class="col-sm-9">
                  <select class="form-control" name="stat">
                     <option value="ACTIVE" name="active" selected="selected">ACTIVE</option>
                     <option value="SUSPEND" name="suspend">SUSPEND</option>
                     <option value="CLOSE" name="close">CLOSE</option>
                  </select>
                </div>
              </div> 
              <div class="form-group">
              <label for="Dealer:" class="col-sm-3 control-label">Dealer: (Please check here) => </label>
                <div class="col-sm-9">
                  <div class="checkbox checkbox-success">
                      <input id="checkbox1" name="dealer" type="checkbox"></div>
                </div>
              </div> 
              <center><input class="btn btn-success waves-effect waves-light m-r-10" type="submit" name="submit" id="submit" value="Register"></center>
            </form>
               </div>
           </div>



<?php
//$slcusr = current($_POST["selectusr"]);
$link = mysqli_connect("localhost", "root", "", "user");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/*$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {

        $usr = $row["username"];
        $nme = $row["nameDt"];
        $phn = $row["phDt"];
        $bkc = $row["bkacDt"];
        $bkn = $row["bknmDt"];
        $sta = $row["status"];
}

if($sta == ACTIVE){
    $light = '7FFF00';
    $dispsta = Active;
} elseif($sta == SUSPEND){
    $light = 'FFD700';
    $dispsta = Suspend;
} elseif($sta == CLOSE){
    $light = 'FF0000';
    $dispsta = Close;
}*/
?>

          <div class="col-md-6">
          <div class="white-box">
          <h3 class="box-title m-b-0" style="color: red;">Maintenance</h3>
            <form action="" class="form-horizontal" method="post">
             <div class="form-group">
              <label for="username" class="col-sm-3 control-label">User Name:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="selectusr" value="<?php echo $selectuser ?>" name="selectuser" placeholder="Please select username" disabled>
                </div>
              </div>
              <div class="form-group m-b-0">
                <div class="col-sm-offset-3 col-sm-9">
                  <input type="submit" name="select" id="select" class="btn btn-info waves-effect waves-light m-t-10" value="选择" disabled />
                </div>
              </div>
              </form>
              <br>
              </div>

              <div class="white-box">
              <form class="form-horizontal" action="http://localhost/wordpress/admin-store-registration/" method="post">
              <div class="form-group">
              <label for="username" class="col-sm-3 control-label">User Name:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="userupdate" id="userupdate" placeholder="Enter User Name" value="<?php echo $selectuser ?>" readonly>
                </div>
              </div>
              <h2>Update information</h2>
              <h3 class="box-title m-b-0" style="color: red;">(Leave password blank if not update!)</h3>
              <div class="form-group">
              <label for="Password" class="col-sm-3 control-label">Password:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="passupdate" id="passupdate" placeholder="Update">
                </div>
              </div>
               <div class="form-group">
              <label for="Password" class="col-sm-3 control-label">Confirm Password:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="confirmpassupdate" id="passupdate" placeholder="Update">
                </div>
              </div>
              <div class="form-group">
              <label for="Phone" class="col-sm-3 control-label">Phone No:</label>
                <div class="col-sm-5">
                  <label class="control-label col-sm-6" id="phone" for="phone">
                    <select class="form-control" name="phoneFront">
                      <option name="eightysix" value="+86">+86</option>
                      <option name="sixty" value="+60" selected="selected">+60</option>  
                    </select></label>
                    <input type="text" style="border-radius: 4px; margin-top: 7px;" class="control-label col-sm-6" name="phoneEnd" placeholder="" value="">     
              </div>
            </div>
            <h3 style="color: red;">(Optional)</h3>
             <div class="form-group">
              <label for="Bank acc" class="col-sm-3 control-label">Bank Acc:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputBankAcc" name="bankaccup" placeholder="Update" value="">
                </div>
              </div> 
              <div class="form-group">
              <label for="Bank Name" class="col-sm-3 control-label">Bank Name:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputBankName" name="banknameup" placeholder="Update" value="">
                </div>
              </div> 
             <div class="form-group">
                <label class="control-label col-sm-3" for="Status">Status:</label>
                <div class="col-sm-9">
                  <select class="form-control" name="statup">
                    <option name="active" value="ACTIVE" selected="selected">ACTIVE</option>
                    <option name="suspend" value="SUSPEND">SUSPEND</option>
                    <option name="close" value="CLOSE">CLOSE</option>
                  </select>     
                </div>
              </div>
             
              <center><input class="btn btn-success waves-effect waves-light m-r-10" type="submit" name="update" id="update" value="Save"></center>
            </form>
               </div>
           </div> 


        </div>

      </div>
    </div>  
  

<div class="row">
<center><input type="submit" name='submit' id="btn" value="Submit" class="login_button" /></center>
</div>
  
  </div>

   <footer class="footer text-center"> 2017 &copy; ltttry8899.com </footer>