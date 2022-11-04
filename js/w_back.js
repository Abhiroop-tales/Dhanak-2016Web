$(document).ready( function() {
$(document).on('submit', '#webbed_registration_form', function() { webbed_register(); return false; });
});


  function doValidate()
{
	
	if ((/^[A-Za-z]+$/.test(document.webbed_registration.name.value)))
	 {
		document.getElementById("ans_error").innerHTML="";	
		return true;
	}
	else
	{
	document.getElementById("ans_error").innerHTML="*Use only alphabets!";
	return false;
	}
		
}
function webbed_register()
{
	if (doValidate())
{

	var user_name = $('#webbed-ans').val();
	$('#webbed_notif').html('&nbsp;&nbsp;Checking...').slideDown('fast');

	
	
	$.post('../webbed/check_ans.php', 
	{answer: user_name}, function(data)
	
	{
		
		if(data == 1)
		{
			$('#webbed_notif').html('<span>Correct Answer! Mogambo khush hua !!</span>');
			setTimeout(function() { window.location.replace('../webbed/index.php'); }, 500);
		}
               else if(data == 3)
		{
			$('#webbed_notif').html('<span>You have chosen wisely!!</span>');
			setTimeout(function() { window.location.replace('../webbed/index.php'); }, 500);
		}
		else
		{
			if(data == 2)
			{
				$('#webbed_notif').html('<span class="text-danger">Incorrect! Use the Force, Luke !!</span>');
				$('#webbed-ans').val('');
				input_focus('#webbed-ans');
			}
                        if(data == 4)
			{
				$('#webbed_notif').html('<span class="text-danger">Incorrect! Mama says, Stupid is as stupid does!!</span>');
				$('#webbed-ans').val('');
				input_focus('#webbed-ans');
			}
			
			else
			{
				$('#webbed_notif').html(data);
			}
			
		}
	});
}
}