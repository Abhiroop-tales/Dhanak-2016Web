<?php
session_start();

if(isset($_POST['eventname']) && isset($_SESSION['username']) && isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['college']) && isset($_SESSION['mobile']))
 {

  echo check();
 }
 else
{

	header('location:/dhanak_2016_repo/events');
	
}
function check()
{
	if(isset($_POST['eventname']) && isset($_SESSION['username']))
	{
	$eventname= $_POST['eventname'];
	$name=$_SESSION['name'];
	$username=$_SESSION['username'];
	$mobile=$_SESSION['mobile'];
	$email=$_SESSION['email'];
	$college=$_SESSION['college'];
	$mysqli=mysqli_connect('localhost','root','','dhana15i') or die("Database Error");

	
	$sql1 = "SELECT event_name,uname FROM events_registrations WHERE event_name = '$eventname' and uname='$username'";
	$result1 = mysqli_query($mysqli,$sql1) or die(mysqli_error());

		if (mysqli_num_rows($result1) > 0)
		{
			//$_SESSION['already_registered'] = "Already Registered for this event!";
			return 1;
		}
		else
		{	
		$sql2 = "INSERT INTO events_registrations (name, uname, email, mobile, event_name, college) VALUES ('$name', '$username', '$email', '$mobile', '$eventname', '$college')";
		$result2 = mysqli_query($mysqli,$sql2) or die(mysqli_error());
		
		if($result2)
		{
			//$_SESSION['registration_success']='Successfully Registered for '.$eventname;
			return 2;
		}
			
			
			//$_SESSION['registration_success']='Error registering for '.$eventname;
			return 3;
		
		}
	}
}
?>