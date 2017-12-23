function checkFirstName() {
    var firstNameVal = $('#firstName').val();
    if(firstNameVal.length>6 && firstNameVal.length<16){
        $('#firstError').text('');
        return true;
    }else {
        $('#firstError').text('First name should be 7 to 15 character');
        return false
    }
}
$('#firstName').keyup(function () {
    checkFirstName();
});
function checkLastName() {
    var lastNameVal = $('#lastName').val();
    if(lastNameVal.length>6 && lastNameVal.length<16){
        $('#lastError').text(' ');
        return true;
    }else {
        $('#lastError').text('Last name should be 7 to 15 character');
        return false;
    }
}
$('#lastName').keyup(function () {
    checkLastName();
});
function checkEmailAddress() {
    var emailAddressValue = $('#emailAddress').val();
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{3,3}$/i);
    if (pattern.test(emailAddressValue)){
        $('#emailError').text(' ');
        return true;
    }else {
        $('#emailError').text('Your email address is invalid');
        return false;
    }
}
$('#emailAddress').keyup(function () {
    checkEmailAddress();
});
function checkPassword() {
    var passwordVal = $('#password').val();
    if (passwordVal.length > 7){
        $('#passError').text(' ');
        return true;
    }else {
        $('#passError').text('Password must be minimum 8 digit')
        return false
    }
}
$('#password').keyup(function () {
    checkPassword();
});
function checkConfirmPassword() {
    var passwordVal = $('#password').val()
    var confirmPassVal = $('#confirmPassword').val()

    if (passwordVal == confirmPassVal){
        $('#conPassError').text(' ');
        return true;
    }else {
        $('#conPassError').text('Password & confirm password are not same');
        return false;
    }
}
$('#confirmPassword').keyup(function () {
    checkConfirmPassword();
});
$('#showPassword').click(function () {
    if (this.checked){
        $('#password').attr('type','text');
    }else {
        $('#password').attr('type','password');
    }
});
function checkGender() {
    var genderValue = $('input[type="radio"]:checked').val();
    if(genderValue == "Male"){
        $('#genderError').text(' ');
        return true;
    }else if(genderValue=="Female"){
        $('#genderError').text( );
        return true
    }else {
        $('#genderError').text('Please select gender info');
        return false
    }
}
$().click(function () {
    checkGender();
});
function checkDistrictName() {
    var districtNameVal = $('#districtName').val();
    if(districtNameVal==' '){
        $('#districtNameError').text('Please select a district name');
        return false;
    }else {
        $('#districtNameError').text(' ');
        return true;
    }
}
$('#districtName').click(function () {
    checkDistrictName();
});
$('#myForm').submit(function () {
    if (checkFirstName()==true && checkLastName()==true && checkEmailAddress()== true && checkPassword()==true && checkConfirmPassword()==true && checkGender()==true && checkDistrictName()==true){
        return true;
    }else {
        return false;
    }
});