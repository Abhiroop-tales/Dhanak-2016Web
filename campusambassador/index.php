<!DOCTYPE html>
<html class="no-js fullwrap" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Campus Ambassador | Dhanak 2016</title>

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
  <link rel="stylesheet" type="text/css" href="../css/campusambasador.css">

  <script src="../js/modernizr.js"></script> <!-- Modernizr -->
  <script src="../js/jquery-1.12.2.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/nav.js" charset="utf-8"></script>

  <!-- <script src="../js/jquerymin.js" type="text/javascript"></script> -->
  <script src="../js/campus.jquery.js" type="text/javascript"></script>


</head>
<body>
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

	<div id="heading" align="center">
	<h1>Campus Ambassador</h1>
	</div>

<div id="registering" align="center">
<!------ Modal---->
<div class="container">
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Register for Ambassador</button>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
	  <style rel="stylesheet" type="text/css">
.textcolor
{
	color:red;
}
</style>


        <div class="modal-header">
			<img src="../img/Logo.png" style="width:80px;height:80px;border-radius:50%">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Register For Campus Ambassador</h4>
        </div>
        <div class="modal-body">


<form name="campusregistration" action="." method="post" id="campus_registration_form">
			<table width="80%" border="0" cellspacing="0" cellpadding="10"><tr><td colspan="3">

<p id="campus_notif"></p>
</td></tr>
	<tr><td width="25%"><label for="name">Name</label></td><td width="50%"><input type="text" id="name" name="name" class="textbox" maxlength="30" minlength="3" required/></td><td><p id="invalidname" class="textcolor"></p></td></tr>

	<tr><td><label for="mail">E-mail</label></td><td><input type="text" id="email" name="email" minlength="6" maxlength="30" class="textbox" required/></td><td><p id="invalidemail" class="textcolor"></p>
	</td></tr>
				<tr><td><label for="mobileno">Mobile</label></td><td><input type="text" id="mobileno" name="mobile" class="textbox" required/></td><td><p id="invalidmobile" class="textcolor"></p></td></tr>
			<tr><td><label for="college">College</label></td><td><input type="text"  id="college" name="college" class="textbox" maxlength="50" minlength="3"required/></td><td><p id="clgname" class="textcolor"></p></td></tr>
			<tr><td><label for="sid">Student ID</label></td><td><input type="text"  id="sid" name="sid" class="textbox" required/></td></tr>

			<tr><td><label for="year">Year</label></td><td><select name="year" id="year">
				<option>1<sup>st</sup> Year</option>
				<option>2<sup>nd</sup> Year</option>
				<option>3<sup>rd</sup> Year</option>
				<option>4<sup>th</sup> Year</option>
				</select>
			</td></tr>
			<tr><td><label for="gender">Gender</label></td><td colspan="2"><input type="radio" name="gender" value="Male" id="gender" required>Male<input type="radio" name="gender" value="Female" id="gender" required>Female</td></tr>
			<tr><td colspan="3" align="center"><input type="submit" value="Register" name="register" /></td></tr>
			</table>
		</form>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>
<!-----End of Modal ----->
</div>
	<br>

		<div class="data">
			<nav class="font-effect">
			<a href="#"><span data-hover=" TO DO ">Tasks</span></a>
			</nav>

			<p>The main task of a Campus Ambassador is to promote Dhanak and its various activities in his/her own college and help us bring participation. To be qualified for the certificate of Campus Ambassador, one is required to complete the following tasks-</p>

                <ul>
                    <li>Put up the publicity material sent by Dhanak, IIST in different notice boards of his/her college.</li>
                    <li>Give presentation to key clubs and social groups in campus.</li>
                    <li>Publicize Dhanak through different Facebook groups and other social platforms.</li>
                    <li>Forward mails to students through the centralized mailing system.</li>
                </ul>

			<nav class="font-effect">
                    <a href="#"><span data-hover="A MOTIVATION">Incentives</span></a>
                </nav>
                <ul>
                    <li> Opportunity to improve your managerial and communication skills while interacting with people coming from diverse fields from various colleges across India.</li>
                    <li>An official certificate of recognition on behalf of Dhanak.</li>
                    <li>Furthermore branded gift products, vouchers and other exciting goodies await those who truly deserve.</li>
                </ul>

			<nav class="font-effect">
                    <a href="#"><span data-hover=" AN AGREEMENT ">Terms and conditions</span></a>
                </nav>
                 <ul>
                    <li> The certificate of Campus Ambassador will be awarded only if he/she completes the assigned tasks.</li>
                    <li>Dhanak will be providing all the publicity material to the respective college, but will not be responsible for any extra cost incurred by the Campus Ambassador.</li>
                    <li>A Campus Ambassador is required to send us photos of the posters put up in notice board and a short video of presentation (20 sec, showing him/her and the audience).</li>
                    <li>The team size should be at least 10 members, and they should participate in at least one major group event , so that the Campus Ambassador can avail 100% travel reimbursement (of sleeper equivalent).</li>
                </ul>

		</div>

	<div id="footer">
	</div>

  <!-- no-js div -->
  <div id="GetJs" class="fullwrap">
    <div id="GetJsLogo"></div>
    <h1>JS NOT ENABLED</h1>
    <p>Please enable Javascript or use a different browser.</p>
  </div>
</body>
</html>
