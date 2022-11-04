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
		<h2 class="event_head">Solo Singing</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Solo Singing">
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
			Music is forever; it grows and matures with the artist and often outlives its creator.<br>Dhanak 2016 invites you to go back to the time of The Rolling Stones, Led Zeppelin and Michael Jackson. 
			This is an opportunity for all the budding singers out there to channelize your inner Marley and Madonna and captivate throngs of spectators with your voice.

			<br><br><b>The event will have 3 separate competitions</b>
			<ol>
				<li><b>Rock The Jailhouse </b>- Solo Singing in English.</li>
				<li><b>Chitrageetham </b>- Solo Singing in Malayalam.</li>
				<li><b>Chitrahaar </b>- Solo Singing in Hindi and other Regional Languages.</li>
			</ol>
			
			<br><b>Format</b>:
			<ol>
				<li>There will be 2 rounds: a prelims and a final</li>
				<li>Only 5 participants will be selected from the prelims to advance to the finals.</li>
			</ol>

		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ul>
			<br><li><b>Prelims</b></li>
			<ol>
				<li>
					Each participant is allowed to sing for a max. duration of 3 mins.
				</li><br>
				<li>
					Each participant can sing a maximum of 2 songs.
				</li><br>
				<li>
					Use of karaoke is not allowed.
				</li><br>
				<li>
					No instrument is allowed to be played.
				</li><br>
				<li>
					Decision of judges will be final and binding.
				</li><br>
			</ol>
		
		
		
			<li><b>Finals</b></li>
			<ol>
				<li>
					Time duration allowed for each participant: minimum 3 mins, maximum 5 mins
				</li><br>
				<li>
					Use of karaoke allowed on the condition that it is a proper karaoke. Karaokes made by suppression of voices from the original track will NOT be allowed.
				</li><br>
				<li>
					It is the responsibility of the participants to ensure that the CD or pen drive containing the sound track with the name of the contestant and College written on it is submitted two hours prior to the commencement of the event.
				</li><br>
				<li>
					Participants are also allowed to use instruments like guitar or keyboard, but on the condition that they should play it themselves.
				</li><br>
				<li>
					Decision of judges will be final and binding. 
				</li><br>
			</ol>
		</ul>
		<b class="event_bold">Prize Worth</b>
			<ol><li>English: ₹ 1500</li>		
			<li>Malayalam: ₹ 1500</li>
			<li>Others: ₹ 1500</li></ol>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
				D.Bhavana:  9496295497
			</li><br>
			<li>
				Pratyush Prasun Das: 9497300063
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
