<!-- From nav.php -->

<div id="dhanaknav" class="dhanaknavclass">
  <nav class="navbar navbar-default"

  >
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">

        <div class="row">
          <div class="col-sm-5">
            <div class="row">
              <ul class="navlist">
                <!-- <a href="#dummy" title="Home"> -->
                  <li id="dummy" class="col-sm-2 navlist"><span class="glyphicon glyphicon-none"></span><span class="navtags"></span></li>
                <!-- </a> -->
                <a href="/Dhanak_2016_Repo/#Cover" title="Home">
                  <li id="HomeTab" class="col-sm-2 navlist"><i class="fa fa-home fa-2x"></i><span class="navtags">Home</span></li>
                </a>
                <a href="/Dhanak_2016_Repo/events" target="_blank" title="Events">
                  <li id="EventsTab" class="col-sm-2 navlist"><div class="event"></div><span class="navtags">Events</span></li>
                </a>
                <a href="#WIP" data-toggle="modal" title="Workshops">
                  <li id="WorkshopsTab" class="col-sm-2 navlist"><div class="workshops"></div><span class="navtags">Workshops</span></li>
                </a>
                <a href="#WIP" data-toggle="modal" target="_blank" title="Exhibitions">
                  <li id="ExhibitionsTab" class="col-sm-2 navlist"><div class="exhibition"></div><span class="navtags">Exhibitions</span></li>
                </a>
                <a href="/Dhanak_2016_Repo/pronite" data-toggle="modal" target="_blank" title="Pro-Nite">
                  <li id="ProniteTab" class="col-sm-2 navlist"><div class="pronite"></div><span class="navtags">Pro Nite</span></li>
                </a>
              </ul>
            </div>
          </div>
          <div class="col-sm-2">
            <div id="Logo" class="no-show-on-main"></div>
          </div>
          <div class="col-sm-5">
            <div class="row">
              <ul class="navlist">
                <a href="#WIP" data-toggle="modal" target="_blank" title="Social Cause">
                  <li id="InitiativesTab" class="col-sm-2 navlist"><div class="initiatives"></div><span class="navtags">Initiatives</span></li>
                </a>
                <a href="#WIP" data-toggle="modal" target="_blank" title="Get ProNite Tickets & Dhanak Merchandise">
                  <li id="CollegeFeverTab" class="col-sm-2 navlist"><i class="fa fa-shopping-cart fa-2x"></i><span class="navtags">CollegeFever</span></li>
                </a>
                <a href="/Dhanak_2016_Repo/campusambassador" target="_blank" title="Be a Dhanak Campus Ambassador">
                  <li id="CampusTab" class="col-sm-2 navlist"><div class="campus"></div><span class="navtags">Campus Ambassador</span></li>
                </a>
                <a href="/Dhanak_2016_Repo/team" target="_blank" title="The Team">
                  <li id="TeamTab" class="col-sm-2 navlist"><i class="fa fa-users fa-2x"></i><span class="navtags">The Team</span></li>
                </a>

                <!-- PHP Code for Sign in, Log Out and Username -->
        				<?php if(isset($_SESSION['username'])): ?>

                  <!-- Log Out Button - displayed when session is set -->
        					<a href="/dhanak_2016_repo/logout.php" title="Log Out">
        					<li id="LogOutTab" class="col-sm-2 navlist"><span class="glyphicon glyphicon-user"></span><span class="navtags">Logout</span></li>
        					</a>
                  <!-- Username - displayed when session is set  -->
        					<li id="UserNameTab" class="col-sm-2 navlist"><i class="fa fa-sign-out fa-2x"></i>
                    <span class="navtags"><?php echo $_SESSION['username']; ?></span>
                  </li>
        				<?php else: ?>
                  <!-- Sign In Button - displayed when session not set -->
        					<a href="#" title="Sign In">
        					<li id="SignInTab" class="col-sm-2 navlist cd-signin"><i class="fa fa-sign-in fa-2x"></i><span class="navtags">Sign In</span>
        					</li></a>
                <?php endif ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
</div>
<!-- Ends nav.php  -->
