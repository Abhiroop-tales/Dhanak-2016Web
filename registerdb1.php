<?php
session_start();

 //whether the username is blank
 if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['gender']) && isset($_POST['accomodation']) && isset($_POST['username']) && isset($_POST['name']) && isset($_POST['college']) && isset($_POST['year']) && isset($_POST['mobile']))
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

  //whether the email format is correct
  if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email']))
 {
   //if it has the correct format whether the email has already exist
  $email =mysqli_real_escape_string($mysqli,strip_tags($_POST['email']));
	$sql1 = "SELECT email FROM users WHERE email = '$email'";
   $result1 = mysqli_query($mysqli,$sql1) or die(mysqli_error());
   if (mysqli_num_rows($result1) > 0)
            {
    //$_SESSION['error']['email'] = "Email already exists!";
	return 7;
   }
   
  }
  
	  
	$username=$_POST['username'];
	$sql1 = "SELECT uname FROM users WHERE uname = '$username'";
   $result1 = mysqli_query($mysqli,$sql1) or die(mysqli_error());
   if (mysqli_num_rows($result1) > 0)
            {
    //$_SESSION['error']['username'] = "Username already exists!";
   return 2;
   }
   
   	
  $name = mysqli_real_escape_string($mysqli,strip_tags($_POST['name']));
  $accomodation = mysqli_real_escape_string($mysqli,strip_tags($_POST['accomodation']));
  $username = mysqli_real_escape_string($mysqli,strip_tags($_POST['username']));
  $email = mysqli_real_escape_string($mysqli,strip_tags($_POST['email']));
  $password = mysqli_real_escape_string($mysqli,strip_tags($_POST['password']));
  $mobile = mysqli_real_escape_string($mysqli,strip_tags($_POST['mobile']));
  $college = mysqli_real_escape_string($mysqli,strip_tags($_POST['college']));
  $year = mysqli_real_escape_string($mysqli,strip_tags($_POST['year']));
  $gender = mysqli_real_escape_string($mysqli,strip_tags($_POST['gender']));
  
  $com_code = md5(uniqid(rand()));
  $password=md5($password);

  $sql2 = "INSERT INTO users (name, accomodation, uname, email, password, mobile, college, year, gender, com_code) VALUES ('$name', '$accomodation', '$username', '$email', '$password', '$mobile', '$college', '$year', '$gender', '$com_code')";
  $result2 = mysqli_query($mysqli,$sql2) or die(mysqli_error());

  if($result2)
  {
   $to = $email;
   $subject = "Confirmation from Dhanak_16 to $username";
$message = "Thanks for registering! Please click the link below to verify and activate your account.\n";
   $message .= "http://test.dhanak.co.in/confirm.php?passkey=$com_code";
$headers = 'From: web@dhanak.co.in' . "\r\n" .
    'Reply-To: web@dhanak.co.in';	

 
if(mail($to, $subject, $message, $headers)) {
 //$_SESSION['mailsent']='Your confirmation link has been sent to your mail';   
return 5;
}
 else{ //$_SESSION['mailfail']="Error sending confirmation link to your mail";
return 4;
 }
 
  
  }
 }

?>