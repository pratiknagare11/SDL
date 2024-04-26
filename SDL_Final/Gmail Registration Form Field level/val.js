function firstFocus() {
    document.gmailform.firstName.focus();
  }

  var fname = document.gmailform.firstName;
  var lname = document.gmailform.lastName;
  var number = document.gmailform.phoneNumber;
  var email = document.gmailform.Email;
  var username = document.gmailform.userName;
  var pass = document.gmailform.Password;
  var addr = document.gmailform.Address;
  var country = document.gmailform.country;
  
  var alertShown = false;

//   if (
//     fname == "" ||
//     lname == "" ||
//     number == "" ||
//     email == "" ||
//     username == "" ||
//     pass == ""
//   ) {
//     alert("Fill all details!!");
//     return false;
//   }

  function allLetterFirst() {
    var letters = /^[A-Za-z]+$/;
    if (fname.value == "" || !fname.value.match(letters)) {
      if (!alertShown) {
        alert("Name must have alphabet characters only");
        alertShown = true; // Set flag to true
      }
      fname.focus(); // Keep focus on the same field
      return false;
    }
    alertShown = false; // Reset flag if validation succeeds
    return true;
  }

  function allLetterLast() {
    var letters = /^[A-Za-z]+$/;
    if (lname.value == "" || !lname.value.match(letters)) {
      if (!alertShown) {
        alert("Name must have alphabet characters only");
        alertShown = true; // Set flag to true
      }
      lname.focus(); // Keep focus on the same field
      return false;
    }
    alertShown = false; // Reset flag if validation succeeds
    return true;
  }

  function allnumeric() {
    var phoneRegex = /^\d{10}$/;
    if (!phoneRegex.test(number.value)) {
        if(!alertShown){
      alert("Please enter a valid 10-digit phone number.");
      alertShown = true;
        }
      number.focus(); // Keep focus on the same field
      return false;
    }
    alertShown = false; // Reset flag if validation succeeds
    return true;
  }

  function validateemail() {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;  
    if (!emailRegex.test(email.value)) {
        if(!alertShown){
      alert("Please enter a valid email address.");
      alertShown = true;
        }
      email.focus(); // Keep focus on the same field
      return false;
    }
    alertShown = false; // Reset flag if validation succeeds
    return true;
  }

  function uservalidation() {
    if (
      username.value.length == 0 ||
      username.value.length <= 4 ||
      username.value.length >= 8
    ) {
        if(!alertShown){
      alert("UserName should not be empty / length be between 4-8");
      alertShown = true;
        }
      username.focus(); // Keep focus on the same field
      return false;
    }
    alertShown = false;
    return true;
  }

  function passvalidation() {
    if (pass.value.length == 0 || pass.value.length <= 4 || pass.value.length >= 8) {
        if(!alertShown){
      alert("Password should not be empty / length be between 4-8");
      alertShown = true;
        }
      pass.focus(); // Keep focus on the same field
      return false;
    }
    alertShown = false;
    return true;
  }

  function alphanumeric() {
    var letters = /^[0-9a-zA-Z]+$/;
    if (!addr.value.match(letters)) {
      if (!alertShown) {
        alert("User address must have alphanumeric characters only");
        alertShown = true; // Set flag to true
      }
      addr.focus(); // Keep focus on the same field
      return false;
    }
    alertShown = false; // Reset flag if validation succeeds
    return true;
  }

  function countryselect() {
    if (country.value == "Default") {
      if (!alertShown) {
        alert("Select your country from the list");
        alertShown = true; // Set flag to true
      }
      country.focus(); // Keep focus on the same field
      return false;
    }
    alertShown = false; // Reset flag if validation succeeds
    return true;
  }

  function validateform(event) {
    if (!allLetterFirst()) {
      event.preventDefault(); // Prevent form submission
      return false;
    }
    if (!allLetterLast()) {
      event.preventDefault(); // Prevent form submission
      return false;
    }
    if (!alphanumeric()) {
      event.preventDefault(); // Prevent form submission
      return false;
    }
    if (!countryselect()) {
      event.preventDefault(); // Prevent form submission
      return false;
    }
    if (!allnumeric()) {
      event.preventDefault(); // Prevent form submission
      return false;
    }
    if (!validateemail()) {
      event.preventDefault(); // Prevent form submission
      return false;
    }
    if (!uservalidation()) {
      event.preventDefault(); // Prevent form submission
      return false;
    }
    if (!passvalidation()) {
      event.preventDefault(); // Prevent form submission
      return false;
    }
    alert("Form Submitted Successfully!");
    return true;
  }