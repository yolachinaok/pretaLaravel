<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\Product;

class CartController extends Controller
{
  public function showCart(){
    $user = Auth::user();
    $products = [];
    if (isset($user->cart)) {
      $products = $user->cart;
    }
    return view('shop/cart')->with(['carts' => $products]);
}

  public function add(Request $request){
    $user = Auth::user();
    $product_id = $request->product_id;
    $quantity = $request->quantity;


    Cart::create(
      [
        'user_id' => $user->id,
        'product_id' => $product_id,
        'quantity' => $quantity
      ]
    );

    return redirect('carrito');

  }
}
