


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
  strong.innerText = mensaje;
  var div = elemento.parentElement;
  console.log(div.childern[2])
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
  var editar = document.getElementById('editar');
  
  btn.onclick = function show(){
    editar.removeAttribute("style");
  };

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
        

        if(elemento.name == 'avatar'){
            validateFileExtension(elemento.value,elemento)
        }
    }
}


}
