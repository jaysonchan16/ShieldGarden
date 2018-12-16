<!DOCTYPE html>  
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<script>
	var template_dir_js="<?php echo get_template_directory_uri()?>";
</script>
<link rel="icon" type="image/png" sizes="16x16" href="https://ltttry8899.com/wp-content/themes/testtheme/plugins/images/favicon.png">
<title>Elite Admin - is a responsive admin template</title>
<!-- Bootstrap Core CSS -->
<link href="https://ltttry8899.com/wp-content/themes/testtheme/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- toast CSS -->
<link href="https://ltttry8899.com/wp-content/themes/testtheme/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
<!-- morris CSS -->
<link href="https://ltttry8899.com/wp-content/themes/testtheme/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
<!-- animation CSS -->
<link href="https://ltttry8899.com/wp-content/themes/testtheme/css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="https://ltttry8899.com/wp-content/themes/testtheme/css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="https://ltttry8899.com/wp-content/themes/testtheme/css/colors/default.css" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="fix-header">
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
  <!-- Top Navigation -->
  <nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">

      <!-- .Logo -->
      <div class="top-left-part"><a class="logo" href="index.html"><!--This is logo icon--><img src="<?php bloginfo('template_directory');?>/plugins/images/eliteadmin-small-logo.png" alt="home" class="light-logo" /></a></div>
      <ul class="nav navbar-top-links navbar-left hidden-xs">
        <li><a href="javascript:void(0)" class="logotext"><!--This is logo text--><img src="<?php bloginfo('template_directory');?>/plugins/images/eliteadmin-small-text.png" alt="home" class="light-logo" alt="home" /></a></li>
      </ul>
      <!-- /.Logo -->

      <!-- top right panel -->
      <ul class="nav navbar-top-links navbar-right pull-right">
        
        <!-- .dropdown -->
        <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
          <ul class="dropdown-menu mailbox animated bounceInDown">
            <li>
              <div class="drop-title">You have 4 new messages</div>
            </li>
            <li>
              <div class="message-center"> <a href="#">
                <div class="user-img"> <img src="<?php bloginfo('template_directory');?>/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5>Pavan kumar</h5>
                  <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                </a> <a href="#">
                <div class="user-img"> <img src="<?php bloginfo('template_directory');?>/plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5>Sonu Nigam</h5>
                  <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                </a> <a href="#">
                <div class="user-img"> <img src="<?php bloginfo('template_directory');?>/plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5>Arijit Sinh</h5>
                  <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                </a> <a href="#">
                <div class="user-img"> <img src="<?php bloginfo('template_directory');?>/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5>Pavan kumar</h5>
                  <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                </a> </div>
            </li>
            <li> <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a></li>
          </ul>
          <!-- /.dropdown-messages -->
        </li>
        <!-- /.dropdown -->

        <!-- .dropdown -->
        <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
          <ul class="dropdown-menu dropdown-tasks animated slideInUp">
            <li> <a href="#">
              <div>
                <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                </div>
              </div>
              </a> </li>
            <li class="divider"></li>
            <li> <a href="#">
              <div>
                <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                </div>
              </div>
              </a> </li>
            <li class="divider"></li>
            <li> <a href="#">
              <div>
                <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                </div>
              </div>
              </a> </li>
            <li class="divider"></li>
            <li> <a href="#">
              <div>
                <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                <div class="progress progress-striped active">
                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                </div>
              </div>
              </a> </li>
            <li class="divider"></li>
            <li> <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a> </li>
          </ul>
          <!-- /.dropdown-tasks -->
        </li>
        <!-- /.dropdown -->

        <!-- .dropdown -->
        <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="../plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b> </a>
          <ul class="dropdown-menu dropdown-user animated flipInY">
            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
          <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->

        <!-- .right toggle -->
        <li class="right-side-toggle"><a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-arrow-right"></i></a></li>
        <!-- /.right toggle -->
      </ul>
      <!-- top right panel -->

    </div>
  </nav>