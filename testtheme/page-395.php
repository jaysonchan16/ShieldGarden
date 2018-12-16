<?php
$link = mysqli_connect("localhost", "root", "", "wordpresstest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

date_default_timezone_set("Asia/Kuala_Lumpur");

$now    = time(); // current timestamp
$today  = date("w", $now); // "w" returns the weekday (number)
$wednesday = 3; // 5th day of the week (sunday = 0)
$saturday = 6;
$sunday = 0;

$oneWeekLater = strtotime('+1 Week');

$zero = 0;

if ($today == $wednesday && date("H:i:s") >= "18:56:40" && date("H:i:s") <= "18:57:50") {
    mysqli_query($link, 'TRUNCATE TABLE betnolimit');

    $query = "UPDATE masterlimit SET betLimit = '$zero'";
    mysqli_query($link, $query);
}

if ($today == $saturday && date("H:i:s") >= "18:56:40" && date("H:i:s") <= "18:57:50") {
    mysqli_query($link, 'TRUNCATE TABLE betnolimit');

    $query = "UPDATE masterlimit SET betLimit = '$zero'";
    mysqli_query($link, $query);
}

if ($today == $sunday && (date("H:i:s") >= "18:56:40" && date("H:i:s") <= "18:57:50")) {
    mysqli_query($link, 'TRUNCATE TABLE betnolimit');

    $query = "UPDATE masterlimit SET betLimit = '$zero'";
    mysqli_query($link, $query);
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

if ($curday == $sp1 && ($curtime > $spdate1 && $curtime < $date1)) {
	mysqli_query($link, 'TRUNCATE TABLE betnolimit');

    $query = "UPDATE masterlimit SET betLimit = '$zero'";
    mysqli_query($link, $query);

} elseif ($curday == $sp2 && ($curtime > $spdate2 && $curtime < $date2)) {
	mysqli_query($link, 'TRUNCATE TABLE betnolimit');

    $query = "UPDATE masterlimit SET betLimit = '$zero'";
    mysqli_query($link, $query);

} elseif ($curday == $sp3 && ($curtime > $spdate3 && $curtime < $date3)) {
	mysqli_query($link, 'TRUNCATE TABLE betnolimit');

    $query = "UPDATE masterlimit SET betLimit = '$zero'";
    mysqli_query($link, $query);

} elseif ($curday == $sp4 && ($curtime > $spdate4 && $curtime < $date4)) {
	mysqli_query($link, 'TRUNCATE TABLE betnolimit');

    $query = "UPDATE masterlimit SET betLimit = '$zero'";
    mysqli_query($link, $query);

} elseif ($curday == $sp5 && ($curtime > $spdate5 && $curtime < $date5)) {
	mysqli_query($link, 'TRUNCATE TABLE betnolimit');

    $query = "UPDATE masterlimit SET betLimit = '$zero'";
    mysqli_query($link, $query);

} elseif ($curday == $sp6 && ($curtime > $spdate6 && $curtime < $date6)) {
	mysqli_query($link, 'TRUNCATE TABLE betnolimit');

    $query = "UPDATE masterlimit SET betLimit = '$zero'";
    mysqli_query($link, $query);

} elseif ($curday == $sp7 && ($curtime > $spdate7 && $curtime < $date7)) {
	mysqli_query($link, 'TRUNCATE TABLE betnolimit');

    $query = "UPDATE masterlimit SET betLimit = '$zero'";
    mysqli_query($link, $query);

} elseif ($curday == $sp8 && ($curtime > $spdate8 && $curtime < $date8)) {
	mysqli_query($link, 'TRUNCATE TABLE betnolimit');

    $query = "UPDATE masterlimit SET betLimit = '$zero'";
    mysqli_query($link, $query);

} elseif ($curday == $sp9 && ($curtime > $spdate9 && $curtime < $date9)) {
	mysqli_query($link, 'TRUNCATE TABLE betnolimit');

    $query = "UPDATE masterlimit SET betLimit = '$zero'";
    mysqli_query($link, $query);

} elseif ($curday == $sp10 && ($curtime > $spdate10 && $curtime < $date10)) {
	mysqli_query($link, 'TRUNCATE TABLE betnolimit');

    $query = "UPDATE masterlimit SET betLimit = '$zero'";
    mysqli_query($link, $query);

} elseif ($curday == $sp11 && ($curtime > $spdate11 && $curtime < $date11)) {
	mysqli_query($link, 'TRUNCATE TABLE betnolimit');

    $query = "UPDATE masterlimit SET betLimit = '$zero'";
    mysqli_query($link, $query);

} elseif ($curday == $sp12 && ($curtime > $spdate12 && $curtime < $date12)) {
	mysqli_query($link, 'TRUNCATE TABLE betnolimit');

    $query = "UPDATE masterlimit SET betLimit = '$zero'";
    mysqli_query($link, $query);
} else {}
?>