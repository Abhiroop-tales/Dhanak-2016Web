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
		<h2 class="event_head">Beg Borrow Steal</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Beg Borrow Steal">
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
			Are you good at getting what you want? Are you the master fixer? Here’s the event for you. Prepare yourself to gather the most weird, radical things. We give you a list of random items with points specified for each item. It’s up to you to decide on the method you might want to employ to garner them. Scour the campus - make your deals - Beg from a friend - Borrow from strangers - Steal maybe (at your own risk!). The highest scoring team at the end of the stipulated time will be declared as the winner.

		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
		
			<li>
				Maximum 3 players in a team.
			</li><br>
			<li>
				Time allotted will be 1 hour.
			</li><br>
			<li>
				List of items will be given at the start of the event.
			</li><br>
			<li>
				Points for each item will be specified along with some specific conditions.
			</li><br>
			<li>
				Teams will have to bring the items in the allotted time. First team to do so will be crowned the winner.
			</li><br>
			<li>
				All the items must be submitted together. Once the submission is done, you are not supposed to alter the objects.
			</li><br>
			<li>
				In case of a tie, the team submitting earlier will have an upper hand in the competition.
			</li><br>
			<li>
				If no team produces all the items within the allotted time, winner will be decided on the basis of points scored.
			</li><br>
			<li>
				The participants are solely responsible for their means of acquiring the required items.
			</li><br>
		</ol>
		<b class="event_bold"Prize Worth</b><br><br>
			<ul><li>₹ 3000</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
				Pravallika - 9497300116
			</li><br>
			<li>
				Deepshikha - 9497300137
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
