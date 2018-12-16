  <?php
    session_start();
    if(isset($_SESSION['userlog'])) {
  //      echo $_SESSION['userlog'];
        $user = $_SESSION['userlog'];
    }else{
        header('Location: http://localhost/wordpress/user-bet');
    }
    ?>
<!DOCTYPE HTML>

<html>
    <head>
        <title>下注表</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            var template_dir_js="<?php bloginfo('template_directory');?>";
        </script>
		  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_directory');?>/js/jquery.min.js"></script>
        <script src="<?php bloginfo('template_directory');?>/js/jquery.dropotron.min.js"></script>
        <script src="<?php bloginfo('template_directory');?>/js/jquery.slidertron.min.js"></script>
        <script src="<?php bloginfo('template_directory');?>/js/skel.min.js"></script>
        <script src="<?php bloginfo('template_directory');?>/js/skel-layers.min.js"></script>
        <script src="<?php bloginfo('template_directory');?>/js/init.js"></script>
		<script src="<?php bloginfo('template_directory');?>/js/bootstrap.js"></script>
		<script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('template_directory');?>/js/npm.js"></script>
        <noscript>
            <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/skel.css" />
            <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/style.css" />
            <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/style-desktop.css" />
			<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap.css" />
			<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap-theme.css" />
			<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/style1.css" />
        </noscript>
        <!--[if lte IE 8]><link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/ie/v8.css" /><![endif]-->
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
</style>
<!--<script>
$(document).ready(function(){
    $('#betNo2').click(function()
    {

    });
});
</script>-->
<script type="text/javascript">
function empty(){
    var wed = document.getElementById("wed").checked;
    var sat = document.getElementById("sat").checked;
    var sun = document.getElementById("sun").checked;
    var tue = document.getElementById("tue").checked;
    var phoneNumber = document.getElementById("phNo").value;
    var betNo1 = document.getElementById("betNo1").value;
    var big1 = document.getElementById("big1").value;
    var sml1 = document.getElementById("sml1").value;
    var sa1 = document.getElementById("sa1").value;
    var sb1 = document.getElementById("sb1").value;
    var sc1 = document.getElementById("sc1").value;
    var sd1 = document.getElementById("sd1").value;
    var se1 = document.getElementById("se1").value;
    var a01 = document.getElementById("a01").value;
    var sf1 = document.getElementById("sf1").value;
    var mag2_1 = document.getElementById("mag2_1").checked;
    var pmp2_1 = document.getElementById("pmp2_1").checked;
    var tot2_1 = document.getElementById("tot2_1").checked;

    var betNo2 = document.getElementById("betNo2").value;
    var big2 = document.getElementById("big2").value;
    var sml2 = document.getElementById("sml2").value;
    var sa2 = document.getElementById("sa2").value;
    var sb2 = document.getElementById("sb2").value;
    var sc2 = document.getElementById("sc2").value;
    var sd2 = document.getElementById("sd2").value;
    var se2 = document.getElementById("se2").value;
    var a02 = document.getElementById("a02").value;
    var sf2 = document.getElementById("sf2").value;
    var mag2_2 = document.getElementById("mag2_2").checked;
    var pmp2_2 = document.getElementById("pmp2_2").checked;
    var tot2_2 = document.getElementById("tot2_2").checked;

    var betNo3 = document.getElementById("betNo3").value;
    var big3 = document.getElementById("big3").value;
    var sml3 = document.getElementById("sml3").value;
    var sa3 = document.getElementById("sa3").value;
    var sb3 = document.getElementById("sb3").value;
    var sc3 = document.getElementById("sc3").value;
    var sd3 = document.getElementById("sd3").value;
    var se3 = document.getElementById("se3").value;
    var a03 = document.getElementById("a03").value;
    var sf3 = document.getElementById("sf3").value;
    var mag2_3 = document.getElementById("mag2_3").checked;
    var pmp2_3 = document.getElementById("pmp2_3").checked;
    var tot2_3 = document.getElementById("tot2_3").checked;

    var betNo4 = document.getElementById("betNo4").value;
    var big4 = document.getElementById("big4").value;
    var sml4 = document.getElementById("sml4").value;
    var sa4 = document.getElementById("sa4").value;
    var sb4 = document.getElementById("sb4").value;
    var sc4 = document.getElementById("sc4").value;
    var sd4 = document.getElementById("sd4").value;
    var se4 = document.getElementById("se4").value;
    var a04 = document.getElementById("a04").value;
    var sf4 = document.getElementById("sf4").value;
    var mag2_4 = document.getElementById("mag2_4").checked;
    var pmp2_4 = document.getElementById("pmp2_4").checked;
    var tot2_4 = document.getElementById("tot2_4").checked;

    var betNo5 = document.getElementById("betNo5").value;
    var big5 = document.getElementById("big5").value;
    var sml5 = document.getElementById("sml5").value;
    var sa5 = document.getElementById("sa5").value;
    var sb5 = document.getElementById("sb5").value;
    var sc5 = document.getElementById("sc5").value;
    var sd5 = document.getElementById("sd5").value;
    var se5 = document.getElementById("se5").value;
    var a05 = document.getElementById("a05").value;
    var sf5 = document.getElementById("sf5").value;
    var mag2_5 = document.getElementById("mag2_5").checked;
    var pmp2_5 = document.getElementById("pmp2_5").checked;
    var tot2_5 = document.getElementById("tot2_5").checked;

    var betNo6 = document.getElementById("betNo6").value;
    var big6 = document.getElementById("big6").value;
    var sml6 = document.getElementById("sml6").value;
    var sa6 = document.getElementById("sa6").value;
    var sb6 = document.getElementById("sb6").value;
    var sc6 = document.getElementById("sc6").value;
    var sd6 = document.getElementById("sd6").value;
    var se6 = document.getElementById("se6").value;
    var a06 = document.getElementById("a05").value;
    var sf6 = document.getElementById("sf6").value;
    var mag2_6 = document.getElementById("mag2_6").checked;
    var pmp2_6 = document.getElementById("pmp2_6").checked;
    var tot2_6 = document.getElementById("tot2_6").checked;

    var betNo7 = document.getElementById("betNo7").value;
    var big7 = document.getElementById("big7").value;
    var sml7 = document.getElementById("sml7").value;
    var sa7 = document.getElementById("sa7").value;
    var sb7 = document.getElementById("sb7").value;
    var sc7 = document.getElementById("sc7").value;
    var sd7 = document.getElementById("sd7").value;
    var se7 = document.getElementById("se7").value;
    var a07 = document.getElementById("a07").value;
    var sf7 = document.getElementById("sf7").value;
    var mag2_7 = document.getElementById("mag2_7").checked;
    var pmp2_7 = document.getElementById("pmp2_7").checked;
    var tot2_7 = document.getElementById("tot2_7").checked;

    var betNo8 = document.getElementById("betNo8").value;
    var big8 = document.getElementById("big8").value;
    var sml8 = document.getElementById("sml8").value;
    var sa8 = document.getElementById("sa8").value;
    var sb8 = document.getElementById("sb8").value;
    var sc8 = document.getElementById("sc8").value;
    var sd8 = document.getElementById("sd8").value;
    var se8 = document.getElementById("se8").value;
    var a08 = document.getElementById("a08").value;
    var sf8 = document.getElementById("sf8").value;
    var mag2_8 = document.getElementById("mag2_8").checked;
    var pmp2_8 = document.getElementById("pmp2_8").checked;
    var tot2_8 = document.getElementById("tot2_8").checked;

    var betNo9 = document.getElementById("betNo9").value;
    var big9 = document.getElementById("big9").value;
    var sml9 = document.getElementById("sml9").value;
    var sa9 = document.getElementById("sa9").value;
    var sb9 = document.getElementById("sb9").value;
    var sc9 = document.getElementById("sc9").value;
    var sd9 = document.getElementById("sd9").value;
    var se9 = document.getElementById("se9").value;
    var a09 = document.getElementById("a09").value;
    var sf9 = document.getElementById("sf9").value;
    var mag2_9 = document.getElementById("mag2_9").checked;
    var pmp2_9 = document.getElementById("pmp2_9").checked;
    var tot2_9 = document.getElementById("tot2_9").checked;

    var betNo10 = document.getElementById("betNo10").value;
    var big10 = document.getElementById("big10").value;
    var sml10 = document.getElementById("sml10").value;
    var sa10 = document.getElementById("sa10").value;
    var sb10 = document.getElementById("sb10").value;
    var sc10 = document.getElementById("sc10").value;
    var sd10 = document.getElementById("sd10").value;
    var se10 = document.getElementById("se10").value;
    var a010 = document.getElementById("a010").value;
    var sf10 = document.getElementById("sf10").value;
    var mag2_10 = document.getElementById("mag2_10").checked;
    var pmp2_10 = document.getElementById("pmp2_10").checked;
    var tot2_10 = document.getElementById("tot2_10").checked;

    var betNo11 = document.getElementById("betNo11").value;
    var big11 = document.getElementById("big11").value;
    var sml11 = document.getElementById("sml11").value;
    var sa11 = document.getElementById("sa11").value;
    var sb11 = document.getElementById("sb11").value;
    var sc11 = document.getElementById("sc11").value;
    var sd11 = document.getElementById("sd11").value;
    var se11 = document.getElementById("se11").value;
    var a011 = document.getElementById("a011").value;
    var sf11 = document.getElementById("sf11").value;
    var mag2_11 = document.getElementById("mag2_11").checked;
    var pmp2_11 = document.getElementById("pmp2_11").checked;
    var tot2_11 = document.getElementById("tot2_11").checked;

    var betNo12 = document.getElementById("betNo12").value;
    var big12 = document.getElementById("big12").value;
    var sml12 = document.getElementById("sml12").value;
    var sa12 = document.getElementById("sa12").value;
    var sb12 = document.getElementById("sb12").value;
    var sc12 = document.getElementById("sc12").value;
    var sd12 = document.getElementById("sd12").value;
    var se12 = document.getElementById("se12").value;
    var a012 = document.getElementById("a012").value;
    var sf12 = document.getElementById("sf12").value;
    var mag2_12 = document.getElementById("mag2_12").checked;
    var pmp2_12 = document.getElementById("pmp2_12").checked;
    var tot2_12 = document.getElementById("tot2_12").checked;

    var betNo13 = document.getElementById("betNo13").value;
    var big13 = document.getElementById("big13").value;
    var sml13 = document.getElementById("sml13").value;
    var sa13 = document.getElementById("sa13").value;
    var sb13 = document.getElementById("sb13").value;
    var sc13 = document.getElementById("sc13").value;
    var sd13 = document.getElementById("sd13").value;
    var se13 = document.getElementById("se13").value;
    var a013 = document.getElementById("a013").value;
    var sf13 = document.getElementById("sf13").value;
    var mag2_13 = document.getElementById("mag2_13").checked;
    var pmp2_13 = document.getElementById("pmp2_13").checked;
    var tot2_13 = document.getElementById("tot2_13").checked;

    var betNo14 = document.getElementById("betNo14").value;
    var big14 = document.getElementById("big14").value;
    var sml14 = document.getElementById("sml14").value;
    var sa14 = document.getElementById("sa14").value;
    var sb14 = document.getElementById("sb14").value;
    var sc14 = document.getElementById("sc14").value;
    var sd14 = document.getElementById("sd14").value;
    var se14 = document.getElementById("se14").value;
    var a014 = document.getElementById("a014").value;
    var sf14 = document.getElementById("sf14").value;
    var mag2_14 = document.getElementById("mag2_14").checked;
    var pmp2_14 = document.getElementById("pmp2_14").checked;
    var tot2_14 = document.getElementById("tot2_14").checked;

    var betNo15 = document.getElementById("betNo15").value;
    var big15 = document.getElementById("big15").value;
    var sml15 = document.getElementById("sml15").value;
    var sa15 = document.getElementById("sa15").value;
    var sb15 = document.getElementById("sb15").value;
    var sc15 = document.getElementById("sc15").value;
    var sd15 = document.getElementById("sd15").value;
    var se15 = document.getElementById("se15").value;
    var a015 = document.getElementById("a015").value;
    var sf15 = document.getElementById("sf15").value;
    var mag2_15 = document.getElementById("mag2_15").checked;
    var pmp2_15 = document.getElementById("pmp2_15").checked;
    var tot2_15 = document.getElementById("tot2_15").checked;

    if(wed == false && sat == false && sun == false && sat == false){
        alert("Please tick at least one of the date");
        return false;
    }
    
    if(phoneNumber == ""){
      alert("Please fill up the phone number");
      return false;
    }

    if(betNo1 == ""){
      alert("Please fill up bet number");
      return false;
    }

    if(big1 == "" && sml1 == "" && sa1 == "" && sb1 =="" && sc1 == "" && sd1 == "" && se1 == "" && a01 == "" && sf1 == ""){
      alert("Please fill up the textbox");
      return false;
    }

    if(mag2_1 == false && pmp2_1 == false && tot2_1 == false){
      alert("Please tick one of them");
      return false;
    }

    if(betNo2 != ""){
        if(big2 == "" && sml2 == "" && sa2 == "" && sb2 =="" && sc2 == "" && sd2 == "" && se2 == "" && a02 == "" && sf2 == ""){
          alert("Please fill up the textbox");
          return false;
        }
        if(mag2_2 == false && pmp2_2 == false && tot2_2 == false){
          alert("Please tick one of them");
          return false;
      }
    }

     if(betNo3 != ""){
        if(big3 == "" && sml3 == "" && sa3 == "" && sb3 =="" && sc3 == "" && sd3 == "" && se3 == "" && a03 == "" && sf3 == ""){
          alert("Please fill up the textbox");
          return false;
        }
        if(mag2_3 == false && pmp2_3 == false && tot2_3 == false){
          alert("Please tick one of them");
          return false;
      }
    }

     if(betNo4 != ""){
        if(big4 == "" && sml4 == "" && sa4 == "" && sb4 =="" && sc4 == "" && sd4 == "" && se4 == "" && a04 == "" && sf4 == ""){
          alert("Please fill up the textbox");
          return false;
        }
        if(mag2_4 == false && pmp2_4 == false && tot2_4 == false){
          alert("Please tick one of them");
          return false;
      }
    }

     if(betNo5 != ""){
        if(big5 == "" && sml5 == "" && sa5 == "" && sb5 =="" && sc5 == "" && sd5 == "" && se5 == "" && a05 == "" && sf5 == ""){
          alert("Please fill up the textbox");
          return false;
        }
        if(mag2_5 == false && pmp2_5 == false && tot2_5 == false){
          alert("Please tick one of them");
          return false;
      }
    }

     if(betNo6 != ""){
        if(big6 == "" && sml6 == "" && sa6 == "" && sb6 =="" && sc6 == "" && sd6 == "" && se6 == "" && a06 == "" && sf6 == ""){
          alert("Please fill up the textbox");
          return false;
        }
        if(mag2_6 == false && pmp2_6 == false && tot2_6 == false){
          alert("Please tick one of them");
          return false;
      }
    }

     if(betNo7 != ""){
        if(big7 == "" && sml7 == "" && sa7 == "" && sb7 =="" && sc7 == "" && sd7 == "" && se7 == "" && a07 == "" && sf7 == ""){
          alert("Please fill up the textbox");
          return false;
        }
        if(mag2_7 == false && pmp2_7 == false && tot2_7 == false){
          alert("Please tick one of them");
          return false;
      }
    }

     if(betNo8 != ""){
        if(big8 == "" && sml8 == "" && sa8 == "" && sb8 =="" && sc8 == "" && sd8 == "" && se8 == "" && a08 == "" && sf8 == ""){
          alert("Please fill up the textbox");
          return false;
        }
        if(mag2_8 == false && pmp2_8 == false && tot2_8 == false){
          alert("Please tick one of them");
          return false;
      }
    }

     if(betNo9 != ""){
        if(big9 == "" && sml9 == "" && sa9 == "" && sb9 =="" && sc9 == "" && sd9 == "" && se9 == "" && a09 == "" && sf9 == ""){
          alert("Please fill up the textbox");
          return false;
        }
        if(mag2_9 == false && pmp2_9 == false && tot2_9 == false){
          alert("Please tick one of them");
          return false;
      }
    }

     if(betNo10 != ""){
        if(big10 == "" && sml10 == "" && sa10 == "" && sb10 =="" && sc10 == "" && sd10 == "" && se10 == "" && a010 == "" && sf10 == ""){
          alert("Please fill up the textbox");
          return false;
        }
        if(mag2_10 == false && pmp2_10 == false && tot2_10 == false){
          alert("Please tick one of them");
          return false;
      }
    }

     if(betNo11 != ""){
        if(big11 == "" && sml11 == "" && sa11 == "" && sb11 =="" && sc11 == "" && sd11 == "" && se11 == "" && a011 == "" && sf11 == ""){
          alert("Please fill up the textbox");
          return false;
        }
        if(mag2_11 == false && pmp2_11 == false && tot2_11 == false){
          alert("Please tick one of them");
          return false;
      }
    }

     if(betNo12 != ""){
        if(big12 == "" && sml12 == "" && sa12 == "" && sb12 =="" && sc12 == "" && sd12 == "" && se12 == "" && a012 == "" && sf12 == ""){
          alert("Please fill up the textbox");
          return false;
        }
        if(mag2_12 == false && pmp2_12 == false && tot2_12 == false){
          alert("Please tick one of them");
          return false;
      }
    }

     if(betNo13 != ""){
        if(big13 == "" && sml13 == "" && sa13 == "" && sb13 =="" && sc13 == "" && sd13 == "" && se13 == "" && a013 == "" && sf13 == ""){
          alert("Please fill up the textbox");
          return false;
        }
        if(mag2_13 == false && pmp2_13 == false && tot2_13 == false){
          alert("Please tick one of them");
          return false;
      }
    }

     if(betNo14 != ""){
        if(big14 == "" && sml14 == "" && sa14 == "" && sb14 =="" && sc14 == "" && sd14 == "" && se14 == "" && a014 == "" && sf14 == ""){
          alert("Please fill up the textbox");
          return false;
        }
        if(mag2_14 == false && pmp2_14 == false && tot2_14 == false){
          alert("Please tick one of them");
          return false;
      }
    }

     if(betNo15 != ""){
        if(big15 == "" && sml15 == "" && sa15 == "" && sb15 =="" && sc15 == "" && sd15 == "" && se15 == "" && a015 == "" && sf15 == ""){
          alert("Please fill up the textbox");
          return false;
        }
        if(mag2_15 == false && pmp2_15 == false && tot2_15 == false){
          alert("Please tick one of them");
          return false;
      }
    }
    
  }

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
    </head>
    <body class="homepage" windows.onload="setInterval('getCurrentTime()', 1000);">
            


        <?php
        $link = mysqli_connect("localhost", "root", "", "user");
        $query = "SELECT * FROM account WHERE username = '$user'";
        $result = mysqli_query($link, $query);

        while ($row = mysqli_fetch_assoc($result)) {

            $usrtype = $row["Type"];
            $sta = $row["State"];
        }
        if($sta !== "ACTIVE"){
            echo '<script>alert("您的账户处于不活跃状态。"); location.replace(document.referrer);</script>';
        }

        //user
                if($usrtype == "Customer"){?>        

        <!-- Header Wrapper -->
            <div id="header-wrapper">
                <div class="container">
        
                    <!-- Nav -->
                        <nav id="nav">
                            <ul>
                                <li class="current_page_item"><a href="http://localhost/wordpress/user-bet/">下注</a></li>
                                <li><a href="http://localhost/wordpress/user-4d-result">4D 成绩</a></li>
                                <li><a href="http://localhost/wordpress/clientresult/">用户成绩</a></li>
                                <li><a href="http://localhost/wordpress/clientsearch/">下注记录</a></li>
                                <li><a href="http://localhost/wordpress/user-guide-page/">档文</a></li>
                                <li><a href="http://localhost/wordpress/user-logout/"><span class="glyphicon glyphicon-log-in"></span> 登出</a></li>
                            </ul>
                        </nav>
                </div>
            </div>
			 <div class="tool">
   						 <div class="main">  
                             <ul>
  							  欢迎, &nbsp;
  								  <?php
  								  echo $_SESSION['userlog'];
 								   ?>
							    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							    Language
						    <select id="lang">
 						   <option value="eng">English</option>
						    <option value="ch" selected="selected">Chinese</option>
 						   </select>
  					  &nbsp;&nbsp;&nbsp;<span id="clock"></span>
  						  </ul>
                       </div></div>
						
         <?php } elseif($usrtype == "Dealer"){ ?>

            <!-- Header Wrapper -->
            <div id="header-wrapper">
                <div class="container">
        
                    <!-- Nav -->
                        <nav id="nav">
                            <ul>
                                <li class="current_page_item"><a href="http://localhost/wordpress/user-bet/">下注</a></li>
                                <li><a href="http://localhost/wordpress/user-4d-result">4D 成绩</a></li>
                                <li><a href="http://localhost/wordpress/clientresult/">用户成绩</a></li>
                                <li><a href="http://localhost/wordpress/clientsearch/">下注记录</a></li>
                                <li><a href="http://localhost/wordpress//dealer-percentage/">代理</a></li>
                                <li>
                                    <a href="">下线</a>
                                    <ul>
                                        <li><a href="http://localhost/wordpress/sub-dealer-profile/">报告</a></li>
                                        <li><a href="http://localhost/wordpress/sub-dealer-registration/">报名表</a></li>
                                        <li><a href="http://localhost/wordpress/subdealerprofiel/">更改佣金</a></li>
                                    </ul>
                                </li>
                                <li><a href="http://localhost/wordpress/user-guide-page/">档文</a></li>
                                <li><a href="http://localhost/wordpress/user-logout/"><span class="glyphicon glyphicon-log-in"></span> 登出</a></li>
                            </ul>
                        </nav>
                </div>
            </div>
				<div class="tool">
   						 <div class="main">  
                             <ul>
  							  欢迎, &nbsp;
  								  <?php
						        echo $_SESSION['userlog'];
 								   ?>
							    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							    Language
						    <select id="lang">
 						   <option value="eng">English</option>
						    <option value="ch" selected="selected">Chinese</option>
 						   </select>
  					  &nbsp;&nbsp;&nbsp;<span id="clock"></span>
  						  </ul>
                       </div></div>
            <?php } elseif($usrtype == "Subdealer"){ ?>

            <!-- Header Wrapper -->
            <div id="header-wrapper">
                <div class="container">
        
                    <!-- Nav -->
                        <nav id="nav">
                            <ul>
                                <li class="current_page_item"><a href="http://localhost/wordpress/user-bet/">下注</a></li>
                                <li><a href="http://localhost/wordpress/user-4d-result">4D 成绩</a></li>
                                <li><a href="http://localhost/wordpress/clientresult/">用户成绩</a></li>
                                <li><a href="http://localhost/wordpress/clientsearch/">下注记录</a></li>
                                <li><a href="http://localhost/wordpress/subdealer/">下线</a></li>
                                <li><a href="http://localhost/wordpress/guide/">档文</a></li>
                                <li><a href="http://localhost/wordpress/user-logout/"><span class="glyphicon glyphicon-log-in"></span> 登出</a></li>
                            </ul>
                        </nav>
       

                </div>
            </div>
            <div class="tool">
   						 <div class="main">  
                             <ul>
  							  欢迎, &nbsp;
  								  <?php
   								 if(isset($_SESSION['userlog'])) {
						        echo $_SESSION['userlog'];
   							     $user = $_SESSION['userlog'];
   								 }else{
  							      header('Location: http://localhost/wordpress/');
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
                       </div></div>

              <?php }  else {
                header('Location: http://localhost/wordpress/');
                }?>

<!--            <?php/*
            $sql = "SELECT * FROM balance WHERE userID = '$user'";
            $result = mysqli_query($link,$sql);

           while ($row = mysqli_fetch_assoc($result)) {
                $avBal = $row["avBal"];
            }*/
            ?>-->

<div id="featured-wrapper">
		<div class="row">
    		<marquee><h2 style="color:maroon;">页面将在每天UTC+8时区6点57分刷。</h2></marquee>
	</div>
</div>


        <script>
        function togglecheckboxes1(master,group){
            var array = document.getElementsByClassName(group);
            for(var i = 0; i < array.length; i++)
            {
                var mag = document.getElementById(array[i].id);
                mag.checked = master.checked;
            }
        }
        </script>

        <br/>
<!--action="http://localhost/wordpress/insert-bet-calculation/" -->
		<form name="userbetform" onsubmit="return empty()" action="http://localhost/wordpress/insert-bet-calculation/" method="post">
	<!--	 <form action="../wp-content/themes/testtheme/header-insertbetcalculation.php/" method="post">-->
			<div id="main-wrapper">
				<div id="main" class="container">
  			<table border="1" id="widthtable" class="table table-striped">
				<tr>
        			<td>
           
<?php
date_default_timezone_set("Asia/Kuala_Lumpur");

$now    = time(); // current timestamp
$today  = date("w", $now); // "w" returns the weekday (number)
$wednesday = 3; // 5th day of the week (sunday = 0)
$saturday = 6;
$sunday = 0;

$oneWeekLater = strtotime('+1 Week');

if ($today == $wednesday && date("H:i:s") >= "18:56:40" && date("H:i:s") <= "23:59:59") {
  $weddate = date('F j Y', strtotime('wednesday', $oneWeekLater));
} else {
  $weddate = date('F j Y', strtotime('wednesday'));
}

if ($today == $saturday && date("H:i:s") >= "18:56:40" && date("H:i:s") <= "23:59:59") {
  $satdate = date('F j Y', strtotime('saturday', $oneWeekLater));
} else {
  $satdate = date('F j Y', strtotime('saturday'));
}

if ($today == $sunday && (date("H:i:s") >= "18:56:40" && date("H:i:s") <= "23:59:59")) {
  $sundate = date('F j Y', strtotime('sunday', $oneWeekLater));
} else {
  $sundate = date('F j Y', strtotime('sunday'));
}


$curday = date("Y-m-d");
$curtime = date("H:i:s");

$sp1 = "2017-07-04";
$sp2 = "2017-07-25";
$sp3 = "2017-08-01";
$sp4 = "2017-08-29";
$sp5 = "2017-09-05";
$sp6 = "2017-09-26";
$sp7 = "2017-10-03";
$sp8 = "2017-10-31";
$sp9 = "2017-11-07";
$sp10 = "2017-11-28";
$sp11 = "2017-12-05";
$sp12 = "2017-12-26";

$spdate1 = "18:56:40";
$spdate2 = "18:56:40";
$spdate3 = "18:56:40";
$spdate4 = "18:56:40";
$spdate5 = "18:56:40";
$spdate6 = "18:56:40";
$spdate7 = "18:56:40";
$spdate8 = "18:56:40";
$spdate9 = "18:56:40";
$spdate10 = "18:56:40";
$spdate11 = "18:56:40";
$spdate12 = "18:56:40";

$date1 = "18:57:10";
$date2 = "18:57:10";
$date3 = "18:57:10";
$date4 = "18:57:10";
$date5 = "18:57:10";
$date6 = "18:57:10";
$date7 = "18:57:10";
$date8 = "18:57:10";
$date9 = "18:57:10";
$date10 = "18:57:10";
$date11 = "18:57:10";
$date12 = "18:57:10";

$spd="";
if (strtotime($curday) <= strtotime($sp1)) {
    $spd = "July 4 2017";
}elseif (strtotime($curday) == strtotime($sp1) && (strtotime($curtime) > strtotime($spdate1) && strtotime($curtime) < strtotime($date1))) {
    $spd = "July 25 2017";
} elseif (strtotime($curday) == strtotime($sp2) && (strtotime($curtime) > strtotime($spdate2) && strtotime($curtime) < $strtotime($date2))) {
    $spd = "August 1 2017";
} elseif (strtotime($curday) == strtotime($sp3) && (strtotime($curtime) > strtotime($spdate3) && strtotime($curtime) < strtotime($date3))) {
    $spd = "August 29 2017";
} elseif (strtotime($curday) == strtotime($sp4) && (strtotime($curtime) > strtotime($spdate4) && strtotime($curtime) < strtotime($date4))) {
    $spd = "September 5 2017";
} elseif (strtotime($curday) == strtotime($sp5) && (strtotime($curtime) > strtotime($spdate5) && strtotime($curtime) < strtotime($date5))) {
    $spd = "September 26 2017";
} elseif (strtotime($curday) == strtotime($sp6) && (strtotime($curtime) > strtotime($spdate6) && strtotime($curtime) < strtotime($date6))) {
    $spd = "October 3 2017";
} elseif (strtotime($curday) == strtotime($sp7) && (strtotime($curtime) > strtotime($spdate7) && strtotime($curtime) < strtotime($date7))) {
    $spd = "October 31 2017";
} elseif (strtotime($curday) == strtotime($sp8) && (strtotime($curtime) > strtotime($spdate8) && strtotime($curtime) < strtotime($date8))) {
    $spd = "November 7 2017";
} elseif (strtotime($curday) == strtotime($sp9) && (strtotime($curtime) > strtotime($spdate9) && strtotime($curtime) < strtotime($date9))) {
    $spd = "November 28 2017";
} elseif (strtotime($curday) == strtotime($sp10) && (strtotime($curtime) > strtotime($spdate10) && strtotime($curtime) < strtotime($date10))) {
    $spd = "December 5 2017";
} elseif (strtotime($curday) == strtotime($sp11) && (strtotime($curtime) > strtotime($spdate11) && strtotime($curtime) < strtotime($date11))) {
    $spd = "December 26 2017";
} elseif (strtotime($curday) == strtotime($sp12) && (strtotime($curtime) > strtotime($spdate12) && strtotime($curtime) < strtotime($date12))) {
    $spd = "尽情期待";
} else {
  $spd = "-";
}

?>
<script type="text/javascript">
function getCurrentTime()
{
    var myDate = new Date();
    var mySecs = myDate.getSeconds();
    var curHour = myDate.getHours();
    var curMin = myDate.getMinutes();
    var suffix = "AM";

    if(mySecs < 10)
        mySecs = "0" + mySecs;

    if(curMin < 10)
        curMin = "0" + curMin;

    if(curHour == 12 && curMin >= 1)
    {
        suffix = "PM";
    }
    if(curHour == 24 && curMin >= 1)
    {
        curHour-= 12;
        suffix = "AM";
    }
    if(curHour > 12)
    {
        curHour-= 12;
        suffix = "PM";
    }

    var time = curHour + ":" + curMin + ":" + mySecs + " " + suffix;
    document.getElementById('time').innerHTML=(time);

        if(time == "6:57:10 PM") //Change this to whatever time you want
            location.reload();

}
</script>

    <div id="time" style="display: none;"></div>

<?php
if ($today > $wednesday && $today <= $saturday) {
$date1 = 'sat';
$date2 = 'sun';
$date3 = 'wed';

$week1 = '星期六';
$week2 = '星期日';
$week3 = '星期三';

$dispdate1 = $satdate;
$dispdate2 = $sundate;
$dispdate3 = $weddate;
} elseif ($today < $saturday && $today <= $sunday) {
$date1 = 'sun';
$date2 = 'wed';
$date3 = 'sat';

$week1 = '星期日';
$week2 = '星期三';
$week3 = '星期六';

$dispdate1 = $sundate;
$dispdate2 = $weddate;
$dispdate3 = $satdate;
} elseif ($today > $sunday && $today <= $wednesday) {
$date1 = 'wed';
$date2 = 'sat';
$date3 = 'sun';

$week1 = '星期三';
$week2 = '星期六';
$week3 = '星期日';

$dispdate1 = $weddate;
$dispdate2 = $satdate;
$dispdate3 = $sundate;
}

?>
				<td><input type="hidden" name="user" value="<?php echo $user ?>"></td>
				<td><h5><input type="checkbox" id="wed" value="<?php echo ($dispdate1) ?>" name="<?php echo $date1 ?>">&nbsp;<?php echo $week1 ?>&nbsp;<?php echo "($dispdate1)" ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5></td>
				<td><h5><input type="checkbox" id="sat" value="<?php echo ($dispdate2) ?>" name="<?php echo $date2 ?>">&nbsp;<?php echo $week2 ?>&nbsp;<?php echo "($dispdate2)" ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5></td>
    			<td><h5><input type="checkbox" id="sun" value="<?php echo ($dispdate3) ?>" name="<?php echo $date3 ?>">&nbsp;<?php echo $week3 ?>&nbsp;<?php echo "($dispdate3)" ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5></td>
    			<td><h5><input type="checkbox" id="tue" value="<?php echo ($spd) ?>" name="tue">&nbsp;星期二&nbsp;<b style="color:darkred;">特别期</b>&nbsp;<?php echo "($spd)" ?></h5></td>
</tr>
</table>	
</div></div>