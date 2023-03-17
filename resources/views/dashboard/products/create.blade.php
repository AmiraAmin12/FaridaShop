@extends('dashboard.layout')
@section('title')
products
@endsection()
@section('content')

<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">products</h1>
    <a href="{{url('/admin/products')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
           
        back to category</a>
</div>
<form  action="{{url('/admin/products')}}" method="POST" enctype="multipart/form-data">
@csrf
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">products</h6>
                        </div>
<!-- 
                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
                        <div class="card-body">
                          @if(session('success'))
                          <div class="alert alert-success">
                          {{session('success')}}
                          </div>
                        @endif
                        
                        <div class="form-group">
    <label for="name">Category</label>
    <select class="custom-select" name="category-id">
  <option selected value="">Select Categories</option>
  @foreach ($cats as $category)
  <option value="{{$category->id}}">{{$category->name}}</option>
  @endforeach
</select>
    @error('category-id')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>                       
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text"  name="name"  class="form-control">
    @error('name')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="text"  name="price" class="form-control" value="0">
    @error('price')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="stock">Stock</label>
    <input type="text"  name="stock"  class="form-control" value="0">
    @error('stock')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="desc">Description</label>
    <textarea  name="description" class="form-control"></textarea>
    @error('description')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  <div class="form-group">
                <label>Photos</label>
                <div class="custom-file mb-3">
                    <input type="file" multiple class="custom-file-input" name="photo[]">
                    @error('photo')
    <p class="text-danger">{{$message}}</p>
    @enderror
                    <label class="custom-file-label">Choose file...</label>
                </div>

 </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>

                    </div>
</div>
</form> 


@endsection()