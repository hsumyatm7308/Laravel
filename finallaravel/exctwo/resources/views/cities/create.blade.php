@extends('layouts.adminindex')
@section('caption','Create City')
@section('content')

<div class="container-fluid">

    <div class="col-md-12">   
        
        <form action="/cities" method="POST" enctype="multipart/form-data">
            {{-- 419 PAGE EXPIRED (csrf = Cross-site request forgery) --}}
       
            {{-- {{ csrf_field() }}  go to store --}}
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
            @csrf
            @method('POST')
       
           <div class="row">
               <div class="col-md-6 form-group mb-3">
                   <label for="city">City <span class="text-danger">*</span></label>
                   <input type="text" name="city" id="city" class="form-control form-control-lg rounded-0" placeholder="Enter your City" value="{{old('city')}}" />
               </div>
       
               <div class="col-md-6 form-group mb-3">
                <label for="regnumber">Regnumber</label>
                <input type="text" name="regnumber" id="regnumber" class="form-control form-control-lg rounded-0" placeholder="Enter your regnumber" value="{{old('regnumber')}}" />
            </div>
              
       
               <div class="col-md-12 form-group mb-3">
                   <label for="remark">Remark</label>
                   <textarea name="remark" id="remark" class="form-control rounded-0" rows="5" placeholder="Enter your Remark">{{old('remark')}}</textarea>
               </div>
                 
               <div class="col-md-12">
                   <div class="d-flex justify-content-end">
                       <a href="{{route('cities.index')}}" class="btn btn-secondary btn-sm rounded-0">Cancel</a> 
                       <button type="submit" class="btn btn-info btn-sm rounded-0 ms-3">Submit</button>
                   </div>
               </div>

           </div>

       </form>

    </div>

</div>

<<<<<<< HEAD
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
   
@endsection

@section('script')
// summernote css1 js1
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>
      // texteditoer for content
      $('#remark').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>
=======
>>>>>>> origin/main
@endsection