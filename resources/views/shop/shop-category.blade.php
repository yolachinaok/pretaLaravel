@extends('layouts.master')
@yield('title')
<title>SHOP - PRETA</title>

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
<!--
<div class="filter-pages">
  <div class="filter-pages__categoria">
  <div class="link">
    <a href="">
      <h4>Home</h4>
    </a>
    <h4>/</h4>
    <a href="">
        <h4> {{$cat}}</h4>
      </a>
  </div>
</div>
@include('partials/shop/filterPages_shop')
</div>-->
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
      <a href="/shop/{{$product->id}}">
    <div class="modulo-shop__img">
      <img class="uno" src="/storage/{{$product->photo1}}" alt="">
      <img class="dos" src="/storage/{{$product->photo3}}" alt="">
  </div>
  <div class="modulo-shop__descripcion">
    <div class="titulo">
      <h4>{{$product->name}}
    </h4></a></div>

    @if($product->discount!=null)
    <div class="precio" style="text-decoration:line-through"><h4>${{$product->price}}</h4></div>
    <div class="color"><h4>${{$product->price * (1 - ($product->discount / 100))}}</h4>
    @else
    <div class="precio"><h4>${{$product->price}}</h4></div>
    <div class="color"><h4></h4>
    @endif

  </div></div>


  </div>
 @endforeach

</div>
</main>
@endsection
