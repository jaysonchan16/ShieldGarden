<?php
session_start();
    if(isset($_SESSION['adminlog'])) {
     // echo $_SESSION['adminlog'];
    } else {
      header('Location: http://localhost/wordpress/adltrmin8899/');
    }

$conn=mysqli_connect('localhost','root','','user'); 
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

 /*if($_REQUEST['name'])
  {
    $name = $_REQUEST['name'];
    $query = "SELECT * FROM account WHERE username = '$name'";

  $result = mysqli_query($conn, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    $Username = $row['Username'];
    $Limitation = $row['Limition'];
}
 
  }*/
  if(isset($_POST['search']))
  {
 
 $name=$_POST['name'];
 $query = "SELECT * FROM account WHERE username = '$name'";

  $result = mysqli_query($conn, $query);

  $array = array();

  while ($row = mysqli_fetch_assoc($result)) {
  //  $array[] = $row;
    $Username = $row['Username'];
    $Limitation = $row['Limition'];
    $array = array("$Username", "$Limitation");
  }
 $myJSON = json_encode($array);
 echo "$myJSON";
 
 exit();
}
  ?>