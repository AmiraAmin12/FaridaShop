@extends('dashboard.layout')
@section('title')
Categories
@endsection()
@section('content')

<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">edit Category</h1>
    <a href="{{url('/admin/categories')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
           
        back to category</a>
</div>
<form  action="{{url('/admin/categories/'. $category->id)}}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">edit Categories</h6>
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
    <label for="name">Name</label>
    <input type="text"  name="name" value="{{$category->name}}"  class="form-control">
    @error('name')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  <div class="form-group">
    <label for="icon">icon</label>
    <input type="text"  name="icon"  value="{{$category->icon}}"class="form-control">
    @error('icon')
    <p class="text-danger">{{$message}}</p>
    @enderror
  </div>
  <div class="form-group">
                <label>Photo</label>
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" name="photo">
                    @error('photo')
    <p class="text-danger">{{$message}}</p>
    @enderror
    <img src="{{asset($category->photo)}}" style="width:200px; height:100px">
                    <label class="custom-file-label">Choose file...</label>
                </div>

                        </div>

                        
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>

                    </div>
</div>
</form> 


@endsection()