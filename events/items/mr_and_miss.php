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
		<h2 class="event_head">Mr. and Miss Dhanak</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Mr. and Miss Dhanak">
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
			Can you handle all this sparkle..???
			<br>Are you too positive to be doubtful…….too optimistic to be fearful.. and too determined to be defeated?? Here is a stage tailor made for you. Demonstrate your versatility, charm, intellect and confidence and bag the Player of the Series trophy.
		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
			<b>Round 1</b>
			<li>
				Written Test
			</li><br>
			<b>Round 2</b>
			<li>
				Personal Interview	
			</li><br>
			<b>Round 3</b>
			<li>
				On Street Task
			</li><br>
			<b>Round 4</b>
			<li>
				Ramp Walk and Stage Presence
			</li><br>
		</ol>
		<b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 6000</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
			Nikunj: 09811538317
			</li><br>
			<li>
			Swetha: 09497228783
			</li><br>
			<li>
			Partha: 09594794946
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
