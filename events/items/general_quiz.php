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
		<h2 class="event_head">General Quiz</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="General Quiz">
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
			Omniscient. Omnipresent. Omnipotent. Talking about God? Nah. Just your knowledge. Amaze people with the sheer span of your expertise in the General Quiz, and prove that you have left no stone unturned, no book unrifled.
		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
			
			<li>
				A team may consist of only two members.
			</li><br>
			<li>
				Prelims will be held on-the-spot in a written round of 45 minutes duration.
			</li><br>
			<li>
				Six teams qualify to the finals.
			</li><br>
			<li>
				Other rules and details of the events and rules of the final round will be disclosed
				during the event.
			</li><br>
			<li>
				Decision of the organisers will be final and cannot be contested.
			</li><br>
		</ol>
		 <b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 8000</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
			Ankita: 09446127501
			</li><br>
			<li>
			Shreya: 09446119708
			</li><br>
			<li>
			Priya: 09713813320
			</li><br>
		</ul>	
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
