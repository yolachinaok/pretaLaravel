@extends('layouts.master')
@section('styles')
<link href="/css/style-login.css" rel="stylesheet">
@endsection
@section('content')

<!-- Un contenedor para ambos formularios -->
<br><br><br><br><br><br><br>
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
        <label class="label-desktop" for="email" value="{{ old('email') }}">
          Correo Electrónico
        </label> <br>
          <input class="input-blanco @error('email') is-invalid @enderror" type="email" id="email" name="email">

          @error('email')
              <span>
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

        <span class="separador"></span>

        <label class="label-desktop" for="password">
          Contraseña
        </label><br>
          <input class="input-blanco @error('password') is-invalid @enderror" type="password" id="password" name="password">

          @error('password')
              <span>
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        <span class="separador-xs"></span>

        <br><label class="label-desktop" for="recordarme"></label>
          <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme

        <span class="separador-s"></span>

        <p class="boton">
          <button class="boton-gris" type="submit">INGRESAR</button>
        </p>
      </form>

      <span class="separador-s"></span>

      @if (Route::has('password.request'))
          <div class="contenedor">
            <p class="margen-izq">
          <a id="enlace-olvide" href="{{ route('password.request') }}">
              {{ __('Olvidé mi contraseña') }}
          </a>
          </p>
          </div>
      @endif

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
@endsection
