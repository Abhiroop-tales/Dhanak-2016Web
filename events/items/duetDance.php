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
		<h2 class="event_head">Happy Feet - Duet Dance</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Happy Feet - Duet Dance">
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
			“We dance for laughter, we dance for tears, we dance for madness, we dance for fears, we dance for hopes, we dance for screams, we are the dancers, we create the dreams.”

			<br>

			This is an event for all dancers out there, who wish to pair up and showcase their amazing chemistry on stage. You can do western, hip hop, waltz, salsa and what not! Any fusion played on any theme comes under this event.
			Give your life a break and press the resume button up on the dance floor.

			<br>Give your life a break and press the resume button up on the dance floor.
		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
			<li>
				As the name of the event suggests, participants per team is 2.
			</li><br>
			<li>
				Participants are allowed to fuse songs for their performance.
			</li><br>
			<li>
				There is just one round, so gear up properly.
			</li><br>
			<li>
				Use of props is permitted. A duration of 1 minute is allowed for set up and clearance.
			</li><br>
			<li>
				Performance duration: 3-5 minutes only. The time limit should be strictly adhered to. Participants will be penalized by judges for not doing so.
			</li><br>
			<li>
				Pre-recorded music should be brought on a CD/DVD or a pen drive in .cda or .mp3 format only. The same should be handed over to the organizers half an hour before the start of the event.
			</li><br>
			<li>
				Any kind of fluid or flame is not allowed on the stage.
			</li><br>
			<li>
			Obscenity of any kind will not be allowed and can lead to the immediate disqualification of the participant.
			</li><br>
			<li>
				The decision of the judges will be final and binding
			</li>
			<li>
				Valid college or school ID card is required to participate.
			</li>
		</ol>
		<b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 6000</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
			Garima: 9497300090
			</li><br>
			<li>Pooja Kumari: 9497300172
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
