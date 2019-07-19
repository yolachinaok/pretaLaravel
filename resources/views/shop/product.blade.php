
@extends('layouts.master')
@yield('title')
<title>PRETA - <?php echo $product['name']; ?></title>

@section('styles')
    <link rel="stylesheet" href="/css/product.css" />
@endsection

@section('content')
<main>
<div class="container2">
<section class="gallery">

<div class="gallery__minim">
<img src="/storage/<?php echo $product->photo1 ;?>" alt="">
<img src="/storage/<?php echo $product->photo2 ;?>" alt="">
<img src="/storage/<?php echo $product->photo3 ;?>" alt="">
</div>
<div class="gallery__big">
<img src="/storage/<?php echo $product->photo1 ;?>" alt="">

</div>


</section>
<section class="buy">
<div class="buy__nombre">
<h2>{{ $product->name }} </h2>
</div>
<div class="buy__categoria">
  <h4>{{  $product->description  }}</h4>
</div>
<div class="buy__precio">
  @if($product->discount!=null)
<h3 style="text-decoration:line-through">${{  $product->price  }}</h3>
<h3>${{  $product->price * (1 - ($product->discount / 100))  }}</h3>
  @else
<h3>${{  $product->price  }}</h3>
  @endif
</div>
<form class="" action="/carrito" method="post">
  @csrf
<div class="buy__categoria">
<label for="quantity">Cantidad</label>
  <input type="number" name="quantity" value="">
</div>
<div class="buy__add">
    <button class="agregar" type="submit" name="product_id" value="{{$product->id}}">AGREGAR</button>
  </form>

</div>
<div class="buy__faqs">

</div>
</section>





</div>
</main>
@endsection
