<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->

	<title>3D Folding Panel</title>
</head>
<body>
	<div class="cd-fold-content single-page">
		<div id="Anchor"></div>
		<h2 class="event_head">Theme Quiz</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Theme Quiz">
		<?php 
		session_start();
		if (isset($_SESSION['username'])): ?>
		
		<form class="cd-form" name="event_registration" action="." id="event_registration_form" method="POST">
		<p class="fieldset">
          <input class="full-width has-padding" type="submit" value="Register" name="register_event">
			<p id="event_notif"></p>
		</p>
		</form>
		<?php else: ?>
		<button class="cd-signin">Sign In</button>
		<?php endif ?>
		</center>
		
		<!---For event register ---->
		<br>
	
		<b class="event_bold">Description</b>
		<p>
			Jump into the past, relive the memories which spun today's world, The Theme Quiz. A quiz based on decisions, dilemmas, tactics, Easter eggs and influences of the past. People can participate in teams of two and they have to advance their memories, skills and coordination for the maximum output. Let us jump to the past to predict the future	
		</p>
		<b class="event_bold">Rules and Regulations</b>
		<p>
		Preliminary Quiz will have a set of questions, the paper will be for a duration of one hour, and the teams with better performance will go to the final round. The Final Quiz and the rules for it will be announced in situ.
		<br>So buckle up for a ride to the past!
		</p>
		 <b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 4500</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
			Anuj Malik- 9497300445
			</li><br>
			<li>
			Avinash- 7702568767
			</li><br>
			<li>
			Sai Ram- 9497300145
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
