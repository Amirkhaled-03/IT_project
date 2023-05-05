function ValidateEmail(form)
{
const firstname = form.first_name.value;
if (firstname == ""){
    alert("Please enter your first name");
    return false
}
const lastname = form.last_name.value;
if (lastname == ""){
    alert("Please enter your last name");
    return false
}
const Text = form.email.value;
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(!Text.match(mailformat))
{
    alert("Enter a valid email address");
    return false;
}
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
if (!/[abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ]/.test(password)) {
    alert("Password should be alphanumeric");
    return false;
    }
if (!/[abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ]/.test(password.charAt(0))) {
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
if(password != confirmPassword){
        alert("Passwords do not match, please check them")
        return false; 
    }
}