<?php
$userup = $_POST['userupdate'];
$avl = current($_POST['avlim']);
$avb = current($_POST['avbal']);
$out = current($_POST['outbal']);
$pay = current($_POST['pay']);
$navb = $avb + $pay;
$nout = $out - $pay;
$link = mysqli_connect("localhost", "root", "", "wordpresstest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if(!empty($pay)){
    $query = "UPDATE balance SET outStdbal = '$nout', avBal = '$navb' WHERE userID = '$userup'";
    mysqli_query($link, $query);
    if($navb >= $avl){
		$query = "UPDATE balance SET avBal = '$avl' WHERE userID = '$userup'";
    		mysqli_query($link, $query);
    }
    echo '<script>alert("Paid."); location.replace(document.referrer);</script>';
} else{
    echo '<script>alert("Try again."); location.replace(document.referrer);</script>';
}
?>