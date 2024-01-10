@extends('layouts.adminindex')
@section('caption',"Post Show")
@section('content')

<!--Start Page Content Area-->

<<<<<<< HEAD
<div class="container-fluid">

    <div class="col-md-12">

        <a href="{{route('posts.index')}}" class="btn btn-secondary btn-sm rounded-0 mb-3">Close</a>

        @if(!$post->checkenroll($userdata->id))
        <a href="#createmodal" class="btn btn-primary btn-sm rounded-0 mb-3" data-bs-toggle="modal">Enroll</a>
        @endif

        <hr />
=======
    <div class="container-fluid">

        <div class="col-md-12">  
        
        <a href="{{route('posts.index')}}" class="btn btn-secondary btn-sm rounded-0 mb-3">Close</a>

        @if(!$post->checkenroll($userdata->id))
            <a href="#createmodal" class="btn btn-primary btn-sm rounded-0 mb-3" data-bs-toggle="modal">Enroll</a>
        @endif
        
        <hr/>
>>>>>>> origin/main

        <div class="row">
            <div class="col-md-4">
                <div class="card rounded-0">
                    <div class="card-header">
<<<<<<< HEAD

                        <h5 class="card-title">{{$post->title}} </h5>
                    </div>
                    <ul class="list-group text-center">
                        <li class="list-group-item fw-bold"><img src="{{asset($post -> image)}}" class="rounded-circle"
                                width="200" height="200" height="20" /></li>
=======
                        
                        <h5 class="card-title">{{$post->title}} </h5>
                    </div>
                    <ul class="list-group text-center">
                        <li class="list-group-item fw-bold"><img src="{{asset($post -> image)}}" class="rounded-circle" width="200" height="200" height="20" /></li>
>>>>>>> origin/main
                    </ul>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <i class="fas fa-user fa-sm"></i>
                                <span>{{$post["tag"]["name"]}}</span>
<<<<<<< HEAD
                                <br />
                                <i class="fas fa-user fa-sm"></i>
                                <span>{{$post["type"]["name"]}}</span>
                                <br />
=======
                                <br/>
                                <i class="fas fa-user fa-sm"></i>
                                <span>{{$post["type"]["name"]}}</span>
                                <br/>
>>>>>>> origin/main
                                <i class="fas fa-user fa-sm"></i>
                                <span>{{$post["user"]["name"]}}</span>
                            </div>
                            <div class="col-md-6">
                                <i class="fas fa-file fa-sm"></i>
                                <span>{{$post['attstatus']['name']}}</span>
