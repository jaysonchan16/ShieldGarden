<?php
$betnlimit = current($_POST['betNLimit']);
$betnlimit = $betnlimit + 1;

$link = mysqli_connect("localhost", "root", "", "wordpresstest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if(!empty($betnlimit)){
    $sql = "UPDATE masterlimit SET betLimit = '$betnlimit'";
    mysqli_query($link, $sql);
    echo '<script>alert("Saved."); location.replace(document.referrer);</script>';
} else {
    echo '<script>alert("Please try again."); location.replace(document.referrer);</script>';
}

?>