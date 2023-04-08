$('#btn').click(function () {
    var firstNameValue=$('#firstName').val();
    var lastNameValue=$('#lastName').val();
    var fullName = firstNameValue+' '+lastNameValue;

    $('#fullName').val(fullName);

});







// alert($('#h1').text('Hello world'));
// var redBtnElement = document.getElementById('redBtn');
// redBtnElement.onmouseover=function () {
//  var divOneElement = document.getElementById('divOne');
//     // divOneElement.style.backgroundColor ='red';
//     divOneElement.className='class-one';
// }

// var greenBtnElement = document.getElementById('greenBtn');
// greenBtnElement.onclick=function () {
//     var divOneElement = document.getElementById('divOne');
//     // divOneElement.style.backgroundColor ='green';
//     divOneElement.className='class-two';
// }

// var blueBtnElement = document.getElementById('blueBtn');
// blueBtnElement.onclick=function () {
//     var divOneElement = document.getElementById('divOne');
//     // divOneElement.style.backgroundColor ='blue';
//     divOneElement.className='class-three';
// }

// var defaultBtnElement = document.getElementById('defaultBtn');
// defaultBtnElement.onclick=function () {
//     var divOneElement = document.getElementById('divOne');
//     // divOneElement.style.backgroundColor ='white';
//     divOneElement.className='class-three';


// }

// var btnElement =document.getElementById('btn');
// btnElement.onclick = function () {
//   var firstNumberValue =Number( document.getElementById('firstNumber').value);
//   var endingNumberValue =Number( document.getElementById('endingNumber').value);

//   var res='';
//   for(var x=firstNumberValue; x<=endingNumberValue; x++){
//       // document.write(x+' ');
//       res+=x;
//   }

// };