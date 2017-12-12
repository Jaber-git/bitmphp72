
var btnElement = document.getElementById('btnPlus');
btnElement.onclick = function () {
    var firstValue = document.getElementById('firstNumber').value;
    var secondValue = document.getElementById('secondNumber').value;
    var fullValue = parseInt(firstValue) + parseInt(secondValue);

    document.getElementById('fullNumber').value=fullValue;

}
var btnElement = document.getElementById('btnMinus');
btnElement.onclick = function () {
    var firstValue = document.getElementById('firstNumber').value;
    var secondValue = document.getElementById('secondNumber').value;
    var fullValue = parseInt(firstValue) - parseInt(secondValue);

    document.getElementById('fullNumber').value=fullValue;

}
var btnElement = document.getElementById('btnMulti');
btnElement.onclick = function () {
    var firstValue = document.getElementById('firstNumber').value;
    var secondValue = document.getElementById('secondNumber').value;
    var fullValue = parseInt(firstValue) * parseInt(secondValue);

    document.getElementById('fullNumber').value=fullValue;

}
var btnElement = document.getElementById('btnDiv');
btnElement.onclick = function () {
    var firstValue = document.getElementById('firstNumber').value;
    var secondValue = document.getElementById('secondNumber').value;
    var fullValue = parseInt(firstValue) / parseInt(secondValue);

    document.getElementById('fullNumber').value=fullValue;

}
var btnElement = document.getElementById('btnMod');
btnElement.onclick = function () {
    var firstValue = document.getElementById('firstNumber').value;
    var secondValue = document.getElementById('secondNumber').value;
    var fullValue = parseInt(firstValue) % parseInt(secondValue);

    document.getElementById('fullNumber').value=fullValue;

}

