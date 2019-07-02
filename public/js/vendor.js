var brand_name = $('#brand_name');
var vendor_city = $('#vendor_city');
var vendor_cateory = $('#vendor_cateory');
var vendor_reg_email = $('#vendor_reg_email');
var vendor_reg_mobile = $('#vendor_reg_mobile');
var vendorregpassword = $('#vendorregpassword');
var vendor_signup = $('#vendor_signup');


var vendorloginemail = $('#vendorloginemail');
var vendorloginpassword = $('#vendorloginpassword');
var vendorlogin = $('.vendorlogin');



brand_name.keypress(function(e){
    var disabled_key = [33, 35, 36, 37, 94, 38, 123, 125,91,93, 42, 40, 41, 95, 47, 43 ,63, 64];
    var Key = disabled_key.indexOf(e.which);
    if(Key>-1){
        e.preventDefault();
    }
});
vendor_city.keypress(function(e){
    var disabled_key = [33, 35, 36, 37, 94, 38, 123, 125,91,93, 42, 40, 41, 95, 47, 43 ,63, 64];
    var Key = disabled_key.indexOf(e.which);
    if(Key>-1){
        e.preventDefault();
    }
});
vendor_reg_mobile.keypress(function(e){
    var disabled_key = [33, 35, 36, 37, 94, 38, 123, 125,91,93, 42, 40, 41, 95, 47, 43 ,63, 64];
    var Key = disabled_key.indexOf(e.which);
    if(Key>-1){
        e.preventDefault();
    }
});

vendor_reg_email.keypress(function(e){
    var disabled_key = [33, 35, 36, 37, 94, 38, 123, 125,91,93, 42, 40, 41, 95, 47, 43 ,63];
    var Key = disabled_key.indexOf(e.which);
    if(Key>-1){
        e.preventDefault();
    }
});

vendorlogin.click(function(){
    var error = false;
    $('.error_reg').remove();
    $('.vendor_loginsuccess').hide();

    if(vendorloginemail.val() == ''){
        error = true;
        validator(vendorloginemail, 'Email is required.')
    }
    if(vendorloginpassword.val() == ''){
        error = true;
        validator(vendorloginpassword, 'Password is required.')
    }
    
    if(!error){
        $.ajax({
            url : $('.vendor_login').attr('data-url'),
            type:'POST',
            data : { 
                    email : vendorloginemail.val(), 
                    password : vendorloginpassword.val(), 
                    _token:$('meta[name=__token]').attr('data-value') 
                },
            success : function(result){
                var obj = JSON.parse(result);
                if(obj.status == '1'){
                    alert('Login successfully.');
                    $('.vendor_loginsuccess').html(obj.msg);
                    $('.vendor_loginsuccess').show();
                    $('.vendor_loginsuccess').css('color', 'green');
                    $('.vendor_loginsuccess').css('margin-left', '10%');
                    window.location.reload();
                    vendorloginemail.val('');
                    vendorloginpassword.val('');
                } else {
                    $('.vendor_loginsuccess').show();
                    $('.vendor_loginsuccess').html(obj.msg);
                    $('.vendor_loginsuccess').css('color', 'red');
                }

                $('.error_reg').css('color', 'red');

            }
        })
    }


    $('.error_reg').css('color', 'red');
    
})

vendor_signup.click(function(){
    var error = false;
    $('.error_reg').remove();
    $('.vendor_regsuccess').hide();

    if(brand_name.val() == ''){
        error = true;
        validator(brand_name, 'Brand name is required.')
    }
    if(vendor_city.val() == ''){
        error = true;
        validator(vendor_city, 'City is required.')
    }
    if(vendor_reg_mobile.val() == ''){
        error = true;
        validator(vendor_reg_mobile, 'Mobile is required.')
    }
    if(vendor_reg_email.val() == ''){
        error = true;
        validator(vendor_reg_email, 'Email is required.')
    }
    if(vendorregpassword.val() == ''){
        error = true;
        validator(vendorregpassword, 'Password is required.')
    }

    if(vendor_cateory.val()== '' ){
        error = true;
        validator(vendor_cateory, 'Category is required.')
    }

    if(!error){
        $.ajax({
            url : $('.vendor_signup').attr('data-url'),
            type:'POST',
            data : { 
                    brand_name : brand_name.val(), 
                    vendor_city : vendor_city.val(), 
                    contact : vendor_reg_mobile.val(), 
                    password : vendorregpassword.val(), 
                    email : vendor_reg_email.val(), 
                    vendor_cateory : vendor_cateory.val().toString(), 
                    _token:$('meta[name=__token]').attr('data-value') 
                },
            success : function(result){
                var obj = JSON.parse(result);
                if(obj.status == '1'){
                    console.log(obj.msg);
                    $('.vendor_regsuccess').html(obj.msg);
                    $('.vendor_regsuccess').show();
                    $('.vendor_regsuccess').css('color', 'green');
                    $('.vendor_regsuccess').css('margin-left', '10%');
                    brand_name.val('');
                    vendor_reg_mobile.val('');
                    vendor_reg_email.val('');
                    vendorregpassword.val('');
                    vendor_city.val('');
                    vendor_cateory.val('');
                }
                if(obj.status == '2'){
                    vendor_reg_email.after('<font class="error_reg" style="margin-left: 10%;">'+obj.msg+'.</font>');
                }
                if(obj.status == '0'){
                    $('.vendor_regsuccess').html(obj.msg);
                    $('.vendor_regsuccess').css('color', 'red');
                }

                $('.error_reg').css('color', 'red');

            }
        })
    }


    $('.error_reg').css('color', 'red');
    
})

function validator(selector, message){
    selector.css('border-color', 'red');
    selector.after('<font class="error_reg" style="margin-left: 10%;">'+message+'</font>');
}

function showVendorLoginPassword() {
    var x = document.getElementById("vendorloginpassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
function showVendorRegPassword() {
    var x = document.getElementById("vendorregpassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}