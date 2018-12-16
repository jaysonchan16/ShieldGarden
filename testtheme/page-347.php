<?php

require "page-343.php";

$userDt = $_POST["userDt"];
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
$phDt = $_POST["phDt"];
$totalDt = $_POST["totalDt"];

$dealerDt = "dlr";
$subdealerDt = "N";
$playerDt = "N";
$allDt = "N";

$statement = mysqli_prepare($conn, "INSERT INTO bettest(userDt, betNoDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, 
									sfDt, magDt, dmcDt, totDt, wedDt, satDt, sunDt, tueDt, phDt, totalDt, dealerDt, subdealerDt, playerDt,allDt) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
mysqli_stmt_bind_param($statement, "ssssssssssssssssssssssss", $userDt, $betNoDt, $bigDt, $smlDt, $saDt, $sbDt, $scDt, $sdDt, $seDt, $a0Dt,
									$sfDt, $magDt, $dmcDt, $totDt, $wedDt, $satDt, $sunDt, $tueDt, $phDt, $totalDt, $dealerDt, $subdealerDt, $playerDt, $allDt);
mysqli_stmt_execute($statement);


$response = array();
if ($statement){
	$response["success"] = true;  
}

echo json_encode($response);

?>

