<html>
<?php
session_start();
    if(isset($_SESSION['userlog'])) {
    	$user = $_SESSION['userlog'];
    }else{
    	header('Location: http://localhost/wordpress/');
    }

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
$spd="";
if (strtotime($spdate1) > strtotime($curday)) {
	$spd = "July 4 2017";
} elseif (strtotime($spdate1) < strtotime($curday)) {
	$spd = "July 25 2017";
} elseif (strtotime($spdate2) < strtotime($curday)) {
	$spd = "August 1 2017";
} elseif (strtotime($spdate3) < strtotime($curday)) {
	$spd = "August 29 2017";
} elseif (strtotime($spdate4) < strtotime($curday)) {
	$spd = "September 5 2017";
} elseif (strtotime($spdate5) < strtotime($curday)) {
	$spd = "September 26 2017";
} elseif (strtotime($spdate6) < strtotime($curday)) {
	$spd = "October 3 2017";
} elseif (strtotime($spdate7) < strtotime($curday)) {
	$spd = "October 31 2017";
} elseif (strtotime($spdate8) < strtotime($curday)) {
	$spd = "November 7 2017";
} elseif (strtotime($spdate9) < strtotime($curday)) {
	$spd = "November 28 2017";
} elseif (strtotime($spdate10) < strtotime($curday)) {
	$spd = "December 5 2017";
} elseif (strtotime($spdate11) < strtotime($curday)) {
	$spd = "December 26 2017";
} elseif (strtotime($spdate12) < strtotime($curday)) {
	$spd = "尽情期待";
} else {
	$spd ="-";
}


		$usr = current($_POST['usr']);

		$bbetNo1 = current($_POST['betNo1']);
		$bbetNo2 = current($_POST['betNo2']);
		$bbetNo3 = current($_POST['betNo3']);
		$bbetNo4 = current($_POST['betNo4']);
		$bbetNo5 = current($_POST['betNo5']);
		$bbetNo6 = current($_POST['betNo6']);
		$bbetNo7 = current($_POST['betNo7']);
		$bbetNo8 = current($_POST['betNo8']);
		$bbetNo9 = current($_POST['betNo9']);
		$bbetNo10 = current($_POST['betNo10']);
		$bbetNo11 = current($_POST['betNo11']);
		$bbetNo12 = current($_POST['betNo12']);
		$bbetNo13 = current($_POST['betNo13']);
		$bbetNo14 = current($_POST['betNo14']);
		$bbetNo15 = current($_POST['betNo15']);

		$bbig1 = current($_POST['big1']);
		$bbig2 = current($_POST['big2']);
		$bbig3 = current($_POST['big3']);
		$bbig4 = current($_POST['big4']);
		$bbig5 = current($_POST['big5']);
		$bbig6 = current($_POST['big6']);
		$bbig7 = current($_POST['big7']);
		$bbig8 = current($_POST['big8']);
		$bbig9 = current($_POST['big9']);
		$bbig10 = current($_POST['big10']);
		$bbig11 = current($_POST['big11']);
		$bbig12 = current($_POST['big12']);
		$bbig13 = current($_POST['big13']);
		$bbig14 = current($_POST['big14']);
		$bbig15 = current($_POST['big15']);

		$bsml1 = current($_POST['sml1']);
		$bsml2 = current($_POST['sml2']);
		$bsml3 = current($_POST['sml3']);
		$bsml4 = current($_POST['sml4']);
		$bsml5 = current($_POST['sml5']);
		$bsml6 = current($_POST['sml6']);
		$bsml7 = current($_POST['sml7']);
		$bsml8 = current($_POST['sml8']);
		$bsml9 = current($_POST['sml9']);
		$bsml10 = current($_POST['sml10']);
		$bsml11 = current($_POST['sml11']);
		$bsml12 = current($_POST['sml12']);
		$bsml13 = current($_POST['sml13']);
		$bsml14 = current($_POST['sml14']);
		$bsml15 = current($_POST['sml15']);

		$bsa1 = current($_POST['sa1']);
		$bsa2 = current($_POST['sa2']);
		$bsa3 = current($_POST['sa3']);
		$bsa4 = current($_POST['sa4']);
		$bsa5 = current($_POST['sa5']);
		$bsa6 = current($_POST['sa6']);
		$bsa7 = current($_POST['sa7']);
		$bsa8 = current($_POST['sa8']);
		$bsa9 = current($_POST['sa9']);
		$bsa10 = current($_POST['sa10']);
		$bsa11 = current($_POST['sa11']);
		$bsa12 = current($_POST['sa12']);
		$bsa13 = current($_POST['sa13']);
		$bsa14 = current($_POST['sa14']);
		$bsa15 = current($_POST['sa15']);

		$bsb1 = current($_POST['sb1']);
		$bsb2 = current($_POST['sb2']);
		$bsb3 = current($_POST['sb3']);
		$bsb4 = current($_POST['sb4']);
		$bsb5 = current($_POST['sb5']);
		$bsb6 = current($_POST['sb6']);
		$bsb7 = current($_POST['sb7']);
		$bsb8 = current($_POST['sb8']);
		$bsb9 = current($_POST['sb9']);
		$bsb10 = current($_POST['sb10']);
		$bsb11 = current($_POST['sb11']);
		$bsb12 = current($_POST['sb12']);
		$bsb13 = current($_POST['sb13']);
		$bsb14 = current($_POST['sb14']);
		$bsb15 = current($_POST['sb15']);

		$bsc1 = current($_POST['sc1']);
		$bsc2 = current($_POST['sc2']);
		$bsc3 = current($_POST['sc3']);
		$bsc4 = current($_POST['sc4']);
		$bsc5 = current($_POST['sc5']);
		$bsc6 = current($_POST['sc6']);
		$bsc7 = current($_POST['sc7']);
		$bsc8 = current($_POST['sc8']);
		$bsc9 = current($_POST['sc9']);
		$bsc10 = current($_POST['sc10']);
		$bsc11 = current($_POST['sc11']);
		$bsc12 = current($_POST['sc12']);
		$bsc13 = current($_POST['sc13']);
		$bsc14 = current($_POST['sc14']);
		$bsc15 = current($_POST['sc15']);

		$bsd1 = current($_POST['sd1']);
		$bsd2 = current($_POST['sd2']);
		$bsd3 = current($_POST['sd3']);
		$bsd4 = current($_POST['sd4']);
		$bsd5 = current($_POST['sd5']);
		$bsd6 = current($_POST['sd6']);
		$bsd7 = current($_POST['sd7']);
		$bsd8 = current($_POST['sd8']);
		$bsd9 = current($_POST['sd9']);
		$bsd10 = current($_POST['sd10']);
		$bsd11 = current($_POST['sd11']);
		$bsd12 = current($_POST['sd12']);
		$bsd13 = current($_POST['sd13']);
		$bsd14 = current($_POST['sd14']);
		$bsd15 = current($_POST['sd15']);

		$bse1 = current($_POST['se1']);
		$bse2 = current($_POST['se2']);
		$bse3 = current($_POST['se3']);
		$bse4 = current($_POST['se4']);
		$bse5 = current($_POST['se5']);
		$bse6 = current($_POST['se6']);
		$bse7 = current($_POST['se7']);
		$bse8 = current($_POST['se8']);
		$bse9 = current($_POST['se9']);
		$bse10 = current($_POST['se10']);
		$bse11 = current($_POST['se11']);
		$bse12 = current($_POST['se12']);
		$bse13 = current($_POST['se13']);
		$bse14 = current($_POST['se14']);
		$bse15 = current($_POST['se15']);

		$ba01 = current($_POST['a01']);
		$ba02 = current($_POST['a02']);
		$ba03 = current($_POST['a03']);
		$ba04 = current($_POST['a04']);
		$ba05 = current($_POST['a05']);
		$ba06 = current($_POST['a06']);
		$ba07 = current($_POST['a07']);
		$ba08 = current($_POST['a08']);
		$ba09 = current($_POST['a09']);
		$ba010 = current($_POST['a010']);
		$ba011 = current($_POST['a011']);
		$ba012 = current($_POST['a012']);
		$ba013 = current($_POST['a013']);
		$ba014 = current($_POST['a014']);
		$ba015 = current($_POST['a015']);

		$bsf1 = current($_POST['sf1']);
		$bsf2 = current($_POST['sf2']);
		$bsf3 = current($_POST['sf3']);
		$bsf4 = current($_POST['sf4']);
		$bsf5 = current($_POST['sf5']);
		$bsf6 = current($_POST['sf6']);
		$bsf7 = current($_POST['sf7']);
		$bsf8 = current($_POST['sf8']);
		$bsf9 = current($_POST['sf9']);
		$bsf10 = current($_POST['sf10']);
		$bsf11 = current($_POST['sf11']);
		$bsf12 = current($_POST['sf12']);
		$bsf13 = current($_POST['sf13']);
		$bsf14 = current($_POST['sf14']);
		$bsf15 = current($_POST['sf15']);

 $chkmag1 = current($_POST["mag1"]);
 $chkdmc1 = current($_POST["dmc1"]);
 $chktot1 = current($_POST["tot1"]);

 $chkmag2 = current($_POST["mag2"]);
 $chkdmc2 = current($_POST["dmc2"]);
 $chktot2 = current($_POST["tot2"]);

 $chkmag3 = current($_POST["mag3"]);
 $chkdmc3 = current($_POST["dmc3"]);
 $chktot3 = current($_POST["tot3"]);

 $chkmag4 = current($_POST["mag4"]);
 $chkdmc4 = current($_POST["dmc4"]);
 $chktot4 = current($_POST["tot4"]);

 $chkmag5 = current($_POST["mag5"]);
 $chkdmc5 = current($_POST["dmc5"]);
 $chktot5 = current($_POST["tot5"]);

 $chkmag6 = current($_POST["mag6"]);
 $chkdmc6 = current($_POST["dmc6"]);
 $chktot6 = current($_POST["tot6"]);

 $chkmag7 = current($_POST["mag7"]);
 $chkdmc7 = current($_POST["dmc7"]);
 $chktot7 = current($_POST["tot7"]);

 $chkmag8 = current($_POST["mag8"]);
 $chkdmc8 = current($_POST["dmc8"]);
 $chktot8 = current($_POST["tot8"]);

 $chkmag9 = current($_POST["mag9"]);
 $chkdmc9 = current($_POST["dmc9"]);
 $chktot9 = current($_POST["tot9"]);

 $chkmag10 = current($_POST["mag10"]);
 $chkdmc10 = current($_POST["dmc10"]);
 $chktot10 = current($_POST["tot10"]);

 $chkmag11 = current($_POST["mag11"]);
 $chkdmc11 = current($_POST["dmc11"]);
 $chktot11 = current($_POST["tot11"]);

 $chkmag12 = current($_POST["mag12"]);
 $chkdmc12 = current($_POST["dmc12"]);
 $chktot12 = current($_POST["tot12"]);

 $chkmag13 = current($_POST["mag13"]);
 $chkdmc13 = current($_POST["dmc13"]);
 $chktot13 = current($_POST["tot13"]);

 $chkmag14 = current($_POST["mag14"]);
 $chkdmc14 = current($_POST["dmc14"]);
 $chktot14 = current($_POST["tot14"]);

 $chkmag15 = current($_POST["mag15"]);
 $chkdmc15 = current($_POST["dmc15"]);
 $chktot15 = current($_POST["tot15"]);

 $chkwed = $_POST["wed"]; if(!empty($chkwed)) {$chkwed = $weddate;}
 $chksat = $_POST["sat"]; if(!empty($chksat)) {$chksat = $satdate;}
 $chksun = $_POST["sun"]; if(!empty($chksun)) {$chksun = $sundate;}
 $chktue = $_POST["tue"]; if(!empty($chktue)) {$chktue = $spd;} else {$chktue = '';}

 $usrtype = current($_POST["usrtype"]);

 $phCo = current($_POST["ctCode"]);
 $phNo = current($_POST["phNo"]); if(empty($phNo)){$phNo = '';}

 $ph = $phCo.$phNo;

  if(!empty($chkwed) AND !empty($chksat) AND !empty($chksun) AND !empty($chktue)){
  	$datemul = 4;
  } elseif((!empty($chkwed) AND !empty($chksat) AND !empty($chksun)) OR (!empty($chkwed) AND !empty($chksat) AND !empty($chktue)) OR (!empty($chkwed) AND !empty($chktue) AND !empty($chksun)) OR (!empty($chktue) AND !empty($chksat) AND !empty($chksun))){	
 	$datemul = 3;
  } elseif((!empty($chkwed) AND !empty($chksat)) OR (!empty($chkwed) AND !empty($chksun)) OR (!empty($chkwed) AND !empty($chktue)) OR (!empty($chksat) AND !empty($chksun)) OR (!empty($chksat) AND !empty($chktue)) OR (!empty($chksun) AND !empty($chktue))){	
 	$datemul = 2;
  } elseif(!empty($chkwed) OR !empty($chksat) OR !empty($chksun) OR !empty($chktue)){
  	$datemul = 1;
  } else{}

 if($chkmag1 == mag AND $chkdmc1 == dmc AND $chktot1 == tot){
 	$mul1 = 3;
 } elseif(($chkmag1 == mag and $chkdmc1 == dmc) or ($chkmag1 == mag and $chktot1 == tot) or ($chkdmc1 == dmc and $chktot1 == tot) ){
 	$mul1 = 2;
 }elseif($chkmag1 == mag or $chkdmc1 == dmc or $chktot1 == tot){
 	$mul1 = 1;
 }else{}

 if($chkmag2 == mag AND $chkdmc2 == dmc AND $chktot2 == tot){
 	$mul2 = 3;
 } elseif(($chkmag2 == mag and $chkdmc2 == dmc) or ($chkmag2 == mag and $chktot2 == tot) or ($chkdmc2 == dmc and $chktot2 == tot) ){
 	$mul2 = 2;
 }elseif($chkmag2 == mag or $chkdmc2 == dmc or $chktot2 == tot){
 	$mul2 = 1;
 }else{}

 if($chkmag3 == mag AND $chkdmc3 == dmc AND $chktot3 == tot){
 	$mul3 = 3;
 } elseif(($chkmag3 == mag and $chkdmc3 == dmc) or ($chkmag3 == mag and $chktot3 == tot) or ($chkdmc3 == dmc and $chktot3 == tot) ){
 	$mul3 = 2;
 }elseif($chkmag3 == mag or $chkdmc3 == dmc or $chktot3 == tot){
 	$mul3 = 1;
 }else{}

 if($chkmag4 == mag AND $chkdmc4 == dmc AND $chktot4 == tot){
 	$mul4 = 3;
 } elseif(($chkmag4 == mag and $chkdmc4 == dmc) or ($chkmag4 == mag and $chktot4 == tot) or ($chkdmc4 == dmc and $chktot4 == tot) ){
 	$mul4 = 2;
 }elseif($chkmag4 == mag or $chkdmc4 == dmc or $chktot4 == tot){
 	$mul4 = 1;
 }else{}

 if($chkmag5 == mag AND $chkdmc5 == dmc AND $chktot5 == tot){
 	$mul5 = 3;
 } elseif(($chkmag5 == mag and $chkdmc5 == dmc) or ($chkmag5 == mag and $chktot5 == tot) or ($chkdmc5 == dmc and $chktot5 == tot) ){
 	$mul5 = 2;
 }elseif($chkmag5 == mag or $chkdmc5 == dmc or $chktot5 == tot){
 	$mul5 = 1;
 }else{}

 if($chkmag6 == mag AND $chkdmc6 == dmc AND $chktot6 == tot){
 	$mul6 = 3;
 } elseif(($chkmag6 == mag and $chkdmc6 == dmc) or ($chkmag6 == mag and $chktot6 == tot) or ($chkdmc6 == dmc and $chktot6 == tot) ){
 	$mul6 = 2;
 }elseif($chkmag6 == mag or $chkdmc6 == dmc or $chktot6 == tot){
 	$mul6 = 1;
 }else{}

 if($chkmag7 == mag AND $chkdmc7 == dmc AND $chktot7 == tot){
 	$mul7 = 3;
 } elseif(($chkmag7 == mag and $chkdmc7 == dmc) or ($chkmag7 == mag and $chktot7 == tot) or ($chkdmc7 == dmc and $chktot7 == tot) ){
 	$mul7 = 2;
 }elseif($chkmag7 == mag or $chkdmc7 == dmc or $chktot7 == tot){
 	$mul7 = 1;
 }else{}

 if($chkmag8 == mag AND $chkdmc8 == dmc AND $chktot8 == tot){
 	$mul8 = 3;
 } elseif(($chkmag8 == mag and $chkdmc8 == dmc) or ($chkmag8 == mag and $chktot8 == tot) or ($chkdmc8 == dmc and $chktot8 == tot) ){
 	$mul8 = 2;
 }elseif($chkmag8 == mag or $chkdmc8 == dmc or $chktot8 == tot){
 	$mul8 = 1;
 }else{}

 if($chkmag9 == mag AND $chkdmc9 == dmc AND $chktot9 == tot){
 	$mul9 = 3;
 } elseif(($chkmag9 == mag and $chkdmc9 == dmc) or ($chkmag9 == mag and $chktot9 == tot) or ($chkdmc9 == dmc and $chktot9 == tot) ){
 	$mul9 = 2;
 }elseif($chkmag9 == mag or $chkdmc9 == dmc or $chktot9 == tot){
 	$mul9 = 1;
 }else{}

 if($chkmag10 == mag AND $chkdmc10 == dmc AND $chktot10 == tot){
 	$mul10 = 3;
 } elseif(($chkmag10 == mag and $chkdmc10 == dmc) or ($chkmag10 == mag and $chktot10 == tot) or ($chkdmc10 == dmc and $chktot10 == tot) ){
 	$mul10 = 2;
 }elseif($chkmag10 == mag or $chkdmc10 == dmc or $chktot10 == tot){
 	$mul10 = 1;
 }else{}

 if($chkmag11 == mag AND $chkdmc11 == dmc AND $chktot11 == tot){
 	$mul11 = 3;
 } elseif(($chkmag11 == mag and $chkdmc11 == dmc) or ($chkmag11 == mag and $chktot11 == tot) or ($chkdmc11 == dmc and $chktot11 == tot) ){
 	$mul11 = 2;
 }elseif($chkmag11 == mag or $chkdmc11 == dmc or $chktot11 == tot){
 	$mul11 = 1;
 }else{}

 if($chkmag12 == mag AND $chkdmc12 == dmc AND $chktot12 == tot){
 	$mul12 = 3;
 } elseif(($chkmag12 == mag and $chkdmc12 == dmc) or ($chkmag12 == mag and $chktot12 == tot) or ($chkdmc12 == dmc and $chktot12 == tot) ){
 	$mul12 = 2;
 }elseif($chkmag12 == mag or $chkdmc12 == dmc or $chktot12 == tot){
 	$mul12 = 1;
 }else{}

 if($chkmag13 == mag AND $chkdmc13 == dmc AND $chktot13 == tot){
 	$mul13 = 3;
 } elseif(($chkmag13 == mag and $chkdmc13 == dmc) or ($chkmag13 == mag and $chktot13 == tot) or ($chkdmc13 == dmc and $chktot13 == tot) ){
 	$mul13 = 2;
 }elseif($chkmag13 == mag or $chkdmc13 == dmc or $chktot13 == tot){
 	$mul13 = 1;
 }else{}

 if($chkmag14 == mag AND $chkdmc14 == dmc AND $chktot14 == tot){
 	$mul14 = 3;
 } elseif(($chkmag14 == mag and $chkdmc14 == dmc) or ($chkmag14 == mag and $chktot14 == tot) or ($chkdmc14 == dmc and $chktot14 == tot) ){
 	$mul14 = 2;
 }elseif($chkmag14 == mag or $chkdmc14 == dmc or $chktot14 == tot){
 	$mul14 = 1;
 }else{}

 if($chkmag15 == mag AND $chkdmc15 == dmc AND $chktot15 == tot){
 	$mul15 = 3;
 } elseif(($chkmag15 == mag and $chkdmc15 == dmc) or ($chkmag15 == mag and $chktot15 == tot) or ($chkdmc15 == dmc and $chktot15 == tot) ){
 	$mul15 = 2;
 }elseif($chkmag15 == mag or $chkdmc15 == dmc or $chktot15 == tot){
 	$mul15 = 1;
 }else{}

