<?php
$userup = $_POST['userupdate'];
$after = current($_POST['after']);
$link = mysqli_connect("localhost", "root", "", "wordpresstest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if(!empty($after) && !empty($userup)){
    $query = "UPDATE balance SET avLimit = '$after', avBal = '$after' WHERE userID = '$userup'";
    mysqli_query($link, $query);
    echo '<script>alert("Saved."); location.replace(document.referrer);</script>';

} else{
    echo '<script>alert("Try again."); location.replace(document.referrer);</script>';
}
?>