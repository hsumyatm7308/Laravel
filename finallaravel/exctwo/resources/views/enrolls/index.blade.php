@extends('layouts.adminindex')
<<<<<<< HEAD
@section('caption',"Enrolls List")
@section('content')

@dump($enrolls)

<!--Start Page Content Area-->

    <div class="container-fluid">

        <div class="col-md-12">
            <form action="{{route('enrolls.store')}}" method="POST" enctype="multipart/form-data">          
                {{csrf_field()}}    

               <div class="row align-items-end">
                   <div class="col-md-3 form-group">
                       <label for="classdate"> Class Date <span class="text-danger">*</span></label>

                       <input type="date" name="classdate" id="classdate" class="form-control form-control-sm rounded-0" value="{{old('classdate')}}" />
                   </div>

                   <div class="col-md-3 form-group">
                    <label for="post_id"> Class <span class="text-danger">*</span></label>

                    <select name="post_id" id="post_id" class="form-control form-control-sm rounded-0">
                        @foreach($posts as $post)
                            <option value="{{$post->id}}">{{$post->title}}</option>
                        @endforeach

                        
                        
                    </select>
                    </div>

                    <div class="col-md-3 form-group">
                        <label for="attcode"> Attendance Code <span class="text-danger">*</span></label>
 
                        <input type="text" name="attcode" id="attcode" class="form-control form-control-sm rounded-0" value="{{old('attcode')}}" />
                    </div>
           
                   <div class="col-md-3">                
                        <button type="reset" class="btn btn-secondary btn-sm rounded-0 ms-3">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-sm rounded-0 ms-3">Submit</button>                     
                   </div>
               </div>
           </form>
        </div>

        <hr/>

        <div class="col-md-12"> 

        <table id="mytable" class="mydata table table-warning table-hover border">
        <thead>
            <tr>
                <th>No</td> 
                <th>Student ID</th>
                <th>class</th>
                <th>Stage</th>
=======
@section('caption',"Stage List")
@section('content')

<!--Start Page Content Area-->

    <div class="container-fluid">
        <div class="col-md-12"> 

            <a href="#createmodal" class="btn btn-primary btn-sm rounded-0" data-bs-toggle="modal">Create</a>

            <hr/>

        <table id="mytable" class="mydata table table-warning table-hover border">
        <thead>
            <tr>
                <th>No</td>
                <th>Name</th>
                <th>Status</th>
                <th>By</th>
>>>>>>> origin/main
                <th>Crated At</th>
                <th>Update At</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
<<<<<<< HEAD
            @foreach($enrolls as $idx=>$enroll)
            <tr>
                <td>{{ ++$idx }}</td>
                {{-- <td>{{ $enroll->student($enroll->user_id) }}</td> --}}
                {{-- <td><a href="{{route('students.show',$enroll->studenturl())}}">{{$enroll->student($enroll->user_id)}}</a></td> --}}
                <td><a href="{{ route('students.show', $enroll->studenturl()) }}">{{ $enroll->student($enroll->user_id) }}</a></td>

                <td>{{ $enroll->post->title }}</td>


               <td>{{$enroll->stage->name}}</td>
        
                <td>{{ $enroll->created_at->format('d-M-Y') }}</td>
                <td>{{ $enroll->updated_at->format('d-M-Y') }}</td>
                <td>
                    <a href="javascript:void(0);" class="text-info editform" data-bs-toggle="modal" data-bs-target="#editmodal" data-id="{{ $enroll->id }}" data-attcode="{{ $enroll->attcode }}" data-post_id="{{ $enroll->post_id }}"><i class="fas fa-pen"></i></a>
                </td>
            </tr> 
        @endforeach
        
        
=======
            
            @foreach($stages as $idx=>$stage)
            <tr>
                <td>{{++$idx}}</td>
               

                <td>{{$stage['name']}}</td>
                <td>
                    <div>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" {{ $stage->status_id === 3 ? 'checked' : ''}} />
                        </div>
                    </div>
                </td>
                <td>{{$stage->user['name']}}</td>
                <td>{{$stage->created_at->format('d-M-Y')}}</td>
                <td>{{$stage->updated_at->format('d-M-Y')}}</td>
               
                <td>
                    <a href="javascript:void(0);" class="text-info editform" data-bs-toggle="modal" data-bs-target="#editmodal" data-id="{{$stage->id}}" data-name="{{$stage->name}}" data-status="{{$stage->status_id}}"><i class="fas fa-pen"></i></a>
                    
                    <a href="#" class="text-danger ms-2 delete-btns" data-idx="{{$stage->id}}"><i class="fas fa-trash-alt"></i></a>                   
                </td>
                <form id="formdelete-{{$stage->id}}" action="{{route('stages.destroy',$stage -> id)}}" method="POST">
                    @csrf 
                    @method('DELETE')
                   
                </form>
            
            </tr> 
            @endforeach
>>>>>>> origin/main

        </tbody>
        </table>

        </div>

    </div>
               
<!--End Page Content Area-->

<<<<<<< HEAD
 <!--Start edit model-->
