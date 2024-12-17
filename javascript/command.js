var passwordInput = document.getElementById("password");
var rePasswordInput = document.getElementById("repassword");
var emailInput = document.getElementById("email");

// Checking password matching, strength, and email validity
function validateForm() {
    var password = passwordInput.value;
    var confirmPassword = rePasswordInput.value;
    var email = emailInput.value;

    if (password === confirmPassword && password.length > 5 && isStrongPassword(password) && isValidEmail(email)) {
        return true;
    } else {
        if (password !== confirmPassword) {
            alert("Make sure password matches confirm password");
        } else if (password.length <= 5) {
            alert("Password should be at least 6 characters long");
        } else if (!isStrongPassword(password)) {
            alert("Password should contain at least one uppercase letter, one lowercase letter, one digit, and one special character");
        } else if (!isValidEmail(email)) {
            alert("Please enter a valid email address");
        }
        return false;
    }
}

// Toggle Password Visibility on and off
function togglePasswordVisibility() {
    const password = document.getElementById("password");
    if (password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
}

// Check if password is a strong password
function isStrongPassword(password) {
    var strongPasswordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{6,}$/;
    return strongPasswordRegex.test(password);
}

// Check if email is valid
function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}