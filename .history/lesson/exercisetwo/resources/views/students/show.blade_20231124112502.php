@extends('layouts.adminindex')
@section('caption','Student Show')
@section('content')

<div class="container-fluid">
    <div class="col-md-12">



        <div class="col-md-12 ">
            <a href="{{route('students.index')}}" class="btn btn-secondary btn-sm rounded-0">Close</a>
            <hr>
        </div>
       










    </div>

</div>


@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('.delete-btn').click(function(){
            var getidx = $(this).data('idx');
            
            if(confirm("Are you sure you want to delete " + getidx + " ?")) {

                $('#formdelete-'+getidx).submit();
                return true;

            }else{
               return false;
            }
        })
    })

</script>

@endsection