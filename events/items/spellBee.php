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
		<h2 class="event_head">Spell Bee</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Spell Bee">
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
			Are you the orthographer of your peer group? And didn’t use the dictionary to find its meaning? Then come to the event and win it to become a Certified Spelling Nazi.
		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
		
			<li>
				The teams can consist of 1-2 people only.
			</li><br>
			<li>
				The event will consist of two rounds. Prelims and Finals.
			</li><br>
			<li>
				Top 6 participants will advance to the Rapid-fire round in which participants will be aiming to spell the maximum number of words in a given time frame.
			</li><br>
			<li>Use of phones, laptops, discussions with non-team members will lead to direct disqualification of the team.
			</li><br>
			<li>
				Decision made by the organizers will be final and binding.
			</li><br>
			
		</ol>
		 <b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 1000</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
			Abhinav Paul - 9899828569	
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
