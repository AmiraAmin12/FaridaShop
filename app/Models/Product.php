<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'sku',
        'category_id',
    ];

    //chatgpt
 protected $appends = ['featured_photo'];

public function getFeaturedPhotoAttribute()
{
    return $this->photos()->first()
        ? asset($this->photos()->first()->path)
        : asset('uploads/products/img.avif');
}
   


    // Events
    protected static function booted()
    {
        static::created(function ($product) {
            $product->sku = rand(1000, 9999);
            $product->save();
        });
    }

    // Relations
    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    
}