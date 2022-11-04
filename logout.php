<?php 
session_start();
 unset($_SESSION['username']);

session_destroy();
 header('Location:/dhanak_2016_repo/index.php');
 
 
?>