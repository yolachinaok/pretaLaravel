<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Ixudra\Curl\Facades\Curl;
use Carbon\Carbon;

class IndexController extends Controller
{
public function showIndex(){
  $mesAnterior = Carbon::now()->subMonth();
  $productsNewIn = Product::where('created_at','>=',$mesAnterior)->get();

  return view('index')->with(['newIn'=>$productsNewIn]);
}
}
