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
		<h2 class="event_head">Doodle Drawing- Be Doodled</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Doodle Drawing- Be Doodled">
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
			A picture. A moment. A memory. A world that your mind fleets to. Let your imagination prance around wild and fill the page with a simple blend of colours to express the million emotions that hide among these sketches. Join this year's Doodle drawing contest at Dhanak and win amazing prizes!	
		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
			<li>
				The doodle must contain a theme (any theme) i.e, cannot be a random mesh of caricatures.
			</li><br>
			<li>
				The doodles will be judged anonymously.
			</li><br>
			<li>
				They must not be derogatory, offensive, threatening, defamatory, disparaging, libellous or contain any content that is inappropriate.
			</li><br>
			
			
		</ol>
		<b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 2500</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
				Shrey: 09497300327
			</li>
			<br><li>
				Noel: 09497300181
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
