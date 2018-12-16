<?php
ob_start();
	$conn=mysqli_connect('localhost','root','','user'); 
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
	/*else
	{
		echo "a";
	}*/
	/*  if(isset($_SESSION['userlog'])) {
    	$user = $_SESSION['userlog'];
    }else{
    	header('Location: http://localhost/wordpress/');
    }*/
	
	date_default_timezone_set("Asia/Kuala_Lumpur");


	$now    = time(); // strip_tags timestamp
	$today  = date("w", $now); // "w" returns the weekday (number)
	$wednesday = 3; // 5th day of the week (sunday = 0)
	$saturday = 6;
	$sunday = 0;

	$curday = date("Y-m-d");
	$curtime = date("H:i:s");

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

		if(isset($_POST['submit']))
		{	
            $sum=0;
			$totaldate=0;
			$totalbian=0;
			$total=0;

            $user=strip_tags($_POST['user']);
			//$sun=strip_tags($_POST['sun']);
			//$wed=strip_tags($_POST['wed']);
			//$sat=strip_tags($_POST['sat']);
			//$tue=strip_tags($_POST['tue']);

			$user=$conn->real_escape_string($user);
			//$checkedsun=$conn->real_escape_string($sun);
			//$checkedwed=$conn->real_escape_string($wed);
			//$checkedsat=$conn->real_escape_string($sat);
			//$checkedtue=$conn->real_escape_string($tue);

			if (empty($_POST["sun"])) {
				$sun = "-";
				$sun1 = "0";
			}
			else if(!empty($_POST["sun"]))
			{
				$sun=strip_tags($_POST['sun']);
				$sun=$conn->real_escape_string($sun);
				$sun1 = "1";
			}

			if (empty($_POST["sat"])) {
				$sat = "-";
				$sat1 = "0";
			}
			else if(!empty($_POST["sat"]))
			{
				$sat=strip_tags($_POST['sat']);
				$sat=$conn->real_escape_string($sat);
				$sat1 = "1";
			}

			if (empty($_POST["tue"])) {
				$tue = "-";
				$tue1 = "0";
			}
			else if(!empty($_POST["tue"]))
			{
				$tue=strip_tags($_POST['tue']);
				$tue=$conn->real_escape_string($tue);
				$tue1 = "1";
			}

			if (empty($_POST["wed"])) {
				$wed = "-";
				$wed1 = "0";
			}
			else if(!empty($_POST["wed"]))
			{
				$wed=strip_tags($_POST['wed']);
				$wed=$conn->real_escape_string($wed);
				$wed1 = "1";
			}

			$intsun = (int)$sun1;
	 		$intwed = (int)$wed1;
	 		$inttue = (int)$tue1;
	 		$intsat = (int)$sat1;

			$totaldate = $intsun + $intwed + $inttue + $intsat;

			$betNo = $_POST['betNo'];

			$big = $_POST['big'];
			$sml = $_POST['sml'];
			$sa = $_POST['sa'];
			$sb = $_POST['sb'];
			$sc = $_POST['sc'];
			$sd = $_POST['sd'];
			$se = $_POST['se'];
			$a0 = $_POST['a0'];
			$sf = $_POST['sf'];
			/*$mag = $_POST['mag'];
			$dmc = $_POST['dmc'];
			$tot = $_POST['tot'];*/

			if (empty($_POST["mag"])) {
				$mag=0;
			}
			else if(!empty($_POST["mag"]))
			{
				$mag = $_POST['mag'];
			}

			if (empty($_POST["dmc"])) {
				$dmc=0;
			}
			else if(!empty($_POST["dmc"]))
			{
				$dmc = $_POST['dmc'];
			}

			if (empty($_POST["tot"])) {
				$tot=0;
			}
			else if(!empty($_POST["tot"]))
			{
				$tot = $_POST['tot'];
			}
			/*if (empty($_POST["big"])) {
				$big=0;
			}
			else if(!empty($_POST["big"]))
			{
				$big = $_POST['big'];
			}

			if (empty($_POST["sml"])) {
				$sml=0;
			}
			else if(!empty($_POST["sml"]))
			{
				$sml = $_POST['sml'];
			}

			if (empty($_POST["sa"])) {
				$sa=0;
			}
			else if(!empty($_POST["sa"]))
			{
				$sa = $_POST['sa'];
			}

			if (empty($_POST["sb"])) {
				$sb=0;
			}
			else if(!empty($_POST["sb"]))
			{
				$sb = $_POST['sb'];
			}

			if (empty($_POST["sc"])) {
				$sc=0;
			}
			else if(!empty($_POST["sc"]))
			{
				$sc = $_POST['sc'];
			}

			if (empty($_POST["sd"])) {
				$sd=0;
			}
			else if(!empty($_POST["sd"]))
			{
				$sd = $_POST['sd'];
			}

			if (empty($_POST["se"])) {
				$se=0;
			}
			else if(!empty($_POST["se"]))
			{
				$se = $_POST['se'];
			}

			if (empty($_POST["a0"])) {
				$a0=0;
			}
			else if(!empty($_POST["a0"]))
			{
				$a0 = $_POST['a0'];
			}

			if (empty($_POST["sf"])) {
				$sf=0;
			}
			else if(!empty($_POST["sf"]))
			{
				$sf = $_POST['sf'];
			}

			if (empty($_POST["mag"])) {
				$mag=0;
			}
			else if(!empty($_POST["sf"]))
			{
				$sf = $_POST['sf'];
			}

			if (empty($_POST["sf"])) {
				$sf=0;
			}
			else if(!empty($_POST["sf"]))
			{
				$sf = $_POST['sf'];
			}

			if (empty($_POST["sf"])) {
				$sf=0;
			}
			else if(!empty($_POST["sf"]))
			{
				$sf = $_POST['sf'];
			}

			if (empty($_POST["mag"])) {
				$mag=0;
			}
			else if(!empty($_POST["mag"]))
			{
				$mag = $_POST['mag'];
			}

			if (empty($_POST["dmc"])) {
				$dmc=0;
			}
			else if(!empty($_POST["dmc"]))
			{
				$dmc = $_POST['dmc'];
			}

			if (empty($_POST["tot"])) {
				$tot=0;
			}
			else if(!empty($_POST["tot"]))
			{
				$tot = $_POST['tot'];
			}*/
			
			$phonenofront=strip_tags($_POST["ctCodestrip_tags"]);
	 		$phonenoback=strip_tags($_POST["phNostrip_tags"]);
	 		$phonenofront=$conn->real_escape_string($phonenofront);
	 		$phonenoback=$conn->real_escape_string($phonenoback);

			/*$intchkmag = (int)$mag;
			$intchkdmc = (int)$dmc;
			$intchktot = (int)$tot;*/
	 	
	 		
 		
			foreach($betNo as $key => $n ) {
				if(empty($big[$key]))
				{
					$resultbig  = array();
					$resultbig[] = $big[$key];
					$resultbig[]=0;
				}
				else
				{
					$resultbig  = array();
					$resultbig[] = $big[$key];
				}

				if(empty($sml[$key]))
				{
					$resultsml  = array();
					$resultsml[] = $sml[$key];
					$resultsml[]=0;
				}
				else
				{
					$resultsml  = array();
					$resultsml[] = $sml[$key];
				}

				if(empty($sa[$key]))
				{
					$resultsa  = array();
					$resultsa[]=$sa[$key];
					$resultsa[]=0;
				}
				else
				{
					$resultsa  = array();
					$resultsa[] = $sa[$key];
				}

				if(empty($sb[$key]))
				{
					$resultsb  = array();
					$resultsb[]=$sb[$key];
					$resultsb[]=0;
				}
				else
				{
					$resultsb  = array();
					$resultsb[] = $sb[$key];
				}

				if(empty($sc[$key]))
				{
					$resultsc[]=array();
					$resultsc[]=$sc[$key];
					$resultsc[]=0;
				}
				else
				{
					$resultsc  = array();
					$resultsc[] = $sc[$key];
				}

				if(empty($sd[$key]))
				{
					$resultsd[]=array();
					$resultsd[]=$sd[$key];
					$resultsd[]=0;
				}
				else
				{
					$resultsd  = array();
					$resultsd[] = $sd[$key];
				}

				if(empty($se[$key]))
				{
					$resultse[]=array();
					$resultse[]=$se[$key];
					$resultse[]=0;
				}
				else
				{
					$resultse = array();
					$resultse[] = $se[$key];
				}

				if(empty($a0[$key]))
				{
					$resulta0[]=array();
					$resulta0[]=$a0[$key];
					$resulta0[]=0;
				}
				else
				{
					$resulta0  = array();
					$resulta0[] = $a0[$key];
				}

				if(empty($sf[$key]))
				{
					$resultsf[]=array();
					$resultsf[]=$sf[$key];
					$resultsf[]=0;
				}
				else
				{
					$resultsf  = array();
					$resultsf[] = $sf[$key];
				}

				if(empty($mag[$key]))
				{
					$resultmag  = array();
					$resultmag[] = $mag[$key];
					$resultmag[]="0";
				}
				else
				{
					$result  = array();
					$result[] = $mag[$key];
				}
				if(empty($dmc[$key]))
				{
					$resultdmc  = array();
					$resultdmc[] = $dmc[$key];
					$resultdmc[]="0";
				}
				else
				{
					$resultdmc  = array();
					$resultdmc[] = $dmc[$key];
				}
				if(empty($tot[$key]))
				{
					$resulttot  = array();
					$resulttot[] = $tot[$key];
					$resulttot[]="0";
				}
				$intchkmag = (int)$mag[$key];
				$intchkdmc = (int)$dmc[$key];
				$intchktot = (int)$tot[$key];

				$totalbian = $intchkmag + $intchkdmc + $intchktot;

				$sum[] = $resultbig[] + $resultsml[] + $resultsa[] + $resultsb[] + $resultsc[] + $resultsd[] + $resultse[] + $resulta0[] + $resultsf[];	
				
				$total = (int)$sum[$key] * (int)$totaldate * (int)$totalbian;
			
			$query = "INSERT INTO userbet (user,betNo,big,small,firstprize,secondprize,thirdprize,specialprize,excellence,three,two,magnum,damacai,toto,sunday,wednesday,saturday,tuesday,totaldate,totalbian,sum,total,wholetotal,todaydate,phonehead,phonetail) VALUES('$user','$n','$big[$key]','$sml[$key]','$sa[$key]','$sb[$key]','$sc[$key]','$sd[$key]','$se[$key]','$a0[$key]','$sf[$key]','$mag[$key]','$dmc[$key]','$tot[$key]','$sun','$wed','$sat','$tue','$totaldate','$totalbian[$key]','$sum[$key]','$total','$total',now(),'$phonenofront','$phonenoback')";
			 // print "The name is ".$n." and email is ".$big[$key].", thank you\n";
				if (mysqli_query($conn,$query)) {
					 error_reporting(E_ALL); ini_set('display_error', 'on');
				 header('Location: http://localhost/wordpress/user-4d-result/');
				}
				else
				{
					 echo 'Error: ', mysqli_error($conn);
				}
		
			}
				mysqli_close($conn);
	}
			
	 		

			/*$query = "INSERT INTO userbet (user,betNo,big,small,firstprize,secondprize,thirdprize,specialprize,excellence,three,two,magnum,damacai,toto,sunday,wednesday,saturday,tuesday,totaldate,totalbian,sum,total,wholetotal,todaydate,phonehead,phonetail,row) VALUES('$user','$betNo','$big','$sml','$sa','$sb','$sc','$sd','$se','$a0','$sf','$mag','$dmc','$tot','$sun','$wed','$sat','$tue','$totaldate','$totalbian','$sum','$total','$total',now(),'$phonenofront','$phonenoback','1')";*/
	
	/*	if (mysqli_query($conn,$query)) {
				 header('Location: http://localhost/wordpress/user-4d-result/');
			}
			else
			{
				 echo 'Error: ', mysqli_error($conn);
			}
		
        
		/*	$sum=0;
			$totaldate="";
			$totalbian="";
			$total=0;
			
			$user=strip_tags($_POST['user']);
			$sun=strip_tags($_POST['sun']);
			$wed=strip_tags($_POST['wed']);
			$sat=strip_tags($_POST['sat']);
			$tue=strip_tags($_POST['tue']);

			$user=$conn->real_escape_string($user);
			$checkedsun=$conn->real_escape_string($sun);
			$checkedwed=$conn->real_escape_string($wed);
			$checkedsat=$conn->real_escape_string($sat);
			$checkedtue=$conn->real_escape_string($tue);

			if($checkedsun == "")
			{
				$checkedsun = "-";
				$sun1 = "0";
			}
			else if($checkedsun != "")
			{
				$sun1 = "1";
			}

			if($checkedsat == "")
			{
				$checkedsat = "-";
				$sat1 = "0";
			}
			else if($checkedsat != "")
			{
				$sat1 = "1";
			}

			if($checkedtue == "")
			{
				$checkedtue = "-";
				$tue1 = "0";
			}
			else if($checkedtue != "")
			{
				$tue1 = "1";
			}

			if($checkedwed == "")
			{
				$checkedwed = "-";
				$wed1 = "0";
			}
			else if($checkedwed != "")
			{
				$wed1 = "1";
			}

			$intsun = (int)$sun1;
	 		$intwed = (int)$wed1;
	 		$inttue = (int)$tue1;
	 		$intsat = (int)$sat1;

			$totaldate = $intsun + $intwed + $inttue + $intsat;
			//$usr = current($_POST['usr']);


			$bbetNo1 = strip_tags($_POST['betNo1']);
			$bbig1 = strip_tags($_POST['big1']);
			$bsml1 = strip_tags($_POST['sml1']);
			$bsa1 = strip_tags($_POST['sa1']);
			$bsb1 = strip_tags($_POST['sb1']);
			$bsc1 = strip_tags($_POST['sc1']);
			$bsd1 = strip_tags($_POST['sd1']);
			$bse1 = strip_tags($_POST['se1']);
			$ba01 = strip_tags($_POST['a01']);
			$bsf1 = strip_tags($_POST['sf1']);
			$chkmag1 = strip_tags($_POST["mag1"]);
	 		$chkdmc1 = strip_tags($_POST["dmc1"]);
	 		$chktot1 = strip_tags($_POST["tot1"]);

	 		$bbetNo2 = strip_tags($_POST['betNo2']);
			$bbig2 = strip_tags($_POST['big2']);
			$bsml2 = strip_tags($_POST['sml2']);
			$bsa2 = strip_tags($_POST['sa2']);
			$bsb2 = strip_tags($_POST['sb2']);
			$bsc2 = strip_tags($_POST['sc2']);
			$bsd2 = strip_tags($_POST['sd2']);
			$bse2 = strip_tags($_POST['se2']);
			$ba02 = strip_tags($_POST['a02']);
			$bsf2 = strip_tags($_POST['sf2']);
			$chkmag2 = strip_tags($_POST["mag2"]);
	 		$chkdmc2 = strip_tags($_POST["dmc2"]);
	 		$chktot2 = strip_tags($_POST["tot2"]);

	 		$bbetNo3 = strip_tags($_POST['betNo3']);
			$bbig3 = strip_tags($_POST['big3']);
			$bsml3 = strip_tags($_POST['sml3']);
			$bsa3 = strip_tags($_POST['sa3']);
			$bsb3 = strip_tags($_POST['sb3']);
			$bsc3 = strip_tags($_POST['sc3']);
			$bsd3 = strip_tags($_POST['sd3']);
			$bse3 = strip_tags($_POST['se3']);
			$ba03 = strip_tags($_POST['a03']);
			$bsf3 = strip_tags($_POST['sf3']);
			$chkmag3 = strip_tags($_POST["mag3"]);
	 		$chkdmc3 = strip_tags($_POST["dmc3"]);
	 		$chktot3 = strip_tags($_POST["tot3"]);

	 		$bbetNo4 = strip_tags($_POST['betNo4']);
			$bbig4 = strip_tags($_POST['big4']);
			$bsml4 = strip_tags($_POST['sml4']);
			$bsa4 = strip_tags($_POST['sa4']);
			$bsb4 = strip_tags($_POST['sb4']);
			$bsc4 = strip_tags($_POST['sc4']);
			$bsd4 = strip_tags($_POST['sd4']);
			$bse4 = strip_tags($_POST['se4']);
			$ba04 = strip_tags($_POST['a04']);
			$bsf4 = strip_tags($_POST['sf4']);
			$chkmag4 = strip_tags($_POST["mag4"]);
	 		$chkdmc4 = strip_tags($_POST["dmc4"]);
	 		$chktot4 = strip_tags($_POST["tot4"]);

	 		$bbetNo5 = strip_tags($_POST['betNo5']);
			$bbig5 = strip_tags($_POST['big5']);
			$bsml5 = strip_tags($_POST['sml5']);
			$bsa5 = strip_tags($_POST['sa5']);
			$bsb5 = strip_tags($_POST['sb5']);
			$bsc5 = strip_tags($_POST['sc5']);
			$bsd5 = strip_tags($_POST['sd5']);
			$bse5 = strip_tags($_POST['se5']);
			$ba05 = strip_tags($_POST['a05']);
			$bsf5 = strip_tags($_POST['sf5']);
			$chkmag5 = strip_tags($_POST["mag5"]);
	 		$chkdmc5 = strip_tags($_POST["dmc5"]);
	 		$chktot5 = strip_tags($_POST["tot5"]);

	 		$bbetNo6 = strip_tags($_POST['betNo6']);
			$bbig6 = strip_tags($_POST['big6']);
			$bsml6 = strip_tags($_POST['sml6']);
			$bsa6 = strip_tags($_POST['sa6']);
			$bsb6 = strip_tags($_POST['sb6']);
			$bsc6 = strip_tags($_POST['sc6']);
			$bsd6 = strip_tags($_POST['sd6']);
			$bse6 = strip_tags($_POST['se6']);
			$ba06 = strip_tags($_POST['a06']);
			$bsf6 = strip_tags($_POST['sf6']);
			$chkmag6 = strip_tags($_POST["mag6"]);
	 		$chkdmc6 = strip_tags($_POST["dmc6"]);
	 		$chktot6 = strip_tags($_POST["tot6"]);

	 		$bbetNo7 = strip_tags($_POST['betNo7']);
			$bbig7 = strip_tags($_POST['big7']);
			$bsml7 = strip_tags($_POST['sml7']);
			$bsa7 = strip_tags($_POST['sa7']);
			$bsb7 = strip_tags($_POST['sb7']);
			$bsc7 = strip_tags($_POST['sc7']);
			$bsd7 = strip_tags($_POST['sd7']);
			$bse7 = strip_tags($_POST['se7']);
			$ba07 = strip_tags($_POST['a07']);
			$bsf7 = strip_tags($_POST['sf7']);
			$chkmag7 = strip_tags($_POST["mag7"]);
	 		$chkdmc7 = strip_tags($_POST["dmc7"]);
	 		$chktot7 = strip_tags($_POST["tot7"]);

	 		$bbetNo8 = strip_tags($_POST['betNo8']);
			$bbig8 = strip_tags($_POST['big8']);
			$bsml8 = strip_tags($_POST['sml8']);
			$bsa8 = strip_tags($_POST['sa8']);
			$bsb8 = strip_tags($_POST['sb8']);
			$bsc8 = strip_tags($_POST['sc8']);
			$bsd8 = strip_tags($_POST['sd8']);
			$bse8 = strip_tags($_POST['se8']);
			$ba08 = strip_tags($_POST['a08']);
			$bsf8 = strip_tags($_POST['sf8']);
			$chkmag8 = strip_tags($_POST["mag8"]);
	 		$chkdmc8 = strip_tags($_POST["dmc8"]);
	 		$chktot8 = strip_tags($_POST["tot8"]);

	 		$bbetNo9 = strip_tags($_POST['betNo9']);
			$bbig9 = strip_tags($_POST['big9']);
			$bsml9 = strip_tags($_POST['sml9']);
			$bsa9 = strip_tags($_POST['sa9']);
			$bsb9 = strip_tags($_POST['sb9']);
			$bsc9 = strip_tags($_POST['sc9']);
			$bsd9 = strip_tags($_POST['sd9']);
			$bse9 = strip_tags($_POST['se9']);
			$ba09 = strip_tags($_POST['a09']);
			$bsf9 = strip_tags($_POST['sf9']);
			$chkmag9 = strip_tags($_POST["mag9"]);
	 		$chkdmc9 = strip_tags($_POST["dmc9"]);
	 		$chktot9 = strip_tags($_POST["tot9"]);

	 		$bbetNo10 = strip_tags($_POST['betNo10']);
			$bbig10 = strip_tags($_POST['big10']);
			$bsml10 = strip_tags($_POST['sml10']);
			$bsa10 = strip_tags($_POST['sa10']);
			$bsb10 = strip_tags($_POST['sb10']);
			$bsc10 = strip_tags($_POST['sc10']);
			$bsd10 = strip_tags($_POST['sd10']);
			$bse10 = strip_tags($_POST['se10']);
			$ba010 = strip_tags($_POST['a010']);
			$bsf10 = strip_tags($_POST['sf10']);
			$chkmag10 = strip_tags($_POST["mag10"]);
	 		$chkdmc10 = strip_tags($_POST["dmc10"]);
	 		$chktot10 = strip_tags($_POST["tot10"]);

	 		$bbetNo11 = strip_tags($_POST['betNo11']);
			$bbig11 = strip_tags($_POST['big11']);
			$bsml11 = strip_tags($_POST['sml11']);
			$bsa11 = strip_tags($_POST['sa11']);
			$bsb11 = strip_tags($_POST['sb11']);
			$bsc11 = strip_tags($_POST['sc11']);
			$bsd11 = strip_tags($_POST['sd11']);
			$bse11 = strip_tags($_POST['se11']);
			$ba011 = strip_tags($_POST['a011']);
			$bsf11 = strip_tags($_POST['sf11']);
			$chkmag11 = strip_tags($_POST["mag11"]);
	 		$chkdmc11 = strip_tags($_POST["dmc11"]);
	 		$chktot11 = strip_tags($_POST["tot11"]);

	 		$bbetNo12 = strip_tags($_POST['betNo12']);
			$bbig12 = strip_tags($_POST['big12']);
			$bsml12 = strip_tags($_POST['sml12']);
			$bsa12 = strip_tags($_POST['sa12']);
			$bsb12 = strip_tags($_POST['sb12']);
			$bsc12 = strip_tags($_POST['sc12']);
			$bsd12 = strip_tags($_POST['sd12']);
			$bse12 = strip_tags($_POST['se12']);
			$ba012 = strip_tags($_POST['a012']);
			$bsf12 = strip_tags($_POST['sf12']);
			$chkmag12 = strip_tags($_POST["mag12"]);
	 		$chkdmc12 = strip_tags($_POST["dmc12"]);
	 		$chktot12 = strip_tags($_POST["tot12"]);

	 		$bbetNo13 = strip_tags($_POST['betNo13']);
			$bbig13 = strip_tags($_POST['big13']);
			$bsml13 = strip_tags($_POST['sml13']);
			$bsa13 = strip_tags($_POST['sa13']);
			$bsb13 = strip_tags($_POST['sb13']);
			$bsc13 = strip_tags($_POST['sc13']);
			$bsd13 = strip_tags($_POST['sd13']);
			$bse13 = strip_tags($_POST['se13']);
			$ba013 = strip_tags($_POST['a013']);
			$bsf13 = strip_tags($_POST['sf13']);
			$chkmag13 = strip_tags($_POST["mag13"]);
	 		$chkdmc13 = strip_tags($_POST["dmc13"]);
	 		$chktot13 = strip_tags($_POST["tot13"]);

	 		$bbetNo14 = strip_tags($_POST['betNo14']);
			$bbig14 = strip_tags($_POST['big14']);
			$bsml14 = strip_tags($_POST['sml14']);
			$bsa14 = strip_tags($_POST['sa14']);
			$bsb14 = strip_tags($_POST['sb14']);
			$bsc14 = strip_tags($_POST['sc14']);
			$bsd14 = strip_tags($_POST['sd14']);
			$bse14 = strip_tags($_POST['se14']);
			$ba014 = strip_tags($_POST['a014']);
			$bsf14 = strip_tags($_POST['sf14']);
			$chkmag14 = strip_tags($_POST["mag14"]);
	 		$chkdmc14 = strip_tags($_POST["dmc14"]);
	 		$chktot14 = strip_tags($_POST["tot14"]);

	 		$bbetNo15 = strip_tags($_POST['betNo15']);
			$bbig15 = strip_tags($_POST['big15']);
			$bsml15 = strip_tags($_POST['sml15']);
			$bsa15 = strip_tags($_POST['sa15']);
			$bsb15 = strip_tags($_POST['sb15']);
			$bsc15 = strip_tags($_POST['sc15']);
			$bsd15 = strip_tags($_POST['sd15']);
			$bse15 = strip_tags($_POST['se15']);
			$ba015 = strip_tags($_POST['a015']);
			$bsf15 = strip_tags($_POST['sf15']);
			$chkmag15 = strip_tags($_POST["mag15"]);
	 		$chkdmc15 = strip_tags($_POST["dmc15"]);
	 		$chktot15 = strip_tags($_POST["tot15"]);


	 		$phonenofront=strip_tags($_POST["ctCodestrip_tags"]);
	 		$phonenoback=strip_tags($_POST["phNostrip_tags"]);


			$bbetNo1=$conn->real_escape_string($bbetNo1);
			$bbig1=$conn->real_escape_string($bbig1);
			$bsml1=$conn->real_escape_string($bsml1);
			$bsa1=$conn->real_escape_string($bsa1);
			$bsb1=$conn->real_escape_string($bsb1);
			$bsc1=$conn->real_escape_string($bsc1);
			$bsd1=$conn->real_escape_string($bsd1);
			$bse1=$conn->real_escape_string($bse1);
			$ba01=$conn->real_escape_string($ba01);
			$bsf1=$conn->real_escape_string($bsf1);
			$chkmag1=$conn->real_escape_string($chkmag1);
			$chkdmc1=$conn->real_escape_string($chkdmc1);
			$chktot1=$conn->real_escape_string($chktot1);
			$phonenofront=$conn->real_escape_string($phonenofront);
	 		$phonenoback=$conn->real_escape_string($phonenoback);
	 		
	 		$bbetNo2=$conn->real_escape_string($bbetNo2);
			$bbig2=$conn->real_escape_string($bbig2);
			$bsml2=$conn->real_escape_string($bsml2);
			$bsa2=$conn->real_escape_string($bsa2);
			$bsb2=$conn->real_escape_string($bsb2);
			$bsc2=$conn->real_escape_string($bsc2);
			$bsd2=$conn->real_escape_string($bsd2);
			$bse2=$conn->real_escape_string($bse2);
			$ba02=$conn->real_escape_string($ba02);
			$bsf2=$conn->real_escape_string($bsf2);
			$chkmag2=$conn->real_escape_string($chkmag2);
			$chkdmc2=$conn->real_escape_string($chkdmc2);
			$chktot2=$conn->real_escape_string($chktot2);

			$bbetNo3=$conn->real_escape_string($bbetNo3);
			$bbig3=$conn->real_escape_string($bbig3);
			$bsml3=$conn->real_escape_string($bsml3);
			$bsa3=$conn->real_escape_string($bsa3);
			$bsb3=$conn->real_escape_string($bsb3);
			$bsc3=$conn->real_escape_string($bsc3);
			$bsd3=$conn->real_escape_string($bsd3);
			$bse3=$conn->real_escape_string($bse3);
			$ba03=$conn->real_escape_string($ba03);
			$bsf3=$conn->real_escape_string($bsf3);
			$chkmag3=$conn->real_escape_string($chkmag3);
			$chkdmc3=$conn->real_escape_string($chkdmc3);
			$chktot3=$conn->real_escape_string($chktot3);

			$bbetNo4=$conn->real_escape_string($bbetNo4);
			$bbig4=$conn->real_escape_string($bbig4);
			$bsml4=$conn->real_escape_string($bsml4);
			$bsa4=$conn->real_escape_string($bsa4);
			$bsb4=$conn->real_escape_string($bsb4);
			$bsc4=$conn->real_escape_string($bsc4);
			$bsd4=$conn->real_escape_string($bsd4);
			$bse4=$conn->real_escape_string($bse4);
			$ba04=$conn->real_escape_string($ba04);
			$bsf4=$conn->real_escape_string($bsf4);
			$chkmag4=$conn->real_escape_string($chkmag4);
			$chkdmc4=$conn->real_escape_string($chkdmc4);
			$chktot4=$conn->real_escape_string($chktot4);

			$bbetNo5=$conn->real_escape_string($bbetNo5);
			$bbig5=$conn->real_escape_string($bbig5);
			$bsml5=$conn->real_escape_string($bsml5);
			$bsa5=$conn->real_escape_string($bsa5);
			$bsb5=$conn->real_escape_string($bsb5);
			$bsc5=$conn->real_escape_string($bsc5);
			$bsd5=$conn->real_escape_string($bsd5);
			$bse5=$conn->real_escape_string($bse5);
			$ba05=$conn->real_escape_string($ba05);
			$bsf5=$conn->real_escape_string($bsf5);
			$chkmag5=$conn->real_escape_string($chkmag5);
			$chkdmc5=$conn->real_escape_string($chkdmc5);
			$chktot5=$conn->real_escape_string($chktot5);

			$bbetNo6=$conn->real_escape_string($bbetNo6);
			$bbig6=$conn->real_escape_string($bbig6);
			$bsml6=$conn->real_escape_string($bsml6);
			$bsa6=$conn->real_escape_string($bsa6);
			$bsb6=$conn->real_escape_string($bsb6);
			$bsc6=$conn->real_escape_string($bsc6);
			$bsd6=$conn->real_escape_string($bsd6);
			$bse6=$conn->real_escape_string($bse6);
			$ba06=$conn->real_escape_string($ba06);
			$bsf6=$conn->real_escape_string($bsf6);
			$chkmag6=$conn->real_escape_string($chkmag6);
			$chkdmc6=$conn->real_escape_string($chkdmc6);
			$chktot6=$conn->real_escape_string($chktot6);

			$bbetNo7=$conn->real_escape_string($bbetNo7);
			$bbig7=$conn->real_escape_string($bbig7);
			$bsml7=$conn->real_escape_string($bsml7);
			$bsa7=$conn->real_escape_string($bsa7);
			$bsb7=$conn->real_escape_string($bsb7);
			$bsc7=$conn->real_escape_string($bsc7);
			$bsd7=$conn->real_escape_string($bsd7);
			$bse7=$conn->real_escape_string($bse7);
			$ba07=$conn->real_escape_string($ba07);
			$bsf7=$conn->real_escape_string($bsf7);
			$chkmag7=$conn->real_escape_string($chkmag7);
			$chkdmc7=$conn->real_escape_string($chkdmc7);
			$chktot7=$conn->real_escape_string($chktot7);

			$bbetNo8=$conn->real_escape_string($bbetNo8);
			$bbig8=$conn->real_escape_string($bbig8);
			$bsml8=$conn->real_escape_string($bsml8);
			$bsa8=$conn->real_escape_string($bsa8);
			$bsb8=$conn->real_escape_string($bsb8);
			$bsc8=$conn->real_escape_string($bsc8);
			$bsd8=$conn->real_escape_string($bsd8);
			$bse8=$conn->real_escape_string($bse8);
			$ba08=$conn->real_escape_string($ba08);
			$bsf8=$conn->real_escape_string($bsf8);
			$chkmag8=$conn->real_escape_string($chkmag8);
			$chkdmc8=$conn->real_escape_string($chkdmc8);
			$chktot8=$conn->real_escape_string($chktot8);

			$bbetNo9=$conn->real_escape_string($bbetNo9);
			$bbig9=$conn->real_escape_string($bbig9);
			$bsml9=$conn->real_escape_string($bsml9);
			$bsa9=$conn->real_escape_string($bsa9);
			$bsb9=$conn->real_escape_string($bsb9);
			$bsc9=$conn->real_escape_string($bsc9);
			$bsd9=$conn->real_escape_string($bsd9);
			$bse9=$conn->real_escape_string($bse9);
			$ba09=$conn->real_escape_string($ba09);
			$bsf9=$conn->real_escape_string($bsf9);
			$chkmag9=$conn->real_escape_string($chkmag9);
			$chkdmc9=$conn->real_escape_string($chkdmc9);
			$chktot9=$conn->real_escape_string($chktot9);

			$bbetNo10=$conn->real_escape_string($bbetNo10);
			$bbig10=$conn->real_escape_string($bbig10);
			$bsml10=$conn->real_escape_string($bsml10);
			$bsa10=$conn->real_escape_string($bsa10);
			$bsb10=$conn->real_escape_string($bsb10);
			$bsc10=$conn->real_escape_string($bsc10);
			$bsd10=$conn->real_escape_string($bsd10);
			$bse10=$conn->real_escape_string($bse10);
			$ba010=$conn->real_escape_string($ba010);
			$bsf10=$conn->real_escape_string($bsf10);
			$chkmag10=$conn->real_escape_string($chkmag10);
			$chkdmc10=$conn->real_escape_string($chkdmc10);
			$chktot10=$conn->real_escape_string($chktot10);

			$bbetNo11=$conn->real_escape_string($bbetNo11);
			$bbig11=$conn->real_escape_string($bbig11);
			$bsml11=$conn->real_escape_string($bsml11);
			$bsa11=$conn->real_escape_string($bsa11);
			$bsb11=$conn->real_escape_string($bsb11);
			$bsc11=$conn->real_escape_string($bsc11);
			$bsd11=$conn->real_escape_string($bsd11);
			$bse11=$conn->real_escape_string($bse11);
			$ba011=$conn->real_escape_string($ba011);
			$bsf11=$conn->real_escape_string($bsf11);
			$chkmag11=$conn->real_escape_string($chkmag11);
			$chkdmc11=$conn->real_escape_string($chkdmc11);
			$chktot11=$conn->real_escape_string($chktot11);

			$bbetNo12=$conn->real_escape_string($bbetNo12);
			$bbig12=$conn->real_escape_string($bbig12);
			$bsml12=$conn->real_escape_string($bsml12);
			$bsa12=$conn->real_escape_string($bsa12);
			$bsb12=$conn->real_escape_string($bsb12);
			$bsc12=$conn->real_escape_string($bsc12);
			$bsd12=$conn->real_escape_string($bsd12);
			$bse12=$conn->real_escape_string($bse12);
			$ba012=$conn->real_escape_string($ba012);
			$bsf12=$conn->real_escape_string($bsf12);
			$chkmag12=$conn->real_escape_string($chkmag12);
			$chkdmc12=$conn->real_escape_string($chkdmc12);
			$chktot12=$conn->real_escape_string($chktot12);

			$bbetNo13=$conn->real_escape_string($bbetNo13);
			$bbig13=$conn->real_escape_string($bbig13);
			$bsml13=$conn->real_escape_string($bsml13);
			$bsa13=$conn->real_escape_string($bsa13);
			$bsb13=$conn->real_escape_string($bsb13);
			$bsc13=$conn->real_escape_string($bsc13);
			$bsd13=$conn->real_escape_string($bsd13);
			$bse13=$conn->real_escape_string($bse13);
			$ba013=$conn->real_escape_string($ba013);
			$bsf13=$conn->real_escape_string($bsf13);
			$chkmag13=$conn->real_escape_string($chkmag13);
			$chkdmc13=$conn->real_escape_string($chkdmc13);
			$chktot13=$conn->real_escape_string($chktot13);

			$bbetNo14=$conn->real_escape_string($bbetNo14);
			$bbig14=$conn->real_escape_string($bbig14);
			$bsml14=$conn->real_escape_string($bsml14);
			$bsa14=$conn->real_escape_string($bsa14);
			$bsb14=$conn->real_escape_string($bsb14);
			$bsc14=$conn->real_escape_string($bsc14);
			$bsd14=$conn->real_escape_string($bsd14);
			$bse14=$conn->real_escape_string($bse14);
			$ba014=$conn->real_escape_string($ba014);
			$bsf14=$conn->real_escape_string($bsf14);
			$chkmag14=$conn->real_escape_string($chkmag14);
			$chkdmc14=$conn->real_escape_string($chkdmc14);
			$chktot14=$conn->real_escape_string($chktot14);

			$bbetNo15=$conn->real_escape_string($bbetNo15);
			$bbig15=$conn->real_escape_string($bbig15);
			$bsml15=$conn->real_escape_string($bsml15);
			$bsa15=$conn->real_escape_string($bsa15);
			$bsb15=$conn->real_escape_string($bsb15);
			$bsc15=$conn->real_escape_string($bsc15);
			$bsd15=$conn->real_escape_string($bsd15);
			$bse15=$conn->real_escape_string($bse15);
			$ba015=$conn->real_escape_string($ba015);
			$bsf15=$conn->real_escape_string($bsf15);
			$chkmag15=$conn->real_escape_string($chkmag15);
			$chkdmc15=$conn->real_escape_string($chkdmc15);
			$chktot15=$conn->real_escape_string($chktot15);

		if(!($bbetNo1==""))
		{	
			if($chkmag1 == "")
			{
				$chkmag1 ="0";
			}	

			if($chkdmc1 == "")
			{
				$chkdmc1 ="0";
			}

			if($chktot1 == "")
			{
				$chktot1 ="0";
			}

			$intchkmag1 = (int)$chkmag1;
			$intchkdmc1 = (int)$chkdmc1;
			$intchktot1 = (int)$chktot1;
	 	
	 		$totalbian = $intchkmag1 + $intchkdmc1 + $intchktot1;

		if($bbig1 == "")
		{
			$bbig1 = 0;
		}	

		if($bsml1 == "")
		{
			$bsml1 = 0;
		}

		if($bsa1 == "")
		{
			$bsa1 = 0;
		}

		if($bsb1 == "")
		{
			$bsb1 = 0;
		}

		if($bsc1 == "")
		{
			$bsc1 = 0;
		}			
			
		if($bsd1 == "")
		{
			$bsd1 = 0;
		}			
		
		if($bse1 == "")
		{
			$bse1 = 0;
		}	

		if($ba01 == "")
		{
			$ba01 = 0;
		}

		if($bsf1 == "")
		{
			$bsf1 = 0;
		}

		$sum = $bbig1 + $bsml1 + $bsa1 + $bsb1 + $bsc1 + $bsd1 + $bse1 + $ba01 + $bsf1 + $bsf1;	
		$total = $sum * $totaldate * $totalbian;
 		
		$query = "INSERT INTO userbet (user,betNo,big,small,firstprize,secondprize,thirdprize,specialprize,excellence,three,two,magnum,damacai,toto,sunday,wednesday,saturday,tuesday,totaldate,totalbian,sum,total,wholetotal,todaydate,phonehead,phonetail,row) VALUES('$user','$bbetNo1','$bbig1','$bsml1','$bsa1','$bsb1','$bsc1','$bsd1','$bse1','$ba01','$bsf1','$chkmag1','$chkdmc1','$chktot1','$sun','$wed','$sat','$tue','$totaldate','$totalbian','$sum','$total','$total',now(),'$phonenofront','$phonenoback','1')";
	
		if (mysqli_query($conn,$query)) {
				 header('Location: http://localhost/wordpress/user-4d-result/');
			}
			else
			{
				 echo 'Error: ', mysqli_error($con);
			}
		}

		if(!($bbetNo2==""))
		{	
			global $total2;
			if($chkmag2 == "")
			{
				$chkmag2 ="0";
			}	

			if($chkdmc2 == "")
			{
				$chkdmc2 ="0";
			}

			if($chktot2 == "")
			{
				$chktot2 ="0";
			}

			$intchkmag2 = (int)$chkmag2;
			$intchkdmc2 = (int)$chkdmc2;
			$intchktot2 = (int)$chktot2;
	 	
	 		$totalbian2 = $intchkmag2 + $intchkdmc2 + $intchktot2;

		if($bbig2 == "")
		{
			$bbig2 = 0;
		}	

		if($bsml2 == "")
		{
			$bsml2 = 0;
		}

		if($bsa2 == "")
		{
			$bsa2 = 0;
		}

		if($bsb2 == "")
		{
			$bsb2 = 0;
		}

		if($bsc2 == "")
		{
			$bsc2 = 0;
		}			
			
		if($bsd2 == "")
		{
			$bsd2 = 0;
		}			
		
		if($bse2 == "")
		{
			$bse2 = 0;
		}	

		if($ba02 == "")
		{
			$ba02 = 0;
		}

		if($bsf2 == "")
		{
			$bsf2 = 0;
		}

		$sum2 = $bbig2 + $bsml2 + $bsa2 + $bsb2 + $bsc2 + $bsd2 + $bse2 + $ba02 + $bsf2 + $bsf2;	
		$total2 = $sum2 * $totaldate * $totalbian2;
 		$wholetotal2 = $total + $total2;

		$query = "INSERT INTO userbet (user,betNo,big,small,firstprize,secondprize,thirdprize,specialprize,excellence,three,two,magnum,damacai,toto,sunday,wednesday,saturday,tuesday,totaldate,totalbian,sum,total,wholetotal,todaydate,phonehead,phonetail,row) VALUES('$user','$bbetNo2','$bbig2','$bsml2','$bsa2','$bsb2','$bsc2','$bsd2','$bse2','$ba02','$bsf2','$chkmag2','$chkdmc2','$chktot2','$sun','$wed','$sat','$tue','$totaldate','$totalbian2','$sum2','$total2','$wholetotal2',now(),'$phonenofront','$phonenoback','2')";

		if (mysqli_query($conn,$query)) {
			header('Location: http://localhost/wordpress/user-4d-result/');
			}
		}

		if(!($bbetNo3==""))
		{	
			if($chkmag3 == "")
			{
				$chkmag3 ="0";
			}	

			if($chkdmc3 == "")
			{
				$chkdmc3 ="0";
			}

			if($chktot3 == "")
			{
				$chktot3 ="0";
			}

			$intchkmag3 = (int)$chkmag3;
			$intchkdmc3 = (int)$chkdmc3;
			$intchktot3 = (int)$chktot3;
	 	
	 		$totalbian3 = $intchkmag3 + $intchkdmc3 + $intchktot3;

		if($bbig3 == "")
		{
			$bbig3 = 0;
		}	

		if($bsml3 == "")
		{
			$bsml3 = 0;
		}

		if($bsa3 == "")
		{
			$bsa3 = 0;
		}

		if($bsb3 == "")
		{
			$bsb3 = 0;
		}

		if($bsc3 == "")
		{
			$bsc3 = 0;
		}			
			
		if($bsd3 == "")
		{
			$bsd3 = 0;
		}			
		
		if($bse3 == "")
		{
			$bse3 = 0;
		}	

		if($ba03 == "")
		{
			$ba03 = 0;
		}

		if($bsf3 == "")
		{
			$bsf3 = 0;
		}

		$sum3 = $bbig3 + $bsml3 + $bsa3 + $bsb3 + $bsc3 + $bsd3 + $bse3 + $ba03 + $bsf3 + $bsf3;	
		$total3 = $sum3 * $totaldate * $totalbian3;
 		$wholetotal3 = $total + $total2 + $total3;

		$query = "INSERT INTO userbet (user,betNo,big,small,firstprize,secondprize,thirdprize,specialprize,excellence,three,two,magnum,damacai,toto,sunday,wednesday,saturday,tuesday,totaldate,totalbian,sum,total,wholetotal,todaydate,phonehead,phonetail,row) VALUES('$user','$bbetNo3','$bbig3','$bsml3','$bsa3','$bsb3','$bsc3','$bsd3','$bse3','$ba03','$bsf3','$chkmag3','$chkdmc3','$chktot3','$sun','$wed','$sat','$tue','$totaldate','$totalbian3','$sum3','$total3','$wholetotal3',now(),'$phonenofront','$phonenoback','3')";
	
		if (mysqli_query($conn,$query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
						</div>";
			}
		}

		if(!($bbetNo4==""))
		{	
			if($chkmag4 == "")
			{
				$chkmag4 ="0";
			}	

			if($chkdmc4 == "")
			{
				$chkdmc4 ="0";
			}

			if($chktot4 == "")
			{
				$chktot4 ="0";
			}

			$intchkmag4 = (int)$chkmag4;
			$intchkdmc4 = (int)$chkdmc4;
			$intchktot4 = (int)$chktot4;
	 	
	 		$totalbian4 = $intchkmag4 + $intchkdmc4 + $intchktot4;

		if($bbig4 == "")
		{
			$bbig4 = 0;
		}	

		if($bsml4 == "")
		{
			$bsml4 = 0;
		}

		if($bsa4 == "")
		{
			$bsa4 = 0;
		}

		if($bsb4 == "")
		{
			$bsb4 = 0;
		}

		if($bsc4 == "")
		{
			$bsc4 = 0;
		}			
			
		if($bsd4 == "")
		{
			$bsd4 = 0;
		}			
		
		if($bse4 == "")
		{
			$bse4 = 0;
		}	

		if($ba04 == "")
		{
			$ba04 = 0;
		}

		if($bsf4 == "")
		{
			$bsf4 = 0;
		}

		$sum4 = $bbig4 + $bsml4 + $bsa4 + $bsb4 + $bsc4 + $bsd4 + $bse4 + $ba04 + $bsf4 + $bsf4;	
		$total4 = $sum4 * $totaldate * $totalbian4;
 		$wholetotal4 = $total + $total2 + $total3 + $total4;

		$query = "INSERT INTO userbet (user,betNo,big,small,firstprize,secondprize,thirdprize,specialprize,excellence,three,two,magnum,damacai,toto,sunday,wednesday,saturday,tuesday,totaldate,totalbian,sum,total,wholetotal,todaydate,phonehead,phonetail,row) VALUES('$user','$bbetNo4','$bbig4','$bsml4','$bsa4','$bsb4','$bsc4','$bsd4','$bse4','$ba04','$bsf4','$chkmag4','$chkdmc4','$chktot4','$sun','$wed','$sat','$tue','$totaldate','$totalbian4','$sum4','$total4','$wholetotal4',now(),'$phonenofront','$phonenoback','4')";
	
		if (mysqli_query($conn,$query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
						</div>";
			}
		}

		if(!($bbetNo5==""))
		{	
			if($chkmag5 == "")
			{
				$chkmag5 ="0";
			}	

			if($chkdmc5 == "")
			{
				$chkdmc5 ="0";
			}

			if($chktot5 == "")
			{
				$chktot5 ="0";
			}

			$intchkmag5 = (int)$chkmag5;
			$intchkdmc5 = (int)$chkdmc5;
			$intchktot5 = (int)$chktot5;
	 	
	 		$totalbian5 = $intchkmag5 + $intchkdmc5 + $intchktot5;

		if($bbig5 == "")
		{
			$bbig5 = 0;
		}	

		if($bsml5 == "")
		{
			$bsml5 = 0;
		}

		if($bsa5 == "")
		{
			$bsa5 = 0;
		}

		if($bsb5 == "")
		{
			$bsb5 = 0;
		}

		if($bsc5 == "")
		{
			$bsc5 = 0;
		}			
			
		if($bsd5 == "")
		{
			$bsd5 = 0;
		}			
		
		if($bse5 == "")
		{
			$bse5 = 0;
		}	

		if($ba05 == "")
		{
			$ba05 = 0;
		}

		if($bsf5 == "")
		{
			$bsf5 = 0;
		}

		$sum5 = $bbig5 + $bsml5 + $bsa5 + $bsb5 + $bsc5 + $bsd5 + $bse5 + $ba05 + $bsf5 + $bsf5;	
		$total5 = $sum5 * $totaldate * $totalbian5;
 		$wholetotal5 = $total + $total2 + $total3 + $total4 + $total5;

		$query = "INSERT INTO userbet (user,betNo,big,small,firstprize,secondprize,thirdprize,specialprize,excellence,three,two,magnum,damacai,toto,sunday,wednesday,saturday,tuesday,totaldate,totalbian,sum,total,wholetotal,todaydate,phonehead,phonetail,row) VALUES('$user','$bbetNo5','$bbig5','$bsml5','$bsa5','$bsb5','$bsc5','$bsd5','$bse5','$ba05','$bsf5','$chkmag5','$chkdmc5','$chktot5','$sun','$wed','$sat','$tue','$totaldate','$totalbian5','$sum5','$total5','$wholetotal5',now(),'$phonenofront','$phonenoback','5')";
	
		if (mysqli_query($conn,$query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
						</div>";
			}
		}

		if(!($bbetNo6==""))
		{	
			if($chkmag6 == "")
			{
				$chkmag6 ="0";
			}	

			if($chkdmc6 == "")
			{
				$chkdmc6 ="0";
			}

			if($chktot6 == "")
			{
				$chktot6 ="0";
			}

			$intchkmag6 = (int)$chkmag6;
			$intchkdmc6 = (int)$chkdmc6;
			$intchktot6 = (int)$chktot6;
	 	
	 		$totalbian6 = $intchkmag6 + $intchkdmc6 + $intchktot6;

		if($bbig6 == "")
		{
			$bbig6 = 0;
		}	

		if($bsml6 == "")
		{
			$bsml6 = 0;
		}

		if($bsa6 == "")
		{
			$bsa6 = 0;
		}

		if($bsb6 == "")
		{
			$bsb6 = 0;
		}

		if($bsc6 == "")
		{
			$bsc6 = 0;
		}			
			
		if($bsd6 == "")
		{
			$bsd6 = 0;
		}			
		
		if($bse6 == "")
		{
			$bse6 = 0;
		}	

		if($ba06 == "")
		{
			$ba06 = 0;
		}

		if($bsf6 == "")
		{
			$bsf6 = 0;
		}

		$sum6 = $bbig6 + $bsml6 + $bsa6 + $bsb6 + $bsc6 + $bsd6 + $bse6 + $ba06 + $bsf6 + $bsf6;	
		$total6 = $sum6 * $totaldate * $totalbian6;
 		$wholetotal6 = $total + $total2 + $total3 + $total4 + $total5 + $total6;

		$query = "INSERT INTO userbet (user,betNo,big,small,firstprize,secondprize,thirdprize,specialprize,excellence,three,two,magnum,damacai,toto,sunday,wednesday,saturday,tuesday,totaldate,totalbian,sum,total,wholetotal,todaydate,phonehead,phonetail,row) VALUES('$user','$bbetNo6','$bbig6','$bsml6','$bsa6','$bsb6','$bsc6','$bsd6','$bse6','$ba06','$bsf6','$chkmag6','$chkdmc6','$chktot6','$sun','$wed','$sat','$tue','$totaldate','$totalbian6','$sum6','$total6','$wholetotal6',now(),'$phonenofront','$phonenoback','6')";
	
		if (mysqli_query($conn,$query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
						</div>";
			}
		}

		if(!($bbetNo7==""))
		{	
			if($chkmag7 == "")
			{
				$chkmag7 ="0";
			}	

			if($chkdmc7 == "")
			{
				$chkdmc7 ="0";
			}

			if($chktot7 == "")
			{
				$chktot7 ="0";
			}

			$intchkmag7 = (int)$chkmag7;
			$intchkdmc7 = (int)$chkdmc7;
			$intchktot7 = (int)$chktot7;
	 	
	 		$totalbian7 = $intchkmag7 + $intchkdmc7 + $intchktot7;

		if($bbig7 == "")
		{
			$bbig7 = 0;
		}	

		if($bsml7 == "")
		{
			$bsml7 = 0;
		}

		if($bsa7 == "")
		{
			$bsa7 = 0;
		}

		if($bsb7 == "")
		{
			$bsb7 = 0;
		}

		if($bsc7 == "")
		{
			$bsc7 = 0;
		}			
			
		if($bsd7 == "")
		{
			$bsd7 = 0;
		}			
		
		if($bse7 == "")
		{
			$bse7 = 0;
		}	

		if($ba07 == "")
		{
			$ba07 = 0;
		}

		if($bsf7 == "")
		{
			$bsf7 = 0;
		}

		$sum7 = $bbig7 + $bsml7 + $bsa7 + $bsb7 + $bsc7 + $bsd7 + $bse7 + $ba07 + $bsf7 + $bsf7;	
		$total7 = $sum7 * $totaldate * $totalbian7;
 		$wholetotal7 = $total + $total2 + $total3 + $total4 + $total5 + $total6 + $total7;

		$query = "INSERT INTO userbet (user,betNo,big,small,firstprize,secondprize,thirdprize,specialprize,excellence,three,two,magnum,damacai,toto,sunday,wednesday,saturday,tuesday,totaldate,totalbian,sum,total,wholetotal,todaydate,phonehead,phonetail,row) VALUES('$user','$bbetNo7','$bbig7','$bsml7','$bsa7','$bsb7','$bsc7','$bsd7','$bse7','$ba07','$bsf7','$chkmag7','$chkdmc7','$chktot7','$sun','$wed','$sat','$tue','$totaldate','$totalbian7','$sum7','$total7','$wholetotal7',now(),'$phonenofront','$phonenoback','7')";
	
		if (mysqli_query($conn,$query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
						</div>";
			}
		}

		if(!($bbetNo8==""))
		{	
			if($chkmag8 == "")
			{
				$chkmag8 ="0";
			}	

			if($chkdmc8 == "")
			{
				$chkdmc8 ="0";
			}

			if($chktot8 == "")
			{
				$chktot8 ="0";
			}

			$intchkmag8 = (int)$chkmag8;
			$intchkdmc8 = (int)$chkdmc8;
			$intchktot8 = (int)$chktot8;
	 	
	 		$totalbian8 = $intchkmag8 + $intchkdmc8 + $intchktot8;

		if($bbig8 == "")
		{
			$bbig8 = 0;
		}	

		if($bsml8 == "")
		{
			$bsml8 = 0;
		}

		if($bsa8 == "")
		{
			$bsa8 = 0;
		}

		if($bsb8 == "")
		{
			$bsb8 = 0;
		}

		if($bsc8 == "")
		{
			$bsc8 = 0;
		}			
			
		if($bsd8 == "")
		{
			$bsd8 = 0;
		}			
		
		if($bse8 == "")
		{
			$bse8 = 0;
		}	

		if($ba08 == "")
		{
			$ba08 = 0;
		}

		if($bsf8 == "")
		{
			$bsf8 = 0;
		}

		$sum8 = $bbig8 + $bsml8 + $bsa8 + $bsb8 + $bsc8 + $bsd8 + $bse8 + $ba08 + $bsf8 + $bsf8;	
		$total8 = $sum8 * $totaldate * $totalbian8;
 		$wholetotal8 = $total + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + $total8;

		$query = "INSERT INTO userbet (user,betNo,big,small,firstprize,secondprize,thirdprize,specialprize,excellence,three,two,magnum,damacai,toto,sunday,wednesday,saturday,tuesday,totaldate,totalbian,sum,total,wholetotal,todaydate,phonehead,phonetail,row) VALUES('$user','$bbetNo8','$bbig8','$bsml8','$bsa8','$bsb8','$bsc8','$bsd8','$bse8','$ba08','$bsf8','$chkmag8','$chkdmc8','$chktot8','$sun','$wed','$sat','$tue','$totaldate','$totalbian8','$sum8','$total8','$wholetotal8',now(),'$phonenofront','$phonenoback','8')";
	
		if (mysqli_query($conn,$query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
						</div>";
			}
		}

		if(!($bbetNo9==""))
		{	
			if($chkmag9 == "")
			{
				$chkmag9 ="0";
			}	

			if($chkdmc9 == "")
			{
				$chkdmc9 ="0";
			}

			if($chktot9 == "")
			{
				$chktot9 ="0";
			}

			$intchkmag9 = (int)$chkmag9;
			$intchkdmc9 = (int)$chkdmc9;
			$intchktot9 = (int)$chktot9;
	 	
	 		$totalbian9 = $intchkmag9 + $intchkdmc9 + $intchktot9;

		if($bbig9 == "")
		{
			$bbig9 = 0;
		}	

		if($bsml9 == "")
		{
			$bsml9 = 0;
		}

		if($bsa9 == "")
		{
			$bsa9 = 0;
		}

		if($bsb9 == "")
		{
			$bsb9 = 0;
		}

		if($bsc9 == "")
		{
			$bsc9 = 0;
		}			
			
		if($bsd9 == "")
		{
			$bsd9 = 0;
		}			
		
		if($bse9 == "")
		{
			$bse9 = 0;
		}	

		if($ba09 == "")
		{
			$ba09 = 0;
		}

		if($bsf9 == "")
		{
			$bsf9 = 0;
		}

		$sum9 = $bbig9 + $bsml9 + $bsa9 + $bsb9 + $bsc9 + $bsd9 + $bse9 + $ba09 + $bsf9 + $bsf9;	
		$total9 = $sum9 * $totaldate * $totalbian9;
 		$wholetotal9 = $total + $total2 + $total3 + $tota4 + $total5 + $total6 + $tota7 + $total8 + $total9;

		$query = "INSERT INTO userbet (user,betNo,big,small,firstprize,secondprize,thirdprize,specialprize,excellence,three,two,magnum,damacai,toto,sunday,wednesday,saturday,tuesday,totaldate,totalbian,sum,total,wholetotal,todaydate,phonehead,phonetail,row) VALUES('$user','$bbetNo9','$bbig9','$bsml9','$bsa9','$bsb9','$bsc9','$bsd9','$bse9','$ba09','$bsf9','$chkmag9','$chkdmc9','$chktot9','$sun','$wed','$sat','$tue','$totaldate','$totalbian9','$sum9','$total9','$wholetotal9',now(),'$phonenofront','$phonenoback','9')";
	
		if (mysqli_query($conn,$query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
						</div>";
			}
		}

		if(!($bbetNo10==""))
		{	
			if($chkmag10 == "")
			{
				$chkmag10 ="0";
			}	

			if($chkdmc10 == "")
			{
				$chkdmc10 ="0";
			}

			if($chktot10 == "")
			{
				$chktot10 ="0";
			}

			$intchkmag10 = (int)$chkmag10;
			$intchkdmc10 = (int)$chkdmc10;
			$intchktot10 = (int)$chktot10;
	 	
	 		$totalbian10 = $intchkmag10 + $intchkdmc10 + $intchktot10;

		if($bbig10 == "")
		{
			$bbig10 = 0;
		}	

		if($bsml10 == "")
		{
			$bsml10 = 0;
		}

		if($bsa10 == "")
		{
			$bsa10 = 0;
		}

		if($bsb10 == "")
		{
			$bsb10 = 0;
		}

		if($bsc10 == "")
		{
			$bsc10 = 0;
		}			
			
		if($bsd10 == "")
		{
			$bsd10 = 0;
		}			
		
		if($bse10 == "")
		{
			$bse10 = 0;
		}	

		if($ba010 == "")
		{
			$ba010 = 0;
		}

		if($bsf10 == "")
		{
			$bsf10 = 0;
		}

		$sum10 = $bbig10 + $bsml10 + $bsa10 + $bsb10 + $bsc10 + $bsd10 + $bse10 + $ba010 + $bsf10 + $bsf10;	
		$total10 = $sum10 * $totaldate * $totalbian10;
 		$wholetotal10 = $total + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + $total8 + $total9 + $total10;

		$query = "INSERT INTO userbet (user,betNo,big,small,firstprize,secondprize,thirdprize,specialprize,excellence,three,two,magnum,damacai,toto,sunday,wednesday,saturday,tuesday,totaldate,totalbian,sum,total,wholetotal,todaydate,phonehead,phonetail,row) VALUES('$user','$bbetNo10','$bbig10','$bsml10','$bsa10','$bsb10','$bsc10','$bsd10','$bse10','$ba010','$bsf10','$chkmag10','$chkdmc10','$chktot10','$sun','$wed','$sat','$tue','$totaldate','$totalbian10','$sum10','$total10','$wholetotal10',now(),'$phonenofront','$phonenoback','10')";
	
		if (mysqli_query($conn,$query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
						</div>";
			}
		}

		if(!($bbetNo11==""))
		{	
			if($chkmag11 == "")
			{
				$chkmag11 ="0";
			}	

			if($chkdmc11 == "")
			{
				$chkdmc11 ="0";
			}

			if($chktot11 == "")
			{
				$chktot11 ="0";
			}

			$intchkmag11 = (int)$chkmag11;
			$intchkdmc11 = (int)$chkdmc11;
			$intchktot11 = (int)$chktot11;
	 	
	 		$totalbian11 = $intchkmag11 + $intchkdmc11 + $intchktot11;

		if($bbig11 == "")
		{
			$bbig11 = 0;
		}	

		if($bsml11 == "")
		{
			$bsml11 = 0;
		}

		if($bsa11 == "")
		{
			$bsa11 = 0;
		}

		if($bsb11 == "")
		{
			$bsb11 = 0;
		}

		if($bsc11 == "")
		{
			$bsc11 = 0;
		}			
			
		if($bsd11 == "")
		{
			$bsd11 = 0;
		}			
		
		if($bse11 == "")
		{
			$bse11 = 0;
		}	

		if($ba011 == "")
		{
			$ba011 = 0;
		}

		if($bsf11 == "")
		{
			$bsf11 = 0;
		}

		$sum11 = $bbig11 + $bsml11 + $bsa11 + $bsb11 + $bsc11 + $bsd11 + $bse11 + $ba011 + $bsf11 + $bsf11;	
		$total11 = $sum11 * $totaldate * $totalbian11;
 		$wholetotal11 = $total + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + $total8 + $total9 + $total10 + $total11;

		$query = "INSERT INTO userbet (user,betNo,big,small,firstprize,secondprize,thirdprize,specialprize,excellence,three,two,magnum,damacai,toto,sunday,wednesday,saturday,tuesday,totaldate,totalbian,sum,total,wholetotal,todaydate,phonehead,phonetail,row) VALUES('$user','$bbetNo11','$bbig11','$bsml11','$bsa11','$bsb11','$bsc11','$bsd11','$bse11','$ba011','$bsf11','$chkmag11','$chkdmc11','$chktot11','$sun','$wed','$sat','$tue','$totaldate','$totalbian11','$sum11','$total11','$wholetotal11',now(),'$phonenofront','$phonenoback','11')";
	
		if (mysqli_query($conn,$query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
						</div>";
			}
		}

		if(!($bbetNo12==""))
		{	
			if($chkmag12 == "")
			{
				$chkmag12 ="0";
			}	

			if($chkdmc12 == "")
			{
				$chkdmc12 ="0";
			}

			if($chktot12 == "")
			{
				$chktot12 ="0";
			}

			$intchkmag12 = (int)$chkmag12;
			$intchkdmc12 = (int)$chkdmc12;
			$intchktot12 = (int)$chktot12;
	 	
	 		$totalbian12 = $intchkmag12 + $intchkdmc12 + $intchktot12;

		if($bbig12 == "")
		{
			$bbig12 = 0;
		}	

		if($bsml12 == "")
		{
			$bsml12 = 0;
		}

		if($bsa12 == "")
		{
			$bsa12 = 0;
		}

		if($bsb12 == "")
		{
			$bsb12 = 0;
		}

		if($bsc12 == "")
		{
			$bsc12 = 0;
		}			
			
		if($bsd12 == "")
		{
			$bsd12 = 0;
		}			
		
		if($bse12 == "")
		{
			$bse12 = 0;
		}	

		if($ba012 == "")
		{
			$ba012 = 0;
		}

		if($bsf12 == "")
		{
			$bsf12 = 0;
		}

		$sum12 = $bbig12 + $bsml12 + $bsa12 + $bsb12 + $bsc12 + $bsd12 + $bse12 + $ba012 + $bsf12 + $bsf12;	
		$total12 = $sum12 * $totaldate * $totalbian12;
 		$wholetotal12 = $total + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + $total8 + $total9 + $total10 + $total11 + $total12;

		$query = "INSERT INTO userbet (user,betNo,big,small,firstprize,secondprize,thirdprize,specialprize,excellence,three,two,magnum,damacai,toto,sunday,wednesday,saturday,tuesday,totaldate,totalbian,sum,total,wholetotal,todaydate,phonehead,phonetail,row) VALUES('$user','$bbetNo12','$bbig12','$bsml12','$bsa12','$bsb12','$bsc12','$bsd12','$bse12','$ba012','$bsf12','$chkmag12','$chkdmc12','$chktot12','$sun','$wed','$sat','$tue','$totaldate','$totalbian12','$sum12','$total12','$wholetotal12',now(),'$phonenofront','$phonenoback','12')";
	
		if (mysqli_query($conn,$query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
						</div>";
			}
		}

		if(!($bbetNo13==""))
		{	
			if($chkmag13 == "")
			{
				$chkmag13 ="0";
			}	

			if($chkdmc13 == "")
			{
				$chkdmc13 ="0";
			}

			if($chktot13 == "")
			{
				$chktot13 ="0";
			}

			$intchkmag13 = (int)$chkmag13;
			$intchkdmc13 = (int)$chkdmc13;
			$intchktot13 = (int)$chktot13;
	 	
	 		$totalbian13 = $intchkmag13 + $intchkdmc13 + $intchktot13;

		if($bbig13 == "")
		{
			$bbig13 = 0;
		}	

		if($bsml13 == "")
		{
			$bsml13 = 0;
		}

		if($bsa13 == "")
		{
			$bsa13 = 0;
		}

		if($bsb13 == "")
		{
			$bsb13 = 0;
		}

		if($bsc13 == "")
		{
			$bsc13 = 0;
		}			
			
		if($bsd13 == "")
		{
			$bsd13 = 0;
		}			
		
		if($bse13 == "")
		{
			$bse13 = 0;
		}	

		if($ba013 == "")
		{
			$ba013 = 0;
		}

		if($bsf13 == "")
		{
			$bsf13 = 0;
		}

		$sum13 = $bbig13 + $bsml13 + $bsa13 + $bsb13 + $bsc13 + $bsd13 + $bse13 + $ba013 + $bsf13 + $bsf13;	
		$total13 = $sum13 * $totaldate * $totalbian13;
 		$wholetotal13 = $total + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + $total8 + $total9 + $total10 + $total11 + $total12 + $total13;

		$query = "INSERT INTO userbet (user,betNo,big,small,firstprize,secondprize,thirdprize,specialprize,excellence,three,two,magnum,damacai,toto,sunday,wednesday,saturday,tuesday,totaldate,totalbian,sum,total,wholetotal,todaydate,phonehead,phonetail,row) VALUES('$user','$bbetNo13','$bbig13','$bsml13','$bsa13','$bsb13','$bsc13','$bsd13','$bse13','$ba013','$bsf13','$chkmag13','$chkdmc13','$chktot13','$sun','$wed','$sat','$tue','$totaldate','$totalbian13','$sum13','$total13','$wholetotal13',now(),'$phonenofront','$phonenoback','13')";
	
		if (mysqli_query($conn,$query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
						</div>";
			}
		}

		if(!($bbetNo14==""))
		{	
			if($chkmag14 == "")
			{
				$chkmag14 ="0";
			}	

			if($chkdmc14 == "")
			{
				$chkdmc14 ="0";
			}

			if($chktot14 == "")
			{
				$chktot14 ="0";
			}

			$intchkmag14 = (int)$chkmag14;
			$intchkdmc14 = (int)$chkdmc14;
			$intchktot14 = (int)$chktot14;
	 	
	 		$totalbian14 = $intchkmag14 + $intchkdmc14 + $intchktot14;

		if($bbig14 == "")
		{
			$bbig14 = 0;
		}	

		if($bsml14 == "")
		{
			$bsml14 = 0;
		}

		if($bsa14 == "")
		{
			$bsa14 = 0;
		}

		if($bsb14 == "")
		{
			$bsb14 = 0;
		}

		if($bsc14 == "")
		{
			$bsc14 = 0;
		}			
			
		if($bsd14 == "")
		{
			$bsd14 = 0;
		}			
		
		if($bse14 == "")
		{
			$bse14 = 0;
		}	

		if($ba014 == "")
		{
			$ba014 = 0;
		}

		if($bsf14 == "")
		{
			$bsf14 = 0;
		}

		$sum14 = $bbig14 + $bsml14 + $bsa14 + $bsb14 + $bsc14 + $bsd14 + $bse14 + $ba014 + $bsf14 + $bsf14;	
		$total14 = $sum14 * $totaldate * $totalbian14;
 		$wholetotal14 = $total + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + $total8 + $total9 + $total10 + $total11 + $total12 + $total13 + $total14;

		$query = "INSERT INTO userbet (user,betNo,big,small,firstprize,secondprize,thirdprize,specialprize,excellence,three,two,magnum,damacai,toto,sunday,wednesday,saturday,tuesday,totaldate,totalbian,sum,total,wholetotal,todaydate,phonehead,phonetail,row) VALUES('$user','$bbetNo14','$bbig14','$bsml14','$bsa14','$bsb14','$bsc14','$bsd14','$bse14','$ba014','$bsf14','$chkmag14','$chkdmc14','$chktot14','$sun','$wed','$sat','$tue','$totaldate','$totalbian14','$sum14','$total14','$wholetotal14',now(),'$phonenofront','$phonenoback','14')";
	
		if (mysqli_query($conn,$query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
						</div>";
			}
		}

		if(!($bbetNo15==""))
		{	
			if($chkmag15 == "")
			{
				$chkmag15 ="0";
			}	

			if($chkdmc15 == "")
			{
				$chkdmc15 ="0";
			}

			if($chktot15 == "")
			{
				$chktot15 ="0";
			}

			$intchkmag15 = (int)$chkmag15;
			$intchkdmc15 = (int)$chkdmc15;
			$intchktot15 = (int)$chktot15;
	 	
	 		$totalbian15 = $intchkmag15 + $intchkdmc15 + $intchktot15;

		if($bbig15 == "")
		{
			$bbig15 = 0;
		}	

		if($bsml15 == "")
		{
			$bsml15 = 0;
		}

		if($bsa15 == "")
		{
			$bsa15 = 0;
		}

		if($bsb15 == "")
		{
			$bsb15 = 0;
		}

		if($bsc15 == "")
		{
			$bsc15 = 0;
		}			
			
		if($bsd15 == "")
		{
			$bsd15 = 0;
		}			
		
		if($bse15 == "")
		{
			$bse15 = 0;
		}	

		if($ba015 == "")
		{
			$ba015 = 0;
		}

		if($bsf15 == "")
		{
			$bsf15 = 0;
		}

		$sum15 = $bbig15 + $bsml15 + $bsa15 + $bsb15 + $bsc15 + $bsd15 + $bse15 + $ba015 + $bsf15 + $bsf15;	
		$total15 = $sum15 * $totaldate * $totalbian15;
 		$wholetotal15 = $total + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + $total8 + $total9 + $total10 + $total11 + $total12 + $total13 + $total14 + $total15;

		$query = "INSERT INTO userbet (user,betNo,big,small,firstprize,secondprize,thirdprize,specialprize,excellence,three,two,magnum,damacai,toto,sunday,wednesday,saturday,tuesday,totaldate,totalbian,sum,total,wholetotal,todaydate,phonehead,phonetail,row) VALUES('$user','$bbetNo15','$bbig15','$bsml15','$bsa15','$bsb15','$bsc15','$bsd15','$bse15','$ba015','$bsf15','$chkmag15','$chkdmc15','$chktot15','$sun','$wed','$sat','$tue','$totaldate','$totalbian15','$sum15','$total15','$wholetotal15',now(),'$phonenofront','$phonenoback','15')";
	
		if (mysqli_query($conn,$query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
						</div>";
			}
		}*/

	
		
		/*	$bbetNo2 = strip_tags($_POST['betNo2']);
			$bbetNo3 = strip_tags($_POST['betNo3']);
			$bbetNo4 = strip_tags($_POST['betNo4']);
			$bbetNo5 = strip_tags($_POST['betNo5']);
			$bbetNo6 = strip_tags($_POST['betNo6']);
			$bbetNo7 = strip_tags($_POST['betNo7']);
			$bbetNo8 = strip_tags($_POST['betNo8']);
			$bbetNo9 = strip_tags($_POST['betNo9']);
			$bbetNo10 = strip_tags($_POST['betNo10']);
			$bbetNo11 = strip_tags($_POST['betNo11']);
			$bbetNo12 = strip_tags($_POST['betNo12']);
			$bbetNo13 = strip_tags($_POST['betNo13']);
			$bbetNo14 = strip_tags($_POST['betNo14']);
			$bbetNo15 = strip_tags($_POST['betNo15']);
			
			$bbetNo1=$conn->real_escape_string($bbetNo1);
			$bbetNo2=$conn->real_escape_string($bbetNo2);
			$bbetNo3=$conn->real_escape_string($bbetNo3);
			$bbetNo4=$conn->real_escape_string($bbetNo4);
			$bbetNo5=$conn->real_escape_string($bbetNo5);
			$bbetNo6=$conn->real_escape_string($bbetNo6);
			$bbetNo7=$conn->real_escape_string($bbetNo7);
			$bbetNo8=$conn->real_escape_string($bbetNo8);
			$bbetNo9=$conn->real_escape_string($bbetNo9);
			$bbetNo10=$conn->real_escape_string($bbetNo10);
			$bbetNo11=$conn->real_escape_string($bbetNo11);
			$bbetNo12=$conn->real_escape_string($bbetNo12);
			$bbetNo13=$conn->real_escape_string($bbetNo13);
			$bbetNo14=$conn->real_escape_string($bbetNo14);
			$bbetNo15=$conn->real_escape_string($bbetNo15);

			$bbig1 = strip_tags($_POST['big1']);
			$bbig2 = strip_tags($_POST['big2']);
			$bbig3 = strip_tags($_POST['big3']);
			$bbig4 = strip_tags($_POST['big4']);
			$bbig5 = strip_tags($_POST['big5']);
			$bbig6 = strip_tags($_POST['big6']);
			$bbig7 = strip_tags($_POST['big7']);
			$bbig8 = strip_tags($_POST['big8']);
			$bbig9 = strip_tags($_POST['big9']);
			$bbig10 = strip_tags($_POST['big10']);
			$bbig11 = strip_tags($_POST['big11']);
			$bbig12 = strip_tags($_POST['big12']);
			$bbig13 = strip_tags($_POST['big13']);
			$bbig14 = strip_tags($_POST['big14']);
			$bbig15 = strip_tags($_POST['big15']);
			
			$bsml1 = strip_tags($_POST['sml1']);
			$bsml2 = strip_tags($_POST['sml2']);
			$bsml3 = strip_tags($_POST['sml3']);
			$bsml4 = strip_tags($_POST['sml4']);
			$bsml5 = strip_tags($_POST['sml5']);
			$bsml6 = strip_tags($_POST['sml6']);
			$bsml7 = strip_tags($_POST['sml7']);
			$bsml8 = strip_tags($_POST['sml8']);
			$bsml9 = strip_tags($_POST['sml9']);
			$bsml10 = strip_tags($_POST['sml10']);
			$bsml11 = strip_tags($_POST['sml11']);
			$bsml12 = strip_tags($_POST['sml12']);
			$bsml13 = strip_tags($_POST['sml13']);
			$bsml14 = strip_tags($_POST['sml14']);
			$bsml15 = strip_tags($_POST['sml15']);
			
			$bsa1 = strip_tags($_POST['sa1']);
			$bsa2 = strip_tags($_POST['sa2']);
			$bsa3 = strip_tags($_POST['sa3']);
			$bsa4 = strip_tags($_POST['sa4']);
			$bsa5 = strip_tags($_POST['sa5']);
			$bsa6 = strip_tags($_POST['sa6']);
			$bsa7 = strip_tags($_POST['sa7']);
			$bsa8 = strip_tags($_POST['sa8']);
			$bsa9 = strip_tags($_POST['sa9']);
			$bsa10 = strip_tags($_POST['sa10']);
			$bsa11 = strip_tags($_POST['sa11']);
			$bsa12 = strip_tags($_POST['sa12']);
			$bsa13 = strip_tags($_POST['sa13']);
			$bsa14 = strip_tags($_POST['sa14']);
			$bsa15 = strip_tags($_POST['sa15']);
			
			$bsb1 = strip_tags($_POST['sb1']);
			$bsb2 = strip_tags($_POST['sb2']);
			$bsb3 = strip_tags($_POST['sb3']);
			$bsb4 = strip_tags($_POST['sb4']);
			$bsb5 = strip_tags($_POST['sb5']);
			$bsb6 = strip_tags($_POST['sb6']);
			$bsb7 = strip_tags($_POST['sb7']);
			$bsb8 = strip_tags($_POST['sb8']);
			$bsb9 = strip_tags($_POST['sb9']);
			$bsb10 = strip_tags($_POST['sb10']);
			$bsb11 = strip_tags($_POST['sb11']);
			$bsb12 = strip_tags($_POST['sb12']);
			$bsb13 = strip_tags($_POST['sb13']);
			$bsb14 = strip_tags($_POST['sb14']);
			$bsb15 = strip_tags($_POST['sb15']);
			
			$bsc1 = strip_tags($_POST['sc1']);
			$bsc2 = strip_tags($_POST['sc2']);
			$bsc3 = strip_tags($_POST['sc3']);
			$bsc4 = strip_tags($_POST['sc4']);
			$bsc5 = strip_tags($_POST['sc5']);
			$bsc6 = strip_tags($_POST['sc6']);
			$bsc7 = strip_tags($_POST['sc7']);
			$bsc8 = strip_tags($_POST['sc8']);
			$bsc9 = strip_tags($_POST['sc9']);
			$bsc10 = strip_tags($_POST['sc10']);
			$bsc11 = strip_tags($_POST['sc11']);
			$bsc12 = strip_tags($_POST['sc12']);
			$bsc13 = strip_tags($_POST['sc13']);
			$bsc14 = strip_tags($_POST['sc14']);
			$bsc15 = strip_tags($_POST['sc15']);
			
			$bsd1 = strip_tags($_POST['sd1']);
			$bsd2 = strip_tags($_POST['sd2']);
			$bsd3 = strip_tags($_POST['sd3']);
			$bsd4 = strip_tags($_POST['sd4']);
			$bsd5 = strip_tags($_POST['sd5']);
			$bsd6 = strip_tags($_POST['sd6']);
			$bsd7 = strip_tags($_POST['sd7']);
			$bsd8 = strip_tags($_POST['sd8']);
			$bsd9 = strip_tags($_POST['sd9']);
			$bsd10 = strip_tags($_POST['sd10']);
			$bsd11 = strip_tags($_POST['sd11']);
			$bsd12 = strip_tags($_POST['sd12']);
			$bsd13 = strip_tags($_POST['sd13']);
			$bsd14 = strip_tags($_POST['sd14']);
			$bsd15 = strip_tags($_POST['sd15']);
			
			$bse1 = strip_tags($_POST['se1']);
			$bse2 = strip_tags($_POST['se2']);
			$bse3 = strip_tags($_POST['se3']);
			$bse4 = strip_tags($_POST['se4']);
			$bse5 = strip_tags($_POST['se5']);
			$bse6 = strip_tags($_POST['se6']);
			$bse7 = strip_tags($_POST['se7']);
			$bse8 = strip_tags($_POST['se8']);
			$bse9 = strip_tags($_POST['se9']);
			$bse10 = strip_tags($_POST['se10']);
			$bse11 = strip_tags($_POST['se11']);
			$bse12 = strip_tags($_POST['se12']);
			$bse13 = strip_tags($_POST['se13']);
			$bse14 = strip_tags($_POST['se14']);
			$bse15 = strip_tags($_POST['se15']);
			
			$ba01 = strip_tags($_POST['a01']);
			$ba02 = strip_tags($_POST['a02']);
			$ba03 = strip_tags($_POST['a03']);
			$ba04 = strip_tags($_POST['a04']);
			$ba05 = strip_tags($_POST['a05']);
			$ba06 = strip_tags($_POST['a06']);
			$ba07 = strip_tags($_POST['a07']);
			$ba08 = strip_tags($_POST['a08']);
			$ba09 = strip_tags($_POST['a09']);
			$ba010 = strip_tags($_POST['a010']);
			$ba011 = strip_tags($_POST['a011']);
			$ba012 = strip_tags($_POST['a012']);
			$ba013 = strip_tags($_POST['a013']);
			$ba014 = strip_tags($_POST['a014']);
			$ba015 = strip_tags($_POST['a015']);
			
			$bsf1 = strip_tags($_POST['sf1']);
			$bsf2 = strip_tags($_POST['sf2']);
			$bsf3 = strip_tags($_POST['sf3']);
			$bsf4 = strip_tags($_POST['sf4']);
			$bsf5 = strip_tags($_POST['sf5']);
			$bsf6 = strip_tags($_POST['sf6']);
			$bsf7 = strip_tags($_POST['sf7']);
			$bsf8 = strip_tags($_POST['sf8']);
			$bsf9 = strip_tags($_POST['sf9']);
			$bsf10 = strip_tags($_POST['sf10']);
			$bsf11 = strip_tags($_POST['sf11']);
			$bsf12 = strip_tags($_POST['sf12']);
			$bsf13 = strip_tags($_POST['sf13']);
			$bsf14 = strip_tags($_POST['sf14']);
			$bsf15 = strip_tags($_POST['sf15']);
			
	 $chkmag1 = strip_tags($_POST["mag1"]);
	 $chkdmc1 = strip_tags($_POST["dmc1"]);
	 $chktot1 = strip_tags($_POST["tot1"]);
			
	 $chkmag2 = strip_tags($_POST["mag2"]);
	 $chkdmc2 = strip_tags($_POST["dmc2"]);
	 $chktot2 = strip_tags($_POST["tot2"]);
			
	 $chkmag3 = strip_tags($_POST["mag3"]);
	 $chkdmc3 = strip_tags($_POST["dmc3"]);
	 $chktot3 = strip_tags($_POST["tot3"]);
			
	 $chkmag4 = strip_tags($_POST["mag4"]);
	 $chkdmc4 = strip_tags($_POST["dmc4"]);
	 $chktot4 = strip_tags($_POST["tot4"]);
	 		
	 $chkmag5 = strip_tags($_POST["mag5"]);
	 $chkdmc5 = strip_tags($_POST["dmc5"]);
	 $chktot5 = strip_tags($_POST["tot5"]);
			
	 $chkmag6 = strip_tags($_POST["mag6"]);
	 $chkdmc6 = strip_tags($_POST["dmc6"]);
	 $chktot6 = strip_tags($_POST["tot6"]);
	 		
	 $chkmag7 = strip_tags($_POST["mag7"]);
	 $chkdmc7 = strip_tags($_POST["dmc7"]);
	 $chktot7 = strip_tags($_POST["tot7"]);
	 		
	 $chkmag8 = strip_tags($_POST["mag8"]);
	 $chkdmc8 = strip_tags($_POST["dmc8"]);
	 $chktot8 = strip_tags($_POST["tot8"]);
			
	 $chkmag9 = strip_tags($_POST["mag9"]);
	 $chkdmc9 = strip_tags($_POST["dmc9"]);
	 $chktot9 = strip_tags($_POST["tot9"]);
			
	 $chkmag10 = strip_tags($_POST["mag10"]);
	 $chkdmc10 = strip_tags($_POST["dmc10"]);
	 $chktot10 = strip_tags($_POST["tot10"]);
			
	 $chkmag11 = strip_tags($_POST["mag11"]);
	 $chkdmc11 = strip_tags($_POST["dmc11"]);
	 $chktot11 = strip_tags($_POST["tot11"]);
			
	 $chkmag12 = strip_tags($_POST["mag12"]);
	 $chkdmc12 = strip_tags($_POST["dmc12"]);
	 $chktot12 = strip_tags($_POST["tot12"]);

	 $chkmag13 = strip_tags($_POST["mag13"]);
	 $chkdmc13 = strip_tags($_POST["dmc13"]);
	 $chktot13 = strip_tags($_POST["tot13"]);

	 $chkmag14 = strip_tags($_POST["mag14"]);
	 $chkdmc14 = strip_tags($_POST["dmc14"]);
	 $chktot14 = strip_tags($_POST["tot14"]);

	 $chkmag15 = strip_tags($_POST["mag15"]);
	 $chkdmc15 = strip_tags($_POST["dmc15"]);
	 $chktot15 = strip_tags($_POST["tot15"]);
	 	
	 $phonenofront=strip_tags($_POST["phoneno"]);
	 $phonenoback=strip_tags($_POST["phNostrip_tags"]);

	 		$checkedsun=$conn->real_escape_string($sun);
			$checkedwed=$conn->real_escape_string($wed);
			$checkedsat=$conn->real_escape_string($sat);
			$checkedtue=$conn->real_escape_string($tue);

			$bbetNo1=$conn->real_escape_string($bbetNo1);
			$bbetNo2=$conn->real_escape_string($bbetNo2);
			$bbetNo3=$conn->real_escape_string($bbetNo3);
			$bbetNo4=$conn->real_escape_string($bbetNo4);
			$bbetNo5=$conn->real_escape_string($bbetNo5);
			$bbetNo6=$conn->real_escape_string($bbetNo6);
			$bbetNo7=$conn->real_escape_string($bbetNo7);
			$bbetNo8=$conn->real_escape_string($bbetNo8);
			$bbetNo9=$conn->real_escape_string($bbetNo9);
			$bbetNo10=$conn->real_escape_string($bbetNo10);
			$bbetNo11=$conn->real_escape_string($bbetNo11);
			$bbetNo12=$conn->real_escape_string($bbetNo12);
			$bbetNo13=$conn->real_escape_string($bbetNo13);
			$bbetNo14=$conn->real_escape_string($bbetNo14);
			$bbetNo15=$conn->real_escape_string($bbetNo15);

			$bbig1=$conn->real_escape_string($bbig1);
			$bbig2=$conn->real_escape_string($bbig2);
			$bbig3=$conn->real_escape_string($bbig3);
			$bbig4=$conn->real_escape_string($bbig4);
			$bbig5=$conn->real_escape_string($bbig5);
			$bbig6=$conn->real_escape_string($bbig6);
			$bbig7=$conn->real_escape_string($bbig7);
			$bbig8=$conn->real_escape_string($bbig8);
			$bbig9=$conn->real_escape_string($bbig9);
			$bbig10=$conn->real_escape_string($bbig10);
			$bbig11=$conn->real_escape_string($bbig11);
			$bbig12=$conn->real_escape_string($bbig12);
			$bbig13=$conn->real_escape_string($bbig13);
			$bbig14=$conn->real_escape_string($bbig14);
			$bbig15=$conn->real_escape_string($bbig15);

			$bsml1=$conn->real_escape_string($bsml1);
			$bsml2=$conn->real_escape_string($bsml2);
			$bsml3=$conn->real_escape_string($bsml3);
			$bsml4=$conn->real_escape_string($bsml4);
			$bsml5=$conn->real_escape_string($bsml5);
			$bsml6=$conn->real_escape_string($bsml6);
			$bsml7=$conn->real_escape_string($bsml7);
			$bsml8=$conn->real_escape_string($bsml8);
			$bsml9=$conn->real_escape_string($bsml9);
			$bsml10=$conn->real_escape_string($bsml10);
			$bsml11=$conn->real_escape_string($bsml11);
			$bsml12=$conn->real_escape_string($bsml12);
			$bsml13=$conn->real_escape_string($bsml13);
			$bsml14=$conn->real_escape_string($bsml14);
			$bsml15=$conn->real_escape_string($bsml15);

			$bsa1=$conn->real_escape_string($bsa1);
			$bsa2=$conn->real_escape_string($bsa2);
			$bsa3=$conn->real_escape_string($bsa3);
			$bsa4=$conn->real_escape_string($bsa4);
			$bsa5=$conn->real_escape_string($bsa5);
			$bsa6=$conn->real_escape_string($bsa6);
			$bsa7=$conn->real_escape_string($bsa7);
			$bsa8=$conn->real_escape_string($bsa8);
			$bsa9=$conn->real_escape_string($bsa9);
			$bsa10=$conn->real_escape_string($bsa10);
			$bsa11=$conn->real_escape_string($bsa11);
			$bsa12=$conn->real_escape_string($bsa12);
			$bsa13=$conn->real_escape_string($bsa13);
			$bsa14=$conn->real_escape_string($bsa14);
			$bsa15=$conn->real_escape_string($bsa15);

			$bsb1=$conn->real_escape_string($bsb1);
			$bsb2=$conn->real_escape_string($bsb2);
			$bsb3=$conn->real_escape_string($bsb3);
			$bsb4=$conn->real_escape_string($bsb4);
			$bsb5=$conn->real_escape_string($bsb5);
			$bsb6=$conn->real_escape_string($bsb6);
			$bsb7=$conn->real_escape_string($bsb7);
			$bsb8=$conn->real_escape_string($bsb8);
			$bsb9=$conn->real_escape_string($bsb9);
			$bsb10=$conn->real_escape_string($bsb10);
			$bsb11=$conn->real_escape_string($bsb11);
			$bsb12=$conn->real_escape_string($bsb12);
			$bsb13=$conn->real_escape_string($bsb13);
			$bsb14=$conn->real_escape_string($bsb14);
			$bsb15=$conn->real_escape_string($bsb15);

			$bsc1=$conn->real_escape_string($bsc1);
			$bsc2=$conn->real_escape_string($bsc2);
			$bsc3=$conn->real_escape_string($bsc3);
			$bsc4=$conn->real_escape_string($bsc4);
			$bsc5=$conn->real_escape_string($bsc5);
			$bsc6=$conn->real_escape_string($bsc6);
			$bsc7=$conn->real_escape_string($bsc7);
			$bsc8=$conn->real_escape_string($bsc8);
			$bsc9=$conn->real_escape_string($bsc9);
			$bsc10=$conn->real_escape_string($bsc10);
			$bsc11=$conn->real_escape_string($bsc11);
			$bsc12=$conn->real_escape_string($bsc12);
			$bsc13=$conn->real_escape_string($bsc13);
			$bsc14=$conn->real_escape_string($bsc14);
			$bsc15=$conn->real_escape_string($bsc15);

			$bsd1=$conn->real_escape_string($bsd1);
			$bsd2=$conn->real_escape_string($bsd2);
			$bsd3=$conn->real_escape_string($bsd3);
			$bsd4=$conn->real_escape_string($bsd4);
			$bsd5=$conn->real_escape_string($bsd5);
			$bsd6=$conn->real_escape_string($bsd6);
			$bsd7=$conn->real_escape_string($bsd7);
			$bsb8=$conn->real_escape_string($bsd8);
			$bsd9=$conn->real_escape_string($bsd9);
			$bsd10=$conn->real_escape_string($bsd10);
			$bsd11=$conn->real_escape_string($bsd11);
			$bsd12=$conn->real_escape_string($bsd12);
			$bsd13=$conn->real_escape_string($bsd13);
			$bsd14=$conn->real_escape_string($bsd14);
			$bsd15=$conn->real_escape_string($bsd15);

			$bse1=$conn->real_escape_string($bse1);
			$bse2=$conn->real_escape_string($bse2);
			$bse3=$conn->real_escape_string($bse3);
			$bse4=$conn->real_escape_string($bse4);
			$bse5=$conn->real_escape_string($bse5);
			$bse6=$conn->real_escape_string($bse6);
			$bse7=$conn->real_escape_string($bse7);
			$bse8=$conn->real_escape_string($bse8);
			$bse9=$conn->real_escape_string($bse9);
			$bse10=$conn->real_escape_string($bse10);
			$bse11=$conn->real_escape_string($bse11);
			$bse12=$conn->real_escape_string($bse12);
			$bse13=$conn->real_escape_string($bse13);
			$bse14=$conn->real_escape_string($bse14);
			$bse15=$conn->real_escape_string($bse15);

			$ba01=$conn->real_escape_string($ba01);
			$ba02=$conn->real_escape_string($ba02);
			$ba03=$conn->real_escape_string($ba03);
			$ba04=$conn->real_escape_string($ba04);
			$ba05=$conn->real_escape_string($ba05);
			$ba06=$conn->real_escape_string($ba06);
			$ba07=$conn->real_escape_string($ba07);
			$ba08=$conn->real_escape_string($ba08);
			$ba09=$conn->real_escape_string($ba09);
			$ba10=$conn->real_escape_string($ba10);
			$ba11=$conn->real_escape_string($ba11);
			$ba12=$conn->real_escape_string($ba12);
			$ba13=$conn->real_escape_string($ba13);
			$ba14=$conn->real_escape_string($ba14);
			$ba15=$conn->real_escape_string($ba15);

			$bsf1=$conn->real_escape_string($bsf1);
			$bsf2=$conn->real_escape_string($bsf2);
			$bsf3=$conn->real_escape_string($bsf3);
			$bsf4=$conn->real_escape_string($bsf4);
			$bsf5=$conn->real_escape_string($bsf5);
			$bsf6=$conn->real_escape_string($bsf6);
			$bsf7=$conn->real_escape_string($bsf7);
			$bsf8=$conn->real_escape_string($bsf8);
			$bsf9=$conn->real_escape_string($bsf9);
			$bsf10=$conn->real_escape_string($bsf10);
			$bsf11=$conn->real_escape_string($bsf11);
			$bsf12=$conn->real_escape_string($bsf12);
			$bsf13=$conn->real_escape_string($bsf13);
			$bsf14=$conn->real_escape_string($bsf14);
			$bsf15=$conn->real_escape_string($bsf15);

			$chkmag1=$conn->real_escape_string($chkmag1);
			$chkdmc1=$conn->real_escape_string($chkdmc1);
			$chktot1=$conn->real_escape_string($chktot1);

			$chkmag2=$conn->real_escape_string($chkmag2);
			$chkdmc2=$conn->real_escape_string($chkdmc2);
			$chktot2=$conn->real_escape_string($chktot2);

			$chkmag3=$conn->real_escape_string($chkmag3);
			$chkdmc3=$conn->real_escape_string($chkdmc3);
			$chktot3=$conn->real_escape_string($chktot3);

			$chkmag4=$conn->real_escape_string($chkmag4);
			$chkdmc4=$conn->real_escape_string($chkdmc4);
			$chktot4=$conn->real_escape_string($chktot4);

			$chkmag5=$conn->real_escape_string($chkmag5);
			$chkdmc5=$conn->real_escape_string($chkdmc5);
			$chktot5=$conn->real_escape_string($chktot5);

			$chkmag6=$conn->real_escape_string($chkmag6);
			$chkdmc6=$conn->real_escape_string($chkdmc6);
			$chktot6=$conn->real_escape_string($chktot6);

			$chkmag7=$conn->real_escape_string($chkmag7);
			$chkdmc7=$conn->real_escape_string($chkdmc7);
			$chktot7=$conn->real_escape_string($chktot7);

			$chkmag8=$conn->real_escape_string($chkmag8);
			$chkdmc8=$conn->real_escape_string($chkdmc8);
			$chktot8=$conn->real_escape_string($chktot8);

			$chkmag9=$conn->real_escape_string($chkmag9);
			$chkdmc9=$conn->real_escape_string($chkdmc9);
			$chktot9=$conn->real_escape_string($chktot9);

			$chkmag10=$conn->real_escape_string($chkmag10);
			$chkdmc10=$conn->real_escape_string($chkdmc10);
			$chktot10=$conn->real_escape_string($chktot10);

			$chkmag11=$conn->real_escape_string($chkmag11);
			$chkdmc11=$conn->real_escape_string($chkdmc11);
			$chktot11=$conn->real_escape_string($chktot11);

			$chkmag12=$conn->real_escape_string($chkmag12);
			$chkdmc12=$conn->real_escape_string($chkdmc12);
			$chktot12=$conn->real_escape_string($chktot12);

			$chkmag13=$conn->real_escape_string($chkmag13);
			$chkdmc13=$conn->real_escape_string($chkdmc13);
			$chktot13=$conn->real_escape_string($chktot13);

			$chkmag14=$conn->real_escape_string($chkmag14);
			$chkdmc14=$conn->real_escape_string($chkdmc14);
			$chktot14=$conn->real_escape_string($chktot14);

			$chkmag15=$conn->real_escape_string($chkmag15);
			$chkdmc15=$conn->real_escape_string($chkdmc15);
			$chktot15=$conn->real_escape_string($chktot15);

			$phonenofront=$conn->real_escape_string($phonenofront);
	 		$phonenoback=$conn->real_escape_string($phonenoback);

			$query = "INSERT INTO userbet (betNo,big,small,firstprize,secondprize,thirdprize,specialprize,thirdprize,specialprize,excellence,three,two,magnum,damacai,toto,sunday,wednesday,saturday,tuesday,totaldate,row) VALUES('$bbetNo1','$bbig1','$bsml1','$bsa1','$bsb1','$bsc1','$bsd1','$bse1','$ba01','$bsf1','$chkmag1','$chkdmc1','$chktot1','4','1')";
			
			if (mysqli_query($conn,$query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
						</div>";
					}
				}
			mysqli_close($conn);*/
			?>
		
	