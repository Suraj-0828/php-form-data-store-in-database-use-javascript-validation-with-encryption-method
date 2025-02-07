<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Vihang Group</title>
    <link rel="icon" href="assets/image/vihnag-logo.webp" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

    <!-- Contact Form Start -->
    <div class="container">
        <form id="myForm" action="backend.php" method="post" onsubmit="return validateForm()">
            <div class="logo-box">
                <img class="logo-fix" src="assets/image/vihnag-logo.webp" />
            </div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <span id="nameError" class="error"></span>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <span id="emailError" class="error"></span>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>
            <span id="phoneError" class="error"></span>

            <button type="submit">Submit</button>
        </form>
    </div>
    <!-- Contact Form Close -->


    <!-- Javascript Link Start -->
    <script>
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
    </script>
    <!-- Javascript Link Close -->

</body>

</html>