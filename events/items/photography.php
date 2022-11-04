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
		<h2 class="event_head">The Picturesque - Photography</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Photography">
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
			With every single sight, moment, whiff and touch, we wreathe an intensely personal narrative. These stories are not only a figment of our imaginations, but much close to an articulation of the world around us, as we see it. There is much more to these treasured trove of happenstances than one can do justice to, by describing them with proper words.
			<br>Photographs, as they say, speak a million words. But beyond what the cliché stands to offer, these pictures also provide a sneaky window for our own selves, to the words left unspoken, to the nostalgia buried under our sturdy conscience and to the feelings that never got articulated. <br>These colourful set of interesting geometries, created with a tender play of lights and shadows reveals much more about the photographer-- about who they were, what they are, and how they look at a life they aspire for. In retrospect, as we see it, a photograph is the figurine made up of the millionth of a moment that mattered.
			<br>So, go ahead, dive deep in retrospect, and on the path of your discovery, perhaps share with us, who you are. 
			<br>With all our earnest hearts at Dhanak 2016, we are really excited to meet you through your entries!

		</p>
		<b class="event_bold">Themes</b><br>
		<ul>
			<li>Sense of Place</li>
			<li>Travel Story</li>
			<li>Imagine If</li>
			<li>I am</li>
			<li>After Midnight</li>
			<li>Through My Mind (Double Exposure Special) </li>
		</ul><br>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
			<li>
				Each participant can submit a MAXIMUM of 3 entries in any of the mentioned themes as they deem fit (all under a single theme or multiple themes is purely the participant's choice).
			</li><br>
			<li>
				The themes are completely open to the contestant's interpretation.
			</li><br>
			<li>
				All photographs should be sent by the participant, along with your name, college name and contact details to : online.events@dhanak.co.in 
			</li><br>
			<li>
				Images submitted must be in JPEG format and at least 640 pixels on the shorter side. 
			</li><br>
			<li>
				It is mandatory that the photographs contain a proper caption (not exceeding 50 words) accompanying each picture. The images may be coloured or monochrome.
			</li><br>
			<li>
				Submitted pictures must be ORIGINAL and taken by the participant. At Dhanak, we respect photographers' copyrights and copyrights shall remain vested with the creator of the image.
			</li><br>
			<li>
				All submitted photos must contain the original EXIF metadata information. However there must be no borders, logos, copyright marks and/or references on the image.
			</li><br>
			<li>
				All photographs are to submitted strictly before 16 Oct 2016. Any entries received after that will not be considered for judgement.	

			</li><br>
		</ol>
		<b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 3000</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
				Naman Jain: 9497300125<br>
				aryannaman@gmail.com
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
