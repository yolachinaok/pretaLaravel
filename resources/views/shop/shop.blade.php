
@extends('layouts.master')

@yield('title')
<title>SHOP</title>

@section('styles')
    <link rel="stylesheet" href="/css/shop.css" />
@endsection

@section('content')
<nav>

<!--@include('partials/shop/nav_shop')
@include('partials/shop/nav_shop_mobile')-->

</nav>

<!-- CUERPO SHOP -->
<main>

<div class="filter-pages">

<!--@include('partials/shop/filterPages_shop')-->
</div>

<div class="pag">
@if(Auth::user())
@if(Auth::user()->esAdmin)
<a class="agregarProducto" href="{{  url('/admin/productos') }}">AGREGAR PRODUCTO</a>
@elseif(!Auth::user()->esAdmin)
<div></div>
@endif
@endif

{{$products->onEachSide(1)->links()}}




</div>
<div class="modulosTodos">

@foreach ($products as $product)
  <div class="modulo-shop">
    <div class="modulo-shop__img">
      <img class="uno" src="/storage/
      {{$product['photo1']}}
      " alt="">
      <img class="dos" src="/storage/
      {{$product['photo3']}}
      " alt="">
  </div>
  <div class="modulo-shop__descripcion">
    <div class="titulo"><a href="/shop/{{$product['id']}}"><h4>
    {{$product['name']}}
    '</h4></a></div>
    <div class="precio"><h4>${{ $product['price']}}</h4></div>
    <div class="color"><h4>{{$product['discount']}}%OFF
  </h4></div></div>

  @if(Auth::user())
  @if(Auth::user()->esAdmin)
    <div>
    <a class='editarProducto' href='/admin/productos/editar/{id}'>EDITAR</a>
    </div>
    @elseif(!Auth::user()->esAdmin)
<div></div>
@endif
@endif
  </div>
  @endforeach


</div>
</main>
@endsection
