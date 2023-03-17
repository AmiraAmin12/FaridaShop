<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','icon','photo'
    ];

    // relations
     public function category(){
        return  $this->hasMany(Product::class);
     }
}
