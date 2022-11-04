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
		<h2 class="event_head">J.A.M - Just A Minute</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Just A Minute">
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
			What does the second's hand ticking away bring out in you? Does it make you stutter, flutter, or just speak way too fast? And what when there's the added factor of an opponent listening to you way too intently, just to pick on your faults and start speaking himself/herself? Does this make the adrenaline in you rush? Because then this event is for you!
			<br>Creativity comes to everyone when time is plentiful, but this event tests your ability to imagine and communicate and stupefy everyone, and all this in just a paltry minute!
			<br>So roll your sleeves, clear your throat and claim that one minute!
		</p>
		<b class="event_bold">Rules and Regulations</b>
		<p>
			A topic is given. A person starts speaking, and can continue to speak until another spots a mistake in their grammar/vocabulary, at which point this person can interrupt the speaker and start speaking themselves. At the end of one minute, the person who is speaking gets bonus points. 
			<br>The competition will include book-review rounds, video rounds and anything else which requires the participants to think on their feet.
			
			<br>This event includes three rounds. The first round is the normal J.A.M. The next two rounds are surprise rounds aimed at a check of spontaneity.
		</p>
		 <b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 2500</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
				Prajjwal Yash- 9497300417
			</li><br>
			<li>
				Moon B. Hazarika – 9497300134
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
