<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    
    public function addToCart(Request $request){
        
    //     auth()->user()->cart->products()->attach(
    //         $request->product_id,
    //        ['quantity'=> $request->quantity]
    // );

    }
}
