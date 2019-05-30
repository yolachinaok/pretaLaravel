<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','price','description','discount','photo1','photo2','photo3', 'category_id'];
}
