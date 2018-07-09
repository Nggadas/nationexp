$('#login-form').on('submit', function() {

	var email = $('#email').val();
	var pass = $('#pass').val();
	var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	var pattern_pass = /[^A-Za-z0-9]+/;


	var a = (pattern.test(email));
	var b = (pattern_pass.test(pass));

	$(':input[type="submit"]').prop('disabled', true);
	$('#calulate_btn').hide();
	$('#loading').show();

	if (a & b)
	{
		$.ajax({
			type: "POST",
			url: "loginnow",
			data: {email:email,pass:pass},
			success: function(result){
				if(result=='open'){
					window.open(
					'members/',
					'_self'
					);
				}
				if(result=='auth'){
					window.open(
					'adminportal/',
					'_self'
					);
				}
				if(result=='closed'){
					$("#error_login").html('Your email address or password is invalid');
					$("#invalid-login").show();
					$(':input[type="submit"]').prop('disabled', false);
					$('#calulate_btn').show();
					$('#loading').hide();
				}
				if(result=='disabled'){
					$("#error_login").html('Your account has been disabled');
					$("#invalid-login").show();
					$(':input[type="submit"]').prop('disabled', false);
					$('#calulate_btn').show();
					$('#loading').hide();
				}
				if(result=='pending'){
					$("#error_login").html('Please confirm your email address by clicking the link that was sent to your email address');
					$("#invalid-login").show();
					$(':input[type="submit"]').prop('disabled', false);
					$('#calulate_btn').show();
					$('#loading').hide();
				}
			}
		});
	}
	if (!a || !b)
	{
		$("#error_login").html('Your email address or password is invalid');
		$("#invalid-login").show();
		$(':input[type="submit"]').prop('disabled', false);
		$('#calulate_btn').show();
		$('#loading').hide();
	}
	return false;
});
