
//console.log("ESTOY ANDANDO");

function validarVacio(input) {
  if (input.value.trim() == '') {
      pintarError(input, 'Debe de estar lleno');
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
  strong.innerText = "El campo debe estar lleno";
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

window.onload = function(){
  var btn = document.querySelector('.boton-gris');
  var form = document.querySelector('#editar');

  btn.addEventListener("click",()=>{
    if (form.style.display === "none") {
      form.style.display = "block";
    } else if(form.style.display === "block") {
      form.style.display = "none";
    }
  }
  )



  console.log(form);
    // email.onblur = function () {
    //     if (regexEmail.test(this.value)) {
    //         this.classList.remove('is-invalid');
    //     }
    // }

    form.onsubmit = function (event) {
     
        var elementos = this.elements;

        for (elemento of elementos) {
          console.log(elemento);
            if (elemento.type == 'submit' || elemento.type == 'hidden') {
                continue;
            }
            if (elemento.type != 'file'  && validarVacio(elemento)) {
                event.preventDefault();
            }




        if(elemento.name == 'avatar'){
          
            validateFileExtension(elemento.value,elemento);
            console.log(elemento.value);
         if(validateFileExtension(elemento.value,elemento)==false){
          event.preventDefault();
         }
        }

    }
}
event.preventDefault();

}
