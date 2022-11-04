<!DOCTYPE html>
<html lang="en" class="no-js fullwrap">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Exhibitions | Dhanak 2016</title>

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
  <link rel="stylesheet" href="../css/exhibitions.css">


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
				<h1>Sci-Factory</h1>
				<p>
					Dhanak presents SCI FACTORY, an open exhibition highlighting the works of NRSC and VSSC, two of the finest scientific research institutions of our country under the patronage of ISRO.
				</p>
				<p>
					Vikram Sarabhai Space Centre (VSSC) is a major centre of ISRO where design and development activities of satellite launch vehicles and sounding rockets are carried out and made ready for launch operations.
				</p>
				<p>
					National Remote Sensing Centre (NRSC) remote sensing satellite data acquisition and processing, aerial remote sensing and decision support for disaster management.
				</p>
				<p>
					Contact :
					<ul>
						<li>Jaykrishnan 94001 38206</li>
						<li>Niwashini 94463 85636</li>
					</ul>
				</p>
				<img src="../img/exhibitionposter.jpg" alt="Exhibitions Poster" />
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
	$("li#ExhibitionsTab").addClass("activeli");
</script>

</body>
</html>
