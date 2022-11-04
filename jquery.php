$(document).ready( function() {
$(document).on('submit', '#signin_form', function() { login(); return false; });
});

function login()
{
	var user_email = $('#user_email_input').val();
	var user_password = $('#user_password_input').val();

	$('#notification').html('&nbsp;&nbsp;Logging in...').slideDown('fast');

	var remember_me_checkbox = $('#remember_me_checkbox').prop('checked');

	if(remember_me_checkbox)
	{
		var user_remember = 1;
	}
	else
	{
		var user_remember = 0;
	}

	$.post('/m4music.in/signup.php?login', { user_email: user_email, user_password: user_password, user_remember: user_remember }, function(data)
	{
		if(data == 1)
		{
			setTimeout(function() { window.location.reload(true); }, 1000);
		}
		else
		{
			if(data == '')
			{
				$('#notification').html('<span class="text-danger">Wrong email and/or password</span>');
				$('#user_email_input').val('');
				$('#user_password_input').val('');
				input_focus('#user_email_input');
			}
			else
			{
				$('#notification').html(data);
			}
		}
	});
}
