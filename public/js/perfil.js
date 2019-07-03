window.onload = function(){
  var btn = document.querySelector('.boton-gris');
  var form = document.getElementById('editar');
  
  btn.onclick = function show(){
    form.removeAttribute("style");
  };



}
