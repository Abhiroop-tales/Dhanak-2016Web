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
		<h2 class="event_head">Comic Strip</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Comic Strip">
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
			Blend together the fragrance of humour and the fire of strength and create your own
			new world of mystery, action, comedy and make others travel into your world and
			enjoy. This dhanak create amazing comics and win exciting prizes!!!
		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
		
			<li>
				The strip can have minimum of 3 and maximum of 10 panels.
			</li><br>
			<li>
				The comic strip should be in a jpeg format.
			</li><br>
			<li>
				Strip can also be a scanned copy in the above mentioned format
			</li><br>
			<li>
				The entries will be received till 18th october upto 1500 hrs and winners will be decided
				on 19th october by 2100 hrs.	
			</li><br>
			<li>
				Strip can be coloured or black and white but the dialogues should be easily readable.
			</li><br>
			<li>
				All the entries should be mailed to the comicstrip@dhanak.co.in along with your
				Name, College and Contact Details.
			</li><br>
		</ol>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
			</li><br>
			<li>
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
