<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $fillable = ['code', 'brand', 'name','image','description','price','weigth','categories_id','stok', 'type', 'class', 'size', 'color'];
}
