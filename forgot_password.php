<?php
include('configdb.php');
session_start();
if(isset($_POST['reset_password']))
{
	 if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email']))
 {
   //if it has the correct format whether the email has already exist
  $email = mysqli_real_escape_string($mysqli,strip_tags($_POST['email']));
  $sql1 = "SELECT email,password,uname FROM users WHERE email = '$email'";
   $result1 = mysqli_query($mysqli,$sql1) or die(mysqli_error());
   if (mysqli_num_rows($result1) > 0)
            {
				while ($row = mysqli_fetch_assoc($result1)){
		$email = $row['email'];
		$username = $row['uname'];
				}
				$password=dhanak_user;
				$to = $email;
		$subject = " from Dhanak_16 to $username";
		$message = "Your registered email is <b>$email</b>, password is <b>$password<b> and username is <b>$username<b> for Dhanak 2k16! For any further issues contacts us on www.dhanak.co.in "
		
		$headers = 'From: web@dhanak.co.in' . "\r\n" .
		'Reply-To: web@dhanak.co.in';
			
			if(mail($to, $subject, $message, $headers)) {
				$password=md5($password);
 $_SESSION['mailsent']='Your new password has been sent to your email';
 $sql = "UPDATE users SET password='$passwrod' WHERE uname='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
header('location:index.php');   
exit;
}
			
			}
  }
  $_SESSION['error']['mail']="Invalid E-mail"!!;
  header('location:index.php');
}
else {header('location:index.php');}
?>