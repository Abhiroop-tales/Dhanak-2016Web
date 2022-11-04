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
		<h2 class="event_head">Ship Wreck</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Ship	Wreck">
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
			Here is a chance to showcase how convincingly selfish you can be!
			<br>So....
			<br>You are travelling on a ship which is about to sink...and damn. There is only one lifejacket and you obviously want to live. This event basically involves you convincing the captain to choose your life over the others. <br>All participants will be divided into five genres. For example arts, literature, sports etc. Each participant would be given the role of a famous personality in the given field. And so by your life, we mean the life of the famous personality given to you. 

		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
		
			<li>
				Each participant will be allotted the genre and the personality on the spot.
			</li><br>
			<li>
				All participants will be given a total of three minutes to read.
			</li><br>
			<li>
				After reading the article, each participant has to defend his/her personality and justify why they should be saved.
			</li><br>
			<li>Questions will be asked randomly depending upon their performance.
			</li><br>
			<li>
				Innovation is always welcome!!!!
			</li><br>
			<li>
				One person amongst the group will be chosen for the next round.
			</li>
		</ol>
		 <b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 2500</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
			Kaninika: 9497300467	
			</li><br>
			<li>
			Sayli: 9497300440	
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
