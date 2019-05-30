<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
  public function showShop(){
    $products = Product::all();
    $quantity = Product::count();
    return view('shop.shop')->with(['products'=> $products])->with(['quantity'=>$quantity]);
  }

  public function showCategory($categoria, $category_id){
    $products = Product::where('category_id', '=', $category_id)->get();
    $quantity = count($products);
    return view('shop.shop-category')->with(['products' => $products])->with(['quantity'=>$quantity]);;
  }

  public function showProduct($product_id){
    $product = Product::find($product_id);
    return view('shop.product')->with('product', $product);
    }
}
