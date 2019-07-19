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
   
    var form = document.querySelector('#editar');
    console.log(form);
    
      form.onsubmit = function (event) {
       
          var elementos = this.elements;
  
          for (elemento of elementos) {
            console.log(elemento);
              if (elemento.type == 'submit' || elemento.type == 'hidden') {
                  continue;
              }
              if (elemento.type != 'file'  && elemento.name != 'discount' &&  validarVacio(elemento,3)) {
                event.preventDefault();  
              }
  
           
            
              if(elemento.name == 'category_id'){
             if(elemento.value == ""){
                pintarError(elemento, 'Debes seleccionar una categoría',3);
                event.preventDefault();}

              }

           if(valido==false){
            event.preventDefault();
           }
            
  
    
 
      }
  }

 const f1=document.querySelector("#foto1");
 const f2=document.querySelector("#foto2");
 const f3=document.querySelector("#foto3");
 let valido=true;

f1.addEventListener("change",function(event){
    valido=true;
    validateFileExtension(f1.value,f1);
   
    console.log(f1.value);
 if(validateFileExtension(f1.value,f1)==false && valido == true){
  event.preventDefault();
  valido=false;
 }else{
var display=document.querySelector(".f1 .error-span");
display.style.display="none";

  
}
});

f2.addEventListener("change",function(event){
    valido=true;
    validateFileExtension(f2.value,f2);
   
    console.log(f2.value);
 if(validateFileExtension(f2.value,f2)==false && valido == true){
  event.preventDefault();
  valido=false;
 }else{
var display=document.querySelector(".f2 .error-span");
display.style.display="none";

  
}
});


f3.addEventListener("change",function(event){
    valido=true;
    validateFileExtension(f3.value,f3);
   
    console.log(f3.value);
 if(validateFileExtension(f3.value,f3)==false && valido == true){
  event.preventDefault();
  valido=false;
 }else{
var display=document.querySelector(".f3 .error-span");
display.style.display="none";

  
}
});
  
  }
  