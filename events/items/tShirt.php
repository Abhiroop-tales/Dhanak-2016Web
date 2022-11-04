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
		<h2 class="event_head">Blank Space: T-Shirt Painting</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="T-Shirt Painting">
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
			Paint it red, paint it right. Challenge the black and white! Dhanak 2k16 brings to you the chance to unravel your creativity and showcase your talents, while transforming and reinventing retro style! Here’s an event where you can design your own T-Shirt to compete with the upcoming branded ones. 
		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
			<li>
				The topic will be announced on spot, accordingly each team has to design a T-Shirt.
			</li><br>
			<li>
				The team can consist maximum of two individuals. 
			</li><br>
			<li>
				A white round necked T-Shirt and paints will be provided.
			</li><br>
			<li>
				
Specific equipment, brought by the contestants, can only be used with prior approval of the organizers.

			</li><br>
			<li>
				It is an on the spot event. 
			</li><br>
			<li>
				No additional T-Shirts will be provided. 
			</li><br>
			<li>
				Artwork is permitted only on one side of the T-Shirt. 
			</li><br>
			<li>
				External sources of design, such as gadgets and printouts in any form are not allowed.
			</li><br>
			<li>
				Readymade material, glitter or any collage are not allowed.	
			</li><br>
			<li>
				The designs will be judged on creativity, color scheme and originality. 
			</li><br>
			<li>
				The decision of judges is final. 
			</li><br>
		</ol>
		 <b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 2500</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
				Jigyasa: 8826089292
			</li><br>
			<li>
				Rashmi: 9497300256
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
