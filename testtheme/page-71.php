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
$statup = current($_POST['statup']);
$sdlr = current($_POST['subdealer']);
$link = mysqli_connect("localhost", "root", "", "wordpresstest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if(!empty($passup)){
    $query = "UPDATE users SET password = '$md5' WHERE username = '$userup' AND subdealerDt = '$sdlr'";
    mysqli_query($link, $query);
}

if(!empty($userup) && !empty($passup) && !empty($name) && !empty($phno) && !empty($bankno) && !empty($bankname) && !empty($statup) ){
	$query = "UPDATE users SET password = '$md5', nameDt = '$name', phDt = '$phno', bkacDt = '$bankno', bknmDt = '$bankname', status = '$statup' WHERE username = '$userup' AND dealerName = '$sdlr'";
	mysqli_query($link, $query);
    echo '<script>alert("已更改."); location.replace(document.referrer);</script>';

}elseif(!empty($userup) && !empty($name) && !empty($phno) && !empty($bankno) && !empty($bankname) && !empty($statup) ){
    $query = "UPDATE users SET nameDt = '$name', phDt = '$phno', bkacDt = '$bankno', bknmDt = '$bankname', status = '$statup' WHERE username = '$userup' AND dealerName = '$sdlr'";
    mysqli_query($link, $query);
    echo '<script>alert("已更改."); location.replace(document.referrer);</script>';

}elseif(!empty($userup) && !empty($name) && !empty($phno)){
    $query = "UPDATE users SET nameDt = '$name', phDt = '$phno', WHERE username = '$userup' AND dealerName = '$sdlr'";
    mysqli_query($link, $query);
    echo '<script>alert("已更改."); location.replace(document.referrer);</script>';

}elseif(empty($userup) || empty($name) || empty($phno)){
    echo '<script>alert("请重试."); location.replace(document.referrer);</script>';

} else{
    echo '<script>alert("请重试."); location.replace(document.referrer);</script>';
}

?>