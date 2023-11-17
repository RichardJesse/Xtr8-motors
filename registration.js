function registrationValidity() {
    const email = document.querySelector('.email').value;
    const firstname = document.getElementById('firstname').value;
    const lastname = document.getElementById('lastname').value;
    const username = document.querySelector('.username').value;
    const password = document.querySelector('.pass-word').value;
    const nameRegex = /^[a-zA-Z]+$/;
    const usernameRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]+$/;
    const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/;

    if (!(validateEmail(email))) {
        document.querySelector('.mobileerr').innerHTML = 'Invalid email';
    }  if (firstname.trim() === "") {
        document.querySelector('.nameerr').innerHTML = 'Please input your firstname';
    }  if (lastname.trim() === "") {
        document.querySelector('.lnameerr').innerHTML = 'Please input your lastname';
    }  if (password.trim() === "") {
        document.querySelector('.passerr').innerHTML = 'Please input your password';
    }  if (username.trim() === "") {
        document.querySelector('.usernameerr').innerHTML = 'Please input your username';
    }  if (!firstname.match(nameRegex)) {
        document.querySelector('.nameerr').innerHTML = 'Firstname only alphabetical characters';
    }  if (!lastname.match(nameRegex)) {
        document.querySelector('.lnameerr').innerHTML = 'Lastname only alphabetical characters';
    }  if (!username.match(usernameRegex)) {
        document.querySelector('.usernameerr').innerHTML = 'Username should be alphanumeric';
    }  if (password.length < 6 || !password.match(passwordRegex)) {
        document.querySelector('.passerr').innerHTML = 'should be alphanumeric with atleast six values';
    }
}

function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

document.querySelector('.button').addEventListener('click', () => {
    registrationValidity();
});