<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;

class ApiProductController extends Controller
{
    public function getProducts(){
      $products = Product::all();
      return $products;
    }

    public function deleteCart($id){
      $paraBorrar = Cart::find($id);
      $paraBorrar->delete();
      return response()->json(['eliminado'=>'true'], 200);
    }
}
