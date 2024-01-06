@extends('layouts.adminindex')
@section('caption','statuse List')
@section('content')

<div class="container-fluid">
    <div class="col-md-12">



        <div class="col-md-12 ">
            <a href="{{route('post.create')}}" class="btn btn-primary btn-sm rounded-0">Create</a>
            <hr>
        </div>
        <div class="col-md-12">

            <table class="table table-sm table-hover border container">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Fee</th>
                        <th>Type</th>
                        <th>Tag</th>
                        <th>Att Form</th>
                        <th>Status</th>
                        <th>By</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action </th>
                    </tr>

                </thead>
                <tbody> @foreach($post as $idx=>$post) <tr>
                        <td>{{++$idx}}</td>
                        <td><img src="{{asset($post->image)}}" class="rounded-circle" alt=""></td>
                        <td>{{$post->startdate}}</td>
                        <td>{{$post->enddate}}</td>
                        <td>{{$post->starttime}}</td>
                        <td>{{$post->endtime}}</td>
                        <td>{{$post->fee}}</td>
                        <td>{{$post->type_id}}</td>
                        <td>{{$post->tag_id}}</td>
                        <td>{{$post->attshow}}</td>
                        <td>{{$post->status->name}}</td>
                        <td>{{$post->user['name']}}</td>

                        <td>{{$statuse->created_at->format('d-M-Y')}}</td>
                        <td>{{$statuse->updated_at->format('d-M-Y')}}</td>
                        <td class="d-flex justify-content-center align-items-center">






          
                            <a href="{{route('post.edit',$post->id)}}" class="text-info m-3">
                                <i class="fas fa-pen"></i></a>

                            <a href="#" class="text-danger m-3 delete-btn" data-idx="{{$statuse->regnumber}}"><i class="fas fa-trash-alt"></i></a>

                     



                        </td>

                        
                        <form class="formdelete-{{$statuse->regnumber}}" id="" action="{{route('statuses.destroy',$statuse->id)}}" method="POST" class="d-flex  justify-content-center align-items-center">
                                @csrf
                                @method("DELETE")

                        </form>

          
                    </tr>
                    @endforeach
                </tbody>

            </table>

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

