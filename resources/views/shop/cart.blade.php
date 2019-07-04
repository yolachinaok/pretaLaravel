@extends('layouts.master')

@section('styles')
            <link href="/css/cart.css" rel="stylesheet">
@endsection
@section('content')
<div class="carrito">
<div class="carrito-mybag">
<h2>MY BAG</h2>
  <div class="mybag">
    
    <div class="mybag-producto">
      <img src="images/instagram.png" alt="">
      
      <div class="producto-detalles">
        <div class="producto-tipo">
        <h3 class="producto-titulo">SOY UN PRODUCTO
        </h3>
        <h3 class="producto-precio">83</h3>
        <h3 class="producto-size">M</h3>
        </div>
        <div class="producto-favorito">
      <a href=""><i class="material-icons">favorite</i></a>
        <h3>Move to Likes</h3>
      </div>
      </div>
    
   
    </div>
    <div class="mybag-remove">
        <a href="">BORRAR</a>
      </div>
  </div>
  </div>

<div class="carrito-confirmacion">
<h2>orden</h2>
<div class="confirmacion-cuerpo">
<div class="precioOriginal confirmacion-flex">
<h3 class="titulo">Precio original</h3>
<h3 class="precio">85</h3>
</div>
<div class="precioDescuento confirmacion-flex">
<h3 class="titulo">Descuento</h3>
<h3 class="precio">85</h3>
</div>
<div class="subtotal confirmacion-flex">
<h3 class="titulo">Subtotal</h3>
<h3 class="precio">85</h3>
</div>
<div class="envio confirmacion-flex">
<h3 class="titulo">Envio</h3>
<h3 class="valor">S/C</h3>
</div>
<div class="total confirmacion-flex">
<h3 class="titulo">total de compra($)</h3>
<h3 class="precio">85</h3>
</div>

</div>
<div class="checkout">
<a href="">CONFIRMAR</a>
</div>
</div>
</div>

@endsection
