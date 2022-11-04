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
		<h2 class="event_head">Crime Scene</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Crime Scene">
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
			Agent X, these are difficult times, there’s no denying. You know my methods; when you have eliminated the impossible, whatever remains, however improbable, must be the truth. Participate and let the mysteries unfold. Generate the best fitted theory which explains the single truth of the mystery that seduces the intellectual. You may need help, for it may take more than one to travel down the twisted paths. There will be multiple paths many of them misleading you away from the truth.
			
			There would be two missions:
			<br><b>Objective 1</b>: A question paper and a task will be given to complete within given time period. <br><b>Objective 2</b>:  A clue based task in which you have to deduce the way crime was done by observing the crime scene and hidden connections. So, Look. Observe. Solve.


		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
		
			<li>
				Maximum three agents per team. 
			</li><br>
			<li>
				Only 5 teams will be hired for solving the actual crime.
			</li><br>
			<li>
				Evaluation would be based on the creativity and closeness to the real solution of problem.
			</li><br>
			<li>
				In case of conflict, decision of the Commanders would be final.
			</li><br>
		</ol>
		<b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 2000</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
				Savit Anantaram : 9497300325
			</li><br>
			<li>
				Pranav : 9497300161
			</li><br>
			<li>
				Chinmay                  :9497300121
			</li>
			<br>
			<li>
				Sairam: 9497300145
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
