<?php
session_start(); 
include('configdb.php');
 $passkey = $_GET['passkey'];
 $sql = "UPDATE users SET com_code=NULL WHERE com_code='$passkey'";
 $result = mysqli_query($mysqli,$sql) or die(mysqli_error());
 if($result)
 {
$_SESSION['activation']="Your account has been activated! Please Log in";
}
 else
 {
  $_SESSION['activation']="Error activating your account";
 }
header('location:/dhanak_2016_repo');
?>