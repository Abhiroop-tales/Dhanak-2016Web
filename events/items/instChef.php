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
		<h2 class="event_head">Insta Chef</h2>
		<br>
		<!----Event Register---->
		<center>
		<input type="hidden" id="eventname" value="Insta Chef">
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
			A perfectly prepared dish does not only satisfy the taste buds but is a feast for the eyes and captivates with its aroma. So here’s your chance to explore your creativity and bring life to a soul-less recipe.
			<br>(P.S. Recipes are just guides. You can be more adventurous while cooking)

		</p>
		<b class="event_bold">Rules and Regulations</b>
		<ol>
			<li>
				<b>PRELIMINARY ROUND: TASTE TEST:</b> groups of 2-3 people.
				<br>A pre-cooked food item will be provided and the participants have to identify all possible ingredients within 20 minutes. 

			</li><br>
			<li>
				<b>FINAL ROUND: READY, STEADY..COOK! </b>
				<br>Participants will be provided with ingredients out of which they can select whatever they require for their recipe within 15 minutes after which they will not be allowed to take anything more. They will have to prepare the dishes from the selected items without the use of stove. Necessary equipments shall be provided. The event will last for 1 hour (excluding the time for selection of ingredients). 
			</li><br>
			<li>
				Judging criteria- points will be given on the basis of taste, presentation and the creativity of the dish.
			</li><br>
		</ol>
		<b class="event_bold">Prize Worth</b><br><br>
			<ul><li>₹ 3000</li></ul><br>
		<b class="event_bold"> Contacts</b>
		<ul list-style-type=circle;>
			<br><li>
				Lipi Roy: 9497300130
			</li><br>
			<li>
				Nayan Rawat: 9497300197
			</li><br>
			<li>
				Surabhi: 9497300366
			</li><br>
		</ul>
	</div>
</body>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>
