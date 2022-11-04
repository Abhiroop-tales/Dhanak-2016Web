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
		<h2 class="event_head">Channel Surfing</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Channel Surfing">
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
			*TV on*  "And Gambhir goes for the ball"  *switch*  "A Lannister always pays his debts" *switch* "kyunki saas bhi kabhi bahu thi…" *switch* "Topper TV: how to crack JEE 16?" 
			<br>
			Confused? How best do you think you can mimic the TV? Enact out as a group, the channels that play on TV, as given by the moderator! Switch from channel to channel and be as spontaneous as possible!
		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol >
		
			<li>
				The moderator will start off from a particular T.V. channel, which you enact out.
			</li><br>
			<li>
				While the team performs, the mod can ask you to do any one of the following:
			</li><br>
			<ul style = "list-style-type:circle solid">
				<li>
					Switching channels: The name of a channel (any English/regional channel) will be given and the teams should enact what is telecast in that channel.
				</li><br>
				<li>Zoom in / zoom out: Teams can move forward/backward accordingly.
				</li><br>
				<li>
					Fast forward, rewind, pause, play, slow motion.
				</li><br>
				<li>
					Mute, unmute.
				</li><br>
				<li>
					Scan: Teams should go on switching channels continuously.
				</li><br>	
				<li>
					Volume up/ volume down.
				</li><br>
			</ul>	
			<li>
					Each team should consist of 4-6 members only.
			</li><br>
			<li>
					Each team will be given a maximum of 5 minutes (extra in case a tie break situation arises) on stage. No prep time.
				</li><br>
				<li>
					Teams will be judged on the basis of spontaneity, humour, relevance and clarity.
				</li><br>
			
		</ol>
		 <b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 3500</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
			Swetha Sakunthala: 9497228783
			</li>
			<br><li>
			Shubham Aghao: 9497300057
			</li>
			<br><li>
			Prajjwal Yash: 9497300417
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
