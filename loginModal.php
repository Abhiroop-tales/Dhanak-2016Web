<!-- From loginModal.php  -->
<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
  <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
    <ul class="cd-switcher">
      <li><a href="#0">Sign in</a></li>
      <li><a href="#0">New account</a></li>
    </ul>

    <div id="cd-login"> <!-- log in form -->
      <form class="cd-form" action="." id="login_form" method="post">
        <p class="fieldset">
          <label class="image-replace cd-email" for="signin-email">E-mail</label>
          <input class="full-width has-padding has-border" id="signin-email" type="email" name="email" placeholder="E-mail" required>
        </p>

        <p class="fieldset">
          <label class="image-replace cd-password" for="signin-password">Password</label>
          <input class="full-width has-padding has-border" id="signin-password" type="password" name="password" placeholder="Password" required>
          <a href="#0" class="show-password">Show</a>
        </p>

        <!-- <p class="fieldset">
          <input type="checkbox" id="remember-me">
          <label for="remember-me">Remember me</label>
		  <p id="notif"></p>
        </p> -->

        <p class="fieldset">
          <input class="full-width" type="submit" value="Login" name="login">
        </p>
      </form>

      <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
      <!-- <a href="#0" class="cd-close-form">Close</a> -->
    </div> <!-- cd-login -->
<style rel="stylesheet" type="text/css">
.colortext
{
	color:red;
}
</style>
<script src="/dhanak_2016_repo/js/jquerymin.js" type="text/javascript"></script>
<script src="/dhanak_2016_repo/js/backend.jquery.js" type="text/javascript"></script>

    <div id="cd-signup"> <!-- sign up form -->

      <form class="cd-form" name="registration" action="." id="registration_form" method="POST">
        <p class="fieldset">
          <label class="image-replace cd-name" for="signup-firstname">Name</label>
          <input class="full-width has-padding has-border" id="signup-name" type="text" name="name" placeholder="Name" required>
          <p id="name" class="colortext"></p>
		  </p>
        <p class="fieldset">
          <label class="image-replace cd-username" for="signup-username">Username</label>
          <input class="full-width has-padding has-border" id="signup-username" type="text" name="username" placeholder="Username" required>
          <p id="uname" class="colortext"></p>
        </p>
		<p class="fieldset">
          <label class="image-replace cd-email" for="signup-email">E-mail</label>
          <input class="full-width has-padding has-border" id="signup-email" type="email" name="email" placeholder="E-mail" required>
          <p id="invalidemail" class="colortext"></p>
        </p>

        <p class="fieldset">
          <label class="image-replace cd-password" for="signup-password">Password</label>
          <input class="full-width has-padding has-border" id="signup-password" type="password"  name="password" placeholder="Password" required>
          <a href="#0" class="show-password">Show</a>

        </p>
        <p class="fieldset">
          <label class="image-replace cd-mobile" for="signup-mobile">Mobile Number</label>
          <input class="full-width has-padding has-border" id="signup-mobile" type="text" name="mobile" placeholder="Mobile Number" required>
          <p id="invalidmobile" class="colortext"></p>
        </p>

        <p class="fieldset">
          <label class="image-replace cd-college" for="signup-college">College</label>
          <input class="full-width has-padding has-border" id="signup-college" type="text" name="college" placeholder="College" required>
          <p id="clgname" class="colortext"></p>
        </p>
        <p class="fieldset">
          <label class="cd-year image-replace" for="signup-year">Year</label>
          <select class="full-width has-padding has-border" id="signup-year" name="year" required>
            <option>First Year</option>
            <option>Second Year</option>
            <option>Third Year</option>
            <option>Fourth Year</option>
            <option>Fifth Year</option>

            <!-- </option>class="full-width has-padding has-border" id="signup-college" type="text" placeholder="College" required> -->
          </select>
          </p>
		  <p class="fieldset">
          <div class="accomodationDiv full-width has-border has-padding">
            <label class="cd-accomodation-image image-replace" for="signup-gender"></label>
            <label class="cd-accomodation" for="signup-gender">Gender :</label><br>
            <input type="radio" id="signup-gender" value="Male" name="gender" required><span class="radio-label">Male</span>
            <input type="radio" id="signup-gender" value="Female" name="gender" required><span class="radio-label">Female</span>
           </div>
        </p>
        <p class="fieldset">
          <div class="accomodationDiv full-width has-border has-padding">
            <label class="cd-accomodation-image image-replace" for="signup-accomodation"></label>
            <label class="cd-accomodation" for="signup-accomodation">Accomodation :</label><br>
            <input type="radio" id="signup-accomodation" value="yes" name="accomodation" required><span class="radio-label">YES</span>
            <input type="radio" id="signup-accomodation" value="no" name="accomodation" required><span class="radio-label">NO</span>
           </div>
		   <p id="notification"></p>
        </p>

        <p class="fieldset">
          <input type="checkbox" id="accept-terms" name="agree" required>
          <label for="accept-terms">I agree to the  <a href="#0">Terms</a></label>

        </p>

        <p class="fieldset">
          <input class="full-width has-padding" type="submit" value="Create account" name="register">
        </p>
      </form>

      <!-- <a href="#0" class="cd-close-form">Close</a> -->
    </div> <!-- cd-signup -->




    <div id="cd-reset-password"> <!-- reset password form -->
      <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

      <form class="cd-form" action="forgot_password.php" method="post">
        <p class="fieldset">
          <label class="image-replace cd-email" for="reset-email" name="email">E-mail</label>
          <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
          <span id="forgot_password"></p>
        </p>

        <p class="fieldset">
          <input class="full-width has-padding" type="submit" name="reset_password" value="Reset password">
        </p>
      </form>

      <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
    </div> <!-- cd-reset-password -->
    <a href="#0" class="cd-close-form">Close</a>
  </div> <!-- cd-user-modal-container -->
</div> <!-- cd-user-modal -->
<!-- End of loginModal.php -->
