@extends('layouts.adminindex')
@section('caption',"City Show")
@section('content')

<!--Start Page Content Area-->

    <div class="container-fluid">

        <div class="col-md-12">  
        
        <a href="{{route('cities.index')}}" class="btn btn-secondary btn-sm rounded-0 mb-3">Close</a>
        <hr/>

        <div class="row">
            <div class="col-md-4">
                <div class="card rounded-0">
                    <div class="card-header">
                       
                        <h5 class="card-title">{{$city->regnumber}} </h5>
                    </div>
                    <ul class="list-group text-center">
                        <li class="list-group-item fw-bold"><h6>{{$city->city}}</h6></li>
                    </ul>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <i class="fas fa-user fa-sm"></i>
                                <span>{{$city["user"]["name"]}}</span>
                            </div>
                            <div class="col-md-6">
                                <i class="fas fa-calendar-alt fa-sm"></i>
                                <span>{{date('d M y',strtotime($city->created_at))}} | {{date('h:i:s A',strtotime($city->created_at))}}</span>
                                <br/>
                                {{-- <i class="fas fa-edit fa-sm"></i>
                                <span>{{$city->updated_at}}</span>
                                <br/> --}}
                                <i class="fas fa-edit fa-sm"></i>
                                <span>{{date('d M y h:i:s A',strtotime($city->updated_at))}}</span>
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
                    {{-- start remark  --}}
                    <table class="table table-sm table-border">
                        <thead>
                            <tr>
                                <th>Remark Here</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$city->remark}}</td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- end remark --}}
                </div>

            </div>
        </div>
       
        </div>

    </div>
               
<!--End Page Content Area-->

@endsection

{{-- Str = string --}}
{{-- Str::limit($city -> remark,10) --}}

