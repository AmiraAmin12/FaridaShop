<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id){

        $product = Product::with(['category'],'photos')->find($id);
        // $product->update(['views'=>$product->views+1]);
         $product->increment('views');

        return view('website.product',compact('product'));
    }
    
}
