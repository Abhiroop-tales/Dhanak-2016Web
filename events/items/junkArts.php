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
		<h2 class="event_head">Parinati- Junk Art</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Junk Art">
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
			Do you possess the audacity to break the limits of creativity and resourcefulness? Then come along, join us in Parinati -transformation- of trash into treasure. Let your imagination run wild; it carries you to worlds that never were. 
		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
			<li>
				A team can consist of maximum three members.
			</li><br>
			<li>
				The theme will be disclosed on the spot.
			</li><br>
			<li>
				A heap of junk of the same items will be provided to each team.
			</li><br>
			<li>
				The teams will be allowed to break or deform the items as per requirement.
			</li><br>
			<li>
				Use of mobile phones is strictly prohibited.
			</li><br>
			<li>
				During the judgement, teams will not be allowed to touch their exhibits.
			</li><br>
			<li>
				Time limit: 2 hours 
			</li><br>
			<li>
				Judgement criteria:
				<ul>
					 <li>Originality.</li>
					<li>Presentation.</li>
					 <li>Maximum utility of the junk provided.</li>
					<li>Connection to the theme.</li>
				</ul>
			</li><br>
			
		</ol>
		<b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 2500</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
			Sneha Gem Mathew: 9497071826
			</li><br>
			<li>
			Anusha K.S: 7559829390 
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
