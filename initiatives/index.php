<!DOCTYPE html>
<html lang="en" class="no-js fullwrap">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Social Cause | Dhanak 2016</title>

  <!-- metaTags.php Here -->
  <?php
  include("../metaTags.php");
  ?>
  <!-- metaTags.php ends here -->

  <!--Title Icon  -->
  <link rel="shortcut icon" type="image/x-icon" href="../img/dhanak.ico" />

	<link rel="stylesheet" href="../css/normalize.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/font-awesome.css">
  <link rel="stylesheet" href="../css/common.css">
  <link rel="stylesheet" href="../css/initiatives.css">


  <script src="../js/modernizr.js"></script> <!-- Modernizr -->
  <script src="../js/jquery-1.12.2.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
  <script src="../js/nav.js" charset="utf-8"></script>


</head>

<body class="fullwrap">
  <!-- nav.php starts here -->
  <?php
  include("../nav.php");
  ?>
  <!-- nav.php ends here -->

	<div class="below-layer fullwrap"></div>
	<main id="Content" class="fullwrap">
		<div class="bcg slide" class="fullwrap">
			<div class="content" class="fullwrap">
				<h1>Social Initiatives by Dhanak 2016</h1>
				<p>
					Dhanak being one of the most popular college cultural festivals in the country with participation in thousands from across the nation, we, Team Dhanak, believe that with such a massive scale of event management and organization involving huge expenditure, comes a responsibility to contribute to the development of our society.
				</p>
				<p>
					Every Dhanak has had social initiatives associated with it. For instance, Nirmaan - an entirely student organized movement to teach school students having inadequate resources. It has been a huge success and  school children come to our campus for all-round tutoring and development even two years after its conceptualization.
				</p>
				<p>
					This Dhanak, we are adopting a tribal school in the vicinity and trying to improve its infrastructure in whatever way we can. These are schools where well-equipped labs or even a single desktop PC are a distant dream. To raise funds for the same, we are having a raffle ticket sale (lucky draw) for students, staff and alumni of our institute. A part of the proceeds of the profit will go into the infrastructure development of this school.
				</p>
			</div>
		</div>
	</section>

  <!-- SignIn/SignUp Modal here -->
	<?php
	include("../loginModal.php");
	?>
	<!-- SignIn/SignUp Modal ends here -->

	<!-- WIP Modal here -->
	<?php
	include("../WorkInProgressModal.php");
	?>
	<!-- WIP Modal ends here -->

	<!-- WIP Modal here -->
	<?php
	include("../TCFModal.php");
	?>
	<!-- WIP Modal ends here -->

<script>
	//this highlights the workshops tab
	$("li#InitiativesTab").addClass("activeli");
</script>

</body>
</html>
