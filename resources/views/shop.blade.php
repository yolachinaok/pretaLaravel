@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="/css/shop.css" />
@endsection

@section('content')
<nav>
 
@include('partials/shop/nav_shop')
@include('partials/shop/nav_shop_mobile')
   
</nav>

<!-- CUERPO SHOP -->
<main>

<div class="filter-pages">
  <div class="filter-pages__categoria">
  <div class="link">
    <a href="">
      <h4>Home</h4>
    </a>
    <h4>/</h4>
    <a href="">
        <h4> Vestidos</h4>
      </a>
  </div>
</div>
@include('partials/shop/filterPages_shop')
</div>
<div class="modulosTodos">
@for($i = 0; $i < 6; $i++)
@include('partials/shop/modulo_shop')
@endfor
</div>
</main>
@endsection
