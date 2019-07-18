//console.log("ESTOY ANDANDO");

function validarVacio(input,num) {
    if (input.value.trim() == '') {
        pintarError(input, 'Debe estar lleno',num);
        input.value = '';
        return true;
    }
    return false
  }
  
  function pintarError(input, mensaje, num) {
    input.classList.add('is-invalid');
    var error = document.createElement('span');
    error.setAttribute('class','error-span');
    var strong = document.createElement('strong');
    strong.innerText = mensaje;
    var div = elemento.parentElement;
    console.log(div.children[num])
    if (div.children[num]) {
        div.removeChild(div.children[num]);
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
    console.log(div.children[3])
    if (div.children[3]) {
        div.removeChild(div.children[3]);
    }
    error.append(strong);
    div.append(error);
     return false;
    
    }
  return true;
  }
  
  window.onload = function(){
   
    var form = document.querySelector('#alta');
    console.log(form);
    
      form.onsubmit = function (event) {
       
          var elementos = this.elements;
  
          for (elemento of elementos) {
            console.log(elemento);
              if (elemento.type == 'submit' || elemento.type == 'hidden') {
                  continue;
              }
              if (elemento.type != 'file'  &&  validarVacio(elemento,3)) {
                event.preventDefault();  
              }
  
           
            
              if(elemento.name == 'category_id'){
             if(elemento.value == ""){
                pintarError(elemento, 'Debes seleccionar una categoría',3);
                event.preventDefault();}

              }
            
  
          if(elemento.name == 'photo1' || elemento.name == 'photo2' || elemento.name == 'photo3' ){
            
              validateFileExtension(elemento.value,elemento);
              console.log(elemento.value);
           if(validateFileExtension(elemento.value,elemento)==false){
            event.preventDefault();
           }
          }
 
      }
  }
  
  }
  