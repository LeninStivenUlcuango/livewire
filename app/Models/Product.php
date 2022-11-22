<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable=['name','price','description','thumbnail'];

    public function getRouteKeyName(){
        return 'slug';
    }

    protected static function booted(){
        // este funcion se genera cuando se este creando un nuevo product
        static::creating(function($product){
            // genera una ruta amigable con - en e medio de las palabras
            $slug = Str::slug($product->name,'-');
            $product->slug= Product::where('slug',$slug)->exists() ? ($slug.uniqid()):$slug;
        });
    }
}