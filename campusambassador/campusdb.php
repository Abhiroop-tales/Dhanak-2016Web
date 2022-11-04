<?php
session_start();
if(isset($_POST['email']) && isset($_POST['sid']) && isset($_POST['gender']) &&  isset($_POST['name']) && isset($_POST['college']) && isset($_POST['year']) && isset($_POST['mobile']))
 {

  echo check();
 }
 else
{

	header('location:/dhanak_2016_repo/campusambassador');
	
}
function check()
{
$mysqli=mysqli_connect('localhost','root','','dhana15i') or die("Database Error");

  //whether the email format is correct
  if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/", $_POST['email']))
 {
   //if it has the correct format whether the email has already exist
  $email = mysqli_real_escape_string($mysqli,strip_tags($_POST['email']));
	$sql1 = "SELECT email FROM campususers WHERE email = '$email'";
   $result1 = mysqli_query($mysqli,$sql1) or die(mysqli_error());
   if (mysqli_num_rows($result1) > 0)
            {
    //$_SESSION['campus_error']['email'] = "Email already exists!";
	return 7;
   }
  }
  else
  {
	  return 3;
  }
	
 
 

  $name = mysqli_real_escape_string($mysqli,strip_tags($_POST['name']));
  $sid = mysqli_real_escape_string($mysqli,strip_tags($_POST['sid']));
  $email = mysqli_real_escape_string($mysqli,strip_tags($_POST['email']));
  $gender = mysqli_real_escape_string($mysqli,strip_tags($_POST['gender']));
  $mobile = mysqli_real_escape_string($mysqli,strip_tags($_POST['mobile']));
  $college = mysqli_real_escape_string($mysqli,strip_tags($_POST['college']));
  $year = mysqli_real_escape_string($mysqli,strip_tags($_POST['year']));
  

  $sql2 = "INSERT INTO campususers (name, email, mobile, college, sid, year, gender) VALUES ('$name', '$email', '$mobile', '$college', '$sid', '$year', '$gender')";
  $result2 = mysqli_query($mysqli,$sql2) or die(mysqli_error());

  if($result2)
  {
   $to = $email;
   $subject = "Campus Ambassador for DHANAK, IIST: Confirmation Mail To $name";
$message = "Hi,\n";
$message .= "Greetings from Participation team of DHANAK- Cultural Fest of IIST, Trivandrum.\n";
   $message .= "We would like to thank you for showing interest in DHANAK and being the Campus Ambassador for DHANAK in your college.
		Being a Campus Ambassador entails duties of being the Point of Contact [POC] between us and your college students. (Mentioned in the website)\n";
$message .="You will be required to forward and share the event details about IRIS among your college students to promote DHANAK and create buzz and increase participation.
		Being a Campus Ambassador helps build up your CV also as in showing your networking skills and can add on as a CV point with proper certification from Team DHANAK.
		Added incentives and the other related information of being the campus ambassador have also been mentioned in the site dhanak.co.in \n";
$message .="For further queries and information contact the undersigned.\n";

$message .="Regards,\n";
$message .="DHANAK Team\n";
$message .="Abhinav Kumar\n";
$message .="Finance Coordinator\n";
$message .="akrulz27@gmail.com\n";
$message .="Connect with us at: (https://www.facebook.com/iist.dhanak and www.dhanak.co.in)";

$headers = 'From: web@dhanak.co.in' . "\r\n" .
    'Reply-To: akrulz27@gmail.com';	

 
if(mail($to, $subject, $message, $headers)) {
 //$_SESSION['campus_mailsent']='Thanks for registering for Campus Ambassador, you will recieve verification email from our dhanak team!';
return 5;
 }
 else{ //$_SESSION['campus_mailfail']="Error sending mail to ".$email;
return 4;	 
}
 
  
  }
  }
?>