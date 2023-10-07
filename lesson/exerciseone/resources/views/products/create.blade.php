@extends('layouts.app')

@section('title')
@section('content')

@section('footer')


<!-- / is indicate to POST (store)  and not includint /   indicates to GET (index)  -->
<!-- action="/countries" -->

<form action="{{route('products.store')}}" method="POST" enctype="multipart/formdata">
    <!-- csrf = Cross-site request  forgery -->
  <!-- {{ csrf_field() }} -->
  <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
  @csrf 

    <div class="row">


    <div class="col-md-6 form-group mb-3">
        <label for="name">Country Name</label>
        <input type="text" name="name" class="form-control form-control-sm rounded-0">
    </div>

    <div class="col-md-6 form-group mb-3">
        <label for="price">Price</label>
        <input type="text" name="price" class="form-control form-control-sm rounded-0">
    </div>

    <div class="col-md-6 form-group mb-3">
        <label for="image">Image</label>
        <input type="text" name="image" class="form-control form-control-sm rounded-0">

    </div>




    <div class="col-md-12">
        <div class="d-flex justify-content-end">
            <a href="{{route('products.index')}}">Cancel</a>
            <button>Submit</button>
        </div>
    </div>


    </div>
</form>

