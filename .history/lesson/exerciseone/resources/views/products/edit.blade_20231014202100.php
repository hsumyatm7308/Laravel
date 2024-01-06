@extends('layouts.app')

@section('title','Create Page')
@section('content')

@section('footer')


<h1>Edit Page</h1>

<form action="/products/{{$product->id}}" method="POST" class="container" enctype="multipart/form-data">
    <!-- csrf = Cross-site request  forgery -->
  <!-- {{ csrf_field() }} -->
  <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
  @csrf 

  <!-- {{ method_field("PUT") }} -->
  @method('PATCH')

    <div class="row">


    <div class="col-md-6 form-group mb-3">
        <label for="name">Product Name</label>
        <input type="text" name="name" class="form-control form-control-sm rounded-0" value="{{$product->name}}">
    </div>

    <div class="col-md-6 form-group mb-3">
        <label for="price">Price</label>
        <input type="text" name="price" class="form-control form-control-sm rounded-0" value="{{$product->price}}">
    </div>

    <div class="col-md-6 form-group mb-3">
        <label for="image">Image</label>
        <input type="file" name="image" class="form-control form-control-sm rounded-0" value="{{$product->image}}">

    </div>

 
   


    <div class="col-md-12 mt-5">
        <div class="d-flex justify-content-end">
            <a href="{{route('products.index')}}" class="btn btn-primary rounded me-4">Cancel</a>
            <button class="btn btn-primary rounded">Update</button>
        </div>
    </div>


    </div>
</form>

