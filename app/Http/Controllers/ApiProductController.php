<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ApiProductController extends Controller
{
    public function getProducts(){
      $products = Product::all();
      return $products;
    }
}
