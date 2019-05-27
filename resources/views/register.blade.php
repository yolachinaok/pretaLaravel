<?php
session_start();

// INICIALIZO VARIABLES
  $nombre='';
  $apellido='';
  $email='';

// INICIALIZO VARIABLES DE ERROR
$errorNombre='';
$errorApellido='';
$errorEmailRegistro='';
$errorPassRegistro='';
$errorRepetirPass='';
$errorAvatar='';

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
    <link rel="stylesheet" href="../estilos/style-registro.css">
    <title>Preta Shop - Registro</title>
  </head>
  <body>

<!-- Un contenedor para ambos formularios -->
<div class="contenedor">

<div class="contenedor-formulario">


    <!-- REGISTRO -->
    <div class="contenedor-formulario">

    <div class="borde-titulo">
      <div class="contenedor-titulo margen-izq">
        <h2 class="titulo">REGISTRATE</h2>
      </div>
    </div>

    <!--formulario registro -->
    <div class="padding-eje-y">
      <form class="margen-izq" action="" method="post" enctype="multipart/form-data">
        <label class="label-desktop" for="nombre">
          Nombre<span class="color-rojo">*</span>
        </label> <br>
          <input class="input-blanco" type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>"> <?php echo '<br>'. $errorNombre; ?>

          <span class="separador-xs" ></span>

        <br><label class="label-desktop" for="apellido">
            Apellido<span class="color-rojo">*</span>
        </label> <br>
          <input class="input-blanco" type="text" id="apellido" name="apellido" value="<?php echo $apellido; ?>"> <?php echo '<br>'. $errorApellido ?>

          <span class="separador-xs"></span>

        <br> <label class="label-desktop" for="email-registro">
          Correo Electrónico<span class="color-rojo">*</span>
        </label> <br>
          <input class="input-blanco" type="email-registro" id="email-registro" name="email-registro" value="<?php echo $email; ?>"> <?php echo '<br>'. $errorEmailRegistro ?>

          <span class="separador-xs"></span>

        <br><label class="label-desktop" for="pass-registro">
          Contraseña<span class="color-rojo">*</span>
        </label><br>
          <input class="input-blanco" type="password" id="pass-registro" name="pass-registro"> <?php echo '<br>'. $errorPassRegistro; ?>

          <span class="separador-xs"></span>

        <br><label class="label-desktop" for="repetir-pass">
          Repetir contraseña<span class="color-rojo">*</span>
        </label> <br>
          <input class="input-blanco" type="password" id="repetir-pass" name="repetir-pass"> <?php echo '<br>'. $errorRepetirPass; ?>

          <span class="separador-xs"></span>

          <br> <label for="avatar" class="label-desktop">
            Foto de perfil<span class="color-rojo">*</span> <br>
          </label> <br>
            <input id="avatar" type="file" name="avatar"> <?php echo '<br>'. $errorAvatar; ?>

            <span class="separador-xs"></span>

          <br><label for="deacuerdo"></label>
            <input type="checkbox" name="deacuerdo" required> Estoy de acuerdo con los Terminos y Condiciones

            <span class="separador-s"></span>

          <p class="boton">
            <button class="boton-negro" type="submit" name="registrarme" id="registrarme">REGISTRARME</button>
          </p>
      </form>
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
  </body>
</html>
