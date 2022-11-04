<?php
 session_start();
 
 if(isset($_POST['email']) && isset($_POST['password']))
 {
	 echo check();
 }
 else
 {
	header('location:/dhanak_2016_repo');
	 
 }
 function check()
 {
	 $mysqli=mysqli_connect('localhost','root','','dhana15i') or die("Database Error");

 if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email']))
 {
  $email = mysqli_real_escape_string($mysqli,strip_tags($_POST['email']));
  $password = mysqli_real_escape_string($mysqli,strip_tags($_POST['password']));
  $password = md5($password);
  $query = "SELECT * FROM users WHERE email='$email' AND password='$password' AND com_code=''";
  $result = mysqli_query($mysqli,$query)or die(mysqli_error());
  $num_row = mysqli_num_rows($result);
  $row=mysqli_fetch_array($result);
  if( $num_row ==1 )
         {
	$_SESSION['username']=$row['uname'];
   $_SESSION['mobile']=$row['mobile'];
   $_SESSION['email']=$row['email'];
   $_SESSION['name']=$row['name'];
   $_SESSION['college']=$row['college'];
   $_SESSION['accomodation']=$row['accomodation'];
   
   $username=$_SESSION['username'];
   $name=$_SESSION['name'];
   $email=$_SESSION['email'];
   $mobile=$_SESSION['mobile'];
   $college=$_SESSION['college'];
   
   $query = "INSERT INTO login_users (name, email, mobile, uname, college) VALUES('$name', '$email', '$mobile', '$username', '$college')";
  $result = mysqli_query($mysqli,$query)or die(mysqli_error());
   
   return 1;
   }
  
         
   return 2;

 }
 else return 3;
 }
?>