$total = $bbig1 +$bbig2 +$bbbig3 +$bbig4 +$bbig5 +$bbig6 +$bbig7 +$bbig8 +$bbig9 +$bbig10 +$bbig11 +$bbig12 +$bbig13 +$bbig14 +$bbig15 +$bsml1 +$bsml2 +$bsml3 +$bsml4 +$bsml5 +$bsml6 +$bsml7 +$bsml8 +$bsml9 +$bsml10 +$bsml11 +$bsml12 +$bsml13 +$bsml14 +$bsml15 +$bsa1 +$bsa2 +$bsa3 +$bsa4 +$bsa5 +$bsa6 +$bsa7 +$bsa8 +$bsa9 +$bsa10 +$bsa11 +$bsa12 +$bsa13 +$bsa14 +$bsa15 +$bsb1 +$bsb2 +$bsb3 +$bsb4 +$bsb5 +$bsb6 +$bsb7 +$bsb8 +$bsb9 +$bsb10 +$bsb11 +$bsb12 +$bsb13 +$bsb14 +$bsb15 +$bsc1 +$bsc2 +$bsc3 +$bsc4 +$bsc5 +$bsc6 +$bsc7 +$bsc8 +$bsc9 +$bsc10 +$bsc11 +$bsc12 +$bsc13 +$bsc14 +$bsc15 +$bsd1 +$bsd2 +$bsd3 +$bsd4 +$bsd5 +$bsd6 +$bsd7 +$bsd8 +$bsd9 +$bsd10 +$bsd11 +$bsd12 +$bsd13 +$bsd14 +$bsd15 +$bse1 +$bse2 +$bse3 +$bse4 +$bse5 +$bse6 +$bse7 +$bse8 +$bse9 +$bse10 +$bse11 +$bse12 +$bse13 +$bse14 +$bse15 +$ba01 +$ba02 +$ba03 +$ba04 +$ba05 +$ba06 +$ba07 +$ba08 +$ba09 +$ba010 +$ba011 +$ba012 +$ba013 +$ba014 +$ba015 +$bsf1 +$bsf2 +$bsf3 +$bsf4 +$bsf5 +$bsf6 +$bsf7 +$bsf8 +$bsf9 +$bsf10 +$bsf11 +$bsf12 +$bsf13 +$bsf14 +$bsf15;

$totalbig = $bbig1 +$bbig2 +$bbig3 +$bbig4 +$bbig5 +$bbig6 +$bbig7 +$bbig8 +$bbig9 +$bbig10 +$bbig11 +$bbig12 +$bbig13 +$bbig14 +$bbig15;
$totalsml = $bsml1 +$bsml2 +$bsml3 +$bsml4 +$bsml5 +$bsml6 +$bsml7 +$bsml8 +$bsml9 +$bsml10 +$bsml11 +$bsml12 +$bsml13 +$bsml14 +$bsml15; 
$totalsa = $bsa1 +$bsa2 +$bsa3 +$bsa4 +$bsa5 +$bsa6 +$bsa7 +$bsa8 +$bsa9 +$bsa10 +$bsa11 +$bsa12 +$bsa13 +$bsa14 +$bsa15;
$totalsb = $bsb1 +$bsb2 +$bsb3 +$bsb4 +$bsb5 +$bsb6 +$bsb7 +$bsb8 +$bsb9 +$bsb10 +$bsb11 +$bsb12 +$bsb13 +$bsb14 +$bsb15;
$totalsc = $bsc1 +$bsc2 +$bsc3 +$bsc4 +$bsc5 +$bsc6 +$bsc7 +$bsc8 +$bsc9 +$bsc10 +$bsc11 +$bsc12 +$bsc13 +$bsc14 +$bsc15;
$totalsd = $bsd1 +$bsd2 +$bsd3 +$bsd4 +$bsd5 +$bsd6 +$bsd7 +$bsd8 +$bsd9 +$bsd10 +$bsd11 +$bsd12 +$bsd13 +$bsd14 +$bsd15;
$totalse = $bse1 +$bse2 +$bse3 +$bse4 +$bse5 +$bse6 +$bse7 +$bse8 +$bse9 +$bse10 +$bse11 +$bse12 +$bse13 +$bse14 +$bse15;
$totala0 = $ba01 +$ba02 +$ba03 +$ba04 +$ba05 +$ba06 +$ba07 +$ba08 +$ba09 +$ba010 +$ba011 +$ba012 +$ba013 +$ba014 +$ba015;
$totalsf = $bsf1 +$bsf2 +$bsf3 +$bsf4 +$bsf5 +$bsf6 +$bsf7 +$bsf8 +$bsf9 +$bsf10 +$bsf11 +$bsf12 +$bsf13 +$bsf14 +$bsf15;

