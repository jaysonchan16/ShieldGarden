<?php
$betnumup = current($_POST['betnumup']);
$betlimup = current($_POST['betlimup']);
$betlimup = $betlimup + 1;

$link = mysqli_connect("localhost", "root", "", "wordpresstest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if(!empty($betnumup) && !empty($betlimup)){
    $sql = "UPDATE betnolimit SET betLimit = '$betlimup' WHERE betNo = '$betnumup'";
    mysqli_query($link, $sql);
    echo '<script>alert("Saved."); location.replace(document.referrer);</script>';
} else {
    echo '<script>alert("Please try again."); location.replace(document.referrer);</script>';
}

?>