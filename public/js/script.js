// form swipper
const logregBox = document.querySelector('.logreg-box');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');


registerLink.addEventListener('click', () => {
    logregBox.classList.add('active')
})

loginLink.addEventListener('click', () => {
    logregBox.classList.remove('active')
})

// form input
        var usr = document.getElementById('mail');

        var password = document.getElementById('fakePassword');
        var password2 = document.getElementById('fPassword');
        var toggler = document.getElementById('toggler');
        var eyreg = document.getElementById('eyreg');


        showHidePassword = () => {
            if (password.type === 'password') {

                password.setAttribute('type', 'text');
                toggler.classList.add('fa-eye-slash');
            } else {

                toggler.classList.remove('fa-eye-slash');
                password.setAttribute('type', 'password');
            }
        };

        toggler.addEventListener('click', showHidePassword);

        showHidePassword2 = () => {
            if (password2.type === 'password') {

                password2.setAttribute('type', 'text');
                eyreg.classList.add('fa-eye-slash');
            } else {

                eyreg.classList.remove('fa-eye-slash');
                password2.setAttribute('type', 'password');
            }
        };

        eyreg.addEventListener('click', showHidePassword2);

        if(usr.type == 'email'){
            usr.setAttribute('type', 'text');

        }else{
            usr.setAttribute('type', 'email');

        }


       
