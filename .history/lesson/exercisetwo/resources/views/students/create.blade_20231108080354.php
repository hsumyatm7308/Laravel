@extends('layouts.adminindex')
@section('caption','Create Student List')
@section('content')

<div class="container-fluid">
    <div class="col-md-12">


    <form action="{{route('students.store')}}" method="POST">

     @csrf 

    <div class="row">


    <div class="col-md-4 form-group mb-3">
        <label for="firstname">First Name <span class="text-danger">*</span></label>
        <input type="text" name="firstname" class="form-control form-control-sm rounded-0" placeholder="Enter First Name" value="{{old('firstname')}}">
    </div>

    <div class="col-md-4 form-group mb-3">
        <label for="lastname">Last Name <span class="text-danger">*</span></label>
        <input type="text" name="lastname" class="form-control form-control-sm rounded-0" placeholder="Enter Last Name">
    </div>

    <div class="col-md-4 form-group mb-3">
        <label for="regnumber">Register Number <span class="text-danger">*</span></label>
        <input type="text" name="regnumber" class="form-control form-control-sm rounded-0">

    </div>



    <div class="col-md-12">
        <label for="remark">Remark</label>
        
        <textarea name="remark"  id="remark" class="form-control form-control-sm rounded-0" rows="3"></textarea>

    </div>


    <div class="col-md-12 mt-5">
        <div class="d-flex justify-content-end">
            <a href="{{route('students.index')}}" class="btn">Cancel</a>
            <button class="btn btn-primary bg-secondary">Submit</button>
        </div>
    </div>


    </div>
</form>



       


    </div>

</div>


@endsection