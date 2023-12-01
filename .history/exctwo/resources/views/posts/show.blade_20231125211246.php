@extends('layouts.adminindex')
@section('caption',"post Show")
@section('content')

<!--Start Page Content Area-->

<div class="container-fluid">

    <div class="col-md-12">

        <a href="{{route('post.index')}}" class="btn btn-secondary btn-sm rounded-0 mb-3">Close</a>
        <hr />

        <div class="row">
            <div class="col-md-4">
                <div class="card rounded-0">
                    <div class="card-header">

                        <h5 class="card-title">{{$post->name}} </h5>
                    </div>
                    <ul class="list-group text-center">
                        <li class="list-group-item fw-bold"><img src="{{asset($post -> image)}}" class="rounded-circle"
                                width="20" height="20" /></li>
                    </ul>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <i class="fas fa-user fa-sm"></i>
                                <span>{{$post["tag"]["name"]}}</span>
                                <br>
                                <i class="fas fa-user fa-sm"></i>
                                <span>{{$post["tag"]["name"]}} : {{$post->fee}}</span>
                                <br>
                                <i class="fas fa-user fa-sm"></i>
                                <span>{{$post["user"]["name"]}}</span>
                                <br>
                            </div>
                            <div class="col-md-6">
                                <i class="fas fa-file fa-sm"></i>
                                <span>{{$post["attstatus"]["name"]}}</span>
                                <br>

                                <i class="fas fa-calendar-alt fa-sm"></i>
                                <span>{{date('d M y',strtotime($post->created_at))}} | {{date('h:i:s
                                    A',strtotime($post->created_at))}}</span>
                                <br />

                                <i class="fas fa-edit fa-sm"></i>
                                <span>{{date('d M y h:i:s A',strtotime($post->updated_at))}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">

                <div class="card-box rounded-0">
                    <ul class="list-group text-center rounded-0">
                        <li class="list-group-item active">Information</li>
                    </ul>
                    {{-- start remark --}}
                    <table class="table table-sm table-border">
                        <thead>
                            <tr>
                                <th>Info....</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$post->content}}</td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- end remark --}}
                </div>

                <div class="col-md-12">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <!-- message area  -->

                        </div>
                        <div class="card-body border-top">
                            <form action="{{routes('comments')}}" method="">
                                @csrf 
                                
                                
                                <div class="col-md-12 d-flex justify-between">
                                    <textarea name="description" id="description"  class="form-control border-0 rounded-0" placeholder="Comment here..." rows="1" style="resize:none"></textarea>
                                    <button type="submit" class="btn btn-info btn-sm text-light ms-3"><i class="fas fa-paper-plane"></i></button>
                                </div>


                                <!-- start hidden fields  -->
                                <input type="hidden" name="commentable_id" id="commentable_id" value="{{$post->id}}">
                                <input type="hidden" name="commentable_type" id="commentable_type" value="App\Models\Post">
                            </form>

                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

<!--End Page Content Area-->

@endsection