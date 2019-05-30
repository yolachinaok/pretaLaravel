@extends('layouts.master')

@section('styles')
<link href="/css/style-registro.css" rel="stylesheet">
@endsection

@section('content')
<br><br><br><br><br><br><br>
<div class="borde-titulo">
      <div class="contenedor-titulo margen-izq">
        <h2 class="titulo">NUEVO PRODUCTO</h2>
      </div>
    </div>

  <!--formulario carga -->
  <div class="padding-eje-y">
    @if (count($errors)>0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif
      <form class="margen-izq" action="" method="post" enctype="multipart/form-data">
        @csrf
        <label class="label-desktop" for="name">
          Nombre<span class="color-rojo">*</span>
        </label> <br>
          <input class="input-blanco" type="text" id="nombre" name="name" value="{{ old ('name') }}">

          <span class="separador-xs" ></span>

        <br><label class="label-desktop" for="price">
           Precio<span class="color-rojo">*</span>
        </label> <br>
          <input class="input-blanco" type="text" id="precio" name="price" value="{{ old ('price') }}">

          <span class="separador-xs"></span>

          <label class="label-desktop" for="category_id">
             Categoría<span class="color-rojo">*</span>
          </label> <br>
            <select class="" name="category_id">
              <option value="">Seleccione</option>
              @foreach ($categories as $category)
                <option value="{{$category->id}}"> {{$category->name}} </option>
              @endforeach
            </select>

            <span class="separador-xs"></span>

        <br> <label class="label-desktop" for="description">
          Descripción<span class="color-rojo">*</span>
        </label> <br>
          <textarea name="description" id="" cols="30" rows="10"></textarea>

          <span class="separador-xs"></span>

        <br><label class="label-desktop" for="discount">
          Descuento <span class="color-rojo">*</span>
        </label><br>
          <input class="input-blanco" type="text" id="discount" name="discount">

          <span class="separador-xs"></span>

          <br> <label for="photo1" class="label-desktop">
           Foto 1<span class="color-rojo">*</span> <br>
          </label> <br>
            <input id="foto1" type="file" name="photo1">

            <span class="separador-xs"></span>

            <br> <label for="photo2" class="label-desktop">
           Foto 2<span class="color-rojo">*</span> <br>
          </label> <br>
            <input id="foto2" type="file" name="photo2">

            <span class="separador-xs"></span>

            <br> <label for="photo3" class="label-desktop">
           Foto 3<span class="color-rojo">*</span> <br>
          </label> <br>
            <input id="foto3" type="file" name="photo3">

            <span class="separador-xs"></span>


          <p class="boton">
            <button class="boton-negro" type="submit" name="agregar" id="agregar">AGREGAR</button>
          </p>

      </form>
    </div>
  </div>

@endsection
