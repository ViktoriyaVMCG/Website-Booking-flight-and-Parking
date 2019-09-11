// James Abney 900395800 Quiz 2
var register = document.querySelector('#register')
var fullName = document.querySelector('#fullName')
var email = document.querySelector('#email')
var password = document.querySelector('#password')
var passwordConfirm = document.querySelector('#passwordConfirm')
var formErrors = document.querySelector('#formErrors')
var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,5}$/
var passwordErrorExists = false
var errorExists = false
var li

register.addEventListener('submit', checkForm)

function checkForm(e){
    e.preventDefault();
    passwordErrorExists = false
    errorExists = false
    formErrors.innerHTML = "";
    document.getElementById('formErrors').style.display = "none";

    if(fullName.value.length < 1){
        document.getElementById('fullName').style.border = "2px red solid";
        createLI("Missing full name.")
    }else{
        document.getElementById('fullName').style.border = "1px #aaa solid";
    }

    if(!emailRegex.test(email.value)){
        document.getElementById('email').style.border = "2px red solid";
        createLI("Invalid or missing email address.")
    }else{
        document.getElementById('email').style.border = "1px #aaa solid";
    }

    if(password.value.length < 10){
        document.getElementById('password').style.border = "2px red solid";
        createLI("Password must be between 10 and 20 characters.")
        passwordErrorExists = true;
    }else if(password.value.length > 20){
        document.getElementById('password').style.border = "2px red solid";
        createLI("Password must be between 10 and 20 characters.")
        passwordErrorExists = true;
    }else{
        document.getElementById('password').style.border = "1px #aaa solid";
    }

    if(!hasLowerCase(password.value)){
        document.getElementById('password').style.border = "2px red solid";
        createLI("Password must contain at least one lowercase character.")
        passwordErrorExists = true;
    }else if(!passwordErrorExists){
        document.getElementById('password').style.border = "1px #aaa solid";
    }
    
    if(!hasUpperCase(password.value)){
        document.getElementById('password').style.border = "2px red solid";
        createLI("Password must contain at least one uppercase character.")
        passwordErrorExists = true;
    }else if(!passwordErrorExists){
        document.getElementById('password').style.border = "1px #aaa solid";
    }

    if(!hasNumber(password.value)){
        document.getElementById('password').style.border = "2px red solid";
        createLI("Password must contain at least one digit.")
        passwordErrorExists = true;
    }else if(!passwordErrorExists){
        document.getElementById('password').style.border = "1px #aaa solid";
    }

    if(password.value != passwordConfirm.value){
        document.getElementById('password').style.border = "2px red solid";
        document.getElementById('passwordConfirm').style.border = "2px red solid";
        createLI("Password and confirmation password don't match.")
        passwordErrorExists = true;
    }else if(!passwordErrorExists){
        document.getElementById('passwordConfirm').style.border = "1px #aaa solid";
    }

    if(!errorExists){
        document.getElementById('formErrors').style.display = "none";
        postToPHP()
    }
}

function hasLowerCase(str) {
    if(str.toUpperCase() != str) {
        return true;
    }
    return false;
}

function hasUpperCase(str) {
    if(str.toLowerCase() != str) {
        return true;
    }
    return false;
}

function hasNumber(str) {
    return /\d/.test(str);
}

function createUL() {
    if(!errorExists){
        console.log("test")
        ul = document.createElement('ul')
        formErrors.appendChild(ul)
        errorExists = true;
    }else  
        errorExists = true;
}

function createLI(str) {
    document.getElementById('formErrors').style.display = "block";
    document.getElementById('formErrors').style.color = "red";
    document.getElementById('formErrors').style.alignContent = "center";
    createUL()
    var li = document.createElement('li')
    li.appendChild(document.createTextNode(str))
    ul.appendChild(li)
}

function postToPHP () {
    var theForm, newFullName, newEmail, newPassword, newPasswordConfirm;
    // Start by creating a <form>
    theForm = document.createElement('form');
    theForm.action = 'print.php';
    theForm.method = 'post';
    // Next create the <input>s in the form and give them names and values
    newFullName = document.createElement('input');
    newFullName.type = 'hidden';
    newFullName.name = 'name';
    newFullName.value = fullName.value;
    newEmail = document.createElement('input');
    newEmail.type = 'hidden';
    newEmail.name = 'email';
    newEmail.value = email.value;

    newPassword = document.createElement('input');
    newPassword.type = 'hidden';
    newPassword.name = 'password';
    newPassword.value = password.value;

    newPasswordConfirm = document.createElement('input');
    newPasswordConfirm.type = 'hidden';
    newPasswordConfirm.name = 'passwordConfirm';
    newPasswordConfirm.value = passwordConfirm.value;
    // Now put everything together...
    theForm.appendChild(newFullName);
    theForm.appendChild(newEmail);
    theForm.appendChild(newPassword);
    theForm.appendChild(newPasswordConfirm);
    // ...and it to the DOM...
    document.getElementById('hidden_form_container').appendChild(theForm);
    // submit it
    theForm.submit();
  }