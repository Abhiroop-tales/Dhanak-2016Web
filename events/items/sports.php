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
		<h2 class="event_head">Sports Quiz</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Sports Quiz">
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
			SPOTIVNAYA VICTORINA
			<br>Will you fail to get off the starting line or speed your way to success? 
			<br>Will you fast bowl your way to greatness or be out with a big fat nothing?
			<br>Here’s a chance for you to dribble past the teams, smash the volley of questions fired at you, hit them at cover drive and finally to dunk and score in this year’s edition of sports quiz in Dhanak 2k16. So pull up your socks, tighten your studs, stretch your minds and take your best shot at our quiz!!

		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
		
			<li>
				A written preliminary round will precede the finals.
			</li><br>
			<li>
				Six teams would be selected for the finals.
			</li><br>
			<li>
				Each team must contain 2 members.
			</li><br>
			<li>
				Use of unfair means will lead to direct disqualification.
			</li><br>
			<li>
				The decision of the organisers will be final and binding.
			</li><br>
			
		</ol>
		 <b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 3500</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
			Sumit-9497300348
			</li><br>
			<li>
			Ashish- 8547248615
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
