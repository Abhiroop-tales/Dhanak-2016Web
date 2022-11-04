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
		<h2 class="event_head">Debate</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Debate">
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
			 "In all debates, let truth be thy aim, not victory, or an unjust interest." ―  William Penn 
			<br>Are your ideas bulletproof? Can they hold their own against a constant onslaught of offense? Test your mettle in the battlefield of the intellectuals in the Debate competition.
			<br>So, THINK, COMMUNICATE, DEBATE.
		</p>
		
		<b class="event_bold">Format</b>
		<ol>
		
			<li>
				There will be two rounds: Preliminary rounds, followed by the finals. The no. of teams in the finals will be decided based on the no. of participants.
			</li><br>
			<li>
				The topics for the debate will be provided in due time.
			</li><br>
			<li>
				Proposition and opposition teams each consist of TWO debaters each.
			</li><br>
			<li> <b>For Prelims:</b> <br>Each team gets 2 minutes to present his/her motion. The First speaker from the Proposition talks FOR the motion and then the First speaker from the Opposition gives his /her stance.
			</li><br>
			<li><b>For Finals:</b>
				<br>Each team gets 3 minutes to present his/her motion. The First speaker from the Proposition talks FOR the motion and then the First speaker from the Opposition gives his /her stance.
				<br><br>
				 Then the house is open to a five minute cross questioning period when the teams can question each other’s motions. This is an open round strictly controlled by the moderator. 
				 <br><br>
				 Then there is a five minute judge’s round where the judges may present questions to any speaker. 
				 <br><br>
				 This is followed by a five minute questioning round for the audience, where questions may be presented to either team, again according to the moderator’s discretion. 
				 <br><br>
				 The finals will include an “Elevator Pitch” round at the end, where 1 minute is given to both teams to wrap up the topic with respect to their motion and must convince the judges that they are right. 
			</li><br>
			
		</ol>
		
		
		
		<b class="event_bold">Rules and Regulations</b>
		<ol>
			<li>
				Participants are allowed to carry research papers along with notepads to write down important points. 
			</li><br>
			<li>
				Electronic gadgets such as Laptops, Mobile Phones, PDA’s and other instruments can be carried along, but use of internet is STRICTLY NOT ALLOWED.
			</li><br>
			<li>
				Participants are requested to maintain decorum, and will be penalized if found guilty of using Un-Parliamentary and colloquial language. 
			</li><br>
			<li>
				Participants are requested to stick to the time limit mentioned above to avoid being penalized.
			</li><br>
			<li>
				Participants must at all times adhere to the Moderator’s discretion of the event’s proceedings.
			</li><br>
		</ol>
		 <b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 3000</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
			Mukhtar: 9497300213
			</li>
			<br><li>
			Ajay: 9497300447
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
