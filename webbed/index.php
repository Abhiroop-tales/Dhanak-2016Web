<?php session_start(); 
include('../webbed/configdb_webbed.php');
?>

<!DOCTYPE html>
<html lang="en-IN" class="no-js fullwrap">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Webbed | Dhanak 2016</title>

  <!-- metaTags.php Here -->
  <?php
  include("../metaTags.php");
  ?>
  <!-- metaTags.php ends here -->

  <!--Title Icon  -->
  <link rel="shortcut icon" type="image/x-icon" href="../img/dhanak.ico" />

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/font-awesome.css">
  <link rel="stylesheet" href="../css/common.css">
  <link rel="stylesheet" type="text/css" href="../css/webbed.css">

  <script src="../js/modernizr.js"></script> <!-- Modernizr -->
  <script src="../js/jquery-1.12.2.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/nav.js" charset="utf-8"></script>

 

       
	<!-- <link rel="stylesheet" type="text/css" href="css/demo.css" /> -->
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<style type="text/css">
.rules
{
width:100%;
height:100%;
background-color:black;
color:white;
padding:5%;
opacity:0.8;
border-radius:10px;
}
</style>
</head>
<body class="fullwrap">

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

	<div class="container-fluid fullwrap">


		<div id="tabs" class="tabs fullwrap">
			<nav>
				<ul>
					<li><a href="#section-1" class="icon-shop"><span>Play</span></a></li>
					<li><a href="#section-2" class="icon-cup"><span>Rules</span></a></li>
					<?php if(isset($_SESSION['username'])): ?>					
					<li><a href="#section-3" class="icon-food"><span>Leaderboard</span></a></li>
					<li><a href="#section-4" class="icon-lab"><span>Hints</span></a></li>
					<?php endif ?>
					<!-- <li><a href="#section-5" class="icon-truck"><span>Order</span></a></li> -->
				</ul>
			</nav>
			<div class="content fullheight">
				<section id="section-1" class="fullheight">
					<div id="Intro" class="slide">
						<h1>WEBBED</h1>
					<?php 
					if(!isset($_SESSION['username'])):?>
						<button class="webbed-play-button cd-signin">Sign In To Play!</button>
					<?php endif ?>
					</div>
					<?php if(isset($_SESSION['username'])) 
					{
						$username=$_SESSION['username'];
                                                $college=$_SESSION['college'];
						$sql1 = "SELECT username,score,qno FROM webbed_score WHERE username = '$username'";
						$result1 = mysqli_query($mysqli,$sql1) or die(mysqli_error());
						if (mysqli_num_rows($result1) > 0)
							{
							while ($row = mysqli_fetch_assoc($result1))
								{	
								$score = $row['score'];
								$q = $row['qno'];
								$_SESSION['q_no']=$q;
								$_SESSION['score']=$score;
                                                                $_SESSION['q_no_display']=$score+1;
								}
							}
			
						else
							{
							$_SESSION['score']=0;
							$sql = "INSERT INTO webbed_score (username, college, score, qno) VALUES ('$username', '$college', 0, '1')";
							$result2 = mysqli_query($mysqli,$sql) or die(mysqli_error());
							$_SESSION['q_no_display']=1;
							$_SESSION['q_no']='1';
	  
							}
					}
					?>
					<!-------Div for Questions ---->
					<?php if(isset($_SESSION['username'])): ?>
						
						
	
					
						<?php
						$username=$_SESSION['username'];
						$sql1 = "SELECT username FROM webbed_ban WHERE username = '$username'";
						$result1 = mysqli_query($mysqli,$sql1) or die(mysqli_error());
						if (mysqli_num_rows($result1) > 0):
						?>
						<div class="mediabox">
                                                <img src="../webbed/images/ban.jpg" height="500" width="500">
                                                </div>
						<?php else: ?>
                                                
                                                
                                                <?php 
     if($_SESSION['q_no'] == 'split1' or $_SESSION['q_no'] == 'split2' or $_SESSION['q_no'] == 'split3' or $_SESSION['q_no'] == 'split4' or $_SESSION['q_no'] == 'split5'):?>
                                                <?php else: ?>
						<font color="white"><?php if($_SESSION['q_no_display'] == '17'): ?>
<h2>Congrats <?php echo $_SESSION['username']; ?> You Won it!</h2>
<?php else: ?>
<h2>Question <?php echo $_SESSION['q_no_display'];?> :</h2>
<?php endif ?>
</font>
						<br><br>
                                                <?php endif ?>
						<div class="mediabox">
                                                	<?php
							$qno=$_SESSION['q_no'];
							$query = "SELECT qno,question FROM webbed_questions WHERE qno = '$qno'";
							$query=mysqli_query($mysqli,$query);
							$numrows = mysqli_num_rows($query);
							if($numrows > 0)
							{
								while ($row = mysqli_fetch_assoc($query))
								{
								$qno = $row['qno'];
								$question = $row['question'];
								}
                                                                if($qno != '17')
                                                               {
								echo '<img src="'.$question.'" height="500" width="500">';
                                                               }
                                                                else
                                                               {
                                                                echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/Rk16glWoMCk" frameborder="0" allowfullscreen></iframe>';
                                                               }
							}
							?>
							
                       				</div>
							<br>
							<?php if($_SESSION['q_no'] != '17') : ?>
 