$tt1 = ($bbig1 + $bsml1 + $bsa1 + $bsb1 + $bsc1 + $bsd1 + $bse1 + $ba01 + $bsf1);
$tt2 = ($bbig2 + $bsml2 + $bsa2 + $bsb2 + $bsc2 + $bsd2 + $bse2 + $ba02 + $bsf2);
$tt3 = ($bbig3 + $bsml3 + $bsa3 + $bsb3 + $bsc3 + $bsd3 + $bse3 + $ba03 + $bsf3);
$tt4 = ($bbig4 + $bsml4 + $bsa4 + $bsb4 + $bsc4 + $bsd4 + $bse4 + $ba04 + $bsf4);
$tt5 = ($bbig5 + $bsml5 + $bsa5 + $bsb5 + $bsc5 + $bsd5 + $bse5 + $ba05 + $bsf5);
$tt6 = ($bbig6 + $bsml6 + $bsa6 + $bsb6 + $bsc6 + $bsd6 + $bse6 + $ba06 + $bsf6);
$tt7 = ($bbig7 + $bsml7 + $bsa7 + $bsb7 + $bsc7 + $bsd7 + $bse7 + $ba07 + $bsf7);
$tt8 = ($bbig8 + $bsml8 + $bsa8 + $bsb8 + $bsc8 + $bsd8 + $bse8 + $ba08 + $bsf8);
$tt9 = ($bbig9 + $bsml9 + $bsa9 + $bsb9 + $bsc9 + $bsd9 + $bse9 + $ba09 + $bsf9);
$tt10 = ($bbig10 + $bsml10 + $bsa10 + $bsb10 + $bsc10 + $bsd10 + $bse10 + $ba010 + $bsf10);
$tt11 = ($bbig11 + $bsml11 + $bsa11 + $bsb11 + $bsc11 + $bsd11 + $bse11 + $ba011 + $bsf11);
$tt12 = ($bbig12 + $bsml12 + $bsa12 + $bsb12 + $bsc12 + $bsd12 + $bse12 + $ba012 + $bsf12);
$tt13 = ($bbig13 + $bsml13 + $bsa13 + $bsb13 + $bsc13 + $bsd13 + $bse13 + $ba013 + $bsf13);
$tt14 = ($bbig14 + $bsml14 + $bsa14 + $bsb14 + $bsc14 + $bsd14 + $bse14 + $ba014 + $bsf14);
$tt15 = ($bbig15 + $bsml15 + $bsa15 + $bsb15 + $bsc15 + $bsd15 + $bse15 + $ba015 + $bsf15);

$total1 = (($bbig1 + $bsml1 + $bsa1 + $bsb1 + $bsc1 + $bsd1 + $bse1 + $ba01 + $bsf1) * $mul1) * $datemul;
$total2 = (($bbig2 + $bsml2 + $bsa2 + $bsb2 + $bsc2 + $bsd2 + $bse2 + $ba02 + $bsf2) * $mul2) * $datemul;
$total3 = (($bbig3 + $bsml3 + $bsa3 + $bsb3 + $bsc3 + $bsd3 + $bse3 + $ba03 + $bsf3) * $mul3) * $datemul;
$total4 = (($bbig4 + $bsml4 + $bsa4 + $bsb4 + $bsc4 + $bsd4 + $bse4 + $ba04 + $bsf4) * $mul4) * $datemul;
$total5 = (($bbig5 + $bsml5 + $bsa5 + $bsb5 + $bsc5 + $bsd5 + $bse5 + $ba05 + $bsf5) * $mul5) * $datemul;
$total6 = (($bbig6 + $bsml6 + $bsa6 + $bsb6 + $bsc6 + $bsd6 + $bse6 + $ba06 + $bsf6) * $mul6) * $datemul;
$total7 = (($bbig7 + $bsml7 + $bsa7 + $bsb7 + $bsc7 + $bsd7 + $bse7 + $ba07 + $bsf7) * $mul7) * $datemul;
$total8 = (($bbig8 + $bsml8 + $bsa8 + $bsb8 + $bsc8 + $bsd8 + $bse8 + $ba08 + $bsf8) * $mul8) * $datemul;
$total9 = (($bbig9 + $bsml9 + $bsa9 + $bsb9 + $bsc9 + $bsd9 + $bse9 + $ba09 + $bsf9) * $mul9) * $datemul;
$total10 = (($bbig10 + $bsml10 + $bsa10 + $bsb10 + $bsc10 + $bsd10 + $bse10 + $ba010 + $bsf10) * $mul10) * $datemul;
$total11 = (($bbig11 + $bsml11 + $bsa11 + $bsb11 + $bsc11 + $bsd11 + $bse11 + $ba011 + $bsf11) * $mul11) * $datemul;
$total12 = (($bbig12 + $bsml12 + $bsa12 + $bsb12 + $bsc12 + $bsd12 + $bse12 + $ba012 + $bsf12) * $mul12) * $datemul;
$total13 = (($bbig13 + $bsml13 + $bsa13 + $bsb13 + $bsc13 + $bsd13 + $bse13 + $ba013 + $bsf13) * $mul13) * $datemul;
$total14 = (($bbig14 + $bsml14 + $bsa14 + $bsb14 + $bsc14 + $bsd14 + $bse14 + $ba014 + $bsf14) * $mul14) * $datemul;
$total15 = (($bbig15 + $bsml15 + $bsa15 + $bsb15 + $bsc15 + $bsd15 + $bse15 + $ba015 + $bsf15) * $mul15) * $datemul;

$alltotal = $total1 + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + $total8 + $total9 + $total10 + $total11 + $total12 + $total13 + $total14 + $total15;

$csNo = current($_POST["csNo"]);



if(!empty($chkwed) || !empty($chksat) || !empty($chksun) || !empty($chktue)){
	if(!empty($chkmag1) || !empty($chkdmc1) || !empty($chktot1)){
				if(! empty($bbetNo1) && (! empty ($bbig1) || ! empty ($bsml1) || ! empty ($bsa1) || ! empty ($bsb1) || ! empty ($bsc1) || ! empty ($bsd1) || ! empty ($bse1) || ! empty ($ba01) || ! empty ($bsf1))) {

                $dialbox = 'yes';

              }
            } else {
              $checkbox = 'yes';
            }

	if(!empty($chkmag2) || !empty($chkdmc2) || !empty($chktot2)){
              if(! empty($bbetNo2) && (! empty ($bbig2) || ! empty ($bsml2) || ! empty ($bsa2) || ! empty ($bsb2) || ! empty ($bsc2) || ! empty ($bsd2) || ! empty ($bse2) || ! empty ($ba02) || ! empty ($bsf2))) {

                $dialbox = 'yes';

              }
            } else {
              $checkbox = 'yes';
            }

  	if(!empty($chkmag3) || !empty($chkdmc3) || !empty($chktot3)){
              if(! empty($bbetNo3) && (! empty ($bbig3) || ! empty ($bsml3) || ! empty ($bsa3) || ! empty ($bsb3) || ! empty ($bsc3) || ! empty ($bsd3) || ! empty ($bse3) || ! empty ($ba03) || ! empty ($bsf3))) {

                $dialbox = 'yes';

              }
            } else {
              $checkbox = 'yes';
            }

  if(!empty($chkmag4) || !empty($chkdmc4) || !empty($chktot4)){
              if(! empty($bbetNo4) && (! empty ($bbig4) || ! empty ($bsml4) || ! empty ($bsa4) || ! empty ($bsb4) || ! empty ($bsc4) || ! empty ($bsd4) || ! empty ($bse4) || ! empty ($ba04) || ! empty ($bsf4))) {

                $dialbox = 'yes';

              }
            } else {
              $checkbox = 'yes';
            }

  if(!empty($chkmag5) || !empty($chkdmc5) || !empty($chktot5)){
              if(! empty($bbetNo5) && (! empty ($bbig5) || ! empty ($bsml5) || ! empty ($bsa5) || ! empty ($bsb5) || ! empty ($bsc5) || ! empty ($bsd5) || ! empty ($bse5) || ! empty ($ba05) || ! empty ($bsf5))) {

                $dialbox = 'yes';

              }
            } else {
              $checkbox = 'yes';
            }

  if(!empty($chkmag6) || !empty($chkdmc6) || !empty($chktot6)){
              if(! empty($bbetNo6) && (! empty ($bbig6) || ! empty ($bsml6) || ! empty ($bsa6) || ! empty ($bsb6) || ! empty ($bsc6) || ! empty ($bsd6) || ! empty ($bse6) || ! empty ($ba06) || ! empty ($bsf6))) {

                $dialbox = 'yes';

              }
            } else {
              $checkbox = 'yes';
            }

  if(!empty($chkmag7) || !empty($chkdmc7) || !empty($chktot7)){
              if(! empty($bbetNo7) && (! empty ($bbig7) || ! empty ($bsml7) || ! empty ($bsa7) || ! empty ($bsb7) || ! empty ($bsc7) || ! empty ($bsd7) || ! empty ($bse7) || ! empty ($ba07) || ! empty ($bsf7))) {

                $dialbox = 'yes';

              }
            } else {
              $checkbox = 'yes';
            }

  if(!empty($chkmag8) || !empty($chkdmc8) || !empty($chktot8)){
              if(! empty($bbetNo8) && (! empty ($bbig8) || ! empty ($bsml8) || ! empty ($bsa8) || ! empty ($bsb8) || ! empty ($bsc8) || ! empty ($bsd8) || ! empty ($bse8) || ! empty ($ba08) || ! empty ($bsf8))) {

                $dialbox = 'yes';

              }
            } else {
              $checkbox = 'yes';
            }

  if(!empty($chkmag9) || !empty($chkdmc9) || !empty($chktot9)){
              if(! empty($bbetNo9) && (! empty ($bbig9) || ! empty ($bsml9) || ! empty ($bsa9) || ! empty ($bsb9) || ! empty ($bsc9) || ! empty ($bsd9) || ! empty ($bse9) || ! empty ($ba09) || ! empty ($bsf9))) {

                $dialbox = 'yes';

              }
            } else {
              $checkbox = 'yes';
            }

  if(!empty($chkmag10) || !empty($chkdmc10) || !empty($chktot10)){
              if(! empty($bbetNo10) && (! empty ($bbig10) || ! empty ($bsml10) || ! empty ($bsa10) || ! empty ($bsb10) || ! empty ($bsc10) || ! empty ($bsd10) || ! empty ($bse10) || ! empty ($ba010) || ! empty ($bsf10))) {

                $dialbox = 'yes';

              }
            } else {
              $checkbox = 'yes';
            }

  if(!empty($chkmag11) || !empty($chkdmc11) || !empty($chktot11)){
              if(! empty($bbetNo11) && (! empty ($bbig11) || ! empty ($bsml11) || ! empty ($bsa11) || ! empty ($bsb11) || ! empty ($bsc11) || ! empty ($bsd11) || ! empty ($bse11) || ! empty ($ba011) || ! empty ($bsf11))) {

                $dialbox = 'yes';

              }
            } else {
              $checkbox = 'yes';
            }

  if(!empty($chkmag12) || !empty($chkdmc12) || !empty($chktot12)){
              if(! empty($bbetNo12) && (! empty ($bbig12) || ! empty ($bsml12) || ! empty ($bsa12) || ! empty ($bsb12) || ! empty ($bsc12) || ! empty ($bsd12) || ! empty ($bse12) || ! empty ($ba012) || ! empty ($bsf12))) {

                $dialbox = 'yes';

              }
            } else {
              $checkbox = 'yes';
            }

  if(!empty($chkmag13) || !empty($chkdmc13) || !empty($chktot13)){
              if(! empty($bbetNo13) && (! empty ($bbig13) || ! empty ($bsml13) || ! empty ($bsa13) || ! empty ($bsb13) || ! empty ($bsc13) || ! empty ($bsd13) || ! empty ($bse13) || ! empty ($ba013) || ! empty ($bsf13))) {

                $dialbox = 'yes';

              }
            } else {
              $checkbox = 'yes';
            }

  if(!empty($chkmag14) || !empty($chkdmc14) || !empty($chktot14)){
              if(! empty($bbetNo14) && (! empty ($bbig14) || ! empty ($bsml14) || ! empty ($bsa14) || ! empty ($bsb14) || ! empty ($bsc14) || ! empty ($bsd14) || ! empty ($bse14) || ! empty ($ba014) || ! empty ($bsf14))) {

                $dialbox = 'yes';

              }
            } else {
              $checkbox = 'yes';
            }

  if(!empty($chkmag15) || !empty($chkdmc15) || !empty($chktot15)){
              if(! empty($bbetNo15) && (! empty ($bbig15) || ! empty ($bsml15) || ! empty ($bsa15) || ! empty ($bsb15) || ! empty ($bsc15) || ! empty ($bsd15) || ! empty ($bse15) || ! empty ($ba015) || ! empty ($bsf15))) {

                $dialbox = 'yes';

              }
            } else {
              $checkbox = 'yes';
            }
			} else{}

			if($dialbox !== yes && empty($csNo)){ ?>
				<script language="javascript"> alert("未完成！")
				window.location = "http://localhost/wordpress/bet/";</script>
			<?php } else {}
