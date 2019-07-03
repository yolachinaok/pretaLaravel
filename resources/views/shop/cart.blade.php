@extends('layouts.master')

@section('styles')
{{-- <link href="/css/style-cart.css" rel="stylesheet"> --}}
@endsection

@section('content')

<br><br><br><br><br><br><br>
<div class="">
      <div class="">
        <h2 class="">CARRITO</h2>
      </div>
      <!--Vista de productos -->
      <div class="">
        <ul>
      @foreach ($carts as $product)
        <li>
        <div class="">
            <img style="width:50px" src="/storage/{{$product->photo1}}" alt="">
          </div>
          <div class="">
            <h4>{{$product->name}}</h4>
          </div>
          <div class="">
            x {{$product->pivot->quantity}}
          </div>
          <div class="">
            ${{$product->price * $product->pivot->quantity}}
          </div>
        </li>
      @endforeach
      </ul>
      </div>
    </div>



@endsection
