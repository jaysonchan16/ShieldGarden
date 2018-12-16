<?php
$user = current($_POST['user']);
$pass = current($_POST['pass']);
$md5 = md5(md5($pass));
$name = current($_POST['rlname']);
$ct = current($_POST['ctCode']);
$ph = current($_POST['phnum']);
$phno = $ct.$ph;
$bankno = current($_POST['bankacc']);
$bankname = current($_POST['bankname']);
$birthdate = current($_POST['birthdate']);
$link = mysqli_connect("localhost", "root", "", "wordpresstest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$sql = "SELECT * FROM admin";
    $result = mysqli_query($link,$sql);
        while ($row = mysqli_fetch_assoc($result)) {
    	$phn = $row["phDt"];
    }

$sql = "SELECT * FROM admin WHERE aduser = '".$user."'";
    $result = mysqli_query($link,$sql);

if(mysqli_num_rows($result)>=1){
    echo '<script>alert("Existed user name."); location.replace(document.referrer);</script>';
} elseif($phn == $phno){
    echo '<script>alert("Existed phone number."); location.replace(document.referrer);</script>';
} elseif(empty($user) OR empty($pass) OR empty($name) OR empty($phno)){
    echo '<script>alert("Please try again."); location.replace(document.referrer);</script>';
} else{
	$sql = "INSERT INTO admin(aduser, pass, nameDt, phDt, bkacDt, bknmDt, bthDt) VALUES('".$user."', '".$md5."', '".$name."', '".$phno."', '".$bankno."', '".$bankname."', '".$birthdate."')";
	mysqli_query($link, $sql);
    echo '<script>alert("Submitted."); location.replace(document.referrer);</script>';
}

?>