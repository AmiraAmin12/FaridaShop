@extends('dashboard.layout')
@section('title')
Categories
@endsection()
@section('content')

<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Categories</h1>
    <a href="{{url('/admin/categories/create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
           
        New Category</a>
</div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Categories</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Photo</th>
                                            <th>Icon</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        @if($cats->isNotEmpty())
                                        @foreach($cats as $category)

                                        <tr>
                                            <td>{{$category->name}}  </td>
                                            <td>
                                                <img src="{{ asset($category->photo)}}" style="width:200px; height:200px;">
                                            </td>
                                            <td>
                                                <i class="fa fa-{{$category->icon}}"></i>
                                            </td>
                                            <td>
                                               
                                               <form action="{{url('/admin/categories/'. $category->id)}}" method="POST">
                                               <a href="{{url("/admin/categories/$category->id/edit")}}" class="btn btn-sm btn-warning">
                                                Edit
                                               </a> 
                                               <a href="{{url("/admin/categories/$category->id")}}" class="btn btn-sm btn-success">
                                                View
                                               </a>  
                                               @csrf
                                               @method('DELETE')
                                               <button type="submit" class="btn  btn-sm btn-danger">Delete</button> 
                                               </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr col->
                                            <td>
                                            <div class="alert alert-danger" role="alert">
 no data found
</div>
                                            </td>
                                        </tr>

                                        
                                        @endif

                                    </tbody>
                                </table>
                                {{ $cats->links()}}

                            </div>
                        </div>
                    </div>


</div>


@endsection()