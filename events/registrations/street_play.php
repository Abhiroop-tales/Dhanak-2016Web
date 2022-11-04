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
		<h2 class="event_head">Theatrical Arts</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Street Play">
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
			All the world’s a stage, and though we might be desperately unrehearsed in real life, theatre is a place where you can mirror life while keeping it well within your control. This is the time to show your talent. Get dressed and ready to perform for the crowd, to enthral the audience with your acting skills!
		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
			<li>
				Valid college or school ID card is required to participate.
			</li><br>
			<li>
				The play can be of any genre of theatre, like street play, mime, musical, pantomime etc. 
			</li><br>
			<li>
				The Theme of the play should be Retro/Vintage/Old times.
			</li><br>
			<li>
				Use of props is permitted. A duration of 2 minutes is allowed for set up and clearance. 
			</li><br>
			<li>
				Performance duration: 8-10 minutes only. Participants will be penalized by judges for not sticking to it.
			</li><br>
			<li>
				Maximum 10 persons per team.
			</li><br>
			<li>
				Pre-recorded music should be brought on a CD/DVD or a pen drive in .cda or .mp3 format only. The same should be handed over to the organizers an hour before the start of the event.
			</li><br>
			<li>
				Obscenity of any kind will not be allowed and will lead to the immediate disqualification of the participant.
			</li><br>
			<li>
				The decision of the judges will be final and binding.
			</li><br>
			<li>
				Play can be in English, Hindi, Malayalam and Telugu.
			</li><br>
		</ol>
		<b class="event_bold">Judgement Criteria</b>
		<ol>
			<li>
				Creativity of presentation
			</li><br>
			<li>
				Facial expression and body language
			</li><br>
			<li>
				Use of makeup
			</li><br>
			<li>
				Music
			</li><br>
			<li>
				Connection with audience, originality and teamwork
			</li><br>
			<li>
				Overall clarity and impact
			</li><br>
		<b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 15000</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
				Nikunj: 09811538317
			</li><br>
			<li>
				Swetha: 09497228783
			</li><br>
			<li>
				Pratik: 9497300212
			</li><br>
			<li>
				Savit: 9497300325
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
