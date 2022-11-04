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
		<h2 class="event_head">Battle of Bands</h2>

		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Battle of Bands">
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
		Music is not about where you're from or what you've been taught. It's a fight for what you believe in. The language of what you are. So raise your fists and get ready to tread in the hallowed halls of the greats, for the stage is set and the battle is ON.
		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
			<li>
			Participating bands are requested to register online, latest by 14th October, 2016, failing which a slot during the competition is not guaranteed.
			</li><br>
			<li>
			No individual can be a member of more than one competing band in any role whatsoever.
			</li><br>
			<li>
			The number of members in a band is limited to an upper cap of 10 members.
			</li><br>
			<li>
			Stage time will be 30-40 min (plug in and plug out) depending on the schedule and number of bands. Points will be deducted for exceeding the time limitations.The number of members in a band is limited to an upper cap of 10 members.
			</li><br>
			<li>
			Sound checks may be performed immediately before each band’s performance or before the competition begins, at the discretion of the sound provider/technician.
			</li><br>
			<li>
			No backing track, guide tracks, prerecorded music or computed beats may be used.
			</li><br>
			<li>
			Decision of the judges is final and binding in all matters concerning the competition.
			</li><br>
			<li>
			Participants are liable to compensate any damage to the stage or equipment.
			</li><br>
		</ol>
		<b class="event_bold">Stage</b>
		<ol>
			<li>
			Six onstage monitors will be provided. (4 in the front, 2 at the rear for the drums)
			</li><br>
			<li>
			Microphones and a 5-piece Drum Kit will be provided onstage along with necessary power points.
			</li><br>
		</ol>
			<b class="event_bold">Note</b>
		<ol>
			<li>
			The performances should be predominantly in either English or Hindi.
			</li><br>
			<li>
			Although the upper cap is 10 members, this is not a competition for choirs or orchestras.
			</li><br>
		</ol>
		 <b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹  30000</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
			Gokul: 09495400121
			</li><br>
			<li>
			Vandana: 09497403601
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