?>


<?php
$link = mysqli_connect("localhost", "root", "", "wordpresstest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$sql = "SELECT * FROM balance WHERE userID = '$user'";
    $result = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($result)) {
    	$avBal = $row["avBal"];
    }

   if($avBal < $alltotal){
    echo '<script>alert("您拥有的余额已不足，请充值后重新下注。"); location.replace(document.referrer);</script>';
   } else{}
?>

<?php
if(!empty($bbetNo1)){
    $sql = "SELECT * FROM betnolimit WHERE betNo = '$bbetNo1'";
    $lim1 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($lim1)) {
    	$btlim1 = $row["betLimit"];
    }

    $sql = "SELECT * FROM masterlimit WHERE mbetNo = '$bbetNo1'";
    $mlim1 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($mlim1)) {
    	$mbtlim1 = $row["betLimit"];
    }
}




if(!empty($bbetNo2)){
    $sql = "SELECT * FROM betnolimit WHERE betNo = '$bbetNo2'";
    $lim2 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($lim2)) {
    	$btlim2 = $row["betLimit"];
    }

    $sql = "SELECT * FROM masterlimit WHERE mbetNo = '$bbetNo2'";
    $mlim2 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($mlim2)) {
    	$mbtlim2 = $row["betLimit"];
    }
}




if(!empty($bbetNo3)){
    $sql = "SELECT * FROM betnolimit WHERE betNo = '$bbetNo3'";
    $lim3 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($lim3)) {
    	$btlim3 = $row["betLimit"];
    }

    $sql = "SELECT * FROM masterlimit WHERE mbetNo = '$bbetNo3'";
    $mlim3 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($mlim3)) {
    	$mbtlim3 = $row["betLimit"];
    }
}




if(!empty($bbetNo4)){
    $sql = "SELECT * FROM betnolimit WHERE betNo = '$bbetNo4'";
    $lim4 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($lim4)) {
    	$btlim4 = $row["betLimit"];
    }

    $sql = "SELECT * FROM masterlimit WHERE mbetNo = '$bbetNo4'";
    $mlim4 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($mlim4)) {
    	$mbtlim4 = $row["betLimit"];
    }
}




if(!empty($bbetNo5)){
    $sql = "SELECT * FROM betnolimit WHERE betNo = '$bbetNo5'";
    $lim5 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($lim5)) {
    	$btlim5 = $row["betLimit"];
    }

    $sql = "SELECT * FROM masterlimit WHERE mbetNo = '$bbetNo5'";
    $mlim5 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($mlim5)) {
    	$mbtlim5 = $row["betLimit"];
    }
}




if(!empty($bbetNo6)){
    $sql = "SELECT * FROM betnolimit WHERE betNo = '$bbetNo6'";
    $lim6 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($lim6)) {
    	$btlim6 = $row["betLimit"];
    }

    $sql = "SELECT * FROM masterlimit WHERE mbetNo = '$bbetNo6'";
    $mlim6 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($mlim6)) {
    	$mbtlim6 = $row["betLimit"];
    }
}




if(!empty($bbetNo7)){
    $sql = "SELECT * FROM betnolimit WHERE betNo = '$bbetNo7'";
    $lim7 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($lim7)) {
    	$btlim7 = $row["betLimit"];
    }

    $sql = "SELECT * FROM masterlimit WHERE mbetNo = '$bbetNo7'";
    $mlim7 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($mlim7)) {
    	$mbtlim7 = $row["betLimit"];
    }
}




if(!empty($bbetNo8)){
    $sql = "SELECT * FROM betnolimit WHERE betNo = '$bbetNo8'";
    $lim8 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($lim8)) {
    	$btlim8 = $row["betLimit"];
    }

    $sql = "SELECT * FROM masterlimit WHERE mbetNo = '$bbetNo8'";
    $mlim8 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($mlim8)) {
    	$mbtlim8 = $row["betLimit"];
    }
}




if(!empty($bbetNo9)){
    $sql = "SELECT * FROM betnolimit WHERE betNo = '$bbetNo9'";
    $lim9 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($lim9)) {
    	$btlim9 = $row["betLimit"];
    }

    $sql = "SELECT * FROM masterlimit WHERE mbetNo = '$bbetNo9'";
    $mlim9 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($mlim9)) {
    	$mbtlim9 = $row["betLimit"];
    }
}




if(!empty($bbetNo10)){
    $sql = "SELECT * FROM betnolimit WHERE betNo = '$bbetNo10'";
    $lim10 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($lim10)) {
    	$btlim10 = $row["betLimit"];
    }

    $sql = "SELECT * FROM masterlimit WHERE mbetNo = '$bbetNo10'";
    $mlim10 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($mlim10)) {
    	$mbtlim10 = $row["betLimit"];
    }
}




if(!empty($bbetNo11)){
    $sql = "SELECT * FROM betnolimit WHERE betNo = '$bbetNo11'";
    $lim11 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($lim11)) {
    	$btlim11 = $row["betLimit"];
    }

    $sql = "SELECT * FROM masterlimit WHERE mbetNo = '$bbetNo11'";
    $mlim11 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($mlim11)) {
    	$mbtlim11 = $row["betLimit"];
    }
}




if(!empty($bbetNo12)){
    $sql = "SELECT * FROM betnolimit WHERE betNo = '$bbetNo12'";
    $lim12 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($lim12)) {
    	$btlim12 = $row["betLimit"];
    }

    $sql = "SELECT * FROM masterlimit WHERE mbetNo = '$bbetNo12'";
    $mlim12 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($mlim12)) {
    	$mbtlim12 = $row["betLimit"];
    }
}




if(!empty($bbetNo13)){
    $sql = "SELECT * FROM betnolimit WHERE betNo = '$bbetNo13'";
    $lim13 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($lim13)) {
    	$btlim13 = $row["betLimit"];
    }

    $sql = "SELECT * FROM masterlimit WHERE mbetNo = '$bbetNo13'";
    $mlim13 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($mlim13)) {
    	$mbtlim13 = $row["betLimit"];
    }
}





if(!empty($bbetNo14)){
    $sql = "SELECT * FROM betnolimit WHERE betNo = '$bbetNo14'";
    $lim14 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($lim14)) {
    	$btlim14 = $row["betLimit"];
    }

    $sql = "SELECT * FROM masterlimit WHERE mbetNo = '$bbetNo14'";
    $mlim14 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($mlim14)) {
    	$mbtlim14 = $row["betLimit"];
    }
}





if(!empty($bbetNo15)){
    $sql = "SELECT * FROM betnolimit WHERE betNo = '$bbetNo15'";
    $lim15 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($lim15)) {
    	$btlim15 = $row["betLimit"];
    }

    $sql = "SELECT * FROM masterlimit WHERE mbetNo = '$bbetNo15'";
    $mlim15 = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($mlim15)) {
    	$mbtlim15 = $row["betLimit"];
    }
}
?>

<?php
if(!empty($chkwed)){
	$chkdatewed = 1;
}
if(!empty($chksat)){
	$chkdatesat = 1;
}
if(!empty($chksun)){
	$chkdatesun = 1;
}
if(!empty($chktue)){
	$chkdatetue = 1;
}




if(!empty($chkmag1)){
	$chkcmag1 = 1;
}
if(!empty($chkdmc1)){
	$chkcdmc1 = 1;
}
if(!empty($chktot1)){
	$chkctot1 = 1;
}

if(!empty($chkmag2)){
	$chkcmag2 = 1;
}
if(!empty($chkdmc2)){
	$chkcdmc2 = 1;
}
if(!empty($chktot2)){
	$chkctot2 = 1;
}

if(!empty($chkmag3)){
	$chkcmag3 = 1;
}
if(!empty($chkdmc3)){
	$chkcdmc3 = 1;
}
if(!empty($chktot3)){
	$chkctot3 = 1;
}

if(!empty($chkmag4)){
	$chkcmag4 = 1;
}
if(!empty($chkdmc4)){
	$chkcdmc4 = 1;
}
if(!empty($chktot4)){
	$chkctot4 = 1;
}

if(!empty($chkmag5)){
	$chkcmag5 = 1;
}
if(!empty($chkdmc5)){
	$chkcdmc5 = 1;
}
if(!empty($chktot5)){
	$chkctot5 = 1;
}

if(!empty($chkmag6)){
	$chkcmag6 = 1;
}
if(!empty($chkdmc6)){
	$chkcdmc6 = 1;
}
if(!empty($chktot6)){
	$chkctot6 = 1;
}

if(!empty($chkmag7)){
	$chkcmag7 = 1;
}
if(!empty($chkdmc7)){
	$chkcdmc7 = 1;
}
if(!empty($chktot7)){
	$chkctot7 = 1;
}

if(!empty($chkmag8)){
	$chkcmag8 = 1;
}
if(!empty($chkdmc8)){
	$chkcdmc8 = 1;
}
if(!empty($chktot8)){
	$chkctot8 = 1;
}

if(!empty($chkmag9)){
	$chkcmag9 = 1;
}
if(!empty($chkdmc9)){
	$chkcdmc9 = 1;
}
if(!empty($chktot9)){
	$chkctot9 = 1;
}

if(!empty($chkmag10)){
	$chkcmag10 = 1;
}
if(!empty($chkdmc10)){
	$chkcdmc10 = 1;
}
if(!empty($chktot10)){
	$chkctot10 = 1;
}

if(!empty($chkmag11)){
	$chkcmag11 = 1;
}
if(!empty($chkdmc11)){
	$chkcdmc11 = 1;
}
if(!empty($chktot11)){
	$chkctot11 = 1;
}

if(!empty($chkmag12)){
	$chkcmag12 = 1;
}
if(!empty($chkdmc12)){
	$chkcdmc12 = 1;
}
if(!empty($chktot12)){
	$chkctot12 = 1;
}

if(!empty($chkmag13)){
	$chkcmag13 = 1;
}
if(!empty($chkdmc13)){
	$chkcdmc13 = 1;
}
if(!empty($chktot13)){
	$chkctot13 = 1;
}

if(!empty($chkmag14)){
	$chkcmag14 = 1;
}
if(!empty($chkdmc14)){
	$chkcdmc14 = 1;
}
if(!empty($chktot14)){
	$chkctot14 = 1;
}

if(!empty($chkmag15)){
	$chkcmag15 = 1;
}
if(!empty($chkdmc15)){
	$chkcdmc15 = 1;
}
if(!empty($chktot15)){
	$chkctot15 = 1;
}




if(!empty($bbig1)){
	$chkbg1 = 1;
}
if(!empty($bsml1)){
	$chksm1 = 1;
}
if(!empty($bsa1)){
	$chksa1 = 1;
}
if(!empty($bsb1)){
	$chksb1 = 1;
}
if(!empty($bsc1)){
	$chksc1 = 1;
}
if(!empty($bsd1)){
	$chksd1 = 1;
}
if(!empty($bse1)){
	$chkse1 = 1;
}
if(!empty($ba01)){
	$chka01 = 1;
}
if(!empty($bsf1)){
	$chksf1 = 1;
}

if(!empty($bbig2)){
	$chkbg2 = 1;
}
if(!empty($bsml2)){
	$chksm2 = 1;
}
if(!empty($bsa2)){
	$chksa2 = 1;
}
if(!empty($bsb2)){
	$chksb2 = 1;
}
if(!empty($bsc2)){
	$chksc2 = 1;
}
if(!empty($bsd2)){
	$chksd2 = 1;
}
if(!empty($bse2)){
	$chkse2 = 1;
}
if(!empty($ba02)){
	$chka02 = 1;
}
if(!empty($bsf2)){
	$chksf2 = 1;
}

if(!empty($bbig3)){
	$chkbg3 = 1;
}
if(!empty($bsml3)){
	$chksm3 = 1;
}
if(!empty($bsa3)){
	$chksa3 = 1;
}
if(!empty($bsb3)){
	$chksb3 = 1;
}
if(!empty($bsc3)){
	$chksc3 = 1;
}
if(!empty($bsd3)){
	$chksd3 = 1;
}
if(!empty($bse3)){
	$chkse3 = 1;
}
if(!empty($ba03)){
	$chka03 = 1;
}
if(!empty($bsf3)){
	$chksf3 = 1;
}

