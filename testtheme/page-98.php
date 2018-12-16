<?php
$user = current($_POST['user']);
$pass = current($_POST['pass']);
$md5 = md5(md5($pass));
$name = current($_POST['rlname']);
$ctCode = current($_POST['ctCode']);
$ph = current($_POST['phnum']);
$phno = $ctCode.$ph;
$bankno = current($_POST['bankacc']);
$bankname = current($_POST['bankname']);
$stat = current($_POST['stat']);
$limit = current($_POST['limit']);
$nolimit = '0';
$dealer = $_POST['dealer']; if (!empty($dealer)){$dealer = D;} else{$dealer = P;}
$nosubdealer = '--';
$na = '-';
$link = mysqli_connect("localhost", "root", "", "wordpresstest");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$sql = "SELECT * FROM users";
    $result = mysqli_query($link,$sql);

    while ($row = mysqli_fetch_assoc($result)) {
    	$phn = $row["phDt"];
    }

$sql = "SELECT * FROM users WHERE username = '".$user."'";
    $result = mysqli_query($link,$sql);

if(mysqli_num_rows($result)>=1){
    echo '<script>alert("Existed user name."); location.replace(document.referrer);</script>';
} elseif($phn == $phno){
    echo '<script>alert("Existed phone number."); location.replace(document.referrer);</script>';
} elseif(empty($user) OR empty($pass) OR empty($name) OR empty($phno)){
    echo '<script>alert("Please try again."); location.replace(document.referrer);</script>';
} elseif(!empty($user) AND !empty($pass) AND !empty($name) AND !empty($phno) AND !empty($bankno) AND !empty($bankname) AND !empty($stat)){
	$sql = "INSERT INTO users(username, password, nameDt, phDt, bkacDt, bknmDt, status, userType, dealerName) VALUES('".$user."', '".$md5."', '".$name."', '".$phno."', '".$bankno."', '".$bankname."', '".$stat."', '".$dealer."', '".$nosubdealer."')";
	mysqli_query($link, $sql);

    $sql = "INSERT INTO balance(userID, avLimit, avBal, outStdbal) VALUES('".$user."', '".$limit."', '".$limit."', '".$nolimit."')";
    mysqli_query($link, $sql);
    echo '<script>alert("Submitted."); location.replace(document.referrer);</script>';
} elseif(!empty($user) AND !empty($pass) AND !empty($name) AND !empty($phno)){
    $sql = "INSERT INTO users(username, password, nameDt, phDt, bkacDt, bknmDt, status, userType, dealerName) VALUES('".$user."', '".$md5."', '".$name."', '".$phno."', '".$na."', '".$na."', '".$stat."', '".$dealer."', '".$nosubdealer."')";
    mysqli_query($link, $sql);

    $sql = "INSERT INTO balance(userID, avLimit, avBal, outStdbal) VALUES('".$user."', '".$limit."', '".$limit."', '".$nolimit."')";
    mysqli_query($link, $sql);
    echo '<script>alert("Submitted."); location.replace(document.referrer);</script>';
}
?>