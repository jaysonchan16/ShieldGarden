 <?php  
 session_start();
    if(isset($_SESSION['userlog'])) {
        $user = $_SESSION['userlog'];
    }

 $connect = mysqli_connect("localhost", "root", "", "wordpresstest");

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

if ($today == $sunday && date("H:i:s") >= "18:56:40" && date("H:i:s") <= "23:59:59") {
  $sundate = date('F j Y', strtotime('sunday', $oneWeekLater));
} else {
  $sundate = date('F j Y', strtotime('sunday'));
}


$curday = date("Y-m-d H:i:s");
$spdate1 = "2017-07-04 18:56:40";
$spdate2 = "2017-07-25 18:56:40";
$spdate3 = "2017-08-01 18:56:40";
$spdate4 = "2017-08-29 18:56:40";
$spdate5 = "2017-09-05 18:56:40";
$spdate6 = "2017-09-26 18:56:40";
$spdate7 = "2017-10-03 18:56:40";
$spdate8 = "2017-10-31 18:56:40";
$spdate9 = "2017-11-07 18:56:40";
$spdate10 = "2017-11-28 18:56:40";
$spdate11 = "2017-12-05 18:56:40";
$spdate12 = "2017-12-26 18:56:40";

if ($spdate1 > $curday) {
  $spd = "July 4 2017";
} elseif ($spdate1 < $curday) {
  $spd = "July 25 2017";
} elseif ($spdate2 < $curday) {
  $spd = "August 1 2017";
} elseif ($spdate3 < $curday) {
  $spd = "August 29 2017";
} elseif ($spdate4 < $curday) {
  $spd = "September 5 2017";
} elseif ($spdate5 < $curday) {
  $spd = "September 26 2017";
} elseif ($spdate6 < $curday) {
  $spd = "October 3 2017";
} elseif ($spdate7 < $curday) {
  $spd = "October 31 2017";
} elseif ($spdate8 < $curday) {
  $spd = "November 7 2017";
} elseif ($spdate9 < $curday) {
  $spd = "November 28 2017";
} elseif ($spdate10 < $curday) {
  $spd = "December 5 2017";
} elseif ($spdate11 < $curday) {
  $spd = "December 26 2017";
} elseif ($spdate12 < $curday) {
  echo "尽情期待";
} else {}

    


    

 $usernm = $_SESSION['userlog'];

 $wedbet = current($_POST["cwed"]);
 $satbet = current($_POST["csat"]);
 $sunbet = current($_POST["csun"]);
 $tuebet = current($_POST["ctue"]);

 $betNum1 = current($_POST["bet1"]);
 $bet1_1 = current($_POST["bg1"]); if(!empty($bet1_1)){$bg1 = 大;}
 $bet1_2 = current($_POST["sm1"]); if(!empty($bet1_2)){$sm1 = 小;}
 $bet1_3 = current($_POST["sa1"]); if(!empty($bet1_3)){$sa1 = 头;}
 $bet1_4 = current($_POST["sb1"]); if(!empty($bet1_4)){$sb1 = 二;}
 $bet1_5 = current($_POST["sc1"]); if(!empty($bet1_5)){$sc1 = 三;}
 $bet1_6 = current($_POST["sd1"]); if(!empty($bet1_6)){$sd1 = 特;}
 $bet1_7 = current($_POST["se1"]); if(!empty($bet1_7)){$se1 = 安;}
 $bet1_8 = current($_POST["a01"]); if(!empty($bet1_8)){$a01 = A;}
 $bet1_9 = current($_POST["sf1"]); if(!empty($bet1_9)){$sf1 = C;}
 $chkmag1 = current($_POST["cmag1"]);
 $chkdmc1 = current($_POST["cdmc1"]);
 $chktot1 = current($_POST["ctot1"]);

 $betNum2 = current($_POST["bet2"]);
 $bet2_1 = current($_POST["bg2"]); if(empty($bet2_1)){$bet2_1 = '';} else{$bg2 = 大;}
 $bet2_2 = current($_POST["sm2"]); if(empty($bet2_2)){$bet2_2 = '';} else{$sm2 = 小;}
 $bet2_3 = current($_POST["sa2"]); if(empty($bet2_3)){$bet2_3 = '';} else{$sa2 = 头;}
 $bet2_4 = current($_POST["sb2"]); if(empty($bet2_4)){$bet2_4 = '';} else{$sb2 = 二;}
 $bet2_5 = current($_POST["sc2"]); if(empty($bet2_5)){$bet2_5 = '';} else{$sc2 = 三;}
 $bet2_6 = current($_POST["sd2"]); if(empty($bet2_6)){$bet2_6 = '';} else{$sd2 = 特;}
 $bet2_7 = current($_POST["se2"]); if(empty($bet2_7)){$bet2_7 = '';} else{$se2 = 安;}
 $bet2_8 = current($_POST["a02"]); if(empty($bet2_8)){$bet2_8 = '';} else{$a02 = A;}
 $bet2_9 = current($_POST["sf2"]); if(empty($bet2_9)){$bet2_9 = '';} else{$sf2 = C;}
 $chkmag2 = current($_POST["cmag2"]);
 $chkdmc2 = current($_POST["cdmc2"]);
 $chktot2 = current($_POST["ctot2"]);

 $betNum3 = current($_POST["bet3"]);
 $bet3_1 = current($_POST["bg3"]); if(empty($bet3_1)){$bet3_1 = '';} else{$bg3 = 大;}
 $bet3_2 = current($_POST["sm3"]); if(empty($bet3_2)){$bet3_2 = '';} else{$sm3 = 小;}
 $bet3_3 = current($_POST["sa3"]); if(empty($bet3_3)){$bet3_3 = '';} else{$sa3 = 头;}
 $bet3_4 = current($_POST["sb3"]); if(empty($bet3_4)){$bet3_4 = '';} else{$sb3 = 二;}
 $bet3_5 = current($_POST["sc3"]); if(empty($bet3_5)){$bet3_5 = '';} else{$sc3 = 三;}
 $bet3_6 = current($_POST["sd3"]); if(empty($bet3_6)){$bet3_6 = '';} else{$sd3 = 特;}
 $bet3_7 = current($_POST["se3"]); if(empty($bet3_7)){$bet3_7 = '';} else{$se3 = 安;}
 $bet3_8 = current($_POST["a03"]); if(empty($bet3_8)){$bet3_8 = '';} else{$a03 = A;}
 $bet3_9 = current($_POST["sf3"]); if(empty($bet3_9)){$bet3_9 = '';} else{$sf3 = C;}
 $chkmag3 = current($_POST["cmag3"]);
 $chkdmc3 = current($_POST["cdmc3"]);
 $chktot3 = current($_POST["ctot3"]);

 $betNum4 = current($_POST["bet4"]);
 $bet4_1 = current($_POST["bg4"]); if(empty($bet4_1)){$bet4_1 = '';} else{$bg4 = 大;}
 $bet4_2 = current($_POST["sm4"]); if(empty($bet4_2)){$bet4_2 = '';} else{$sm4 = 小;}
 $bet4_3 = current($_POST["sa4"]); if(empty($bet4_3)){$bet4_3 = '';} else{$sa4 = 头;}
 $bet4_4 = current($_POST["sb4"]); if(empty($bet4_4)){$bet4_4 = '';} else{$sb4 = 二;}
 $bet4_5 = current($_POST["sc4"]); if(empty($bet4_5)){$bet4_5 = '';} else{$sc4 = 三;}
 $bet4_6 = current($_POST["sd4"]); if(empty($bet4_6)){$bet4_6 = '';} else{$sd4 = 特;}
 $bet4_7 = current($_POST["se4"]); if(empty($bet4_7)){$bet4_7 = '';} else{$se4 = 安;}
 $bet4_8 = current($_POST["a04"]); if(empty($bet4_8)){$bet4_8 = '';} else{$a04 = A;}
 $bet4_9 = current($_POST["sf4"]); if(empty($bet4_9)){$bet4_9 = '';} else{$sf4 = C;}
 $chkmag4 = current($_POST["cmag4"]);
 $chkdmc4 = current($_POST["cdmc4"]);
 $chktot4 = current($_POST["ctot4"]);

 $betNum5 = current($_POST["bet5"]);
 $bet5_1 = current($_POST["bg5"]); if(empty($bet5_1)){$bet5_1 = '';} else{$bg5 = 大;}
 $bet5_2 = current($_POST["sm5"]); if(empty($bet5_2)){$bet5_2 = '';} else{$sm5 = 小;}
 $bet5_3 = current($_POST["sa5"]); if(empty($bet5_3)){$bet5_3 = '';} else{$sa5 = 头;}
 $bet5_4 = current($_POST["sb5"]); if(empty($bet5_4)){$bet5_4 = '';} else{$sb5 = 二;}
 $bet5_5 = current($_POST["sc5"]); if(empty($bet5_5)){$bet5_5 = '';} else{$sc5 = 三;}
 $bet5_6 = current($_POST["sd5"]); if(empty($bet5_6)){$bet5_6 = '';} else{$sd5 = 特;}
 $bet5_7 = current($_POST["se5"]); if(empty($bet5_7)){$bet5_7 = '';} else{$se5 = 安;}
 $bet5_8 = current($_POST["a05"]); if(empty($bet5_8)){$bet5_8 = '';} else{$a05 = A;}
 $bet5_9 = current($_POST["sf5"]); if(empty($bet5_9)){$bet5_9 = '';} else{$sf5 = C;}
 $chkmag5 = current($_POST["cmag5"]);
 $chkdmc5 = current($_POST["cdmc5"]);
 $chktot5 = current($_POST["ctot5"]);

 $betNum6 = current($_POST["bet6"]);
 $bet6_1 = current($_POST["bg6"]); if(empty($bet6_1)){$bet6_1 = '';} else{$bg6 = 大;}
 $bet6_2 = current($_POST["sm6"]); if(empty($bet6_2)){$bet6_2 = '';} else{$sm6 = 小;}
 $bet6_3 = current($_POST["sa6"]); if(empty($bet6_3)){$bet6_3 = '';} else{$sa6 = 头;}
 $bet6_4 = current($_POST["sb6"]); if(empty($bet6_4)){$bet6_4 = '';} else{$sb6 = 二;}
 $bet6_5 = current($_POST["sc6"]); if(empty($bet6_5)){$bet6_5 = '';} else{$sc6 = 三;}
 $bet6_6 = current($_POST["sd6"]); if(empty($bet6_6)){$bet6_6 = '';} else{$sd6 = 特;}
 $bet6_7 = current($_POST["se6"]); if(empty($bet6_7)){$bet6_7 = '';} else{$se6 = 安;}
 $bet6_8 = current($_POST["a06"]); if(empty($bet6_8)){$bet6_8 = '';} else{$a06 = A;}
 $bet6_9 = current($_POST["sf6"]); if(empty($bet6_9)){$bet6_9 = '';} else{$sf6 = C;}
 $chkmag6 = current($_POST["cmag6"]);
 $chkdmc6 = current($_POST["cdmc6"]);
 $chktot6 = current($_POST["ctot6"]);

 $betNum7 = current($_POST["bet7"]);
 $bet7_1 = current($_POST["bg7"]); if(empty($bet7_1)){$bet7_1 = '';} else{$bg7 = 大;}
 $bet7_2 = current($_POST["sm7"]); if(empty($bet7_2)){$bet7_2 = '';} else{$sm7 = 小;}
 $bet7_3 = current($_POST["sa7"]); if(empty($bet7_3)){$bet7_3 = '';} else{$sa7 = 头;}
 $bet7_4 = current($_POST["sb7"]); if(empty($bet7_4)){$bet7_4 = '';} else{$sb7 = 二;}
 $bet7_5 = current($_POST["sc7"]); if(empty($bet7_5)){$bet7_5 = '';} else{$sc7 = 三;}
 $bet7_6 = current($_POST["sd7"]); if(empty($bet7_6)){$bet7_6 = '';} else{$sd7 = 特;}
 $bet7_7 = current($_POST["se7"]); if(empty($bet7_7)){$bet7_7 = '';} else{$se7 = 安;}
 $bet7_8 = current($_POST["a07"]); if(empty($bet7_8)){$bet7_8 = '';} else{$a07 = A;}
 $bet7_9 = current($_POST["sf7"]); if(empty($bet7_9)){$bet7_9 = '';} else{$sf7 = C;}
 $chkmag7 = current($_POST["cmag7"]);
 $chkdmc7 = current($_POST["cdmc7"]);
 $chktot7 = current($_POST["ctot7"]);

 $betNum8 = current($_POST["bet8"]);
 $bet8_1 = current($_POST["bg8"]); if(empty($bet8_1)){$bet8_1 = '';} else{$bg8 = 大;}
 $bet8_2 = current($_POST["sm8"]); if(empty($bet8_2)){$bet8_2 = '';} else{$sm8 = 小;}
 $bet8_3 = current($_POST["sa8"]); if(empty($bet8_3)){$bet8_3 = '';} else{$sa8 = 头;}
 $bet8_4 = current($_POST["sb8"]); if(empty($bet8_4)){$bet8_4 = '';} else{$sb8 = 二;}
 $bet8_5 = current($_POST["sc8"]); if(empty($bet8_5)){$bet8_5 = '';} else{$sc8 = 三;}
 $bet8_6 = current($_POST["sd8"]); if(empty($bet8_6)){$bet8_6 = '';} else{$sd8 = 特;}
 $bet8_7 = current($_POST["se8"]); if(empty($bet8_7)){$bet8_7 = '';} else{$se8 = 安;}
 $bet8_8 = current($_POST["a08"]); if(empty($bet8_8)){$bet8_8 = '';} else{$a08 = A;}
 $bet8_9 = current($_POST["sf8"]); if(empty($bet8_9)){$bet8_9 = '';} else{$sf8 = C;}
 $chkmag8 = current($_POST["cmag8"]);
 $chkdmc8 = current($_POST["cdmc8"]);
 $chktot8 = current($_POST["ctot8"]);

 $betNum9 = current($_POST["bet9"]);
 $bet9_1 = current($_POST["bg9"]); if(empty($bet9_1)){$bet9_1 = '';} else{$bg9 = 大;}
 $bet9_2 = current($_POST["sm9"]); if(empty($bet9_2)){$bet9_2 = '';} else{$sm9 = 小;}
 $bet9_3 = current($_POST["sa9"]); if(empty($bet9_3)){$bet9_3 = '';} else{$sa9 = 头;}
 $bet9_4 = current($_POST["sb9"]); if(empty($bet9_4)){$bet9_4 = '';} else{$sb9 = 二;}
 $bet9_5 = current($_POST["sc9"]); if(empty($bet9_5)){$bet9_5 = '';} else{$sc9 = 三;}
 $bet9_6 = current($_POST["sd9"]); if(empty($bet9_6)){$bet9_6 = '';} else{$sd9 = 特;}
 $bet9_7 = current($_POST["se9"]); if(empty($bet9_7)){$bet9_7 = '';} else{$se9 = 安;}
 $bet9_8 = current($_POST["a09"]); if(empty($bet9_8)){$bet9_8 = '';} else{$a09 = A;}
 $bet9_9 = current($_POST["sf9"]); if(empty($bet9_9)){$bet9_9 = '';} else{$sf9 = C;}
 $chkmag9 = current($_POST["cmag9"]);
 $chkdmc9 = current($_POST["cdmc9"]);
 $chktot9 = current($_POST["ctot9"]);

 $betNum10 = current($_POST["bet10"]);
 $bet10_1 = current($_POST["bg10"]); if(empty($bet10_1)){$bet10_1 = '';} else{$bg10 = 大;}
 $bet10_2 = current($_POST["sm10"]); if(empty($bet10_2)){$bet10_2 = '';} else{$sm10 = 小;}
 $bet10_3 = current($_POST["sa10"]); if(empty($bet10_3)){$bet10_3 = '';} else{$sa10 = 头;}
 $bet10_4 = current($_POST["sb10"]); if(empty($bet10_4)){$bet10_4 = '';} else{$sb10 = 二;}
 $bet10_5 = current($_POST["sc10"]); if(empty($bet10_5)){$bet10_5 = '';} else{$sc10 = 三;}
 $bet10_6 = current($_POST["sd10"]); if(empty($bet10_6)){$bet10_6 = '';} else{$sd10 = 特;}
 $bet10_7 = current($_POST["se10"]); if(empty($bet10_7)){$bet10_7 = '';} else{$se10 = 安;}
 $bet10_8 = current($_POST["a010"]); if(empty($bet10_8)){$bet10_8 = '';} else{$a010 = A;}
 $bet10_9 = current($_POST["sf10"]); if(empty($bet10_9)){$bet10_9 = '';} else{$sf10 = C;}
 $chkmag10 = current($_POST["cmag10"]);
 $chkdmc10 = current($_POST["cdmc10"]);
 $chktot10 = current($_POST["ctot10"]);

 $betNum11 = current($_POST["bet11"]);
 $bet11_1 = current($_POST["bg11"]); if(empty($bet11_1)){$bet11_1 = '';} else{$bg11 = 大;}
 $bet11_2 = current($_POST["sm11"]); if(empty($bet11_2)){$bet11_2 = '';} else{$sm11 = 小;}
 $bet11_3 = current($_POST["sa11"]); if(empty($bet11_3)){$bet11_3 = '';} else{$sa11 = 头;}
 $bet11_4 = current($_POST["sb11"]); if(empty($bet11_4)){$bet11_4 = '';} else{$sb11 = 二;}
 $bet11_5 = current($_POST["sc11"]); if(empty($bet11_5)){$bet11_5 = '';} else{$sc11 = 三;}
 $bet11_6 = current($_POST["sd11"]); if(empty($bet11_6)){$bet11_6 = '';} else{$sd11 = 特;}
 $bet11_7 = current($_POST["se11"]); if(empty($bet11_7)){$bet11_7 = '';} else{$se11 = 安;}
 $bet11_8 = current($_POST["a011"]); if(empty($bet11_8)){$bet11_8 = '';} else{$a011 = A;}
 $bet11_9 = current($_POST["sf11"]); if(empty($bet11_9)){$bet11_9 = '';} else{$sf11 = C;}
 $chkmag11 = current($_POST["cmag11"]);
 $chkdmc11 = current($_POST["cdmc11"]);
 $chktot11 = current($_POST["ctot11"]);

 $betNum12 = current($_POST["bet12"]);
 $bet12_1 = current($_POST["bg12"]); if(empty($bet12_1)){$bet12_1 = '';} else{$bg12 = 大;}
 $bet12_2 = current($_POST["sm12"]); if(empty($bet12_2)){$bet12_2 = '';} else{$sm12 = 小;}
 $bet12_3 = current($_POST["sa12"]); if(empty($bet12_3)){$bet12_3 = '';} else{$sa12 = 头;}
 $bet12_4 = current($_POST["sb12"]); if(empty($bet12_4)){$bet12_4 = '';} else{$sb12 = 二;}
 $bet12_5 = current($_POST["sc12"]); if(empty($bet12_5)){$bet12_5 = '';} else{$sc12 = 三;}
 $bet12_6 = current($_POST["sd12"]); if(empty($bet12_6)){$bet12_6 = '';} else{$sd12 = 特;}
 $bet12_7 = current($_POST["se12"]); if(empty($bet12_7)){$bet12_7 = '';} else{$se12 = 安;}
 $bet12_8 = current($_POST["a012"]); if(empty($bet12_8)){$bet12_8 = '';} else{$a012 = A;}
 $bet12_9 = current($_POST["sf12"]); if(empty($bet12_9)){$bet12_9 = '';} else{$sf12 = C;}
 $chkmag12 = current($_POST["cmag12"]);
 $chkdmc12 = current($_POST["cdmc12"]);
 $chktot12 = current($_POST["ctot12"]);

 $betNum13 = current($_POST["bet13"]);
 $bet13_1 = current($_POST["bg13"]); if(empty($bet13_1)){$bet13_1 = '';} else{$bg13 = 大;}
 $bet13_2 = current($_POST["sm13"]); if(empty($bet13_2)){$bet13_2 = '';} else{$sm13 = 小;}
 $bet13_3 = current($_POST["sa13"]); if(empty($bet13_3)){$bet13_3 = '';} else{$sa13 = 头;}
 $bet13_4 = current($_POST["sb13"]); if(empty($bet13_4)){$bet13_4 = '';} else{$sb13 = 二;}
 $bet13_5 = current($_POST["sc13"]); if(empty($bet13_5)){$bet13_5 = '';} else{$sc13 = 三;}
 $bet13_6 = current($_POST["sd13"]); if(empty($bet13_6)){$bet13_6 = '';} else{$sd13 = 特;}
 $bet13_7 = current($_POST["se13"]); if(empty($bet13_7)){$bet13_7 = '';} else{$se13 = 安;}
 $bet13_8 = current($_POST["a013"]); if(empty($bet13_8)){$bet13_8 = '';} else{$a013 = A;}
 $bet13_9 = current($_POST["sf13"]); if(empty($bet13_9)){$bet13_9 = '';} else{$sf13 = C;}
 $chkmag13 = current($_POST["cmag13"]);
 $chkdmc13 = current($_POST["cdmc13"]);
 $chktot13 = current($_POST["ctot13"]);

 $betNum14 = current($_POST["bet14"]);
 $bet14_1 = current($_POST["bg14"]); if(empty($bet14_1)){$bet14_1 = '';} else{$bg14 = 大;}
 $bet14_2 = current($_POST["sm14"]); if(empty($bet14_2)){$bet14_2 = '';} else{$sm14 = 小;}
 $bet14_3 = current($_POST["sa14"]); if(empty($bet14_3)){$bet14_3 = '';} else{$sa14 = 头;}
 $bet14_4 = current($_POST["sb14"]); if(empty($bet14_4)){$bet14_4 = '';} else{$sb14 = 二;}
 $bet14_5 = current($_POST["sc14"]); if(empty($bet14_5)){$bet14_5 = '';} else{$sc14 = 三;}
 $bet14_6 = current($_POST["sd14"]); if(empty($bet14_6)){$bet14_6 = '';} else{$sd14 = 特;}
 $bet14_7 = current($_POST["se14"]); if(empty($bet14_7)){$bet14_7 = '';} else{$se14 = 安;}
 $bet14_8 = current($_POST["a014"]); if(empty($bet14_8)){$bet14_8 = '';} else{$a014 = A;}
 $bet14_9 = current($_POST["sf14"]); if(empty($bet14_9)){$bet14_9 = '';} else{$sf14 = C;}
 $chkmag14 = current($_POST["cmag14"]);
 $chkdmc14 = current($_POST["cdmc14"]);
 $chktot14 = current($_POST["ctot14"]);

 $betNum15 = current($_POST["bet15"]);
 $bet15_1 = current($_POST["bg15"]); if(empty($bet15_1)){$bet15_1 = '';} else{$bg15 = 大;}
 $bet15_2 = current($_POST["sm15"]); if(empty($bet15_2)){$bet15_2 = '';} else{$sm15 = 小;}
 $bet15_3 = current($_POST["sa15"]); if(empty($bet15_3)){$bet15_3 = '';} else{$sa15 = 头;}
 $bet15_4 = current($_POST["sb15"]); if(empty($bet15_4)){$bet15_4 = '';} else{$sb15 = 二;}
 $bet15_5 = current($_POST["sc15"]); if(empty($bet15_5)){$bet15_5 = '';} else{$sc15 = 三;}
 $bet15_6 = current($_POST["sd15"]); if(empty($bet15_6)){$bet15_6 = '';} else{$sd15 = 特;}
 $bet15_7 = current($_POST["se15"]); if(empty($bet15_7)){$bet15_7 = '';} else{$se15 = 安;}
 $bet15_8 = current($_POST["a015"]); if(empty($bet15_8)){$bet15_8 = '';} else{$a015 = A;}
 $bet15_9 = current($_POST["sf15"]); if(empty($bet15_9)){$bet15_9 = '';} else{$sf15 = C;}
 $chkmag15 = current($_POST["cmag15"]);
 $chkdmc15 = current($_POST["cdmc15"]);
 $chktot15 = current($_POST["ctot15"]);

 $ttl1 = current($_POST["ttl1"]);
 $ttl2 = current($_POST["ttl2"]);
 $ttl3 = current($_POST["ttl3"]);
 $ttl4 = current($_POST["ttl4"]);
 $ttl5 = current($_POST["ttl5"]);
 $ttl6 = current($_POST["ttl6"]);
 $ttl7 = current($_POST["ttl7"]);
 $ttl8 = current($_POST["ttl8"]);
 $ttl9 = current($_POST["ttl9"]);
 $ttl10 = current($_POST["ttl10"]);
 $ttl11 = current($_POST["ttl11"]);
 $ttl12 = current($_POST["ttl12"]);
 $ttl13 = current($_POST["ttl13"]);
 $ttl14 = current($_POST["ttl14"]);
 $ttl15 = current($_POST["ttl15"]);

 $tta1 = current($_POST["tta1"]);
 $tta2 = current($_POST["tta2"]);
 $tta3 = current($_POST["tta3"]);
 $tta4 = current($_POST["tta4"]);
 $tta5 = current($_POST["tta5"]);
 $tta6 = current($_POST["tta6"]);
 $tta7 = current($_POST["tta7"]);
 $tta8 = current($_POST["tta8"]);
 $tta9 = current($_POST["tta9"]);
 $tta10 = current($_POST["tta10"]);
 $tta11 = current($_POST["tta11"]);
 $tta12 = current($_POST["tta12"]);
 $tta13 = current($_POST["tta13"]);
 $tta14 = current($_POST["tta14"]);
 $tta15 = current($_POST["tta15"]);

 $cbet1 = current($_POST["cbet1"]);
 $cbet2 = current($_POST["cbet2"]);
 $cbet3 = current($_POST["cbet3"]);
 $cbet4 = current($_POST["cbet4"]);
 $cbet5 = current($_POST["cbet5"]);
 $cbet6 = current($_POST["cbet6"]);
 $cbet7 = current($_POST["cbet7"]);
 $cbet8 = current($_POST["cbet8"]);
 $cbet9 = current($_POST["cbet9"]);
 $cbet10 = current($_POST["cbet10"]);
 $cbet11 = current($_POST["cbet11"]);
 $cbet12 = current($_POST["cbet12"]);
 $cbet13 = current($_POST["cbet13"]);
 $cbet14 = current($_POST["cbet14"]);
 $cbet15 = current($_POST["cbet15"]);

 $alltotal = current($_POST["total"]);
 $atotal = current($_POST["atotal"]);

 $todaydate = date("md");
 $ran = mt_rand(000000, 999999);
 $trxSeq = $todaydate.$ran;

 $usrtype = current($_POST["usrtype"]);

 $all = Y;

 $csNo = current($_POST["csNo"]);
















