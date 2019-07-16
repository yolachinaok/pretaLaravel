@extends('layouts.master')
@section('styles')
<link href="/css/registro.css" rel="stylesheet">

@endsection

@section('content')
<!-- Un contenedor para ambos formularios -->

<div class="con">
<div class="cont">

<div class="contenedor-formulario">


    <!-- DATOS -->
    <div class="contenedor-formulario">

    <div class="borde-titulo">
      <div class="contenedor-titulo margen-izq">
        <h2 class="titulo">MI PERFIL</h2>
      </div>
    </div>

    <div class="padding-eje-y">
      <ul>
        <li><img src="/storage/{{$user->avatar}}" alt="" style="width:150px"> @if(!$user->avatar) No tenes foto de perfil pero podes agregar una. @endif</li>
        <li>Usuario: {{$user->name}} {{$user->lastname}}</li>
        <li>Email: {{$user->email}}</li>
        <li>Direccion: {{$user->adress}} @if(!$user->adress)No cargaste ninguna direccion. @endif </li>
      </ul>
    </div>

    <!--formulario EDITAR DATOS MOSTRAR DIV SOLO SI QUIERE EDITAR
  route('/perfil') -->
    <div class="padding-eje-y" >
      <button class="boton-gris" type="button" name="button">EDITAR PERFIL</button> <br><br>

      <form id="editar" style="display:none;"  class="margen-izq style" action="{{url('/perfil')}}" method="post" enctype="multipart/form-data">
        @csrf

        <label class="label-desktop" for="name">
          Nombre
        </label> <br>
        <div class="name-cont">
          <input class="input-blanco" type="text" id="nombre" name="name" value="{{$user->name}}"> <br>
</div>
          <span class="separador-xs" ></span>

        <br><label class="label-desktop" for="lastname">
            Apellido
        </label> <br>
        <div class="apellido-cont">
          <input class="input-blanco" type="text" id="lastname" name="lastname" value="{{$user->lastname}}"> <br>
          </div>
          <span class="separador-xs"></span>

        <br> <label class="label-desktop" for="email">
          Correo Electrónico
        </label> <br>
        <div class="email-cont">
    
          <input class="input-blanco" type="email" id="email" name="email" value="{{$user->email}}"><br>
</div>
          <span class="separador-xs"></span>

          <br> <label class="label-desktop" for="adress">
            Direccion
          </label> <br>
          <div class="direccion-cont">
            <input class="input-blanco" type="text" id="adress" name="adress" value="{{$user->adress}}"> <br>
</div>
            <span class="separador-xs" ></span>


          <br> <label for="avatar" class="label-desktop">
            Foto de perfil<br>
          </label> <br>
          <div class="avatar-cont">
            <input id="avatar" type="file" name="avatar"> <br>
            </div>
            <span class="separador-xs"></span>
            <br>

          <p class="boton">
            <button class="boton-negro" type="submit">
              MODIFICAR DATOS
            </button>
          </p>
      </form>
    </div>
  </div>
  </div>
<!-- BOTONES TOP Y BACK -->
<div id="seccion-back-top">

  <div id="volver">
    <i class="material-icons">
    keyboard_arrow_left
    </i>
    <a id="volver-atras"href="{{  url('/') }}">VOLVER ATRAS</a>
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
<script src="/js/perfil.js" charset="utf-8"></script>
@endsection
