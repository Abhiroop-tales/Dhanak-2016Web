<!DOCTYPE html>
<html lang="en" class="no-js fullwrap">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Workshops | Dhanak 2016</title>

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
  <link rel="stylesheet" href="../css/workshops.css">


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
				<h1>Indian Traditional Painting Workshop</h1>
				<a id="workshop-register-button" class="btn btn-default">Register for Workshop</a>
				<p>
					Indian traditional art, a layered world, where themes and styles are carried on through centuries. In contrast to the Western world of 'celebrity' artists whose works sell for millions, the anonymous Indian craftsman was humble and devoted. Yet much that has survived through the ages, shows not only drawing skills, but also displays the ancient Indian genius that transcends normal notions of space and time and defies conventional Western categories like realist, impressionist, modernist. The subject matter draws from mythology and folklore, as well as contemporary historical events.
				</p>
				<p>
					The workshop will have a small introductory talk followed by an all day practical session.
					Materials will be provided.
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
	$("li#WorkshopsTab").addClass("activeli");
</script>

</body>
</html>
