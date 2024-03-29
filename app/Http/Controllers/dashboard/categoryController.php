<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats=category::paginate(5);
        return view('dashboard.categories.index',compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'icon'=>'required',
            'photo'=>'required'      
        ]);
    //   dd($request->all());
    $fileName= now()->timestamp .'-'.$request->file('photo')->getClientOriginalName();
    $filePath ="/uploads/" . $fileName;

    $request->file('photo')->move('uploads',$fileName);
    $inputs =$request->all();
    $inputs['photo']= $filePath;
    $newCategory =category::create($inputs);
    // $newCategory= new category();
    // $newCategory->name= $request->name;
    // $newCategory->icon= $request->icon;
    // $newCategory->photo= $filePath;
    // $newCategory->save();
    return back()->with('success','category added succeffly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
        {
            return view('dashboard.categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category =category::find($id);
         return view('dashboard.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        $request->validate([
            'name'=>'required',
            'icon'=>'required',
        ]);
        
        if($request->hasFile('photo')) { $fileName= now()->timestamp .'-'.$request->file('photo')->getClientOriginalName();
    $filePath ="/uploads/" . $fileName;}
    
    $inputs = $request->all();

    // $category->name= $request->name;
    // $category->icon= $request->icon;
    if($request->hasFile('photo')){
        $inputs['photo']= $filePath;
    }
    $category->update($inputs);
    return back()->with('success','category edited succeffly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        category::destroy($id);
        return back();
    }
}
