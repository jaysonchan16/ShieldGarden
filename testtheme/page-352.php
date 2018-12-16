<?php

require "page-343.php";

date_default_timezone_set("Asia/Kuala_Lumpur");

$userDt = mysqli_real_escape_string($conn,$_POST["userDt"]);
$current_date = date('Y-m-d', time());

$statement = mysqli_query($conn, "SELECT * FROM bettest WHERE userDt = '$userDt'"); 
$response = array();
	
while($row = mysqli_fetch_array($statement)){
	$DateTime = date('Y-m-d', strtotime($row["DateTime"]));
	$diff = floor(abs(strtotime($current_date) - strtotime($DateTime))/(60*60*24));
	array_push($response,array("userDt"=>$row["userDt"],"betNoDt"=>$row["betNoDt"],"DateTime"=>$row["DateTime"], "bigDt"=>$row["bigDt"],"smlDt"=>$row["smlDt"],"saDt"=>$row["saDt"],"sbDt"=>$row["sbDt"],"scDt"=>$row["scDt"],"sdDt"=>$row["sdDt"],"sdDt"=>$row["sdDt"],"seDt"=>$row["seDt"],"a0Dt"=>$row["a0Dt"],"sfDt"=>$row["sfDt"],"magDt"=>$row["magDt"],"dmcDt"=>$row["dmcDt"],"totDt"=>$row["totDt"],"wedDt"=>$row["wedDt"],"satDt"=>$row["satDt"],"sunDt"=>$row["sunDt"],"tueDt"=>$row["tueDt"],"totalDt"=>$row["totalDt"],"statusDt"=>$row["statusDt"],"diff"=>$diff));
}

echo json_encode($response);

?>