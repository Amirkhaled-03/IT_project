var pswrd = document.getElementsByName("password");
var StrPswrd = pswrd.toString();

function ValidateEmail(Text) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!Text.value.match(mailformat)) {
        alert("You have entered an invalid email address!");
        document.form1.text1.focus();
        return false;
    }
}

function ConfirmPass(form){
    const password = form.password.value;
    const confirmPassword = form.confirm_password.value;
    if (password == "") {
        alert("Password cannot be empty");
        return false;
    }

    if (password.length < 8){
        alert("Password must be at least 8 characters");
        return false;
    }

    if (!/[a-z]/&&!/[A-Z]/.test(password.charAt(0))) {
        alert("First character has to be a letter ")
        return false;
    }
    
    if (password.charAt(0) !== password.charAt(0).toUpperCase()) {
        alert("First letter of password should be capital");
        return false;
    }

    if (!/[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/.test(password)) {
        alert("Password must contain a special character");
        return false;
    }

    if (!/[a-z]/ &&!/[A-Z]/.test(password)) {
        alert("Password should be alphanumeric");
        return false;
    }

    if(password != confirmPassword){
        alert("Passwords do not match, please check them")
        return false; 
    }

}

/^[^\s@]+@[^\s@]+\.[^\s@]+$/ emailpattern