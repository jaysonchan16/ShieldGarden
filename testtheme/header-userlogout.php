<?php
session_start();

unset($_SESSION['userlog']);  //Is Used To Destroy Specified Session

session_destroy(); // Is Used To Destroy All Sessions
//Or

header("Location: http://localhost/wordpress/user-login/");
?>