
var btnElement = document.getElementById('btnPlus');
btnElement.onclick = function () {
    var firstNameValue = document.getElementById('firstName').value;
    var lastNameValue = document.getElementById('lastName').value;
    var fullNameValue = firstNameValue +' '+ lastNameValue;

    document.getElementById('fullName').value=fullNameValue;

}