if(!empty($bbig4)){
	$chkbg4 = 1;
}
if(!empty($bsml4)){
	$chksm4 = 1;
}
if(!empty($bsa4)){
	$chksa4 = 1;
}
if(!empty($bsb4)){
	$chksb4 = 1;
}
if(!empty($bsc4)){
	$chksc4 = 1;
}
if(!empty($bsd4)){
	$chksd4 = 1;
}
if(!empty($bse4)){
	$chkse4 = 1;
}
if(!empty($ba04)){
	$chka04 = 1;
}
if(!empty($bsf4)){
	$chksf4 = 1;
}

if(!empty($bbig5)){
	$chkbg5 = 1;
}
if(!empty($bsml5)){
	$chksm5 = 1;
}
if(!empty($bsa5)){
	$chksa5 = 1;
}
if(!empty($bsb5)){
	$chksb5 = 1;
}
if(!empty($bsc5)){
	$chksc5 = 1;
}
if(!empty($bsd5)){
	$chksd5 = 1;
}
if(!empty($bse5)){
	$chkse5 = 1;
}
if(!empty($ba05)){
	$chka05 = 1;
}
if(!empty($bsf5)){
	$chksf5 = 1;
}

if(!empty($bbig6)){
	$chkbg6 = 1;
}
if(!empty($bsml6)){
	$chksm6 = 1;
}
if(!empty($bsa6)){
	$chksa6 = 1;
}
if(!empty($bsb6)){
	$chksb6 = 1;
}
if(!empty($bsc6)){
	$chksc6 = 1;
}
if(!empty($bsd6)){
	$chksd6 = 1;
}
if(!empty($bse6)){
	$chkse6 = 1;
}
if(!empty($ba06)){
	$chka06 = 1;
}
if(!empty($bsf6)){
	$chksf6 = 1;
}

if(!empty($bbig7)){
	$chkbg7 = 1;
}
if(!empty($bsml7)){
	$chksm7 = 1;
}
if(!empty($bsa7)){
	$chksa7 = 1;
}
if(!empty($bsb7)){
	$chksb7 = 1;
}
if(!empty($bsc7)){
	$chksc7 = 1;
}
if(!empty($bsd7)){
	$chksd7 = 1;
}
if(!empty($bse7)){
	$chkse7 = 1;
}
if(!empty($ba07)){
	$chka07 = 1;
}
if(!empty($bsf7)){
	$chksf7 = 1;
}

if(!empty($bbig8)){
	$chkbg8 = 1;
}
if(!empty($bsml8)){
	$chksm8 = 1;
}
if(!empty($bsa8)){
	$chksa8 = 1;
}
if(!empty($bsb8)){
	$chksb8 = 1;
}
if(!empty($bsc8)){
	$chksc8 = 1;
}
if(!empty($bsd8)){
	$chksd8 = 1;
}
if(!empty($bse8)){
	$chkse8 = 1;
}
if(!empty($ba08)){
	$chka08 = 1;
}
if(!empty($bsf8)){
	$chksf8 = 1;
}

if(!empty($bbig9)){
	$chkbg9 = 1;
}
if(!empty($bsml9)){
	$chksm9 = 1;
}
if(!empty($bsa9)){
	$chksa9 = 1;
}
if(!empty($bsb9)){
	$chksb9 = 1;
}
if(!empty($bsc9)){
	$chksc9 = 1;
}
if(!empty($bsd9)){
	$chksd9 = 1;
}
if(!empty($bse9)){
	$chkse9 = 1;
}
if(!empty($ba09)){
	$chka09 = 1;
}
if(!empty($bsf9)){
	$chksf9 = 1;
}

if(!empty($bbig10)){
	$chkbg10 = 1;
}
if(!empty($bsml10)){
	$chksm10 = 1;
}
if(!empty($bsa10)){
	$chksa10 = 1;
}
if(!empty($bsb10)){
	$chksb10 = 1;
}
if(!empty($bsc10)){
	$chksc10 = 1;
}
if(!empty($bsd10)){
	$chksd10 = 1;
}
if(!empty($bse10)){
	$chkse10 = 1;
}
if(!empty($ba010)){
	$chka010 = 1;
}
if(!empty($bsf10)){
	$chksf10 = 1;
}

if(!empty($bbig11)){
	$chkbg11 = 1;
}
if(!empty($bsml11)){
	$chksm11 = 1;
}
if(!empty($bsa11)){
	$chksa11 = 1;
}
if(!empty($bsb11)){
	$chksb11 = 1;
}
if(!empty($bsc11)){
	$chksc11 = 1;
}
if(!empty($bsd11)){
	$chksd11 = 1;
}
if(!empty($bse11)){
	$chkse11 = 1;
}
if(!empty($ba011)){
	$chka011 = 1;
}
if(!empty($bsf11)){
	$chksf11 = 1;
}

if(!empty($bbig12)){
	$chkbg12 = 1;
}
if(!empty($bsml12)){
	$chksm12 = 1;
}
if(!empty($bsa12)){
	$chksa12 = 1;
}
if(!empty($bsb12)){
	$chksb12 = 1;
}
if(!empty($bsc12)){
	$chksc12 = 1;
}
if(!empty($bsd12)){
	$chksd12 = 1;
}
if(!empty($bse12)){
	$chkse12 = 1;
}
if(!empty($ba012)){
	$chka012 = 1;
}
if(!empty($bsf12)){
	$chksf12 = 1;
}

if(!empty($bbig13)){
	$chkbg13 = 1;
}
if(!empty($bsml13)){
	$chksm13 = 1;
}
if(!empty($bsa13)){
	$chksa13 = 1;
}
if(!empty($bsb13)){
	$chksb13 = 1;
}
if(!empty($bsc13)){
	$chksc13 = 1;
}
if(!empty($bsd13)){
	$chksd13 = 1;
}
if(!empty($bse13)){
	$chkse13 = 1;
}
if(!empty($ba013)){
	$chka013 = 1;
}
if(!empty($bsf13)){
	$chksf13 = 1;
}

if(!empty($bbig14)){
	$chkbg14 = 1;
}
if(!empty($bsml14)){
	$chksm14 = 1;
}
if(!empty($bsa14)){
	$chksa14 = 1;
}
if(!empty($bsb14)){
	$chksb14 = 1;
}
if(!empty($bsc14)){
	$chksc14 = 1;
}
if(!empty($bsd14)){
	$chksd14 = 1;
}
if(!empty($bse14)){
	$chkse14 = 1;
}
if(!empty($ba014)){
	$chka014 = 1;
}
if(!empty($bsf14)){
	$chksf14 = 1;
}

if(!empty($bbig15)){
	$chkbg15 = 1;
}
if(!empty($bsml15)){
	$chksm15 = 1;
}
if(!empty($bsa15)){
	$chksa15 = 1;
}
if(!empty($bsb15)){
	$chksb15 = 1;
}
if(!empty($bsc15)){
	$chksc15 = 1;
}
if(!empty($bsd15)){
	$chksd15 = 1;
}
if(!empty($bse15)){
	$chkse15 = 1;
}
if(!empty($ba015)){
	$chka015 = 1;
}
if(!empty($bsf15)){
	$chksf15 = 1;
}

$chkdate = $chkdatewed+$chkdatesat+$chkdatesun+$chkdatetue;

$chkcomp1 = $chkcmag1+$chkcdmc1+$chkctot1;
$chkcomp2 = $chkcmag2+$chkcdmc2+$chkctot2;
$chkcomp3 = $chkcmag3+$chkcdmc3+$chkctot3;
$chkcomp4 = $chkcmag4+$chkcdmc4+$chkctot4;
$chkcomp5 = $chkcmag5+$chkcdmc5+$chkctot5;
$chkcomp6 = $chkcmag6+$chkcdmc6+$chkctot6;
$chkcomp7 = $chkcmag7+$chkcdmc7+$chkctot7;
$chkcomp8 = $chkcmag8+$chkcdmc8+$chkctot8;
$chkcomp9 = $chkcmag9+$chkcdmc9+$chkctot9;
$chkcomp10 = $chkcmag10+$chkcdmc10+$chkctot10;
$chkcomp11 = $chkcmag11+$chkcdmc11+$chkctot11;
$chkcomp12 = $chkcmag12+$chkcdmc12+$chkctot12;
$chkcomp13 = $chkcmag13+$chkcdmc13+$chkctot13;
$chkcomp14 = $chkcmag14+$chkcdmc14+$chkctot14;
$chkcomp15 = $chkcmag15+$chkcdmc15+$chkctot15;

$chkbet1 = (($chkbg1+$chksm1+$chksa1+$chksb1+$chksc1+$chksd1+$chkse1+$chka01+$chksf1)*$chkcomp1)*$chkdate;
$chkbet2 = (($chkbg2+$chksm2+$chksa2+$chksb2+$chksc2+$chksd2+$chkse2+$chka02+$chksf2)*$chkcomp2)*$chkdate;
$chkbet3 = (($chkbg3+$chksm3+$chksa3+$chksb3+$chksc3+$chksd3+$chkse3+$chka03+$chksf3)*$chkcomp3)*$chkdate;
$chkbet4 = (($chkbg4+$chksm4+$chksa4+$chksb4+$chksc4+$chksd4+$chkse4+$chka04+$chksf4)*$chkcomp4)*$chkdate;
$chkbet5 = (($chkbg5+$chksm5+$chksa5+$chksb5+$chksc5+$chksd5+$chkse5+$chka05+$chksf5)*$chkcomp5)*$chkdate;
$chkbet6 = (($chkbg6+$chksm6+$chksa6+$chksb6+$chksc6+$chksd6+$chkse6+$chka06+$chksf6)*$chkcomp6)*$chkdate;
$chkbet7 = (($chkbg7+$chksm7+$chksa7+$chksb7+$chksc7+$chksd7+$chkse7+$chka07+$chksf7)*$chkcomp7)*$chkdate;
$chkbet8 = (($chkbg8+$chksm8+$chksa8+$chksb8+$chksc8+$chksd8+$chkse8+$chka08+$chksf8)*$chkcomp8)*$chkdate;
$chkbet9 = (($chkbg9+$chksm9+$chksa9+$chksb9+$chksc9+$chksd9+$chkse9+$chka09+$chksf9)*$chkcomp9)*$chkdate;
$chkbet10 = (($chkbg10+$chksm10+$chksa10+$chksb10+$chksc10+$chksd10+$chkse10+$chka010+$chksf10)*$chkcomp10)*$chkdate;
$chkbet11 = (($chkbg11+$chksm11+$chksa11+$chksb11+$chksc11+$chksd11+$chkse11+$chka011+$chksf11)*$chkcomp11)*$chkdate;
$chkbet12 = (($chkbg12+$chksm12+$chksa12+$chksb12+$chksc12+$chksd12+$chkse12+$chka012+$chksf12)*$chkcomp12)*$chkdate;
$chkbet13 = (($chkbg13+$chksm13+$chksa13+$chksb13+$chksc13+$chksd13+$chkse13+$chka013+$chksf13)*$chkcomp13)*$chkdate;
$chkbet14 = (($chkbg14+$chksm14+$chksa14+$chksb14+$chksc14+$chksd14+$chkse14+$chka014+$chksf14)*$chkcomp14)*$chkdate;
$chkbet15 = (($chkbg15+$chksm15+$chksa15+$chksb15+$chksc15+$chksd15+$chkse15+$chka015+$chksf15)*$chkcomp15)*$chkdate;

$btlim1 = $btlim1;
$btlim2 = $btlim2;
$btlim3 = $btlim3;
$btlim4 = $btlim4;
$btlim5 = $btlim5;
$btlim6 = $btlim6;
$btlim7 = $btlim7;
$btlim8 = $btlim8;
$btlim9 = $btlim9;
$btlim10 = $btlim10;
$btlim11 = $btlim11;
$btlim12 = $btlim12;
$btlim13 = $btlim13;
$btlim14 = $btlim14;
$btlim15 = $btlim15;

$mbtlim1 = $mbtlim1;
$mbtlim2 = $mbtlim2;
$mbtlim3 = $mbtlim3;
$mbtlim4 = $mbtlim4;
$mbtlim5 = $mbtlim5;
$mbtlim6 = $mbtlim6;
$mbtlim7 = $mbtlim7;
$mbtlim8 = $mbtlim8;
$mbtlim9 = $mbtlim9;
$mbtlim10 = $mbtlim10;
$mbtlim11 = $mbtlim11;
$mbtlim12 = $mbtlim12;
$mbtlim13 = $mbtlim13;
$mbtlim14 = $mbtlim14;
$mbtlim15 = $mbtlim15;

