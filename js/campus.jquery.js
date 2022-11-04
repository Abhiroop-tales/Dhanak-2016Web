$(document).ready( function() {
  //setting the active tab on dhanaknav
  $("li#CampusTab").addClass("activeli");
$(document).on('submit', '#campus_registration_form', function() { campus_register(); return false; });
});


  function doValidate()
{
		var mailformat =/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/;
		var phoneno = /^\d{10}$/;


	if (!(/[^0-9a-zA-Z]+$/.test(document.campusregistration.name.value)))
	 {

		document.getElementById("invalidname").innerHTML="";
				if(document.campusregistration.email.value.match(mailformat))
				{
					document.getElementById("invalidemail").innerHTML="";
					if(document.campusregistration.mobile.value.match(phoneno))
					{
						document.getElementById("invalidmobile").innerHTML="";

						if (!(/[^0-9a-zA-Z]+$/.test(document.campusregistration.college.value)))
						{
						return true;
						}
						else
						{
						document.getElementById("clgname").innerHTML="*Enter a Valid college name!";
						return false;
						}
					}
					else
					{
					document.getElementById("invalidmobile").innerHTML="*Invalid number! Please enter a valid mobile number";
					return false;
					}
				}
				else
				{
				document.getElementById("invalidemail").innerHTML="*Invalid Email! Please enter a valid email address";
				return false;
				}

	}
	else
	{
	document.getElementById("invalidname").innerHTML="*Use only alphabets!";
	return false;
	}

}




function campus_register()
{

	if (doValidate())
{

	var user_name = $('#name').val();
	var user_gender = $('#gender').val();
	var user_email = $('#email').val();
	var user_mobile = $('#mobileno').val();
	var user_college = $('#college').val();
	var user_year = $('#year').val();
	var user_sid = $('#sid').val();



	$('#campus_notif').html('&nbsp;&nbsp;Registering...').slideDown('fast');


	$.post('/dhanak_2016_repo/campusambassador/campusdb.php',
	{name: user_name, gender: user_gender, email: user_email, sid: user_sid, mobile: user_mobile, college: user_college, year: user_year}, function(data)

	{

		if(data == 5)
		{
			$('#campus_notif').html('<span class="text-danger">Thanks for registering for Campus Ambassador, you will recieve verification email from our dhanak team!</span>');
			setTimeout(function() { window.location.replace('/dhanak_2016_repo/campusambassador'); }, 5000);
		}
		else
		{

			if(data == 7)
			{
				$('#campus_notif').html('<span class="text-danger">Already Registered for Campus ambassador !!</span>');
				$('#email').val('');
				$('#college').val('');
				$('#name').val('');
				input_focus('#email');
			}
			else if(data == 4)
			{
				$('#campus_notif').html('<span class="text-danger">Error sending Verification link to your mail!!</span>');
				$('#email').val('');
				$('#college').val('');
				$('#name').val('');
				input_focus('#email');
			}
			else if(data == 3)
			{
				$('#campus_notif').html('<span class="text-danger">Incorrect Email format!!</span>');
				$('#email').val('');
				$('#college').val('');
				$('#name').val('');
				input_focus('#email');
			}
			else
			{
				$('#campus_notif').html(data);
			}

		}
	});
}
}
