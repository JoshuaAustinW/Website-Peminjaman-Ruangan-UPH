function generateRandomCode() {
    var randomCode = '';
    for (var i = 0; i < 6; i++) {
      // Generate a random digit (0 to 9)
      var digit = Math.floor(Math.random() * 10);
      randomCode += digit;
    }
    return randomCode;
  }
  

function validateEmail() {
    var emailInput = document.getElementById('email');
    var emailValue = emailInput.value.trim();
    var emailError = document.getElementById('emailError');
    var emailPattern = /^[a-zA-Z0-9._%+-]+@(?:[a-zA-Z0-9-]+\.)?uph\.edu$/;

    if (!emailPattern.test(emailValue)) {
        emailError.innerHTML = 'Email is not in the uph.edu format or empty';
    }
    else {
        emailError.innerHTML = '';
        // Generate OTP
        var randomCode = generateRandomCode();
        window.location.href="../HomePage/index.html";
    }
  }