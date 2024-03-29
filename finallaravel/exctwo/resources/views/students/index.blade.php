@extends('layouts.adminindex')
@section('caption',"Student List")
@section('content')

<!--Start Page Content Area-->

    <div class="container-fluid">

        <div class="col-md-12">  
        
        <a href="{{route('students.create')}}" class="btn btn-primary btn-sm rounded-0 mb-3">Create</a>
        <hr/>


        <table id="mytable" class="mydata table table-warning table-hover border">
        <thead>
            <tr>
                <th>No</td>
                <th>Reg Number</th>
                <th>Name</th>
                <th>Remark</th>
                <th>Status</th>
                <th>By</th>
                <th>Crated At</th>
                <th>Update At</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
            
            @foreach($students as $idx=>$student)
            <tr>
                <td>{{++$idx}}</td>
                <td><a href="{{route('students.show',$student->id)}}">{{$student->regnumber}}</a></td>
                <td>{{$student->firstname}} {{$student -> lastname}}</td>

                <td>{{Str::limit($student -> remark,10)}}</td> 
                <td>{{$student->status_id}}</td>
                <td>{{$student->user['name']}}</td>
                <td>{{$student->created_at->format('d-M-Y')}}</td>
                <td>{{$student->updated_at->format('d-M-Y')}}</td>
                {{-- <td class="flex justify-center">
                    <a href="{{route('students.edit',$student -> id)}}" class="text-info me-3"><i class="fas fa-pen"></i></a>

                
                    
                </td> --}}
                <td>
                    <a href="{{route('students.edit',$student -> id)}}" class="text-info"><i class="fas fa-pen"></i></a>
                    
                    <a href="#" class="text-danger ms-2 delete-btns" data-idx="{{$student -> regnumber}}"><i class="fas fa-trash-alt"></i></a>                   
                </td>
                <form id="formdelete-{{$student -> regnumber}}" action="{{route('students.destroy',$student -> id)}}" method="POST">
                    @csrf 
                    @method('DELETE')
                   
                </form>
            
            </tr> 
            @endforeach

        </tbody>
        </table>

        </div>

    </div>
               
<!--End Page Content Area-->

@endsection

{{-- Str = string --}}
{{-- Str::limit($student -> remark,10) --}}

@section('script')

<script type="text/javascript">

    $(document).ready(function(){
        $('.delete-btns').click(function(){
            // console.log("hi");
            var getidx = $(this).data('idx');

            if(confirm(`Are you sure !!! you want to delet ${getidx}?`)){
                $('#formdelete-'+getidx).submit();
                return true;
            }else{
                return false;
            }

        });
    });

<<<<<<< HEAD

 //datatable.com
 let table = new DataTable('#mytable');
    // $('#mytable').DataTable();

    
=======
>>>>>>> origin/main
</script>

@endsection 