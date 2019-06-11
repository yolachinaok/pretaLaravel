<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
  public function showShop(){
    $products = Product::paginate(6);
    // $quantity = Product::count();
    return view('shop.shop')->with(['products'=> $products]);
    //->with(['quantity'=>$quantity]);
  }

  public function showCategory($categoria, $category_id){
    $products = Product::where('category_id', '=', $category_id)->get();
    $quantity = count($products);
    return view('shop.shop-category')->with(['products' => $products])->with(['quantity'=>$quantity]);
//OTRA FORMA DE HACERLO USANDO HASMANY()
  // $category = Category::find($category_id);
  // $products = $category->products;
  // $quantity = $products->count();
  // return view('shop.shop-category')->with(['products' => $products, 'quantity'=>$quantity]);

  }

  public function showProduct($product_id){
    $product = Product::find($product_id);
    return view('shop.product')->with('product', $product);
    }

    public function showProductAdmin(){
      return view('productAdmin');
    }

    public function createProduct(){
      $categories = Category::all();
      return view('productAdmin')->with(['categories'=> $categories]);
    }

    public function createProductSave(Request $request){
      $this->validate($request,[
        'name'=> 'required',
        'price'=> 'required',
        'category_id'=> 'required'
      ],[
        'name.required' => 'El nombre es necesario.',
        'price.required' => 'El precio es necesario.',
        'category_id.required' => 'La categoría es necesaria.'
      ]);

      //Si no hay errores

      // $product = new Product();
      // $product->name = $request->input('name');
      // $product->price = $request->input('price');
      // $product->description = $request->input('description');
      // $product->category_id = $request->input('category_id');
      // $product->discount = $request->input('discount');

      $route1 = $request->file('photo1')->store('public');
      $photo1= basename($route1);
      $route2 = $request->file('photo2')->store('public');
      $photo2= basename($route2);
      $route3 = $request->file('photo3')->store('public');
      $photo3= basename($route3);

      Product::create(
        [
          'name'=>$request->input('name'),
          'price'=>$request->input('price'),
          'description'=>$request->input('description'),
          'category_id'=>$request->input('category_id'),
          'discount'=>$request->input('discount'),
          'photo1'=>$photo1,
          'photo2'=>$photo2,
          'photo3'=>$photo3
        ]
      );
    return redirect('/admin/productos')->with('message', 'Producto agregado exitosamente');

    }
    public function editProduct($id){
      $product = Product::find($id);
      $categories = Category::all();
      return view('editProductAdmin', compact('product','categories'));
    }

    public function updateProduct($id, Request $request){
      $this->validate($request,
      [
        'name'=> 'required',
        'price'=> 'required|numeric',
        'category_id'=> 'required',
        'description' => 'nullable',
        'discount' => 'nullable'
      ],[
        'name.required' => 'El nombre es necesario.',
        'price.required' => 'El precio es necesario.',
        'category_id.required' => 'La categoría es necesaria.'
      ]);
      $route1 = $request->file('photo1')->store('public');
      $photo1= basename($route1);
      $route2 = $request->file('photo2')->store('public');
      $photo2= basename($route2);
      $route3 = $request->file('photo3')->store('public');
      $photo3= basename($route3);

      $product = Product::find($id);
      $product->name = $request->name;
      $product->price = $request->price;
      $product->description = $request->description;
      $product->category_id = $request->category_id;
      $product->discount = $request->discount;
      $product->photo1 = $photo1;
      $product->photo2 = $photo2;
      $product->photo3 = $photo3;

      $product->save();
      return redirect('/ruta');
    }

    public function deleteProduct($id){
      $toDelete = Product::find($id);
      $toDelete->delete();
      return redirect('shop');
    }

}
