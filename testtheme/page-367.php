<?php

require "page-343.php";

date_default_timezone_set("Asia/Kuala_Lumpur");

$today  = date("w", time());
$currentday = date('Y-m-d H:i:s');
$wednesday = 3;
$saturday = 6;
$sunday = 0;

$oneWeekLater = strtotime('+1 Week');

IF ($today == $wednesday && date("H:i:s") >= "18:57:00" && date("H:i:s") <= "23:59:59") {
  $weddate = date('F j Y', strtotime('wednesday', $oneWeekLater));
} ELSE {
  $weddate = date('F j Y', strtotime('wednesday'));
}

IF ($today == $saturday && date("H:i:s") >= "18:57:00" && date("H:i:s") <= "23:59:59") {
  $satdate = date('F j Y', strtotime('saturday', $oneWeekLater));
} ELSE {
  $satdate = date('F j Y', strtotime('saturday'));
}

IF ($today == $sunday && (date("H:i:s") >= "18:57:00" && date("H:i:s") <= "23:59:59")) {
  $sundate = date('F j Y', strtotime('sunday', $oneWeekLater));
} ELSE {
  $sundate = date('F j Y', strtotime('sunday'));
}

$spldate1 = "2017-07-04 18:57:00";
$spldate2 = "2017-07-25 18:57:00";
$spldate3 = "2017-08-01 18:57:00";
$spldate4 = "2017-08-29 18:57:00";
$spldate5 = "2017-09-05 18:57:00";
$spldate6 = "2017-09-26 18:57:00";
$spldate7 = "2017-10-03 18:57:00";
$spldate8 = "2017-10-31 18:57:00";
$spldate9 = "2017-11-07 18:57:00";
$spldate10 = "2017-11-28 18:57:00";
$spldate11 = "2017-12-05 18:57:00";
$spldate12 = "2017-12-26 18:57:00";

IF ($spldate1 > $currentday) {
	$spldate = "July 4 2017";
} ELSEIF ($spldate1 < $currentday) {
	$spldate = "July 25 2017";
} ELSEIF ($spldate2 < $currentday) {
	$spldate = "August 1 2017";
} ELSEIF ($spldate3 < $currentday) {
	$spldate = "August 29 2017";
} ELSEIF ($spldate4 < $currentday) {
	$spldate = "September 5 2017";
} ELSEIF ($spldate5 < $currentday) {
	$spldate = "September 26 2017";
} ELSEIF ($spldate6 < $currentday) {
	$spldate = "October 3 2017";
} ELSEIF ($spldate7 < $currentday) {
	$spldate = "October 31 2017";
} ELSEIF ($spldate8 < $currentday) {
	$spldate = "November 7 2017";
} ELSEIF ($spldate9 < $currentday) {
	$spldate = "November 28 2017";
} ELSEIF ($spldate10 < $currentday) {
	$spldate = "December 5 2017";
} ELSEIF ($spldate11 < $currentday) {
	$spldate = "December 26 2017";
} ELSEIF ($spldate12 < $currentday) {
	$spldate = "即将到来";
} ELSE {
	$spldate = "即将到来";
}

$response = array();
array_push($response, array("wedDt"=>$weddate, "satDt"=>$satdate, "sunDt"=>$sundate, "splDt"=>$spldate));

echo json_encode($response);
?>