/****National Id */
function validateNationalID() {
  var nationalID = document.getElementById("NationalId").value;
  var pattern = /(^[\+]?[\d]{14}$)/;
  
  var errorMessage = "";

  if (nationalID == "") {
    errorMessage = "National ID is required.";
  } else  if (nationalID.search(pattern) == -1) {
    errorMessage = "National ID is not valid.";
  }else{
      true;
  }

  document.getElementById("national-id-error").innerHTML = errorMessage;

  return errorMessage == "";

}
document.querySelector("form").addEventListener("submit", function(event) {
  if (!validateNationalID()) {
    event.preventDefault();
  }
});
/*****Name */
function validateName() {
  const nameField = document.getElementById("nameInput");
  const nameError = document.getElementById("name-error");
  const nameValue = nameField.value.trim();

  // check if name field is empty
  if (nameValue === "") {
    nameError.textContent = "Name field cannot be empty";
    return false;
  }

  // check if name contains invalid characters
  const namePattern = /^[A-Za-z\s]+$/;
  if (!namePattern.test(nameValue)) {
    nameError.textContent = "Name must be contain only characters";
    return false;
  }

  // name is valid
  return true;
}


/***********Email */
const emailInput = document.getElementById("Email");
const emailError = document.getElementById("email-error");

emailInput.addEventListener("input", function(event) {
  if (emailInput.validity.valid) {
    // Reset the error message
    emailError.textContent = "";
    emailError.className = "error";
  } else {
    // Display an error message
    emailError.textContent = "Please enter a valid email address";
    emailError.className = "error active";
  }
});
/***password */
document.querySelector("form").addEventListener("submit", function(event) {
  event.preventDefault(); // Prevent the form from submitting

  var password = document.getElementById("Password").value;
  var confirmPassword = document.getElementById("RepeatPassword").value;
  var errorMessage = document.getElementById("error-message");

  if (password != confirmPassword || password == "" ||confirmPassword=="" ) {
    errorMessage.innerHTML = "Password Invalid.";
    return false;
  } else {
    errorMessage.innerHTML = "";
  }

  return true;
});

/***Mobile */
function validateForm() {
  const phoneInput = document.getElementById("Mobile");
  const phone = phoneInput.value;
  const phoneRegex = /^\d{11}$/; // Regex to match 10-digit phone numbers
  var errorMessage = document.getElementById("mobile-message");
  if (!phoneRegex.test(phone)) {
    /*phoneInput.setCustomValidity("Please enter a valid 10-digit phone number.");*/
    errorMessage.innerHTML = "Mobile Number Invaild";
  }
  else {
    errorMessage.innerHTML = "";
  }
  return true;
}
const form = document.querySelector("form");
form.addEventListener("submit", validateForm);
/***Address */
form.addEventListener('submit', (event) => {
  event.preventDefault();
  
  const apartment = document.querySelector('#apartment').value;
  const city = document.querySelector('#street').value;
  const governorate = document.querySelector('#city').value;
  const country = document.querySelector('#country').value;
  var errorMessage = document.getElementById("address-message");
  if (apartment === '' || city === '' || governorate === '' || country === '') {
    errorMessage.innerHTML = "Please fill in all fields.";
    
  } 
});


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

/*****Employee Code */
const numberInput = document.getElementById("employeeId");
const errorMessage = document.getElementById("errorMessage");

numberInput.addEventListener("input", function() {
  const inputValue = numberInput.value;
  if (isNaN(inputValue)) {
    errorMessage.textContent = "Please enter numbers only";
  } else {
    errorMessage.textContent = "";
  }
});


//const { ready } = require("jquery");

// ID validation
/*function CheckID() {
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
})*/



/*window.onload=function(){//from ww  w . j  a  va2s. c  o  m
var today = new Date().toISOString().split('T')[0];
document.getElementsByName("datetime")[0].setAttribute('min', today); //Name input Date
}*/



