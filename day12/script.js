var redBtn = document.getElementById('redBtn');
var greenBtn = document.getElementById('greenBtn');
var blueBtn = document.getElementById('blueBtn');
var defaultBtn = document.getElementById('defaultBtn');

var upBtn = document.getElementById('upBtn');
var downBtn = document.getElementById('downBtn');

redBtn.onclick= function () {
    var divElement = document.getElementById('div');
    divElement.className = 'class-one';
    // divElement.style.backgroundColor = 'red';
    // divElement.innerHTML = ''
    // divElement.style.height = '200px';
    // divElement.style.width = '200px';
    // divElement.style.borderRadius = '100px';

}

upBtn.onclick= function () {
    var divElement = document.getElementById('div');
    divElement.className = 'up';
}
downBtn.onclick= function () {
    var divElement = document.getElementById('div');
    divElement.className = 'down';
}

greenBtn.onclick= function () {
    var divElement = document.getElementById('div');
    divElement.className = 'class-two';
    // divElement.style.backgroundColor = 'green';
}
blueBtn.onclick= function () {
    var divElement = document.getElementById('div');
    divElement.className = 'class-three';
    // divElement.style.backgroundColor = 'blue';
}
defaultBtn.onclick= function () {
    var divElement = document.getElementById('div');
    divElement.className = 'class-default';
    // divElement.style.backgroundColor = 'white';
}


// document.getElementById('').value;
// document.getElementById('').innerHTML;
// document.getElementById('').getAttribute('src');
//
// document.getElementById('').value = 'fds';
// document.getElementById('').innerHTML = 'fds';
// document.getElementById('').setAttribute('src', '1.jpg');


// var submit = document.getElementById('submit');
//
// submit.onclick = function () {
//     var firstNumber = document.getElementById('firstNumber').value;
//
//     var lastNumber = Number(document.getElementById('lastNumber').value);
//
//
//     var result = document.getElementById('result');
//
//     var res = '';
//     for (var i = firstNumber; i<=lastNumber; i++){
//         res+= i;
//     }
//     result.innerHTML = res;
// }



// -----------------
//
// var firstName = document.getElementById('firstName');
//
// firstName.onkeyup = function () {
//
//     firstNameValue = document.getElementById('firstName').value;
//     document.getElementById('firstValue').innerHTML= firstNameValue;
//
// }
//
// lastName.onkeyup = function () {
//
//     lastNameValue = document.getElementById('lastName').value;
//     document.getElementById('lastValue').innerHTML= lastNameValue;
// }
//
// lastName.onblur = function () {
//     var fullName = firstNameValue +" "+ lastNameValue;
//     document.getElementById('fullName').innerHTML=fullName;
// }