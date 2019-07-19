@extends('layouts.master')

@section('styles')
<link href="/css/alta.css" rel="stylesheet">
@endsection

@section('content')
<div class="cont">
<div class="borde-titulo">
      <div class="contenedor-titulo margen-izq">
        <h2 class="titulo">EDITAR PRODUCTO</h2>
      </div>
    </div>

  <!--formulario carga -->
  <div class="form-cont">

    <form class="" action="/admin/productos/eliminar/{{$product->id}}" method="post">
      @csrf
      @method('DELETE')
      <p class="boton">
        <button class="eliminar " type="submit" name="eliminar" id="eliminar">ELIMINAR PRODUCTO</button>
      </p>
    </form>


    <div class="fotos">
      <div width="30%">
        <p class="boton">FRONT</p>
        <img src="/storage/{{$product->photo1}}" width="100px" alt="">
      </div>
      <div width="30%">
      <p class="boton">BACK</p>
      <img src="/storage/{{$product->photo2}}" width="100px" alt="">
      </div>
      <div width="30%">
      <p class="boton">DETAIL</p>
      <img src="/storage/{{$product->photo3}}" width="100px" alt="">
      </div>
    </div>

<div class="form">
      <form id="editar" class="margen-izq" action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="name-cont">
        <label class="label-desktop" for="name">
          Nombre<span class="color-rojo">*</span>
        </label> <br>
          <input class="input-blanco" type="text" id="nombre" name="name" value="{{old('name',$product->name)}}">
          </div>
          @error('name')
          <div class="">
          {{$message}}
          </div>
          @enderror

          <span class="separador-xs" ></span>

        <br><div class="precio-cont">
        <label class="label-desktop" for="price">
           Precio<span class="color-rojo">*</span>
        </label> <br>
          <input class="input-blanco" type="text" id="precio" name="price" value="{{old('price',$product->price)}}">
          </div>
          @error('price')
          <div class="">
          {{$message}}
          </div>
          @enderror

          <span class="separador-xs"></span>
            <br>
            <div class="categoria-cont">
          <label class="label-desktop" for="category_id">
             Categoría<span class="color-rojo">*</span>
          </label> <br>
          <select class="" name="category_id">
              <option value="{{old('category_id',$product->category_id)}}">Seleccione</option>
              @foreach ($categories as $category)
                <option value="{{$category->id}}"> {{$category->name}} </option>
              @endforeach
            </select>
            </div>
            {{ $product->category->name }} <br>
            @error('category_id')
            <div class="">
            {{$message}}
            </div>
            @enderror

            <span class="separador-xs"></span>

        <br> 
        <div class="desc-cont">
        <label class="label-desktop" for="description">
          Descripción<span class="color-rojo">*</span>
        </label> <br>
          <textarea name="description" id="" cols="30" rows="10" >{{$product->description}}</textarea>
          </div>
          <span class="separador-xs"></span>

        <br><div class="discount-cont">
        <label class="label-desktop" for="discount">
          Descuento <span class="color-rojo">*</span>
        </label><br>
          <input class="input-blanco" type="text" id="discount" name="discount" value="{{$product['discount']}}">
          </div>
          <span class="separador-xs"></span>

          

          
          <div class="f1">
          <label for="photo1" class="label-desktop">
           FRONT<span class="color-rojo">*</span> <br>
          </label> <br>
            <input id="foto1" type="file" name="photo1">
            </div><br>
            
            <span class="separador-xs"></span>
            
            <div class="f2"> 
            <label for="photo2" class="label-desktop">
           BACK<span class="color-rojo">*</span> <br>
          </label> 
            <input id="foto2" type="file" name="photo2">
            </div><br>
            
            <span class="separador-xs"></span>
            
            <div class="f3">
            <label for="photo3" class="label-desktop">
           DETAIL<span class="color-rojo">*</span> <br>
          </label> 
            <input id="foto3" type="file" name="photo3">
            </div><br>
          

            
            <span class="separador-xs"></span>
            <br>
          <p class="boton">
            <button class="boton-negro" type="submit" name="editar" id="editar">EDITAR</button>
          </p>

      </form>
      </div>
    </div>
  </div>
  </div>
  <script src="/js/auth/editar_producto.js" charset="utf-8"></script>
@endsection
