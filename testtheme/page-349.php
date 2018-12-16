<?php

require "page-343.php";

$username = $_POST["username"];
$password = md5(md5($_POST["password"]));

$statement = mysqli_prepare($conn, "SELECT * FROM users WHERE BINARY username = ? AND BINARY password = ?");
mysqli_stmt_bind_param($statement, "ss", $username, $password);
mysqli_stmt_execute($statement);
mysqli_stmt_store_result($statement);
mysqli_stmt_bind_result($statement, $id, $username,$password,$now,$last,$nameDt,$phDt,$bkacDt,$bknmDt,$bthDt,$dealerDt);

$response = array();
$response["success"] = false;  

while(mysqli_stmt_fetch($statement)){
	$response["success"] = true;  
    $response["username"] = $username;
    $response["password"] = $password;
}
    
echo json_encode($response);
    
?>