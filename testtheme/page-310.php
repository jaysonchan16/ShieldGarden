<?php
$usrnm = current($_POST['userup']);
$big = current($_POST['bigup']);
$sml = current($_POST['smlup']);
$sa = current($_POST['saup']);
$sb = current($_POST['sbup']);
$sc = current($_POST['scup']);
$sd = current($_POST['sdup']);
$se = current($_POST['seup']);
$a0 = current($_POST['a0up']);
$sf = current($_POST['sfup']);

$link = mysqli_connect("localhost", "root", "", "wordpresstest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "UPDATE dealer SET bigDt = '$big', smlDt ='$sml', saDt = '$sa', sbDt = '$sb', scDt = '$sc', sdDt = '$sd', seDt = '$se', a0Dt = '$a0', sfDt = '$sf' WHERE dealerprDt = '$usrnm'";
	mysqli_query($link, $query);
        echo '<script>alert("Updated."); location.replace(document.referrer);</script>';

?>