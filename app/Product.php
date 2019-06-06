<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','price','description','discount','photo1','photo2','photo3', 'category_id'];

    public function category(){
      return $this->belongsTo(Category::class);
    }

    // public function productCategory(){
    //   $category = Category::find($this->category_id);
    //   return $category->name;
    // }
}
