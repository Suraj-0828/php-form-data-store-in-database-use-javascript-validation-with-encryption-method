
function validateForm() {
    var nameInput = document.getElementById('name');
    var emailInput = document.getElementById('email');
    var phoneInput = document.getElementById('phone');

    var name = nameInput.value.trim();
    var email = emailInput.value.trim();
    var phone = phoneInput.value.trim();

    var namePattern = /^[a-zA-Z\s]+$/;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var phonePattern = /^\d+$/;

    var isValid = true;

    if (!namePattern.test(name)) {
        document.getElementById('nameError').textContent = 'Please enter a valid name (only alphabets and spaces)';
        isValid = false;
    } else {
        document.getElementById('nameError').textContent = '';
    }

    if (!emailPattern.test(email)) {
        document.getElementById('emailError').textContent = 'Please enter a valid email address';
        isValid = false;
    } else {
        document.getElementById('emailError').textContent = '';
    }

    if (!phonePattern.test(phone)) {
        document.getElementById('phoneError').textContent = 'Please enter a valid phone number (only digits)';
        isValid = false;
    } else {
        document.getElementById('phoneError').textContent = '';
    }

    return isValid;
}
