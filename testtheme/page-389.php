<?php
$betnum = current($_POST['betnum']);
$betlim = current($_POST['betlim']);
$betlim = $betlim + 1;
$betamt = 0;

$link = mysqli_connect("localhost", "root", "", "wordpresstest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if(!empty($betnum) && !empty($betlim)){
    $sql = "INSERT INTO betnolimit(betNo, betLimit, betAmt) VALUES('".$betnum."', '".$betlim."', '".$betamt."')";
    mysqli_query($link, $sql);
    echo '<script>alert("Saved."); location.replace(document.referrer);</script>';
} else {
    echo '<script>alert("Please try again."); location.replace(document.referrer);</script>';
}

?>