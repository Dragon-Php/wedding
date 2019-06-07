var userregname = $('#userregname');
var userregcontact = $('#userregcontact');
var userregemail = $('#userregemail');
var userregpassword = $('#userregpassword');

$('.custom-button').click(function(){
	var error = false;
	$('.error_reg').remove();
	$('.success').remove();
	if(userregname.val() == ''){
		error = true;
		userregname.css('border-color', 'red');
		userregname.after('<font class="error_reg" style="margin-left: 10%;">Name is required.</font>');
	}
	if(userregcontact.val() == ''){
		error = true;
		userregcontact.css('border-color', 'red');
		userregcontact.after('<font class="error_reg" style="margin-left: 10%;">Contact is required.</font>');
	}
	if(userregemail.val() == ''){
		error = true;
		userregemail.css('border-color', 'red');
		userregemail.after('<font class="error_reg" style="margin-left: 10%;">Email is required.</font>');
	}
	if(userregpassword.val() == ''){
		error = true;
		userregpassword.css('border-color', 'red');
		userregpassword.after('<font class="error_reg" style="margin-left: 10%;">Password is required.</font>');
	}

	

	if(!error){
		$.ajax({
			url : $('.new-signup-div').attr('data-url'),
			type:'POST',
			data : { name : userregname.val(), contact : userregcontact.val(), email : userregemail.val(), password : userregpassword.val(), _token:$('meta[name=__token]').attr('data-value') },
			success : function(result){
				var obj = JSON.parse(result);
				if(obj.status == '1'){
					$('.success').html(obj.msg);
					$('.success').css('color', 'green');

				}
				if(obj.status == '2'){
					userregemail.after('<font class="error_reg" style="margin-left: 10%;">'+obj.msg+'.</font>');
				}
				if(obj.status == '0'){
					$('.success').html(obj.msg);
					$('.success').css('color', 'red');
				}

				$('.error_reg').css('color', 'red');

			}
		})
	}

	$('.error_reg').css('color', 'red');

	
});

userregname.keypress(function(e){
	// var disabled_key = [33, 35, 36, 37, 94, 38, 123, 125,91,93, 42, 40, 41, 95, 47, 43 ,63];
	var disabled_key = [33, 35, 36, 37, 94, 38, 123, 125,91,93, 42, 40, 41, 95, 47, 43 ,63, 64];
	var Key = disabled_key.indexOf(e.which);
	if(Key>-1){
		e.preventDefault();
	}
});
userregcontact.keypress(function(e){
	// var disabled_key = [33, 35, 36, 37, 94, 38, 123, 125,91,93, 42, 40, 41, 95, 47, 43 ,63];
	var disabled_key = [33, 35, 36, 37, 94, 38, 123, 125,91,93, 42, 40, 41, 95, 47, 43 ,63, 64];
	var Key = disabled_key.indexOf(e.which);
	if(Key>-1){
		e.preventDefault();
	}
});

userregemail.keypress(function(e){
	var disabled_key = [33, 35, 36, 37, 94, 38, 123, 125,91,93, 42, 40, 41, 95, 47, 43 ,63];
	var Key = disabled_key.indexOf(e.which);
	if(Key>-1){
		e.preventDefault();
	}
});