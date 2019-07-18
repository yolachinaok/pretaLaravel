@extends('layouts.master')

@section('styles')
<link href="/css/alta.css" rel="stylesheet">
@endsection

@section('content')
<div class="cont">
<div class="borde-titulo">
     
        <h2 class="titulo">NUEVO PRODUCTO</h2>
      </div>
   

  <!--formulario carga -->

    
      <form  id="alta" class="margen-izq" action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="nombre-cont">
        <label class="label-desktop" for="name">
          Nombre<span class="color-rojo">*</span>
        </label> <br>
          <input class="input-blanco" type="text" id="nombre" name="name" value="{{ old ('name') }}">
          </div>
          <span class="separador-xs" ></span>

        <br>
        <div class="precio-cont">
        <label class="label-desktop" for="price">
           Precio<span class="color-rojo">*</span>
        </label> <br>
          <input class="input-blanco" type="text" id="precio" name="price" value="{{ old ('price') }}">
          </div><br>

          <span class="separador-xs"></span>

<div class="categoria-cont">
          <label class="label-desktop" for="category_id">
             Categoría<span class="color-rojo">*</span>
          </label> <br>
            <select class="" name="category_id">
              <option value="">Seleccione</option>
              @foreach ($categories as $category)
                <option value="{{$category->id}}"> {{$category->name}} </option>
              @endforeach
            </select>
            </div></br>
            <span class="separador-xs"></span>

        <br> 
        <div class="desc-cont">
        <label class="label-desktop" for="description">
          Descripción<span class="color-rojo">*</span>
        </label> <br>
          <textarea name="description" id="" cols="30" rows="10"></textarea>
          </div></br>
          <span class="separador-xs"></span>

        <br>
        <div class="descuento-cont">
        <label class="label-desktop" for="discount">
          Descuento <span class="color-rojo">*</span>
        </label><br>
          <input class="input-blanco" type="text" id="discount" name="discount">
          </div></br>
          <span class="separador-xs"></span>

          <br> 
          <div class="f1">
          <label for="photo1" class="label-desktop">
           Foto 1<span class="color-rojo">*</span> <br>
          </label> <br>
            <input id="foto1" type="file" name="photo1">
            </div></br>
            <span class="separador-xs"></span>

            <br> 
            <div class="f2">
            <label for="photo2" class="label-desktop">
           Foto 2<span class="color-rojo">*</span> <br>
          </label> <br>
            <input id="foto2" type="file" name="photo2">
            </div></br>
            <span class="separador-xs"></span>

            <br> 
            <div class="f3">
            <label for="photo3" class="label-desktop">
           Foto 3<span class="color-rojo">*</span> <br>
          </label> <br>
            <input id="foto3" type="file" name="photo3">
            </div></br>
            <span class="separador-xs"></span>


          <p class="boton">
            <button class="boton-negro" type="submit" name="agregar" id="agregar">AGREGAR</button>
          </p>

      </form>
    </div>
  </div>
  <div class="margen-izq">
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
  </div>
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
  </div>
 <script src="/js/auth/nuevo_producto.js" charset="utf-8"></script>-->
@endsection
