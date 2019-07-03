
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
<img src="/storage/<?php echo $product['photo1'];?>" alt="">
<img src="/storage/<?php echo $product['photo2'];?>" alt="">
<img src="/storage/<?php echo $product['photo3'];?>" alt="">
</div>
<div class="gallery__big">
<img src="/storage/<?php echo $product['photo1'];?>" alt="">

</div>


</section>
<section class="buy">
<div class="buy__nombre">
<h2><?php echo $product['name'];?></h2>
</div>
<div class="buy__categoria">
  <h4><?php echo $product['description'];?></h4>
</div>
<div class="buy__precio">
<h3>$<?php echo $product['price'];?></h3>
</div>
<div class="buy__size">

<ul>
  <div class="boton-size"><input type="radio" name="size" id="size"><li>S</li></div>
  <div class="boton-size"><input type="radio" name="size" id="size"><li>M</li></div>
  <div class="boton-size"><input type="radio" name="size" id="size"><li>L</li></div>

</ul>

</div>
<div class="buy__add">
  <form class="" action="/carrito" method="post">
    @csrf
    <label for="quantity"></label>
    <input type="text" name="quantity" value="">
    <button type="submit" name="product_id" value="{{$product->id}}">AGREGAR</button>
  </form>

</div>
<div class="buy__faqs">

</div>
</section>





</div>
</main>
@endsection
