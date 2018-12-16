<?php
$userup = $_POST['userupdate'];
$passup = $_POST['passupdate'];
$md5 = md5(md5($passup));
$name = $_POST['rlnameup'];
$ct = current($_POST['ctCodeup']);
$ph = current($_POST['phnumup']);
$phno = $ct.$ph;
$bankno = $_POST['bankaccup'];
$bankname = $_POST['banknameup'];
$stat = current($_POST['statup']);
$link = mysqli_connect("localhost", "root", "", "wordpresstest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if(!empty($passup)){
    $query = "UPDATE users SET password = '$md5' WHERE username = '$userup'";
    mysqli_query($link, $query);
}

if(!empty($userup) && !empty($passup) && !empty($name) && !empty($phno) && !empty($bankno) && !empty($bankname) && !empty($stat)){
	$query = "UPDATE users SET password = '$md5', nameDt = '$name', phDt = '$phno', bkacDt = '$bankno', bknmDt = '$bankname', status = '$stat' WHERE username = '$userup'";
	mysqli_query($link, $query);
    echo '<script>alert("Updated."); location.replace(document.referrer);</script>';

}elseif(!empty($userup) && !empty($name) && !empty($phno) && !empty($bankno) && !empty($bankname) && !empty($stat)){
    $query = "UPDATE users SET nameDt = '$name', phDt = '$phno', bkacDt = '$bankno', bknmDt = '$bankname', status = '$stat' WHERE username = '$userup'";
    mysqli_query($link, $query);
    echo '<script>alert("Updated."); location.replace(document.referrer);</script>';

} else{
    echo '<script>alert("Try again."); location.replace(document.referrer);</script>';
}
?>