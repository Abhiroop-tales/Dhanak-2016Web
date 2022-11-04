<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<link rel="shortcut icon" type="image/x-icon" href="../img/dhanak.ico" />


	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/font-awesome.css">
  <link rel="stylesheet" href="../css/common.css">


<link rel="stylesheet" type="text/css" href="../css/team_normalize.css" />
<link rel="stylesheet" type="text/css" href="../css/team_demo.css" />
<link rel="stylesheet" type="text/css" href="../css/team_component.css" />
<script src="../js/modernizr.js"></script> <!-- Modernizr -->
  <script src="../js/jquery-1.12.2.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/nav.js" charset="utf-8"></script>
<title>Team Dhanak Retro16 !</title>


<style>
.contact-content {
	width: 100%;
	height: 100%;
	}
body {
	background-color:#ebe7e8;
}
.contact-mem {
	width: 100%;
	height:100%;
}

</style>
</head>
<body>
<?php include('../nav.php') ?>
<?php
  include("../loginModal.php");
  ?>
  <!-- SignIn/SignUp Modal ends here -->

  <!-- WIP Modal here -->
  <?php
  include("../WorkInProgressModal.php");
  ?>





	<div id="st-container" class="st-container">





		<nav class="st-menu st-effect-11" id="menu-11">

		</nav>

		<!-- content push wrapper -->
		<div class="st-pusher">


			<div class="contact-content">
				<div class="contact-mem">
								<?php include 'mems.php';?>



				</div>


			</div>


		</div>
		<!-- /st-pusher -->

	</div>
	<!-- /st-container -->

	<script>
	$("li#TeamTab").addClass("activeli");

	</script>

	<!-- no-js div -->
	<div id="GetJs" class="fullwrap">
		<div id="GetJsLogo"></div>
		<h1>JS NOT ENABLED</h1>
		<p>Please enable Javascript or use a different browser.</p>
	</div>

  <!-- WIP Modal ends here -->
</body>
</html>
