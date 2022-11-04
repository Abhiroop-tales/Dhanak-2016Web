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
		<h2 class="event_head">Dumb Charades</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Dumb Charades">
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
			It’s movie-time now. Bring out the movie maniacs in you to get started in this exciting Charade! After all, “ACTION SPEAKS LOUDER THAN WORDS”.
		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
			<li>
			<b>Round 1</b>: Written round based on movie scene description.
	
			</li><br>
			<li>
			<b>Round 2</b>: Teams will be given movies that will be enacted within a specific time limit. 
			</li><br>
			<li>
			Other rules and details will revealed at the time of the event.
			</li><br>
		</ol>
		<b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 1500</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
			J Ramanan: 09497300217	
			</li><br>
			<li>
			Fenil Shah: 09497300032
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
