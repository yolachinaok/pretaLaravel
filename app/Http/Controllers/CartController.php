<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\Product;

class CartController extends Controller
{

  public function purchase(Request $request){
  $user = $request->user;
  $carritos= Cart::where('user_id', '=', $user)->get();
  foreach ($carritos as $carrito) {
    $carrito->delete();
  } return redirect('/'); 
  }

  public function showCart(){
    $user = Auth::user();
    $products = [];
    if (isset($user->cart)) {
      $products = $user->cart;
    }

    return view('shop/cart')->with(['carts' => $products]);
}

  public function add(Request $request){
    $quantity = 1;
    $user = Auth::user();
    $product_id = $request->product_id;
    if ($request->quantity != null) {
      $quantity = $request->quantity;
    }


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