<script src="../js/w_back.js" type="text/javascript"></script>
							<div class="answerbox">
							
     <style type="text/css">
    .error_web
{
background-color:black;
}
      </style>
          <center>
       <form class="cd-form" name="webbed_registration" action="." id="webbed_registration_form" method="POST">
        <p class="fieldset">
        <input class="full-width has-padding has-border" id="webbed-ans" type="text" name="name" placeholder="Enter your answer here" required>
        <p id="ans_error" class="error_web"></p>
        <p id="webbed_notif" class="error_web"></p>
       </p>
        <p class="fieldset">
          <input class="full-width has-padding" type="submit" value="Submit" name="register">
        </p>
      </form>
							<center>
							</div>


							<?php endif ?>
						<?php endif ?>
					<!----End of questions div ---->
					<?php else: ?>
					<!----Div for description about webbed---->
					
   <div class="rules"><h2>Description</h2><hr><p>Ever had the raging desire to unravel clues and be the first to dig up long-hidden riches just begging to be found? Then look no further than the internet and a trusty device that can access it! With more twists and turns than ever, we present to you Webbed, Dhanak's online treasure hunt.</p></div>
					
					<!----end of description----->
					<?php endif ?>
				</section>

				<section id="section-2">

					<div class="rules">
                                           <h2>Description</h2><hr>
<p>Ever had the raging desire to unravel clues and be the first to dig up long-hidden riches just begging to be found? Then look no further than the internet and a trusty device that can access it! With more twists and turns than ever, we present to you Webbed, Dhanak's online treasure hunt.</p>
						
						<h2>Rules and Regulations</h2>
						<hr>
						<ul class="webbed-rules">
							<li>The event consists of a series of levels which have to be crossed by answering the questions posed with the help of clues given.</li>
							<li>The answers are words of maximum 50 lowercase alphabets and do not contain spaces or other blank characters. Numbers, if included, are to be spelled out. For example, Blink-182 should be entered as blinkoneeighttwo</li>
                                                   <li>The road to your destination contains multiple paths, each of which has an equal number of levels. Janus, the God of Choices, will meet you at crossroads to put you on your fated path. Be as honest with him as possible.</li>
                                                      <li>Webbed is a single player event. Team participation is discouraged and would lead to disqualification.</li>
                                                       <li>Any evidence of foul play would lead to disqualification.</li>
                                                        <li>Mods are Gods</li>
						</ul>
					</div>
				</section>
				<section id="section-3">
				
				<style type="text/css">
				.row1
				{
					background-color:#fec9f3;
					color:#24233d;
                                        opacity:0.8;
				}
				.row2
				{
					background-color:black;
					color:#e1ffff;
                                        opacity:0.8;
				}
				</style>
					<?php
					if(isset($_SESSION['username']))
					{
					$query = "SELECT score,username,time_stamp,college FROM webbed_score ORDER BY score DESC,time_stamp";
					$query=mysqli_query($mysqli,$query);
					$numrows = mysqli_num_rows($query);
					if($numrows > 0)
						{
						echo '<table cellspacing="0" width="95%"><tr height="40" class="row2"><td align="center"><b>Position<b></td><td align="center"><b>Name<b></td><td align="center"><b>College<b></td><td align="center"><b>Score<b></td></tr>';
						$rank=1;
						$row_color='row1';
						$r=1;
						while ($row = mysqli_fetch_assoc($query))
						{
						$score = $row['score'];
						$username = $row['username'];
						$college = $row['college'];
						echo '<tr height="35" class="'.$row_color.'"><td align="center">'.$rank.'</td><td align="center">'.$username.'</td><td align="center">'.$college.'</td><td align="center">'.$score.'</td></tr>';
						$rank=$rank+1;
						if($r==1)
							{
							$r=2;
							$row_color='row2';
							}
						else{
							$r=1;
							$row_color='row1';
							}
						}
						echo '</table>';
						}
					}
					?>
				</section>
				<section id="section-4">
					<!-- Fb Page Plugin -->
          <!-- <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fiistwebbed%2F&tabs&width=500&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="400" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true">
          </iframe> -->
					<div class="fb-page" data-href="https://www.facebook.com/iistwebbed/" data-tabs="timeline,messages" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/iistwebbed/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/iistwebbed/">Webbed</a></blockquote></div>
				</section>

				<!-- <section id="section-5">
					<div class="mediabox">
						<img src="img/02.png" alt="img02" />
						<h3>Radish Tomato</h3>
						<p>Catsear cauliflower garbanzo yarrow salsify chicory garlic bell pepper napa cabbage lettuce tomato kale arugula melon sierra leone bologi rutabaga tigernut.</p>
					</div>
					<div class="mediabox">
						<img src="img/06.png" alt="img06" />
						<h3>Fennel Wasabi</h3>
						<p>Sea lettuce gumbo grape kale kombu cauliflower salsify kohlrabi okra sea lettuce broccoli celery lotus root carrot winter purslane turnip greens garlic.</p>
					</div>
					<div class="mediabox">
						<img src="img/01.png" alt="img01" />
						<h3>Red Tofu Wrap</h3>
						<p>Green horseradish azuki bean lettuce avocado asparagus okra. Kohlrabi radish okra azuki bean corn fava bean mustard tigernut wasabi tofu broccoli mixture soup.</p>
					</div>
				</section> -->
			</div><!-- /content -->
		</div><!-- /tabs -->

	</div>

	<script>
	//setting the active tab on dhanaknav
	$("li#EventsTab").addClass("activeli");
	</script>

	<script src="../webbed/js/cbpFWTabs.js"></script>
	<script>
		new CBPFWTabs( document.getElementById( 'tabs' ) );
	</script>

	<!-- FB javascript SDK -->
	<!-- ============================================================================ -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_IN/sdk.js#xfbml=1&version=v2.7";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!-- ================================================================================= -->



</body>
</html>
