$('#img1').click(function () {
    var imgUrl = $(this).attr('src');
    $('#mainImage').attr('src', imgUrl);
});
$('#img2').click(function () {
    var imgUrl = $(this).attr('src');
    $('#mainImage').attr('src', imgUrl);
});
$('#img3').click(function () {
    var imgUrl = $(this).attr('src');
    $('#mainImage').attr('src', imgUrl);
});
$('#img4').click(function () {
    var imgUrl = $(this).attr('src');
    $('#mainImage').attr('src', imgUrl);
});

$('#submitBtn').click(function () {
    var firstName = $('#firstName').val();
    var lastName = $('#lastName').val();

    var fullName = firstName+' '+lastName;
    $('#fullName').html(fullName);
});

// var buttonAdd = document.getElementById('buttonAdd');
// buttonAdd.onclick = function () {
//     var newHeadingElement = document.createElement("h1");
//     var newParagraphElemnt = document.createElement('p');
//
//     newHeadingElement.innerHTML = 'This is a heading element';
//     newParagraphElemnt.innerHTML = 'This is a paragraph element';
//
//     document.getElementById('div').appendChild(newHeadingElement);
//     document.getElementById('div').appendChild(newParagraphElemnt);
// }
// var buttonRemove = document.getElementById('buttonRemove');
// buttonRemove.onclick = function () {
//     var newHeadingElement = document.createElement("h1");
//     var newParagraphElemnt = document.createElement('p');
//
//     newHeadingElement.innerHTML = 'This is a heading element';
//     newParagraphElemnt.innerHTML = 'This is a paragraph element';
//
//     document.getElementById('div').appendChild(newHeadingElement);
//     document.getElementById('div').appendChild(newParagraphElemnt);
// }
// var headingElemnt = document.getElementById('h1');
// headingElemnt.onclick = function () {
//     headingElemnt.style.color = 'red';
// }
// $('#h1').click(function () {
//     $('#h1').css('color','red');
// });

// $('#h1').click(function () {
//     $(this).css({
//         'color':'red',
//         'background-color':'black'
//     });
// })