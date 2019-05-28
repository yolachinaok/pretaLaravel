<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index(){
    $products = App\Product::all();
    foreach ($products as $product){
      echo $product->price;
    }
  }
}
