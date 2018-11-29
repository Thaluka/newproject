@extends('layouts.customer')
@section('link')
<link href="{{ asset('css/stylecustomerindex.css') }}" media="all" rel="stylesheet" type="text/css" />
@endsection

@section('title')
Send Request
@endsection
@section('content')
 <div class="container">

 <br/>
     <div class="row justify-content-center">
    
         <div class="col-md-10">
             <div class="card">
                 <div class="card-header"><h6>{{$complain->type}}-{{$complain->product_name }}</h6></div>

                 <div class="card-body">
                
                     <div class="col-md-12">
                         <diV class="container message mb-2 ">
                             {{$complain->message}}
                         </div><br>
                         <div class="image mt-2 mb-1">
                             <img src="{{ asset('uploads/'.$complain->image) }}" width="300px" height="175px"  class="d-inline-block align-left">
                         </div><br>
                         <h6 class="ml-1" >{{$complain->address }}</h6>
                         <h6 class="ml-1" >{{$complain->region}}</h6>
                         <h6 class="ml-1" >Status : {{$complain->status}}</h6>
                         <div class="col-sm-12 row">
                         @if ($complain->status=='Pending')
                             <div class="col-sm-3 bg-danger text-white scheme">
                                   <h6>Pending</h6>
                             </div>
                         @elseif ($complain->status=='Assign')
                             <div class="col-sm-3 bg-danger text-white scheme">
                                   <h6>Pending</h6>
                             </div>
                             <div class="col-sm-3 bg-warning text-white scheme">
                                   <h6>Assign</h6>
                             </div>
                         @elseif ($complain->status=='Waiting')
                             <div class="col-sm-3 bg-danger text-white scheme">
                                   <h6>Pending</h6>
                             </div>
                             <div class="col-sm-3 bg-warning text-white scheme">
                                   <h6>Assign</h6>
                             </div>
                             <div class="col-sm-3 bg-info text-white scheme">
                                   <h6>Wating</h6>
                             </div>
                         @elseif ($complain->status=='Complete')
                             <div class="col-sm-3 bg-danger text-white scheme">
                                   <h6>Pending</h6>
                             </div>
                             <div class="col-sm-3 bg-warning text-white scheme">
                                   <h6>Assign</h6>
                             </div>
                             <div class="col-sm-3 bg-success text-white scheme">
                                   <h6>Complete</h6>
                             </div>
                         @else
                             <div class="col-sm-3 bg-secondary text-white scheme">
                                  <h6>Rejected</h6>
                             </div>
                         @endif
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
@endsection