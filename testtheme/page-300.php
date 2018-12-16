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
$birthdate = $_POST['birthdateup'];
$link = mysqli_connect("localhost", "root", "", "wordpresstest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if(!empty($passup)){
    $query = "UPDATE users SET password = '$md5' WHERE aduser = '$userup'";
    mysqli_query($link, $query);
}

if(!empty($userup) && !empty($passup) && !empty($name) && !empty($phno) && !empty($bankno) && !empty($bankname) && !empty($birthdate)){
    $query = "UPDATE admin SET pass = '$md5', nameDt = '$name', phDt = '$phno', bkacDt = '$bankno', bknmDt = '$bankname', bthDt = '$birthdate' WHERE aduser = '$userup'";
    mysqli_query($link, $query);
    echo '<script>alert("Updated."); location.replace(document.referrer);</script>';
} elseif(!empty($userup) && !empty($name) && !empty($phno) && !empty($bankno) && !empty($bankname) && !empty($birthdate)){
    $query = "UPDATE admin SET nameDt = '$name', phDt = '$phno', bkacDt = '$bankno', bknmDt = '$bankname', bthDt = '$birthdate' WHERE aduser = '$userup'";
    mysqli_query($link, $query);
    echo '<script>alert("Updated."); location.replace(document.referrer);</script>';
} elseif(!empty($userup) && !empty($name) && !empty($phno)){
    $query = "UPDATE admin SET nameDt = '$name', phDt = '$phno' WHERE aduser = '$userup'";
    mysqli_query($link, $query);
    echo '<script>alert("Updated."); location.replace(document.referrer);</script>';
} else{
    echo '<script>alert("Try again."); location.replace(document.referrer);</script>';
}
?>