<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="../css/style.css"> <!-- Resource style -->
	<script src="../js/modernizr.js"></script> <!-- Modernizr -->

	<title>3D Folding Panel</title>
</head>


<body>
	<div class="cd-fold-content single-page">
		<div id="Anchor"></div>
		<h2 class="event_head">Rock and Roll - Solo Dance</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Rock and Roll - Solo Dance">
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
			Dance is the hidden language of the soul. This is an event for all contemporary dancers out there. You can do Western, Hip Hop, Waltz, Salsa and what not! Any fusion which includes a Western style too comes under this event. Step up to the challenge, believe in yourself and do what it takes, right now is a great time to start.
		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>

			<li>
				Valid college or school ID card is required to participate.
			</li><br>
			<li>
				Participants are allowed to fuse songs for their performance.
			</li><br>
			<li>
				The participants cannot use any part of the song which was used in the prelims, for the finals.
			</li><br>
			<li>
				Use of properties is permitted. A duration of 1 minute is allowed for set up and clearance.
			</li><br>
			<li>
				Performance duration: 3-5 minutes only. The time limit should be strictly adhered to. Participants will be penalized by judges for not doing so.
			</li><br>
			<li>
				Pre-recorded music should be brought on a CD/DVD or a pen drive in .cda or .mp3 format only. The same should be handed over to the organizers half an hour before the start of the event.
			</li><br>
			<li>
				Obscenity of any kind will not be allowed and can lead to the immediate disqualification of the participant.
			</li><br>
			<li>
				The decision of the judges will be final and binding.
			</li><br>
		</ol>
		<b class="event_bold">Prize Worth</b>
		<ol>
			<li>₹ 6000</li><br>
		</ol>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
				Harsha-9497300424
			</li><br>
			<li>
				Swetha-9497300240
			</li><br>
		</ul>
	</div>
</body>
<script src="../js/jquery-2.1.1.js"></script>
<script src="../js/pagemain.js"></script> <!-- Resource jQuery -->
</body>
</html>
