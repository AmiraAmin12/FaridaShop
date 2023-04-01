<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function show($id){ 
        $category  =category::with('products')->find($id);
       return view('website.category',compact('category'));
    }
    
    
}
