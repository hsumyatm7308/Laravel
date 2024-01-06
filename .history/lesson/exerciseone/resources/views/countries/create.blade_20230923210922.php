@extends('layouts.app')

@section('title')
@section('content')

@section('footer')


<form action="/countries" method="POST">
    <div class="row">

    <div class="col-md-6 form-group mb-3">
        <label for="name">Country Name</label>
        <input type="text">
    </div>

    <div class="col-md-6 form-group mb-3">
        <label for="">Capital</label>
    </div>

    <div class="col-md-6 form-group mb-3">
        <label for="">Currency</label>
    </div>

    <div class="col-md-6 form-group mb-3">
        <label for="user_id">User ID</label>
        <input type="number" name="user_id">
    </div>

    <div class="col-md-12">
        <label for="content">Content</label>
        
        <textarea name="content" id="content" rows="3"></textarea>

    </div>


    <div class="col-md-12">
        <div class="d-flex justify-content-end">
            <button>Cancel</button>
            <button>Submit</button>
        </div>
    </div>


    </div>
</form>

