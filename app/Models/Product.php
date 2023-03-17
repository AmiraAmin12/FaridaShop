<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'description',
        'price',
        'sku',
        'stoke',
        'category-id',
    ];
    //events
    protected static function booted(){
        static::created(function($product){
            $product-> sku= rand(1000,9999);
            $product->save();

        });
    }

    //relations
    public function category(){
    //    return  $this->belongsTo(category::class);
    return $this->belongsTo('App\Models\category')->withDefault();

    }

}
