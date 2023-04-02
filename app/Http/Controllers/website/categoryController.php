<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function show($id){ 
        $category  =category::find($id);
        $products = Product::with('photos')->where('category_id',$id)->paginate(10);
        $start=($products->currentPage()-1)* $products->perPage()+1;
       return view('website.category',compact('category','products','start'));
    }
    
    
}
