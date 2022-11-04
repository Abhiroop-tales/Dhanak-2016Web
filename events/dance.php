<?php session_start();?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- metaTags.php Here -->
  <?php
  include("../metaTags.php");
  ?>
  <!-- metaTags.php ends here -->

	<link rel="stylesheet" href="../css/normalize.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
  <link rel="stylesheet" href="../css/3Dpanelstyles.css"> <!-- Resource style -->
	<link rel="stylesheet" href="../css/nav.css">  <!-- Navbar native style -->
	<link rel="stylesheet" href="../css/common.css">
	<link rel="stylesheet" href="../css/style.css"> <!-- Resource style -->

	<script src="../js/modernizr.js"></script> <!-- Modernizr -->

	<!--Title Icon  -->
  <link rel="shortcut icon" type="image/x-icon" href="../img/dhanak.ico" />

	<title>Events</title>
</head>
<body>

	<main class="cd-main">
		<section class="cd-section dance visible">

      <main class="cd-3Dmain">
    		<header class="dance">
    			<div data-original="../img/events/_dance.jpg" class="bcg lazy">
						<div class="content">
							<h1>GROOVE | DANCE & DRAMA</h1>
						</div>
					</div>
    		</header>
				<ul class="cd-gallery">
    			<li data-original="../img/events/r_and_r.jpg" class="lazy cd-item cat-dance">
    				<a href="items/r_and_r.php">
    					<div>
								<font color="white">
	    						<h2>Rock And Roll</h2>
	    						<p>Western/Semi Classical Solo Dance</p>
								<b>View More</b>
								</font>
						 </div>
    				</a>
    			</li>

					<li data-original="../img/events/classicalDance.jpg" class="lazy cd-item cat-dance">
    				<a href="items/classicalDance.php">
    					<div>
								<font color="white">
	    						<h2>Lasya</h2>
	    						<p>Classical Solo Dance</p>
								<b>View More</b>
								</font>
						 </div>
    				</a>
    			</li>

    			<li data-original="../img/events/duetDance.jpg" class="lazy cd-item cat-dance">
    				<a href="items/duetDance.php">
    					<div>
							<font color="white">
    						<h2>Happy Feet</h2>
    						<p>Duet Dance</p>
							<b>View More</b>
							</font>

						</div>
    				</a>
    			</li>

    			<li data-original="../img/events/groupDance.jpg" class="lazy cd-item cat-dance">
    				<a class="dark-text" href="items/groupDance.php">
    					<div>
							<font color="white">
    						<h2>In Sync</h2>
    						<p>Group Dance</p>
							<b>View More</b>
							</font>

						</div>
    				</a>
    			</li>

    			<li data-original="../img/events/street_play.jpg" class="lazy cd-item cat-dance">
    				<a href="items/street_play.php">
    					<div>
							<font color="white">
    						<h2>Troupe De Theatre</h2>
								<p>Theatrical Arts</p>
							<b>View More</b>
							</font>

						</div>
    				</a>
    			</li>

          <!-- .cd-gallery -->
    		</ul>
        <!-- .cd-3Dmain -->
    	</main>

			<!-- .cd-section -->
		</section>
    <!-- .cd-main -->
	</main>

	<div id="cd-loading-bar" data-scale="1" class="index"></div> <!-- lateral loading bar -->

	<div class="cd-folding-panel-wrap">
		<div class="cd-folding-panel">

			<div class="fold-left"></div> <!-- this is the left fold -->

			<div class="fold-right"></div> <!-- this is the right fold -->

			<div class="cd-fold-content">
				<!-- content will be loaded using javascript -->
			</div>

			<a class="cd-close" href="#0"></a>
		</div> <!-- .cd-folding-panel -->
	<!--.folding-panel-wrap ends  -->
	</div>

	<!-- no-js div -->
	<div id="GetJs" class="fullwrap">
		<div id="GetJsLogo"></div>
		<h1>JS NOT ENABLED</h1>
		<p>Please enable Javascript or use a different browser.</p>
	</div>

	<!-- Navbar here -->
	<?php
	include("../nav.php");
	 ?>
	 <!-- Navbar ends here -->

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

<script src="../js/jquery-1.12.2.min.js"></script>

<!-- Side Navigation Here -->
<?php
include("side_nav.php");
 ?>
 <!-- side nav ends here -->
 <!-- script to set the selected tab -->
<script>
$("nav.cd-side-navigation ul li#DanceLi a").addClass("selected");
</script>

<!-- <script src="../js/jquery.lazyload.min.js" charset="utf-8"></script>
<script type="text/javascript">
// Lazy Loading normal images and backgrounds using lazyload.jquery.js
// <script type="text/javascript">
$("li.lazy").lazyload({
	effect : "fadeIn"
	});

$("div.lazy").lazyload({
	effect : "fadeIn"
	});

$("img.lazy").lazyload({
	effect : "fadeIn"
	});
</script> -->

<script src="../js/jquery.nicescroll.min.js"></script>
<script src="../js/velocity.min.js"></script>
<!-- Resource jQuery -->
<script src="../js/pagemain.js"></script>
<script src="../js/bootstrap.min.js" charset="utf-8"></script>
<script src="../js/nav.js" charset="utf-8"></script>

 <!-- 3D panel Resource jQuery -->
<!-- <script src="../js/3Dpanelmain.js"></script> -->
</body>
</html>
