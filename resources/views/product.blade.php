@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="css/product.css" />
@endsection

@section('content')
<main>
<div class="container2">
<section class="gallery">

<div class="gallery__minim">
<img src="/images/modulo1.jpg" alt="">
<img src="/images/modulo1.jpg" alt="">
<img src="/images/modulo1.jpg" alt="">
</div>
<div class="gallery__big">
<img src="/images/modulo1.jpg" alt="">

</div>


</section>
<section class="buy">
<div class="buy__categoria">
<h4>new this week / final sale</h4>
</div>
<div class="buy__nombre">
<h2>campera brown texas</h2>
</div>
<div class="buy__precio">
<h3>$890</h3>
</div>
<div class="buy__color">
<input type="radio" name="color" id="">
<input type="radio" name="color" id="">
<input type="radio" name="color" id="">
</div>
<div class="buy__size">

<ul>
  <div class="boton-size"><input type="radio" name="size" id="size"><li>S</li></div>
  <div class="boton-size"><input type="radio" name="size" id="size"><li>M</li></div>
  <div class="boton-size"><input type="radio" name="size" id="size"><li>L</li></div>

</ul>

</div>
<div class="buy__add">
<a href="">ADD TO CART</a>
</div>
<div class="buy__faqs">

</div>
</section>





</div>
</main>
@endsection
