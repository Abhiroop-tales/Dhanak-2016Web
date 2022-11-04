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
		<h2 class="event_head">Raag Milan - Duet Singing</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Raag Milan - Duet Singing">
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
			When words fail music speaks.
			So this Dhanak, Hit the stage with your buddy, Bring out your grooviness, Immerse the world into your symphony. 
			<br>“Take that rage, put it on a page, take the page to the stage, blow the roof off the place”. 
		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
			<li>
				There will be only ONE round (On Stage)
			</li><br>
			<li>
				Each team must consist of exactly two members (Male – Female, Male – Male, Female- Female).
			</li><br>
			<li>
				Contestants are free to choose songs (Single or Fusion..).
			</li><br>
			<li>
				Songs could be either in HINDI or ENGLISH.
			</li><br>
			<li>
				For background music, participants can either play their own instruments (should be brought by the participants themselves) or should get the proper karaoke for the song they want to perform. Suppression of voices from the original track will NOT be allowed.(The karaoke should be given to the event organisers 2hours prior to the commencement of the event preferably in a pen drive.) 
			</li><br>
			<li>
				Each participant is restricted to one team only.
			</li><br>
			<li>
				Performance should not exceed 4 min. Exceeding the limits will result in deduction of points.
			</li><br>
			<li>
				Judges’ Decisions can't be contested.
			</li><br>
		</ol>
		 <b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 2000</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
				Manish Chauhan: 9497300010	
			</li><br>
			<li>
				Namya Gupta: 9573901331
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