$alrlim1 = $btlim1 -1;
$alrlim2 = $btlim2 -1;
$alrlim3 = $btlim3 -1;
$alrlim4 = $btlim4 -1;
$alrlim5 = $btlim5 -1;
$alrlim6 = $btlim6 -1;
$alrlim7 = $btlim7 -1;
$alrlim8 = $btlim8 -1;
$alrlim9 = $btlim9 -1;
$alrlim10 = $btlim10 -1;
$alrlim11 = $btlim11 -1;
$alrlim12 = $btlim12 -1;
$alrlim13 = $btlim13 -1;
$alrlim14 = $btlim14 -1;
$alrlim15 = $btlim15 -1;

$malrlim1 = $mbtlim1 -1;
$malrlim2 = $mbtlim2 -1;
$malrlim3 = $mbtlim3 -1;
$malrlim4 = $mbtlim4 -1;
$malrlim5 = $mbtlim5 -1;
$malrlim6 = $mbtlim6 -1;
$malrlim7 = $mbtlim7 -1;
$malrlim8 = $mbtlim8 -1;
$malrlim9 = $mbtlim9 -1;
$malrlim10 = $mbtlim10 -1;
$malrlim11 = $mbtlim11 -1;
$malrlim12 = $mbtlim12 -1;
$malrlim13 = $mbtlim13 -1;
$malrlim14 = $mbtlim14 -1;
$malrlim15 = $mbtlim15 -1;
?>


<?php
$alrstr = '您所下注的号码';
$alrend = '已售出，请重新下注。';
$alrlim1 = $alrstr.$bbetNo1.$alrend;
$alrlim2 = $alrstr.$bbetNo2.$alrend;
$alrlim3 = $alrstr.$bbetNo3.$alrend;
$alrlim4 = $alrstr.$bbetNo4.$alrend;
$alrlim5 = $alrstr.$bbetNo5.$alrend;
$alrlim6 = $alrstr.$bbetNo6.$alrend;
$alrlim7 = $alrstr.$bbetNo7.$alrend;
$alrlim8 = $alrstr.$bbetNo8.$alrend;
$alrlim9 = $alrstr.$bbetNo9.$alrend;
$alrlim10 = $alrstr.$bbetNo10.$alrend;
$alrlim11 = $alrstr.$bbetNo11.$alrend;
$alrlim12 = $alrstr.$bbetNo12.$alrend;
$alrlim13 = $alrstr.$bbetNo13.$alrend;
$alrlim14 = $alrstr.$bbetNo14.$alrend;
$alrlim15 = $alrstr.$bbetNo15.$alrend;

$alrstr1 = '您所下注的号码剩';
$alrend1 = '张票，请重新下注。';
$alrlef1 = $alrstr1.$alrlim1.$alrend1;
$alrlef2 = $alrstr1.$alrlim2.$alrend1;
$alrlef3 = $alrstr1.$alrlim3.$alrend1;
$alrlef4 = $alrstr1.$alrlim4.$alrend1;
$alrlef5 = $alrstr1.$alrlim5.$alrend1;
$alrlef6 = $alrstr1.$alrlim6.$alrend1;
$alrlef7 = $alrstr1.$alrlim7.$alrend1;
$alrlef8 = $alrstr1.$alrlim8.$alrend1;
$alrlef9 = $alrstr1.$alrlim9.$alrend1;
$alrlef10 = $alrstr1.$alrlim10.$alrend1;
$alrlef11 = $alrstr1.$alrlim11.$alrend1;
$alrlef12 = $alrstr1.$alrlim12.$alrend1;
$alrlef13 = $alrstr1.$alrlim13.$alrend1;
$alrlef14 = $alrstr1.$alrlim14.$alrend1;
$alrlef15 = $alrstr1.$alrlim15.$alrend1;

$alrlefm1 = $alrstr1.$malrlim1.$alrend1;
$alrlefm2 = $alrstr1.$malrlim2.$alrend1;
$alrlefm3 = $alrstr1.$malrlim3.$alrend1;
$alrlefm4 = $alrstr1.$malrlim4.$alrend1;
$alrlefm5 = $alrstr1.$malrlim5.$alrend1;
$alrlefm6 = $alrstr1.$malrlim6.$alrend1;
$alrlefm7 = $alrstr1.$malrlim7.$alrend1;
$alrlefm8 = $alrstr1.$malrlim8.$alrend1;
$alrlefm9 = $alrstr1.$malrlim9.$alrend1;
$alrlefm10 = $alrstr1.$malrlim10.$alrend1;
$alrlefm11 = $alrstr1.$malrlim11.$alrend1;
$alrlefm12 = $alrstr1.$malrlim12.$alrend1;
$alrlefm13 = $alrstr1.$malrlim13.$alrend1;
$alrlefm14 = $alrstr1.$malrlim14.$alrend1;
$alrlefm15 = $alrstr1.$malrlim15.$alrend1;

if(!empty($bbetNo1)){
if(!empty($btlim1)){
	if($btlim1 <= 1){
		$chkalrt = 1;
		echo $alrlim1;
echo '<br>';
	}elseif(!empty($btlim1)){
	if($btlim1 <= $chkbet1){
		$chkalrt = 1;
		echo $alrlef1;
echo '<br>';
	}
}
}elseif(empty($btlim1)){
	if($mbtlim1 <= 1){	
		$chkalrt = 1;
		echo $alrlim1;
echo '<br>';
	}elseif(empty($btlim1)){
	if($mbtlim1 <= $chkbet1){
		$chkalrt = 1;
		echo $alrlefm1;
echo '<br>';
	}
}
}
}


if(!empty($bbetNo2)){
if(!empty($btlim2)){
	if($btlim2 <= 1){
		$chkalrt = 1;
		echo $alrlim2;
echo '<br>';
	}elseif(!empty($btlim2)){
	if($btlim2 <= $chkbet2){
		$chkalrt = 1;
		echo $alrlef2;
echo '<br>';
	}
}
}elseif(empty($btlim2)){
	if($mbtlim2 <= 1){	
		$chkalrt = 1;
		echo $alrlim2;
echo '<br>';
	}elseif(empty($btlim2)){
	if($mbtlim2 <= $chkbet2){
		$chkalrt = 1;
		echo $alrlefm2;
echo '<br>';
	}
}
}
}


if(!empty($bbetNo3)){
if(!empty($btlim3)){
	if($btlim3 <= 1){
		$chkalrt = 1;
		echo $alrlim3;
echo '<br>';
	}elseif(!empty($btlim3)){
	if($btlim3 <= $chkbet3){
		$chkalrt = 1;
		echo $alrlef3;
echo '<br>';
	}
}
}elseif(empty($btlim3)){
	if($mbtlim3 <= 1){
		$chkalrt = 1;
		echo $alrlim3;
echo '<br>';
	}elseif(empty($btlim3)){
	if($mbtlim3 <= $chkbet3){
		$chkalrt = 1;
		echo $alrlefm3;
echo '<br>';
	}
}
}
}


if(!empty($bbetNo4)){
if(!empty($btlim4)){
	if($btlim4 <= 1){
		$chkalrt = 1;
		echo $alrlim4;
echo '<br>';
	}elseif(!empty($btlim4)){
	if($btlim4 <= $chkbet4){
		$chkalrt = 1;
		echo $alrlef4;
echo '<br>';
	}
}
}elseif(empty($btlim4)){
	if($mbtlim4 <= 1){
		$chkalrt = 1;
		echo $alrlim4;
echo '<br>';
	}elseif(empty($btlim4)){
	if($mbtlim4 <= $chkbet4){
		$chkalrt = 1;
		echo $alrlefm4;
echo '<br>';
	}
}
}
}


if(!empty($bbetNo5)){
if(!empty($btlim5)){
	if($btlim5 <= 1){
		$chkalrt = 1;
		echo $alrlim5;
echo '<br>';
	}elseif(!empty($btlim5)){
	if($btlim5 <= $chkbet5){
		$chkalrt = 1;
		echo $alrlef5;
echo '<br>';
	}
}
}elseif(empty($btlim5)){
	if($mbtlim5 <= 1){	
		$chkalrt = 1;
		echo $alrlim5;
echo '<br>';
	}elseif(empty($btlim5)){
	if($mbtlim5 <= $chkbet5){
		$chkalrt = 1;
		echo $alrlefm5;
echo '<br>';
	}
}
}
}


if(!empty($bbetNo6)){
if(!empty($btlim6)){
	if($btlim6 <= 1){
		$chkalrt = 1;
		echo $alrlim6;
echo '<br>';
	}elseif(!empty($btlim6)){
	if($btlim6 <= $chkbet6){
		$chkalrt = 1;
		echo $alrlef6;
echo '<br>';
	}
}
}elseif(empty($btlim6)){
	if($mbtlim6 <= 1){	
		$chkalrt = 1;
		echo $alrlim6;
echo '<br>';
	}elseif(empty($btlim6)){
	if($mbtlim6 <= $chkbet6){
		$chkalrt = 1;
		echo $alrlefm6;
echo '<br>';
	}
}
}
}


if(!empty($bbetNo7)){
if(!empty($btlim7)){
	if($btlim7 <= 1){
		$chkalrt = 1;
		echo $alrlim7;
echo '<br>';
	}elseif(!empty($btlim7)){
	if($btlim7 <= $chkbet7){
		$chkalrt = 1;
		echo $alrlef7;
echo '<br>';
	}
}
}elseif(empty($btlim7)){
	if($mbtlim7 <= 1){	
		$chkalrt = 1;
		echo $alrlim7;
echo '<br>';
	}elseif(empty($btlim7)){
	if($mbtlim7 <= $chkbet7){
		$chkalrt = 1;
		echo $alrlefm7;
echo '<br>';
	}
}
}
}


if(!empty($bbetNo8)){
if(!empty($btlim8)){
	if($btlim8 <= 1){
		$chkalrt = 1;
		echo $alrlim8;
echo '<br>';
	}elseif(!empty($btlim8)){
	if($btlim8 <= $chkbet8){
		$chkalrt = 1;
		echo $alrlef8;
echo '<br>';
	}
}
}elseif(empty($btlim8)){
	if($mbtlim8 <= 1){	
		$chkalrt = 1;
		echo $alrlim8;
echo '<br>';
	}elseif(empty($btlim8)){
	if($mbtlim8 <= $chkbet8){
		$chkalrt = 1;
		echo $alrlefm8;
echo '<br>';
	}
}
}
}


if(!empty($bbetNo9)){
if(!empty($btlim9)){
	if($btlim9 <= 1){
		$chkalrt = 1;
		echo $alrlim9;
echo '<br>';
	}elseif(!empty($btlim9)){
	if($btlim9 <= $chkbet9){
		$chkalrt = 1;
		echo $alrlef9;
echo '<br>';
	}
}
}elseif(empty($btlim9)){
	if($mbtlim9 <= 1){	
		$chkalrt = 1;
		echo $alrlim9;
echo '<br>';
	}elseif(empty($btlim9)){
	if($mbtlim9 <= $chkbet9){
		$chkalrt = 1;
		echo $alrlefm9;
echo '<br>';
	}
}
}
}


if(!empty($bbetNo10)){
if(!empty($btlim10)){
	if($btlim10 <= 1){
		$chkalrt = 1;
		echo $alrlim10;
echo '<br>';
	}elseif(!empty($btlim10)){
	if($btlim10 <= $chkbet10){
		$chkalrt = 1;
		echo $alrlef10;
echo '<br>';
	}
}
}elseif(empty($btlim10)){
	if($mbtlim10 <= 1){	
		$chkalrt = 1;
		echo $alrlim10;
echo '<br>';
	}elseif(empty($btlim10)){
	if($mbtlim10 <= $chkbet10){
		$chkalrt = 1;
		echo $alrlefm10;
echo '<br>';
	}
}
}
}


if(!empty($bbetNo11)){
if(!empty($btlim11)){
	if($btlim11 <= 1){
		$chkalrt = 1;
		echo $alrlim11;
echo '<br>';
	}elseif(!empty($btlim11)){
	if($btlim11 <= $chkbet11){
		$chkalrt = 1;
		echo $alrlef11;
echo '<br>';
	}
}
}elseif(empty($btlim11)){
	if($mbtlim11 <= 1){	
		$chkalrt = 1;
		echo $alrlim11;
echo '<br>';
	}elseif(empty($btlim11)){
	if($mbtlim11 <= $chkbet11){
		$chkalrt = 1;
		echo $alrlefm11;
echo '<br>';
	}
}
}
}


