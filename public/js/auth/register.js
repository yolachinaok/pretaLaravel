var regexEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

function validarVacio(input) {
    if (input.value.trim() == '') {
        pintarError(input,'Debes completar el campo');
        input.value = '';
        return true;
    }
    return false
}

function pintarError(input, mensaje) {
    input.classList.add('is-invalid');
    var error = document.createElement('span');
    error.setAttribute('class','error-span');
    var strong = document.createElement('strong');
    strong.innerText = mensaje;
    var div = elemento.parentElement;
    console.log(div.children[2])
    if (div.children[2]) {
        div.removeChild(div.children[2]);
    }
    error.append(strong);
    div.append(error);
}

function validateFileExtension(tipo,elemento) 
{
    
 if(!/(\.jpg|\.png|\.jpeg)$/i.test(tipo)) 
   {
    var error = document.createElement('span');
    error.setAttribute('class','error-span');
    var strong = document.createElement('strong');
    strong.innerText = "Archivo inválido. Debe ser .jpg, .jpeg ó .png";
    var div = elemento.parentElement;
    console.log(div.children[2])
    if (div.children[2]) {
        div.removeChild(div.children[2]);
    }
    error.append(strong);
    div.append(error);
     return false;
    }
  return true;
 }

window.onload = function () {
    var form = document.querySelector('form');

 
  
    // email.onblur = function () {
    //     if (regexEmail.test(this.value)) {
    //         this.classList.remove('is-invalid');
    //     }
    // }

    form.onsubmit = function (event) {
        var elementos = this.elements;
        for (elemento of elementos) {
            if (elemento.type == 'submit' || elemento.type == 'hidden') {
                continue;
            }
            if (elemento.type != 'file' && validarVacio(elemento)) {
                event.preventDefault();
            }
            if (elemento.name == 'email' &&  !regexEmail.test(elemento.value)) {
                pintarError(elemento, 'Email inválido');
                event.preventDefault();
            }
            if (elemento.name == 'password') {
                var confirm = document.querySelector('#password-confirm');
                if (elemento.value.length < 8) {
                    pintarError(elemento, 'El password debe tener minimo 8 caracteres');
                    event.preventDefault();
                } else if (elemento.value != confirm.value) {
                    pintarError(elemento, 'Los pass no coinciden');
                    event.preventDefault();
                }
            }
        if (elemento.name == 'password_confirmation'){
      var con= document.querySelector('#password');
      if (elemento.value != con.value) {
        pintarError(elemento, 'Los pass no coinciden');
        event.preventDefault();


        }
        }
        if(elemento.name == 'deacuerdo'){
            console.log(elemento.checked);
            if(!elemento.checked){
           let check=document.querySelector(".de");
      
           check.style.color="red";
           check.style.fontFamily= "'Open Sans', sans-serif";
  check.style.fontSize= '16px';
  check.style.paddingLeft="5px";
           check.innerText="Debes aceptar los Términos y Condiciones";
           event.preventDefault();
        }else{
            let check=document.querySelector(".de");
            check.style.color="black";
            check.style.fontFamily= "'Open Sans', sans-serif";
   check.style.fontSize= '16px';
   check.style.paddingLeft="5px";
            check.innerText="Estoy de acuerdo con los Términos y Condiciones";

        }
    
    }
         
      
      
              
              
        if(elemento.name == 'avatar'){
            validateFileExtension(elemento.value,elemento)
        }
    }
     
}}