<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
  public function showShop(){
    $products = Product::all();
    return view('shop')->with(['products'=> $products]);
  }

  public function showCategory($categoria, $category_id){
    $products = Product::where('category_id', '=', $category_id)->get();
    return view('shop-category')->with(['products' => $products]);
  }

  public function showProduct($product_id){
    $product = Product::find($product_id);
    return view('product')->with('product', $product);
    }

    public function showProductAdmin(){
      return view('productAdmin');
    }
}
