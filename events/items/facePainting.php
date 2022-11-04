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
		<h2 class="event_head">Behind the Mask: Face Painting</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Face Painting">
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
			"I wanted to paint a picture some day that people would stand before and forget that it was made of paint. I wanted it to creep into them like a bar of music and mushroom there like a soft bullet"- if you have ever felt this way then express your thoughts by adding colour to it…We are eager to have a glance at the face painter hidden inside you……
		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
			<li>
				Plates, cups, tissues, brushes and acrylic paints will be provided at the venue.
			</li><br>
			<li>
				Participants are allowed to carry their own paints and other accessories.
			</li><br>
			<li>
				The artist must work alone. No assistants are allowed.
			</li><br>
			<li>
				Each artist must work within their allotted area and in full view of the public.
			</li><br>
			<li>
				The judges will be viewing your work during the competition.
			</li><br>
			<li>
				The judges' decision is final.
			</li><br>
			<li>
				The jury evaluates the following:
				<ul style="list-style-type:disc;">
					<li>
						Quality, technique and skill.
					</li>
					<li>
						Theme, idea and originality.
					</li>
					<li>The composition of works and overall impression.</li>

				</ul>
			</li><br>

			<li>
				Participants are advised to apply coconut oil on face before painting.
			</li><br>
		</ol>
		<b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 2500</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
				B.Ujjwala: 9497300131
			</li><br>
			<li>
				B.Greeshma: 9491313290
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
