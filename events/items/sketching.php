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
		<h2 class="event_head">Basquejar - Sketching</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Sketching">
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
			To portray the colours of human emotions in monochrome, one need not just have an artistic hand, but, also an expressive mind, and an innovative thought. The first writing of the human being was drawing, not words. Life is the art of drawing without an eraser. Real education should consist of drawing the goodness and the best out of our own students.  So let’s draw it carefully. Sketch everything and keep your curiosity fresh. Sketch with passion of “it is so beautiful I must show you how it looks.”
		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
			<li>
				Each participant has to register before participating through online or offline.
			</li><br>
			<li>
				Sketching would have to be done by using logistics provided on the spot on A4
			</li><br>
			<li>
				Theme will be given on the spot.
			</li><br>
			<li>
				No kind of cheating and surfing is allowed, if found so that entry will not be taken into consideration.
			</li><br>
		</ol>
		<b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 2500</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
				Mohit Soni: 9497300081
			</li><br>
			<li>
				Pranav Tiwari: 9497300161
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
