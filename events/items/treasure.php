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
		<h2 class="event_head">Treasure Hunt- Book of Secrets</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Treasure Hunt">
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
			Ever dreamt of being a real life treasure hunter? Run through a maze of cryptic clues to unravel the mysterious treasure! Come join us in the ultimate treasure hunt at Dhanak 2016. Here’s an adventure that is guaranteed to give you the thrill of a lifetime.
		</p>
		<b class="event_bold">Rules and Regulations</b>
		<p>
		The event consists of 2 Rounds. The preliminary round will be an innovative round, for evaluating the logical and detective skills of the participants. 4 teams will be qualifying for the 2nd round, which is the actual treasure hunt with an unexpected twist. So, get ready for the mind boggling experience. Be aware! Danger lurks at every corner.
		</p>
		<ol>
			<li>
				Your team should have a minimum of 3 and maximum of 4 members.
			</li><br>
			<li>
				The preliminary round will be time constrained.
			</li><br>
			<li>
				Use of phones, laptops, discussions with non-team members, unless otherwise allowed as part of the event, will lead to instant disqualification of the team. 
			</li><br>
			<li>
				In case of conflicts of any kind, decision of the organizers will be final and binding.
			</li><br>
			<li>
				Location for the hunt will consist of any available/allowed area within the college campus and a walk-able radius outside of it. The exact boundaries and specific rules will be revealed at the start of the event.
			</li><br>
		</ol>
		<b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 3000</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
				Rohit Gandikota: 8985025267
			</li><br>
			<li>
				Srinika Selvam: 9497300331	
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
