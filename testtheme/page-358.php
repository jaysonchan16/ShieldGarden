<?php

require "page-343.php";
    
$username = mysqli_real_escape_string($conn,$_POST["username"]);
  
$statement = mysqli_prepare($conn, "SELECT * FROM dealer_income WHERE username = ?");
mysqli_stmt_bind_param($statement, "s", $username);
mysqli_stmt_execute($statement);
    
mysqli_stmt_store_result($statement);
mysqli_stmt_bind_result($statement, $id, $username, $amount, $last_updated);
    
$response = array();
$response["success"] = false;  
    
while(mysqli_stmt_fetch($statement)){
    $response["success"] = true;  
    $response["username"] = $username;
    $response["amount"] = $amount;
}
    
    echo json_encode($response);
?>