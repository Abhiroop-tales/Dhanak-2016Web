<?php session_start(); ?>
<!DOCTYPE html>
<html class="no-js fullwrap" lang="en-IN">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <!-- metaTags.php Here -->
  <?php
  include("metaTags.php");
  ?>
  <!-- metaTags.php ends here -->


  <title>Dhanak 2k16 | IIST</title>

  <!--Title Icon  -->
  <link rel="shortcut icon" type="image/x-icon" href="img/dhanak.ico" />

  <!-- Modernizr script needs to be here so that the no-js changes to js as soon as possible. Otherwise loader appears late -->
  <script src="js/modernizr.js" charset="utf-8"></script>

  <!-- STYLES -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/TimeCircles.css">

  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/main.css">

  <style>
  /*Loading Screen*/
  /*================================================================*/
  .no-js #loader
   {
     display: none;
   }
  .js #loader
   {
     position: fixed;
     left: 0px;
     top: 0;
     z-index: 9999;
     background: url("img/Preloader_2.gif") center no-repeat #fff;
   }
  /*=====================================================================*/

  .text_display{
	  width:40%;

	  color:white;
	  font-size:16px;
  }
  .text_display p
  {
	color:white;
	  font-size:16px;

  }
  </style>



</head>

<body class="fullwrap">

  <!-- Loading Screen -->
  <div id="loader" class="fullwrap"></div>

  <!-- PromoVideo Modal -->
  <div class="modal fade fullwrap" id="promo-modal" role="dialog">
    <div class="modal-dialog slide">
      <!-- Modal content-->
      <div class="modal-content slide">
        <div class="modal-body fullwrap">
          <iframe src="https://www.youtube.com/embed/QKb-694D-OA" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen">
          </iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <!-- End of Promo Video Modal  -->

  <script type="text/javascript">
    $('#promo-modal').modal({ show: false});
  </script>

  <!-- The Splash Animation happens through this div -->
  <div id="Logo"></div>

  <!-- revealAbout Section Here -->
  <?php
  include("revealAbout.php");
   ?>
   <!-- revealAbout ends here -->


  <main id="main" class="fullwrap">

    <!-- Vertical NavBar for scroll Items -->
    <nav class="cd-vertical-nav">
    	<ul>
    		<li><a href="#Cover" class="active"><span class="label">Home</span></a></li>
    		<li><a href="#About"><span class="label">About Us</span></a></li>
        <li><a href="#Filler"><span class="label">Retro Fun</span></a></li>
        <li><a href="#Checkout"><span class="label">Checkout</span></a></li>
        <li><a href="#sponsors"><span class="label">Sponsors</span></a></li>
    		<li><a href="#Contact"><span class="label">Contact Us</span></a></li>
    		<li><a href="#map"><span class="label">Find Us</span></a></li>
    	</ul>
    </nav><!-- .cd-vertical-nav -->

    <!-- Nav button on small screens -->
    <!-- <button class="cd-nav-trigger cd-image-replace">Open navigation<span aria-hidden="true"></span></button> -->

    <section id="Cover" class="fullwrap ">


  		<!---- For displaying after accmodation yes ---->
  		<?php
  		$yes='yes';
  		if(isset($_SESSION['accomodation']) == $yes): ?>

        <script>
        $("#activation-modal").modal();
        </script>

        <!--accomodation yes  modal  -->
        <div class="modal fade" id="accomodation-yes-modal" role="dialog">
            <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <p>How do you want to pay for Accomodation?</p>
                  <button id="pay-offline" data-dismiss="modal">Pay Later at College</button>
                  <button id="pay-online"><a href="http://www.thecollegefever.com/events/dhanak" target="_blank">Pay Online Now</a></button>
                  <br><br>
                  <p>N.B. <br>1. Pay Online through The College Fever <br>2. Hospitality Details available here - <a href="Dhanak_Hospitality.pdf">Dhanak Hospitality PDF</a> </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
        </div>

  		<?php unset($_SESSION['accomodation']); ?>
  		<?php endif ?>
  		<!------ end of resultant text --->

      <div class="bcg slide">

        <!-- IIST Logo -->
        <a href="http://www.iist.ac.in" target="_blank">
          <div class="IISTLogo"></div>
        </a>

        <!-- Dhanak Title -->
        <div class="title">
				  <div class="letter">
            <p>D</p>
          </div>
          <div class="letter">
            <p>H</p>
          </div>
          <div class="letter">
            <p>A</p>
          </div>
          <div class="letter">
            <p>N</p>
          </div>
          <div class="letter">
            <p>A</p>
          </div>
          <div class="letter">
            <p>K</p>
          </div>
          <div class="date">
            <p>October 21-24 <br> 2016</p>
          </div>
        </div>

        <div class="fixed-side-panel">
          <div class="hospi-button" style="position:relative;">
            <a href="Dhanak_Hospitality.pdf" target="_blank"><img src="img/hospi.png"></a>
          </div>

          <a href="../Dhanak_2016_Repo/webbed" target="_blank" class="btn btn-default webbed-link-button">
            WEBBED <br> Update: Mahesh Punna <br> has won <br> Congo from the <br> Dhanak Team!
          </a>
        </div>

        <!-- Scroll Down Button Here -->
        <div id="sdb">
          <a href="#About">
            <span></span>
          </a>
        </div>

        <!-- Navbar here -->
        <?php
        include("nav.php");
         ?>
         <!-- Navbar ends here -->

         <style>
         div.fixed-side-panel{
           position: absolute;
           top:2%;
           left:2%;
         }
         div.hospi-button{
           position: relative;
           margin-bottom: 1rem;
         }
         a.webbed-link-button{
            display: block;
            position:relative;
            /*top:50%;*/
            /*left:2%;*/
           /*border-radius: 50%;*/
           /*padding:*/
         }
         a.webbed-link-button{
           /*width:0%;*/
           /*height:30%;*/
           text-align:center;
           font-size: 1.5rem;
           font-family: "Bacon",sans-serif;
           font-weight: lighter;

           background:transparent;
           color:white;

           border-radius:3px;
           /*border:0.5rem solid white;*/
           outline:none;

           transition:0.3s all ease;
         }
         a.webbed-link-button:hover{
           background:#FF9800;
           color:white;
           -webkit-transform:scale(1.05);
           transform:scale(1.05);
           /*box-shadow: 0 0 1.5px 3px aliceblue;*/
           transition:0.3s all ease;
         }
         a.webbed-link-button:active{
           background:#FF9800;
           color:white;
           -webkit-transform:scale(0.9);
           transform:scale(0.9);
         }
         a.webbed-link-button:focus{
           background:#FF9800;
           color:white;
         }
         a.webbed-link-button:visited{
           background:transparent;
           color:white;

         }
         @media screen and (max-width:400px)
         {
           .title p{
             font-size: 3.5rem;
           }
           div.fixed-side-panel{
             position: relative;
             text-align: center;
           }
           div.hospi-button{
             display: inline;
             margin: 0;
             margin-right: 10%;
           }
           a.webbed-link-button{
             font-size: 1.5rem;
             display: inline-block;
           }
         }
         </style>


      </div>
    </section>

    <!-- About Section here -->
    <?php
    include("about.php");
     ?>
     <!-- About Section here -->

    <section id="Filler" class="fullwrap ">
      <div data-original="img/filler.jpg" class="lazy bcg slide"
        data-bottom-top="background-position:50% 100px;"
        data-center="background-position: 50% 0px;"
        data-top-bottom="background-position: 50% -100px;"
        data-anchor-target="#Filler"
      >
        <div class="filler-text">
          <!-- <p>That's one small tune for a man,</p>
          <p>one universal rhythm for mankind</p> -->
        </div>
      </div>
    </section>

    <!-- Checkout here -->
    <?php
    include("checkout.php");
     ?>
     <!-- Checkout ends here -->

    <section id="team-pic" class="fullwrap ">
      <div data-original="img/team-pic.jpg" class="bcg slide lazy"
        data-bottom-top="background-position:50% 100px;"
        data-center="background-position: 50% 0px;"
        data-top-bottom="background-position: 50% 0px;"
        data-anchor-target="#team-pic"
      >
        <div class="content"

        >
        <!-- data-20p-top-bottom="transform:translate(0,0%);opacity:1;" -->
          <h2
            data-bottom-top="transform:translate(0,200%);opacity:0;"
            data-center="transform:translate(0,0%);opacity:1;"
            data-anchor-target="#team-pic"

          >The Superheroes Behind This Dhanak!</h2>
            <a href="/Dhanak_2016_Repo/team" target="_blank"><button>The Team</button></a>
        </div>
      </div>
    </section>


    <!-- Sponsors Section Here -->
    <?php
    include("sponsors.php");
    ?>
    <!-- Sponsors end here -->

    <!-- Contact Us Section Here -->
    <?php
    //include("contacts.php");
    ?>
    <!-- Contact Us ends here -->

    <!-- Google Map here -->
    <?php
    //include("map.php");
    ?>
    <!-- Google Map ends here -->




  </main>
  <!-- End of main -->

  <!-- SignIn/SignUp Modal here -->
  <?php
  include("loginModal.php");
  ?>
  <!-- SignIn/SignUp Modal ends here -->

  <!-- WIP Modal here -->
  <?php
  include("WorkInProgressModal.php");
  ?>
  <!-- WIP Modal ends here -->

  <!-- About Modal -->
  <div align="center" class="modal modal-transparent fade" id="about-modal" tabindex="-1" role="dialog" aria-labelledby="About Us Modal Window" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content"><b>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
          </button>
          <h1 class="modal-title" id="myModalLabel">About Dhanak</h1>
        </div>
        <div class="modal-body">
          <p>
            The Indian Institute of Space Science and Technology is a deemed university established by the Department of Space, Government of India, in Thiruvananthapuram. Started in 2007, it is the first space university in Asia and only the third of its kind in the world.
          </p>
          <p>
            Dhanak, the cultural fest of IIST, now in its eighth edition, plans to live up to its name by celebrating the multitude of colours and shades of human spirit and talent, expressed through visual arts, dance, music, literature and photography. Dhanak has garbed itself in a plethora of themes throughout the years, some of the more recent ones being “Fantasy”, “Superheroes” and “War and Glory”.
          </p>
          <p>
            This year we plan to take a step backwards and reverse our direction into the previous century, a time when the world was recovering from the scorches of the World Wars and submerging itself into the Cold War. It was the best of times, it was the worst of times. It was the age of rock and roll, it was the age of disco. It was the season of war, it was the epoch of anti-war demonstrations. It was the spring of neon and pastel colours, it was the downpour of bold, eye-catching graphics. We had everything before us and we had nothing before us. Throwback to the old days when factors governing life were not overdocumented, when life, art and the soul reached an equilibrium. Dhanak 2016. Go retro. For old times’ sake.
          </p>
        </div>
        <div class="modal-footer">
          <button id="CloseModal" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </b></div>

    </div>
  </div>
  <!-- End of About Dhanak Modal  -->

  <!-- The Web&Creatives Team Modal -->
  <div align="center" class="modal modal-transparent fade" id="wnc-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content"><b>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h1 class="modal-title" id="myModalLabel">Web & Creatives</h1>
      </div>
      <div class="modal-body">
        <h2>Designed and Developed By :</h2>
          <div class="row">
            <div class="col-sm-6">
              <h3><b>Angshuman Bhardwaj</b></h3><h4><b><i>Web Coordinator</i></b></h4><p>+91 94970 97831<br>web@dhanak.co.in</p>
            </div>
            <div class="col-sm-6">
              <h3><b>Abhiroop</b></h3><h4><b><i>Web Coordinator</i></b></h4><p>+91 94961 85461<br>web@dhanak.co.in</p>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <h3><b>Kumanan</b></h3><h4><b><i>Creatives Coordinator</i></b></h4><p>+91 94461 25530<br>creative@dhanak.co.in</p>
            </div>
            <div class="col-sm-6">
              <h3><b>Akarsh Naik</b></h3><h4><b><i>Creatives Coordinator</i></b></h4><p>+91 95671 139552<br>creative@dhanak.co.in</p>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
  </b></div>
  </div>
  </div>
  <!-- End of wnc Modal -->


  <!-- no-js div -->
  <div id="GetJs" class="fullwrap">
    <div id="GetJsLogo"></div>
    <h1>JS NOT ENABLED</h1>
    <p>Please enable Javascript or use a different browser.</p>
  </div>

  <!-- Activation Modal -->
  <div class="modal fade" id="activation-modal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            Your Account has been Activated.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
  </div>
  <!-- End of Activation Modal -->

  <script type="text/javascript">
    $('#activation-modal-modal').modal({ show: false});
  </script>

  <!---- For displaying account activation ---->
  <?php
  if(isset($_SESSION['activation'])): ?>
    <script>
    $("#activation-modal").modal();
    </script>
  <?php unset($_SESSION['activation']); ?>
  <?php endif ?>





  <!-- The Scripts -->
  <script src="js/jquery-1.12.2.min.js" charset="utf-8"></script> <!-- v1.9.1 -->
  <script src="js/jquery.lazyload.min.js" charset="utf-8"></script>


  <script src="js/TimeCircles.js" charset="utf-8"></script>
  <script src="js/jquery.waypoints.min.js" charset="utf-8"></script>
  <script src="js/jquery.nicescroll.min.js" charset="utf-8"></script>
  <script src="js/skrollr.min.js" charset="utf-8"></script>

  <!-- scripts for Circle Type -->
  <script src="js/circleTypePlugins.js" charset="utf-8"></script>
  <script src="js/circletype.min.js" charset="utf-8"></script>


  <script src="js/bootstrap.min.js" charset="utf-8"></script>
  <script src="js/lazy-bootstrap-carousel-v3.js"></script>

  <script src="js/nav.js" charset="utf-8"></script>
  <script src="js/main.js"></script>

</body>
</html>