if(! empty($wedbet)){
  if(!empty($chkmag1)){
    if(! empty($betNum1) && (! empty ($bet1_1) || ! empty ($bet1_2) || ! empty ($bet1_3) || ! empty ($bet1_4) || ! empty ($bet1_5) || ! empty ($bet1_6) || ! empty ($bet1_7) || ! empty ($bet1_8) || ! empty ($bet1_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum1."', '".$bet1_1."', '".$bet1_2."', '".$bet1_3."', '".$bet1_4."', '".$bet1_5."', '".$bet1_6."', '".$bet1_7."', '".$bet1_8."', '".$bet1_9."', '".$ttl1."', '".$chkmag1."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);

                $chkdone = 1;
  }
}
  if(!empty($chkmag2)){
    if(! empty($betNum2) && (! empty ($bet2_1) || ! empty ($bet2_2) || ! empty ($bet2_3) || ! empty ($bet2_4) || ! empty ($bet2_5) || ! empty ($bet2_6) || ! empty ($bet2_7) || ! empty ($bet2_8) || ! empty ($bet2_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum2."', '".$bet2_1."', '".$bet2_2."', '".$bet2_3."', '".$bet2_4."', '".$bet2_5."', '".$bet2_6."', '".$bet2_7."', '".$bet2_8."', '".$bet2_9."', '".$ttl2."', '".$chkmag2."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag3)){
    if(! empty($betNum3) && (! empty ($bet3_1) || ! empty ($bet3_2) || ! empty ($bet3_3) || ! empty ($bet3_4) || ! empty ($bet3_5) || ! empty ($bet3_6) || ! empty ($bet3_7) || ! empty ($bet3_8) || ! empty ($bet3_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum3."', '".$bet3_1."', '".$bet3_2."', '".$bet3_3."', '".$bet3_4."', '".$bet3_5."', '".$bet3_6."', '".$bet3_7."', '".$bet3_8."', '".$bet3_9."', '".$ttl3."', '".$chkmag3."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkmag4)){
    if(! empty($betNum4) && (! empty ($bet4_1) || ! empty ($bet4_2) || ! empty ($bet4_3) || ! empty ($bet4_4) || ! empty ($bet4_5) || ! empty ($bet4_6) || ! empty ($bet4_7) || ! empty ($bet4_8) || ! empty ($bet4_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum4."', '".$bet4_1."', '".$bet4_2."', '".$bet4_3."', '".$bet4_4."', '".$bet4_5."', '".$bet4_6."', '".$bet4_7."', '".$bet4_8."', '".$bet4_9."', '".$ttl4."', '".$chkmag4."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag5)){
    if(! empty($betNum5) && (! empty ($bet5_1) || ! empty ($bet5_2) || ! empty ($bet5_3) || ! empty ($bet5_4) || ! empty ($bet5_5) || ! empty ($bet5_6) || ! empty ($bet5_7) || ! empty ($bet5_8) || ! empty ($bet5_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum5."', '".$bet5_1."', '".$bet5_2."', '".$bet5_3."', '".$bet5_4."', '".$bet5_5."', '".$bet5_6."', '".$bet5_7."', '".$bet5_8."', '".$bet5_9."', '".$ttl5."', '".$chkmag5."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkmag6)){
    if(! empty($betNum6) && (! empty ($bet6_1) || ! empty ($bet6_2) || ! empty ($bet6_3) || ! empty ($bet6_4) || ! empty ($bet6_5) || ! empty ($bet6_6) || ! empty ($bet6_7) || ! empty ($bet6_8) || ! empty ($bet6_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum6."', '".$bet6_1."', '".$bet6_2."', '".$bet6_3."', '".$bet6_4."', '".$bet6_5."', '".$bet6_6."', '".$bet6_7."', '".$bet6_8."', '".$bet6_9."', '".$ttl6."', '".$chkmag6."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag7)){
    if(! empty($betNum7) && (! empty ($bet7_1) || ! empty ($bet7_2) || ! empty ($bet7_3) || ! empty ($bet7_4) || ! empty ($bet7_5) || ! empty ($bet7_6) || ! empty ($bet7_7) || ! empty ($bet7_8) || ! empty ($bet7_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum7."', '".$bet7_1."', '".$bet7_2."', '".$bet7_3."', '".$bet7_4."', '".$bet7_5."', '".$bet7_6."', '".$bet7_7."', '".$bet7_8."', '".$bet7_9."', '".$ttl7."', '".$chkmag7."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag8)){
    if(! empty($betNum8) && (! empty ($bet8_1) || ! empty ($bet8_2) || ! empty ($bet8_3) || ! empty ($bet8_4) || ! empty ($bet8_5) || ! empty ($bet8_6) || ! empty ($bet8_7) || ! empty ($bet8_8) || ! empty ($bet8_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum8."', '".$bet8_1."', '".$bet8_2."', '".$bet8_3."', '".$bet8_4."', '".$bet8_5."', '".$bet8_6."', '".$bet8_7."', '".$bet8_8."', '".$bet8_9."', '".$ttl8."', '".$chkmag8."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag9)){
    if(! empty($betNum9) && (! empty ($bet9_1) || ! empty ($bet9_2) || ! empty ($bet9_3) || ! empty ($bet9_4) || ! empty ($bet9_5) || ! empty ($bet9_6) || ! empty ($bet9_7) || ! empty ($bet9_8) || ! empty ($bet9_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum9."', '".$bet9_1."', '".$bet9_2."', '".$bet9_3."', '".$bet9_4."', '".$bet9_5."', '".$bet9_6."', '".$bet9_7."', '".$bet9_8."', '".$bet9_9."', '".$ttl9."', '".$chkmag9."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag10)){
    if(! empty($betNum10) && (! empty ($bet10_1) || ! empty ($bet10_2) || ! empty ($bet10_3) || ! empty ($bet10_4) || ! empty ($bet10_5) || ! empty ($bet10_6) || ! empty ($bet10_7) || ! empty ($bet10_8) || ! empty ($bet10_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum10."', '".$bet10_1."', '".$bet10_2."', '".$bet10_3."', '".$bet10_4."', '".$bet10_5."', '".$bet10_6."', '".$bet10_7."', '".$bet10_8."', '".$bet10_9."', '".$ttl10."', '".$chkmag10."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkmag11)){
    if(! empty($betNum11) && (! empty ($bet11_1) || ! empty ($bet11_2) || ! empty ($bet11_3) || ! empty ($bet11_4) || ! empty ($bet11_5) || ! empty ($bet11_6) || ! empty ($bet11_7) || ! empty ($bet11_8) || ! empty ($bet11_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum11."', '".$bet11_1."', '".$bet11_2."', '".$bet11_3."', '".$bet11_4."', '".$bet11_5."', '".$bet11_6."', '".$bet11_7."', '".$bet11_8."', '".$bet11_9."', '".$ttl11."', '".$chkmag11."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag12)){
    if(! empty($betNum12) && (! empty ($bet12_1) || ! empty ($bet12_2) || ! empty ($bet12_3) || ! empty ($bet12_4) || ! empty ($bet12_5) || ! empty ($bet12_6) || ! empty ($bet12_7) || ! empty ($bet12_8) || ! empty ($bet12_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum12."', '".$bet12_1."', '".$bet12_2."', '".$bet12_3."', '".$bet12_4."', '".$bet12_5."', '".$bet12_6."', '".$bet12_7."', '".$bet12_8."', '".$bet12_9."', '".$ttl12."', '".$chkmag12."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag13)){
    if(! empty($betNum13) && (! empty ($bet13_1) || ! empty ($bet13_2) || ! empty ($bet13_3) || ! empty ($bet13_4) || ! empty ($bet13_5) || ! empty ($bet13_6) || ! empty ($bet13_7) || ! empty ($bet13_8) || ! empty ($bet13_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum13."', '".$bet13_1."', '".$bet13_2."', '".$bet13_3."', '".$bet13_4."', '".$bet13_5."', '".$bet13_6."', '".$bet13_7."', '".$bet13_8."', '".$bet13_9."', '".$ttl13."', '".$chkmag13."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkmag14)){
    if(! empty($betNum14) && (! empty ($bet14_1) || ! empty ($bet14_2) || ! empty ($bet14_3) || ! empty ($bet14_4) || ! empty ($bet14_5) || ! empty ($bet14_6) || ! empty ($bet14_7) || ! empty ($bet14_8) || ! empty ($bet14_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum14."', '".$bet14_1."', '".$bet14_2."', '".$bet14_3."', '".$bet14_4."', '".$bet14_5."', '".$bet14_6."', '".$bet14_7."', '".$bet14_8."', '".$bet14_9."', '".$ttl14."', '".$chkmag14."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag15)){
    if(! empty($betNum15) && (! empty ($bet15_1) || ! empty ($bet15_2) || ! empty ($bet15_3) || ! empty ($bet15_4) || ! empty ($bet15_5) || ! empty ($bet15_6) || ! empty ($bet15_7) || ! empty ($bet15_8) || ! empty ($bet15_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum15."', '".$bet15_1."', '".$bet15_2."', '".$bet15_3."', '".$bet15_4."', '".$bet15_5."', '".$bet15_6."', '".$bet15_7."', '".$bet15_8."', '".$bet15_9."', '".$ttl15."', '".$chkmag15."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }





  if(!empty($chkdmc1)){
    if(! empty($betNum1) && (! empty ($bet1_1) || ! empty ($bet1_2) || ! empty ($bet1_3) || ! empty ($bet1_4) || ! empty ($bet1_5) || ! empty ($bet1_6) || ! empty ($bet1_7) || ! empty ($bet1_8) || ! empty ($bet1_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum1."', '".$bet1_1."', '".$bet1_2."', '".$bet1_3."', '".$bet1_4."', '".$bet1_5."', '".$bet1_6."', '".$bet1_7."', '".$bet1_8."', '".$bet1_9."', '".$ttl1."', '".$chkdmc1."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);

                $chkdone = 1;
  }
}
  if(!empty($chkdmc2)){
    if(! empty($betNum2) && (! empty ($bet2_1) || ! empty ($bet2_2) || ! empty ($bet2_3) || ! empty ($bet2_4) || ! empty ($bet2_5) || ! empty ($bet2_6) || ! empty ($bet2_7) || ! empty ($bet2_8) || ! empty ($bet2_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum2."', '".$bet2_1."', '".$bet2_2."', '".$bet2_3."', '".$bet2_4."', '".$bet2_5."', '".$bet2_6."', '".$bet2_7."', '".$bet2_8."', '".$bet2_9."', '".$ttl2."', '".$chkdmc2."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc3)){
    if(! empty($betNum3) && (! empty ($bet3_1) || ! empty ($bet3_2) || ! empty ($bet3_3) || ! empty ($bet3_4) || ! empty ($bet3_5) || ! empty ($bet3_6) || ! empty ($bet3_7) || ! empty ($bet3_8) || ! empty ($bet3_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum3."', '".$bet3_1."', '".$bet3_2."', '".$bet3_3."', '".$bet3_4."', '".$bet3_5."', '".$bet3_6."', '".$bet3_7."', '".$bet3_8."', '".$bet3_9."', '".$ttl3."', '".$chkdmc3."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkdmc4)){
    if(! empty($betNum4) && (! empty ($bet4_1) || ! empty ($bet4_2) || ! empty ($bet4_3) || ! empty ($bet4_4) || ! empty ($bet4_5) || ! empty ($bet4_6) || ! empty ($bet4_7) || ! empty ($bet4_8) || ! empty ($bet4_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum4."', '".$bet4_1."', '".$bet4_2."', '".$bet4_3."', '".$bet4_4."', '".$bet4_5."', '".$bet4_6."', '".$bet4_7."', '".$bet4_8."', '".$bet4_9."', '".$ttl4."', '".$chkdmc4."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc5)){
    if(! empty($betNum5) && (! empty ($bet5_1) || ! empty ($bet5_2) || ! empty ($bet5_3) || ! empty ($bet5_4) || ! empty ($bet5_5) || ! empty ($bet5_6) || ! empty ($bet5_7) || ! empty ($bet5_8) || ! empty ($bet5_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum5."', '".$bet5_1."', '".$bet5_2."', '".$bet5_3."', '".$bet5_4."', '".$bet5_5."', '".$bet5_6."', '".$bet5_7."', '".$bet5_8."', '".$bet5_9."', '".$ttl5."', '".$chkdmc5."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkdmc6)){
    if(! empty($betNum6) && (! empty ($bet6_1) || ! empty ($bet6_2) || ! empty ($bet6_3) || ! empty ($bet6_4) || ! empty ($bet6_5) || ! empty ($bet6_6) || ! empty ($bet6_7) || ! empty ($bet6_8) || ! empty ($bet6_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum6."', '".$bet6_1."', '".$bet6_2."', '".$bet6_3."', '".$bet6_4."', '".$bet6_5."', '".$bet6_6."', '".$bet6_7."', '".$bet6_8."', '".$bet6_9."', '".$ttl6."', '".$chkdmc6."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc7)){
    if(! empty($betNum7) && (! empty ($bet7_1) || ! empty ($bet7_2) || ! empty ($bet7_3) || ! empty ($bet7_4) || ! empty ($bet7_5) || ! empty ($bet7_6) || ! empty ($bet7_7) || ! empty ($bet7_8) || ! empty ($bet7_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum7."', '".$bet7_1."', '".$bet7_2."', '".$bet7_3."', '".$bet7_4."', '".$bet7_5."', '".$bet7_6."', '".$bet7_7."', '".$bet7_8."', '".$bet7_9."', '".$ttl7."', '".$chkdmc7."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc8)){
    if(! empty($betNum8) && (! empty ($bet8_1) || ! empty ($bet8_2) || ! empty ($bet8_3) || ! empty ($bet8_4) || ! empty ($bet8_5) || ! empty ($bet8_6) || ! empty ($bet8_7) || ! empty ($bet8_8) || ! empty ($bet8_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum8."', '".$bet8_1."', '".$bet8_2."', '".$bet8_3."', '".$bet8_4."', '".$bet8_5."', '".$bet8_6."', '".$bet8_7."', '".$bet8_8."', '".$bet8_9."', '".$ttl8."', '".$chkdmc8."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc9)){
    if(! empty($betNum9) && (! empty ($bet9_1) || ! empty ($bet9_2) || ! empty ($bet9_3) || ! empty ($bet9_4) || ! empty ($bet9_5) || ! empty ($bet9_6) || ! empty ($bet9_7) || ! empty ($bet9_8) || ! empty ($bet9_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum9."', '".$bet9_1."', '".$bet9_2."', '".$bet9_3."', '".$bet9_4."', '".$bet9_5."', '".$bet9_6."', '".$bet9_7."', '".$bet9_8."', '".$bet9_9."', '".$ttl9."', '".$chkdmc9."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc10)){
    if(! empty($betNum10) && (! empty ($bet10_1) || ! empty ($bet10_2) || ! empty ($bet10_3) || ! empty ($bet10_4) || ! empty ($bet10_5) || ! empty ($bet10_6) || ! empty ($bet10_7) || ! empty ($bet10_8) || ! empty ($bet10_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum10."', '".$bet10_1."', '".$bet10_2."', '".$bet10_3."', '".$bet10_4."', '".$bet10_5."', '".$bet10_6."', '".$bet10_7."', '".$bet10_8."', '".$bet10_9."', '".$ttl10."', '".$chkdmc10."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkdmc11)){
    if(! empty($betNum11) && (! empty ($bet11_1) || ! empty ($bet11_2) || ! empty ($bet11_3) || ! empty ($bet11_4) || ! empty ($bet11_5) || ! empty ($bet11_6) || ! empty ($bet11_7) || ! empty ($bet11_8) || ! empty ($bet11_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum11."', '".$bet11_1."', '".$bet11_2."', '".$bet11_3."', '".$bet11_4."', '".$bet11_5."', '".$bet11_6."', '".$bet11_7."', '".$bet11_8."', '".$bet11_9."', '".$ttl11."', '".$chkdmc11."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc12)){
    if(! empty($betNum12) && (! empty ($bet12_1) || ! empty ($bet12_2) || ! empty ($bet12_3) || ! empty ($bet12_4) || ! empty ($bet12_5) || ! empty ($bet12_6) || ! empty ($bet12_7) || ! empty ($bet12_8) || ! empty ($bet12_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum12."', '".$bet12_1."', '".$bet12_2."', '".$bet12_3."', '".$bet12_4."', '".$bet12_5."', '".$bet12_6."', '".$bet12_7."', '".$bet12_8."', '".$bet12_9."', '".$ttl12."', '".$chkdmc12."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc13)){
    if(! empty($betNum13) && (! empty ($bet13_1) || ! empty ($bet13_2) || ! empty ($bet13_3) || ! empty ($bet13_4) || ! empty ($bet13_5) || ! empty ($bet13_6) || ! empty ($bet13_7) || ! empty ($bet13_8) || ! empty ($bet13_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum13."', '".$bet13_1."', '".$bet13_2."', '".$bet13_3."', '".$bet13_4."', '".$bet13_5."', '".$bet13_6."', '".$bet13_7."', '".$bet13_8."', '".$bet13_9."', '".$ttl13."', '".$chkdmc13."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkdmc14)){
    if(! empty($betNum14) && (! empty ($bet14_1) || ! empty ($bet14_2) || ! empty ($bet14_3) || ! empty ($bet14_4) || ! empty ($bet14_5) || ! empty ($bet14_6) || ! empty ($bet14_7) || ! empty ($bet14_8) || ! empty ($bet14_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum14."', '".$bet14_1."', '".$bet14_2."', '".$bet14_3."', '".$bet14_4."', '".$bet14_5."', '".$bet14_6."', '".$bet14_7."', '".$bet14_8."', '".$bet14_9."', '".$ttl14."', '".$chkdmc14."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc15)){
    if(! empty($betNum15) && (! empty ($bet15_1) || ! empty ($bet15_2) || ! empty ($bet15_3) || ! empty ($bet15_4) || ! empty ($bet15_5) || ! empty ($bet15_6) || ! empty ($bet15_7) || ! empty ($bet15_8) || ! empty ($bet15_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum15."', '".$bet15_1."', '".$bet15_2."', '".$bet15_3."', '".$bet15_4."', '".$bet15_5."', '".$bet15_6."', '".$bet15_7."', '".$bet15_8."', '".$bet15_9."', '".$ttl15."', '".$chkdmc15."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }





  if(!empty($chktot1)){
    if(! empty($betNum1) && (! empty ($bet1_1) || ! empty ($bet1_2) || ! empty ($bet1_3) || ! empty ($bet1_4) || ! empty ($bet1_5) || ! empty ($bet1_6) || ! empty ($bet1_7) || ! empty ($bet1_8) || ! empty ($bet1_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum1."', '".$bet1_1."', '".$bet1_2."', '".$bet1_3."', '".$bet1_4."', '".$bet1_5."', '".$bet1_6."', '".$bet1_7."', '".$bet1_8."', '".$bet1_9."', '".$ttl1."', '".$chktot1."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);

                $chkdone = 1;
  }
}
  if(!empty($chktot2)){
    if(! empty($betNum2) && (! empty ($bet2_1) || ! empty ($bet2_2) || ! empty ($bet2_3) || ! empty ($bet2_4) || ! empty ($bet2_5) || ! empty ($bet2_6) || ! empty ($bet2_7) || ! empty ($bet2_8) || ! empty ($bet2_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum2."', '".$bet2_1."', '".$bet2_2."', '".$bet2_3."', '".$bet2_4."', '".$bet2_5."', '".$bet2_6."', '".$bet2_7."', '".$bet2_8."', '".$bet2_9."', '".$ttl2."', '".$chktot2."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot3)){
    if(! empty($betNum3) && (! empty ($bet3_1) || ! empty ($bet3_2) || ! empty ($bet3_3) || ! empty ($bet3_4) || ! empty ($bet3_5) || ! empty ($bet3_6) || ! empty ($bet3_7) || ! empty ($bet3_8) || ! empty ($bet3_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum3."', '".$bet3_1."', '".$bet3_2."', '".$bet3_3."', '".$bet3_4."', '".$bet3_5."', '".$bet3_6."', '".$bet3_7."', '".$bet3_8."', '".$bet3_9."', '".$ttl3."', '".$chktot3."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chktot4)){
    if(! empty($betNum4) && (! empty ($bet4_1) || ! empty ($bet4_2) || ! empty ($bet4_3) || ! empty ($bet4_4) || ! empty ($bet4_5) || ! empty ($bet4_6) || ! empty ($bet4_7) || ! empty ($bet4_8) || ! empty ($bet4_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum4."', '".$bet4_1."', '".$bet4_2."', '".$bet4_3."', '".$bet4_4."', '".$bet4_5."', '".$bet4_6."', '".$bet4_7."', '".$bet4_8."', '".$bet4_9."', '".$ttl4."', '".$chktot4."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot5)){
    if(! empty($betNum5) && (! empty ($bet5_1) || ! empty ($bet5_2) || ! empty ($bet5_3) || ! empty ($bet5_4) || ! empty ($bet5_5) || ! empty ($bet5_6) || ! empty ($bet5_7) || ! empty ($bet5_8) || ! empty ($bet5_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum5."', '".$bet5_1."', '".$bet5_2."', '".$bet5_3."', '".$bet5_4."', '".$bet5_5."', '".$bet5_6."', '".$bet5_7."', '".$bet5_8."', '".$bet5_9."', '".$ttl5."', '".$chktot5."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chktot6)){
    if(! empty($betNum6) && (! empty ($bet6_1) || ! empty ($bet6_2) || ! empty ($bet6_3) || ! empty ($bet6_4) || ! empty ($bet6_5) || ! empty ($bet6_6) || ! empty ($bet6_7) || ! empty ($bet6_8) || ! empty ($bet6_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum6."', '".$bet6_1."', '".$bet6_2."', '".$bet6_3."', '".$bet6_4."', '".$bet6_5."', '".$bet6_6."', '".$bet6_7."', '".$bet6_8."', '".$bet6_9."', '".$ttl6."', '".$chktot6."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot7)){
    if(! empty($betNum7) && (! empty ($bet7_1) || ! empty ($bet7_2) || ! empty ($bet7_3) || ! empty ($bet7_4) || ! empty ($bet7_5) || ! empty ($bet7_6) || ! empty ($bet7_7) || ! empty ($bet7_8) || ! empty ($bet7_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum7."', '".$bet7_1."', '".$bet7_2."', '".$bet7_3."', '".$bet7_4."', '".$bet7_5."', '".$bet7_6."', '".$bet7_7."', '".$bet7_8."', '".$bet7_9."', '".$ttl7."', '".$chktot7."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot8)){
    if(! empty($betNum8) && (! empty ($bet8_1) || ! empty ($bet8_2) || ! empty ($bet8_3) || ! empty ($bet8_4) || ! empty ($bet8_5) || ! empty ($bet8_6) || ! empty ($bet8_7) || ! empty ($bet8_8) || ! empty ($bet8_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum8."', '".$bet8_1."', '".$bet8_2."', '".$bet8_3."', '".$bet8_4."', '".$bet8_5."', '".$bet8_6."', '".$bet8_7."', '".$bet8_8."', '".$bet8_9."', '".$ttl8."', '".$chktot8."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot9)){
    if(! empty($betNum9) && (! empty ($bet9_1) || ! empty ($bet9_2) || ! empty ($bet9_3) || ! empty ($bet9_4) || ! empty ($bet9_5) || ! empty ($bet9_6) || ! empty ($bet9_7) || ! empty ($bet9_8) || ! empty ($bet9_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum9."', '".$bet9_1."', '".$bet9_2."', '".$bet9_3."', '".$bet9_4."', '".$bet9_5."', '".$bet9_6."', '".$bet9_7."', '".$bet9_8."', '".$bet9_9."', '".$ttl9."', '".$chktot9."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot10)){
    if(! empty($betNum10) && (! empty ($bet10_1) || ! empty ($bet10_2) || ! empty ($bet10_3) || ! empty ($bet10_4) || ! empty ($bet10_5) || ! empty ($bet10_6) || ! empty ($bet10_7) || ! empty ($bet10_8) || ! empty ($bet10_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum10."', '".$bet10_1."', '".$bet10_2."', '".$bet10_3."', '".$bet10_4."', '".$bet10_5."', '".$bet10_6."', '".$bet10_7."', '".$bet10_8."', '".$bet10_9."', '".$ttl10."', '".$chktot10."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chktot11)){
    if(! empty($betNum11) && (! empty ($bet11_1) || ! empty ($bet11_2) || ! empty ($bet11_3) || ! empty ($bet11_4) || ! empty ($bet11_5) || ! empty ($bet11_6) || ! empty ($bet11_7) || ! empty ($bet11_8) || ! empty ($bet11_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum11."', '".$bet11_1."', '".$bet11_2."', '".$bet11_3."', '".$bet11_4."', '".$bet11_5."', '".$bet11_6."', '".$bet11_7."', '".$bet11_8."', '".$bet11_9."', '".$ttl11."', '".$chktot11."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot12)){
    if(! empty($betNum12) && (! empty ($bet12_1) || ! empty ($bet12_2) || ! empty ($bet12_3) || ! empty ($bet12_4) || ! empty ($bet12_5) || ! empty ($bet12_6) || ! empty ($bet12_7) || ! empty ($bet12_8) || ! empty ($bet12_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum12."', '".$bet12_1."', '".$bet12_2."', '".$bet12_3."', '".$bet12_4."', '".$bet12_5."', '".$bet12_6."', '".$bet12_7."', '".$bet12_8."', '".$bet12_9."', '".$ttl12."', '".$chktot12."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot13)){
    if(! empty($betNum13) && (! empty ($bet13_1) || ! empty ($bet13_2) || ! empty ($bet13_3) || ! empty ($bet13_4) || ! empty ($bet13_5) || ! empty ($bet13_6) || ! empty ($bet13_7) || ! empty ($bet13_8) || ! empty ($bet13_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum13."', '".$bet13_1."', '".$bet13_2."', '".$bet13_3."', '".$bet13_4."', '".$bet13_5."', '".$bet13_6."', '".$bet13_7."', '".$bet13_8."', '".$bet13_9."', '".$ttl13."', '".$chktot13."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chktot14)){
    if(! empty($betNum14) && (! empty ($bet14_1) || ! empty ($bet14_2) || ! empty ($bet14_3) || ! empty ($bet14_4) || ! empty ($bet14_5) || ! empty ($bet14_6) || ! empty ($bet14_7) || ! empty ($bet14_8) || ! empty ($bet14_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum14."', '".$bet14_1."', '".$bet14_2."', '".$bet14_3."', '".$bet14_4."', '".$bet14_5."', '".$bet14_6."', '".$bet14_7."', '".$bet14_8."', '".$bet14_9."', '".$ttl14."', '".$chktot14."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot15)){
    if(! empty($betNum15) && (! empty ($bet15_1) || ! empty ($bet15_2) || ! empty ($bet15_3) || ! empty ($bet15_4) || ! empty ($bet15_5) || ! empty ($bet15_6) || ! empty ($bet15_7) || ! empty ($bet15_8) || ! empty ($bet15_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum15."', '".$bet15_1."', '".$bet15_2."', '".$bet15_3."', '".$bet15_4."', '".$bet15_5."', '".$bet15_6."', '".$bet15_7."', '".$bet15_8."', '".$bet15_9."', '".$ttl15."', '".$chktot15."', '".$wedbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
}



















if(! empty($satbet)){
  if(!empty($chkmag1)){
    if(! empty($betNum1) && (! empty ($bet1_1) || ! empty ($bet1_2) || ! empty ($bet1_3) || ! empty ($bet1_4) || ! empty ($bet1_5) || ! empty ($bet1_6) || ! empty ($bet1_7) || ! empty ($bet1_8) || ! empty ($bet1_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum1."', '".$bet1_1."', '".$bet1_2."', '".$bet1_3."', '".$bet1_4."', '".$bet1_5."', '".$bet1_6."', '".$bet1_7."', '".$bet1_8."', '".$bet1_9."', '".$ttl1."', '".$chkmag1."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);

                $chkdone = 1;
  }
}
  if(!empty($chkmag2)){
    if(! empty($betNum2) && (! empty ($bet2_1) || ! empty ($bet2_2) || ! empty ($bet2_3) || ! empty ($bet2_4) || ! empty ($bet2_5) || ! empty ($bet2_6) || ! empty ($bet2_7) || ! empty ($bet2_8) || ! empty ($bet2_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum2."', '".$bet2_1."', '".$bet2_2."', '".$bet2_3."', '".$bet2_4."', '".$bet2_5."', '".$bet2_6."', '".$bet2_7."', '".$bet2_8."', '".$bet2_9."', '".$ttl2."', '".$chkmag2."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag3)){
    if(! empty($betNum3) && (! empty ($bet3_1) || ! empty ($bet3_2) || ! empty ($bet3_3) || ! empty ($bet3_4) || ! empty ($bet3_5) || ! empty ($bet3_6) || ! empty ($bet3_7) || ! empty ($bet3_8) || ! empty ($bet3_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum3."', '".$bet3_1."', '".$bet3_2."', '".$bet3_3."', '".$bet3_4."', '".$bet3_5."', '".$bet3_6."', '".$bet3_7."', '".$bet3_8."', '".$bet3_9."', '".$ttl3."', '".$chkmag3."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkmag4)){
    if(! empty($betNum4) && (! empty ($bet4_1) || ! empty ($bet4_2) || ! empty ($bet4_3) || ! empty ($bet4_4) || ! empty ($bet4_5) || ! empty ($bet4_6) || ! empty ($bet4_7) || ! empty ($bet4_8) || ! empty ($bet4_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum4."', '".$bet4_1."', '".$bet4_2."', '".$bet4_3."', '".$bet4_4."', '".$bet4_5."', '".$bet4_6."', '".$bet4_7."', '".$bet4_8."', '".$bet4_9."', '".$ttl4."', '".$chkmag4."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag5)){
    if(! empty($betNum5) && (! empty ($bet5_1) || ! empty ($bet5_2) || ! empty ($bet5_3) || ! empty ($bet5_4) || ! empty ($bet5_5) || ! empty ($bet5_6) || ! empty ($bet5_7) || ! empty ($bet5_8) || ! empty ($bet5_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum5."', '".$bet5_1."', '".$bet5_2."', '".$bet5_3."', '".$bet5_4."', '".$bet5_5."', '".$bet5_6."', '".$bet5_7."', '".$bet5_8."', '".$bet5_9."', '".$ttl5."', '".$chkmag5."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkmag6)){
    if(! empty($betNum6) && (! empty ($bet6_1) || ! empty ($bet6_2) || ! empty ($bet6_3) || ! empty ($bet6_4) || ! empty ($bet6_5) || ! empty ($bet6_6) || ! empty ($bet6_7) || ! empty ($bet6_8) || ! empty ($bet6_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum6."', '".$bet6_1."', '".$bet6_2."', '".$bet6_3."', '".$bet6_4."', '".$bet6_5."', '".$bet6_6."', '".$bet6_7."', '".$bet6_8."', '".$bet6_9."', '".$ttl6."', '".$chkmag6."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag7)){
    if(! empty($betNum7) && (! empty ($bet7_1) || ! empty ($bet7_2) || ! empty ($bet7_3) || ! empty ($bet7_4) || ! empty ($bet7_5) || ! empty ($bet7_6) || ! empty ($bet7_7) || ! empty ($bet7_8) || ! empty ($bet7_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum7."', '".$bet7_1."', '".$bet7_2."', '".$bet7_3."', '".$bet7_4."', '".$bet7_5."', '".$bet7_6."', '".$bet7_7."', '".$bet7_8."', '".$bet7_9."', '".$ttl7."', '".$chkmag7."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag8)){
    if(! empty($betNum8) && (! empty ($bet8_1) || ! empty ($bet8_2) || ! empty ($bet8_3) || ! empty ($bet8_4) || ! empty ($bet8_5) || ! empty ($bet8_6) || ! empty ($bet8_7) || ! empty ($bet8_8) || ! empty ($bet8_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum8."', '".$bet8_1."', '".$bet8_2."', '".$bet8_3."', '".$bet8_4."', '".$bet8_5."', '".$bet8_6."', '".$bet8_7."', '".$bet8_8."', '".$bet8_9."', '".$ttl8."', '".$chkmag8."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag9)){
    if(! empty($betNum9) && (! empty ($bet9_1) || ! empty ($bet9_2) || ! empty ($bet9_3) || ! empty ($bet9_4) || ! empty ($bet9_5) || ! empty ($bet9_6) || ! empty ($bet9_7) || ! empty ($bet9_8) || ! empty ($bet9_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum9."', '".$bet9_1."', '".$bet9_2."', '".$bet9_3."', '".$bet9_4."', '".$bet9_5."', '".$bet9_6."', '".$bet9_7."', '".$bet9_8."', '".$bet9_9."', '".$ttl9."', '".$chkmag9."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag10)){
    if(! empty($betNum10) && (! empty ($bet10_1) || ! empty ($bet10_2) || ! empty ($bet10_3) || ! empty ($bet10_4) || ! empty ($bet10_5) || ! empty ($bet10_6) || ! empty ($bet10_7) || ! empty ($bet10_8) || ! empty ($bet10_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum10."', '".$bet10_1."', '".$bet10_2."', '".$bet10_3."', '".$bet10_4."', '".$bet10_5."', '".$bet10_6."', '".$bet10_7."', '".$bet10_8."', '".$bet10_9."', '".$ttl10."', '".$chkmag10."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkmag11)){
    if(! empty($betNum11) && (! empty ($bet11_1) || ! empty ($bet11_2) || ! empty ($bet11_3) || ! empty ($bet11_4) || ! empty ($bet11_5) || ! empty ($bet11_6) || ! empty ($bet11_7) || ! empty ($bet11_8) || ! empty ($bet11_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum11."', '".$bet11_1."', '".$bet11_2."', '".$bet11_3."', '".$bet11_4."', '".$bet11_5."', '".$bet11_6."', '".$bet11_7."', '".$bet11_8."', '".$bet11_9."', '".$ttl11."', '".$chkmag11."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag12)){
    if(! empty($betNum12) && (! empty ($bet12_1) || ! empty ($bet12_2) || ! empty ($bet12_3) || ! empty ($bet12_4) || ! empty ($bet12_5) || ! empty ($bet12_6) || ! empty ($bet12_7) || ! empty ($bet12_8) || ! empty ($bet12_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum12."', '".$bet12_1."', '".$bet12_2."', '".$bet12_3."', '".$bet12_4."', '".$bet12_5."', '".$bet12_6."', '".$bet12_7."', '".$bet12_8."', '".$bet12_9."', '".$ttl12."', '".$chkmag12."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag13)){
    if(! empty($betNum13) && (! empty ($bet13_1) || ! empty ($bet13_2) || ! empty ($bet13_3) || ! empty ($bet13_4) || ! empty ($bet13_5) || ! empty ($bet13_6) || ! empty ($bet13_7) || ! empty ($bet13_8) || ! empty ($bet13_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum13."', '".$bet13_1."', '".$bet13_2."', '".$bet13_3."', '".$bet13_4."', '".$bet13_5."', '".$bet13_6."', '".$bet13_7."', '".$bet13_8."', '".$bet13_9."', '".$ttl13."', '".$chkmag13."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkmag14)){
    if(! empty($betNum14) && (! empty ($bet14_1) || ! empty ($bet14_2) || ! empty ($bet14_3) || ! empty ($bet14_4) || ! empty ($bet14_5) || ! empty ($bet14_6) || ! empty ($bet14_7) || ! empty ($bet14_8) || ! empty ($bet14_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum14."', '".$bet14_1."', '".$bet14_2."', '".$bet14_3."', '".$bet14_4."', '".$bet14_5."', '".$bet14_6."', '".$bet14_7."', '".$bet14_8."', '".$bet14_9."', '".$ttl14."', '".$chkmag14."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag15)){
    if(! empty($betNum15) && (! empty ($bet15_1) || ! empty ($bet15_2) || ! empty ($bet15_3) || ! empty ($bet15_4) || ! empty ($bet15_5) || ! empty ($bet15_6) || ! empty ($bet15_7) || ! empty ($bet15_8) || ! empty ($bet15_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum15."', '".$bet15_1."', '".$bet15_2."', '".$bet15_3."', '".$bet15_4."', '".$bet15_5."', '".$bet15_6."', '".$bet15_7."', '".$bet15_8."', '".$bet15_9."', '".$ttl15."', '".$chkmag15."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }





  if(!empty($chkdmc1)){
    if(! empty($betNum1) && (! empty ($bet1_1) || ! empty ($bet1_2) || ! empty ($bet1_3) || ! empty ($bet1_4) || ! empty ($bet1_5) || ! empty ($bet1_6) || ! empty ($bet1_7) || ! empty ($bet1_8) || ! empty ($bet1_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum1."', '".$bet1_1."', '".$bet1_2."', '".$bet1_3."', '".$bet1_4."', '".$bet1_5."', '".$bet1_6."', '".$bet1_7."', '".$bet1_8."', '".$bet1_9."', '".$ttl1."', '".$chkdmc1."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);

                $chkdone = 1;
  }
}
  if(!empty($chkdmc2)){
    if(! empty($betNum2) && (! empty ($bet2_1) || ! empty ($bet2_2) || ! empty ($bet2_3) || ! empty ($bet2_4) || ! empty ($bet2_5) || ! empty ($bet2_6) || ! empty ($bet2_7) || ! empty ($bet2_8) || ! empty ($bet2_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum2."', '".$bet2_1."', '".$bet2_2."', '".$bet2_3."', '".$bet2_4."', '".$bet2_5."', '".$bet2_6."', '".$bet2_7."', '".$bet2_8."', '".$bet2_9."', '".$ttl2."', '".$chkdmc2."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc3)){
    if(! empty($betNum3) && (! empty ($bet3_1) || ! empty ($bet3_2) || ! empty ($bet3_3) || ! empty ($bet3_4) || ! empty ($bet3_5) || ! empty ($bet3_6) || ! empty ($bet3_7) || ! empty ($bet3_8) || ! empty ($bet3_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum3."', '".$bet3_1."', '".$bet3_2."', '".$bet3_3."', '".$bet3_4."', '".$bet3_5."', '".$bet3_6."', '".$bet3_7."', '".$bet3_8."', '".$bet3_9."', '".$ttl3."', '".$chkdmc3."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkdmc4)){
    if(! empty($betNum4) && (! empty ($bet4_1) || ! empty ($bet4_2) || ! empty ($bet4_3) || ! empty ($bet4_4) || ! empty ($bet4_5) || ! empty ($bet4_6) || ! empty ($bet4_7) || ! empty ($bet4_8) || ! empty ($bet4_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum4."', '".$bet4_1."', '".$bet4_2."', '".$bet4_3."', '".$bet4_4."', '".$bet4_5."', '".$bet4_6."', '".$bet4_7."', '".$bet4_8."', '".$bet4_9."', '".$ttl4."', '".$chkdmc4."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc5)){
    if(! empty($betNum5) && (! empty ($bet5_1) || ! empty ($bet5_2) || ! empty ($bet5_3) || ! empty ($bet5_4) || ! empty ($bet5_5) || ! empty ($bet5_6) || ! empty ($bet5_7) || ! empty ($bet5_8) || ! empty ($bet5_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum5."', '".$bet5_1."', '".$bet5_2."', '".$bet5_3."', '".$bet5_4."', '".$bet5_5."', '".$bet5_6."', '".$bet5_7."', '".$bet5_8."', '".$bet5_9."', '".$ttl5."', '".$chkdmc5."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkdmc6)){
    if(! empty($betNum6) && (! empty ($bet6_1) || ! empty ($bet6_2) || ! empty ($bet6_3) || ! empty ($bet6_4) || ! empty ($bet6_5) || ! empty ($bet6_6) || ! empty ($bet6_7) || ! empty ($bet6_8) || ! empty ($bet6_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum6."', '".$bet6_1."', '".$bet6_2."', '".$bet6_3."', '".$bet6_4."', '".$bet6_5."', '".$bet6_6."', '".$bet6_7."', '".$bet6_8."', '".$bet6_9."', '".$ttl6."', '".$chkdmc6."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc7)){
    if(! empty($betNum7) && (! empty ($bet7_1) || ! empty ($bet7_2) || ! empty ($bet7_3) || ! empty ($bet7_4) || ! empty ($bet7_5) || ! empty ($bet7_6) || ! empty ($bet7_7) || ! empty ($bet7_8) || ! empty ($bet7_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum7."', '".$bet7_1."', '".$bet7_2."', '".$bet7_3."', '".$bet7_4."', '".$bet7_5."', '".$bet7_6."', '".$bet7_7."', '".$bet7_8."', '".$bet7_9."', '".$ttl7."', '".$chkdmc7."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc8)){
    if(! empty($betNum8) && (! empty ($bet8_1) || ! empty ($bet8_2) || ! empty ($bet8_3) || ! empty ($bet8_4) || ! empty ($bet8_5) || ! empty ($bet8_6) || ! empty ($bet8_7) || ! empty ($bet8_8) || ! empty ($bet8_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum8."', '".$bet8_1."', '".$bet8_2."', '".$bet8_3."', '".$bet8_4."', '".$bet8_5."', '".$bet8_6."', '".$bet8_7."', '".$bet8_8."', '".$bet8_9."', '".$ttl8."', '".$chkdmc8."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc9)){
    if(! empty($betNum9) && (! empty ($bet9_1) || ! empty ($bet9_2) || ! empty ($bet9_3) || ! empty ($bet9_4) || ! empty ($bet9_5) || ! empty ($bet9_6) || ! empty ($bet9_7) || ! empty ($bet9_8) || ! empty ($bet9_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum9."', '".$bet9_1."', '".$bet9_2."', '".$bet9_3."', '".$bet9_4."', '".$bet9_5."', '".$bet9_6."', '".$bet9_7."', '".$bet9_8."', '".$bet9_9."', '".$ttl9."', '".$chkdmc9."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc10)){
    if(! empty($betNum10) && (! empty ($bet10_1) || ! empty ($bet10_2) || ! empty ($bet10_3) || ! empty ($bet10_4) || ! empty ($bet10_5) || ! empty ($bet10_6) || ! empty ($bet10_7) || ! empty ($bet10_8) || ! empty ($bet10_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum10."', '".$bet10_1."', '".$bet10_2."', '".$bet10_3."', '".$bet10_4."', '".$bet10_5."', '".$bet10_6."', '".$bet10_7."', '".$bet10_8."', '".$bet10_9."', '".$ttl10."', '".$chkdmc10."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkdmc11)){
    if(! empty($betNum11) && (! empty ($bet11_1) || ! empty ($bet11_2) || ! empty ($bet11_3) || ! empty ($bet11_4) || ! empty ($bet11_5) || ! empty ($bet11_6) || ! empty ($bet11_7) || ! empty ($bet11_8) || ! empty ($bet11_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum11."', '".$bet11_1."', '".$bet11_2."', '".$bet11_3."', '".$bet11_4."', '".$bet11_5."', '".$bet11_6."', '".$bet11_7."', '".$bet11_8."', '".$bet11_9."', '".$ttl11."', '".$chkdmc11."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc12)){
    if(! empty($betNum12) && (! empty ($bet12_1) || ! empty ($bet12_2) || ! empty ($bet12_3) || ! empty ($bet12_4) || ! empty ($bet12_5) || ! empty ($bet12_6) || ! empty ($bet12_7) || ! empty ($bet12_8) || ! empty ($bet12_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum12."', '".$bet12_1."', '".$bet12_2."', '".$bet12_3."', '".$bet12_4."', '".$bet12_5."', '".$bet12_6."', '".$bet12_7."', '".$bet12_8."', '".$bet12_9."', '".$ttl12."', '".$chkdmc12."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc13)){
    if(! empty($betNum13) && (! empty ($bet13_1) || ! empty ($bet13_2) || ! empty ($bet13_3) || ! empty ($bet13_4) || ! empty ($bet13_5) || ! empty ($bet13_6) || ! empty ($bet13_7) || ! empty ($bet13_8) || ! empty ($bet13_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum13."', '".$bet13_1."', '".$bet13_2."', '".$bet13_3."', '".$bet13_4."', '".$bet13_5."', '".$bet13_6."', '".$bet13_7."', '".$bet13_8."', '".$bet13_9."', '".$ttl13."', '".$chkdmc13."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkdmc14)){
    if(! empty($betNum14) && (! empty ($bet14_1) || ! empty ($bet14_2) || ! empty ($bet14_3) || ! empty ($bet14_4) || ! empty ($bet14_5) || ! empty ($bet14_6) || ! empty ($bet14_7) || ! empty ($bet14_8) || ! empty ($bet14_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum14."', '".$bet14_1."', '".$bet14_2."', '".$bet14_3."', '".$bet14_4."', '".$bet14_5."', '".$bet14_6."', '".$bet14_7."', '".$bet14_8."', '".$bet14_9."', '".$ttl14."', '".$chkdmc14."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc15)){
    if(! empty($betNum15) && (! empty ($bet15_1) || ! empty ($bet15_2) || ! empty ($bet15_3) || ! empty ($bet15_4) || ! empty ($bet15_5) || ! empty ($bet15_6) || ! empty ($bet15_7) || ! empty ($bet15_8) || ! empty ($bet15_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum15."', '".$bet15_1."', '".$bet15_2."', '".$bet15_3."', '".$bet15_4."', '".$bet15_5."', '".$bet15_6."', '".$bet15_7."', '".$bet15_8."', '".$bet15_9."', '".$ttl15."', '".$chkdmc15."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }





  if(!empty($chktot1)){
    if(! empty($betNum1) && (! empty ($bet1_1) || ! empty ($bet1_2) || ! empty ($bet1_3) || ! empty ($bet1_4) || ! empty ($bet1_5) || ! empty ($bet1_6) || ! empty ($bet1_7) || ! empty ($bet1_8) || ! empty ($bet1_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum1."', '".$bet1_1."', '".$bet1_2."', '".$bet1_3."', '".$bet1_4."', '".$bet1_5."', '".$bet1_6."', '".$bet1_7."', '".$bet1_8."', '".$bet1_9."', '".$ttl1."', '".$chktot1."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);

                $chkdone = 1;
  }
}
  if(!empty($chktot2)){
    if(! empty($betNum2) && (! empty ($bet2_1) || ! empty ($bet2_2) || ! empty ($bet2_3) || ! empty ($bet2_4) || ! empty ($bet2_5) || ! empty ($bet2_6) || ! empty ($bet2_7) || ! empty ($bet2_8) || ! empty ($bet2_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum2."', '".$bet2_1."', '".$bet2_2."', '".$bet2_3."', '".$bet2_4."', '".$bet2_5."', '".$bet2_6."', '".$bet2_7."', '".$bet2_8."', '".$bet2_9."', '".$ttl2."', '".$chktot2."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot3)){
    if(! empty($betNum3) && (! empty ($bet3_1) || ! empty ($bet3_2) || ! empty ($bet3_3) || ! empty ($bet3_4) || ! empty ($bet3_5) || ! empty ($bet3_6) || ! empty ($bet3_7) || ! empty ($bet3_8) || ! empty ($bet3_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum3."', '".$bet3_1."', '".$bet3_2."', '".$bet3_3."', '".$bet3_4."', '".$bet3_5."', '".$bet3_6."', '".$bet3_7."', '".$bet3_8."', '".$bet3_9."', '".$ttl3."', '".$chktot3."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chktot4)){
    if(! empty($betNum4) && (! empty ($bet4_1) || ! empty ($bet4_2) || ! empty ($bet4_3) || ! empty ($bet4_4) || ! empty ($bet4_5) || ! empty ($bet4_6) || ! empty ($bet4_7) || ! empty ($bet4_8) || ! empty ($bet4_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum4."', '".$bet4_1."', '".$bet4_2."', '".$bet4_3."', '".$bet4_4."', '".$bet4_5."', '".$bet4_6."', '".$bet4_7."', '".$bet4_8."', '".$bet4_9."', '".$ttl4."', '".$chktot4."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot5)){
    if(! empty($betNum5) && (! empty ($bet5_1) || ! empty ($bet5_2) || ! empty ($bet5_3) || ! empty ($bet5_4) || ! empty ($bet5_5) || ! empty ($bet5_6) || ! empty ($bet5_7) || ! empty ($bet5_8) || ! empty ($bet5_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum5."', '".$bet5_1."', '".$bet5_2."', '".$bet5_3."', '".$bet5_4."', '".$bet5_5."', '".$bet5_6."', '".$bet5_7."', '".$bet5_8."', '".$bet5_9."', '".$ttl5."', '".$chktot5."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chktot6)){
    if(! empty($betNum6) && (! empty ($bet6_1) || ! empty ($bet6_2) || ! empty ($bet6_3) || ! empty ($bet6_4) || ! empty ($bet6_5) || ! empty ($bet6_6) || ! empty ($bet6_7) || ! empty ($bet6_8) || ! empty ($bet6_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum6."', '".$bet6_1."', '".$bet6_2."', '".$bet6_3."', '".$bet6_4."', '".$bet6_5."', '".$bet6_6."', '".$bet6_7."', '".$bet6_8."', '".$bet6_9."', '".$ttl6."', '".$chktot6."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot7)){
    if(! empty($betNum7) && (! empty ($bet7_1) || ! empty ($bet7_2) || ! empty ($bet7_3) || ! empty ($bet7_4) || ! empty ($bet7_5) || ! empty ($bet7_6) || ! empty ($bet7_7) || ! empty ($bet7_8) || ! empty ($bet7_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum7."', '".$bet7_1."', '".$bet7_2."', '".$bet7_3."', '".$bet7_4."', '".$bet7_5."', '".$bet7_6."', '".$bet7_7."', '".$bet7_8."', '".$bet7_9."', '".$ttl7."', '".$chktot7."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot8)){
    if(! empty($betNum8) && (! empty ($bet8_1) || ! empty ($bet8_2) || ! empty ($bet8_3) || ! empty ($bet8_4) || ! empty ($bet8_5) || ! empty ($bet8_6) || ! empty ($bet8_7) || ! empty ($bet8_8) || ! empty ($bet8_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum8."', '".$bet8_1."', '".$bet8_2."', '".$bet8_3."', '".$bet8_4."', '".$bet8_5."', '".$bet8_6."', '".$bet8_7."', '".$bet8_8."', '".$bet8_9."', '".$ttl8."', '".$chktot8."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot9)){
    if(! empty($betNum9) && (! empty ($bet9_1) || ! empty ($bet9_2) || ! empty ($bet9_3) || ! empty ($bet9_4) || ! empty ($bet9_5) || ! empty ($bet9_6) || ! empty ($bet9_7) || ! empty ($bet9_8) || ! empty ($bet9_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum9."', '".$bet9_1."', '".$bet9_2."', '".$bet9_3."', '".$bet9_4."', '".$bet9_5."', '".$bet9_6."', '".$bet9_7."', '".$bet9_8."', '".$bet9_9."', '".$ttl9."', '".$chktot9."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot10)){
    if(! empty($betNum10) && (! empty ($bet10_1) || ! empty ($bet10_2) || ! empty ($bet10_3) || ! empty ($bet10_4) || ! empty ($bet10_5) || ! empty ($bet10_6) || ! empty ($bet10_7) || ! empty ($bet10_8) || ! empty ($bet10_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum10."', '".$bet10_1."', '".$bet10_2."', '".$bet10_3."', '".$bet10_4."', '".$bet10_5."', '".$bet10_6."', '".$bet10_7."', '".$bet10_8."', '".$bet10_9."', '".$ttl10."', '".$chktot10."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chktot11)){
    if(! empty($betNum11) && (! empty ($bet11_1) || ! empty ($bet11_2) || ! empty ($bet11_3) || ! empty ($bet11_4) || ! empty ($bet11_5) || ! empty ($bet11_6) || ! empty ($bet11_7) || ! empty ($bet11_8) || ! empty ($bet11_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum11."', '".$bet11_1."', '".$bet11_2."', '".$bet11_3."', '".$bet11_4."', '".$bet11_5."', '".$bet11_6."', '".$bet11_7."', '".$bet11_8."', '".$bet11_9."', '".$ttl11."', '".$chktot11."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot12)){
    if(! empty($betNum12) && (! empty ($bet12_1) || ! empty ($bet12_2) || ! empty ($bet12_3) || ! empty ($bet12_4) || ! empty ($bet12_5) || ! empty ($bet12_6) || ! empty ($bet12_7) || ! empty ($bet12_8) || ! empty ($bet12_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum12."', '".$bet12_1."', '".$bet12_2."', '".$bet12_3."', '".$bet12_4."', '".$bet12_5."', '".$bet12_6."', '".$bet12_7."', '".$bet12_8."', '".$bet12_9."', '".$ttl12."', '".$chktot12."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot13)){
    if(! empty($betNum13) && (! empty ($bet13_1) || ! empty ($bet13_2) || ! empty ($bet13_3) || ! empty ($bet13_4) || ! empty ($bet13_5) || ! empty ($bet13_6) || ! empty ($bet13_7) || ! empty ($bet13_8) || ! empty ($bet13_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum13."', '".$bet13_1."', '".$bet13_2."', '".$bet13_3."', '".$bet13_4."', '".$bet13_5."', '".$bet13_6."', '".$bet13_7."', '".$bet13_8."', '".$bet13_9."', '".$ttl13."', '".$chktot13."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chktot14)){
    if(! empty($betNum14) && (! empty ($bet14_1) || ! empty ($bet14_2) || ! empty ($bet14_3) || ! empty ($bet14_4) || ! empty ($bet14_5) || ! empty ($bet14_6) || ! empty ($bet14_7) || ! empty ($bet14_8) || ! empty ($bet14_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum14."', '".$bet14_1."', '".$bet14_2."', '".$bet14_3."', '".$bet14_4."', '".$bet14_5."', '".$bet14_6."', '".$bet14_7."', '".$bet14_8."', '".$bet14_9."', '".$ttl14."', '".$chktot14."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot15)){
    if(! empty($betNum15) && (! empty ($bet15_1) || ! empty ($bet15_2) || ! empty ($bet15_3) || ! empty ($bet15_4) || ! empty ($bet15_5) || ! empty ($bet15_6) || ! empty ($bet15_7) || ! empty ($bet15_8) || ! empty ($bet15_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum15."', '".$bet15_1."', '".$bet15_2."', '".$bet15_3."', '".$bet15_4."', '".$bet15_5."', '".$bet15_6."', '".$bet15_7."', '".$bet15_8."', '".$bet15_9."', '".$ttl15."', '".$chktot15."', '".$satbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
}


















  if(! empty($sunbet)){
  if(!empty($chkmag1)){
    if(! empty($betNum1) && (! empty ($bet1_1) || ! empty ($bet1_2) || ! empty ($bet1_3) || ! empty ($bet1_4) || ! empty ($bet1_5) || ! empty ($bet1_6) || ! empty ($bet1_7) || ! empty ($bet1_8) || ! empty ($bet1_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum1."', '".$bet1_1."', '".$bet1_2."', '".$bet1_3."', '".$bet1_4."', '".$bet1_5."', '".$bet1_6."', '".$bet1_7."', '".$bet1_8."', '".$bet1_9."', '".$ttl1."', '".$chkmag1."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);

                $chkdone = 1;
  }
}
  if(!empty($chkmag2)){
    if(! empty($betNum2) && (! empty ($bet2_1) || ! empty ($bet2_2) || ! empty ($bet2_3) || ! empty ($bet2_4) || ! empty ($bet2_5) || ! empty ($bet2_6) || ! empty ($bet2_7) || ! empty ($bet2_8) || ! empty ($bet2_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum2."', '".$bet2_1."', '".$bet2_2."', '".$bet2_3."', '".$bet2_4."', '".$bet2_5."', '".$bet2_6."', '".$bet2_7."', '".$bet2_8."', '".$bet2_9."', '".$ttl2."', '".$chkmag2."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag3)){
    if(! empty($betNum3) && (! empty ($bet3_1) || ! empty ($bet3_2) || ! empty ($bet3_3) || ! empty ($bet3_4) || ! empty ($bet3_5) || ! empty ($bet3_6) || ! empty ($bet3_7) || ! empty ($bet3_8) || ! empty ($bet3_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum3."', '".$bet3_1."', '".$bet3_2."', '".$bet3_3."', '".$bet3_4."', '".$bet3_5."', '".$bet3_6."', '".$bet3_7."', '".$bet3_8."', '".$bet3_9."', '".$ttl3."', '".$chkmag3."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkmag4)){
    if(! empty($betNum4) && (! empty ($bet4_1) || ! empty ($bet4_2) || ! empty ($bet4_3) || ! empty ($bet4_4) || ! empty ($bet4_5) || ! empty ($bet4_6) || ! empty ($bet4_7) || ! empty ($bet4_8) || ! empty ($bet4_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum4."', '".$bet4_1."', '".$bet4_2."', '".$bet4_3."', '".$bet4_4."', '".$bet4_5."', '".$bet4_6."', '".$bet4_7."', '".$bet4_8."', '".$bet4_9."', '".$ttl4."', '".$chkmag4."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag5)){
    if(! empty($betNum5) && (! empty ($bet5_1) || ! empty ($bet5_2) || ! empty ($bet5_3) || ! empty ($bet5_4) || ! empty ($bet5_5) || ! empty ($bet5_6) || ! empty ($bet5_7) || ! empty ($bet5_8) || ! empty ($bet5_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum5."', '".$bet5_1."', '".$bet5_2."', '".$bet5_3."', '".$bet5_4."', '".$bet5_5."', '".$bet5_6."', '".$bet5_7."', '".$bet5_8."', '".$bet5_9."', '".$ttl5."', '".$chkmag5."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkmag6)){
    if(! empty($betNum6) && (! empty ($bet6_1) || ! empty ($bet6_2) || ! empty ($bet6_3) || ! empty ($bet6_4) || ! empty ($bet6_5) || ! empty ($bet6_6) || ! empty ($bet6_7) || ! empty ($bet6_8) || ! empty ($bet6_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum6."', '".$bet6_1."', '".$bet6_2."', '".$bet6_3."', '".$bet6_4."', '".$bet6_5."', '".$bet6_6."', '".$bet6_7."', '".$bet6_8."', '".$bet6_9."', '".$ttl6."', '".$chkmag6."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag7)){
    if(! empty($betNum7) && (! empty ($bet7_1) || ! empty ($bet7_2) || ! empty ($bet7_3) || ! empty ($bet7_4) || ! empty ($bet7_5) || ! empty ($bet7_6) || ! empty ($bet7_7) || ! empty ($bet7_8) || ! empty ($bet7_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum7."', '".$bet7_1."', '".$bet7_2."', '".$bet7_3."', '".$bet7_4."', '".$bet7_5."', '".$bet7_6."', '".$bet7_7."', '".$bet7_8."', '".$bet7_9."', '".$ttl7."', '".$chkmag7."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag8)){
    if(! empty($betNum8) && (! empty ($bet8_1) || ! empty ($bet8_2) || ! empty ($bet8_3) || ! empty ($bet8_4) || ! empty ($bet8_5) || ! empty ($bet8_6) || ! empty ($bet8_7) || ! empty ($bet8_8) || ! empty ($bet8_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum8."', '".$bet8_1."', '".$bet8_2."', '".$bet8_3."', '".$bet8_4."', '".$bet8_5."', '".$bet8_6."', '".$bet8_7."', '".$bet8_8."', '".$bet8_9."', '".$ttl8."', '".$chkmag8."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag9)){
    if(! empty($betNum9) && (! empty ($bet9_1) || ! empty ($bet9_2) || ! empty ($bet9_3) || ! empty ($bet9_4) || ! empty ($bet9_5) || ! empty ($bet9_6) || ! empty ($bet9_7) || ! empty ($bet9_8) || ! empty ($bet9_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum9."', '".$bet9_1."', '".$bet9_2."', '".$bet9_3."', '".$bet9_4."', '".$bet9_5."', '".$bet9_6."', '".$bet9_7."', '".$bet9_8."', '".$bet9_9."', '".$ttl9."', '".$chkmag9."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag10)){
    if(! empty($betNum10) && (! empty ($bet10_1) || ! empty ($bet10_2) || ! empty ($bet10_3) || ! empty ($bet10_4) || ! empty ($bet10_5) || ! empty ($bet10_6) || ! empty ($bet10_7) || ! empty ($bet10_8) || ! empty ($bet10_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum10."', '".$bet10_1."', '".$bet10_2."', '".$bet10_3."', '".$bet10_4."', '".$bet10_5."', '".$bet10_6."', '".$bet10_7."', '".$bet10_8."', '".$bet10_9."', '".$ttl10."', '".$chkmag10."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkmag11)){
    if(! empty($betNum11) && (! empty ($bet11_1) || ! empty ($bet11_2) || ! empty ($bet11_3) || ! empty ($bet11_4) || ! empty ($bet11_5) || ! empty ($bet11_6) || ! empty ($bet11_7) || ! empty ($bet11_8) || ! empty ($bet11_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum11."', '".$bet11_1."', '".$bet11_2."', '".$bet11_3."', '".$bet11_4."', '".$bet11_5."', '".$bet11_6."', '".$bet11_7."', '".$bet11_8."', '".$bet11_9."', '".$ttl11."', '".$chkmag11."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag12)){
    if(! empty($betNum12) && (! empty ($bet12_1) || ! empty ($bet12_2) || ! empty ($bet12_3) || ! empty ($bet12_4) || ! empty ($bet12_5) || ! empty ($bet12_6) || ! empty ($bet12_7) || ! empty ($bet12_8) || ! empty ($bet12_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum12."', '".$bet12_1."', '".$bet12_2."', '".$bet12_3."', '".$bet12_4."', '".$bet12_5."', '".$bet12_6."', '".$bet12_7."', '".$bet12_8."', '".$bet12_9."', '".$ttl12."', '".$chkmag12."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag13)){
    if(! empty($betNum13) && (! empty ($bet13_1) || ! empty ($bet13_2) || ! empty ($bet13_3) || ! empty ($bet13_4) || ! empty ($bet13_5) || ! empty ($bet13_6) || ! empty ($bet13_7) || ! empty ($bet13_8) || ! empty ($bet13_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum13."', '".$bet13_1."', '".$bet13_2."', '".$bet13_3."', '".$bet13_4."', '".$bet13_5."', '".$bet13_6."', '".$bet13_7."', '".$bet13_8."', '".$bet13_9."', '".$ttl13."', '".$chkmag13."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkmag14)){
    if(! empty($betNum14) && (! empty ($bet14_1) || ! empty ($bet14_2) || ! empty ($bet14_3) || ! empty ($bet14_4) || ! empty ($bet14_5) || ! empty ($bet14_6) || ! empty ($bet14_7) || ! empty ($bet14_8) || ! empty ($bet14_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum14."', '".$bet14_1."', '".$bet14_2."', '".$bet14_3."', '".$bet14_4."', '".$bet14_5."', '".$bet14_6."', '".$bet14_7."', '".$bet14_8."', '".$bet14_9."', '".$ttl14."', '".$chkmag14."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag15)){
    if(! empty($betNum15) && (! empty ($bet15_1) || ! empty ($bet15_2) || ! empty ($bet15_3) || ! empty ($bet15_4) || ! empty ($bet15_5) || ! empty ($bet15_6) || ! empty ($bet15_7) || ! empty ($bet15_8) || ! empty ($bet15_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum15."', '".$bet15_1."', '".$bet15_2."', '".$bet15_3."', '".$bet15_4."', '".$bet15_5."', '".$bet15_6."', '".$bet15_7."', '".$bet15_8."', '".$bet15_9."', '".$ttl15."', '".$chkmag15."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }





  if(!empty($chkdmc1)){
    if(! empty($betNum1) && (! empty ($bet1_1) || ! empty ($bet1_2) || ! empty ($bet1_3) || ! empty ($bet1_4) || ! empty ($bet1_5) || ! empty ($bet1_6) || ! empty ($bet1_7) || ! empty ($bet1_8) || ! empty ($bet1_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum1."', '".$bet1_1."', '".$bet1_2."', '".$bet1_3."', '".$bet1_4."', '".$bet1_5."', '".$bet1_6."', '".$bet1_7."', '".$bet1_8."', '".$bet1_9."', '".$ttl1."', '".$chkdmc1."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);

                $chkdone = 1;
  }
}
  if(!empty($chkdmc2)){
    if(! empty($betNum2) && (! empty ($bet2_1) || ! empty ($bet2_2) || ! empty ($bet2_3) || ! empty ($bet2_4) || ! empty ($bet2_5) || ! empty ($bet2_6) || ! empty ($bet2_7) || ! empty ($bet2_8) || ! empty ($bet2_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum2."', '".$bet2_1."', '".$bet2_2."', '".$bet2_3."', '".$bet2_4."', '".$bet2_5."', '".$bet2_6."', '".$bet2_7."', '".$bet2_8."', '".$bet2_9."', '".$ttl2."', '".$chkdmc2."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc3)){
    if(! empty($betNum3) && (! empty ($bet3_1) || ! empty ($bet3_2) || ! empty ($bet3_3) || ! empty ($bet3_4) || ! empty ($bet3_5) || ! empty ($bet3_6) || ! empty ($bet3_7) || ! empty ($bet3_8) || ! empty ($bet3_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum3."', '".$bet3_1."', '".$bet3_2."', '".$bet3_3."', '".$bet3_4."', '".$bet3_5."', '".$bet3_6."', '".$bet3_7."', '".$bet3_8."', '".$bet3_9."', '".$ttl3."', '".$chkdmc3."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkdmc4)){
    if(! empty($betNum4) && (! empty ($bet4_1) || ! empty ($bet4_2) || ! empty ($bet4_3) || ! empty ($bet4_4) || ! empty ($bet4_5) || ! empty ($bet4_6) || ! empty ($bet4_7) || ! empty ($bet4_8) || ! empty ($bet4_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum4."', '".$bet4_1."', '".$bet4_2."', '".$bet4_3."', '".$bet4_4."', '".$bet4_5."', '".$bet4_6."', '".$bet4_7."', '".$bet4_8."', '".$bet4_9."', '".$ttl4."', '".$chkdmc4."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc5)){
    if(! empty($betNum5) && (! empty ($bet5_1) || ! empty ($bet5_2) || ! empty ($bet5_3) || ! empty ($bet5_4) || ! empty ($bet5_5) || ! empty ($bet5_6) || ! empty ($bet5_7) || ! empty ($bet5_8) || ! empty ($bet5_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum5."', '".$bet5_1."', '".$bet5_2."', '".$bet5_3."', '".$bet5_4."', '".$bet5_5."', '".$bet5_6."', '".$bet5_7."', '".$bet5_8."', '".$bet5_9."', '".$ttl5."', '".$chkdmc5."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkdmc6)){
    if(! empty($betNum6) && (! empty ($bet6_1) || ! empty ($bet6_2) || ! empty ($bet6_3) || ! empty ($bet6_4) || ! empty ($bet6_5) || ! empty ($bet6_6) || ! empty ($bet6_7) || ! empty ($bet6_8) || ! empty ($bet6_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum6."', '".$bet6_1."', '".$bet6_2."', '".$bet6_3."', '".$bet6_4."', '".$bet6_5."', '".$bet6_6."', '".$bet6_7."', '".$bet6_8."', '".$bet6_9."', '".$ttl6."', '".$chkdmc6."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc7)){
    if(! empty($betNum7) && (! empty ($bet7_1) || ! empty ($bet7_2) || ! empty ($bet7_3) || ! empty ($bet7_4) || ! empty ($bet7_5) || ! empty ($bet7_6) || ! empty ($bet7_7) || ! empty ($bet7_8) || ! empty ($bet7_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum7."', '".$bet7_1."', '".$bet7_2."', '".$bet7_3."', '".$bet7_4."', '".$bet7_5."', '".$bet7_6."', '".$bet7_7."', '".$bet7_8."', '".$bet7_9."', '".$ttl7."', '".$chkdmc7."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc8)){
    if(! empty($betNum8) && (! empty ($bet8_1) || ! empty ($bet8_2) || ! empty ($bet8_3) || ! empty ($bet8_4) || ! empty ($bet8_5) || ! empty ($bet8_6) || ! empty ($bet8_7) || ! empty ($bet8_8) || ! empty ($bet8_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum8."', '".$bet8_1."', '".$bet8_2."', '".$bet8_3."', '".$bet8_4."', '".$bet8_5."', '".$bet8_6."', '".$bet8_7."', '".$bet8_8."', '".$bet8_9."', '".$ttl8."', '".$chkdmc8."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc9)){
    if(! empty($betNum9) && (! empty ($bet9_1) || ! empty ($bet9_2) || ! empty ($bet9_3) || ! empty ($bet9_4) || ! empty ($bet9_5) || ! empty ($bet9_6) || ! empty ($bet9_7) || ! empty ($bet9_8) || ! empty ($bet9_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum9."', '".$bet9_1."', '".$bet9_2."', '".$bet9_3."', '".$bet9_4."', '".$bet9_5."', '".$bet9_6."', '".$bet9_7."', '".$bet9_8."', '".$bet9_9."', '".$ttl9."', '".$chkdmc9."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc10)){
    if(! empty($betNum10) && (! empty ($bet10_1) || ! empty ($bet10_2) || ! empty ($bet10_3) || ! empty ($bet10_4) || ! empty ($bet10_5) || ! empty ($bet10_6) || ! empty ($bet10_7) || ! empty ($bet10_8) || ! empty ($bet10_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum10."', '".$bet10_1."', '".$bet10_2."', '".$bet10_3."', '".$bet10_4."', '".$bet10_5."', '".$bet10_6."', '".$bet10_7."', '".$bet10_8."', '".$bet10_9."', '".$ttl10."', '".$chkdmc10."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkdmc11)){
    if(! empty($betNum11) && (! empty ($bet11_1) || ! empty ($bet11_2) || ! empty ($bet11_3) || ! empty ($bet11_4) || ! empty ($bet11_5) || ! empty ($bet11_6) || ! empty ($bet11_7) || ! empty ($bet11_8) || ! empty ($bet11_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum11."', '".$bet11_1."', '".$bet11_2."', '".$bet11_3."', '".$bet11_4."', '".$bet11_5."', '".$bet11_6."', '".$bet11_7."', '".$bet11_8."', '".$bet11_9."', '".$ttl11."', '".$chkdmc11."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc12)){
    if(! empty($betNum12) && (! empty ($bet12_1) || ! empty ($bet12_2) || ! empty ($bet12_3) || ! empty ($bet12_4) || ! empty ($bet12_5) || ! empty ($bet12_6) || ! empty ($bet12_7) || ! empty ($bet12_8) || ! empty ($bet12_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum12."', '".$bet12_1."', '".$bet12_2."', '".$bet12_3."', '".$bet12_4."', '".$bet12_5."', '".$bet12_6."', '".$bet12_7."', '".$bet12_8."', '".$bet12_9."', '".$ttl12."', '".$chkdmc12."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc13)){
    if(! empty($betNum13) && (! empty ($bet13_1) || ! empty ($bet13_2) || ! empty ($bet13_3) || ! empty ($bet13_4) || ! empty ($bet13_5) || ! empty ($bet13_6) || ! empty ($bet13_7) || ! empty ($bet13_8) || ! empty ($bet13_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum13."', '".$bet13_1."', '".$bet13_2."', '".$bet13_3."', '".$bet13_4."', '".$bet13_5."', '".$bet13_6."', '".$bet13_7."', '".$bet13_8."', '".$bet13_9."', '".$ttl13."', '".$chkdmc13."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkdmc14)){
    if(! empty($betNum14) && (! empty ($bet14_1) || ! empty ($bet14_2) || ! empty ($bet14_3) || ! empty ($bet14_4) || ! empty ($bet14_5) || ! empty ($bet14_6) || ! empty ($bet14_7) || ! empty ($bet14_8) || ! empty ($bet14_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum14."', '".$bet14_1."', '".$bet14_2."', '".$bet14_3."', '".$bet14_4."', '".$bet14_5."', '".$bet14_6."', '".$bet14_7."', '".$bet14_8."', '".$bet14_9."', '".$ttl14."', '".$chkdmc14."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc15)){
    if(! empty($betNum15) && (! empty ($bet15_1) || ! empty ($bet15_2) || ! empty ($bet15_3) || ! empty ($bet15_4) || ! empty ($bet15_5) || ! empty ($bet15_6) || ! empty ($bet15_7) || ! empty ($bet15_8) || ! empty ($bet15_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum15."', '".$bet15_1."', '".$bet15_2."', '".$bet15_3."', '".$bet15_4."', '".$bet15_5."', '".$bet15_6."', '".$bet15_7."', '".$bet15_8."', '".$bet15_9."', '".$ttl15."', '".$chkdmc15."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }





  if(!empty($chktot1)){
    if(! empty($betNum1) && (! empty ($bet1_1) || ! empty ($bet1_2) || ! empty ($bet1_3) || ! empty ($bet1_4) || ! empty ($bet1_5) || ! empty ($bet1_6) || ! empty ($bet1_7) || ! empty ($bet1_8) || ! empty ($bet1_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum1."', '".$bet1_1."', '".$bet1_2."', '".$bet1_3."', '".$bet1_4."', '".$bet1_5."', '".$bet1_6."', '".$bet1_7."', '".$bet1_8."', '".$bet1_9."', '".$ttl1."', '".$chktot1."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);

                $chkdone = 1;
  }
}
  if(!empty($chktot2)){
    if(! empty($betNum2) && (! empty ($bet2_1) || ! empty ($bet2_2) || ! empty ($bet2_3) || ! empty ($bet2_4) || ! empty ($bet2_5) || ! empty ($bet2_6) || ! empty ($bet2_7) || ! empty ($bet2_8) || ! empty ($bet2_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum2."', '".$bet2_1."', '".$bet2_2."', '".$bet2_3."', '".$bet2_4."', '".$bet2_5."', '".$bet2_6."', '".$bet2_7."', '".$bet2_8."', '".$bet2_9."', '".$ttl2."', '".$chktot2."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot3)){
    if(! empty($betNum3) && (! empty ($bet3_1) || ! empty ($bet3_2) || ! empty ($bet3_3) || ! empty ($bet3_4) || ! empty ($bet3_5) || ! empty ($bet3_6) || ! empty ($bet3_7) || ! empty ($bet3_8) || ! empty ($bet3_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum3."', '".$bet3_1."', '".$bet3_2."', '".$bet3_3."', '".$bet3_4."', '".$bet3_5."', '".$bet3_6."', '".$bet3_7."', '".$bet3_8."', '".$bet3_9."', '".$ttl3."', '".$chktot3."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chktot4)){
    if(! empty($betNum4) && (! empty ($bet4_1) || ! empty ($bet4_2) || ! empty ($bet4_3) || ! empty ($bet4_4) || ! empty ($bet4_5) || ! empty ($bet4_6) || ! empty ($bet4_7) || ! empty ($bet4_8) || ! empty ($bet4_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum4."', '".$bet4_1."', '".$bet4_2."', '".$bet4_3."', '".$bet4_4."', '".$bet4_5."', '".$bet4_6."', '".$bet4_7."', '".$bet4_8."', '".$bet4_9."', '".$ttl4."', '".$chktot4."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot5)){
    if(! empty($betNum5) && (! empty ($bet5_1) || ! empty ($bet5_2) || ! empty ($bet5_3) || ! empty ($bet5_4) || ! empty ($bet5_5) || ! empty ($bet5_6) || ! empty ($bet5_7) || ! empty ($bet5_8) || ! empty ($bet5_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum5."', '".$bet5_1."', '".$bet5_2."', '".$bet5_3."', '".$bet5_4."', '".$bet5_5."', '".$bet5_6."', '".$bet5_7."', '".$bet5_8."', '".$bet5_9."', '".$ttl5."', '".$chktot5."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chktot6)){
    if(! empty($betNum6) && (! empty ($bet6_1) || ! empty ($bet6_2) || ! empty ($bet6_3) || ! empty ($bet6_4) || ! empty ($bet6_5) || ! empty ($bet6_6) || ! empty ($bet6_7) || ! empty ($bet6_8) || ! empty ($bet6_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum6."', '".$bet6_1."', '".$bet6_2."', '".$bet6_3."', '".$bet6_4."', '".$bet6_5."', '".$bet6_6."', '".$bet6_7."', '".$bet6_8."', '".$bet6_9."', '".$ttl6."', '".$chktot6."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot7)){
    if(! empty($betNum7) && (! empty ($bet7_1) || ! empty ($bet7_2) || ! empty ($bet7_3) || ! empty ($bet7_4) || ! empty ($bet7_5) || ! empty ($bet7_6) || ! empty ($bet7_7) || ! empty ($bet7_8) || ! empty ($bet7_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum7."', '".$bet7_1."', '".$bet7_2."', '".$bet7_3."', '".$bet7_4."', '".$bet7_5."', '".$bet7_6."', '".$bet7_7."', '".$bet7_8."', '".$bet7_9."', '".$ttl7."', '".$chktot7."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot8)){
    if(! empty($betNum8) && (! empty ($bet8_1) || ! empty ($bet8_2) || ! empty ($bet8_3) || ! empty ($bet8_4) || ! empty ($bet8_5) || ! empty ($bet8_6) || ! empty ($bet8_7) || ! empty ($bet8_8) || ! empty ($bet8_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum8."', '".$bet8_1."', '".$bet8_2."', '".$bet8_3."', '".$bet8_4."', '".$bet8_5."', '".$bet8_6."', '".$bet8_7."', '".$bet8_8."', '".$bet8_9."', '".$ttl8."', '".$chktot8."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot9)){
    if(! empty($betNum9) && (! empty ($bet9_1) || ! empty ($bet9_2) || ! empty ($bet9_3) || ! empty ($bet9_4) || ! empty ($bet9_5) || ! empty ($bet9_6) || ! empty ($bet9_7) || ! empty ($bet9_8) || ! empty ($bet9_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum9."', '".$bet9_1."', '".$bet9_2."', '".$bet9_3."', '".$bet9_4."', '".$bet9_5."', '".$bet9_6."', '".$bet9_7."', '".$bet9_8."', '".$bet9_9."', '".$ttl9."', '".$chktot9."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot10)){
    if(! empty($betNum10) && (! empty ($bet10_1) || ! empty ($bet10_2) || ! empty ($bet10_3) || ! empty ($bet10_4) || ! empty ($bet10_5) || ! empty ($bet10_6) || ! empty ($bet10_7) || ! empty ($bet10_8) || ! empty ($bet10_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum10."', '".$bet10_1."', '".$bet10_2."', '".$bet10_3."', '".$bet10_4."', '".$bet10_5."', '".$bet10_6."', '".$bet10_7."', '".$bet10_8."', '".$bet10_9."', '".$ttl10."', '".$chktot10."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chktot11)){
    if(! empty($betNum11) && (! empty ($bet11_1) || ! empty ($bet11_2) || ! empty ($bet11_3) || ! empty ($bet11_4) || ! empty ($bet11_5) || ! empty ($bet11_6) || ! empty ($bet11_7) || ! empty ($bet11_8) || ! empty ($bet11_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum11."', '".$bet11_1."', '".$bet11_2."', '".$bet11_3."', '".$bet11_4."', '".$bet11_5."', '".$bet11_6."', '".$bet11_7."', '".$bet11_8."', '".$bet11_9."', '".$ttl11."', '".$chktot11."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot12)){
    if(! empty($betNum12) && (! empty ($bet12_1) || ! empty ($bet12_2) || ! empty ($bet12_3) || ! empty ($bet12_4) || ! empty ($bet12_5) || ! empty ($bet12_6) || ! empty ($bet12_7) || ! empty ($bet12_8) || ! empty ($bet12_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum12."', '".$bet12_1."', '".$bet12_2."', '".$bet12_3."', '".$bet12_4."', '".$bet12_5."', '".$bet12_6."', '".$bet12_7."', '".$bet12_8."', '".$bet12_9."', '".$ttl12."', '".$chktot12."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot13)){
    if(! empty($betNum13) && (! empty ($bet13_1) || ! empty ($bet13_2) || ! empty ($bet13_3) || ! empty ($bet13_4) || ! empty ($bet13_5) || ! empty ($bet13_6) || ! empty ($bet13_7) || ! empty ($bet13_8) || ! empty ($bet13_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum13."', '".$bet13_1."', '".$bet13_2."', '".$bet13_3."', '".$bet13_4."', '".$bet13_5."', '".$bet13_6."', '".$bet13_7."', '".$bet13_8."', '".$bet13_9."', '".$ttl13."', '".$chktot13."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chktot14)){
    if(! empty($betNum14) && (! empty ($bet14_1) || ! empty ($bet14_2) || ! empty ($bet14_3) || ! empty ($bet14_4) || ! empty ($bet14_5) || ! empty ($bet14_6) || ! empty ($bet14_7) || ! empty ($bet14_8) || ! empty ($bet14_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum14."', '".$bet14_1."', '".$bet14_2."', '".$bet14_3."', '".$bet14_4."', '".$bet14_5."', '".$bet14_6."', '".$bet14_7."', '".$bet14_8."', '".$bet14_9."', '".$ttl14."', '".$chktot14."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot15)){
    if(! empty($betNum15) && (! empty ($bet15_1) || ! empty ($bet15_2) || ! empty ($bet15_3) || ! empty ($bet15_4) || ! empty ($bet15_5) || ! empty ($bet15_6) || ! empty ($bet15_7) || ! empty ($bet15_8) || ! empty ($bet15_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum15."', '".$bet15_1."', '".$bet15_2."', '".$bet15_3."', '".$bet15_4."', '".$bet15_5."', '".$bet15_6."', '".$bet15_7."', '".$bet15_8."', '".$bet15_9."', '".$ttl15."', '".$chktot15."', '".$sunbet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
}



















if(! empty($tuebet)){
  if(!empty($chkmag1)){
    if(! empty($betNum1) && (! empty ($bet1_1) || ! empty ($bet1_2) || ! empty ($bet1_3) || ! empty ($bet1_4) || ! empty ($bet1_5) || ! empty ($bet1_6) || ! empty ($bet1_7) || ! empty ($bet1_8) || ! empty ($bet1_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum1."', '".$bet1_1."', '".$bet1_2."', '".$bet1_3."', '".$bet1_4."', '".$bet1_5."', '".$bet1_6."', '".$bet1_7."', '".$bet1_8."', '".$bet1_9."', '".$ttl1."', '".$chkmag1."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);

                $chkdone = 1;
  }
}
  if(!empty($chkmag2)){
    if(! empty($betNum2) && (! empty ($bet2_1) || ! empty ($bet2_2) || ! empty ($bet2_3) || ! empty ($bet2_4) || ! empty ($bet2_5) || ! empty ($bet2_6) || ! empty ($bet2_7) || ! empty ($bet2_8) || ! empty ($bet2_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum2."', '".$bet2_1."', '".$bet2_2."', '".$bet2_3."', '".$bet2_4."', '".$bet2_5."', '".$bet2_6."', '".$bet2_7."', '".$bet2_8."', '".$bet2_9."', '".$ttl2."', '".$chkmag2."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag3)){
    if(! empty($betNum3) && (! empty ($bet3_1) || ! empty ($bet3_2) || ! empty ($bet3_3) || ! empty ($bet3_4) || ! empty ($bet3_5) || ! empty ($bet3_6) || ! empty ($bet3_7) || ! empty ($bet3_8) || ! empty ($bet3_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum3."', '".$bet3_1."', '".$bet3_2."', '".$bet3_3."', '".$bet3_4."', '".$bet3_5."', '".$bet3_6."', '".$bet3_7."', '".$bet3_8."', '".$bet3_9."', '".$ttl3."', '".$chkmag3."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkmag4)){
    if(! empty($betNum4) && (! empty ($bet4_1) || ! empty ($bet4_2) || ! empty ($bet4_3) || ! empty ($bet4_4) || ! empty ($bet4_5) || ! empty ($bet4_6) || ! empty ($bet4_7) || ! empty ($bet4_8) || ! empty ($bet4_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum4."', '".$bet4_1."', '".$bet4_2."', '".$bet4_3."', '".$bet4_4."', '".$bet4_5."', '".$bet4_6."', '".$bet4_7."', '".$bet4_8."', '".$bet4_9."', '".$ttl4."', '".$chkmag4."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag5)){
    if(! empty($betNum5) && (! empty ($bet5_1) || ! empty ($bet5_2) || ! empty ($bet5_3) || ! empty ($bet5_4) || ! empty ($bet5_5) || ! empty ($bet5_6) || ! empty ($bet5_7) || ! empty ($bet5_8) || ! empty ($bet5_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum5."', '".$bet5_1."', '".$bet5_2."', '".$bet5_3."', '".$bet5_4."', '".$bet5_5."', '".$bet5_6."', '".$bet5_7."', '".$bet5_8."', '".$bet5_9."', '".$ttl5."', '".$chkmag5."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkmag6)){
    if(! empty($betNum6) && (! empty ($bet6_1) || ! empty ($bet6_2) || ! empty ($bet6_3) || ! empty ($bet6_4) || ! empty ($bet6_5) || ! empty ($bet6_6) || ! empty ($bet6_7) || ! empty ($bet6_8) || ! empty ($bet6_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum6."', '".$bet6_1."', '".$bet6_2."', '".$bet6_3."', '".$bet6_4."', '".$bet6_5."', '".$bet6_6."', '".$bet6_7."', '".$bet6_8."', '".$bet6_9."', '".$ttl6."', '".$chkmag6."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag7)){
    if(! empty($betNum7) && (! empty ($bet7_1) || ! empty ($bet7_2) || ! empty ($bet7_3) || ! empty ($bet7_4) || ! empty ($bet7_5) || ! empty ($bet7_6) || ! empty ($bet7_7) || ! empty ($bet7_8) || ! empty ($bet7_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum7."', '".$bet7_1."', '".$bet7_2."', '".$bet7_3."', '".$bet7_4."', '".$bet7_5."', '".$bet7_6."', '".$bet7_7."', '".$bet7_8."', '".$bet7_9."', '".$ttl7."', '".$chkmag7."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag8)){
    if(! empty($betNum8) && (! empty ($bet8_1) || ! empty ($bet8_2) || ! empty ($bet8_3) || ! empty ($bet8_4) || ! empty ($bet8_5) || ! empty ($bet8_6) || ! empty ($bet8_7) || ! empty ($bet8_8) || ! empty ($bet8_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum8."', '".$bet8_1."', '".$bet8_2."', '".$bet8_3."', '".$bet8_4."', '".$bet8_5."', '".$bet8_6."', '".$bet8_7."', '".$bet8_8."', '".$bet8_9."', '".$ttl8."', '".$chkmag8."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag9)){
    if(! empty($betNum9) && (! empty ($bet9_1) || ! empty ($bet9_2) || ! empty ($bet9_3) || ! empty ($bet9_4) || ! empty ($bet9_5) || ! empty ($bet9_6) || ! empty ($bet9_7) || ! empty ($bet9_8) || ! empty ($bet9_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum9."', '".$bet9_1."', '".$bet9_2."', '".$bet9_3."', '".$bet9_4."', '".$bet9_5."', '".$bet9_6."', '".$bet9_7."', '".$bet9_8."', '".$bet9_9."', '".$ttl9."', '".$chkmag9."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag10)){
    if(! empty($betNum10) && (! empty ($bet10_1) || ! empty ($bet10_2) || ! empty ($bet10_3) || ! empty ($bet10_4) || ! empty ($bet10_5) || ! empty ($bet10_6) || ! empty ($bet10_7) || ! empty ($bet10_8) || ! empty ($bet10_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum10."', '".$bet10_1."', '".$bet10_2."', '".$bet10_3."', '".$bet10_4."', '".$bet10_5."', '".$bet10_6."', '".$bet10_7."', '".$bet10_8."', '".$bet10_9."', '".$ttl10."', '".$chkmag10."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkmag11)){
    if(! empty($betNum11) && (! empty ($bet11_1) || ! empty ($bet11_2) || ! empty ($bet11_3) || ! empty ($bet11_4) || ! empty ($bet11_5) || ! empty ($bet11_6) || ! empty ($bet11_7) || ! empty ($bet11_8) || ! empty ($bet11_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum11."', '".$bet11_1."', '".$bet11_2."', '".$bet11_3."', '".$bet11_4."', '".$bet11_5."', '".$bet11_6."', '".$bet11_7."', '".$bet11_8."', '".$bet11_9."', '".$ttl11."', '".$chkmag11."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag12)){
    if(! empty($betNum12) && (! empty ($bet12_1) || ! empty ($bet12_2) || ! empty ($bet12_3) || ! empty ($bet12_4) || ! empty ($bet12_5) || ! empty ($bet12_6) || ! empty ($bet12_7) || ! empty ($bet12_8) || ! empty ($bet12_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum12."', '".$bet12_1."', '".$bet12_2."', '".$bet12_3."', '".$bet12_4."', '".$bet12_5."', '".$bet12_6."', '".$bet12_7."', '".$bet12_8."', '".$bet12_9."', '".$ttl12."', '".$chkmag12."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag13)){
    if(! empty($betNum13) && (! empty ($bet13_1) || ! empty ($bet13_2) || ! empty ($bet13_3) || ! empty ($bet13_4) || ! empty ($bet13_5) || ! empty ($bet13_6) || ! empty ($bet13_7) || ! empty ($bet13_8) || ! empty ($bet13_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum13."', '".$bet13_1."', '".$bet13_2."', '".$bet13_3."', '".$bet13_4."', '".$bet13_5."', '".$bet13_6."', '".$bet13_7."', '".$bet13_8."', '".$bet13_9."', '".$ttl13."', '".$chkmag13."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkmag14)){
    if(! empty($betNum14) && (! empty ($bet14_1) || ! empty ($bet14_2) || ! empty ($bet14_3) || ! empty ($bet14_4) || ! empty ($bet14_5) || ! empty ($bet14_6) || ! empty ($bet14_7) || ! empty ($bet14_8) || ! empty ($bet14_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum14."', '".$bet14_1."', '".$bet14_2."', '".$bet14_3."', '".$bet14_4."', '".$bet14_5."', '".$bet14_6."', '".$bet14_7."', '".$bet14_8."', '".$bet14_9."', '".$ttl14."', '".$chkmag14."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkmag15)){
    if(! empty($betNum15) && (! empty ($bet15_1) || ! empty ($bet15_2) || ! empty ($bet15_3) || ! empty ($bet15_4) || ! empty ($bet15_5) || ! empty ($bet15_6) || ! empty ($bet15_7) || ! empty ($bet15_8) || ! empty ($bet15_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum15."', '".$bet15_1."', '".$bet15_2."', '".$bet15_3."', '".$bet15_4."', '".$bet15_5."', '".$bet15_6."', '".$bet15_7."', '".$bet15_8."', '".$bet15_9."', '".$ttl15."', '".$chkmag15."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }





  if(!empty($chkdmc1)){
    if(! empty($betNum1) && (! empty ($bet1_1) || ! empty ($bet1_2) || ! empty ($bet1_3) || ! empty ($bet1_4) || ! empty ($bet1_5) || ! empty ($bet1_6) || ! empty ($bet1_7) || ! empty ($bet1_8) || ! empty ($bet1_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum1."', '".$bet1_1."', '".$bet1_2."', '".$bet1_3."', '".$bet1_4."', '".$bet1_5."', '".$bet1_6."', '".$bet1_7."', '".$bet1_8."', '".$bet1_9."', '".$ttl1."', '".$chkdmc1."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);

                $chkdone = 1;
  }
}
  if(!empty($chkdmc2)){
    if(! empty($betNum2) && (! empty ($bet2_1) || ! empty ($bet2_2) || ! empty ($bet2_3) || ! empty ($bet2_4) || ! empty ($bet2_5) || ! empty ($bet2_6) || ! empty ($bet2_7) || ! empty ($bet2_8) || ! empty ($bet2_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum2."', '".$bet2_1."', '".$bet2_2."', '".$bet2_3."', '".$bet2_4."', '".$bet2_5."', '".$bet2_6."', '".$bet2_7."', '".$bet2_8."', '".$bet2_9."', '".$ttl2."', '".$chkdmc2."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc3)){
    if(! empty($betNum3) && (! empty ($bet3_1) || ! empty ($bet3_2) || ! empty ($bet3_3) || ! empty ($bet3_4) || ! empty ($bet3_5) || ! empty ($bet3_6) || ! empty ($bet3_7) || ! empty ($bet3_8) || ! empty ($bet3_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum3."', '".$bet3_1."', '".$bet3_2."', '".$bet3_3."', '".$bet3_4."', '".$bet3_5."', '".$bet3_6."', '".$bet3_7."', '".$bet3_8."', '".$bet3_9."', '".$ttl3."', '".$chkdmc3."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkdmc4)){
    if(! empty($betNum4) && (! empty ($bet4_1) || ! empty ($bet4_2) || ! empty ($bet4_3) || ! empty ($bet4_4) || ! empty ($bet4_5) || ! empty ($bet4_6) || ! empty ($bet4_7) || ! empty ($bet4_8) || ! empty ($bet4_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum4."', '".$bet4_1."', '".$bet4_2."', '".$bet4_3."', '".$bet4_4."', '".$bet4_5."', '".$bet4_6."', '".$bet4_7."', '".$bet4_8."', '".$bet4_9."', '".$ttl4."', '".$chkdmc4."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc5)){
    if(! empty($betNum5) && (! empty ($bet5_1) || ! empty ($bet5_2) || ! empty ($bet5_3) || ! empty ($bet5_4) || ! empty ($bet5_5) || ! empty ($bet5_6) || ! empty ($bet5_7) || ! empty ($bet5_8) || ! empty ($bet5_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum5."', '".$bet5_1."', '".$bet5_2."', '".$bet5_3."', '".$bet5_4."', '".$bet5_5."', '".$bet5_6."', '".$bet5_7."', '".$bet5_8."', '".$bet5_9."', '".$ttl5."', '".$chkdmc5."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkdmc6)){
    if(! empty($betNum6) && (! empty ($bet6_1) || ! empty ($bet6_2) || ! empty ($bet6_3) || ! empty ($bet6_4) || ! empty ($bet6_5) || ! empty ($bet6_6) || ! empty ($bet6_7) || ! empty ($bet6_8) || ! empty ($bet6_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum6."', '".$bet6_1."', '".$bet6_2."', '".$bet6_3."', '".$bet6_4."', '".$bet6_5."', '".$bet6_6."', '".$bet6_7."', '".$bet6_8."', '".$bet6_9."', '".$ttl6."', '".$chkdmc6."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc7)){
    if(! empty($betNum7) && (! empty ($bet7_1) || ! empty ($bet7_2) || ! empty ($bet7_3) || ! empty ($bet7_4) || ! empty ($bet7_5) || ! empty ($bet7_6) || ! empty ($bet7_7) || ! empty ($bet7_8) || ! empty ($bet7_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum7."', '".$bet7_1."', '".$bet7_2."', '".$bet7_3."', '".$bet7_4."', '".$bet7_5."', '".$bet7_6."', '".$bet7_7."', '".$bet7_8."', '".$bet7_9."', '".$ttl7."', '".$chkdmc7."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc8)){
    if(! empty($betNum8) && (! empty ($bet8_1) || ! empty ($bet8_2) || ! empty ($bet8_3) || ! empty ($bet8_4) || ! empty ($bet8_5) || ! empty ($bet8_6) || ! empty ($bet8_7) || ! empty ($bet8_8) || ! empty ($bet8_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum8."', '".$bet8_1."', '".$bet8_2."', '".$bet8_3."', '".$bet8_4."', '".$bet8_5."', '".$bet8_6."', '".$bet8_7."', '".$bet8_8."', '".$bet8_9."', '".$ttl8."', '".$chkdmc8."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc9)){
    if(! empty($betNum9) && (! empty ($bet9_1) || ! empty ($bet9_2) || ! empty ($bet9_3) || ! empty ($bet9_4) || ! empty ($bet9_5) || ! empty ($bet9_6) || ! empty ($bet9_7) || ! empty ($bet9_8) || ! empty ($bet9_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum9."', '".$bet9_1."', '".$bet9_2."', '".$bet9_3."', '".$bet9_4."', '".$bet9_5."', '".$bet9_6."', '".$bet9_7."', '".$bet9_8."', '".$bet9_9."', '".$ttl9."', '".$chkdmc9."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc10)){
    if(! empty($betNum10) && (! empty ($bet10_1) || ! empty ($bet10_2) || ! empty ($bet10_3) || ! empty ($bet10_4) || ! empty ($bet10_5) || ! empty ($bet10_6) || ! empty ($bet10_7) || ! empty ($bet10_8) || ! empty ($bet10_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum10."', '".$bet10_1."', '".$bet10_2."', '".$bet10_3."', '".$bet10_4."', '".$bet10_5."', '".$bet10_6."', '".$bet10_7."', '".$bet10_8."', '".$bet10_9."', '".$ttl10."', '".$chkdmc10."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkdmc11)){
    if(! empty($betNum11) && (! empty ($bet11_1) || ! empty ($bet11_2) || ! empty ($bet11_3) || ! empty ($bet11_4) || ! empty ($bet11_5) || ! empty ($bet11_6) || ! empty ($bet11_7) || ! empty ($bet11_8) || ! empty ($bet11_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum11."', '".$bet11_1."', '".$bet11_2."', '".$bet11_3."', '".$bet11_4."', '".$bet11_5."', '".$bet11_6."', '".$bet11_7."', '".$bet11_8."', '".$bet11_9."', '".$ttl11."', '".$chkdmc11."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc12)){
    if(! empty($betNum12) && (! empty ($bet12_1) || ! empty ($bet12_2) || ! empty ($bet12_3) || ! empty ($bet12_4) || ! empty ($bet12_5) || ! empty ($bet12_6) || ! empty ($bet12_7) || ! empty ($bet12_8) || ! empty ($bet12_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum12."', '".$bet12_1."', '".$bet12_2."', '".$bet12_3."', '".$bet12_4."', '".$bet12_5."', '".$bet12_6."', '".$bet12_7."', '".$bet12_8."', '".$bet12_9."', '".$ttl12."', '".$chkdmc12."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc13)){
    if(! empty($betNum13) && (! empty ($bet13_1) || ! empty ($bet13_2) || ! empty ($bet13_3) || ! empty ($bet13_4) || ! empty ($bet13_5) || ! empty ($bet13_6) || ! empty ($bet13_7) || ! empty ($bet13_8) || ! empty ($bet13_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum13."', '".$bet13_1."', '".$bet13_2."', '".$bet13_3."', '".$bet13_4."', '".$bet13_5."', '".$bet13_6."', '".$bet13_7."', '".$bet13_8."', '".$bet13_9."', '".$ttl13."', '".$chkdmc13."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chkdmc14)){
    if(! empty($betNum14) && (! empty ($bet14_1) || ! empty ($bet14_2) || ! empty ($bet14_3) || ! empty ($bet14_4) || ! empty ($bet14_5) || ! empty ($bet14_6) || ! empty ($bet14_7) || ! empty ($bet14_8) || ! empty ($bet14_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum14."', '".$bet14_1."', '".$bet14_2."', '".$bet14_3."', '".$bet14_4."', '".$bet14_5."', '".$bet14_6."', '".$bet14_7."', '".$bet14_8."', '".$bet14_9."', '".$ttl14."', '".$chkdmc14."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chkdmc15)){
    if(! empty($betNum15) && (! empty ($bet15_1) || ! empty ($bet15_2) || ! empty ($bet15_3) || ! empty ($bet15_4) || ! empty ($bet15_5) || ! empty ($bet15_6) || ! empty ($bet15_7) || ! empty ($bet15_8) || ! empty ($bet15_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum15."', '".$bet15_1."', '".$bet15_2."', '".$bet15_3."', '".$bet15_4."', '".$bet15_5."', '".$bet15_6."', '".$bet15_7."', '".$bet15_8."', '".$bet15_9."', '".$ttl15."', '".$chkdmc15."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }





  if(!empty($chktot1)){
    if(! empty($betNum1) && (! empty ($bet1_1) || ! empty ($bet1_2) || ! empty ($bet1_3) || ! empty ($bet1_4) || ! empty ($bet1_5) || ! empty ($bet1_6) || ! empty ($bet1_7) || ! empty ($bet1_8) || ! empty ($bet1_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum1."', '".$bet1_1."', '".$bet1_2."', '".$bet1_3."', '".$bet1_4."', '".$bet1_5."', '".$bet1_6."', '".$bet1_7."', '".$bet1_8."', '".$bet1_9."', '".$ttl1."', '".$chktot1."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);

                $chkdone = 1;
  }
}
  if(!empty($chktot2)){
    if(! empty($betNum2) && (! empty ($bet2_1) || ! empty ($bet2_2) || ! empty ($bet2_3) || ! empty ($bet2_4) || ! empty ($bet2_5) || ! empty ($bet2_6) || ! empty ($bet2_7) || ! empty ($bet2_8) || ! empty ($bet2_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum2."', '".$bet2_1."', '".$bet2_2."', '".$bet2_3."', '".$bet2_4."', '".$bet2_5."', '".$bet2_6."', '".$bet2_7."', '".$bet2_8."', '".$bet2_9."', '".$ttl2."', '".$chktot2."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot3)){
    if(! empty($betNum3) && (! empty ($bet3_1) || ! empty ($bet3_2) || ! empty ($bet3_3) || ! empty ($bet3_4) || ! empty ($bet3_5) || ! empty ($bet3_6) || ! empty ($bet3_7) || ! empty ($bet3_8) || ! empty ($bet3_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum3."', '".$bet3_1."', '".$bet3_2."', '".$bet3_3."', '".$bet3_4."', '".$bet3_5."', '".$bet3_6."', '".$bet3_7."', '".$bet3_8."', '".$bet3_9."', '".$ttl3."', '".$chktot3."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chktot4)){
    if(! empty($betNum4) && (! empty ($bet4_1) || ! empty ($bet4_2) || ! empty ($bet4_3) || ! empty ($bet4_4) || ! empty ($bet4_5) || ! empty ($bet4_6) || ! empty ($bet4_7) || ! empty ($bet4_8) || ! empty ($bet4_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum4."', '".$bet4_1."', '".$bet4_2."', '".$bet4_3."', '".$bet4_4."', '".$bet4_5."', '".$bet4_6."', '".$bet4_7."', '".$bet4_8."', '".$bet4_9."', '".$ttl4."', '".$chktot4."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot5)){
    if(! empty($betNum5) && (! empty ($bet5_1) || ! empty ($bet5_2) || ! empty ($bet5_3) || ! empty ($bet5_4) || ! empty ($bet5_5) || ! empty ($bet5_6) || ! empty ($bet5_7) || ! empty ($bet5_8) || ! empty ($bet5_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum5."', '".$bet5_1."', '".$bet5_2."', '".$bet5_3."', '".$bet5_4."', '".$bet5_5."', '".$bet5_6."', '".$bet5_7."', '".$bet5_8."', '".$bet5_9."', '".$ttl5."', '".$chktot5."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chktot6)){
    if(! empty($betNum6) && (! empty ($bet6_1) || ! empty ($bet6_2) || ! empty ($bet6_3) || ! empty ($bet6_4) || ! empty ($bet6_5) || ! empty ($bet6_6) || ! empty ($bet6_7) || ! empty ($bet6_8) || ! empty ($bet6_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum6."', '".$bet6_1."', '".$bet6_2."', '".$bet6_3."', '".$bet6_4."', '".$bet6_5."', '".$bet6_6."', '".$bet6_7."', '".$bet6_8."', '".$bet6_9."', '".$ttl6."', '".$chktot6."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot7)){
    if(! empty($betNum7) && (! empty ($bet7_1) || ! empty ($bet7_2) || ! empty ($bet7_3) || ! empty ($bet7_4) || ! empty ($bet7_5) || ! empty ($bet7_6) || ! empty ($bet7_7) || ! empty ($bet7_8) || ! empty ($bet7_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum7."', '".$bet7_1."', '".$bet7_2."', '".$bet7_3."', '".$bet7_4."', '".$bet7_5."', '".$bet7_6."', '".$bet7_7."', '".$bet7_8."', '".$bet7_9."', '".$ttl7."', '".$chktot7."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot8)){
    if(! empty($betNum8) && (! empty ($bet8_1) || ! empty ($bet8_2) || ! empty ($bet8_3) || ! empty ($bet8_4) || ! empty ($bet8_5) || ! empty ($bet8_6) || ! empty ($bet8_7) || ! empty ($bet8_8) || ! empty ($bet8_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum8."', '".$bet8_1."', '".$bet8_2."', '".$bet8_3."', '".$bet8_4."', '".$bet8_5."', '".$bet8_6."', '".$bet8_7."', '".$bet8_8."', '".$bet8_9."', '".$ttl8."', '".$chktot8."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot9)){
    if(! empty($betNum9) && (! empty ($bet9_1) || ! empty ($bet9_2) || ! empty ($bet9_3) || ! empty ($bet9_4) || ! empty ($bet9_5) || ! empty ($bet9_6) || ! empty ($bet9_7) || ! empty ($bet9_8) || ! empty ($bet9_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum9."', '".$bet9_1."', '".$bet9_2."', '".$bet9_3."', '".$bet9_4."', '".$bet9_5."', '".$bet9_6."', '".$bet9_7."', '".$bet9_8."', '".$bet9_9."', '".$ttl9."', '".$chktot9."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot10)){
    if(! empty($betNum10) && (! empty ($bet10_1) || ! empty ($bet10_2) || ! empty ($bet10_3) || ! empty ($bet10_4) || ! empty ($bet10_5) || ! empty ($bet10_6) || ! empty ($bet10_7) || ! empty ($bet10_8) || ! empty ($bet10_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum10."', '".$bet10_1."', '".$bet10_2."', '".$bet10_3."', '".$bet10_4."', '".$bet10_5."', '".$bet10_6."', '".$bet10_7."', '".$bet10_8."', '".$bet10_9."', '".$ttl10."', '".$chktot10."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chktot11)){
    if(! empty($betNum11) && (! empty ($bet11_1) || ! empty ($bet11_2) || ! empty ($bet11_3) || ! empty ($bet11_4) || ! empty ($bet11_5) || ! empty ($bet11_6) || ! empty ($bet11_7) || ! empty ($bet11_8) || ! empty ($bet11_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum11."', '".$bet11_1."', '".$bet11_2."', '".$bet11_3."', '".$bet11_4."', '".$bet11_5."', '".$bet11_6."', '".$bet11_7."', '".$bet11_8."', '".$bet11_9."', '".$ttl11."', '".$chktot11."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot12)){
    if(! empty($betNum12) && (! empty ($bet12_1) || ! empty ($bet12_2) || ! empty ($bet12_3) || ! empty ($bet12_4) || ! empty ($bet12_5) || ! empty ($bet12_6) || ! empty ($bet12_7) || ! empty ($bet12_8) || ! empty ($bet12_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum12."', '".$bet12_1."', '".$bet12_2."', '".$bet12_3."', '".$bet12_4."', '".$bet12_5."', '".$bet12_6."', '".$bet12_7."', '".$bet12_8."', '".$bet12_9."', '".$ttl12."', '".$chktot12."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot13)){
    if(! empty($betNum13) && (! empty ($bet13_1) || ! empty ($bet13_2) || ! empty ($bet13_3) || ! empty ($bet13_4) || ! empty ($bet13_5) || ! empty ($bet13_6) || ! empty ($bet13_7) || ! empty ($bet13_8) || ! empty ($bet13_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum13."', '".$bet13_1."', '".$bet13_2."', '".$bet13_3."', '".$bet13_4."', '".$bet13_5."', '".$bet13_6."', '".$bet13_7."', '".$bet13_8."', '".$bet13_9."', '".$ttl13."', '".$chktot13."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
    }
  }
  if(!empty($chktot14)){
    if(! empty($betNum14) && (! empty ($bet14_1) || ! empty ($bet14_2) || ! empty ($bet14_3) || ! empty ($bet14_4) || ! empty ($bet14_5) || ! empty ($bet14_6) || ! empty ($bet14_7) || ! empty ($bet14_8) || ! empty ($bet14_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum14."', '".$bet14_1."', '".$bet14_2."', '".$bet14_3."', '".$bet14_4."', '".$bet14_5."', '".$bet14_6."', '".$bet14_7."', '".$bet14_8."', '".$bet14_9."', '".$ttl14."', '".$chktot14."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
  if(!empty($chktot15)){
    if(! empty($betNum15) && (! empty ($bet15_1) || ! empty ($bet15_2) || ! empty ($bet15_3) || ! empty ($bet15_4) || ! empty ($bet15_5) || ! empty ($bet15_6) || ! empty ($bet15_7) || ! empty ($bet15_8) || ! empty ($bet15_9))) {
                $sql = "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt, totalDt, betType, betDate, phDt, trxSeq, userType) VALUES('".$usernm."', '".$betNum15."', '".$bet15_1."', '".$bet15_2."', '".$bet15_3."', '".$bet15_4."', '".$bet15_5."', '".$bet15_6."', '".$bet15_7."', '".$bet15_8."', '".$bet15_9."', '".$ttl15."', '".$chktot15."', '".$tuebet."', '".$csNo."', '".$trxSeq."', '".$usrtype."')";  
                mysqli_query($connect, $sql);
                $chkdone = 1;
    }
  }
}

if(!empty($betNum1)){
  $limit = "UPDATE betnolimit SET betLimit = betLimit - '$cbet1' WHERE betNo = '$betNum1'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE betnolimit SET betAmt = betAmt + '$tta1' WHERE betNo = '$betNum1'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE masterlimit SET betLimit = betLimit - '$cbet1' WHERE mbetNo = '$betNum1'";
  mysqli_query($connect, $limit);
}

if(!empty($betNum2)){
  $limit = "UPDATE betnolimit SET betLimit = betLimit - '$cbet2' WHERE betNo = '$betNum2'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE betnolimit SET betAmt = betAmt + '$tta2' WHERE betNo = '$betNum2'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE masterlimit SET betLimit = betLimit - '$cbet2' WHERE mbetNo = '$betNum2'";
  mysqli_query($connect, $limit);
}

if(!empty($betNum3)){
  $limit = "UPDATE betnolimit SET betLimit = betLimit - '$cbet3' WHERE betNo = '$betNum3'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE betnolimit SET betAmt = betAmt + '$tta3' WHERE betNo = '$betNum3'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE masterlimit SET betLimit = betLimit - '$cbet3' WHERE mbetNo = '$betNum3'";
  mysqli_query($connect, $limit);
}

if(!empty($betNum4)){
  $limit = "UPDATE betnolimit SET betLimit = betLimit - '$cbet4' WHERE betNo = '$betNum4'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE betnolimit SET betAmt = betAmt + '$tta4' WHERE betNo = '$betNum4'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE masterlimit SET betLimit = betLimit - '$cbet4' WHERE mbetNo = '$betNum4'";
  mysqli_query($connect, $limit);
}

if(!empty($betNum5)){
  $limit = "UPDATE betnolimit SET betLimit = betLimit - '$cbet5' WHERE betNo = '$betNum5'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE betnolimit SET betAmt = betAmt + '$tta5' WHERE betNo = '$betNum5'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE masterlimit SET betLimit = betLimit - '$cbet5' WHERE mbetNo = '$betNum5'";
  mysqli_query($connect, $limit);
}

if(!empty($betNum6)){
  $limit = "UPDATE betnolimit SET betLimit = betLimit - '$cbet6' WHERE betNo = '$betNum6'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE betnolimit SET betAmt = betAmt + '$tta6' WHERE betNo = '$betNum6'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE masterlimit SET betLimit = betLimit - '$cbet6' WHERE mbetNo = '$betNum6'";
  mysqli_query($connect, $limit);
}

if(!empty($betNum7)){
  $limit = "UPDATE betnolimit SET betLimit = betLimit - '$cbet7' WHERE betNo = '$betNum7'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE betnolimit SET betAmt = betAmt + '$tta7' WHERE betNo = '$betNum7'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE masterlimit SET betLimit = betLimit - '$cbet7' WHERE mbetNo = '$betNum7'";
  mysqli_query($connect, $limit);
}

if(!empty($betNum8)){
  $limit = "UPDATE betnolimit SET betLimit = betLimit - '$cbet8' WHERE betNo = '$betNum8'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE betnolimit SET betAmt = betAmt + '$tta8' WHERE betNo = '$betNum8'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE masterlimit SET betLimit = betLimit - '$cbet8' WHERE mbetNo = '$betNum8'";
  mysqli_query($connect, $limit);
}

if(!empty($betNum9)){
  $limit = "UPDATE betnolimit SET betLimit = betLimit - '$cbet9' WHERE betNo = '$betNum9'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE betnolimit SET betAmt = betAmt + '$tta9' WHERE betNo = '$betNum9'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE masterlimit SET betLimit = betLimit - '$cbet9' WHERE mbetNo = '$betNum9'";
  mysqli_query($connect, $limit);
}

if(!empty($betNum10)){
  $limit = "UPDATE betnolimit SET betLimit = betLimit - '$cbet10' WHERE betNo = '$betNum10'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE betnolimit SET betAmt = betAmt + '$tta10' WHERE betNo = '$betNum10'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE masterlimit SET betLimit = betLimit - '$cbet10' WHERE mbetNo = '$betNum10'";
  mysqli_query($connect, $limit);
}

if(!empty($betNum11)){
  $limit = "UPDATE betnolimit SET betLimit = betLimit - '$cbet11' WHERE betNo = '$betNum11'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE betnolimit SET betAmt = betAmt + '$tta11' WHERE betNo = '$betNum11'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE masterlimit SET betLimit = betLimit - '$cbet11' WHERE mbetNo = '$betNum11'";
  mysqli_query($connect, $limit);
}

if(!empty($betNum12)){
  $limit = "UPDATE betnolimit SET betLimit = betLimit - '$cbet12' WHERE betNo = '$betNum12'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE betnolimit SET betAmt = betAmt + '$tta12' WHERE betNo = '$betNum12'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE masterlimit SET betLimit = betLimit - '$cbet12' WHERE mbetNo = '$betNum12'";
  mysqli_query($connect, $limit);
}

if(!empty($betNum13)){
  $limit = "UPDATE betnolimit SET betLimit = betLimit - '$cbet13' WHERE betNo = '$betNum13'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE betnolimit SET betAmt = betAmt + '$tta13' WHERE betNo = '$betNum13'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE masterlimit SET betLimit = betLimit - '$cbet13' WHERE mbetNo = '$betNum13'";
  mysqli_query($connect, $limit);
}

if(!empty($betNum14)){
  $limit = "UPDATE betnolimit SET betLimit = betLimit - '$cbet14' WHERE betNo = '$betNum14'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE betnolimit SET betAmt = betAmt + '$tta14' WHERE betNo = '$betNum14'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE masterlimit SET betLimit = betLimit - '$cbet14' WHERE mbetNo = '$betNum14'";
  mysqli_query($connect, $limit);
}

if(!empty($betNum15)){
  $limit = "UPDATE betnolimit SET betLimit = betLimit - '$cbet15' WHERE betNo = '$betNum15'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE betnolimit SET betAmt = betAmt + '$tta15' WHERE betNo = '$betNum15'";
  mysqli_query($connect, $limit);

  $limit = "UPDATE masterlimit SET betLimit = betLimit - '$cbet15' WHERE mbetNo = '$betNum15'";
  mysqli_query($connect, $limit);
}

if($chkdone == 1) { 
$sql = "UPDATE balance SET avBal = avBal - '$atotal', outStdbal = outStdbal + '$atotal' WHERE userID = '$user'";
        mysqli_query($connect, $sql);
  ?>
            <script language="javascript"> alert("完成！")
        window.location = "http://localhost/wordpress/clientsearch/";</script>
    <?php  } else {
            echo "未完成！";
          }








if(!empty($chkmag1) || !empty($chkmag2) || !empty($chkmag3) || !empty($chkmag4) || !empty($chkmag5) || !empty($chkmag6) || !empty($chkmag7) || !empty($chkmag8) || !empty($chkmag9) || !empty($chkmag10) || !empty($chkmag11) || !empty($chkmag12) || !empty($chkmag13) || !empty($chkmag14) || !empty($chkmag15)) {
    $chkmag = M;
}

if(!empty($chkdmc1) || !empty($chkdmc2) || !empty($chkdmc3) || !empty($chkdmc4) || !empty($chkdmc5) || !empty($chkdmc6) || !empty($chkdmc7) || !empty($chkdmc8) || !empty($chkdmc9) || !empty($chkdmc10) || !empty($chkdmc11) || !empty($chkdmc12) || !empty($chkdmc13) || !empty($chkdmc14) || !empty($chkdmc15)) {
    $chkdmc = P;
}

if(!empty($chktot1) || !empty($chktot2) || !empty($chktot3) || !empty($chktot4) || !empty($chktot5) || !empty($chktot6) || !empty($chktot7) || !empty($chktot8) || !empty($chktot9) || !empty($chktot10) || !empty($chktot11) || !empty($chktot12) || !empty($chktot13) || !empty($chktot14) || !empty($chktot15)) {
    $chktot = T;
}
?>

<?php
$chkcomp = $chkmag.$chkdmc.$chktot;
$bettal1 = $betNum1.$bg1.$bet1_1.$sm1.$bet1_2.$sa1.$bet1_3.$sb1.$bet1_4.$sc1.$bet1_5.$sd1.$bet1_6.$se1.$bet1_7.$a01.$bet1_8.$sf1.$bet1_9;
$bettal2 = $betNum2.$bg2.$bet2_1.$sm2.$bet2_2.$sa2.$bet2_3.$sb2.$bet2_4.$sc2.$bet2_5.$sd2.$bet2_6.$se2.$bet2_7.$a02.$bet2_8.$sf2.$bet2_9;
$bettal3 = $betNum3.$bg3.$bet3_1.$sm3.$bet3_2.$sa3.$bet3_3.$sb3.$bet3_4.$sc3.$bet3_5.$sd3.$bet3_6.$se3.$bet3_7.$a03.$bet3_8.$sf3.$bet3_9;
$bettal4 = $betNum4.$bg4.$bet4_1.$sm4.$bet4_2.$sa4.$bet4_3.$sb4.$bet4_4.$sc4.$bet4_5.$sd4.$bet4_6.$se4.$bet4_7.$a04.$bet4_8.$sf4.$bet4_9;
$bettal5 = $betNum5.$bg5.$bet5_1.$sm5.$bet5_2.$sa5.$bet5_3.$sb5.$bet5_4.$sc5.$bet5_5.$sd5.$bet5_6.$se5.$bet5_7.$a05.$bet5_8.$sf5.$bet5_9;
$bettal6 = $betNum6.$bg6.$bet6_1.$sm6.$bet6_2.$sa6.$bet6_3.$sb6.$bet6_4.$sc6.$bet6_5.$sd6.$bet6_6.$se6.$bet6_7.$a06.$bet6_8.$sf6.$bet6_9;
$bettal7 = $betNum7.$bg7.$bet7_1.$sm7.$bet7_2.$sa7.$bet7_3.$sb1.$bet7_4.$sc1.$bet7_5.$sd1.$bet7_6.$se1.$bet7_7.$a01.$bet7_8.$sf1.$bet7_9;
$bettal8 = $betNum8.$bg8.$bet8_1.$sm8.$bet8_2.$sa8.$bet8_3.$sb1.$bet8_4.$sc1.$bet8_5.$sd1.$bet8_6.$se1.$bet8_7.$a01.$bet8_8.$sf1.$bet8_9;
$bettal9 = $betNum9.$bg9.$bet9_1.$sm9.$bet9_2.$sa9.$bet9_3.$sb1.$bet9_4.$sc1.$bet9_5.$sd1.$bet9_6.$se1.$bet9_7.$a01.$bet9_8.$sf1.$bet9_9;
$bettal10 = $betNum10.$bg10.$bet10_1.$sm10.$bet10_2.$sa1.$bet10_3.$sb1.$bet10_4.$sc1.$bet10_5.$sd1.$bet10_6.$se1.$bet10_7.$a01.$bet10_8.$sf1.$bet10_9;
$bettal11 = $betNum11.$bg11.$bet11_1.$sm11.$bet11_2.$sa1.$bet11_3.$sb1.$bet11_4.$sc1.$bet11_5.$sd1.$bet11_6.$se1.$bet11_7.$a01.$bet11_8.$sf1.$bet11_9;
$bettal12 = $betNum12.$bg12.$bet12_1.$sm12.$bet12_2.$sa1.$bet12_3.$sb1.$bet12_4.$sc1.$bet12_5.$sd1.$bet12_6.$se1.$bet12_7.$a01.$bet12_8.$sf1.$bet12_9;
$bettal13 = $betNum13.$bg13.$bet13_1.$sm13.$bet13_2.$sa1.$bet13_3.$sb1.$bet13_4.$sc1.$bet13_5.$sd1.$bet13_6.$se1.$bet13_7.$a01.$bet13_8.$sf1.$bet13_9;
$bettal14 = $betNum14.$bg14.$bet14_1.$sm14.$bet14_2.$sa1.$bet14_3.$sb1.$bet14_4.$sc1.$bet14_5.$sd1.$bet14_6.$se1.$bet14_7.$a01.$bet14_8.$sf1.$bet14_9;
$bettal15 = $betNum15.$bg15.$bet15_1.$sm15.$bet15_2.$sa1.$bet15_3.$sb1.$bet15_4.$sc1.$bet15_5.$sd1.$bet15_6.$se1.$bet15_7.$a01.$bet15_8.$sf1.$bet15_9;

 $total = current($_POST["total"]);


if(!empty($betNum1) || !empty($betNum2) || !empty($betNum3) || !empty($betNum4) || !empty($betNum5)){

$sid = "AC0bc572cbf1212be56902f8e1ad455448"; // Your Account SID from www.twilio.com/console
$token = "edb19a872a02bf223d5e1bdf835a4d5c"; // Your Auth Token from www.twilio.com/console

$client = new Twilio\Rest\Client($sid, $token);
$message = $client->messages->create(
  "$csNo", // Text this number
  array(
    'from' => '+12342310651', // From a valid Twilio number
    'body' =>  "($user)
$curday
$wedbet
$satbet
$sunbet
$tuebet
$chkcomp
$bettal1
$bettal2
$bettal3
$bettal4
$bettal5
$total
$csNo"
  )
);
}


if(!empty($betNum6) || !empty($betNum7) || !empty($betNum8) || !empty($betNum9) || !empty($betNum10)){

$sid = "AC0bc572cbf1212be56902f8e1ad455448"; // Your Account SID from www.twilio.com/console
$token = "edb19a872a02bf223d5e1bdf835a4d5c"; // Your Auth Token from www.twilio.com/console

$client = new Twilio\Rest\Client($sid, $token);
$message = $client->messages->create(
  "$csNo", // Text this number
  array(
    'from' => '+12342310651', // From a valid Twilio number
    'body' =>  "($user)
$curday
$wedbet
$satbet
$sunbet
$tuebet
$chkcomp
$bettal6
$bettal7
$bettal8
$bettal9
$bettal10
$total
$csNo"
  )
);
}

if(!empty($betNum11) || !empty($betNum12) || !empty($betNum13) || !empty($betNum14) || !empty($betNum15)){

$sid = "AC0bc572cbf1212be56902f8e1ad455448"; // Your Account SID from www.twilio.com/console
$token = "edb19a872a02bf223d5e1bdf835a4d5c"; // Your Auth Token from www.twilio.com/console

$client = new Twilio\Rest\Client($sid, $token);
$message = $client->messages->create(
  "$csNo", // Text this number
  array(
    'from' => '+12342310651', // From a valid Twilio number
    'body' =>  "($user)
$curday
$wedbet
$satbet
$sunbet
$tuebet
$chkcomp
$bettal11
$bettal12
$bettal13
$bettal14
$bettal15
$total
$csNo"
  )
);
}
?>