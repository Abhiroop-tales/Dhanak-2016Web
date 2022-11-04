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
		<h2 class="event_head">TAKE 16! - Movie Making</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Movie Making">
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
			'Pain is temporary, film is forever' -  John Milius
			<br>Movie making is an idea fleshed out into a visible script. 
			<br>Dhanak2k16 gives you the platform to unleash your thoughts and explore your passions . The competition is open to innovative, entertaining, and celebratory short films. Lights, Camera, Shoot!

		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
			<li>
				The overall theme should, preferebly, be retro.
			</li><br>
			<li>
				Time limit : maximum 15 minutes - including titles and credits.
			</li><br>
			<li>
				The film can be in any language but must have English subtitles.
			</li><br>
			<li>
				Obscenity and vulgarity of any kind will lead to immediate disqualification.
			</li><br>
			<li>
				Copying of video clips from other movies or videos is not permitted.
			</li><br>
			<li>
				Judging will be based on script, sound design, camera skills, direction, editing, and
acting.
			</li><br>
			<li>
				The decision of judges will be final and binding.
			</li><br>
			<li>
				All the entries should be mailed to the online.events@dhanak.co.in along with your Name, a scan of valid college ID and Contact Details, by 16 Oct 2016.
			</li><br>
			<li>
				If the file is too large to attach in mail, you can use any other alternative methods.(Google Drive/Dropbox).
			</li><br>
		</ol>
		<b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 5000</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>Abhrajit: 9446247204
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
