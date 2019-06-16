var userregname = $('#userregname');
var userregcontact = $('#userregcontact');
var userregemail = $('#userregemail');
var userregpassword = $('#userregpassword');


var userloginemail = $('#userloginemail');
var userloginpassword = $('#userloginpassword');

$('.user_newregister').click(function(){
	var error = false;
	$('.error_reg').remove();
	$('.success').hide();
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
					console.log(obj.msg);
					$('.success').html(obj.msg);
					$('.success').show();
					$('.success').css('color', 'green');
					$('.success').css('margin-left', '10%');
					userregname.val('');
					userregcontact.val('');
					userregemail.val('');
					userregpassword.val('');
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
	var disabled_key = [33, 35, 36, 37, 94, 38, 123, 125,91,93, 42, 40, 41, 95, 47, 43 ,63, 64];
	var Key = disabled_key.indexOf(e.which);
	if(Key>-1){
		e.preventDefault();
	}
});
userregcontact.keypress(function(e){
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

$('.customer_login').click(function(){
	var error = false;
	$('.error_login').remove();
	$('.login_success').hide();
	
	if(userloginemail.val() == ''){
		error = true;
		userloginemail.css('border-color', 'red');
		userloginemail.after('<font class="error_login" style="margin-left: 10%;">Email is required.</font>');
	}
	if(userloginpassword.val() == ''){
		error = true;
		userloginpassword.css('border-color', 'red');
		userloginpassword.after('<font class="error_login" style="margin-left: 10%;">Password is required.</font>');
	}

	

	if(!error){
		$.ajax({
			url : $('.customer_login_form').attr('data-url'),
			type:'POST',
			data : {  email : userloginemail.val(), password : userloginpassword.val(), _token:$('meta[name=__token]').attr('data-value') },
			success : function(result){
				var obj = JSON.parse(result);
				if(obj.status == '1'){
					$('.login_success').html(obj.msg);
					$('.login_success').css('color', 'green');
					$('.login_success').css('margin-left', '10%');
					window.location.reload();
				}
				if(obj.status == '2'){
					$('.login_success').html(obj.msg);
					$('.login_success').css('color', 'red');
					$('.login_success').css('margin-left', '10%');
				}
				$('.error_login').css('color', 'red');

			}
		})
	}

	$('.error_login').css('color', 'red');
});

function showUserLoginPassword() {
    var x = document.getElementById("userloginpassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
function showUserRegPassword() {
    var x = document.getElementById("userregpassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}