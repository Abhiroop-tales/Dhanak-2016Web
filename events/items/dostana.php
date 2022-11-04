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
		<h2 class="event_head">Dostana</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Dostana">
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
			Is there a way to measure the amount of friendship you share? We’ll do that for you. You guys bet that you are the best of friends!! Come let’s find out if that’s enough to get you past this one. Test the level of mutual understanding and find out whether you know each other in and out. Prove that you are the best among the best friends! 
		</p>
		<b class="event_bold">Rules and Regulations</b><br><br>
		<ul><li>Number of Team Members: 2 </li></ul><br>
		<b>Round 1: “Let the truth be told” </b>
		<ol>
			<li>
			Questions will be given separately to each member of the team to judge the level of understanding they share. 	
			</li><br>
			<li>
			Partners will be seated in different rooms. 	
			</li><br>
			<li>
			Use of messaging or any kind of contact amongst the team members will lead to immediate disqualification.	
			</li><br>
		</ol>
				<b>Round 2: "Minute to win it" </b>
		<ol>
			<li>
			Each team will have to play a game, the team which completes the game in minimum time will be declared the winner.
			</li><br>
			<li>
			Evaluation and judgment will be in the hands of coordinators and organizers. Their decision will be final and binding. 
			</li><br>
		</ol>
		<b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 1000</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
			Priyesh Jain: 09497300421
			</li><br>
			<li>
			Uttam: 09497300369	
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->	
</body>
</html>
