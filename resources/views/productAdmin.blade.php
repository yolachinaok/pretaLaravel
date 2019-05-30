@extends('layouts.master')

@section('styles')
<link href="/css/style-registro.css" rel="stylesheet">
@endsection

@section('content')

<div class="borde-titulo">
      <div class="contenedor-titulo margen-izq">
        <h2 class="titulo">NUEVO PRODUCTO</h2>
      </div>
    </div>

  <!--formulario registro -->
  <div class="padding-eje-y">
      <form class="margen-izq" action="" method="post" enctype="multipart/form-data">
        <label class="label-desktop" for="nombre">
          Nombre<span class="color-rojo">*</span>
        </label> <br>
          <input class="input-blanco" type="text" id="nombre" name="nombre" value=""> 

          <span class="separador-xs" ></span>

        <br><label class="label-desktop" for="precio">
           Precio<span class="color-rojo">*</span>
        </label> <br>
          <input class="input-blanco" type="text" id="precio" name="precio" value=""> 

          <span class="separador-xs"></span>

        <br> <label class="label-desktop" for="descripcion">
          Descripcion<span class="color-rojo">*</span>
        </label> <br>
          <textarea name="" id="" cols="30" rows="10"></textarea>

          <span class="separador-xs"></span>

        <br><label class="label-desktop" for="descuento">
          Descuento <span class="color-rojo">*</span>
        </label><br>
          <input class="input-blanco" type="password" id="" name=""> 

          <span class="separador-xs"></span>

          <br> <label for="foto1" class="label-desktop">
           Foto 1<span class="color-rojo">*</span> <br>
          </label> <br>
            <input id="foto1" type="file" name="foto1"> 

            <span class="separador-xs"></span>
        
            <br> <label for="foto2" class="label-desktop">
           Foto 2<span class="color-rojo">*</span> <br>
          </label> <br>
            <input id="foto2" type="file" name="foto"> 

            <span class="separador-xs"></span>
        
            <br> <label for="foto3" class="label-desktop">
           Foto 3<span class="color-rojo">*</span> <br>
          </label> <br>
            <input id="foto3" type="file" name="foto3">

            <span class="separador-xs"></span>


          <p class="boton">
            <button class="boton-negro" type="submit" name="agregar" id="agregar">AGREGAR</button>
          </p>
      </form>
    </div>
  </div>

@endsection