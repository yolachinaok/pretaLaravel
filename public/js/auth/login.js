var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;


window.onload = function () {
    var form = document.querySelector('form');
console.log(form);
    var email = document.querySelector('#email');
    var password = document.querySelector('#password');

   /* email.onblur = function () {
        if (regexEmail.test(this.value)) {
            this.classList.remove('error-span');
        }
    }*/

    form.onsubmit = function (event) {
        //event.preventDefault();
        if (!regexEmail.test(email.value)) {
            email.classList.add('is-invalid');
            var error = document.createElement('span');
            error.classList.add('error-span');
            error.innerText = 'Debes completar tu email';
            var div = email.parentElement;
            console.log(div.children[4]);
            if (div.children[4]) {
                div.removeChild(div.children[4]);
            }
            div.append(error);
            event.preventDefault();
        }

        if (password.value.trim() == '') {
            password.classList.add('is-invalid');
            var error = document.createElement('span');
            error.classList.add('error-span');
            error.innerText = 'Debes completar la contraseña';
            var div = password.parentElement;
            
            if (div.children[4]) {
                div.removeChild(div.children[4]);
            }
            div.append(error);
            event.preventDefault();
            password.value = '';
        }




        console.log('se esta enviando');

    }
}