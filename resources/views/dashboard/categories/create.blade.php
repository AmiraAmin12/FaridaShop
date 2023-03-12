@extends('dashboard.layout')
@section('title')
Categories
@endsection()
@section('content')

<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Categories</h1>
    <a href="{{url('/admin/categories')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
           
        back to category</a>
</div>
<form  action="{{url('/admin/categories')}}" method="POST" enctype="multipart/form-data">
@csrf
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Categories</h6>
                        </div>
                        <div class="card-body">
                          @if(session('success'))
                          <div class="alert alert-success">
                          {{session('success')}}
                          </div>
                        @endif
                        
                         
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text"  name="name"  class="form-control">
  </div>
  <div class="form-group">
    <label for="icon">icon</label>
    <input type="text"  name="icon" class="form-control">
  </div>
  <div class="custom-file mb-3">
  <label class="custom-file-label" for="validatedCustomFile"> photo</label>
    <input type="file" class="cform-control-file"  >
  </div>
  

                        </div>

                        
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>

                    </div>
</div>
</form> 


@endsection()