@extends('layouts.master')
@section('styles')
<link href="/css/style-login.css" rel="stylesheet">
@endsection
@section('content')

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
      <form class="margen-izq" action="{{ route('login') }}" method="post">
          @csrf
          
          <div class="email-cont">
        <label class="label-desktop" for="email" value="{{ old('email') }}">
          Correo Electrónico
        </label> </br>
          <input class="input-blanco @error('email') is-invalid @enderror " type="email" id="email" name="email">
        </br> 

        @error('email')
              <span class="error-span">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror<br>


          </div>
        <span class="separador"></span>
<div class="pass-cont">
        <label class="label-desktop" for="password">
          Contraseña
        </label><br>
          <input class="input-blanco @error('email') is-invalid @enderror" type="password" id="password" name="password"  >
          </br> 
          @error('email')
              <span class="error-span" role="alert">
                  <strong>La contraseña no es correcta</strong>
              </span>
          @enderror<br>

          </div>
        <span class="separador-xs"></span>

        <br><label class="label-desktop" for="recordarme"></label>
          <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme

        <span class="separador-s"></span>

        <p class="boton">
          <button class="boton-gris" type="submit">INGRESAR</button>
        </p>
      </form>

      <span class="separador-s"></span>

        <div class="contenedor">
            <p class="margen-izq">
          <a id="enlace-olvide" href="/reset-password">
              Olvidé mi contraseña
          </a>
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
<script src="/js/auth/login.js"></script>
@endsection
