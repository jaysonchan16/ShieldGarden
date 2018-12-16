<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
  <link rel="shortcut icon" href="https://ltttry8899.com/wp-content/uploads/2017/05/smllogo-e1495965045838.png" type="image/png">
	</head>










<style>

div.main {
	width: 600px;
	margin: 0 auto;
}
.tool {
	height: 20px;
}
.tool ul {
	line-height: 20px;
	list-style-type: none;
	float: right;
	margin: 0px;
	padding:0px;
	color: #000000;
	height:20px;
}
.tool ul li {
	float: left;
	font-size: 11px;
	text-align: center;
}
.tool li.t {
	font-weight: bold;
>
	padding-right: 5px;
}

.tool {
	background-color: #D3D3D3;
}

.tool li.combo{
	background-color:#D3D3D3;
}

.tool li.combo ul li{
	background-color:#D3D3D3;
}

.tool li.combo ul li:hover {
	background-color:#D3D3D3; 
}

.login {
  	margin:0 auto;
 	width:320px;
   	position: absolute;
   	top: 50%;
   	left: 50%;
   	margin-top: -220px;
   	margin-left: -160px;
   	padding-top: 90px;
}

.login-form {
  	border:2px solid #999;
  	background:#222;
  	border-radius:10px;
}

.login-form h3 {
  	text-align:left;
  	margin-left:40px;
  	color:#fff;
}

.login-form h4 {
  	text-align:left;
  	margin-left:40px;
  	color:#fff;
}

.login-form {
  	box-sizing:border-box;
  	margin:-7px auto;
  	text-align:center;
	overflow: hidden;
}

.login input[type="text"],
.login input[type="password"],.login select {
  	width: 100%;
  	max-width:250px;
  	height:30px;
  	font-family: 'Ubuntu', sans-serif;
  	margin:10px 0;
  	border-radius:4px;
  	border:2px solid #000;
  	outline:none;
  	padding-left:10px;
  	background:#4E4B4B;
  	color:#fff;
}

.login-form input[type="button"] {
  	height:30px;
  	width:150px;
  	background:#fff;
  	border:1px solid #f2f2f2;
  	border-radius:20px;
  	color: slategrey;
  	text-transform:uppercase;
  	font-family: 'Ubuntu', sans-serif;
  	cursor:pointer;
}

.login_button {
  	height:30px;
  	width:260px;
  	background:#20B2AA;
  	border:1px solid #f2f2f2;
  	border-radius:5px;
  	color: #fff;
  	text-transform:uppercase;
  	font-family: 'Ubuntu', sans-serif;
  	cursor:pointer;
  	padding:5px 104px;
  	text-decoration:none;
}

</style>



  <meta charset="utf-8">
  <meta https-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        
 		
	<nav class="navbar navbar-inverse">
  	<div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="" style="color: #ffffff"><img src="https://ltttry8899.com/wp-content/uploads/2017/05/smllogo-e1495965045838.png" width="40" height="40" style="margin-top:-10px"/></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #ffffff">Language
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
    <li><a href="#">English</a></li>
    <li><a href="#">Chinese</a></li>
    </ul>
  	</div>
	</nav>


	<body style="background-color:#dcdcdc;">

    <center>
    <div class="login">
	<div class="login-header">
	</div>
	<form action="https://www.ltttry8899.com/login/process/" method="post">
  	<div class="login-form">
	<div style="background:#000;color:#fff;padding:10px;text-align:center">User Login</div>
	<input type="text" name="user" id="usrid" placeholder="Username" style="margin:30px 0 0 0; border-radius:4px 4px 0 0" />
	<input type="password" name="pass" id="usrpw" placeholder="Password" style="margin:0 0 30px 0; border-radius:0 0 4px 4px" />
    </div>
    <div>
    <img src="https://www.ltttry8899.com/captcha/" width="80" height="30" align="left" style="margin:22px 0 20px 29px;" /><br>
	<input name="captcha" type="text" placeholder="Enter Captcha here" style="background-color: #4E4B4B; width: 160px; margin:0 20px 0 0;" />
	</div>
	<br>
	<input type="submit" name='submit' id="btn" value="Login" class="login_button" />
	</center>
	</form>
	<br><br>
	<div id="errmsg" class="errmsg" style="position: relative;">
	<span id="spMes"></span>
	</div>
	<br>
  	</div>


	</body>

	<footer>

</footer>

</html>