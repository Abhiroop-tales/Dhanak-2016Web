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
		<h2 class="event_head">In Sync - Group Dance</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Group Dance">
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
			Dancing is the loftiest, the most moving, the most beautiful of the arts, because it is no mere translation or abstraction from life; it is life itself. It is a chance to live your truth, express your emotions and share your enthusiasm.
			<br>The poet is not the poem, the sculptor is not the sculpture, the musician is not the music but the dancer is the dance. So come and BE THE DANCE…!! 
			<br>To dance is to be out of yourself. Larger, more beautiful, more powerful. This is power, it is glory on earth and it is yours for the taking. Do you think you can win the world using your grace? Then form your groups….


		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
			<li>
				5-12 members per group are allowed. 
			</li><br>
			<li>
				Duration: 8+2 minutes (including setup and clearance time).
			</li><br>
			<li>
				Use of props is permitted. The time limit should be strictly adhered to. Teams shall be penalized by judges for not doing so.
			</li><br>
			<li>
				Participants are free to dance in more than one style.
			</li><br>
			<li>
				Pre-recorded music should be brought on a CD/DVD or a pendrive in .cda or .mp3 format ONLY.
				<br>(other formats may not be supported by the computer – use them at your own risk). 
			</li><br>
			<li>
				It is the responsibility of the participants to ensure that the CD or pen drive containing the sound track with the name of the college written on it is submitted two hours prior to the commencement of event.
			</li><br>
			<li>
				Any kind of fluid or flame is not allowed on stage.
			</li><br>
			<li>
				Obscenity of any kind will lead to immediate disqualification.
			</li><br>
			<li>
				The decision of the judges shall be final and binding.
			</li><br>
			<li>
				No common members are allowed between different groups.
			</li><br>
			<li>
				Any number of teams from each college is allowed.
			</li><br>
			<li>
				Judgement criteria:
				<ul>
					 <li>Facial expressions and body language. </li>
					<li>Creativity in dances will gain extra credits.</li>
					 <li>Footwork, hand and eye movement. </li>
					<li>Costume and presentation. </li>
					<li>Synchronization between group members. </li>
					<li>Choreography (technical nuances).</li>
					 <li>Overall clarity and impact .</li>
					<li>Chemistry with the music.</li>
				</ul>
			</li><br>
			
		</ol>
		<b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 24000</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
			Gemi: 9497821061
			</li><br>
			<li>
			Ayisha: 9447083602
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
