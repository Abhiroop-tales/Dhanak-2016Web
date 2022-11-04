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
		<h2 class="event_head">The Story in You - Story Writing</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Story Writing">
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
			Every one of us is a story.
			<br>These stories may have genres as varied as one can imagine- romantic, comedy, tragedy, drama, thriller, mystery and mostly an iridescent coalescence of all of these, with characters of all sorts - some white, some black and most grey. 
			<br>But all these stories have one thing in common – with all your imperfections, you are the hero of your story; each one of us is entitled to that joy. No matter how feeble others may feel it to be, this story is all we have of ourselves- the thread through all our consciousness, the legacy of our very existence; and each day we are building on it, knowingly or unknowingly, but in our most significant way in this insignificance- the universe, are we breathing eternity through our character.
			<br>Can one imagine a better world than that in which every human’s story is someone's favourite?	

		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
			<li>
				The submissions should be made to the following e-mail id with subject and a scanned copy of valid ID : online.events@dhanak.co.in 
			</li><br>
			<li>
				Your entry must be original in English.
			</li><br>
			<li>
				Categories : - Genre Short Story (Mystery, Romance, Horror, etc.) - Mainstream/Literary Short Story - Children’s/Young Adult Fiction
			</li><br>
			<li>
				Max word count : 800 words.
			</li><br>
			<li>
				Only one entry is allowed per person.
			</li><br>
			<li>
				The deadline date for entries is 12 midnight on Sunday 16th October 2016.
			</li><br>
			<li>
				The filename of online entries must be the title of the entry and it must be either a .doc, .docx .pdf or .txt file. 
			</li><br>
			<li>
				The judges’ decision is final and no individual correspondence can be entered into. 
			</li><br>
			<li>
				SUBMISSION OF ENTRY IMPLIES ACCEPTANCE OF ALL THE RULES. FAILURE TO COMPLY WITH THE RULES MAY RESULT IN DISQUALIFICATION.
			</li><br>
		</ol>
		<b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 1500</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>Prajjwal Yash – 9497300417
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
