//const { ready } = require("jquery");

// ID validation
function CheckID() {
    var num = document.getElementById("NationalId").value;
    var pattern = /(^[\+]?[\d]{14}$)/;
    if (num.search(pattern) == -1)
      alert("Invalid national ID");
    else
      true;
  }
// Name
function CheckName(){
var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
var name = document.getElementById('nameInput').value;
if(!regName.test(name)){
    alert('Invalid name given.');
}else{
    true;
}
}
  // phone number validation
function CheckNum() {
    var num = document.getElementById("Mobile").value;
    var pattern = /(^[\+]?[\d]{11}$)/;
    if (num.search(pattern) == -1)
      alert("Invalid mobile number");
    else
      true;

  }

  // Email validation
function CheckEmail() {
    var num = document.getElementById("Email").value;
    var pattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (num.search(pattern) == -1)
      alert("Invalid Email");
    else
      true;
  }
 // Password validation
  function matchpass(){
    var fristpassword=document.validform.Password.value;
    var secondpassword=document.validform.RepeatPassword.value;
    
    if(fristpassword!=secondpassword ){
        alert("password must be same!");
        return false;
    }
    else if( fristpassword =="" || secondpassword ==""){
        alert("please, enter password!");
        return false;
        }
    else{
         return true;
    }
    }

    //EmpolyeeCode Validation

function CheckEmployeeCode(){
var employeeId=document.validform.employeeId.value;
if (isNaN(employeeId)){
    alert("please, enter employee code numeric value only!");
    return false;

}else{
  return true;
  }
}
//Birth date validation

$(function(){
    var dtToday = new Date();
    var month = dtToday.getMonth()+1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
    month = '0' + month.toString();
    if(day < 10)
    day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
    $('#last_dental_visit').attr('max', maxDate);
    
})

//Appointment date validation page appointment form

$(function(){
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
     day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
   //console.log(maxDate);
    $('#inputdate').attr('min', maxDate); //id input date
})



/*window.onload=function(){//from ww  w . j  a  va2s. c  o  m
var today = new Date().toISOString().split('T')[0];
document.getElementsByName("datetime")[0].setAttribute('min', today); //Name input Date
}*/



