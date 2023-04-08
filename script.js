/****First Name****/
function checkFirstName() {
    var firstNameLength = $('#firstName').val().length;
    if (firstNameLength >= 6 && firstNameLength <= 15) {
        $('#firstNameError').text(' ');
        return true;
    } else {
        $('#firstNameError').text('First Name should be between 6 to 15 character');
        return false;
    }
};

$('#firstName').click(function () {
    checkFirstName();
});

$('#firstName').blur(function () {
    checkFirstName();
});

$('#firstName').keyup(function () {
    checkFirstName();
});

/****Last Name****/
function checkLastName() {
    var lastNameLength = $('#lastName').val().length;
    if (lastNameLength >= 6 && lastNameLength <= 16) {
        $('#lastNameError').text(' ');
        return true;
    } else {
        $('#lastNameError').text('Last Name should be between 6 to 15 character');
        return false;
    }
};

$('#lastName').click(function () {
    checkLastName();
});

$('#lastName').blur(function () {
    checkLastName();
});

$('#lastName').keyup(function () {
    checkLastName();
});

/***Gender***/
function checkGender() {
    var genderValue = $('input[type="radio"]:checked').val();
    if (genderValue){
        $('#genderError').text(' ');
        return true;
    }else {
       $('#genderError').text('Please Select a Gender');
       return false;
    }
};

$('input[type="radio"]').blur

/***Email***/

function checkEmailAddress() {
    var pattern = new RegExp(/^[+a-zA-z0-9._-]+@[a-zA-z0-9.-]+\.[a-zA-z]{3,3}$/i);
    if (pattern.test($('#e-Mail').val())) {
        $('#mailError').text(' ');
        return true;
    }else 
	{
        $('#mailError').text('Email Address is invalid');
        return false;
    }
};
$('#e-Mail').click(function () {
    checkEmailAddress();
});

$('#e-Mail').blur(function () {
    checkEmailAddress();
});

$('#e-Mail').keyup(function () {
    checkEmailAddress();
});



/***Password***/
function checkPassword(){
	var passwordLength = $('#passWord').val().length;
	if(passwordLength >= 8){
	    $('#passwordError').text(' ');
        return true;
    }else {
	    $('#passwordError').text('Password Length at Least 8 character');
        return false;
    }
};


$('#passWord').blur(function () {
    checkPassword();
});

$('#e-Mail').keyup(function () {
    checkPassword();
});
/******Show PassWord Start******/
$('#checkbox').click(function () {
    if(this.checked){
        $('#passWord').attr('type', 'text');
    } else{
        $('#passWord').attr('type', 'password');
    }
});
/******Show PassWord End******/
/***Confirm Password***/
function checkConfirmPassword(){
    var passwordValue = $('#passWord').val();
    var ConfirmPasswordValue = $('#confirm_password').val();
    if(passwordValue == passwordValue <=15){
        $('#confirmError').text(' ');
        return true;
    }else {
        $('#confirmError').text('Password Not match');
        return false;
    }
};


$('#confirm_password').blur(function () {
    checkPassword();
});

$('#confirm_password').keyup(function () {
    checkPassword();
});

/******District*******/
function checkDistrictName() {
    var districtNameValue = $('#districtName').val();
    if (districtNameValue == ' '){
        $('#districtError').text('Please select Your District');
        return false;
    }else{
        $('#districtError').text(' ');
        return true;
    }
};

$('#districtName').change(function () {
    checkDistrictName();
});


$('#registrationForm').submit(function () {
    if (checkFirstName()== true && checkLastName()==true && checkGender()==true && checkEmailAddress()==true && checkPassword()==true && checkConfirmPassword()==true && checkDistrictName()==true){
        return true;
    }else{
		return false;
	}
});