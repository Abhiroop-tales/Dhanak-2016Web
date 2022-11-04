$(document).ready( function() {
$(document).on('submit', '#registration_form', function() { register(); return false; });
});


  function doValidate()
{
	
		var mailformat =/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/;
		var phoneno = /^\d{10}$/;
		 
	
	if (!(/[^0-9a-zA-Z]+$/.test(document.registration.name.value)))
	 {
		document.getElementById("name").innerHTML="";	
			if (!(/[^0-9a-zA-Z]+$/.test(document.registration.username.value)))
			{
				document.getElementById("uname").innerHTML="";
				if(document.registration.email.value.match(mailformat))
				{
					document.getElementById("invalidemail").innerHTML="";
					if(document.registration.mobile.value.match(phoneno))
					{	
						document.getElementById("invalidmobile").innerHTML="";
						
						if (!(/[^0-9a-zA-Z]+$/.test(document.registration.college.value)))
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
			document.getElementById("uname").innerHTML="*Only alphanumeric characters allowed!";
			return false;
			}
		
	}
	else
	{
	document.getElementById("name").innerHTML="*Use only alphabets!";
	return false;
	}
		
}



function register()
{
	if (doValidate())
{

	var user_name = $('#signup-name').val();
	var user_gender = $('#signup-gender').val();
	var user_email = $('#signup-email').val();
	var user_password = $('#signup-password').val();
	var user_username = $('#signup-username').val();
	var user_mobile = $('#signup-mobile').val();
	var user_college = $('#signup-college').val();
	var user_year = $('#signup-year').val();
	var user_accomodation = $('#signup-accomodation').val();
	
	

	$('#notification').html('&nbsp;&nbsp;Registering...').slideDown('fast');

	var remember_me_checkbox = $('#remember_me_checkbox').prop('checked');

	if(remember_me_checkbox)
	{
		var user_remember = 1;
	}
	else
	{
		var user_remember = 0;
	}

	$.post('/dhanak_2016_repo/registerdb1.php', 
	{name: user_name, gender: user_gender, email: user_email, password: user_password, username: user_username, mobile: user_mobile, college: user_college, year: user_year, accomodation: user_accomodation }, function(data)
	
	{
		
		if(data == 5)
		{
			$('#notification').html('<span class="text-danger">Your confirmation link has been sent to your mail!</span>');
			setTimeout(function() { window.location.replace('index.php'); }, 5000);
		}
		else
		{
			if(data == 2)
			{
				$('#notification').html('<span class="text-danger">Username already exists !!</span>');
				$('#signup-email').val('');
				$('#signup-username').val('');
				$('#signup-password').val('');
				input_focus('#signup-username');
			}
			else if(data == 7)
			{
				$('#notification').html('<span class="text-danger">Email already exists !!</span>');
				$('#signup-email').val('');
				$('#signup-username').val('');
				$('#signup-password').val('');
				input_focus('#signup-email');
			}
			else if(data == 4)
			{
				$('#notification').html('<span class="text-danger">Error sending confirmation link to your mail!!</span>');
				$('#signup-email').val('');
				$('#signup-username').val('');
				$('#signup-password').val('');
				input_focus('#signup-email');
			}
			
			else
			{
				$('#notification').html(data);
			}
			
		}
	});
}
}


$(document).ready( function() {
$(document).on('submit', '#login_form', function() { login(); return false; });
});


function login()
{
	var user_email = $('#signin-email').val();
	var user_password = $('#signin-password').val();

	$('#notif').html('&nbsp;&nbsp;Logging in...').slideDown('fast');

	var remember_me_checkbox = $('#remember_me_checkbox').prop('checked');

	if(remember_me_checkbox)
	{
		var user_remember = 1;
	}
	else
	{
		var user_remember = 0;
	}

	$.post('/dhanak_2016_repo/login.php', { email: user_email, password: user_password, user_remember: user_remember }, function(data)
	{
		
		if(data == 1)
		{
			setTimeout(function() { window.location.reload(true); }, 1000);
		}
		else
		{
			if(data == 2)
			{
				$('#notif').html('<span class="text-danger">Wrong email and/or password!!</span>');
				$('#signin-email').val('');
				$('#signin-password').val('');
				input_focus('#signin-email');
			}
			else if(data == 3)
			{
				$('#notif').html('<span class="text-danger">Incorrect email format!!</span>');
				$('#signin-email').val('');
				$('#signin-password').val('');
				input_focus('#signin-email');
			}
			else
			{
				$('#notif').html(data);
			}
		}
	});
}

$(document).ready( function() {
$(document).on('submit', '#event_registration_form', function() { event_register(); return false; });
});

function event_register()
{
	
	var event_name = $('#eventname').val();
	
	

	$('#event_notif').html('&nbsp;&nbsp;Registering...').slideDown('fast');

	
	$.post('/dhanak_2016_repo/events/registrations/event_register.php', 
	{eventname: event_name}, function(data)
	
	{
		
		if(data == 5)
		{
			$('#event_notif').html('<span class="text-danger">Your confirmation link has been sent to your mail!</span>');
			setTimeout(function() { window.location.replace('index.php'); }, 5000);
		}
		else
		{
			if(data == 1)
			{
				$('#event_notif').html('<span class="text-danger">Already Registered for this event !!</span>');
			}
			else if(data == 2)
			{
				$('#event_notif').html('<span class="text-danger">Successfully Registered for the event !!</span>');
			}
			else if(data == 3)
			{
				$('#event_notif').html('<span class="text-danger">Error Registering for this event!!</span>');
			}
			
			else
			{
				$('#event_notif').html(data);
			}
			
		}
	});
}
