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
		<h2 class="event_head">Tashan - Fashion Show</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Tashan - Fashion Show">
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
			<b>“Fashion is in the sky, in streets, in how we live and in our ideas.”</b>

			Style is an expression of individualism mixed with charisma. Fashion is about owning what you are wearing, it is about reinventing yourself with what you have.

			Here is one place where your sense of style pays off, strutting the ramp has never been more competitive. It’s not a walk in the park, it’s the catwalk on the beach! Come and join us with
			your skills and style and win the runway to our hearts.

		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>

			<li>
				A minimum of 8 models per team.
			</li><br>
			<li>
				Team size: Maximum 15 inclusive of designer, makeup artists & backstage help.
			</li><br>
			<li>
				Time limit allotted for each team is maximum 15 minutes including the stage preparation.
			</li><br>
			<li>
				The music format should be MP3 and is to be submitted at the PC desk 30 minutes prior to the event.
			</li><br>
			<li>
				Presenting banners, posters or other materials directly displaying the theme is prohibited.
			</li><br>
			<li>
				Event is open only for college students and every member of the team should produce their                college ID compulsorily.
			</li><br>
			<li>
				Vulgarity in performance will be credited with negative marks and the team will be disqualified if any of the above criteria is not satisfied.
			</li><br>
		</ol>
		<b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 33000</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
			Ayisha M. Ashruf: 09447083602
			</li><br>
			<li>
			Partha Surve: 09595794946
			</li><br>
			<li>
			Gemi Rachel George: 09497821061
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
