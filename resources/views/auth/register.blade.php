@extends('layouts.master')
@section('styles')
<link href="/css/style-registro.css" rel="stylesheet">
@endsection

@section('content')
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
      <form class="margen-izq" action="{{ route('register')}}" method="post" enctype="multipart/form-data" >
        @csrf

        <label class="label-desktop" for="name">
          Nombre<span class="color-rojo">*</span>
        </label> <br>
        
       <div class="name-cont"> 

          <input class="input-blanco @error ('name') is-invalid @enderror" type="text" id="nombre" name="name" value="{{old('name')}}"> <br>
          @error('name')
              <span>
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          </div>
          <span class="separador-xs" ></span>
<!--------------------------------------------------------->

        <br><label class="label-desktop" for="lastname">
            Apellido<span class="color-rojo">*</span>
        </label> <br>
        <div class="name-cont"> 
          <input class="input-blanco @error ('lastname') is-invalid @enderror" type="text" id="lastname" name="lastname" value="{{old('lastname')}}"> <br>
          @error('lastname')
              <span>
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
</div>
          <span class="separador-xs"></span>
<!--------------------------------------------------------->
        <br> <label class="label-desktop" for="email">
          Correo Electrónico<span class="color-rojo">*</span>
        </label> <br>
     <div class="email.cont"> 

          <input class="input-blanco @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{old('email')}}"><br>
          @error('email')
              <span>
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          </div>
          <span class="separador-xs"></span>
<!--------------------------------------------------------->
        <br><label class="label-desktop" for="password">
          Contraseña<span class="color-rojo">*</span>
        </label><br>
        <div class="cñ.cont"> 
          <input class="input-blanco @error('password') is-invalid @enderror" type="password" id="password" name="password"> <br>
          @error('password')
              <span>
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
</div>
          <span class="separador-xs"></span>
<!--------------------------------------------------------->
        <br><label class="label-desktop" for="password-confirm">
          Repetir contraseña<span class="color-rojo">*</span>
        </label> <br>
        <div class="cñ2.cont"> 
          <input class="input-blanco" type="password" id="password-confirm" name="password_confirmation"><br>

          <span class="separador-xs"></span>
</div>
<!--------------------------------------------------------->
          <br> <label for="avatar" class="label-desktop">
            Foto de perfil<span class="color-rojo">*</span> <br>
          </label> <br>
          <div class="avatar.cont">
            <input id="avatar" type="file" name="avatar"> <br>

            <span class="separador-xs"></span>
</div>
<!--------------------------------------------------------->
          <br><label for="deacuerdo"></label>
            <input type="checkbox" name="deacuerdo" required> Estoy de acuerdo con los Terminos y Condiciones

            <span class="separador-s"></span>

          <p class="boton">
            <button class="boton-negro" type="submit">
              REGISTRARME
            </button>
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
</div>
<script src="/js/auth/register.js"></script>
@endsection
