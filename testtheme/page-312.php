<?php
$usrnm = current($_POST['user']);
$big = current($_POST['big']);
$sml = current($_POST['sml']);
$sa = current($_POST['sa']);
$sb = current($_POST['sb']);
$sc = current($_POST['sc']);
$sd = current($_POST['sd']);
$se = current($_POST['se']);
$a0 = current($_POST['a0']);
$sf = current($_POST['sf']);

$link = mysqli_connect("localhost", "root", "", "wordpresstest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "INSERT INTO dealer(dealerprDt, bigDt, smlDt, saDt, sbDt, scDt, sdDt, seDt, a0Dt, sfDt) VALUES('".$usrnm."', '".$big."', '".$sml."', '".$sa."', '".$sb."', '".$sc."', '".$sd."', '".$se."', '".$a0."', '".$sf."')";
	mysqli_query($link, $query);
        echo '<script>alert("Saved."); location.replace(document.referrer);</script>';

?>