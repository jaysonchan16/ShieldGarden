<?php

require "page-343.php";

date_default_timezone_set("Asia/Kuala_Lumpur");

$userDt = $_POST["userDt"];
$DateTime = $_POST["DateTime"];
$betNoDt = $_POST["betNoDt"]; 
$bigDt = $_POST["bigDt"]; 
$smlDt = $_POST["smlDt"]; 
$saDt = $_POST["saDt"]; 
$sbDt = $_POST["sbDt"]; 
$scDt = $_POST["scDt"]; 
$sdDt = $_POST["sdDt"]; 
$seDt = $_POST["seDt"]; 
$a0Dt = $_POST["a0Dt"]; 
$sfDt = $_POST["sfDt"]; 
$magDt = $_POST["magDt"];
$dmcDt = $_POST["dmcDt"];
$totDt = $_POST["totDt"];
$wedDt = $_POST["wedDt"];
$satDt = $_POST["satDt"];
$sunDt = $_POST["sunDt"];
$tueDt = $_POST["tueDt"];
$totalDt = $_POST["totalDt"];

$statusDt = "F";
$current_date = date('Y-m-d H:i:s', time());
$get_date = date('Y-m-d H:i:s', strtotime($DateTime));
$diff = floor(abs(strtotime($current_date) - strtotime($get_date))/(60));

$statement = mysqli_prepare($conn, "UPDATE bettest SET statusDt =? WHERE userDt =? AND DateTime =? AND betNoDt =? AND bigDt =? AND smlDt =? AND saDt =? AND sbDt =? AND scDt =? AND sdDt =? AND seDt =? AND a0Dt =? AND sfDt =? AND magDt =? AND dmcDt =? AND totDt =? AND wedDt =? AND satDt =? AND sunDt =? AND tueDt =? AND totalDt =?");
mysqli_stmt_bind_param($statement, "sssssssssssssssssssss", $statusDt, $userDt, $DateTime, $betNoDt, $bigDt, $smlDt, $saDt, $sbDt, $scDt, $sdDt, $seDt, $a0Dt, $sfDt, $magDt, $dmcDt, $totDt, $wedDt, $satDt, $sunDt, $tueDt, $totalDt);

$response = array();


if($diff < 16){
	mysqli_stmt_execute($statement);
      
	if($statement){
       $response["success"] = true; 
	}
}
else {
	$response["success"] = false; 
}

echo json_encode($response);

?>