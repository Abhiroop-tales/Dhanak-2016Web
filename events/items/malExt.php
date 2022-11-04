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
		<h2 class="event_head">Uchabhashini—Malayalam Extempore</h2> 
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Uchabhashini—Malayalam Extempore">
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
		<p>Noku, nokunne…. If you are fluent in Malayalam and have the ability to think on your feet, do turn up for the Malayalam extempore. The topics will be highly informal and will have a retro twist. We promise to take you back to the days of vattukali and naarangamittayi. </p>
		<b class="event_bold">Rules and Regulations</b>
		<p>
			<ol >
				<li>
					Malayalam must be the language of communication
				</li><br>
				<li>
					Only 8 minutes will be allotted to each contestant: 5 minutes for preparing and 3 minutes for speaking.
					<br>The speech should include a brief introduction of the participant (not more than 30 seconds).
					<br>A warning bell will be given at the end of 2.5 minutes.
				</li><br>
				<li>
					Speech notes prepared during the preparation time are permitted to be used during the speech.
				</li><br>
				<li>
					Second round will be conducted only in case of tie of winning or runner-up position.
				</li><br>
				<li>
					Participants must carry their own pens.
				</li><br>
				<li>
					Decision of judges will be final and binding.
				</li><br>
			</ol>
			 <b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 2500</li></ul><br>
		</p>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
				Kavya: 09497681465
			</li><br>
			<li>
				Archana: 09497300108
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
