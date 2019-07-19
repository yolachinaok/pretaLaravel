@extends('layouts.master')

@section('styles')
            <link href="/css/cart.css" rel="stylesheet">

@endsection
@section('content')
<div class="carrito">
<div class="carrito-mybag">
  <h2>MY BAG</h2>
<div id="check-child">

    @foreach ($carts as $product)
    <div id="carrito{{$product->pivot->id}}" class="mybag">
    <div class="mybag-producto">
      <img src="/storage/{{$product->photo1}}" alt="">

      <div class="producto-detalles">
        <div class="producto-tipo">
        <h3 class="producto-titulo">{{$product->name}}
        </h3>
        <h3 class="producto-precio">${{$product->price}}</h3>
        <h3 class="producto-size">x {{$product->pivot->quantity}}</h3>
        </div>
        <div class="producto-favorito">
      <a href=""><i class="material-icons">favorite</i></a>
        <h3>Move to Likes</h3>
      </div>
      </div>
    </div>
    <div class="mybag-remove">
        <button class="delete" id="{{$product->pivot->id}}">BORRAR</button>
      </div>
  </div>

@endforeach
</div>
</div>
<?php
$precioOriginal = 0;
$save = 0;
foreach ($carts as $prod) {
  $totalProd = $prod->price * $prod->pivot->quantity;
  $totalSave = $totalProd * ($prod->discount / 100);
  $precioOriginal = $precioOriginal + $totalProd;
  $save = $save + $totalSave;
}
?>

<div class="carrito-confirmacion">
<h2>orden</h2>
Enviar a:
@if(Auth::user()->address == null||Auth::user()->address == "")
<a id="direc" style="text-decoration:underline;"href="/perfil">Agrega direccion a tu perfil</a>
@else
{{Auth::user()->adress}}
@endif
<div class="confirmacion-cuerpo">
<div class="precioOriginal confirmacion-flex">
<h3 class="titulo">Precio original</h3>
<h3 class="precio">{{$precioOriginal}}</h3>
</div>
<div class="precioDescuento confirmacion-flex">
<h3 class="titulo">Descuento</h3>
<h3 class="precio">{{$save}}</h3>
</div>
<div class="subtotal confirmacion-flex">
<h3 class="titulo">Subtotal</h3>
<h3 class="precio">{{$precioOriginal - $save}}</h3>
</div>
<div class="envio confirmacion-flex">
<h3 class="titulo">Envio</h3>
<h3 class="valor">
@if(Auth::user()->address == null||Auth::user()->address == "")
{{$envio=0}}
@else
{{$envio = 200}}
@endif
</h3>
</div>
<div class="total confirmacion-flex">
<h3 class="titulo">total de compra($)</h3>
<h3 class="precio">{{$precioOriginal - $save + $envio}}</h3>
</div>

</div>
<div class="checkout">
<a onclick="comprar()" id="confirmar" href='/carrito/comprar?user={{Auth::user()->id}}'>CONFIRMAR</a>
</div>
</div>
</div>
<script type="text/javascript">
  var botones = document.querySelectorAll('.delete');
  for (boton of botones) {
    boton.onclick = function(){
      carritoId = this.getAttribute('id');

      fetch('http://localhost:8000/api/borrar-producto/'+carritoId)
      .then(function(response){
            return response.json();
        })
      .then(function(datos){
        if (datos.eliminado) {
          elDiv = document.querySelector('#carrito'+carritoId);
          elDiv.setAttribute("style", "display:none");
        }

        })
      .catch(function(error){
            console.log(error);
        });
    }
  }

    var checkout = document.querySelector('#confirmar');
    var sinDir = document.querySelector('#direc');
    var cont = document.querySelector('#check-child');
    var hayItems = cont.hasChildNodes();
    if (sinDir!=null) {
      checkout.onclick = function(){return false;}
    }
    if (!hayItems){
      checkout.onclick = function(){return false;}
    };


</script>
@endsection