<<<<<<< HEAD
                                <br />
                                <i class="fas fa-calendar-alt fa-sm"></i>
                                <span>{{date('d M y',strtotime($post->created_at))}} | {{date('h:i:s
                                    A',strtotime($post->created_at))}}</span>
                                <br />

=======
                                <br/>
                                <i class="fas fa-calendar-alt fa-sm"></i>
                                <span>{{date('d M y',strtotime($post->created_at))}} | {{date('h:i:s A',strtotime($post->created_at))}}</span>
                                <br/>
                                
>>>>>>> origin/main
                                <i class="fas fa-edit fa-sm"></i>
                                <span>{{date('d M y h:i:s A',strtotime($post->updated_at))}}</span>
                            </div>
                            <div class="col-md-6">
                                <i class="fas fa-calendar fa-sm">
                                    @foreach($dayables as $dayable)
<<<<<<< HEAD
                                    {{$dayable['name']}} ,
=======
                                        {{$dayable['name']}} ,
>>>>>>> origin/main
                                    @endforeach
                                </i>
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
<<<<<<< HEAD
                    {{-- start remark --}}
=======
                    {{-- start remark  --}}
>>>>>>> origin/main
                    <table class="table table-sm table-border">
                        <thead>
                            <tr>
                                <th>Info...</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
<<<<<<< HEAD
                                <td>{!! $post->content !!}</td>
=======
                                <td>{{$post -> content}}</td>
>>>>>>> origin/main
                            </tr>
                        </tbody>
                    </table>
                    {{-- end remark --}}
                </div>

<<<<<<< HEAD
                <!--start message box-->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-group chat-box">
                                @foreach($comments as $comment)
                                <li class="list-group-item mt-2">
                                    <div>
                                        <p>{{$comment -> description}}</p>
                                    </div>
                                    <div>
                                        <span class="small fw-bold float-end">{{$comment -> user['name']}} |
                                            {{$comment -> created_at -> diffForHumans()}}<span>
                                    </div>


                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="card-body border-top">
                            <form action="{{route('comments.store')}}" method="POST">
                                @csrf

                                <div class="col-md-12 d-flex justify-content-between">

                                    <textarea name="description" id="description"
                                        class="form-control border-0 rounded-0 " placeholder="Comment Here..." rows="1"
                                        style="resize:none;"></textarea>

                                    <button type="submit" class="btn btn-info btn-sm text-white ms-3"><i
                                            class="fas fa-paper-plane"></i></button>

                                </div>

                                <!--start hidden field-->
                                <input type="hidden" name="commentable_id" id="commentable_id" value="{{$post->id}}" />

                                <input type="hidden" name="commentable_type" id="commentable_type "
                                    value="App\Models\Post" />
                                <!--end hidden field-->

                            </form>
                        </div>
                    </div>
                </div>
                <!--end message box-->

            </div>
        </div>

    </div>

</div>

=======
                    <!--start message box-->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <ul class="list-group chat-box">
                                    @foreach($comments as $comment)
                                    <li class="list-group-item mt-2">
                                        <div>
                                            <p>{{$comment -> description}}</p>
                                        </div>  
                                        <div>
                                            <span class="small fw-bold float-end">{{$comment -> user['name']}} | 
                                            {{$comment -> created_at -> diffForHumans()}}<span>
                                        </div>
                                        
                                        
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            
                            <div class="card-body border-top">
                                <form action="{{route('comments.store')}}" method="POST">
                                    @csrf

                                    <div class="col-md-12 d-flex justify-content-between">

                                        <textarea name="description" id="description" class="form-control border-0 rounded-0 " placeholder="Comment Here..." rows="1" style="resize:none;"></textarea>

                                        <button type="submit" class="btn btn-info btn-sm text-white ms-3"><i class="fas fa-paper-plane"></i></button>

                                    </div>

                                    <!--start hidden field-->
                                    <input type="hidden" name="commentable_id" id="commentable_id" value="{{$post->id}}" />

                                    <input type="hidden" name="commentable_type" id="commentable_type " value="App\Models\Post" />
                                    <!--end hidden field-->

                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end message box-->
                
            </div>
        </div>
       
        </div>

    </div>
               
>>>>>>> origin/main
<!--End Page Content Area-->

<!--start modal area-->
<!--start create modal-->
<div id="createmodal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">

            <div class="modal-header">
                <h6 class="modal-title">Enroll Form</h6>
                <button type="type" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form id="" action="{{route('enrolls.store')}}" method="POST" enctype="multipart/form-data">
<<<<<<< HEAD

                    {{csrf_field()}}

                    <div class="row align-items-end">
                        <div class="col-md-12 form-group mb-3">
                            <label for="image" class="gallery">Choose Image</label>

                            <input type="file" name="image" id="image" class="form-control form-control-lg rounded-0"
                                placeholder="Enter your image" value="{{old('image')}}" hidden />
                        </div>

                        <div class="col-md-10 form-group">
                            <label for="remark"> Remark <span class="text-danger">*</span></label>

                            <textarea name="remark" id="remark" class="form-control form-control-sm rounded-0"
                                placeholder="Enter your Remark" rows="3" style="resize:none;">{{old('name')}}</textarea>
                        </div>

                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary btn-sm rounded-0">Submit</button>
                        </div>

                        <!--start hidden field-->
                        <input type="hidden" name="post_id" value="{{$post->id}}" />
                        <!--end hidden field-->
                    </div>

                </form>
=======
       
                    {{csrf_field()}}

                   <div class="row align-items-end">
                    <div class="col-md-12 form-group mb-3">
                        <label for="image" class="gallery">Choose Image</label>
                        
                        <input type="file" name="image" id="image" class="form-control form-control-lg rounded-0" placeholder="Enter your image" value="{{old('image')}}" hidden  />
                    </div>

                       <div class="col-md-10 form-group">
                           <label for="remark"> Remark <span class="text-danger">*</span></label>

                           <textarea name="remark" id="remark" class="form-control form-control-sm rounded-0" placeholder="Enter your Remark" rows="3" style="resize:none;">{{old('name')}}</textarea>
                       </div>

                       <div class="col-md-2">
                            <button type="submit" class="btn btn-primary btn-sm rounded-0">Submit</button>                             
                       </div>       
                       
                       <!--start hidden field-->
                       <input type="hidden" name="post_id" value="{{$post->id}}" />
                       <!--end hidden field-->
                   </div>
    
               </form>
>>>>>>> origin/main
            </div>

        </div>
    </div>
</div>
<!--end create modal-->
<!--end modal area-->

@endsection

@section('css')
<style type="text/css">
<<<<<<< HEAD
    /* start comment  */
    .chat-box {
        height: 200px;
        overflow-y: scroll;
    }

    /* end comment */

    /* start image preview */
    .gallery {
        width: 100%;

        background-color: #eee;
        color: #aaa;
        text-align: center;
        padding: 10px;
        margin: auto;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .removetext span {
        display: none;
    }

    .gallery img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border: 2px dashed #aaa;
        border-radius: 10px;
        padding: 5px;
        margin: 0 5px;
    }

    /* end image preview */
=======
/* start comment  */
.chat-box{
    height:200px;
    overflow-y:scroll;
}
/* end comment */

/* start image preview */
.gallery{
    width:100%;
           
    background-color:#eee;
    color:#aaa;
    text-align:center;
    padding:10px;
    margin:auto;

    display:flex;
    justify-content:center;
    align-items:center;
}

.removetext span{
    display:none;
}

.gallery img{
    width:100px;
    height:100px;
    object-fit:cover;
    border:2px dashed #aaa;
    border-radius:10px;
    padding:5px;
    margin:0 5px;
}
/* end image preview */
>>>>>>> origin/main
</style>
@endsection

@section('script')
<script type="text/javascript">
<<<<<<< HEAD
    $(document).ready(function () {
        // console.log("hi")

        var previewimages = function (input, output) {
            // console.log(input.files);

            if (input.files) {
                var totalfiles = input.files.length;
                // console.log(totalfiles);

                if (totalfiles > 0) {
                    $('.gallery').addClass('removetext');
                } else {
                    $(".gallery").removeClass('removetext');
                }

                for (var i = 0; i < totalfiles; i++) {
                    var filereader = new FileReader();

                    filereader.onload = function (e) {
                        $(output).html("");
                        $($.parseHTML("<img>")).attr("src", e.target.result).appendTo(output);
                    }
                    filereader.readAsDataURL(input.files[i]);
                }
            }
        };

        $("#image").change(function () {
            previewimages(this, ".gallery");
        })

    });

</script>

@endsection
=======
$(document).ready(function(){
    // console.log("hi")

    var previewimages = function(input,output){
        // console.log(input.files);

        if(input.files){
            var totalfiles = input.files.length;
            // console.log(totalfiles);

            if(totalfiles > 0){
                $('.gallery').addClass('removetext');
            }else{
                $(".gallery").removeClass('removetext');
            }

            for(var i = 0 ; i < totalfiles ; i++){
                var filereader = new FileReader();

                filereader.onload = function(e){
                    $(output).html("");
                    $($.parseHTML("<img>")).attr("src",e.target.result).appendTo(output);
                }
                filereader.readAsDataURL(input.files[i]);
            }
        }
    };

    $("#image").change(function(){
        previewimages(this,".gallery");
    })

});

</script>

@endsection


>>>>>>> origin/main
