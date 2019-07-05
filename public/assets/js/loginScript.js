"use strict";

function loginForm() {
    let userLogin = document.getElementById('userLogin');
    let userLoginLength = userLogin.value.length >= 5 && userLogin.value.length <= 8; //Checking is login length

    let userLoginCorrect = userLogin.value.includes('rua') || userLogin.value.includes('ost') || userLogin.value.includes('adm'); // Restriction of login by content
    let userLoginNotMail = userLogin.value.includes('@');

    let userPass = document.getElementById('userPass1');
    let passwordNotEmpty = userPass.value.length < 1; //Check whether the password is entered

    if (userLoginLength) {
    } else {
        alert('Login length is wrong');
        return false;
    }

    if (userLoginCorrect) {
    } else {
        alert('Your login must be rua* или ost*');
        return false;
    }

    if (!userLoginNotMail) {
    } else {
        alert('Email no need to enter');
        return false;
    }

    if (passwordNotEmpty) {
        alert('Password is required!');
        return false;
    } else {

    }
}
loginForm();