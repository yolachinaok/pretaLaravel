<?php
session_start();

// INICIALIZO VARIABLES
  $nombre='';
  $apellido='';
  $email='';

// INICIALIZO VARIABLES DE ERROR
$errorEmailLogin='';
$errorPassLogin='';


if ($_POST) {
  require_once('validacionesLogReg.php');
}

//Si esta logueado, redirigir al HOME
 if(!empty($_SESSION['email'])){
     header('location: ../index.html');
}

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="../estilos/style-login.css">
    <title>Preta Shop - Login</title>
  </head>
  <body>
    @include("partials/header")

<!-- Un contenedor para ambos formularios -->
<div class="contenedor">

<div class="contenedor-formulario">

    <!-- LOGIN -->
    <div class="borde-titulo">
      <div class="contenedor-titulo margen-izq">
        <h2 class="titulo">INGRESA</h2>
      </div>
    </div>

    <!-- formulario de login -->
    <div class="padding-eje-y">
      <form class="margen-izq" action="../login.php" method="post">

        <label class="label-desktop" for="email-login" value="<?php echo $email ?>">
          Correo Electrónico
        </label> <br>
          <input class="input-blanco" type="email" id="email-login" name="email-login">

        <span class="separador"></span>

        <label class="label-desktop" for="pass-login">
          Contraseña
        </label><br>
          <input class="input-blanco" type="password" id="pass-login" name="pass-login">

        <span class="separador-xs"></span>

        <br><label class="label-desktop" for="recordarme"></label>
          <input type="checkbox" name="recordarme" id="recordarme" value="1"> Recordarme

        <span class="separador-s"></span>

        <p class="boton">
          <button class="boton-gris" type="submit" name="ingresar" id="ingresar">INGRESAR</button>
        </p>
      </form>

      <span class="separador-s"></span>

        <div class="contenedor">
          <p class="margen-izq">
            <a id="enlace-olvide" href="#">olvidé mi contraseña y/o correo electrónico</a>
          </p>
        </div>
    </div>
  </div>


<!-- BOTONES TOP Y BACK -->
<div id="seccion-back-top">

  <div id="volver">
    <i class="material-icons">
    keyboard_arrow_left
    </i>
    <a id="volver-atras"href="home.html">VOLVER ATRAS</a>
    </div>
  <div id="top">
    <i class="material-icons">
    keyboard_arrow_up
  </i>
  <a id="palabra-top"href="#">TOP</a>
   </div>
</div>
</div>

  @include("partials/footer")
  </body>
</html>