if(!empty($bbetNo12)){
if(!empty($btlim12)){
	if($btlim12 <= 1){
		$chkalrt = 1;
		echo $alrlim12;
echo '<br>';
	}elseif(!empty($btlim12)){
	if($btlim12 <= $chkbet12){
		$chkalrt = 1;
		echo $alrlef12;
echo '<br>';
	}
}
}elseif(empty($btlim12)){
	if($mbtlim12 <= 1){	
		$chkalrt = 1;
		echo $alrlim12;
echo '<br>';
	}elseif(empty($btlim12)){
	if($mbtlim12 <= $chkbet12){
		$chkalrt = 1;
		echo $alrlefm12;
echo '<br>';
	}
}
}
}


if(!empty($bbetNo13)){
if(!empty($btlim13)){
	if($btlim13 <= 1){
		$chkalrt = 1;
		echo $alrlim13;
echo '<br>';
	}elseif(!empty($btlim13)){
	if($btlim13 <= $chkbet13){
		$chkalrt = 1;
		echo $alrlef13;
echo '<br>';
	}
}
}elseif(empty($btlim13)){
	if($mbtlim13 <= 1){	
		$chkalrt = 1;
		echo $alrlim13;
echo '<br>';
	}elseif(empty($btlim13)){
	if($mbtlim13 <= $chkbet13){
		$chkalrt = 1;
		echo $alrlefm13;
echo '<br>';
	}
}
}
}


if(!empty($bbetNo14)){
if(!empty($btlim14)){
	if($btlim14 <= 1){
		$chkalrt = 1;
		echo $alrlim14;
echo '<br>';
	}elseif(!empty($btlim14)){
	if($btlim14 <= $chkbet14){
		$chkalrt = 1;
		echo $alrlef14;
echo '<br>';
	}
}
}elseif(empty($btlim14)){
	if($mbtlim14 <= 1){	
		$chkalrt = 1;
		echo $alrlim14;
echo '<br>';
	}elseif(empty($btlim14)){
	if($mbtlim14 <= $chkbet14){
		$chkalrt = 1;
		echo $alrlefm14;
echo '<br>';
	}
}
}
}


if(!empty($bbetNo15)){
if(!empty($btlim15)){
	if($btlim15 <= 1){
		$chkalrt = 1;
		echo $alrlim15;
echo '<br>';
	}elseif(!empty($btlim15)){
	if($btlim15 <= $chkbet15){
		$chkalrt = 1;
		echo $alrlef15;
echo '<br>';
	}
}
}elseif(empty($btlim15)){
	if($mbtlim15 <= 1){	
		$chkalrt = 1;
		echo $alrlim15;
echo '<br>';
	}elseif(empty($btlim15)){
	if($mbtlim15 <= $chkbet15){
		$chkalrt = 1;
		echo $alrlefm15;
echo '<br>';
	}
}
}
}
echo '<br>';
?>

<style>
h1{
	margin-left: 20px;
	margin-bottom: -20px;
	color: red;
}
h2{
	margin-top: 20px;
	margin-left: 20px;
}
input[id="sub"]{
	margin-left: 20px;
	font-size: 20px;
}
.box {
    display: inline-table;
    width: 400px;
    height: 250px;
    margin: 10px;
    border: 3px solid #73AD21;  
}
</style>

