<!DOCTYPE html>
<html class="no-js fullwrap" lang="en-IN">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Pronite | Dhanak 2016</title>

    <!-- metaTags.php Here -->
    <?php
    include("../metaTags.php");
    ?>
    <!-- metaTags.php ends here -->

    <!--Title Icon  -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/dhanak.ico" />

    <!-- Modernizr script needs to be here so that the no-js changes to js as soon as possible. Otherwise loader appears late -->
    <script src="../js/modernizr.js" charset="utf-8"></script>

    <!-- STYLES -->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/font-awesome.css">

    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/pronite_styles.css">

  </head>
  <body class="fullwrap">

    <main id="main" class="fullwrap">
      <!-- Navbar here -->
      <?php
      include("../nav.php");
       ?>
       <!-- Navbar ends here -->
      <div class="bcg slide">
        <div class="container-fluid fullwrap">
          <div class="row fullwrap">
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
              <div class="content fullwrap">
                <a href="http://sunburn.in/" target="_blank">
                  <img id="sunburnlogo" src="../img/pronite/sunburn.png" alt="Sunburn Logo">
                </a>
                <a href="http://progressivebrothers.com/" target="_blank">
                  <img id="probrologo" src="../img/pronite/ProBroLogo.png" alt="Progressive Brothers Logo">
                </a>
                <h2>Watch Live at IIST, <br> Trivandrum </h2>
                <h3>Saturday, 22nd October, 2016</h3>
                <h2>Book your tickets now.</h2>
                <h4>Special Early Bird Discounts available.</h4>
                <a href="#TCFModal" data-toggle="modal">
                  <button>Get Tickets Now!</button>
                </a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-0">
              <div class="punchline">
                <p>"Because you can't download a live musical experience."</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- no-js div -->
    <div id="GetJs" class="fullwrap">
      <div id="GetJsLogo"></div>
      <h1>JS NOT ENABLED</h1>
      <p>Please enable Javascript or use a different browser.</p>
    </div>

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

    <script src="../js/modernizr.js"></script> <!-- Modernizr -->
    <script src="../js/jquery-1.12.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/nav.js" charset="utf-8"></script>
    <script>
    //setting the active tab on dhanaknav
    $("li#ProniteTab").addClass("activeli");
    </script>
  </body>
</html>
