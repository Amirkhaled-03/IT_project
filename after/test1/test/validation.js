function validateForm() {
    var first_name = document.forms["register"]["first_name"].value;
    var last_name = document.forms["register"]["last_name"].value;
    var email = document.forms["register"]["email"].value;
    var password = document.forms["register"]["password"].value;
    var confirm_password = document.forms["register"]["confirm_password"].value;

    if (first_name == "") {
        alert("First name must be filled out");
        return false;
    }

    if (last_name == "") {
        alert("Last name must be filled out");
        return false;
    }

    if (email == ""){
        alert("Email must be filled out");
        return false;
    } else if (!ValidateEmail(email)) {
        alert("Please enter a valid email address");
        return false;
    }

    if (password == "") {
        alert("Password must be filled out");
        return false;
    } else if (password.length < 8){
        alert("Password must be at least 8 characters");
        return false;
    } else if (!/[abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ]/.test(password)) {
        alert("Password should be alphanumeric");
        return false;
    } else if (!/[abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ]/.test(password.charAt(0))) {
        alert("First character Should be letter ")
        return false;
    } else if (password.charAt(0) !== password.charAt(0).toUpperCase()) {
        alert("First letter of password should be capital");
        return false;
    } else if (!/[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/.test(password)) {
        alert("Password must contain a special character");
        return false;
    }

    if (confirm_password == "") {
        alert("Confirm Password must be filled out");
        return false;
    } else if (password != confirm_password) {
        alert("Passwords do not match");
        return false;
    }
}

function ValidateEmail(email) {
    var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return emailPattern.test(email);
}