<?php if(empty($chkalrt)){ ?>
<h1>请再次确认:</h1>
<br>
<div class="box">
<h2>用户名称： <?php echo $user; ?></h2>
<h2>您的余额： RM <?php echo $avBal; ?></h2>
<h2>总共需付： RM <?php echo $alltotal; ?></h2>
<h2>手机号码： <?php echo $ph; ?></h2>

<form action="http://localhost/wordpress/bet2database/" method="post">

<input type="hidden" name="usrtype[]" value="<?php echo $usrtype ?>">

<input type="hidden" name="cbet1[]" value="<?php echo $chkbet1 ?>">
<input type="hidden" name="cbet2[]" value="<?php echo $chkbet2 ?>">
<input type="hidden" name="cbet3[]" value="<?php echo $chkbet3 ?>">
<input type="hidden" name="cbet4[]" value="<?php echo $chkbet4 ?>">
<input type="hidden" name="cbet5[]" value="<?php echo $chkbet5 ?>">
<input type="hidden" name="cbet6[]" value="<?php echo $chkbet6 ?>">
<input type="hidden" name="cbet7[]" value="<?php echo $chkbet7 ?>">
<input type="hidden" name="cbet8[]" value="<?php echo $chkbet8 ?>">
<input type="hidden" name="cbet9[]" value="<?php echo $chkbet9 ?>">
<input type="hidden" name="cbet10[]" value="<?php echo $chkbet10 ?>">
<input type="hidden" name="cbet11[]" value="<?php echo $chkbet11 ?>">
<input type="hidden" name="cbet12[]" value="<?php echo $chkbet12 ?>">
<input type="hidden" name="cbet13[]" value="<?php echo $chkbet13 ?>">
<input type="hidden" name="cbet14[]" value="<?php echo $chkbet14 ?>">
<input type="hidden" name="cbet15[]" value="<?php echo $chkbet15 ?>">

<input type="hidden" name="ttl1[]" value="<?php echo $tt1 ?>">
<input type="hidden" name="ttl2[]" value="<?php echo $tt2 ?>">
<input type="hidden" name="ttl3[]" value="<?php echo $tt3 ?>">
<input type="hidden" name="ttl4[]" value="<?php echo $tt4 ?>">
<input type="hidden" name="ttl5[]" value="<?php echo $tt5 ?>">
<input type="hidden" name="ttl6[]" value="<?php echo $tt6 ?>">
<input type="hidden" name="ttl7[]" value="<?php echo $tt7 ?>">
<input type="hidden" name="ttl8[]" value="<?php echo $tt8 ?>">
<input type="hidden" name="ttl9[]" value="<?php echo $tt9 ?>">
<input type="hidden" name="ttl10[]" value="<?php echo $tt10 ?>">
<input type="hidden" name="ttl11[]" value="<?php echo $tt11 ?>">
<input type="hidden" name="ttl12[]" value="<?php echo $tt12 ?>">
<input type="hidden" name="ttl13[]" value="<?php echo $tt13 ?>">
<input type="hidden" name="ttl14[]" value="<?php echo $tt14 ?>">
<input type="hidden" name="ttl15[]" value="<?php echo $tt15 ?>">

<input type="hidden" name="tta1[]" value="<?php echo $total1 ?>">
<input type="hidden" name="tta2[]" value="<?php echo $total2 ?>">
<input type="hidden" name="tta3[]" value="<?php echo $total3 ?>">
<input type="hidden" name="tta4[]" value="<?php echo $total4 ?>">
<input type="hidden" name="tta5[]" value="<?php echo $total5 ?>">
<input type="hidden" name="tta6[]" value="<?php echo $total6 ?>">
<input type="hidden" name="tta7[]" value="<?php echo $total7 ?>">
<input type="hidden" name="tta8[]" value="<?php echo $total8 ?>">
<input type="hidden" name="tta9[]" value="<?php echo $total9 ?>">
<input type="hidden" name="tta10[]" value="<?php echo $total10 ?>">
<input type="hidden" name="tta11[]" value="<?php echo $total11 ?>">
<input type="hidden" name="tta12[]" value="<?php echo $total12 ?>">
<input type="hidden" name="tta13[]" value="<?php echo $total13 ?>">
<input type="hidden" name="tta14[]" value="<?php echo $total14 ?>">
<input type="hidden" name="tta15[]" value="<?php echo $total15 ?>">

<input type="hidden" name="dlrDt[]" value="<?php echo $dlr ?>">
<input type="hidden" name="sdlrDt[]" value="<?php echo $sdlr ?>">
<input type="hidden" name="plyrDt[]" value="<?php echo $plyr ?>">

<input type="hidden" name="cwed[]" value="<?php echo $chkwed; ?>">
<input type="hidden" name="csat[]" value="<?php echo $chksat; ?>">
<input type="hidden" name="csun[]" value="<?php echo $chksun; ?>">
<input type="hidden" name="ctue[]" value="<?php echo $chktue; ?>">

<input type="hidden" name="cmag1[]" value="<?php echo $chkmag1; ?>">
<input type="hidden" name="cmag2[]" value="<?php echo $chkmag2; ?>">
<input type="hidden" name="cmag3[]" value="<?php echo $chkmag3; ?>">
<input type="hidden" name="cmag4[]" value="<?php echo $chkmag4; ?>">
<input type="hidden" name="cmag5[]" value="<?php echo $chkmag5; ?>">
<input type="hidden" name="cmag6[]" value="<?php echo $chkmag6; ?>">
<input type="hidden" name="cmag7[]" value="<?php echo $chkmag7; ?>">
<input type="hidden" name="cmag8[]" value="<?php echo $chkmag8; ?>">
<input type="hidden" name="cmag9[]" value="<?php echo $chkmag9; ?>">
<input type="hidden" name="cmag10[]" value="<?php echo $chkmag10; ?>">
<input type="hidden" name="cmag11[]" value="<?php echo $chkmag11; ?>">
<input type="hidden" name="cmag12[]" value="<?php echo $chkmag12; ?>">
<input type="hidden" name="cmag13[]" value="<?php echo $chkmag13; ?>">
<input type="hidden" name="cmag14[]" value="<?php echo $chkmag14; ?>">
<input type="hidden" name="cmag15[]" value="<?php echo $chkmag15; ?>">

<input type="hidden" name="cdmc1[]" value="<?php echo $chkdmc1; ?>">
<input type="hidden" name="cdmc2[]" value="<?php echo $chkdmc2; ?>">
<input type="hidden" name="cdmc3[]" value="<?php echo $chkdmc3; ?>">
<input type="hidden" name="cdmc4[]" value="<?php echo $chkdmc4; ?>">
<input type="hidden" name="cdmc5[]" value="<?php echo $chkdmc5; ?>">
<input type="hidden" name="cdmc6[]" value="<?php echo $chkdmc6; ?>">
<input type="hidden" name="cdmc7[]" value="<?php echo $chkdmc7; ?>">
<input type="hidden" name="cdmc8[]" value="<?php echo $chkdmc8; ?>">
<input type="hidden" name="cdmc9[]" value="<?php echo $chkdmc9; ?>">
<input type="hidden" name="cdmc10[]" value="<?php echo $chkdmc10; ?>">
<input type="hidden" name="cdmc11[]" value="<?php echo $chkdmc11; ?>">
<input type="hidden" name="cdmc12[]" value="<?php echo $chkdmc12; ?>">
<input type="hidden" name="cdmc13[]" value="<?php echo $chkdmc13; ?>">
<input type="hidden" name="cdmc14[]" value="<?php echo $chkdmc14; ?>">
<input type="hidden" name="cdmc15[]" value="<?php echo $chkdmc15; ?>">

<input type="hidden" name="ctot1[]" value="<?php echo $chktot1; ?>">
<input type="hidden" name="ctot2[]" value="<?php echo $chktot2; ?>">
<input type="hidden" name="ctot3[]" value="<?php echo $chktot3; ?>">
<input type="hidden" name="ctot4[]" value="<?php echo $chktot4; ?>">
<input type="hidden" name="ctot5[]" value="<?php echo $chktot5; ?>">
<input type="hidden" name="ctot6[]" value="<?php echo $chktot6; ?>">
<input type="hidden" name="ctot7[]" value="<?php echo $chktot7; ?>">
<input type="hidden" name="ctot8[]" value="<?php echo $chktot8; ?>">
<input type="hidden" name="ctot9[]" value="<?php echo $chktot9; ?>">
<input type="hidden" name="ctot10[]" value="<?php echo $chktot10; ?>">
<input type="hidden" name="ctot11[]" value="<?php echo $chktot11; ?>">
<input type="hidden" name="ctot12[]" value="<?php echo $chktot12; ?>">
<input type="hidden" name="ctot13[]" value="<?php echo $chktot13; ?>">
<input type="hidden" name="ctot14[]" value="<?php echo $chktot14; ?>">
<input type="hidden" name="ctot15[]" value="<?php echo $chktot15; ?>">

<input type="hidden" name="bet1[]" value="<?php echo $bbetNo1; ?>">
<input type="hidden" name="bet2[]" value="<?php echo $bbetNo2; ?>">
<input type="hidden" name="bet3[]" value="<?php echo $bbetNo3; ?>">
<input type="hidden" name="bet4[]" value="<?php echo $bbetNo4; ?>">
<input type="hidden" name="bet5[]" value="<?php echo $bbetNo5; ?>">
<input type="hidden" name="bet6[]" value="<?php echo $bbetNo6; ?>">
<input type="hidden" name="bet7[]" value="<?php echo $bbetNo7; ?>">
<input type="hidden" name="bet8[]" value="<?php echo $bbetNo8; ?>">
<input type="hidden" name="bet9[]" value="<?php echo $bbetNo9; ?>">
<input type="hidden" name="bet10[]" value="<?php echo $bbetNo10; ?>">
<input type="hidden" name="bet11[]" value="<?php echo $bbetNo11; ?>">
<input type="hidden" name="bet12[]" value="<?php echo $bbetNo12; ?>">
<input type="hidden" name="bet13[]" value="<?php echo $bbetNo13; ?>">
<input type="hidden" name="bet14[]" value="<?php echo $bbetNo14; ?>">
<input type="hidden" name="bet15[]" value="<?php echo $bbetNo15; ?>">

<input type="hidden" name="bg1[]" value="<?php echo $bbig1; ?>">
<input type="hidden" name="bg2[]" value="<?php echo $bbig2; ?>">
<input type="hidden" name="bg3[]" value="<?php echo $bbig3; ?>">
<input type="hidden" name="bg4[]" value="<?php echo $bbig4; ?>">
<input type="hidden" name="bg5[]" value="<?php echo $bbig5; ?>">
<input type="hidden" name="bg6[]" value="<?php echo $bbig6; ?>">
<input type="hidden" name="bg7[]" value="<?php echo $bbig7; ?>">
<input type="hidden" name="bg8[]" value="<?php echo $bbig8; ?>">
<input type="hidden" name="bg9[]" value="<?php echo $bbig9; ?>">
<input type="hidden" name="bg10[]" value="<?php echo $bbig10; ?>">
<input type="hidden" name="bg11[]" value="<?php echo $bbig11; ?>">
<input type="hidden" name="bg12[]" value="<?php echo $bbig12; ?>">
<input type="hidden" name="bg13[]" value="<?php echo $bbig13; ?>">
<input type="hidden" name="bg14[]" value="<?php echo $bbig14; ?>">
<input type="hidden" name="bg15[]" value="<?php echo $bbig15; ?>">

<input type="hidden" name="sm1[]" value="<?php echo $bsml1; ?>">
<input type="hidden" name="sm2[]" value="<?php echo $bsml2; ?>">
<input type="hidden" name="sm3[]" value="<?php echo $bsml3; ?>">
<input type="hidden" name="sm4[]" value="<?php echo $bsml4; ?>">
<input type="hidden" name="sm5[]" value="<?php echo $bsml5; ?>">
<input type="hidden" name="sm6[]" value="<?php echo $bsml6; ?>">
<input type="hidden" name="sm7[]" value="<?php echo $bsml7; ?>">
<input type="hidden" name="sm8[]" value="<?php echo $bsml8; ?>">
<input type="hidden" name="sm9[]" value="<?php echo $bsml9; ?>">
<input type="hidden" name="sm10[]" value="<?php echo $bsml10; ?>">
<input type="hidden" name="sm11[]" value="<?php echo $bsml11; ?>">
<input type="hidden" name="sm12[]" value="<?php echo $bsml12; ?>">
<input type="hidden" name="sm13[]" value="<?php echo $bsml13; ?>">
<input type="hidden" name="sm14[]" value="<?php echo $bsml14; ?>">
<input type="hidden" name="sm15[]" value="<?php echo $bsml15; ?>">

<input type="hidden" name="sa1[]" value="<?php echo $bsa1; ?>">
<input type="hidden" name="sa2[]" value="<?php echo $bsa2; ?>">
<input type="hidden" name="sa3[]" value="<?php echo $bsa3; ?>">
<input type="hidden" name="sa4[]" value="<?php echo $bsa4; ?>">
<input type="hidden" name="sa5[]" value="<?php echo $bsa5; ?>">
<input type="hidden" name="sa6[]" value="<?php echo $bsa6; ?>">
<input type="hidden" name="sa7[]" value="<?php echo $bsa7; ?>">
<input type="hidden" name="sa8[]" value="<?php echo $bsa8; ?>">
<input type="hidden" name="sa9[]" value="<?php echo $bsa9; ?>">
<input type="hidden" name="sa10[]" value="<?php echo $bsa10; ?>">
<input type="hidden" name="sa11[]" value="<?php echo $bsa11; ?>">
<input type="hidden" name="sa12[]" value="<?php echo $bsa12; ?>">
<input type="hidden" name="sa13[]" value="<?php echo $bsa13; ?>">
<input type="hidden" name="sa14[]" value="<?php echo $bsa14; ?>">
<input type="hidden" name="sa15[]" value="<?php echo $bsa15; ?>">

<input type="hidden" name="sb1[]" value="<?php echo $bsb1; ?>">
<input type="hidden" name="sb2[]" value="<?php echo $bsb2; ?>">
<input type="hidden" name="sb3[]" value="<?php echo $bsb3; ?>">
<input type="hidden" name="sb4[]" value="<?php echo $bsb4; ?>">
<input type="hidden" name="sb5[]" value="<?php echo $bsb5; ?>">
<input type="hidden" name="sb6[]" value="<?php echo $bsb6; ?>">
<input type="hidden" name="sb7[]" value="<?php echo $bsb7; ?>">
<input type="hidden" name="sb8[]" value="<?php echo $bsb8; ?>">
<input type="hidden" name="sb9[]" value="<?php echo $bsb9; ?>">
<input type="hidden" name="sb10[]" value="<?php echo $bsb10; ?>">
<input type="hidden" name="sb11[]" value="<?php echo $bsb11; ?>">
<input type="hidden" name="sb12[]" value="<?php echo $bsb12; ?>">
<input type="hidden" name="sb13[]" value="<?php echo $bsb13; ?>">
<input type="hidden" name="sb14[]" value="<?php echo $bsb14; ?>">
<input type="hidden" name="sb15[]" value="<?php echo $bsb15; ?>">

<input type="hidden" name="sc1[]" value="<?php echo $bsc1; ?>">
<input type="hidden" name="sc2[]" value="<?php echo $bsc2; ?>">
<input type="hidden" name="sc3[]" value="<?php echo $bsc3; ?>">
<input type="hidden" name="sc4[]" value="<?php echo $bsc4; ?>">
<input type="hidden" name="sc5[]" value="<?php echo $bsc5; ?>">
<input type="hidden" name="sc6[]" value="<?php echo $bsc6; ?>">
<input type="hidden" name="sc7[]" value="<?php echo $bsc7; ?>">
<input type="hidden" name="sc8[]" value="<?php echo $bsc8; ?>">
<input type="hidden" name="sc9[]" value="<?php echo $bsc9; ?>">
<input type="hidden" name="sc10[]" value="<?php echo $bsc10; ?>">
<input type="hidden" name="sc11[]" value="<?php echo $bsc11; ?>">
<input type="hidden" name="sc12[]" value="<?php echo $bsc12; ?>">
<input type="hidden" name="sc13[]" value="<?php echo $bsc13; ?>">
<input type="hidden" name="sc14[]" value="<?php echo $bsc14; ?>">
<input type="hidden" name="sc15[]" value="<?php echo $bsc15; ?>">

<input type="hidden" name="sd1[]" value="<?php echo $bsd1; ?>">
<input type="hidden" name="sd2[]" value="<?php echo $bsd2; ?>">
<input type="hidden" name="sd3[]" value="<?php echo $bsd3; ?>">
<input type="hidden" name="sd4[]" value="<?php echo $bsd4; ?>">
<input type="hidden" name="sd5[]" value="<?php echo $bsd5; ?>">
<input type="hidden" name="sd6[]" value="<?php echo $bsd6; ?>">
<input type="hidden" name="sd7[]" value="<?php echo $bsd7; ?>">
<input type="hidden" name="sd8[]" value="<?php echo $bsd8; ?>">
<input type="hidden" name="sd9[]" value="<?php echo $bsd9; ?>">
<input type="hidden" name="sd10[]" value="<?php echo $bsd10; ?>">
<input type="hidden" name="sd11[]" value="<?php echo $bsd11; ?>">
<input type="hidden" name="sd12[]" value="<?php echo $bsd12; ?>">
<input type="hidden" name="sd13[]" value="<?php echo $bsd13; ?>">
<input type="hidden" name="sd14[]" value="<?php echo $bsd14; ?>">
<input type="hidden" name="sd15[]" value="<?php echo $bsd15; ?>">

<input type="hidden" name="se1[]" value="<?php echo $bse1; ?>">
<input type="hidden" name="se2[]" value="<?php echo $bse2; ?>">
<input type="hidden" name="se3[]" value="<?php echo $bse3; ?>">
<input type="hidden" name="se4[]" value="<?php echo $bse4; ?>">
<input type="hidden" name="se5[]" value="<?php echo $bse5; ?>">
<input type="hidden" name="se6[]" value="<?php echo $bse6; ?>">
<input type="hidden" name="se7[]" value="<?php echo $bse7; ?>">
<input type="hidden" name="se8[]" value="<?php echo $bse8; ?>">
<input type="hidden" name="se9[]" value="<?php echo $bse9; ?>">
<input type="hidden" name="se10[]" value="<?php echo $bse10; ?>">
<input type="hidden" name="se11[]" value="<?php echo $bse11; ?>">
<input type="hidden" name="se12[]" value="<?php echo $bse12; ?>">
<input type="hidden" name="se13[]" value="<?php echo $bse13; ?>">
<input type="hidden" name="se14[]" value="<?php echo $bse14; ?>">
<input type="hidden" name="se15[]" value="<?php echo $bse15; ?>">

<input type="hidden" name="a01[]" value="<?php echo $ba01; ?>">
<input type="hidden" name="a02[]" value="<?php echo $ba02; ?>">
<input type="hidden" name="a03[]" value="<?php echo $ba03; ?>">
<input type="hidden" name="a04[]" value="<?php echo $ba04; ?>">
<input type="hidden" name="a05[]" value="<?php echo $ba05; ?>">
<input type="hidden" name="a06[]" value="<?php echo $ba06; ?>">
<input type="hidden" name="a07[]" value="<?php echo $ba07; ?>">
<input type="hidden" name="a08[]" value="<?php echo $ba08; ?>">
<input type="hidden" name="a09[]" value="<?php echo $ba09; ?>">
<input type="hidden" name="a010[]" value="<?php echo $ba010; ?>">
<input type="hidden" name="a011[]" value="<?php echo $ba011; ?>">
<input type="hidden" name="a012[]" value="<?php echo $ba012; ?>">
<input type="hidden" name="a013[]" value="<?php echo $ba013; ?>">
<input type="hidden" name="a014[]" value="<?php echo $ba014; ?>">
<input type="hidden" name="a015[]" value="<?php echo $ba015; ?>">

<input type="hidden" name="sf1[]" value="<?php echo $bsf1; ?>">
<input type="hidden" name="sf2[]" value="<?php echo $bsf2; ?>">
<input type="hidden" name="sf3[]" value="<?php echo $bsf3; ?>">
<input type="hidden" name="sf4[]" value="<?php echo $bsf4; ?>">
<input type="hidden" name="sf5[]" value="<?php echo $bsf5; ?>">
<input type="hidden" name="sf6[]" value="<?php echo $bsf6; ?>">
<input type="hidden" name="sf7[]" value="<?php echo $bsf7; ?>">
<input type="hidden" name="sf8[]" value="<?php echo $bsf8; ?>">
<input type="hidden" name="sf9[]" value="<?php echo $bsf9; ?>">
<input type="hidden" name="sf10[]" value="<?php echo $bsf10; ?>">
<input type="hidden" name="sf11[]" value="<?php echo $bsf11; ?>">
<input type="hidden" name="sf12[]" value="<?php echo $bsf12; ?>">
<input type="hidden" name="sf13[]" value="<?php echo $bsf13; ?>">
<input type="hidden" name="sf14[]" value="<?php echo $bsf14; ?>">
<input type="hidden" name="sf15[]" value="<?php echo $bsf15; ?>">

<input type="hidden" name="csNo[]" value="<?php echo $ph; ?>">

<input type="hidden" name="total[]" value="RM<?php echo $alltotal; ?>">
<input type="hidden" name="atotal[]" value="<?php echo $alltotal; ?>">
<input type="submit" name="submit" value="提交" id="sub">
</form>
</div>
<?php }else { ?>
<button onclick="history.go(-1);">返回</button>
<?php } ?>
</html>