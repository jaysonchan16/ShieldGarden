<?php
$user = current($_POST['user']);
$pass = current($_POST['pass']);
$md5 = md5(md5($pass));
$name = current($_POST['rlname']);
$ctCode = current($_POST['ctCode']);
$ph = current($_POST['phnum']);
$phno = $ctCode.$ph;
$bankno = current($_POST['bankacc']); if(empty($bankno)){$bankno = '-';}
$bankname = current($_POST['bankname']); if(empty($bankname)){$bankname = '-';}
$stat = current($_POST['stat']);
$usrtype = S;
$limit = current($_POST['limit']);
$nolimit = '0';
$sdlr = current($_POST['subdealer']);
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
    echo '<script>alert("用户名称已存在"); location.replace(document.referrer);</script>';
} elseif($phn == $phno){
    echo '<script>alert("电话号码一存在"); location.replace(document.referrer);</script>';
} elseif(empty($user) OR empty($pass) OR empty($name) OR empty($phno)){
    echo '<script>alert("请填入所有的格"); location.replace(document.referrer);</script>';
} else{
	$sql = "INSERT INTO users(username, password, nameDt, phDt, bkacDt, bknmDt, status, userType, dealerName) VALUES('".$user."', '".$md5."', '".$name."', '".$phno."', '".$bankno."', '".$bankname."', '".$stat."', '".$usrtype."', '".$sdlr."')";
	mysqli_query($link, $sql);

    $sql = "INSERT INTO balance(userID, avLimit, avBal, outStdbal) VALUES('".$user."', '".$limit."', '".$limit."', '".$nolimit."')";
    mysqli_query($link, $sql);
    echo '<script>alert("已注册"); location.replace(document.referrer);</script>';
}

?>