<?php session_start(); ?>
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
	<script>
	function showHint(str) {
		if (str.length == 0) {
				document.getElementById("txtHint").innerHTML = "";
				return;
		} else {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
								document.getElementById("txtHint").innerHTML = this.responseText;
						}
				};
				xmlhttp.open("GET", "gethint.php?q=" + str, true);
				xmlhttp.send();
		}
	}
	</script>
	<style rel="stylesheet" type="text/css">
	.search_results
	{
	width:70%;
	margin:auto;
	border:1px solid gray;
	}
	</style>
	<main class="cd-main">
		<section class="cd-section index visible">
      <div class="index-content">

				  <br><br><br>
          <h3>Search for your favourite event below - </h3>

				  <form action="results.php" method="post">
					 <input type="text" name="input" size="50" onkeyup="showHint(this.value)" required>
					 <p><span id="txtHint"></span></p>
					 <br>
					 <input type="submit" value="Search" name="search">
					</form>

          <br><br>
				  <div class="search_results">
					  <?php

							if(isset($_SESSION['search_word']))
							{
								if(!isset($_SESSION['search_results']))
								{
									$word=$_SESSION['search_word'];
									echo 'Results found for '.$word.'!';
									$x=1;
									while($_SESSION['title'.$x])
									{
										$title=$_SESSION['title'.$x];
										$description=$_SESSION['description'.$x];
										$link=$_SESSION[$x]['link'.$x];

										echo '<h2><a href="'.$link.'">'.$title.'</a></h2>';
										echo '<p>'.$description.'</p>';
										echo '<br>';
										$x=$x+1;
									}

									$y=1;
									while($_SESSION['title'.$y])
									{
										unset($_SESSION['title'.$y]);
										unset($_SESSION['description'.$y]);
										unset($_SESSION['link'.$y]);
										$y=$y+1;
									}
								}
								else
								{
									$result=$_SESSION['search_results'];
									echo '<p>'.$result.'</p>';
									unset($_SESSION['search_results']);
								}
								unset($_SESSION['search_word']);
							}

						?>

				  </div>
      </div>
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
$("nav.cd-side-navigation ul li#IndexLi a").addClass("selected");
</script>

<!-- <script src="../js/jquery.lazyload.min.js" charset="utf-8"></script> -->
<script src="../js/jquery.nicescroll.min.js"></script>
<script src="../js/velocity.min.js"></script>
<!-- Resource jQuery -->
<script src="../js/bootstrap.min.js" charset="utf-8"></script>
<script src="../js/nav.js" charset="utf-8"></script>
<script src="../js/pagemain.js"></script>

 <!-- 3D panel Resource jQuery -->
<!-- <script src="../js/3Dpanelmain.js"></script> -->
</body>
</html>
