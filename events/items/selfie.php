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
		<h2 class="event_head">Selfie Le</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Selfie Le">
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
			A shout out to all those selfie queens and selfie kings across the living humanity.
			<br>Three quick steps to win exciting goodies: POSE, CLICK and SEND. Don't miss the chance to feature in our dedicated fest publications.


		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
			<li>
				The entry should not include any additional people besides entrant.
			</li><br>
			<li>
				The photo can be of the following formats : jpg, jpeg, png.
			</li><br>
			<li>
				Maximum size : 10 MB.
			</li><br>
			<li>
				A maximum of 2 entries are allowed per person.
			</li><br>
			<li>
				The selfie must not contain material that violates or infringes another’ rights.
			</li><br>
			<li>
				Winner will be decided on a voting (likes on Facebook) basis.
			</li><br>
			<li>
				The submissions should be made to online.eventst@dhanak.co.in with subject and a scanned copy of valid college ID.. 
			</li><br>
		</ol>
		<b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 1000</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>Abhrajit: 9446247204
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