=======
 <!--Start create model-->
 <div id="createmodal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">

            <div class="modal-header">
                <h6 class="modal-title">Create Form</h6>
                <button type="type" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form id="{{route('stages.store')}}" action="" method="POST" enctype="multipart/form-data">
       
                    {{csrf_field()}}

                   <div class="row align-items-end">
                       <div class="col-md-7 form-group">
                           <label for="name"> Name <span class="text-danger">*</span></label>

                           <input type="text" name="name" id="name" class="form-control form-control-sm rounded-0" placeholder="Enter your name" value="{{old('name')}}" />
                       </div>

                       <div class="col-md-3 form-group">
                        <label for="status_id"> Status <span class="text-danger">*</span></label>
                        <select name="status_id" id="status_id" class="form-control form-control-sm rounded-0">
                            @foreach($statuses as $status)
                                <option value="{{$status['id']}}">{{$status['name']}}</option>
                            @endforeach
                            
                        </select>
                       </div>
               
                       <div class="col-md-2">
                            <button type="submit" class="btn btn-primary btn-sm rounded-0">Create</button>                             
                       </div>                  
                   </div>
    
               </form>
            </div>

        </div>
    </div>
</div>
<!--End create model-->

 <!--Start eidt model-->
>>>>>>> origin/main
 <div id="editmodal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">

            <div class="modal-header">
                <h6 class="modal-title">Edit Form</h6>
<<<<<<< HEAD
                <button type="type" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form id="formaction" action="" method="POST" enctype="multipart/form-data">
=======
                <button type="stage" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form id="formaction" action="" method="POST">
>>>>>>> origin/main
           
                    {{csrf_field()}}
                    {{method_field('PUT')}}
            
                   <div class="row align-items-end">
<<<<<<< HEAD
                    

                       <div class="col-md-7 form-group">
                        <label for="post_id"> Stage <span class="text-danger">*</span></label>

                        <select name="post_id" id="post_id" class="form-control form-control-sm rounded-0">
                           @foreach($posts as $post)
                                <option value="{{$post->id}}">{{$post->title}}</option>
                            @endforeach

                           
                            
                        </select>
                       </div>

                       <div class="col-md-3 form-group">
                        {{-- <label for="editattcode">Remark <span class="text-danger">*</span></label> --}}

                        {{-- ...  --}}

                        <div class="col-md-12 form-group mb-3">
                            <label for="remark">Remark</label>
                            <textarea name="remark" id="remark" class="form-control rounded-0" rows="5" placeholder="Enter your Remark">{{old('remark')}}</textarea>
                        </div>

                        {{-- .....  --}}
 
                        <input type="text" name="attcode" id="editattcode" class="form-control form-control-sm rounded-0" value="{{old('classdate')}}" />
                    </div>
=======
                       <div class="col-md-7 form-group">
                           <label for="editname"> Name <span class="text-danger">*</span></label>

                           <input type="text" name="name" id="editname" class="form-control form-control-sm rounded-0" placeholder="Enter your name" value="{{old('name')}}" />
                       </div>

                       <div class="col-md-3 form-group">
                        <label for="editstatus_id"> Status <span class="text-danger">*</span></label>
                        
                        <select name="status_id" id="editstatus_id" class="form-control form-control-sm rounded-0">
                            @foreach($statuses as $status)
                                <option value="{{$status['id']}}">{{$status['name']}}</option>
                            @endforeach
                            
                        </select>
                       </div>
>>>>>>> origin/main
               
                       <div class="col-md-2">
                            <button type="submit" class="btn btn-primary btn-sm rounded-0">Update</button>                             
                       </div>                  
                   </div>
    
               </form>
            </div>
<<<<<<< HEAD
=======

            <div class="modal-footer">

            </div>

>>>>>>> origin/main
        </div>
    </div>
</div>
<!--End edit model-->

@endsection

<<<<<<< HEAD
{{-- Str = string --}}           
{{-- Str::limit($attendance -> remark,10) --}}

@section('css')
  
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
 
$(document).ready(function(){

//start edit form 
$(document).on('click','.editform',function(e){
    // console.log($(this).attr('data-name'),$(this).attr('data-id'))

    $("#editattcode").val($(this).attr('data-attcode'));
    $("#editpost_id").val($(this).data('post_id'));
    

    const getid = $(this).attr('data-id');
            
    $("#formaction").attr("action",`/attendances/${getid}`);

    e.preventDefault();
});
//end edit form

});
    

  //datatable.com
    // let table = new DataTable('#mytable');
    $('#mytable').DataTable();

=======
{{-- Str = string --}}
{{-- Str::limit($stages -> remark,10) --}}

@section('script')

<script type="text/javascript">

$(document).ready(function(){

         //start edit form 
$(document).on('click','.editform',function(e){
            // console.log($(this).attr('data-name'),$(this).attr('data-id'))

            $("#editname").val($(this).attr('data-name'));
            $("#editstatus_id").val($(this).data('status'));

            const getid = $(this).attr('data-id');
            
            $("#formaction").attr("action",`/stages/${getid}`);

            e.preventDefault();
});
//end edit form

        //start delete item
        $('.delete-btns').click(function(){
            // console.log("hi");
            var getidx = $(this).data('id');

            if(confirm(`Are you sure !!! you want to delete ${getidx}?`)){
                $('#formdelete-'+getidx).submit();
                return true;
            }else{
                return false;
            }

        });
        //end delete item
});
    

>>>>>>> origin/main
</script>

@endsection 

{{-- home work --}}
<<<<<<< HEAD
 {{-- tag == categories  == attendances --}}
=======
 {{-- stage == stages  == types --}}
>>>>>>> origin/main
